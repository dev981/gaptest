<?php

/* {# inline_template_start #}<div class="fc_rows">
    <div class="fc_image">
     {{ field_thumbnail }}
    </div>
<div class="fc_title_sub">
     <div class="fc_title"> 
      {{ title }}
       </div>
    <div class="fc_sub">
       {{ field_subtitle }}
      </div>
</div>
</div> */
class __TwigTemplate_78ae3bb0fcc6c119be309ed2fe301f553ee1a2697b21c257be2b2dc2b337fb3f extends Twig_Template
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
        echo "<div class=\"fc_rows\">
    <div class=\"fc_image\">
     ";
        // line 3
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_thumbnail"]) ? $context["field_thumbnail"] : null), "html", null, true);
        echo "
    </div>
<div class=\"fc_title_sub\">
     <div class=\"fc_title\"> 
      ";
        // line 7
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
       </div>
    <div class=\"fc_sub\">
       ";
        // line 10
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_subtitle"]) ? $context["field_subtitle"] : null), "html", null, true);
        echo "
      </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"fc_rows\">
    <div class=\"fc_image\">
     {{ field_thumbnail }}
    </div>
<div class=\"fc_title_sub\">
     <div class=\"fc_title\"> 
      {{ title }}
       </div>
    <div class=\"fc_sub\">
       {{ field_subtitle }}
      </div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  42 => 7,  35 => 3,  31 => 1,);
    }
}
