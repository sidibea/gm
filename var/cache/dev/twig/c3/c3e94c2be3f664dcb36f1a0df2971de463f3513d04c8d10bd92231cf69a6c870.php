<?php

/* @SyliusAdmin/Dashboard/_orders.html.twig */
class __TwigTemplate_ad9e55cb098808308f96f9d905a4398c42eb2a95e0f948859aa62a58ed90e0fe extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_orders.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_orders.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 2);
        // line 3
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Dashboard/_orders.html.twig", 3);
        // line 4
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_orders"), "html", null, true);
        echo "</h3>

    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            echo "        <table class=\"ui stackable table\" id=\"orders\">
            <thead>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order"), "html", null, true);
            echo "</th>
                <th>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.items"), "html", null, true);
            echo "</th>
                <th>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
            echo "</th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new Twig_Error_Runtime('Variable "orders" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 18
                echo "                <tr>
                    <td>
                        <strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "customer", array()), "fullName", array()), "html", null, true);
                echo "</strong><br>
                        ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "customer", array()), "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalQuantity", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 27
                echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, $context["order"], "total", array()), twig_get_attribute($this->env, $this->source, $context["order"], "currencyCode", array()));
                echo "
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 31
                echo $context["buttons"]->macro_show($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_show", array("id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", array()))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 39
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 41
        echo "</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  112 => 39,  107 => 36,  96 => 31,  89 => 27,  83 => 24,  77 => 21,  73 => 20,  69 => 18,  65 => 17,  58 => 13,  54 => 12,  50 => 11,  46 => 9,  44 => 8,  39 => 6,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:messages.html.twig' as messages %}
{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}
{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.new_orders'|trans }}</h3>

    {% if orders|length > 0 %}
        <table class=\"ui stackable table\" id=\"orders\">
            <thead>
                <th>{{ 'sylius.ui.order'|trans }}</th>
                <th>{{ 'sylius.ui.items'|trans }}</th>
                <th>{{ 'sylius.ui.total'|trans }}</th>
                <th></th>
            </thead>
            <tbody>
            {% for order in orders %}
                <tr>
                    <td>
                        <strong>{{ order.customer.fullName }}</strong><br>
                        {{ order.customer.email }}
                    </td>
                    <td>
                        {{ order.totalQuantity }}
                    </td>
                    <td>
                        {{ money.format(order.total, order.currencyCode) }}
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            {{ buttons.show(path('sylius_admin_order_show', {'id': order.id})) }}
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
</div>

", "@SyliusAdmin/Dashboard/_orders.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_orders.html.twig");
    }
}
