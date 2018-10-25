<?php

/* @SyliusShop/Common/_address.html.twig */
class __TwigTemplate_bc6ab63e7dc9c47928a542b9cd5124f0a10c1badf26fa02448ee43fcfe7950bc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/_address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/_address.html.twig"));

        // line 1
        echo "<address style=\"font-size: 1.4em;\">
    ";
        // line 2
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 2, $this->source); })()), "company", array()))) {
            // line 3
            echo "        <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 3, $this->source); })()), "company", array()), "html", null, true);
            echo "</strong><br>
    ";
        }
        // line 5
        echo "    <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 5, $this->source); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 5, $this->source); })()), "lastName", array()), "html", null, true);
        echo "</strong><br>
    ";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 6, $this->source); })()), "phoneNumber", array()))) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 7, $this->source); })()), "phoneNumber", array()), "html", null, true);
            echo "<br/>
    ";
        }
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 9, $this->source); })()), "street", array()), "html", null, true);
        echo "<br/>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 10, $this->source); })()), "city", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 10, $this->source); })()), "postcode", array()), "html", null, true);
        echo "<br/>
    ";
        // line 11
        if ( !twig_test_empty(call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 11, $this->source); })()))))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->source); })()))), "html", null, true);
            echo "<br/>
    ";
        }
        // line 14
        echo "    <i class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 14, $this->source); })()), "countryCode", array())), "html", null, true);
        echo " flag\"></i>
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 15, $this->source); })()), "countryCode", array()))), "html", null, true);
        echo "
</address>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  74 => 14,  68 => 12,  66 => 11,  60 => 10,  55 => 9,  49 => 7,  47 => 6,  40 => 5,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<address style=\"font-size: 1.4em;\">
    {% if address.company is not null %}
        <strong>{{ address.company }}</strong><br>
    {% endif %}
    <strong>{{ address.firstName }} {{ address.lastName }}</strong><br>
    {% if address.phoneNumber is not null %}
        {{ address.phoneNumber }}<br/>
    {% endif %}
    {{ address.street }}<br/>
    {{ address.city }}, {{ address.postcode }}<br/>
    {% if address|sylius_province_name is not empty %}
        {{ address|sylius_province_name }}<br/>
    {% endif %}
    <i class=\"{{ address.countryCode|lower }} flag\"></i>
    {{ address.countryCode|sylius_country_name|upper }}
</address>
", "@SyliusShop/Common/_address.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Common/_address.html.twig");
    }
}
