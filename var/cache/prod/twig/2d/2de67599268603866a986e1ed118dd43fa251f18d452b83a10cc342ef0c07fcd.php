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

/* @App/Default/faq.html.twig */
class __TwigTemplate_f8d5f2bbfb5e397ec221d0771c644011ca19f35556b81144820782583da62b93 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/base.html.twig", "@App/Default/faq.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"page-margin-modif\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\" style=\"margin-bottom:140px; margin-top:80px;\">
                        <div class=\"text-center\">
                            <h2 class=\"blog-heading heading heading--2 section-v3__heading \" style=\"font-size:22px; margin-bottom:10px;\">
                              ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nav.link_4"), "html", null, true);
        echo "
                            </h2>
                           
                        </div>
                        ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "getLocale", [], "method", false, false, false, 13) == "fr")) {
            echo " 
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"headingOne\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                    <span class=\"accordion-title\">Nature</span>
                                    <button  class=\"\" style=\"background: #efefef; border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                         <span class=\"fa fa-angle-down\"></span>
                                    </button>
                                </div>
                              </div>
                          
                              <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    Créée conformément à la loi du 1er juillet 1901, l’association d’appui à l’Education de l’Enfance Défavorisée (A2ED) est une association 
                                    <br>
                                    <ul>
                                        <li>Apolitique</li>
                                        <li>Philanthropique </li>
                                        <li>A but non lucratif</li>
                                    </ul>
                                </div>
                              </div>
                            </div>

                            <div class=\"card\" style=\"\">
                                <div class=\"card-header\" id=\"heading1\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                  <div class=\"mb-0\">
                                      <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                      <span class=\"accordion-title\"> Missions</span>
                                      <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse1\" aria-expanded=\"false\" aria-controls=\"collapse1\">
                                           <span class=\"fa fa-angle-down\"></span>
                                      </button>
                                  </div>
                                </div>
                            
                                <div id=\"collapse1\" class=\"collapse \" aria-labelledby=\"heading1\" data-parent=\"#accordionExample\">
                                  <div class=\"card-body\">
                                    <br>
                                    <ul>
                                        <li>Appui à l’équipement des infrastructures scolaires </li>
                                        <li>Appui à l’acquisition des manuels scolaires et des matériels didactiques </li>
                                        <li>Promotion de l’excellence pédagogique </li>
                                        <li>Promotion de l’excellence académique</li>
                                    </ul>
                                  </div>
                                </div>
                            </div>

                            <div class=\"card\" style=\"\">
                                <div class=\"card-header\" id=\"heading2\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                  <div class=\"mb-0\">
                                      <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                      <span class=\"accordion-title\"> Des catégories de membres </span>
                                      <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse2\" aria-expanded=\"false\" aria-controls=\"collapse2\">
                                           <span class=\"fa fa-angle-down\"></span>
                                      </button>
                                  </div>
                                </div>
                            
                                <div id=\"collapse2\" class=\"collapse \" aria-labelledby=\"heading2\" data-parent=\"#accordionExample\">
                                  <div class=\"card-body\">
                                    <br>
                                    <ul>
                                        <li>Membres fondateurs </li>
                                        <li>Membres d’honneur </li>
                                        <li>Membres bienfaiteurs </li>
                                        <li>Membres actifs ou adhérents</li>
                                    </ul>
                                  </div>
                                </div>
                            </div>
                            
                            
                            <div class=\"card\" style=\"\">
                                <div class=\"card-header\" id=\"heading3\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                  <div class=\"mb-0\">
                                      <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                      <span class=\"accordion-title\"> Adhésion</span>
                                      <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                           <span class=\"fa fa-angle-down\"></span>
                                      </button>
                                  </div>
                                </div>
                            
                                <div id=\"collapse3\" class=\"collapse \" aria-labelledby=\"heading3\" data-parent=\"#accordionExample\">
                                  <div class=\"card-body\">
                                    <b>Les membres fondateurs</b>  sont ceux ayant participé à l’Assemblée générale constitutive et à celle ayant décidé du changement de la nature et des missions de l’Association. 
                                    <br>
                                    <b>Les membres d’honneur</b>  sont des personnalités publiques ; elles acquièrent cette qualité sur décision du bureau de l’association, en raison de leurs qualités morales et d’un appui substantiel, matériel ou financier apporté à l’Association et visant à soutenir l’atteinte de ses missions.
                                    <br>
                                    <b>Les membres bienfaiteurs</b>  sont ceux qui, de façon régulière et constante, soutiennent matériellement ou financièrement l’association dans l’atteinte de ses missions.
                                    <br>
                                    <b>Les membres actifs</b>  ou adhérents acquièrent cette qualité sur proposition d’un membre fondateur et après approbation du bureau de l’Association. 
                                    <br>
                                    Pour garder cette qualité, les membres actifs s’engagent à payer une cotisation annuelle de 30 euros (20.000 FCFA) et à participer aux réunions et aux actions de l’association. 
                                </div>
                                </div>
                            </div>



                            <div class=\"card\" style=\"\">
                                <div class=\"card-header\" id=\"heading3\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                  <div class=\"mb-0\">
                                      <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                      <span class=\"accordion-title\"> Perte de qualité de membre</span>
                                      <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                           <span class=\"fa fa-angle-down\"></span>
                                      </button>
                                  </div>
                                </div>
                            
                                <div id=\"collapse3\" class=\"collapse \" aria-labelledby=\"heading3\" data-parent=\"#accordionExample\">
                                  <div class=\"card-body\">
                                    Seuls les membres fondateurs et les membres actifs peuvent perdre cette qualité. Cette perte se fait : 
                                    <br>
                                    <ul>
                                        <li>soit par exclusion</li>
                                        <li>soit démission  </li>
                                    
                                    </ul>
                                    <br>
                                    La démission résulte du non payement de ses cotisations et de la non-participation aux activités de l’Association. Elle fait suite à deux lettre de rappel de ses engagements au membre concerné.
                                    <br>
                                    L’exclusion est provoquée par une faute grave. Est considérée comme faute grave toute attitude ou action compromettant gravement l’atteinte des missions de l’association ou menaçant sa survie. 
                                    <br>
                                    La démission et l’exclusion sont prononcées par le bureau de l’Association et notifiées aux l’intéressés par lettre écrite. 
                                
                                
                                </div>
                                </div>
                            </div>


                            <div class=\"card\" style=\"\">
                                <div class=\"card-header\" id=\"heading4\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                  <div class=\"mb-0\">
                                      <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                      <span class=\"accordion-title\"> Ressources</span>
                                      <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse4\" aria-expanded=\"false\" aria-controls=\"collapse4\">
                                           <span class=\"fa fa-angle-down\"></span>
                                      </button>
                                  </div>
                                </div>
                            
                                <div id=\"collapse4\" class=\"collapse \" aria-labelledby=\"heading4\" data-parent=\"#accordionExample\">
                                  <div class=\"card-body\">
                                    <b>Nature et provenance</b>
                                    <br>
                                    Les ressources de l’Association sont matérielles et financières. Elles proviennent des :
                                    <br>
                                    <ul>
                                        <li>Cotisations des membres  </li>
                                        <li>Dons de ses membres d’Honneur et de ses Membres bienfaiteurs</li>
                                        <li>Dons et legs divers </li>
                                        <li>Libéralités entre vifs ou testamentaires que l’association peut recevoir en raison de ses missions, dans les conditions prévues par la loi. </li>
                                    </ul>
                                  </div>
                                </div>
                            </div>



                            <div class=\"card\" style=\"\">
                                <div class=\"card-header\" id=\"heading5\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                  <div class=\"mb-0\">
                                      <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                      <span class=\"accordion-title\"> Organisation et fonctionnement</span>
                                      <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse5\" aria-expanded=\"false\" aria-controls=\"collapse5\">
                                           <span class=\"fa fa-angle-down\"></span>
                                      </button>
                                  </div>
                                </div>
                            
                                <div id=\"collapse5\" class=\"collapse \" aria-labelledby=\"heading5\" data-parent=\"#accordionExample\">
                                  <div class=\"card-body\">
                                      <br>
                                      Les structures de l’Association sont :
                                      <ul>
                                          <li>L’Assemblée Générale</li>
                                          <li>Le Bureau Exécutif </li>
                                          <li>Le Commissariat aux comptes</li>
                                          <li>Les Sections </li>
                                      </ul>
                                      <br>
                                      <b>Dassemblée Générale</b>
                                      <br>
                                      <ul>
                                        <li>Elle est constituée des membres fondateurs et des membres actifs de l’Association. Les membres d’honneur et les membres bienfaiteurs peuvent y prendre part.  </li>
                                        <li>Elle est l’instance suprême de l’Association.  </li>
                                        <li>Elle se tient annuellement en session ordinaire au siège de l’Association. Elle peut se tenir en session extraordinaire.</li>
                                    </ul>
                                    <br>
                                    <b>Du bureau exécutif (B.E.)</b>
                                    <br>
                                    Le B.E. de l’Association est collégial et constitué ainsi qu’il suit :
                                    <br>
                                    <ul>
                                        <li>Un(e) Président(e)</li>
                                        <li>Un(e) Secrétaire général(e) </li>
                                        <li>Un(e) trésorièr(e)</li>
                                    </ul>
                                    <br>
                                    Le B.E. est élu par l’Assemblée Générale ; son mandat est de cinq ans. Il est renouvelable. 
                                    <br>
                                    Le B.E. se réunit trimestriellement au siège de l’Association ou en tout autre lieu. 
                                  </div>
                                </div>
                            </div>



                            <div class=\"card\" style=\"\">
                                <div class=\"card-header\" id=\"heading6\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                  <div class=\"mb-0\">
                                      <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                      <span class=\"accordion-title\"> Siège et sections de l'association</span>
                                      <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse6\" aria-expanded=\"false\" aria-controls=\"collapse6\">
                                           <span class=\"fa fa-angle-down\"></span>
                                      </button>
                                  </div>
                                </div>
                            
                                <div id=\"collapse6\" class=\"collapse \" aria-labelledby=\"heading6\" data-parent=\"#accordionExample\">
                                  <div class=\"card-body\">
                                      <br>
                                      <ul>
                                          <li>Le siège de l’Association et situé au 32, rue des Bons Voisins, 60950 Ver/Launette, France.</li>
                                          <li>Les Sections sont des démembrements dans les pays choisis pour étendre les missions de l’Association.</li>
                                          <li>Le choix de ces pays et la désignation de ses membres est du ressort du Bureau Exécutif</li>
                                          
                                      </ul>
              
                            </div>
                        </div>
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 250
($context["app"] ?? null), "request", [], "any", false, false, false, 250), "getLocale", [], "method", false, false, false, 250) == "en")) {
            // line 251
            echo "

                            </div>
                        </div><!-- .col -->
                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 255
($context["app"] ?? null), "request", [], "any", false, false, false, 255), "getLocale", [], "method", false, false, false, 255) == "en")) {
            // line 256
            echo "                        <div class=\"accordion\" id=\"accordionExample\">
                          <div class=\"card\" style=\"\">
                            <div class=\"card-header\" id=\"headingOne\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                              <div class=\"mb-0\">
                                  <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                  <span class=\"accordion-title\">Nature</span>
                                  <button  class=\"\" style=\"background: #efefef; border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                       <span class=\"fa fa-angle-down\"></span>
                                  </button>
                              </div>
                            </div>
                        
                            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
                              <div class=\"card-body\">
                                Created in accordance with the law of 1 July 1901, the Association for Supporting the Education of Disadvantaged Children (A2ED) is an association
                                  <br>
                                  <ul>
                                      <li>Apolitical</li>
                                      <li>Philanthropic </li>
                                      <li>Non-profit</li>
                                  </ul>
                              </div>
                            </div>
                          </div>

                          <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"heading1\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                    <span class=\"accordion-title\"> Missions</span>
                                    <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse1\" aria-expanded=\"false\" aria-controls=\"collapse1\">
                                         <span class=\"fa fa-angle-down\"></span>
                                    </button>
                                </div>
                              </div>
                          
                              <div id=\"collapse1\" class=\"collapse \" aria-labelledby=\"heading1\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                  <br>
                                  <ul>
                                      <li>Support for school infrastructure equipment </li>
                                      <li>Support for the acquisition of textbooks and teaching materials </li>
                                      <li>Promoting educational excellence </li>
                                      <li>Promoting academic excellence</li>
                                  </ul>
                                </div>
                              </div>
                          </div>

                          <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"heading2\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                    <span class=\"accordion-title\"> Category of members </span>
                                    <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse2\" aria-expanded=\"false\" aria-controls=\"collapse2\">
                                         <span class=\"fa fa-angle-down\"></span>
                                    </button>
                                </div>
                              </div>
                          
                              <div id=\"collapse2\" class=\"collapse \" aria-labelledby=\"heading2\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                  <br>
                                  <ul>
                                      <li>Founding members </li>
                                      <li>Honorary Members </li>
                                      <li>Benefactor members </li>
                                      <li>Active or member members</li>
                                  </ul>
                                </div>
                              </div>
                          </div>
                          
                          
                          <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"heading3\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                    <span class=\"accordion-title\"> Accession</span>
                                    <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                         <span class=\"fa fa-angle-down\"></span>
                                    </button>
                                </div>
                              </div>
                          
                              <div id=\"collapse3\" class=\"collapse \" aria-labelledby=\"heading3\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                  <b>Founding members</b>  are those who participated in the Constituent General Assembly and the one who decided to change the nature and missions of the Association. 
                                  <br>
                                  <b>Honorary Members</b>  are public figures; they acquire this quality by decision of the association's office, because of their moral qualities and substantial material or financial support to the Association and to support the achievement of its missions.
                                  <br>
                                  <b>Benefactor members </b>  are those who, on a regular and constant basis, support the association materially or financially in achieving its missions.
                                  <br>
                                  <b>Active or member members</b>  or members acquire this quality at the suggestion of a founding member and after approval from the Association's office.
                                  <br>
                                  To maintain this quality, active members agree to pay an annual fee of 30 euros (20,000 FCFA) and to participate in meetings and actions of the association.
                              </div>
                              </div>
                          </div>



                          <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"heading3\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                    <span class=\"accordion-title\"> Loss of membership quality</span>
                                    <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                         <span class=\"fa fa-angle-down\"></span>
                                    </button>
                                </div>
                              </div>
                          
                              <div id=\"collapse3\" class=\"collapse \" aria-labelledby=\"heading3\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                  Only founding and active members can lose this quality. This loss is made: 
                                  <br>
                                  <ul>
                                      <li>either by exclusion</li>
                                      <li>either resign  </li>
                                  
                                  </ul>
                                  <br>
                                  The resignation is the result of non-payment of its contributions and non-participation in the activities of the Association. It follows two letters of reminder of its commitments to the member concerned.
                                  <br>
                                  Exclusion is caused by gross misconduct. Any attitude or action that seriously compromises the association's missions or threatens its survival is considered to be a serious fault. 
                                  <br>
                                  Resignation and exclusion are pronounced by the Association's office and notified to the person concerned by written letter.
                              
                              
                              </div>
                              </div>
                          </div>


                          <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"heading4\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                    <span class=\"accordion-title\"> Ressources</span>
                                    <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse4\" aria-expanded=\"false\" aria-controls=\"collapse4\">
                                         <span class=\"fa fa-angle-down\"></span>
                                    </button>
                                </div>
                              </div>
                          
                              <div id=\"collapse4\" class=\"collapse \" aria-labelledby=\"heading4\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                  <b>Nature and provenance</b>
                                  <br>
                                  The Association's resources are material and financial. They come from:
                                  <br>
                                  <ul>
                                      <li>Member contributions  </li>
                                      <li>Donations from Honorary Members and Benefactor Members</li>
                                      <li>Miscellaneous gifts and legacies </li>
                                      <li>Liberalities between live or wills that the association can receive because of its missions, under the conditions provided by law. </li>
                                  </ul>
                                </div>
                              </div>
                          </div>



                          <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"heading5\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                    <span class=\"accordion-title\"> Organization and operation</span>
                                    <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse5\" aria-expanded=\"false\" aria-controls=\"collapse5\">
                                         <span class=\"fa fa-angle-down\"></span>
                                    </button>
                                </div>
                              </div>
                          
                              <div id=\"collapse5\" class=\"collapse \" aria-labelledby=\"heading5\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <br>
                                    The Association's structures are:
                                    <ul>
                                        <li>The General Assembly</li>
                                        <li>The Executive Office </li>
                                        <li>The Office of the Auditors</li>
                                        <li>The Sections </li>
                                    </ul>
                                    <br>
                                    <b>General Assembly</b>
                                    <br>
                                    <ul>
                                      <li>It is made up of founding members and active members of the Association. Honorary and benefactor members can take part.  </li>
                                      <li>It is the supreme body of the Association. </li>
                                      <li>It is held annually in regular session at the Association's headquarters. It can be held in a special session.</li>
                                  </ul>
                                  <br>
                                  <b>From the Executive Office (B.E.)</b>
                                  <br>
                                  The Association's B.E. is collegial and formed as follows:
                                  <br>
                                  <ul>
                                      <li>A President</li>
                                      <li>A Secretary-General </li>
                                      <li>A treasure trove</li>
                                  </ul>
                                  <br>
                                  The B.E. is elected by the General Assembly; his term of office is five years. It's renewable. 
                                  <br>
                                  The B.E. meets quarterly at the Association's headquarters or any other location. 
                                </div>
                              </div>
                          </div>



                          <div class=\"card\" style=\"\">
                              <div class=\"card-header\" id=\"heading6\" style=\"background: #fff; border-bottom:1px solid rgba(128,128,128,.2);\">
                                <div class=\"mb-0\">
                                    <span class=\"fa fa-check-circle\" style=\"font-size:20px; color:#a6d127;\"></span>
                                    <span class=\"accordion-title\"> Headquarters and sections of the association</span>
                                    <button  class=\"collapsed\" style=\"border:none; position:absolute; right:0px; font-size:20px; width:40px; border-radius:0px; height:60px; top:0px;\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse6\" aria-expanded=\"false\" aria-controls=\"collapse6\">
                                         <span class=\"fa fa-angle-down\"></span>
                                    </button>
                                </div>
                              </div>
                          
                              <div id=\"collapse6\" class=\"collapse \" aria-labelledby=\"heading6\" data-parent=\"#accordionExample\">
                                <div class=\"card-body\">
                                    <br>
                                    <ul>
                                        <li>The headquarters of the Association and located at 32 rue des Bons Voisins, 60950 Ver/Launette, France.</li>
                                        <li>The Sections are dismemberments in the countries chosen to expand the Association's missions.</li>
                                        <li>The choice of these countries and the appointment of its members is the responsibility of the Executive Board</li>
                                        
                                    </ul>
            
                          </div>
                      </div>
                      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 492
($context["app"] ?? null), "request", [], "any", false, false, false, 492), "getLocale", [], "method", false, false, false, 492) == "en")) {
            // line 493
            echo "

                          </div>
                      </div><!-- .col -->
                        ";
        }
        // line 498
        echo "                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div>
      </div>

";
    }

    // line 507
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 508
        echo "
";
    }

    public function getTemplateName()
    {
        return "@App/Default/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 508,  573 => 507,  563 => 498,  556 => 493,  554 => 492,  316 => 256,  314 => 255,  308 => 251,  306 => 250,  66 => 13,  59 => 9,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@App/Default/faq.html.twig", "/home/c1462208c/public_html/src/AppBundle/Resources/views/Default/faq.html.twig");
    }
}
