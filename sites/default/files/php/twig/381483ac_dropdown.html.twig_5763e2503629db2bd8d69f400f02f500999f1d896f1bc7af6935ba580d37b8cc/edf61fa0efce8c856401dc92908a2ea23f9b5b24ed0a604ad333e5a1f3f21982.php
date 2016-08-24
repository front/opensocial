<?php

/* profiles/social/themes/socialbase/templates/form/dropdown.html.twig */
class __TwigTemplate_621c1514edc48f449e7fa71883848142fa7c4068b433f1cad1d215db5f2af533 extends Twig_Template
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
        $tags = array("if" => 15, "for" => 31);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 13
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown pull-right"), "method"), "html", null, true));
        echo "> ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        if ((isset($context["edit_mode"]) ? $context["edit_mode"] : null)) {
            // line 16
            echo "        <button id=\"post-visibility\" type=\"button\" disabled data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-default dropdown-toggle disabled icon-before\">
          <svg class=\"icon-black icon-small btn-icon\">
            <use id=\"btnicon\" xlink:href=\"#icon-";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["selected_material_icon"]) ? $context["selected_material_icon"] : null), "html", null, true));
            echo "\"></use>
          </svg>
          <span class=\"text\">";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true));
            echo " </span></button>
    ";
        } else {
            // line 22
            echo "      <button id=\"post-visibility\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-default dropdown-toggle icon-before\">
      <svg class=\"icon-black icon-small btn-icon\">
        <use id=\"btnicon\" xlink:href=\"#icon-";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["selected_material_icon"]) ? $context["selected_material_icon"] : null), "html", null, true));
            echo "\"></use>
      </svg>
      <span class=\"text\">";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true));
            echo " </span>
      <span class=\"caret\"></span>
  </button>
    <ul role=\"menu\" aria-labelledby=\"post-visibility\" class=\"dropdown-menu dropdown-md\">
      <li class=\"dropdown-header\">";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</li>
      ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["child"]) {
                // line 32
                echo "          ";
                if (($context["key"] == (isset($context["active"]) ? $context["active"] : null))) {
                    // line 33
                    echo "              <li class=\"list-group-item active\">
          ";
                } else {
                    // line 35
                    echo "              <li class=\"list-group-item\">
          ";
                }
                // line 37
                echo "                  ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["child"], "html", null, true));
                echo "
              </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </ul>
    ";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/form/dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  111 => 40,  101 => 37,  97 => 35,  93 => 33,  90 => 32,  86 => 31,  82 => 30,  75 => 26,  70 => 24,  66 => 22,  61 => 20,  56 => 18,  52 => 16,  49 => 15,  47 => 14,  43 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a dropdown element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the dropdown tag.*/
/*  * - options: The option element children.*/
/*  **/
/*  * @see template_preprocess_dropdown()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('dropdown pull-right') }}> {# 'pull-right' #}*/
/*     {# See PostForm.php we set edit_mode to true so people can't actually change the dropdown button for edit mode. #}*/
/*     {% if edit_mode %}*/
/*         <button id="post-visibility" type="button" disabled data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle disabled icon-before">*/
/*           <svg class="icon-black icon-small btn-icon">*/
/*             <use id="btnicon" xlink:href="#icon-{{ selected_material_icon }}"></use>*/
/*           </svg>*/
/*           <span class="text">{{ selected }} </span></button>*/
/*     {% else %}*/
/*       <button id="post-visibility" type="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle icon-before">*/
/*       <svg class="icon-black icon-small btn-icon">*/
/*         <use id="btnicon" xlink:href="#icon-{{ selected_material_icon }}"></use>*/
/*       </svg>*/
/*       <span class="text">{{ selected }} </span>*/
/*       <span class="caret"></span>*/
/*   </button>*/
/*     <ul role="menu" aria-labelledby="post-visibility" class="dropdown-menu dropdown-md">*/
/*       <li class="dropdown-header">{{ label }}</li>*/
/*       {% for key, child in items %}*/
/*           {% if key == active %}*/
/*               <li class="list-group-item active">*/
/*           {% else %}*/
/*               <li class="list-group-item">*/
/*           {% endif %}*/
/*                   {{ child }}*/
/*               </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     {% endif %}*/
/* </div>*/
/* */
