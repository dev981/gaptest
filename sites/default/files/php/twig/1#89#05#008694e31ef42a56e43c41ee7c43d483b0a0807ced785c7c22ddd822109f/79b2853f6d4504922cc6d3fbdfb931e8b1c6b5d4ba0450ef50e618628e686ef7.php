<?php

/* themes/custom/gapminder/templates/node--answers.html.twig */
class __TwigTemplate_8905008694e31ef42a56e43c41ee7c43d483b0a0807ced785c7c22ddd822109f extends Twig_Template
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
";
        // line 2
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 3
            echo "    <div class=\"fc-content-left\">
";
        }
        // line 4
        echo "      
<div class=\"page-conatiner fc\">
        <div class=\"fc-heading-1\">
        ";
        // line 7
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "
        </div>
        <div class=\"fc-sub-heading\">
        ";
        // line 10
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_subtitle", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 12
        if ((isset($context["video_url"]) ? $context["video_url"] : null)) {
            // line 13
            echo "            <div class=\"fc-video\">
                <iframe src=\"";
            // line 14
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["video_url"]) ? $context["video_url"] : null), "html", null, true);
            echo "\" width=\"100%\" height=\"440\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
            </div>            
        ";
        }
        // line 16
        echo "    
        <div class=\"fc-left-part\">                      
            <div class=\"fc-content-part\">
            ";
        // line 19
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"fc-right-part\">
            <div class=\"a2a_kit\">
                <h2 class=\"heading-4\">";
        // line 24
        echo $this->env->getExtension('drupal_core')->renderVar(t("Share"));
        echo "</h2>
                <a class=\"a2a_button_facebook\"> <img alt=\"Facebook\" border=\"0\" src=\"";
        // line 25
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/facebook.png\" width=\"32\" /> </a>
                <a class=\"a2a_button_twitter\"> <img alt=\"Twitter\" border=\"0\" src=\"";
        // line 26
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/twitter.png\" width=\"32\" /> </a>
                <a class=\"a2a_button_google_plus\"> <img alt=\"Google+\" border=\"0\" src=\"";
        // line 27
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/message.png\" width=\"32\" /> </a>
                <a class=\"a2a_dd\" href=\"http://www.addtoany.com/share_save\"> <img alt=\"Share\" border=\"0\" src=\"";
        // line 28
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/themes/custom/gapminder/images/more.png\" width=\"32\" /> </a>
            </div>   
            ";
        // line 30
        if ( !twig_test_empty((isset($context["user_pictures"]) ? $context["user_pictures"] : null))) {
            // line 31
            echo "                <div class=\"fc-contributors\">
                    <h2 class=\"heading-4\">";
            // line 32
            echo $this->env->getExtension('drupal_core')->renderVar(t("Thanks"));
            echo " ";
            echo $this->env->getExtension('drupal_core')->renderVar(t("to"));
            echo "</h2>
                        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user_pictures"]) ? $context["user_pictures"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 34
                echo "                            <a href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/user/";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value"], "html", null, true);
                echo "\" height=\"28\" width=\"28\"></a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </div>
            ";
        }
        // line 37
        echo "            
        </div>       
</div>
";
        // line 40
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 41
            echo "    </div>
    <div id=\"sidebar-second\" class=\"fc-content-right\">
        ";
            // line 43
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
    </div>
";
        }
        // line 45
        echo "                 
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gapminder/templates/node--answers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  132 => 43,  128 => 41,  126 => 40,  121 => 37,  117 => 36,  104 => 34,  100 => 33,  94 => 32,  91 => 31,  89 => 30,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  60 => 19,  55 => 16,  49 => 14,  46 => 13,  44 => 12,  39 => 10,  33 => 7,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
