<?php

/* profiles/social/themes/socialbase/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_8de45a0bf25356db72d6c40ed6fd80c23739f2159199cd149b7e35e46f0b91f0 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array("t" => 17, "without" => 21);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t', 'without'),
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

        // line 14
        echo "
";
        // line 15
        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()))) {
            // line 16
            echo "  <nav role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"sr-only\">";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"mini-pager\">
      ";
            // line 19
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 20
                echo "        <li class=\"pager__item pager__item--previous\">
          <a class=\"btn btn-raised btn-default\" href=\"";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span aria-hidden=\"true\">
              <svg class=\"icon-small icon-gray\">
                <use xlink:href=\"#icon-navigate_before\">  </use>
              </svg>
            </span>
            <span>";
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Newer items")));
                echo " </span>
          </a>
        </li>
      ";
            }
            // line 31
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 32
                echo "        <li class=\"pager__item pager__item--next\">
          <a class=\"btn btn-raised btn-default\" href=\"";
                // line 33
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span>";
                // line 34
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Older items")));
                echo " </span>
            <span aria-hidden=\"true\">
              <svg class=\"icon-small icon-gray\">
                <use xlink:href=\"#icon-navigate_next\"> </use>
              </svg>
            </span>
          </a>
        </li>
      ";
            }
            // line 43
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  95 => 34,  87 => 33,  84 => 32,  81 => 31,  74 => 27,  61 => 21,  58 => 20,  56 => 19,  51 => 17,  48 => 16,  46 => 15,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a views mini-pager.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_views_mini_pager()*/
/*  *//* */
/* #}*/
/* */
/* {% if items.previous or items.next %}*/
/*   <nav role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 class="sr-only">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="mini-pager">*/
/*       {% if items.previous %}*/
/*         <li class="pager__item pager__item--previous">*/
/*           <a class="btn btn-raised btn-default" href="{{ items.previous.href }}" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes|without('href', 'title', 'rel') }}>*/
/*             <span aria-hidden="true">*/
/*               <svg class="icon-small icon-gray">*/
/*                 <use xlink:href="#icon-navigate_before">  </use>*/
/*               </svg>*/
/*             </span>*/
/*             <span>{{ 'Newer items'|t }} </span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*       {% if items.next %}*/
/*         <li class="pager__item pager__item--next">*/
/*           <a class="btn btn-raised btn-default" href="{{ items.next.href }}" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes|without('href', 'title', 'rel') }}>*/
/*             <span>{{ 'Older items'|t }} </span>*/
/*             <span aria-hidden="true">*/
/*               <svg class="icon-small icon-gray">*/
/*                 <use xlink:href="#icon-navigate_next"> </use>*/
/*               </svg>*/
/*             </span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
