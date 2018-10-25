<?php

/* @SyliusShop/Checkout/_summary.html.twig */
class __TwigTemplate_2f9c098f05199f98589e928f9e37811fb5b42c661332558ab1ba5bb9e1f102af extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_summary.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Checkout/_summary.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\">
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
            <th class=\"sylius-table-column-qty\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.quantity"), "html", null, true);
        echo "</th>
            <th class=\"sylius-table-column-subtotal\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->source); })()), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getVariant", array()), "product", array()), "name", array()), "html", null, true);
            echo "</td>
                <td class=\"center aligned\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()), "html", null, true);
            echo "
                </td>
                <td id=\"sylius-item-";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "variant", array()), "product", array()), "slug", array()), "html", null, true);
            echo "-subtotal\">";
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, $context["item"], "subtotal", array()));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  70 => 19,  65 => 17,  60 => 15,  57 => 14,  53 => 13,  46 => 9,  42 => 8,  38 => 7,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <table class=\"ui very basic table\" id=\"sylius-checkout-subtotal\">
        <thead>
        <tr>
            <th class=\"sylius-table-column-item\">{{ 'sylius.ui.item'|trans }}</th>
            <th class=\"sylius-table-column-qty\">{{ 'sylius.ui.quantity'|trans }}</th>
            <th class=\"sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for item in order.items %}
            <tr>
                <td>{{ item.getVariant.product.name }}</td>
                <td class=\"center aligned\">
                    {{ item.quantity }}
                </td>
                <td id=\"sylius-item-{{ item.variant.product.slug }}-subtotal\">{{ money.convertAndFormat(item.subtotal) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "@SyliusShop/Checkout/_summary.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/_summary.html.twig");
    }
}
