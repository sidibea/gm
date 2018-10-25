<?php

/* @SyliusShop/Product/Index/_pagination.html.twig */
class __TwigTemplate_e3f20298468542cabc37e31f7057d2516547894312e723ac087ac35a84eca487 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_pagination.html.twig"));

        // line 1
        $context["paginationLimits"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 1, $this->source); })()), "definition", array()), "limits", array());
        // line 2
        echo "
<div class=\"ui right floated small header\" style=\"font-size: 1.2em !important;\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 6, $this->source); })()), "data", array()), "maxPerPage", array()), "html", null, true);
        echo "
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\" style=\"font-size: 1.9em !important;\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationLimits"]) || array_key_exists("paginationLimits", $context) ? $context["paginationLimits"] : (function () { throw new Twig_Error_Runtime('Variable "paginationLimits" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            if (($context["limit"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 9, $this->source); })()), "data", array()), "maxPerPage", array()))) {
                // line 10
                echo "                ";
                $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", array()), "query", array()), "all", array())), array("limit" => $context["limit"])));
                // line 11
                echo "                <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 11, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                echo "</a>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  53 => 11,  50 => 10,  45 => 9,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set paginationLimits = (resources.definition.limits) %}

<div class=\"ui right floated small header\" style=\"font-size: 1.2em !important;\">
    <div class=\"content\">
        <div class=\"ui inline dropdown sylius-paginate\">
            {{ 'sylius.ui.show'|trans }} {{ resources.data.maxPerPage }}
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\" style=\"font-size: 1.9em !important;\">
            {% for limit in paginationLimits if limit != resources.data.maxPerPage %}
                {% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query.all)|merge({'limit': limit})) %}
                <a class=\"item\" href=\"{{ path }}\">{{ limit }}</a>
            {% endfor %}
            </div>
        </div>
    </div>
</div>
", "@SyliusShop/Product/Index/_pagination.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Index/_pagination.html.twig");
    }
}
