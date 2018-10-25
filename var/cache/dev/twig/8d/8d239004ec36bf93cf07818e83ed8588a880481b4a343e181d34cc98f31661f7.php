<?php

/* @SyliusAdmin/Taxon/_treeWithButtons.html.twig */
class __TwigTemplate_aa0a4faf253e206e811024b1e863288cbf109ead22120150d3f574d1f40b1ff3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", 1);
        // line 2
        $context["tree"] = $this;
        // line 3
        echo "
";
        // line 36
        echo "
<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui large fluid labeled icon primary button\">
    <i class=\"plus icon\"></i>
    ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
        echo "
</a>

<div class=\"ui segment\">
    <div class=\"ui list sylius-sortable-list\">
        ";
        // line 44
        echo $context["tree"]->macro_render((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 44, $this->source); })()));
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function macro_render($__taxons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            // line 5
            echo "    ";
            $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", 5);
            // line 6
            echo "    ";
            $context["tree"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()) != null)) {
                    // line 9
                    echo "        <div class=\"item\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()), "html", null, true);
                    echo "\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_per_taxon_index", array("taxonId" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "name", array()), "html", null, true);
                    echo "
                    </a>
                    <br>
                    <div class=\"ui mini buttons\" style=\"margin-top: 5px;\">
                        ";
                    // line 18
                    echo $context["buttons"]->macro_create($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create_for_parent", array("id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()))), "sylius.ui.add");
                    echo "
                        ";
                    // line 19
                    echo $context["buttons"]->macro_edit($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_update", array("id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()))), null, null, false);
                    echo "
                        ";
                    // line 20
                    echo $context["buttons"]->macro_delete($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()))), null, false, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()));
                    echo "
                        <a class=\"ui icon button sylius-taxon-move-up\" data-url=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_move", array("id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()))), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()), "html", null, true);
                    echo "\" data-position=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "position", array()), "html", null, true);
                    echo "\">
                            <i class=\"icon arrow up\"></i>
                        </a>
                        <a class=\"ui icon button sylius-taxon-move-down\" data-url=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_move", array("id" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()))), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()), "html", null, true);
                    echo "\" data-position=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "position", array()), "html", null, true);
                    echo "\">
                            <i class=\"icon arrow down\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"list\">
                    ";
                    // line 30
                    echo $context["tree"]->macro_render(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", array()));
                    echo "
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/_treeWithButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 30,  139 => 24,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  110 => 14,  106 => 13,  98 => 9,  93 => 8,  90 => 7,  87 => 6,  84 => 5,  66 => 4,  52 => 44,  44 => 39,  39 => 37,  36 => 36,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import _self as tree %}

{% macro render(taxons) %}
    {% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
    {% import _self as tree %}

    {% for taxon in taxons if taxon.id != null %}
        <div class=\"item\" data-id=\"{{ taxon.id }}\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\">
                        {{ taxon.name }}
                    </a>
                    <br>
                    <div class=\"ui mini buttons\" style=\"margin-top: 5px;\">
                        {{ buttons.create(path('sylius_admin_taxon_create_for_parent', { 'id': taxon.id }), 'sylius.ui.add') }}
                        {{ buttons.edit(path('sylius_admin_taxon_update', { 'id': taxon.id }), null, null, false) }}
                        {{ buttons.delete(path('sylius_admin_taxon_delete', { 'id': taxon.id }), null, false, taxon.id) }}
                        <a class=\"ui icon button sylius-taxon-move-up\" data-url=\"{{ path('sylius_admin_ajax_taxon_move', { id: taxon.id }) }}\" data-id=\"{{ taxon.id }}\" data-position=\"{{ taxon.position }}\">
                            <i class=\"icon arrow up\"></i>
                        </a>
                        <a class=\"ui icon button sylius-taxon-move-down\" data-url=\"{{ path('sylius_admin_ajax_taxon_move', { id: taxon.id }) }}\" data-id=\"{{ taxon.id }}\" data-position=\"{{ taxon.position }}\">
                            <i class=\"icon arrow down\"></i>
                        </a>
                    </div>
                </div>
                <div class=\"list\">
                    {{ tree.render(taxon.children) }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

<a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui large fluid labeled icon primary button\">
    <i class=\"plus icon\"></i>
    {{ 'sylius.ui.create'|trans }}
</a>

<div class=\"ui segment\">
    <div class=\"ui list sylius-sortable-list\">
        {{ tree.render(taxons) }}
    </div>
</div>
", "@SyliusAdmin/Taxon/_treeWithButtons.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithButtons.html.twig");
    }
}
