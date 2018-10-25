<?php

/* @SyliusAdmin/Dashboard/_menu.html.twig */
class __TwigTemplate_d2f53da4fc7a39f031128b5a6a864cadabb7955b10a7080bb87c6a7761c4e4ae extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_menu.html.twig"));

        // line 1
        echo "<div class=\"ui fluid labeled four icon item menu\">
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index");
        echo "\" class=\"item\">
        <i class=\"cubes icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.products"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index");
        echo "\" class=\"item\">
        <i class=\"shop icon\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.orders"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_index");
        echo "\" class=\"item\">
        <i class=\"users icon\"></i>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customers"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_promotion_index");
        echo "\" class=\"item\">
        <i class=\"ticket icon\"></i>
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotions"), "html", null, true);
        echo "
    </a>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  62 => 14,  57 => 12,  52 => 10,  47 => 8,  42 => 6,  37 => 4,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid labeled four icon item menu\">
    <a href=\"{{ path('sylius_admin_product_index') }}\" class=\"item\">
        <i class=\"cubes icon\"></i>
        {{ 'sylius.ui.products'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_order_index') }}\" class=\"item\">
        <i class=\"shop icon\"></i>
        {{ 'sylius.ui.orders'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_customer_index') }}\" class=\"item\">
        <i class=\"users icon\"></i>
        {{ 'sylius.ui.customers'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_promotion_index') }}\" class=\"item\">
        <i class=\"ticket icon\"></i>
        {{ 'sylius.ui.promotions'|trans }}
    </a>
</div>

", "@SyliusAdmin/Dashboard/_menu.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_menu.html.twig");
    }
}
