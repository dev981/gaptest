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
{{ translation_link }}
</div>
</div> */
class __TwigTemplate_bb03d1da5967b1bc1eb26c52be5cbfef0d8b218a1ab4b9796572057f60f35913 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"fc_rows\">
    <div class=\"fc_image\">
    ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_thumbnail"]) ? $context["field_thumbnail"] : null), "html", null, true));
        echo "
    </div>
<div class=\"fc_title_sub\">
     <div class=\"fc_title\"> 
      ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
       </div>
    <div class=\"fc_sub\">
      ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_subtitle"]) ? $context["field_subtitle"] : null), "html", null, true));
        echo " 
      </div>
";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["translation_link"]) ? $context["translation_link"] : null), "html", null, true));
        echo "
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
{{ translation_link }}
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  73 => 10,  67 => 7,  60 => 3,  56 => 1,);
    }
}
/* {# inline_template_start #}<div class="fc_rows">*/
/*     <div class="fc_image">*/
/*     {{ field_thumbnail }}*/
/*     </div>*/
/* <div class="fc_title_sub">*/
/*      <div class="fc_title"> */
/*       {{ title }}*/
/*        </div>*/
/*     <div class="fc_sub">*/
/*       {{ field_subtitle }} */
/*       </div>*/
/* {{ translation_link }}*/
/* </div>*/
/* </div>*/
