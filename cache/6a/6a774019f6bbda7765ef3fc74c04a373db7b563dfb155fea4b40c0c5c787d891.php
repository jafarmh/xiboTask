<?php

/* login.twig */
class __TwigTemplate_0f5c690118f0bcbb49f846b84c34128ce214bd698b47e40f2fdd6b9efcf481ef extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "theme_title"), "method"), "html", null, true);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"token\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["csrfToken"]) ? $context["csrfToken"] : null), "html", null, true);
        echo "\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/favicon.ico"), "method"), "html", null, true);
        echo "\" />

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/css/bootstrap.min.css"), "method"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/css/bootstrap-theme.min.css"), "method"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    <!-- Copyright 2006-2018 Spring Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .login-logo {
            width: 200px;
        }

    </style>
</head>
<body>
    <div class=\"container\">
        <form id=\"login-form\" class=\"form-signin text-center\" action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("login"), "html", null, true);
        echo "\" method=\"post\">
            <input name=\"priorRoute\" type=\"hidden\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "priorRoute", array()), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["csrfKey"]) ? $context["csrfKey"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrfToken"]) ? $context["csrfToken"] : null), "html", null, true);
        echo "\" />
            <p><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "theme_url"), "method"), "html", null, true);
        echo "\"><img class=\"login-logo\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "img/xibologo.png"), "method"), "html", null, true);
        echo "\"></a></p>

            <p>";
        // line 59
        echo __("Please provide your credentials");
        echo "</p>

            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
        // line 61
        echo __("User");
        echo "\" autofocus>
            <input id=\"password\" class=\"form-control input-block-level\" name=\"password\" type=\"password\" placeholder=\"";
        // line 62
        echo __("Password");
        echo "\">

            ";
        // line 64
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "login_message", array())) {
            // line 65
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "login_message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 67
        echo "
            <button class=\"btn btn-large btn-primary\" type=\"submit\">";
        // line 68
        echo __("Login");
        echo "</button>
        </form>

        <p class=\"text-center\">";
        // line 71
        /* xgettext:no-php-format */        echo strtr(__("Version %version%"), array("%version%" => (isset($context["version"]) ? $context["version"] : null), ));
        // line 72
        echo "            | <a id=\"source-link\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "cms_source_url"), "method"), "html", null, true);
        echo "\">";
        echo __("Source");
        echo "</a>
            | <a id=\"about-link\" class=\"XiboFormButton\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About");
        echo "\">";
        echo __("About");
        echo "</a>
            | <a id=\"forgotPassword-link\" class=\"XiboFormButton\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("forgotPassword"), "html", null, true);
        echo "\" title=\"";
        echo __("Forgot Password");
        echo "\">";
        echo __("Forgot Password");
        echo "</a>
        </p>
    </div> <!-- /container -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery-1.11.1.min.js"), "method"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/js/bootstrap.min.js"), "method"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 78,  168 => 77,  158 => 74,  150 => 73,  143 => 72,  141 => 71,  135 => 68,  132 => 67,  126 => 65,  124 => 64,  119 => 62,  115 => 61,  110 => 59,  103 => 57,  97 => 56,  93 => 55,  89 => 54,  44 => 12,  40 => 11,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{{ theme.getThemeConfig(\"theme_title\") }}</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"token\" content=\"{{ csrfToken }}\"/>
    <link rel=\"shortcut icon\" href=\"{{ theme.uri(\"img/favicon.ico\") }}\" />

    <link href=\"{{ theme.uri(\"libraries/bootstrap/css/bootstrap.min.css\") }}\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"{{ theme.uri(\"libraries/bootstrap/css/bootstrap-theme.min.css\") }}\" rel=\"stylesheet\" media=\"screen\">

    <!-- Copyright 2006-2018 Spring Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .login-logo {
            width: 200px;
        }

    </style>
</head>
<body>
    <div class=\"container\">
        <form id=\"login-form\" class=\"form-signin text-center\" action=\"{{ urlFor(\"login\") }}\" method=\"post\">
            <input name=\"priorRoute\" type=\"hidden\" value=\"{{ flash.priorRoute }}\" />
            <input type=\"hidden\" name=\"{{ csrfKey }}\" value=\"{{ csrfToken }}\" />
            <p><a href=\"{{ theme.getThemeConfig(\"theme_url\") }}\"><img class=\"login-logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\"></a></p>

            <p>{% trans \"Please provide your credentials\" %}</p>

            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"{% trans \"User\" %}\" autofocus>
            <input id=\"password\" class=\"form-control input-block-level\" name=\"password\" type=\"password\" placeholder=\"{% trans \"Password\" %}\">

            {% if flash.login_message %}
            <div class=\"alert alert-danger\">{{ flash.login_message }}</div>
            {% endif %}

            <button class=\"btn btn-large btn-primary\" type=\"submit\">{% trans \"Login\" %}</button>
        </form>

        <p class=\"text-center\">{% trans %}Version {{ version }}{% endtrans %}
            | <a id=\"source-link\" href=\"{{ theme.getThemeConfig(\"cms_source_url\") }}\">{% trans \"Source\" %}</a>
            | <a id=\"about-link\" class=\"XiboFormButton\" href=\"{{ urlFor(\"about\") }}\" title=\"{% trans \"About\" %}\">{% trans \"About\" %}</a>
            | <a id=\"forgotPassword-link\" class=\"XiboFormButton\" href=\"{{  urlFor(\"forgotPassword\") }}\" title=\"{% trans \"Forgot Password\" %}\">{% trans \"Forgot Password\" %}</a>
        </p>
    </div> <!-- /container -->
    <script src=\"{{ theme.uri(\"libraries/jquery/jquery-1.11.1.min.js\") }}\"></script>
    <script src=\"{{ theme.uri(\"libraries/bootstrap/js/bootstrap.min.js\") }}\"></script>
</body>
</html>", "login.twig", "C:\\xampp2\\htdocs\\xibo\\views\\login.twig");
    }
}
