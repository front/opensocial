<?php

/* profiles/social/themes/socialbase/templates/views/views-view--activity-stream-notifications--block.html.twig */
class __TwigTemplate_bd6180181b8a01a85be13b984a1aa67f37a19163785750dbb237a4d60a0c461c extends Twig_Template
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
        $tags = array("set" => 36, "if" => 46);
        $filters = array("clean_class" => 38);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 36
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 38
(isset($context["id"]) ? $context["id"] : null))), 2 => ("view-id-" .         // line 39
(isset($context["id"]) ? $context["id"] : null)), 3 => ("view-display-id-" .         // line 40
(isset($context["display_id"]) ? $context["display_id"] : null)), 4 => ((        // line 41
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 44
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 46
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
  ";
        }
        // line 49
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 50
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 51
            echo "    <div class=\"view-header\">
      ";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 55
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 56
            echo "    <div class=\"view-filters form-group\">
      ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 60
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 61
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 67
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
            echo "
  ";
        } elseif (        // line 68
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 69
            echo "    <li>
      <div class=\"dropdown-header\">
        ";
            // line 71
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "
      </div>
    </li>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 77
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
            echo "
  ";
        }
        // line 79
        echo "
  ";
        // line 80
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 81
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
            echo "
  ";
        }
        // line 83
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 84
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 88
        echo "
  ";
        // line 89
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 90
            echo "    <div class=\"view-footer\">
      ";
            // line 91
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 94
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 95
            echo "    <div class=\"feed-icons\">
      ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 99
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/views/views-view--activity-stream-notifications--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 99,  183 => 96,  180 => 95,  177 => 94,  171 => 91,  168 => 90,  166 => 89,  163 => 88,  157 => 85,  154 => 84,  151 => 83,  145 => 81,  143 => 80,  140 => 79,  134 => 77,  132 => 76,  129 => 75,  122 => 71,  118 => 69,  116 => 68,  111 => 67,  109 => 66,  106 => 65,  100 => 62,  97 => 61,  94 => 60,  88 => 57,  85 => 56,  82 => 55,  76 => 52,  73 => 51,  71 => 50,  66 => 49,  60 => 47,  58 => 46,  54 => 45,  49 => 44,  47 => 41,  46 => 40,  45 => 39,  44 => 38,  43 => 36,);
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
/* {%*/
/*   set classes = [*/
/*     'view',*/
/*     'view-' ~ id|clean_class,*/
/*     'view-id-' ~ id,*/
/*     'view-display-id-' ~ display_id,*/
/*     dom_id ? 'js-view-dom-id-' ~ dom_id,*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ title_prefix }}*/
/*   {% if title %}*/
/*     {{ title }}*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% if header %}*/
/*     <div class="view-header">*/
/*       {{ header }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if exposed %}*/
/*     <div class="view-filters form-group">*/
/*       {{ exposed }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if attachment_before %}*/
/*     <div class="attachment attachment-before">*/
/*       {{ attachment_before }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if rows %}*/
/*       {{ rows }}*/
/*   {% elseif empty %}*/
/*     <li>*/
/*       <div class="dropdown-header">*/
/*         {{ empty }}*/
/*       </div>*/
/*     </li>*/
/*   {% endif %}*/
/* */
/*   {% if more %}*/
/*     {{ more }}*/
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
/* */
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
/* </div>*/
/* */
