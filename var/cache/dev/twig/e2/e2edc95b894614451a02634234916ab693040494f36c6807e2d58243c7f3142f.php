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

/* layout/checkout.html.twig */
class __TwigTemplate_c3bad2b46cd8cbf6a8330cdd4505508c7c18913f778a5e486da0072727725244 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/checkout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>Paiement</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

 <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome5.4.1/css/all.min.css"), "html", null, true);
        echo "\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/checkout.css"), "html", null, true);
        echo "\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/checkout-responsive.css"), "html", null, true);
        echo "\">
  ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body stylesheet=\"background: #ffff;\">
  <style>
    .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/preloader.gif"), "html", null, true);
        echo "') center no-repeat #fff; 
  }
  
  </style>
  <div class=\"loader\"></div>
    <div class=\"page-content\">
        <header   style=\"height:60px;background: #fff;
        transition: all 0.5s;
        box-shadow: unset;
        height: 60px;
        left: 0px;
        right: 0px;
        top: 0px;
        border-bottom: 1px solid #ededed;
        border-radius: 0px;
        background-color: #fff;\">
        
          <div class=\"container \">
            <div class=\"mobile-nav d-lg-none d-block\" style=\"position:absolute; top:2%;\">
              <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" style=\"padding:8px 20px;\"> 
                <span class=\"fa fa-arrow-left\" style=\"font-size:20px;color: #00b8b1; position:relative; left:-10px;\"></span>
              </a>
              <span style=\"font-size: 20px; font-weight:500; color: #00b8b1;\">Payement de don</span>
            </div>
            <div class=\"desktop-nav d-lg-block d-none\">
              <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" style=\"position: absolute; left:10%; color: #00b8b1; top:3%; font-weight:500; text-transform:uppercase;\"> 
                <span class=\"fa fa-angle-left\" style=\"font-size:30px;color: #00b8b1; margin-right:5px;\"></span>
                <span style=\"position:relative; top:-5px; left:5px; font-size:15px;\">Retour</span> 
              </a>
              <div class=\"text-center\">
                <div class=\"logo-container \" style=\"display: inline-block; vertical-align:top; padding-top:13px;\">
                  <div class=\"logo\" style=\"display: inline-block; vertical-align:top;\">
                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"height: 40px;
                      max-height: 250px; margin-top:-5px;\"/>
                  </div>
                  <div class=\"secure-pay-text\" style=\"display: inline-block; vertical-align:top; margin-top:8px; margin-left:10px; border-left:1px solid #00c290\">
                    <span style=\"font-size: 16px; font-weight:500; position:relative; top:2px;left:10px; color: #00b8b1; text-transform:uppercase;\">
                      <span class=\"fa fa-shield-alt\" style=\"font-size: 20px; margin-right:5px;\"></span> Paiement sécurisé
                    </span> </div>

                </div>              
              </div>
            </div>


          </div>
        </header>
        ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "    </div>
    
    <script src=\"https://www.paypal.com/sdk/js?client-id=AVHlVqBXrWruPRnSTwl_F-0OZ_5jvH6ge3dDJlPWePdRHkGPmk1-3SOThr6jpaRMhoCL6nrOWqdWXYUe&currency=EUR\"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
    </script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>\t
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
           \t// Loading page
      var loaderPage = function() {
        \$(\".loader\").fadeOut(\"slow\");
      };

      \$(function(){

        loaderPage();
      
      
      });


//ajax submit new entity form data
\$(\"#payment-form\").submit(function(event){
    event.preventDefault(); //prevent default action    
    var post_url = \$(this).attr(\"action\"); //get form action url
    var request_method = \$(this).attr(\"method\"); //get form GET/POST method
\tvar form_data = new FormData(this); //Creates new FormData object
    \$.ajax({
        url : post_url,
        type: request_method,
        data : form_data,
\t\tcontentType: false,
\t\tcache: false,
        processData:false,

        success : function(){
       
            
        }
    }).done(function(){ //
       
    });

}); 





    </script>
    ";
        // line 127
        $this->displayBlock('javascript', $context, $blocks);
        // line 128
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 127,  251 => 73,  233 => 15,  221 => 128,  219 => 127,  171 => 82,  167 => 81,  163 => 80,  159 => 79,  155 => 78,  149 => 74,  147 => 73,  129 => 58,  119 => 51,  110 => 45,  88 => 26,  76 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>Paiement</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

 <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/fontawesome5.4.1/css/all.min.css') }}\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/bootstrap4/bootstrap.min.css') }}\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/checkout.css') }}\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/checkout-responsive.css') }}\">
  {% block stylesheets %}{% endblock %}
</head>
<body stylesheet=\"background: #ffff;\">
  <style>
    .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('{{ asset('images/preloader.gif') }}') center no-repeat #fff; 
  }
  
  </style>
  <div class=\"loader\"></div>
    <div class=\"page-content\">
        <header   style=\"height:60px;background: #fff;
        transition: all 0.5s;
        box-shadow: unset;
        height: 60px;
        left: 0px;
        right: 0px;
        top: 0px;
        border-bottom: 1px solid #ededed;
        border-radius: 0px;
        background-color: #fff;\">
        
          <div class=\"container \">
            <div class=\"mobile-nav d-lg-none d-block\" style=\"position:absolute; top:2%;\">
              <a href=\"{{path('app_home_page')}}\" style=\"padding:8px 20px;\"> 
                <span class=\"fa fa-arrow-left\" style=\"font-size:20px;color: #00b8b1; position:relative; left:-10px;\"></span>
              </a>
              <span style=\"font-size: 20px; font-weight:500; color: #00b8b1;\">Payement de don</span>
            </div>
            <div class=\"desktop-nav d-lg-block d-none\">
              <a href=\"{{path('app_home_page')}}\" style=\"position: absolute; left:10%; color: #00b8b1; top:3%; font-weight:500; text-transform:uppercase;\"> 
                <span class=\"fa fa-angle-left\" style=\"font-size:30px;color: #00b8b1; margin-right:5px;\"></span>
                <span style=\"position:relative; top:-5px; left:5px; font-size:15px;\">Retour</span> 
              </a>
              <div class=\"text-center\">
                <div class=\"logo-container \" style=\"display: inline-block; vertical-align:top; padding-top:13px;\">
                  <div class=\"logo\" style=\"display: inline-block; vertical-align:top;\">
                    <img src=\"{{ asset('images/logo.png')}}\" alt=\"\" title=\"\" style=\"height: 40px;
                      max-height: 250px; margin-top:-5px;\"/>
                  </div>
                  <div class=\"secure-pay-text\" style=\"display: inline-block; vertical-align:top; margin-top:8px; margin-left:10px; border-left:1px solid #00c290\">
                    <span style=\"font-size: 16px; font-weight:500; position:relative; top:2px;left:10px; color: #00b8b1; text-transform:uppercase;\">
                      <span class=\"fa fa-shield-alt\" style=\"font-size: 20px; margin-right:5px;\"></span> Paiement sécurisé
                    </span> </div>

                </div>              
              </div>
            </div>


          </div>
        </header>
        {% block content %}{% endblock %}
    </div>
    
    <script src=\"https://www.paypal.com/sdk/js?client-id=AVHlVqBXrWruPRnSTwl_F-0OZ_5jvH6ge3dDJlPWePdRHkGPmk1-3SOThr6jpaRMhoCL6nrOWqdWXYUe&currency=EUR\"> // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
    </script>
    <script src=\"{{ asset('plugins/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap4/bootstrap.min.js') }}\"></script>\t
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
           \t// Loading page
      var loaderPage = function() {
        \$(\".loader\").fadeOut(\"slow\");
      };

      \$(function(){

        loaderPage();
      
      
      });


//ajax submit new entity form data
\$(\"#payment-form\").submit(function(event){
    event.preventDefault(); //prevent default action    
    var post_url = \$(this).attr(\"action\"); //get form action url
    var request_method = \$(this).attr(\"method\"); //get form GET/POST method
\tvar form_data = new FormData(this); //Creates new FormData object
    \$.ajax({
        url : post_url,
        type: request_method,
        data : form_data,
\t\tcontentType: false,
\t\tcache: false,
        processData:false,

        success : function(){
       
            
        }
    }).done(function(){ //
       
    });

}); 





    </script>
    {% block javascript %}{% endblock %}
</body>
</html>
", "layout/checkout.html.twig", "C:\\wamp\\www\\mef-assodoves\\app\\Resources\\views\\layout\\checkout.html.twig");
    }
}
