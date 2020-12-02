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

/* @App/Default/index.html.twig */
class __TwigTemplate_8c88b421044f4fcabc1d2345fc21713334e7a5598d8770581d200dab5ce01423 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'modals' => [$this, 'block_modals'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/base.html.twig", "@App/Default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<style>
    .blog-slider-style5 .blog-grid-item-container {
        position: relative;
        height: 100%;
        border-radius: 8px;
        background-size: cover;
        background-position: 50% 50%;
        overflow: hidden;
    }

    .sh-blog-fancy-title-container{
        padding-right: -30px;
        padding-left:-30px;
    } 
    .sh-blog-fancy-title {
        margin-bottom: 15px;
        font-size: 20px;
        color: #fc7f05;
        text-transform: capitalize;
    }

    .header-left{
        padding-top:50px;
    }
    .header-left h1 {
        font-size: 40px;
        line-height: 1;
    }
    .pb-20 {
        padding-bottom: 20px;
    }
    .pt-20 {
        padding-top: 20px;
    }
    .header-left .vdo-section img {
        cursor: pointer;
    }
    .header-left .vdo-section span {
        padding-left: 20px;
        font-size: 14px;
        font-weight: 500;
    }
    .seller-promotion__overlay {
        width: 50px;
    }
    
    .seller-promotion__overlay {
        position: absolute;
        top: 0px;
        bottom: 0px;
        left: 0px;
        right: auto;
        background-size: cover;
        background-position: right center;
        background-repeat: no-repeat;
    }

    .block.block-club-home {
    background: url(";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner_long.png"), "html", null, true);
        echo ") no-repeat center center;
    box-shadow: 0 2px 48px 1px rgba(0,0,0,.11);
    border-radius: 5px;
    background-size: cover;
    background-clip: content-box;
    overflow: hidden;
    height: 400px;
    border-radius: 5px;
    opacity:0.8;
    
    }
    
        



</style>


    ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 80), "getLocale", [], "method", false, false, false, 80) == "fr")) {
            // line 81
            echo "    <div class=\"mainSliderContainer\">
        <div class=\"owl-carousel owl-theme main_slider \">

            <div class=\"owl-item \">
                <div class=\"main-banner-content welcome-wrap\" style=\"margin-top:30px; width:100%; background: url(";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img_1.jpeg"), "html", null, true);
            echo ") no-repeat center;  background-size:cover; height:350px;\">
                    <div class=\"overlay overlay-bg\" style=\"background: rgba(4, 9, 30, 0.418);\"></div>\t
                    <div class=\"container\" style=\"margin:auto;\">
                        <div class=\"row mb-5 col-lg-8 col-12  d-none d-lg-block \">
                            <h1 style=\"color:#fff; font-size:28px;\">
                                Bienvenu sur mef-assodoves
                            </h1>
                            <div> 
                               <h2 style=\"color:#fff; font-size:20px; margin-top:16px; margin-bottom: 20px;\">
                                   Ensemble donnons une chance aux enfants dont la misere et la pauvrete  conpromettent les chances de l'education
                               </h2> 
                            </div>
                            <div>
                                <a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fund_checkout_page");
            echo "\" style=\"
                                        text-transform: uppercase;
                                        box-shadow: 0 2px 12px -6px #00b8b1!important;
                                        padding: 10px 20px;
                                        font-size: 14px;
                                        line-height: 28px;
                                        font-weight:600;
                                        cursor:pointer;
                                        background-color: #00b8b1;
                                        font-weight: 500 !important;
                                        border-radius: 30px;
                                        text-transform: uppercase;
                                        color: #fff;\">
                                        <i class=\"far fa-heart\" style=\"margin-right:10px;\"></i>Faites un don
                                        </a>
                                
                            </div>
                            
                        </div>
                    </div>        
                </div>
            </div>
            <div class=\"owl-item \">
                <div class=\"main-banner-content welcome-wrap\" style=\"margin-top:30px; width:100%; background: url(";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img_2.jpeg"), "html", null, true);
            echo ") no-repeat center;  background-size:cover; height:350px;\">
                    <div class=\"overlay overlay-bg\" style=\"background: rgba(4, 9, 30, 0.418);\"></div>
                    <div class=\"container\" style=\"margin:auto;\">
                        <div class=\"row mb-5 col-lg-8 col-12 d-none d-lg-block\">
                            <h1 style=\"color:#fff; font-size:28px;\">Devenez volotaire</h1>
                            <div> 
                               <h2 style=\"color:#fff; font-size:20px; margin-top:16px; margin-bottom: 20px;\">
                                   Pour qu'ensemble nous pouisson menner cette noble action
                               </h2> 
                            </div>
                            <div>
                                <a href=\"#fundModal\" style=\"
                                        text-transform: uppercase;
                                        box-shadow: 0 2px 12px -6px #00b8b1!important;
                                        padding: 10px 20px;
                                        font-size: 14px;
                                        line-height: 28px;
                                        font-weight:600;
                                        cursor:pointer;
                                        background-color: #00b8b1;
                                        font-weight: 500 !important;
                                        border-radius: 30px;
                                        text-transform: uppercase;
                                        color: #fff;\">
                                        Devenez volontaire
                                        </a>
                                
                            </div>
                            
                        </div>
                    </div>        
                </div>
            </div> 
            <div class=\"owl-item \">
                <div class=\"main-banner-content welcome-wrap\" style=\"margin-top:30px; width:100%; background: url(";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img_4.jpeg"), "html", null, true);
            echo ") no-repeat center;  background-size:cover; height:350px;\">
                    <div class=\"overlay overlay-bg\" style=\"background: rgba(4, 9, 30, 0.418);\"></div>
                    <div class=\"container\" style=\"margin:auto;\">
                        <div class=\"row mb-5 col-lg-8 col-12 d-none d-lg-block\">
                            <h1 style=\"color:#fff; font-size:28px;\">Parcourez notre blog d'actualités</h1>
                            <div> 
                               <h2 style=\"color:#fff; font-size:20px; margin-top:16px; margin-bottom: 20px;\">
                                Et ne ratez aucune des nos actions sur le terrain
                               </h2> 
                            </div>
                            <div>
                                <a href=\"";
            // line 166
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
            echo "\" style=\"
                                        text-transform: uppercase;
                                        box-shadow: 0 2px 12px -6px #00b8b1!important;
                                        padding: 10px 20px;
                                        font-size: 14px;
                                        line-height: 28px;
                                        font-weight:600;
                                        cursor:pointer;
                                        background-color: #00b8b1;
                                        font-weight: 500 !important;
                                        border-radius: 30px;
                                        text-transform: uppercase;
                                        color: #fff;\">
                                        Aller sur la page
                                        </a>
                                
                            </div>
                            
                        </div>
                    </div>        
                </div>
            </div>             
                       

        </div>        
    </div>

    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 193
($context["app"] ?? null), "request", [], "any", false, false, false, 193), "getLocale", [], "method", false, false, false, 193) == "en")) {
            // line 194
            echo "
    <div class=\"mainSliderContainer\">
        <div class=\"owl-carousel owl-theme main_slider \">

            <div class=\"owl-item \">
                <div class=\"main-banner-content welcome-wrap\" style=\"margin-top:30px; width:100%; background: url(";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3911.jpg"), "html", null, true);
            echo ") no-repeat center;  background-size:cover; height:350px;\">
                    <div class=\"overlay overlay-bg\" style=\"background: rgba(4, 9, 30, 0.418);\"></div>\t
                    <div class=\"container\" style=\"margin:auto;\">
                        <div class=\"row mb-5 col-lg-8 col-12  d-none d-lg-block \">
                            <h1 style=\"color:#fff; font-size:28px;\">
                                Welcome to mef-assodoves
                            </h1>
                            <div> 
                               <h2 style=\"color:#fff; font-size:20px; margin-top:16px; margin-bottom: 20px;\">
                                Together let's give a chance to children whose poverty and poverty are conprosing the chances of education
                               </h2> 
                            </div>
                            <div>
                                <a href=\"";
            // line 212
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fund_checkout_page");
            echo "\" style=\"
                                        text-transform: uppercase;
                                        box-shadow: 0 2px 12px -6px #00b8b1!important;
                                        padding: 10px 20px;
                                        font-size: 14px;
                                        line-height: 28px;
                                        font-weight:600;
                                        cursor:pointer;
                                        background-color: #00b8b1;
                                        font-weight: 500 !important;
                                        border-radius: 30px;
                                        text-transform: uppercase;
                                        color: #fff;\">
                                        <i class=\"far fa-heart\" style=\"margin-right:10px;\"></i>Donate
                                        </a>
                                
                            </div>
                            
                        </div>
                    </div>        
                </div>
            </div>
            <div class=\"owl-item \">
                <div class=\"main-banner-content welcome-wrap\" style=\"margin-top:30px; width:100%; background: url(";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_4.jpg"), "html", null, true);
            echo ") no-repeat center;  background-size:cover; height:350px;\">
                    <div class=\"overlay overlay-bg\" style=\"background: rgba(4, 9, 30, 0.418);\"></div>
                    <div class=\"container\" style=\"margin:auto;\">
                        <div class=\"row mb-5 col-lg-8 col-12 d-none d-lg-block\">
                            <h1 style=\"color:#fff; font-size:28px;\">Become a volunteer</h1>
                            <div> 
                               <h2 style=\"color:#fff; font-size:20px; margin-top:16px; margin-bottom: 20px;\">
                                So that together we can lead this noble action
                               </h2> 
                            </div>
                            <div>
                                <a href=\"#fundModal\" style=\"
                                        text-transform: uppercase;
                                        box-shadow: 0 2px 12px -6px #00b8b1!important;
                                        padding: 10px 20px;
                                        font-size: 14px;
                                        line-height: 28px;
                                        font-weight:600;
                                        cursor:pointer;
                                        background-color: #00b8b1;
                                        font-weight: 500 !important;
                                        border-radius: 30px;
                                        text-transform: uppercase;
                                        color: #fff;\">
                                        Become a volunteer
                                        </a>
                                
                            </div>
                            
                        </div>
                    </div>        
                </div>
            </div> 
            <div class=\"owl-item \">
                <div class=\"main-banner-content welcome-wrap\" style=\"margin-top:30px; width:100%; background: url(";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_1.jpg"), "html", null, true);
            echo ") no-repeat center;  background-size:cover; height:350px;\">
                    <div class=\"overlay overlay-bg\" style=\"background: rgba(4, 9, 30, 0.418);\"></div>
                    <div class=\"container\" style=\"margin:auto;\">
                        <div class=\"row mb-5 col-lg-8 col-12 d-none d-lg-block\">
                            <h1 style=\"color:#fff; font-size:28px;\">Browse our news blog</h1>
                            <div> 
                               <h2 style=\"color:#fff; font-size:20px; margin-top:16px; margin-bottom: 20px;\">
                                And don't miss any of our actions on the ground
                               </h2> 
                            </div>
                            <div>
                                <a href=\"";
            // line 280
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
            echo "\" style=\"
                                        text-transform: uppercase;
                                        box-shadow: 0 2px 12px -6px #00b8b1!important;
                                        padding: 10px 20px;
                                        font-size: 14px;
                                        line-height: 28px;
                                        font-weight:600;
                                        cursor:pointer;
                                        background-color: #00b8b1;
                                        font-weight: 500 !important;
                                        border-radius: 30px;
                                        text-transform: uppercase;
                                        color: #fff;\">
                                        Go to the page
                                        </a>
                                
                            </div>
                            
                        </div>
                    </div>        
                </div>
            </div>             
                       

        </div>        
    </div>
    ";
        }
        // line 307
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 307), "getLocale", [], "method", false, false, false, 307) == "fr")) {
            echo " 
    <div class=\"\" style=\"padding-bottom: 30px;\">
        <div class=\"page-margin-modif\">
            <div class=\"container\" >
                <div class=\"row\" style=\"margin-top:50px;\">
                    <div class=\"text-center col-12\">
                        <h2 class=\"heading heading--2 section-v3__heading \">
                            ET SI EUX-AUSSI, ils pouvaient aller à l’école ?
                        </h2>
                        <p class=\"paragraph section-v3__paragraph\">
                            MENIF-assodoves est une Association caritatice, philanthropique et a but non lucratif. Elle a pour mission de sauver des Mozarts dont la misere compromet gravement les chances de reussite
                        </p>
                    </div>
                    <div class=\"col-lg-4 col-12\">
                        <div class=\"card mb-3 text-center\" style=\"box-shadow: 0 0 12px rgba(128,128,128,.2); border:none; border-radius:8px;padding: 1.25rem;\">
                            <div class=\"\">
                                <div class=\"mb-3\">
                                <img src=\"";
            // line 324
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product_explain_1.png"), "html", null, true);
            echo "\" alt=\"\" style=\"height:70px;\">
                                </div>
                            
                                <h2 class=\"mb-4\" style=\"font-size: 20px;color: #00b8b1;\">Aidez nous à les aider</h2>
                                <a class=\"cartridge\" style=\"background-color: #00b8b1; color:#fff;\" href=\"";
            // line 328
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fund_checkout_page");
            echo "\">Faites un don</a>
                                <p class=\"mt-4\" style=\"font-size: .875rem;\">Pour qu'ensemble nous puission leurs apporter un scolarisation</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-12\">
                        <div class=\"card mb-3 text-center\" style=\"box-shadow: 0 0 12px rgba(128,128,128,.2); border:none; border-radius:8px;padding: 1.25rem;\">
                            <div class=\"\">
                                <div class=\"mb-3\">
                                <img src=\"";
            // line 338
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product_explain_2.png"), "html", null, true);
            echo "\" alt=\"\" style=\"height:70px;\">
                                </div>
                                <h2 class=\"mb-4\" style=\"font-size: 20px;color: rgb(244, 89, 121);\">Parcourez notre blog d'actualité</h2>
                                <a class=\"cartridge\" style=\"background-color: rgb(244, 89, 121); color:#fff\"; \" href=\"";
            // line 341
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
            echo "\">Aller sur la page</a>
                                <p class=\"mt-4\" style=\"font-size: .875rem;\">Et ne ratez aucune des nos actions sur le terrain</p>
                                <a class=\"btn-link list-item__link\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-12\">
                        <div class=\"card mb-3 text-center\" style=\"box-shadow: 0 0 12px rgba(128,128,128,.2); border:none; border-radius:8px;padding: 1.25rem;\">
                            <div class=\"\">
                                <div class=\"mb-3\">
                                <img src=\"";
            // line 351
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product_explain_3.png"), "html", null, true);
            echo "\" alt=\"\" style=\"height:70px;\">
                                </div>
                                <h2 class=\"mb-4\" style=\"font-size: 20px;color: rgb(153, 94, 191);\">Devenez Volontaire</h2>
                                <span class=\"cartridge\" style=\"background-color: rgb(153, 94, 191); color:#fff\"; \" href=\"#fundModal\">Devenir volontaire</span>
                                <p class=\"mt-4\" style=\"font-size: .875rem;\">Pour qu'ensemble nous pouisson menner cette noble action</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class=\"col text-center\">
                        <p class=\"mt-5\" style=\"font-size: 16px; font-weight:500;\">
                            mef-assodoves a été créée en 2019 à ver sur launette en France, à l’occasion d'une assemblée générale constitutive qui a porté à sa présidence Madame Meny Etoa Florence

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 372
($context["app"] ?? null), "request", [], "any", false, false, false, 372), "getLocale", [], "method", false, false, false, 372) == "en")) {
            // line 373
            echo "<div class=\"\" style=\"padding-bottom: 30px;\">
        <div class=\"page-margin-modif\">
            <div class=\"container\" >
                <div class=\"row\" style=\"margin-top:50px;\">
                    <div class=\"text-center col-12\">
                        <h2 class=\"heading heading--2 section-v3__heading \">
                            AND IF THEY could also go to school?
                        </h2>
                        <p class=\"paragraph section-v3__paragraph\">
                            MENIF-assodoves is a caritatice, philanthropic and non-profit association. Its mission is to save Mozarts whose misere seriously jeopardizes the chances of success
                        </p>
                    </div>
                    <div class=\"col-lg-4 col-12\">
                        <div class=\"card mb-3 text-center\" style=\"box-shadow: 0 0 12px rgba(128,128,128,.2); border:none; border-radius:8px;padding: 1.25rem;\">
                            <div class=\"\">
                                <div class=\"mb-3\">
                                <img src=\"";
            // line 389
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product_explain_1.png"), "html", null, true);
            echo "\" alt=\"\" style=\"height:70px;\">
                                </div>
                            
                                <h2 class=\"mb-4\" style=\"font-size: 20px;color: #00b8b1;\">Help us help them</h2>
                                <a class=\"cartridge\" style=\"background-color: #00b8b1; color:#fff;\" href=\"";
            // line 393
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fund_checkout_page");
            echo "\">Donate</a>
                                <p class=\"mt-4\" style=\"font-size: .875rem;\">So that together we can bring them schooling</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-12\">
                        <div class=\"card mb-3 text-center\" style=\"box-shadow: 0 0 12px rgba(128,128,128,.2); border:none; border-radius:8px;padding: 1.25rem;\">
                            <div class=\"\">
                                <div class=\"mb-3\">
                                <img src=\"";
            // line 403
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product_explain_2.png"), "html", null, true);
            echo "\" alt=\"\" style=\"height:70px;\">
                                </div>
                                <h2 class=\"mb-4\" style=\"font-size: 20px;color: rgb(244, 89, 121);\">Browse our news blog</h2>
                                <a class=\"cartridge\" style=\"background-color: rgb(244, 89, 121); color:#fff\"; \" href=\"";
            // line 406
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
            echo "\">Go to the page</a>
                                <p class=\"mt-4\" style=\"font-size: .875rem;\">And don't miss any of our actions on the ground</p>
                                <a class=\"btn-link list-item__link\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-12\">
                        <div class=\"card mb-3 text-center\" style=\"box-shadow: 0 0 12px rgba(128,128,128,.2); border:none; border-radius:8px;padding: 1.25rem;\">
                            <div class=\"\">
                                <div class=\"mb-3\">
                                <img src=\"";
            // line 416
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product_explain_3.png"), "html", null, true);
            echo "\" alt=\"\" style=\"height:70px;\">
                                </div>
                                <h2 class=\"mb-4\" style=\"font-size: 20px;color: rgb(153, 94, 191);\">Become a Volunteer</h2>
                                <span class=\"cartridge\" style=\"background-color: rgb(153, 94, 191); color:#fff\"; \" href=\"#fundModal\">register</span>
                                <p class=\"mt-4\" style=\"font-size: .875rem;\">So that together we can lead this noble action</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class=\"col text-center\">
                        <p class=\"mt-5\" style=\"font-size: 16px; font-weight:500;\">
                            mef-assodoves was created in 2019 to worm on the unette in France, on the occasion of a constituent general assembly that brought to its presidency Mrs Meny Etoa Florence

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
        }
        // line 438
        echo "    
    ";
        // line 439
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 439), "getLocale", [], "method", false, false, false, 439) == "fr")) {
            echo " 
    <section class=\"ftco-section main_service_section\" style=\"padding-top:-20px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"text-center col-12\">
                    <h2 class=\"heading heading--2 section-v3__heading \">
                        Nos oeuvres portent sur ces principaux accents
                    </h2>
                    <p class=\"paragraph section-v3__paragraph\">
                        Améloirer le cadre de vie de enfant pour leurs apporter une éducation adéquate pour et ainsi lutter contre la pauvreté
                    </p>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 grid-showcase-left__card border-light-gray-1px grid-showcase-left__card--active\">
                                    <i class=\"fa fa-school grid-showcase-left-card__icon\"></i>
                                    <span class=\"heading heading--3 grid-showcase-left-card__title\">
                                        Améloirer les infractructures des écoles
                                    </span>
                                </div>
    
                                <div class=\"col-lg-6 grid-showcase-left__card border-light-gray-1px grid-showcase-left__card--active\">
                                    <i class=\"fa fa-book grid-showcase-left-card__icon\"></i>
                                    <span class=\"heading heading--3 grid-showcase-left-card__title\">
                                        Apporter des livres et cahiers à ces enfants
                                    </span>
                                </div>
    
                                <div class=\"col-lg-6 grid-showcase-left__card border-light-gray-1px grid-showcase-left__card--active\">
                                    <i class=\"fa fa-chalkboard-teacher grid-showcase-left-card__icon\"></i>
                                    <span class=\"heading heading--3 grid-showcase-left-card__title\">
                                        Aider à améloirer les conditions de travail des enseignants
                                    </span>
                                </div>
    
                                <div class=\"col-lg-6 grid-showcase-left__card border-light-gray-1px grid-showcase-left__card--active\">
                                    <i class=\"fa fa-leaf grid-showcase-left-card__icon\"></i>
                                    <span class=\"heading heading--3 grid-showcase-left-card__title\">
                                        Creer un cadre et environment saint pour les études                                    </span>
                                </div>
    
                            </div>
    
                        </div>
                        <div class=\"col-lg-7\">
                            <div class=\"grid-showcase__right\">
                                <img class=\"grid-showcase-img\" src=\"";
            // line 487
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3907.jpg"), "html", null, true);
            echo "\" style=\"height:350px;\">
                                <br>
                                <p class=\"paragraph\">
                                    Selon l’Unesco, en 2020 un sur cinq enfants, adolescents et jeunes n’est pas scolarisé. Cela
                                    revient à plus de 265 millions de personnes qui ne peuvent pas recevoir d’éducation 
                                    <br>
                                    Heureusement, tous ne sont pas dans cette situation ; et si nous, participions tous à ce que ce
                                    nombre diminue chaque jour un peu plus en devenant donateur ?
                                </p>
                                <div class=\"grid-showcase-right__actions\">
                                    <a class=\"button button--secondary \" href=\"";
            // line 497
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
            echo "\" id=\"000-link_home_grid-showcase_free-sign-up\" role=\"button\">
                                   A propos de nous
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    
            </div>

            </div>
            

        </div>
    </section>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 512
($context["app"] ?? null), "request", [], "any", false, false, false, 512), "getLocale", [], "method", false, false, false, 512) == "en")) {
            // line 513
            echo "    <section class=\"ftco-section main_service_section\" style=\"padding-top:-20px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"text-center col-12\">
                    <h2 class=\"heading heading--2 section-v3__heading \">
                        Our works focus on these main accents
                    </h2>
                    <p class=\"paragraph section-v3__paragraph\">
                        To light up the child's living environment to provide them with an adequate education to fight poverty
                    </p>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 grid-showcase-left__card border-light-gray-1px grid-showcase-left__card--active\">
                                    <i class=\"fa fa-school grid-showcase-left-card__icon\"></i>
                                    <span class=\"heading heading--3 grid-showcase-left-card__title\">
                                        Lighten school infrastructure
                                    </span>
                                </div>
    
                                <div class=\"col-lg-6 grid-showcase-left__card border-light-gray-1px grid-showcase-left__card--active\">
                                    <i class=\"fa fa-book grid-showcase-left-card__icon\"></i>
                                    <span class=\"heading heading--3 grid-showcase-left-card__title\">
                                        Bring books and notebooks to these children
                                    </span>
                                </div>
    
                                <div class=\"col-lg-6 grid-showcase-left__card border-light-gray-1px grid-showcase-left__card--active\">
                                    <i class=\"fa fa-chalkboard-teacher grid-showcase-left-card__icon\"></i>
                                    <span class=\"heading heading--3 grid-showcase-left-card__title\">
                                        Helping to improve teachers' working conditions
                                    </span>
                                </div>
    
                                <div class=\"col-lg-6 grid-showcase-left__card border-light-gray-1px grid-showcase-left__card--active\">
                                    <i class=\"fa fa-leaf grid-showcase-left-card__icon\"></i>
                                    <span class=\"heading heading--3 grid-showcase-left-card__title\">
                                        Creating a holy framework and environment for studies                                   </span>
                                </div>
    
                            </div>
    
                        </div>
                        <div class=\"col-lg-7\">
                            <div class=\"grid-showcase__right\">
                                <img class=\"grid-showcase-img\" src=\"";
            // line 560
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3907.jpg"), "html", null, true);
            echo "\" style=\"height:350px;\">
                                <br>
                                <p class=\"paragraph\">
                                    According to Unesco, by 2020 one in five children, adolescents and young people, is out of school. This
                                    more than 265 million people who cannot receive education 
                                    <br>
                                    Fortunately, not everyone is in this situation; and if we all participate in making this
                                    number decreases every day a little more by becoming a donor?
                                </p>
                                <div class=\"grid-showcase-right__actions\">
                                    <a class=\"button button--secondary \" href=\"";
            // line 570
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about_page");
            echo "\" id=\"000-link_home_grid-showcase_free-sign-up\" role=\"button\">
                                        About Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
    
            </div>

            </div>
            

        </div>
    </section>
    ";
        }
        // line 586
        echo "

    ";
        // line 588
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 588), "getLocale", [], "method", false, false, false, 588) == "fr")) {
            echo " 

    <a class=\"btn d-block\" data-toggle=\"modal\" href=\"#fundModal\" >   
        <section class=\"callto-action-area newslatter-banner-action-area relative section-gap\" style=\"background: url(";
            // line 591
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/newsletter.jpg"), "html", null, true);
            echo "); background-size: cover;\">
                <div class=\"overlay overlay-bg\" style=\"\"></div>\t
                
                <div class=\"container calto-action-container text-center\" style=\"width:600px; margin:auto;\">
                    <h3 class=\"d-block d-lg-none\" style=\"font-size:18px; height:50px; color:#fff; position:relative; top:-20px;\">
                        Devenez volontaires maintenant !
                    </h3>
                    <div class=\"row d-flex justify-content-center \" style=\"padding-top:-50px;\">

                        <div class=\" col-lg-9 col-12 \">

                            <div class=\"title text-center d-none d-lg-block\" style=\"position:relative; top:-40px;\">
                                <h3 class=\"mt-10 text-white \">Rejoignez notre équipe</h3>
                                <p class=\"text-white d-none d-lg-block\">Ensemble aidons ces enfant à recevoir une meilleur éducation</p>
                                <a class=\"btn d-block\" data-toggle=\"modal\" href=\"#fundModal\"
                                style=\"
                                font-size: 13px !important;
background-color: #00c292;
padding: 15px 30px !important;
    font-weight: 600 !important;
    border-radius: 4px;
    text-transform: uppercase;
    border:none;
    color:#fff;
    font-weight:500;
    font-size:13px;

box-shadow: 0 2px 12px -6px #00c292!important;
                                \">Devenir Volontaire</a>
                            </div>
                        </div>
                    </div>\t
                </div>\t
        </section>
        <!-- End calto-action Area -->
    </a>        

    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 628
($context["app"] ?? null), "request", [], "any", false, false, false, 628), "getLocale", [], "method", false, false, false, 628) == "en")) {
            echo "  
    <a class=\"btn d-block\" data-toggle=\"modal\" href=\"#fundModal\" >   
        <section class=\"callto-action-area newslatter-banner-action-area relative section-gap\" style=\"background: url(";
            // line 630
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/newsletter.jpg"), "html", null, true);
            echo "); background-size: cover;\">
                <div class=\"overlay overlay-bg\" style=\"\"></div>\t
                
                <div class=\"container calto-action-container text-center\" style=\"width:600px; margin:auto;\">
                    <h3 class=\"d-block d-lg-none\" style=\"font-size:18px; height:50px; color:#fff; position:relative; top:-20px;\">
                        Become volunteers now!
                    </h3>
                    <div class=\"row d-flex justify-content-center \" style=\"padding-top:-50px;\">

                        <div class=\" col-lg-9 col-12 \">

                            <div class=\"title text-center d-none d-lg-block\" style=\"position:relative; top:-40px;\">
                                <h3 class=\"mt-10 text-white \">Join our team</h3>
                                <p class=\"text-white d-none d-lg-block\">Together let's help these children get a better education</p>
                                <a class=\"btn d-block\" data-toggle=\"modal\" href=\"#fundModal\"
                                style=\"
                                font-size: 13px !important;
background-color: #00c292;
padding: 15px 30px !important;
    font-weight: 600 !important;
    border-radius: 4px;
    text-transform: uppercase;
    border:none;
    color:#fff;
    font-weight:500;
    font-size:13px;

box-shadow: 0 2px 12px -6px #00c292!important;
                                \">Becoming a Volunteer</a>
                            </div>
                        </div>
                    </div>\t
                </div>\t
        </section>
        <!-- End calto-action Area -->
    </a>        
 
    ";
        }
        // line 667
        echo "    
  

    ";
        // line 670
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 670), "getLocale", [], "method", false, false, false, 670) == "fr")) {
            // line 671
            echo "
    <div class=\"home-page-limestone\">
        <div class=\"container\">
            <div class=\"row align-items-end\">
                <div class=\"coL-12 col-lg-6\">
                    <div class=\"section-heading\">
                        <h2 class=\"entry-title\" style=\"font-size: 22px;\">
                            Nous aimons aider tous les enfants qui ont des problèmes d'éducation dans le monde.  
                        </h2>
    
                        <p class=\"mt-5\">
                            Nous comptons lutter afin d'atteindre des nobreux objectifs.
                        </p>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
    
                <div class=\"col-12 col-lg-6\">
                    <div class=\"milestones d-flex flex-wrap justify-content-between\">
                        <div class=\"col-6 col-sm-4 mt-5 mt-lg-0\">
                            <div class=\"counter-box\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <img src=\"";
            // line 692
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/teamwork.png"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
    
                                <div class=\"d-flex justify-content-center align-items-baseline\">
                                    <div class=\"start-counter\" data-to=\"120\" data-speed=\"2000\" style=\"font-size: 22px;\">2000</div>
                                    <div class=\"counter-k\">K</div>
                                </div>
    
                                <h3 class=\"entry-title\">Enfants Aidé</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
    
                        <div class=\"col-6 col-sm-4 mt-5 mt-lg-0\">
                            <div class=\"counter-box\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <img src=\"";
            // line 707
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/donation.png"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
    
                                <div class=\"d-flex justify-content-center align-items-baseline\">
                                    <div class=\"start-counter\" data-to=\"79\" data-speed=\"2000\" style=\"font-size: 22px;\">79</div>
                                </div>
    
                                <h3 class=\"entry-title\">Ecoles construites</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
    
                        <div class=\"col-6 col-sm-4 mt-5 mt-lg-0\">
                            <div class=\"counter-box\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <img src=\"";
            // line 721
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dove.png"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
    
                                <div class=\"d-flex justify-content-center align-items-baseline\">
                                    <div class=\"start-counter\" data-to=\"253\" data-speed=\"2000\" style=\"font-size: 22px;\">253</div>
                                </div>
    
                                <h3 class=\"entry-title\">Volunteeres</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div><!-- .milestones -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->
                
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 737
($context["app"] ?? null), "request", [], "any", false, false, false, 737), "getLocale", [], "method", false, false, false, 737) == "en")) {
            // line 738
            echo "    <div class=\"home-page-limestone\">
        <div class=\"container\">
            <div class=\"row align-items-end\">
                <div class=\"coL-12 col-lg-6\">
                    <div class=\"section-heading\">
                        <h2 class=\"entry-title\" style=\"font-size: 22px;\">
                            We like to help all children who have educational problems in the world.  
                        </h2>
    
                        <p class=\"mt-5\">
                            We intend to fight to achieve ours goals.
                        </p>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
    
                <div class=\"col-12 col-lg-6\">
                    <div class=\"milestones d-flex flex-wrap justify-content-between\">
                        <div class=\"col-6 col-sm-4 mt-5 mt-lg-0\">
                            <div class=\"counter-box\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <img src=\"";
            // line 758
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/teamwork.png"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
    
                                <div class=\"d-flex justify-content-center align-items-baseline\">
                                    <div class=\"start-counter\" data-to=\"120\" data-speed=\"2000\" style=\"font-size: 22px;\">2000</div>
                                    <div class=\"counter-k\">K</div>
                                </div>
    
                                <h3 class=\"entry-title\">Helped children</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
    
                        <div class=\"col-6 col-sm-4 mt-5 mt-lg-0\">
                            <div class=\"counter-box\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <img src=\"";
            // line 773
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/donation.png"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
    
                                <div class=\"d-flex justify-content-center align-items-baseline\">
                                    <div class=\"start-counter\" data-to=\"79\" data-speed=\"2000\" style=\"font-size: 22px;\">79</div>
                                </div>
    
                                <h3 class=\"entry-title\">Build schools</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
    
                        <div class=\"col-6 col-sm-4 mt-5 mt-lg-0\">
                            <div class=\"counter-box\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    <img src=\"";
            // line 787
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dove.png"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
    
                                <div class=\"d-flex justify-content-center align-items-baseline\">
                                    <div class=\"start-counter\" data-to=\"253\" data-speed=\"2000\" style=\"font-size: 22px;\">253</div>
                                </div>
    
                                <h3 class=\"entry-title\">Volunteeres</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div><!-- .milestones -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->
    ";
        }
        // line 803
        echo "


";
    }

    // line 807
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 808
        echo "

";
    }

    // line 813
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 814
        echo "    <script>

        initMainSlider();

        function initMainSlider()
        {
            if(\$('.main_slider').length)
            {
                var mainSlider = \$('.main_slider');
                mainSlider.owlCarousel({
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    autoplay: true,
                    loop:true,
                    infinite:true,
                    lazyload: true, 
                    autoplaySpeed: 600,
                    dots:false,
                    nav:false,
                    responsive:
                    {
                        0:{items:1},
                        480:{items:1},
                        768:{items:1},
                        991:{items:1},
                        1280:{items:1},
                        1440:{items:1}
                    }
                });

               
        
 
            }
        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "@App/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1012 => 814,  1008 => 813,  1002 => 808,  998 => 807,  991 => 803,  972 => 787,  955 => 773,  937 => 758,  915 => 738,  913 => 737,  894 => 721,  877 => 707,  859 => 692,  836 => 671,  834 => 670,  829 => 667,  788 => 630,  783 => 628,  743 => 591,  737 => 588,  733 => 586,  714 => 570,  701 => 560,  652 => 513,  650 => 512,  632 => 497,  619 => 487,  568 => 439,  565 => 438,  540 => 416,  527 => 406,  521 => 403,  508 => 393,  501 => 389,  483 => 373,  481 => 372,  457 => 351,  444 => 341,  438 => 338,  425 => 328,  418 => 324,  397 => 307,  367 => 280,  353 => 269,  316 => 235,  290 => 212,  274 => 199,  267 => 194,  265 => 193,  235 => 166,  221 => 155,  184 => 121,  158 => 98,  142 => 85,  136 => 81,  134 => 80,  112 => 61,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@App/Default/index.html.twig", "/home/c1462208c/public_html/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
