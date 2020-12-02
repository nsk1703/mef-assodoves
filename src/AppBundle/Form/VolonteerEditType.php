<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use AppBundle\Form\ImageType;

class VolonteerEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('email', EmailType::class, ['attr' => ['class' => 'form-control ']])
        ->add('phone', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('country', EntityType::class, [
            'class'        => 'AppBundle:Country',
            'choice_label' => 'name',
            'multiple'     => false,
            'attr'         => ['class' => 'form-control']])
        ->add('town', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('work', TextType::class, ['attr' => ['class' => 'form-control ']])
        
        ;
        //->add('confirmation_status')
        //->add('date')
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_volonteer_edit';
    }


}
