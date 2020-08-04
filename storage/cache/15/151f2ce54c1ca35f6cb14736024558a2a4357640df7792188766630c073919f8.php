<?php

/* journal3/template/journal3/module/product_tabs.twig */
class __TwigTemplate_bdcde42c51ac7b63ed28f6a450a165fad1dcaa5eba40bfd7fa225848698012aa extends Twig_Template
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
        if (((isset($context["display"]) ? $context["display"] : null) == "tabs")) {
            // line 2
            echo "  <div class=\"tabs-container";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    <ul class=\"nav nav-tabs\">";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "        <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
          <a href=\"#";
                // line 6
                echo $this->getAttribute($context["item"], "id", array());
                echo "\" data-toggle=\"tab\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
        </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </ul>
    <div class=\"tab-content\">";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\" id=\"";
                echo $this->getAttribute($context["item"], "id", array());
                echo "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"block-content";
                // line 15
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">";
                // line 16
                echo $this->getAttribute($context["item"], "content", array());
                // line 17
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 18
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>";
                }
                // line 20
                echo "              </div>
            </div>
          </div>
        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
  </div>";
        } elseif ((        // line 27
(isset($context["display"]) ? $context["display"] : null) == "accordion")) {
            // line 28
            echo "  <div class=\"panel-group";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
        <div class=\"panel-heading\">
          <h4 class=\"panel-title\">
            <a href=\"#";
                // line 33
                echo $this->getAttribute($context["item"], "id", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\">";
                // line 34
                echo $this->getAttribute($context["item"], "title", array());
                echo "
              <i class=\"fa fa-caret-down\"></i>
            </a>
          </h4>
        </div>
        <div class=\"";
                // line 39
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo $this->getAttribute($context["item"], "id", array());
                echo "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"panel-body block-content";
                // line 42
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">";
                // line 43
                echo $this->getAttribute($context["item"], "content", array());
                // line 44
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 45
                    echo "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>";
                }
                // line 47
                echo "              </div>
            </div>
          </div>
        </div>
      </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "  </div>";
        } else {
            // line 55
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">";
                // line 58
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 59
                    echo "        <h3 class=\"title module-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>";
                }
                // line 61
                echo "        <div class=\"block-body expand-block\">
          <div class=\"block-wrapper\">
            <div class=\"block-content";
                // line 63
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    echo "expand-content";
                }
                echo "\">";
                // line 64
                echo $this->getAttribute($context["item"], "content", array());
                // line 65
                if ($this->getAttribute($context["item"], "expandButton", array())) {
                    // line 66
                    echo "                <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>";
                }
                // line 68
                echo "            </div>
          </div>
        </div>
      </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "  </div>";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/product_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 73,  181 => 68,  178 => 66,  176 => 65,  174 => 64,  169 => 63,  165 => 61,  160 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  143 => 53,  133 => 47,  130 => 45,  128 => 44,  126 => 43,  121 => 42,  113 => 39,  105 => 34,  102 => 33,  95 => 30,  91 => 29,  87 => 28,  85 => 27,  82 => 25,  73 => 20,  70 => 18,  68 => 17,  66 => 16,  61 => 15,  52 => 12,  48 => 11,  45 => 9,  35 => 6,  30 => 5,  26 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if display == 'tabs' %}*/
/*   <div class="tabs-container {{ j3.classes(classes) }}">*/
/*     <ul class="nav nav-tabs">*/
/*       {% for item in items %}*/
/*         <li class="{{ j3.classes(item.tab_classes) }}">*/
/*           <a href="#{{ item.id }}" data-toggle="tab">{{ item.title }}</a>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}" id="{{ item.id }}">*/
/*           <div class="block-body expand-block">*/
/*             <div class="block-wrapper">*/
/*               <div class="block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*                 {{ item.content }}*/
/*                 {% if item.expandButton %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% elseif display == 'accordion' %}*/
/*   <div class="panel-group {{ j3.classes(classes) }}">*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         <div class="panel-heading">*/
/*           <h4 class="panel-title">*/
/*             <a href="#{{ item.id }}" class="accordion-toggle collapsed" data-toggle="collapse" aria-expanded="false">*/
/*               {{ item.title }}*/
/*               <i class="fa fa-caret-down"></i>*/
/*             </a>*/
/*           </h4>*/
/*         </div>*/
/*         <div class="{{ j3.classes(item.panel_classes) }}" id="{{ item.id }}">*/
/*           <div class="block-body expand-block">*/
/*             <div class="block-wrapper">*/
/*               <div class="panel-body block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*                 {{ item.content }}*/
/*                 {% if item.expandButton %}*/
/*                   <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% else %}*/
/*   <div class="{{ j3.classes(classes) }}">*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         {% if item.title %}*/
/*         <h3 class="title module-title">{{ item.title }}</h3>*/
/*         {% endif %}*/
/*         <div class="block-body expand-block">*/
/*           <div class="block-wrapper">*/
/*             <div class="block-content {% if item.expandButton %}expand-content{% endif %}">*/
/*               {{ item.content }}*/
/*               {% if item.expandButton %}*/
/*                 <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
