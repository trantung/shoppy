<?php

/* extension/soconfig/options_stores.twig */
class __TwigTemplate_4cdd2dc8b0e89a275013a77cc497328fa800646fdd1cf7a2c02997d4b72cc82c extends Twig_Template
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
        // line 2
        $context["fonts"] = array("standard" => "Standard", "google" => "Google Fonts");
        // line 6
        echo "
";
        // line 7
        $context["columns"] = array("1" => "1 columns", "2" => "2 columns", "3" => "3 columns", "4" => "4 columns", "5" => "5 columns", "6" => "6 columns");
        // line 15
        echo "
";
        // line 16
        $context["secondimg"] = array("1" => "One image", "2" => "Second images");
        // line 20
        echo "
";
        // line 21
        $context["refine_search"] = array("0" => "With images", "1" => "Text only", "2" => "Disable");
        // line 26
        echo "
";
        // line 27
        $context["fonts_normal"] = array("inherit" => "No Use", "Arial, Helvetica, sans-serif" => "Arial", "Verdana, Geneva, sans-serif" => "Verdana", "Georgia,Times New Roman, Times, serif" => "Georgia", "Impact, Arial, Helvetica, sans-serif" => "Impact", "Tahoma, Geneva, sans-serif" => "Tahoma", "Trebuchet MS, Arial, Helvetica, sans-serif" => "Trebuchet MS", "Arial Black, Gadget, sans-serif" => "Arial Black", "Times, Times New Roman, serif" => "Times", "Palatino Linotype, Book Antiqua, Palatino, serif" => "Palatino Linotype", "Lucida Sans Unicode, Lucida Grande\", sans-serif" => "Lucida Sans Unicode", "MS Serif, New York, serif" => "MS Serif", "Comic Sans MS, cursive" => "Comic Sans MS", "Courier New, Courier, monospace" => "Courier New", "Lucida Console, Monaco, monospace" => "Lucida Console");
        // line 44
        echo "
";
        // line 45
        $context["devices"] = array("lg" => "<i class=\"fa fa-desktop\"></i> Desktops", "md" => "<i class=\"fa fa-tablet\"></i> Tablet Landscape", "sm" => "<i class=\"fa fa-tablet\"></i> Tablet Portrait", "xs" => "<i class=\"fa fa-mobile\"></i> Phones");
        // line 51
        echo "
";
        // line 52
        $context["Scssformat"] = array("Expanded" => "Expanded", "Nested" => "Nested (default)", "Compressed" => "Compressed", "Compact" => "Compact", "Crunched" => "Crunched");
        // line 59
        echo "
";
        // line 60
        $context["layoutStyle"] = array("full" => "Full Layout", "boxed" => "Boxed", "iframed" => "Iframed", "rounded" => "Rounded");
        // line 66
        echo "
";
        // line 67
        $context["content_bg_mode"] = array("repeat" => "Repeat", "no-repeat" => "No-Repeat");
        // line 71
        echo "
";
        // line 72
        $context["content_attachment"] = array("scroll" => "Scroll", "fixed" => "Fixed");
        // line 76
        echo "
";
        // line 77
        $context["related_position"] = array("vertical" => "Vertical", "horizontal" => "Horizontal");
        // line 81
        echo "
";
        // line 82
        $context["thumbnailPos"] = array("bottom" => "Bottom", "left" => "Left");
        // line 86
        echo "
";
        // line 87
        $context["zoommode"] = array("window" => "Basic Zoom", "inner" => "Inner Zoom", "lens" => "Lens Zoom");
        // line 92
        echo "
";
        // line 93
        $context["gallerysize"] = array("small" => "Image Small", "medium" => "Image Medium", "large" => "Image Large");
        // line 98
        echo "
";
        // line 99
        $context["tabs_position"] = array("1" => "Bottom vertical", "2" => "Bottom horizontal");
        // line 103
        echo "
";
        // line 104
        $context["toppanel_type"] = array("1" => "Show Header Center", "2" => "Show Header Bottom", "3" => "Show All");
        // line 109
        echo "
";
        // line 110
        $context["catalog_mode"] = array("0" => "Grid", "1" => "List");
        // line 114
        echo "
";
        // line 115
        $context["radio_style"] = array("0" => "Default", "1" => "Button");
        // line 119
        echo "
";
        // line 120
        $context["type_banner"] = array("1" => "Hover effect 1", "2" => "Hover effect 2", "3" => "Hover effect 3", "4" => "Hover effect 4", "5" => "Hover effect 5", "6" => "Hover effect 6", "7" => "Hover effect 7", "8" => "Hover effect 8", "9" => "Hover effect 9", "10" => "Hover effect 10", "11" => "Hover effect 11", "12" => "Hover effect 12");
        // line 134
        echo "
";
        // line 135
        $context["preloader_animation"] = array("rotate-plane" => "Rotate Plane", "double-loop" => "Double Bounce", "audio-wave" => "Audio Wave", "cube-move" => "Cube Move", "circle-bounce" => "Circle Bounce", "circle-bounce2" => "Circle Bounce 2", "cube-grid" => "Cube Grid", "folding-cube" => "Cube Folding");
        // line 145
        echo "
";
        // line 146
        $context["pattern_array"] = array("0" => "None");
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["pattern_id"]) {
            // line 148
            echo "\t";
            if (!twig_in_filter($context["pattern_id"], (isset($context["pattern_array"]) ? $context["pattern_array"] : null))) {
                // line 149
                echo "          ";
                $context["pattern_array"] = twig_array_merge((isset($context["pattern_array"]) ? $context["pattern_array"] : null), array(0 => $context["pattern_id"]));
                // line 150
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pattern_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
<div class=\"sidebar \" data-sticky_column>
<ul class=\"nav nav-tabs main_tabs_vertical\" >
    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 156
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_general"), "method");
        echo " </a></li>
    <li><a href=\"#tab-layout\" data-toggle=\"tab\">";
        // line 157
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_layout"), "method");
        echo " </a></li>
    <li><a href=\"#tab-products\" data-toggle=\"tab\">";
        // line 158
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_products"), "method");
        echo " </a></li>
    <li><a href=\"#tab-fonts\" data-toggle=\"tab\">";
        // line 159
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_fonts"), "method");
        echo " </a></li>
    <li><a href=\"#tab-slide\" data-toggle=\"tab\">";
        // line 160
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_social"), "method");
        echo " </a></li>
\t<li><a href=\"#tab-advanced\" data-toggle=\"tab\">";
        // line 161
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_advanced"), "method");
        echo " </a></li>
</ul>
</div>

<div class=\"tab-content main_content_vertical col-sm-10\" data-sticky_column>
    <!-------------------------------------Tab General---------------------------------->
    <div class=\"tab-pane active\" id=\"tab-general\">
        <ul class=\"nav nav-tabs  main_tabs_2 \">
            <li class=\"active\"><a href=\"#tab-general-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 169
        echo (isset($context["general_tab_general"]) ? $context["general_tab_general"] : null);
        echo " </a></li>
            <li><a href=\"#tab-general-layout2\" data-toggle=\"tab\">";
        // line 170
        echo (isset($context["general_tab_header"]) ? $context["general_tab_header"] : null);
        echo " </a></li>
            <li><a href=\"#tab-general-layout3\" data-toggle=\"tab\">";
        // line 171
        echo (isset($context["general_tab_footer"]) ? $context["general_tab_footer"] : null);
        echo "  </a></li>
\t\t\t<li><a href=\"#tab-general-layout4\" data-toggle=\"tab\">Banner Effect</a></li>
        </ul>

        <div class=\"tab-content \">
\t\t\t";
        // line 177
        echo "            <div class=\"tab-pane active\" id=\"tab-general-layout1\">
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Select Layouts</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__layouttype\" class=\"form-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t";
        // line 186
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_typelayout", array(0 => "soconfig_general_store", 1 => "typelayout", 2 => (isset($context["typelayouts"]) ? $context["typelayouts"] : null), 3 => "6"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"
\t\t\t\t\t\t\t\t\t<p class='help-hint-text'>
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-bullhorn' ></i> 
\t\t\t\t\t\t\t\t\t\t<span>Create New Color</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\tCreate New Color
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 206
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_advanced_store", 1 => "name_color", 2 => "Name Color"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<i class=\"input-group-addon fa fa-paint-brush\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 211
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_colors", array(0 => "soconfig_advanced_store", 1 => "theme_color", 2 => "Select color"), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t<button onclick=\"buttonApplyColor();\" class=\"btn btn-primary\" type=\"button\"  ";
        // line 215
        if ((isset($context["scsscompile"]) ? $context["scsscompile"] : null)) {
            echo " ";
            echo "disabled='disabled'";
            echo " ";
        }
        echo "><i class=\"fa fa-compress\" aria-hidden=\"true\"></i> Compile CSS</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t ";
        // line 219
        if (((isset($context["scsscompile"]) ? $context["scsscompile"] : null) || (isset($context["compileMutiColor"]) ? $context["compileMutiColor"] : null))) {
            echo " 
\t\t\t\t\t\t\t\t<div class=\"text-warning\" style=\"margin-top:20px;\">
\t\t\t\t\t\t\t\t<p><i class=\"fa fa-exclamation-triangle\" style=\"font-size:18px;\"></i> Compile css not working then: </p>
\t\t\t\t\t\t\t\t1.Tab Advanced → SCSS Compile = On .</br>
\t\t\t\t\t\t\t\t2.Tab Advanced → User Developer Compile Muti Color = On .
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 225
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__themecolor\" class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"
\t\t\t\t\t\t\t\t\t<p class='help-hint-text'>
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-bullhorn' ></i> 
\t\t\t\t\t\t\t\t\t\t<span>Create New Color</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\tSelect Themes Color
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\" id=\"select_color\">
\t\t\t\t\t\t\t\t";
        // line 246
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_general_store", 1 => "themecolor", 2 => (isset($context["allThemeColor"]) ? $context["allThemeColor"] : null), 3 => "width30"), "method");
        echo " 
\t\t\t\t\t\t\t\t";
        // line 247
        if ($this->getAttribute((isset($context["allThemeColor"]) ? $context["allThemeColor"] : null), "none", array(), "array")) {
            // line 248
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-warning\" style=\"margin-top:20px;\">
\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-exclamation-triangle\" style=\"font-size:24px;\"></i> Can not find css color file. Please recreate color new </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 251
        echo "\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Sticky Menu on Top </h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"logo_position\">
\t\t\t\t\t\t\t\tStatus:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 266
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "toppanel_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-toppanel_status\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\tSelect Block on header:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t";
        // line 274
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "toppanel_type", 2 => (isset($context["toppanel_type"]) ? $context["toppanel_type"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"so-panel\">\t
\t\t\t\t\t<h3 class=\"panel-title\">Top Bar</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Telephone No</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t";
        // line 288
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "phone_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-phone_status\">
\t\t\t\t\t\t\t\t";
        // line 291
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langHori", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_general_store", 2 => "contact_number", 3 => 50), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Welcome Message</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t";
        // line 298
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "welcome_message_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-welcome_message_status\">
\t\t\t\t\t\t\t\t";
        // line 301
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langHori", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_general_store", 2 => "welcome_message", 3 => 50), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Checkout Link</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 308
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "checkout_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group last\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Language/Currency Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 315
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "lang_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">General</h3>
\t\t\t\t\t<div class=\"panel-container\">\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Preloader </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 327
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "preloader", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-preloader\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Select a preloader animation from the list\">
\t\t\t\t\t\t\t\t\tPreloader Animation:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 337
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "preloader_animation", 2 => (isset($context["preloader_animation"]) ? $context["preloader_animation"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >";
        // line 343
        echo (isset($context["general_back_top"]) ? $context["general_back_top"] : null);
        echo "  </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 345
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "backtop", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" > Status Payment  </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 353
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "imgpayment_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-imgpayment_status\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Edit content here Footer Custom Block.\">
\t\t\t\t\t\t\t\t\tImage (Payment block):
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 363
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_general_store", 1 => "imgpayment"), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">  ";
        // line 370
        echo (isset($context["general_copyright"]) ? $context["general_copyright"] : null);
        echo "   </label>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t";
        // line 372
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_general_store", 1 => "copyright", 2 => "Footer copyright content"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
                </div>
\t\t\t\t
            </div>
           

\t\t\t";
        // line 383
        echo "            <div id=\"tab-general-layout2\" class=\"tab-pane\">
\t\t\t\t<div id=\"tab-general__headertype\" class=\"tab-pane active\">
\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Type of Header</h3>
\t\t\t\t\t\t<span class=\"help-block\">If you need content from other header like phone number you need to set it in custom Theme Control Panel.</span>
\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t<span>You can set these headers for any skin you want</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 392
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_typeheader", array(0 => "soconfig_general_store", 1 => "typeheader", 2 => (isset($context["typelayouts"]) ? $context["typelayouts"] : null)), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
            </div>

\t\t\t
\t\t\t";
        // line 401
        echo "            <div id=\"tab-general-layout3\" class=\"tab-pane\">
\t\t\t\t<div id=\"tab-general__footertype\">
\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Type of Footer</h3>
\t\t\t\t\t\t<span class=\"help-block\">If you need content from other footer like contact us you need to set it in custom modules.</span>
\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t<span>You can set these footer for any skin you want</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 410
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_typeheader", array(0 => "soconfig_general_store", 1 => "typefooter", 2 => (isset($context["typelayouts"]) ? $context["typelayouts"] : null)), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
            </div>
            
\t\t\t";
        // line 417
        echo "            <div id=\"tab-general-layout4\" class=\"tab-pane\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__bannereffect\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">Hover over image below to see effect.</h3>
\t\t\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t\t\t<span>Hover over image below to see effect.</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
        // line 427
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_typebanner", array(0 => "soconfig_general_store", 1 => "type_banner", 2 => (isset($context["type_banner"]) ? $context["type_banner"] : null), 3 => 3), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
            </div>

        </div>
    </div>
    <!-------------------------------------end tab General---------------------------------->

    <!-------------------------------------Tab Layout---------------------------------------->
    <div class=\"tab-pane\" id=\"tab-layout\">
\t\t<!--subtabs: General -->
\t\t<div class=\"tab-pane active\" id=\"tab-colors-layout1\">
\t\t\t<div class=\"so-panel\">
\t\t\t\t<h3 class=\"panel-title\">Theme Layout Settings</h3>
\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"With the boxed layout you can choose additional options such as custom background images, patterns and solid colors\">Layout Style</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-toggle block-group \" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 456
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_layout_store", 1 => "layoutstyle", 2 => (isset($context["layoutStyle"]) ? $context["layoutStyle"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t <span data-toggle=\"tooltip\" title=\"Set background color for all content.\">Body Background Color:</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t";
        // line 467
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_colors", array(0 => "soconfig_layout_store", 1 => "theme_bgcolor", 2 => "Background color"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Overlay pattern</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"form-group no-margin\">
\t\t\t\t\t\t\t\t";
        // line 475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 476
            echo "\t\t\t\t\t\t\t\t\t<div class=\"img-patt\"><small>";
            echo $context["i"];
            echo " </small><img src=\"";
            echo (isset($context["dir_soconfig"]) ? $context["dir_soconfig"] : null);
            echo "patterns/";
            echo $context["i"];
            echo ".png\" alt=\"pattern ";
            echo $context["i"];
            echo " \"></div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 479
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_layout_store", 1 => "pattern", 2 => (isset($context["pattern_array"]) ? $context["pattern_array"] : null), 3 => "width30"), "method");
        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<small class=\"help-block\">Select a pattern number if you want to use one.</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set background image for all site.\">Background Image:</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 492
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_layout_store", 1 => "contentbg"), "method");
        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t <span data-toggle=\"tooltip\" title=\"Set background image display mode\">
\t\t\t\t\t\t\t\t Background Image display mode
\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 506
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_layout_store", 1 => "content_bg_mode", 2 => (isset($context["content_bg_mode"]) ? $context["content_bg_mode"] : null)), "method");
        echo " 

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\tBackground Image display Attachment
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 516
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_layout_store", 1 => "content_attachment", 2 => (isset($context["content_attachment"]) ? $context["content_attachment"] : null)), "method");
        echo " 

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<!--subtabs: General -->
    </div>
    <!-------------------------------------end tab Colors,backgrounds,fonts-->

    <!-------------------------------------Tab Products sliders, products listings-->
    <div class=\"tab-pane\" id=\"tab-products\">

        <ul class=\"nav nav-tabs  main_tabs_2\">
            <li class=\"active\"><a href=\"#tab-products-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 534
        echo (isset($context["pages_pro_listings"]) ? $context["pages_pro_listings"] : null);
        echo " </a></li>
            <li><a href=\"#tab-products-layout2\" data-toggle=\"tab\">";
        // line 535
        echo (isset($context["pages_pro_detail"]) ? $context["pages_pro_detail"] : null);
        echo " </a></li>
        </ul>
        <div class=\"tab-content\">
            <!--subtabs: Listings -->
            <div class=\"tab-pane active wrapper-tabcategory\" id=\"tab-products-layout1\">
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Refine Search</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\t";
        // line 546
        echo (isset($context["product_catalog_refine"]) ? $context["product_catalog_refine"] : null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 549
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_catalog_refine", 2 => (isset($context["refine_search"]) ? $context["refine_search"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_catalog_refine_col\">";
        // line 553
        echo (isset($context["product_catalog_refine_col"]) ? $context["product_catalog_refine_col"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 555
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_devices", array(0 => "soconfig_pages_store", 1 => "catalog_refine_devices_", 2 => (isset($context["devices"]) ? $context["devices"] : null), 3 => (isset($context["columns"]) ? $context["columns"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Category Page</h3>
\t\t\t\t\t<div class=\"panel-container\">

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 566
        echo (isset($context["product_catalog_image"]) ? $context["product_catalog_image"] : null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 568
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "lstimg_cate_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_catalog_mode\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Create your listings into simple catalog.\">";
        // line 574
        echo (isset($context["product_catalog_mode"]) ? $context["product_catalog_mode"] : null);
        echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 577
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_catalog_mode", 2 => (isset($context["catalog_mode"]) ? $context["catalog_mode"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-listing_quick_type\">";
        // line 582
        echo (isset($context["product_catalog_column"]) ? $context["product_catalog_column"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 584
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_devices", array(0 => "soconfig_pages_store", 1 => "product_catalog_column_", 2 => (isset($context["devices"]) ? $context["devices"] : null), 3 => (isset($context["columns"]) ? $context["columns"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-listing_quick_type\">Product grid number per row of special, search, manufacturer</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 591
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_devices", array(0 => "soconfig_pages_store", 1 => "other_catalog_column_", 2 => (isset($context["devices"]) ? $context["devices"] : null), 3 => (isset($context["columns"]) ? $context["columns"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Product Item</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">Show \"New\" label:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t";
        // line 605
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "new_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-days\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Number of days from the date \"Date Available\" to today date for a product.\">
\t\t\t\t\t\t\t\tPeriod of holding \"New\" label:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 617
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_pages_store", 1 => "days", 2 => "Period of holding New label:"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set display or not 'QUICK VIEW' function on products in sliders.\">Show \"QUICK VIEW\" function:</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 626
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "quick_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set display or not 'Discount' label.\">Show \"Discount\" label:</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 636
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "discount_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set display or not countdown of Special Offer in product sliders.\">Show countdown of Special Offer:</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 645
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "countdown_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">Slide to 2nd image automatically</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 652
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "secondimg", 2 => (isset($context["secondimg"]) ? $context["secondimg"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t   <div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">Show rating</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 658
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "rating_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

         
            <!--subtabs: product page -->
            <div id=\"tab-products-layout2\" class=\"tab-pane\">
                <div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Options Styles</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-thumbnails_position\">Option Checkbox and Radio Style:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 677
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "radio_style", 2 => (isset($context["radio_style"]) ? $context["radio_style"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Product Page</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cloudzoom_mode\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Choose Size of  Gallery on product page.\">Product Gallery Size</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 691
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_gallerysize", 2 => (isset($context["gallerysize"]) ? $context["gallerysize"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-thumbnails_position\">Position of block with thumbnails previews:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 697
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "thumbnails_position", 2 => (isset($context["thumbnailPos"]) ? $context["thumbnailPos"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cloudzoom_mode\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Choose position of cloudzoom image preview on product page.\">Enable Product Zoom</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 705
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_enablezoom", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"tab-field-product_enablezoom\">
\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tabs_position\">Product Zoom Mode</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 713
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_zoommode", 2 => (isset($context["zoommode"]) ? $context["zoommode"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Lens Zoom Size is viewport size to move and enlarge the image. Please enter number style and not negative number\">Lens Zoom Size</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t";
        // line 721
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_pages_store", 1 => "product_zoomlenssize", 2 => ""), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tabs_position\">Tabs block:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 729
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "tabs_position", 2 => (isset($context["tabs_position"]) ? $context["tabs_position"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Social Share</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-meta-keyword\">Show Custom</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 741
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_page_button", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-product_page_button\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Custom block</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 748
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "product_socialshare"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Related products</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-related\">Show Related</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 759
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "related_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"tab-field-related_status\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tabs_position\">Orientation Related :</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 767
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "related_position", 2 => (isset($context["related_position"]) ? $context["related_position"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-listing_quick_type\">Related product number per row <p class=\"help-block\">(use orientation related = Horizontal)</p></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 773
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_devices", array(0 => "soconfig_pages_store", 1 => "product_related_column_", 2 => (isset($context["devices"]) ? $context["devices"] : null), 3 => (isset($context["columns"]) ? $context["columns"] : null)), "method");
        echo " 

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t\t
\t\t\t\t\t
\t\t\t\t
            </div>
\t\t\t
        </div>

    </div>
    <!------------------------------------end tab Pages-->

    <!-------------------------------------Tab Fonts-->
    <div class=\"tab-pane\" id=\"tab-fonts\">
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Fonts<span class=\"help-block\">If you want to speed up your site use one of the common fonts instead of the fonts from Google.</span></h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 797
        echo (isset($context["fonts_body"]) ? $context["fonts_body"] : null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 800
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_onOffFont", array(0 => "soconfig_fonts_store", 1 => "body_status"), "method");
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 802
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_fonts_store", 1 => "normal_body", 2 => (isset($context["fonts_normal"]) ? $context["fonts_normal"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">  ";
        // line 805
        echo (isset($context["entry_google_url"]) ? $context["entry_google_url"] : null);
        echo "   </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 807
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "url_body"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 808
        echo (isset($context["entry_google_url_help"]) ? $context["entry_google_url_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 812
        echo (isset($context["entry_google_family"]) ? $context["entry_google_family"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 814
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "family_body"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 815
        echo (isset($context["entry_google_family_help"]) ? $context["entry_google_family_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 820
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "soconfig_fonts_store", 1 => "selector_body", 2 => "Add css selectors"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 826
        echo (isset($context["fonts_menu"]) ? $context["fonts_menu"] : null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 829
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_onOffFont", array(0 => "soconfig_fonts_store", 1 => "menu_status"), "method");
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 831
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_fonts_store", 1 => "normal_menu", 2 => (isset($context["fonts_normal"]) ? $context["fonts_normal"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">  ";
        // line 834
        echo (isset($context["entry_google_url"]) ? $context["entry_google_url"] : null);
        echo "   </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 836
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "url_menu"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 837
        echo (isset($context["entry_google_url_help"]) ? $context["entry_google_url_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 841
        echo (isset($context["entry_google_family"]) ? $context["entry_google_family"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 843
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "family_menu"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 844
        echo (isset($context["entry_google_family_help"]) ? $context["entry_google_family_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 849
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "soconfig_fonts_store", 1 => "selector_menu", 2 => "Add css selectors"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 855
        echo (isset($context["fonts_heading"]) ? $context["fonts_heading"] : null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 858
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_onOffFont", array(0 => "soconfig_fonts_store", 1 => "heading_status"), "method");
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 860
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_fonts_store", 1 => "normal_heading", 2 => (isset($context["fonts_normal"]) ? $context["fonts_normal"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\"> ";
        // line 863
        echo (isset($context["entry_google_url"]) ? $context["entry_google_url"] : null);
        echo "  </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 865
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "url_heading"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 866
        echo (isset($context["entry_google_url_help"]) ? $context["entry_google_url_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 870
        echo (isset($context["entry_google_family"]) ? $context["entry_google_family"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 872
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "family_heading"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 873
        echo (isset($context["entry_google_family_help"]) ? $context["entry_google_family_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 878
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "soconfig_fonts_store", 1 => "selector_heading", 2 => "Add css selectors"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t
    </div>
    <!-------------------------------------end tab Fonts-->
\t
\t<!-------------------------------------Tab Social-->
\t<div class=\"tab-pane\" id=\"tab-slide\">
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Facebook</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tShow Facebook
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 897
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_social_store", 1 => "social_fb_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_fb_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tFacebook ID:
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 905
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_social_store", 1 => "facebook", 2 => "Facebook profile name"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t <a href=\"http://findmyfacebookid.com/\" target=\"_blank\" style=\"display: block;float: left;width: auto;margin-top: 7px\">Find your Facebook ID »</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Twitter</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tShow Twitter
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 922
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_social_store", 1 => "social_twitter_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_twitter_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tTwitter username:
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 930
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_social_store", 1 => "twitter", 2 => "Twitter account name"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Custom</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Show Custom </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 942
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_social_store", 1 => "social_custom_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_custom_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Custom block</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 949
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_social_store", 2 => "video_code"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t
\t
\t<!-------------------------------------Tab Tab Advanced-->
\t<div class=\"tab-pane\" id=\"tab-advanced\">
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">SCSS Compile</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >SCSS Compile</label>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t";
        // line 967
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_advanced_store", 1 => "scsscompile", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >CSS Format</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 973
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_advanced_store", 1 => "scssformat", 2 => (isset($context["Scssformat"]) ? $context["Scssformat"] : null)), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >User Developer Compile Muti Color</label>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t";
        // line 979
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_advanced_store", 1 => "compileMutiColor", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t


\t</div>
\t<!-------------------------------------End Tab Advanced-->
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/options_stores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1331 => 979,  1322 => 973,  1313 => 967,  1292 => 949,  1282 => 942,  1267 => 930,  1256 => 922,  1236 => 905,  1225 => 897,  1203 => 878,  1195 => 873,  1191 => 872,  1186 => 870,  1179 => 866,  1175 => 865,  1170 => 863,  1164 => 860,  1159 => 858,  1153 => 855,  1144 => 849,  1136 => 844,  1132 => 843,  1127 => 841,  1120 => 837,  1116 => 836,  1111 => 834,  1105 => 831,  1100 => 829,  1094 => 826,  1085 => 820,  1077 => 815,  1073 => 814,  1068 => 812,  1061 => 808,  1057 => 807,  1052 => 805,  1046 => 802,  1041 => 800,  1035 => 797,  1008 => 773,  999 => 767,  988 => 759,  974 => 748,  964 => 741,  949 => 729,  938 => 721,  927 => 713,  916 => 705,  905 => 697,  896 => 691,  879 => 677,  857 => 658,  848 => 652,  838 => 645,  826 => 636,  813 => 626,  801 => 617,  786 => 605,  769 => 591,  759 => 584,  754 => 582,  746 => 577,  740 => 574,  731 => 568,  726 => 566,  712 => 555,  707 => 553,  700 => 549,  694 => 546,  680 => 535,  676 => 534,  655 => 516,  642 => 506,  625 => 492,  609 => 479,  606 => 478,  591 => 476,  587 => 475,  576 => 467,  562 => 456,  530 => 427,  518 => 417,  509 => 410,  498 => 401,  487 => 392,  476 => 383,  463 => 372,  458 => 370,  448 => 363,  435 => 353,  424 => 345,  419 => 343,  410 => 337,  397 => 327,  382 => 315,  372 => 308,  362 => 301,  356 => 298,  346 => 291,  340 => 288,  323 => 274,  312 => 266,  295 => 251,  289 => 248,  287 => 247,  283 => 246,  260 => 225,  250 => 219,  239 => 215,  232 => 211,  224 => 206,  201 => 186,  190 => 177,  182 => 171,  178 => 170,  174 => 169,  163 => 161,  159 => 160,  155 => 159,  151 => 158,  147 => 157,  143 => 156,  138 => 153,  131 => 150,  128 => 149,  125 => 148,  121 => 147,  119 => 146,  116 => 145,  114 => 135,  111 => 134,  109 => 120,  106 => 119,  104 => 115,  101 => 114,  99 => 110,  96 => 109,  94 => 104,  91 => 103,  89 => 99,  86 => 98,  84 => 93,  81 => 92,  79 => 87,  76 => 86,  74 => 82,  71 => 81,  69 => 77,  66 => 76,  64 => 72,  61 => 71,  59 => 67,  56 => 66,  54 => 60,  51 => 59,  49 => 52,  46 => 51,  44 => 45,  41 => 44,  39 => 27,  36 => 26,  34 => 21,  31 => 20,  29 => 16,  26 => 15,  24 => 7,  21 => 6,  19 => 2,);
    }
}
/* {# Twig variable So Config #}*/
/* {% set fonts = { */
/* 	'standard' : 'Standard',*/
/* 	'google'  : 'Google Fonts',*/
/* } %}*/
/* */
/* {% set columns = { */
/* 	'1' : '1 columns',*/
/* 	'2' : '2 columns',*/
/* 	'3' : '3 columns',*/
/* 	'4' : '4 columns',*/
/* 	'5' : '5 columns',*/
/* 	'6' : '6 columns',*/
/* } %}*/
/* */
/* {% set secondimg = { */
/* 	'1' : 'One image',*/
/* 	'2' : 'Second images',*/
/* } %}*/
/* */
/* {% set refine_search = { */
/* 	'0' : 'With images',*/
/* 	'1' : 'Text only',*/
/* 	'2' : 'Disable',*/
/* } %}*/
/* */
/* {% set fonts_normal = { */
/* 	'inherit' : 'No Use',*/
/* 	'Arial, Helvetica, sans-serif'  : 'Arial',*/
/* 	'Verdana, Geneva, sans-serif'  : 'Verdana',*/
/* 	'Georgia,Times New Roman, Times, serif'  : 'Georgia',*/
/* 	'Impact, Arial, Helvetica, sans-serif'  : 'Impact',*/
/* 	'Tahoma, Geneva, sans-serif'  : 'Tahoma',*/
/* 	'Trebuchet MS, Arial, Helvetica, sans-serif'  : 'Trebuchet MS',*/
/* 	'Arial Black, Gadget, sans-serif'  : 'Arial Black',*/
/* 	'Times, Times New Roman, serif'  : 'Times',*/
/* 	'Palatino Linotype, Book Antiqua, Palatino, serif'  : 'Palatino Linotype',*/
/* 	'Lucida Sans Unicode, Lucida Grande", sans-serif'  : 'Lucida Sans Unicode',*/
/* 	'MS Serif, New York, serif'  : 'MS Serif',*/
/* 	'Comic Sans MS, cursive'  : 'Comic Sans MS',*/
/* 	'Courier New, Courier, monospace'  : 'Courier New',*/
/* 	'Lucida Console, Monaco, monospace'  : 'Lucida Console',*/
/* } %}*/
/* */
/* {% set devices = { */
/* 	'lg' : '<i class="fa fa-desktop"></i> Desktops',*/
/* 	'md' : '<i class="fa fa-tablet"></i> Tablet Landscape',*/
/* 	'sm' : '<i class="fa fa-tablet"></i> Tablet Portrait',*/
/* 	'xs' : '<i class="fa fa-mobile"></i> Phones',*/
/* } %}*/
/* */
/* {% set Scssformat = { */
/* 	'Expanded' : 'Expanded',*/
/* 	'Nested' : 'Nested (default)',*/
/* 	'Compressed' : 'Compressed',*/
/* 	'Compact' : 'Compact',*/
/* 	'Crunched' : 'Crunched',*/
/* } %}*/
/* */
/* {% set layoutStyle = { */
/* 	'full' : 'Full Layout',*/
/* 	'boxed' : 'Boxed',*/
/* 	'iframed' : 'Iframed',*/
/* 	'rounded' : 'Rounded',*/
/* } %}*/
/* */
/* {% set content_bg_mode = { */
/* 	'repeat' : 'Repeat',*/
/* 	'no-repeat' : 'No-Repeat',*/
/* } %}*/
/* */
/* {% set content_attachment = { */
/* 	'scroll' : 'Scroll',*/
/* 	'fixed' : 'Fixed',*/
/* } %}*/
/* */
/* {% set related_position = { */
/* 	'vertical' : 'Vertical',*/
/* 	'horizontal' : 'Horizontal',*/
/* } %}*/
/* */
/* {% set thumbnailPos = { */
/* 	'bottom' : 'Bottom',*/
/* 	'left' : 'Left',*/
/* } %}*/
/* */
/* {% set zoommode = { */
/* 	'window' : 'Basic Zoom',*/
/* 	'inner' : 'Inner Zoom',*/
/* 	'lens' : 'Lens Zoom',*/
/* } %}*/
/* */
/* {% set gallerysize = { */
/* 	'small' : 'Image Small',*/
/* 	'medium' : 'Image Medium',*/
/* 	'large' : 'Image Large',*/
/* } %}*/
/* */
/* {% set tabs_position = { */
/* 	'1' : 'Bottom vertical',*/
/* 	'2' : 'Bottom horizontal',*/
/* } %}*/
/* */
/* {% set toppanel_type = { */
/* 	'1' : 'Show Header Center',*/
/* 	'2' : 'Show Header Bottom',*/
/* 	'3' : 'Show All'*/
/* } %}*/
/* */
/* {% set catalog_mode = { */
/* 	'0' : 'Grid',*/
/* 	'1' : 'List'*/
/* } %}*/
/* */
/* {% set radio_style = { */
/* 	'0' : 'Default',*/
/* 	'1' : 'Button'*/
/* } %}*/
/* */
/* {% set type_banner = { */
/* 	'1' : 'Hover effect 1',*/
/* 	'2' : 'Hover effect 2',*/
/* 	'3' : 'Hover effect 3',*/
/* 	'4' : 'Hover effect 4',*/
/* 	'5' : 'Hover effect 5',*/
/* 	'6' : 'Hover effect 6',*/
/* 	'7' : 'Hover effect 7',*/
/* 	'8' : 'Hover effect 8',*/
/* 	'9' : 'Hover effect 9',*/
/* 	'10' : 'Hover effect 10',*/
/* 	'11' : 'Hover effect 11',*/
/* 	'12' : 'Hover effect 12',*/
/* } %}*/
/* */
/* {% set preloader_animation = { */
/* 	'rotate-plane' : 'Rotate Plane',*/
/* 	'double-loop' : 'Double Bounce',*/
/* 	'audio-wave' : 'Audio Wave',*/
/* 	'cube-move' : 'Cube Move',*/
/* 	'circle-bounce' : 'Circle Bounce',*/
/* 	'circle-bounce2' : 'Circle Bounce 2',*/
/* 	'cube-grid' : 'Cube Grid',*/
/* 	'folding-cube' : 'Cube Folding',*/
/* } %}*/
/* */
/* {% set pattern_array = {'0' : 'None'} %}*/
/* {% for pattern_id in 2..45 %}*/
/* 	{% if pattern_id not in pattern_array %}*/
/*           {% set pattern_array = pattern_array|merge([pattern_id]) %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* {# //End variable So Config #}*/
/* */
/* <div class="sidebar " data-sticky_column>*/
/* <ul class="nav nav-tabs main_tabs_vertical" >*/
/*     <li class="active"><a href="#tab-general" data-toggle="tab">{{  objlang.get('maintabs_general') }} </a></li>*/
/*     <li><a href="#tab-layout" data-toggle="tab">{{ objlang.get('maintabs_layout') }} </a></li>*/
/*     <li><a href="#tab-products" data-toggle="tab">{{ objlang.get('maintabs_products')  }} </a></li>*/
/*     <li><a href="#tab-fonts" data-toggle="tab">{{ objlang.get('maintabs_fonts')  }} </a></li>*/
/*     <li><a href="#tab-slide" data-toggle="tab">{{ objlang.get('maintabs_social')  }} </a></li>*/
/* 	<li><a href="#tab-advanced" data-toggle="tab">{{ objlang.get('maintabs_advanced')  }} </a></li>*/
/* </ul>*/
/* </div>*/
/* */
/* <div class="tab-content main_content_vertical col-sm-10" data-sticky_column>*/
/*     <!-------------------------------------Tab General---------------------------------->*/
/*     <div class="tab-pane active" id="tab-general">*/
/*         <ul class="nav nav-tabs  main_tabs_2 ">*/
/*             <li class="active"><a href="#tab-general-layout1" class="selected" data-toggle="tab">{{ general_tab_general }} </a></li>*/
/*             <li><a href="#tab-general-layout2" data-toggle="tab">{{ general_tab_header }} </a></li>*/
/*             <li><a href="#tab-general-layout3" data-toggle="tab">{{ general_tab_footer }}  </a></li>*/
/* 			<li><a href="#tab-general-layout4" data-toggle="tab">Banner Effect</a></li>*/
/*         </ul>*/
/* */
/*         <div class="tab-content ">*/
/* 			{# General  Blocks---------------------------------------------  #}*/
/*             <div class="tab-pane active" id="tab-general-layout1">*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Select Layouts</h3>*/
/* 					<div class="panel-container">*/
/* 						*/
/* 						<div id="tab-general__layouttype" class="form-group">*/
/* 							*/
/* 							<div class="col-sm-12">*/
/* 								{{ fields.field_typelayout('soconfig_general_store','typelayout',typelayouts,'6') }} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group" >*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="*/
/* 									<p class='help-hint-text'>*/
/* 										<i class='fa fa-bullhorn' ></i> */
/* 										<span>Create New Color</span>*/
/* 									</p>*/
/* 									<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>*/
/* 									<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>*/
/* 									<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>*/
/* 								">*/
/* 									Create New Color*/
/* 								</span>*/
/* 							</label>*/
/* 							*/
/* 							<div class="col-sm-2">*/
/* 								{{ fields.field_text('soconfig_advanced_store','name_color','Name Color') }} */
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<div class="input-group">*/
/* 									<i class="input-group-addon fa fa-paint-brush" aria-hidden="true"></i>*/
/* 									{{ fields.field_colors('soconfig_advanced_store','theme_color','Select color') }} */
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-5">*/
/* 								<button onclick="buttonApplyColor();" class="btn btn-primary" type="button"  {% if scsscompile %} {{ "disabled='disabled'" }} {% endif %}><i class="fa fa-compress" aria-hidden="true"></i> Compile CSS</button>*/
/* 							</div>*/
/* 							*/
/* 							<div class="col-sm-offset-2 col-sm-10">*/
/* 								 {% if (scsscompile  or  compileMutiColor)  %} */
/* 								<div class="text-warning" style="margin-top:20px;">*/
/* 								<p><i class="fa fa-exclamation-triangle" style="font-size:18px;"></i> Compile css not working then: </p>*/
/* 								1.Tab Advanced → SCSS Compile = On .</br>*/
/* 								2.Tab Advanced → User Developer Compile Muti Color = On .*/
/* 								</div>*/
/* 								{% endif %} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 						*/
/* 						<div id="tab-general__themecolor" class="form-group">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="*/
/* 									<p class='help-hint-text'>*/
/* 										<i class='fa fa-bullhorn' ></i> */
/* 										<span>Create New Color</span>*/
/* 									</p>*/
/* 									<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>*/
/* 									<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>*/
/* 									<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>*/
/* 								">*/
/* 									Select Themes Color*/
/* 								</span>*/
/* 							</label>*/
/* 							<div class="col-sm-6" id="select_color">*/
/* 								{{ fields.field_select('soconfig_general_store','themecolor',allThemeColor,'width30') }} */
/* 								{% if allThemeColor['none'] %}*/
/* 									<div class="text-warning" style="margin-top:20px;">*/
/* 									<p><i class="fa fa-exclamation-triangle" style="font-size:24px;"></i> Can not find css color file. Please recreate color new </p>*/
/* 									</div>*/
/* 								{% endif %}	*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/*                 </div>*/
/* 				*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Sticky Menu on Top </h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="logo_position">*/
/* 								Status:*/
/* 							</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','toppanel_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" id="tab-field-toppanel_status">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								Select Block on header:*/
/* 							</label>*/
/* 							<div class="col-sm-8">*/
/* 								{{ fields.field_radio('soconfig_general_store','toppanel_type',toppanel_type) }} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 			*/
/* 				<div class="so-panel">	*/
/* 					<h3 class="panel-title">Top Bar</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Telephone No</label>*/
/* 							<div class="col-sm-2" >*/
/* 								{{ fields.field_radio('soconfig_general_store','phone_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 							<div class="col-sm-8" id="tab-field-phone_status">*/
/* 								{{ fields.field_langHori(languages,'soconfig_general_store','contact_number',50) }}*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Welcome Message</label>*/
/* 							<div class="col-sm-2" >*/
/* 								{{ fields.field_radio('soconfig_general_store','welcome_message_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 							<div class="col-sm-8" id="tab-field-welcome_message_status">*/
/* 								{{ fields.field_langHori(languages,'soconfig_general_store','welcome_message',50) }}*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Checkout Link</label>*/
/* 							<div class="col-sm-3" >*/
/* 								{{ fields.field_radio('soconfig_general_store','checkout_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group last">*/
/* 							<label class="col-sm-2 control-label">Language/Currency Title</label>*/
/* 							<div class="col-sm-3" >*/
/* 								{{ fields.field_radio('soconfig_general_store','lang_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">General</h3>*/
/* 					<div class="panel-container">		*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" >Preloader </label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','preloader', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" id="tab-field-preloader">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="Select a preloader animation from the list">*/
/* 									Preloader Animation:*/
/* 								</span>*/
/* 							</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','preloader_animation', preloader_animation)}} */
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" >{{ general_back_top }}  </label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','backtop', {1:'ON',0 : 'OFF'} )}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" > Status Payment  </label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','imgpayment_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" id="tab-field-imgpayment_status">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="Edit content here Footer Custom Block.">*/
/* 									Image (Payment block):*/
/* 								</span>*/
/* 							</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_addimage('soconfig_general_store','imgpayment') }} */
/* 								*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">  {{ general_copyright }}   </label>*/
/* 							<div class="col-sm-4">*/
/* 								{{ fields.field_text('soconfig_general_store','copyright','Footer copyright content') }} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/*                 </div>*/
/* 				*/
/*             </div>*/
/*            */
/* */
/* 			{# Header  Blocks---------------------------------------------  #}*/
/*             <div id="tab-general-layout2" class="tab-pane">*/
/* 				<div id="tab-general__headertype" class="tab-pane active">*/
/* 					<div class="so-panel">*/
/* 						<h3 class="panel-title">Type of Header</h3>*/
/* 						<span class="help-block">If you need content from other header like phone number you need to set it in custom Theme Control Panel.</span>*/
/* 						<p class="help-hint">*/
/* 							<i class="fa fa-bullhorn" aria-hidden="true"></i> */
/* 							<span>You can set these headers for any skin you want</span>*/
/* 						</p>*/
/* 						{{ fields.field_typeheader('soconfig_general_store','typeheader',typelayouts) }} */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 								*/
/*             </div>*/
/* */
/* 			*/
/* 			{# Footer Blocks -----------------------------------------------  #}*/
/*             <div id="tab-general-layout3" class="tab-pane">*/
/* 				<div id="tab-general__footertype">*/
/* 					<div class="so-panel">*/
/* 						<h3 class="panel-title">Type of Footer</h3>*/
/* 						<span class="help-block">If you need content from other footer like contact us you need to set it in custom modules.</span>*/
/* 						<p class="help-hint">*/
/* 							<i class="fa fa-bullhorn" aria-hidden="true"></i> */
/* 							<span>You can set these footer for any skin you want</span>*/
/* 						</p>*/
/* 						{{ fields.field_typeheader('soconfig_general_store','typefooter',typelayouts) }} */
/* 					</div>*/
/* 				</div>*/
/* 			*/
/*             </div>*/
/*             */
/* 			{# Effect Banner  Blocks---------------------------------------------  #}*/
/*             <div id="tab-general-layout4" class="tab-pane">*/
/* 				<div class="clearfix">*/
/* 					*/
/* 						<div id="tab-general__bannereffect" class="tab-pane">*/
/* 							<div class="so-panel">*/
/* 								<h3 class="panel-title">Hover over image below to see effect.</h3>*/
/* 								<p class="help-hint">*/
/* 									<i class="fa fa-bullhorn" aria-hidden="true"></i> */
/* 									<span>Hover over image below to see effect.</span>*/
/* 								</p>*/
/* 								{{ fields.field_typebanner('soconfig_general_store','type_banner',type_banner,3) }} */
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-------------------------------------end tab General---------------------------------->*/
/* */
/*     <!-------------------------------------Tab Layout---------------------------------------->*/
/*     <div class="tab-pane" id="tab-layout">*/
/* 		<!--subtabs: General -->*/
/* 		<div class="tab-pane active" id="tab-colors-layout1">*/
/* 			<div class="so-panel">*/
/* 				<h3 class="panel-title">Theme Layout Settings</h3>*/
/* 				<div class="panel-container">*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label" >*/
/* 							<span data-toggle="tooltip" title="With the boxed layout you can choose additional options such as custom background images, patterns and solid colors">Layout Style</span>*/
/* 						</label>*/
/* 						<div class="col-sm-9">*/
/* 							<div class="btn-group btn-toggle block-group " data-toggle="buttons">*/
/* 								{{ fields.field_radio('soconfig_layout_store','layoutstyle', layoutStyle)}} */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label">*/
/* 							 <span data-toggle="tooltip" title="Set background color for all content.">Body Background Color:</span>*/
/* 						</label>*/
/* 						<div class="col-sm-2">*/
/* 							{{ fields.field_colors('soconfig_layout_store','theme_bgcolor','Background color') }} */
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label" >Overlay pattern</label>*/
/* 						<div class="col-sm-9">*/
/* 							<div class="form-group no-margin">*/
/* 								{% for i in 1..45 %}*/
/* 									<div class="img-patt"><small>{{ i }} </small><img src="{{dir_soconfig}}patterns/{{ i }}.png" alt="pattern {{ i }} "></div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 							{{ fields.field_select('soconfig_layout_store','pattern',pattern_array,'width30') }} */
/* 							*/
/* 							<small class="help-block">Select a pattern number if you want to use one.</small>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label">*/
/* 							<span data-toggle="tooltip" title="Set background image for all site.">Background Image:</span>*/
/* 						</label>*/
/* 						<div class="col-sm-9">*/
/* 							{{ fields.field_addimage('soconfig_layout_store','contentbg') }} */
/* 							*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label" >*/
/* 							 <span data-toggle="tooltip" title="Set background image display mode">*/
/* 								 Background Image display mode*/
/* 							 </span>*/
/* 						</label>*/
/* 						<div class="col-sm-9">*/
/* 							{{ fields.field_radio('soconfig_layout_store','content_bg_mode', content_bg_mode)}} */
/* */
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label" >*/
/* 							Background Image display Attachment*/
/* 						</label>*/
/* 						<div class="col-sm-9">*/
/* 							{{ fields.field_radio('soconfig_layout_store','content_attachment', content_attachment)}} */
/* */
/* 						</div>*/
/* 					</div>*/
/* */
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		<!--subtabs: General -->*/
/*     </div>*/
/*     <!-------------------------------------end tab Colors,backgrounds,fonts-->*/
/* */
/*     <!-------------------------------------Tab Products sliders, products listings-->*/
/*     <div class="tab-pane" id="tab-products">*/
/* */
/*         <ul class="nav nav-tabs  main_tabs_2">*/
/*             <li class="active"><a href="#tab-products-layout1" class="selected" data-toggle="tab">{{ pages_pro_listings }} </a></li>*/
/*             <li><a href="#tab-products-layout2" data-toggle="tab">{{ pages_pro_detail }} </a></li>*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*             <!--subtabs: Listings -->*/
/*             <div class="tab-pane active wrapper-tabcategory" id="tab-products-layout1">*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Refine Search</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" >*/
/* 								{{ product_catalog_refine }}*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_catalog_refine', refine_search)}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-product_catalog_refine_col">{{ product_catalog_refine_col }}</span></label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_devices('soconfig_pages_store','catalog_refine_devices_',devices,columns) }} */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Category Page</h3>*/
/* 					<div class="panel-container">*/
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">{{ product_catalog_image }} </label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','lstimg_cate_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-product_catalog_mode">*/
/* 								<span data-toggle="tooltip" title="Create your listings into simple catalog.">{{ product_catalog_mode }}</span>*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_catalog_mode', catalog_mode)}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-listing_quick_type">{{ product_catalog_column }}</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_devices('soconfig_pages_store','product_catalog_column_',devices,columns) }} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-listing_quick_type">Product grid number per row of special, search, manufacturer</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_devices('soconfig_pages_store','other_catalog_column_',devices,columns) }} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Product Item</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">Show "New" label:</label>*/
/* 							<div class="col-sm-5">*/
/* 								{{ fields.field_radio('soconfig_pages_store','new_status',  {1:'ON',0 : 'OFF'})}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-days">*/
/* 								<span data-toggle="tooltip" title="Number of days from the date "Date Available" to today date for a product.">*/
/* 								Period of holding "New" label:*/
/* 								</span>*/
/* 							</label>*/
/* 							<div class="col-sm-2">*/
/* 								{{ fields.field_text('soconfig_pages_store','days','Period of holding New label:') }} */
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">*/
/* 								<span data-toggle="tooltip" title="Set display or not 'QUICK VIEW' function on products in sliders.">Show "QUICK VIEW" function:</span>*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','quick_status',  {1:'ON',0 : 'OFF'})}} */
/* 							</div>*/
/* 						</div>*/
/* */
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">*/
/* 								<span data-toggle="tooltip" title="Set display or not 'Discount' label.">Show "Discount" label:</span>*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','discount_status',  {1:'ON',0 : 'OFF'})}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">*/
/* 								<span data-toggle="tooltip" title="Set display or not countdown of Special Offer in product sliders.">Show countdown of Special Offer:</span>*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','countdown_status',  {1:'ON',0 : 'OFF'})}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">Slide to 2nd image automatically</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','secondimg',  secondimg)}} */
/* 							</div>*/
/* 						</div>*/
/* 					   <div class="form-group">*/
/* 							<label class="col-sm-3 control-label">Show rating</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','rating_status',  {1:'ON',0 : 'OFF'})}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* */
/*          */
/*             <!--subtabs: product page -->*/
/*             <div id="tab-products-layout2" class="tab-pane">*/
/*                 <div class="so-panel">*/
/* 					<h3 class="panel-title">Options Styles</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-thumbnails_position">Option Checkbox and Radio Style:</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','radio_style', radio_style)}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Product Page</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-cloudzoom_mode">*/
/* 								<span data-toggle="tooltip" title="Choose Size of  Gallery on product page.">Product Gallery Size</span>*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_gallerysize', gallerysize)}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-thumbnails_position">Position of block with thumbnails previews:</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','thumbnails_position', thumbnailPos)}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-cloudzoom_mode">*/
/* 								<span data-toggle="tooltip" title="Choose position of cloudzoom image preview on product page.">Enable Product Zoom</span>*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_enablezoom',  {1:'ON',0 : 'OFF'})}} */
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div id="tab-field-product_enablezoom">*/
/* 							<div class="form-group" >*/
/* 								<label class="col-sm-3 control-label" for="input-tabs_position">Product Zoom Mode</label>*/
/* 								<div class="col-sm-9">*/
/* 									{{ fields.field_radio('soconfig_pages_store','product_zoommode', zoommode)}} */
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-3 control-label">*/
/* 									<span data-toggle="tooltip" title="Lens Zoom Size is viewport size to move and enlarge the image. Please enter number style and not negative number">Lens Zoom Size</span>*/
/* 								</label>*/
/* 								<div class="col-sm-2">*/
/* 									{{ fields.field_text('soconfig_pages_store','product_zoomlenssize','') }} */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-tabs_position">Tabs block:</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','tabs_position', tabs_position)}} */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>	*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Social Share</h3>*/
/* 					<div class="panel-container">*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-meta-keyword">Show Custom</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_page_button',  {1:'ON',0 : 'OFF'})}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group" id="tab-field-product_page_button">*/
/* 							<label class="col-sm-3 control-label" >Custom block</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_langTextarea(languages,'soconfig_pages_store','product_socialshare') }}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Related products</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-related">Show Related</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','related_status',  {1:'ON',0 : 'OFF'})}} */
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div id="tab-field-related_status">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-3 control-label" for="input-tabs_position">Orientation Related :</label>*/
/* 								<div class="col-sm-9">*/
/* 									{{ fields.field_radio('soconfig_pages_store','related_position',  related_position)}} */
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-3 control-label" for="input-listing_quick_type">Related product number per row <p class="help-block">(use orientation related = Horizontal)</p></label>*/
/* 								<div class="col-sm-9">*/
/* 									{{ fields.field_devices('soconfig_pages_store','product_related_column_',devices,columns) }} */
/* */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>	*/
/* 				</div>		*/
/* 					*/
/* 				*/
/*             </div>*/
/* 			*/
/*         </div>*/
/* */
/*     </div>*/
/*     <!------------------------------------end tab Pages-->*/
/* */
/*     <!-------------------------------------Tab Fonts-->*/
/*     <div class="tab-pane" id="tab-fonts">*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Fonts<span class="help-block">If you want to speed up your site use one of the common fonts instead of the fonts from Google.</span></h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					*/
/* 					<label class="col-sm-3 control-label" >{{ fonts_body }}  </label>*/
/* 					<div class="col-sm-9">*/
/* 						<div class="block-group fonts-change">*/
/* 							{{ fields.field_onOffFont('soconfig_fonts_store','body_status') }} */
/* 							<div class="block-group items-font font-standard" >*/
/* 								{{ fields.field_select('soconfig_fonts_store','normal_body',fonts_normal) }} */
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class="control-label">  {{ entry_google_url }}   </label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','url_body') }} */
/* 									<span class="help-block">{{ entry_google_url_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class=" control-label"> {{ entry_google_family }}</label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','family_body') }} */
/* 									<span class="help-block"> {{ entry_google_family_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="block-group">*/
/* 							{{ fields.field_textarea('soconfig_fonts_store','selector_body','Add css selectors') }} */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 		*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >{{ fonts_menu }}  </label>*/
/* 					<div class="col-sm-9">*/
/* 						<div class="block-group fonts-change">*/
/* 							{{ fields.field_onOffFont('soconfig_fonts_store','menu_status') }} */
/* 							<div class="block-group items-font font-standard" >*/
/* 								{{ fields.field_select('soconfig_fonts_store','normal_menu',fonts_normal) }} */
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class="control-label">  {{ entry_google_url }}   </label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','url_menu') }} */
/* 									<span class="help-block">{{ entry_google_url_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class=" control-label"> {{ entry_google_family }}</label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','family_menu') }} */
/* 									<span class="help-block"> {{ entry_google_family_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="block-group">*/
/* 							{{ fields.field_textarea('soconfig_fonts_store','selector_menu','Add css selectors') }} */
/* 						</div>*/
/* 					</div>*/
/* 				</div>	*/
/* 				*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >{{ fonts_heading }}  </label>*/
/* 					<div class="col-sm-9">*/
/* 						<div class="block-group fonts-change">*/
/* 							{{ fields.field_onOffFont('soconfig_fonts_store','heading_status') }} */
/* 							<div class="block-group items-font font-standard" >*/
/* 								{{ fields.field_select('soconfig_fonts_store','normal_heading',fonts_normal) }} */
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class="control-label"> {{ entry_google_url }}  </label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','url_heading') }} */
/* 									<span class="help-block">{{ entry_google_url_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class=" control-label"> {{ entry_google_family }}</label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','family_heading') }} */
/* 									<span class="help-block"> {{ entry_google_family_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="block-group">*/
/* 							{{ fields.field_textarea('soconfig_fonts_store','selector_heading','Add css selectors') }} */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>				*/
/*     </div>*/
/*     <!-------------------------------------end tab Fonts-->*/
/* 	*/
/* 	<!-------------------------------------Tab Social-->*/
/* 	<div class="tab-pane" id="tab-slide">*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Facebook</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Show Facebook*/
/* 					</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('soconfig_social_store','social_fb_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group" id="tab-field-social_fb_status">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Facebook ID:*/
/* 					</label>*/
/* 					<div class="col-sm-3">*/
/* 						{{ fields.field_text('soconfig_social_store','facebook','Facebook profile name') }} */
/* 					</div>*/
/* 					<div class="col-sm-4">*/
/* 						 <a href="http://findmyfacebookid.com/" target="_blank" style="display: block;float: left;width: auto;margin-top: 7px">Find your Facebook ID »</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>	*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Twitter</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Show Twitter*/
/* 					</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('soconfig_social_store','social_twitter_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group" id="tab-field-social_twitter_status">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Twitter username:*/
/* 					</label>*/
/* 					<div class="col-sm-3">*/
/* 						{{ fields.field_text('soconfig_social_store','twitter','Twitter account name') }} */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Custom</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >Show Custom </label>*/
/* 					<div class="col-sm-3">*/
/* 						{{ fields.field_radio('soconfig_social_store','social_custom_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="form-group" id="tab-field-social_custom_status">*/
/* 					<label class="col-sm-3 control-label" >Custom block</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_langTextarea(languages,'soconfig_social_store','video_code') }}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	<!-------------------------------------Tab Tab Advanced-->*/
/* 	<div class="tab-pane" id="tab-advanced">*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">SCSS Compile</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >SCSS Compile</label>*/
/* 					<div class="col-sm-2">*/
/* 						{{ fields.field_radio('soconfig_advanced_store','scsscompile', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >CSS Format</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('soconfig_advanced_store','scssformat', Scssformat)}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >User Developer Compile Muti Color</label>*/
/* 					<div class="col-sm-2">*/
/* 						{{ fields.field_radio('soconfig_advanced_store','compileMutiColor', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		*/
/* */
/* */
/* 	</div>*/
/* 	<!-------------------------------------End Tab Advanced-->*/
/* 	*/
/* </div>*/
/* */
