<?php

/* @SyliusShop/Common/Macro/money.html.twig */
class __TwigTemplate_a983c4d5e537a5d659ab530714394d830e6011bb3a9f717f7f94fb20e8df09d5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Macro/money.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Macro/money.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_format($__amount__ = null, $__currency_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "currency_code" => $__currency_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 2, $this->source); })()), (isset($context["currency_code"]) || array_key_exists("currency_code", $context) ? $context["currency_code"] : (function () { throw new Twig_Error_Runtime('Variable "currency_code" does not exist.', 2, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 2, $this->source); })()), "localeCode", array()))), "html", null, true);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_convertAndFormat($__amount__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            // line 6
            $context["__internal_240bb24365474c3e68f9846731f3e8d411d1ca4e4bdeec629c0451f30a3acf89"] = $this;
            // line 8
            echo $context["__internal_240bb24365474c3e68f9846731f3e8d411d1ca4e4bdeec629c0451f30a3acf89"]->macro_format(call_user_func_array($this->env->getFilter('sylius_convert_money')->getCallable(), array((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new Twig_Error_Runtime('Variable "amount" does not exist.', 8, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->source); })()), "channel", array()), "baseCurrency", array()), "code", array()), twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->source); })()), "currencyCode", array()))), twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 8, $this->source); })()), "currencyCode", array()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_calculatePrice($__variant__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variant" => $__variant__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            // line 12
            $context["__internal_5f3d45b445dbd92532e658a8e935d604e0297e2e7900e200c42195325e4dadc2"] = $this;
            // line 14
            echo $context["__internal_5f3d45b445dbd92532e658a8e935d604e0297e2e7900e200c42195325e4dadc2"]->macro_convertAndFormat(call_user_func_array($this->env->getFilter('sylius_calculate_price')->getCallable(), array((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 14, $this->source); })()), array("channel" => twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 14, $this->source); })()), "channel", array())))));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Macro/money.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 14,  124 => 12,  106 => 11,  91 => 8,  89 => 6,  71 => 5,  56 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- macro format(amount, currency_code) -%}
    {{ amount|sylius_format_money(currency_code, sylius.localeCode) }}
{%- endmacro -%}

{%- macro convertAndFormat(amount) -%}
    {% from _self import format %}

    {{- format(amount|sylius_convert_money(sylius.channel.baseCurrency.code, sylius.currencyCode), sylius.currencyCode) }}
{%- endmacro -%}

{%- macro calculatePrice(variant) -%}
    {% from _self import convertAndFormat %}

    {{- convertAndFormat(variant|sylius_calculate_price({'channel': sylius.channel})) }}
{%- endmacro -%}
", "@SyliusShop/Common/Macro/money.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/Macro/money.html.twig");
    }
}
