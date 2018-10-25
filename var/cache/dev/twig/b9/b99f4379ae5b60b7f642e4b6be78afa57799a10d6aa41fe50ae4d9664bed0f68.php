<?php

/* @SyliusShop/Common/Form/_login.html.twig */
class __TwigTemplate_3edf113fcac4dfb7ce9e50e54b1200279c8f8a71696ccbf79a2261120bd380bd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Form/_login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Form/_login.html.twig"));

        // line 1
        echo "<div class=\"one field\" id=\"sylius-api-login\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), "email", array()), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), "email", array()), 'row', array("attr" => array("data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_ajax_user_check_action"))));
        echo "

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.password"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" data-url=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login_check");
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sign_in"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"ui red fluid top pointing basic label hidden sylius-validation-error\" id=\"sylius-api-validation-error\">
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Form/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 8,  46 => 7,  42 => 6,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"one field\" id=\"sylius-api-login\">
    {{ form_errors(form.email) }}
    {{ form_row(form.email, {'attr': {'data-url': path('sylius_shop_ajax_user_check_action')}}) }}

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"{{ 'sylius.ui.password'|trans }}\">
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" data-url=\"{{ path('sylius_shop_login_check') }}\">
            {{ 'sylius.ui.sign_in'|trans }}
        </a>
    </div>
    <div class=\"ui red fluid top pointing basic label hidden sylius-validation-error\" id=\"sylius-api-validation-error\">
    </div>
</div>
", "@SyliusShop/Common/Form/_login.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/Form/_login.html.twig");
    }
}
