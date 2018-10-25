<?php

/* SyliusAdminBundle:Taxon:update.html.twig */
class __TwigTemplate_4d691784de3fde2b4a9bbe816d1557fa8b31850ac3056947290b1e3ba39588b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/Crud/update.html.twig", "SyliusAdminBundle:Taxon:update.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusAdmin/Crud/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.before_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 4, $this->source); })()))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.before_taxon_tree", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 8, $this->source); })()))));
        echo "

            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithButtons.html.twig")));
        echo "

            ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.after_taxon_tree", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 12, $this->source); })()))));
        echo "
        </div>
        <div class=\"twelve wide column\">
            ";
        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  71 => 12,  66 => 10,  61 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusAdmin/Crud/update.html.twig' %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.taxon.update.before_content', {'resource': resource}) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.admin.taxon.update.before_taxon_tree', {'resource': resource}) }}

            {{ render(path('sylius_admin_partial_taxon_tree', {'template': '@SyliusAdmin/Taxon/_treeWithButtons.html.twig'})) }}

            {{ sonata_block_render_event('sylius.admin.taxon.update.after_taxon_tree', {'resource': resource}) }}
        </div>
        <div class=\"twelve wide column\">
            {{ parent() }}
        </div>
    </div>
{% endblock %}
", "SyliusAdminBundle:Taxon:update.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/update.html.twig");
    }
}
