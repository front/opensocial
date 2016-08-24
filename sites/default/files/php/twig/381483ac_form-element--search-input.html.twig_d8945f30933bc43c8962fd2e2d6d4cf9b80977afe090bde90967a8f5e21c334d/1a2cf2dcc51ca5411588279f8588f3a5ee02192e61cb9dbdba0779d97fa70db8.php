<?php

/* profiles/social/themes/socialbase/templates/form/form-element--search-input.html.twig */
class __TwigTemplate_218eddcbe89f48fd45cd09efa877b2cac78e78b2569439145897249ad6fdb897 extends Twig_Template
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

        // line 48
        echo "
";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/form/form-element--search-input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 49,  43 => 48,);
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
/* */
/* {{ children }}*/
/* */
