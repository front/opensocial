<?php

/* profiles/social/themes/socialbase/templates/form/form-element.html.twig */
class __TwigTemplate_1bd319a90b85d35c00c618d8fd12a9e9f96f4ffe20faf6148e45bca2b25b4638 extends Twig_Template
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
        $tags = array("set" => 49, "if" => 71);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 49
        $context["classes"] = array(0 => ((!twig_in_filter(        // line 50
(isset($context["title_display"]) ? $context["title_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 1 => (((        // line 51
(isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")), 2 => ((        // line 52
(isset($context["is_form_group"]) ? $context["is_form_group"] : null)) ? ("form-group") : ("")), 3 => (((        // line 53
(isset($context["type"]) ? $context["type"] : null) == "textarea")) ? ("form-group") : ("")), 4 => ((        // line 54
(isset($context["is_radio"]) ? $context["is_radio"] : null)) ? ("radio") : ("")), 5 => ((        // line 55
(isset($context["is_checkbox"]) ? $context["is_checkbox"] : null)) ? ("checkbox") : ("")), 6 => ((        // line 56
(isset($context["is_autocomplete"]) ? $context["is_autocomplete"] : null)) ? ("form-autocomplete") : ("")), 7 => ((        // line 57
(isset($context["errors"]) ? $context["errors"] : null)) ? ("error has-error") : ("")), 8 => ((((        // line 58
(isset($context["name"]) ? $context["name"] : null) == "pass") && (isset($context["logged_in"]) ? $context["logged_in"] : null))) ? ("row") : ("")), 9 => (((        // line 59
(isset($context["name"]) ? $context["name"] : null) == "pass[pass1]")) ? ("col-xs-12 col-sm-7") : ("")), 10 => (((        // line 60
(isset($context["name"]) ? $context["name"] : null) == "pass[pass2]")) ? ("col-xs-12 col-sm-7") : ("")));
        // line 63
        $context["description_classes"] = array(0 => "help-block", 1 => ((((        // line 65
(isset($context["name"]) ? $context["name"] : null) == "pass") && (isset($context["logged_in"]) ? $context["logged_in"] : null))) ? ("col-xs-12") : ("")), 2 => (((        // line 66
(isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 69
        echo "
<div";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "removeClass", array(0 => "form-inline"), "method"), "html", null, true));
        echo ">
  ";
        // line 71
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 72
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
            // line 76
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true));
            echo "
  ";
        }
        // line 78
        echo "
  ";
        // line 79
        if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 80
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 84
        echo "
  ";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "

  ";
        // line 87
        if ( !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null))) {
            // line 88
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true));
            echo "
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 92
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
  ";
        }
        // line 94
        echo "
  ";
        // line 95
        if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 96
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
            echo ">
      ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 100
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 100,  139 => 97,  134 => 96,  132 => 95,  129 => 94,  123 => 92,  121 => 91,  118 => 90,  112 => 88,  110 => 87,  105 => 85,  102 => 84,  96 => 81,  91 => 80,  89 => 79,  86 => 78,  80 => 76,  78 => 75,  75 => 74,  69 => 72,  67 => 71,  63 => 70,  60 => 69,  58 => 66,  57 => 65,  56 => 63,  54 => 60,  53 => 59,  52 => 58,  51 => 57,  50 => 56,  49 => 55,  48 => 54,  47 => 53,  46 => 52,  45 => 51,  44 => 50,  43 => 49,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - prefix: (optional) The form element prefix, may not be set.*/
/*  * - suffix: (optional) The form element suffix, may not be set.*/
/*  * - required: The required marker, or empty if the associated form element is*/
/*  *   not required.*/
/*  * - type: The type of the element.*/
/*  * - name: The name of the element.*/
/*  * - label: A rendered label element.*/
/*  * - label_display: Label display setting. It can have these values:*/
/*  *   - before: The label is output before the element. This is the default.*/
/*  *     The label includes the #title and the required marker, if #required.*/
/*  *   - after: The label is output after the element. For example, this is used*/
/*  *     for radio and checkbox #type elements. If the #title is empty but the*/
/*  *     field is #required, the label will contain only the required marker.*/
/*  *   - invisible: Labels are critical for screen readers to enable them to*/
/*  *     properly navigate through forms but can be visually distracting. This*/
/*  *     property hides the label for everyone except screen readers.*/
/*  *   - attribute: Set the title attribute on the element to create a tooltip but*/
/*  *     output no label element. This is supported only for checkboxes and radios*/
/*  *     in \Drupal\Core\Render\Element\CompositeFormElementTrait::preRenderCompositeFormElement().*/
/*  *     It is used where a visual label is not needed, such as a table of*/
/*  *     checkboxes where the row and column provide the context. The tooltip will*/
/*  *     include the title and required marker.*/
/*  * - description: (optional) A list of description properties containing:*/
/*  *    - content: A description of the form element, may not be set.*/
/*  *    - attributes: (optional) A list of HTML attributes to apply to the*/
/*  *      description content wrapper. Will only be set when description is set.*/
/*  * - description_display: Description display setting. It can have these values:*/
/*  *   - before: The description is output before the element.*/
/*  *   - after: The description is output after the element. This is the default*/
/*  *     value.*/
/*  *   - invisible: The description is output after the element, hidden visually*/
/*  *     but available to screen readers.*/
/*  * - disabled: True if the element is disabled.*/
/*  * - title_display: Title display setting.*/
/*  **/
/*  * @see template_preprocess_form_element()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     title_display not in ['after', 'before'] ? 'form-no-label',*/
/*     disabled == 'disabled' ? 'form-disabled',*/
/*     is_form_group ? 'form-group',*/
/*     type == 'textarea' ? 'form-group',*/
/*     is_radio ? 'radio',*/
/*     is_checkbox ? 'checkbox',*/
/*     is_autocomplete ? 'form-autocomplete',*/
/*     errors ? 'error has-error',*/
/*     name == 'pass' and logged_in ? 'row',*/
/*     name == 'pass[pass1]' ? 'col-xs-12 col-sm-7',*/
/*     name == 'pass[pass2]' ? 'col-xs-12 col-sm-7',*/
/*   ]*/
/* %}{%*/
/*   set description_classes = [*/
/*     'help-block',*/
/*     name == 'pass' and logged_in ? 'col-xs-12',*/
/*     description_display == 'invisible' ? 'visually-hidden',*/
/*   ]*/
/* %}*/
/* */
/* <div{{ attributes.addClass(classes).removeClass('form-inline') }}>*/
/*   {% if label_display in ['before', 'invisible'] %}*/
/*     {{ label }}*/
/*   {% endif %}*/
/* */
/*   {% if prefix is not empty %}*/
/*     {{ prefix }}*/
/*   {% endif %}*/
/* */
/*   {% if description_display == 'before' and description.content %}*/
/*     <div{{ description.attributes }}>*/
/*       {{ description.content }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {{ children }}*/
/* */
/*   {% if suffix is not empty %}*/
/*     {{ suffix }}*/
/*   {% endif %}*/
/* */
/*   {% if label_display == 'after' %}*/
/*     {{ label }}*/
/*   {% endif %}*/
/* */
/*   {% if description_display in ['after', 'invisible'] and description.content %}*/
/*     <div{{ description.attributes.addClass(description_classes) }}>*/
/*       {{ description.content }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
