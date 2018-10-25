<?php

/* @SyliusUi/Form/imagesTheme.html.twig */
class __TwigTemplate_c8eab581b714d77f07127f1cfdf49a68bd8dc6aae73aef9e453944cbe6595862 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "@SyliusUi/Form/imagesTheme.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            'sylius_product_image_widget' => array($this, 'block_sylius_product_image_widget'),
            'sylius_taxon_image_widget' => array($this, 'block_sylius_taxon_image_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/imagesTheme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/imagesTheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        $context["__internal_09da52e9a570952e3bb6b1b3987d8facf19963b2a8ffef5de360ae76757f5347"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "@SyliusUi/Form/imagesTheme.html.twig", 4);
        // line 5
        echo "    ";
        $context["self"] = $this;
        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->source); })()), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()))) : ("")) . " controls collection-widget")));
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div data-form-type=\"collection\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
                ";
        // line 10
        if (((isset($context["prototype"]) || array_key_exists("prototype", $context)) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "                    data-prototype='";
            echo twig_escape_filter($this->env, $context["self"]->macro_collection_item((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 11, $this->source); })()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 11, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 11, $this->source); })()), "__name__"));
            echo "'";
        }
        // line 13
        echo ">
            ";
        // line 14
        echo $context["__internal_09da52e9a570952e3bb6b1b3987d8facf19963b2a8ffef5de360ae76757f5347"]->macro_error(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "vars", array()), "errors", array()));
        echo "

            ";
        // line 16
        if (twig_test_iterable((((isset($context["prototypes"]) || array_key_exists("prototypes", $context))) ? (_twig_default_filter((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new Twig_Error_Runtime('Variable "prototypes" does not exist.', 16, $this->source); })()))) : ("")))) {
            // line 17
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new Twig_Error_Runtime('Variable "prototypes" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 18
                echo "                    <input type=\"hidden\" data-form-prototype=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["self"]->macro_collection_item($context["subPrototype"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 18, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 18, $this->source); })()), "__name__"));
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "                    ";
            echo $context["self"]->macro_collection_item($context["child"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 24, $this->source); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 24, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()));
            echo "
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>

            ";
        // line 28
        if (((isset($context["prototype"]) || array_key_exists("prototype", $context)) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["button_add_label"]) || array_key_exists("button_add_label", $context) ? $context["button_add_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_add_label" does not exist.', 31, $this->source); })())), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 34
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_sylius_product_image_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "    <div class=\"ui upload box segment\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "type", array()), 'row');
        echo "
        <label for=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
    ";
        // line 57
        if ( !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 58
            echo "        <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 60
        echo "        <div class=\"ui hidden element\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "file", array()), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "file", array()), 'errors');
        // line 65
        echo "</div>
    ";
        // line 66
        if ((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 66, $this->source); })()), "id", array())) && (0 != twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 66, $this->source); })()), "variants", array())))) &&  !twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 66, $this->source); })()), "simple", array()))) {
            // line 67
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "productVariants", array()), 'row');
            echo "
    ";
        }
        // line 69
        echo "    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_sylius_taxon_image_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        // line 74
        echo "    ";
        ob_start();
        // line 75
        echo "    <div class=\"ui upload box segment\">
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "type", array()), 'row');
        echo "
        ";
        // line 77
        if ((null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 78
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_file"), "html", null, true);
            echo "</label>
        ";
        } else {
            // line 80
            echo "            <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
            <label for=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_file"), "html", null, true);
            echo "</label>
        ";
        }
        // line 83
        echo "        <div class=\"ui hidden element\">
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "file", array()), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "file", array()), 'errors');
        // line 88
        echo "</div>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function macro_collection_item($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "allow_delete" => $__allow_delete__,
            "button_delete_label" => $__button_delete_label__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 39
            echo "    ";
            ob_start();
            // line 40
            echo "        <div data-form-collection=\"item\" data-form-collection-index=\"";
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\" class=\"column\">
            ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), 'widget');
            echo "
            ";
            // line 42
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 42, $this->source); })())) {
                // line 43
                echo "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 45, $this->source); })())), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 48
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/imagesTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 48,  348 => 45,  344 => 43,  342 => 42,  338 => 41,  333 => 40,  330 => 39,  309 => 38,  296 => 88,  294 => 87,  289 => 84,  286 => 83,  279 => 81,  272 => 80,  264 => 78,  262 => 77,  258 => 76,  255 => 75,  252 => 74,  243 => 73,  231 => 69,  225 => 67,  223 => 66,  220 => 65,  218 => 64,  213 => 61,  210 => 60,  202 => 58,  200 => 57,  194 => 56,  190 => 55,  187 => 54,  184 => 53,  175 => 52,  163 => 34,  157 => 31,  153 => 29,  151 => 28,  147 => 26,  130 => 24,  113 => 23,  109 => 21,  106 => 20,  95 => 18,  90 => 17,  88 => 16,  83 => 14,  80 => 13,  75 => 11,  73 => 10,  68 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/theme.html.twig' %}

{% block collection_widget -%}
    {% from 'SyliusResourceBundle:Macros:notification.html.twig' import error %}
    {% import _self as self %}
    {% set attr = attr|merge({'class': attr.class|default ~ ' controls collection-widget'}) %}

    {% spaceless %}
        <div data-form-type=\"collection\" {{ block('widget_container_attributes') }}
                {% if prototype is defined and allow_add %}
                    data-prototype='{{ self.collection_item(prototype, allow_delete, button_delete_label, '__name__')|e }}'
                {%- endif -%}
        >
            {{ error(form.vars.errors) }}

            {% if prototypes|default is iterable %}
                {% for key, subPrototype in prototypes %}
                    <input type=\"hidden\" data-form-prototype=\"{{ key }}\" value=\"{{ self.collection_item(subPrototype, allow_delete, button_delete_label, '__name__')|e }}\" />
                {% endfor %}
            {% endif %}

            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
                {% for child in form %}
                    {{ self.collection_item(child, allow_delete, button_delete_label, loop.index0) }}
                {% endfor %}
            </div>

            {% if prototype is defined and allow_add %}
                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    {{ button_add_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endspaceless %}
{%- endblock collection_widget %}

{% macro collection_item(form, allow_delete, button_delete_label, index) %}
    {% spaceless %}
        <div data-form-collection=\"item\" data-form-collection-index=\"{{ index }}\" class=\"column\">
            {{ form_widget(form) }}
            {% if allow_delete %}
                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    {{ button_delete_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endmacro %}

{% block sylius_product_image_widget %}
    {% spaceless %}
    <div class=\"ui upload box segment\">
        {{ form_row(form.type) }}
        <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
    {% if form.vars.value.path|default(null) is not null %}
        <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
    {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
    {% if product.id is not null and 0 != product.variants|length and not product.simple %}
        {{ form_row(form.productVariants) }}
    {% endif %}
    </div>
    {% endspaceless %}
{% endblock %}

{% block sylius_taxon_image_widget %}
    {% spaceless %}
    <div class=\"ui upload box segment\">
        {{ form_row(form.type) }}
        {% if form.vars.value.path|default(null) is null %}
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
        {% else %}
            <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.change_file'|trans }}</label>
        {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
    </div>
    {% endspaceless %}
{% endblock %}
", "@SyliusUi/Form/imagesTheme.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/imagesTheme.html.twig");
    }
}
