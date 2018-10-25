<?php

/* @SyliusAdmin/Form/imagesTheme.html.twig */
class __TwigTemplate_195350d5213adf699d13372a5b7a31d49bf81c73e92c989abadbb59513eb25c9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/imagesTheme.html.twig", "@SyliusAdmin/Form/imagesTheme.html.twig", 1);
        $this->blocks = array(
            'sylius_product_image_widget' => array($this, 'block_sylius_product_image_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/imagesTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Form/imagesTheme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Form/imagesTheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_sylius_product_image_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"ui upload box segment\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), "type", array()), 'row');
        echo "
            <label for=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
            ";
        // line 8
        if ( !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 9
            echo "                <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 11
        echo "            <div class=\"ui hidden element\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "file", array()), 'widget');
        echo "
            </div>
            <div class=\"ui element\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "file", array()), 'errors');
        // line 16
        echo "</div>
            ";
        // line 17
        if ((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->source); })()), "id", array())) && (0 != twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->source); })()), "variants", array())))) &&  !twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->source); })()), "simple", array()))) {
            // line 18
            echo "                <br/>
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "productVariants", array()), 'row', array("remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_variants_by_phrase", array("productCode" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->source); })()), "code", array()))), "remote_criteria_type" => "contains", "remote_criteria_name" => "phrase", "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_variants_by_codes", array("productCode" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->source); })()), "code", array())))));
            echo "
            ";
        }
        // line 21
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Form/imagesTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  97 => 19,  94 => 18,  92 => 17,  89 => 16,  87 => 15,  82 => 12,  79 => 11,  71 => 9,  69 => 8,  63 => 7,  59 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/imagesTheme.html.twig' %}

{% block sylius_product_image_widget %}
    {% spaceless %}
        <div class=\"ui upload box segment\">
            {{ form_row(form.type) }}
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
            {% if form.vars.value.path|default(null) is not null %}
                <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
            {% endif %}
            <div class=\"ui hidden element\">
                {{ form_widget(form.file) }}
            </div>
            <div class=\"ui element\">
                {{- form_errors(form.file) -}}
            </div>
            {% if product.id is not null and 0 != product.variants|length and not product.simple %}
                <br/>
                {{ form_row(form.productVariants, {'remote_url': path('sylius_admin_ajax_product_variants_by_phrase', {'productCode': product.code}), 'remote_criteria_type': 'contains', 'remote_criteria_name': 'phrase', 'load_edit_url': path('sylius_admin_ajax_product_variants_by_codes', {'productCode': product.code})}) }}
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "@SyliusAdmin/Form/imagesTheme.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Form/imagesTheme.html.twig");
    }
}
