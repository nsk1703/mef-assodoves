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

/* @App/Default/checkout.html.twig */
class __TwigTemplate_5eb3fb9b0aa1432492f4697ebe6bdddf14cf116201bb9b9c9abd6ed337f6d9bf extends \Twig\Template
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
        return "layout/checkout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Default/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Default/checkout.html.twig"));

        $this->parent = $this->loadTemplate("layout/checkout.html.twig", "@App/Default/checkout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<style>

   .StripeElement {
      background-color: white;
      height: 40px;
      padding: 10px 12px;
      border-radius: 4px;

     
    }
    
    .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
    }
    
    .StripeElement--invalid {
      border-color: #fa755a;
    }
    
    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
    }

    .longField{
      width:83%;
    }

  .money_icon{
    color:#00b8b1; 
    font-size:22px; 
    position:absolute; 
    left:45%; 
    bottom:10px;
  }
/************
 800px
************/

@media only screen and (max-width: 800px)
{
\t.longField{
        width:100% !important;
      }
    .money_icon{
    
    position:absolute; 
    left:80%; 
   
  }
}


</style>

<div class=\"checkout-page-container\">

   <div class=\"container\" >
      <div class=\"row\">
          <div class=\"col-lg-12\" style=\"margin-bottom:80px;\">

                <div class=\" mt-4\" >
                  <div id=\"stripe-gateway\" class=\"\">
                     <a  href=\"#stripe-gateway-content\" role=\"button\" aria-expanded=\"true\" aria-controls=\"stripe-gateway-content\">
                        <div class=\"payment-badge\">
                           <span class=\"fa fa-shield-alt\" style=\"font-size:20px; margin-right:5px;color: #4183d7;\"></span> 
                           <span style=\"font-size:14px; margin-right:10px; font-weight:600; color:#313131;\">
                              Paiement sécurisé
                           </span> 
                           <span class=\"card-payement-badges\">
                              <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/visa.png"), "html", null, true);
        echo "\" alt=\"\">
                              <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carte.png"), "html", null, true);
        echo "\" alt=\"\" >
                              <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mastercard.png"), "html", null, true);
        echo "\" alt=\"\" >
                           </span>
                           <span class=\"fa fa-angle-down\" style=\"font-size:18px; color:#313131;margin-left:10px;\"></span>
                        </div>
                     </a>
                     ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "session", [], "any", false, false, false, 82), "flashbag", [], "any", false, false, false, 82), "get", [0 => "error"], "method", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 83
            echo "
                      <div class=\"col-12 mt-3\">
                        <div class=\"alert alert-danger longField\" role=\"alert\">
                          ";
            // line 86
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                      </div>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    
                     <div id=\"stripe-gateway-content\" class=\"collapse show\" aria-labelledby=\"stripe-gateway\">
                       
                     <form id=\"payment-form_\" method=\"post\" action=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_pay");
        echo "\" class=\"mt-4\">
                      <div style=\"font-size:13px; color: #8191a0; margin-top:10px; margin-bottom:10px; font-weight:400;\">
                        Informations personelles
                      </div>

                     
                     
                      <div class=\"form-row\">
                        <div class=\"col-lg-12 col-12 mb-3\">

                          ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "username", [], "any", false, false, false, 105), 'label', ["label" => "Votre nom*"]);
        echo "
                          ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "username", [], "any", false, false, false, 106), 'errors');
        echo "
                          ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "username", [], "any", false, false, false, 107), 'widget');
        echo "

                        </div>
                          <div class=\"col-lg-6 col-12 mb-3\">

                              ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "phone", [], "any", false, false, false, 112), 'label', ["label" => "Téléphone*"]);
        echo "
                              ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "phone", [], "any", false, false, false, 113), 'errors');
        echo "
                              ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "phone", [], "any", false, false, false, 114), 'widget');
        echo "

                          </div>
                          <div class=\"col-lg-6 col-12 input-element-right mb-3\">
                              
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "email", [], "any", false, false, false, 119), 'label', ["label" => "Votre adresse email*"]);
        echo "
                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "email", [], "any", false, false, false, 120), 'errors');
        echo "
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "email", [], "any", false, false, false, 121), 'widget');
        echo "
                            
                         </div>
                         <div class=\"col-lg-12 col-12 mb-3\">
                                
                          ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "amount", [], "any", false, false, false, 126), 'label', ["label" => "Montant de votre contribution*"]);
        echo "
                          ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "amount", [], "any", false, false, false, 127), 'errors');
        echo "
                          ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "amount", [], "any", false, false, false, 128), 'widget');
        echo "
                          <span class=\"fa fa-euro-sign money_icon\"></span>
                        </div>
                       
                          
                        </div>
                        

                       <div style=\"font-size:13px; color: #8191a0; margin-top:10px; margin-bottom:10px; font-weight:400;\">
                        Informations sur votre mode de paiement
                        </div>

                        <div class=\"form-row\">
                           <div class=\"col-lg-6 col-12 mb-3\">
                              <label for=\"\">Numéro de carte</label>
                              <div id=\"card-number-element\" class=\"field\"></div>
                           </div>
                           <div class=\"col-lg-6 col-12 input-element-right mb-3\">
                              
                              ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "accountName", [], "any", false, false, false, 147), 'label', ["label" => "Titulaire de la carte*"]);
        echo "
                              ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "accountName", [], "any", false, false, false, 148), 'errors');
        echo "
                              ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "accountName", [], "any", false, false, false, 149), 'widget');
        echo "
                              
                           </div>
                           <div class=\"col-lg-6 col-12 mb-3\">
                              <label for=\"\">Date d'expiration</label>
                              <div id=\"card-expiry-element\" class=\"field\"></div>
                           </div>
                           <div class=\"col-lg-6 col-12 input-element-right mb-3\">
                              <label for=\"\">Cryptogramme</label>
                              <div id=\"card-cvc-element\" class=\"field\"></div>
                           </div>
                        </div>

                        <div class=\"outcome\">
                           <div class=\"error\"></div>
                           <div class=\"success\">
                             Success! Your Stripe token is <span class=\"token\"></span>
                           </div>
                         </div>
                     
                         ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "secure_token", [], "any", false, false, false, 169), 'widget');
        echo "
                         ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), 'widget');
        echo "

                     <div style=\"font-size:13px; color: #8191a0; margin-top:18px;font-weight:400;\">
                        En cliquant sur payer, j’accepte les Conditions Générales d’Utilisation.
                     </div>


                     <div class=\"spinner hidden\" id=\"spinner\"></div>
                     <div style=\"margin-top:18px; margin-bottom:18px;\">
                        <button id=\"pay-button\" type=\"submit\" class=\"btn stripe-submit-btn\" >Donner <span class=\"totalAmountToPay\">1</span> € </button>
                     </div>

                     ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), 'widget');
        echo "

                  </form>
                     </div>
                  </div>

                  <div id=\"paypal-gateway \" class=\"mt-5 d-none\">
                     <a class=\"\" data-toggle=\"collapse\" href=\"#paypal-gateway-content\" role=\"button\" aria-expanded=\"true\" aria-controls=\"paypal-gateway-content\">
                        <div class=\"payment-badge\">
                           <span class=\"fa fa-shield-alt\" style=\"font-size:20px; margin-right:5px;color: #4183d7;\"></span> 
                           <span style=\"font-size:14px; margin-right:10px; font-weight:600; color:#313131;\">
                              Paiement sécurisé
                           </span> 
                           <span class=\"card-payement-badges\">
                              <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/paypal.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width:50px;\">
   
                           </span>
                           <span class=\"fa fa-angle-down\" style=\"font-size:18px; color:#313131;margin-left:10px;\"></span>
                        </div>
                     </a>
                  </div>
                  <div id=\"paypal-gateway-content  d-none\" class=\"collapse\" aria-labelledby=\"paypal-gateway\">


                        <div id=\"paypal-button-container\" class=\"mt-5\">
                           
                        </div>

                  </div>

                </div>




               


               <div class=\"mt-3\">
                  <p style=\"font-size:12px; color: #8191a0; font-weight:400; width:100%;\">
                     Vous êtes sur un serveur de paiement sécurisé par les normes ssl (https) et pcidss de nos partenaires bancaires. Vos données sont encryptées pour plus de sécurité.
                  </p> 
               </div>

               <div style=\"margin-top:25px;font-size:12px; color: #8191a0;font-weight:400;\"><span class=\"fa fa-info-circle\" style=\"font-size: 18px; color: #00b8b1; margin-right:10px; \"></span>Consultez les informations légales liées au paiement</div>




               

          </div>
          
      </div>
  </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 242
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 243
        echo "<script>
  \$(\"#app_secure_stripe_pay_amount\").on('change keyup', function() {
  
    \$(\".totalAmountToPay\").text( \$(\"#app_secure_stripe_pay_amount\").val());          
  
});
   /***********************************
   srtipe pay button
   ***********************************/
   // Set your publishable key: remember to change this to your live publishable key in production
   // See your keys here: https://dashboard.stripe.com/account/apikeys
   var stripe = Stripe('pk_test_51HO2UtH9HySmKb9Bk68vy0lZXKJI6SP297KzdR4ew5M01WSxBFPbcRjtBWSCBfnXQmwMHskTkGfkG30XH1ghzb8w007CXLJUmO\\n');
   var elements = stripe.elements();
  var style = {
  base: {
    color: '#32325d',
    fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

var cardNumberElement = elements.create('cardNumber', {
   style: style
 });
 cardNumberElement.mount('#card-number-element');
 
 var cardExpiryElement = elements.create('cardExpiry', {
   style: style,
   placeholder: 'MM/AA',
 });
 cardExpiryElement.mount('#card-expiry-element');
 
 var cardCvcElement = elements.create('cardCvc', {
   style: style,
   placeholder: 'Exemple: 123',
 });
 cardCvcElement.mount('#card-cvc-element');
 
function setOutcome(result) {
  var successElement = document.querySelector('.success');
  var errorElement = document.querySelector('.error');
  successElement.classList.remove('visible');
  errorElement.classList.remove('visible');

  if (result.token) {
    // In this example, we're simply displaying the token
    successElement.querySelector('.token').textContent = result.token.id;
    successElement.classList.add('visible');
    // In a real integration, you'd submit the form with the token to your backend server
     var form = document.querySelector('form');
     form.querySelector('input[name=\"app_secure_stripe_pay[secure_token]\"]').setAttribute('value', result.token.id);
     form.submit();
  } else if (result.error) {
    errorElement.textContent = result.error.message;
    errorElement.classList.add('visible');
  }
}

cardNumberElement.on('change', function(event) {
   setOutcome(event);
 });
 
 cardExpiryElement.on('change', function(event) {
   setOutcome(event);
 });
 
 cardCvcElement.on('change', function(event) {
   setOutcome(event);
 });
 document.querySelector('form').addEventListener('submit', function(e) {
   e.preventDefault();
   var options = {
      name: document.getElementById('app_secure_stripe_pay_accountName').value,
    };
   stripe.createToken(cardNumberElement, options).then(setOutcome);
 });
 

</script>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 243,  395 => 242,  340 => 196,  323 => 182,  308 => 170,  304 => 169,  281 => 149,  277 => 148,  273 => 147,  251 => 128,  247 => 127,  243 => 126,  235 => 121,  231 => 120,  227 => 119,  219 => 114,  215 => 113,  211 => 112,  203 => 107,  199 => 106,  195 => 105,  182 => 95,  177 => 92,  165 => 86,  160 => 83,  156 => 82,  148 => 77,  144 => 76,  140 => 75,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/checkout.html.twig\" %}



{% block content %}
<style>

   .StripeElement {
      background-color: white;
      height: 40px;
      padding: 10px 12px;
      border-radius: 4px;

     
    }
    
    .StripeElement--focus {
      box-shadow: 0 1px 3px 0 #cfd7df;
    }
    
    .StripeElement--invalid {
      border-color: #fa755a;
    }
    
    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
    }

    .longField{
      width:83%;
    }

  .money_icon{
    color:#00b8b1; 
    font-size:22px; 
    position:absolute; 
    left:45%; 
    bottom:10px;
  }
/************
 800px
************/

@media only screen and (max-width: 800px)
{
\t.longField{
        width:100% !important;
      }
    .money_icon{
    
    position:absolute; 
    left:80%; 
   
  }
}


</style>

<div class=\"checkout-page-container\">

   <div class=\"container\" >
      <div class=\"row\">
          <div class=\"col-lg-12\" style=\"margin-bottom:80px;\">

                <div class=\" mt-4\" >
                  <div id=\"stripe-gateway\" class=\"\">
                     <a  href=\"#stripe-gateway-content\" role=\"button\" aria-expanded=\"true\" aria-controls=\"stripe-gateway-content\">
                        <div class=\"payment-badge\">
                           <span class=\"fa fa-shield-alt\" style=\"font-size:20px; margin-right:5px;color: #4183d7;\"></span> 
                           <span style=\"font-size:14px; margin-right:10px; font-weight:600; color:#313131;\">
                              Paiement sécurisé
                           </span> 
                           <span class=\"card-payement-badges\">
                              <img src=\"{{ asset('images/visa.png')}}\" alt=\"\">
                              <img src=\"{{ asset('images/carte.png')}}\" alt=\"\" >
                              <img src=\"{{ asset('images/mastercard.png')}}\" alt=\"\" >
                           </span>
                           <span class=\"fa fa-angle-down\" style=\"font-size:18px; color:#313131;margin-left:10px;\"></span>
                        </div>
                     </a>
                     {% for flashMessage in app.session.flashbag.get('error') %}

                      <div class=\"col-12 mt-3\">
                        <div class=\"alert alert-danger longField\" role=\"alert\">
                          {{ flashMessage }}
                        </div>
                      </div>


                    {% endfor %}
                    
                     <div id=\"stripe-gateway-content\" class=\"collapse show\" aria-labelledby=\"stripe-gateway\">
                       
                     <form id=\"payment-form_\" method=\"post\" action=\"{{path('app_stripe_pay')}}\" class=\"mt-4\">
                      <div style=\"font-size:13px; color: #8191a0; margin-top:10px; margin-bottom:10px; font-weight:400;\">
                        Informations personelles
                      </div>

                     
                     
                      <div class=\"form-row\">
                        <div class=\"col-lg-12 col-12 mb-3\">

                          {{ form_label(form.username, \"Votre nom*\") }}
                          {{ form_errors(form.username) }}
                          {{ form_widget(form.username) }}

                        </div>
                          <div class=\"col-lg-6 col-12 mb-3\">

                              {{ form_label(form.phone, \"Téléphone*\") }}
                              {{ form_errors(form.phone) }}
                              {{ form_widget(form.phone) }}

                          </div>
                          <div class=\"col-lg-6 col-12 input-element-right mb-3\">
                              
                            {{ form_label(form.email, \"Votre adresse email*\") }}
                            {{ form_errors(form.email) }}
                            {{ form_widget(form.email) }}
                            
                         </div>
                         <div class=\"col-lg-12 col-12 mb-3\">
                                
                          {{ form_label(form.amount, \"Montant de votre contribution*\") }}
                          {{ form_errors(form.amount) }}
                          {{ form_widget(form.amount) }}
                          <span class=\"fa fa-euro-sign money_icon\"></span>
                        </div>
                       
                          
                        </div>
                        

                       <div style=\"font-size:13px; color: #8191a0; margin-top:10px; margin-bottom:10px; font-weight:400;\">
                        Informations sur votre mode de paiement
                        </div>

                        <div class=\"form-row\">
                           <div class=\"col-lg-6 col-12 mb-3\">
                              <label for=\"\">Numéro de carte</label>
                              <div id=\"card-number-element\" class=\"field\"></div>
                           </div>
                           <div class=\"col-lg-6 col-12 input-element-right mb-3\">
                              
                              {{ form_label(form.accountName, \"Titulaire de la carte*\") }}
                              {{ form_errors(form.accountName) }}
                              {{ form_widget(form.accountName) }}
                              
                           </div>
                           <div class=\"col-lg-6 col-12 mb-3\">
                              <label for=\"\">Date d'expiration</label>
                              <div id=\"card-expiry-element\" class=\"field\"></div>
                           </div>
                           <div class=\"col-lg-6 col-12 input-element-right mb-3\">
                              <label for=\"\">Cryptogramme</label>
                              <div id=\"card-cvc-element\" class=\"field\"></div>
                           </div>
                        </div>

                        <div class=\"outcome\">
                           <div class=\"error\"></div>
                           <div class=\"success\">
                             Success! Your Stripe token is <span class=\"token\"></span>
                           </div>
                         </div>
                     
                         {{ form_widget(form.secure_token) }}
                         {{ form_widget(form) }}

                     <div style=\"font-size:13px; color: #8191a0; margin-top:18px;font-weight:400;\">
                        En cliquant sur payer, j’accepte les Conditions Générales d’Utilisation.
                     </div>


                     <div class=\"spinner hidden\" id=\"spinner\"></div>
                     <div style=\"margin-top:18px; margin-bottom:18px;\">
                        <button id=\"pay-button\" type=\"submit\" class=\"btn stripe-submit-btn\" >Donner <span class=\"totalAmountToPay\">1</span> € </button>
                     </div>

                     {{ form_widget(form) }}

                  </form>
                     </div>
                  </div>

                  <div id=\"paypal-gateway \" class=\"mt-5 d-none\">
                     <a class=\"\" data-toggle=\"collapse\" href=\"#paypal-gateway-content\" role=\"button\" aria-expanded=\"true\" aria-controls=\"paypal-gateway-content\">
                        <div class=\"payment-badge\">
                           <span class=\"fa fa-shield-alt\" style=\"font-size:20px; margin-right:5px;color: #4183d7;\"></span> 
                           <span style=\"font-size:14px; margin-right:10px; font-weight:600; color:#313131;\">
                              Paiement sécurisé
                           </span> 
                           <span class=\"card-payement-badges\">
                              <img src=\"{{ asset('images/paypal.jpg')}}\" alt=\"\" style=\"width:50px;\">
   
                           </span>
                           <span class=\"fa fa-angle-down\" style=\"font-size:18px; color:#313131;margin-left:10px;\"></span>
                        </div>
                     </a>
                  </div>
                  <div id=\"paypal-gateway-content  d-none\" class=\"collapse\" aria-labelledby=\"paypal-gateway\">


                        <div id=\"paypal-button-container\" class=\"mt-5\">
                           
                        </div>

                  </div>

                </div>




               


               <div class=\"mt-3\">
                  <p style=\"font-size:12px; color: #8191a0; font-weight:400; width:100%;\">
                     Vous êtes sur un serveur de paiement sécurisé par les normes ssl (https) et pcidss de nos partenaires bancaires. Vos données sont encryptées pour plus de sécurité.
                  </p> 
               </div>

               <div style=\"margin-top:25px;font-size:12px; color: #8191a0;font-weight:400;\"><span class=\"fa fa-info-circle\" style=\"font-size: 18px; color: #00b8b1; margin-right:10px; \"></span>Consultez les informations légales liées au paiement</div>




               

          </div>
          
      </div>
  </div>

</div>

{% endblock %}

{% block javascript%}
<script>
  \$(\"#app_secure_stripe_pay_amount\").on('change keyup', function() {
  
    \$(\".totalAmountToPay\").text( \$(\"#app_secure_stripe_pay_amount\").val());          
  
});
   /***********************************
   srtipe pay button
   ***********************************/
   // Set your publishable key: remember to change this to your live publishable key in production
   // See your keys here: https://dashboard.stripe.com/account/apikeys
   var stripe = Stripe('pk_test_51HO2UtH9HySmKb9Bk68vy0lZXKJI6SP297KzdR4ew5M01WSxBFPbcRjtBWSCBfnXQmwMHskTkGfkG30XH1ghzb8w007CXLJUmO\\n');
   var elements = stripe.elements();
  var style = {
  base: {
    color: '#32325d',
    fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

var cardNumberElement = elements.create('cardNumber', {
   style: style
 });
 cardNumberElement.mount('#card-number-element');
 
 var cardExpiryElement = elements.create('cardExpiry', {
   style: style,
   placeholder: 'MM/AA',
 });
 cardExpiryElement.mount('#card-expiry-element');
 
 var cardCvcElement = elements.create('cardCvc', {
   style: style,
   placeholder: 'Exemple: 123',
 });
 cardCvcElement.mount('#card-cvc-element');
 
function setOutcome(result) {
  var successElement = document.querySelector('.success');
  var errorElement = document.querySelector('.error');
  successElement.classList.remove('visible');
  errorElement.classList.remove('visible');

  if (result.token) {
    // In this example, we're simply displaying the token
    successElement.querySelector('.token').textContent = result.token.id;
    successElement.classList.add('visible');
    // In a real integration, you'd submit the form with the token to your backend server
     var form = document.querySelector('form');
     form.querySelector('input[name=\"app_secure_stripe_pay[secure_token]\"]').setAttribute('value', result.token.id);
     form.submit();
  } else if (result.error) {
    errorElement.textContent = result.error.message;
    errorElement.classList.add('visible');
  }
}

cardNumberElement.on('change', function(event) {
   setOutcome(event);
 });
 
 cardExpiryElement.on('change', function(event) {
   setOutcome(event);
 });
 
 cardCvcElement.on('change', function(event) {
   setOutcome(event);
 });
 document.querySelector('form').addEventListener('submit', function(e) {
   e.preventDefault();
   var options = {
      name: document.getElementById('app_secure_stripe_pay_accountName').value,
    };
   stripe.createToken(cardNumberElement, options).then(setOutcome);
 });
 

</script>
    

{% endblock %}", "@App/Default/checkout.html.twig", "C:\\wamp\\www\\mef-assodoves\\src\\AppBundle\\Resources\\views\\Default\\checkout.html.twig");
    }
}
