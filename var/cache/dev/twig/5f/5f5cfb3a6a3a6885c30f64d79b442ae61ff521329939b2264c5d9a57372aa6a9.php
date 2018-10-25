<?php

/* @SyliusShop/Product/Show/_addToCart.html.twig */
class __TwigTemplate_38b9d7bb1bfadbdfbf1708e73d99e1b034ec3812d4e6f13c33e91a0c70fe50c8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_addToCart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_addToCart.html.twig"));

        // line 1
        $context["product"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new Twig_Error_Runtime('Variable "order_item" does not exist.', 1, $this->source); })()), "variant", array()), "product", array());
        // line 2
        echo "
";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"), true);
        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_add_to_cart", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "order_item" => (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new Twig_Error_Runtime('Variable "order_item" does not exist.', 4, $this->source); })()))));
        echo "

";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_cart_add_item", array("productId" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->source); })()), "id", array()))), "attr" => array("id" => "sylius-product-adding-to-cart", "class" => "ui loadable form", "novalidate" => "novalidate", "data-redirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 6, $this->source); })()), "getRedirectRoute", array(0 => "summary"), "method")))));
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "
<div class=\"relative option-product-1 bottom-margin-15-default\">

    ";
        // line 10
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->source); })()), "simple", array())) {
            // line 11
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->source); })()), "variantSelectionMethodChoice", array())) {
                // line 12
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_variants.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 12)->display($context);
                // line 13
                echo "        ";
            } else {
                // line 14
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_options.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 14)->display($context);
                // line 15
                echo "        ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "
</div>
<div class=\"relative option-product-2 clearfix\">
    <div class=\"option-product-son float-left right-margin-default\">
        <p class=\"float-left\">Qty:</p>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "cartItem", array()), "quantity", array()), 'widget', array("attr" => array("class" => "left-margin-15-default ", "placeholder" => "")));
        echo "

    </div>

    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.add_to_cart_form", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 26, $this->source); })()), "order_item" => (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new Twig_Error_Runtime('Variable "order_item" does not exist.', 26, $this->source); })()))));
        echo "

</div>
<div class=\"relative button-product-list clearfix full-width clear-margin\">
    <ul class=\"clear-margin top-margin-default clearfix bottom-margin-default\">
        <li class=\"button-hover-red\"><button type=\"submit\" >";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_to_cart"), "html", null, true);
        echo "</button></li>

        <li><a href=\"#\" class=\"animate-default\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i></a></li>
        <li><a href=\"#\" class=\"animate-default\"><i class=\"fa fa-signal\" aria-hidden=\"true\"></i></a></li>
        <li><a href=\"#\" class=\"animate-default\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>

    </ul>
    <div class=\"btn-print clearfix\">
        <a href=\"javascript:;\" class=\"right-margin-default animate-default title-hover-black\" onclick=\"printWebsite()\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i> Print</a>
        <a href=\"mailto:\" class=\" animate-default title-hover-black\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Send to a Friend</a>
    </div>
</div>
";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "_token", array()), 'row');
        echo "
    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_addToCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  109 => 43,  94 => 31,  86 => 26,  79 => 22,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  52 => 10,  46 => 7,  42 => 6,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = order_item.variant.product %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}
    {{ sonata_block_render_event('sylius.shop.product.show.before_add_to_cart', {'product': product, 'order_item': order_item}) }}

{{ form_start(form, {'action': path('sylius_shop_ajax_cart_add_item', {'productId': product.id}), 'attr': {'id': 'sylius-product-adding-to-cart', 'class': 'ui loadable form', 'novalidate': 'novalidate', 'data-redirect': path(configuration.getRedirectRoute('summary'))}}) }}
    {{ form_errors(form) }}
<div class=\"relative option-product-1 bottom-margin-15-default\">

    {% if not product.simple %}
        {% if product.variantSelectionMethodChoice %}
            {% include '@SyliusShop/Product/Show/_variants.html.twig' %}
        {% else %}
            {% include '@SyliusShop/Product/Show/_options.html.twig' %}
        {% endif %}
    {% endif %}

</div>
<div class=\"relative option-product-2 clearfix\">
    <div class=\"option-product-son float-left right-margin-default\">
        <p class=\"float-left\">Qty:</p>
        {{ form_widget(form.cartItem.quantity, {'attr': {'class': 'left-margin-15-default ', 'placeholder': '' }}) }}

    </div>

    {{ sonata_block_render_event('sylius.shop.product.show.add_to_cart_form', {'product': product, 'order_item': order_item}) }}

</div>
<div class=\"relative button-product-list clearfix full-width clear-margin\">
    <ul class=\"clear-margin top-margin-default clearfix bottom-margin-default\">
        <li class=\"button-hover-red\"><button type=\"submit\" >{{ 'sylius.ui.add_to_cart'|trans }}</button></li>

        <li><a href=\"#\" class=\"animate-default\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i></a></li>
        <li><a href=\"#\" class=\"animate-default\"><i class=\"fa fa-signal\" aria-hidden=\"true\"></i></a></li>
        <li><a href=\"#\" class=\"animate-default\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>

    </ul>
    <div class=\"btn-print clearfix\">
        <a href=\"javascript:;\" class=\"right-margin-default animate-default title-hover-black\" onclick=\"printWebsite()\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i> Print</a>
        <a href=\"mailto:\" class=\" animate-default title-hover-black\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Send to a Friend</a>
    </div>
</div>
{{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}






", "@SyliusShop/Product/Show/_addToCart.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Show/_addToCart.html.twig");
    }
}
