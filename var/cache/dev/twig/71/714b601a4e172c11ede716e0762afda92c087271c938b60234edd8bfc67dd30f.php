<?php

/* SyliusShopBundle:Common/Order:_summary.html.twig */
class __TwigTemplate_450dec45b379d9035a60d81cf3a6f3f03109915f8fcadae811b18d2a515077d6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_summary.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Common/Order/_addresses.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Common/Order/_table.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/_payments.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/_shipments.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  44 => 9,  40 => 7,  38 => 6,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/Common/Order/_addresses.html.twig' %}
{% include '@SyliusShop/Common/Order/_table.html.twig' %}

<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        {% include '@SyliusShop/Common/Order/_payments.html.twig' %}
    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        {% include '@SyliusShop/Common/Order/_shipments.html.twig' %}
    </div>
</div>
", "SyliusShopBundle:Common/Order:_summary.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/Order/_summary.html.twig");
    }
}
