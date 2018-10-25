<?php

/* @SyliusShop/Cart/_widget.html.twig */
class __TwigTemplate_f9e3618840d9e129945617d88eafccf3082a363a00cb82cc020b649be495fc98 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/_widget.html.twig", 1);
        // line 2
        echo "
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_widget_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 3, $this->source); })()))));
        echo "


<div class=\"clearfix cart-website absolute\" onclick=\"showCartBoxDetail()\">
    <img alt=\"Icon Cart\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_cart.png"), "html", null, true);
        echo "\" />
    <p class=\"count-total-shopping absolute\"> ";
        // line 8
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 8, $this->source); })()), "itemsTotal", array()));
        echo "</p>
</div>
";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_widget_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 10, $this->source); })()))));
        echo "

<div class=\"cart-detail-header border\">
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 13, $this->source); })()), "empty", array())) {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_cart_is_empty"), "html", null, true);
            echo ".
    ";
        } else {
            // line 16
            echo "    <div class=\"relative\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 17, $this->source); })()), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "
            <div class=\"product-cart-son clearfix\">

                <div class=\"info-product-cart float-left\">
                    <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", array()), "html", null, true);
                echo "</a></p>
                    <p class=\"clearfix price-product\">";
                // line 23
                echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, $context["item"], "unitPrice", array()));
                echo " <span class=\"total-product-cart-son\">(x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()), "html", null, true);
                echo ")</span></p>
                </div>
            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        <div class=\"product-cart-son\">
            <div class=\"image-product-cart float-left center-vertical-image\">
                <a href=\"#\"><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/product_image_7-min.png"), "html", null, true);
            echo "\" alt=\"\" /></a>
            </div>
            <div class=\"info-product-cart float-left\">
                <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">Voyage Yoga Bag</a></p>
                <p class=\"clearfix price-product\">\$350 <span class=\"total-product-cart-son\">(x1)</span></p>
            </div>
        </div>
    </div>

    <div class=\"relative border no-border-l no-border-r total-cart-header\">
        <p class=\"bold clear-margin\">Subtotal:</p>
        <p class=\" clear-margin bold\">\$700</p>
    </div>
    <div class=\"relative btn-cart-header\">
        <a href=\"#\" class=\"uppercase bold animate-default\">view cart</a>
        <a href=\"#\" class=\"uppercase bold button-hover-red animate-default\">checkout</a>
    </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_popup_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 49, $this->source); })()))));
        echo "
</div>
<div class=\"mask-search absolute clearfix\" onclick=\"hiddenBoxSearchMobile()\"></div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  119 => 48,  98 => 30,  94 => 28,  81 => 23,  77 => 22,  71 => 18,  67 => 17,  64 => 16,  58 => 14,  56 => 13,  50 => 10,  45 => 8,  41 => 7,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.before_widget_content', {'cart': cart}) }}


<div class=\"clearfix cart-website absolute\" onclick=\"showCartBoxDetail()\">
    <img alt=\"Icon Cart\" src=\"{{ asset('bundles/syliusshop/img/icon_cart.png') }}\" />
    <p class=\"count-total-shopping absolute\"> {{ money.convertAndFormat(cart.itemsTotal) }}</p>
</div>
{{ sonata_block_render_event('sylius.shop.partial.cart.summary.after_widget_content', {'cart': cart}) }}

<div class=\"cart-detail-header border\">
    {% if cart.empty %}
    {{ 'sylius.ui.your_cart_is_empty'|trans }}.
    {% else %}
    <div class=\"relative\">
        {% for item in cart.items %}

            <div class=\"product-cart-son clearfix\">

                <div class=\"info-product-cart float-left\">
                    <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">{{ item.product }}</a></p>
                    <p class=\"clearfix price-product\">{{ money.convertAndFormat(item.unitPrice) }} <span class=\"total-product-cart-son\">(x{{ item.quantity }})</span></p>
                </div>
            </div>

        {% endfor %}
        <div class=\"product-cart-son\">
            <div class=\"image-product-cart float-left center-vertical-image\">
                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/product_image_7-min.png') }}\" alt=\"\" /></a>
            </div>
            <div class=\"info-product-cart float-left\">
                <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">Voyage Yoga Bag</a></p>
                <p class=\"clearfix price-product\">\$350 <span class=\"total-product-cart-son\">(x1)</span></p>
            </div>
        </div>
    </div>

    <div class=\"relative border no-border-l no-border-r total-cart-header\">
        <p class=\"bold clear-margin\">Subtotal:</p>
        <p class=\" clear-margin bold\">\$700</p>
    </div>
    <div class=\"relative btn-cart-header\">
        <a href=\"#\" class=\"uppercase bold animate-default\">view cart</a>
        <a href=\"#\" class=\"uppercase bold button-hover-red animate-default\">checkout</a>
    </div>
    {% endif %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.after_popup_content', {'cart': cart}) }}
</div>
<div class=\"mask-search absolute clearfix\" onclick=\"hiddenBoxSearchMobile()\"></div>", "@SyliusShop/Cart/_widget.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Cart/_widget.html.twig");
    }
}
