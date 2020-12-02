<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ContributionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('amount', IntegerType::class, ['attr' => ['class' => 'form-control ']])
        ->add('member', EntityType::class, [
            'class'        => 'AppBundle:Member',
            'choice_label' => 'name',
            'multiple'     => false,
            'attr'         => ['class' => 'form-control selectpicker', 'data-live-search' =>'true']])   ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_add_contribution';
    }


}
