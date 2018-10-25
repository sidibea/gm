<?php

/* @SyliusShop/Checkout/Address/_addressBookSelect.html.twig */
class __TwigTemplate_f41120bed37b79dcce65a232df89e095af26e6756317798ace1893829cfca068 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/Address/_addressBookSelect.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/Address/_addressBookSelect.html.twig"));

        // line 1
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array()), "customer", array()))) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array()), "customer", array()), "addresses", array())) > 0))) {
            // line 2
            echo "    <div class=\"ui fluid floating dropdown labeled search icon button address-book-select\">
        <i class=\"book icon\"></i>
        <span class=\"text\">";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.select_address_from_book"), "html", null, true);
            echo "</span>
        <div class=\"menu\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array()), "customer", array()), "addresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 7
                echo "                <div class=\"item\"
                     data-id=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", array()), "html", null, true);
                echo "\"
                     data-first-name=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "firstName", array()), "html", null, true);
                echo "\"
                     data-last-name=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lastName", array()), "html", null, true);
                echo "\"
                     data-company=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "company", array()), "html", null, true);
                echo "\"
                     data-street=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", array()), "html", null, true);
                echo "\"
                     data-country-code=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "countryCode", array()), "html", null, true);
                echo "\"
                     data-province-code=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "provinceCode", array()), "html", null, true);
                echo "\"
                     data-province-name=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "provinceName", array()), "html", null, true);
                echo "\"
                     data-city=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", array()), "html", null, true);
                echo "\"
                     data-postcode=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postcode", array()), "html", null, true);
                echo "\"
                     data-phone-number=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "phoneNumber", array()), "html", null, true);
                echo "\"
                >
                    <strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lastName", array()), "html", null, true);
                echo "</strong>, ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postcode", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(twig_get_attribute($this->env, $this->source, $context["address"], "countryCode", array())), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/Address/_addressBookSelect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  92 => 20,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  44 => 7,  40 => 6,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user is not empty and app.user.customer is not empty and app.user.customer.addresses|length > 0 %}
    <div class=\"ui fluid floating dropdown labeled search icon button address-book-select\">
        <i class=\"book icon\"></i>
        <span class=\"text\">{{ 'sylius.ui.select_address_from_book'|trans }}</span>
        <div class=\"menu\">
            {% for address in app.user.customer.addresses %}
                <div class=\"item\"
                     data-id=\"{{ address.id }}\"
                     data-first-name=\"{{ address.firstName }}\"
                     data-last-name=\"{{ address.lastName }}\"
                     data-company=\"{{ address.company }}\"
                     data-street=\"{{ address.street }}\"
                     data-country-code=\"{{ address.countryCode }}\"
                     data-province-code=\"{{ address.provinceCode }}\"
                     data-province-name=\"{{ address.provinceName }}\"
                     data-city=\"{{ address.city }}\"
                     data-postcode=\"{{ address.postcode }}\"
                     data-phone-number=\"{{ address.phoneNumber }}\"
                >
                    <strong>{{ address.firstName }} {{ address.lastName }}</strong>, {{ address.street }}, {{ address.city }} {{ address.postcode }}, {{ address.countryCode|sylius_country_name }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endif %}
", "@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Checkout/Address/_addressBookSelect.html.twig");
    }
}
