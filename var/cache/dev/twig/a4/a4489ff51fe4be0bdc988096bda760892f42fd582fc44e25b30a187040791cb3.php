<?php

/* @SyliusShop/Checkout/_support.html.twig */
class __TwigTemplate_412a7096e7d97563c354d659483e9d97292d860ffd04e2faf9c8f0b58f792e2e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_support.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_support.html.twig"));

        // line 1
        echo "<h2 class=\"ui center aligned icon header\">
    <i class=\"circular phone icon\"></i>
    +48 123 456 789
    <span class=\"sub header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.need_assistance"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.call_us"), "html", null, true);
        echo "
    </span>
</h2>

<div class=\"ui divider\"></div>

<div class=\"ui center aligned basic segment\">
    <i class=\"huge cc mastercard icon\"></i>
    <i class=\"huge cc visa icon\"></i>
    <i class=\"huge cc paypal card icon\"></i>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/_support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2 class=\"ui center aligned icon header\">
    <i class=\"circular phone icon\"></i>
    +48 123 456 789
    <span class=\"sub header\">
        {{ 'sylius.ui.need_assistance'|trans }} {{ 'sylius.ui.call_us'|trans }}
    </span>
</h2>

<div class=\"ui divider\"></div>

<div class=\"ui center aligned basic segment\">
    <i class=\"huge cc mastercard icon\"></i>
    <i class=\"huge cc visa icon\"></i>
    <i class=\"huge cc paypal card icon\"></i>
</div>
", "@SyliusShop/Checkout/_support.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/_support.html.twig");
    }
}
