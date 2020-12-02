<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Command/DebugCommand.php';

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load('getForm_RegistryService.php')) && false ?: '_'}, [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'AppBundle\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type'], [0 => 'AppBundle\\Form\\ArticleDeleteType', 1 => 'AppBundle\\Form\\ArticleMakeVisibleType', 2 => 'AppBundle\\Form\\ArticleSoftDeleteType', 3 => 'AppBundle\\Form\\ArticleType', 4 => 'AppBundle\\Form\\BlogReviewType', 5 => 'AppBundle\\Form\\CatalogueDeleteType', 6 => 'AppBundle\\Form\\CatalogueEditType', 7 => 'AppBundle\\Form\\CatalogueType', 8 => 'AppBundle\\Form\\CauseDeleteType', 9 => 'AppBundle\\Form\\CauseType', 10 => 'AppBundle\\Form\\ContributionOnlinePayType', 11 => 'AppBundle\\Form\\ContributionType', 12 => 'AppBundle\\Form\\DonationType', 13 => 'AppBundle\\Form\\EmailCatchType', 14 => 'AppBundle\\Form\\ImageEditType', 15 => 'AppBundle\\Form\\ImageType', 16 => 'AppBundle\\Form\\MediaDeleteType', 17 => 'AppBundle\\Form\\MediaType', 18 => 'AppBundle\\Form\\MemberDeleteType', 19 => 'AppBundle\\Form\\MemberEditType', 20 => 'AppBundle\\Form\\MemberType', 21 => 'AppBundle\\Form\\PageType', 22 => 'AppBundle\\Form\\PayPalType', 23 => 'AppBundle\\Form\\ProjectCategoryDeleteType', 24 => 'AppBundle\\Form\\ProjectCategoryEditType', 25 => 'AppBundle\\Form\\ProjectCategoryType', 26 => 'AppBundle\\Form\\ReviewDeleteType', 27 => 'AppBundle\\Form\\ReviewEditType', 28 => 'AppBundle\\Form\\ReviewType', 29 => 'AppBundle\\Form\\StatusDeleteType', 30 => 'AppBundle\\Form\\StatusEditType', 31 => 'AppBundle\\Form\\StatusType', 32 => 'AppBundle\\Form\\StripePayType', 33 => 'AppBundle\\Form\\TagDeleteType', 34 => 'AppBundle\\Form\\TagEditType', 35 => 'AppBundle\\Form\\TagType', 36 => 'AppBundle\\Form\\VolonteerDeleteType', 37 => 'AppBundle\\Form\\VolonteerEditAdminType', 38 => 'AppBundle\\Form\\VolonteerEditType', 39 => 'AppBundle\\Form\\VolonteerType', 40 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 41 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 42 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 43 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 44 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 45 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 46 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 47 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 48 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
