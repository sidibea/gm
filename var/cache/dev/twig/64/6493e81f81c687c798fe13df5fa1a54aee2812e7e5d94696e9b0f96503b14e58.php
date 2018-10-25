<?php

/* SyliusShopBundle:Checkout:complete.html.twig */
class __TwigTemplate_1dd06f13f61442053dafd7f7935e1c403ed7a7157dc5e761ca3ba01d9369cd3e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:complete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:complete.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), array(0 => "@SyliusUi/Form/theme.html.twig"), true);
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
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 9)->display(array_merge($context, array("active" => "complete", "orderTotal" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->source); })()), "total", array()))));
        // line 10
        echo "
    ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_steps", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->source); })()))));
        echo "

    <div class=\"ui padded segment\">
        ";
        // line 14
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_header.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 14)->display($context);
        // line 15
        echo "
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_content_header", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 16, $this->source); })()))));
        echo "

        ";
        // line 18
        $this->loadTemplate("@SyliusShop/_flashes.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 18)->display($context);
        // line 19
        echo "
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_complete"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), 'errors');
        echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.before_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 24, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()))));
        echo "

            ";
        // line 26
        $this->loadTemplate("SyliusShopBundle:Common/Order:_summary.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 26)->display($context);
        // line 27
        echo "
            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->source); })()))));
        echo "

            <div class=\"ui hidden divider\"></div>
            ";
        // line 31
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_form.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 31)->display($context);
        // line 32
        echo "
            ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.before_navigation", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 33, $this->source); })()))));
        echo "

            ";
        // line 35
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_navigation.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 35)->display($context);
        // line 36
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "_token", array()), 'row');
        echo "
        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "
        <div class=\"row\"> &nbsp;</div>
    </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 38,  128 => 37,  125 => 36,  123 => 35,  118 => 33,  115 => 32,  113 => 31,  107 => 28,  104 => 27,  102 => 26,  97 => 24,  91 => 21,  87 => 20,  84 => 19,  82 => 18,  77 => 16,  74 => 15,  72 => 14,  66 => 11,  63 => 10,  61 => 9,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">&nbsp;</div>
    {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'complete', 'orderTotal': order.total} %}

    {{ sonata_block_render_event('sylius.shop.checkout.complete.after_steps', {'order': order}) }}

    <div class=\"ui padded segment\">
        {% include '@SyliusShop/Checkout/Complete/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.checkout.complete.after_content_header', {'order': order}) }}

        {% include '@SyliusShop/_flashes.html.twig' %}

        {{ form_start(form, {'action': path('sylius_shop_checkout_complete'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            {{ form_errors(form) }}
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            {{ sonata_block_render_event('sylius.shop.checkout.complete.before_summary', {'order': order, 'form': form}) }}

            {% include 'SyliusShopBundle:Common/Order:_summary.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.complete.after_summary', {'order': order}) }}

            <div class=\"ui hidden divider\"></div>
            {% include '@SyliusShop/Checkout/Complete/_form.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.complete.before_navigation', {'order': order}) }}

            {% include '@SyliusShop/Checkout/Complete/_navigation.html.twig' %}

            {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
        <div class=\"row\"> &nbsp;</div>
    </div>
    </div>
</div>
{% endblock %}
", "SyliusShopBundle:Checkout:complete.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/complete.html.twig");
    }
}
