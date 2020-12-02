<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ContributionOnlinePayType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, ['attr' => ['class' => 'form-control']])
        ->add('email', EmailType::class, ['attr' => ['class' => 'form-control']])
        ->add('companyName', TextType::class, ['attr' => ['class' => 'form-control']])
        ->add('companyWebSite', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('country', EntityType::class, [
            'class'        => 'AppBundle:Country',
            'choice_label' => 'name',
            'multiple'     => false,
            'attr'         => ['class' => 'form-control selectpicker', 'data-live-search' =>'true']])
        ->add('conditionsAccept', CheckboxType::class, ['attr' => ['class' => '']])
        ->add('payMethod', ChoiceType::class, [
            'choices'   => [
              'bankAccount' => 'bankAccount',
              'payPal' => 'payPal',
              'visa' => 'visa'],
            'expanded' => true,
            'attr'         => ['class' => 'form-control flat-yellow']])
            ->add('product', HiddenType::class);;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_add_contribution';
    }


}
