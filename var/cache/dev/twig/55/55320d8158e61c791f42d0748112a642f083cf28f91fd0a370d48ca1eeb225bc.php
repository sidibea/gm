<?php

/* @SyliusShop/Common/Order/_table.html.twig */
class __TwigTemplate_4d2bc107e166ac114c379ced9011d795d3ca04ea7b1c8ab3651758bdb92c7df8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_table.html.twig"));

        // line 1
        echo "<table class=\"ui celled table\" id=\"sylius-order\">
    <thead>
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_headers.html.twig", "@SyliusShop/Common/Order/_table.html.twig", 3)->display($context);
        // line 4
        echo "    </thead>
    <tbody>
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_items.html.twig", "@SyliusShop/Common/Order/_table.html.twig", 6)->display($context);
        // line 7
        echo "    </tbody>
    <tfoot>
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_totals.html.twig", "@SyliusShop/Common/Order/_table.html.twig", 9)->display($context);
        // line 10
        echo "    </tfoot>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"ui celled table\" id=\"sylius-order\">
    <thead>
        {% include '@SyliusShop/Common/Order/Table/_headers.html.twig' %}
    </thead>
    <tbody>
        {% include '@SyliusShop/Common/Order/Table/_items.html.twig' %}
    </tbody>
    <tfoot>
        {% include '@SyliusShop/Common/Order/Table/_totals.html.twig' %}
    </tfoot>
</table>
", "@SyliusShop/Common/Order/_table.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/Order/_table.html.twig");
    }
}
