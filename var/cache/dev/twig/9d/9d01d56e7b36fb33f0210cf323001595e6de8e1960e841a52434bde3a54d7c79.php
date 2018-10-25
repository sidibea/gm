<?php

/* @SyliusShop/Product/Show/_breadcrumb.html.twig */
class __TwigTemplate_cae677b0f9794ec45c3333e2e67df96f923710044a669f1bb7669aa20dd7d13f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_breadcrumb.html.twig"));

        // line 1
        echo "<!-- Breadcrumb -->
<div class=\"container-web relative\">
    <div class=\"container\">
        <div class=\"row\">
            <li class=\"breadcrumb-web\">
                <ul class=\"clear-margin\">
                    <li class=\"animate-default title-hover-red\"> <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
                    ";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 8, $this->source); })()), "mainTaxon", array()))) {
            // line 9
            echo "                    ";
            $context["taxon"] = twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->source); })()), "mainTaxon", array());
            // line 10
            echo "                    ";
            $context["ancestors"] = twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 10, $this->source); })()), "ancestors", array()));
            // line 11
            echo "
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ancestors"]) || array_key_exists("ancestors", $context) ? $context["ancestors"] : (function () { throw new Twig_Error_Runtime('Variable "ancestors" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
                // line 13
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["ancestor"], "isRoot", array(), "method")) {
                    // line 14
                    echo "                    <li class=\"animate-default title-hover-red\"> <a class=\"active\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ancestor"], "name", array()), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 16
                    echo "                            <li class=\"animate-default title-hover-red\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, $context["ancestor"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ancestor"], "translation", array()), "locale", array()))), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ancestor"], "name", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 18
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ancestor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    <li class=\"animate-default title-hover-red\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 19, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 19, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"section\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 19, $this->source); })()), "name", array()), "html", null, true);
            echo "</a></li>

                    ";
        }
        // line 22
        echo "                    <li class=\"animate-default title-hover-red\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->source); })()), "name", array()), "html", null, true);
        echo "</li>

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
        return "@SyliusShop/Product/Show/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  81 => 19,  75 => 18,  67 => 16,  61 => 14,  58 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  43 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Breadcrumb -->
<div class=\"container-web relative\">
    <div class=\"container\">
        <div class=\"row\">
            <li class=\"breadcrumb-web\">
                <ul class=\"clear-margin\">
                    <li class=\"animate-default title-hover-red\"> <a href=\"{{ path('sylius_shop_homepage') }}\">{{ 'sylius.ui.home'|trans }}</a>
                    {% if product.mainTaxon is not null %}
                    {% set taxon = product.mainTaxon %}
                    {% set ancestors = taxon.ancestors|reverse %}

                    {% for ancestor in ancestors %}
                        {% if ancestor.isRoot() %}
                    <li class=\"animate-default title-hover-red\"> <a class=\"active\">{{ ancestor.name }}</a>
                        {% else %}
                            <li class=\"animate-default title-hover-red\"><a href=\"{{ path('sylius_shop_product_index', {'slug': ancestor.slug, '_locale': ancestor.translation.locale}) }}\" class=\"section\">{{ ancestor.name }}</a></li>
                        {% endif %}
                    {% endfor %}
                    <li class=\"animate-default title-hover-red\"><a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"section\">{{ taxon.name }}</a></li>

                    {% endif %}
                    <li class=\"animate-default title-hover-red\">{{ product.name }}</li>

                </ul>
            </div>
        </div>
    </div>
</div>


", "@SyliusShop/Product/Show/_breadcrumb.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Show/_breadcrumb.html.twig");
    }
}
