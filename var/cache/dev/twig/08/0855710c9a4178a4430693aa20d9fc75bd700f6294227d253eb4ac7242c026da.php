<?php

/* @SyliusAdmin/Taxon/_slugField.html.twig */
class __TwigTemplate_89b62eb743f95ef4c59bb9514d31066b44ae69f4c0bf9835ba8345b71061fc71 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_slugField.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_slugField.html.twig"));

        // line 1
        echo "<div class=\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 1, $this->source); })()), "vars", array()), "required", array())) {
            echo "required ";
        }
        echo "field";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 1, $this->source); })()), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo " ui loadable form\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 2, $this->source); })()), 'label');
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 3, $this->source); })()), "slug", array()) == null)) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 4, $this->source); })()), 'widget', array("attr" => array("data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_generate_taxon_slug"), "data-parent" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "id"), "method"))));
            echo "
    ";
        } else {
            // line 6
            echo "    <div class=\"ui action input\">
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 7, $this->source); })()), 'widget', array("attr" => array("readonly" => "readonly", "data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_generate_taxon_slug"))));
            echo "
        <span class=\"ui icon button toggle-taxon-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 13, $this->source); })()), 'errors');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/_slugField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  55 => 7,  52 => 6,  46 => 4,  44 => 3,  40 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{% if slugField.vars.required %}required {% endif %}field{% if slugField.vars.errors|length > 0 %} error{% endif %} ui loadable form\">
    {{ form_label(slugField) }}
    {% if resource.slug == null %}
        {{ form_widget(slugField, {'attr': {'data-url': path('sylius_admin_ajax_generate_taxon_slug'), 'data-parent': app.request.attributes.get('id')}}) }}
    {% else %}
    <div class=\"ui action input\">
        {{ form_widget(slugField, {'attr': {'readonly': 'readonly', 'data-url': path('sylius_admin_ajax_generate_taxon_slug')}}) }}
        <span class=\"ui icon button toggle-taxon-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    {% endif %}
    {{ form_errors(slugField) }}
</div>
", "@SyliusAdmin/Taxon/_slugField.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_slugField.html.twig");
    }
}
