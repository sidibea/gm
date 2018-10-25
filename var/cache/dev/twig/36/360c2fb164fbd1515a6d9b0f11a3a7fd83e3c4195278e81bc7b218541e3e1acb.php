<?php

/* @SyliusShop/Product/show.html.twig */
class __TwigTemplate_cb056ec89250fbe9c9b483afa4a692a603ef9a417817e395ede4fecbcf13cab1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Product/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusShop/Product/Show/_breadcrumb.html.twig", "@SyliusShop/Product/show.html.twig", 4)->display($context);
        // line 5
        echo "    <!-- Content Category -->
    <div class=\"relative container-web\">
        <div class=\"container\">
            <div class=\"row \">
                <!-- Sider Bar -->
                <div class=\"col-md-3 relative right-padding-default clear-padding\" id=\"slide-bar-category\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default\">
                        <p class=\"title-siderbar bold\">CATEGORIES</p>
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_taxon_index_by_code", array("code" => "category", "template" => "@SyliusShop/Taxon/_category.html.twig")));
        echo "

                    </div>


                    <!-- End ELement On Sale -->
                    <div class=\"bottom-margin-default banner-siderbar col-md-12 col-sm-12 col-xs-12 clear-padding clearfix\">
                        <div class=\"overfollow-hidden banners-effect5 relative\">
                            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/banner_siderbar-min.png"), "html", null, true);
        echo "\" alt=\"Siderbar\" />
                            <a href=\"#\"></a>
                        </div>
                    </div>
                </div>
                <!-- End Sider Bar Box -->
                <!-- Content Category -->
                <div class=\"col-md-9 relative clear-padding\">
                    <div class=\"col-sm-12 col-xs-12 col-md-1 relative overfollow-hidden clear-padding button-show-sidebar clearfix\">
                        <p onclick=\"showSideBar()\"><span class=\"ti-filter\"></span> Sidebar</p>
                    </div>
                    <!-- Product Content Detail -->
                    <div class=\"top-product-detail relative \">
                        <div class=\"row\">
                            ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_images", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 35, $this->source); })()))));
        echo "

                            ";
        // line 37
        $this->loadTemplate("@SyliusShop/Product/Show/_images.html.twig", "@SyliusShop/Product/show.html.twig", 37)->display($context);
        // line 38
        echo "

                            ";
        // line 40
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_images", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 40, $this->source); })()))));
        echo "

                            <!-- Info Top Product -->
                            <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                <div class=\"name-ranking-product relative bottom-padding-15-default bottom-margin-15-default border no-border-r no-border-t no-border-l\">
                                    ";
        // line 45
        $this->loadTemplate("@SyliusShop/Product/Show/_header.html.twig", "@SyliusShop/Product/show.html.twig", 45)->display($context);
        // line 46
        echo "
                                    ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_product_header", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 47, $this->source); })()))));
        echo "

                                    <div class=\" ranking-color \">
                                        ";
        // line 50
        $this->loadTemplate("@SyliusShop/Product/Show/_reviews.html.twig", "@SyliusShop/Product/show.html.twig", 50)->display($context);
        // line 51
        echo "                                        ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_reviews", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 51, $this->source); })()))));
        echo "
                                    </div>
                                    <p class=\"clearfix price-product\">
                                        ";
        // line 54
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 54, $this->source); })()), "variants", array()), "empty", array(), "method")) {
            // line 55
            echo "                                            ";
            $this->loadTemplate("@SyliusShop/Product/Show/_price.html.twig", "@SyliusShop/Product/show.html.twig", 55)->display($context);
            // line 56
            echo "                                        ";
        }
        // line 57
        echo "                                        ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_price", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 57, $this->source); })()))));
        echo "
                                    </p>
                                    <div class=\"product-code clearfix full-width\">
                                        <p class=\"float-left relative\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item_code"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 60, $this->source); })()), "code", array()), "html", null, true);
        echo "</p>
                                        <p class=\"float-left clear-margin\">Availability:
                                            ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 62, $this->source); })()), "variants", array()), "empty", array(), "method") || (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 62, $this->source); })()), "simple", array()) &&  !call_user_func_array($this->env->getFunction('sylius_inventory_is_available')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 62, $this->source); })()), "variants", array()), "first", array())))))) {
            // line 63
            echo "                                            ";
            $this->loadTemplate("@SyliusShop/Product/Show/_outOfStock.html.twig", "@SyliusShop/Product/show.html.twig", 63)->display($context);
            // line 64
            echo "                                            ";
        } else {
            // line 65
            echo "                                                ";
            $this->loadTemplate("@SyliusShop/Product/Show/_inStock.html.twig", "@SyliusShop/Product/show.html.twig", 65)->display($context);
            // line 66
            echo "
                                            ";
        }
        // line 68
        echo "                                        </p>
                                    </div>
                                </div>
                                <div class=\"relative intro-product-detail bottom-margin-15-default bottom-padding-15-default border no-border-r no-border-t no-border-l\">
                                    <p class=\"clear-margin\">
                                        ";
        // line 73
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 73, $this->source); })()), "shortDescription", array()))) {
            // line 74
            echo "                                            <span class=\"text-red\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_description"), "html", null, true);
            echo "</span>
                                        ";
        } else {
            // line 76
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 76, $this->source); })()), "shortDescription", array()), "html", null, true);
            echo "

                                        ";
        }
        // line 79
        echo "                                    </p>
                                    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.after_description", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 80, $this->source); })()))));
        echo "
                                </div>
                                ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 82, $this->source); })()), "variants", array()), "empty", array(), "method") || (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 82, $this->source); })()), "simple", array()) &&  !call_user_func_array($this->env->getFunction('sylius_inventory_is_available')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 82, $this->source); })()), "variants", array()), "first", array())))))) {
            // line 83
            echo "                                ";
        } else {
            // line 84
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_cart_add_item", array("template" => "@SyliusShop/Product/Show/_addToCart.html.twig", "productId" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 84, $this->source); })()), "id", array()))));
            echo "
                                ";
        }
        // line 86
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"info-product-detail bottom-margin-default relative\">
                        <div class=\"row\">
                            <div class=\"col-md-12 relative overfollow-hidden\">
                                ";
        // line 92
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_tabs", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 92, $this->source); })()))));
        echo "
                                ";
        // line 93
        $this->loadTemplate("@SyliusShop/Product/Show/_tabs.html.twig", "@SyliusShop/Product/show.html.twig", 93)->display($context);
        // line 94
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 98
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_associations", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 98, $this->source); })()))));
        echo "

                    <div class=\"slide-product-bottom relative\">
                        <div class=\"row\">
                            ";
        // line 102
        $this->loadTemplate("@SyliusShop/Product/Show/_associations.html.twig", "@SyliusShop/Product/show.html.twig", 102)->display($context);
        // line 103
        echo "
                        </div>
                    </div>
                    <!-- End Product Content Category -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Sider Bar -->
    <!-- Support -->
    <div class=\" support-box full-width bg-red support_box_v2\">
        <div class=\"container-web\">
            <div class=\" container\">
                <div class=\"row\">
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_free_ship_white-min.png"), "html", null, true);
        echo "\" alt=\"Icon Free Ship\" class=\"absolute\" />
                        <p>free shipping</p>
                        <p>on order over \$500</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_support_white-min.png"), "html", null, true);
        echo "\" alt=\"Icon Supports\" class=\"absolute\">
                        <p>support</p>
                        <p>life time support 24/7</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_patner_white-min.png"), "html", null, true);
        echo "\" alt=\"Icon partner\" class=\"absolute\">
                        <p>help partner</p>
                        <p>help all aspects</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_phone_table_white-min.png"), "html", null, true);
        echo "\" alt=\"Icon Phone Tablet\" class=\"absolute\">
                        <p>contact with us</p>
                        <p>+07 (0) 7782 9137</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        echo "
";
        // line 147
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 147,  309 => 146,  300 => 145,  281 => 133,  273 => 128,  265 => 123,  257 => 118,  240 => 103,  238 => 102,  231 => 98,  225 => 94,  223 => 93,  219 => 92,  211 => 86,  205 => 84,  202 => 83,  200 => 82,  195 => 80,  192 => 79,  185 => 76,  179 => 74,  177 => 73,  170 => 68,  166 => 66,  163 => 65,  160 => 64,  157 => 63,  155 => 62,  148 => 60,  141 => 57,  138 => 56,  135 => 55,  133 => 54,  126 => 51,  124 => 50,  118 => 47,  115 => 46,  113 => 45,  105 => 40,  101 => 38,  99 => 37,  94 => 35,  77 => 21,  66 => 13,  56 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
{% include '@SyliusShop/Product/Show/_breadcrumb.html.twig' %}
    <!-- Content Category -->
    <div class=\"relative container-web\">
        <div class=\"container\">
            <div class=\"row \">
                <!-- Sider Bar -->
                <div class=\"col-md-3 relative right-padding-default clear-padding\" id=\"slide-bar-category\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default\">
                        <p class=\"title-siderbar bold\">CATEGORIES</p>
                        {{ render(url('sylius_shop_partial_taxon_index_by_code', {'code': 'category', 'template': '@SyliusShop/Taxon/_category.html.twig'})) }}

                    </div>


                    <!-- End ELement On Sale -->
                    <div class=\"bottom-margin-default banner-siderbar col-md-12 col-sm-12 col-xs-12 clear-padding clearfix\">
                        <div class=\"overfollow-hidden banners-effect5 relative\">
                            <img src=\"{{ asset('bundles/syliusshop/img/banner_siderbar-min.png') }}\" alt=\"Siderbar\" />
                            <a href=\"#\"></a>
                        </div>
                    </div>
                </div>
                <!-- End Sider Bar Box -->
                <!-- Content Category -->
                <div class=\"col-md-9 relative clear-padding\">
                    <div class=\"col-sm-12 col-xs-12 col-md-1 relative overfollow-hidden clear-padding button-show-sidebar clearfix\">
                        <p onclick=\"showSideBar()\"><span class=\"ti-filter\"></span> Sidebar</p>
                    </div>
                    <!-- Product Content Detail -->
                    <div class=\"top-product-detail relative \">
                        <div class=\"row\">
                            {{ sonata_block_render_event('sylius.shop.product.show.before_images', {'product': product}) }}

                            {% include '@SyliusShop/Product/Show/_images.html.twig' %}


                            {{ sonata_block_render_event('sylius.shop.product.show.after_images', {'product': product}) }}

                            <!-- Info Top Product -->
                            <div class=\"col-md-5 col-sm-12 col-xs-12\">
                                <div class=\"name-ranking-product relative bottom-padding-15-default bottom-margin-15-default border no-border-r no-border-t no-border-l\">
                                    {% include '@SyliusShop/Product/Show/_header.html.twig' %}

                                    {{ sonata_block_render_event('sylius.shop.product.show.after_product_header', {'product': product}) }}

                                    <div class=\" ranking-color \">
                                        {% include '@SyliusShop/Product/Show/_reviews.html.twig' %}
                                        {{ sonata_block_render_event('sylius.shop.product.show.after_reviews', {'product': product}) }}
                                    </div>
                                    <p class=\"clearfix price-product\">
                                        {% if not product.variants.empty() %}
                                            {% include '@SyliusShop/Product/Show/_price.html.twig' %}
                                        {% endif %}
                                        {{ sonata_block_render_event('sylius.shop.product.show.after_price', {'product': product}) }}
                                    </p>
                                    <div class=\"product-code clearfix full-width\">
                                        <p class=\"float-left relative\">{{ 'sylius.ui.item_code'|trans }}: {{ product.code }}</p>
                                        <p class=\"float-left clear-margin\">Availability:
                                            {% if product.variants.empty() or product.simple and not sylius_inventory_is_available(product.variants.first) %}
                                            {% include '@SyliusShop/Product/Show/_outOfStock.html.twig' %}
                                            {% else %}
                                                {% include '@SyliusShop/Product/Show/_inStock.html.twig' %}

                                            {% endif %}
                                        </p>
                                    </div>
                                </div>
                                <div class=\"relative intro-product-detail bottom-margin-15-default bottom-padding-15-default border no-border-r no-border-t no-border-l\">
                                    <p class=\"clear-margin\">
                                        {% if product.shortDescription is empty %}
                                            <span class=\"text-red\">{{ 'sylius.ui.no_description'|trans }}</span>
                                        {% else %}
                                            {{ product.shortDescription }}

                                        {% endif %}
                                    </p>
                                    {{ sonata_block_render_event('sylius.shop.product.show.after_description', {'product': product}) }}
                                </div>
                                {% if product.variants.empty() or product.simple and not sylius_inventory_is_available(product.variants.first) %}
                                {% else %}
                                    {{ render(url('sylius_shop_partial_cart_add_item', {'template': '@SyliusShop/Product/Show/_addToCart.html.twig', 'productId': product.id})) }}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"info-product-detail bottom-margin-default relative\">
                        <div class=\"row\">
                            <div class=\"col-md-12 relative overfollow-hidden\">
                                {{ sonata_block_render_event('sylius.shop.product.show.before_tabs', {'product': product}) }}
                                {% include '@SyliusShop/Product/Show/_tabs.html.twig' %}

                            </div>
                        </div>
                    </div>
                    {{ sonata_block_render_event('sylius.shop.product.show.before_associations', {'product': product}) }}

                    <div class=\"slide-product-bottom relative\">
                        <div class=\"row\">
                            {% include '@SyliusShop/Product/Show/_associations.html.twig' %}

                        </div>
                    </div>
                    <!-- End Product Content Category -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Sider Bar -->
    <!-- Support -->
    <div class=\" support-box full-width bg-red support_box_v2\">
        <div class=\"container-web\">
            <div class=\" container\">
                <div class=\"row\">
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_free_ship_white-min.png') }}\" alt=\"Icon Free Ship\" class=\"absolute\" />
                        <p>free shipping</p>
                        <p>on order over \$500</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_support_white-min.png') }}\" alt=\"Icon Supports\" class=\"absolute\">
                        <p>support</p>
                        <p>life time support 24/7</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_patner_white-min.png') }}\" alt=\"Icon partner\" class=\"absolute\">
                        <p>help partner</p>
                        <p>help all aspects</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_phone_table_white-min.png') }}\" alt=\"Icon Phone Tablet\" class=\"absolute\">
                        <p>contact with us</p>
                        <p>+07 (0) 7782 9137</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}



{% block javascripts %}

{{ parent() }}


{% endblock %}
", "@SyliusShop/Product/show.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/show.html.twig");
    }
}
