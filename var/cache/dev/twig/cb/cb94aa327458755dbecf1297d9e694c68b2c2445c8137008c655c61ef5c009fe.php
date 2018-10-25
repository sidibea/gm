<?php

/* @SyliusShop/Cart/Summary/_item.html.twig */
class __TwigTemplate_d8608a02ff9cee2f60323560877a30b13382271b245bdb47e6f037698c90b05d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/Summary/_item.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["product"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->source); })()), "product", array());
        // line 4
        $context["product_variant"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->source); })()), "variant", array());
        // line 5
        echo "
<tr>
    <td class=\"single line\">
        ";
        // line 8
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "@SyliusShop/Cart/Summary/_item.html.twig", 8)->display(array_merge($context, array("variant" => (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new Twig_Error_Runtime('Variable "product_variant" does not exist.', 8, $this->source); })()))));
        // line 9
        echo "    </td>
    <td class=\"right aligned\">
        ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->source); })()), "unitPrice", array()) != twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->source); })()), "discountedUnitPrice", array()))) {
            // line 12
            echo "            <span class=\"sylius-regular-unit-price\">";
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 12, $this->source); })()), "unitPrice", array()));
            echo "</span>
        ";
        }
        // line 14
        echo "        <span class=\"sylius-unit-price\">";
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 14, $this->source); })()), "discountedUnitPrice", array()));
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "quantity", array()), 'widget');
        echo "</span>
    </td>

    <td class=\"right aligned\">
        <span class=\"sylius-total\">";
        // line 21
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->source); })()), "subtotal", array()));
        echo "</span>
    </td>
    <td class=\"center aligned\">
        <button type=\"button\" data-redirect=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_summary");
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_cart_item_remove", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 24, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"\" data-csrf-token=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 24, $this->source); })()), "id", array())), "html", null, true);
        echo "\"><i class=\"fa fa-remove\"></i></button>
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  71 => 21,  64 => 17,  57 => 14,  51 => 12,  49 => 11,  45 => 9,  43 => 8,  38 => 5,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set product = item.product %}
{% set product_variant = item.variant %}

<tr>
    <td class=\"single line\">
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': product_variant} %}
    </td>
    <td class=\"right aligned\">
        {% if item.unitPrice != item.discountedUnitPrice %}
            <span class=\"sylius-regular-unit-price\">{{ money.convertAndFormat(item.unitPrice) }}</span>
        {% endif %}
        <span class=\"sylius-unit-price\">{{ money.convertAndFormat(item.discountedUnitPrice) }}</span>
    </td>
    <td class=\"center aligned\">
        <span class=\"sylius-quantity\">{{ form_widget(form.quantity) }}</span>
    </td>

    <td class=\"right aligned\">
        <span class=\"sylius-total\">{{ money.convertAndFormat(item.subtotal) }}</span>
    </td>
    <td class=\"center aligned\">
        <button type=\"button\" data-redirect=\"{{ path('sylius_shop_cart_summary') }}\" data-url=\"{{ path('sylius_shop_ajax_cart_item_remove', {'id': item.id}) }}\" class=\"\" data-csrf-token=\"{{ csrf_token(item.id) }}\"><i class=\"fa fa-remove\"></i></button>
    </td>
</tr>
", "@SyliusShop/Cart/Summary/_item.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Cart/Summary/_item.html.twig");
    }
}
