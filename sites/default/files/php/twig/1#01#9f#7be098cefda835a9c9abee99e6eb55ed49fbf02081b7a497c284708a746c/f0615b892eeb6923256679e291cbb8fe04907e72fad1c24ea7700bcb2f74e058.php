<?php

/* themes/custom/gapminder/templates/user.html.twig */
class __TwigTemplate_019f7be098cefda835a9c9abee99e6eb55ed49fbf02081b7a497c284708a746c extends Twig_Template
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
        // line 1
        echo "<style>#page-title{display:none}</style>
<div class=\"profile-user\">
    <div class=\"fc-user left\">
        ";
        // line 4
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user_picture", array())) {
            echo "           
        <div class=\"fc-user-picture\">
            ";
            // line 6
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user_picture", array()), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 8
        echo "            
        ";
        // line 9
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_contribution", array())) {
            echo "        
        <div class=\"fc-user-contrib\">
            ";
            // line 11
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_contribution", array()), "html", null, true);
            echo "            
        </div>
        ";
        }
        // line 13
        echo "         
    </div>
    <div class=\"fc-user right\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_first_name", array())) {
            // line 17
            echo "        <div class=\"fc-user-fullname\">
            ";
            // line 18
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_first_name", array()), "html", null, true);
            echo "
            ";
            // line 19
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_last_name", array()), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 21
        echo " 
        <div class=\"fc-user-social-icons\">
        ";
        // line 23
        if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
            echo "             
                <a class=\"facebook\" href=\"";
            // line 24
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook"]) ? $context["facebook"] : null), "html", null, true);
            echo "\" target=\"_blank\"> <img alt=\"Facebook\" border=\"0\" src=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/themes/custom/gapminder/images/facebook-logo-100x100.png\" width=\"25\" /> </a>
        ";
        }
        // line 25
        echo "                  
        ";
        // line 26
        if ((isset($context["linkedin"]) ? $context["linkedin"] : null)) {
            echo "                 
                <a class=\"linkedin\" href=\"";
            // line 27
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin"]) ? $context["linkedin"] : null), "html", null, true);
            echo "\" target=\"_blank\"> <img alt=\"linkedin\" border=\"0\" src=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/themes/custom/gapminder/images/linkedin-logo-100x88.png\" width=\"25\" /> </a>
        ";
        }
        // line 28
        echo "                  
        ";
        // line 29
        if ((isset($context["twitter"]) ? $context["twitter"] : null)) {
            echo "                 
                <a class=\"twitter\" href=\"";
            // line 30
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter"]) ? $context["twitter"] : null), "html", null, true);
            echo "\" target=\"_blank\"> <img alt=\"twitter\" border=\"0\" src=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/themes/custom/gapminder/images/twitter-logo-100x81.png\" width=\"25\" /> </a>
        ";
        }
        // line 31
        echo "                  
        ";
        // line 32
        if ((isset($context["instagram"]) ? $context["instagram"] : null)) {
            echo "                 
                <a class=\"instagram\" href=\"";
            // line 33
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["instagram"]) ? $context["instagram"] : null), "html", null, true);
            echo "\" target=\"_blank\"> <img alt=\"instagram\" border=\"0\" src=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/themes/custom/gapminder/images/Instagram_Icon_Large.png\" width=\"25\" /> </a>          
        ";
        }
        // line 34
        echo "                  
        </div>        
        <div class=\"user-profession\">
            ";
        // line 37
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_profession", array()), "html", null, true);
        echo "
        </div>
        <div class=\"user-location\">
            ";
        // line 40
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_location", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 42
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_about", array())) {
            // line 43
            echo "        <div class=\"user-about\">
            <h2 class=\"sir-trevor-title\">";
            // line 44
            echo $this->env->getExtension('drupal_core')->renderVar(t("About me"));
            echo "</h2>    
            ";
            // line 45
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_about", array()), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 47
        echo "      
        ";
        // line 48
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_links", array())) {
            // line 49
            echo "        <div class=\"user-links\">
            <h2 class=\"sir-trevor-title\">";
            // line 50
            echo $this->env->getExtension('drupal_core')->renderVar(t("My Links"));
            echo "</h2>    
            ";
            // line 51
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_links", array()), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 53
        echo "     
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/gapminder/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 53,  169 => 51,  165 => 50,  162 => 49,  160 => 48,  157 => 47,  151 => 45,  147 => 44,  144 => 43,  142 => 42,  137 => 40,  131 => 37,  126 => 34,  119 => 33,  115 => 32,  112 => 31,  105 => 30,  101 => 29,  98 => 28,  91 => 27,  87 => 26,  84 => 25,  77 => 24,  73 => 23,  69 => 21,  63 => 19,  59 => 18,  56 => 17,  54 => 16,  49 => 13,  43 => 11,  38 => 9,  35 => 8,  29 => 6,  24 => 4,  19 => 1,);
    }
}
