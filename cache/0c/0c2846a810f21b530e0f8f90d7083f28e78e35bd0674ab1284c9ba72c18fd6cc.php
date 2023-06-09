<?php

/* user-page.twig */
class __TwigTemplate_111fe53eb59626dcf35e9c62606002b494b18bee4e229d94d85cce83b7ac8ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "user-page.twig", 8);
        $this->blocks = array(
            'actionMenu' => array($this, 'block_actionMenu'),
            'pageContent' => array($this, 'block_pageContent'),
            'javaScript' => array($this, 'block_javaScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["inline"] = $this->loadTemplate("inline.twig", "user-page.twig", 9);
        // line 8
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_actionMenu($context, array $blocks = array())
    {
        // line 12
        echo "    <ul class=\"nav nav-pills pull-right\">
        ";
        // line 13
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "isSuperAdmin", array(), "method") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "isGroupAdmin", array(), "method"))) {
            // line 14
            echo "        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
            echo __("Add a new User");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> ";
            echo __("Add User");
            echo "</a></li>
        ";
        }
        // line 16
        echo "        <li class=\"btn btn-info btn-xs\"><a class=\"XiboFormButton btns\" title=\"";
        echo __("View my authenticated applications");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.applications"), "html", null, true);
        echo "\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> ";
        echo __("My Applications");
        echo "</a></li>
    </ul>
";
    }

    // line 20
    public function block_pageContent($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 22
        echo __("Users");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"usersView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 28
        ob_start();
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "                            ";
        echo $context["inline"]->getinput("userName", (isset($context["title"]) ? $context["title"] : null));
        echo "

                            ";
        // line 31
        ob_start();
        echo __("User Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "                            ";
        echo $context["inline"]->getdropdown("userTypeId", "single", (isset($context["title"]) ? $context["title"] : null), "", twig_array_merge(array(0 => array("userTypeId" => null, "userType" => "")), (isset($context["userTypes"]) ? $context["userTypes"] : null)), "userTypeId", "userType");
        echo "

                            ";
        // line 34
        ob_start();
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                            ";
        $context["values"] = array(0 => array("id" => 1, "value" => "Yes"), 1 => array("id" => 0, "value" => "No"));
        // line 36
        echo "                            ";
        echo $context["inline"]->getdropdown("retired", "single", (isset($context["title"]) ? $context["title"] : null), 0, (isset($context["values"]) ? $context["values"] : null), "id", "value");
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"users\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 44
        echo __("Name");
        echo "</th>
                                <th>";
        // line 45
        echo __("Homepage");
        echo "</th>
                                <th>";
        // line 46
        echo __("Email");
        echo "</th>
                                <th>";
        // line 47
        echo __("Library Quota");
        echo "</th>
                                <th>";
        // line 48
        echo __("Last Login");
        echo "</th>
                                <th>";
        // line 49
        echo __("Logged In?");
        echo "</th>
                                <th>";
        // line 50
        echo __("Retired?");
        echo "</th>
                                <th>";
        // line 51
        echo __("First Name");
        echo "</th>
                                <th>";
        // line 52
        echo __("Last Name");
        echo "</th>
                                <th>";
        // line 53
        echo __("Phone");
        echo "</th>
                                <th>";
        // line 54
        echo __("Ref 1");
        echo "</th>
                                <th>";
        // line 55
        echo __("Ref 2");
        echo "</th>
                                <th>";
        // line 56
        echo __("Ref 3");
        echo "</th>
                                <th>";
        // line 57
        echo __("Ref 4");
        echo "</th>
                                <th>";
        // line 58
        echo __("Ref 5");
        echo "</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 72
    public function block_javaScript($context, array $blocks = array())
    {
        // line 73
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#users\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data;
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "?preference=userGrid\",
                        dataType: 'json',
                        success: function (json) {
                            if (json.success)
                                data = JSON.parse(json.data.value);
                        }
                    });
                    return data;
                },
                stateSaveCallback: function (settings, data) {
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                        data: {
                            preference: [{
                                option: \"userGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                searchDelay: 3000,
                \"order\": [[0, \"asc\"]],
                \"filter\": false,
                ajax: {
                    url: \"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#users\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"userName\"},
                    {\"data\": \"homePage\"},
                    {\"data\": \"email\"},
                    {
                        \"name\": \"libraryQuota\",
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {\"data\": \"lastAccessed\", \"visible\": false},
                    {
                        \"data\": \"loggedIn\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"sortable\": false
                    },
                    {
                        \"data\": \"retired\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {\"data\": \"firstName\", \"visible\": false},
                    {\"data\": \"lastName\", \"visible\": false},
                    {\"data\": \"phone\", \"visible\": false},
                    {\"data\": \"ref1\", \"visible\": false},
                    {\"data\": \"ref2\", \"visible\": false},
                    {\"data\": \"ref3\", \"visible\": false},
                    {\"data\": \"ref4\", \"visible\": false},
                    {\"data\": \"ref5\", \"visible\": false},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing)
            dataTableAddButtons(table, \$('#users_wrapper').find('.col-sm-6').eq(1));
        });

        function userFormOpen() {
            // Bind to the add form submit
            \$(\".UserForm\").validate({
                submitHandler: function (form) {
                    // Grab and alter the value in the library quota field
                    var libraryQuotaField = \$(form).find(\"input[name=libraryQuota]\");
                    var libraryQuotaUnitsField = \$(form).find(\"select[name=libraryQuotaUnits]\");
                    var libraryQuota = libraryQuotaField.val();

                    if (libraryQuotaUnitsField.val() == 'mb') {
                        libraryQuota = libraryQuota * 1024;
                    } else if (libraryQuotaUnitsField.val() == 'gb') {
                        libraryQuota = libraryQuota * 1024 * 1024;
                    }

                    // Set the field
                    libraryQuotaField.prop('value', libraryQuota);

                    XiboFormSubmit(form);
                },
                errorElement: \"span\",
                highlight: function(element) {
                    \$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function(element) {
                    \$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                invalidHandler: function() {
                    // Remove the spinner
                    \$(this).closest(\".modal-dialog\").find(\".saving\").remove();
                }
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "user-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 108,  223 => 95,  208 => 83,  196 => 73,  193 => 72,  176 => 58,  172 => 57,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  136 => 48,  132 => 47,  128 => 46,  124 => 45,  120 => 44,  108 => 36,  105 => 35,  101 => 34,  95 => 32,  91 => 31,  85 => 29,  81 => 28,  74 => 24,  69 => 22,  66 => 21,  63 => 20,  51 => 16,  41 => 14,  39 => 13,  36 => 12,  33 => 11,  29 => 8,  27 => 9,  11 => 8,);
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
 * Copyright (C) 2015-16 Spring Signage Ltd
 * (user-page.twig)
 */
#}
{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block actionMenu %}
    <ul class=\"nav nav-pills pull-right\">
        {% if currentUser.isSuperAdmin() or currentUser.isGroupAdmin() %}
        <li class=\"btn btn-success btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"Add a new User\" %}\" href=\"{{ urlFor(\"user.add.form\") }}\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> {% trans \"Add User\" %}</a></li>
        {% endif %}
        <li class=\"btn btn-info btn-xs\"><a class=\"XiboFormButton btns\" title=\"{% trans \"View my authenticated applications\" %}\" href=\"{{ urlFor(\"user.applications\") }}\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> {% trans \"My Applications\" %}</a></li>
    </ul>
{% endblock %}

{% block pageContent %}
    <div class=\"widget\">
        <div class=\"widget-title\">{% trans \"Users\" %}</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"{{ random() }}\" data-grid-name=\"usersView\">
                <div class=\"XiboFilter well\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                            {% set title %}{% trans \"Name\" %}{% endset %}
                            {{ inline.input(\"userName\", title) }}

                            {% set title %}{% trans \"User Type\" %}{% endset %}
                            {{ inline.dropdown(\"userTypeId\", \"single\", title, \"\", [{userTypeId:null, userType:\"\"}]|merge(userTypes), \"userTypeId\", \"userType\") }}

                            {% set title %}{% trans \"Retired\" %}{% endset %}
                            {% set values = [{id: 1, value: \"Yes\"}, {id: 0, value: \"No\"}] %}
                            {{ inline.dropdown(\"retired\", \"single\", title, 0, values, \"id\", \"value\") }}
                        </form>
                    </div>
                </div>
                <div class=\"XiboData\">
                    <table id=\"users\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>{% trans \"Name\" %}</th>
                                <th>{% trans \"Homepage\" %}</th>
                                <th>{% trans \"Email\" %}</th>
                                <th>{% trans \"Library Quota\" %}</th>
                                <th>{% trans \"Last Login\" %}</th>
                                <th>{% trans \"Logged In?\" %}</th>
                                <th>{% trans \"Retired?\" %}</th>
                                <th>{% trans \"First Name\" %}</th>
                                <th>{% trans \"Last Name\" %}</th>
                                <th>{% trans \"Phone\" %}</th>
                                <th>{% trans \"Ref 1\" %}</th>
                                <th>{% trans \"Ref 2\" %}</th>
                                <th>{% trans \"Ref 3\" %}</th>
                                <th>{% trans \"Ref 4\" %}</th>
                                <th>{% trans \"Ref 5\" %}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScript %}
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            var table = \$(\"#users\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: function (settings, callback) {
                    var data;
                    \$.ajax({
                        type: \"GET\",
                        async: false,
                        url: \"{{ urlFor(\"user.pref\") }}?preference=userGrid\",
                        dataType: 'json',
                        success: function (json) {
                            if (json.success)
                                data = JSON.parse(json.data.value);
                        }
                    });
                    return data;
                },
                stateSaveCallback: function (settings, data) {
                    \$.ajax({
                        type: \"POST\",
                        url: \"{{ urlFor(\"user.pref\") }}\",
                        data: {
                            preference: [{
                                option: \"userGrid\",
                                value: JSON.stringify(data)
                            }]
                        }
                    });
                },
                searchDelay: 3000,
                \"order\": [[0, \"asc\"]],
                \"filter\": false,
                ajax: {
                    url: \"{{ urlFor(\"user.search\") }}\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#users\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"userName\"},
                    {\"data\": \"homePage\"},
                    {\"data\": \"email\"},
                    {
                        \"name\": \"libraryQuota\",
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {\"data\": \"lastAccessed\", \"visible\": false},
                    {
                        \"data\": \"loggedIn\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"sortable\": false
                    },
                    {
                        \"data\": \"retired\",
                        \"render\": dataTableTickCrossColumn
                    },
                    {\"data\": \"firstName\", \"visible\": false},
                    {\"data\": \"lastName\", \"visible\": false},
                    {\"data\": \"phone\", \"visible\": false},
                    {\"data\": \"ref1\", \"visible\": false},
                    {\"data\": \"ref2\", \"visible\": false},
                    {\"data\": \"ref3\", \"visible\": false},
                    {\"data\": \"ref4\", \"visible\": false},
                    {\"data\": \"ref5\", \"visible\": false},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing)
            dataTableAddButtons(table, \$('#users_wrapper').find('.col-sm-6').eq(1));
        });

        function userFormOpen() {
            // Bind to the add form submit
            \$(\".UserForm\").validate({
                submitHandler: function (form) {
                    // Grab and alter the value in the library quota field
                    var libraryQuotaField = \$(form).find(\"input[name=libraryQuota]\");
                    var libraryQuotaUnitsField = \$(form).find(\"select[name=libraryQuotaUnits]\");
                    var libraryQuota = libraryQuotaField.val();

                    if (libraryQuotaUnitsField.val() == 'mb') {
                        libraryQuota = libraryQuota * 1024;
                    } else if (libraryQuotaUnitsField.val() == 'gb') {
                        libraryQuota = libraryQuota * 1024 * 1024;
                    }

                    // Set the field
                    libraryQuotaField.prop('value', libraryQuota);

                    XiboFormSubmit(form);
                },
                errorElement: \"span\",
                highlight: function(element) {
                    \$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function(element) {
                    \$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                invalidHandler: function() {
                    // Remove the spinner
                    \$(this).closest(\".modal-dialog\").find(\".saving\").remove();
                }
            });
        }
    </script>
{% endblock %}", "user-page.twig", "C:\\xampp2\\htdocs\\xibo\\views\\user-page.twig");
    }
}
