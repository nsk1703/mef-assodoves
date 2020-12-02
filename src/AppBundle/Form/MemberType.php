<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Form\ImageType;

class MemberType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('company_name', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('email', EmailType::class, ['attr' => ['class' => 'form-control ']])
        ->add('company_email', EmailType::class, ['attr' => ['class' => 'form-control ']])
        ->add('phone', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('company_phone', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('company_activity', TextareaType::class, ['attr' => ['class' => 'form-control ','rows' =>'4']])
        ->add('gender', ChoiceType::class, [
            'choices'   => [
                'Homme' => 'homme',
                'Femme' => 'femme'],
            'expanded' => true,
            'attr'         => ['class' => '']])
        ->add('country', EntityType::class, [
            'class'        => 'AppBundle:Country',
            'choice_label' => 'nicename',
            'multiple'     => false,
            'attr'         => ['class' => 'form-control ', 'data-live-search' =>'true']])
        ->add('work', TextareaType::class, ['attr' => ['class' => 'form-control','rows' =>'3']])
        ->add('image', ImageType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Member'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_member';
    }


}
