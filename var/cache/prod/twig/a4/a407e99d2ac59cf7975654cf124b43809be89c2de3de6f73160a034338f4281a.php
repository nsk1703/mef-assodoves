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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_1e13dac5eeb55a46a4bc7d96b48cf5f32e687859cb19e27c3e59368654189c65 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=\"author\" content=\"Gardania academy\">

         <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome5.4.1/css/all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">

    </head>


<style type=\"text/css\">

.home_btn{

    margin-top:10px; 
    text-transform: uppercase;

}


.navigation_links a {

    font-weight:600;
    color:#40403E; 
    padding-right:5px;
    padding-left :5px; 
    border-right: 1px solid #ccc;  
    font-size:14px;
}


.navigation_links a:last-child {


    border-right: none;  
    
}


.follow_us_contents
{
  margin-top: 32px;
}
.social
{
  margin-top: 20px;
}
.social li
{
  margin-right: 12px;
}
.social li:last-child
{
  margin-right: 0px;
}
.social li a
{
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}
.social li a i
{
  color: #FFFFFF;
}
.social li:hover a
{
  transform: translateY(-5px);
  box-shadow: 0px 10px 20px rgba(0,0,0,0.3);
}


</style>


<style>
    .error_container{

        margin-top:30px;
    }



    .logo-404 img{
    
    width:150px; 
    height:50px;
    }
    
    .social {
        margin-left: -50px;

    }    
    .social li{
        display: inline-block;
        vertical-align: top;

    }

    .error_img img
    {
        height:400px;
    }

/************
14. 992px
************/

@media only screen and (max-width: 992px)
{

    
    .error_container h3{
        font-size:18px;
    }
}

    
/************
14. 500px
************/

@media only screen and (max-width: 500px)
{

    .home_btn{

        width: 100%;
    }
 
    .error_img img
    {
        height: 300px;
    }

    .error_container h3{
        font-size:16px;
    }
    .error_container p{
        font-size:14px;
    }
    
    
    
}


/************
14. 400px
************/

@media only screen and (max-width: 400px)
{




    .error_img img
    {
        height: 250px;
    }

    .error_container h3{
        font-size:18px;
    }
    .error_container p{
        font-size:13px;
    }
    
    .logo-404 img{
    
        width:120px; 
        height:40px;
    }
    

}


/************
14. 400px
************/

@media only screen and (max-width: 350px)
{

    .navigation_links a {

        font-size:12px;
        font-weight:500;
    }
}




</style>



<body>

<div class=\"super_container\">

    <div class=\"container text-center error_container\">
        <div class=\"col-12\">
               
            <div class=\"logo-404\" style=\"margin-top: 40px;\">
                <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/404.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:100%; height:auto;\" />
            </div>
        
            <h3 style=\"margin-top:50px;\"><b>OPPS! ";
        // line 232
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</b> We Couldn’t Find this Page</h3>
            <p>The page you are looking for is ";
        // line 233
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "  </p>
            
        
                
            <a href=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\"  class=\"btn btn-primary home_btn\">Aller à la page d'acceuil</a>
            <div class=\"col text-center\">
            
                <div class=\"text-center navigation_links\" style=\"margin-top:30px;
                margin-bottom:30px;\">
                    <a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
        echo "\">About</a> 
                    <a href=\"";
        // line 243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_blog");
        echo "\">Our blog</a> 

                </div>  
            </div>

        </div>
         

        
    </div>
    
</div>

</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Association les colombes";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 9,  306 => 243,  302 => 242,  294 => 237,  287 => 233,  283 => 232,  277 => 229,  58 => 13,  54 => 12,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error.html.twig", "/home/c1462208c/public_html/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
