<?php

/* @SyliusShop/Product/Show/Tabs/_reviews.html.twig */
class __TwigTemplate_e040daa4b6c62076cf04401c73b3188d90ef914fc79e368ef4df54b95f7421d0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig"));

        // line 1
        echo "<div class=\"content-tabs-product-detail relative content-tab-3 border bottom-padding-default top-padding-default left-padding-default right-padding-default\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_reviews", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->source); })()))));
        echo "

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_product_review_latest", array("productId" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "id", array()), "template" => "@SyliusShop/ProductReview/_list.html.twig")));
        echo "

    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_review_index", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">
        <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
    </a>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_review_create", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\">
        <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</div>
    </a>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  51 => 9,  46 => 7,  42 => 6,  37 => 4,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-tabs-product-detail relative content-tab-3 border bottom-padding-default top-padding-default left-padding-default right-padding-default\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_reviews', {'product': product}) }}

    {{ render(url('sylius_shop_partial_product_review_latest', {'productId': product.id, 'template': '@SyliusShop/ProductReview/_list.html.twig'})) }}

    <a href=\"{{ path('sylius_shop_product_review_index', {'slug': product.slug, '_locale': product.translation.locale}) }}\">
        <div class=\"ui labeled icon button\"><i class=\"icon list\"></i> {{ 'sylius.ui.view_more'|trans }}</div>
    </a>
    <a href=\"{{ path('sylius_shop_product_review_create', {'slug': product.slug, '_locale': product.translation.locale}) }}\">
        <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> {{ 'sylius.ui.add_your_review'|trans }}</div>
    </a>
</div>

", "@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Show/Tabs/_reviews.html.twig");
    }
}
