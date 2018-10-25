<?php

/* @SyliusShop/Taxon/_breadcrumb.html.twig */
class __TwigTemplate_68dbd3e18b3e02e30a1d61bf10ce2e5e43cb0aef4ca1d67033d448fd2f7ecfbf extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_breadcrumb.html.twig"));

        // line 1
        $context["ancestors"] = twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 1, $this->source); })()), "ancestors", array()));
        // line 2
        echo "<div class=\"container-web relative\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"breadcrumb-web\">
                <ul class=\"clear-margin\">
                    <li class=\"animate-default title-hover-red\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a></li>
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ancestors"]) || array_key_exists("ancestors", $context) ? $context["ancestors"] : (function () { throw new Twig_Error_Runtime('Variable "ancestors" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
            // line 9
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["ancestor"], "isRoot", array(), "method")) {
                // line 10
                echo "                       <li class=\"animate-default title-hover-red\"><a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ancestor"], "name", array()), "html", null, true);
                echo "</a> </li>
                    ";
            } else {
                // line 12
                echo "                        <li class=\"animate-default title-hover-red\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, $context["ancestor"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ancestor"], "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ancestor"], "name", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 14
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ancestor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                    <li class=\"animate-default title-hover-red\"><a href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 15, $this->source); })()), "name", array()), "html", null, true);
        echo "</a></li>

                </ul>
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
        return "@SyliusShop/Taxon/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  65 => 14,  57 => 12,  51 => 10,  48 => 9,  44 => 8,  38 => 7,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set ancestors = taxon.ancestors|reverse %}
<div class=\"container-web relative\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"breadcrumb-web\">
                <ul class=\"clear-margin\">
                    <li class=\"animate-default title-hover-red\"><a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a></li>
                    {% for ancestor in ancestors %}
                    {% if ancestor.isRoot() %}
                       <li class=\"animate-default title-hover-red\"><a href=\"#\">{{ ancestor.name }}</a> </li>
                    {% else %}
                        <li class=\"animate-default title-hover-red\"><a href=\"{{ path('sylius_shop_product_index', {'slug': ancestor.slug, '_locale': ancestor.translation.locale}) }}\" class=\"section\">{{ ancestor.name }}</a></li>
                    {% endif %}
                    {% endfor %}
                    <li class=\"animate-default title-hover-red\"><a href=\"#\">{{ taxon.name }}</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>
", "@SyliusShop/Taxon/_breadcrumb.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Taxon/_breadcrumb.html.twig");
    }
}
