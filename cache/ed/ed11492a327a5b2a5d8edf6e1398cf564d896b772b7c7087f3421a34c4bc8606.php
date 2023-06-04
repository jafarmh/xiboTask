<?php

/* form-base.twig */
class __TwigTemplate_2e3ae75b90b70935878ef802f2dceb8e36887ccdc13e7f7f783a7de1b67a788e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            '__internal_a089aab834e4e521209ed061cf6e1b929ca9b4632ceee4119297c19a9c54da54' => array($this, 'block___internal_a089aab834e4e521209ed061cf6e1b929ca9b4632ceee4119297c19a9c54da54'),
            'formHtml' => array($this, 'block_formHtml'),
            '__internal_7fbed9f5700e070ad0ff9eb7969128c625296920e3c227f39fc12930d070d1c3' => array($this, 'block___internal_7fbed9f5700e070ad0ff9eb7969128c625296920e3c227f39fc12930d070d1c3'),
            'formButtons' => array($this, 'block_formButtons'),
            '__internal_626cae1a31a2465e8106f2288bce8b16ba5adce7143578f6a8dce180bd26549e' => array($this, 'block___internal_626cae1a31a2465e8106f2288bce8b16ba5adce7143578f6a8dce180bd26549e'),
            'formFieldActions' => array($this, 'block_formFieldActions'),
            '__internal_bafc5b7d75ca809e43d670c788f14e5257ea932395509ed575135f766e312f65' => array($this, 'block___internal_bafc5b7d75ca809e43d670c788f14e5257ea932395509ed575135f766e312f65'),
            'callBack' => array($this, 'block_callBack'),
            '__internal_e7f357d8efd5cb2e8a46ae6214d6ad1693b4d0cd4e59a3242db4119fe2646972' => array($this, 'block___internal_e7f357d8efd5cb2e8a46ae6214d6ad1693b4d0cd4e59a3242db4119fe2646972'),
            'extra' => array($this, 'block_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "{
    \"title\": ";
        // line 2
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_a089aab834e4e521209ed061cf6e1b929ca9b4632ceee4119297c19a9c54da54", $context, $blocks));
        echo ",
    \"html\": ";
        // line 3
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_7fbed9f5700e070ad0ff9eb7969128c625296920e3c227f39fc12930d070d1c3", $context, $blocks));
        echo ",
    \"buttons\": ";
        // line 4
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_626cae1a31a2465e8106f2288bce8b16ba5adce7143578f6a8dce180bd26549e", $context, $blocks));
        echo ",
    \"fieldActions\": ";
        // line 5
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_bafc5b7d75ca809e43d670c788f14e5257ea932395509ed575135f766e312f65", $context, $blocks));
        echo ",
    \"callBack\": ";
        // line 6
        echo twig_jsonencode_filter(        $this->renderBlock("__internal_e7f357d8efd5cb2e8a46ae6214d6ad1693b4d0cd4e59a3242db4119fe2646972", $context, $blocks));
        echo ",
    \"extra\": ";
        // line 7
        $this->displayBlock('extra', $context, $blocks);
        // line 8
        echo "}";
    }

    // line 2
    public function block_formTitle($context, array $blocks = array())
    {
    }

    public function block___internal_a089aab834e4e521209ed061cf6e1b929ca9b4632ceee4119297c19a9c54da54($context, array $blocks = array())
    {
        $this->displayBlock('formTitle', $context, $blocks);
    }

    // line 3
    public function block_formHtml($context, array $blocks = array())
    {
    }

    public function block___internal_7fbed9f5700e070ad0ff9eb7969128c625296920e3c227f39fc12930d070d1c3($context, array $blocks = array())
    {
        $this->displayBlock('formHtml', $context, $blocks);
    }

    // line 4
    public function block_formButtons($context, array $blocks = array())
    {
    }

    public function block___internal_626cae1a31a2465e8106f2288bce8b16ba5adce7143578f6a8dce180bd26549e($context, array $blocks = array())
    {
        $this->displayBlock('formButtons', $context, $blocks);
    }

    // line 5
    public function block_formFieldActions($context, array $blocks = array())
    {
    }

    public function block___internal_bafc5b7d75ca809e43d670c788f14e5257ea932395509ed575135f766e312f65($context, array $blocks = array())
    {
        $this->displayBlock('formFieldActions', $context, $blocks);
    }

    // line 6
    public function block_callBack($context, array $blocks = array())
    {
    }

    public function block___internal_e7f357d8efd5cb2e8a46ae6214d6ad1693b4d0cd4e59a3242db4119fe2646972($context, array $blocks = array())
    {
        $this->displayBlock('callBack', $context, $blocks);
    }

    // line 7
    public function block_extra($context, array $blocks = array())
    {
        echo "[]";
    }

    public function getTemplateName()
    {
        return "form-base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 7,  99 => 6,  89 => 5,  79 => 4,  69 => 3,  59 => 2,  55 => 8,  53 => 7,  49 => 6,  45 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"title\": {% filter json_encode|raw %}{% block formTitle %}{% endblock %}{% endfilter %},
    \"html\": {% filter json_encode|raw %}{% block formHtml %}{% endblock %}{% endfilter %},
    \"buttons\": {% filter json_encode|raw %}{% block formButtons %}{% endblock %}{% endfilter %},
    \"fieldActions\": {% filter json_encode|raw %}{% block formFieldActions %}{% endblock %}{% endfilter %},
    \"callBack\": {% filter json_encode|raw %}{% block callBack %}{% endblock %}{% endfilter %},
    \"extra\": {% block extra %}[]{% endblock %}
}", "form-base.twig", "C:\\xampp2\\htdocs\\xibo\\views\\form-base.twig");
    }
}
