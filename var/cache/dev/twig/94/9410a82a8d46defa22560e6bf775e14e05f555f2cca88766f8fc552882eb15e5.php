<?php

/* SyliusShopBundle:Checkout:selectShipping.html.twig */
class __TwigTemplate_8ea2a109922d0873f9efad22e84bea34c96cafee1d162b4f65e130795a3d1ec3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectShipping.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectShipping.html.twig"));

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
        echo "
<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">&nbsp;</div>
        <div class=\"row\">
            ";
        // line 11
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 11)->display(array_merge($context, array("active" => "select_shipping", "orderTotal" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->source); })()), "total", array()))));
        // line 12
        echo "
            ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.after_steps", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->source); })()))));
        echo "
              <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-shipping-methods\">
                ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.before_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->source); })()))));
        echo "

                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), 'errors');
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 23
        $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_form.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 23)->display($context);
        // line 24
        echo "                    <div class=\"ui hidden divider\"></div>

                    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.before_navigation", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 26, $this->source); })()))));
        echo "
                <div class=\"row\">&nbsp;</div>

                    ";
        // line 29
        $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_navigation.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 29)->display($context);
        // line 30
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "_token", array()), 'row');
        echo "
                ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
        <div class=\"five wide column\">
            ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.before_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 36, $this->source); })()))));
        echo "

            ";
        // line 38
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 38)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->source); })()))));
        // line 39
        echo "
            ";
        // line 40
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.before_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 40, $this->source); })()))));
        echo "

            ";
        // line 42
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 42)->display($context);
        // line 43
        echo "
            ";
        // line 44
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.after_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 44, $this->source); })()))));
        echo "
        </div>
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
        return "SyliusShopBundle:Checkout:selectShipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  135 => 43,  133 => 42,  128 => 40,  125 => 39,  123 => 38,  118 => 36,  111 => 32,  107 => 31,  104 => 30,  102 => 29,  96 => 26,  92 => 24,  90 => 23,  84 => 20,  80 => 19,  75 => 17,  68 => 13,  65 => 12,  63 => 11,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}

<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">&nbsp;</div>
        <div class=\"row\">
            {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'select_shipping', 'orderTotal': order.total} %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.after_steps', {'order': order}) }}
              <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-shipping-methods\">
                {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_form', {'order': order}) }}

                {{ form_start(form, {'action': path('sylius_shop_checkout_select_shipping'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    {{ form_errors(form) }}
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    {% include '@SyliusShop/Checkout/SelectShipping/_form.html.twig' %}
                    <div class=\"ui hidden divider\"></div>

                    {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_navigation', {'order': order}) }}
                <div class=\"row\">&nbsp;</div>

                    {% include '@SyliusShop/Checkout/SelectShipping/_navigation.html.twig' %}

                    {{ form_row(form._token) }}
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
        <div class=\"five wide column\">
            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_summary', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_support', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_support.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.after_support', {'order': order}) }}
        </div>
    </div>
        </div>
    </div>
</div>
{% endblock %}
", "SyliusShopBundle:Checkout:selectShipping.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/selectShipping.html.twig");
    }
}
