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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_f6f45a460d9c02eebbafbab6615316f2cd48891579d8c5d1c88c8433860f14e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 1
        echo "

<style>
body{
\tbackground-color: #f8f9f9;
}

</style>



";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "\t<div class=\"alert alert-error col-lg-12\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 15
        echo "\t
<div class=\"page-margin-modif\" style=\"margin-top:50px; margin-bottom:180px;\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 col-12\">
\t\t\t\t<div class=\"card\" style=\" background-color: #fff;
\t\t\tborder-radius:4px; margin-bottom:30px;
\t\t\t\tbox-shadow: 0px 3px 6px 1px rgba(0,0,0,.07);\">

\t\t\t\t\t<div class=\"card-body\" style=\"padding: 30px; \">

\t\t\t\t\t\t<h2 style=\"font-size: 22px;
\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\tline-height: 26px;
\t\t\t\t\t\tcolor: #00b8b1;
\t\t\t\t\t\tmargin-top: 0;\">Sign in</h2>
\t\t\t\t\t\t<p class=\"subHead marB20\">
\t\t\t\t\t\t\tPlease provide your Email and Password
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<form  action=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 35
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\">Email address</label>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\"  id=\"username\" name=\"_username\" placeholder=\"\" required>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"\" required>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"checkbox\" style=\"margin-top:10px; font-size: 12px;\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" class=\"flat-yellow\" name=\"_remember_me checkbox\" value=\"on\"> Remember me\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <button class=\"btn\" id=\"checkUser\" type=\"submit\" style=\"font-size: 13px !important;
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
\t\t\t\t\t\t  box-shadow: 0 2px 12px -6px #00b8b1!important;\">Sign In</button>

\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-12\">
\t\t\t\t<div class=\"card\" style=\" background-color: #fff;
\t\t\t\tpadding: 30px; border-radius:4px;
\t\t\t\ttext-align: center; box-shadow: 0px 1px 12px 1px rgba(50,69,76,.1);\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\" style=\"font-size: 15px;
\t\t\t\t\tfont-weight: 700;
\t\t\t\t\tline-height: 20px;
\t\t\t\t\tcolor: #3e4153;
\t\t\t\t\tmargin: 0;\">Not registered yet?</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"card-text\" style=\"font-size: 14px;
\t\t\t\t\tfont-weight: 400;
\t\t\t\t\tline-height: 22px;
\t\t\t\t\tcolor: #3e4153;
\t\t\t\t\tmargin: 15px 0;\">Register now to post, edit, and manage ads. It’s quick, easy, and free!</p>
\t\t\t\t\t<a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
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
\t\t\t\t\t\">Register Now</a>

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
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 90,  97 => 38,  91 => 36,  89 => 35,  85 => 34,  64 => 15,  58 => 14,  56 => 13,  43 => 1,);
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
{% if error %}
\t<div class=\"alert alert-error col-lg-12\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}\t
<div class=\"page-margin-modif\" style=\"margin-top:50px; margin-bottom:180px;\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 col-12\">
\t\t\t\t<div class=\"card\" style=\" background-color: #fff;
\t\t\tborder-radius:4px; margin-bottom:30px;
\t\t\t\tbox-shadow: 0px 3px 6px 1px rgba(0,0,0,.07);\">

\t\t\t\t\t<div class=\"card-body\" style=\"padding: 30px; \">

\t\t\t\t\t\t<h2 style=\"font-size: 22px;
\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\tline-height: 26px;
\t\t\t\t\t\tcolor: #00b8b1;
\t\t\t\t\t\tmargin-top: 0;\">Sign in</h2>
\t\t\t\t\t\t<p class=\"subHead marB20\">
\t\t\t\t\t\t\tPlease provide your Email and Password
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<form  action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t\t\t\t\t{% if csrf_token %}
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\">Email address</label>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\"  id=\"username\" name=\"_username\" placeholder=\"\" required>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"\" required>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"checkbox\" style=\"margin-top:10px; font-size: 12px;\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" class=\"flat-yellow\" name=\"_remember_me checkbox\" value=\"on\"> Remember me\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <button class=\"btn\" id=\"checkUser\" type=\"submit\" style=\"font-size: 13px !important;
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
\t\t\t\t\t\t  box-shadow: 0 2px 12px -6px #00b8b1!important;\">Sign In</button>

\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-12\">
\t\t\t\t<div class=\"card\" style=\" background-color: #fff;
\t\t\t\tpadding: 30px; border-radius:4px;
\t\t\t\ttext-align: center; box-shadow: 0px 1px 12px 1px rgba(50,69,76,.1);\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\" style=\"font-size: 15px;
\t\t\t\t\tfont-weight: 700;
\t\t\t\t\tline-height: 20px;
\t\t\t\t\tcolor: #3e4153;
\t\t\t\t\tmargin: 0;\">Not registered yet?</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"card-text\" style=\"font-size: 14px;
\t\t\t\t\tfont-weight: 400;
\t\t\t\t\tline-height: 22px;
\t\t\t\t\tcolor: #3e4153;
\t\t\t\t\tmargin: 15px 0;\">Register now to post, edit, and manage ads. It’s quick, easy, and free!</p>
\t\t\t\t\t<a href=\"{{ path('fos_user_registration_register') }}\" class=\"card-link\"
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
\t\t\t\t\t\">Register Now</a>

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


", "@FOSUser/Security/login_content.html.twig", "C:\\wamp\\www\\mef-assodoves\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
