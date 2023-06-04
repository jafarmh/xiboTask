<?php

/* about-page.twig */
class __TwigTemplate_0047da8e8da96f0e1bafaf11c1a7f2f30d2045aa9f31ea99d0a13680caadd412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "about-page.twig", 9);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["inline"] = $this->loadTemplate("inline.twig", "about-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 14
        echo __("Licence Information");
        echo "</div>
        <div class=\"widget-body\">
            ";
        // line 16
        $this->loadTemplate("licence.twig", "about-page.twig", 16)->display($context);
        // line 17
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "about-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  42 => 16,  37 => 14,  34 => 13,  31 => 12,  27 => 9,  25 => 10,  11 => 9,);
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
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Licence Information\" %}</div>
        <div class=\"widget-body\">
            {% include \"licence.twig\" %}
        </div>
    </div>
{% endblock %}", "about-page.twig", "C:\\xampp2\\htdocs\\xibo\\views\\about-page.twig");
    }
}
