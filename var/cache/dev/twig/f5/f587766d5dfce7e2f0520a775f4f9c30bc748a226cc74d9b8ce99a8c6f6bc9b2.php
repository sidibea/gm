<?php

/* @SyliusUi/Security/_login.html.twig */
class __TwigTemplate_96b02922d9f68da30371081d1502341c2d7899a3c60504caff35cac26c210603 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Security/_login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Security/_login.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), array(0 => "@SyliusUi/Form/theme.html.twig"), true);
        // line 2
        echo "
";
        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusUi/Security/_login.html.twig", 3);
        // line 4
        echo "
<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.before_form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()))));
        echo "

        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "logo", array(), "any", true, true)) {
            // line 10
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new Twig_Error_Runtime('Variable "paths" does not exist.', 10, $this->source); })()), "logo", array())), "html", null, true);
            echo "\" class=\"ui fluid image\" id=\"logo\">
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if ((isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "            <div class=\"ui left aligned basic segment\">
                ";
            // line 15
            echo $context["messages"]->macro_error(twig_get_attribute($this->env, $this->source, (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 15, $this->source); })()), "message", array()));
            echo "
            </div>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', array("action" => (((isset($context["action"]) || array_key_exists("action", $context))) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 19, $this->source); })()), "/")) : ("/")), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
            <div class=\"ui left aligned segment\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "_username", array()), 'row', array("value" => (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 21, $this->source); })()), "")) : (""))));
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "_password", array()), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "_remember_me", array()), 'row');
        echo "
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_authenticate"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()))));
        echo "

        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Security/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  95 => 28,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  71 => 19,  68 => 18,  62 => 15,  59 => 14,  57 => 13,  54 => 12,  48 => 10,  46 => 9,  41 => 7,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        {{ sonata_block_render_event('sylius.admin.login.before_form', {'form': form}) }}

        {% if paths.logo is defined %}
        <img src=\"{{ asset(paths.logo) }}\" class=\"ui fluid image\" id=\"logo\">
        {% endif %}

        {% if last_error %}
            <div class=\"ui left aligned basic segment\">
                {{ messages.error(last_error.message) }}
            </div>
        {% endif %}

        {{ form_start(form, {'action': action|default('/'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
            <div class=\"ui left aligned segment\">
                {{ form_row(form._username, {'value': last_username|default('')}) }}
                {{ form_row(form._password) }}
                {{ form_row(form._remember_me) }}
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"{{ csrf_token('admin_authenticate') }}\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            {{ sonata_block_render_event('sylius.admin.login.form', {'form': form}) }}

        {{ form_end(form, {'render_rest': false}) }}
    </div>
</div>
", "@SyliusUi/Security/_login.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Security/_login.html.twig");
    }
}
