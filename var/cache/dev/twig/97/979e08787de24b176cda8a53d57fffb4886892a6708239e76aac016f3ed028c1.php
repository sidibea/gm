<?php

/* @SyliusShop/_header.html.twig */
class __TwigTemplate_3604eb2be5ac106db97ae29b0c8937e950c0332dbd8a7acc1d46483b36020e46 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'top' => array($this, 'block_top'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_header.html.twig"));

        // line 1
        echo "<div class=\"clearfix container-web relative\">
    <div class=\" container\">
        ";
        // line 3
        $this->displayBlock('top', $context, $blocks);
        // line 30
        echo "        <div class=\"row\">
            <div class=\"clearfix header-content full-width relative\">
                <div class=\"clearfix icon-menu-bar\">
                    <i class=\"data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"clearfix logo\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_render", array("code" => "ginco_loo", "width" => "230")));
        echo "
                </div>
                <div class=\"clearfix search-box relative float-left\">
                    <form method=\"GET\" action=\"/\" class=\"\">
                        <div class=\"clearfix category-box relative\">
                            <select name=\"cate_search\">
                                <option>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.allcategories"), "html", null, true);
        echo "</option>
                                <option>Food</option>
                                <option>Mobile & Tablet</option>
                                <option>Electric Appliances</option>
                                <option>Electronics & Technology</option>
                                <option>Fashion</option>
                                <option>Health & Beauty</option>
                                <option>Mother & Baby</option>
                                <option>Books & Stationery</option>
                                <option>Home & Life</option>
                                <option>Sports & Outdoors</option>
                                <option>Auto & Moto</option>
                                <option>Voucher Service</option>
                            </select>
                        </div>
                        <input type=\"text\" name=\"s\" placeholder=\"Enter keyword here . . .\">
                        <button type=\"submit\" class=\"animate-default button-hover-red\">Search</button>
                    </form>
                </div>
                <div class=\"clearfix icon-search-mobile absolute\">
                    <i onclick=\"showBoxSearchMobile()\" class=\"data-icon data-icon-basic icon-basic-magnifier\"></i>
                </div>
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_cart_summary", array("template" => "@SyliusShop/Cart/_widget.html.twig")));
        echo "

                <div class=\"clearfix box-search-mobile\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <a class=\"menu-vertical hidden-md hidden-lg\" onclick=\"showMenuMobie()\">
                <span class=\"animate-default\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.allcategories"), "html", null, true);
        echo "</span>
            </a>
        </div>
    </div>
</div>
<div class=\"menu-header-v3 hidden-ipx\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Menu Page -->
            <div class=\"menu-header full-width\">
                <ul class=\"clear-margin\">
                    <li onclick=\"showMenuHomeV3()\"><a class=\"animate-default\" href=\"#\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> all categories</a></li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.home"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://services.gincomarket.com\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.services"), "html", null, true);
        echo "</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.services_description"), "html", null, true);
        echo "</h5>
                        </div>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://business.gincomarket.com\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.business"), "html", null, true);
        echo "</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.business_description"), "html", null, true);
        echo "</h5>
                        </div>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://proprietes.gincomarket.com\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.properties"), "html", null, true);
        echo "</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.properties_description"), "html", null, true);
        echo "</h5>
                        </div>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://car.gincomarket.com\">";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.vehicules"), "html", null, true);
        echo "</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.vehicules_description"), "html", null, true);
        echo "</h5>
                        </div>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://car.gincomarket.com\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.buses"), "html", null, true);
        echo "</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.buses_description"), "html", null, true);
        echo "</h5>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- End Menu Page -->
        </div>
    </div>
</div>

<div class=\"header-ontop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"clearfix logo\">
                    <a href=\"#\">
                        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_render", array("code" => "ginco_logo", "width" => "230")));
        echo "

                    </a>
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"menu-header\">
                    <ul class=\"main__menu clear-margin\">
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.home"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.services"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.business"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.properties"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.vehicules"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.buses"), "html", null, true);
        echo "</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_top($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 4
        echo "            <div class=\"row\">
                <div class=\" header-top\">
                    <p class=\"contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin\">
                        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_phone_top.png"), "html", null, true);
        echo "\" alt=\"Call us\" /> Call us <span class=\"text-red bold\">070-7782-7137</span>
                    </p>
                    <div class=\"clear-padding menu-header-top text-right col-md-8 col-xs-12 col-sm-6\">
                        ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_security_widget"));
        echo "
                        <ul class=\"clear-margin\">
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.security_widget:renderAction"));
        echo "
                            ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_security_widget"));
        echo "



                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.locale_switch:renderAction"));
        echo "


                            ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_currency_switcher"));
        echo "
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.currency_switch:renderAction"));
        echo "


                        </ul>
                    </div>
                </div>
            </div>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 21,  288 => 20,  282 => 17,  275 => 13,  271 => 12,  266 => 10,  260 => 7,  255 => 4,  246 => 3,  228 => 155,  222 => 152,  216 => 149,  210 => 146,  204 => 143,  198 => 140,  186 => 131,  166 => 114,  161 => 112,  154 => 108,  149 => 106,  142 => 102,  137 => 100,  130 => 96,  125 => 94,  118 => 90,  113 => 88,  105 => 85,  89 => 72,  78 => 64,  53 => 42,  44 => 36,  36 => 30,  34 => 3,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"clearfix container-web relative\">
    <div class=\" container\">
        {% block top %}
            <div class=\"row\">
                <div class=\" header-top\">
                    <p class=\"contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin\">
                        <img src=\"{{ asset('bundles/syliusshop/img/icon_phone_top.png') }}\" alt=\"Call us\" /> Call us <span class=\"text-red bold\">070-7782-7137</span>
                    </p>
                    <div class=\"clear-padding menu-header-top text-right col-md-8 col-xs-12 col-sm-6\">
                        {{ sonata_block_render_event('sylius.shop.layout.before_security_widget') }}
                        <ul class=\"clear-margin\">
                            {{ render(controller('sylius.controller.shop.security_widget:renderAction')) }}
                            {{ sonata_block_render_event('sylius.shop.layout.after_security_widget') }}



                            {{ render(controller('sylius.controller.shop.locale_switch:renderAction')) }}


                            {{ sonata_block_render_event('sylius.shop.layout.before_currency_switcher') }}
                            {{ render(controller('sylius.controller.shop.currency_switch:renderAction')) }}


                        </ul>
                    </div>
                </div>
            </div>

        {% endblock %}
        <div class=\"row\">
            <div class=\"clearfix header-content full-width relative\">
                <div class=\"clearfix icon-menu-bar\">
                    <i class=\"data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"clearfix logo\">
                    {{ render(path('bitbag_sylius_cms_plugin_shop_media_render', {'code' : 'ginco_loo', 'width' : '230'} )) }}
                </div>
                <div class=\"clearfix search-box relative float-left\">
                    <form method=\"GET\" action=\"/\" class=\"\">
                        <div class=\"clearfix category-box relative\">
                            <select name=\"cate_search\">
                                <option>{{ 'sylius.menu.shop.ui.allcategories'|trans }}</option>
                                <option>Food</option>
                                <option>Mobile & Tablet</option>
                                <option>Electric Appliances</option>
                                <option>Electronics & Technology</option>
                                <option>Fashion</option>
                                <option>Health & Beauty</option>
                                <option>Mother & Baby</option>
                                <option>Books & Stationery</option>
                                <option>Home & Life</option>
                                <option>Sports & Outdoors</option>
                                <option>Auto & Moto</option>
                                <option>Voucher Service</option>
                            </select>
                        </div>
                        <input type=\"text\" name=\"s\" placeholder=\"Enter keyword here . . .\">
                        <button type=\"submit\" class=\"animate-default button-hover-red\">Search</button>
                    </form>
                </div>
                <div class=\"clearfix icon-search-mobile absolute\">
                    <i onclick=\"showBoxSearchMobile()\" class=\"data-icon data-icon-basic icon-basic-magnifier\"></i>
                </div>
                {{ render(url('sylius_shop_partial_cart_summary', {'template': '@SyliusShop/Cart/_widget.html.twig'})) }}

                <div class=\"clearfix box-search-mobile\">
                </div>
            </div>
        </div>
        <div class=\"row\">
            <a class=\"menu-vertical hidden-md hidden-lg\" onclick=\"showMenuMobie()\">
                <span class=\"animate-default\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'sylius.menu.shop.ui.allcategories'|trans }}</span>
            </a>
        </div>
    </div>
</div>
<div class=\"menu-header-v3 hidden-ipx\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Menu Page -->
            <div class=\"menu-header full-width\">
                <ul class=\"clear-margin\">
                    <li onclick=\"showMenuHomeV3()\"><a class=\"animate-default\" href=\"#\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> all categories</a></li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"{{ path('sylius_shop_homepage') }}\">{{ 'sylius.menu.shop.ui.home'|trans }}</a>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://services.gincomarket.com\">{{ 'sylius.menu.shop.ui.services'|trans }}</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">{{ 'sylius.menu.shop.ui.services_description'|trans }}</h5>
                        </div>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://business.gincomarket.com\">{{ 'sylius.menu.shop.ui.business'|trans }}</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">{{ 'sylius.menu.shop.ui.business_description'|trans }}</h5>
                        </div>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://proprietes.gincomarket.com\">{{ 'sylius.menu.shop.ui.properties'|trans }}</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">{{ 'sylius.menu.shop.ui.properties_description'|trans }}</h5>
                        </div>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://car.gincomarket.com\">{{ 'sylius.menu.shop.ui.vehicules'|trans }}</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">{{ 'sylius.menu.shop.ui.vehicules_description'|trans }}</h5>
                        </div>
                    </li>
                    <li class=\"title-hover-red\">
                        <a class=\"animate-default\" href=\"http://car.gincomarket.com\">{{ 'sylius.menu.shop.ui.buses'|trans }}</a>
                        <div class=\"sub-menu mega-menu-v2\">
                            <h5 class=\"center text-center\">{{ 'sylius.menu.shop.ui.buses_description'|trans }}</h5>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- End Menu Page -->
        </div>
    </div>
</div>

<div class=\"header-ontop\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"clearfix logo\">
                    <a href=\"#\">
                        {{ render(path('bitbag_sylius_cms_plugin_shop_media_render', {'code' : 'ginco_logo', 'width' : '230'} )) }}

                    </a>
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"menu-header\">
                    <ul class=\"main__menu clear-margin\">
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">{{ 'sylius.menu.shop.ui.home'|trans }}</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">{{ 'sylius.menu.shop.ui.services'|trans }}</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">{{ 'sylius.menu.shop.ui.business'|trans }}</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">{{ 'sylius.menu.shop.ui.properties'|trans }}</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">{{ 'sylius.menu.shop.ui.vehicules'|trans }}</a>
                        </li>
                        <li class=\"title-hover-red\">
                            <a class=\"animate-default\" href=\"#\">{{ 'sylius.menu.shop.ui.buses'|trans }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>", "@SyliusShop/_header.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/_header.html.twig");
    }
}
