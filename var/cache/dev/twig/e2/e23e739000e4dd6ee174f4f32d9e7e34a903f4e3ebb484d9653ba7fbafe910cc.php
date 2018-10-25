<?php

/* @SyliusShop/Product/_box.html.twig */
class __TwigTemplate_a0a7961db41f7e14002e9045e7ef562cde606825159ef2f5dd157ff0f92a9042 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_box.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_box.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/_box.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->source); })()))));
        echo "

<div class=\"clearfix relative product-no-ranking border-collapsed-element percent-content-2\">
    <div class=\"effect-hover-zoom center-vertical-image\">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/_box.html.twig", 7)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 7, $this->source); })()))));
        // line 8
        echo "
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\"></a>
    </div>
    <div class=\"clearfix absolute name-product-no-ranking\">
        <p class=\"title-product clearfix full-width title-hover-black\"><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "name", array()), "html", null, true);
        echo "</a></p>
        ";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 13, $this->source); })()), "variants", array()), "empty", array(), "method")) {
            // line 14
            echo "            <div class=\"clearfix price-product\"><span>";
            echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->source); })()))));
            echo "</span></div>
        ";
        }
        // line 16
        echo "    </div>
</div>



";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 21, $this->source); })()))));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  64 => 16,  58 => 14,  56 => 13,  52 => 12,  46 => 9,  43 => 8,  41 => 7,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{{ sonata_block_render_event('sylius.shop.product.index.before_box', {'product': product}) }}

<div class=\"clearfix relative product-no-ranking border-collapsed-element percent-content-2\">
    <div class=\"effect-hover-zoom center-vertical-image\">
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}

        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\"></a>
    </div>
    <div class=\"clearfix absolute name-product-no-ranking\">
        <p class=\"title-product clearfix full-width title-hover-black\"><a href=\"#\">{{ product.name }}</a></p>
        {% if not product.variants.empty() %}
            <div class=\"clearfix price-product\"><span>{{ money.calculatePrice(product|sylius_resolve_variant) }}</span></div>
        {% endif %}
    </div>
</div>



{{ sonata_block_render_event('sylius.shop.product.index.after_box', {'product': product}) }}
", "@SyliusShop/Product/_box.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/_box.html.twig");
    }
}
