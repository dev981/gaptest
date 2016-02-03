<?php

/* themes/custom/gapminder/templates/menu.html.twig */
class __TwigTemplate_d8605520321f2f5b93b02a24ce3256e7909041eadba215aadbaaf80879313729 extends Twig_Template
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
        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0));
        echo "

";
    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 29
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 30
                    echo "      <ul";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu"), "method"), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 32
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 34
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "        <li";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
                    echo ">
            ";
                    // line 36
                    if ($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "icon", array())) {
                        // line 37
                        echo "                <a href=\"";
                        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                        echo "\" class=\"noclass\">
                <div class=\"menu-item-icon\"><img src=\"";
                        // line 38
                        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "icon", array()), "html", null, true);
                        echo "\"/></div>
                </a>
            ";
                    }
                    // line 41
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "description", array())) {
                        echo " 
                <div class=\"menu-item-info\">     
            ";
                    }
                    // line 43
                    echo "                      
                ";
                    // line 44
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true);
                    echo "            
                ";
                    // line 45
                    if ($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "description", array())) {
                        echo "       
                    <a href=\"";
                        // line 46
                        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                        echo "\" class=\"noclass\">
                    <div class=\"menu-item-description\">";
                        // line 47
                        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "description", array()), "html", null, true);
                        echo "</div>
                    </a>
                ";
                    }
                    // line 49
                    echo "  
";
                    // line 50
                    if ($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "description", array())) {
                        echo "                 
                </div>    
                ";
                    }
                    // line 52
                    echo "  
          ";
                    // line 53
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 54
                        echo "            ";
                        echo $this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)));
                        echo "
          ";
                    }
                    // line 56
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/gapminder/templates/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  134 => 56,  128 => 54,  126 => 53,  123 => 52,  117 => 50,  114 => 49,  108 => 47,  104 => 46,  100 => 45,  96 => 44,  93 => 43,  86 => 41,  80 => 38,  75 => 37,  73 => 36,  68 => 35,  63 => 34,  59 => 32,  53 => 30,  50 => 29,  47 => 28,  44 => 27,  31 => 26,  24 => 24,  21 => 19,  19 => 18,);
    }
}
