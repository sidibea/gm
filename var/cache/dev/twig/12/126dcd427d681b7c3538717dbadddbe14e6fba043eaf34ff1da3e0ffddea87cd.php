<?php

/* @SyliusShop/Cart/Summary/_update.html.twig */
class __TwigTemplate_53463f3445353d7e681a6df8d8feb4db1228098b07c9f8eaad8f1095ba905348 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_update.html.twig"));

        // line 1
        echo "<button type=\"submit\" class=\"ui icon labeled large button\" id=\"sylius-cart-update\"><i class=\"save icon\"></i> </button>
<aside class=\"btn-shoping-cart justify-content top-margin-default bottom-margin-default\">
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"clear-margin animate-default\">Continue Shopping</a>
    <button type=\"submit\" class=\"clear-margin animate-default\">Update Cart</button>
</aside>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<button type=\"submit\" class=\"ui icon labeled large button\" id=\"sylius-cart-update\"><i class=\"save icon\"></i> </button>
<aside class=\"btn-shoping-cart justify-content top-margin-default bottom-margin-default\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"clear-margin animate-default\">Continue Shopping</a>
    <button type=\"submit\" class=\"clear-margin animate-default\">Update Cart</button>
</aside>", "@SyliusShop/Cart/Summary/_update.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Cart/Summary/_update.html.twig");
    }
}
