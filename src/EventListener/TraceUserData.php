<?php
namespace App\EventListener;

use Doctrine\Common\EventSubscriber;
// for Doctrine < 2.4: use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

use Doctrine\ORM\Events;
use App\Entity\User;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;


class TraceUserDate implements EventSubscriber
{

    public function __construct(TokenStorageInterface $token_storage)
    {
        $this->token_storage = $token_storage;
        dump($this);
    }

    public function getSubscribedEvents()
    {
        dump('ok');
        return [
            Events::prePersist,
            Events::preUpdate
        ];

    }
    public function prePersist(LifecycleEventArgs $args)
    {
        $user = $this->token_storage->getToken()->getUser();
        dump($user);
        $entity = $args->getObject();
        dump($entity);
        if (method_exists($entity, 'setModificationUser' )){
            if (!$user instanceof User) {
                $user = null;
            } else{
                $entity->setModificationUser($user);
            }
        }
        if (method_exists($entity, 'setModificationDate' )){
            $entity->setModificationDate();
        }
        if (method_exists($entity, 'setCreateDate' )){
            $entity->setCreateDate();
        }
        dump($entity);
    }
}