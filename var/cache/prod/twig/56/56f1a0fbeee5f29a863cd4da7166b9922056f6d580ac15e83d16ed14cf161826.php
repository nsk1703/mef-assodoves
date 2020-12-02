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
class __TwigTemplate_afe14b806279d61dd8534b864b677cd6af6217a447293c54dfa85232825d7e81 extends \Twig\Template
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
        // line 27
        echo "        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome5.4.1/css/all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/custom.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
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
        // line 47
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
        // line 166
        $context["trans_day_hash"] = ["Monday" => "Lun", "Tuesday" => "Mar", "Wednesday" => "Mer", "Thursday" => "Jeu", "Friday" => "Ven", "Saturday" => "Sam", "Sunday" => "Dim"];
        // line 175
        echo "        
";
        // line 176
        $context["trans_month_hash"] = ["January" => "Jan", "Febuary" => "Fev", "March" => "Mar", "April" => "Avr", "May" => "Mai", "June" => "Jui", "July" => "Juil", "August" => "Août", "September" => "Sept", "October" => "Oct", "November" => "Nov", "December" => "Dec"];
        // line 191
        echo "   

";
        // line 193
        $context["trans_year_hash"] = ["18" => "2018", "19" => "2019", "20" => "2020"];
        // line 200
        echo "   



    <body style=\"background: rgb(255, 255, 255); width:100%;\">
        <div class=\"loader\"></div>
            <div class=\"main_page_container\"> 
                <div class=\"sh-header-top d-none d-lg-block\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\"> 
                                <div class=\"main-tagline\"><span class=\"fa fa-envelope\" style=\"font-size:13px; margin-right:5px;\"></span> contact@mef-assodoves.org <span class=\"fa fa-phone\" style=\"margin-left:10px; margin-right:5px;\"></span>+33 6 62 54 61 55</div>
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
        // line 230
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
        echo " </span> 
                                    <span class=\"sh-header-top-date-meta\"> 
                                        <span class=\"sh-header-top-date-month\"  style=\"color: #fff;\">   ";
        // line 232
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["trans_month_hash"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_date_format_filter($this->env, "now", "F")] ?? null) : null), "html", null, true);
        echo "  </span> 
                                        <span class=\"sh-header-top-date-year\"  style=\"color: #fff;\">";
        // line 233
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["trans_year_hash"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_date_format_filter($this->env, "now", "y")] ?? null) : null), "html", null, true);
        echo "  </span> 
                                    </span>
                                </div>
                                <div style=\"position: absolute; top:2%; right:4%;\">
                                    <ul class=\"d-flex\">
                                        ";
        // line 238
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 238), "getLocale", [], "method", false, false, false, 238) == "fr")) {
            echo " 
                                        <li class=\"d-flex\" style=\"font-size: 13px; margin-right:10px; \">
                                            <a href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 240), "get", [0 => "_route"], "method", false, false, false, 240), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 240), "get", [0 => "_route_params"], "method", false, false, false, 240), ["_locale" => "fr"])), "html", null, true);
            echo "\" style=\" color: #fff; font-size: 13px;  font-weight:500; \">
                                                <img src=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/flag_2.svg"), "html", null, true);
            echo "\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \">Français 
                                                
                                            </a>  
                                        </li>
                                        <li class=\"d-flex\" style=\"font-size: 13px; \">
                                            <a href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 246), "get", [0 => "_route"], "method", false, false, false, 246), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 246), "get", [0 => "_route_params"], "method", false, false, false, 246), ["_locale" => "en"])), "html", null, true);
            echo "\"  style=\" color: rgb(204, 204, 204); font-size: 13px;font-weight:500;  \">   
                                                <span style=\"border-right: 1px solid rgb(199, 199, 205); margin-right:16px;\"> </span>
                                                <img src=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/flag_1.svg"), "html", null, true);
            echo "\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \"> English
                                            </a>
                                        </li>
                                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 251
($context["app"] ?? null), "request", [], "any", false, false, false, 251), "getLocale", [], "method", false, false, false, 251) == "en")) {
            // line 252
            echo "                                        <li class=\"d-flex\" style=\"font-size: 13px; margin-right:10px; \">
                                            <a href=\"";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 253), "get", [0 => "_route"], "method", false, false, false, 253), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 253), "get", [0 => "_route_params"], "method", false, false, false, 253), ["_locale" => "fr"])), "html", null, true);
            echo "\" style=\" color: rgb(204, 204, 204); font-size: 13px; font-weight:500;  \">
                                                <img src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/flag_2.svg"), "html", null, true);
            echo "\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \">Français 
                                                
                                            </a>  
                                        </li>

                                        <li class=\"d-flex\" style=\"font-size: 13px; \">
                                            <a href=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 260), "get", [0 => "_route"], "method", false, false, false, 260), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 260), "get", [0 => "_route_params"], "method", false, false, false, 260), ["_locale" => "en"])), "html", null, true);
            echo "\"  style=\" color: #fff; font-size: 13px; font-weight:500; \">   
                                                <span style=\"border-right: 1px solid rgb(199, 199, 205); margin-right:16px;\"> </span>
                                                <img src=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/flag_1.svg"), "html", null, true);
            echo "\" alt=\"\" style=\"width:12px; height:12px; margin-right:5px; border-radius:50%; \"> English
                                            </a>
                                        </li>                                        
                                        ";
        }
        // line 266
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
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" style=\"color:#1e914e; \">
                                    <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"height: 50px;
                                    max-height: 250px; padding-left:10px;\"/>
                                   <span style=\"text-transform: uppercase; font-weight:600; font-size:16px;\">MEF-ASSOSDOVES </span> 
                                </a>
                            </div>
                            <nav id=\"nav-menu-container\" style=\"position:relative; top:1px; left:-15%;\">
                                <ul class=\"nav-menu nav_menu_full\">
                                    <li class=\"menu-active\"><a href=\"";
        // line 288
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_1"), "html", null, true);
        echo "</a></li>
                                    <li><a href=\"";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_2"), "html", null, true);
        echo "</a>                           
                                    <li><a href=\"";
        // line 290
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\"  class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_3"), "html", null, true);
        echo "</a></li>
                                    <li><a href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq_page");
        echo "\" class=\"nav-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_4"), "html", null, true);
        echo "</a></li> 
                                    <li><a  data-toggle=\"modal\" href=\"#fundModal\"  class=\"nav-link\">";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_5"), "html", null, true);
        echo "</a></li>
                                    ";
        // line 293
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 294
            echo "                                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_homepage");
            echo "\" class=\"nav-link\">Admin</a></li>
                                    ";
        }
        // line 296
        echo "                                    
                                </ul>

                            </nav><!-- #nav-menu-container -->\t
                            <div class=\"d-none d-lg-block\" style=\"position: absolute; right:5%;\">
                                <ul class=\"nav-menu nav-menu-full-btns\">
                                    
                                    <li>
                                        <a  href=\"";
        // line 304
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
        // line 319
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
        // line 337
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" style=\"position:absolute; top:5px; color:#1e914e; \">
                                <img src=\"";
        // line 338
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
        // line 363
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        echo "\" class=\"btn-link\" style=\"border:unset;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_1"), "html", null, true);
        echo "  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            <li><a  href=\"";
        // line 364
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
        echo "\" class=\"\" style=\"border:unset;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_2"), "html", null, true);
        echo "  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>                           
                            <li><a type=\"button\"  href=\"";
        // line 365
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\" class=\"\" style=\"border:unset;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_3"), "html", null, true);
        echo " <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            <li><a  type=\"button\" href=\"";
        // line 366
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq_page");
        echo "\"  class=\"\" style=\"border:unset;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_4"), "html", null, true);
        echo "  <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>  
                            <li><a type=\"button\" data-toggle=\"modal\" href=\"#fundModal\"  class=\"\" style=\"border:unset;\">";
        // line 367
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
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 376), "get", [0 => "_route"], "method", false, false, false, 376), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 376), "get", [0 => "_route_params"], "method", false, false, false, 376), ["_locale" => "en"])), "html", null, true);
        echo "\"  class=\"\" style=\"border:unset;\">English <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>
                            </li>
                            <li class=\"collapse\" id=\"collapseTranslation\" style=\"padding-left: 20px;\">
                                <a type=\"button\" href=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 379), "get", [0 => "_route"], "method", false, false, false, 379), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 379), "get", [0 => "_route_params"], "method", false, false, false, 379), ["_locale" => "fr"])), "html", null, true);
        echo "\"  class=\"\" style=\"border:unset;\">Français <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a>
                             </li>
       

                            ";
        // line 383
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 384
            echo "                               
                                <li><a type=\"button\" href=\"";
            // line 385
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_homepage");
            echo "\" class=\"\" style=\"border:unset;\">Admin <span class=\"fa fa-angle-right\" style=\"position:absolute; right:16px; font-size:20px;\"></span></a></li>
                            ";
        }
        // line 387
        echo "
                            <li><a  type=\"button\" href=\"";
        // line 388
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
        // line 395
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
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-legal.svg"), "html", null, true);
        echo "\" style=\"width:40px; width:40px; margin-bottom:13px;\">
                              <p style=\"color: rgba(255, 255, 255, 0.7); font-size:13px;\">
                                ";
        // line 409
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 409), "getLocale", [], "method", false, false, false, 409) == "fr")) {
            echo " 
                                mef-assodoves a été créée en 2019 à ver sur launette en France, à l’occasion d'une assemblée générale constitutive qui a porté à sa présidence Madame Meny Etoa Florence
                                
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 412
($context["app"] ?? null), "request", [], "any", false, false, false, 412), "getLocale", [], "method", false, false, false, 412) == "en")) {
            // line 413
            echo "                                mef-assodoves was created in 2019 to worm on the unette in France, on the occasion of a constituent general assembly that brought to its presidency Mrs Meny Etoa Florence
                                ";
        }
        // line 415
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
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_title.link_title_1"), "html", null, true);
        echo "</h2>

                            <ul>
                                <li><a href=\"";
        // line 463
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_2"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 464
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_faq_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_4"), "html", null, true);
        echo "</a></li>
                                

                            </ul>
                        </div>


                        <div class=\"col-6 col-md-6 col-lg-2 mt-5 mt-md-0 d-none d-lg-block\">
                            <h2>";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_title.link_title_2"), "html", null, true);
        echo "</h2>

                            <ul>
                                <li><a data-toggle=\"modal\" href=\"#fundModal\">";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_5"), "html", null, true);
        echo "</a></li>
                               
                                <li><a href=\"";
        // line 477
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_3"), "html", null, true);
        echo "</a></li>
                            </ul>
                        </div><!-- .col -->
                        <div class=\"col-6 col-md-6 col-lg-2 mt-5 mt-md-0 d-none d-lg-block\">
                            <h2>";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_title.link_title_3"), "html", null, true);
        echo "</h2>

                            <ul>
                                <li><a href=\"";
        // line 484
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_legal_mention_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_7"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"";
        // line 485
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu_page");
        echo "\">CGU</a></li>



                            </ul>
                        </div><!-- .col -->

                        <div class=\"col-12 col-md-12 col-lg-3 mt-5 mt-md-0\">
                            <div class=\"foot-contact\">
                                <h2>";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer_title.link_title_4"), "html", null, true);
        echo "</h2>

                                <ul>
                                    <li><i class=\"fa fa-phone\"></i><span>+33 6 62 54 61 55</span></li>
                                    <li><i class=\"fa fa-envelope\"></i><span>contact@mef-assodoves.org</span></li>
                                    <li><i class=\"fa fa-map-marker\"></i><span>32, rue des Bons Voisins, 60950 Ver/Launette, France.
                                    </span></li>
                                </ul>
                            </div><!-- .foot-contact -->

                            <div class=\"subscribe-form\" id=\"newsletterForm\">
                               
                                <form id=\"newEntityForm\" method=\"post\" action=\"";
        // line 506
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_email_new");
        echo "\" class=\"d-flex flex-wrap align-items-center\">
                                    ";
        // line 507
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Form:email"));
        echo "
                                   
                                    <input type=\"submit\" value=\"";
        // line 509
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
        // line 575
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
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/6547.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width:auto; height:250px; position:relative; top:0%; border-radius:4px;\">
                           
                            
                        </div>

                        <div class=\"col-lg-6  col-12\" style=\"padding-left: 16px; padding-right:16px;\">
                            <h2 class=\"d-none d-lg-block blog-heading heading heading--2 section-v3__heading \" style=\"font-size:18px; margin-top:-16px; margin-bottom:5px;\">
                                ";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_5"), "html", null, true);
        echo "
                            </h2>
                            <p class=\"text-center\" style=\"
                            font-size: 13px;
                            font-weight: 500;
                            letter-spacing: 0.4px;
                            padding-top:5px; padding-left:10px; padding-right:10px;\">
                            ";
        // line 597
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 597), "getLocale", [], "method", false, false, false, 597) == "fr")) {
            echo "  
                            Rejoignez notre équipe de bénévoles volontaires en ensemble aidons ces démunies a avoir des meilleurs conditions d'études
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 599
($context["app"] ?? null), "request", [], "any", false, false, false, 599), "getLocale", [], "method", false, false, false, 599) == "en")) {
            // line 600
            echo "                            Join our team of volunteers together let's help these poor people to have better educational conditions
                            ";
        }
        // line 601
        echo "    
                            </p>
                            <div style=\"padding-left:16px; padding-right:16px;\">
                                ";
        // line 604
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
        // line 619
        $this->displayBlock('modals', $context, $blocks);
        // line 620
        echo "





    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>\t
    <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/masonry/masonry.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    <script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 635
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\"></script>





    ";
        // line 641
        $this->displayBlock('javascript', $context, $blocks);
        // line 642
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
    }

    // line 26
    public function block_socialMediaMeta($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 395
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 619
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 641
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  1192 => 641,  1186 => 619,  1180 => 395,  1174 => 26,  954 => 642,  952 => 641,  943 => 635,  939 => 634,  934 => 632,  929 => 630,  925 => 629,  921 => 628,  917 => 627,  908 => 620,  906 => 619,  888 => 604,  883 => 601,  879 => 600,  877 => 599,  872 => 597,  862 => 590,  852 => 583,  841 => 575,  772 => 509,  767 => 507,  763 => 506,  748 => 494,  736 => 485,  730 => 484,  724 => 481,  715 => 477,  710 => 475,  704 => 472,  691 => 464,  685 => 463,  679 => 460,  632 => 415,  628 => 413,  626 => 412,  620 => 409,  615 => 407,  600 => 395,  588 => 388,  585 => 387,  580 => 385,  577 => 384,  575 => 383,  568 => 379,  562 => 376,  550 => 367,  544 => 366,  538 => 365,  532 => 364,  526 => 363,  498 => 338,  494 => 337,  473 => 319,  455 => 304,  445 => 296,  439 => 294,  437 => 293,  433 => 292,  427 => 291,  421 => 290,  415 => 289,  409 => 288,  399 => 281,  395 => 280,  379 => 266,  372 => 262,  367 => 260,  358 => 254,  354 => 253,  351 => 252,  349 => 251,  343 => 248,  338 => 246,  330 => 241,  326 => 240,  321 => 238,  313 => 233,  309 => 232,  304 => 230,  272 => 200,  270 => 193,  266 => 191,  264 => 176,  261 => 175,  259 => 166,  137 => 47,  123 => 36,  119 => 35,  115 => 34,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  91 => 27,  89 => 26,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/base.html.twig", "/home/c1462208c/public_html/app/Resources/views/layout/base.html.twig");
    }
}
