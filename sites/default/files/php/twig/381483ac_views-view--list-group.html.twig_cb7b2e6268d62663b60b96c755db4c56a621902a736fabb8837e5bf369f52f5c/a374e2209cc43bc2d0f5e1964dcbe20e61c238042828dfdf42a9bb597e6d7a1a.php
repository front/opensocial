<?php

/* profiles/social/themes/socialbase/templates/views/views-view--list-group.html.twig */
class __TwigTemplate_cbd19941905aa9c0132fc6dd7cebca178415fe4b273fd8c75ae411fea0ef3590 extends Twig_Template
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
        $tags = array("if" => 37);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 35
        echo "
  ";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 37
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 38
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
  ";
        }
        // line 40
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 41
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 42
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
  ";
        }
        // line 44
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 45
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
            echo "
  ";
        }
        // line 47
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 48
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
            echo "
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 52
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
            echo "
  ";
        } elseif (        // line 53
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 54
            echo "    <div class=\"list-group-item\">
      <small class=\"text-gray-lighter list-group-item-text\">
        ";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "
      </small>
    </div>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 62
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
            echo "
  ";
        }
        // line 64
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 65
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 69
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 70
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
            echo "
  ";
        }
        // line 72
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 73
            echo "    <div class=\"view-footer\">
      ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 77
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 78
            echo "    <div class=\"feed-icons\">
      ";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/views/views-view--list-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 79,  159 => 78,  156 => 77,  150 => 74,  147 => 73,  144 => 72,  138 => 70,  135 => 69,  129 => 66,  126 => 65,  123 => 64,  117 => 62,  115 => 61,  112 => 60,  105 => 56,  101 => 54,  99 => 53,  94 => 52,  92 => 51,  89 => 50,  83 => 48,  80 => 47,  74 => 45,  71 => 44,  65 => 42,  63 => 41,  58 => 40,  52 => 38,  50 => 37,  46 => 36,  43 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for main view template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Remaining HTML attributes for the element.*/
/*  * - css_name: A css-safe version of the view name.*/
/*  * - css_class: The user-specified classes names, if any.*/
/*  * - header: The optional header.*/
/*  * - footer: The optional footer.*/
/*  * - rows: The results of the view query, if any.*/
/*  * - empty: The content to display if there are no rows.*/
/*  * - pager: The optional pager next/prev links to display.*/
/*  * - exposed: Exposed widget form/info to display.*/
/*  * - feed_icons: Optional feed icons to display.*/
/*  * - more: An optional link to the next page of results.*/
/*  * - title: Title of the view, only used when displaying in the admin preview.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the view title.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the view title.*/
/*  * - attachment_before: An optional attachment view to be displayed before the*/
/*  *   view content.*/
/*  * - attachment_after: An optional attachment view to be displayed after the*/
/*  *   view content.*/
/*  * - dom_id: Unique id for every view being printed to give unique class for*/
/*  *   Javascript.*/
/*  **/
/*  * @see template_preprocess_views_view()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* */
/*   {{ title_prefix }}*/
/*   {% if title %}*/
/*     {{ title }}*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% if header %}*/
/*       {{ header }}*/
/*   {% endif %}*/
/*   {% if exposed %}*/
/*       {{ exposed }}*/
/*   {% endif %}*/
/*   {% if attachment_before %}*/
/*       {{ attachment_before }}*/
/*   {% endif %}*/
/* */
/*   {% if rows %}*/
/*       {{ rows }}*/
/*   {% elseif empty %}*/
/*     <div class="list-group-item">*/
/*       <small class="text-gray-lighter list-group-item-text">*/
/*         {{ empty }}*/
/*       </small>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if pager %}*/
/*     {{ pager }}*/
/*   {% endif %}*/
/*   {% if attachment_after %}*/
/*     <div class="attachment attachment-after">*/
/*       {{ attachment_after }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if more %}*/
/*     {{ more }}*/
/*   {% endif %}*/
/*   {% if footer %}*/
/*     <div class="view-footer">*/
/*       {{ footer }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if feed_icons %}*/
/*     <div class="feed-icons">*/
/*       {{ feed_icons }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
