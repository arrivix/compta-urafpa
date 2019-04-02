<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as SymfonyController;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use App\Entity\LigneBudget;
use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;

 
class LigneBudgetController extends BaseAdminController
{
	public function updateLigneBudgetEntity($entity)
    {
        $entity->setModificationUser($this->getUser()->getId());
		$entity->setModificationDate(new \DateTime("now"));
        parent::updateEntity($entity);
    }
	public function persistLigneBudgetEntity($entity)
    {
        $entity->setCreateUser($this->getUser()->getId());
		$entity->setCreateTime(new \DateTime("now"));
		$entity->setModificationDate(new \DateTime("now"));

        parent::persistEntity($entity);
    }
}