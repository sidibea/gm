<?php

/* @SyliusShop/Homepage/index.html.twig */
class __TwigTemplate_387191d834849d6458854f7a94e4dfacd5e9932fbe11493a68942378e4a3735b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Homepage/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

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
        echo "    <!-- Menu & Slide -->
    <div class=\"clearfix container-web relative\">
        <div class=\" container relative\">
            <div class=\"row\">
                <div class=\"clearfix relative menu-slide clear-padding bottom-margin-default\">
                    <div class=\"clearfix menu-web relative\">

                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_taxon_index_by_code", array("code" => "category", "template" => "@SyliusShop/Taxon/_horizontalMenu.html.twig")));
        echo "
                    <div class=\"clearfix\"></div>
                    </div>


                    <!-- Slide -->
                    <div class=\"clearfix slide-box-home slide-v1 relative\">
                        <div class=\"clearfix slide-home owl-carousel owl-theme\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_index_by_section_code", array("sectionCode" => "slider", "template" => "@SyliusShop/_slider.html.twig")));
        echo "

                        </div>
                    </div>
                    <div class=\" box-banner-small-v1 box-banner-small\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_index_by_section_code", array("sectionCode" => "small_banner", "template" => "@SyliusShop/_banner.html.twig")));
        echo "


                    </div>
                </div>
                <!-- End Menu & Slide -->

            </div>
        </div>
    </div>

<div class=\"relative clearfix full-width\">



    <!-- Content Product -->
    <div class=\"clearfix box-product full-width top-padding-default bg-gray\">
        <div class=\"clearfix container-web\">
            <div class=\" container\">
                <div class=\"row\">
                    <!-- Title Product -->
                    <div class=\"clearfix title-box full-width bottom-margin-default border bg-white\">
                        <div class=\"clearfix name-title-box title-hot-bg relative\">
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_percent.png"), "html", null, true);
        echo "\" class=\"absolute\" alt=\"Latest\" />
                            <p>latest product</p>
                        </div>
                        <div class=\"clearfix menu-title-box bold uppercase\">
                            <ul>
                                <li><a onclick=\"showBoxCateHomeByID('#fashion','.good-deal-product')\" href=\"javascript:;\">Fashion</a></li>
                                <li><a onclick=\"showBoxCateHomeByID('#footwear','.good-deal-product')\" href=\"javascript:;\">Footwear</a></li>
                                <li><a onclick=\"showBoxCateHomeByID('#electronics','.good-deal-product')\" href=\"javascript:;\">Electronics</a></li>
                                <li><a onclick=\"showBoxCateHomeByID('#jewelery','.good-deal-product')\" href=\"javascript:;\">Jewelery</a></li>
                                <li><a onclick=\"showBoxCateHomeByID('#home','.good-deal-product')\" href=\"javascript:;\">Home & offices</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix content-product-box bottom-margin-default full-width\">
                    <div class=\"row\">
                        <div class=\"relative\">
                            <div class=\"good-deal-product animate-default active-box-category hidden-content-box\" id=\"fashion\">

                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">

                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 8, "code" => "fashion", "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "

                                </div>
                            </div>
                            <div class=\"good-deal-product animate-default hidden-content-box\" id=\"footwear\">
                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 8, "code" => "footwear", "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "

                                    <!-- End Product Son -->
                                </div>
                            </div>
                            <div class=\"good-deal-product animate-default hidden-content-box\" id=\"electronics\">
                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 8, "code" => "electronic", "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "

                                </div>
                            </div>
                            <div class=\"good-deal-product animate-default hidden-content-box\" id=\"jewelery\">
                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 8, "code" => "jewelery", "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "

                                    <!-- End Product Son -->
                                </div>
                            </div>
                            <div class=\"good-deal-product animate-default hidden-content-box\" id=\"home\">
                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">
                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 8, "code" => "home", "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "

                                    <!-- End Product Son -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Product -->
    <div class=\"row\">&nbsp;</div>


    <div class=\" container-web\">
        <div class=\" container banner_full_width\">
            <div class=\"row overfollow-hidden banners-effect5 relative\">
                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_render", array("code" => "banner_pub", "width" => "230")));
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">&nbsp;</div>

    <!-- Product Box -->
    <div class=\" container-web\">
        <div class=\" container\">
            <div class=\"row\">
                <div class=\"clearfix title-box full-width border\">
                    <div class=\"clearfix name-title-box title-category title-jungle-green-bg relative\">
                        <img alt=\"Icon Mobile & Tablet\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_mobile.png"), "html", null, true);
        echo "\" class=\"absolute\" />
                        <p>Electronics</p>
                    </div>
                    <div class=\"clearfix menu-title-box bold uppercase\">
                        <ul>
                            <li><a onclick=\"showBoxCateHomeByID('#smart-phone','.box-mobile-content')\" href=\"javascript:;\">Smart phone</a></li>
                            <li><a onclick=\"showBoxCateHomeByID('#tablet','.box-mobile-content')\" href=\"javascript:;\">Tablet</a></li>
                            <li><a onclick=\"showBoxCateHomeByID('#smart-watch','.box-mobile-content')\" href=\"javascript:;\">Computers & Accessories </a></li>
                            <li><a onclick=\"showBoxCateHomeByID('#case','.box-mobile-content')\" href=\"javascript:;\">TV</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"display-table bottom-margin-default full-width\">
                    <div class=\"clearfix clear-padding list-logo-category list-logo-category-v1 float-left border no-border-t no-border-r\">
                        <ul>
                            <li><a href=\"#\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_3.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_4.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_5.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_6.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_1.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_2.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a></li>
                        </ul>
                    </div>
                    <div class=\" banner-category float-left relative effect-bubba zoom-image-hover\">
                        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_render", array("code" => "mobile_banner")));
        echo "

                    </div>
                    <div class=\"clearfix list-products-category list-products-category-v1 float-left relative\">
                        <div class=\"box-mobile-content border-collapsed-box animate-default hidden-content-box active-box-category\" id=\"smart-phone\">
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 4, "code" => "Smartphone", "template" => "@SyliusShop/Product/_product.html.twig")));
        echo "

                        </div>
                        <div class=\"box-mobile-content border-collapsed-box animate-default hidden-content-box\" id=\"tablet\">
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 4, "code" => "Tablets", "template" => "@SyliusShop/Product/_product.html.twig")));
        echo "

                        </div>
                        <div class=\"box-mobile-content border-collapsed-box animate-default hidden-content-box\" id=\"smart-watch\">
                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 4, "code" => "Computer", "template" => "@SyliusShop/Product/_product.html.twig")));
        echo "

                        </div>
                        <div class=\"box-mobile-content border-collapsed-box animate-default hidden-content-box\" id=\"case\">
                            ";
        // line 170
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 4, "code" => "TV", "template" => "@SyliusShop/Product/_product.html.twig")));
        echo "

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Box -->

    <!-- Product Category Percent 2 -->
    <div class=\" full-width category-percent-two bottom-margin-default\">
        <div class=\"clearfix container-web\">
            <div class=\" container\">
                <div class=\"row\">
                    <div class=\" clearfix content-left col-md-6 col-sm-6\">
                        <!-- Title Product -->
                        <div class=\"clearfix title-box full-width border\">
                            <div class=\"clearfix name-title-box title-category title-gold-bg relative\">
                                <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_fashion.png"), "html", null, true);
        echo "\" alt=\"Icon Fashion\" class=\"absolute\" />
                                <p>fashion</p>
                            </div>
                            <div class=\"clearfix menu-title-box\">
                                <p class=\"view-all-product-category title-hover-red\"><a href=\"#\" class=\"animate-default\">view all</a></p>
                            </div>
                        </div>
                        <div class=\" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative\">
                            ";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_render", array("code" => "fashion_banner")));
        echo "
                        </div>
                        <!-- Content Product Box -->
                        <div class=\"clearfix product-percent-content border-collapsed-box full-width\">
                            ";
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 6, "code" => "fashion", "template" => "@SyliusShop/Product/_product.html.twig")));
        echo "

                        </div>
                    </div>
                    <div class=\" clearfix content-right col-md-6 col-sm-6\">
                        <!-- Title Product -->
                        <div class=\"clearfix title-box full-width border\">
                            <div class=\"clearfix name-title-box title-category title-violet-bg relative\">
                                <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_health.png"), "html", null, true);
        echo "\" alt=\"Icon Health & Beauty\" class=\"absolute\" />
                                <p>health & beauty</p>
                            </div>
                            <div class=\"clearfix menu-title-box\">
                                <p class=\"view-all-product-category title-hover-red\"><a href=\"#\" class=\"animate-default\">view all</a></p>
                            </div>
                        </div>
                        <div class=\" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative\">
                            ";
        // line 217
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_render", array("code" => "beauty_banner")));
        echo "
                        </div>
                        <!-- Content Product Box -->
                        <div class=\"clearfix product-percent-content border-collapsed-box full-width\">
                            ";
        // line 221
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 6, "code" => "beauty", "template" => "@SyliusShop/Product/_product.html.twig")));
        echo "

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Category Percent 2 -->

    <!-- Slide Logo Brand -->
    <div class=\" slide-brand-box full-width bottom-margin-default\">
        <div class=\"clearfix container-web relative\">
            <div class=\" container relative\">
                <div class=\"row\">
                    <div class=\"nav-prev nav-slide-brand\"></div>
                    <div class=\"slide-logo-brand col-md-12 clear-padding relative owl-theme owl-carousel border-collapsed-box\">
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_3.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_7.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_4.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_8.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_5.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_9.png"), "html", null, true);
        echo "\" alt=\"Logo\"></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_6.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_10.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_1.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_11.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_2.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/logo_12.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></div>
                        </div>
                    </div>
                    <div class=\"nav-next nav-slide-brand\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide Brand -->

    <!-- Support -->
    <div class=\" support-box full-width clear-padding bottom-margin-default\">
        <div class=\"container-web clearfix\">
            <div class=\" container border top-padding-default bottom-padding-default\">
                <div class=\"row\">
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_free_ship.png"), "html", null, true);
        echo "\" alt=\"Icon Free Ship\" class=\"absolute\" />
                        <p>free shipping</p>
                        <p>on order over \$500</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_support.png"), "html", null, true);
        echo "\" alt=\"Icon Supports\" class=\"absolute\">
                        <p>support</p>
                        <p>life time support 24/7</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_patner.png"), "html", null, true);
        echo "\" alt=\"Icon partner\" class=\"absolute\">
                        <p>help partner</p>
                        <p>help all aspects</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_phone_big.png"), "html", null, true);
        echo "\" alt=\"Icon Phone Tablet\" class=\"absolute\">
                        <p>contact with us</p>
                        <p>+07 (0) 7782 9137</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Support Box -->

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 305
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 306
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/sync_owl_carousel.js"), "html", null, true);
        echo "\" defer=\"\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 306,  494 => 305,  472 => 291,  464 => 286,  456 => 281,  448 => 276,  429 => 260,  425 => 259,  419 => 256,  415 => 255,  409 => 252,  405 => 251,  399 => 248,  395 => 247,  389 => 244,  385 => 243,  379 => 240,  375 => 239,  354 => 221,  347 => 217,  336 => 209,  325 => 201,  318 => 197,  307 => 189,  285 => 170,  278 => 166,  271 => 162,  264 => 158,  256 => 153,  249 => 149,  245 => 148,  241 => 147,  237 => 146,  233 => 145,  229 => 144,  211 => 129,  196 => 117,  175 => 99,  164 => 91,  154 => 84,  143 => 76,  133 => 69,  108 => 47,  82 => 24,  74 => 19,  63 => 11,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <!-- Menu & Slide -->
    <div class=\"clearfix container-web relative\">
        <div class=\" container relative\">
            <div class=\"row\">
                <div class=\"clearfix relative menu-slide clear-padding bottom-margin-default\">
                    <div class=\"clearfix menu-web relative\">

                        {{ render(url('sylius_shop_partial_taxon_index_by_code', {'code': 'category', 'template': '@SyliusShop/Taxon/_horizontalMenu.html.twig'})) }}
                    <div class=\"clearfix\"></div>
                    </div>


                    <!-- Slide -->
                    <div class=\"clearfix slide-box-home slide-v1 relative\">
                        <div class=\"clearfix slide-home owl-carousel owl-theme\">
                            {{ render(path('bitbag_sylius_cms_plugin_shop_media_index_by_section_code', {'sectionCode' : 'slider', 'template' : '@SyliusShop/_slider.html.twig'})) }}

                        </div>
                    </div>
                    <div class=\" box-banner-small-v1 box-banner-small\">
                        {{ render(path('bitbag_sylius_cms_plugin_shop_media_index_by_section_code', {'sectionCode' : 'small_banner', 'template' : '@SyliusShop/_banner.html.twig'})) }}


                    </div>
                </div>
                <!-- End Menu & Slide -->

            </div>
        </div>
    </div>

<div class=\"relative clearfix full-width\">



    <!-- Content Product -->
    <div class=\"clearfix box-product full-width top-padding-default bg-gray\">
        <div class=\"clearfix container-web\">
            <div class=\" container\">
                <div class=\"row\">
                    <!-- Title Product -->
                    <div class=\"clearfix title-box full-width bottom-margin-default border bg-white\">
                        <div class=\"clearfix name-title-box title-hot-bg relative\">
                            <img src=\"{{ asset('bundles/syliusshop/img/icon_percent.png') }}\" class=\"absolute\" alt=\"Latest\" />
                            <p>latest product</p>
                        </div>
                        <div class=\"clearfix menu-title-box bold uppercase\">
                            <ul>
                                <li><a onclick=\"showBoxCateHomeByID('#fashion','.good-deal-product')\" href=\"javascript:;\">Fashion</a></li>
                                <li><a onclick=\"showBoxCateHomeByID('#footwear','.good-deal-product')\" href=\"javascript:;\">Footwear</a></li>
                                <li><a onclick=\"showBoxCateHomeByID('#electronics','.good-deal-product')\" href=\"javascript:;\">Electronics</a></li>
                                <li><a onclick=\"showBoxCateHomeByID('#jewelery','.good-deal-product')\" href=\"javascript:;\">Jewelery</a></li>
                                <li><a onclick=\"showBoxCateHomeByID('#home','.good-deal-product')\" href=\"javascript:;\">Home & offices</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix content-product-box bottom-margin-default full-width\">
                    <div class=\"row\">
                        <div class=\"relative\">
                            <div class=\"good-deal-product animate-default active-box-category hidden-content-box\" id=\"fashion\">

                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">

                                    {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 8, 'code': 'fashion', 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}

                                </div>
                            </div>
                            <div class=\"good-deal-product animate-default hidden-content-box\" id=\"footwear\">
                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">
                                    {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 8, 'code': 'footwear', 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}

                                    <!-- End Product Son -->
                                </div>
                            </div>
                            <div class=\"good-deal-product animate-default hidden-content-box\" id=\"electronics\">
                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">
                                    {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 8, 'code': 'electronic', 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}

                                </div>
                            </div>
                            <div class=\"good-deal-product animate-default hidden-content-box\" id=\"jewelery\">
                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">
                                    {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 8, 'code': 'jewelery', 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}

                                    <!-- End Product Son -->
                                </div>
                            </div>
                            <div class=\"good-deal-product animate-default hidden-content-box\" id=\"home\">
                                <!-- Product Son -->
                                <div class=\"owl-carousel owl-theme\">
                                    {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 8, 'code': 'home', 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}

                                    <!-- End Product Son -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Product -->
    <div class=\"row\">&nbsp;</div>


    <div class=\" container-web\">
        <div class=\" container banner_full_width\">
            <div class=\"row overfollow-hidden banners-effect5 relative\">
                {{ render(path('bitbag_sylius_cms_plugin_shop_media_render', {'code' : 'banner_pub', 'width' : '230'} )) }}
            </div>
        </div>
    </div>
    <div class=\"row\">&nbsp;</div>

    <!-- Product Box -->
    <div class=\" container-web\">
        <div class=\" container\">
            <div class=\"row\">
                <div class=\"clearfix title-box full-width border\">
                    <div class=\"clearfix name-title-box title-category title-jungle-green-bg relative\">
                        <img alt=\"Icon Mobile & Tablet\" src=\"{{ asset('bundles/syliusshop/img/icon_mobile.png') }}\" class=\"absolute\" />
                        <p>Electronics</p>
                    </div>
                    <div class=\"clearfix menu-title-box bold uppercase\">
                        <ul>
                            <li><a onclick=\"showBoxCateHomeByID('#smart-phone','.box-mobile-content')\" href=\"javascript:;\">Smart phone</a></li>
                            <li><a onclick=\"showBoxCateHomeByID('#tablet','.box-mobile-content')\" href=\"javascript:;\">Tablet</a></li>
                            <li><a onclick=\"showBoxCateHomeByID('#smart-watch','.box-mobile-content')\" href=\"javascript:;\">Computers & Accessories </a></li>
                            <li><a onclick=\"showBoxCateHomeByID('#case','.box-mobile-content')\" href=\"javascript:;\">TV</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"display-table bottom-margin-default full-width\">
                    <div class=\"clearfix clear-padding list-logo-category list-logo-category-v1 float-left border no-border-t no-border-r\">
                        <ul>
                            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/logo_3.png') }}\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/logo_4.png') }}\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/logo_5.png') }}\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/logo_6.png') }}\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/logo_1.png') }}\" alt=\"Logo\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/logo_2.png') }}\" alt=\"Logo\"></a></li>
                        </ul>
                    </div>
                    <div class=\" banner-category float-left relative effect-bubba zoom-image-hover\">
                        {{ render(path('bitbag_sylius_cms_plugin_shop_media_render', {'code' : 'mobile_banner'})) }}

                    </div>
                    <div class=\"clearfix list-products-category list-products-category-v1 float-left relative\">
                        <div class=\"box-mobile-content border-collapsed-box animate-default hidden-content-box active-box-category\" id=\"smart-phone\">
                            {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 4, 'code': 'Smartphone', 'template': '@SyliusShop/Product/_product.html.twig'})) }}

                        </div>
                        <div class=\"box-mobile-content border-collapsed-box animate-default hidden-content-box\" id=\"tablet\">
                            {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 4, 'code': 'Tablets', 'template': '@SyliusShop/Product/_product.html.twig'})) }}

                        </div>
                        <div class=\"box-mobile-content border-collapsed-box animate-default hidden-content-box\" id=\"smart-watch\">
                            {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 4, 'code': 'Computer', 'template': '@SyliusShop/Product/_product.html.twig'})) }}

                        </div>
                        <div class=\"box-mobile-content border-collapsed-box animate-default hidden-content-box\" id=\"case\">
                            {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 4, 'code': 'TV', 'template': '@SyliusShop/Product/_product.html.twig'})) }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Box -->

    <!-- Product Category Percent 2 -->
    <div class=\" full-width category-percent-two bottom-margin-default\">
        <div class=\"clearfix container-web\">
            <div class=\" container\">
                <div class=\"row\">
                    <div class=\" clearfix content-left col-md-6 col-sm-6\">
                        <!-- Title Product -->
                        <div class=\"clearfix title-box full-width border\">
                            <div class=\"clearfix name-title-box title-category title-gold-bg relative\">
                                <img src=\"{{ asset('bundles/syliusshop/img/icon_fashion.png') }}\" alt=\"Icon Fashion\" class=\"absolute\" />
                                <p>fashion</p>
                            </div>
                            <div class=\"clearfix menu-title-box\">
                                <p class=\"view-all-product-category title-hover-red\"><a href=\"#\" class=\"animate-default\">view all</a></p>
                            </div>
                        </div>
                        <div class=\" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative\">
                            {{ render(path('bitbag_sylius_cms_plugin_shop_media_render', {'code' : 'fashion_banner'})) }}
                        </div>
                        <!-- Content Product Box -->
                        <div class=\"clearfix product-percent-content border-collapsed-box full-width\">
                            {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 6, 'code': 'fashion', 'template': '@SyliusShop/Product/_product.html.twig'})) }}

                        </div>
                    </div>
                    <div class=\" clearfix content-right col-md-6 col-sm-6\">
                        <!-- Title Product -->
                        <div class=\"clearfix title-box full-width border\">
                            <div class=\"clearfix name-title-box title-category title-violet-bg relative\">
                                <img src=\"{{ asset('bundles/syliusshop/img/icon_health.png') }}\" alt=\"Icon Health & Beauty\" class=\"absolute\" />
                                <p>health & beauty</p>
                            </div>
                            <div class=\"clearfix menu-title-box\">
                                <p class=\"view-all-product-category title-hover-red\"><a href=\"#\" class=\"animate-default\">view all</a></p>
                            </div>
                        </div>
                        <div class=\" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative\">
                            {{ render(path('bitbag_sylius_cms_plugin_shop_media_render', {'code' : 'beauty_banner'})) }}
                        </div>
                        <!-- Content Product Box -->
                        <div class=\"clearfix product-percent-content border-collapsed-box full-width\">
                            {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 6, 'code': 'beauty', 'template': '@SyliusShop/Product/_product.html.twig'})) }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Category Percent 2 -->

    <!-- Slide Logo Brand -->
    <div class=\" slide-brand-box full-width bottom-margin-default\">
        <div class=\"clearfix container-web relative\">
            <div class=\" container relative\">
                <div class=\"row\">
                    <div class=\"nav-prev nav-slide-brand\"></div>
                    <div class=\"slide-logo-brand col-md-12 clear-padding relative owl-theme owl-carousel border-collapsed-box\">
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_3.png') }}\" alt=\"Logo\"></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_7.png') }}\" alt=\"Logo\"></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_4.png') }}\" alt=\"Logo\"></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_8.png') }}\" alt=\"Logo\"></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_5.png') }}\" alt=\"Logo\"></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_9.png') }}\" alt=\"Logo\"></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_6.png') }}\" alt=\"Logo\" /></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_10.png') }}\" alt=\"Logo\" /></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_1.png') }}\" alt=\"Logo\" /></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_11.png') }}\" alt=\"Logo\" /></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_2.png') }}\" alt=\"Logo\" /></div>
                            <div class=\"clearfix border-collapsed-element relative logo-brand-son\"><img src=\"{{ asset('bundles/syliusshop/img/logo_12.png') }}\" alt=\"Logo\" /></div>
                        </div>
                    </div>
                    <div class=\"nav-next nav-slide-brand\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide Brand -->

    <!-- Support -->
    <div class=\" support-box full-width clear-padding bottom-margin-default\">
        <div class=\"container-web clearfix\">
            <div class=\" container border top-padding-default bottom-padding-default\">
                <div class=\"row\">
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_free_ship.png') }}\" alt=\"Icon Free Ship\" class=\"absolute\" />
                        <p>free shipping</p>
                        <p>on order over \$500</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_support.png') }}\" alt=\"Icon Supports\" class=\"absolute\">
                        <p>support</p>
                        <p>life time support 24/7</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_patner.png') }}\" alt=\"Icon partner\" class=\"absolute\">
                        <p>help partner</p>
                        <p>help all aspects</p>
                    </div>
                    <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_phone_big.png') }}\" alt=\"Icon Phone Tablet\" class=\"absolute\">
                        <p>contact with us</p>
                        <p>+07 (0) 7782 9137</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Support Box -->

</div>
{% endblock %}


{% block scripts %}
    <script src=\"{{ asset('bundles/syliusshop/js/sync_owl_carousel.js') }}\" defer=\"\"></script>

{% endblock %}
", "@SyliusShop/Homepage/index.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Homepage/index.html.twig");
    }
}
