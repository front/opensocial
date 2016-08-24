<?php

/* profiles/social/themes/socialbase/templates/form/form-element-label--dropdown.html.twig */
class __TwigTemplate_d90d9f9b30f17e4a8deff37dbc1208c9b031dc76ddb7f10f1d84f78f455d416d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 19
        echo "<label";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeAttribute", array(0 => "data-original-title", 1 => "data-toggle"), "method"), "html", null, true));
        echo " class=\"block\">
  <svg class=\"icon-small\">
    <use xlink:href=\"#icon-";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["material_icon"]) ? $context["material_icon"] : null), "html", null, true));
        echo "\"></use>
  </svg>
  <span>";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</span>
  <span>";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true));
        echo "</span>
</label>
";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/form/form-element-label--dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  54 => 23,  49 => 21,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form element label.*/
/*  **/
/*  * Available variables:*/
/*  * - element: an input element.*/
/*  * - title: The label's text.*/
/*  * - title_display: Elements title_display setting.*/
/*  * - description: element description.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  * - attributes: A list of HTML attributes for the label.*/
/*  **/
/*  * @see template_preprocess_form_element_label()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* <label{{ attributes.removeAttribute('data-original-title', 'data-toggle')}} class="block">*/
/*   <svg class="icon-small">*/
/*     <use xlink:href="#icon-{{ material_icon }}"></use>*/
/*   </svg>*/
/*   <span>{{ title }}</span>*/
/*   <span>{{ element }}</span>*/
/* </label>*/
/* */
