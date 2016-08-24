<?php

/* profiles/social/themes/socialbase/templates/block/block--views-block--sidebar.html.twig */
class __TwigTemplate_cfada4cea302f89cbecd0988c4c8d8a6342c0ba29f7802193b32a03e54453913 extends Twig_Template
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
        $tags = array("if" => 35, "trans" => 48);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 32
        echo "<div class=\"card card-with-actionbar hidden-xs\">
    <div class=\"card-head\">
        <header class=\"text-center\">";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "</header>
        ";
        // line 35
        if ((isset($context["subtitle"]) ? $context["subtitle"] : null)) {
            // line 36
            echo "        <div class=\"subtitle text-center\">
            ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 40
        echo "    </div>
    <div class=\"card-body\">
        <div class=\"list-group list-group-divider\">
            ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
        </div>
        <div class=\"card-actionbar text-center\">
            ";
        // line 46
        if ((isset($context["view_all_path"]) ? $context["view_all_path"] : null)) {
            // line 47
            echo "            <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_all_path"]) ? $context["view_all_path"] : null), "html", null, true));
            echo "\" class=\"btn btn-flat\">
              ";
            // line 48
            echo t("All", array());
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
            </a>
            ";
        }
        // line 51
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/block/block--views-block--sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 51,  84 => 48,  79 => 47,  77 => 46,  71 => 43,  66 => 40,  60 => 37,  57 => 36,  55 => 35,  47 => 34,  43 => 32,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a block.*/
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
/*  * - attributes: array of HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: Same as attributes, except applied to the main content*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="card card-with-actionbar hidden-xs">*/
/*     <div class="card-head">*/
/*         <header class="text-center">{{ title_prefix }} {{ label }} {{ title_suffix }}</header>*/
/*         {% if subtitle %}*/
/*         <div class="subtitle text-center">*/
/*             {{ subtitle }}*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <div class="card-body">*/
/*         <div class="list-group list-group-divider">*/
/*             {{ content }}*/
/*         </div>*/
/*         <div class="card-actionbar text-center">*/
/*             {% if view_all_path %}*/
/*             <a href="{{ view_all_path }}" class="btn btn-flat">*/
/*               {% trans %} All {% endtrans %} {{ label }}*/
/*             </a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
