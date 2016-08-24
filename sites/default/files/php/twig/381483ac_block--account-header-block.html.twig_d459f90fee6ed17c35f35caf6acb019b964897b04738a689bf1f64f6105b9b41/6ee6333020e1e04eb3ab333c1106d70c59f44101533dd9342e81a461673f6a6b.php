<?php

/* profiles/social/themes/socialbase/templates/block/block--account-header-block.html.twig */
class __TwigTemplate_e0b5bfcce41e7784b3969628efb1e8d83fe2b82c919a32791bfb942412c69d35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 38, "set" => 39, "block" => 46);
        $filters = array("without" => 35);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'block'),
                array('without'),
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

        // line 34
        echo "
<nav role=\"navigation\" class=\"navbar navbar-default navbar-fixed-top z-depth-2\"";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["attributes"]) ? $context["attributes"] : null), "role", "aria-labelledby"), "html", null, true));
        echo ">
  <div class=\"container\">
    ";
        // line 38
        echo "    ";
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 39
            echo "      ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    <h2";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "</h2>
    ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

    ";
        // line 46
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "  </div>
</nav>
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/block/block--account-header-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 47,  86 => 46,  80 => 49,  77 => 46,  72 => 43,  66 => 42,  61 => 41,  58 => 40,  55 => 39,  52 => 38,  47 => 35,  44 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  *//* */
/* #}*/
/* */
/* <nav role="navigation" class="navbar navbar-default navbar-fixed-top z-depth-2"{{ attributes|without('role', 'aria-labelledby') }}>*/
/*   <div class="container">*/
/*     {# Label. If not displayed, we still provide it for screen readers. #}*/
/*     {% if not configuration.label_display %}*/
/*       {% set title_attributes = title_attributes.addClass('visually-hidden') %}*/
/*     {% endif %}*/
/*     {{ title_prefix }}*/
/*     <h2{{ title_attributes}}>{{ configuration.label }}</h2>*/
/*     {{ title_suffix }}*/
/* */
/*     {# Menu. #}*/
/*     {% block content %}*/
/*       {{ content }}*/
/*     {% endblock %}*/
/*   </div>*/
/* </nav>*/
/* */
