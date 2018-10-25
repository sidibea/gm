<?php

/* @SyliusAdmin/Product/Tab/_taxonomy.html.twig */
class __TwigTemplate_50f29e3b2dfa67bec5ac3e228e1ddc49bf07fb03c4ac1aa43aafe4af7aa361b5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_taxonomy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_taxonomy.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxonomy"), "html", null, true);
        echo "</h3>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), "mainTaxon", array()), 'row');
        echo "

    <h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.product_taxon"), "html", null, true);
        echo "</h4>
    <div id=\"sylius-product-taxonomy-tree\"
         data-taxon-root-nodes-url=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_root_nodes");
        echo "\"
         data-taxon-leafs-url=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_leafs");
        echo "\"
    >
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "productTaxons", array()), 'widget');
        echo "
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
    </div>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 16, $this->source); })())) . ".tab_taxonomy"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()))));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  55 => 10,  50 => 8,  46 => 7,  41 => 5,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.taxonomy'|trans }}</h3>
    {{ form_row(form.mainTaxon) }}

    <h4>{{ 'sylius.ui.product_taxon'|trans }}</h4>
    <div id=\"sylius-product-taxonomy-tree\"
         data-taxon-root-nodes-url=\"{{ path('sylius_admin_ajax_taxon_root_nodes') }}\"
         data-taxon-leafs-url=\"{{ path('sylius_admin_ajax_taxon_leafs') }}\"
    >
        {{ form_widget(form.productTaxons) }}
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_taxonomy', {'form': form}) }}
</div>
", "@SyliusAdmin/Product/Tab/_taxonomy.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_taxonomy.html.twig");
    }
}
