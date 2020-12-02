<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use AppBundle\Form\ImageEditType;

class MemberEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        //->add('code')
        ->add('name', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('email', EmailType::class, ['attr' => ['class' => 'form-control ']])
        ->add('phone', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('work', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('status', EntityType::class, [
            'class'        => 'AppBundle:Status',
            'choice_label' => 'name',
            'multiple'     => false,
            'attr'         => ['class' => 'form-control']])
       // ->add('date')  
        ->add('image', ImageEditType::class);
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
        return 'appbundle_edit_member';
    }


}
