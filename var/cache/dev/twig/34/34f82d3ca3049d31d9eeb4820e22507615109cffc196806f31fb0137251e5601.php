<?php

/* @SyliusShop/Common/Order/Table/_item.html.twig */
class __TwigTemplate_07f30185438c185ad4d85561a3742df2940d71087b2dab68b8f77d80153f28ff extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Table/_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Common/Order/Table/_item.html.twig", 1);
        // line 2
        echo "
<tr >
    <td>
        ";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/_info.html.twig", "@SyliusShop/Common/Order/Table/_item.html.twig", 5)->display(array_merge($context, array("variant" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->source); })()), "variant", array()))));
        // line 6
        echo "    </td>
    <td style=\"font-size: 1.7em;\">
        <span class=\"sylius-unit-price\">";
        // line 8
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->source); })()), "unitPrice", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->source); })()), "currencyCode", array()));
        echo "</span>
    </td>
    <td style=\"font-size: 1.7em;\" class=\"center aligned\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->source); })()), "quantity", array()), "html", null, true);
        echo "</td>
    <td style=\"font-size: 1.7em;\" class=\"right aligned\">";
        // line 11
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->source); })()), "subtotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->source); })()), "currencyCode", array()));
        echo "</td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/Table/_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  47 => 10,  42 => 8,  38 => 6,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<tr >
    <td>
        {% include '@SyliusShop/Product/_info.html.twig' with {'variant': item.variant} %}
    </td>
    <td style=\"font-size: 1.7em;\">
        <span class=\"sylius-unit-price\">{{ money.format(item.unitPrice, order.currencyCode) }}</span>
    </td>
    <td style=\"font-size: 1.7em;\" class=\"center aligned\">{{ item.quantity }}</td>
    <td style=\"font-size: 1.7em;\" class=\"right aligned\">{{ money.format(item.subtotal, order.currencyCode) }}</td>
</tr>
", "@SyliusShop/Common/Order/Table/_item.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/Order/Table/_item.html.twig");
    }
}
