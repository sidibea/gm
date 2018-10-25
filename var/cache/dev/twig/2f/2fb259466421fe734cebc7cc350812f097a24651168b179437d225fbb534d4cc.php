<?php

/* @SyliusShop/Cart/Summary/_totals.html.twig */
class __TwigTemplate_c3ab751df4000ce5e9bda0f3ce18775d586dce8f12dcf6af4d6a4af4598d8ab9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_totals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/Summary/_totals.html.twig", 1);
        // line 2
        echo "
<p class=\"title-shoping-cart\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.summary"), "html", null, true);
        echo "</p>
";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 4, $this->source); })()))));
        echo "

<div class=\"full-width relative cart-total bg-gray  clearfix\">
    <div class=\"relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax"), "html", null, true);
        echo ":</p>
        <p class=\"text-black price-shoping-cart\">";
        // line 9
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 9, $this->source); })()), "taxTotal", array()));
        echo "</p>
    </div>
    <div class=\"relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
        echo ":</p>
        <p class=\"text-black price-shoping-cart\">";
        // line 13
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 13, $this->source); })()), "shippingTotal", array()));
        echo "</p>
    </div>
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 15, $this->source); })()), "orderPromotionTotal", array())) {
            // line 16
            echo "        <div class=\"relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l\">
            <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
            echo ":</p>
            <p class=\"text-black price-shoping-cart\">";
            // line 18
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 18, $this->source); })()), "orderPromotionTotal", array()));
            echo "</p>
        </div>
    ";
        }
        // line 21
        echo "

    <div class=\"relative justify-content top-margin-15-default\">
        <p class=\"bold\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_total"), "html", null, true);
        echo ":</p>
        <p class=\"text-red price-shoping-cart\">";
        // line 25
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 25, $this->source); })()), "total", array()));
        echo "</p>
    </div>

    ";
        // line 28
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 28, $this->source); })()), "currencyCode", array()) === twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 28, $this->source); })()), "currencyCode", array()))) {
            // line 29
            echo "        <div class=\"relative justify-content top-margin-15-default\">
            <p class=\"bold\">";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.base_currency_order_total"), "html", null, true);
            echo ":</p>
            <p class=\"text-red price-shoping-cart\">";
            // line 31
            echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 31, $this->source); })()), "total", array()), twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 31, $this->source); })()), "currencyCode", array()));
            echo "</p>
        </div>

    ";
        }
        // line 35
        echo "</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  103 => 31,  99 => 30,  96 => 29,  94 => 28,  88 => 25,  84 => 24,  79 => 21,  73 => 18,  69 => 17,  66 => 16,  64 => 15,  59 => 13,  55 => 12,  49 => 9,  45 => 8,  38 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<p class=\"title-shoping-cart\">{{ 'sylius.ui.summary'|trans }}</p>
{{ sonata_block_render_event('sylius.shop.cart.summary.totals', {'cart': cart}) }}

<div class=\"full-width relative cart-total bg-gray  clearfix\">
    <div class=\"relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l\">
        <p>{{ 'sylius.ui.tax'|trans }}:</p>
        <p class=\"text-black price-shoping-cart\">{{ money.convertAndFormat(cart.taxTotal) }}</p>
    </div>
    <div class=\"relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l\">
        <p>{{ 'sylius.ui.shipping'|trans }}:</p>
        <p class=\"text-black price-shoping-cart\">{{ money.convertAndFormat(cart.shippingTotal) }}</p>
    </div>
    {% if cart.orderPromotionTotal %}
        <div class=\"relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l\">
            <p>{{ 'sylius.ui.discount'|trans }}:</p>
            <p class=\"text-black price-shoping-cart\">{{ money.convertAndFormat(cart.orderPromotionTotal) }}</p>
        </div>
    {% endif %}


    <div class=\"relative justify-content top-margin-15-default\">
        <p class=\"bold\">{{ 'sylius.ui.order_total'|trans }}:</p>
        <p class=\"text-red price-shoping-cart\">{{ money.convertAndFormat(cart.total) }}</p>
    </div>

    {% if cart.currencyCode is not same as(sylius.currencyCode) %}
        <div class=\"relative justify-content top-margin-15-default\">
            <p class=\"bold\">{{ 'sylius.ui.base_currency_order_total'|trans }}:</p>
            <p class=\"text-red price-shoping-cart\">{{ money.format(cart.total, cart.currencyCode) }}</p>
        </div>

    {% endif %}
</div>

", "@SyliusShop/Cart/Summary/_totals.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Cart/Summary/_totals.html.twig");
    }
}
