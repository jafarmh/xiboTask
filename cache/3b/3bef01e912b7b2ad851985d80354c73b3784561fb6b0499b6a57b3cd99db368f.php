<?php

/* user-welcome.twig */
class __TwigTemplate_1bdb5f87ac3cb97df6b736b1ebd870a11744db4c3baeb3a9eac69b03bb3d7e9c extends Twig_Template
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
        echo "<style type=\"text/css\">
    .popover-double-width {
        max-width: 652px !important;
        background-color: #d9edf7 !important;
    }
    .popover-normal-width {
        max-width: 552px !important;
        min-width: 150px;
        background-color: #d9edf7 !important;
    }
    .padminus {
        padding-right: 5px !important;
    }
    .popover-content-large{
        font-size: large !important;
    }
    .tour .popover-title{
        background-color: #b2bfdc;
    }
</style>

<script type=\"text/javascript\">

    ";
        // line 24
        $context["appName"] = $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "getThemeConfig", array(0 => "app_name"), "method");
        // line 25
        echo "
    var hasSeenNewUserWizard = ";
        // line 26
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "userTypeId", array()) != 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "newUserWizard", array()), "html", null, true);
        } else {
            echo "-1";
        }
        echo ";

    \$(document).ready(function () {
        var tour, no_nav_template, start_template, next_template, final_template;
        final_template = \"<div class='popover popover-double-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default' data-role='end'>";
        // line 30
        echo __("Close");
        echo "</button>\";
        next_template = \"<div class='popover popover-normal-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default btn-success pull-right' data-role='next'>";
        // line 31
        echo __("Next");
        echo "</button>\";
        no_nav_template = \"<div class='popover popover-normal-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div>\";
        start_template = \"<div class='popover popover-double-width tour'><div class='arrow'></div><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default btn-success' data-role='next'>Get started with the basics</button><button class='btn btn-default' data-role='end'>";
        // line 33
        echo __("Skip this tutorial");
        echo "</button>\";

        tour = new Tour({
            debug: false,
            onEnd: function () {
                hasSeenNewUserWizard = 1;

                \$.ajax({
                    url: '/user/welcome',
                    type: 'PUT'
                });
            },
            steps: [
                {
                    orphan: true,
                    placement: \"bottom\",
                    title: \"";
        // line 49
        /* xgettext:no-php-format */        echo strtr(__("Welcome to the %appName% CMS!"), array("%appName%" => (isset($context["appName"]) ? $context["appName"] : null), ));
        echo "\",
                    content: \"";
        // line 50
        echo __("We'd like to take you on a short tour of the CMS to get you up and running quickly. If you already know your way around, you can skip the tutorial");
        echo "\",
                    template: start_template
                }, {
                    element: \".sidebar-main:eq(0)\",
                    placement: \"right\",
                    title: \"\",
                    content: \"";
        // line 56
        echo __("The Dashboard menu allows for navigation to all key areas.");
        echo "\",
                    template: next_template
                }, {
                    element: \".sidebar-list:eq(3)\",
                    placement: \"right\",
                    title: \"\",
                    content: \"";
        // line 62
        echo __("Start by clicking on <b>Layouts</b> from your Dashboard.");
        echo "\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    path: \"/layout/view\",
                    orphan: true,
                    placement: \"top\",
                    title: \"\",
                    content: \"";
        // line 70
        echo __("This is your Layout menu and from here is where you can access all your saved Layouts.");
        echo "\",
                    template: next_template
                }, {
                    element: \".btn-success a\",
                    placement: \"left\",
                    title: \"\",
                    content: \"";
        // line 76
        echo __("Create a new Layout by clicking on <b>Add Layout</b>");
        echo "\",
                    reflex: true,
                    delay: 1000,
                    template: no_nav_template
                }, {
                    element: \"#name\",
                    placement: \"bottom\",
                    title: \"\",
                    content: \"";
        // line 84
        echo __("Name your Layout so you can easily identify it in the Layout menu.");
        echo "\",
                    reflex: true,
                    delay: 1000,
                    template: no_nav_template
                }, {
                    element: \".save-button\",
                    placement: \"top\",
                    title: \"\",
                    content: \"";
        // line 92
        echo __("Press  <b>Save</b>.");
        echo "\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    orphan: true,
                    placement: \"top\",
                    title: \"\",
                    content: \"";
        // line 99
        echo __("This is the Layout designer screen and by default, your Layout has one empty Region added, think of it as a placeholder for your content.");
        echo "\",
                    onShown: function (tour) {
                        console.log(\$(\".form-error\").length === 1);
                        if (\$(\".form-error\").length === 1) {
                            tour.prev();
                        }
                    },
                    delay: 1000,
                    template: next_template
                }, ";
        // line 108
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getOptionValue", array(0 => "lockPosition", 1 => "false"), "method") == "false")) {
            echo "{
                    title: \"\",
                    content: \"";
            // line 110
            echo __("Grab the Region handle to click and drag to resize");
            echo "\",
                    element: \".ui-icon-gripsmall-diagonal-se:eq(0)\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"";
            // line 117
            echo __("Click anywhere inside the Region click and drag to position on your Layout");
            echo "\",
                    element: \".preview:eq(0)\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"";
            // line 124
            echo __("When you are happy with your positioning click on Save Region Positions. You'll need to click Save Region Positions every time you move Regions around otherwise your change will be lost!");
            echo "\",
                    element: \"#layout-save-all\",
                    placement: \"bottom\",
                    reflex: true,
                    template: no_nav_template
                }, ";
        }
        // line 129
        echo "{
                    title: \"\",
                    content: \"";
        // line 131
        echo __("You now have an empty Region on a black background on your Layout, so lets add some content!");
        echo "\",
                    element: \".preview:eq(0)\",
                    placement: \"top\",
                    onNext: function (tour) {
                        \$(\".regionInfo\").show();
                        \$(\".regionInfo .dropdown-menu\").show();
                    },
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 141
        echo __("Use the Region menu to select <b>Edit Timeline</b>");
        echo "\",
                    element: \".regionInfo li:eq(0) a\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"";
        // line 148
        echo __("This is your Region Timeline, which is empty at the moment. The menu to the left is your Widget Toolbox and displays a variety of media types which can be added to your Region Timeline.");
        echo "\",
                    orphan: true,
                    placement: \"top\",
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 154
        echo __("Let's add some <b>Text</b> to the Region Timeline");
        echo "\",
                    element: \"li[data-widget-type=text]\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"";
        // line 161
        echo __("This is the text editor where you can add and format your text. The thin red line is showing your Region borders so ensure that when you are editing your text remains visible within these guidelines.");
        echo "\",
                    orphan: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 166
        echo __("Enter some text, apply some formatting such as font style and size and when you are happy click <b>Save</b>");
        echo "\",
                    element: \".modal-dialog .save-button\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"";
        // line 173
        echo __("Your Region Timeline will now update and show that one item has been added to the playlist, click <b>Close</b>.");
        echo "\",
                    element: \"button#dialog_btn_2\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template,
                    delay: 1000
                }, {
                    title: \"\",
                    content: \"";
        // line 181
        echo __("Your Layout will now show your text assigned to this Region.");
        echo "\",
                    element: \"#layout\",
                    placement: \"right\",
                    template: next_template
                }, {
                    title: \"\",
                    content: \"";
        // line 187
        echo __("Want to know how your Layout will look on your screens? <br> Switch to the <b>Actions tab</b>");
        echo "\",
                    element: \"#action-tab\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"";
        // line 194
        echo __("By clicking on <b>Preview Layout</b> your Layout will open in a new window so you can see exactly how it will play!");
        echo "\",
                    element: \"#tab2primary .btn-success\",
                    placement: \"bottom\",
                    reflex: true,
                    template: no_nav_template,
                    delay: 1000
                }, {
                    title: \"Success!\",
                    content: \"";
        // line 202
        echo __("You have mastered the basics to create a Layout! <br> Ready for more? Jump into the user manual for more tips, help and guides. ");
        echo "\",
                    orphan: true,
                    template: final_template
                }
            ]
        });

        if (hasSeenNewUserWizard === 0) {
            tour.init();
            tour.restart();
        }

        \$(\"#reshowWelcomeMenuItem\").on(\"click\", function() {
            // Set the new user wizard flag to 0
            \$.ajax({
                url: '/user/welcome',
                type: 'POST'
            });

            // Reshow the user welcome wizard
            tour.init();
            tour.restart();
        });
    });

</script>";
    }

    public function getTemplateName()
    {
        return "user-welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 202,  302 => 194,  292 => 187,  283 => 181,  272 => 173,  262 => 166,  254 => 161,  244 => 154,  235 => 148,  225 => 141,  212 => 131,  208 => 129,  199 => 124,  189 => 117,  179 => 110,  174 => 108,  162 => 99,  152 => 92,  141 => 84,  130 => 76,  121 => 70,  110 => 62,  101 => 56,  92 => 50,  88 => 49,  69 => 33,  64 => 31,  60 => 30,  49 => 26,  46 => 25,  44 => 24,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
    .popover-double-width {
        max-width: 652px !important;
        background-color: #d9edf7 !important;
    }
    .popover-normal-width {
        max-width: 552px !important;
        min-width: 150px;
        background-color: #d9edf7 !important;
    }
    .padminus {
        padding-right: 5px !important;
    }
    .popover-content-large{
        font-size: large !important;
    }
    .tour .popover-title{
        background-color: #b2bfdc;
    }
</style>

<script type=\"text/javascript\">

    {% set appName = theme.getThemeConfig(\"app_name\") %}

    var hasSeenNewUserWizard = {% if currentUser.userTypeId != 0 %}{{currentUser.newUserWizard}}{% else %}-1{% endif %};

    \$(document).ready(function () {
        var tour, no_nav_template, start_template, next_template, final_template;
        final_template = \"<div class='popover popover-double-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default' data-role='end'>{% trans \"Close\" %}</button>\";
        next_template = \"<div class='popover popover-normal-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default btn-success pull-right' data-role='next'>{% trans \"Next\" %}</button>\";
        no_nav_template = \"<div class='popover popover-normal-width tour'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div>\";
        start_template = \"<div class='popover popover-double-width tour'><div class='arrow'></div><h3 class='popover-title'></h3><div class='popover-content popover-content-large'></div><div class='popover-navigation'><button class='btn btn-default btn-success' data-role='next'>Get started with the basics</button><button class='btn btn-default' data-role='end'>{% trans \"Skip this tutorial\" %}</button>\";

        tour = new Tour({
            debug: false,
            onEnd: function () {
                hasSeenNewUserWizard = 1;

                \$.ajax({
                    url: '/user/welcome',
                    type: 'PUT'
                });
            },
            steps: [
                {
                    orphan: true,
                    placement: \"bottom\",
                    title: \"{% trans %}Welcome to the {{ appName }} CMS!{% endtrans %}\",
                    content: \"{% trans \"We'd like to take you on a short tour of the CMS to get you up and running quickly. If you already know your way around, you can skip the tutorial\" %}\",
                    template: start_template
                }, {
                    element: \".sidebar-main:eq(0)\",
                    placement: \"right\",
                    title: \"\",
                    content: \"{% trans \"The Dashboard menu allows for navigation to all key areas.\" %}\",
                    template: next_template
                }, {
                    element: \".sidebar-list:eq(3)\",
                    placement: \"right\",
                    title: \"\",
                    content: \"{% trans \"Start by clicking on <b>Layouts</b> from your Dashboard.\" %}\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    path: \"/layout/view\",
                    orphan: true,
                    placement: \"top\",
                    title: \"\",
                    content: \"{% trans \"This is your Layout menu and from here is where you can access all your saved Layouts.\" %}\",
                    template: next_template
                }, {
                    element: \".btn-success a\",
                    placement: \"left\",
                    title: \"\",
                    content: \"{% trans \"Create a new Layout by clicking on <b>Add Layout</b>\" %}\",
                    reflex: true,
                    delay: 1000,
                    template: no_nav_template
                }, {
                    element: \"#name\",
                    placement: \"bottom\",
                    title: \"\",
                    content: \"{% trans \"Name your Layout so you can easily identify it in the Layout menu.\" %}\",
                    reflex: true,
                    delay: 1000,
                    template: no_nav_template
                }, {
                    element: \".save-button\",
                    placement: \"top\",
                    title: \"\",
                    content: \"{% trans \"Press  <b>Save</b>.\" %}\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    orphan: true,
                    placement: \"top\",
                    title: \"\",
                    content: \"{% trans \"This is the Layout designer screen and by default, your Layout has one empty Region added, think of it as a placeholder for your content.\" %}\",
                    onShown: function (tour) {
                        console.log(\$(\".form-error\").length === 1);
                        if (\$(\".form-error\").length === 1) {
                            tour.prev();
                        }
                    },
                    delay: 1000,
                    template: next_template
                }, {% if currentUser.getOptionValue(\"lockPosition\", \"false\") == \"false\" %}{
                    title: \"\",
                    content: \"{% trans \"Grab the Region handle to click and drag to resize\" %}\",
                    element: \".ui-icon-gripsmall-diagonal-se:eq(0)\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Click anywhere inside the Region click and drag to position on your Layout\" %}\",
                    element: \".preview:eq(0)\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"{% trans \"When you are happy with your positioning click on Save Region Positions. You'll need to click Save Region Positions every time you move Regions around otherwise your change will be lost!\" %}\",
                    element: \"#layout-save-all\",
                    placement: \"bottom\",
                    reflex: true,
                    template: no_nav_template
                }, {% endif %}{
                    title: \"\",
                    content: \"{% trans \"You now have an empty Region on a black background on your Layout, so lets add some content!\" %}\",
                    element: \".preview:eq(0)\",
                    placement: \"top\",
                    onNext: function (tour) {
                        \$(\".regionInfo\").show();
                        \$(\".regionInfo .dropdown-menu\").show();
                    },
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Use the Region menu to select <b>Edit Timeline</b>\" %}\",
                    element: \".regionInfo li:eq(0) a\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"{% trans \"This is your Region Timeline, which is empty at the moment. The menu to the left is your Widget Toolbox and displays a variety of media types which can be added to your Region Timeline.\" %}\",
                    orphan: true,
                    placement: \"top\",
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Let's add some <b>Text</b> to the Region Timeline\" %}\",
                    element: \"li[data-widget-type=text]\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"{% trans \"This is the text editor where you can add and format your text. The thin red line is showing your Region borders so ensure that when you are editing your text remains visible within these guidelines.\" %}\",
                    orphan: true,
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Enter some text, apply some formatting such as font style and size and when you are happy click <b>Save</b>\" %}\",
                    element: \".modal-dialog .save-button\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Your Region Timeline will now update and show that one item has been added to the playlist, click <b>Close</b>.\" %}\",
                    element: \"button#dialog_btn_2\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template,
                    delay: 1000
                }, {
                    title: \"\",
                    content: \"{% trans \"Your Layout will now show your text assigned to this Region.\" %}\",
                    element: \"#layout\",
                    placement: \"right\",
                    template: next_template
                }, {
                    title: \"\",
                    content: \"{% trans \"Want to know how your Layout will look on your screens? <br> Switch to the <b>Actions tab</b>\" %}\",
                    element: \"#action-tab\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template
                }, {
                    title: \"\",
                    content: \"{% trans \"By clicking on <b>Preview Layout</b> your Layout will open in a new window so you can see exactly how it will play!\" %}\",
                    element: \"#tab2primary .btn-success\",
                    placement: \"bottom\",
                    reflex: true,
                    template: no_nav_template,
                    delay: 1000
                }, {
                    title: \"Success!\",
                    content: \"{% trans \"You have mastered the basics to create a Layout! <br> Ready for more? Jump into the user manual for more tips, help and guides. \" %}\",
                    orphan: true,
                    template: final_template
                }
            ]
        });

        if (hasSeenNewUserWizard === 0) {
            tour.init();
            tour.restart();
        }

        \$(\"#reshowWelcomeMenuItem\").on(\"click\", function() {
            // Set the new user wizard flag to 0
            \$.ajax({
                url: '/user/welcome',
                type: 'POST'
            });

            // Reshow the user welcome wizard
            tour.init();
            tour.restart();
        });
    });

</script>", "user-welcome.twig", "C:\\xampp2\\htdocs\\xibo\\views\\user-welcome.twig");
    }
}
