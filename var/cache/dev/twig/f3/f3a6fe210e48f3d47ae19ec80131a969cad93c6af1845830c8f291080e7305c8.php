<?php

/* @SyliusShop/Product/Show/Tabs/_menu.html.twig */
class __TwigTemplate_d7c8d8d8809cf9c1690979d10e5f12e1d09728a5dee44eb7e17f5a350255b630 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_menu.html.twig"));

        // line 1
        echo "
<ul class=\"title-tabs clearfix relative\">
    <li onclick=\"changeTabsProductDetail(1)\" class=\"title-tabs-product-detail title-tabs-1 border no-border-b active-title-tabs bold uppercase\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</li>
    ";
        // line 4
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "attributes", array())) > 0)) {
            // line 5
            echo "        <li onclick=\"changeTabsProductDetail(2)\" class=\"title-tabs-product-detail title-tabs-2 border no-border-b bold uppercase\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.attributes"), "html", null, true);
            echo "</li>

    ";
        }
        // line 8
        echo "    <li onclick=\"changeTabsProductDetail(3)\" class=\"title-tabs-product-detail title-tabs-3 border no-border-b bold uppercase\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reviews"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 8, $this->source); })()), "acceptedReviews", array())), "html", null, true);
        echo ")</li>
</ul>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  39 => 5,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<ul class=\"title-tabs clearfix relative\">
    <li onclick=\"changeTabsProductDetail(1)\" class=\"title-tabs-product-detail title-tabs-1 border no-border-b active-title-tabs bold uppercase\">{{ 'sylius.ui.details'|trans }}</li>
    {% if product.attributes|length > 0 %}
        <li onclick=\"changeTabsProductDetail(2)\" class=\"title-tabs-product-detail title-tabs-2 border no-border-b bold uppercase\">{{ 'sylius.ui.attributes'|trans }}</li>

    {% endif %}
    <li onclick=\"changeTabsProductDetail(3)\" class=\"title-tabs-product-detail title-tabs-3 border no-border-b bold uppercase\">{{ 'sylius.ui.reviews'|trans }} ({{ product.acceptedReviews|length }})</li>
</ul>

", "@SyliusShop/Product/Show/Tabs/_menu.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Show/Tabs/_menu.html.twig");
    }
}
