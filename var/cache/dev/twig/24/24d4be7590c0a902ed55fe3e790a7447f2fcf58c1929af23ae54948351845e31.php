<?php

/* @SyliusShop/Common/Order/_addresses.html.twig */
class __TwigTemplate_79598c39ea2382f72d85cc8450ff9572f7ef8888530f15c94e8c3da77ee0e492 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_addresses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_addresses.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui two column divided stackable grid\">
        <div class=\"column\" id=\"sylius-shipping-address\">
            <div class=\"ui small dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</div>
            ";
        // line 5
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Common/Order/_addresses.html.twig", 5)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->source); })()), "shippingAddress", array()))));
        // line 6
        echo "        </div>
        <div class=\"column\" id=\"sylius-billing-address\">
            <div class=\"ui small dividing header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</div>
            ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Common/Order/_addresses.html.twig", 9)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->source); })()), "billingAddress", array()))));
        // line 10
        echo "        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  48 => 9,  44 => 8,  40 => 6,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <div class=\"ui two column divided stackable grid\">
        <div class=\"column\" id=\"sylius-shipping-address\">
            <div class=\"ui small dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.shippingAddress} %}
        </div>
        <div class=\"column\" id=\"sylius-billing-address\">
            <div class=\"ui small dividing header\">{{ 'sylius.ui.billing_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.billingAddress} %}
        </div>
    </div>
</div>
", "@SyliusShop/Common/Order/_addresses.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/Order/_addresses.html.twig");
    }
}
