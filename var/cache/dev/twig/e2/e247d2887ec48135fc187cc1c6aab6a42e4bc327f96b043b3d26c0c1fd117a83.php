<?php

/* SyliusAdminBundle::layout.html.twig */
class __TwigTemplate_aca8e6b35a0004acb7bf00df52855064c4c5fac949e1c09093fb4ff65d69e02c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusUiBundle:Layout:sidebar.html.twig", "SyliusAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'topbar' => array($this, 'block_topbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusUiBundle:Layout:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " | Sylius";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_stylesheets.html.twig", "SyliusAdminBundle::layout.html.twig", 6)->display(array_merge($context, array("path" => "assets/admin/css/style.css")));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.stylesheets"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 12
        echo "    ";
        $this->loadTemplate("@SyliusAdmin/_flashes.html.twig", "SyliusAdminBundle::layout.html.twig", 12)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 16
        echo "    <a class=\"icon item\" id=\"sidebar-toggle\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.toggle_sidebar"), "html", null, true);
        echo "\">
        <i class=\"sidebar icon\"></i>
    </a>

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_left"));
        echo "

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_channel_index", array("template" => "@SyliusAdmin/_channelLinks.html.twig")));
        echo "
    ";
        // line 23
        $this->loadTemplate("@SyliusAdmin/_search.html.twig", "SyliusAdminBundle::layout.html.twig", 23)->display($context);
        // line 24
        echo "
    <div class=\"ui left floated dividing empty item\"></div>

    ";
        // line 27
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_middle"));
        echo "

    <div class=\"ui right floated dividing empty item\"></div>

    ";
        // line 31
        echo $this->extensions['Sylius\Bundle\AdminBundle\Twig\NotificationWidgetExtension']->renderWidget($this->env);
        echo "
    ";
        // line 32
        $this->loadTemplate("@SyliusAdmin/_security.html.twig", "SyliusAdminBundle::layout.html.twig", 32)->display($context);
        // line 33
        echo "
    ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.topbar_right"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 38
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.sidebar_top"));
        echo "

    <a class=\"item\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard");
        echo "\"><b>Sylius</b></a>
    ";
        // line 41
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("sylius.admin.main", array("template" => "SyliusUiBundle:Menu:sidebar.html.twig", "currentClass" => "active"));
        echo "

    ";
        // line 43
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.sidebar_down"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 47
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.com\" target=\"_blank\">Sylius v";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sylius_meta"]) || array_key_exists("sylius_meta", $context) ? $context["sylius_meta"] : (function () { throw new Twig_Error_Runtime('Variable "sylius_meta" does not exist.', 47, $this->source); })()), "version", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "SyliusAdminBundle::layout.html.twig", 51)->display(array_merge($context, array("path" => "assets/admin/js/app.js")));
        // line 52
        echo "
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.layout.javascripts"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 53,  248 => 52,  245 => 51,  236 => 50,  221 => 47,  212 => 46,  200 => 43,  195 => 41,  191 => 40,  185 => 38,  176 => 37,  164 => 34,  161 => 33,  159 => 32,  155 => 31,  148 => 27,  143 => 24,  141 => 23,  137 => 22,  132 => 20,  124 => 16,  115 => 15,  104 => 12,  95 => 11,  83 => 8,  80 => 7,  77 => 6,  68 => 5,  50 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusUiBundle:Layout:sidebar.html.twig' %}

{% block title %} | Sylius{% endblock %}

{% block stylesheets %}
    {% include 'SyliusUiBundle::_stylesheets.html.twig' with {'path': 'assets/admin/css/style.css'} %}

    {{ sonata_block_render_event('sylius.admin.layout.stylesheets') }}
{% endblock %}

{% block flash_messages %}
    {% include '@SyliusAdmin/_flashes.html.twig' %}
{% endblock %}

{% block topbar %}
    <a class=\"icon item\" id=\"sidebar-toggle\" title=\"{{ 'sylius.ui.toggle_sidebar'|trans }}\">
        <i class=\"sidebar icon\"></i>
    </a>

    {{ sonata_block_render_event('sylius.admin.layout.topbar_left') }}

    {{ render(url('sylius_admin_partial_channel_index', {'template': '@SyliusAdmin/_channelLinks.html.twig'})) }}
    {% include '@SyliusAdmin/_search.html.twig' %}

    <div class=\"ui left floated dividing empty item\"></div>

    {{ sonata_block_render_event('sylius.admin.layout.topbar_middle') }}

    <div class=\"ui right floated dividing empty item\"></div>

    {{ sylius_render_notifications_widget() }}
    {% include '@SyliusAdmin/_security.html.twig' %}

    {{ sonata_block_render_event('sylius.admin.layout.topbar_right') }}
{% endblock %}

{% block sidebar %}
    {{ sonata_block_render_event('sylius.admin.layout.sidebar_top') }}

    <a class=\"item\" href=\"{{ path('sylius_admin_dashboard') }}\"><b>Sylius</b></a>
    {{ knp_menu_render('sylius.admin.main', {'template': 'SyliusUiBundle:Menu:sidebar.html.twig', 'currentClass': 'active'}) }}

    {{ sonata_block_render_event('sylius.admin.layout.sidebar_down') }}
{% endblock %}

{% block footer %}
    {{ 'sylius.ui.powered_by'|trans }} <a href=\"http://sylius.com\" target=\"_blank\">Sylius v{{ sylius_meta.version }}</a>
{% endblock %}

{% block javascripts %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'assets/admin/js/app.js'} %}

    {{ sonata_block_render_event('sylius.admin.layout.javascripts') }}
{% endblock %}
", "SyliusAdminBundle::layout.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/layout.html.twig");
    }
}
