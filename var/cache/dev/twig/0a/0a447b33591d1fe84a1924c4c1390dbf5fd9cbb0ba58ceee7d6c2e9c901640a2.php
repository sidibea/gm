<?php

/* @SyliusShop/Login/_form.html.twig */
class __TwigTemplate_546afd3352b7f679e404723552d8eb97a7fa57d0ef320f9bcbbc9b3e0309fbf7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_form.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Login/_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    ";
            echo $context["messages"]->macro_error($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 4, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 4, $this->source); })()), "messageData", array()), "security"));
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "_username", array()), 'row');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "_password", array()), 'row');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "_remember_me", array()), 'row');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  45 => 7,  42 => 6,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% if last_error %}
    {{ messages.error(last_error.messageKey|trans(last_error.messageData, 'security')) }}
{% endif %}

{{ form_row(form._username) }}
{{ form_row(form._password) }}
{{ form_row(form._remember_me) }}
", "@SyliusShop/Login/_form.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Login/_form.html.twig");
    }
}
