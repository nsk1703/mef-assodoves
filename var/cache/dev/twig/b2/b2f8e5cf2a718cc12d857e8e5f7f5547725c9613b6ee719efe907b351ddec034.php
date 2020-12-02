<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_f6ee99e89c48b00ce02a77fa37a7e461d98534c609d00b0fb876b195321116b7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "

<style>
body{
\tbackground-color: #f8f9f9;
}

</style>



";
        // line 13
        echo "
<div class=\"page-margin-modif\" style=\"margin-top:50px; margin-bottom:180px;\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 col-12\">
\t\t\t\t<div class=\"card\" style=\" background-color: #fff;
\t\t\tborder-radius:4px; margin-bottom:30px;
\t\t\t\tbox-shadow: 0px 3px 6px 1px rgba(0,0,0,.07);\">

\t\t\t\t\t<div \"card-body\" style=\"padding: 30px; \">
\t\t\t\t\t\t<h2 style=\"font-size: 22px;
\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\tline-height: 26px;
\t\t\t\t\t\tcolor: #00b8b1;
\t\t\t\t\t\tmargin-top: 0;\">Sign Up</h2>
\t\t\t\t\t\t<p class=\"subHead marB20\">
\t\t\t\t\t\t\tPlease provide your Email and Password
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "commonView"]]);
        echo "
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => ""], "label" => "Email"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email address"]]);
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), "first", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => ""], "label" => "Password"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), "first", [], "any", false, false, false, 41), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), "first", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo "

\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), "second", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => ""], "label" => "R-Type password"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), "second", [], "any", false, false, false, 47), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), "second", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmer le mot de passe"]]);
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t  \t</div>

\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'rest');
        echo " 
\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'widget');
        echo " 
\t\t\t\t\t\t\t


\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button class=\"btn \" type=\"submit\"  style=\"font-size: 13px !important;
\t\t\t\t\t\t  background-color: #00b8b1;
\t\t\t\t\t\t  padding: 15px 30px !important;
\t\t\t\t\t\t\t  font-weight: 500 !important;
\t\t\t\t\t\t\t  border-radius: 4px;
\t\t\t\t\t\t\t  text-transform: uppercase;
\t\t\t\t\t\t\t  border:none;
\t\t\t\t\t\t\t  color:#fff;
\t\t\t\t\t\t\t  font-weight:500;
\t\t\t\t\t\t\t  font-size:13px;
\t\t\t\t\t\t  border-radius:4px;
\t\t\t\t\t\t  box-shadow: 0 2px 12px -6px #00b8b1!important;\">Sign Up</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-12\">
\t\t\t\t<div class=\"card mb-3\" style=\"background-color: #fff;
\t\t\t\tpadding: 30px; border-radius:4px;
\t\t\t\ttext-align: center; box-shadow: 0px 1px 12px 1px rgba(50,69,76,.1);\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title mb-3\" style=\"font-size: 15px;
\t\t\t\t\tfont-weight: 700;
\t\t\t\t\tline-height: 20px;
\t\t\t\t\tcolor: #3e4153;
\t\t\t\t\t
\t\t\t\t\tmargin: 0;\">Already Registered?</h5>
\t\t\t\t\t
\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\" class=\"card-link\"
\t\t\t\t\tstyle=\"font-size: 13px !important;
\t\t\t\t\tbackground-color: #00b8b1;
\t\t\t\t\tpadding: 10px 20px !important;
\t\t\t\t\t\tfont-weight: 500 !important;
\t\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\tborder:none;
\t\t\t\t\t\tcolor:#fff;
\t\t\t\t\t\tfont-weight:500;
\t\t\t\t\t\tfont-size:13px;
\t\t\t\t\tborder-radius:4px;
\t\t\t\t\tbox-shadow: 0 2px 12px -6px #00b8b1!important;
\t\t\t\t\t\">Sign In</a>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
</div>\t






















\t
\t
\t
\t




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 92,  154 => 73,  131 => 53,  127 => 52,  120 => 48,  116 => 47,  112 => 46,  105 => 42,  101 => 41,  97 => 40,  89 => 35,  85 => 34,  81 => 33,  76 => 31,  56 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<style>
body{
\tbackground-color: #f8f9f9;
}

</style>



{% trans_default_domain 'FOSUserBundle' %}

<div class=\"page-margin-modif\" style=\"margin-top:50px; margin-bottom:180px;\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 col-12\">
\t\t\t\t<div class=\"card\" style=\" background-color: #fff;
\t\t\tborder-radius:4px; margin-bottom:30px;
\t\t\t\tbox-shadow: 0px 3px 6px 1px rgba(0,0,0,.07);\">

\t\t\t\t\t<div \"card-body\" style=\"padding: 30px; \">
\t\t\t\t\t\t<h2 style=\"font-size: 22px;
\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\tline-height: 26px;
\t\t\t\t\t\tcolor: #00b8b1;
\t\t\t\t\t\tmargin-top: 0;\">Sign Up</h2>
\t\t\t\t\t\t<p class=\"subHead marB20\">
\t\t\t\t\t\t\tPlease provide your Email and Password
\t\t\t\t\t\t</p>
\t\t\t\t\t\t{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'commonView'}}) }}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_label(form.email, \"Email\", {'label_attr': {'class': ''}}) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.email, {'attr': {'class':'form-control', 'placeholder':'Email address'}}) }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.first, \"Password\", {'label_attr': {'class': ''}}) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.plainPassword.first) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.plainPassword.first, {'attr': {'class':'form-control', 'placeholder':'Password'}}) }}

\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.second, \"R-Type password\", {'label_attr': {'class': ''}}) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.plainPassword.second) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.plainPassword.second, {'attr': {'class':'form-control', 'placeholder':'Confirmer le mot de passe'}}) }}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t  \t</div>

\t\t\t\t\t\t\t{{ form_rest(form) }} 
\t\t\t\t\t\t\t{{ form_widget(form) }} 
\t\t\t\t\t\t\t


\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button class=\"btn \" type=\"submit\"  style=\"font-size: 13px !important;
\t\t\t\t\t\t  background-color: #00b8b1;
\t\t\t\t\t\t  padding: 15px 30px !important;
\t\t\t\t\t\t\t  font-weight: 500 !important;
\t\t\t\t\t\t\t  border-radius: 4px;
\t\t\t\t\t\t\t  text-transform: uppercase;
\t\t\t\t\t\t\t  border:none;
\t\t\t\t\t\t\t  color:#fff;
\t\t\t\t\t\t\t  font-weight:500;
\t\t\t\t\t\t\t  font-size:13px;
\t\t\t\t\t\t  border-radius:4px;
\t\t\t\t\t\t  box-shadow: 0 2px 12px -6px #00b8b1!important;\">Sign Up</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-12\">
\t\t\t\t<div class=\"card mb-3\" style=\"background-color: #fff;
\t\t\t\tpadding: 30px; border-radius:4px;
\t\t\t\ttext-align: center; box-shadow: 0px 1px 12px 1px rgba(50,69,76,.1);\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title mb-3\" style=\"font-size: 15px;
\t\t\t\t\tfont-weight: 700;
\t\t\t\t\tline-height: 20px;
\t\t\t\t\tcolor: #3e4153;
\t\t\t\t\t
\t\t\t\t\tmargin: 0;\">Already Registered?</h5>
\t\t\t\t\t
\t\t\t\t\t<a href=\"{{ path('fos_user_security_login') }}\" class=\"card-link\"
\t\t\t\t\tstyle=\"font-size: 13px !important;
\t\t\t\t\tbackground-color: #00b8b1;
\t\t\t\t\tpadding: 10px 20px !important;
\t\t\t\t\t\tfont-weight: 500 !important;
\t\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\t\tborder:none;
\t\t\t\t\t\tcolor:#fff;
\t\t\t\t\t\tfont-weight:500;
\t\t\t\t\t\tfont-size:13px;
\t\t\t\t\tborder-radius:4px;
\t\t\t\t\tbox-shadow: 0 2px 12px -6px #00b8b1!important;
\t\t\t\t\t\">Sign In</a>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
</div>\t






















\t
\t
\t
\t




", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\mef-assodoves\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
