<?php

/* @SyliusShop/Product/Index/_search.html.twig */
class __TwigTemplate_e5ffcb7c1424b6eb87a70b89f048144c67099f60c4bf6f46af9a2200dee5a22d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_search.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <form method=\"get\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\" class=\"ui loadable form\">
        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 5, $this->source); })()), "definition", array()), "enabledFilters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 6
            echo "                    ";
            echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), array((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 6, $this->source); })()), $context["filter"]));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </div>
            <div class=\"three wide column\">
                <div class=\"ui buttons\">
                    <button type=\"submit\" class=\"ui primary icon labeled button\"><i class=\"search icon\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.search"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\" class=\"ui negative icon labeled button\">
                        <i class=\"cancel icon\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.clear"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  56 => 11,  51 => 8,  42 => 6,  38 => 5,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <form method=\"get\" action=\"{{ path('sylius_shop_product_index', {'slug': app.request.attributes.get('slug')}) }}\" class=\"ui loadable form\">
        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                {% for filter in products.definition.enabledFilters %}
                    {{ sylius_grid_render_filter(products, filter) }}
                {% endfor %}
            </div>
            <div class=\"three wide column\">
                <div class=\"ui buttons\">
                    <button type=\"submit\" class=\"ui primary icon labeled button\"><i class=\"search icon\"></i> {{ 'sylius.ui.search'|trans }}</button>
                    <a href=\"{{ path('sylius_shop_product_index', {'slug': app.request.attributes.get('slug')}) }}\" class=\"ui negative icon labeled button\">
                        <i class=\"cancel icon\"></i> {{ 'sylius.ui.clear'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
", "@SyliusShop/Product/Index/_search.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Index/_search.html.twig");
    }
}
