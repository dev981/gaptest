<?php

/* {# inline_template_start #}<span class="status">{% if status %}{{ "Published"|t }}{% else %}{{ "Not published"|t }}{% endif %}</span>{% if outdated %} <span class="marker">{{ "outdated"|t }}</span>{% endif %} */
class __TwigTemplate_a9d1d2addc73c5109551ae1c0873aa6c5e80779a095ad2aab416736b01e1a9c7 extends Twig_Template
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
        echo "<span class=\"status\">";
        if ((isset($context["status"]) ? $context["status"] : null)) {
            echo $this->env->getExtension('drupal_core')->renderVar(t("Published"));
        } else {
            echo $this->env->getExtension('drupal_core')->renderVar(t("Not published"));
        }
        echo "</span>";
        if ((isset($context["outdated"]) ? $context["outdated"] : null)) {
            echo " <span class=\"marker\">";
            echo $this->env->getExtension('drupal_core')->renderVar(t("outdated"));
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<span class=\"status\">{% if status %}{{ \"Published\"|t }}{% else %}{{ \"Not published\"|t }}{% endif %}</span>{% if outdated %} <span class=\"marker\">{{ \"outdated\"|t }}</span>{% endif %}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
