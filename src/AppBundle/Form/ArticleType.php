<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\ImageType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; 
class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('title_en', TextType::class, ['attr' => ['class' => 'form-control ']])
        ->add('content', TextareaType::class, ['attr' => ['rows' => '8', 'class' => ' form-control summernote']])
        ->add('content_en', TextareaType::class, ['attr' => ['rows' => '8', 'class' => ' form-control summernote']])
        ->add('image', ImageType::class)
        ->add('catalogue', EntityType::class, [
            'class'        => 'AppBundle:Catalogue',
            'choice_label' => 'name',
            'multiple'     => false,
            'attr'         => ['class' => 'form-control selectpicker', 'data-live-search' =>'true']])   ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_article';
    }


}