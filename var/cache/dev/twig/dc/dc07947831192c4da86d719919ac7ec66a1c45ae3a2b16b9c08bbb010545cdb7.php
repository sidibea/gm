<?php

/* @SyliusAdmin/Dashboard/_channelSwitch.html.twig */
class __TwigTemplate_1c65110906b221d1572ba892c3a0aa88ca85f70e8e7d01a3e71431c551835eee extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 1, $this->source); })())) > 1)) {
            // line 2
            echo "
";
            // line 3
            $context["selected"] = twig_first($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 3, $this->source); })()));
            // line 4
            $context["code"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "channel"), "method");
            // line 5
            echo "
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 7
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["channel"], "code", array()) === (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new Twig_Error_Runtime('Variable "code" does not exist.', 7, $this->source); })()))) {
                    // line 8
                    echo "        ";
                    $context["selected"] = $context["channel"];
                    // line 9
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
<div class=\"ui floating dropdown labeled icon button\">
    <i class=\"share alternate icon\"></i>
    <span class=\"text\">
        ";
            // line 15
            $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", 15)->display(array_merge($context, array("channel" => (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 15, $this->source); })()))));
            // line 16
            echo "    </span>
    <div class=\"menu\">
        <div class=\"ui icon search input\">
            <i class=\"search icon\"></i>
            <input type=\"text\" placeholder=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.search"), "html", null, true);
            echo "...\">
        </div>
        <div class=\"scrolling menu\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 23, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 24
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard", array("channel" => twig_get_attribute($this->env, $this->source, $context["channel"], "code", array()))), "html", null, true);
                echo "\" class=\"item\">
                    ";
                // line 25
                $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", 25)->display($context);
                // line 26
                echo "                </a>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
    </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_channelSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  102 => 26,  100 => 25,  95 => 24,  78 => 23,  72 => 20,  66 => 16,  64 => 15,  58 => 11,  51 => 9,  48 => 8,  45 => 7,  41 => 6,  38 => 5,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if channels|length > 1 %}

{% set selected = channels|first %}
{% set code = app.request.query.get('channel') %}

{% for channel in channels %}
    {% if channel.code is same as(code) %}
        {% set selected = channel %}
    {% endif %}
{% endfor %}

<div class=\"ui floating dropdown labeled icon button\">
    <i class=\"share alternate icon\"></i>
    <span class=\"text\">
        {% include '@SyliusAdmin/Common/_channel.html.twig' with {'channel': selected} %}
    </span>
    <div class=\"menu\">
        <div class=\"ui icon search input\">
            <i class=\"search icon\"></i>
            <input type=\"text\" placeholder=\"{{ 'sylius.ui.search'|trans }}...\">
        </div>
        <div class=\"scrolling menu\">
            {% for channel in channels %}
                <a href=\"{{ path('sylius_admin_dashboard', {'channel': channel.code}) }}\" class=\"item\">
                    {% include '@SyliusAdmin/Common/_channel.html.twig' %}
                </a>
            {% endfor %}
        </div>
    </div>
</div>
{% endif %}
", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_channelSwitch.html.twig");
    }
}
