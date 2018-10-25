<?php

/* @SyliusShop/Product/_boxR.html.twig */
class __TwigTemplate_6f12da57cd944a868069709f7052f7a8a3c138862044515c3e3d172df82390b4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_boxR.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_boxR.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/_boxR.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->source); })()))));
        echo "
<div class=\"items\">
    <div class=\"full-width product-category relative\">
        <div class=\"image-product  relative overfollow-hidden\">
            <div class=\"center-vertical-image\">
                ";
        // line 8
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_boxR.html.twig", 8)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 8, $this->source); })()))));
        // line 9
        echo "            </div>
            <a href=\"#\"></a>
            <ul class=\"option-product animate-default\">
                <li class=\"relative\"><a href=\"#\"><i class=\"data-icon data-icon-ecommerce icon-ecommerce-bag\"></i></a></li>
                <li class=\"relative\"><a href=\"#\"><i class=\"data-icondata-icon-basic icon-basic-heart\" aria-hidden=\"true\"></i></a></li>
                <li class=\"relative\"><a href=\"javascript:;\" ><i class=\"data-icon data-icon-basic icon-basic-magnifier\" aria-hidden=\"true\"></i></a></li>
            </ul>
        </div>
        <h3 class=\"title-product animate-default title-hover-black clearfix full-width\"><a href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->source); })()), "name", array()), "html", null, true);
        echo "</a></h3>
        ";
        // line 18
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->source); })()), "variants", array()), "empty", array(), "method")) {
            // line 19
            echo "        <div class=\"clearfix price-product\"><span>";
            echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->source); })()))));
            echo "</span></div>
        ";
        }
        // line 21
        echo "        <div class=\"clearfix ranking-product-category ranking-color\">
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
        </div>
    </div>
</div>
";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 30, $this->source); })()))));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_boxR.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  66 => 21,  60 => 19,  58 => 18,  54 => 17,  44 => 9,  42 => 8,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{{ sonata_block_render_event('sylius.shop.product.index.before_box', {'product': product}) }}
<div class=\"items\">
    <div class=\"full-width product-category relative\">
        <div class=\"image-product  relative overfollow-hidden\">
            <div class=\"center-vertical-image\">
                {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}
            </div>
            <a href=\"#\"></a>
            <ul class=\"option-product animate-default\">
                <li class=\"relative\"><a href=\"#\"><i class=\"data-icon data-icon-ecommerce icon-ecommerce-bag\"></i></a></li>
                <li class=\"relative\"><a href=\"#\"><i class=\"data-icondata-icon-basic icon-basic-heart\" aria-hidden=\"true\"></i></a></li>
                <li class=\"relative\"><a href=\"javascript:;\" ><i class=\"data-icon data-icon-basic icon-basic-magnifier\" aria-hidden=\"true\"></i></a></li>
            </ul>
        </div>
        <h3 class=\"title-product animate-default title-hover-black clearfix full-width\"><a href=\"#\">{{ product.name }}</a></h3>
        {% if not product.variants.empty() %}
        <div class=\"clearfix price-product\"><span>{{ money.calculatePrice(product|sylius_resolve_variant) }}</span></div>
        {% endif %}
        <div class=\"clearfix ranking-product-category ranking-color\">
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
        </div>
    </div>
</div>
{{ sonata_block_render_event('sylius.shop.product.index.after_box', {'product': product}) }}
", "@SyliusShop/Product/_boxR.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/_boxR.html.twig");
    }
}
