<?php

/* @SyliusShop/Checkout/SelectPayment/_navigation.html.twig */
class __TwigTemplate_8393e762323948788176ec7fa421b5609e79561cbe354a675652212d9b5e13ab extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig"));

        // line 1
        $context["enabled"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->source); })()), "payments", array()));
        // line 2
        echo "

<div class=\"ui two column grid\">
    <div class=\"column\">
        ";
        // line 6
        if (call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), array((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_shipping_method"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 9
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_address"), "html", null, true);
            echo "</a>
        ";
        }
        // line 11
        echo "    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large red icon labeled";
        // line 13
        if ( !(isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new Twig_Error_Runtime('Variable "enabled" does not exist.', 13, $this->source); })())) {
            echo " disabled";
        }
        echo " button\">
            <i class=\"arrow right icon\"></i>
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.next"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  59 => 13,  55 => 11,  47 => 9,  39 => 7,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set enabled = order.payments|length %}


<div class=\"ui two column grid\">
    <div class=\"column\">
        {% if sylius_is_shipping_required(order) %}
            <a href=\"{{ path('sylius_shop_checkout_select_shipping') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_shipping_method'|trans }}</a>
        {% else %}
            <a href=\"{{ path('sylius_shop_checkout_address') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_address'|trans }}</a>
        {% endif %}
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large red icon labeled{% if not enabled %} disabled{% endif %} button\">
            <i class=\"arrow right icon\"></i>
            {{ 'sylius.ui.next'|trans }}
        </button>
    </div>
</div>
", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/SelectPayment/_navigation.html.twig");
    }
}
