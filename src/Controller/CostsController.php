<?php
namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Event;
use Symfony\Component\Security\Core\User\UserInterface;

class CostsController extends BaseAdminController
{
    protected function editAction()
    {
        $this->dispatch(EasyAdminEvents::PRE_EDIT);

        $id = $this->request->query->get('id');
        $easyadmin = $this->request->attributes->get('easyadmin');
        $entity = $easyadmin['item'];

        if ($this->request->isXmlHttpRequest() && $property = $this->request->query->get('property')) {
            $newValue = 'true' === mb_strtolower($this->request->query->get('newValue'));
            $fieldsMetadata = $this->entity['list']['fields'];

            if (!isset($fieldsMetadata[$property]) || 'toggle' !== $fieldsMetadata[$property]['dataType']) {
                throw new \RuntimeException(sprintf('The type of the "%s" property is not "toggle".', $property));
            }

            $this->updateEntityProperty($entity, $property, $newValue);

            // cast to integer instead of string to avoid sending empty responses for 'false'
            return new Response((int)$newValue);
        }

        $editForm = $this->executeDynamicMethod('create<EntityName>EditForm', array($entity, $fields));
        $deleteForm = $this->createDeleteForm($this->entity['name'], $id);
        $editForm->handleRequest($this->request);
        if ($editForm->isSubmitted()) {
            if ($editForm->isValid()) {
                $this->dispatch(EasyAdminEvents::PRE_UPDATE, array('entity' => $entity));

                $this->executeDynamicMethod('preUpdate<EntityName>Entity', array($entity, true));
                $this->executeDynamicMethod('update<EntityName>Entity', array($entity, $editForm));

                $this->dispatch(EasyAdminEvents::POST_UPDATE, array('entity' => $entity));

                return $this->redirectToReferrer();
            }
        }

        $this->dispatch(EasyAdminEvents::POST_EDIT);

        $parameters = array(
            'form' => $editForm->createView(),
            'entity_fields' => $fields,
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );

        return $this->executeDynamicMethod(
            'render<EntityName>Template',
            array('edit', $this->entity['templates']['edit'], $parameters)
        );
    }

    /**
     * The method that is executed when the user performs a 'new' action on an entity.
     *
     * @param $year
     * @return Response|RedirectResponse
     */
    protected function newAction()
    {
        $this->dispatch(EasyAdminEvents::PRE_NEW);
        $entity = $this->executeDynamicMethod('createNew<EntityName>Entity');
        dump($entity);
        $easyadmin = $this->request->attributes->get('easyadmin');
        $easyadmin['item'] = $entity;
        $this->request->attributes->set('easyadmin', $easyadmin);

        $fields = $this->entity['new']['fields'];
        dump($this->entity['new']['fields']);
        $newForm = $this->executeDynamicMethod('create<EntityName>NewForm', array($entity, $fields));

        $newForm->handleRequest($this->request);
        if ($newForm->isSubmitted()) {
            dump($newForm);
            $entity->setCreateDate(date_create());
            $user = $this->getUser();
            $entity->setCreateUser($user);
            dump($user->getId());
            if ($newForm->isValid()) {
                $this->dispatch(EasyAdminEvents::PRE_PERSIST, array('entity' => $entity));

                $this->executeDynamicMethod('prePersist<EntityName>Entity', array($entity, true));
                $this->executeDynamicMethod('persist<EntityName>Entity', array($entity, $newForm));

                $this->dispatch(EasyAdminEvents::POST_PERSIST, array('entity' => $entity));

                return $this->redirectToReferrer();
            }
        }

        $this->dispatch(EasyAdminEvents::POST_NEW, array(
            'entity_fields' => $fields,
            'form' => $newForm,
            'entity' => $entity,
        ));

        $parameters = array(
            'form' => $newForm->createView(),
            'entity_fields' => $fields,
            'entity' => $entity,
        );

        return $this->executeDynamicMethod('render<EntityName>Template', array('new', $this->entity['templates']['new'], $parameters));
    }

}