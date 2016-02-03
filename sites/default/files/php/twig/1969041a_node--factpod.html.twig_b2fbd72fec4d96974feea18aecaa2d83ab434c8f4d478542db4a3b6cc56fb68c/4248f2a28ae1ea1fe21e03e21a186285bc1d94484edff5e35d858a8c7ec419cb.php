<?php

/* themes/custom/barti/templates/node--factpod.html.twig */
class __TwigTemplate_b212e340ea1b126ec080df768b5a69ffb9132e100c4571c08238e3d18dec2158 extends Twig_Template
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
        $tags = array("if" => 20, "for" => 56);
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

        // line 17
        echo "

<style>#page-title{display:none}</style>
";
        // line 20
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 21
            echo "    <div class=\"fc-content-left\">
";
        }
        // line 22
        echo "      
<div class=\"page-conatiner fc\">
        <div class=\"fc-heading-1\">
        ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "
        </div>
        <div class=\"fc-sub-heading\">
        ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_subtitle", array()), "html", null, true));
        echo "
        </div>
        ";
        // line 30
        if ((isset($context["video_url"]) ? $context["video_url"] : null)) {
            // line 31
            echo "            <div class=\"fc-video ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["video_class"]) ? $context["video_class"] : null), "html", null, true));
            echo "\">
                <iframe src=\"";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["video_url"]) ? $context["video_url"] : null), "html", null, true));
            echo "\" width=\"730\" height=\"440\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
            </div>            
        ";
        }
        // line 34
        echo "    
        <div class=\"fc-left-part\">        
            ";
        // line 36
        if ((isset($context["node_date_time"]) ? $context["node_date_time"] : null)) {
            // line 37
            echo "                <div class=\"fc-date-time\">                      
                   ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["publisheddata"]) ? $context["publisheddata"] : null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["node_date_time"]) ? $context["node_date_time"] : null), "html", null, true));
            echo "
                </div>
            ";
        }
        // line 40
        echo "                
            <div class=\"fc-content-part\">
            ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
            </div>
        </div>
        <div class=\"fc-right-part\">
            <div class=\"a2a_kit\">
                <h2 class=\"heading-4\">";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["currentlang"]) ? $context["currentlang"] : null), "html", null, true));
        echo "</h2>
                <a class=\"a2a_button_email\"> <img  alt=\"message\" data-entity-type=\"file\" border=\"0\" src=\"";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
        echo "/themes/custom/barti/images/message.png\" width=\"32\" /> </a>
                <a class=\"a2a_button_twitter\"> <img alt=\"Twitter\" border=\"0\" src=\"";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
        echo "/themes/custom/barti/images/twitter.png\" width=\"32\" /> </a>
                <a class=\"a2a_button_facebook\"> <img alt=\"Facebook\" border=\"0\" src=\"";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
        echo "/themes/custom/barti/images/facebook.png\" width=\"32\" /> </a>               
                <a class=\"a2a_dd\" href=\"http://www.addtoany.com/share_save\"> <img alt=\"Share\" border=\"0\" src=\"";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
        echo "/themes/custom/barti/images/more.png\" width=\"32\" /> </a>
            </div>  
            ";
        // line 53
        if ( !twig_test_empty((isset($context["user_pictures"]) ? $context["user_pictures"] : null))) {
            // line 54
            echo "                <div class=\"fc-contributors boxes\">
                    <h2 class=\"heading-4\">";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["thanklang"]) ? $context["thanklang"] : null), "html", null, true));
            echo "</h2>
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user_pictures"]) ? $context["user_pictures"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 57
                echo "                            <a class=\"box\" data-tipped-options=\"position: 'top'\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], 0, array()), "html", null, true));
                echo "\" data-placement=\"top\" href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true));
                echo "/user/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "\"><img src=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], 1, array()), "html", null, true));
                echo "\" height=\"28\" width=\"28\"></a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </div>
            ";
        }
        // line 60
        echo " 
        </div>       
</div>
";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 64
            echo "    </div>
    <div id=\"sidebar-second\" class=\"fc-content-right\">
        ";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
    </div>
";
        }
        // line 68
        echo "   ";
    }

    public function getTemplateName()
    {
        return "themes/custom/barti/templates/node--factpod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 68,  176 => 66,  172 => 64,  170 => 63,  165 => 60,  161 => 59,  146 => 57,  142 => 56,  138 => 55,  135 => 54,  133 => 53,  128 => 51,  124 => 50,  120 => 49,  116 => 48,  112 => 47,  104 => 42,  100 => 40,  92 => 38,  89 => 37,  87 => 36,  83 => 34,  77 => 32,  72 => 31,  70 => 30,  65 => 28,  59 => 25,  54 => 22,  50 => 21,  48 => 20,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Template for the Factpod page*/
/*  **/
/*  * Available variables*/
/*  * page: Contains an object of content of the page.*/
/*  * sidebar_first: The blocks to be displayed as per this region.*/
/*  * label: The label(title) of the content. */
/*  * video_class: The video class of the content.*/
/*  * video_url: The video url of the content.*/
/*  * node_date_time: The date and time of the content created.*/
/*  * body: The description of the node.*/
/*  * pictures: The user picture.*/
/*  *//* */
/* #}*/
/* */
/* */
/* <style>#page-title{display:none}</style>*/
/* {% if page.sidebar_first %}*/
/*     <div class="fc-content-left">*/
/* {% endif %}      */
/* <div class="page-conatiner fc">*/
/*         <div class="fc-heading-1">*/
/*         {{ label }}*/
/*         </div>*/
/*         <div class="fc-sub-heading">*/
/*         {{ content.field_subtitle }}*/
/*         </div>*/
/*         {% if video_url %}*/
/*             <div class="fc-video {{ video_class }}">*/
/*                 <iframe src="{{ video_url }}" width="730" height="440" frameborder="0" allowfullscreen=""></iframe>*/
/*             </div>            */
/*         {% endif %}    */
/*         <div class="fc-left-part">        */
/*             {% if node_date_time %}*/
/*                 <div class="fc-date-time">                      */
/*                    {{ publisheddata }} {{ node_date_time }}*/
/*                 </div>*/
/*             {% endif %}                */
/*             <div class="fc-content-part">*/
/*             {{ content.body }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="fc-right-part">*/
/*             <div class="a2a_kit">*/
/*                 <h2 class="heading-4">{{ currentlang }}</h2>*/
/*                 <a class="a2a_button_email"> <img  alt="message" data-entity-type="file" border="0" src="{{ base_url }}/themes/custom/barti/images/message.png" width="32" /> </a>*/
/*                 <a class="a2a_button_twitter"> <img alt="Twitter" border="0" src="{{ base_url }}/themes/custom/barti/images/twitter.png" width="32" /> </a>*/
/*                 <a class="a2a_button_facebook"> <img alt="Facebook" border="0" src="{{ base_url }}/themes/custom/barti/images/facebook.png" width="32" /> </a>               */
/*                 <a class="a2a_dd" href="http://www.addtoany.com/share_save"> <img alt="Share" border="0" src="{{ base_url }}/themes/custom/barti/images/more.png" width="32" /> </a>*/
/*             </div>  */
/*             {% if not user_pictures is empty %}*/
/*                 <div class="fc-contributors boxes">*/
/*                     <h2 class="heading-4">{{ thanklang }}</h2>*/
/*                         {% for key,value in user_pictures %}*/
/*                             <a class="box" data-tipped-options="position: 'top'" title="{{ value.0 }}" data-placement="top" href="{{ base_url }}/user/{{ key }}"><img src="{{ value.1 }}" height="28" width="28"></a>*/
/*                         {% endfor %}*/
/*                 </div>*/
/*             {% endif %} */
/*         </div>       */
/* </div>*/
/* {% if page.sidebar_first %}*/
/*     </div>*/
/*     <div id="sidebar-second" class="fc-content-right">*/
/*         {{ page.sidebar_first }}*/
/*     </div>*/
/* {% endif %}   */
