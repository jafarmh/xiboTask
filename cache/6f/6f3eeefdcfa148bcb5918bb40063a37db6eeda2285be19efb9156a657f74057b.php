<?php

/* licence.twig */
class __TwigTemplate_713d9ecd619792d6aecabb9bceaa81a0f4fa91d6980dae0cee48c2065cf16603 extends Twig_Template
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
        echo "<h2>License <small>Digital Signage for Everyone</small></h2>
<p>Xibo Digital Signage - <a target=\"_blank\"  href=\"http://www.xibo.org.uk\" title=\"Xibo Website\">www.xibo.org.uk</a>. Version ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "<br />
    Copyright &copy 2006-2018 Spring Signage Ltd and the
    <a target=\"_blank\" href=\"https://github.com/orgs/xibosignage/people\" title=\"Xibo Developers\">Xibo Developers</a>.</p>

<p>Xibo is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version. </p>

<p>Xibo is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.</p>

<p>You should have received a copy of the GNU Affero General Public License
    along with Xibo. If not, see <a target=\"_blank\" href=\"http://opensource.org/licenses/AGPL-3.0\">opensource.org/licenses/AGPL-3.0</a>. </p>

<p>Further guideance is available <a href=\"http://xibo.org.uk/legal\">here</a>. If in doubt, please seek professional legal advice.</p>

<h2>Source Code</h2>
<p>As an end user of the Xibo software you are entitled to download and view the source code. You may do
    so from <a target=\"_blank\"  id=\"source-link\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["sourceUrl"]) ? $context["sourceUrl"] : null), "html", null, true);
        echo "\">GitHub</a>.
    As a service provider you <strong>MUST</strong> provide your end users notification of and access to the source code.</p>

<h2>Third Party Licenses</h2>
<p>Xibo uses some third party libraries and tools - these are provided with the software under licences compatible with the AGPLv3. All licences for
    third party libraries are included with that library and attributed in the code.</p>

<p>Emoji artwork is provided by <a href=\"https://www.emojione.com/\">EmojiOne</a> and is licensed
    under <a href=\"https://creativecommons.org/licenses/by/4.0/legalcode\">CC-BY 4.0</a>.</p>

<h3>Fonts</h3>
<p>Xibo includes fonts licensed under the <a href=\"http://scripts.sil.org/OFL_web\">OFL</a> and <a href=\"http://creativecommons.org/publicdomain/zero/1.0/\">CC-0</a>.</p>

<p>
<ul>
    <li><strong>Aileron Regular (CC-0)</strong>: <a href=\"https://fontlibrary.org/en/font/aileron#Aileron-Regular\">https://fontlibrary.org/en/font/aileron#Aileron-Regular</a>.</li>
    <li><strong>Aileron Heavy (CC-0)</strong>: <a href=\"https://fontlibrary.org/en/font/aileron#Aileron-Heavy\">https://fontlibrary.org/en/font/aileron#Aileron-Heavy</a>.</li>
    <li><strong>Dancing Script Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/dancing\">https://fontlibrary.org/en/font/dancing</a>.</li>
    <li><strong>Linear Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/linear-regular#Linear-Regular\">https://fontlibrary.org/en/font/linear-regular#Linear-Regular</a>.</li>
    <li><strong>Railway Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/railway-sans#Railway-Regular\">https://fontlibrary.org/en/font/railway-sans#Railway-Regular</a>.</li>
</ul>
</p>

<h2>Commercial</h2>
<p>Xibo is supported and maintained by <a target=\"_blank\"  href=\"http://springsignage.com/\" title=\"Xibo Commercial Sponsor\">Spring Signage Ltd</a>.</p>";
    }

    public function getTemplateName()
    {
        return "licence.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 23,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>License <small>Digital Signage for Everyone</small></h2>
<p>Xibo Digital Signage - <a target=\"_blank\"  href=\"http://www.xibo.org.uk\" title=\"Xibo Website\">www.xibo.org.uk</a>. Version {{ version }}<br />
    Copyright &copy 2006-2018 Spring Signage Ltd and the
    <a target=\"_blank\" href=\"https://github.com/orgs/xibosignage/people\" title=\"Xibo Developers\">Xibo Developers</a>.</p>

<p>Xibo is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version. </p>

<p>Xibo is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.</p>

<p>You should have received a copy of the GNU Affero General Public License
    along with Xibo. If not, see <a target=\"_blank\" href=\"http://opensource.org/licenses/AGPL-3.0\">opensource.org/licenses/AGPL-3.0</a>. </p>

<p>Further guideance is available <a href=\"http://xibo.org.uk/legal\">here</a>. If in doubt, please seek professional legal advice.</p>

<h2>Source Code</h2>
<p>As an end user of the Xibo software you are entitled to download and view the source code. You may do
    so from <a target=\"_blank\"  id=\"source-link\" href=\"{{ sourceUrl }}\">GitHub</a>.
    As a service provider you <strong>MUST</strong> provide your end users notification of and access to the source code.</p>

<h2>Third Party Licenses</h2>
<p>Xibo uses some third party libraries and tools - these are provided with the software under licences compatible with the AGPLv3. All licences for
    third party libraries are included with that library and attributed in the code.</p>

<p>Emoji artwork is provided by <a href=\"https://www.emojione.com/\">EmojiOne</a> and is licensed
    under <a href=\"https://creativecommons.org/licenses/by/4.0/legalcode\">CC-BY 4.0</a>.</p>

<h3>Fonts</h3>
<p>Xibo includes fonts licensed under the <a href=\"http://scripts.sil.org/OFL_web\">OFL</a> and <a href=\"http://creativecommons.org/publicdomain/zero/1.0/\">CC-0</a>.</p>

<p>
<ul>
    <li><strong>Aileron Regular (CC-0)</strong>: <a href=\"https://fontlibrary.org/en/font/aileron#Aileron-Regular\">https://fontlibrary.org/en/font/aileron#Aileron-Regular</a>.</li>
    <li><strong>Aileron Heavy (CC-0)</strong>: <a href=\"https://fontlibrary.org/en/font/aileron#Aileron-Heavy\">https://fontlibrary.org/en/font/aileron#Aileron-Heavy</a>.</li>
    <li><strong>Dancing Script Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/dancing\">https://fontlibrary.org/en/font/dancing</a>.</li>
    <li><strong>Linear Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/linear-regular#Linear-Regular\">https://fontlibrary.org/en/font/linear-regular#Linear-Regular</a>.</li>
    <li><strong>Railway Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/railway-sans#Railway-Regular\">https://fontlibrary.org/en/font/railway-sans#Railway-Regular</a>.</li>
</ul>
</p>

<h2>Commercial</h2>
<p>Xibo is supported and maintained by <a target=\"_blank\"  href=\"http://springsignage.com/\" title=\"Xibo Commercial Sponsor\">Spring Signage Ltd</a>.</p>", "licence.twig", "C:\\xampp2\\htdocs\\xibo\\views\\licence.twig");
    }
}