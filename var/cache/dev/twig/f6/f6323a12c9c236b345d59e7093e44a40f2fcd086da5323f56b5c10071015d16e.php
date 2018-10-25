<?php

/* @SyliusShop/Product/_boxH.html.twig */
class __TwigTemplate_416ec726c5b3d457bc44a98de32ff77af941f40854a8de40b6a326c115b08fbb extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_boxH.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_boxH.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/_boxH.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->source); })()))));
        echo "
<div class=\" product-son \">
    <div class=\"clearfix image-product relative animate-default\">
        <div class=\"center-vertical-image\">
            ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_boxH.html.twig", 7)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 7, $this->source); })()))));
        // line 8
        echo "        </div>
        <ul class=\"option-product animate-default\">
            <li class=\"relative\"><a href=\"#\"><i class=\"data-icon data-icon-ecommerce icon-ecommerce-bag\"></i></a></li>
            <li class=\"relative\"><a href=\"#\"><i class=\"data-icondata-icon-basic icon-basic-heart\" aria-hidden=\"true\"></i></a></li>
            <li class=\"relative\"><a href=\"#\"><i class=\"data-icon data-icon-basic icon-basic-magnifier\" aria-hidden=\"true\"></i></a></li>
        </ul>
    </div>
    <div class=\"clearfix ranking\">
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
    </div>
    <p class=\"title-product clearfix full-width title-hover-black animate-default\"><a class=\"animate-default\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->source); })()), "name", array()), "html", null, true);
        echo "</a></p>
    ";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 23, $this->source); })()), "variants", array()), "empty", array(), "method")) {
            // line 24
            echo "        <div class=\"clearfix price-product\"><span>";
            echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->source); })()))));
            echo "</span></div>
    ";
        }
        // line 26
        echo "</div>



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
        return "@SyliusShop/Product/_boxH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  73 => 26,  67 => 24,  65 => 23,  59 => 22,  43 => 8,  41 => 7,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{{ sonata_block_render_event('sylius.shop.product.index.before_box', {'product': product}) }}
<div class=\" product-son \">
    <div class=\"clearfix image-product relative animate-default\">
        <div class=\"center-vertical-image\">
            {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}
        </div>
        <ul class=\"option-product animate-default\">
            <li class=\"relative\"><a href=\"#\"><i class=\"data-icon data-icon-ecommerce icon-ecommerce-bag\"></i></a></li>
            <li class=\"relative\"><a href=\"#\"><i class=\"data-icondata-icon-basic icon-basic-heart\" aria-hidden=\"true\"></i></a></li>
            <li class=\"relative\"><a href=\"#\"><i class=\"data-icon data-icon-basic icon-basic-magnifier\" aria-hidden=\"true\"></i></a></li>
        </ul>
    </div>
    <div class=\"clearfix ranking\">
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
    </div>
    <p class=\"title-product clearfix full-width title-hover-black animate-default\"><a class=\"animate-default\" href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\">{{ product.name }}</a></p>
    {% if not product.variants.empty() %}
        <div class=\"clearfix price-product\"><span>{{ money.calculatePrice(product|sylius_resolve_variant) }}</span></div>
    {% endif %}
</div>



{{ sonata_block_render_event('sylius.shop.product.index.after_box', {'product': product}) }}
", "@SyliusShop/Product/_boxH.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/_boxH.html.twig");
    }
}
