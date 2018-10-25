<?php

/* @SyliusShop/Product/Show/_images.html.twig */
class __TwigTemplate_13bcef66e0f55784aeaf409e4d5b2b5963c4d53fca9d7713b1857cd2114b0662 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_images.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_images.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->source); })()), "imagesByType", array(0 => "main"), "method"))) {
            // line 2
            echo "    ";
            $context["source_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->source); })()), "imagesByType", array(0 => "main"), "method"), "first", array()), "path", array());
            // line 3
            echo "    ";
            $context["original_path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new Twig_Error_Runtime('Variable "source_path" does not exist.', 3, $this->source); })()), "sylius_shop_product_original");
            // line 4
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new Twig_Error_Runtime('Variable "source_path" does not exist.', 4, $this->source); })()), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 4, $this->source); })()), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->source); })()), "images", array()), "first", array())) {
            // line 6
            echo "    ";
            $context["source_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->source); })()), "images", array()), "first", array()), "path", array());
            // line 7
            echo "    ";
            $context["original_path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new Twig_Error_Runtime('Variable "source_path" does not exist.', 7, $this->source); })()), "sylius_shop_product_original");
            // line 8
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new Twig_Error_Runtime('Variable "source_path" does not exist.', 8, $this->source); })()), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 8, $this->source); })()), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } else {
            // line 10
            echo "    ";
            $context["original_path"] = "//placehold.it/400x300";
            // line 11
            echo "    ";
            $context["path"] = (isset($context["original_path"]) || array_key_exists("original_path", $context) ? $context["original_path"] : (function () { throw new Twig_Error_Runtime('Variable "original_path" does not exist.', 11, $this->source); })());
        }
        // line 13
        echo "<!-- Slide Product Detail -->
<div class=\"col-md-7 relative col-sm-12 col-xs-12\">
    <div id=\"owl-big-slide\" class=\"relative sync-owl-big-image\">
        <div class=\"item center-vertical-image\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/slide_quickview_4-min.png"), "html", null, true);
        echo "\" alt=\"Image Big Slide\">
        </div>
        <div class=\"item center-vertical-image\">
            <img src=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/\"img/slide_quickview_1-min.png"), "html", null, true);
        echo "\" alt=\"Image Big Slide\">
        </div>
        <div class=\"item center-vertical-image\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/slide_quickview_2-min.png"), "html", null, true);
        echo "\" alt=\"Image Big Slide\">
        </div>
        <div class=\"item center-vertical-image\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/slide_quickview_3-min.png"), "html", null, true);
        echo "\" alt=\"Image Big Slide\">
        </div>
    </div>
    <div class=\"relative thumbnail-slide-detail\">
        <div id=\"owl-thumbnail-slide\" class=\"sync-owl-thumbnail-image\" data-items=\"3,4,3,2\">
            <div class=\"item center-vertical-image\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/slide_quickview_4-min.png"), "html", null, true);
        echo "\" alt=\"Image Thumbnail Slide\">
            </div>
            <div class=\"item center-vertical-image\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/slide_quickview_1-min.png"), "html", null, true);
        echo "\" alt=\"Image Thumbnail Slide\">
            </div>
            <div class=\"item center-vertical-image\">
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/slide_quickview_2-min.png"), "html", null, true);
        echo "\" alt=\"Image Thumbnail Slide\">
            </div>
            <div class=\"item center-vertical-image\">
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/slide_quickview_3-min.png"), "html", null, true);
        echo "\" alt=\"Image Thumbnail Slide\">
            </div>
        </div>
        <div class=\"relative nav-prev-detail btn-slide-detail\"></div>
        <div class=\"relative nav-next-detail btn-slide-detail\"></div>
    </div>
</div>
<!-- Info Top Product -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  104 => 38,  98 => 35,  92 => 32,  83 => 26,  77 => 23,  71 => 20,  65 => 17,  59 => 13,  55 => 11,  52 => 10,  48 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.imagesByType('main') is not empty %}
    {% set source_path = product.imagesByType('main').first.path %}
    {% set original_path = source_path|imagine_filter('sylius_shop_product_original') %}
    {% set path = source_path|imagine_filter(filter|default('sylius_shop_product_large_thumbnail')) %}
{% elseif product.images.first %}
    {% set source_path = product.images.first.path %}
    {% set original_path = source_path|imagine_filter('sylius_shop_product_original') %}
    {% set path = source_path|imagine_filter(filter|default('sylius_shop_product_large_thumbnail')) %}
{% else %}
    {% set original_path = '//placehold.it/400x300' %}
    {% set path = original_path %}
{% endif %}
<!-- Slide Product Detail -->
<div class=\"col-md-7 relative col-sm-12 col-xs-12\">
    <div id=\"owl-big-slide\" class=\"relative sync-owl-big-image\">
        <div class=\"item center-vertical-image\">
            <img src=\"{{ asset('bundles/syliusshop/img/slide_quickview_4-min.png') }}\" alt=\"Image Big Slide\">
        </div>
        <div class=\"item center-vertical-image\">
            <img src={{ asset('bundles/syliusshop/\"img/slide_quickview_1-min.png') }}\" alt=\"Image Big Slide\">
        </div>
        <div class=\"item center-vertical-image\">
            <img src=\"{{ asset('bundles/syliusshop/img/slide_quickview_2-min.png') }}\" alt=\"Image Big Slide\">
        </div>
        <div class=\"item center-vertical-image\">
            <img src=\"{{ asset('bundles/syliusshop/img/slide_quickview_3-min.png') }}\" alt=\"Image Big Slide\">
        </div>
    </div>
    <div class=\"relative thumbnail-slide-detail\">
        <div id=\"owl-thumbnail-slide\" class=\"sync-owl-thumbnail-image\" data-items=\"3,4,3,2\">
            <div class=\"item center-vertical-image\">
                <img src=\"{{ asset('bundles/syliusshop/img/slide_quickview_4-min.png') }}\" alt=\"Image Thumbnail Slide\">
            </div>
            <div class=\"item center-vertical-image\">
                <img src=\"{{ asset('bundles/syliusshop/img/slide_quickview_1-min.png') }}\" alt=\"Image Thumbnail Slide\">
            </div>
            <div class=\"item center-vertical-image\">
                <img src=\"{{ asset('bundles/syliusshop/img/slide_quickview_2-min.png') }}\" alt=\"Image Thumbnail Slide\">
            </div>
            <div class=\"item center-vertical-image\">
                <img src=\"{{ asset('bundles/syliusshop/img/slide_quickview_3-min.png') }}\" alt=\"Image Thumbnail Slide\">
            </div>
        </div>
        <div class=\"relative nav-prev-detail btn-slide-detail\"></div>
        <div class=\"relative nav-next-detail btn-slide-detail\"></div>
    </div>
</div>
<!-- Info Top Product -->", "@SyliusShop/Product/Show/_images.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Show/_images.html.twig");
    }
}
