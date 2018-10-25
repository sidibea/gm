<?php

/* @SyliusShop/Product/Show/Tabs/_details.html.twig */
class __TwigTemplate_e6017d488dd785f5efd179ae0f0e0e55a80f081c0614e58240ced615fc615d2a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_details.html.twig"));

        // line 1
        echo "<div class=\"content-tabs-product-detail relative content-tab-1 border active-tabs-product-detail bottom-padding-default top-padding-default left-padding-default right-padding-default\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_details", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->source); })()))));
        echo "

    ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "description", array()))) {
            // line 5
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->source); })()), "description", array()), "html", null, true));
            echo "
    ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_description"), "html", null, true);
            echo ".
    ";
        }
        // line 9
        echo "</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 7,  39 => 5,  37 => 4,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-tabs-product-detail relative content-tab-1 border active-tabs-product-detail bottom-padding-default top-padding-default left-padding-default right-padding-default\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_details', {'product': product}) }}

    {% if product.description is not empty %}
    {{ product.description | nl2br }}
    {% else %}
    {{ 'sylius.ui.no_description'|trans }}.
    {% endif %}
</div>


", "@SyliusShop/Product/Show/Tabs/_details.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Show/Tabs/_details.html.twig");
    }
}
