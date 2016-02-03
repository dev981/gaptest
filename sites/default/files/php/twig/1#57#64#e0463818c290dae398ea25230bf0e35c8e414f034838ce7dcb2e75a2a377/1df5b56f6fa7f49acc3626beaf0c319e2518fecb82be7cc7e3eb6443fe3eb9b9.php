<?php

/* core/modules/system/templates/table.html.twig */
class __TwigTemplate_5764e0463818c290dae398ea25230bf0e35c8e414f034838ce7dcb2e75a2a377 extends Twig_Template
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
        // line 44
        echo "<table";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 45
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 46
            echo "    <caption>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
            echo "</caption>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colgroups"]) ? $context["colgroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 50
            echo "    ";
            if ($this->getAttribute($context["colgroup"], "cols", array())) {
                // line 51
                echo "      <colgroup";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true);
                echo ">
        ";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["colgroup"], "cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 53
                    echo "          <col";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["col"], "attributes", array()), "html", null, true);
                    echo " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "      </colgroup>
    ";
            } else {
                // line 57
                echo "      <colgroup";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true);
                echo " />
    ";
            }
            // line 59
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
  ";
        // line 61
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 62
            echo "    <thead>
      <tr>
        ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 65
                echo "          <";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true);
                echo ">";
                // line 66
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true);
                // line 67
                echo "</";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "      </tr>
    </thead>
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 74
            echo "    <tbody>
      ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 76
                echo "        <tr";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
                echo ">
          ";
                // line 77
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 78
                    echo "            <";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true);
                    echo ">";
                    // line 79
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true);
                    // line 80
                    echo "</";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    </tbody>
  ";
        } elseif (        // line 85
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 86
            echo "    <tbody>
      <tr>
        <td colspan=\"";
            // line 88
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_columns"]) ? $context["header_columns"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            echo "</td>
      </tr>
    </tbody>
  ";
        }
        // line 92
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 93
            echo "    <tfoot>
      ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footer"]) ? $context["footer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 95
                echo "        <tr";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
                echo ">
          ";
                // line 96
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 97
                    echo "            <";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true);
                    echo ">";
                    // line 98
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true);
                    // line 99
                    echo "</";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true);
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </tfoot>
  ";
        }
        // line 105
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 105,  214 => 103,  207 => 101,  198 => 99,  196 => 98,  191 => 97,  187 => 96,  182 => 95,  178 => 94,  175 => 93,  172 => 92,  163 => 88,  159 => 86,  157 => 85,  154 => 84,  147 => 82,  138 => 80,  136 => 79,  131 => 78,  127 => 77,  122 => 76,  118 => 75,  115 => 74,  113 => 73,  110 => 72,  105 => 69,  96 => 67,  94 => 66,  89 => 65,  85 => 64,  81 => 62,  79 => 61,  76 => 60,  70 => 59,  64 => 57,  60 => 55,  51 => 53,  47 => 52,  42 => 51,  39 => 50,  35 => 49,  32 => 48,  26 => 46,  24 => 45,  19 => 44,);
    }
}
