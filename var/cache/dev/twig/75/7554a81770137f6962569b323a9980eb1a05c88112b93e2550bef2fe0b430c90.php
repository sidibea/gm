<?php

/* @SyliusShop/Register/_header.html.twig */
class __TwigTemplate_edba546380e7263f1cdbe992493ae29faf3e8f7ccf6ac5ec688203364ae1a7dd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Register/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Register/_header.html.twig"));

        // line 1
        echo "<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular user icon\"></i>
            <div class=\"content\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.register_in_the_store"), "html", null, true);
        echo "
                <div class=\"sub header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create_a_new_customer_account"), "html", null, true);
        echo "</div>
            </div>
        </h1>
    </div>
    <div style=\"font-size: 1em\" class=\"middle aligned column\">
        <a style=\"font-size: 1.7em\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login");
        echo "\" class=\"ui right floated basic button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.have_an_account_already"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sign_in_here"), "html", null, true);
        echo ".</a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Register/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  42 => 9,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular user icon\"></i>
            <div class=\"content\">
                {{ 'sylius.ui.register_in_the_store'|trans }}
                <div class=\"sub header\">{{ 'sylius.ui.create_a_new_customer_account'|trans }}</div>
            </div>
        </h1>
    </div>
    <div style=\"font-size: 1em\" class=\"middle aligned column\">
        <a style=\"font-size: 1.7em\" href=\"{{ path('sylius_shop_login') }}\" class=\"ui right floated basic button\">{{ 'sylius.ui.have_an_account_already'|trans }} {{ 'sylius.ui.sign_in_here'|trans }}.</a>
    </div>
</div>
", "@SyliusShop/Register/_header.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Register/_header.html.twig");
    }
}
