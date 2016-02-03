<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_b651a2b3360422d3a03f0938d0b886078f7c6cb0b52c6a80fe204c5f3f0e87c8 extends Twig_Template
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
        // line 33
        echo "<!DOCTYPE html>
<html";
        // line 34
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo ">
  <head>
    ";
        // line 36
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head"]) ? $context["head"] : null), "html", null, true);
        echo "
    <title>";
        // line 37
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true);
        echo "</title>
    ";
        // line 38
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["styles"]) ? $context["styles"] : null), "html", null, true);
        echo "
    ";
        // line 39
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["scripts"]) ? $context["scripts"] : null), "html", null, true);
        echo "
  </head>
  <body";
        // line 41
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 43
        echo $this->env->getExtension('drupal_core')->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 45
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true);
        echo "
    ";
        // line 46
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "
    ";
        // line 47
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true);
        echo "
    ";
        // line 48
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["scripts_bottom"]) ? $context["scripts_bottom"] : null), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 48,  62 => 47,  58 => 46,  54 => 45,  49 => 43,  44 => 41,  39 => 39,  35 => 38,  31 => 37,  27 => 36,  22 => 34,  19 => 33,);
    }
}
