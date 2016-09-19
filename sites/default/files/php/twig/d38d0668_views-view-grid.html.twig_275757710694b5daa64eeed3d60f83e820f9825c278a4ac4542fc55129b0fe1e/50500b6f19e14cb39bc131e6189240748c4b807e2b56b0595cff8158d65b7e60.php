<?php

/* themes/businessgroup_zymphonies_theme/templates/views/views-view-grid.html.twig */
class __TwigTemplate_9afbe2264294081a743551b78f1fcbb979c6e7df8daf17713e56e2a5272947f9 extends Twig_Template
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
        $tags = array("set" => 30, "if" => 37, "for" => 58);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
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

        // line 30
        $context["classes"] = array(0 => "views-view-grid", 1 => $this->getAttribute(        // line 32
(isset($context["options"]) ? $context["options"] : null), "alignment", array()), 2 => ("cols-" . $this->getAttribute(        // line 33
(isset($context["options"]) ? $context["options"] : null), "columns", array())), 3 => "clearfix");
        // line 37
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "row_class_default", array())) {
            // line 38
            echo "  ";
            // line 39
            $context["row_classes"] = array(0 => "views-row", 1 => ((($this->getAttribute(            // line 41
(isset($context["options"]) ? $context["options"] : null), "alignment", array()) == "horizontal")) ? ("clearfix") : ("")));
        }
        // line 45
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "col_class_default", array())) {
            // line 46
            echo "  ";
            // line 47
            $context["col_classes"] = array(0 => "views-col", 1 => ((($this->getAttribute(            // line 49
(isset($context["options"]) ? $context["options"] : null), "alignment", array()) == "vertical")) ? ("clearfix") : ("")));
        }
        // line 53
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 54
            echo "  <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
        }
        // line 56
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 57
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "alignment", array()) == "horizontal")) {
            // line 58
            echo "    ";
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 59
                echo "      <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null), 1 => (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "row_class_default", array())) ? (("row-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true));
                echo ">
        ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 61
                    echo "          <div";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["col_classes"]) ? $context["col_classes"] : null), 1 => (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "col_class_default", array())) ? (("col-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true));
                    echo ">
            ";
                    // line 62
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                    echo "
          </div>
        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "      </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "  ";
        } else {
            // line 68
            echo "    ";
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 69
                echo "      <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["col_classes"]) ? $context["col_classes"] : null), 1 => (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "col_class_default", array())) ? (("col-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true));
                echo ">
        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 71
                    echo "          <div";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null), 1 => (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "row_class_default", array())) ? (("row-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true));
                    echo ">
            ";
                    // line 72
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                    echo "
          </div>
        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "      </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "  ";
        }
        // line 78
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/businessgroup_zymphonies_theme/templates/views/views-view-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 78,  235 => 77,  220 => 75,  203 => 72,  198 => 71,  181 => 70,  176 => 69,  158 => 68,  155 => 67,  140 => 65,  123 => 62,  118 => 61,  101 => 60,  96 => 59,  78 => 58,  76 => 57,  71 => 56,  65 => 54,  63 => 53,  60 => 49,  59 => 47,  57 => 46,  55 => 45,  52 => 41,  51 => 39,  49 => 38,  47 => 37,  45 => 33,  44 => 32,  43 => 30,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for views to display rows in a grid.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapping element.*/
/*  * - title: The title of this group of rows.*/
/*  * - view: The view object.*/
/*  * - rows: The rendered view results.*/
/*  * - options: The view plugin style options.*/
/*  *   - row_class_default: A flag indicating whether default classes should be*/
/*  *     used on rows.*/
/*  *   - col_class_default: A flag indicating whether default classes should be*/
/*  *     used on columns.*/
/*  * - items: A list of grid items. Each item contains a list of rows or columns.*/
/*  *   The order in what comes first (row or column) depends on which alignment*/
/*  *   type is chosen (horizontal or vertical).*/
/*  *   - attributes: HTML attributes for each row or column.*/
/*  *   - content: A list of columns or rows. Each row or column contains:*/
/*  *     - attributes: HTML attributes for each row or column.*/
/*  *     - content: The row or column contents.*/
/*  **/
/*  * @see template_preprocess_views_view_grid()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'views-view-grid',*/
/*     options.alignment,*/
/*     'cols-' ~ options.columns,*/
/*     'clearfix',*/
/*   ]*/
/* %}*/
/* {% if options.row_class_default %}*/
/*   {%*/
/*     set row_classes = [*/
/*       'views-row',*/
/*       options.alignment == 'horizontal' ? 'clearfix',*/
/*     ]*/
/*   %}*/
/* {% endif %}*/
/* {% if options.col_class_default %}*/
/*   {%*/
/*     set col_classes = [*/
/*       'views-col',*/
/*       options.alignment == 'vertical' ? 'clearfix',*/
/*     ]*/
/*   %}*/
/* {% endif %}*/
/* {% if title %}*/
/*   <h3>{{ title }}</h3>*/
/* {% endif %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if options.alignment == 'horizontal' %}*/
/*     {% for row in items %}*/
/*       <div{{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>*/
/*         {% for column in row.content %}*/
/*           <div{{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>*/
/*             {{ column.content }}*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% else %}*/
/*     {% for column in items %}*/
/*       <div{{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>*/
/*         {% for row in column.content %}*/
/*           <div{{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>*/
/*             {{ row.content }}*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* </div>*/
/* */
