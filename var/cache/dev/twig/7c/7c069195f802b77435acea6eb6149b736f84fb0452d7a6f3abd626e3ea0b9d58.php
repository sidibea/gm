<?php

/* SyliusAdminBundle:PaymentMethod:_form.html.twig */
class __TwigTemplate_a3255825963b9336e1c5affcb2b562efa941166c8277bd3358b21e5fe94c460a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod:_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod:_form.html.twig"));

        // line 1
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:PaymentMethod:_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), 'errors');
        echo "

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h4>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "

    <div class=\"two fields\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "code", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "position", array()), 'row');
        echo "
    </div>
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "enabled", array()), 'row');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "channels", array()), 'row');
        echo "
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.gateway_configuration"), "html", null, true);
        echo "</h4>
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "gatewayConfig", array()), "factoryName", array()), 'row');
        echo "
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gatewayConfig", array(), "any", false, true), "config", array(), "any", true, true)) {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "gatewayConfig", array()), "config", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 22
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2 == 1)) {
                    echo "<div class=\"two fields\">";
                }
                // line 23
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
            ";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2 == 0)) {
                    echo "</div>";
                }
                // line 25
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
        // line 27
        echo "</div>

<div class=\"ui styled fluid accordion\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "translations", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
            // line 31
            echo "        <div class=\"title";
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 33
            echo $context["flags"]->macro_fromLocaleCode($context["locale"]);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
            echo "
        </div>
        <div class=\"content";
            // line 35
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\">
            ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "name", array()), 'row');
            echo "
            ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "description", array()), 'row');
            echo "
            <div class=\"ui compact message\">
                <p>
                    <i class=\"icon info circle\"></i> ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.the_instructions_below_will_be_displayed_to_the_customer"), "html", null, true);
            echo ".
                </p>
            </div>
            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "instructions", array()), 'row');
            echo "
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PaymentMethod:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 46,  188 => 43,  182 => 40,  176 => 37,  172 => 36,  166 => 35,  159 => 33,  151 => 31,  134 => 30,  129 => 27,  126 => 26,  112 => 25,  108 => 24,  103 => 23,  98 => 22,  80 => 21,  78 => 20,  74 => 19,  70 => 18,  63 => 14,  59 => 13,  54 => 11,  50 => 10,  44 => 7,  40 => 6,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

{{ form_errors(form) }}

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h4>
    {{ form_errors(form) }}

    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.position) }}
    </div>
    {{ form_row(form.enabled) }}
    {{ form_row(form.channels) }}
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.gateway_configuration'|trans }}</h4>
    {{ form_row(form.gatewayConfig.factoryName) }}
    {% if form.gatewayConfig.config is defined %}
        {% for field in form.gatewayConfig.config %}
            {% if loop.index is odd %}<div class=\"two fields\">{% endif %}
            {{ form_row(field) }}
            {% if loop.index is even %}</div>{% endif %}
        {% endfor %}
    {% endif %}
</div>

<div class=\"ui styled fluid accordion\">
    {% for locale, translationForm in form.translations %}
        <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
            <i class=\"dropdown icon\"></i>
            {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
        </div>
        <div class=\"content{% if 0 == loop.index0 %} active{% endif %}\">
            {{ form_row(translationForm.name) }}
            {{ form_row(translationForm.description) }}
            <div class=\"ui compact message\">
                <p>
                    <i class=\"icon info circle\"></i> {{ 'sylius.ui.the_instructions_below_will_be_displayed_to_the_customer'|trans }}.
                </p>
            </div>
            {{ form_row(translationForm.instructions) }}
        </div>
    {% endfor %}
</div>
", "SyliusAdminBundle:PaymentMethod:_form.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PaymentMethod/_form.html.twig");
    }
}
