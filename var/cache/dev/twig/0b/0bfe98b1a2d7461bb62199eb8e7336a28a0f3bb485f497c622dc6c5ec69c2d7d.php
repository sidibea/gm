<?php

/* @SyliusShop/Common/Order/Table/_totals.html.twig */
class __TwigTemplate_8ef3224c3ec53389609d85f478a5244a5fdda88107cc58252112fe3bf1e5df85 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_totals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Common/Order/Table/_totals.html.twig", 1);
        // line 2
        echo "
<tr  style=\"font-size: 1.7em;\">
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        echo ": ";
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->source); })()), "itemsTotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->source); })()), "currencyCode", array()));
        echo "
    </th>
</tr>
<tr  style=\"font-size: 1.7em;\">
    ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_shipping.html.twig", "@SyliusShop/Common/Order/Table/_totals.html.twig", 9)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->source); })()))));
        // line 10
        echo "</tr>
<tr  style=\"font-size: 1.7em;\">
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax_total"), "html", null, true);
        echo ": ";
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->source); })()), "taxTotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr  style=\"font-size: 1.7em;\">
    ";
        // line 17
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_promotion.html.twig", "@SyliusShop/Common/Order/Table/_totals.html.twig", 17)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->source); })()))));
        // line 18
        echo "</tr>
<tr  style=\"font-size: 1.7em;\">
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        echo ": ";
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 21, $this->source); })()), "total", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 21, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
";
        // line 24
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 24, $this->source); })()), "currencyCode", array()) === twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 24, $this->source); })()), "currencyCode", array()))) {
            // line 25
            echo "<tr  style=\"font-size: 1.7em;\">
    <td colspan=\"4\" class=\"right aligned\" id=\"base-total\">
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total_in_base_currency"), "html", null, true);
            echo ": ";
            echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->source); })()), "total", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->source); })()), "currencyCode", array()));
            echo "
    </td>
</tr>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/Table/_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  78 => 25,  76 => 24,  68 => 21,  63 => 18,  61 => 17,  52 => 13,  47 => 10,  45 => 9,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<tr  style=\"font-size: 1.7em;\">
    <th colspan=\"4\" class=\"right aligned\" id=\"subtotal\">
        {{ 'sylius.ui.subtotal'|trans }}: {{ money.format(order.itemsTotal, order.currencyCode) }}
    </th>
</tr>
<tr  style=\"font-size: 1.7em;\">
    {% include '@SyliusShop/Common/Order/Table/_shipping.html.twig' with {'order': order} %}
</tr>
<tr  style=\"font-size: 1.7em;\">
    <td colspan=\"4\" class=\"right aligned\" id=\"tax-total\">
        {{ 'sylius.ui.tax_total'|trans }}: {{ money.format(order.taxTotal, order.currencyCode) }}
    </td>
</tr>
<tr  style=\"font-size: 1.7em;\">
    {% include '@SyliusShop/Common/Order/Table/_promotion.html.twig' with {'order': order} %}
</tr>
<tr  style=\"font-size: 1.7em;\">
    <td colspan=\"4\" class=\"right aligned\" style=\"font-size: 1.5em;\" id=\"total\">
        {{ 'sylius.ui.total'|trans }}: {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
{% if order.currencyCode is not same as(sylius.currencyCode) %}
<tr  style=\"font-size: 1.7em;\">
    <td colspan=\"4\" class=\"right aligned\" id=\"base-total\">
        {{ 'sylius.ui.total_in_base_currency'|trans }}: {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
{% endif %}
", "@SyliusShop/Common/Order/Table/_totals.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/Order/Table/_totals.html.twig");
    }
}
