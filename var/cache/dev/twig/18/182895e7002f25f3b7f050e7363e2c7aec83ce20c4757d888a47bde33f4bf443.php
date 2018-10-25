<?php

/* @SyliusShop/Product/Index/_main.html.twig */
class __TwigTemplate_2634e951858802f25d8491b84cc900b35823dc7a69aaff20eb2ce75e3ced6a3b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_main.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 1);
        // line 2
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_search", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->source); })()), "data", array()))));
        echo "
<div class=\"row\">
    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_search", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 6, $this->source); })()), "data", array()))));
        echo "

    ";
        // line 8
        $this->loadTemplate("@SyliusShop/Product/Index/_search.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 8)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_search", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 10, $this->source); })()), "data", array()))));
        echo "

    <div class=\"row\">&nbsp;</div>
</div>
<!-- Product Content Category -->
<div class=\"row\">
    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_list", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 16, $this->source); })()), "data", array()))));
        echo "

    ";
        // line 18
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 18, $this->source); })()), "data", array())) > 0)) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 19, $this->source); })()), "data", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/_box2.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 20)->display($context);
                // line 21
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
        ";
            // line 23
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_pagination", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 23, $this->source); })()), "data", array()))));
            echo "


        <div class=\"row\">
            ";
            // line 27
            echo $context["pagination"]->macro_simple(twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 27, $this->source); })()), "data", array()));
            echo "
        </div>

    ";
        } else {
            // line 31
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 33
        echo "
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  119 => 31,  112 => 27,  105 => 23,  102 => 22,  88 => 21,  85 => 20,  67 => 19,  65 => 18,  60 => 16,  51 => 10,  48 => 9,  46 => 8,  41 => 6,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}

{{ sonata_block_render_event('sylius.shop.product.index.before_search', {'products': resources.data}) }}
<div class=\"row\">
    {{ sonata_block_render_event('sylius.shop.product.index.before_search', {'products': resources.data}) }}

    {% include '@SyliusShop/Product/Index/_search.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.product.index.after_search', {'products': resources.data}) }}

    <div class=\"row\">&nbsp;</div>
</div>
<!-- Product Content Category -->
<div class=\"row\">
    {{ sonata_block_render_event('sylius.shop.product.index.before_list', {'products': resources.data}) }}

    {% if resources.data|length > 0 %}
        {% for product in resources.data %}
            {% include '@SyliusShop/Product/_box2.html.twig' %}
        {% endfor %}

        {{ sonata_block_render_event('sylius.shop.product.index.before_pagination', {'products': resources.data}) }}


        <div class=\"row\">
            {{ pagination.simple(resources.data) }}
        </div>

    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}

</div>

", "@SyliusShop/Product/Index/_main.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/Index/_main.html.twig");
    }
}
