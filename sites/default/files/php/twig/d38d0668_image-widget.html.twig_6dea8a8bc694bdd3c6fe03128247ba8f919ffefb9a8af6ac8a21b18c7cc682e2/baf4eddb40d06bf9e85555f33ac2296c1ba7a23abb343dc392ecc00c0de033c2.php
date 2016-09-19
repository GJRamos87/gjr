<?php

/* core/themes/stable/templates/content-edit/image-widget.html.twig */
class __TwigTemplate_1e27b09f68dddcd4923ef0cbb9d776eb84c38fffd1ebcc835b76aa6995cc92a3 extends Twig_Template
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
        $tags = array();
        $filters = array("without" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('without'),
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

        // line 13
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "preview", array()), "html", null, true));
        echo "
  ";
        // line 16
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["data"]) ? $context["data"] : null), "preview"), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content-edit/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  48 => 14,  43 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an image field widget.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - data: Render elements of the image widget.*/
/*  **/
/*  * @see template_preprocess_image_widget()*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/*   {{ data.preview }}*/
/*   {# Render widget data without the image preview that was output already. #}*/
/*   {{ data|without('preview') }}*/
/* </div>*/
/* */
