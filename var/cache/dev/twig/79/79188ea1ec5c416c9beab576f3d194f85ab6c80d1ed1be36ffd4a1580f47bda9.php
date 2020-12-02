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

/* layout/base.html.twig */
class __TwigTemplate_dd66831f65608037024b465e5b593ecccac0e6f76f63eb906b6249b5f186cb5e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'socialMediaMeta' => [$this, 'block_socialMediaMeta'],
            'content' => [$this, 'block_content'],
            'modals' => [$this, 'block_modals'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"Mef-assodoves\">
    <!-- meta character set -->
    <meta charset=\"UTF-8\">
    <meta name=\"theme-color\" content=\"#00b8b1\">
    <meta name=\"author\" content=\"Gardania academy\">
    <!-- Site Title -->
    <title>Mef-assodoves</title>

 ";
        // line 26
        $this->displayBlock('socialMediaMeta', $context, $blocks);
        // line 29
        echo "        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome5.4.1/css/all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/custom.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/custom_main_responsive.css"), "html", null, true);
        echo "\">
</head>
<style>

    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/preload.gif"), "html", null, true);
        echo ") center no-repeat #fff; 
    }
    

    html body, html .menu-item a {
    
        color: #616161;
        font-size: 14px;
        background-color: #fcfcfc;
    }
    .blog-style-masonry article {
        width: 33.3%;
        float: left;
        margin-bottom: 40px;
    }
    .sh-header-top {
        background-color: #515151!important;
        height:45px;
        padding: 10px;
    }
    
    .main-tagline {
        color: #fff;
        font-size: 12px;
        padding-top: 4px;
    }

    .sh-header-top-meta {
        display: table;
        margin-left: auto;
    }
    .header-social-media:not(:only-child) {
        margin-right: 0;
    }
    .header-social-media:not(:only-child) {
        border-right: 1px solid #434343;
        margin-right: 20px;
        padding-right: 20px;
        width: 100%;
    }
    .sh-header-top-meta>div {
        display: inline-block;
    }
    .header-social-media {
        text-align: right;
    }
    .sh-header-top .sh-nav li.menu-item a, .sh-header-top .header-social-media a, .sh-header-top-date {
        color: #fff;
    }
    .header-social-media a {
        font-size: 16px;
        color: #fff;
        padding-left: 15px;
    }
    .sh-header-top a, .sh-header-top-date {
        transition: color .3s ease-in-out;
    }


    .sh-header-top-meta>div {
        display: inline-block;
    }

    .sh-header-top-date {
        color: #fff;
    }
    .sh-header-top-date {
        padding-right: 50px;
    }
    .sh-header-top-date {
        top: -7px;
        margin-left: 10px;
    }
    .sh-header-top-date {
        font-size: 26px;
        color: #fff;
        font-weight: 700;
        line-height: 1;
        vertical-align: bottom;
        top: -8px;
        right:-80px;
        position: absolute;
    }
    .sh-header-top-date-month {
        font-size: 11px;
        text-transform: uppercase;
    }
    .sh-header-top-date-year {
        font-size: 10px;
    }
    .sh-header-top-date-meta {
        display: inline-block;
        max-width: 24px;
        line-height: .45;
    }

    .container {
        max-width: 1180px;
        overflow: hidden;
    }
    .swal-button{
    background-color: #fff;
    color: rgba(73,73,73,.85);
    border: none;
    box-shadow: none;
    border-radius: none;
    font-weight: 500;
    font-size: 13px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
    }
    .swal-button:hover{
        background-color: #fff;
        border: none;
        box-shadow: none;
    }
</style>

";
        // line 168
        $context["trans_day_hash"] = ["Monday" => "Lun", "Tuesday" => "Mar", "Wednesday" => "Mer", "Thursday" => "Jeu", "Friday" => "Ven", "Saturday" => "Sam", "Sunday" => "Dim"];
        // line 177
        echo "        
";
        // line 178
        $context["trans_month_hash"] = ["January" => "Jan", "Febuary" => "Fev", "March" => "Mar", "April" => "Avr", "May" => "Mai", "June" => "Jui", "July" => "Juil", "August" => "Août", "September" => "Sept", "October" => "Oct", "November" => "Nov", "December" => "Dec"];
        // line 193
        echo "   

";
        // line 195
        $context["trans_year_hash"] = ["18" => "2018", "19" => "2019", "20" => "2020"];
        // line 202
        echo "   



    <body style=\"background: rgb(255, 255, 255); width:100%;\">
        <div class=\"loader\"></div>
            <div class=\"main_page_container\"> 
                <div class=\"sh-header-top d-none d-lg-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"main-tagline\"><span class=\"fa fa-envelope\" style=\"font-size:13px; margin-right:5px;\">
                                    </span> contact@mef-assodoves.org
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"sh-header-top-meta  header-social-media\" style=\"position:relative; left:-50%; top:0px;\">
                                    <a href=\"\" target=\"_blank\" class=\"social-media-facebook\"> 
                                        <i class=\"fab fa-facebook-f\"></i> 
                                    </a>
                                    <a href=\"\" target=\"_blank\" class=\"social-media-youtube\"> 
                                        <i class=\"fab fa-linkedin\"></i> 
                                    </a>
                                    <div class=\"sh-clear\"></div>
                                </div>


                                                            
                                                         

                                <div class=\"sh-header-top-date\" style=\"position:relative; top:-30px; left:50%;\">
                                    <span class=\"sh-header-top-date-day\" style=\"color: #fff;\">";
        // line 233
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
        echo " </span>
                                    <span class=\"sh-header-top-date-meta\">
                                        <span class=\"sh-header-top-date-month\"  style=\"color: #fff;\">   ";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trans_month_hash"]) || array_key_exists("trans_month_hash", $context) ? $context["trans_month_hash"] : (function () { throw new RuntimeError('Variable "trans_month_hash" does not exist.', 235, $this->source); })()), twig_date_format_filter($this->env, "now", "F"), [], "array", false, false, false, 235), "html", null, true);
        echo "  </span>
                                        <span class=\"sh-header-top-date-year\"  style=\"color: #fff;\">";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trans_year_hash"]) || array_key_exists("trans_year_hash", $context) ? $context["trans_year_hash"] : (function () { throw new RuntimeError('Variable "trans_year_hash" does not exist.', 236, $this->source); })()), twig_date_format_filter($this->env, "now", "y"), [], "array", false, false, false, 236), "html", null, true);
        echo "  </span> 
                                    </span>
                                </div>
                                <div style=\"position: absolute; top:2%; right:4%;\">
                                    <ul class=\"d-flex\">
                                        ";
        // line 241
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "request", [], "any", false, false, false, 241), "getLocale", [], "method", false, false, false, 241) == "fr")) {
            echo " 
                                        <li class=\"d-flex\" style=\"font-size: 13px; margin-right:10px; \">
                                            <a href=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "request", [], "any", false, false, false, 243), "get", [0 => "_route"], "method", false, false, false, 243), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "request", [], "any", false, false, false, 243), "get", [0 => "_route_params"], "method", false, false, false, 243), ["_locale" => "fr"])), "html", null, true);
            echo "\" style=\" color: #fff; font-size: 13px;  font-weight:500; \">
                                                <img src=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/flag_2.svg"), "html", null, true);
            echo "\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \">Français 
                                                
                                            </a>  
                                        </li>
                                        <li class=\"d-flex\" style=\"font-size: 13px; \">
                                            <a href=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "get", [0 => "_route"], "method", false, false, false, 249), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "get", [0 => "_route_params"], "method", false, false, false, 249), ["_locale" => "en"])), "html", null, true);
            echo "\"  style=\" color: rgb(204, 204, 204); font-size: 13px;font-weight:500;  \">   
                                                <span style=\"border-right: 1px solid rgb(199, 199, 205); margin-right:16px;\"> </span>
                                                <img src=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/flag_1.svg"), "html", null, true);
            echo "\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \"> English
                                            </a>
                                        </li>
                                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 254
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "request", [], "any", false, false, false, 254), "getLocale", [], "method", false, false, false, 254) == "en")) {
            // line 255
            echo "                                        <li class=\"d-flex\" style=\"font-size: 13px; margin-right:10px; \">
                                            <a href=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 256, $this->source); })()), "request", [], "any", false, false, false, 256), "get", [0 => "_route"], "method", false, false, false, 256), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 256, $this->source); })()), "request", [], "any", false, false, false, 256), "get", [0 => "_route_params"], "method", false, false, false, 256), ["_locale" => "fr"])), "html", null, true);
            echo "\" style=\" color: rgb(204, 204, 204); font-size: 13px; font-weight:500;  \">
                                                <img src=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/flag_2.svg"), "html", null, true);
            echo "\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \">Français 
                                                
                                            </a>  
                                        </li>

                                        <li class=\"d-flex\" style=\"font-size: 13px; \">
                                            <a href=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 263, $this->source); })()), "request", [], "any", false, false, false, 263), "get", [0 => "_route"], "method", false, false, false, 263), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 263, $this->source); })()), "request", [], "any", false, false, false, 263), "get", [0 => "_route_params"], "method", false, false, false, 263), ["_locale" => "en"])), "html", null, true);
            echo "\"  style=\" color: #fff; font-size: 13px; font-weight:500; \">   
                                                <span style=\"border-right: 1px solid rgb(199, 199, 205); margin-right:16px;\"> </span>
                                                <img src=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/flag_1.svg"), "html", null, true);
            echo "\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \"> English
                                            </a>
                                        </li>                                        
                                        ";
        }
        // line 269
        echo "                                        
                                       

                                    </ul>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"header\" class=\"main-header-nav d-none d-lg-block \" style=\"\">
                    <div class=\"container\" style=\"\">
                        <div class=\"row align-items-center justify-content-between d-flex\">
                            <div id=\"logo\" class=\"d-none d-lg-block\">
                                <a href=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" style=\"color:#1e914e; \">
                                    <img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"height: 50px;
                                    max-height: 250px; padding-left:10px;\"/>
                                   <span style=\"text-transform: uppercase; font-weight:600; font-size:16px;\">MEF-ASSOSDOVES </span>
                                </a>
                            </div>
                            <nav id=\"nav-menu-container\" style=\"position:relative; top:1px; left:-15%;\">
                                <ul class=\"nav-menu nav_menu_full\">
                                    <li class=\"menu-active\"><a href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_1"), "html", null, true);
        echo "</a></li>
                                    <li><a href=\"";
        // line 292
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_2"), "html", null, true);
        echo "</a>                           
                                    <li><a href=\"";
        // line 293
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\"  class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_3"), "html", null, true);
        echo "</a></li>
                                    <li><a href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq_page");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_4"), "html", null, true);
        echo "</a></li> 
                                    <li><a  data-toggle=\"modal\" href=\"#fundModal\"  class=\"nav-link\">";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_5"), "html", null, true);
        echo "</a></li>
                                    ";
        // line 296
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 297
            echo "                                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_homepage");
            echo "\" class=\"nav-link\">Admin</a></li>
                                    ";
        }
        // line 299
        echo "                                    
                                </ul>
                            </nav><!-- #nav-menu-container -->\t
                            <div class=\"d-none d-lg-block\" style=\"position: absolute; right:5%;\">
                                <ul class=\"nav-menu nav-menu-full-btns\">
                                    <li>
                                        <a  href=\"";
        // line 305
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fund_checkout_page");
        echo "\" style=\"
                                        text-transform: uppercase;
                                        box-shadow: 0 2px 12px -6px #00b8b1!important;
                                        padding: 6px 20px;
                                        font-size: 13px;
                                        border-radius: 30px;
                                        margin-left: 20px;
                                        line-height: 24px;
                                        font-weight:600;
                                        cursor:pointer;
                                        background-color: #00b8b1;
                                        font-weight: 500 !important;

                                        text-transform: uppercase;
                                        color: #fff;\">
                                        <i class=\"far fa-heart\" style=\"margin-right:10px;\"></i>";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn.donate_btn"), "html", null, true);
        echo "
                                        </a>
                                    </li>
                                </ul>
                            </div>\t    \t\t
                        </div>
                    </div>
                </div>
            <!-- #header -->
            <header class=\"mobile-header d-block d-lg-none\" style=\"border-bottom: 2px solid #ededed;\">
                <div class=\"container\">
                    <div class=\"row \">
                        <div class=\"d-lg-none d-block\" >
                            <a href=\"";
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" style=\"position:absolute; top:5px; color:#1e914e; \">
                                <img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"height: 40px;
                            max-height: 230px;\"/>
                            <span style=\"text-transform: uppercase; font-weight:600; font-size:14px;\">MEF-ASSOSDOVES</span> 
                            </a>
                        </div>
                        <div class=\"nav-menu\" style=\"position:absolute; right:20px; top:12px;\">
                            <div style=\"\">
                                <a  class=\"nav-toggle\" style=\"width: 26px;
                                height: 26px; color: #6f7c81;\">
                                    <span class=\"fa fa-bars\" style=\"font-size:26px;\"></span>
                                </a>
                            </div>
                        </div>

                    
                    </div>
                </div>
            </header>

            <div class=\"responsive_menu mobile_menu\" style=\"overflow-y: none; display:none; border-bottom: 1px solid #ededed;\">
                <div class=\"container\">
                    <nav class=\"text-left\">
                        <ul class=\"nav-menu_\"  style=\"\">
                            <li><a  href=\"";
        // line 357
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" class=\"btn-link\" style=\"border:unset;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_1"), "html", null, true);
        echo "  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            <li><a  href=\"";
        // line 358
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
        echo "\" class=\"\" style=\"border:unset;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_2"), "html", null, true);
        echo "  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>
                            <li><a type=\"button\"  href=\"";
        // line 359
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\" class=\"\" style=\"border:unset;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_3"), "html", null, true);
        echo " <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            <li><a  type=\"button\" href=\"";
        // line 360
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq_page");
        echo "\"  class=\"\" style=\"border:unset;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_4"), "html", null, true);
        echo "  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            <li><a type=\"button\" data-toggle=\"modal\" href=\"#fundModal\"  class=\"\" style=\"border:unset;\">";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_5"), "html", null, true);
        echo " <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>

                            <li>
                                <a type=\"button\" style=\"border:unset;\" class=\"\" data-toggle=\"collapse\" href=\"#collapseTranslation\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseTranslation\">
                                    Langue
                                    <span class=\"fa fa-angle-down\" style=\"position:absolute; right:16px; font-size:20px;\"></span>
                                </a>
                            </li>
                            <li class=\"collapse\" id=\"collapseTranslation\"  style=\"padding-left: 20px;\">
                                    <a type=\"button\" href=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 370, $this->source); })()), "request", [], "any", false, false, false, 370), "get", [0 => "_route"], "method", false, false, false, 370), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 370, $this->source); })()), "request", [], "any", false, false, false, 370), "get", [0 => "_route_params"], "method", false, false, false, 370), ["_locale" => "en"])), "html", null, true);
        echo "\"  class=\"\" style=\"border:unset;\">English <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>
                            </li>
                            <li class=\"collapse\" id=\"collapseTranslation\" style=\"padding-left: 20px;\">
                                <a type=\"button\" href=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 373, $this->source); })()), "request", [], "any", false, false, false, 373), "get", [0 => "_route"], "method", false, false, false, 373), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 373, $this->source); })()), "request", [], "any", false, false, false, 373), "get", [0 => "_route_params"], "method", false, false, false, 373), ["_locale" => "fr"])), "html", null, true);
        echo "\"  class=\"\" style=\"border:unset;\">Français <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>
                             </li>


                            ";
        // line 377
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 378
            echo "
                                <li><a type=\"button\" href=\"";
            // line 379
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_homepage");
            echo "\" class=\"\" style=\"border:unset;\">Admin <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            ";
        }
        // line 381
        echo "
                            <li><a  type=\"button\" href=\"";
        // line 382
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fund_checkout_page");
        echo "\"  style=\"color:#00b8b1; border:unset;\"><i class=\"far fa-heart\" style=\"margin-right:10px; font-size:20px;\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn.donate_btn"), "html", null, true);
        echo "  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class=\"overlapblackbg\"></div> 
            <div class=\"main-page-content\" style=\"padding-top:30px;\">
                 ";
        // line 389
        $this->displayBlock('content', $context, $blocks);
        echo "        

            </div>
           

        <footer class=\"site-footer\">
            <div class=\"footer-widgets\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-12 col-md-6 col-lg-3 mt-5 mt-md-0\">
                            <div class=\"ftco-footer-widget mb-4\">
                              <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-legal.svg"), "html", null, true);
        echo "\" style=\"width:40px; width:40px; margin-bottom:13px;\">
                              <p style=\"color: rgba(255, 255, 255, 0.7); font-size:13px;\">
                                ";
        // line 403
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 403, $this->source); })()), "request", [], "any", false, false, false, 403), "getLocale", [], "method", false, false, false, 403) == "fr")) {
            echo " 
                                mef-assodoves a été créée en 2019 à ver sur launette en France, à l’occasion d'une assemblée générale constitutive qui a porté à sa présidence Madame Meny Etoa Florence
                                
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 406
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 406, $this->source); })()), "request", [], "any", false, false, false, 406), "getLocale", [], "method", false, false, false, 406) == "en")) {
            // line 407
            echo "                                mef-assodoves was created in 2019 to worm on the unette in France, on the occasion of a constituent general assembly that brought to its presidency Mrs Meny Etoa Florence
                                ";
        }
        // line 409
        echo "                             </p>
                              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-1 text-center text-lg-left\">

                                <li class=\"ftco-animate fadeInUp ftco-animated\" style=\"float:left;  margin-right:5px;\">
                                    <a href=\"#\" style=\"height: 50px;
                                    width: 50px;
                                    display: block;
                                    float: left;
                                    background: rgba(255, 255, 255, 0.05);
                                    border-radius: 50%;
                                    position: relative;\">
                                    <span class=\"fab fa-facebook\" style=\"position: absolute;
                                    font-size: 26px;
                                    top: 50%;
                                    left: 50%;
                                    -webkit-transform: translate(-50%, -50%);
                                    -ms-transform: translate(-50%, -50%);
                                    transform: translate(-50%, -50%);
                                    color: #fff;
                                \"></span></a>
                                </li>
                                <li class=\"ftco-animate fadeInUp ftco-animated\" style=\"float:left;  margin-right:5px;\">
                                    <a href=\"https://www.linkedin.com/in/florentine-colombes-6b69ab1b5/\" style=\"height: 50px;
                                    width: 50px;
                                    display: block;
                                    float: left;
                                    background: rgba(255, 255, 255, 0.05);
                                    border-radius: 50%;
                                    position: relative;\">
                                    <span class=\"fab fa-linkedin\" style=\"position: absolute;
                                    font-size: 26px;
                                    top: 50%;
                                    left: 50%;
                                    -webkit-transform: translate(-50%, -50%);
                                    -ms-transform: translate(-50%, -50%);
                                    transform: translate(-50%, -50%);
                                    color: #fff;
                                \"></span></a>
                                </li>

                              </ul>
                            </div>
                          </div>

                        <div class=\"col-6 col-md-6 col-lg-2 mt-5 mt-md-0 d-none d-lg-block\">
                            <h2>";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_title.link_title_1"), "html", null, true);
        echo "</h2>

                            <ul>
                                <li><a href=\"";
        // line 457
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_2"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 458
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_4"), "html", null, true);
        echo "</a></li>
                                

                            </ul>
                        </div>


                        <div class=\"col-6 col-md-6 col-lg-2 mt-5 mt-md-0 d-none d-lg-block\">
                            <h2>";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_title.link_title_2"), "html", null, true);
        echo "</h2>

                            <ul>
                                <li><a data-toggle=\"modal\" href=\"#fundModal\">";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_5"), "html", null, true);
        echo "</a></li>
                               
                                <li><a href=\"";
        // line 471
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_3"), "html", null, true);
        echo "</a></li>
                            </ul>
                        </div><!-- .col -->
                        <div class=\"col-6 col-md-6 col-lg-2 mt-5 mt-md-0 d-none d-lg-block\">
                            <h2>";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_title.link_title_3"), "html", null, true);
        echo "</h2>

                            <ul>
                                <li><a href=\"";
        // line 478
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_legal_mention_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_7"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 479
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu_page");
        echo "\">CGU</a></li>



                            </ul>
                        </div><!-- .col -->

                        <div class=\"col-12 col-md-12 col-lg-3 mt-5 mt-md-0\">
                            <div class=\"foot-contact\">
                                <h2>";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_title.link_title_4"), "html", null, true);
        echo "</h2>

                                <ul>
";
        // line 492
        echo "                                    <li><i class=\"fa fa-envelope\"></i><span>contact@mef-assodoves.org</span></li>
                                    <li><i class=\"fa fa-map-marker\"></i><span>32, rue des Bons Voisins, 60950 Ver/Launette, France.
                                    </span></li>
                                </ul>
                            </div><!-- .foot-contact -->

                            <div class=\"subscribe-form\" id=\"newsletterForm\">
                               
                                <form id=\"newEntityForm\" method=\"post\" action=\"";
        // line 500
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_email_new");
        echo "\" class=\"d-flex flex-wrap align-items-center\">
                                    ";
        // line 501
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Form:email"));
        echo "
                                   
                                    <input type=\"submit\" value=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn.send_btn"), "html", null, true);
        echo "\">
                                </form><!-- .flex -->
                            </div><!-- .search-widget -->
                        </div><!-- .col -->
                        <div class=\"col-12 col-md-12 col-lg-2 mt-5 mt-md-0\">
                            <ul  class=\"d-flex text-center\">
                                <li class=\"d-flex\"><span class=\"fab fa-cc-stripe\" style=\"margin-right:10px; font-size:26px;\"></span></li>
                                <li  class=\"d-flex\"><span class=\"fab fa-cc-visa\" style=\"margin-right:10px; font-size:26px;\"></span></li>
                                <li  class=\"d-flex\"><span class=\"fab fa-cc-mastercard\" style=\"margin-right:10px; font-size:26px;\"></span></li>
                               
                                

                               
                            </ul>
                        </div><!-- .col -->




                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .footer-widgets -->

            <div class=\"footer-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"m-0\" style=\"color:rgb(204, 204, 204); font-size:12px; font-weight:300;\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  Made with <i class=\"far fa-heart\" aria-hidden=\"true\"></i> by <a href=\"\" target=\"_blank\">Gardania</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .col-12 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .footer-bar -->
        </footer><!-- .site-footer -->
  
<style>
            
 .form-control  {
    color: rgb(129, 145, 160);
    display: block;
    width: 100% ;
    height: calc(2.35rem + 2px);
    padding: .475rem .75rem;
 
    font-size: 14px;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
 }
 label{
    font-weight: 500;
   }
</style>
      




    <div class=\"modal fade\" id=\"fundModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"border:none;\">
                <h5 class=\"modal-title d-block d-lg-none\" id=\"exampleModalLabel\">";
        // line 569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_5"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                </div>
                <div class=\"modal-body \">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-12  text-center\" style=\" margin-bottom:16px; \">
                            <img src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/6547.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width:auto; height:250px; position:relative; top:0%; border-radius:4px;\">
                           
                            
                        </div>

                        <div class=\"col-lg-6  col-12\" style=\"padding-left: 16px; padding-right:16px;\">
                            <h2 class=\"d-none d-lg-block blog-heading heading heading--2 section-v3__heading \" style=\"font-size:18px; margin-top:-16px; margin-bottom:5px;\">
                                ";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_5"), "html", null, true);
        echo "
                            </h2>
                            <p class=\"text-center\" style=\"
                            font-size: 13px;
                            font-weight: 500;
                            letter-spacing: 0.4px;
                            padding-top:5px; padding-left:10px; padding-right:10px;\">
                            ";
        // line 591
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "request", [], "any", false, false, false, 591), "getLocale", [], "method", false, false, false, 591) == "fr")) {
            echo "  
                            Rejoignez notre équipe de bénévoles volontaires en ensemble aidons ces démunies a avoir des meilleurs conditions d'études
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 593
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 593, $this->source); })()), "request", [], "any", false, false, false, 593), "getLocale", [], "method", false, false, false, 593) == "en")) {
            // line 594
            echo "                            Join our team of volunteers together let's help these poor people to have better educational conditions
                            ";
        }
        // line 595
        echo "    
                            </p>
                            <div style=\"padding-left:16px; padding-right:16px;\">
                                ";
        // line 598
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Form:volonteerForm"));
        echo "
                            </div>

                                
                          
                        </div>
                    </div>
                                
                </div>

            </div>
        </div>
    </div> 


            ";
        // line 613
        $this->displayBlock('modals', $context, $blocks);
        // line 614
        echo "





    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>\t
    <script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/masonry/masonry.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 629
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>





    ";
        // line 635
        $this->displayBlock('javascript', $context, $blocks);
        // line 636
        echo "    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\"></script>

    <script>


    
    
    // Loading page
\tvar loaderPage = function() {
\t\t\$(\".loader\").fadeOut(\"slow\");
\t};

\t\$(function(){

\t\tloaderPage();
\t
\t
\t});

        initcategoryNavToggle();
        initcloseCategoryNav();

        var header = \$('#header');
        header.css({'top':\"40px\"});
        \$(document).on('scroll', function()
        {
            
            setHeader();
        });

        function setHeader()
        {
            if(window.innerWidth < 992)
            {
               
                    header.css({'top':\"0\"});
              
            }
            else
            {
                if(\$(window).scrollTop() > 2)
                {
                    header.css({'top':\"-5px\"}).animate(5);
                }
                else
                {
                    header.css({'top':\"40px\"});
                }
            }
           
        }


        function initcategoryNavToggle()
        { 
            if(\$('.nav-toggle').length)
            {
                \$('.nav-toggle').click(function(){
    
                    if(\$('.nav-toggle').hasClass('show')){
                        \$('.nav-toggle').removeClass('show');

                        \$('.responsive_menu').hide(200);
                       /* \$('.responsive_menu').animate({display: 'none'});*/
                       /*\$('.overlapblackbg').hide();*/
   
                      
   

                    }else{
                        /*\$('.overlapblackbg').show()*/
                        \$('.responsive_menu').show(200);
                        \$('.nav-toggle').addClass('show');
                    }


                });
            }
        }
        function initcloseCategoryNav()
        { 
            if(\$('.overlapblackbg').click(function(){
                    \$('.overlapblackbg').hide();                   
                    \$('.responsive_menu').removeClass('d-none');
                    \$('.nav-toggle').removeClass('show');
                    
                }));
        }

       
        initTrendsSlider();
        /* 
    
        16. Init Trends Slider
    
        */
    
        function initTrendsSlider()
        {
            if(\$('.trends_slider').length)
            {
                var trendsSlider = \$('.trends_slider');
                trendsSlider.owlCarousel(
                {
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    autoplay: false,
                    loop:false,
                    infinite:false,
                    lazyload: true, 
                    margin:16,
                    dots: false,
                    nav:false,
                    autoHeight: true,
                    autoplaySpeed: 60,
                    responsive:
\t\t\t\t{
\t\t\t\t\t0:{items:1},
\t\t\t\t\t480:{items:1},
\t\t\t\t\t768:{items:3},
\t\t\t\t\t991:{items:4},
\t\t\t\t\t1280:{items:4},
\t\t\t\t\t1440:{items:4}
\t\t\t\t}
                });
    
                trendsSlider.on('click', '.trends_fav', function (ev)
                {
                    \$(ev.target).toggleClass('active');
                });
    
                if(\$('.trends_prev').length)
                {
                    var prev = \$('.trends_prev');
                    prev.on('click', function()
                    {
                        trendsSlider.trigger('prev.owl.carousel');
                    });
                }
    
                if(\$('.trends_next').length)
                {
                    var next = \$('.trends_next');
                    next.on('click', function()
                    {
                        trendsSlider.trigger('next.owl.carousel');
                    });
                }
            }
        }
       


        \$('.article_title').each(function() {
            var maxchars = 30;
            var seperator = '...';

            if (\$(this).text().length > (maxchars - seperator.length)) {
                \$(this).text(\$(this).text().substr(0, maxchars-seperator.length) + seperator);
            }
            });

            if (\$(window).width() < 800) {
               \$('.fb-page').attr('data-width','800')
            }else if (\$(window).width() < 500) {
               \$('.fb-page').attr('data-width','500')
            }else if (\$(window).width() < 400) {
               \$('.fb-page').attr('data-width','400')
            }




        //ajax submit new entity form data
        \$(\"#newEntityForm\").submit(function(event){
            event.preventDefault(); //prevent default action    
            var post_url = \$(this).attr(\"action\"); //get form action url
            var request_method = \$(this).attr(\"method\"); //get form GET/POST method
            var form_data = new FormData(this); //Creates new FormData object
            \$.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false,
                success : function(){
                
                swal({
                    title: \"Good job!\",
                    text: \"Avis ajouté avec succès!\",
                    icon: \"success\",
                    button: \"Fermer\",
                    });
                }
            }).done(function(){ //
                
            });

        }); 





    </script>
  

   


        </div>  
    </body>
</html> 


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_socialMediaMeta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "socialMediaMeta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "socialMediaMeta"));

        // line 27
        echo "
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 389
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

    // line 613
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 635
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
        return "layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1236 => 635,  1218 => 613,  1200 => 389,  1189 => 27,  1179 => 26,  953 => 636,  951 => 635,  942 => 629,  938 => 628,  933 => 626,  928 => 624,  924 => 623,  920 => 622,  916 => 621,  907 => 614,  905 => 613,  887 => 598,  882 => 595,  878 => 594,  876 => 593,  871 => 591,  861 => 584,  851 => 577,  840 => 569,  771 => 503,  766 => 501,  762 => 500,  752 => 492,  746 => 488,  734 => 479,  728 => 478,  722 => 475,  713 => 471,  708 => 469,  702 => 466,  689 => 458,  683 => 457,  677 => 454,  630 => 409,  626 => 407,  624 => 406,  618 => 403,  613 => 401,  598 => 389,  586 => 382,  583 => 381,  578 => 379,  575 => 378,  573 => 377,  566 => 373,  560 => 370,  548 => 361,  542 => 360,  536 => 359,  530 => 358,  524 => 357,  498 => 334,  494 => 333,  478 => 320,  460 => 305,  452 => 299,  446 => 297,  444 => 296,  440 => 295,  434 => 294,  428 => 293,  422 => 292,  416 => 291,  406 => 284,  402 => 283,  386 => 269,  379 => 265,  374 => 263,  365 => 257,  361 => 256,  358 => 255,  356 => 254,  350 => 251,  345 => 249,  337 => 244,  333 => 243,  328 => 241,  320 => 236,  316 => 235,  311 => 233,  278 => 202,  276 => 195,  272 => 193,  270 => 178,  267 => 177,  265 => 168,  143 => 49,  129 => 38,  125 => 37,  121 => 36,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  97 => 29,  95 => 26,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"\">
    <!-- Meta Description -->
    <meta name=\"description\" content=\"\">
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.png') }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('favicon.png') }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('favicon.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('favicon.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('favicon.png') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('favicon.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('favicon.png') }}\">
    <!-- Meta Keyword -->
    <meta name=\"keywords\" content=\"Mef-assodoves\">
    <!-- meta character set -->
    <meta charset=\"UTF-8\">
    <meta name=\"theme-color\" content=\"#00b8b1\">
    <meta name=\"author\" content=\"Gardania academy\">
    <!-- Site Title -->
    <title>Mef-assodoves</title>

 {% block socialMediaMeta %}

 {% endblock %}
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/fontawesome5.4.1/css/all.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/bootstrap4/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('styles/main.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('styles/custom.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('styles/custom_main_responsive.css') }}\">
</head>
<style>

    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url({{ asset('images/preload.gif') }}) center no-repeat #fff; 
    }
    

    html body, html .menu-item a {
    
        color: #616161;
        font-size: 14px;
        background-color: #fcfcfc;
    }
    .blog-style-masonry article {
        width: 33.3%;
        float: left;
        margin-bottom: 40px;
    }
    .sh-header-top {
        background-color: #515151!important;
        height:45px;
        padding: 10px;
    }
    
    .main-tagline {
        color: #fff;
        font-size: 12px;
        padding-top: 4px;
    }

    .sh-header-top-meta {
        display: table;
        margin-left: auto;
    }
    .header-social-media:not(:only-child) {
        margin-right: 0;
    }
    .header-social-media:not(:only-child) {
        border-right: 1px solid #434343;
        margin-right: 20px;
        padding-right: 20px;
        width: 100%;
    }
    .sh-header-top-meta>div {
        display: inline-block;
    }
    .header-social-media {
        text-align: right;
    }
    .sh-header-top .sh-nav li.menu-item a, .sh-header-top .header-social-media a, .sh-header-top-date {
        color: #fff;
    }
    .header-social-media a {
        font-size: 16px;
        color: #fff;
        padding-left: 15px;
    }
    .sh-header-top a, .sh-header-top-date {
        transition: color .3s ease-in-out;
    }


    .sh-header-top-meta>div {
        display: inline-block;
    }

    .sh-header-top-date {
        color: #fff;
    }
    .sh-header-top-date {
        padding-right: 50px;
    }
    .sh-header-top-date {
        top: -7px;
        margin-left: 10px;
    }
    .sh-header-top-date {
        font-size: 26px;
        color: #fff;
        font-weight: 700;
        line-height: 1;
        vertical-align: bottom;
        top: -8px;
        right:-80px;
        position: absolute;
    }
    .sh-header-top-date-month {
        font-size: 11px;
        text-transform: uppercase;
    }
    .sh-header-top-date-year {
        font-size: 10px;
    }
    .sh-header-top-date-meta {
        display: inline-block;
        max-width: 24px;
        line-height: .45;
    }

    .container {
        max-width: 1180px;
        overflow: hidden;
    }
    .swal-button{
    background-color: #fff;
    color: rgba(73,73,73,.85);
    border: none;
    box-shadow: none;
    border-radius: none;
    font-weight: 500;
    font-size: 13px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
    }
    .swal-button:hover{
        background-color: #fff;
        border: none;
        box-shadow: none;
    }
</style>

{% set trans_day_hash = { 
        \"Monday\": \"Lun\", 
        \"Tuesday\": \"Mar\", 
        \"Wednesday\": \"Mer\", 
        \"Thursday\": \"Jeu\", 
        \"Friday\": \"Ven\", 
        \"Saturday\": \"Sam\", 
        \"Sunday\": \"Dim\" 
    } 
%}        
{% set trans_month_hash = { 
        \"January\": \"Jan\", 
        \"Febuary\": \"Fev\", 
        \"March\": \"Mar\", 
        \"April\": \"Avr\", 
        \"May\": \"Mai\", 
        \"June\": \"Jui\", 
        \"July\": \"Juil\", 
        \"August\": \"Août\", 
        \"September\": \"Sept\", 
        \"October\": \"Oct\", 
        \"November\": \"Nov\", 
        \"December\": \"Dec\" 
       
    } 
%}   

{% set trans_year_hash = { 
        \"18\": \"2018\", 
        \"19\": \"2019\", 
        \"20\": \"2020\",
        
       
    } 
%}   



    <body style=\"background: rgb(255, 255, 255); width:100%;\">
        <div class=\"loader\"></div>
            <div class=\"main_page_container\"> 
                <div class=\"sh-header-top d-none d-lg-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"main-tagline\"><span class=\"fa fa-envelope\" style=\"font-size:13px; margin-right:5px;\">
                                    </span> contact@mef-assodoves.org
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"sh-header-top-meta  header-social-media\" style=\"position:relative; left:-50%; top:0px;\">
                                    <a href=\"\" target=\"_blank\" class=\"social-media-facebook\"> 
                                        <i class=\"fab fa-facebook-f\"></i> 
                                    </a>
                                    <a href=\"\" target=\"_blank\" class=\"social-media-youtube\"> 
                                        <i class=\"fab fa-linkedin\"></i> 
                                    </a>
                                    <div class=\"sh-clear\"></div>
                                </div>


                                                            
                                                         

                                <div class=\"sh-header-top-date\" style=\"position:relative; top:-30px; left:50%;\">
                                    <span class=\"sh-header-top-date-day\" style=\"color: #fff;\">{{ (\"now\")|date(\"d\") }} </span>
                                    <span class=\"sh-header-top-date-meta\">
                                        <span class=\"sh-header-top-date-month\"  style=\"color: #fff;\">   {{ trans_month_hash[\"now\"|date('F')] }}  </span>
                                        <span class=\"sh-header-top-date-year\"  style=\"color: #fff;\">{{ trans_year_hash[\"now\"|date('y')] }}  </span> 
                                    </span>
                                </div>
                                <div style=\"position: absolute; top:2%; right:4%;\">
                                    <ul class=\"d-flex\">
                                        {% if (app.request.getLocale()) == 'fr'  %} 
                                        <li class=\"d-flex\" style=\"font-size: 13px; margin-right:10px; \">
                                            <a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\" style=\" color: #fff; font-size: 13px;  font-weight:500; \">
                                                <img src=\"{{ asset('images/flag_2.svg')}}\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \">Français 
                                                
                                            </a>  
                                        </li>
                                        <li class=\"d-flex\" style=\"font-size: 13px; \">
                                            <a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\"  style=\" color: rgb(204, 204, 204); font-size: 13px;font-weight:500;  \">   
                                                <span style=\"border-right: 1px solid rgb(199, 199, 205); margin-right:16px;\"> </span>
                                                <img src=\"{{ asset('images/flag_1.svg')}}\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \"> English
                                            </a>
                                        </li>
                                        {%  elseif (app.request.getLocale()) == 'en' %}
                                        <li class=\"d-flex\" style=\"font-size: 13px; margin-right:10px; \">
                                            <a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\" style=\" color: rgb(204, 204, 204); font-size: 13px; font-weight:500;  \">
                                                <img src=\"{{ asset('images/flag_2.svg')}}\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \">Français 
                                                
                                            </a>  
                                        </li>

                                        <li class=\"d-flex\" style=\"font-size: 13px; \">
                                            <a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\"  style=\" color: #fff; font-size: 13px; font-weight:500; \">   
                                                <span style=\"border-right: 1px solid rgb(199, 199, 205); margin-right:16px;\"> </span>
                                                <img src=\"{{ asset('images/flag_1.svg')}}\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \"> English
                                            </a>
                                        </li>                                        
                                        {% endif %}
                                        
                                       

                                    </ul>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id=\"header\" class=\"main-header-nav d-none d-lg-block \" style=\"\">
                    <div class=\"container\" style=\"\">
                        <div class=\"row align-items-center justify-content-between d-flex\">
                            <div id=\"logo\" class=\"d-none d-lg-block\">
                                <a href=\"{{path('app_home_page')}}\" style=\"color:#1e914e; \">
                                    <img src=\"{{ asset('images/logo.png')}}\" alt=\"\" title=\"\" style=\"height: 50px;
                                    max-height: 250px; padding-left:10px;\"/>
                                   <span style=\"text-transform: uppercase; font-weight:600; font-size:16px;\">MEF-ASSOSDOVES </span>
                                </a>
                            </div>
                            <nav id=\"nav-menu-container\" style=\"position:relative; top:1px; left:-15%;\">
                                <ul class=\"nav-menu nav_menu_full\">
                                    <li class=\"menu-active\"><a href=\"{{path('app_home_page')}}\" class=\"nav-link\">{{ 'nav.link_1'|trans }}</a></li>
                                    <li><a href=\"{{path('app_about_page')}}\" class=\"nav-link\">{{ 'nav.link_2'|trans }}</a>                           
                                    <li><a href=\"{{path('app_article_index')}}\"  class=\"nav-link\">{{ 'nav.link_3'|trans }}</a></li>
                                    <li><a href=\"{{path('app_faq_page')}}\" class=\"nav-link\">{{ 'nav.link_4'|trans }}</a></li> 
                                    <li><a  data-toggle=\"modal\" href=\"#fundModal\"  class=\"nav-link\">{{ 'nav.link_5'|trans }}</a></li>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li><a href=\"{{path('admin_homepage')}}\" class=\"nav-link\">Admin</a></li>
                                    {% endif %}
                                    
                                </ul>
                            </nav><!-- #nav-menu-container -->\t
                            <div class=\"d-none d-lg-block\" style=\"position: absolute; right:5%;\">
                                <ul class=\"nav-menu nav-menu-full-btns\">
                                    <li>
                                        <a  href=\"{{path('app_fund_checkout_page')}}\" style=\"
                                        text-transform: uppercase;
                                        box-shadow: 0 2px 12px -6px #00b8b1!important;
                                        padding: 6px 20px;
                                        font-size: 13px;
                                        border-radius: 30px;
                                        margin-left: 20px;
                                        line-height: 24px;
                                        font-weight:600;
                                        cursor:pointer;
                                        background-color: #00b8b1;
                                        font-weight: 500 !important;

                                        text-transform: uppercase;
                                        color: #fff;\">
                                        <i class=\"far fa-heart\" style=\"margin-right:10px;\"></i>{{ 'btn.donate_btn'|trans }}
                                        </a>
                                    </li>
                                </ul>
                            </div>\t    \t\t
                        </div>
                    </div>
                </div>
            <!-- #header -->
            <header class=\"mobile-header d-block d-lg-none\" style=\"border-bottom: 2px solid #ededed;\">
                <div class=\"container\">
                    <div class=\"row \">
                        <div class=\"d-lg-none d-block\" >
                            <a href=\"{{path('app_home_page')}}\" style=\"position:absolute; top:5px; color:#1e914e; \">
                                <img src=\"{{ asset('images/logo.png')}}\" alt=\"\" title=\"\" style=\"height: 40px;
                            max-height: 230px;\"/>
                            <span style=\"text-transform: uppercase; font-weight:600; font-size:14px;\">MEF-ASSOSDOVES</span> 
                            </a>
                        </div>
                        <div class=\"nav-menu\" style=\"position:absolute; right:20px; top:12px;\">
                            <div style=\"\">
                                <a  class=\"nav-toggle\" style=\"width: 26px;
                                height: 26px; color: #6f7c81;\">
                                    <span class=\"fa fa-bars\" style=\"font-size:26px;\"></span>
                                </a>
                            </div>
                        </div>

                    
                    </div>
                </div>
            </header>

            <div class=\"responsive_menu mobile_menu\" style=\"overflow-y: none; display:none; border-bottom: 1px solid #ededed;\">
                <div class=\"container\">
                    <nav class=\"text-left\">
                        <ul class=\"nav-menu_\"  style=\"\">
                            <li><a  href=\"{{path('app_home_page')}}\" class=\"btn-link\" style=\"border:unset;\">{{ 'nav.link_1'|trans }}  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            <li><a  href=\"{{path('app_about_page')}}\" class=\"\" style=\"border:unset;\">{{ 'nav.link_2'|trans }}  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>
                            <li><a type=\"button\"  href=\"{{path('app_article_index')}}\" class=\"\" style=\"border:unset;\">{{ 'nav.link_3'|trans }} <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            <li><a  type=\"button\" href=\"{{path('app_faq_page')}}\"  class=\"\" style=\"border:unset;\">{{ 'nav.link_4'|trans }}  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            <li><a type=\"button\" data-toggle=\"modal\" href=\"#fundModal\"  class=\"\" style=\"border:unset;\">{{ 'nav.link_5'|trans }} <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>

                            <li>
                                <a type=\"button\" style=\"border:unset;\" class=\"\" data-toggle=\"collapse\" href=\"#collapseTranslation\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseTranslation\">
                                    Langue
                                    <span class=\"fa fa-angle-down\" style=\"position:absolute; right:16px; font-size:20px;\"></span>
                                </a>
                            </li>
                            <li class=\"collapse\" id=\"collapseTranslation\"  style=\"padding-left: 20px;\">
                                    <a type=\"button\" href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\"  class=\"\" style=\"border:unset;\">English <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>
                            </li>
                            <li class=\"collapse\" id=\"collapseTranslation\" style=\"padding-left: 20px;\">
                                <a type=\"button\" href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\"  class=\"\" style=\"border:unset;\">Français <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>
                             </li>


                            {% if is_granted('ROLE_ADMIN') %}

                                <li><a type=\"button\" href=\"{{path('admin_homepage')}}\" class=\"\" style=\"border:unset;\">Admin <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            {% endif %}

                            <li><a  type=\"button\" href=\"{{path('app_fund_checkout_page')}}\"  style=\"color:#00b8b1; border:unset;\"><i class=\"far fa-heart\" style=\"margin-right:10px; font-size:20px;\"></i> {{ 'btn.donate_btn'|trans }}  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class=\"overlapblackbg\"></div> 
            <div class=\"main-page-content\" style=\"padding-top:30px;\">
                 {% block content %}{% endblock %}        

            </div>
           

        <footer class=\"site-footer\">
            <div class=\"footer-widgets\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-12 col-md-6 col-lg-3 mt-5 mt-md-0\">
                            <div class=\"ftco-footer-widget mb-4\">
                              <img src=\"{{asset('images/logo-legal.svg')}}\" style=\"width:40px; width:40px; margin-bottom:13px;\">
                              <p style=\"color: rgba(255, 255, 255, 0.7); font-size:13px;\">
                                {% if (app.request.getLocale()) == 'fr'  %} 
                                mef-assodoves a été créée en 2019 à ver sur launette en France, à l’occasion d'une assemblée générale constitutive qui a porté à sa présidence Madame Meny Etoa Florence
                                
                                {%  elseif (app.request.getLocale()) == 'en' %}
                                mef-assodoves was created in 2019 to worm on the unette in France, on the occasion of a constituent general assembly that brought to its presidency Mrs Meny Etoa Florence
                                {% endif %}
                             </p>
                              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-1 text-center text-lg-left\">

                                <li class=\"ftco-animate fadeInUp ftco-animated\" style=\"float:left;  margin-right:5px;\">
                                    <a href=\"#\" style=\"height: 50px;
                                    width: 50px;
                                    display: block;
                                    float: left;
                                    background: rgba(255, 255, 255, 0.05);
                                    border-radius: 50%;
                                    position: relative;\">
                                    <span class=\"fab fa-facebook\" style=\"position: absolute;
                                    font-size: 26px;
                                    top: 50%;
                                    left: 50%;
                                    -webkit-transform: translate(-50%, -50%);
                                    -ms-transform: translate(-50%, -50%);
                                    transform: translate(-50%, -50%);
                                    color: #fff;
                                \"></span></a>
                                </li>
                                <li class=\"ftco-animate fadeInUp ftco-animated\" style=\"float:left;  margin-right:5px;\">
                                    <a href=\"https://www.linkedin.com/in/florentine-colombes-6b69ab1b5/\" style=\"height: 50px;
                                    width: 50px;
                                    display: block;
                                    float: left;
                                    background: rgba(255, 255, 255, 0.05);
                                    border-radius: 50%;
                                    position: relative;\">
                                    <span class=\"fab fa-linkedin\" style=\"position: absolute;
                                    font-size: 26px;
                                    top: 50%;
                                    left: 50%;
                                    -webkit-transform: translate(-50%, -50%);
                                    -ms-transform: translate(-50%, -50%);
                                    transform: translate(-50%, -50%);
                                    color: #fff;
                                \"></span></a>
                                </li>

                              </ul>
                            </div>
                          </div>

                        <div class=\"col-6 col-md-6 col-lg-2 mt-5 mt-md-0 d-none d-lg-block\">
                            <h2>{{ 'footer_title.link_title_1'|trans }}</h2>

                            <ul>
                                <li><a href=\"{{path('app_about_page')}}\">{{ 'nav.link_2'|trans }}</a></li>
                                <li><a href=\"{{path('app_faq_page')}}\">{{ 'nav.link_4'|trans }}</a></li>
                                

                            </ul>
                        </div>


                        <div class=\"col-6 col-md-6 col-lg-2 mt-5 mt-md-0 d-none d-lg-block\">
                            <h2>{{ 'footer_title.link_title_2'|trans }}</h2>

                            <ul>
                                <li><a data-toggle=\"modal\" href=\"#fundModal\">{{ 'nav.link_5'|trans }}</a></li>
                               
                                <li><a href=\"{{path('app_article_index')}}\">{{ 'nav.link_3'|trans }}</a></li>
                            </ul>
                        </div><!-- .col -->
                        <div class=\"col-6 col-md-6 col-lg-2 mt-5 mt-md-0 d-none d-lg-block\">
                            <h2>{{ 'footer_title.link_title_3'|trans }}</h2>

                            <ul>
                                <li><a href=\"{{path('app_legal_mention_page')}}\">{{ 'nav.link_7'|trans }}</a></li>
                                <li><a href=\"{{path('app_cgu_page')}}\">CGU</a></li>



                            </ul>
                        </div><!-- .col -->

                        <div class=\"col-12 col-md-12 col-lg-3 mt-5 mt-md-0\">
                            <div class=\"foot-contact\">
                                <h2>{{ 'footer_title.link_title_4'|trans }}</h2>

                                <ul>
{#                                    <li><i class=\"fa fa-phone\"></i><span>+33 6 62 54 61 55</span></li>#}
                                    <li><i class=\"fa fa-envelope\"></i><span>contact@mef-assodoves.org</span></li>
                                    <li><i class=\"fa fa-map-marker\"></i><span>32, rue des Bons Voisins, 60950 Ver/Launette, France.
                                    </span></li>
                                </ul>
                            </div><!-- .foot-contact -->

                            <div class=\"subscribe-form\" id=\"newsletterForm\">
                               
                                <form id=\"newEntityForm\" method=\"post\" action=\"{{path(\"app_email_new\")}}\" class=\"d-flex flex-wrap align-items-center\">
                                    {{ render(controller('AppBundle:Form:email')) }}
                                   
                                    <input type=\"submit\" value=\"{{ 'btn.send_btn'|trans }}\">
                                </form><!-- .flex -->
                            </div><!-- .search-widget -->
                        </div><!-- .col -->
                        <div class=\"col-12 col-md-12 col-lg-2 mt-5 mt-md-0\">
                            <ul  class=\"d-flex text-center\">
                                <li class=\"d-flex\"><span class=\"fab fa-cc-stripe\" style=\"margin-right:10px; font-size:26px;\"></span></li>
                                <li  class=\"d-flex\"><span class=\"fab fa-cc-visa\" style=\"margin-right:10px; font-size:26px;\"></span></li>
                                <li  class=\"d-flex\"><span class=\"fab fa-cc-mastercard\" style=\"margin-right:10px; font-size:26px;\"></span></li>
                               
                                

                               
                            </ul>
                        </div><!-- .col -->




                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .footer-widgets -->

            <div class=\"footer-bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <p class=\"m-0\" style=\"color:rgb(204, 204, 204); font-size:12px; font-weight:300;\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  Made with <i class=\"far fa-heart\" aria-hidden=\"true\"></i> by <a href=\"\" target=\"_blank\">Gardania</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .col-12 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .footer-bar -->
        </footer><!-- .site-footer -->
  
<style>
            
 .form-control  {
    color: rgb(129, 145, 160);
    display: block;
    width: 100% ;
    height: calc(2.35rem + 2px);
    padding: .475rem .75rem;
 
    font-size: 14px;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
 }
 label{
    font-weight: 500;
   }
</style>
      




    <div class=\"modal fade\" id=\"fundModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"border:none;\">
                <h5 class=\"modal-title d-block d-lg-none\" id=\"exampleModalLabel\">{{ 'nav.link_5'|trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                </div>
                <div class=\"modal-body \">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-12  text-center\" style=\" margin-bottom:16px; \">
                            <img src=\"{{ asset('images/6547.jpg') }}\" alt=\"\" style=\"width:auto; height:250px; position:relative; top:0%; border-radius:4px;\">
                           
                            
                        </div>

                        <div class=\"col-lg-6  col-12\" style=\"padding-left: 16px; padding-right:16px;\">
                            <h2 class=\"d-none d-lg-block blog-heading heading heading--2 section-v3__heading \" style=\"font-size:18px; margin-top:-16px; margin-bottom:5px;\">
                                {{ 'nav.link_5'|trans }}
                            </h2>
                            <p class=\"text-center\" style=\"
                            font-size: 13px;
                            font-weight: 500;
                            letter-spacing: 0.4px;
                            padding-top:5px; padding-left:10px; padding-right:10px;\">
                            {% if (app.request.getLocale()) == 'fr'  %}  
                            Rejoignez notre équipe de bénévoles volontaires en ensemble aidons ces démunies a avoir des meilleurs conditions d'études
                            {%  elseif (app.request.getLocale()) == 'en' %}
                            Join our team of volunteers together let's help these poor people to have better educational conditions
                            {% endif %}    
                            </p>
                            <div style=\"padding-left:16px; padding-right:16px;\">
                                {{ render(controller('AppBundle:Form:volonteerForm')) }}
                            </div>

                                
                          
                        </div>
                    </div>
                                
                </div>

            </div>
        </div>
    </div> 


            {% block modals %}{% endblock %}






    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"{{ asset('plugins/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap4/bootstrap.min.js') }}\"></script>\t
    <script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>

    <script src=\"{{ asset('plugins/masonry/masonry.js') }}\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>





    {% block javascript %}{% endblock %}
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\"></script>

    <script>


    
    
    // Loading page
\tvar loaderPage = function() {
\t\t\$(\".loader\").fadeOut(\"slow\");
\t};

\t\$(function(){

\t\tloaderPage();
\t
\t
\t});

        initcategoryNavToggle();
        initcloseCategoryNav();

        var header = \$('#header');
        header.css({'top':\"40px\"});
        \$(document).on('scroll', function()
        {
            
            setHeader();
        });

        function setHeader()
        {
            if(window.innerWidth < 992)
            {
               
                    header.css({'top':\"0\"});
              
            }
            else
            {
                if(\$(window).scrollTop() > 2)
                {
                    header.css({'top':\"-5px\"}).animate(5);
                }
                else
                {
                    header.css({'top':\"40px\"});
                }
            }
           
        }


        function initcategoryNavToggle()
        { 
            if(\$('.nav-toggle').length)
            {
                \$('.nav-toggle').click(function(){
    
                    if(\$('.nav-toggle').hasClass('show')){
                        \$('.nav-toggle').removeClass('show');

                        \$('.responsive_menu').hide(200);
                       /* \$('.responsive_menu').animate({display: 'none'});*/
                       /*\$('.overlapblackbg').hide();*/
   
                      
   

                    }else{
                        /*\$('.overlapblackbg').show()*/
                        \$('.responsive_menu').show(200);
                        \$('.nav-toggle').addClass('show');
                    }


                });
            }
        }
        function initcloseCategoryNav()
        { 
            if(\$('.overlapblackbg').click(function(){
                    \$('.overlapblackbg').hide();                   
                    \$('.responsive_menu').removeClass('d-none');
                    \$('.nav-toggle').removeClass('show');
                    
                }));
        }

       
        initTrendsSlider();
        /* 
    
        16. Init Trends Slider
    
        */
    
        function initTrendsSlider()
        {
            if(\$('.trends_slider').length)
            {
                var trendsSlider = \$('.trends_slider');
                trendsSlider.owlCarousel(
                {
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    autoplay: false,
                    loop:false,
                    infinite:false,
                    lazyload: true, 
                    margin:16,
                    dots: false,
                    nav:false,
                    autoHeight: true,
                    autoplaySpeed: 60,
                    responsive:
\t\t\t\t{
\t\t\t\t\t0:{items:1},
\t\t\t\t\t480:{items:1},
\t\t\t\t\t768:{items:3},
\t\t\t\t\t991:{items:4},
\t\t\t\t\t1280:{items:4},
\t\t\t\t\t1440:{items:4}
\t\t\t\t}
                });
    
                trendsSlider.on('click', '.trends_fav', function (ev)
                {
                    \$(ev.target).toggleClass('active');
                });
    
                if(\$('.trends_prev').length)
                {
                    var prev = \$('.trends_prev');
                    prev.on('click', function()
                    {
                        trendsSlider.trigger('prev.owl.carousel');
                    });
                }
    
                if(\$('.trends_next').length)
                {
                    var next = \$('.trends_next');
                    next.on('click', function()
                    {
                        trendsSlider.trigger('next.owl.carousel');
                    });
                }
            }
        }
       


        \$('.article_title').each(function() {
            var maxchars = 30;
            var seperator = '...';

            if (\$(this).text().length > (maxchars - seperator.length)) {
                \$(this).text(\$(this).text().substr(0, maxchars-seperator.length) + seperator);
            }
            });

            if (\$(window).width() < 800) {
               \$('.fb-page').attr('data-width','800')
            }else if (\$(window).width() < 500) {
               \$('.fb-page').attr('data-width','500')
            }else if (\$(window).width() < 400) {
               \$('.fb-page').attr('data-width','400')
            }




        //ajax submit new entity form data
        \$(\"#newEntityForm\").submit(function(event){
            event.preventDefault(); //prevent default action    
            var post_url = \$(this).attr(\"action\"); //get form action url
            var request_method = \$(this).attr(\"method\"); //get form GET/POST method
            var form_data = new FormData(this); //Creates new FormData object
            \$.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false,
                success : function(){
                
                swal({
                    title: \"Good job!\",
                    text: \"Avis ajouté avec succès!\",
                    icon: \"success\",
                    button: \"Fermer\",
                    });
                }
            }).done(function(){ //
                
            });

        }); 





    </script>
  

   


        </div>  
    </body>
</html> 


", "layout/base.html.twig", "C:\\wamp\\www\\mef-assodoves\\app\\Resources\\views\\layout\\base.html.twig");
    }
}
