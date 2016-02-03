<?php

/* themes/custom/barti/templates/menu.html.twig */
class __TwigTemplate_edf8d7a3d5d14b0362e406d92bd0cb95d5ae9cbc3b3e5967ff4028ad278b917a extends Twig_Template
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
        $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 34);
        $filters = array();
        $functions = array("link" => 44);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for'),
                array(),
                array('link')
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

        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
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
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
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
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 32
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 34
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "        <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                    echo ">
            ";
                    // line 36
                    if ($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "icon", array())) {
                        // line 37
                        echo "                <a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"noclass\">
                <div class=\"menu-item-icon\"><img src=\"";
                        // line 38
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "icon", array()), "html", null, true));
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
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "            
                ";
                    // line 45
                    if ($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "description", array())) {
                        echo "       
                    <a href=\"";
                        // line 46
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"noclass\">
                    <div class=\"menu-item-description\">";
                        // line 47
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "description", array()), "html", null, true));
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
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
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
        return "themes/custom/barti/templates/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  159 => 56,  153 => 54,  151 => 53,  148 => 52,  142 => 50,  139 => 49,  133 => 47,  129 => 46,  125 => 45,  121 => 44,  118 => 43,  111 => 41,  105 => 38,  100 => 37,  98 => 36,  93 => 35,  88 => 34,  84 => 32,  78 => 30,  75 => 29,  72 => 28,  69 => 27,  55 => 26,  48 => 24,  45 => 19,  43 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       <ul{{ attributes.addClass('menu') }}>*/
/*     {% else %}*/
/*       <ul class="menu">*/
/*     {% endif %}*/
/*       {% for item in items %}*/
/*         <li{{ item.attributes }}>*/
/*             {% if item.attributes.icon %}*/
/*                 <a href="{{ item.url }}" class="noclass">*/
/*                 <div class="menu-item-icon"><img src="{{ item.attributes.icon }}"/></div>*/
/*                 </a>*/
/*             {% endif %}*/
/*             {% if item.attributes.description %} */
/*                 <div class="menu-item-info">     */
/*             {% endif %}                      */
/*                 {{ link(item.title, item.url) }}            */
/*                 {% if item.attributes.description %}       */
/*                     <a href="{{ item.url }}" class="noclass">*/
/*                     <div class="menu-item-description">{{ item.attributes.description }}</div>*/
/*                     </a>*/
/*                 {% endif %}  */
/* {% if item.attributes.description %}                 */
/*                 </div>    */
/*                 {% endif %}  */
/*           {% if item.below %}*/
/*             {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
