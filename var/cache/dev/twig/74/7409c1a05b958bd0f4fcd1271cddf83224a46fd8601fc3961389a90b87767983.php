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

/* @App/Default/about.html.twig */
class __TwigTemplate_e5ad386fee0c40677eea5ace54cc84394eebce2c92027fb958692c9ea1036db7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Default/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Default/about.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "@App/Default/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"5000\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <img class=\"img-responsive \" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_1.JPG"), "html", null, true);
        echo "\"
                                     height=\"345\"
                                     alt=\"First slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_4.JPG"), "html", null, true);
        echo "\"
                                      height=\"345\"
                                     alt=\"First slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_5.JPG"), "html", null, true);
        echo "\"
                                     height=\"345\"
                                     alt=\"First slide\">
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_2.JPG"), "html", null, true);
        echo "\"
                                     height=\"345\"
                                     alt=\"Second slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_6.JPG"), "html", null, true);
        echo "\"
                                     height=\"345\"
                                     alt=\"Second slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_7.JPG"), "html", null, true);
        echo "\"
                                     height=\"345\"
                                     alt=\"Second slide\">
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_3.JPG"), "html", null, true);
        echo "\"
                                      height=\"345\"
                                     alt=\"Third slide\">

                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_8.JPG"), "html", null, true);
        echo "\"
                                     height=\"345\"
                                     alt=\"Third slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/images_a_propos/a_propos_9.JPG"), "html", null, true);
        echo "\"
                                      height=\"345\"
                                     alt=\"Third slide\">
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
";
        // line 75
        echo "                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
";
        // line 79
        echo "                </a>
            </div>
    <div id=\"sectionWho\" class=\"section section__who\" style=\"background-color: #f1efeb; \">
        <div class=\"container page-margin-modif\" style=\"padding: 3.75rem 0;\">
            
            <header class=\"text-center mb-3\">
                <h3 class=\"mb-3\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_2"), "html", null, true);
        echo " ?</h3>
                <hr class=\"\">
            </header>
            <div class=\"container container-fluid mt-3\">
                <p class=\"text-center\">
                    ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "getLocale", [], "method", false, false, false, 90) == "fr")) {
            echo " 
                    
                    L’Association d’ Aide à l’Education de l’Enfance Défavorisée (AE2D) est née de l’initiative
                    de remédier à la sous-scolarisation des merveilleux enfants du monde entier. D’une volonté
                    solidaire, nous comptons sur le soutien indéfectible de nos chers donateurs pour donner à ces
                    petits êtres un lendemain moins incertain.
                    Nous partageons les valeurs de paix, de solidarité et de soutien, et nous travaillons chaque
                    jour un peu mieux grâce à la bienveillance de nos chers donateurs. <br> <br>
                    Chaque fond sert à la seule et unique cause de permettre à ces enfants de pouvoir aller à
                    l’école : de la construction de salles de classes à la rémunération de leurs enseignants, en
                    passant par les fournitures scolaires, livres, cahiers, etc. <br>
                    Un compte rendu trimestriel est rendu à chacun de nos donateurs sur l’utilisation des fonds de
                    l’association afin de permettre une totale transparence.

                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 104
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "getLocale", [], "method", false, false, false, 104) == "en")) {
            // line 105
            echo "
                    The Association for The Assistance of Education of Disadvantaged Children (AE2D) was born out of the initiative
                    to address the under-schooling of wonderful children around the world. A will
                    solidarity, we count on the unwavering support of our dear donors to give these
                    small beings a less uncertain tomorrow.
                    We share the values of peace, solidarity and support, and we work every time
                    a little better thanks to the kindness of our dear donors. <br> <br>
                    Each fund serves the one and only cause of allowing these children to be able to go to
                    school: from building classrooms to paying their teachers,
                    through school supplies, books, notebooks, etc.  <br>
                    A quarterly report is given to each of our donors on the use of
                    association to allow full transparency.

                    ";
        }
        // line 119
        echo "                </p>
            </div>
        </div>
    </div>


    <div class=\"page-margin-modif mt-5\">
        <div class=\"container\">

            <div class=\"text-center\" style=\"padding-bottom:30px;\">
                    <h2 class=\"blog-heading heading heading--2 section-v3__heading \" style=\"font-size:22px; margin-bottom:10px;\">
                        Notre vision
                    </h2>
                    <p class=\"paragraph section-v3__paragraph\" >
                        Notre expérience professionnelle de plus d'une décennie nous </p>
                </div>          
            <div class=\"row mb-3\">

                <div class=\"col-lg-6 mb-3 col-12 \">
                    <div class=\"welcome-content\">
                        <header class=\"entry-header\">
                            <h2 class=\"entry-title\">Welcome to our Charity</h2>
                        </header><!-- .entry-header -->

                        <div class=\"entry-content mt-5 \">
                            <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. </p>
                        </div><!-- .entry-content -->

                        
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class=\"col-lg-5 offset-lg-1 mb-3 col-12 \">
                    <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration-generosity.svg"), "html", null, true);
        echo "\" alt=\"welcome\" style=\"  border-radius: 3px;
                        height:300px; width:100%;\">
                </div><!-- .col -->

            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-5 mb-3 col-12  order-2 order-lg-1\">
                    <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration-responsability.svg"), "html", null, true);
        echo "\" alt=\"welcome\" style=\"  border-radius: 3px;
                        height:300px; width:100%;\">
                </div><!-- .col -->


                <div class=\"col-lg-6  offset-lg-1 mb-3 col-12  order-1 order-lg-2\">
                    <div class=\"welcome-content\">
                        <header class=\"entry-header\">
                            <h2 class=\"entry-title\">Welcome to our Charity</h2>
                        </header><!-- .entry-header -->

                        <div class=\"entry-content mt-5 \">
                            <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus.</p>
                        </div><!-- .entry-content -->

                        
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

    




            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
    
<style>
    .about-stats {
        padding: 96px 0;
        height:250px;
    }
    .circular-progress-bar {
        margin: 20px 0;
        text-align: center;
    }

    .circular-progress-bar .circle {
        position: relative;
        margin: 0 auto;
    }

    .about-stats .circular-progress-bar .circle strong, .about-stats .circular-progress-bar .entry-title {
        color: #fff;
    }
    .circular-progress-bar .circle strong {
        position: absolute;
        top: 50%;
        left: 0;
        margin-top: -24px;
        width: 100%;
        font-size: 28px;
        font-weight: 500;
        line-height: 1;
        color: #fff;
    }
    .about-stats .circular-progress-bar .circle strong, .about-stats .circular-progress-bar .entry-title {
        color: #fff;
    }
    .circular-progress-bar .entry-title {
        margin-top: 32px;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
    }






</style>




";
        // line 249
        echo "
";
        // line 253
        echo "
";
        // line 259
        echo "
";
        // line 263
        echo "
";
        // line 269
        echo "
";
        // line 273
        echo "
";
        // line 279
        echo "
";
        // line 304
        echo "
";
        // line 313
        echo "


";
        // line 324
        echo "
";
        // line 328
        echo "
 
 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 335
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 336
        echo "<script type='text/javascript' src='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/circle-progress.min.js"), "html", null, true);
        echo "'></script>
    <script>

    // Circular Progress Bar
    \$('#loader_1').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.83,
        size: 100,
        thickness: 5,
        fill: {
            gradient: [\"#00b8b1\", \"#00b8b1\"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        \$(this).find('strong').html(Math.round(83 * progress) + '<i>%</i>');
    });

    \$('#loader_2').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.90,
        size: 100,
        thickness: 5,
        fill: {
            gradient: [\"#00b8b1\", \"#00b8b1\"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        \$(this).find('strong').html(Math.round(90 * progress) + '<i>%</i>');
    });

    \$('#loader_3').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.75,
        size: 100,
        thickness: 5,
        fill: {
            gradient: [\"#00b8b1\", \"#00b8b1\"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        \$(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
    });

    \$('#loader_4').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.65 ,
        size: 100,
        thickness: 5,
        fill: {
            gradient: [\"#00b8b1\", \"#00b8b1\"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        \$(this).find('strong').html(Math.round(65 * progress) + '<i>%</i>');
    });

     
        initBlogSlider();
        /* 
        
        16. Init Blog Slider
        
        */
        
        function initBlogSlider()
        {
            if(\$('.blog_slider').length)
            {
                var blogSlider = \$('.blog_slider');
                blogSlider.owlCarousel(
                {
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    autoplay: true,
                    loop:true,
                    infinite:true,
                    lazyload: true, 
                    margin:20,
                    dots: false,
                    nav:false,
                    autoHeight: true,
                    autoplaySpeed: 600,
                    responsive:
                {
                    0:{items:1},
                    480:{items:1},
                    768:{items:3},
                    991:{items:3},
                    1280:{items:3},
                    1440:{items:3}
                }
                });
        
            }
        }
    





    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 336,  392 => 335,  378 => 328,  375 => 324,  370 => 313,  367 => 304,  364 => 279,  361 => 273,  358 => 269,  355 => 263,  352 => 259,  349 => 253,  346 => 249,  266 => 159,  256 => 152,  221 => 119,  205 => 105,  203 => 104,  186 => 90,  178 => 85,  170 => 79,  166 => 75,  155 => 65,  147 => 60,  138 => 54,  126 => 45,  118 => 40,  110 => 35,  98 => 26,  90 => 21,  82 => 16,  69 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/base.html.twig\" %}
{% block content %}
{#        <div class=\"about-us-banner\" style=\"background: url({{asset('images/team.jpg')}}) no-repeat center;#}
{#    background-size: cover; height:300px; \"></div>#}

            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"5000\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <img class=\"img-responsive \" src=\"{{ asset('images/images_a_propos/a_propos_1.JPG') }}\"
                                     height=\"345\"
                                     alt=\"First slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/images_a_propos/a_propos_4.JPG') }}\"
                                      height=\"345\"
                                     alt=\"First slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/images_a_propos/a_propos_5.JPG') }}\"
                                     height=\"345\"
                                     alt=\"First slide\">
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/images_a_propos/a_propos_2.JPG') }}\"
                                     height=\"345\"
                                     alt=\"Second slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/images_a_propos/a_propos_6.JPG') }}\"
                                     height=\"345\"
                                     alt=\"Second slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/images_a_propos/a_propos_7.JPG') }}\"
                                     height=\"345\"
                                     alt=\"Second slide\">
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/images_a_propos/a_propos_3.JPG') }}\"
                                      height=\"345\"
                                     alt=\"Third slide\">

                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/images_a_propos/a_propos_8.JPG') }}\"
                                     height=\"345\"
                                     alt=\"Third slide\">
                            </div>
                            <div class=\"col-md-4 col-sm-4\">
                                <img class=\"img-responsive\" src=\"{{ asset('images/images_a_propos/a_propos_9.JPG') }}\"
                                      height=\"345\"
                                     alt=\"Third slide\">
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
{#                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>#}
{#                    <span class=\"sr-only\">Previous</span>#}
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
{#                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>#}
{#                    <span class=\"sr-only\">Next</span>#}
                </a>
            </div>
    <div id=\"sectionWho\" class=\"section section__who\" style=\"background-color: #f1efeb; \">
        <div class=\"container page-margin-modif\" style=\"padding: 3.75rem 0;\">
            
            <header class=\"text-center mb-3\">
                <h3 class=\"mb-3\">{{ 'nav.link_2'|trans }} ?</h3>
                <hr class=\"\">
            </header>
            <div class=\"container container-fluid mt-3\">
                <p class=\"text-center\">
                    {% if (app.request.getLocale()) == 'fr'  %} 
                    
                    L’Association d’ Aide à l’Education de l’Enfance Défavorisée (AE2D) est née de l’initiative
                    de remédier à la sous-scolarisation des merveilleux enfants du monde entier. D’une volonté
                    solidaire, nous comptons sur le soutien indéfectible de nos chers donateurs pour donner à ces
                    petits êtres un lendemain moins incertain.
                    Nous partageons les valeurs de paix, de solidarité et de soutien, et nous travaillons chaque
                    jour un peu mieux grâce à la bienveillance de nos chers donateurs. <br> <br>
                    Chaque fond sert à la seule et unique cause de permettre à ces enfants de pouvoir aller à
                    l’école : de la construction de salles de classes à la rémunération de leurs enseignants, en
                    passant par les fournitures scolaires, livres, cahiers, etc. <br>
                    Un compte rendu trimestriel est rendu à chacun de nos donateurs sur l’utilisation des fonds de
                    l’association afin de permettre une totale transparence.

                    {%  elseif (app.request.getLocale()) == 'en' %}

                    The Association for The Assistance of Education of Disadvantaged Children (AE2D) was born out of the initiative
                    to address the under-schooling of wonderful children around the world. A will
                    solidarity, we count on the unwavering support of our dear donors to give these
                    small beings a less uncertain tomorrow.
                    We share the values of peace, solidarity and support, and we work every time
                    a little better thanks to the kindness of our dear donors. <br> <br>
                    Each fund serves the one and only cause of allowing these children to be able to go to
                    school: from building classrooms to paying their teachers,
                    through school supplies, books, notebooks, etc.  <br>
                    A quarterly report is given to each of our donors on the use of
                    association to allow full transparency.

                    {% endif %}
                </p>
            </div>
        </div>
    </div>


    <div class=\"page-margin-modif mt-5\">
        <div class=\"container\">

            <div class=\"text-center\" style=\"padding-bottom:30px;\">
                    <h2 class=\"blog-heading heading heading--2 section-v3__heading \" style=\"font-size:22px; margin-bottom:10px;\">
                        Notre vision
                    </h2>
                    <p class=\"paragraph section-v3__paragraph\" >
                        Notre expérience professionnelle de plus d'une décennie nous </p>
                </div>          
            <div class=\"row mb-3\">

                <div class=\"col-lg-6 mb-3 col-12 \">
                    <div class=\"welcome-content\">
                        <header class=\"entry-header\">
                            <h2 class=\"entry-title\">Welcome to our Charity</h2>
                        </header><!-- .entry-header -->

                        <div class=\"entry-content mt-5 \">
                            <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. </p>
                        </div><!-- .entry-content -->

                        
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class=\"col-lg-5 offset-lg-1 mb-3 col-12 \">
                    <img src=\"{{asset('images/illustration-generosity.svg')}}\" alt=\"welcome\" style=\"  border-radius: 3px;
                        height:300px; width:100%;\">
                </div><!-- .col -->

            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-5 mb-3 col-12  order-2 order-lg-1\">
                    <img src=\"{{asset('images/illustration-responsability.svg')}}\" alt=\"welcome\" style=\"  border-radius: 3px;
                        height:300px; width:100%;\">
                </div><!-- .col -->


                <div class=\"col-lg-6  offset-lg-1 mb-3 col-12  order-1 order-lg-2\">
                    <div class=\"welcome-content\">
                        <header class=\"entry-header\">
                            <h2 class=\"entry-title\">Welcome to our Charity</h2>
                        </header><!-- .entry-header -->

                        <div class=\"entry-content mt-5 \">
                            <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus.</p>
                        </div><!-- .entry-content -->

                        
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

    




            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->
    
<style>
    .about-stats {
        padding: 96px 0;
        height:250px;
    }
    .circular-progress-bar {
        margin: 20px 0;
        text-align: center;
    }

    .circular-progress-bar .circle {
        position: relative;
        margin: 0 auto;
    }

    .about-stats .circular-progress-bar .circle strong, .about-stats .circular-progress-bar .entry-title {
        color: #fff;
    }
    .circular-progress-bar .circle strong {
        position: absolute;
        top: 50%;
        left: 0;
        margin-top: -24px;
        width: 100%;
        font-size: 28px;
        font-weight: 500;
        line-height: 1;
        color: #fff;
    }
    .about-stats .circular-progress-bar .circle strong, .about-stats .circular-progress-bar .entry-title {
        color: #fff;
    }
    .circular-progress-bar .entry-title {
        margin-top: 32px;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
    }






</style>




{#    <div class=\"callto-action-area relative section-gap stats-cover\" style=\"background: url({{asset('images/65245.jpg')}}) center;background-size: cover; max-height:380px;\">#}
{#        <div class=\"col-lg-12 text-center\" >#}
{#            <h3 style=\"color: #fff; z-index:10; position:relative; top:-50px; \">Chiffres clés</h3> #}
{#        </div>#}
{#        <div class=\"overlay overlay-bg\" style=\"background: rgba(0,0,0,.5);\"></div>#}
{#        <div class=\"container\">#}
{#            <div class=\"row d-flex justify-content-center\" style=\"position:relative; top:-20px;\">#}
{#                #}
{#                <div class=\"col-6 col-sm-6 col-lg-3\">#}
{#                    <div class=\"circular-progress-bar\">#}
{#                        <div class=\"circle\" id=\"loader_1\">#}
{#                            <strong class=\"d-flex justify-content-center\" style=\"font-size:13x; padding-top:5px;\"></strong>#}
{#                        </div>#}

{#                        <h3 class=\"entry-title\">Hard Work</h3>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"col-6 col-sm-6 col-lg-3\">#}
{#                    <div class=\"circular-progress-bar\">#}
{#                        <div class=\"circle\" id=\"loader_2\">#}
{#                            <strong class=\"d-flex justify-content-center\" style=\"font-size:13x; padding-top:5px;\"></strong>#}
{#                        </div>#}

{#                        <h3 class=\"entry-title\">Pure Love</h3>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"col-6 col-sm-6 col-lg-3\">#}
{#                    <div class=\"circular-progress-bar\">#}
{#                        <div class=\"circle\" id=\"loader_3\">#}
{#                            <strong class=\"d-flex justify-content-center\" style=\"font-size:13x; padding-top:5px;\"></strong>#}
{#                        </div>#}

{#                        <h3 class=\"entry-title\">Smart Ideas</h3>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"col-6 col-sm-6 col-lg-3\">#}
{#                    <div class=\"circular-progress-bar\">#}
{#                        <div class=\"circle\" id=\"loader_4\">#}
{#                            <strong class=\"d-flex justify-content-center\" style=\"font-size:13x; padding-top:5px;\"></strong>#}
{#                        </div>#}

{#                        <h3 class=\"entry-title\">Good Decisions</h3>#}
{#                    </div>#}
{#                </div>#}
{#            </div>\t#}
{#        </div>\t#}
{#    </div>#}
{#    <div class=\"user-testimonies-container\" style=\"margin-top:100px; margin-bottom:150px;\">#}
{#        <div class=\"container\">#}
{#            <div class=\"text-center\" style=\"padding-bottom:30px;\">#}
{#                <h2 class=\"blog-heading heading heading--2 section-v3__heading \" style=\"font-size:22px; margin-bottom:10px;\">#}
{#                    Ce qu'il en pensent de nous#}
{#                </h2>#}
{#                <p class=\"paragraph section-v3__paragraph\" >#}
{#                    Notre expérience professionnelle de plus d'une décennie nous </p>#}
{#            </div>#}
{#            <div class=\"owl-carousel owl-theme blog_slider\" style=\"margin-left:0px; margin-right:0px; padding-left:50px; padding-right:50px; \">#}
{#                <div class=\"owl-item \">#}
{#                    <div class=\"testimony d-flex \">#}
{#                        <figure class=\"d-flex\">#}
{#                            <img class=\"mx-auto useropinion__illustration\" width=\"100%\" src=\"{{ asset('images/user-opinion-illustration-1.png')}}\" alt=\"\" style=\"width:80px; height:80px;\">#}
{#                        </figure>#}
{#                        <p class=\"pl-4 pr-4\">Pour ses 30 ans, nous avons pu offrir à Antoine un <strong>week-end de détente</strong> grâce à la sélection de partenaires \"<strong>Voyages</strong>\".</p>#}
{#                    </div>#}
{#                </div>#}

{#                <div class=\"owl-item product_slider_item\">#}
{#                    <div class=\"testimony d-flex \">#}
{#                        <figure class=\"d-flex\" style=\"\">#}
{#                            <img class=\"mx-auto useropinion__illustration\"  src=\"{{ asset('images/user-opinion-illustration-2.png')}}\" alt=\"\" style=\"width:80px; height:80px;\">#}
{#                        </figure>#}
{#                        <p class=\"pl-4 pr-4\">Pour ses 30 ans, nous avons pu offrir à Antoine un <strong>week-end de détente</strong> grâce à la sélection de partenaires \"<strong>Voyages</strong>\".</p>#}
{#                    </div>#}
{#                </div>#}



{#                <div class=\"owl-item product_slider_item\">#}
{#                    <div class=\"testimony d-flex \">#}
{#                        <figure class=\"d-flex\">#}
{#                            <img class=\"mx-auto useropinion__illustration\" width=\"100%\" src=\"{{ asset('images/user-opinion-illustration-3.png')}}\" alt=\"\" style=\"width:80px; height:80px;\">#}
{#                        </figure>#}
{#                        <p class=\"pl-4 pr-4\">Pour ses 30 ans, nous avons pu offrir à Antoine un <strong>week-end de détente</strong> grâce à la sélection de partenaires \"<strong>Voyages</strong>\".</p>#}
{#                    </div>#}
{#                </div>#}

{#            </div>#}
{#        </div>#}
{#    </div>#}

 
 

{% endblock %}


{% block javascript%}
<script type='text/javascript' src='{{ asset('plugins/circle-progress.min.js')}}'></script>
    <script>

    // Circular Progress Bar
    \$('#loader_1').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.83,
        size: 100,
        thickness: 5,
        fill: {
            gradient: [\"#00b8b1\", \"#00b8b1\"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        \$(this).find('strong').html(Math.round(83 * progress) + '<i>%</i>');
    });

    \$('#loader_2').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.90,
        size: 100,
        thickness: 5,
        fill: {
            gradient: [\"#00b8b1\", \"#00b8b1\"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        \$(this).find('strong').html(Math.round(90 * progress) + '<i>%</i>');
    });

    \$('#loader_3').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.75,
        size: 100,
        thickness: 5,
        fill: {
            gradient: [\"#00b8b1\", \"#00b8b1\"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        \$(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
    });

    \$('#loader_4').circleProgress({
        startAngle: -Math.PI / 4 * 2,
        value: 0.65 ,
        size: 100,
        thickness: 5,
        fill: {
            gradient: [\"#00b8b1\", \"#00b8b1\"]
        }
    }).on('circle-animation-progress', function(event, progress) {
        \$(this).find('strong').html(Math.round(65 * progress) + '<i>%</i>');
    });

     
        initBlogSlider();
        /* 
        
        16. Init Blog Slider
        
        */
        
        function initBlogSlider()
        {
            if(\$('.blog_slider').length)
            {
                var blogSlider = \$('.blog_slider');
                blogSlider.owlCarousel(
                {
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    autoplay: true,
                    loop:true,
                    infinite:true,
                    lazyload: true, 
                    margin:20,
                    dots: false,
                    nav:false,
                    autoHeight: true,
                    autoplaySpeed: 600,
                    responsive:
                {
                    0:{items:1},
                    480:{items:1},
                    768:{items:3},
                    991:{items:3},
                    1280:{items:3},
                    1440:{items:3}
                }
                });
        
            }
        }
    





    </script>
{% endblock %}", "@App/Default/about.html.twig", "C:\\wamp\\www\\mef-assodoves\\src\\AppBundle\\Resources\\views\\Default\\about.html.twig");
    }
}
