<?php

/* profiles/social/modules/social_features/social_user/templates/account-header-links.html.twig */
class __TwigTemplate_1ebcd599cdd8b8d0ffb34419d9832620a6ce5ea5047107a08de3bc079c697047 extends Twig_Template
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
        $tags = array("trans" => 23, "for" => 29, "if" => 32);
        $filters = array("t" => 17, "without" => 29);
        $functions = array("path" => 17);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('trans', 'for', 'if'),
                array('t', 'without'),
                array('path')
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

        // line 15
        echo "

<a href=\"";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
        echo "\" class=\"navbar-brand\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
        echo "\" rel=\"home\">
  <img id=\"front-page-logo\" src=\"/";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/social-logo-white.svg\" alt=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
        echo "\" />
</a>

<div class=\"navbar-header\">
  <button href=\"#\" data-toggle=\"collapse\" data-target=\"#menu-dropdown\" type=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"navbar-toggle collapsed\">
    <span>";
        // line 23
        echo t("Menu", array());
        echo "</span>
    <span class=\"sr-only\">
      ";
        // line 25
        echo t("Toggle navigation", array());
        // line 26
        echo "    </span>
  </button>
  <ul class=\"nav navbar-nav navbar-right\">
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_without((isset($context["links"]) ? $context["links"] : null), "search_block"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "      <li class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "classes", array()), "html", null, true));
            echo "\">
          <a href=\"";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
            echo "\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_classes", array()), "html", null, true));
            echo "\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_attributes", array()), "html", null, true));
            echo " >
            ";
            // line 32
            if ($this->getAttribute($context["item"], "icon_image", array())) {
                // line 33
                echo "              ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "icon_image", array()), "html", null, true));
                echo "
            ";
            } elseif ($this->getAttribute(            // line 34
$context["item"], "icon_classes", array())) {
                // line 35
                echo "              <svg class=\"icon-white icon-medium pull-left ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "icon_classes", array()), "html", null, true));
                echo "\">
                <use xlink:href=\"#";
                // line 36
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "icon_classes", array()), "html", null, true));
                echo "\" />
              </svg>
            ";
            }
            // line 39
            echo "            <span class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title_classes", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
            echo "</span>
          </a>
          ";
            // line 41
            if ($this->getAttribute($context["item"], "below", array())) {
                // line 42
                echo "              ";
                if (twig_test_iterable($this->getAttribute($context["item"], "below", array()))) {
                    // line 43
                    echo "                <ul class=\"dropdown-menu\">
                  ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 45
                        echo "                    ";
                        if ($this->getAttribute($context["item"], "url", array())) {
                            // line 46
                            echo "                      <li class=\"";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "classes", array()), "html", null, true));
                            echo "\">
                        <a href=\"";
                            // line 47
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\" class=\"";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_classes", array()), "html", null, true));
                            echo "\" ";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_attributes", array()), "html", null, true));
                            echo " >
                          <span class=\"";
                            // line 48
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title_classes", array()), "html", null, true));
                            echo "\">";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo "</span>
                        </a>
                      </li>
                    ";
                        } elseif ($this->getAttribute(                        // line 51
$context["item"], "divider", array())) {
                            // line 52
                            echo "                      <li class=\"";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "classes", array()), "html", null, true));
                            echo "\"></li>
                    ";
                        } else {
                            // line 54
                            echo "                      <li class=\"";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "classes", array()), "html", null, true));
                            echo "\" ";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                            echo ">
                        ";
                            // line 55
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "tagline", array()), "html", null, true));
                            echo "
                        <strong class=\"text-truncate\"> ";
                            // line 56
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "object", array()), "html", null, true));
                            echo " </strong>
                      </li>
                    ";
                        }
                        // line 59
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                </ul>
              ";
                } else {
                    // line 62
                    echo "                  <ul class=\"dropdown-menu\">
                      ";
                    // line 63
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "below", array()), "html", null, true));
                    echo "
                  </ul>
              ";
                }
                // line 66
                echo "          ";
            }
            // line 67
            echo "      </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "  </ul>
</div>

<div id=\"menu-dropdown\" aria-expanded=\"false\" class=\"collapse navbar-collapse\">
  <ul class=\"nav navbar-nav\">
    <li class=\"navbar-search\">
      ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["links"]) ? $context["links"] : null), "search_block", array()), "html", null, true));
        echo "
    </li>
    <li><a href=\"";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
        echo "\">";
        echo t("Home", array());
        echo "</a></li>
    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle clearfix\" data-toggle=dropdown aria-expanded=true aria-haspopup=true role=button>";
        // line 78
        echo t("Explore", array());
        echo " <span class=\"caret\"</span> </a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"/explore\">";
        // line 80
        echo t("Community", array());
        echo "</a></li>
        <li><a href=\"/all-groups\">";
        // line 81
        echo t("All groups", array());
        echo "</a></li>
        <li><a href=\"/community-events\">";
        // line 82
        echo t("All events", array());
        echo "</a></li>
        <li><a href=\"/newest-topics\">";
        // line 83
        echo t("All topics", array());
        echo "</a></li>
        <li><a href=\"/newest-members\">";
        // line 84
        echo t("All members", array());
        echo "</a></li>
      </ul>
    </li>

  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/social/modules/social_features/social_user/templates/account-header-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 84,  246 => 83,  242 => 82,  238 => 81,  234 => 80,  229 => 78,  223 => 77,  218 => 75,  210 => 69,  203 => 67,  200 => 66,  194 => 63,  191 => 62,  187 => 60,  181 => 59,  175 => 56,  171 => 55,  164 => 54,  158 => 52,  156 => 51,  148 => 48,  140 => 47,  135 => 46,  132 => 45,  128 => 44,  125 => 43,  122 => 42,  120 => 41,  112 => 39,  106 => 36,  101 => 35,  99 => 34,  94 => 33,  92 => 32,  84 => 31,  79 => 30,  75 => 29,  70 => 26,  68 => 25,  63 => 23,  53 => 18,  47 => 17,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * Links*/
/*  *  Link:*/
/*  *  - classes*/
/*  *  - label*/
/*  *  - url*/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* */
/* */
/* <a href="{{ path('<front>') }}" class="navbar-brand" title="{{ 'Home'|t }}" rel="home">*/
/*   <img id="front-page-logo" src="/{{ directory }}/images/social-logo-white.svg" alt="{{ 'Home'|t }}" />*/
/* </a>*/
/* */
/* <div class="navbar-header">*/
/*   <button href="#" data-toggle="collapse" data-target="#menu-dropdown" type="button" aria-haspopup="true" aria-expanded="false" class="navbar-toggle collapsed">*/
/*     <span>{% trans %} Menu {% endtrans %}</span>*/
/*     <span class="sr-only">*/
/*       {% trans %} Toggle navigation {% endtrans %}*/
/*     </span>*/
/*   </button>*/
/*   <ul class="nav navbar-nav navbar-right">*/
/*   {% for item in links|without('search_block') %}*/
/*       <li class="{{ item.classes }}">*/
/*           <a href="{{ item.url }}" class="{{ item.link_classes }}" {{ item.link_attributes }} >*/
/*             {% if item.icon_image %}*/
/*               {{ item.icon_image }}*/
/*             {% elseif item.icon_classes %}*/
/*               <svg class="icon-white icon-medium pull-left {{ item.icon_classes }}">*/
/*                 <use xlink:href="#{{ item.icon_classes }}" />*/
/*               </svg>*/
/*             {% endif %}*/
/*             <span class="{{item.title_classes}}">{{ item.title }}</span>*/
/*           </a>*/
/*           {% if item.below %}*/
/*               {% if item.below is iterable %}*/
/*                 <ul class="dropdown-menu">*/
/*                   {% for item in item.below %}*/
/*                     {% if item.url %}*/
/*                       <li class="{{ item.classes }}">*/
/*                         <a href="{{ item.url }}" class="{{ item.link_classes }}" {{ item.link_attributes }} >*/
/*                           <span class="{{item.title_classes}}">{{ item.title }}</span>*/
/*                         </a>*/
/*                       </li>*/
/*                     {% elseif item.divider %}*/
/*                       <li class="{{ item.classes }}"></li>*/
/*                     {% else %}*/
/*                       <li class="{{ item.classes }}" {{ item.attributes }}>*/
/*                         {{ item.tagline }}*/
/*                         <strong class="text-truncate"> {{ item.object }} </strong>*/
/*                       </li>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </ul>*/
/*               {% else %}*/
/*                   <ul class="dropdown-menu">*/
/*                       {{ item.below }}*/
/*                   </ul>*/
/*               {% endif %}*/
/*           {% endif %}*/
/*       </li>*/
/*   {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
/* <div id="menu-dropdown" aria-expanded="false" class="collapse navbar-collapse">*/
/*   <ul class="nav navbar-nav">*/
/*     <li class="navbar-search">*/
/*       {{ links.search_block }}*/
/*     </li>*/
/*     <li><a href="{{ path('<front>') }}">{% trans %} Home {% endtrans %}</a></li>*/
/*     <li class="dropdown"><a href="#" class="dropdown-toggle clearfix" data-toggle=dropdown aria-expanded=true aria-haspopup=true role=button>{% trans %} Explore {% endtrans %} <span class="caret"</span> </a>*/
/*       <ul class="dropdown-menu">*/
/*         <li><a href="/explore">{% trans %} Community {% endtrans %}</a></li>*/
/*         <li><a href="/all-groups">{% trans %} All groups {% endtrans %}</a></li>*/
/*         <li><a href="/community-events">{% trans %} All events {% endtrans %}</a></li>*/
/*         <li><a href="/newest-topics">{% trans %} All topics {% endtrans %}</a></li>*/
/*         <li><a href="/newest-members">{% trans %} All members {% endtrans %}</a></li>*/
/*       </ul>*/
/*     </li>*/
/* */
/*   </ul>*/
/* </div>*/
/* */
