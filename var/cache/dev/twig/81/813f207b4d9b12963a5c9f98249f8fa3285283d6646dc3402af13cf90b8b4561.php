<?php

/* SyliusAdminBundle:Product:index.html.twig */
class __TwigTemplate_bc32a0a96aa545f072ee89ec2d4c7b9767468660ada8629d01a901a8d9ed465c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Product:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:index.html.twig"));

        // line 3
        $context["definition"] = twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 3, $this->source); })()), "definition", array());
        // line 4
        $context["data"] = twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->source); })()), "data", array());
        // line 6
        $context["header"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->source); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->source); })()), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->source); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 6, $this->source); })()), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 8, $this->source); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 11, $this->source); })()))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Product/Index/_header.html.twig", "SyliusAdminBundle:Product:index.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:Product:index.html.twig", 15)->display($context);
        // line 16
        echo "    </div>

    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 18, $this->source); })()))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"three wide column\">
            ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_taxon_tree", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 22, $this->source); })()))));
        echo "

            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig")));
        echo "

            ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_taxon_tree", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 26, $this->source); })()))));
        echo "
        </div>
        <div class=\"thirteen wide column sylius-product-index\">
            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.before_filters", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 29, $this->source); })()))));
        echo "

            ";
        // line 31
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:Product:index.html.twig", 31)->display($context);
        // line 32
        echo "        </div>
    </div>

    ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.product.index.after_content", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 35, $this->source); })()))));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 35,  127 => 32,  125 => 31,  120 => 29,  114 => 26,  109 => 24,  104 => 22,  97 => 18,  93 => 16,  90 => 15,  88 => 14,  81 => 11,  72 => 10,  52 => 8,  42 => 1,  40 => 6,  38 => 4,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.product.index.before_header', {'resources': resources}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/Product/Index/_header.html.twig' %}
        {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.product.index.after_header', {'resources': resources}) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"three wide column\">
            {{ sonata_block_render_event('sylius.admin.product.index.before_taxon_tree', {'resources': resources}) }}

            {{ render(path('sylius_admin_partial_taxon_tree', {'template': '@SyliusAdmin/Taxon/_treeWithoutButtons.html.twig'})) }}

            {{ sonata_block_render_event('sylius.admin.product.index.after_taxon_tree', {'resources': resources}) }}
        </div>
        <div class=\"thirteen wide column sylius-product-index\">
            {{ sonata_block_render_event('sylius.admin.product.index.before_filters', {'resources': resources}) }}

            {% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product.index.after_content', {'resources': resources}) }}
{% endblock %}
", "SyliusAdminBundle:Product:index.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/index.html.twig");
    }
}
