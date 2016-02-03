<?php

/* themes/custom/gapminder/templates/block.html.twig */
class __TwigTemplate_ec5c09fce8bd0196b03c10efdef4d51de57edbcf8cd792488c2d402610d55f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 40
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 42
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))));
        // line 45
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 46
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 47
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 48
            echo "    <h2";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 50
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "</div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "      ";
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "blocktrans", array())) {
            // line 53
            echo "          <span class=\"translate-link\">
              <a href=\"";
            // line 54
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "blocktrans", array()), "html", null, true);
            echo "\">Translate</a>
          </span>
       ";
        }
        // line 56
        echo "   
    <div";
        // line 57
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true);
        echo ">
      ";
        // line 58
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/gapminder/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 58,  72 => 57,  69 => 56,  63 => 54,  60 => 53,  57 => 52,  54 => 51,  49 => 61,  47 => 51,  42 => 50,  34 => 48,  32 => 47,  28 => 46,  23 => 45,  21 => 42,  20 => 40,);
    }
}
