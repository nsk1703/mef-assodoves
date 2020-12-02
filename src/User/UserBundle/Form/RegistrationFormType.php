<?php
namespace User\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationFormType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
	        ->remove('username');  
    }

    public function getParent(){
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

	  public function getBlockPrefix()
	 {
	     return 'app_user_registration';
	 }


    public function getName(){
        return $this->getBlockPrefix();
    }


}
