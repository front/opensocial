<?php

/* profiles/social/themes/socialbase/templates/input/input--button.html.twig */
class __TwigTemplate_f7f739599119faa134bdf439e9533146c995464739eb1810f2e8bf8968f78743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "profiles/social/themes/socialbase/templates/input/input--button.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("spaceless" => 25, "set" => 28, "if" => 39);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'set', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 25
        ob_start();
        // line 28
        $context["classes"] = array(0 => "btn", 1 => (((        // line 30
(isset($context["type"]) ? $context["type"] : null) == "submit")) ? ("js-form-submit") : ("")), 2 => ((        // line 31
(isset($context["float_right"]) ? $context["float_right"] : null)) ? ("pull-right") : ("")), 3 => (((        // line 32
(isset($context["button_type"]) ? $context["button_type"] : null) == "flat")) ? ("btn-flat") : ("")), 4 => (((        // line 33
(isset($context["button_type"]) ? $context["button_type"] : null) == "primary")) ? ("btn-primary") : ("")), 5 => ((((        // line 34
(isset($context["icon"]) ? $context["icon"] : null) && (isset($context["icon_position"]) ? $context["icon_position"] : null)) &&  !(isset($context["icon_only"]) ? $context["icon_only"] : null))) ? (("icon-" . (isset($context["icon_position"]) ? $context["icon_position"] : null))) : ("")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_input($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        if ((isset($context["icon_only"]) ? $context["icon_only"] : null)) {
            // line 40
            echo "      <button";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "icon-only"), "method"), "html", null, true));
            echo ">
        <span class=\"sr-only\">";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</span>
        ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo "
      </button>
    ";
        } else {
            // line 45
            echo "      ";
            if (((isset($context["icon_position"]) ? $context["icon_position"] : null) == "after")) {
                // line 46
                echo "        <button";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "removeClass", array(0 => "btn-danger"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "caret", array()), "html", null, true));
                echo "</button>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                echo "
      ";
            } else {
                // line 48
                echo "        ";
                if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hasClass", array(0 => "btn-primary"), "method")) {
                    // line 49
                    echo "          <button";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "addClass", array(0 => "pull-right"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "caret", array()), "html", null, true));
                    echo "</button>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                    echo "
        ";
                } else {
                    // line 51
                    echo "          <button";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "removeClass", array(0 => "btn-danger"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "caret", array()), "html", null, true));
                    echo "</button>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
                    echo "
        ";
                }
                // line 53
                echo "      ";
            }
            // line 54
            echo "    ";
        }
        // line 55
        echo "    ";
        if ((isset($context["add_search_icon"]) ? $context["add_search_icon"] : null)) {
            // line 56
            echo "      <span class=\"search-icon\">
        <svg>
          <title>Search</title>
          <use xlink:href=\"#icon-search\"></use>
        </svg>
      </span>
    ";
        }
        // line 63
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/input/input--button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  135 => 56,  132 => 55,  129 => 54,  126 => 53,  114 => 51,  102 => 49,  99 => 48,  87 => 46,  84 => 45,  78 => 42,  74 => 41,  69 => 40,  66 => 39,  63 => 38,  59 => 1,  56 => 34,  55 => 33,  54 => 32,  53 => 31,  52 => 30,  51 => 28,  49 => 25,  11 => 1,);
    }
}
/* {% extends "input.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme suggestion for "button" input form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  * - icon: An icon.*/
/*  * - icon_only: Flag to display only the icon and not the label.*/
/*  * - icon_position: Where an icon should be displayed.*/
/*  * - label: button label.*/
/*  * - prefix: Markup to display before the input element.*/
/*  * - suffix: Markup to display after the input element.*/
/*  * - type: The type of input.*/
/*  **/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\InputButton*/
/*  * @see \Drupal\bootstrap\Plugin\Preprocess\Input*/
/*  * @see template_preprocess_input()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/* */
/*   {%*/
/*     set classes = [*/
/*       'btn',*/
/*       type == 'submit' ? 'js-form-submit',*/
/*       float_right ? 'pull-right',*/
/*       button_type == 'flat' ? 'btn-flat',*/
/*       button_type == 'primary' ? 'btn-primary',*/
/*       icon and icon_position and not icon_only ? 'icon-' ~ icon_position,*/
/*     ]*/
/*   %}*/
/* */
/*   {% block input %}*/
/*     {% if icon_only %}*/
/*       <button{{ attributes.addClass(classes, 'icon-only') }}>*/
/*         <span class="sr-only">{{ label }}</span>*/
/*         {{ icon }}*/
/*       </button>*/
/*     {% else %}*/
/*       {% if icon_position == 'after' %}*/
/*         <button{{ attributes.addClass(classes).removeClass('btn-danger') }}>{{ label }}{{ icon }}{{ element.caret }}</button>{{ children }}*/
/*       {% else %}*/
/*         {% if attributes.hasClass('btn-primary') %}*/
/*           <button{{ attributes.addClass(classes).addClass('pull-right') }}>{{ icon }}{{ label }}{{ element.caret }}</button>{{ children }}*/
/*         {% else %}*/
/*           <button{{ attributes.addClass(classes).removeClass('btn-danger') }}>{{ icon }}{{ label }}{{ element.caret }}</button>{{ children }}*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     {% if add_search_icon %}*/
/*       <span class="search-icon">*/
/*         <svg>*/
/*           <title>Search</title>*/
/*           <use xlink:href="#icon-search"></use>*/
/*         </svg>*/
/*       </span>*/
/*     {% endif %}*/
/*     {{ children }}*/
/*   {% endblock %}*/
/* {% endspaceless %}*/
/* */
