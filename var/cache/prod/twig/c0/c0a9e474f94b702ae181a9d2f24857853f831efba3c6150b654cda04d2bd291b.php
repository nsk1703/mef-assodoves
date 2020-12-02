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
class __TwigTemplate_77f291f4b10db58b65e754260965c2d1abffb4c719c461b0c65971a77470aa21 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/base.html.twig", "@App/Default/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"about-us-banner\" style=\"background: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team.jpg"), "html", null, true);
        echo ") no-repeat center;
    background-size: cover; height:300px; \"></div>

    <div id=\"sectionWho\" class=\"section section__who\" style=\"background-color: #f1efeb; \">
        <div class=\"container page-margin-modif\" style=\"padding: 3.75rem 0;\">
            
            <header class=\"text-center mb-3\">
                <h3 class=\"mb-3\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_2"), "html", null, true);
        echo " ?</h2>
                <hr class=\"\">
            </header>
            <div class=\"container container-fluid mt-3\">
                <p class=\"text-center\">
                    ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 15), "getLocale", [], "method", false, false, false, 15) == "fr")) {
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
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["app"] ?? null), "request", [], "any", false, false, false, 29), "getLocale", [], "method", false, false, false, 29) == "en")) {
            // line 30
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
        // line 44
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
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration-generosity.svg"), "html", null, true);
        echo "\" alt=\"welcome\" style=\"  border-radius: 3px;
                        height:300px; width:100%;\">
                </div><!-- .col -->

            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-5 mb-3 col-12  order-2 order-lg-1\">
                    <img src=\"";
        // line 84
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




    <div class=\"callto-action-area relative section-gap stats-cover\" style=\"background: url(";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/65245.jpg"), "html", null, true);
        echo ") center;
    background-size: cover; max-height:380px;\">
        <div class=\"col-lg-12 text-center\" >
            <h3 style=\"color: #fff; z-index:10; position:relative; top:-50px; \">Chiffres clés</h3> 
        </div>
        <div class=\"overlay overlay-bg\" style=\"background: rgba(0,0,0,.5);\"></div>\t
        <div class=\"container\">
           
            <div class=\"row d-flex justify-content-center\" style=\"position:relative; top:-20px;\">
                
                <div class=\"col-6 col-sm-6 col-lg-3\">
                    <div class=\"circular-progress-bar\">
                        <div class=\"circle\" id=\"loader_1\">
                            <strong class=\"d-flex justify-content-center\" style=\"font-size:13x; padding-top:5px;\"></strong>
                        </div>

                        <h3 class=\"entry-title\">Hard Work</h3>
                    </div>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-3\">
                    <div class=\"circular-progress-bar\">
                        <div class=\"circle\" id=\"loader_2\">
                            <strong class=\"d-flex justify-content-center\" style=\"font-size:13x; padding-top:5px;\"></strong>
                        </div>

                        <h3 class=\"entry-title\">Pure Love</h3>
                    </div>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-3\">
                    <div class=\"circular-progress-bar\">
                        <div class=\"circle\" id=\"loader_3\">
                            <strong class=\"d-flex justify-content-center\" style=\"font-size:13x; padding-top:5px;\"></strong>
                        </div>

                        <h3 class=\"entry-title\">Smart Ideas</h3>
                    </div>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-3\">
                    <div class=\"circular-progress-bar\">
                        <div class=\"circle\" id=\"loader_4\">
                            <strong class=\"d-flex justify-content-center\" style=\"font-size:13x; padding-top:5px;\"></strong>
                        </div>

                        <h3 class=\"entry-title\">Good Decisions</h3>
                    </div>
                </div>
            </div>\t
        </div>\t
    </div>
    <div class=\"user-testimonies-container\" style=\"margin-top:100px; margin-bottom:150px;\">
        <div class=\"container\">
            <div class=\"text-center\" style=\"padding-bottom:30px;\">
                <h2 class=\"blog-heading heading heading--2 section-v3__heading \" style=\"font-size:22px; margin-bottom:10px;\">
                    Ce qu'il en pensent de nous
                </h2>
                <p class=\"paragraph section-v3__paragraph\" >
                    Notre expérience professionnelle de plus d'une décennie nous </p>
            </div>
            <div class=\"owl-carousel owl-theme blog_slider\" style=\"margin-left:0px; margin-right:0px; padding-left:50px; padding-right:50px; \">
                <div class=\"owl-item \">
                    <div class=\"testimony d-flex \">
                        <figure class=\"d-flex\">
                            <img class=\"mx-auto useropinion__illustration\" width=\"100%\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-opinion-illustration-1.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:80px; height:80px;\">
                        </figure>
                        <p class=\"pl-4 pr-4\">Pour ses 30 ans, nous avons pu offrir à Antoine un <strong>week-end de détente</strong> grâce à la sélection de partenaires \"<strong>Voyages</strong>\".</p>
                    </div>
                </div>

                <div class=\"owl-item product_slider_item\">
                    <div class=\"testimony d-flex \">
                        <figure class=\"d-flex\" style=\"\">
                            <img class=\"mx-auto useropinion__illustration\"  src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-opinion-illustration-2.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:80px; height:80px;\">
                        </figure>
                        <p class=\"pl-4 pr-4\">Pour ses 30 ans, nous avons pu offrir à Antoine un <strong>week-end de détente</strong> grâce à la sélection de partenaires \"<strong>Voyages</strong>\".</p>
                    </div>
                </div>



                <div class=\"owl-item product_slider_item\">
                    <div class=\"testimony d-flex \">
                        <figure class=\"d-flex\">
                            <img class=\"mx-auto useropinion__illustration\" width=\"100%\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user-opinion-illustration-3.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:80px; height:80px;\">
                        </figure>
                        <p class=\"pl-4 pr-4\">Pour ses 30 ans, nous avons pu offrir à Antoine un <strong>week-end de détente</strong> grâce à la sélection de partenaires \"<strong>Voyages</strong>\".</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

 
 

";
    }

    // line 262
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
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
        return array (  346 => 263,  342 => 262,  324 => 246,  310 => 235,  298 => 226,  230 => 161,  150 => 84,  140 => 77,  105 => 44,  89 => 30,  87 => 29,  70 => 15,  62 => 10,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@App/Default/about.html.twig", "/home/c1462208c/public_html/src/AppBundle/Resources/views/Default/about.html.twig");
    }
}
