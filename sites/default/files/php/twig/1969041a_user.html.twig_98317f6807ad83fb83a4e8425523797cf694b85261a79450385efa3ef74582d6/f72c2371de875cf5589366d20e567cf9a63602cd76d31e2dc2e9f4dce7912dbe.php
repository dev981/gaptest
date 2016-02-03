<?php

/* themes/custom/barti/templates/user.html.twig */
class __TwigTemplate_033e25caace7c4576db1e703453430d068ccb027cf55af16253d28469da0b629 extends Twig_Template
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
        $tags = array("if" => 30);
        $filters = array("raw" => 38, "t" => 74);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 21
        echo "


<style>#page-title{display:none}</style>

<div class=\"profile-user\">
    
    <!-- This code added to customize the user profile and displayed to the frontend-->
    <div class=\"fc-user left\">
        ";
        // line 30
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user_picture", array())) {
            echo "           
        <div class=\"fc-user-picture\">
            ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user_picture", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 34
        echo " 
        
        ";
        // line 36
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_contributions", array())) {
            echo "           
        <div class=\"fc-user-contribution\">
            ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["contributions"]) ? $context["contributions"] : null)));
            echo "
        </div>
        ";
        }
        // line 40
        echo " 
    </div>
     <!-- This code added the social media links and displayed to the frontend-->
    <div class=\"fc-user right\">
        ";
        // line 44
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_first_name", array())) {
            // line 45
            echo "        <div class=\"fc-user-fullname\">
            ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_first_name", array()), "html", null, true));
            echo "
            ";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_last_name", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 49
        echo " 
        <div class=\"fc-user-social-icons\">
        ";
        // line 51
        if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
            echo "             
                <a class=\"facebook\" href=\"";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook"]) ? $context["facebook"] : null), "html", null, true));
            echo "\" target=\"_blank\"> <img alt=\"Facebook\" border=\"0\" src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
            echo "/themes/custom/barti/images/facebook-logo-100x100.png\" width=\"25\" /> </a>
        ";
        }
        // line 53
        echo "                  
        ";
        // line 54
        if ((isset($context["linkedin"]) ? $context["linkedin"] : null)) {
            echo "                 
                <a class=\"linkedin\" href=\"";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin"]) ? $context["linkedin"] : null), "html", null, true));
            echo "\" target=\"_blank\"> <img alt=\"linkedin\" border=\"0\" src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
            echo "/themes/custom/barti/images/linkedin-logo-100x88.png\" width=\"25\" /> </a>
        ";
        }
        // line 56
        echo "                  
        ";
        // line 57
        if ((isset($context["twitter"]) ? $context["twitter"] : null)) {
            echo "                 
                <a class=\"twitter\" href=\"";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter"]) ? $context["twitter"] : null), "html", null, true));
            echo "\" target=\"_blank\"> <img alt=\"twitter\" border=\"0\" src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
            echo "/themes/custom/barti/images/twitter-logo-100x81.png\" width=\"25\" /> </a>
        ";
        }
        // line 59
        echo "                  
        ";
        // line 60
        if ((isset($context["instagram"]) ? $context["instagram"] : null)) {
            echo "                 
                <a class=\"instagram\" href=\"";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["instagram"]) ? $context["instagram"] : null), "html", null, true));
            echo "\" target=\"_blank\"> <img alt=\"instagram\" border=\"0\" src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
            echo "/themes/custom/barti/images/Instagram_Icon_Large.png\" width=\"25\" /> </a>          
        ";
        }
        // line 62
        echo "                  
        </div>     
            
        <!-- This code added the user information and displayed to the frontend-->
        <div class=\"user-profession\">
            ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_profession", array()), "html", null, true));
        echo "
        </div>
        <div class=\"user-location\">
            ";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_location", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 72
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_about", array())) {
            // line 73
            echo "        <div class=\"user-about\">
            <h2 class=\"sir-trevor-title\">";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("About me")));
            echo "</h2>    
            ";
            // line 75
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_about", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 77
        echo "      
        ";
        // line 78
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_links", array())) {
            // line 79
            echo "        <div class=\"user-links\">
            <h2 class=\"sir-trevor-title\">";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("My Links")));
            echo "</h2>    
            ";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_links", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 83
        echo "     
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/barti/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 83,  203 => 81,  199 => 80,  196 => 79,  194 => 78,  191 => 77,  185 => 75,  181 => 74,  178 => 73,  176 => 72,  171 => 70,  165 => 67,  158 => 62,  151 => 61,  147 => 60,  144 => 59,  137 => 58,  133 => 57,  130 => 56,  123 => 55,  119 => 54,  116 => 53,  109 => 52,  105 => 51,  101 => 49,  95 => 47,  91 => 46,  88 => 45,  86 => 44,  80 => 40,  74 => 38,  69 => 36,  65 => 34,  59 => 32,  54 => 30,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * This file is used to customize the user profile page displayed at the frontend*/
/*  **/
/* <!--Added an inline css-->*/
/* */
/*  * Available variables:*/
/*  * base_url: The site url.*/
/*  * content: The field item's content.*/
/*  * user_picture: The user's image.*/
/*  * field_first_name: First name of the user.*/
/*  * field_last_name: Last name of the user.*/
/*  * field_profession: Profession of the user.*/
/*  * field_location: Location of the user*/
/*  * field_about: Description of the user*/
/*  * field_links: Social media or any other link of the user*/
/*  * facebook, linkedin, twitter, instagram: Social media links*/
/*  *//* */
/* #}*/
/* */
/* */
/* */
/* <style>#page-title{display:none}</style>*/
/* */
/* <div class="profile-user">*/
/*     */
/*     <!-- This code added to customize the user profile and displayed to the frontend-->*/
/*     <div class="fc-user left">*/
/*         {% if content.user_picture %}           */
/*         <div class="fc-user-picture">*/
/*             {{ content.user_picture }}*/
/*         </div>*/
/*         {% endif %} */
/*         */
/*         {% if content.field_contributions %}           */
/*         <div class="fc-user-contribution">*/
/*             {{ contributions | raw }}*/
/*         </div>*/
/*         {% endif %} */
/*     </div>*/
/*      <!-- This code added the social media links and displayed to the frontend-->*/
/*     <div class="fc-user right">*/
/*         {% if content.field_first_name %}*/
/*         <div class="fc-user-fullname">*/
/*             {{ content.field_first_name }}*/
/*             {{ content.field_last_name  }}*/
/*         </div>*/
/*         {% endif %} */
/*         <div class="fc-user-social-icons">*/
/*         {% if facebook %}             */
/*                 <a class="facebook" href="{{ facebook }}" target="_blank"> <img alt="Facebook" border="0" src="{{ base_url }}/themes/custom/barti/images/facebook-logo-100x100.png" width="25" /> </a>*/
/*         {% endif %}                  */
/*         {% if linkedin %}                 */
/*                 <a class="linkedin" href="{{ linkedin }}" target="_blank"> <img alt="linkedin" border="0" src="{{ base_url }}/themes/custom/barti/images/linkedin-logo-100x88.png" width="25" /> </a>*/
/*         {% endif %}                  */
/*         {% if twitter %}                 */
/*                 <a class="twitter" href="{{ twitter }}" target="_blank"> <img alt="twitter" border="0" src="{{ base_url }}/themes/custom/barti/images/twitter-logo-100x81.png" width="25" /> </a>*/
/*         {% endif %}                  */
/*         {% if instagram %}                 */
/*                 <a class="instagram" href="{{ instagram }}" target="_blank"> <img alt="instagram" border="0" src="{{ base_url }}/themes/custom/barti/images/Instagram_Icon_Large.png" width="25" /> </a>          */
/*         {% endif %}                  */
/*         </div>     */
/*             */
/*         <!-- This code added the user information and displayed to the frontend-->*/
/*         <div class="user-profession">*/
/*             {{ content.field_profession }}*/
/*         </div>*/
/*         <div class="user-location">*/
/*             {{ content.field_location }}*/
/*         </div>*/
/*         {% if content.field_about %}*/
/*         <div class="user-about">*/
/*             <h2 class="sir-trevor-title">{{ 'About me'|t }}</h2>    */
/*             {{ content.field_about }}*/
/*         </div>*/
/*         {% endif %}      */
/*         {% if content.field_links %}*/
/*         <div class="user-links">*/
/*             <h2 class="sir-trevor-title">{{ 'My Links'|t }}</h2>    */
/*             {{ content.field_links }}*/
/*         </div>*/
/*         {% endif %}     */
/*     </div>*/
/* </div>*/
