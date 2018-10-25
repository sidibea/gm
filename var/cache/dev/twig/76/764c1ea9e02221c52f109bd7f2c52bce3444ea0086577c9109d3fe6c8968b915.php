<?php

/* @SyliusShop/Product/_info.html.twig */
class __TwigTemplate_83fb80d155db8755c173b3193072ef0a352e9dc81c2d450afa93dc18b24fc5a8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_info.html.twig"));

        // line 1
        $context["product"] = twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 1, $this->source); })()), "product", array());
        // line 2
        echo "
<div class=\"ui header\">
    ";
        // line 4
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_info.html.twig", 4)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "filter" => "sylius_shop_product_tiny_thumbnail")));
        // line 5
        echo "    <div class=\"content\">
        <div class=\"sylius-product-name\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->source); })()), "productName", array()), "html", null, true);
        echo "</div>
        <span class=\"sub header sylius-product-variant-code\">
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 8, $this->source); })()), "code", array()), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "hasOptions", array(), "method")) {
            // line 13
            echo "    <div class=\"ui horizontal divided list sylius-product-options\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 14, $this->source); })()), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 15
                echo "            <div class=\"item\" data-sylius-option-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "name", array()), "html", null, true);
                echo "\">
                ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
";
        } elseif ( !(null === twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->source); })()), "variantName", array()))) {
            // line 21
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->source); })()), "variantName", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  80 => 21,  78 => 20,  75 => 19,  66 => 16,  61 => 15,  57 => 14,  54 => 13,  52 => 12,  45 => 8,  40 => 6,  37 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = variant.product %}

<div class=\"ui header\">
    {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_shop_product_tiny_thumbnail'} %}
    <div class=\"content\">
        <div class=\"sylius-product-name\">{{ item.productName }}</div>
        <span class=\"sub header sylius-product-variant-code\">
            {{ variant.code }}
        </span>
    </div>
</div>
{% if product.hasOptions() %}
    <div class=\"ui horizontal divided list sylius-product-options\">
        {% for optionValue in variant.optionValues %}
            <div class=\"item\" data-sylius-option-name=\"{{ optionValue.name }}\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% elseif item.variantName is not null %}
    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            {{ item.variantName }}
        </div>
    </div>
{% endif %}
", "@SyliusShop/Product/_info.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/_info.html.twig");
    }
}
