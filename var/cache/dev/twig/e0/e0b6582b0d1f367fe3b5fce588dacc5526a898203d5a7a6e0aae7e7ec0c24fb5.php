<?php

/* @SyliusAdmin/Dashboard/_customers.html.twig */
class __TwigTemplate_a8153cc70334244ef06e286d621715b7cdaded27f6361d2ebf387aa02d2c62ee extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_customers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_customers.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 2);
        // line 3
        $context["labels"] = $this->loadTemplate("SyliusUiBundle:Macro:labels.html.twig", "@SyliusAdmin/Dashboard/_customers.html.twig", 3);
        // line 4
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.new_customers"), "html", null, true);
        echo "</h3>

    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new Twig_Error_Runtime('Variable "customers" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            echo "        <table class=\"ui stackable table\" id=\"customers\">
            <thead>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.name"), "html", null, true);
            echo "</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new Twig_Error_Runtime('Variable "customers" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 17
                echo "                <tr>
                    <td>
                        <strong>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "fullName", array()), "html", null, true);
                echo "</strong><br>
                        ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 23
                if ((null === twig_get_attribute($this->env, $this->source, $context["customer"], "user", array()))) {
                    // line 24
                    echo "                            <span class=\"ui icon label\">
                                <i class=\"spy icon\"></i> ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest"), "html", null, true);
                    echo "
                            </span>
                        ";
                }
                // line 28
                echo "                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 31
                echo $context["buttons"]->macro_show($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_show", array("id" => twig_get_attribute($this->env, $this->source, $context["customer"], "id", array()))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
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
        return "@SyliusAdmin/Dashboard/_customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  108 => 39,  103 => 36,  92 => 31,  87 => 28,  81 => 25,  78 => 24,  76 => 23,  70 => 20,  66 => 19,  62 => 17,  58 => 16,  50 => 11,  46 => 9,  44 => 8,  39 => 6,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:messages.html.twig' as messages %}
{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}
{% import 'SyliusUiBundle:Macro:labels.html.twig' as labels %}

<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.new_customers'|trans }}</h3>

    {% if customers|length > 0 %}
        <table class=\"ui stackable table\" id=\"customers\">
            <thead>
                <th>{{ 'sylius.ui.name'|trans }}</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            {% for customer in customers %}
                <tr>
                    <td>
                        <strong>{{ customer.fullName }}</strong><br>
                        {{ customer.email }}
                    </td>
                    <td>
                        {% if customer.user is null %}
                            <span class=\"ui icon label\">
                                <i class=\"spy icon\"></i> {{ 'sylius.ui.guest'|trans }}
                            </span>
                        {% endif %}
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            {{ buttons.show(path('sylius_admin_customer_show', {'id': customer.id})) }}
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
", "@SyliusAdmin/Dashboard/_customers.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_customers.html.twig");
    }
}
