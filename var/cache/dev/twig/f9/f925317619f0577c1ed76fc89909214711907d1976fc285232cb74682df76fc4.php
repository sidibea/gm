<?php

/* @SyliusShop/Checkout/Address/_form.html.twig */
class __TwigTemplate_83ddca795198f08cfc70f4da26b73245d507581aa216b27fd63de2ea7b26ef8a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/Address/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/Address/_form.html.twig"));

        // line 1
        echo "<div id=\"sylius-shipping-address\">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 2)->display($context);
        // line 3
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</h3>
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "customer", array(), "any", true, true)) {
            // line 5
            echo "        ";
            $this->loadTemplate("@SyliusShop/Common/Form/_login.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 5)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), "customer", array()))));
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 7)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "shippingAddress", array()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 7, $this->source); })()))));
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "differentBillingAddress", array()), 'row', array("attr" => array("data-toggles" => "sylius-billing-address")));
        echo "

    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.shipping_address_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->source); })()))));
        echo "
</div>

<div id=\"sylius-billing-address\">
    <div class=\"ui hidden divider\"></div>
    ";
        // line 15
        $this->loadTemplate("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 15)->display($context);
        // line 16
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</h3>
    ";
        // line 17
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "@SyliusShop/Checkout/Address/_form.html.twig", 17)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "billingAddress", array()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->source); })()))));
        // line 18
        echo "
    ";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.billing_address_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->source); })()))));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/Address/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  73 => 18,  71 => 17,  66 => 16,  64 => 15,  56 => 10,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  39 => 4,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sylius-shipping-address\">
    {% include '@SyliusShop/Checkout/Address/_addressBookSelect.html.twig' %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</h3>
    {% if form.customer is defined %}
        {% include '@SyliusShop/Common/Form/_login.html.twig' with {'form': form.customer} %}
    {% endif %}
    {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form.shippingAddress, 'order': order} %}
    {{ form_row(form.differentBillingAddress, {'attr': {'data-toggles': 'sylius-billing-address'}}) }}

    {{ sonata_block_render_event('sylius.shop.checkout.address.shipping_address_form', {'order': order}) }}
</div>

<div id=\"sylius-billing-address\">
    <div class=\"ui hidden divider\"></div>
    {% include '@SyliusShop/Checkout/Address/_addressBookSelect.html.twig' %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.billing_address'|trans }}</h3>
    {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form.billingAddress, 'order': order} %}

    {{ sonata_block_render_event('sylius.shop.checkout.address.billing_address_form', {'order': order}) }}
</div>
", "@SyliusShop/Checkout/Address/_form.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/Address/_form.html.twig");
    }
}
