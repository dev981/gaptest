<?php

/* themes/custom/barti/templates/taxonomy-term--headers.html.twig */
class __TwigTemplate_f5d3ac7e181da6fdba4832a1b1788a07f93a0250f0f06cc14cb53373f86b495d extends Twig_Template
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
        $tags = array("if" => 31);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 24
        echo "<style>#page-title{display:none}</style>
<div class=\"page-conatiner taxo\">
 
<!-- The title, taxonomy image, name and description of the taxonomy -->    
    
";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    <div class=\"image-title-container\">
        ";
        // line 31
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_term_image", array())) {
            // line 32
            echo "            <div class=\"top-image\">
                ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_term_image", array()), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 35
        echo " 
        <div class=\"heading-1\">
        ";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
        echo "
        </div>
    </div>
         ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
<div class=\"content-part\">
";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "description", array()), "html", null, true));
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/barti/templates/taxonomy-term--headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 42,  76 => 40,  70 => 37,  66 => 35,  60 => 33,  57 => 32,  55 => 31,  50 => 29,  43 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Gapminder theme override for taxonomy term fields.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - label_hidden: Whether to show the field label or not.*/
/*  * - title_attributes: HTML attributes for the label.*/
/*  * - label: The label for the field.*/
/*  * - content_attributes: HTML attributes for the content.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item's content.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  * @see template_preprocess_field()*/
/*  * @see bartik_preprocess_field()*/
/*  *//* */
/* #}*/
/* <style>#page-title{display:none}</style>*/
/* <div class="page-conatiner taxo">*/
/*  */
/* <!-- The title, taxonomy image, name and description of the taxonomy -->    */
/*     */
/* {{ title_prefix }}*/
/*     <div class="image-title-container">*/
/*         {% if content.field_term_image %}*/
/*             <div class="top-image">*/
/*                 {{ content.field_term_image }}*/
/*             </div>*/
/*         {% endif %} */
/*         <div class="heading-1">*/
/*         {{ name }}*/
/*         </div>*/
/*     </div>*/
/*          {{ title_suffix }}*/
/* <div class="content-part">*/
/* {{ content.description }}*/
/* </div>*/
/* </div>*/
