<?php

/* @SyliusAdmin/Product/Tab/_associations.html.twig */
class __TwigTemplate_974ba03f295dd4586b8f20af510d23009716cf8a741f1eb3e25c3a2fb32eaa88 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_associations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_associations.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.associations"), "html", null, true);
        echo "</h3>

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), "associations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["associationForm"]) {
            // line 5
            echo "        <div class=\"field\">";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'label');
            // line 7
            echo "<div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_index");
            echo "\">
                ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'widget', array("attr" => array("class" => "autocomplete")));
            echo "
                <i class=\"dropdown icon\"></i>
                <div class=\"default text\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.select_products"), "html", null, true);
            echo "</div>
                <div class=\"menu\">
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->source); })()), "associations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                // line 13
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["association"], "type", array()), "code", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["associationForm"], "vars", array()), "name", array()))) {
                    // line 14
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["association"], "associatedProducts", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["associatedProduct"]) {
                        // line 15
                        echo "                                <div class=\"item\" data-value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "code", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "name", array()), twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "code", array()))) : (twig_get_attribute($this->env, $this->source, $context["associatedProduct"], "code", array()))), "html", null, true);
                        echo "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associatedProduct'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                        ";
                }
                // line 18
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </div>
            </div>
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["associationForm"], 'errors');
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 25, $this->source); })())) . ".tab_associations"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()))));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 25,  105 => 24,  96 => 21,  92 => 19,  86 => 18,  83 => 17,  72 => 15,  67 => 14,  64 => 13,  60 => 12,  55 => 10,  50 => 8,  45 => 7,  43 => 6,  41 => 5,  37 => 4,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"associations\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.associations'|trans }}</h3>

    {% for associationForm in form.associations %}
        <div class=\"field\">
            {{- form_label(associationForm) -}}
            <div class=\"product-select ui fluid multiple search selection dropdown\" data-url=\"{{ path('sylius_admin_ajax_product_index') }}\">
                {{ form_widget(associationForm, {'attr': {'class' : 'autocomplete'}}) }}
                <i class=\"dropdown icon\"></i>
                <div class=\"default text\">{{'sylius.ui.select_products'|trans}}</div>
                <div class=\"menu\">
                    {% for association in product.associations %}
                        {% if association.type.code == associationForm.vars.name %}
                            {% for associatedProduct in association.associatedProducts %}
                                <div class=\"item\" data-value=\"{{ associatedProduct.code }}\">{{ associatedProduct.name|default(associatedProduct.code) }}</div>
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
            {{ form_errors(associationForm) }}
        </div>
    {% endfor %}

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_associations', {'form': form}) }}
</div>
", "@SyliusAdmin/Product/Tab/_associations.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_associations.html.twig");
    }
}
