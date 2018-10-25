<?php

/* @SyliusShop/Menu/_security.html.twig */
class __TwigTemplate_c46edc12a99764756feda5a311447b4c8ddf45c99250e4af2859df8c61fae3b6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_security.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_security.html.twig"));

        // line 1
        echo "

<li class=\"relative\">
    ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 5
            echo "        <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.hello"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", array()), "customer", array()), "fullName", array()), "html", null, true);
            echo "!</a>
        <ul>

            <li class=\"relative\"><a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_dashboard");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.my_account"), "html", null, true);
            echo "</a></li>
            <li class=\"relative\"><a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.logout"), "html", null, true);
            echo "</a></li>
            <li class=\"relative\"><a href=\"#\">CN</a></li>
        </ul>
    ";
        } else {
            // line 13
            echo "            <li class=\"relative\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.login"), "html", null, true);
            echo "</a> </li>
            <li class=\"relative\"><a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_register");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.register"), "html", null, true);
            echo "</a></li>

    ";
        }
        // line 17
        echo "
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Menu/_security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  67 => 14,  60 => 13,  51 => 9,  45 => 8,  36 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<li class=\"relative\">
    {% if is_granted('ROLE_USER') %}
        <a href=\"#\">{{ 'sylius.ui.hello'|trans }} {{ app.user.customer.fullName }}!</a>
        <ul>

            <li class=\"relative\"><a href=\"{{ path('sylius_shop_account_dashboard') }}\">{{ 'sylius.ui.my_account'|trans }}</a></li>
            <li class=\"relative\"><a href=\"{{ path('sylius_shop_logout') }}\">{{ 'sylius.ui.logout'|trans }}</a></li>
            <li class=\"relative\"><a href=\"#\">CN</a></li>
        </ul>
    {% else %}
            <li class=\"relative\"><a href=\"{{ path('sylius_shop_login') }}\" class=\"item\">{{ 'sylius.ui.login'|trans }}</a> </li>
            <li class=\"relative\"><a href=\"{{ path('sylius_shop_register') }}\" class=\"item\">{{ 'sylius.ui.register'|trans }}</a></li>

    {% endif %}

</li>", "@SyliusShop/Menu/_security.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Menu/_security.html.twig");
    }
}
