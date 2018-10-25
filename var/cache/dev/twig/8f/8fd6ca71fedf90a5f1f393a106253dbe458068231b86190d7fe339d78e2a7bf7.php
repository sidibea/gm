<?php

/* SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig */
class __TwigTemplate_74221edd7726f6bc42a4d98704d90538268130281f7e71de59cde6e3cec9cf86 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        // line 1
        echo "<div class=\"ui fluid action input\" id=\"attributeChoice\" data-action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_render_attribute_forms");
        echo "\" style=\"margin-bottom: 15px;\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), 'widget', array("attr" => array("class" => "ui fluid search dropdown", "id" => "sylius_product_attribute_choice")));
        echo "
    <button class=\"ui green labeled icon button\">
        <i class=\"icon plus\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_attributes"), "html", null, true);
        echo "
    </button>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  34 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid action input\" id=\"attributeChoice\" data-action=\"{{ path('sylius_admin_render_attribute_forms') }}\" style=\"margin-bottom: 15px;\">
    {{ form_widget(form, {'attr': {'class': 'ui fluid search dropdown', 'id': 'sylius_product_attribute_choice'}}) }}
    <button class=\"ui green labeled icon button\">
        <i class=\"icon plus\"></i> {{ 'sylius.ui.add_attributes'|trans }}
    </button>
</div>
", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributeChoice.html.twig");
    }
}
