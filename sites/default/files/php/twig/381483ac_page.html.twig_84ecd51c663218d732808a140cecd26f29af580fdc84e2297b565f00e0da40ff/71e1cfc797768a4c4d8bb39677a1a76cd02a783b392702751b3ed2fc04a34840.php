<?php

/* profiles/social/themes/socialbase/templates/layout/page.html.twig */
class __TwigTemplate_6fd70262790d8ac7d41d850670121ede0cb1cc68ae6473d9b822c67bb717d86e extends Twig_Template
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
        $tags = array("if" => 62);
        $filters = array("t" => 54);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 53
        echo "
<header id=\"header\" role=\"banner\" aria-label=\"";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
  ";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
</header>

<main id=\"content\" class=\"column main-container\" role=\"main\">

  ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 62
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_navigation", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()))) {
            // line 63
            echo "    <div class=\"container hero-container\">

      ";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero", array()), "html", null, true));
            echo "
      ";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true));
            echo "

      ";
            // line 68
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_navigation", array())) {
                // line 69
                echo "        <div class=\"brand-secondary z-depth-1\">
          ";
                // line 70
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_navigation", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 73
            echo "
    </div>
  ";
        }
        // line 76
        echo "
  <a id=\"main-content\" tabindex=\"-1\"></a>
  <div class=\"container\">
    <div class=\"row margin-top-l\">

      <div role=\"complementary\" class=\"col-xs-12 col-sm-4 col-sm-last margin-top-complementary margin-bottom-l\">
        ";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "complementary", array()), "html", null, true));
        echo "
      </div>

      <div class=\"col-xs-12 col-sm-8\">
        ";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </div>

    </div>
  </div>

</main>

<footer role=\"contentinfo\">
  ";
        // line 95
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
</footer>

";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["svg_icons"]) ? $context["svg_icons"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "profiles/social/themes/socialbase/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 98,  121 => 95,  109 => 86,  102 => 82,  94 => 76,  89 => 73,  83 => 70,  80 => 69,  78 => 68,  73 => 66,  69 => 65,  65 => 63,  63 => 62,  58 => 60,  50 => 55,  46 => 54,  43 => 53,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.highlighted: Items for the highlighted region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.featured_top: Items for the featured top region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.featured_bottom_first: Items for the first featured bottom region.*/
/*  * - page.featured_bottom_second: Items for the second featured bottom region.*/
/*  * - page.featured_bottom_third: Items for the third featured bottom region.*/
/*  * - page.footer_first: Items for the first footer column.*/
/*  * - page.footer_second: Items for the second footer column.*/
/*  * - page.footer_third: Items for the third footer column.*/
/*  * - page.footer_fourth: Items for the fourth footer column.*/
/*  * - page.footer_fifth: Items for the fifth footer column.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* <header id="header" role="banner" aria-label="{{ 'Site header'|t}}">*/
/*   {{ page.header }}*/
/* </header>*/
/* */
/* <main id="content" class="column main-container" role="main">*/
/* */
/*   {{ page.breadcrumb }}*/
/* */
/*   {% if (page.hero or page.secondary_navigation or page.title) %}*/
/*     <div class="container hero-container">*/
/* */
/*       {{ page.hero }}*/
/*       {{ page.title }}*/
/* */
/*       {% if page.secondary_navigation %}*/
/*         <div class="brand-secondary z-depth-1">*/
/*           {{ page.secondary_navigation }}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <a id="main-content" tabindex="-1"></a>*/
/*   <div class="container">*/
/*     <div class="row margin-top-l">*/
/* */
/*       <div role="complementary" class="col-xs-12 col-sm-4 col-sm-last margin-top-complementary margin-bottom-l">*/
/*         {{ page.complementary }}*/
/*       </div>*/
/* */
/*       <div class="col-xs-12 col-sm-8">*/
/*         {{ page.content }}*/
/*       </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/* </main>*/
/* */
/* <footer role="contentinfo">*/
/*   {{ page.footer }}*/
/* </footer>*/
/* */
/* {{ svg_icons }}*/
/* */
