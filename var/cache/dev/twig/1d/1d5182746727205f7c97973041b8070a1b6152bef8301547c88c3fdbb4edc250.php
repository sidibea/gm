<?php

/* @SyliusShop/Product/index.html.twig */
class __TwigTemplate_ef15fdcc16046372acdf3cab3e796559fe26306502945d888d35c5b91f1255fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Product/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/index.html.twig"));

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
        echo "<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/Index/_header.html.twig", "@SyliusShop/Product/index.html.twig", 7)->display($context);
        // line 8
        echo "            <div class=\"row\">
            <div class=\"col-md-3 relative right-padding-default clear-padding\" id=\"slide-bar-category\">
                ";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_sidebar.html.twig", "@SyliusShop/Product/index.html.twig", 10)->display($context);
        // line 11
        echo "            </div>
                <div class=\"col-md-9 relative clear-padding\">
                    <div class=\"col-sm-12 col-xs-12 relative overfollow-hidden clear-padding button-show-sidebar\">
                        <p onclick=\"showSideBar()\"><span class=\"ti-filter\"></span> Sidebar</p>
                    </div>
                    <div class=\"banner-top-category-page bottom-margin-default effect-bubba zoom-image-hover overfollow-hidden relative full-width\">

                    </div>
                    <div class=\"bar-category bottom-margin-default border no-border-r no-border-l no-border-t\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-sm-5 col-xs-4\">
                                <p class=\"title-category-page clear-margin\">Category</p>
                            </div>
                            <div class=\"col-md-5 col-sm-5 col-xs-8 right-category-bar float-right relative\">
                                ";
        // line 25
        $this->loadTemplate("@SyliusShop/Product/Index/_sorting.html.twig", "@SyliusShop/Product/index.html.twig", 25)->display($context);
        // line 26
        echo "                                ";
        $this->loadTemplate("@SyliusShop/Product/Index/_pagination.html.twig", "@SyliusShop/Product/index.html.twig", 26)->display($context);
        // line 27
        echo "



                            </div>
                        </div>
                    </div>
                    ";
        // line 34
        $this->loadTemplate("@SyliusShop/Product/Index/_main.html.twig", "@SyliusShop/Product/index.html.twig", 34)->display($context);
        // line 35
        echo "

                </div>


            </div>
        </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  96 => 34,  87 => 27,  84 => 26,  82 => 25,  66 => 11,  64 => 10,  60 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
<div class=\"relative container-web\">
    <div class=\"container\">
        <div class=\"row\">
            {% include '@SyliusShop/Product/Index/_header.html.twig' %}
            <div class=\"row\">
            <div class=\"col-md-3 relative right-padding-default clear-padding\" id=\"slide-bar-category\">
                {% include '@SyliusShop/Product/Index/_sidebar.html.twig' %}
            </div>
                <div class=\"col-md-9 relative clear-padding\">
                    <div class=\"col-sm-12 col-xs-12 relative overfollow-hidden clear-padding button-show-sidebar\">
                        <p onclick=\"showSideBar()\"><span class=\"ti-filter\"></span> Sidebar</p>
                    </div>
                    <div class=\"banner-top-category-page bottom-margin-default effect-bubba zoom-image-hover overfollow-hidden relative full-width\">

                    </div>
                    <div class=\"bar-category bottom-margin-default border no-border-r no-border-l no-border-t\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-sm-5 col-xs-4\">
                                <p class=\"title-category-page clear-margin\">Category</p>
                            </div>
                            <div class=\"col-md-5 col-sm-5 col-xs-8 right-category-bar float-right relative\">
                                {% include '@SyliusShop/Product/Index/_sorting.html.twig' %}
                                {% include '@SyliusShop/Product/Index/_pagination.html.twig' %}




                            </div>
                        </div>
                    </div>
                    {% include '@SyliusShop/Product/Index/_main.html.twig' %}


                </div>


            </div>
        </div>
        </div>
    </div>
{% endblock %}
", "@SyliusShop/Product/index.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Product/index.html.twig");
    }
}
