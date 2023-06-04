<?php

/* help-form-add.twig */
class __TwigTemplate_cfaa91fedd70b8c797517ce8e61a334c090b2b4c6fbfc11deffeb7d4c5f7bf86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("form-base.twig", "help-form-add.twig", 10);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
            'formHtml' => array($this, 'block_formHtml'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["forms"] = $this->loadTemplate("forms.twig", "help-form-add.twig", 11);
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_formTitle($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo __("Add Help Link");
    }

    // line 17
    public function block_formButtons($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 19
        echo __("Save");
        echo ", \$(\"#helpAddForm\").submit()
";
    }

    // line 22
    public function block_formHtml($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"helpAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("help.add"), "html", null, true);
        echo "\">
                    ";
        // line 26
        ob_start();
        echo __("Topic");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                    ";
        ob_start();
        echo __("The Topic for this Help Link");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                    ";
        echo $context["forms"]->getinput("topic", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                        
                    ";
        // line 30
        ob_start();
        echo __("Category");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                    ";
        ob_start();
        echo __("he Category for this Help Link");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "                    ";
        echo $context["forms"]->getinput("category", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                       
                    ";
        // line 34
        ob_start();
        echo __("Link");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                    ";
        ob_start();
        echo __("The Link to open for this help topic and category");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                    ";
        echo $context["forms"]->getinput("link", (isset($context["title"]) ? $context["title"] : null), "", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "help-form-add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  100 => 35,  96 => 34,  90 => 32,  85 => 31,  81 => 30,  75 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 23,  55 => 22,  49 => 19,  44 => 18,  41 => 17,  36 => 14,  33 => 13,  29 => 10,  27 => 11,  11 => 10,);
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
/*
 * Spring Signage Ltd - http://www.springsignage.com
 * Copyright (C) 2015 Spring Signage Ltd
 * (\${FILE_NAME})
 */

#}

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Add Help Link\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#helpAddForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"helpAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"{{ urlFor(\"help.add\") }}\">
                    {% set title %}{% trans \"Topic\" %}{% endset %}
                    {% set helpText %}{% trans \"The Topic for this Help Link\" %}{% endset %}
                    {{ forms.input(\"topic\", title, \"\", helpText) }}
                        
                    {% set title %}{% trans \"Category\" %}{% endset %}
                    {% set helpText %}{% trans \"he Category for this Help Link\" %}{% endset %}
                    {{ forms.input(\"category\", title, \"\", helpText) }}
                       
                    {% set title %}{% trans \"Link\" %}{% endset %}
                    {% set helpText %}{% trans \"The Link to open for this help topic and category\" %}{% endset %}
                    {{ forms.input(\"link\", title, \"\", helpText) }}
            </form>
        </div>
    </div>
{% endblock %}", "help-form-add.twig", "C:\\xampp2\\htdocs\\xibo\\views\\help-form-add.twig");
    }
}
