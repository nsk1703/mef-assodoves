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

/* @App/Default/legalMentions.html.twig */
class __TwigTemplate_2a71f554b3a751c18dad5e4ad8d852732f65424288bf7b745b5f4108d5813a05 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/base.html.twig", "@App/Default/legalMentions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<style>

</style>
        <div class=\"page-margin-modif\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\" style=\"margin-bottom:140px; margin-top:80px;\">
                        <div class=\"text-center\">
                            <h2 class=\"blog-heading heading heading--2 section-v3__heading \" style=\"font-size:22px; margin-bottom:10px;\">
                                Mentions Légals
                            </h2>
                           
                        </div>

                            <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"headingOne\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"accordion-title\">Avertissement</span>
                              
                                </div>
                              </div>
                              <div class=\"card-body\">
                                <p>
                                    Vous déclarez que vous êtes une personne physique résidente dans un Etat membre de l’Union Européenne ou dans un Etat partie à l’Espace Economique européen ou dans un pays tiers imposant des obligations équivalentes en termes de lutte contre le blanchiment de capitaux et le financement du terrorisme étant rappelé que rien n’interdit à la personne physique d’agir (i) en son nom et pour son compte ou (ii) en son nom et pour le compte d’une personne morale, y compris une association inscrite au répertoire national des associations ou à un registre étranger équivalent, même si dans cette dernière hypothèse, la personne physique est le seul contractant de Leetchi qui demeure.

                                   

                                
                                </p>
                              </div>
    
                             </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div>


";
    }

    // line 43
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "@App/Default/legalMentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 44,  92 => 43,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@App/Default/legalMentions.html.twig", "/home/c1462208c/public_html/src/AppBundle/Resources/views/Default/legalMentions.html.twig");
    }
}
