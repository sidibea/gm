<?php

/* @SyliusAdmin/Taxon/_treeWithoutButtons.html.twig */
class __TwigTemplate_5797d30166334dfa0ec12f657b2b5e65f536aed245af8bb5a4a9c122344342d8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig"));

        // line 1
        $context["tree"] = $this;
        // line 2
        echo "
";
        // line 22
        echo "
<div class=\"ui large fluid vertical buttons\">
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index");
        echo "\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.browse_all_products"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_taxons"), "html", null, true);
        echo "
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        ";
        // line 36
        echo $context["tree"]->macro_render((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 36, $this->source); })()));
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

            // line 4
            echo "    ";
            $context["tree"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 7
                echo "        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_per_taxon_index", array("taxonId" => twig_get_attribute($this->env, $this->source, $context["taxon"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxon"], "name", array()), "html", null, true);
                echo "
                    </a>
                </div>
                <div class=\"list\">
                    ";
                // line 16
                echo $context["tree"]->macro_render(twig_get_attribute($this->env, $this->source, $context["taxon"], "children", array()));
                echo "
                </div>
            </div>
        </div>
    ";
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
        return "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 16,  114 => 12,  110 => 11,  104 => 7,  100 => 6,  97 => 5,  94 => 4,  76 => 3,  62 => 36,  53 => 30,  48 => 28,  43 => 26,  38 => 24,  34 => 22,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as tree %}

{% macro render(taxons) %}
    {% import _self as tree %}

    {% for taxon in taxons %}
        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\">
                        {{ taxon.name }}
                    </a>
                </div>
                <div class=\"list\">
                    {{ tree.render(taxon.children) }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

<div class=\"ui large fluid vertical buttons\">
    <a href=\"{{ path('sylius_admin_product_index') }}\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        {{ 'sylius.ui.browse_all_products'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        {{ 'sylius.ui.manage_taxons'|trans }}
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        {{ tree.render(taxons) }}
    </div>
</div>
", "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_treeWithoutButtons.html.twig");
    }
}
