<?php

/* @SyliusShop/Product/_mainImage.html.twig */
class __TwigTemplate_2cf0fcd262a5c272fa719feecf39e874a1e82091edf486083b4d4502db2c18b4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_mainImage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_mainImage.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->source); })()), "imagesByType", array(0 => "thumbnail"), "method"))) {
            // line 2
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->source); })()), "imagesByType", array(0 => "thumbnail"), "method"), "first", array()), "path", array()), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 2, $this->source); })()), "sylius_shop_product_thumbnail")) : ("sylius_shop_product_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->source); })()), "images", array()), "first", array())) {
            // line 4
            echo "    ";
            $context["path"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "images", array()), "first", array()), "path", array()), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 4, $this->source); })()), "sylius_shop_product_thumbnail")) : ("sylius_shop_product_thumbnail")));
        } else {
            // line 6
            echo "    ";
            $context["path"] = "//placehold.it/200x200";
        }
        // line 8
        echo "
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->source); })()), "name", array()), "html", null, true);
        echo "\" class=\"ui bordered image\" />
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_mainImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  44 => 8,  40 => 6,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.imagesByType('thumbnail') is not empty %}
    {% set path = product.imagesByType('thumbnail').first.path|imagine_filter(filter|default('sylius_shop_product_thumbnail')) %}
{% elseif product.images.first %}
    {% set path = product.images.first.path|imagine_filter(filter|default('sylius_shop_product_thumbnail')) %}
{% else %}
    {% set path = '//placehold.it/200x200' %}
{% endif %}

<img src=\"{{ path }}\" alt=\"{{ product.name }}\" class=\"ui bordered image\" />
", "@SyliusShop/Product/_mainImage.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/_mainImage.html.twig");
    }
}
