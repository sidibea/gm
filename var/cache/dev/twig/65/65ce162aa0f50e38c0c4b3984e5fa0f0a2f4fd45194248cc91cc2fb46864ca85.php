<?php

/* @SyliusAdmin/Product/Tab/_details.html.twig */
class __TwigTemplate_0772ae89b20674fb8251e7904e57c8d0bb1b8e83f6692d3fab63d5390206287b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_details.html.twig"));

        // line 1
        $context["__internal_4ee61019ffa467c7614947d2d918b5197186829707862a7f75d22daa05ae781a"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "@SyliusAdmin/Product/Tab/_details.html.twig", 1);
        // line 2
        echo "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h3>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'errors');
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "code", array()), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "enabled", array()), 'row');
        echo "
                ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "simple", array())) {
            // line 13
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "variant", array()), "onHand", array()), 'row');
            echo "
                    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "variant", array()), "tracked", array()), 'row');
            echo "
                    ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "variant", array()), "shippingRequired", array()), 'row');
            echo "
                    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "variant", array()), "version", array()), 'row');
            echo "
                ";
        } else {
            // line 18
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "options", array()), 'row');
            echo "
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "variantSelectionMethod", array()), 'row');
            echo "
                ";
        }
        // line 21
        echo "
                ";
        // line 23
        echo "                <div class=\"ui hidden element\">
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->source); })()), "simple", array())) {
            // line 25
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "variant", array()), "translations", array()), 'row');
            echo "
                    ";
        }
        // line 27
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "variantSelectionMethod", array()), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "channels", array()), 'row');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "brand", array()), 'row');
        echo " ";
        // line 34
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 34, $this->source); })()), "simple", array())) {
            // line 35
            echo "                <h4 class=\"ui dividing header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
            echo "</h4>
                ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "variant", array()), "channelPricings", array()), 'row', array("label" => false));
            echo "

            ";
        }
        // line 39
        echo "        </div>
    </div>
    <div class=\"ui hidden divider\"></div>
    ";
        // line 42
        echo $context["__internal_4ee61019ffa467c7614947d2d918b5197186829707862a7f75d22daa05ae781a"]->macro_translationFormWithSlug(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "translations", array()), "@SyliusAdmin/Product/_slugField.html.twig", (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 42, $this->source); })()));
        echo "
    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 43, $this->source); })()), "simple", array())) {
            // line 44
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
            echo "</h4>
                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "variant", array()), "shippingCategory", array()), 'row');
            echo "
                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "variant", array()), "width", array()), 'row');
            echo "
                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "variant", array()), "height", array()), 'row');
            echo "
                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "variant", array()), "depth", array()), 'row');
            echo "
                ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "variant", array()), "weight", array()), 'row');
            echo "
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.taxes"), "html", null, true);
            echo "</h4>
                ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "variant", array()), "taxCategory", array()), 'row');
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 65, $this->source); })())) . ".tab_details"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()))));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 65,  186 => 64,  178 => 59,  174 => 58,  166 => 53,  162 => 52,  158 => 51,  154 => 50,  150 => 49,  146 => 48,  140 => 44,  138 => 43,  134 => 42,  129 => 39,  123 => 36,  118 => 35,  115 => 34,  112 => 33,  108 => 32,  99 => 27,  93 => 25,  91 => 24,  88 => 23,  85 => 21,  80 => 19,  75 => 18,  70 => 16,  66 => 15,  62 => 14,  57 => 13,  55 => 12,  51 => 11,  47 => 10,  39 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationFormWithSlug %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h3>
    {{ form_errors(form) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                {{ form_row(form.code) }}
                {{ form_row(form.enabled) }}
                {% if product.simple %}
                    {{ form_row(form.variant.onHand) }}
                    {{ form_row(form.variant.tracked) }}
                    {{ form_row(form.variant.shippingRequired) }}
                    {{ form_row(form.variant.version) }}
                {% else %}
                    {{ form_row(form.options) }}
                    {{ form_row(form.variantSelectionMethod) }}
                {% endif %}

                {# Nothing to see here. #}
                <div class=\"ui hidden element\">
                    {% if product.simple %}
                        {{ form_row(form.variant.translations) }}
                    {% endif %}
                    {{ form_row(form.variantSelectionMethod) }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            {{ form_row(form.channels) }}
            {{ form_row(form.brand) }} {# This is the only change made to this file #}
            {% if product.simple %}
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.pricing'|trans }}</h4>
                {{ form_row(form.variant.channelPricings, {'label': false}) }}

            {% endif %}
        </div>
    </div>
    <div class=\"ui hidden divider\"></div>
    {{ translationFormWithSlug(form.translations, '@SyliusAdmin/Product/_slugField.html.twig', product) }}
    {% if product.simple %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping'|trans }}</h4>
                {{ form_row(form.variant.shippingCategory) }}
                {{ form_row(form.variant.width) }}
                {{ form_row(form.variant.height) }}
                {{ form_row(form.variant.depth) }}
                {{ form_row(form.variant.weight) }}
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h4>
                {{ form_row(form.variant.taxCategory) }}
            </div>
        </div>
    </div>
    {% endif %}

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_details', {'form': form}) }}
</div>
", "@SyliusAdmin/Product/Tab/_details.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_details.html.twig");
    }
}
