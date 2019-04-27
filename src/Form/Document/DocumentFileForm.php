<?php
// src/Form/TaskType.php
namespace App\Form\Document;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Document\DocumentFile;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Entity\File;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class DocumentFileForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('FileName', TextType::class)
            ->add('File', VichFileType::class)
            ->addEventListener(
                FormEvents::POST_SET_DATA,
                array($this, 'onPostSetData'))  ;

    }
    public function onPostSetData(FormEvent $event)
    {
        if ($event->getData() && $event->getData()->getId()) {
            $form = $event->getForm();
            // unset($form['user']);
        }
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => DocumentFile::class,
            ]
        );
    }
}