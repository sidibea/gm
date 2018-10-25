<?php

/* @SyliusShop/Menu/_localeSwitch.html.twig */
class __TwigTemplate_67e3baf5a67ef66a3a8c62af35bc3467842fc3aaf93a5c8c909462c5ab8028b2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_localeSwitch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_localeSwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 1, $this->source); })())) > 1)) {
            // line 2
            echo "    <li class=\"relative\">
        <a href=\"#\">";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 3, $this->source); })()))), "html", null, true);
            echo "</a>
        <ul>
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 6
                echo "                ";
                if ( !($context["code"] === (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 6, $this->source); })()))) {
                    // line 7
                    echo "                    <li class=\"relative\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_switch_locale", array("code" => $context["code"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["code"])), "html", null, true);
                    echo "</a></li>

                ";
                }
                // line 10
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
        </ul>
    </li>


";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Menu/_localeSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 10,  46 => 7,  43 => 6,  39 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if locales|length > 1 %}
    <li class=\"relative\">
        <a href=\"#\">{{ active|sylius_locale_name }}</a>
        <ul>
            {% for code in locales %}
                {% if code is not same as(active) %}
                    <li class=\"relative\"><a href=\"{{ path('sylius_shop_switch_locale', {'code': code}) }}\">{{ code|sylius_locale_name }}</a></li>

                {% endif %}
            {% endfor %}

        </ul>
    </li>


{% endif %}
", "@SyliusShop/Menu/_localeSwitch.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Menu/_localeSwitch.html.twig");
    }
}
