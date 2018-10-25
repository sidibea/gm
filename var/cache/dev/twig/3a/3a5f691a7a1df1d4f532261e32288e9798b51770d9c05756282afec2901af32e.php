<?php

/* @SyliusShop/login.html.twig */
class __TwigTemplate_dd0ca16dced984f13df97fef55283aad04b9b2dc8e8d203d849b6967abdb078f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/login.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"), true);
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
        echo "<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">&nbsp;</div>
        <div class=\"row\">
            ";
        // line 10
        $this->loadTemplate("@SyliusShop/Login/_header.html.twig", "@SyliusShop/login.html.twig", 10)->display($context);
        // line 11
        echo "
            ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_content_header"));
        echo "

            <div class=\"ui padded segment\">
                <div class=\"ui two column very relaxed stackable grid\">
                    <div class=\"column\">
                        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.before_login"));
        echo "

                        <h4 class=\"ui dividing header\" style=\"font-size: 1.7em\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.registered_customers"), "html", null, true);
        echo "</h4>
                        <p style=\"font-size: 1.3em\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.if_you_have_an_account_sign_in_with_your_email_address"), "html", null, true);
        echo ".</p>
                        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login_check"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                            ";
        // line 22
        $this->loadTemplate("@SyliusShop/Login/_form.html.twig", "@SyliusShop/login.html.twig", 22)->display($context);
        // line 23
        echo "
                            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()))));
        echo "

                            <button style=\"font-size: 1.4em\" type=\"submit\" class=\"ui red submit button\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.login"), "html", null, true);
        echo "</button>
                            <a  style=\"font-size: 1.4em\"href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_request_password_reset_token");
        echo "\" class=\"ui right floated button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.forgot_password"), "html", null, true);
        echo "</a>
                            <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
                        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "

                        ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_login"));
        echo "
                    </div>
                    <div class=\"ui hidden vertical divider\">
                    </div>
                    <div class=\"column\">
                        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.before_register"));
        echo "

                        ";
        // line 38
        $this->loadTemplate("@SyliusShop/Login/_register.html.twig", "@SyliusShop/login.html.twig", 38)->display($context);
        // line 39
        echo "
                        ";
        // line 40
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_register"));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">&nbsp;</div>

        </div>
    </div>
</div>
    <div class=\"row\">&nbsp;</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  136 => 39,  134 => 38,  129 => 36,  121 => 31,  116 => 29,  112 => 28,  106 => 27,  102 => 26,  97 => 24,  94 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  75 => 17,  67 => 12,  64 => 11,  62 => 10,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">&nbsp;</div>
        <div class=\"row\">
            {% include '@SyliusShop/Login/_header.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.login.after_content_header') }}

            <div class=\"ui padded segment\">
                <div class=\"ui two column very relaxed stackable grid\">
                    <div class=\"column\">
                        {{ sonata_block_render_event('sylius.shop.login.before_login') }}

                        <h4 class=\"ui dividing header\" style=\"font-size: 1.7em\">{{ 'sylius.ui.registered_customers'|trans }}</h4>
                        <p style=\"font-size: 1.3em\">{{ 'sylius.ui.if_you_have_an_account_sign_in_with_your_email_address'|trans }}.</p>
                        {{ form_start(form, {'action': path('sylius_shop_login_check'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                            {% include '@SyliusShop/Login/_form.html.twig' %}

                            {{ sonata_block_render_event('sylius.shop.login.form', {'form': form}) }}

                            <button style=\"font-size: 1.4em\" type=\"submit\" class=\"ui red submit button\">{{ 'sylius.ui.login'|trans }}</button>
                            <a  style=\"font-size: 1.4em\"href=\"{{ path('sylius_shop_request_password_reset_token') }}\" class=\"ui right floated button\">{{ 'sylius.ui.forgot_password'|trans }}</a>
                            <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\">
                        {{ form_end(form, {'render_rest': false}) }}

                        {{ sonata_block_render_event('sylius.shop.login.after_login') }}
                    </div>
                    <div class=\"ui hidden vertical divider\">
                    </div>
                    <div class=\"column\">
                        {{ sonata_block_render_event('sylius.shop.login.before_register') }}

                        {% include '@SyliusShop/Login/_register.html.twig' %}

                        {{ sonata_block_render_event('sylius.shop.login.after_register') }}
                    </div>
                </div>
            </div>
            <div class=\"row\">&nbsp;</div>

        </div>
    </div>
</div>
    <div class=\"row\">&nbsp;</div>

{% endblock %}
", "@SyliusShop/login.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/login.html.twig");
    }
}
