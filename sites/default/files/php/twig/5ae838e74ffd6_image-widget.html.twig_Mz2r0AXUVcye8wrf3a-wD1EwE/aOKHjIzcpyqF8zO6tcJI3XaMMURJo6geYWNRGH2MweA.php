<?php

/* core/themes/seven/templates/image-widget.html.twig */
class __TwigTemplate_cc3b328b5b4da4da4e1bb585c8f37f24b4d28509635fd5e87f08d39e2513b1a4 extends Twig_Template
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
        $tags = array("include" => 11);
        $filters = array();
        $functions = array("attach_library" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 11
        $this->loadTemplate("@classy/content-edit/image-widget.html.twig", "core/themes/seven/templates/image-widget.html.twig", 11)->display($context);
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/image-widget"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  43 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override for an image field widget.
 *
 * Included from Classy theme.
 *
 * @see template_preprocess_image_widget()
 */
#}
{% include '@classy/content-edit/image-widget.html.twig' %}
{{ attach_library('classy/image-widget') }}
", "core/themes/seven/templates/image-widget.html.twig", "C:\\xampp\\htdocs\\firstproject12\\core\\themes\\seven\\templates\\image-widget.html.twig");
    }
}
