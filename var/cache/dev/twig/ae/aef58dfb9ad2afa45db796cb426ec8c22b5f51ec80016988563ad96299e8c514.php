<?php

/* @SyliusShop/Product/Show/Tabs/_attributes.html.twig */
class __TwigTemplate_92f1244f02423c7814d5f41ac5ddb75dbccbbc81734a32a1ab3fdcc1f35e070c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_attributes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_attributes.html.twig"));

        // line 1
        echo "<div class=\"content-tabs-product-detail relative content-tab-2 border bottom-padding-default top-padding-default left-padding-default right-padding-default\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_attributes", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->source); })()))));
        echo "

    <table id=\"sylius-product-attributes\" class=\"ui definition table\">
        <tbody>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Sylius\Bundle\UiBundle\Twig\SortByExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->source); })()), "getAttributesByLocale", array(0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 6, $this->source); })()), "request", array()), "locale", array()), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 6, $this->source); })()), "request", array()), "defaultLocale", array()), 2 => (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new Twig_Error_Runtime('Variable "sylius_base_locale" does not exist.', 6, $this->source); })())), "method"), "attribute.position"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 7
            echo "            <tr>
                <td class=\"sylius-product-attribute-name\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"sylius-product-attribute-value\">
                    ";
            // line 10
            $this->loadTemplate(array(0 => (("SyliusAttributeBundle:Types:" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["attribute"], "attribute", array()), "type", array())) . ".html.twig"), 1 => "SyliusAttributeBundle:Types:default.html.twig"), "@SyliusShop/Product/Show/Tabs/_attributes.html.twig", 10)->display(array_merge($context, array("attribute" => $context["attribute"], "locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 10, $this->source); })()), "request", array()), "locale", array()), "fallbackLocale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 10, $this->source); })()), "request", array()), "defaultLocale", array()))));
            // line 11
            echo "                </td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  66 => 11,  64 => 10,  59 => 8,  56 => 7,  39 => 6,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-tabs-product-detail relative content-tab-2 border bottom-padding-default top-padding-default left-padding-default right-padding-default\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_attributes', {'product': product}) }}

    <table id=\"sylius-product-attributes\" class=\"ui definition table\">
        <tbody>
        {% for attribute in product.getAttributesByLocale(configuration.request.locale, configuration.request.defaultLocale, sylius_base_locale)|sort_by('attribute.position') %}
            <tr>
                <td class=\"sylius-product-attribute-name\">{{ attribute.name }}</td>
                <td class=\"sylius-product-attribute-value\">
                    {% include [('SyliusAttributeBundle:Types:'~attribute.attribute.type~'.html.twig'), 'SyliusAttributeBundle:Types:default.html.twig'] with {'attribute': attribute, 'locale': configuration.request.locale, 'fallbackLocale': configuration.request.defaultLocale} %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

", "@SyliusShop/Product/Show/Tabs/_attributes.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Show/Tabs/_attributes.html.twig");
    }
}
