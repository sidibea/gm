<?php

/* @SyliusUi/Macro/table.html.twig */
class __TwigTemplate_d03acfdbd4a6c946cc14d2594596824ba5d2fb24efa128892b7f213e53e6422c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/table.html.twig"));

        // line 21
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_headers($__grid__ = null, $__definition__ = null, $__requestAttributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "definition" => $__definition__,
            "requestAttributes" => $__requestAttributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "headers"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "headers"));

            // line 2
            echo "    ";
            $context["sorting"] = $this->loadTemplate("@SyliusUi/Macro/sorting.html.twig", "@SyliusUi/Macro/table.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "bulk", array(), "any", true, true)) {
                // line 5
                echo "        <th></th>
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 8, $this->source); })()), "fields", array()), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 9
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "enabled", array())) {
                    // line 10
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", array())) {
                        // line 11
                        echo "                ";
                        echo $context["sorting"]->macro_tableHeader((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 11, $this->source); })()), $context["field"], (isset($context["requestAttributes"]) || array_key_exists("requestAttributes", $context) ? $context["requestAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "requestAttributes" does not exist.', 11, $this->source); })()));
                        echo "
            ";
                    } else {
                        // line 13
                        echo "                <th class=\"sylius-table-column-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", array())), "html", null, true);
                        echo "</th>
            ";
                    }
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "item", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 17, $this->source); })()), "getEnabledActions", array(0 => "item"), "method")) > 0))) {
                // line 18
                echo "        <th class=\"sylius-table-column-actions\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.actions"), "html", null, true);
                echo "</th>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_row($__grid__ = null, $__definition__ = null, $__row__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "definition" => $__definition__,
            "row" => $__row__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "row"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "row"));

            // line 23
            echo "    <tr class=\"item\">
    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "bulk", array(), "any", true, true)) {
                // line 25
                echo "        <td><input class=\"bulk-select-checkbox\" type=\"checkbox\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 25, $this->source); })()), "id", array()), "html", null, true);
                echo "\" /></td>
    ";
            }
            // line 27
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 27, $this->source); })()), "enabledFields", array()), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 28
                echo "        <td>";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_field')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 28, $this->source); })()), $context["field"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 28, $this->source); })())));
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "item", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 30, $this->source); })()), "getEnabledActions", array(0 => "item"), "method")) > 0))) {
                // line 31
                echo "        <td>
            <div class=\"ui buttons\">
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 33, $this->source); })()), "getEnabledActions", array(0 => "item"), "method"), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 34
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 34, $this->source); })()), $context["action"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 34, $this->source); })())));
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "            </div>
            ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "subitem", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 37, $this->source); })()), "getEnabledActions", array(0 => "subitem"), "method")) > 0))) {
                    // line 38
                    echo "            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 40, $this->source); })()), "getEnabledActions", array(0 => "subitem"), "method"), "position"));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 41
                        echo "                    ";
                        echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 41, $this->source); })()), $context["action"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 41, $this->source); })())));
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            </div>
            ";
                }
                // line 45
                echo "        </td>
    ";
            }
            // line 47
            echo "    </tr>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 47,  221 => 45,  217 => 43,  208 => 41,  204 => 40,  200 => 38,  198 => 37,  195 => 36,  186 => 34,  182 => 33,  178 => 31,  175 => 30,  166 => 28,  161 => 27,  155 => 25,  153 => 24,  150 => 23,  130 => 22,  111 => 18,  108 => 17,  102 => 16,  99 => 15,  91 => 13,  85 => 11,  82 => 10,  79 => 9,  75 => 8,  72 => 7,  68 => 5,  66 => 4,  63 => 3,  60 => 2,  40 => 1,  29 => 21,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro headers(grid, definition, requestAttributes) %}
    {% import '@SyliusUi/Macro/sorting.html.twig' as sorting %}

    {% if definition.actionGroups.bulk is defined %}
        <th></th>
    {% endif %}

    {% for field in definition.fields|sort_by('position') %}
        {% if field.enabled %}
            {% if field.isSortable %}
                {{ sorting.tableHeader(grid, field, requestAttributes) }}
            {% else %}
                <th class=\"sylius-table-column-{{ field.name }}\">{{ field.label|trans }}</th>
            {% endif %}
        {% endif %}
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getEnabledActions('item')|length > 0 %}
        <th class=\"sylius-table-column-actions\">{{ 'sylius.ui.actions'|trans }}</th>
    {% endif %}
{% endmacro %}

{% macro row(grid, definition, row) %}
    <tr class=\"item\">
    {% if definition.actionGroups.bulk is defined %}
        <td><input class=\"bulk-select-checkbox\" type=\"checkbox\" value=\"{{ row.id }}\" /></td>
    {% endif %}
    {% for field in definition.enabledFields|sort_by('position') %}
        <td>{{ sylius_grid_render_field(grid, field, row) }}</td>
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getEnabledActions('item')|length > 0 %}
        <td>
            <div class=\"ui buttons\">
                {% for action in definition.getEnabledActions('item')|sort_by('position') %}
                    {{ sylius_grid_render_action(grid, action, row) }}
                {% endfor %}
            </div>
            {% if definition.actionGroups.subitem is defined and definition.getEnabledActions('subitem')|length > 0 %}
            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                {% for action in definition.getEnabledActions('subitem')|sort_by('position') %}
                    {{ sylius_grid_render_action(grid, action, row) }}
                {% endfor %}
            </div>
            {% endif %}
        </td>
    {% endif %}
    </tr>
{% endmacro %}
", "@SyliusUi/Macro/table.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/table.html.twig");
    }
}
