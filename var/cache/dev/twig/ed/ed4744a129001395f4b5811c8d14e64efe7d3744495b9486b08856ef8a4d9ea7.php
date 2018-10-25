<?php

/* @SyliusUi/Macro/headers.html.twig */
class __TwigTemplate_ad16673733dee15ff3eec0c788530906ee59ae9f65669acf75435c587ed8c4fd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/headers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/headers.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_default($__header__ = null, $__icon__ = null, $__subheader__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "header" => $__header__,
            "icon" => $__icon__,
            "subheader" => $__subheader__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "<h3 class=\"ui header\">
    ";
            // line 3
            if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->source); })()))) {
                // line 4
                echo "    <i class=\"circular ";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 4, $this->source); })()), "html", null, true);
                echo " icon\"></i>
    ";
            }
            // line 6
            echo "    <div class=\"content\">
        ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "
        ";
            // line 8
            if ( !twig_test_empty((isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new Twig_Error_Runtime('Variable "subheader" does not exist.', 8, $this->source); })()))) {
                // line 9
                echo "        <div class=\"sub header\">";
                echo twig_escape_filter($this->env, (isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new Twig_Error_Runtime('Variable "subheader" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    </div>
</h3>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  77 => 9,  75 => 8,  71 => 7,  68 => 6,  62 => 4,  60 => 3,  57 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(header, icon, subheader) %}
<h3 class=\"ui header\">
    {% if icon is not empty %}
    <i class=\"circular {{ icon }} icon\"></i>
    {% endif %}
    <div class=\"content\">
        {{ header }}
        {% if subheader is not empty %}
        <div class=\"sub header\">{{ subheader }}</div>
        {% endif %}
    </div>
</h3>
{% endmacro %}
", "@SyliusUi/Macro/headers.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/headers.html.twig");
    }
}
