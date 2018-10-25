<?php

/* @PayumStripe/Action/obtain_checkout_token.html.twig */
class __TwigTemplate_897f488b86ef2a201c857ab09d80d0abceeb8ef37e61821be48c354fe05e699c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'payum_body' => array($this, 'block_payum_body'),
            'payum_javascripts' => array($this, 'block_payum_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 1, $this->source); })())) ? ((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new Twig_Error_Runtime('Variable "layout" does not exist.', 1, $this->source); })())) : ("@PayumCore/layout.html.twig")), "@PayumStripe/Action/obtain_checkout_token.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PayumStripe/Action/obtain_checkout_token.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PayumStripe/Action/obtain_checkout_token.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_payum_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "payum_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "payum_body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("payum_body", $context, $blocks);
        echo "

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, (((isset($context["actionUrl"]) || array_key_exists("actionUrl", $context))) ? (_twig_default_filter((isset($context["actionUrl"]) || array_key_exists("actionUrl", $context) ? $context["actionUrl"] : (function () { throw new Twig_Error_Runtime('Variable "actionUrl" does not exist.', 6, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" method=\"POST\">
        <script
            src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
            data-key=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["publishable_key"]) || array_key_exists("publishable_key", $context) ? $context["publishable_key"] : (function () { throw new Twig_Error_Runtime('Variable "publishable_key" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\"
            data-image=\"";
        // line 10
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "image", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "image", array()), "")) : ("")), "html", null, true);
        echo "\"
            data-name=\"";
        // line 11
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", array()), "")) : ("")), "html", null, true);
        echo "\"
            data-description=\"";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "description", array()), "")) : ("")), "html", null, true);
        echo "\"
            data-amount=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new Twig_Error_Runtime('Variable "model" does not exist.', 13, $this->source); })()), "amount", array()), "html", null, true);
        echo "\"
            data-currency=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "currency", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "currency", array()), "USD")) : ("USD")), "html", null, true);
        echo "\"
            data-locale=\"auto\">
        </script>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_payum_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "payum_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "payum_javascripts"));

        // line 21
        echo "    ";
        $this->displayParentBlock("payum_javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        \$(function() {\$('form .stripe-button-el').click();});
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PayumStripe/Action/obtain_checkout_token.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  100 => 20,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  59 => 6,  53 => 4,  44 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends layout ?: \"@PayumCore/layout.html.twig\" %}

{% block payum_body %}
    {{ parent() }}

    <form action=\"{{ actionUrl|default('') }}\" method=\"POST\">
        <script
            src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
            data-key=\"{{ publishable_key }}\"
            data-image=\"{{ model.image|default(\"\") }}\"
            data-name=\"{{ model.name|default(\"\") }}\"
            data-description=\"{{ model.description|default(\"\") }}\"
            data-amount=\"{{ model.amount }}\"
            data-currency=\"{{ model.currency|default(\"USD\") }}\"
            data-locale=\"auto\">
        </script>
    </form>
{% endblock %}

{% block payum_javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        \$(function() {\$('form .stripe-button-el').click();});
    </script>

{% endblock %}
", "@PayumStripe/Action/obtain_checkout_token.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/payum/payum/src/Payum/Stripe/Resources/views/Action/obtain_checkout_token.html.twig");
    }
}
