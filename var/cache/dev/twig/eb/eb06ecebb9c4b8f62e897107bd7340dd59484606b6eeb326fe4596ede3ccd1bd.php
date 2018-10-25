<?php

/* @SyliusShop/Product/_starRating.html.twig */
class __TwigTemplate_f7f48671976c07e830b728cb113a9eec15fb853dfd647291200d9caaab7cf68f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_starRating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_starRating.html.twig"));

        // line 1
        echo "<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->source); })()), "averageRating", array())), "html", null, true);
        echo "\" data-max-rating=\"5\" data-average-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->source); })()), "averageRating", array()), 2), "html", null, true);
        echo "\" style=\"pointer-events: none;\"></div>
<div class=\" ranking-color \">
    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
    <i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_starRating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"{{ product.averageRating|round }}\" data-max-rating=\"5\" data-average-rating=\"{{ product.averageRating|round(2) }}\" style=\"pointer-events: none;\"></div>
<div class=\" ranking-color \">
    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
    <i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
</div>
", "@SyliusShop/Product/_starRating.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/_starRating.html.twig");
    }
}
