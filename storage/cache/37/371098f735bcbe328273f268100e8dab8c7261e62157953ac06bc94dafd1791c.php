<?php

/* journal3/template/journal3/admin_profiler.twig */
class __TwigTemplate_96cb1d22e28587ffe1ecfbf1b40057aa8789536bcf907db56c7074d12473e557 extends Twig_Template
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
        echo "<script>
  console.table(";
        // line 2
        echo twig_jsonencode_filter((isset($context["stats"]) ? $context["stats"] : null));
        echo ");
  console.info('TTFB: ', '";
        // line 3
        echo ((isset($context["ttfb"]) ? $context["ttfb"] : null) . "ms");
        echo "');
</script>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/admin_profiler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <script>*/
/*   console.table({{ stats|json_encode }});*/
/*   console.info('TTFB: ', '{{ ttfb ~ 'ms' }}');*/
/* </script>*/
/* */
