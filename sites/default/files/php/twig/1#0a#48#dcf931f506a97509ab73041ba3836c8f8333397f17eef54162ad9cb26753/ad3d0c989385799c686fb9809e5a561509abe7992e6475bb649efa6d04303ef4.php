<?php

/* themes/custom/gapminder/templates/page.html.twig */
class __TwigTemplate_0a48dcf931f506a97509ab73041ba3836c8f8333397f17eef54162ad9cb26753 extends Twig_Template
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
        // line 75
        echo "<div id=\"page-wrapper\" class=\"inner-page-wrapper\">
  <div id=\"page\" class=\"innerpages\">
      <span class=\"openleftbar\"><img src=\"";
        // line 77
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/hamburger_white.png\"/></span>
      <span class=\"closeleftbar\"><img src=\"";
        // line 78
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/hamburger_white.png\"/></span>
      <div class=\"mobile_logo\">";
        // line 79
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mobile_header_logo"]) ? $context["mobile_header_logo"] : null), "html", null, true);
        echo "
      <div class=\"responsivemenu\">
";
        // line 82
        echo "    <div class=\"mobile_searchbox\">
        <gcse:searchbox-only resultsUrl=\"";
        // line 83
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/gsearch\" queryParameterName=\"q\" gname=\"mobilesearch\"></gcse:searchbox-only>
    </div>
    <div class=\"mobile_menu\"><li class=\"goback\">Home</li>";
        // line 85
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "</div>
</div>   
      </div>  
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 88
        echo $this->env->getExtension('drupal_core')->renderVar(t("Site header"));
        echo "\">     
      <div class=\"section layout-container clearfix headertop\">
        ";
        // line 90
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "     
        <div class=\"google-search-box\">
            <span class=\"gapminder-gst\">
            <gcse:searchbox-only resultsUrl=\"";
        // line 93
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/gsearch\" queryParameterName=\"q\" gname=\"storesearch\"></gcse:searchbox-only>
            </span>
        </div>     
        ";
        // line 96
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["LangDropdown"]) ? $context["LangDropdown"] : null));
        echo "               
      </div>
    </header>
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
    ";
        // line 100
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "messages", array()), "html", null, true);
        echo "        
      <div id=\"main\" class=\"layout-main clearfix\">
";
        // line 103
        echo "    ";
        if ( !$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "label", array())) {
            // line 104
            echo "        ";
            $context["available"] = "page";
            // line 105
            echo "     ";
        }
        echo "    
";
        // line 106
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 107
            echo "    <div class=\"container-left ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
            echo "\">
";
        } elseif (        // line 108
(isset($context["related"]) ? $context["related"] : null)) {
            echo "   
    <div class=\"container-left ";
            // line 109
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
            echo "\">            
";
        }
        // line 110
        echo "    
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 114
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 115
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Tabs"));
            echo "\">
                ";
            // line 116
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
            echo "
              </nav>
            ";
        }
        // line 119
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "
            ";
        // line 120
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 121
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</ul>
            ";
        }
        // line 123
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
            ";
        // line 124
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 125
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 126
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
              </h1>
            ";
        }
        // line 129
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo " 
            
";
        // line 136
        echo "                
            ";
        // line 137
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
          </section>
        </main> 
        ";
        // line 140
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 141
            echo "        </div>
        <div class=\"container-right ";
            // line 142
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
            echo "\">
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 145
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
            </aside>
          </div>
        </div>        
        ";
        } elseif (        // line 149
(isset($context["related"]) ? $context["related"] : null)) {
            // line 150
            echo "        </div>
        <div class=\"container-right ";
            // line 151
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
            echo "\">
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              <h2>";
            // line 154
            echo $this->env->getExtension('drupal_core')->renderVar(t("Related"));
            echo " </h2>  
              ";
            // line 155
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["related"]) ? $context["related"] : null), "html", null, true);
            echo "
            </aside>
          </div>
        </div>                          
        ";
        }
        // line 159
        echo "    
      </div>
    </div>
    <div id=\"site-footer__wrapper\">
      <footer class=\"site-footer section layout-container\">
        ";
        // line 164
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 165
            echo "          <div id=\"footer-columns\" class=\"clearfix\">
            ";
            // line 166
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true);
            echo "
            ";
            // line 167
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true);
            echo "
            ";
            // line 168
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true);
            echo "
            ";
            // line 169
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 172
        echo "      </footer>
    </div>
        <script type=\"text/javascript\" src=\"//static.addtoany.com/menu/page.js\"></script> 
  </div>
</div>
<div class=\"overlay\"></div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gapminder/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 172,  234 => 169,  230 => 168,  226 => 167,  222 => 166,  219 => 165,  217 => 164,  210 => 159,  202 => 155,  198 => 154,  192 => 151,  189 => 150,  187 => 149,  180 => 145,  174 => 142,  171 => 141,  169 => 140,  163 => 137,  160 => 136,  154 => 129,  148 => 126,  145 => 125,  143 => 124,  138 => 123,  132 => 121,  130 => 120,  125 => 119,  119 => 116,  114 => 115,  112 => 114,  106 => 110,  101 => 109,  97 => 108,  92 => 107,  90 => 106,  85 => 105,  82 => 104,  79 => 103,  74 => 100,  67 => 96,  61 => 93,  55 => 90,  50 => 88,  44 => 85,  39 => 83,  36 => 82,  31 => 79,  27 => 78,  23 => 77,  19 => 75,);
    }
}
