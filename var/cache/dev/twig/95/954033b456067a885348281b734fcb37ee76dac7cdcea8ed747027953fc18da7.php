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

/* @App/Default/blog_index.html.twig */
class __TwigTemplate_654cfc7b3bcc790809de681937695fa7a0cffb4e2dfb67c0b719361c2d97e6d8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Default/blog_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Default/blog_index.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "@App/Default/blog_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\" nonce=\"wdpjASki\"></script>
    <section class=\"mansory_galery\" style=\"margin-top: 10px;\">
        <div class=\"container\" >
            <div class=\"row\">
                <nav aria-label=\"breadcrumb\" style=\"margin-top:30px; margin-bottom:-25px;\">
                    <ol class=\"breadcrumb\" style=\"background-color: unset;\">
                        ";
        // line 10
        if ((isset($context["catalogueName"]) || array_key_exists("catalogueName", $context) ? $context["catalogueName"] : (function () { throw new RuntimeError('Variable "catalogueName" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                            <li class=\"breadcrumb-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_1"), "html", null, true);
            echo "</a></li>
                            <li class=\"breadcrumb-item\"><a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_3"), "html", null, true);
            echo "</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #3f3f3f; font-weight:500;\">";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["catalogueName"]) || array_key_exists("catalogueName", $context) ? $context["catalogueName"] : (function () { throw new RuntimeError('Variable "catalogueName" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</li>
                        ";
        } else {
            // line 15
            echo "                            <li class=\"breadcrumb-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_1"), "html", null, true);
            echo "</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #3f3f3f; font-weight:500;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_3"), "html", null, true);
            echo "</li>
                        ";
        }
        // line 18
        echo "                    </ol>
                </nav>
            </div>
";
        // line 25
        echo "            <div class=\"row\" style=\"margin-top:-30px; \">
                <div class=\"col-lg-9 overflow-hidden\" style=\"margin-bottom:40px;\">
                    <div class=\"section_content\"  style=\"padding-top:30px;\">
                        <div class=\"grid\" >
                            <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide \" data-ride=\"carousel\" data-interval=\"5000\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                        <img class=\"\" width=\"100%\" height=\"410\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_1.JPG"), "html", null, true);
        echo "\" alt=\"First slide\">
                                    </div>
                                    <div class=\"carousel-item\" >
                                        <img class=\"\" width=\"100%\" height=\"410\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_2.JPG"), "html", null, true);
        echo "\" alt=\"Second slide\">
                                    </div>
                                    <div class=\"carousel-item\" >
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_3.JPG"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_4.JPG"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_5.JPG"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_6.JPG"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_7.JPG"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_8.JPG"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\" >
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_9.JPG"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog_images/blog_10.JPG"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                    </div>
                                    <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam.
                                        Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at
                                        erat eu libero consequat tempus. Quisque molestie convallis tempus.
                                    </p>
                                </div>

                            </div>


                            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["entity"]);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 73
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "getLocale", [], "method", false, false, false, 73) == "fr")) {
                // line 74
                echo "                                    <div class=\"card card_small_with_image grid-item\" >
                                        <img class=\"card-img-top\" src=\"";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "image", [], "any", false, false, false, 75), "AssetPath", [], "any", false, false, false, 75), "html", null, true);
                echo "\" alt=\"\" style=\"border-radius: 8px;border-bottom-left-radius: 0px !important;
                                        border-bottom-right-radius: 0px !important;\"/>
                                        <div class=\"card-body\">
                                            <div class=\"post-categories\"><a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_index", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "catalogue", [], "any", false, false, false, 78), "slug", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\" style=\"color: #00b8b1;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "catalogue", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
                echo "</a></div>
                                            <div class=\"card-title card-title-small\"><a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["entity"], "slug", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" style=\"color:#3f3f3f\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "title", [], "any", false, false, false, 79), "html", null, true);
                echo "</a></div>
                                            <small class=\"post_meta\">Publié par ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "user", [], "any", false, false, false, 80), "username", [], "any", false, false, false, 80), "html", null, true);
                echo "<span>le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "date", [], "any", false, false, false, 80), "m/d/Y"), "html", null, true);
                echo "</span></small>
                                        </div>
                                    </div>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 83
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "getLocale", [], "method", false, false, false, 83) == "en")) {
                // line 84
                echo "                                    <div class=\"card card_small_with_image grid-item\" >

                                        <img class=\"card-img-top\" src=\"";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "image", [], "any", false, false, false, 86), "AssetPath", [], "any", false, false, false, 86), "html", null, true);
                echo "\" alt=\"\" style=\"border-radius: 8px;border-bottom-left-radius: 0px !important;
                                        border-bottom-right-radius: 0px !important;\"/>
                                        <div class=\"card-body\">
                                            <div class=\"post-categories\"><a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_index", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "catalogue", [], "any", false, false, false, 89), "slug", [], "any", false, false, false, 89)]), "html", null, true);
                echo "\" style=\"color: #00b8b1;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "catalogue", [], "any", false, false, false, 89), "nameEn", [], "any", false, false, false, 89), "html", null, true);
                echo "</a></div>
                                            <div class=\"card-title card-title-small\"><a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["entity"], "slug", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\" style=\"color:#3f3f3f\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "titleEn", [], "any", false, false, false, 90), "html", null, true);
                echo "</a></div>
                                            <small class=\"post_meta\">Published by ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "user", [], "any", false, false, false, 91), "username", [], "any", false, false, false, 91), "html", null, true);
                echo "<span> on ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "date", [], "any", false, false, false, 91), "m/d/Y"), "html", null, true);
                echo "</span></small>
                                        </div>
                                    </div>
                                ";
            }
            // line 95
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"sidebar\" style=\"\">
                        <div class=\"sidebar_section\" style=\"\">
                            <div class=\"sidebar_title_container\" >
                                <h3  style=\"padding-top:20px; font-size: 18px; color: #505050; line-height: normal!important;\">";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar_titles.title_1"), "html", null, true);
        echo "</h3>
                            </div>
                            <div class=\"sidebar_section_content\" style=\" padding-top:30px !important;\">
                                <!-- Top Stories Slider -->
                                <div class=\"sidebar_slider_container\">
                                    ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sideBarArticles"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sideBarArticles"]) {
            // line 109
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "request", [], "any", false, false, false, 109), "getLocale", [], "method", false, false, false, 109) == "fr")) {
                // line 110
                echo "                                            <!-- Sidebar Post -->
                                            <div class=\"side_post\" style=\"border-bottom: 1px solid #f0f0f0;
                                    margin-bottom: 20px; padding-bottom: 10px;
                                   \">
                                                <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "slug", [], "any", false, false, false, 114)]), "html", null, true);
                echo "\">
                                                    <div class=\"d-flex flex-row align-items-xl-center align-items-start justify-content-start\">
                                                        <div class=\"side_post_image\"><div><img src=\"";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "image", [], "any", false, false, false, 116), "AssetPath", [], "any", false, false, false, 116), "html", null, true);
                echo "\" alt=\"\"></div></div>
                                                        <div class=\"side_post_content\">
                                                            <div class=\"article_title \" style=\"margin-bottom: 10px;
                                                    padding-top: 0;
                                                    width:100%;
                                                    height:35px;

                                                    overflow: hidden;
                                                    text-overflow:ellipsis;
                                                    color: #3f3f3f;
                                                    font-weight: 700;\">";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "title", [], "any", false, false, false, 126), "html", null, true);
                echo "</div>
                                                            <small class=\"post_meta\"><i class=\"fa fa-eye\"></i> ";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "seenCount", [], "any", false, false, false, 127), "html", null, true);
                echo "<span style=\"color: #8d8d8d!important;\">Publié le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "date", [], "any", false, false, false, 127), "m/d/Y"), "html", null, true);
                echo "</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 132
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "getLocale", [], "method", false, false, false, 132) == "en")) {
                // line 133
                echo "                                            <!-- Sidebar Post -->
                                            <div class=\"side_post\" style=\"border-bottom: 1px solid #f0f0f0;
                                    margin-bottom: 20px; padding-bottom: 10px;
                                   \">
                                                <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "slug", [], "any", false, false, false, 137)]), "html", null, true);
                echo "\">
                                                    <div class=\"d-flex flex-row align-items-xl-center align-items-start justify-content-start\">
                                                        <div class=\"side_post_image\"><div><img src=\"";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "image", [], "any", false, false, false, 139), "AssetPath", [], "any", false, false, false, 139), "html", null, true);
                echo "\" alt=\"\"></div></div>
                                                        <div class=\"side_post_content\">
                                                            <div class=\"article_title \" style=\"margin-bottom: 10px;
                                                    padding-top: 0;
                                                    width:100%;
                                                    height:35px;

                                                    overflow: hidden;
                                                    text-overflow:ellipsis;
                                                   color: #3f3f3f;
                                                    font-weight: 700;\">";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "titleEn", [], "any", false, false, false, 149), "html", null, true);
                echo "</div>
                                                            <small class=\"post_meta\"><i class=\"fa fa-eye\"></i> ";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "seenCount", [], "any", false, false, false, 150), "html", null, true);
                echo "<span style=\"color: #8d8d8d!important;\">Published on ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sideBarArticles"], "date", [], "any", false, false, false, 150), "m/d/Y"), "html", null, true);
                echo "</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        ";
            }
            // line 156
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sideBarArticles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "




                                    <div class=\"widget-title-styling\" style=\"padding-top:10px; margin-bottom:20px;\">
                                        <h3 class=\"widget-title\">";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar_titles.title_2"), "html", null, true);
        echo "</h3>
                                    </div>

                                    ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["catalogue"]);
        foreach ($context['_seq'] as $context["_key"] => $context["catalogue"]) {
            // line 167
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "request", [], "any", false, false, false, 167), "getLocale", [], "method", false, false, false, 167) == "fr")) {
                // line 168
                echo "                                            <div class=\"side_post\" style=\"
                                    margin-bottom: 20px; padding-bottom: 10px;
                                    \">
                                                <a href=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_index", ["slug" => twig_get_attribute($this->env, $this->source, $context["catalogue"], "slug", [], "any", false, false, false, 171)]), "html", null, true);
                echo "\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                                    <div class=\"d-flex flex-row align-items-xl-center align-items-start justify-content-start\">

                                                        <div class=\"side_post_content\" style=\"padding-left:unset;\">
                                                            <div class=\"side_post_title\" style=\"margin-bottom: 10px;
                                                    padding-top: 0;
                                                    padding-left:unset;
                                                    line-height: 135%!important; font-size:14px;color: #3f3f3f;
                                                    font-weight: 700;\"><span class=\"fa fa-chevron-circle-right\" style=\"margin-right:10px;\"></span> ";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "name", [], "any", false, false, false, 179), "html", null, true);
                echo "</div>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 185
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "request", [], "any", false, false, false, 185), "getLocale", [], "method", false, false, false, 185) == "en")) {
                // line 186
                echo "                                            <div class=\"side_post\" style=\"
                                    margin-bottom: 20px; padding-bottom: 10px;
                                    \">
                                                <a href=\"";
                // line 189
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_index", ["slug" => twig_get_attribute($this->env, $this->source, $context["catalogue"], "slug", [], "any", false, false, false, 189)]), "html", null, true);
                echo "\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                                    <div class=\"d-flex flex-row align-items-xl-center align-items-start justify-content-start\">

                                                        <div class=\"side_post_content\" style=\"padding-left:unset;\">
                                                            <div class=\"side_post_title\" style=\"margin-bottom: 10px;
                                                    padding-top: 0;
                                                    padding-left:unset;
                                                    line-height: 135%!important; font-size:14px;color: #3f3f3f;
                                                    font-weight: 700;\"><span class=\"fa fa-chevron-circle-right\" style=\"margin-right:10px;\"></span> ";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "nameEn", [], "any", false, false, false, 197), "html", null, true);
                echo "</div>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        ";
            }
            // line 205
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "
                                    <div id=\"wp_subscribe-2\" class=\"widget widget-item wp_subscribe\">
                                        <div id=\"wp-subscribe\" class=\"wp-subscribe-wrap wp-subscribe wp-subscribe-1\" >
                                            <h4 class=\"title mb-3\" style=\"text-transform: uppercase;\">";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar_titles.title_3"), "html", null, true);
        echo "</h4>
                                            <a class=\"btn submit\" href=\"#newsletterForm\" style=\"
                                            font-size: 12px;
                                            font-weight: 500;
                                            line-height: 1;
                                            padding-top: 20px;
                                            cursor: pointer;
                                            text-transform: uppercase;
                                            color: #f47555;
                                            background: #fff;
                                            -webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
                                            box-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
                                            width: 100%;

                                            margin: 0;
                                            padding: 15px 0;
                                            text-align: center;
                                            text-indent: 10px;
                                            border: none;
                                            border-radius: 0;
                                            \">";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn.subscribe_newsletter_btn"), "html", null, true);
        echo "</a>

                                        </div>
                                    </div>
                                    <div class=\"widget-title-styling\" style=\"padding-top:30px;\">
                                        <h3 class=\"widget-title\">";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar_titles.title_4"), "html", null, true);
        echo "</h3>
                                    </div>
                                    <div class=\"mt-3\">
                                        <div id=\"fb-root\">
                                            <div class=\"fb-page\" style=\"\" data-href=\"https://www.facebook.com/association.les.colombes\" data-tabs=\"timeline\" data-width=\"300\" data-height=\"300\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/association.les.colombes\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/association.les.colombes\">Association les colombes</a></blockquote></div>
                                        </div>
                                    </div>

                                    <div style=\"margin-top:30px; margin-bottom:30px;\">
                                        <img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/WebiLearn-FR-Home2.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width:100%;\">
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style>
            
            .block-27 ul {
                padding: 0;
                margin: 0;
            }
            ul {
                list-style: none;
                margin-bottom: 0px;
            }
            .block-27 ul li {
                display: inline-block;
                margin-bottom: 4px;
                font-weight: 400;
            }
            .block-27 ul li a, .block-27 ul li span {
                color: #00b8b1;
                text-align: center;
                display: inline-block;
                width: 40px;
                height: 40px;
                line-height: 40px;
                border-radius: 50%;
                border: 1px solid #00b8b1;
            }
            .block-27 ul li.active a, .block-27 ul li.active span {
                background: #00b8b1;
                color: #ffff;
                border: 1px solid transparent;
            }
            .block-27 ul li a, .block-27 ul li span {
                color: #00b8b1;
                text-align: center;
                display: inline-block;
                width: 40px;
                height: 40px;
                line-height: 40px;
                border-radius: 50%;
                border: 1px solid #00b8b1;
            }


        </style>
        <div class=\"navigation\">
            <div class=\"row mt-5\">
                <div class=\"col text-center\">
                    <div class=\"block-27\">
                        ";
        // line 303
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 303, $this->source); })()));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 311
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        // line 312
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 320
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 321
        echo "    <script>

        /* 
    
        9. Init Grid
    
        */
        initGrid();
        function initGrid()
        {
            setTimeout(function()
            {
                \$('.grid').masonry(
                {
                    itemSelector:'.grid-item',
                    gutter:30
                });
            }, 200);
                
        }
    
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/blog_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 321,  609 => 320,  598 => 312,  588 => 311,  570 => 303,  508 => 244,  496 => 235,  488 => 230,  465 => 210,  460 => 207,  453 => 205,  442 => 197,  431 => 189,  426 => 186,  424 => 185,  415 => 179,  404 => 171,  399 => 168,  396 => 167,  392 => 166,  386 => 163,  378 => 157,  372 => 156,  361 => 150,  357 => 149,  344 => 139,  339 => 137,  333 => 133,  331 => 132,  321 => 127,  317 => 126,  304 => 116,  299 => 114,  293 => 110,  290 => 109,  286 => 108,  278 => 103,  269 => 96,  263 => 95,  254 => 91,  248 => 90,  242 => 89,  236 => 86,  232 => 84,  230 => 83,  222 => 80,  216 => 79,  210 => 78,  204 => 75,  201 => 74,  198 => 73,  194 => 72,  178 => 59,  172 => 56,  166 => 53,  160 => 50,  154 => 47,  148 => 44,  142 => 41,  136 => 38,  130 => 35,  124 => 32,  115 => 25,  110 => 18,  105 => 16,  98 => 15,  93 => 13,  87 => 12,  80 => 11,  78 => 10,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/base.html.twig\" %}

{% block content %}
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\" nonce=\"wdpjASki\"></script>
    <section class=\"mansory_galery\" style=\"margin-top: 10px;\">
        <div class=\"container\" >
            <div class=\"row\">
                <nav aria-label=\"breadcrumb\" style=\"margin-top:30px; margin-bottom:-25px;\">
                    <ol class=\"breadcrumb\" style=\"background-color: unset;\">
                        {% if catalogueName %}
                            <li class=\"breadcrumb-item\"><a href=\"{{path('app_home_page')}}\">{{ 'nav.link_1'|trans }}</a></li>
                            <li class=\"breadcrumb-item\"><a href=\"{{path('app_article_index')}}\">{{ 'nav.link_3'|trans }}</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #3f3f3f; font-weight:500;\">{{catalogueName}}</li>
                        {% else %}
                            <li class=\"breadcrumb-item\"><a href=\"{{path('app_home_page')}}\">{{ 'nav.link_1'|trans }}</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #3f3f3f; font-weight:500;\">{{ 'nav.link_3'|trans }}</li>
                        {% endif %}
                    </ol>
                </nav>
            </div>
{#            <div class=\"row\">#}
{#                <div class=\"col-lg-6\">#}
{#                </div>#}
{#            </div>#}
            <div class=\"row\" style=\"margin-top:-30px; \">
                <div class=\"col-lg-9 overflow-hidden\" style=\"margin-bottom:40px;\">
                    <div class=\"section_content\"  style=\"padding-top:30px;\">
                        <div class=\"grid\" >
                            <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide \" data-ride=\"carousel\" data-interval=\"5000\">
                                <div class=\"carousel-inner\">
                                    <div class=\"carousel-item active\">
                                        <img class=\"\" width=\"100%\" height=\"410\" src=\"{{ asset('images/blog_images/blog_1.JPG') }}\" alt=\"First slide\">
                                    </div>
                                    <div class=\"carousel-item\" >
                                        <img class=\"\" width=\"100%\" height=\"410\" src=\"{{ asset('images/blog_images/blog_2.JPG') }}\" alt=\"Second slide\">
                                    </div>
                                    <div class=\"carousel-item\" >
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"{{ asset('images/blog_images/blog_3.JPG') }}\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"{{ asset('images/blog_images/blog_4.JPG') }}\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"{{ asset('images/blog_images/blog_5.JPG') }}\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"{{ asset('images/blog_images/blog_6.JPG') }}\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"{{ asset('images/blog_images/blog_7.JPG') }}\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"{{ asset('images/blog_images/blog_8.JPG') }}\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\" >
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"{{ asset('images/blog_images/blog_9.JPG') }}\" alt=\"Third slide\">
                                    </div>
                                    <div class=\"carousel-item\">
                                        <img class=\"\" width=\"100%\" height=\"400\" src=\"{{ asset('images/blog_images/blog_10.JPG') }}\" alt=\"Third slide\">
                                    </div>
                                    <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam.
                                        Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at
                                        erat eu libero consequat tempus. Quisque molestie convallis tempus.
                                    </p>
                                </div>

                            </div>


                            {% for entity in entity %}
                                {% if (app.request.getLocale()) == 'fr'  %}
                                    <div class=\"card card_small_with_image grid-item\" >
                                        <img class=\"card-img-top\" src=\"{{ entity.image.AssetPath }}\" alt=\"\" style=\"border-radius: 8px;border-bottom-left-radius: 0px !important;
                                        border-bottom-right-radius: 0px !important;\"/>
                                        <div class=\"card-body\">
                                            <div class=\"post-categories\"><a href=\"{{ path('app_catalogue_index', { 'slug' : entity.catalogue.slug }) }}\" style=\"color: #00b8b1;\">{{entity.catalogue.name}}</a></div>
                                            <div class=\"card-title card-title-small\"><a href=\"{{ path('app_article_show', { 'slug' : entity.slug }) }}\" style=\"color:#3f3f3f\">{{ entity.title }}</a></div>
                                            <small class=\"post_meta\">Publié par {{ entity.user.username }}<span>le {{ entity.date|date(\"m/d/Y\") }}</span></small>
                                        </div>
                                    </div>
                                {%  elseif (app.request.getLocale()) == 'en' %}
                                    <div class=\"card card_small_with_image grid-item\" >

                                        <img class=\"card-img-top\" src=\"{{ entity.image.AssetPath }}\" alt=\"\" style=\"border-radius: 8px;border-bottom-left-radius: 0px !important;
                                        border-bottom-right-radius: 0px !important;\"/>
                                        <div class=\"card-body\">
                                            <div class=\"post-categories\"><a href=\"{{ path('app_catalogue_index', { 'slug' : entity.catalogue.slug }) }}\" style=\"color: #00b8b1;\">{{entity.catalogue.nameEn}}</a></div>
                                            <div class=\"card-title card-title-small\"><a href=\"{{ path('app_article_show', { 'slug' : entity.slug }) }}\" style=\"color:#3f3f3f\">{{ entity.titleEn }}</a></div>
                                            <small class=\"post_meta\">Published by {{ entity.user.username }}<span> on {{ entity.date|date(\"m/d/Y\") }}</span></small>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"sidebar\" style=\"\">
                        <div class=\"sidebar_section\" style=\"\">
                            <div class=\"sidebar_title_container\" >
                                <h3  style=\"padding-top:20px; font-size: 18px; color: #505050; line-height: normal!important;\">{{ 'sidebar_titles.title_1'|trans }}</h3>
                            </div>
                            <div class=\"sidebar_section_content\" style=\" padding-top:30px !important;\">
                                <!-- Top Stories Slider -->
                                <div class=\"sidebar_slider_container\">
                                    {% for sideBarArticles in sideBarArticles %}
                                        {% if (app.request.getLocale()) == 'fr'  %}
                                            <!-- Sidebar Post -->
                                            <div class=\"side_post\" style=\"border-bottom: 1px solid #f0f0f0;
                                    margin-bottom: 20px; padding-bottom: 10px;
                                   \">
                                                <a href=\"{{ path('app_article_show', { 'slug' : sideBarArticles.slug }) }}\">
                                                    <div class=\"d-flex flex-row align-items-xl-center align-items-start justify-content-start\">
                                                        <div class=\"side_post_image\"><div><img src=\"{{ sideBarArticles.image.AssetPath }}\" alt=\"\"></div></div>
                                                        <div class=\"side_post_content\">
                                                            <div class=\"article_title \" style=\"margin-bottom: 10px;
                                                    padding-top: 0;
                                                    width:100%;
                                                    height:35px;

                                                    overflow: hidden;
                                                    text-overflow:ellipsis;
                                                    color: #3f3f3f;
                                                    font-weight: 700;\">{{ sideBarArticles.title }}</div>
                                                            <small class=\"post_meta\"><i class=\"fa fa-eye\"></i> {{ sideBarArticles.seenCount }}<span style=\"color: #8d8d8d!important;\">Publié le {{ sideBarArticles.date|date(\"m/d/Y\")}}</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        {%  elseif (app.request.getLocale()) == 'en' %}
                                            <!-- Sidebar Post -->
                                            <div class=\"side_post\" style=\"border-bottom: 1px solid #f0f0f0;
                                    margin-bottom: 20px; padding-bottom: 10px;
                                   \">
                                                <a href=\"{{ path('app_article_show', { 'slug' : sideBarArticles.slug }) }}\">
                                                    <div class=\"d-flex flex-row align-items-xl-center align-items-start justify-content-start\">
                                                        <div class=\"side_post_image\"><div><img src=\"{{ sideBarArticles.image.AssetPath }}\" alt=\"\"></div></div>
                                                        <div class=\"side_post_content\">
                                                            <div class=\"article_title \" style=\"margin-bottom: 10px;
                                                    padding-top: 0;
                                                    width:100%;
                                                    height:35px;

                                                    overflow: hidden;
                                                    text-overflow:ellipsis;
                                                   color: #3f3f3f;
                                                    font-weight: 700;\">{{ sideBarArticles.titleEn }}</div>
                                                            <small class=\"post_meta\"><i class=\"fa fa-eye\"></i> {{ sideBarArticles.seenCount }}<span style=\"color: #8d8d8d!important;\">Published on {{ sideBarArticles.date|date(\"m/d/Y\")}}</span></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        {% endif %}
                                    {% endfor %}





                                    <div class=\"widget-title-styling\" style=\"padding-top:10px; margin-bottom:20px;\">
                                        <h3 class=\"widget-title\">{{ 'sidebar_titles.title_2'|trans }}</h3>
                                    </div>

                                    {% for catalogue in catalogue %}
                                        {% if (app.request.getLocale()) == 'fr'  %}
                                            <div class=\"side_post\" style=\"
                                    margin-bottom: 20px; padding-bottom: 10px;
                                    \">
                                                <a href=\"{{ path('app_catalogue_index', { 'slug' : catalogue.slug }) }}\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                                    <div class=\"d-flex flex-row align-items-xl-center align-items-start justify-content-start\">

                                                        <div class=\"side_post_content\" style=\"padding-left:unset;\">
                                                            <div class=\"side_post_title\" style=\"margin-bottom: 10px;
                                                    padding-top: 0;
                                                    padding-left:unset;
                                                    line-height: 135%!important; font-size:14px;color: #3f3f3f;
                                                    font-weight: 700;\"><span class=\"fa fa-chevron-circle-right\" style=\"margin-right:10px;\"></span> {{ catalogue.name }}</div>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        {%  elseif (app.request.getLocale()) == 'en' %}
                                            <div class=\"side_post\" style=\"
                                    margin-bottom: 20px; padding-bottom: 10px;
                                    \">
                                                <a href=\"{{ path('app_catalogue_index', { 'slug' : catalogue.slug }) }}\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                                    <div class=\"d-flex flex-row align-items-xl-center align-items-start justify-content-start\">

                                                        <div class=\"side_post_content\" style=\"padding-left:unset;\">
                                                            <div class=\"side_post_title\" style=\"margin-bottom: 10px;
                                                    padding-top: 0;
                                                    padding-left:unset;
                                                    line-height: 135%!important; font-size:14px;color: #3f3f3f;
                                                    font-weight: 700;\"><span class=\"fa fa-chevron-circle-right\" style=\"margin-right:10px;\"></span> {{ catalogue.nameEn }}</div>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        {% endif %}

                                    {% endfor %}

                                    <div id=\"wp_subscribe-2\" class=\"widget widget-item wp_subscribe\">
                                        <div id=\"wp-subscribe\" class=\"wp-subscribe-wrap wp-subscribe wp-subscribe-1\" >
                                            <h4 class=\"title mb-3\" style=\"text-transform: uppercase;\">{{ 'sidebar_titles.title_3'|trans }}</h4>
                                            <a class=\"btn submit\" href=\"#newsletterForm\" style=\"
                                            font-size: 12px;
                                            font-weight: 500;
                                            line-height: 1;
                                            padding-top: 20px;
                                            cursor: pointer;
                                            text-transform: uppercase;
                                            color: #f47555;
                                            background: #fff;
                                            -webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
                                            box-shadow: 0 1px 2px 0 rgba(0,0,0,.05);
                                            width: 100%;

                                            margin: 0;
                                            padding: 15px 0;
                                            text-align: center;
                                            text-indent: 10px;
                                            border: none;
                                            border-radius: 0;
                                            \">{{ 'btn.subscribe_newsletter_btn'|trans }}</a>

                                        </div>
                                    </div>
                                    <div class=\"widget-title-styling\" style=\"padding-top:30px;\">
                                        <h3 class=\"widget-title\">{{ 'sidebar_titles.title_4'|trans }}</h3>
                                    </div>
                                    <div class=\"mt-3\">
                                        <div id=\"fb-root\">
                                            <div class=\"fb-page\" style=\"\" data-href=\"https://www.facebook.com/association.les.colombes\" data-tabs=\"timeline\" data-width=\"300\" data-height=\"300\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/association.les.colombes\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/association.les.colombes\">Association les colombes</a></blockquote></div>
                                        </div>
                                    </div>

                                    <div style=\"margin-top:30px; margin-bottom:30px;\">
                                        <img src=\"{{asset('images/WebiLearn-FR-Home2.jpg')}}\" alt=\"\" style=\"width:100%;\">
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style>
            
            .block-27 ul {
                padding: 0;
                margin: 0;
            }
            ul {
                list-style: none;
                margin-bottom: 0px;
            }
            .block-27 ul li {
                display: inline-block;
                margin-bottom: 4px;
                font-weight: 400;
            }
            .block-27 ul li a, .block-27 ul li span {
                color: #00b8b1;
                text-align: center;
                display: inline-block;
                width: 40px;
                height: 40px;
                line-height: 40px;
                border-radius: 50%;
                border: 1px solid #00b8b1;
            }
            .block-27 ul li.active a, .block-27 ul li.active span {
                background: #00b8b1;
                color: #ffff;
                border: 1px solid transparent;
            }
            .block-27 ul li a, .block-27 ul li span {
                color: #00b8b1;
                text-align: center;
                display: inline-block;
                width: 40px;
                height: 40px;
                line-height: 40px;
                border-radius: 50%;
                border: 1px solid #00b8b1;
            }


        </style>
        <div class=\"navigation\">
            <div class=\"row mt-5\">
                <div class=\"col text-center\">
                    <div class=\"block-27\">
                        {{ knp_pagination_render(entity) }}
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
{% block modals %}

{% endblock %}






{% block javascript%}
    <script>

        /* 
    
        9. Init Grid
    
        */
        initGrid();
        function initGrid()
        {
            setTimeout(function()
            {
                \$('.grid').masonry(
                {
                    itemSelector:'.grid-item',
                    gutter:30
                });
            }, 200);
                
        }
    
    </script>

{% endblock %}", "@App/Default/blog_index.html.twig", "C:\\wamp\\www\\mef-assodoves\\src\\AppBundle\\Resources\\views\\Default\\blog_index.html.twig");
    }
}
