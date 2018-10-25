<?php

/* @SyliusShop/Cart/Summary/_items.html.twig */
class __TwigTemplate_81240c75b08c4e5d62c1d4e84ce741318973d7db9e64d808ad1f85c67d59203b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_items.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_items.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_save"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), 'errors');
        echo "
        <input type=\"hidden\" name=\"_method\" value=\"PATCH\"/>

        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.items", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 6, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()))));
        echo "

        <table id=\"sylius-cart-items\" class=\"ui very basic celled table\">
            <thead>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unit_price"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.qty"), "html", null, true);
        echo "</th>
                <th class=\"right aligned\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        echo "</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 20, $this->source); })()), "items", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 21
            echo "                    ";
            $this->loadTemplate("@SyliusShop/Cart/Summary/_item.html.twig", "@SyliusShop/Cart/Summary/_items.html.twig", 21)->display(array_merge($context, array("item" => $context["item"], "form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "items", array()), $context["key"], array(), "array"))));
            // line 22
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </tbody>
        </table>
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "promotionCoupon", array(), "any", true, true)) {
            // line 26
            echo "            <div class=\"ui hidden divider\"></div>

            ";
            // line 28
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_coupon", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 28, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()))));
            echo "

            ";
            // line 30
            $this->loadTemplate("@SyliusShop/Cart/Summary/_coupon.html.twig", "@SyliusShop/Cart/Summary/_items.html.twig", 30)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "promotionCoupon", array()))));
            // line 31
            echo "
            ";
            // line 32
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_coupon", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 32, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()))));
            echo "
        ";
        }
        // line 34
        echo "        <div class=\"ui hidden divider\"></div>
        ";
        // line 35
        $this->loadTemplate("@SyliusShop/Cart/Summary/_update.html.twig", "@SyliusShop/Cart/Summary/_items.html.twig", 35)->display($context);
        // line 36
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "_token", array()), 'row');
        echo "
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 37,  135 => 36,  133 => 35,  130 => 34,  125 => 32,  122 => 31,  120 => 30,  115 => 28,  111 => 26,  109 => 25,  105 => 23,  91 => 22,  88 => 21,  71 => 20,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  42 => 6,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path('sylius_shop_cart_save'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
        {{ form_errors(form) }}
        <input type=\"hidden\" name=\"_method\" value=\"PATCH\"/>

        {{ sonata_block_render_event('sylius.shop.cart.summary.items', {'cart': cart, 'form': form}) }}

        <table id=\"sylius-cart-items\" class=\"ui very basic celled table\">
            <thead>
            <tr>
                <th>{{ 'sylius.ui.item'|trans }}</th>
                <th>{{ 'sylius.ui.unit_price'|trans }}</th>
                <th>{{ 'sylius.ui.qty'|trans }}</th>
                <th class=\"right aligned\">{{ 'sylius.ui.total'|trans }}</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
                {% for key, item in cart.items %}
                    {% include '@SyliusShop/Cart/Summary/_item.html.twig' with {'item': item, 'form': form.items[key]} %}
                {% endfor %}
            </tbody>
        </table>
        {% if form.promotionCoupon is defined %}
            <div class=\"ui hidden divider\"></div>

            {{ sonata_block_render_event('sylius.shop.cart.summary.before_coupon', {'cart': cart, 'form': form}) }}

            {% include '@SyliusShop/Cart/Summary/_coupon.html.twig' with {'form': form.promotionCoupon} %}

            {{ sonata_block_render_event('sylius.shop.cart.summary.after_coupon', {'cart': cart, 'form': form}) }}
        {% endif %}
        <div class=\"ui hidden divider\"></div>
        {% include '@SyliusShop/Cart/Summary/_update.html.twig' %}
        {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "@SyliusShop/Cart/Summary/_items.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Cart/Summary/_items.html.twig");
    }
}
