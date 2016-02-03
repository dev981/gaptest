<?php

/* themes/custom/barti/templates/page.html.twig */
class __TwigTemplate_4a54bdc005f8338b2c637254af34816e57cc6e27230cc0f05f93cb7c988e9687 extends Twig_Template
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
        $tags = array("if" => 110, "set" => 111, "for" => 157);
        $filters = array("raw" => 72, "t" => 87);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('raw', 't'),
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

<div id=\"page-wrapper\" class=\"inner-page-wrapper ";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["adminattr"]) ? $context["adminattr"] : null), "html", null, true));
        echo "\">
  <div id=\"page\" class=\"innerpages\">
      <span class=\"openleftbar\"><img src=\"";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
        echo "/themes/custom/barti/images/hamburger_white.png\"/></span>
      <span class=\"closeleftbar\"><img src=\"";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
        echo "/themes/custom/barti/images/hamburger_white.png\"/></span>
        <div class=\"mobile_logo\">
            
            <!-- Logo for the small screen -->
            
            ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mobile_header_logo"]) ? $context["mobile_header_logo"] : null), "html", null, true));
        echo "
            
            <!-- Responsive menus for the small screen -->
            
          <div class=\"responsivemenu\">
             <div class=\"mobile_searchbox\">
                  <gcse:searchbox-only resultsUrl=\"";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["langauge"]) ? $context["langauge"] : null), "html", null, true));
        echo "/gsearch\" queryParameterName=\"q\" gname=\"mobilesearch\"></gcse:searchbox-only>
              </div>
              <div class=\"lang_dropdown\">
                  ";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["LangDropdown"]) ? $context["LangDropdown"] : null)));
        echo "
              </div>
              
              <div class=\"user_account_menu\">
                ";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_account", array()), "html", null, true));
        echo " 
              </div>
              <div class=\"mobile_menu inner_menu\">
                  <li class=\"goback\">Home</li>
                  ";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
              </div>
          </div>   
        </div>  
          
          <!-- Header of the page -->
          
        <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">     
          <div class=\"section layout-container clearfix headertop\">
                ";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "  
            <div class=\"header_right_section\">
                <div class=\"google-search-box\">
                    <span class=\"gapminder-gst\">
                       <gcse:searchbox-only resultsUrl=\"";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["langauge"]) ? $context["langauge"] : null), "html", null, true));
        echo "/gsearch\" queryParameterName=\"q\" gname=\"storesearch\"></gcse:searchbox-only>
                         
                    </span>
                </div> 
                <span>
                ";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["LangDropdown"]) ? $context["LangDropdown"] : null)));
        echo "             
                </span>  
                ";
        // line 100
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_account", array()), "html", null, true));
        echo "   
            </div>
          </div>
        </header>
          
          <!-- The content of the page -->
          
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
    ";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "messages", array()), "html", null, true));
        echo "
      <div id=\"main\" class=\"layout-main clearfix\">
    ";
        // line 110
        if ( !$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "label", array())) {
            // line 111
            echo "        ";
            $context["available"] = "page";
            // line 112
            echo "     ";
        }
        echo "    
";
        // line 113
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 114
            echo "    <div class=\"container-left ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true));
            echo "\">
";
        } elseif (        // line 115
(isset($context["related"]) ? $context["related"] : null)) {
            echo "   
    <div class=\"container-left ";
            // line 116
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true));
            echo "\">            
";
        }
        // line 117
        echo "    
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 121
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 122
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
                ";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
              </nav>
            ";
        }
        // line 126
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
        // line 127
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 128
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
            ";
        }
        // line 130
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
            ";
        // line 131
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 132
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 133
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
              </h1>
            ";
        }
        // line 136
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo " 
                
            ";
        // line 138
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          </section>
        </main> 
      ";
        // line 141
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 142
            echo "        </div>
        <div class=\"container-right ";
            // line 143
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true));
            echo "\">
          <div id=\"sidebar-first\" class=\"column sidebar ";
            // line 144
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true));
            echo "\">
            <aside class=\"section ";
            // line 145
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["type1"]) ? $context["type1"] : null), "html", null, true));
            echo "\" role=\"complementary\">
              ";
            // line 146
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
          </div>
        </div>        
        ";
        } elseif ( !twig_test_empty(        // line 150
(isset($context["related_icons"]) ? $context["related_icons"] : null))) {
            // line 151
            echo "        </div>
        <div class=\"container-right ";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true));
            echo "\">
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              <h2>";
            // line 155
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Related")));
            echo " </h2>  
               <div class=\"view-content\">              
          ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related_icons"]) ? $context["related_icons"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo "   
                 ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["value"]);
                foreach ($context['_seq'] as $context["key1"] => $context["value1"]) {
                    echo "  
                ";
                    // line 159
                    if (($context["key1"] == "nodata")) {
                        // line 160
                        echo "                         <div class=\"no-results\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value1"], "html", null, true));
                        echo "</div>
                 ";
                    }
                    // line 161
                    echo "  
                ";
                    // line 162
                    if (($context["key1"] == "data")) {
                        echo "             
 <div class=\"viewdata views-row\">
<div class=\"views-field views-field-nothing\"><span class=\"field-content\"><div class=\"fc_rows related\">
    <div class=\"fc_image related\">
     <a href=\"";
                        // line 166
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
                        echo "/";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value1"], "rel_alias", array()), "html", null, true));
                        echo "\"><img typeof=\"foaf:Image\" alt=\"\" src=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value1"], "rel_imageurl", array()), "html", null, true));
                        echo "\">

</a>

    </div>
<div class=\"fc_title_sub related\">
     <div class=\"fc_title related\"> 
      <a href=\"";
                        // line 173
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
                        echo "/";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value1"], "rel_alias", array()), "html", null, true));
                        echo "\"> ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value1"], "rel_title", array()), "html", null, true));
                        echo "</a>
       </div>
    <div class=\"fc_sub related\">
      <a href=\"";
                        // line 176
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
                        echo "/";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value1"], "rel_alias", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value1"], "rel_subtitle", array()), "html", null, true));
                        echo "</a> 
      </div>
</div>
</div></span></div>
         </div>
                          ";
                    }
                    // line 181
                    echo "  
                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['value1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "  
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "       
                       </div>
              
              
              
            </aside>
          </div>
        </div>                          
        ";
        }
        // line 191
        echo "    
      </div>
    </div>
          
          <!-- Footer of the page -->
          
    <div id=\"site-footer__wrapper\">
      <footer class=\"site-footer section layout-container\">
        ";
        // line 199
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 200
            echo "          <div id=\"footer-columns\" class=\"clearfix\">
            ";
            // line 201
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 202
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 203
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 204
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 207
        echo "      </footer>
    </div>
        <script type=\"text/javascript\" src=\"//static.addtoany.com/menu/page.js\"></script> 
  </div>
</div>
<div class=\"overlay\"></div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/barti/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 207,  391 => 204,  387 => 203,  383 => 202,  379 => 201,  376 => 200,  374 => 199,  364 => 191,  353 => 183,  346 => 182,  339 => 181,  326 => 176,  316 => 173,  302 => 166,  295 => 162,  292 => 161,  286 => 160,  284 => 159,  278 => 158,  272 => 157,  267 => 155,  261 => 152,  258 => 151,  256 => 150,  249 => 146,  245 => 145,  241 => 144,  237 => 143,  234 => 142,  232 => 141,  226 => 138,  220 => 136,  214 => 133,  211 => 132,  209 => 131,  204 => 130,  198 => 128,  196 => 127,  191 => 126,  185 => 123,  180 => 122,  178 => 121,  172 => 117,  167 => 116,  163 => 115,  158 => 114,  156 => 113,  151 => 112,  148 => 111,  146 => 110,  141 => 108,  130 => 100,  125 => 98,  116 => 93,  109 => 89,  104 => 87,  94 => 80,  87 => 76,  80 => 72,  73 => 69,  64 => 63,  56 => 58,  52 => 57,  47 => 55,  43 => 53,);
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
/* */
/* <div id="page-wrapper" class="inner-page-wrapper {{ adminattr }}">*/
/*   <div id="page" class="innerpages">*/
/*       <span class="openleftbar"><img src="{{ base_url }}/themes/custom/barti/images/hamburger_white.png"/></span>*/
/*       <span class="closeleftbar"><img src="{{ base_url }}/themes/custom/barti/images/hamburger_white.png"/></span>*/
/*         <div class="mobile_logo">*/
/*             */
/*             <!-- Logo for the small screen -->*/
/*             */
/*             {{ mobile_header_logo }}*/
/*             */
/*             <!-- Responsive menus for the small screen -->*/
/*             */
/*           <div class="responsivemenu">*/
/*              <div class="mobile_searchbox">*/
/*                   <gcse:searchbox-only resultsUrl="{{ base_url }}{{ langauge }}/gsearch" queryParameterName="q" gname="mobilesearch"></gcse:searchbox-only>*/
/*               </div>*/
/*               <div class="lang_dropdown">*/
/*                   {{ LangDropdown|raw }}*/
/*               </div>*/
/*               */
/*               <div class="user_account_menu">*/
/*                 {{ page.user_account }} */
/*               </div>*/
/*               <div class="mobile_menu inner_menu">*/
/*                   <li class="goback">Home</li>*/
/*                   {{ page.primary_menu }}*/
/*               </div>*/
/*           </div>   */
/*         </div>  */
/*           */
/*           <!-- Header of the page -->*/
/*           */
/*         <header id="header" class="header" role="banner" aria-label="{{ 'Site header'|t}}">     */
/*           <div class="section layout-container clearfix headertop">*/
/*                 {{ page.header }}  */
/*             <div class="header_right_section">*/
/*                 <div class="google-search-box">*/
/*                     <span class="gapminder-gst">*/
/*                        <gcse:searchbox-only resultsUrl="{{ base_url }}{{ langauge }}/gsearch" queryParameterName="q" gname="storesearch"></gcse:searchbox-only>*/
/*                          */
/*                     </span>*/
/*                 </div> */
/*                 <span>*/
/*                 {{ LangDropdown|raw }}             */
/*                 </span>  */
/*                 {{ page.user_account }}   */
/*             </div>*/
/*           </div>*/
/*         </header>*/
/*           */
/*           <!-- The content of the page -->*/
/*           */
/*     <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">*/
/*     {{ page.messages }}*/
/*       <div id="main" class="layout-main clearfix">*/
/*     {% if not node.label %}*/
/*         {% set available = 'page' %}*/
/*      {% endif %}    */
/* {% if page.sidebar_first %}*/
/*     <div class="container-left {{ available }}">*/
/* {% elseif related %}   */
/*     <div class="container-left {{available }}">            */
/* {% endif %}    */
/*         <main id="content" class="column main-content" role="main">*/
/*           <section class="section">*/
/*             <a id="main-content" tabindex="-1"></a>*/
/*             {% if tabs %}*/
/*               <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*                 {{ tabs }}*/
/*               </nav>*/
/*             {% endif %}*/
/*             {{ page.help }}*/
/*             {% if action_links %}*/
/*               <ul class="action-links">{{ action_links }}</ul>*/
/*             {% endif %}*/
/*             {{ title_prefix }}*/
/*             {% if title %}*/
/*               <h1 class="title" id="page-title">*/
/*                 {{ title }}*/
/*               </h1>*/
/*             {% endif %}*/
/*             {{ title_suffix }} */
/*                 */
/*             {{ page.content }}*/
/*           </section>*/
/*         </main> */
/*       {% if page.sidebar_first %}*/
/*         </div>*/
/*         <div class="container-right {{ available }}">*/
/*           <div id="sidebar-first" class="column sidebar {{ type }}">*/
/*             <aside class="section {{ type1 }}" role="complementary">*/
/*               {{ page.sidebar_first }}*/
/*             </aside>*/
/*           </div>*/
/*         </div>        */
/*         {% elseif not related_icons is empty  %}*/
/*         </div>*/
/*         <div class="container-right {{ available }}">*/
/*           <div id="sidebar-first" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               <h2>{{ 'Related'|t }} </h2>  */
/*                <div class="view-content">              */
/*           {% for key,value in related_icons %}   */
/*                  {% for key1,value1 in value %}  */
/*                 {% if key1 =='nodata' %}*/
/*                          <div class="no-results">{{ value1 }}</div>*/
/*                  {% endif %}  */
/*                 {% if key1 =='data' %}             */
/*  <div class="viewdata views-row">*/
/* <div class="views-field views-field-nothing"><span class="field-content"><div class="fc_rows related">*/
/*     <div class="fc_image related">*/
/*      <a href="{{ base_url}}/{{ value1.rel_alias}}"><img typeof="foaf:Image" alt="" src="{{ value1.rel_imageurl }}">*/
/* */
/* </a>*/
/* */
/*     </div>*/
/* <div class="fc_title_sub related">*/
/*      <div class="fc_title related"> */
/*       <a href="{{ base_url}}/{{ value1.rel_alias }}"> {{ value1.rel_title }}</a>*/
/*        </div>*/
/*     <div class="fc_sub related">*/
/*       <a href="{{ base_url}}/{{ value1.rel_alias }}">{{ value1.rel_subtitle }}</a> */
/*       </div>*/
/* </div>*/
/* </div></span></div>*/
/*          </div>*/
/*                           {% endif %}  */
/*                        {% endfor %}  */
/*                {% endfor %}       */
/*                        </div>*/
/*               */
/*               */
/*               */
/*             </aside>*/
/*           </div>*/
/*         </div>                          */
/*         {% endif %}    */
/*       </div>*/
/*     </div>*/
/*           */
/*           <!-- Footer of the page -->*/
/*           */
/*     <div id="site-footer__wrapper">*/
/*       <footer class="site-footer section layout-container">*/
/*         {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*           <div id="footer-columns" class="clearfix">*/
/*             {{ page.footer_first }}*/
/*             {{ page.footer_second }}*/
/*             {{ page.footer_third }}*/
/*             {{ page.footer_fourth }}*/
/*           </div>*/
/*         {% endif %}*/
/*       </footer>*/
/*     </div>*/
/*         <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script> */
/*   </div>*/
/* </div>*/
/* <div class="overlay"></div>*/
