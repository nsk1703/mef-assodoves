<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class StripePayType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('phone', TextType::class, ['attr' => ['class' => 'field']])
        ->add('email', TextType::class, ['attr' => ['class' => 'field']])
        ->add('username', TextType::class, ['attr' => ['class' => 'field longField']])
        ->add('amount', IntegerType::class, ['attr' => ['class' => 'field text-center amount longField','min'=>'1', 'value'=> '1','style'=>'font-size:20px;color:#00b8b1;']])
        ->add('accountName', TextType::class, ['attr' => ['class' => 'field']])
        ->add('secure_token', HiddenType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_secure_stripe_pay';
    }


}
