<?php

/* themes/custom/gapminder/templates/page--front.html.twig */
class __TwigTemplate_413cc592b24d35df1306ecde297cb506f803c0ae2175e0653708405622bc1ec4 extends Twig_Template
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
        echo "<div class=\"responsivemenu\">
    <div class=\"mobile_logo\">";
        // line 76
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mobile_header_logo"]) ? $context["mobile_header_logo"] : null), "html", null, true);
        echo "</div>
    <div class=\"mobile_searchbox\">
        <gcse:searchbox-only resultsUrl=\"";
        // line 78
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/gsearch\" queryParameterName=\"q\" gname=\"mobilesearch\"></gcse:searchbox-only>
    </div>
    <div class=\"mobile_menu\"><li class=\"goback\">Home</li>";
        // line 80
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "</div>
</div>   
<div id=\"page-wrapper\" class=\"front\">
  <div id=\"page\">
      <span class=\"openleftbar\"><img src=\"";
        // line 84
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/hamburger_white.png\"/></span>
      <span class=\"closeleftbar\"><img src=\"";
        // line 85
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/hamburger_white.png\"/></span>
      <div class=\"mobile_logo\">";
        // line 86
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mobile_header_logo"]) ? $context["mobile_header_logo"] : null), "html", null, true);
        echo "</div>       
    <header id=\"header\" class=\"header container\" role=\"banner\" aria-label=\"";
        // line 87
        echo $this->env->getExtension('drupal_core')->renderVar(t("Site header"));
        echo "\">
      <div class=\"header_container\">
        ";
        // line 89
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 90
            echo "          <a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
            <img src=\"";
            // line 91
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" />
          </a>
        ";
        }
        // line 94
        echo "        ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
      </div>
    </header>
    <div id=\"main-wrapper\" class=\"body_container\">
        ";
        // line 98
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "messages", array()), "html", null, true);
        echo "
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 100
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true);
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 104
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
            ";
        // line 105
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 106
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 107
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
              </h1>
            ";
        }
        // line 110
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
            ";
        // line 111
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 112
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Tabs"));
            echo "\">
                ";
            // line 113
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
            echo "
              </nav>
            ";
        }
        // line 116
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "
            ";
        // line 117
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 118
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</ul>
            ";
        }
        // line 120
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
          </section>
        </main>
      </div>
    </div>
    <div id=\"footer_container\">
      <footer class=\"site-footer section footer-container\">
        ";
        // line 127
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) {
            // line 128
            echo "          <div id=\"site-footer-last\" role=\"contentinfo\">
            ";
            // line 129
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 132
        echo "      </footer>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gapminder/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 132,  155 => 129,  152 => 128,  150 => 127,  139 => 120,  133 => 118,  131 => 117,  126 => 116,  120 => 113,  115 => 112,  113 => 111,  108 => 110,  102 => 107,  99 => 106,  97 => 105,  93 => 104,  86 => 100,  81 => 98,  73 => 94,  65 => 91,  58 => 90,  56 => 89,  51 => 87,  47 => 86,  43 => 85,  39 => 84,  32 => 80,  27 => 78,  22 => 76,  19 => 75,);
    }
}
