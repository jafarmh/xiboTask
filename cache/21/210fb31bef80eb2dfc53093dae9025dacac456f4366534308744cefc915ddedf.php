<?php

/* forgotPassword.twig */
class __TwigTemplate_bf149b7998f554ada1db25264cb01aeb6c57d4fc7a26122c8e68eca00304d525 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("forgotPassword"), "html", null, true);
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
        echo __("Please Enter your Email");
        echo "</p>

            <input id=\"useremail\" class=\"form-control input-block-level\" required name=\"emil\" type=\"email\" placeholder=\"";
        // line 61
        echo __("Email");
        echo "\" autofocus>
 
            ";
        // line 63
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "login_message", array())) {
            // line 64
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "login_message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 66
        echo "
            <button class=\"btn btn-large btn-primary \" style=\"margin:1rem;\" id=\"sbBtn\" type=\"button\">";
        // line 67
        echo __("send code");
        echo "</button>
        </form>

        <p class=\"text-center\">";
        // line 70
        /* xgettext:no-php-format */        echo strtr(__("Version %version%"), array("%version%" => (isset($context["version"]) ? $context["version"] : null), ));
        // line 71
        echo "            | <a id=\"login-link\" class=\"XiboFormButton\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("login"), "html", null, true);
        echo "\" >";
        echo __("login");
        echo "</a>
        </p>
    </div> <!-- /container -->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/jquery/jquery-1.11.1.min.js"), "method"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "libraries/bootstrap/js/bootstrap.min.js"), "method"), "html", null, true);
        echo "\"></script>

    <script>

        let btn=document.querySelector(\"#sbBtn\");
        btn.onclick=()=>{
            if(\$(\"#useremail\").val()==''){
                alert(\"ایمیل خالی است!\");
                return false;
            }
        var csrf_token = \$('meta[name=\"token\"]').attr('content');

        \$.ajax({
        type:\"post\",
\t\turl: this.url,
\t\tcache: false, 
\t\tdataType: \"json\", 
        headers: {
            'X-XSRF-TOKEN': csrf_token
        },
\t\tdata:{
\t\t\t\"email\": \$(\"#useremail\").val(),
\t\t},
\t\tsuccess: function(response) {
           
                if (response.message==='success') {
                    alert(response.data);
                    window.location.href=\"forgotPasswordCode\"
                    return;
                }else{
                    alert(response.message)
                }
\t\t 
\t\t}
\t});
        }

    </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "forgotPassword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 75,  148 => 74,  139 => 71,  137 => 70,  131 => 67,  128 => 66,  122 => 64,  120 => 63,  115 => 61,  110 => 59,  103 => 57,  97 => 56,  93 => 55,  89 => 54,  44 => 12,  40 => 11,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
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
        <form id=\"login-form\" class=\"form-signin text-center\" action=\"{{ urlFor(\"forgotPassword\") }}\" method=\"post\">
            <input name=\"priorRoute\" type=\"hidden\" value=\"{{ flash.priorRoute }}\" />
            <input type=\"hidden\" name=\"{{ csrfKey }}\" value=\"{{ csrfToken }}\" />
            <p><a href=\"{{ theme.getThemeConfig(\"theme_url\") }}\"><img class=\"login-logo\" src=\"{{ theme.uri(\"img/xibologo.png\") }}\"></a></p>

            <p>{% trans \"Please Enter your Email\" %}</p>

            <input id=\"useremail\" class=\"form-control input-block-level\" required name=\"emil\" type=\"email\" placeholder=\"{% trans \"Email\" %}\" autofocus>
 
            {% if flash.login_message %}
            <div class=\"alert alert-danger\">{{ flash.login_message }}</div>
            {% endif %}

            <button class=\"btn btn-large btn-primary \" style=\"margin:1rem;\" id=\"sbBtn\" type=\"button\">{% trans \"send code\" %}</button>
        </form>

        <p class=\"text-center\">{% trans %}Version {{ version }}{% endtrans %}
            | <a id=\"login-link\" class=\"XiboFormButton\" href=\"{{  urlFor(\"login\") }}\" >{% trans \"login\" %}</a>
        </p>
    </div> <!-- /container -->
    <script src=\"{{ theme.uri(\"libraries/jquery/jquery-1.11.1.min.js\") }}\"></script>
    <script src=\"{{ theme.uri(\"libraries/bootstrap/js/bootstrap.min.js\") }}\"></script>

    <script>

        let btn=document.querySelector(\"#sbBtn\");
        btn.onclick=()=>{
            if(\$(\"#useremail\").val()==''){
                alert(\"ایمیل خالی است!\");
                return false;
            }
        var csrf_token = \$('meta[name=\"token\"]').attr('content');

        \$.ajax({
        type:\"post\",
\t\turl: this.url,
\t\tcache: false, 
\t\tdataType: \"json\", 
        headers: {
            'X-XSRF-TOKEN': csrf_token
        },
\t\tdata:{
\t\t\t\"email\": \$(\"#useremail\").val(),
\t\t},
\t\tsuccess: function(response) {
           
                if (response.message==='success') {
                    alert(response.data);
                    window.location.href=\"forgotPasswordCode\"
                    return;
                }else{
                    alert(response.message)
                }
\t\t 
\t\t}
\t});
        }

    </script>
</body>
</html>", "forgotPassword.twig", "C:\\xampp2\\htdocs\\xibo\\views\\forgotPassword.twig");
    }
}
