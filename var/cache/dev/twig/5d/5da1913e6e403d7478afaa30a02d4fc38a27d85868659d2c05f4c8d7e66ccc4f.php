<?php

/* @SyliusShop/Common/Form/_address.html.twig */
class __TwigTemplate_5ee89f4a685046fc1c84961c32a53b27709e966668145eba0ac0670ff5f34f86 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Form/_address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Form/_address.html.twig"));

        // line 1
        echo "<div class=\"two fields\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), "firstName", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), "lastName", array()), 'row');
        echo "
</div>
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), "company", array()), 'row');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), "street", array()), 'row');
        echo "

";
        // line 8
        $this->loadTemplate("@SyliusShop/Common/Form/_countryCode.html.twig", "@SyliusShop/Common/Form/_address.html.twig", 8)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "countryCode", array()))));
        // line 9
        echo "
<div class=\"province-container field\" data-url=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_render_province_form");
        echo "\">
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "provinceCode", array(), "any", true, true)) {
            // line 12
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "provinceCode", array()), 'row', array("attr" => array("class" => "ui dropdown")));
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 13
($context["form"] ?? null), "provinceName", array(), "any", true, true)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "provinceName", array()), 'row');
            echo "
    ";
        }
        // line 16
        echo "</div>

";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "provinceCode", array(), "any", true, true)) {
            // line 19
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'errors');
            echo "
";
        }
        // line 21
        echo "
<div class=\"two fields\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "city", array()), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "postcode", array()), 'row');
        echo "
</div>
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "phoneNumber", array()), 'row');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Form/_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  94 => 24,  90 => 23,  86 => 21,  80 => 19,  78 => 18,  74 => 16,  68 => 14,  66 => 13,  61 => 12,  59 => 11,  55 => 10,  52 => 9,  50 => 8,  45 => 6,  41 => 5,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"two fields\">
    {{ form_row(form.firstName) }}
    {{ form_row(form.lastName) }}
</div>
{{ form_row(form.company) }}
{{ form_row(form.street) }}

{% include '@SyliusShop/Common/Form/_countryCode.html.twig' with {'form': form.countryCode} %}

<div class=\"province-container field\" data-url=\"{{ path('sylius_shop_ajax_render_province_form') }}\">
    {% if form.provinceCode is defined %}
        {{ form_row(form.provinceCode, {'attr': {'class': 'ui dropdown'}}) }}
    {% elseif form.provinceName is defined %}
        {{ form_row(form.provinceName) }}
    {% endif %}
</div>

{% if form.provinceCode is defined %}
    {{ form_errors(form) }}
{% endif %}

<div class=\"two fields\">
    {{ form_row(form.city) }}
    {{ form_row(form.postcode) }}
</div>
{{ form_row(form.phoneNumber) }}
", "@SyliusShop/Common/Form/_address.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/Form/_address.html.twig");
    }
}
