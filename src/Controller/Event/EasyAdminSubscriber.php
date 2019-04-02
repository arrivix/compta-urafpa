<?php
/**
 * Created by PhpStorm.
 * User: delannoy5
 * Date: 17/03/2019
 * Time: 20:53
 */

namespace App\Controller\Event;
use App\Entity\User;
use Doctrine\ORM\Mapping\Id;
use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


/**
 * @property TokenStorageInterface token_storage
 */
class EasyAdminSubscriber implements EventSubscriberInterface
{
    public function __construct(TokenStorageInterface $token_storage)
    {
        $this->token_storage = $token_storage;
        dump($this);
    }
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
            EasyAdminEvents::PRE_UPDATE => 'ReturnUser',
            EasyAdminEvents::PRE_PERSIST => 'ReturnUser'
        ];
    }

    /**
     * @param GenericEvent $event
     */
    public function ReturnUser(GenericEvent $event)
    {
            dump($this);
            $user = $this->token_storage->getToken()->getUser();
            dump($user);
            if (!$user instanceof User) {
                $user = null;
            } else{
            $user=$user->getId();}
            dump($user);
    }
};