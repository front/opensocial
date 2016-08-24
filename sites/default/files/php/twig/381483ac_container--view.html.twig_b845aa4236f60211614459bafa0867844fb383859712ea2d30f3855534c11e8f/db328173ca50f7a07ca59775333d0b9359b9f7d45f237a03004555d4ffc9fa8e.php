<?php

/* profiles/social/themes/socialbase/templates/system/container--view.html.twig */
class __TwigTemplate_c4876db809274e4824ed7c2b6a17d4a4c0ee47bc21f2ff253496bedba12d528f extends Twig_Template
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

        // line 20
        echo "
";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/system/container--view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 21,  43 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override of a container used to wrap child elements.*/
/*  **/
/*  * Used for grouped form items. Can also be used as a theme wrapper for any*/
/*  * renderable element, to surround it with a <div> and HTML attributes.*/
/*  * See the @link forms_api_reference.html Form API reference @endlink for more*/
/*  * information on the #theme_wrappers render array property.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - children: The rendered child elements of the container.*/
/*  * - has_parent: A flag to indicate that the container has one or more parent*/
/*      containers.*/
/*  **/
/*  * @see template_preprocess_container()*/
/*  *//* */
/* #}*/
/* */
/* {{ children }}*/
/* */
