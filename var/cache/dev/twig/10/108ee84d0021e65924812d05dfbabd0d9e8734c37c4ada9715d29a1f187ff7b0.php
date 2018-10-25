<?php

/* @SyliusUi/Grid/_default.html.twig */
class __TwigTemplate_7f40ec75f4b10384aaa88c0744ff72bf6bfca0faa52eabfe8968b917d954517e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/_default.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/_default.html.twig"));

        // line 1
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "@SyliusUi/Grid/_default.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusUi/Grid/_default.html.twig", 2);
        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusUi/Grid/_default.html.twig", 3);
        // line 4
        $context["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "@SyliusUi/Grid/_default.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        $context["definition"] = twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 6, $this->source); })()), "definition", array());
        // line 7
        $context["data"] = twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 7, $this->source); })()), "data", array());
        // line 8
        echo "
";
        // line 9
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 10
        echo "
";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 11, $this->source); })()), "enabledFilters", array())) > 0)) {
            // line 12
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.filters"), "html", null, true);
            echo "
        </div>
        <div class=\"content active\">
            <form method=\"get\" action=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" class=\"ui loadable form\">
                <div class=\"two fields\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 21, $this->source); })()), "enabledFilters", array()), "position"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if (twig_get_attribute($this->env, $this->source, $context["filter"], "enabled", array())) {
                    // line 22
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 22, $this->source); })()), $context["filter"]));
                    echo "

                    ";
                    // line 24
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % 2)) {
                        // line 25
                        echo "                        </div>
                        <div class=\"two fields\">
                    ";
                    }
                    // line 28
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </div>
                ";
            // line 30
            echo $context["buttons"]->macro_filter();
            echo "
                ";
            // line 31
            echo $context["buttons"]->macro_resetFilters((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 31, $this->source); })()));
            echo "
            </form>
        </div>
    </div>
";
        }
        // line 36
        echo "
";
        // line 37
        if (((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->source); })())) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "bulk", array(), "any", true, true))) {
            // line 38
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.bulk_actions"), "html", null, true);
            echo "
        </div>
        <div class=\"content active\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 45, $this->source); })()), "getEnabledActions", array(0 => "bulk"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 46
                echo "                ";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_bulk_action')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 46, $this->source); })()), $context["action"], null));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </div>
    </div>
";
        }
        // line 51
        echo "
<div class=\"ui segment overflow-x-auto\">
    ";
        // line 53
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 53, $this->source); })()), "limits", array())) > 1) && (twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 53, $this->source); })())) > min(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 53, $this->source); })()), "limits", array()))))) {
            // line 54
            echo "    <div class=\"ui two column fluid stackable grid\">
        <div class=\"fourteen wide column\">
            ";
            // line 56
            echo $context["pagination"]->macro_simple((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 56, $this->source); })()));
            echo "
        </div>
        <div class=\"two wide column\">
            <div class=\"ui fluid one item menu sylius-paginate\">
                ";
            // line 60
            echo $context["pagination"]->macro_perPage((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 60, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 60, $this->source); })()), "limits", array()));
            echo "
            </div>
        </div>
    </div>
    ";
        } else {
            // line 65
            echo "        ";
            echo $context["pagination"]->macro_simple((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 65, $this->source); })()));
            echo "
    ";
        }
        // line 67
        echo "
    ";
        // line 68
        if ((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 68, $this->source); })())) > 0)) {
            // line 69
            echo "        <table class=\"ui sortable stackable celled table\">
            <thead>
            <tr>
                ";
            // line 72
            echo $context["table"]->macro_headers((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 72, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 72, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 72, $this->source); })()), "request", array()), "attributes", array()));
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 77
                echo "                ";
                echo $context["table"]->macro_row((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 77, $this->source); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 77, $this->source); })()), $context["row"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 82
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 84
        echo "    ";
        echo $context["pagination"]->macro_simple((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 84, $this->source); })()));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 84,  221 => 82,  216 => 79,  207 => 77,  203 => 76,  196 => 72,  191 => 69,  189 => 68,  186 => 67,  180 => 65,  172 => 60,  165 => 56,  161 => 54,  159 => 53,  155 => 51,  150 => 48,  141 => 46,  137 => 45,  131 => 42,  125 => 38,  123 => 37,  120 => 36,  112 => 31,  108 => 30,  105 => 29,  95 => 28,  90 => 25,  88 => 24,  82 => 22,  71 => 21,  66 => 19,  60 => 16,  54 => 12,  52 => 11,  49 => 10,  47 => 9,  44 => 8,  42 => 7,  40 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}
{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/table.html.twig' as table %}

{% set definition = grid.definition %}
{% set data = grid.data %}

{% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}

{% if definition.enabledFilters|length > 0 %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            {{ 'sylius.ui.filters'|trans }}
        </div>
        <div class=\"content active\">
            <form method=\"get\" action=\"{{ path }}\" class=\"ui loadable form\">
                <div class=\"two fields\">
                {% for filter in definition.enabledFilters|sort_by('position') if filter.enabled %}
                    {{ sylius_grid_render_filter(grid, filter) }}

                    {% if loop.index0 % 2 %}
                        </div>
                        <div class=\"two fields\">
                    {% endif %}
                {% endfor %}
                </div>
                {{ buttons.filter() }}
                {{ buttons.resetFilters(path) }}
            </form>
        </div>
    </div>
{% endif %}

{% if data|length > 0 and definition.actionGroups.bulk is defined %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            {{ 'sylius.ui.bulk_actions'|trans }}
        </div>
        <div class=\"content active\">
            {% for action in definition.getEnabledActions('bulk') %}
                {{ sylius_grid_render_bulk_action(grid, action, null) }}
            {% endfor %}
        </div>
    </div>
{% endif %}

<div class=\"ui segment overflow-x-auto\">
    {% if definition.limits|length > 1 and data|length > min(definition.limits) %}
    <div class=\"ui two column fluid stackable grid\">
        <div class=\"fourteen wide column\">
            {{ pagination.simple(data) }}
        </div>
        <div class=\"two wide column\">
            <div class=\"ui fluid one item menu sylius-paginate\">
                {{ pagination.perPage(data, definition.limits) }}
            </div>
        </div>
    </div>
    {% else %}
        {{ pagination.simple(data) }}
    {% endif %}

    {% if data|length > 0 %}
        <table class=\"ui sortable stackable celled table\">
            <thead>
            <tr>
                {{ table.headers(grid, definition, app.request.attributes) }}
            </tr>
            </thead>
            <tbody>
            {% for row in data %}
                {{ table.row(grid, definition, row) }}
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
    {{ pagination.simple(data) }}
</div>
", "@SyliusUi/Grid/_default.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/_default.html.twig");
    }
}
