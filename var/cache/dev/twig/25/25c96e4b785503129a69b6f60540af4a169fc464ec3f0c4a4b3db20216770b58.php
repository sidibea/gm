<?php

/* SyliusShopBundle:Checkout:address.html.twig */
class __TwigTemplate_2c82f9fe3d793e8130a9ec3a15756c09cf8a943e848cf70e4ec3063751a62a55 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:address.html.twig"));

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
        echo "    <div class=\"container-web relative\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"breadcrumb-web\">
                    <ul class=\"clear-margin\">
                        <li class=\"animate-default title-hover-red\"><a href=\"#\">Home</a></li>
                        <li class=\"animate-default title-hover-red\"><a href=\"#\">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"relative container-web\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 22
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 22)->display($context);
        // line 23
        echo "
                ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.after_steps", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 24, $this->source); })()))));
        echo "
                <!-- Breadcrumb -->
                <div class=\"ui stackable grid\">
                    <div class=\"eleven wide column\">
                        <div class=\"ui segment\">
                            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 29, $this->source); })()))));
        echo "

                            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), 'errors');
        echo "
                            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                            ";
        // line 35
        $this->loadTemplate("@SyliusShop/Checkout/Address/_form.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 35)->display($context);
        // line 36
        echo "                            <div class=\"ui hidden divider\"></div>

                            ";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_navigation", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->source); })()))));
        echo "

                            ";
        // line 40
        $this->loadTemplate("@SyliusShop/Checkout/Address/_navigation.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 40)->display($context);
        // line 41
        echo "
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "_token", array()), 'row');
        echo "
                            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "
                        </div>
                    </div>
                    <div class=\"five wide column\">
                        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 47, $this->source); })()))));
        echo "

                        ";
        // line 49
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 49)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 49, $this->source); })()))));
        // line 50
        echo "
                        ";
        // line 51
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 51, $this->source); })()))));
        echo "

                        ";
        // line 53
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 53)->display($context);
        // line 54
        echo "
                        ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.after_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 55, $this->source); })()))));
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
        return "SyliusShopBundle:Checkout:address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 55,  146 => 54,  144 => 53,  139 => 51,  136 => 50,  134 => 49,  129 => 47,  122 => 43,  118 => 42,  115 => 41,  113 => 40,  108 => 38,  104 => 36,  102 => 35,  96 => 32,  92 => 31,  87 => 29,  79 => 24,  76 => 23,  74 => 22,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    <div class=\"container-web relative\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"breadcrumb-web\">
                    <ul class=\"clear-margin\">
                        <li class=\"animate-default title-hover-red\"><a href=\"#\">Home</a></li>
                        <li class=\"animate-default title-hover-red\"><a href=\"#\">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"relative container-web\">
        <div class=\"container\">
            <div class=\"row\">
                {% include '@SyliusShop/Checkout/_steps.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.checkout.address.after_steps', {'order': order}) }}
                <!-- Breadcrumb -->
                <div class=\"ui stackable grid\">
                    <div class=\"eleven wide column\">
                        <div class=\"ui segment\">
                            {{ sonata_block_render_event('sylius.shop.checkout.address.before_form', {'order': order}) }}

                            {{ form_start(form, {'action': path('sylius_shop_checkout_address'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                            {{ form_errors(form) }}
                            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                            {% include '@SyliusShop/Checkout/Address/_form.html.twig' %}
                            <div class=\"ui hidden divider\"></div>

                            {{ sonata_block_render_event('sylius.shop.checkout.address.before_navigation', {'order': order}) }}

                            {% include '@SyliusShop/Checkout/Address/_navigation.html.twig' %}

                            {{ form_row(form._token) }}
                            {{ form_end(form, {'render_rest': false}) }}
                        </div>
                    </div>
                    <div class=\"five wide column\">
                        {{ sonata_block_render_event('sylius.shop.checkout.address.before_summary', {'order': order}) }}

                        {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

                        {{ sonata_block_render_event('sylius.shop.checkout.address.before_support', {'order': order}) }}

                        {% include '@SyliusShop/Checkout/_support.html.twig' %}

                        {{ sonata_block_render_event('sylius.shop.checkout.address.after_support', {'order': order}) }}
                    </div>
                </div>

            </div>
        </div>
    </div>

{% endblock %}
", "SyliusShopBundle:Checkout:address.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/address.html.twig");
    }
}
