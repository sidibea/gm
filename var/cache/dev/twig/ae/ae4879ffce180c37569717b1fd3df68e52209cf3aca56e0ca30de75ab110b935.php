<?php

/* @SyliusAdmin/Dashboard/_statistics.html.twig */
class __TwigTemplate_54db47a3fe3c08bde803862b1aab7c8126d7225858986c1885ef09cf9738f7ee extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_statistics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_statistics.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Dashboard/_statistics.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <div class=\"ui center aligned four column stackable divided grid\">
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"total-sales\" class=\"value\">
                    ";
        // line 8
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 8, $this->source); })()), "totalSales", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 8, $this->source); })()), "baseCurrency", array()), "code", array()));
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sales"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-orders\" class=\"value\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 18, $this->source); })()), "numberOfNewOrders", array()), "html", null, true);
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.fulfilled_orders"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-customers\" class=\"value\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 28, $this->source); })()), "numberOfNewCustomers", array()), "html", null, true);
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customers"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"average-order-value\" class=\"value\">
                    ";
        // line 38
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 38, $this->source); })()), "averageOrderValue", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 38, $this->source); })()), "baseCurrency", array()), "code", array()));
        echo "
                </div>
                <div class=\"label\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 41,  87 => 38,  77 => 31,  71 => 28,  61 => 21,  55 => 18,  45 => 11,  39 => 8,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <div class=\"ui center aligned four column stackable divided grid\">
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"total-sales\" class=\"value\">
                    {{ money.format(statistics.totalSales, channel.baseCurrency.code) }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.sales'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-orders\" class=\"value\">
                    {{ statistics.numberOfNewOrders }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.fulfilled_orders'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"new-customers\" class=\"value\">
                    {{ statistics.numberOfNewCustomers }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.customers'|trans }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui statistic\">
                <div id=\"average-order-value\" class=\"value\">
                    {{ money.format(statistics.averageOrderValue, channel.baseCurrency.code) }}
                </div>
                <div class=\"label\">
                    {{ 'sylius.ui.average_order_value'|trans }}
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/Dashboard/_statistics.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_statistics.html.twig");
    }
}
