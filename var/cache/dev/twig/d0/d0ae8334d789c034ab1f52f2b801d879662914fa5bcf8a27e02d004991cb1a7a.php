<?php

/* @SyliusShop/Taxon/_verticalMenu.html.twig */
class __TwigTemplate_125c1533b12c497b0fcf50466a38793abb7af32af04301e43e824eb893e3ab76 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_verticalMenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_verticalMenu.html.twig"));

        // line 1
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_vertical_menu", array("taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 1, $this->source); })()))));
        echo "



            <!-- Sider Bar -->

                <div class=\"col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default\">
                    <p class=\"title-siderbar bold\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 8, $this->source); })()), "name", array()), "html", null, true);
        echo "</p>
                    <ul class=\"clear-margin list-siderbar\">
                        ";
        // line 10
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 10, $this->source); })()), "parent", array())) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 10, $this->source); })()), "parent", array()), "isRoot", array(), "method"))) {
            // line 11
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 11, $this->source); })()), "parent", array()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 11, $this->source); })()), "parent", array()), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">
                                <i class=\"fa fa-arrow-up\"></i> ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.go_level_up"), "html", null, true);
            echo "
                            </a></li>
                        ";
        }
        // line 15
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 15, $this->source); })()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 16
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, $context["child"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
                    </ul>
                </div>
                <div class=\"bottom-margin-default banner-siderbar col-md-12 col-sm-12 col-xs-12 clear-padding clearfix\">
                    <div class=\"overfollow-hidden banners-effect5 relative center-vertical-image\">
                        <img src=\"img/banner_siderbar-min.png\" alt=\"Siderbar\" />
                        <a href=\"#\"></a>
                    </div>
                </div>





";
        // line 32
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_vertical_menu", array("taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 32, $this->source); })()))));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_verticalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  73 => 18,  62 => 16,  57 => 15,  51 => 12,  46 => 11,  44 => 10,  39 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ sonata_block_render_event('sylius.shop.product.index.before_vertical_menu', {'taxon': taxon}) }}



            <!-- Sider Bar -->

                <div class=\"col-md-12 col-sm-12 col-xs-12 sider-bar-category border bottom-margin-default\">
                    <p class=\"title-siderbar bold\">{{ taxon.name }}</p>
                    <ul class=\"clear-margin list-siderbar\">
                        {% if taxon.parent is not empty and not taxon.parent.isRoot() %}
                            <li><a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.parent.slug, '_locale': taxon.parent.translation.locale}) }}\" class=\"item\">
                                <i class=\"fa fa-arrow-up\"></i> {{ 'sylius.ui.go_level_up'|trans }}
                            </a></li>
                        {% endif %}
                        {% for child in taxon.children %}
                            <li><a href=\"{{ path('sylius_shop_product_index', {'slug': child.slug, '_locale': child.translation.locale}) }}\" class=\"item\">{{ child.name }}</a></li>
                        {% endfor %}

                    </ul>
                </div>
                <div class=\"bottom-margin-default banner-siderbar col-md-12 col-sm-12 col-xs-12 clear-padding clearfix\">
                    <div class=\"overfollow-hidden banners-effect5 relative center-vertical-image\">
                        <img src=\"img/banner_siderbar-min.png\" alt=\"Siderbar\" />
                        <a href=\"#\"></a>
                    </div>
                </div>





{{ sonata_block_render_event('sylius.shop.product.index.after_vertical_menu', {'taxon': taxon}) }}
", "@SyliusShop/Taxon/_verticalMenu.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Taxon/_verticalMenu.html.twig");
    }
}
