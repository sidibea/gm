<?php

/* @SyliusUi/Form/Buttons/_update.html.twig */
class __TwigTemplate_561472686dcc034bcca44fb6c70c7e4fc3b73d8379d35a7e81c357e5da92b254 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_update.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 4
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "@SyliusUi/Form/Buttons/_update.html.twig", 4)->display(array_merge($context, array("path" => ((twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", array()), null)) : (null)))));
        // line 5
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/Buttons/_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> {{ 'sylius.ui.save_changes'|trans }}</button>
        {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
    </div>
</div>
", "@SyliusUi/Form/Buttons/_update.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_update.html.twig");
    }
}
