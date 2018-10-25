<?php

/* @SyliusShop/Account/dashboard.html.twig */
class __TwigTemplate_53b112d9ca4526680ac2ced39fae96be615bf9393e2a567ee6ac9424fa75aba2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "@SyliusShop/Account/dashboard.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 12
        echo "    <h1 class=\"ui dividing header\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_your_personal_information_and_preferences"), "html", null, true);
        echo "</div>
    </h1>

    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.dashboard.after_content_header", array("customer" => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 17, $this->source); })()))));
        echo "

    <div class=\"ui large list\" id=\"customer-information\">
        <div class=\"item\">
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 21, $this->source); })()), "fullName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"item\">
            <strong>
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 25, $this->source); })()), "email", array()), "html", null, true);
        echo "
            </strong>
        </div>
        <div class=\"item\">
            ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 29, $this->source); })()), "user", array()), "verified", array())) {
            // line 30
            echo "                <span class=\"ui icon green basic label\"><i class=\"checkmark icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.verified"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 32
            echo "                <span class=\"ui icon red basic label\"><i class=\"remove icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_verified"), "html", null, true);
            echo "</span>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    ";
        // line 37
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.dashboard.after_information", array("customer" => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 37, $this->source); })()))));
        echo "

    <div class=\"ui text menu\">
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_profile_update");
        echo "\" class=\"item\"><i class=\"pencil icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_change_password");
        echo "\" class=\"item\"><i class=\"lock icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_password"), "html", null, true);
        echo "</a>
        ";
        // line 42
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 42, $this->source); })()), "user", array()), "verified", array())) {
            // line 43
            echo "            <form class=\"item\" id=\"verification-form\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_user_request_verification_token");
            echo "\" method=\"post\">
                <button type=\"submit\" class=\"ui basic icon mini button\">
                    <i class=\"checkmark icon\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.verify"), "html", null, true);
            echo "
                </button>
            </form>
        ";
        }
        // line 49
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 49,  165 => 45,  159 => 43,  157 => 42,  151 => 41,  145 => 40,  139 => 37,  134 => 34,  128 => 32,  122 => 30,  120 => 29,  113 => 25,  106 => 21,  99 => 17,  93 => 14,  89 => 13,  86 => 12,  77 => 11,  64 => 7,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% block breadcrumb %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">{{ 'sylius.ui.my_account'|trans }}</div>
    </div>
{% endblock %}

{% block subcontent %}
    <h1 class=\"ui dividing header\">
        {{ 'sylius.ui.my_account'|trans }}
        <div class=\"sub header\">{{ 'sylius.ui.manage_your_personal_information_and_preferences'|trans }}</div>
    </h1>

    {{ sonata_block_render_event('sylius.shop.account.dashboard.after_content_header', {'customer': customer}) }}

    <div class=\"ui large list\" id=\"customer-information\">
        <div class=\"item\">
            {{ customer.fullName }}
        </div>
        <div class=\"item\">
            <strong>
                {{ customer.email }}
            </strong>
        </div>
        <div class=\"item\">
            {% if customer.user.verified %}
                <span class=\"ui icon green basic label\"><i class=\"checkmark icon\"></i> {{ 'sylius.ui.verified'|trans }}</span>
            {% else %}
                <span class=\"ui icon red basic label\"><i class=\"remove icon\"></i> {{ 'sylius.ui.not_verified'|trans }}</span>
            {% endif %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.shop.account.dashboard.after_information', {'customer': customer}) }}

    <div class=\"ui text menu\">
        <a href=\"{{ path('sylius_shop_account_profile_update') }}\" class=\"item\"><i class=\"pencil icon\"></i> {{ 'sylius.ui.edit'|trans }}</a>
        <a href=\"{{ path('sylius_shop_account_change_password') }}\" class=\"item\"><i class=\"lock icon\"></i> {{ 'sylius.ui.change_password'|trans }}</a>
        {% if not customer.user.verified %}
            <form class=\"item\" id=\"verification-form\" action=\"{{ path('sylius_shop_user_request_verification_token') }}\" method=\"post\">
                <button type=\"submit\" class=\"ui basic icon mini button\">
                    <i class=\"checkmark icon\"></i> {{ 'sylius.ui.verify'|trans }}
                </button>
            </form>
        {% endif %}
    </div>
{% endblock %}
", "@SyliusShop/Account/dashboard.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Account/dashboard.html.twig");
    }
}
