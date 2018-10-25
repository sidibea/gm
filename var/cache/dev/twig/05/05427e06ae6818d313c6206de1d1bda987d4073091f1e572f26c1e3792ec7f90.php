<?php

/* @SyliusShop/Product/Show/_associations.html.twig */
class __TwigTemplate_7b87f0a4566d889557b9e1d134d8b075516cbd2b930890fb7949e6cf8a23c988 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_associations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_associations.html.twig"));

        // line 1
        echo "<div class=\"col-md-12 col-sm-12 col-xs-12 relative bottom slide-related-product\">
    <p class=\"bold title-slide-product-bottom\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.latest_products"), "html", null, true);
        echo "</p>
    <div class=\"button-slide-related\" id=\"btn-slide-1\"></div>
    <div class=\"owl-theme owl-carousel\" data-items=\"1,2,3\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_product_index_latest", array("count" => 4, "template" => "@SyliusShop/Product/_related.html.twig")));
        echo "

    </div>
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-12 col-sm-12 col-xs-12 relative bottom slide-related-product\">
    <p class=\"bold title-slide-product-bottom\">{{ 'sylius.ui.latest_products'|trans }}</p>
    <div class=\"button-slide-related\" id=\"btn-slide-1\"></div>
    <div class=\"owl-theme owl-carousel\" data-items=\"1,2,3\">
        {{ render(url('sylius_shop_partial_product_index_latest', {'count': 4, 'template': '@SyliusShop/Product/_related.html.twig'})) }}

    </div>
</div>


", "@SyliusShop/Product/Show/_associations.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Show/_associations.html.twig");
    }
}
