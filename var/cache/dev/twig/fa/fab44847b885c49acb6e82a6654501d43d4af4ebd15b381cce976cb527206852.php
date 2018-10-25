<?php

/* @SyliusShop/Order/show.html.twig */
class __TwigTemplate_f8b01705a49d5ac94ffc730f6a6792be079aebdce247e2a8890674160d4e0361 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Order/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Order/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Order/show.html.twig"));

        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Order/show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"ui segment\">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Order/_summary.html.twig", "@SyliusShop/Order/show.html.twig", 7)->display($context);
        // line 8
        echo "
        ";
        // line 9
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->source); })()), "paymentState", array()), array(0 => "awaiting_payment"))) {
            // line 10
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", array("tokenValue" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->source); })()), "tokenValue", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
            echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
            // line 13
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_form.html.twig", "@SyliusShop/Order/show.html.twig", 13)->display($context);
            // line 14
            echo "            <div class=\"ui hidden divider\"></div>
            <button type=\"submit\" class=\"ui large blue icon labeled button\" id=\"sylius-pay-link\">
                <i class=\"check icon\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pay"), "html", null, true);
            echo "
            </button>

            ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "_token", array()), 'row');
            echo "
            ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), 'form_end', array("render_rest" => false));
            echo "
        ";
        } else {
            // line 22
            echo "            ";
            echo $context["messages"]->macro_info("sylius.ui.you_can_no_longer_change_payment_method_of_this_order");
            echo "
        ";
        }
        // line 24
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Order/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  94 => 22,  89 => 20,  85 => 19,  79 => 16,  75 => 14,  73 => 13,  66 => 10,  64 => 9,  61 => 8,  59 => 7,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% block content %}
    <div class=\"ui segment\">
        {% include '@SyliusShop/Order/_summary.html.twig' %}

        {% if order.paymentState in ['awaiting_payment'] %}
            {{ form_start(form, {'action': path('sylius_shop_order_show', {'tokenValue': order.tokenValue}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            {% include '@SyliusShop/Checkout/SelectPayment/_form.html.twig' %}
            <div class=\"ui hidden divider\"></div>
            <button type=\"submit\" class=\"ui large blue icon labeled button\" id=\"sylius-pay-link\">
                <i class=\"check icon\"></i> {{ 'sylius.ui.pay'|trans }}
            </button>

            {{ form_row(form._token) }}
            {{ form_end(form, {'render_rest': false}) }}
        {% else %}
            {{ messages.info('sylius.ui.you_can_no_longer_change_payment_method_of_this_order') }}
        {% endif %}
    </div>
{% endblock %}
", "@SyliusShop/Order/show.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Order/show.html.twig");
    }
}
