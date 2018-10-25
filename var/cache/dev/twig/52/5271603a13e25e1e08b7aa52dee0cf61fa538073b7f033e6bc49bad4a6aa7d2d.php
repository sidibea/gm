<?php

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_35249f68f766886c2e9fc3680754a2071cb417d7f7878e1deb272c1aba723cc6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sheets' => array($this, 'block_sheets'),
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "locale", array()), 0, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "    ";
        $this->displayBlock('style', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.head"));
        echo "
</head>

<body class=\"pushable\">
    <!-- push menu-->
    <div class=\"pushmenu menu-home5\">
        <div class=\"menu-push\">
            <span class=\"close-left js-close\"><i class=\"fa fa-times f-20\"></i></span>
            <div class=\"clearfix\"></div>
            <form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"/search\">
                <div>
                    <label class=\"screen-reader-text\" for=\"q\"></label>
                    <input type=\"text\" placeholder=\"Search for products\" value=\"\" name=\"q\" id=\"q\" autocomplete=\"off\">
                    <input type=\"hidden\" name=\"type\" value=\"product\">
                    <button type=\"submit\" id=\"searchsubmit\"><i class=\"ion-ios-search-strong\"></i></button>
                </div>
            </form>
            <ul class=\"nav-home5 js-menubar\">
                <li class=\"level1 active dropdown\">
                    <a href=\"#\">Home</a>
                    <span class=\"icon-sub-menu\"></span>
                    <ul class=\"menu-level1 js-open-menu\">
                        <li class=\"level2\"><a href=\"home_v1.html\" title=\"\">Home 1</a></li>
                        <li class=\"level2\"><a href=\"home_v2.html\" title=\"\">Home 2</a></li>
                        <li class=\"level2\"><a href=\"home_v3.html\" title=\"\">Home 3</a></li>
                    </ul>
                </li>
                <li class=\"level1 active dropdown\"><a href=\"#\">Shop</a>
                    <span class=\"icon-sub-menu\"></span>
                    <div class=\"menu-level1 js-open-menu\">
                        <ul class=\"level1\">
                            <li class=\"level2\">
                                <a href=\"#\">Shop Type</a>
                                <ul class=\"menu-level-2\">
                                    <li class=\"level3\"><a href=\"category_v1.html\" title=\"\">Category V1</a></li>
                                    <li class=\"level3\"><a href=\"category_v1_2.html\" title=\"\">Category V1.2</a></li>
                                    <li class=\"level3\"><a href=\"category_v2.html\" title=\"\">Category V2</a></li>
                                    <li class=\"level3\"><a href=\"category_v2_2.html\" title=\"\">Category V2.2</a></li>
                                    <li class=\"level3\"><a href=\"category_v3.html\" title=\"\">Category V3</a></li>
                                    <li class=\"level3\"><a href=\"category_v3_2.html\" title=\"\">Category V3.2</a></li>
                                    <li class=\"level3\"><a href=\"category_v4.html\" title=\"\">Category V4</a></li>
                                    <li class=\"level3\"><a href=\"category_v4_2.html\" title=\"\">Category V4.2</a></li>
                                </ul>
                            </li>
                            <li class=\"level2\">
                                <a href=\"#\">Single Product Type</a>
                                <ul class=\"menu-level-2\">
                                    <li class=\"level3\"><a href=\"product_v1.html\" title=\"\">Product Single 1</a></li>
                                    <li class=\"level3\"><a href=\"product_v2.html\" title=\"\">Product Single 2</a></li>
                                    <li class=\"level3\"><a href=\"product_v3.html\" title=\"\">Product Single 3</a></li>
                                </ul>
                            </li>
                            <li class=\"level2\">
                                <a href=\"#\">Order Page</a>
                                <ul class=\"menu-level-2\">
                                    <li class=\"level3\"><a href=\"cartpage.html\" title=\"\">Cart Page</a></li>
                                    <li class=\"level3\"><a href=\"checkout.html\" title=\"\">Checkout</a></li>
                                    <li class=\"level3\"><a href=\"compare.html\" title=\"\">Compare</a></li>
                                    <li class=\"level3\"><a href=\"quickview.html\" title=\"\">Quickview</a></li>
                                    <li class=\"level3\"><a href=\"trackyourorder.html\">Track Order</a></li>
                                    <li class=\"level3\"><a href=\"wishlist.html\">WishList</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                </li>
                <li class=\"level1\">
                    <a href=\"#\">Pages</a>
                    <span class=\"icon-sub-menu\"></span>
                    <ul class=\"menu-level1 js-open-menu\">
                        <li class=\"level2\"><a href=\"about.html\" title=\"About Us \">About Us </a></li>
                        <li class=\"level2\"><a href=\"contact.html\" title=\"Contact\">Contact</a></li>
                        <li class=\"level2\"><a href=\"404.html\" title=\"404\">404</a></li>
                    </ul>
                </li>
                <li class=\"level1\">
                    <a href=\"#\">Blog</a>
                    <span class=\"icon-sub-menu\"></span>
                    <ul class=\"menu-level1 js-open-menu\">
                        <li class=\"level2\"><a href=\"blog.html\" title=\"Blog Standar\">Blog Category</a></li>
                        <li class=\"level2\"><a href=\"blogdetail.html\" title=\"Blog Gird\">Blog Detail</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Menu Mobile -->
    <div class=\"menu-mobile-left-content\">
        <ul>
            <li><a href=\"#\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_hot.png"), "html", null, true);
        echo "\" alt=\"Icon Hot Deals\" /> <p>Hot Deals</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_food.png"), "html", null, true);
        echo "\" alt=\"Icon Food\" /> <p>Food</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_mobile.png"), "html", null, true);
        echo "\" alt=\"Icon Mobile & Tablet\" /> <p>Mobile & Tablet</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_electric.png"), "html", null, true);
        echo "\" alt=\"Icon Electric Appliances\" /> <p>Electric Appliances</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_computer.png"), "html", null, true);
        echo "\" alt=\"Icon Electronics & Technology\" /> <p>Electronics & Technology</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_fashion.png"), "html", null, true);
        echo "\" alt=\"Icon Fashion\" /> <p>Fashion</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_health.png"), "html", null, true);
        echo "\" alt=\"Icon Health & Beauty\" /> <p>Health & Beauty</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_mother.png"), "html", null, true);
        echo "\" alt=\"Icon Mother & Baby\" /> <p>Mother & Baby</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_book.png"), "html", null, true);
        echo "\" alt=\"Icon Books & Stationery\" /> <p>Books & Stationery</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_tablet.png"), "html", null, true);
        echo "\" alt=\"Icon Home & Life\" /> <p>Home & Life</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_sport.png"), "html", null, true);
        echo "\" alt=\"Icon Sports & Outdoors\" /> <p>Sports & Outdoors</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_auto.png"), "html", null, true);
        echo "\" alt=\"Icon Auto & Moto\" /> <p>Auto & Moto</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_voucher.png"), "html", null, true);
        echo "\" alt=\"Icon Voucher Service\" /> <p>Voucher Service</p></a></li>
        </ul>
    </div>
    <!-- Header Box -->
    <div class=\"wrappage\">
        <header class=\"relative full-width box-shadow\">
            ";
        // line 157
        $this->loadTemplate("@SyliusShop/_header.html.twig", "@SyliusShop/layout.html.twig", 157)->display($context);
        // line 158
        echo "
            ";
        // line 159
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_header"));
        echo "



        </header>

        <!-- Content Box -->
        <div class=\"relative clearfix full-width\">
            <div class=\"container\">
                ";
        // line 168
        $this->loadTemplate("@SyliusShop/_flashes.html.twig", "@SyliusShop/layout.html.twig", 168)->display($context);
        // line 169
        echo "            </div>
            ";
        // line 170
        $this->displayBlock('content', $context, $blocks);
        // line 171
        echo "        </div>

        <!-- Footer Box -->
        <footer class=\"relative full-width\">
            <div class=\" top-footer full-width\">
                <div class=\"clearfix container-web relative\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-9 col-sm-12 clear-padding col-xs-12\">
                                <div class=\"clearfix text-subscribe text-subscribe\">
                                    <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                                    <p>sign up for newsletter</p>
                                    <p>Get updates on discount & counpons.</p>
                                </div>
                                <div class=\"clearfix form-subscribe\">
                                    <input type=\"text\" name=\"email-subscribe\" placeholder=\"Enter your email . . .\">
                                    <button class=\"animate-default button-hover-red\">subscribe</button>
                                </div>
                            </div>
                            <div class=\"clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right\">
                                <a href=\"#\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/social_tw-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Twiter\"></a>
                                <a href=\"#\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/social_fa-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Facebook\"></a>
                                <a href=\"#\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/social_int-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Instagram\"></a>
                                <a href=\"#\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/social_yt-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Youtube\" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix container-web relative\">
                <div class=\" container clear-padding\">
                    <div class=\"row\">
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>my account</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">My Account</a></li>
                                <li><a href=\"#\">Login</a></li>
                                <li><a href=\"#\">My Cart</a></li>
                                <li><a href=\"#\">My Wishlist</a></li>
                                <li><a href=\"#\">My Compare</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>information</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Orders History</a></li>
                                <li><a href=\"#\">My Wishlist</a></li>
                                <li><a href=\"#\">Privacy Policy</a></li>
                                <li><a href=\"#\">Site Map</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>our services</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Product Recall</a></li>
                                <li><a href=\"#\">Gift Vouchers</a></li>
                                <li><a href=\"#\">Returns And Exchanges</a></li>
                                <li><a href=\"#\">Shipping Options</a></li>
                                <li><a href=\"#\">Terms Of Use</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>contact us</p>
                            <ul class=\"icon-footer\">
                                <li><i class=\"fa fa-home\" aria-hidden=\"true\"></i> 262 Milacina Mrest, Behansed, Paris</li>
                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> contact@yourcompany.com</li>
                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 070-7782-9137</li>
                                <li><i class=\"fa fa-fax\" aria-hidden=\"true\"></i> 070-7782-9138</li>
                                <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 09:00 AM - 18:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\" bottom-footer full-width\">
                <div class=\"clearfix container-web\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-7 clear-padding copyright\">
                                <p>Copyright © 2018 by Ginco Group. All Rights Reserved. <span class=\"float-right\">Designed by: <a href=\"\">InfoSys</a> </span></p>
                            </div>
                            <div class=\"clearfix footer-icon-bottom col-md-5 float-right clear-padding\">
                                <div class=\"icon_logo_footer float-right\">
                                    <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/image_payment_footer-min.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>

    <!-- End Footer Box -->
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/bootstrap.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/multirange.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/slick.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
";
        // line 274
        $this->displayBlock('scripts', $context, $blocks);
        // line 275
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/owl.carousel.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/owl.carousel.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/scripts.js"), "html", null, true);
        echo "\" defer=\"\"></script>

    ";
        // line 279
        $this->displayBlock('javascripts', $context, $blocks);
        // line 284
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ginco Marketplace";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/icon-font-linea.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/multirange.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/effect.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/product.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/slick-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/category.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/cartpage.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/contact.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/owl.carousel.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/home.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/responsive.css"), "html", null, true);
        echo "\">
    ";
        // line 40
        $this->displayBlock('sheets', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.stylesheets"));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        // line 41
        echo "        ";
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "@SyliusShop/layout.html.twig", 41)->display(array_merge($context, array("path" => "assets/shop/css/style.css")));
        // line 42
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 274
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 279
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 280
        echo "        ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "@SyliusShop/layout.html.twig", 280)->display(array_merge($context, array("path" => "assets/shop/js/app.js")));
        // line 281
        echo "
        ";
        // line 282
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.javascripts"));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 282,  636 => 281,  633 => 280,  624 => 279,  606 => 274,  588 => 170,  571 => 47,  560 => 42,  557 => 41,  548 => 40,  536 => 45,  533 => 44,  531 => 40,  527 => 39,  523 => 38,  518 => 36,  514 => 35,  510 => 34,  506 => 33,  502 => 32,  498 => 31,  494 => 30,  490 => 29,  486 => 28,  482 => 27,  478 => 26,  474 => 25,  470 => 24,  466 => 23,  462 => 22,  458 => 21,  451 => 16,  442 => 15,  432 => 13,  423 => 12,  405 => 8,  393 => 284,  391 => 279,  386 => 277,  382 => 276,  377 => 275,  375 => 274,  371 => 273,  367 => 272,  363 => 271,  359 => 270,  341 => 255,  277 => 194,  273 => 193,  269 => 192,  265 => 191,  243 => 171,  241 => 170,  238 => 169,  236 => 168,  224 => 159,  221 => 158,  219 => 157,  210 => 151,  206 => 150,  202 => 149,  198 => 148,  194 => 147,  190 => 146,  186 => 145,  182 => 144,  178 => 143,  174 => 142,  170 => 141,  166 => 140,  162 => 139,  69 => 49,  66 => 48,  63 => 47,  61 => 15,  58 => 14,  56 => 12,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"{{ app.request.locale|slice(0, 2) }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block title %}Ginco Marketplace{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/icon-font-linea.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/multirange.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/bootstrap-theme.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/themify-icons.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/style.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/effect.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/product.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/slick.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/slick-theme.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/category.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/cartpage.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/contact.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/owl.carousel.min.css') }}\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/home.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/responsive.css') }}\">
    {% block sheets %}
        {% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'assets/shop/css/style.css'} %}

    {% endblock %}

        {{ sonata_block_render_event('sylius.shop.layout.stylesheets') }}
    {% endblock %}
    {% block style %}{% endblock %}

    {{ sonata_block_render_event('sylius.shop.layout.head') }}
</head>

<body class=\"pushable\">
    <!-- push menu-->
    <div class=\"pushmenu menu-home5\">
        <div class=\"menu-push\">
            <span class=\"close-left js-close\"><i class=\"fa fa-times f-20\"></i></span>
            <div class=\"clearfix\"></div>
            <form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"/search\">
                <div>
                    <label class=\"screen-reader-text\" for=\"q\"></label>
                    <input type=\"text\" placeholder=\"Search for products\" value=\"\" name=\"q\" id=\"q\" autocomplete=\"off\">
                    <input type=\"hidden\" name=\"type\" value=\"product\">
                    <button type=\"submit\" id=\"searchsubmit\"><i class=\"ion-ios-search-strong\"></i></button>
                </div>
            </form>
            <ul class=\"nav-home5 js-menubar\">
                <li class=\"level1 active dropdown\">
                    <a href=\"#\">Home</a>
                    <span class=\"icon-sub-menu\"></span>
                    <ul class=\"menu-level1 js-open-menu\">
                        <li class=\"level2\"><a href=\"home_v1.html\" title=\"\">Home 1</a></li>
                        <li class=\"level2\"><a href=\"home_v2.html\" title=\"\">Home 2</a></li>
                        <li class=\"level2\"><a href=\"home_v3.html\" title=\"\">Home 3</a></li>
                    </ul>
                </li>
                <li class=\"level1 active dropdown\"><a href=\"#\">Shop</a>
                    <span class=\"icon-sub-menu\"></span>
                    <div class=\"menu-level1 js-open-menu\">
                        <ul class=\"level1\">
                            <li class=\"level2\">
                                <a href=\"#\">Shop Type</a>
                                <ul class=\"menu-level-2\">
                                    <li class=\"level3\"><a href=\"category_v1.html\" title=\"\">Category V1</a></li>
                                    <li class=\"level3\"><a href=\"category_v1_2.html\" title=\"\">Category V1.2</a></li>
                                    <li class=\"level3\"><a href=\"category_v2.html\" title=\"\">Category V2</a></li>
                                    <li class=\"level3\"><a href=\"category_v2_2.html\" title=\"\">Category V2.2</a></li>
                                    <li class=\"level3\"><a href=\"category_v3.html\" title=\"\">Category V3</a></li>
                                    <li class=\"level3\"><a href=\"category_v3_2.html\" title=\"\">Category V3.2</a></li>
                                    <li class=\"level3\"><a href=\"category_v4.html\" title=\"\">Category V4</a></li>
                                    <li class=\"level3\"><a href=\"category_v4_2.html\" title=\"\">Category V4.2</a></li>
                                </ul>
                            </li>
                            <li class=\"level2\">
                                <a href=\"#\">Single Product Type</a>
                                <ul class=\"menu-level-2\">
                                    <li class=\"level3\"><a href=\"product_v1.html\" title=\"\">Product Single 1</a></li>
                                    <li class=\"level3\"><a href=\"product_v2.html\" title=\"\">Product Single 2</a></li>
                                    <li class=\"level3\"><a href=\"product_v3.html\" title=\"\">Product Single 3</a></li>
                                </ul>
                            </li>
                            <li class=\"level2\">
                                <a href=\"#\">Order Page</a>
                                <ul class=\"menu-level-2\">
                                    <li class=\"level3\"><a href=\"cartpage.html\" title=\"\">Cart Page</a></li>
                                    <li class=\"level3\"><a href=\"checkout.html\" title=\"\">Checkout</a></li>
                                    <li class=\"level3\"><a href=\"compare.html\" title=\"\">Compare</a></li>
                                    <li class=\"level3\"><a href=\"quickview.html\" title=\"\">Quickview</a></li>
                                    <li class=\"level3\"><a href=\"trackyourorder.html\">Track Order</a></li>
                                    <li class=\"level3\"><a href=\"wishlist.html\">WishList</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                </li>
                <li class=\"level1\">
                    <a href=\"#\">Pages</a>
                    <span class=\"icon-sub-menu\"></span>
                    <ul class=\"menu-level1 js-open-menu\">
                        <li class=\"level2\"><a href=\"about.html\" title=\"About Us \">About Us </a></li>
                        <li class=\"level2\"><a href=\"contact.html\" title=\"Contact\">Contact</a></li>
                        <li class=\"level2\"><a href=\"404.html\" title=\"404\">404</a></li>
                    </ul>
                </li>
                <li class=\"level1\">
                    <a href=\"#\">Blog</a>
                    <span class=\"icon-sub-menu\"></span>
                    <ul class=\"menu-level1 js-open-menu\">
                        <li class=\"level2\"><a href=\"blog.html\" title=\"Blog Standar\">Blog Category</a></li>
                        <li class=\"level2\"><a href=\"blogdetail.html\" title=\"Blog Gird\">Blog Detail</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Menu Mobile -->
    <div class=\"menu-mobile-left-content\">
        <ul>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_hot.png') }}\" alt=\"Icon Hot Deals\" /> <p>Hot Deals</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_food.png') }}\" alt=\"Icon Food\" /> <p>Food</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_mobile.png') }}\" alt=\"Icon Mobile & Tablet\" /> <p>Mobile & Tablet</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_electric.png') }}\" alt=\"Icon Electric Appliances\" /> <p>Electric Appliances</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_computer.png') }}\" alt=\"Icon Electronics & Technology\" /> <p>Electronics & Technology</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_fashion.png') }}\" alt=\"Icon Fashion\" /> <p>Fashion</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_health.png') }}\" alt=\"Icon Health & Beauty\" /> <p>Health & Beauty</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_mother.png') }}\" alt=\"Icon Mother & Baby\" /> <p>Mother & Baby</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_book.png') }}\" alt=\"Icon Books & Stationery\" /> <p>Books & Stationery</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_tablet.png') }}\" alt=\"Icon Home & Life\" /> <p>Home & Life</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_sport.png') }}\" alt=\"Icon Sports & Outdoors\" /> <p>Sports & Outdoors</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_auto.png') }}\" alt=\"Icon Auto & Moto\" /> <p>Auto & Moto</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_voucher.png') }}\" alt=\"Icon Voucher Service\" /> <p>Voucher Service</p></a></li>
        </ul>
    </div>
    <!-- Header Box -->
    <div class=\"wrappage\">
        <header class=\"relative full-width box-shadow\">
            {% include '@SyliusShop/_header.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.layout.after_header') }}



        </header>

        <!-- Content Box -->
        <div class=\"relative clearfix full-width\">
            <div class=\"container\">
                {% include '@SyliusShop/_flashes.html.twig' %}
            </div>
            {% block content %} {% endblock %}
        </div>

        <!-- Footer Box -->
        <footer class=\"relative full-width\">
            <div class=\" top-footer full-width\">
                <div class=\"clearfix container-web relative\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-9 col-sm-12 clear-padding col-xs-12\">
                                <div class=\"clearfix text-subscribe text-subscribe\">
                                    <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                                    <p>sign up for newsletter</p>
                                    <p>Get updates on discount & counpons.</p>
                                </div>
                                <div class=\"clearfix form-subscribe\">
                                    <input type=\"text\" name=\"email-subscribe\" placeholder=\"Enter your email . . .\">
                                    <button class=\"animate-default button-hover-red\">subscribe</button>
                                </div>
                            </div>
                            <div class=\"clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right\">
                                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/social_tw-min.png') }}\" alt=\"Icon Social Twiter\"></a>
                                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/social_fa-min.png') }}\" alt=\"Icon Social Facebook\"></a>
                                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/social_int-min.png') }}\" alt=\"Icon Social Instagram\"></a>
                                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/social_yt-min.png') }}\" alt=\"Icon Social Youtube\" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix container-web relative\">
                <div class=\" container clear-padding\">
                    <div class=\"row\">
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>my account</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">My Account</a></li>
                                <li><a href=\"#\">Login</a></li>
                                <li><a href=\"#\">My Cart</a></li>
                                <li><a href=\"#\">My Wishlist</a></li>
                                <li><a href=\"#\">My Compare</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>information</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Orders History</a></li>
                                <li><a href=\"#\">My Wishlist</a></li>
                                <li><a href=\"#\">Privacy Policy</a></li>
                                <li><a href=\"#\">Site Map</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>our services</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Product Recall</a></li>
                                <li><a href=\"#\">Gift Vouchers</a></li>
                                <li><a href=\"#\">Returns And Exchanges</a></li>
                                <li><a href=\"#\">Shipping Options</a></li>
                                <li><a href=\"#\">Terms Of Use</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>contact us</p>
                            <ul class=\"icon-footer\">
                                <li><i class=\"fa fa-home\" aria-hidden=\"true\"></i> 262 Milacina Mrest, Behansed, Paris</li>
                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> contact@yourcompany.com</li>
                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 070-7782-9137</li>
                                <li><i class=\"fa fa-fax\" aria-hidden=\"true\"></i> 070-7782-9138</li>
                                <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 09:00 AM - 18:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\" bottom-footer full-width\">
                <div class=\"clearfix container-web\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-7 clear-padding copyright\">
                                <p>Copyright © 2018 by Ginco Group. All Rights Reserved. <span class=\"float-right\">Designed by: <a href=\"\">InfoSys</a> </span></p>
                            </div>
                            <div class=\"clearfix footer-icon-bottom col-md-5 float-right clear-padding\">
                                <div class=\"icon_logo_footer float-right\">
                                    <img src=\"{{ asset('bundles/syliusshop/img/image_payment_footer-min.png') }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>

    <!-- End Footer Box -->
    <script src=\"{{ asset('bundles/syliusshop/js/jquery-3.3.1.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/bootstrap.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/multirange.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/slick.min.js') }}\" defer=\"\"></script>
{% block scripts %} {% endblock %}
    <script src=\"{{ asset('bundles/syliusshop/js/owl.carousel.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/owl.carousel.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/scripts.js') }}\" defer=\"\"></script>

    {% block javascripts %}
        {% include '@SyliusUi/_javascripts.html.twig' with {'path': 'assets/shop/js/app.js'} %}

        {{ sonata_block_render_event('sylius.shop.layout.javascripts') }}
    {% endblock %}
</body>
</html>
", "@SyliusShop/layout.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/layout.html.twig");
    }
}
