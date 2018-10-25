<?php

/* SyliusShopBundle:Checkout:selectPayment.html.twig */
class __TwigTemplate_ecb18d878085cb4ea1c629cb2ee757b58070bf142c0d0d0dfea58afb79514418 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectPayment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectPayment.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">&nbsp;</div>
    ";
        // line 9
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 9)->display(array_merge($context, array("active" => "select_payment", "orderTotal" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->source); })()), "total", array()))));
        // line 10
        echo "
    ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.after_steps", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->source); })()))));
        echo "

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-payment-methods\">
                ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 16, $this->source); })()))));
        echo "

                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_payment"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'errors');
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 22
        $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_form.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 22)->display($context);
        // line 23
        echo "                    <div class=\"ui hidden divider\"></div>
                <div class=\"row\">&nbsp;</div>

                    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_navigation", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 26, $this->source); })()))));
        echo "
                    ";
        // line 27
        $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_navigation.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 27)->display($context);
        // line 28
        echo "
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "_token", array()), 'row');
        echo "
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
        <div class=\"five wide column\">
            ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 34, $this->source); })()))));
        echo "

            ";
        // line 36
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 36)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 36, $this->source); })()))));
        // line 37
        echo "
            ";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->source); })()))));
        echo "

            ";
        // line 40
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 40)->display($context);
        // line 41
        echo "
            ";
        // line 42
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.after_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 42, $this->source); })()))));
        echo "
        </div>
    </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:selectPayment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  133 => 41,  131 => 40,  126 => 38,  123 => 37,  121 => 36,  116 => 34,  109 => 30,  105 => 29,  102 => 28,  100 => 27,  96 => 26,  91 => 23,  89 => 22,  83 => 19,  79 => 18,  74 => 16,  66 => 11,  63 => 10,  61 => 9,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">&nbsp;</div>
    {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'select_payment', 'orderTotal': order.total} %}

    {{ sonata_block_render_event('sylius.shop.checkout.select_payment.after_steps', {'order': order}) }}

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-payment-methods\">
                {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_form', {'order': order}) }}

                {{ form_start(form, {'action': path('sylius_shop_checkout_select_payment'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    {{ form_errors(form) }}
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    {% include '@SyliusShop/Checkout/SelectPayment/_form.html.twig' %}
                    <div class=\"ui hidden divider\"></div>
                <div class=\"row\">&nbsp;</div>

                    {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_navigation', {'order': order}) }}
                    {% include '@SyliusShop/Checkout/SelectPayment/_navigation.html.twig' %}

                    {{ form_row(form._token) }}
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
        <div class=\"five wide column\">
            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_summary', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_support', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_support.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.after_support', {'order': order}) }}
        </div>
    </div>
    </div>
</div>
{% endblock %}
", "SyliusShopBundle:Checkout:selectPayment.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/selectPayment.html.twig");
    }
}
