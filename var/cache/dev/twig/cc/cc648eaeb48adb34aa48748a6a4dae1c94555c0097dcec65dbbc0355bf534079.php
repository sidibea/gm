<?php

/* @SyliusShop/Cart/Summary/_coupon.html.twig */
class __TwigTemplate_3d6543dd07f89db932c1b760bef44ca5b7cc928fd85e48dfd2e0daa216f1b92a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_coupon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_coupon.html.twig"));

        // line 1
        echo "<div class=\"full-width relative coupon-code bg-gray  clearfix\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), 'widget', array("attr" => array("placeholder" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enter_your_code") . "..."), "class" => "full-width")));
        echo "

    <button type=\"submit\" id=\"sylius-save\" class=\"full-width top-margin-15-default\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_coupon"), "html", null, true);
        echo "</button>

    <br>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_coupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  37 => 4,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"full-width relative coupon-code bg-gray  clearfix\">
    {{ form_widget(form, {'attr': {'placeholder': 'sylius.ui.enter_your_code'|trans~'...', 'class': 'full-width'}}) }}

    <button type=\"submit\" id=\"sylius-save\" class=\"full-width top-margin-15-default\">{{ 'sylius.ui.apply_coupon'|trans }}</button>

    <br>
    {{ form_errors(form) }}
</div>


", "@SyliusShop/Cart/Summary/_coupon.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Cart/Summary/_coupon.html.twig");
    }
}
