<?php

/* journal3/template/journal3/module/blocks.twig */
class __TwigTemplate_3d486558a79999c362b06c7f2dcee3881d55a5591c9832cba5ac91d298294264 extends Twig_Template
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
        // line 30
        $context["self"] = $this;
        // line 31
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">";
        // line 32
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 33
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>";
        }
        // line 35
        echo "  <div class=\"module-body\">";
        // line 37
        if ((((isset($context["display"]) ? $context["display"] : null) == "grid") &&  !(isset($context["carousel"]) ? $context["carousel"] : null))) {
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">";
                // line 40
                echo $context["self"]->getrenderBlocksItem($context["item"], $context);
                echo "
      </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 45
        if ((((isset($context["display"]) ? $context["display"] : null) == "grid") && (isset($context["carousel"]) ? $context["carousel"] : null))) {
            // line 46
            echo "    <div class=\"swiper\" data-items-per-row='";
            echo twig_jsonencode_filter((isset($context["itemsPerRow"]) ? $context["itemsPerRow"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo "'>
      <div class=\"swiper-container\"";
            // line 47
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
        <div class=\"swiper-wrapper\">";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "            <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">";
                // line 51
                echo $context["self"]->getrenderBlocksItem($context["item"], $context);
                echo "
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>";
        }
        // line 64
        if (((isset($context["display"]) ? $context["display"] : null) == "tabs")) {
            // line 65
            echo "    <div class=\"tabs-container\">
      <ul class=\"nav nav-tabs\">";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 68
                echo "          <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">";
                // line 69
                if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    // line 70
                    echo "              <a href=\"";
                    echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                    echo "\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                    echo ">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>";
                } else {
                    // line 72
                    echo "              <a href=\"#";
                    echo (isset($context["id"]) ? $context["id"] : null);
                    echo "-tab-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" data-toggle=\"tab\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>";
                }
                // line 74
                echo "          </li>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "      </ul>
      <div class=\"tab-content\">";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 79
                if ( !$this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    // line 80
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                    echo "\" id=\"";
                    echo (isset($context["id"]) ? $context["id"] : null);
                    echo "-tab-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\">";
                    // line 81
                    echo $context["self"]->getrenderBlocksItem($context["item"], $context);
                    echo "
            </div>";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "      </div>
    </div>";
        }
        // line 89
        if (((isset($context["display"]) ? $context["display"] : null) == "accordion")) {
            // line 90
            echo "    <div class=\"panel-group\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse\">";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 92
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a href=\"#";
                // line 95
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse\" aria-expanded=\"false\">";
                // line 96
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </h4>
          </div>
          <div class=\"";
                // line 101
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
            <div class=\"panel-body\">";
                // line 103
                echo $context["self"]->getrenderBlocksItem($context["item"], $context);
                echo "
            </div>
          </div>
        </div>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "    </div>";
        }
        // line 110
        echo "  </div>
</div>
";
    }

    // line 1
    public function getrenderBlocksItem($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["self"] = $this;
            // line 3
            echo "  <div class=\"block-body expand-block\">";
            // line 4
            if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array()) == "grid") && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()))) {
                // line 5
                echo "      <h3 class=\"title module-title block-title\">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array());
                echo "</h3>";
            }
            // line 7
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "header", array()) == "image")) {
                // line 8
                echo "      <div class=\"block-header\"><img src=\"";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array());
                echo "\"";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image2x", array())) {
                    echo " srcset=\"";
                    echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array());
                    echo " 1x,";
                    echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image2x", array());
                    echo " 2x\"";
                }
                echo " alt=\"\" class=\"block-image\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "width", array());
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "height", array());
                echo "\"/></div>";
            } elseif (($this->getAttribute(            // line 9
(isset($context["item"]) ? $context["item"] : null), "header", array()) == "icon")) {
                // line 10
                echo "      <div class=\"block-header\"><i class=\"icon icon-block\"></i></div>";
            }
            // line 12
            echo "    <div class=\"block-wrapper\">
      <div class=\"block-content";
            // line 13
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "expandButton", array())) {
                echo "expand-content";
            }
            echo " block-";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "contentType", array());
            echo "\">";
            // line 14
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "contentType", array()) == "map")) {
                // line 15
                echo "        <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>";
            }
            // line 17
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "content", array());
            // line 18
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "expandButton", array())) {
                // line 19
                echo "          <div class=\"block-expand-overlay\"><a class=\"block-expand btn\"></a></div>";
            }
            // line 21
            echo "      </div>";
            // line 22
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footer", array()) == "text")) {
                // line 23
                echo "        <div class=\"block-footer\">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerText", array());
                echo "</div>";
            } elseif (($this->getAttribute(            // line 24
(isset($context["item"]) ? $context["item"] : null), "footer", array()) == "button")) {
                // line 25
                echo "        <div class=\"block-footer\"><a class=\"btn\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerButtonLink", array()), "href", array());
                echo "\"";
                echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "j3", array()), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerButtonLink", array())), "method");
                echo ">";
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "footerButton", array());
                echo "</a></div>";
            }
            // line 27
            echo "    </div>
  </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 27,  364 => 25,  362 => 24,  358 => 23,  356 => 22,  354 => 21,  351 => 19,  349 => 18,  347 => 17,  344 => 15,  342 => 14,  335 => 13,  332 => 12,  329 => 10,  327 => 9,  311 => 8,  309 => 7,  304 => 5,  302 => 4,  300 => 3,  298 => 2,  285 => 1,  279 => 110,  276 => 108,  258 => 103,  250 => 101,  242 => 96,  235 => 95,  228 => 92,  211 => 91,  207 => 90,  205 => 89,  201 => 85,  184 => 81,  176 => 80,  174 => 79,  157 => 78,  154 => 76,  140 => 74,  131 => 72,  122 => 70,  120 => 69,  116 => 68,  99 => 67,  96 => 65,  94 => 64,  84 => 54,  76 => 51,  72 => 50,  68 => 49,  62 => 47,  55 => 46,  53 => 45,  44 => 40,  40 => 39,  36 => 38,  34 => 37,  32 => 35,  27 => 33,  25 => 32,  21 => 31,  19 => 30,);
    }
}
/* {% macro renderBlocksItem(item, context) %}*/
/*   {% import _self as self %}*/
/*   <div class="block-body expand-block">*/
/*     {% if context.display == 'grid' and item.title %}*/
/*       <h3 class="title module-title block-title">{{ item.title }}</h3>*/
/*     {% endif %}*/
/*     {% if item.header == 'image' %}*/
/*       <div class="block-header"><img src="{{ item.image }}" {% if item.image2x %} srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} alt="" class="block-image" width="{{ context.imageDimensions.width }}" height="{{ context.imageDimensions.height }}"/></div>*/
/*     {% elseif item.header == 'icon' %}*/
/*       <div class="block-header"><i class="icon icon-block"></i></div>*/
/*     {% endif %}*/
/*     <div class="block-wrapper">*/
/*       <div class="block-content {% if item.expandButton %}expand-content{% endif %} block-{{ item.contentType }}">*/
/*         {% if item.contentType == 'map' %}*/
/*         <div class="journal-loading"><i class="fa fa-spinner fa-spin"></i></div>*/
/*         {% endif %}*/
/*         {{ item.content }}*/
/*         {% if item.expandButton %}*/
/*           <div class="block-expand-overlay"><a class="block-expand btn"></a></div>*/
/*         {% endif %}*/
/*       </div>*/
/*       {% if item.footer == 'text' %}*/
/*         <div class="block-footer">{{ item.footerText }}</div>*/
/*       {% elseif item.footer == 'button' %}*/
/*         <div class="block-footer"><a class="btn" href="{{ item.footerButtonLink.href }}" {{ context.j3.linkAttrs(item.footerButtonLink) }}>{{ item.footerButton }}</a></div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*   {# grid #}*/
/*   {% if display == 'grid' and not carousel %}*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}">*/
/*         {{ self.renderBlocksItem(item, _context) }}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/*   {# grid + carousel #}*/
/*   {% if display == 'grid' and carousel %}*/
/*     <div class="swiper" data-items-per-row='{{ itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'>*/
/*       <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*         <div class="swiper-wrapper">*/
/*           {% for item in items %}*/
/*             <div class="{{ j3.classes(item.classes) }}">*/
/*               {{ self.renderBlocksItem(item, _context) }}*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*       <div class="swiper-buttons">*/
/*         <div class="swiper-button-prev"></div>*/
/*         <div class="swiper-button-next"></div>*/
/*       </div>*/
/*       <div class="swiper-pagination"></div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {# tabs #}*/
/*   {% if display == 'tabs' %}*/
/*     <div class="tabs-container">*/
/*       <ul class="nav nav-tabs">*/
/*         {% for item in items %}*/
/*           <li class="{{ j3.classes(item.tab_classes) }}">*/
/*             {% if item.link.href %}*/
/*               <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>{{ item.title }}</a>*/
/*             {% else %}*/
/*               <a href="#{{ id }}-tab-{{ loop.index }}" data-toggle="tab">{{ item.title }}</a>*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="tab-content">*/
/*         {% for item in items %}*/
/*           {% if not item.link.href %}*/
/*             <div class="{{ j3.classes(item.classes) }}" id="{{ id }}-tab-{{ loop.index }}">*/
/*               {{ self.renderBlocksItem(item, _context) }}*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {# accordion #}*/
/*   {% if display == 'accordion' %}*/
/*     <div class="panel-group" id="{{ id }}-collapse">*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">*/
/*               <a href="#{{ id }}-collapse-{{ loop.index }}" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#{{ id }}-collapse" aria-expanded="false">*/
/*                 {{ item.title }}*/
/*                 <i class="fa fa-caret-down"></i>*/
/*               </a>*/
/*             </h4>*/
/*           </div>*/
/*           <div class="{{ j3.classes(item.panel_classes) }}" id="{{ id }}-collapse-{{ loop.index }}">*/
/*             <div class="panel-body">*/
/*               {{ self.renderBlocksItem(item, _context) }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
