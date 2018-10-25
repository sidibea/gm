<?php

/* @SyliusShop/Checkout/SelectShipping/_choice.html.twig */
class __TwigTemplate_1df441de054aeaefa488a8163cc4617d03131439a740231f9ee137146b932400 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectShipping/_choice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectShipping/_choice.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Checkout/SelectShipping/_choice.html.twig", 1);
        // line 2
        echo "
<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'label');
        echo "</a>
        ";
        // line 11
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 11, $this->source); })()), "description", array()))) {
            // line 12
            echo "            <div class=\"description\">
                <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 13, $this->source); })()), "description", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 16
        echo "    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\">
            ";
        // line 19
        echo $context["money"]->macro_convertAndFormat((isset($context["fee"]) || array_key_exists("fee", $context) ? $context["fee"] : (function () { throw new Twig_Error_Runtime('Variable "fee" does not exist.', 19, $this->source); })()));
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/SelectShipping/_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  59 => 16,  53 => 13,  50 => 12,  48 => 11,  44 => 10,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusShop/Common/Macro/money.html.twig' as money %}

<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            {{ form_widget(form) }}
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">{{ form_label(form) }}</a>
        {% if method.description is not null %}
            <div class=\"description\">
                <p>{{ method.description }}</p>
            </div>
        {% endif %}
    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\">
            {{ money.convertAndFormat(fee) }}
        </div>
    </div>
</div>
", "@SyliusShop/Checkout/SelectShipping/_choice.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/SelectShipping/_choice.html.twig");
    }
}
