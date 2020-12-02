<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
class DonationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, ['attr' => ['class' => 'form-control comment_input comment_input_name']])
        ->add('surname', TextType::class, ['attr' => ['class' => 'form-control comment_input comment_input_surname']])
        ->add('email', EmailType::class, ['attr' => ['class' => 'form-control comment_input comment_input_email']])
        
        ->add('amount', IntegerType::class, ['attr' => ['class' => 'form-control participation comment_input comment_input_amount']])
        ->add('payMethod', ChoiceType::class, [
            'choices'   => [
              'bankAccount' => 'bankAccount',
              'payPal' => 'payPal',
              'visa' => 'visa'],
            'expanded' => true,
            'attr'     => ['class' => 'form-control flat-yellow']])
        ->add('newsletterAccept', CheckboxType::class, ['attr' => ['class' => '']])
        ->add('conditionsAccept', CheckboxType::class, ['attr' => ['class' => '']])
        ->add('maskDonatorAccept', CheckboxType::class, ['attr' => ['class' => '']])  
        ->add('cause', HiddenType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_donation';
    }


}
