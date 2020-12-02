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
class __TwigTemplate_7c280b7b5674c7e8cb6f178808fa984bd4225a990b57f2f63e2e189c4bff790e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/checkout.html.twig", "@App/Default/checkout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                     <a  href=\"#stripe-gateway-content\" role=\"button\" aria-expanded=\"true\" aria-controls=\"stripe-gateway-content\"
                     >
                        <div class=\"payment-badge\">
                           <span class=\"fa fa-shield-alt\" style=\"font-size:20px; margin-right:5px;color: #4183d7;\"></span> 
                           <span style=\"font-size:14px; margin-right:10px; font-weight:600; color:#313131;\">
                              Paiement sécurisé
                           </span> 
                           <span class=\"card-payement-badges\">
                              <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/visa.png"), "html", null, true);
        echo "\" alt=\"\">
                              <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carte.png"), "html", null, true);
        echo "\" alt=\"\" >
                              <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mastercard.png"), "html", null, true);
        echo "\" alt=\"\" >
                           </span>
                           <span class=\"fa fa-angle-down\" style=\"font-size:18px; color:#313131;margin-left:10px;\"></span>
                        </div>

                     </a>
                     ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 86), "flashbag", [], "any", false, false, false, 86), "get", [0 => "error"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 87
            echo "
                      <div class=\"col-12 mt-3\">
                        <div class=\"alert alert-danger longField\" role=\"alert\">
                          ";
            // line 90
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                      </div>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    
                     <div id=\"stripe-gateway-content\" class=\"collapse show\" aria-labelledby=\"stripe-gateway\">
                       
                     <form id=\"payment-form_\" method=\"post\" action=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_pay");
        echo "\" class=\"mt-4\">
                      <div style=\"font-size:13px; color: #8191a0; margin-top:10px; margin-bottom:10px; font-weight:400;\">
                        Informations personelles
                      </div>

                     
                     
                      <div class=\"form-row\">
                        <div class=\"col-lg-12 col-12 mb-3\">
                                
                          ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 109), 'label', ["label" => "Votre nom*"]);
        echo "
                          ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 110), 'errors');
        echo "
                          ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 111), 'widget');
        echo "
                         
                        </div>

                          <div class=\"col-lg-6 col-12 mb-3\">
                                  
                              ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 117), 'label', ["label" => "Téléphone*"]);
        echo "
                              ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 118), 'errors');
        echo "
                              ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 119), 'widget');
        echo "
                              
                          </div>
                          <div class=\"col-lg-6 col-12 input-element-right mb-3\">
                              
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 124), 'label', ["label" => "Votre adresse email*"]);
        echo "
                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 125), 'errors');
        echo "
                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 126), 'widget');
        echo "
                            
                         </div>
                         <div class=\"col-lg-12 col-12 mb-3\">
                                
                          ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 131), 'label', ["label" => "Montant de votre contribution*"]);
        echo "
                          ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 132), 'errors');
        echo "
                          ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "amount", [], "any", false, false, false, 133), 'widget');
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
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accountName", [], "any", false, false, false, 152), 'label', ["label" => "Titulaire de la carte*"]);
        echo "
                              ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accountName", [], "any", false, false, false, 153), 'errors');
        echo "
                              ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accountName", [], "any", false, false, false, 154), 'widget');
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
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "secure_token", [], "any", false, false, false, 174), 'widget');
        echo "
                         ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                     <div style=\"font-size:13px; color: #8191a0; margin-top:18px;font-weight:400;\">
                        En cliquant sur payer, j’accepte les Conditions Générales d’Utilisation.
                     </div>


                     <div class=\"spinner hidden\" id=\"spinner\"></div>
                     <div style=\"margin-top:18px; margin-bottom:18px;\">
                        <button id=\"pay-button\" type=\"submit\" class=\"btn stripe-submit-btn\" >Donner <span class=\"totalAmountToPay\">10</span> € </button>
                     </div>

                     ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
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
        // line 201
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
    }

    // line 247
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 248
        echo "<script>
  \$(\"#app_secure_stripe_pay_amount\").on('change keyup', function() {
  
    \$(\".totalAmountToPay\").text( \$(\"#app_secure_stripe_pay_amount\").val());          
  
});
   /***********************************
   srtipe pay button
   ***********************************/
   // Set your publishable key: remember to change this to your live publishable key in production
   // See your keys here: https://dashboard.stripe.com/account/apikeys
   var stripe = Stripe('pk_live_51HO2UtH9HySmKb9BVDI2XqzDfPb8pb9h1l9bt8jCUdZxLgrbfD4lUC7e1cTbXNnUWYWCR9uqJGznUqhhn0lTh73200zXlTRyno');
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
        return array (  380 => 248,  376 => 247,  327 => 201,  310 => 187,  295 => 175,  291 => 174,  268 => 154,  264 => 153,  260 => 152,  238 => 133,  234 => 132,  230 => 131,  222 => 126,  218 => 125,  214 => 124,  206 => 119,  202 => 118,  198 => 117,  189 => 111,  185 => 110,  181 => 109,  168 => 99,  163 => 96,  151 => 90,  146 => 87,  142 => 86,  133 => 80,  129 => 79,  125 => 78,  51 => 6,  47 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@App/Default/checkout.html.twig", "/home/c1462208c/public_html/src/AppBundle/Resources/views/Default/checkout.html.twig");
    }
}
