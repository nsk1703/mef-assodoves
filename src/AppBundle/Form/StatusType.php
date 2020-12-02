<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
class StatusType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('price', NumberType::class, ['attr' => ['class' => 'form-control ']])
        ->add('companyNameShow', ChoiceType::class, [
            'choices'   => [
                'Oui' => '1',
                'Non' => '0'],
            'expanded' => false,
            'attr'         => ['class' => 'form-control selectpicker']])
        ->add('companyWebsiteShow', ChoiceType::class, [
            'choices'   => [
                'Oui' => '1',
                'Non' => '0'],
            'expanded' => false,
            'attr'         => ['class' => 'form-control selectpicker']])
            ->add('companyLogoShow', ChoiceType::class, [
                'choices'   => [
                  'Oui' => '1',
                  'Non' => '0'],
                'expanded' => false,
                'attr'         => ['class' => 'form-control selectpicker']])
                
            ;            
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Status'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_status';
    }


}
