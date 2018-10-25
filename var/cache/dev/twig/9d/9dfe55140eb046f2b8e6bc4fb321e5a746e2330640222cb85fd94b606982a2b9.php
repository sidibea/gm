<?php

/* @SyliusShop/Product/_box2.html.twig */
class __TwigTemplate_e5123dc5d852aebcd2b9f34275d81cf392c9d33c490fe3e8423b08dfbcd061e9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_box2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_box2.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/_box2.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->source); })()))));
        echo "
<div class=\"col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default\">
    <div class=\"image-product relative overfollow-hidden\">
        <div class=\"center-vertical-image\">
            ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_box2.html.twig", 7)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 7, $this->source); })()))));
        // line 8
        echo "        </div>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\"></a>
        <ul class=\"option-product animate-default\">
            <li class=\"relative\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\"><i class=\"data-icon data-icon-ecommerce icon-ecommerce-bag\"></i></a></li>
            <li class=\"relative\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\"><i class=\"data-icondata-icon-basic icon-basic-heart\" aria-hidden=\"true\"></i></a></li>
            <li class=\"relative\"><a href=\"javascript:;\" ><i class=\"data-icon data-icon-basic icon-basic-magnifier\" aria-hidden=\"true\"></i></a></li>
        </ul>
    </div>
    <h3 class=\"title-product clearfix full-width title-hover-black\"><a href=\"#\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 16, $this->source); })()), "name", array()), "html", null, true);
        echo "</a></h3>
    ";
        // line 17
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->source); })()), "variants", array()), "empty", array(), "method")) {
            // line 18
            echo "        <p class=\"clearfix price-product\">";
            echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->source); })()))));
            echo "</p>

    ";
        }
        // line 21
        echo "    <div class=\"clearfix ranking-product-category ranking-color\">
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
    </div>
</div>
";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 29, $this->source); })()))));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_box2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  75 => 21,  68 => 18,  66 => 17,  62 => 16,  55 => 12,  51 => 11,  46 => 9,  43 => 8,  41 => 7,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{{ sonata_block_render_event('sylius.shop.product.index.before_box', {'product': product}) }}
<div class=\"col-md-4 col-sm-4 col-xs-12 product-category relative effect-hover-boxshadow animate-default\">
    <div class=\"image-product relative overfollow-hidden\">
        <div class=\"center-vertical-image\">
            {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}
        </div>
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\"></a>
        <ul class=\"option-product animate-default\">
            <li class=\"relative\"><a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\"><i class=\"data-icon data-icon-ecommerce icon-ecommerce-bag\"></i></a></li>
            <li class=\"relative\"><a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\"><i class=\"data-icondata-icon-basic icon-basic-heart\" aria-hidden=\"true\"></i></a></li>
            <li class=\"relative\"><a href=\"javascript:;\" ><i class=\"data-icon data-icon-basic icon-basic-magnifier\" aria-hidden=\"true\"></i></a></li>
        </ul>
    </div>
    <h3 class=\"title-product clearfix full-width title-hover-black\"><a href=\"#\">{{ product.name }}</a></h3>
    {% if not product.variants.empty() %}
        <p class=\"clearfix price-product\">{{ money.calculatePrice(product|sylius_resolve_variant) }}</p>

    {% endif %}
    <div class=\"clearfix ranking-product-category ranking-color\">
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
    </div>
</div>
{{ sonata_block_render_event('sylius.shop.product.index.after_box', {'product': product}) }}
", "@SyliusShop/Product/_box2.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/_box2.html.twig");
    }
}
