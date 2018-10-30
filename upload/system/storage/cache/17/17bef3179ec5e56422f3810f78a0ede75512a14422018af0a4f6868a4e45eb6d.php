<?php

/* so-oneshop/template/common/header.twig */
class __TwigTemplate_a22ff59a62ed8966be59842338f336bbbfbf76a59306047411d31852ffb1f0e4 extends Twig_Template
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
        // line 9
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 10
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 14
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 15
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 18
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 19
        echo "<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->

";
        // line 22
        if (((isset($context["direction"]) ? $context["direction"] : null) == "ltr")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo "
";
        } elseif ((        // line 23
(isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css"), "method");
            echo " 
";
        } else {
            // line 24
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo " ";
        }
        // line 25
        echo "
";
        // line 26
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "method");
        echo "
";
        // line 27
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/lib.css"), "method");
        echo "
";
        // line 28
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/owl.carousel.css"), "method");
        echo "
";
        // line 29
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/ie9-and-up.css")), "method");
        echo "

";
        // line 32
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"), "method");
        echo "
";
        // line 33
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"), "method");
        echo "
";
        // line 34
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/libs.js"), "method");
        echo "
";
        // line 35
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/owl.carousel.js"), "method");
        echo "
";
        // line 36
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/so.system.js"), "method");
        echo "

";
        // line 38
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/so.custom.js")), "method");
        echo "
";
        // line 39
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/common.js")), "method");
        echo "

";
        // line 41
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_status"), "method")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/toppanel.js"), "method");
        }
        // line 42
        echo "

";
        // line 45
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "scss_compass", array());
        echo "
";
        // line 46
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "css_out", array());
        echo "
";
        // line 47
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "js_out", array());
        echo "


";
        // line 51
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 52
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 53
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 54
        if ((isset($context["selector_body"]) ? $context["selector_body"] : null)) {
            // line 55
            echo "\t<style type=\"text/css\">
\t\t";
            // line 56
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_body"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 57
                echo "  ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_body"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 59
        echo " 
";
        // line 60
        if ((isset($context["selector_menu"]) ? $context["selector_menu"] : null)) {
            // line 61
            echo "\t<style type=\"text/css\">
\t\t";
            // line 62
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_menu"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 63
                echo "  ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_menu"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 65
        echo " 
";
        // line 66
        if ((isset($context["selector_heading"]) ? $context["selector_heading"] : null)) {
            // line 67
            echo "\t<style type=\"text/css\">
\t\t";
            // line 68
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_heading"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 69
                echo "  ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_heading"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 71
        echo " 



";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 78
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
";
        // line 85
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method") != "full")) {
            echo " 
\t<style type=\"text/css\">
\tbody {
\t\tbackground-color:";
            // line 88
            echo (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) : ("none"));
            echo " ;\t\t
\t\t";
            // line 89
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method") != "")) {
                // line 90
                echo "\t\t\tbackground-image: url(\"image/";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method");
                echo " \");
\t\t";
            }
            // line 92
            echo "\t\tbackground-repeat:";
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method")) : ("no-repeat"));
            echo " ;
\t\tbackground-attachment:";
            // line 93
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method")) : ("inherit"));
            echo " ;
\t\tbackground-position:top center; 
\t}
\t</style>
";
        }
        // line 97
        echo " \t

</head>
";
        // line 101
        echo "
\t";
        // line 102
        $context["layoutbox"] = (( !twig_test_empty((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null))) ? ((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method")));
        // line 103
        echo "\t";
        $context["pattern"] = (( !twig_test_empty((isset($context["url_pattern"]) ? $context["url_pattern"] : null))) ? ((isset($context["url_pattern"]) ? $context["url_pattern"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "pattern"), "method")));
        // line 104
        echo "

\t";
        // line 106
        $context["cls_body"] = ((isset($context["class"]) ? $context["class"] : null) . " ");
        // line 107
        echo "\t";
        $context["cls_body"] = ((isset($context["cls_body"]) ? $context["cls_body"] : null) . (isset($context["direction"]) ? $context["direction"] : null));
        // line 108
        echo "\t";
        $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " layout-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typelayout"), "method"));
        // line 109
        if (((((isset($context["layoutbox"]) ? $context["layoutbox"] : null) != "full") && ((isset($context["pattern"]) ? $context["pattern"] : null) != "none")) && twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method")))) {
            // line 110
            echo "\t";
            $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " pattern-") . (isset($context["pattern"]) ? $context["pattern"] : null));
        }
        // line 111
        echo " 

\t";
        // line 113
        $context["cls_wrapper"] = ("wrapper-" . (isset($context["layoutbox"]) ? $context["layoutbox"] : null));
        // line 114
        echo "\t";
        $context["cls_wrapper"] = (((isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null) . " banners-effect-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "type_banner"), "method"));
        // line 115
        echo "
\t
<body class=\"";
        // line 117
        echo (isset($context["cls_body"]) ? $context["cls_body"] : null);
        echo "\">
<div id=\"wrapper\" class=\"";
        // line 118
        echo (isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null);
        echo "\">  
 
";
        // line 121
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader"), "method")) {
            // line 122
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/preloader.twig"), "so-oneshop/template/common/header.twig", 122)->display(array_merge($context, array("preloader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader_animation"), "method"))));
        }
        // line 124
        echo "
";
        // line 126
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "1")) {
            // line 127
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header1.twig"), "so-oneshop/template/common/header.twig", 127)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 128
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "2")) {
            // line 129
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header2.twig"), "so-oneshop/template/common/header.twig", 129)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } else {
            // line 130
            echo "\t
\t<style>
\t\t.alert-primary .alert-link {color: #002752;}
\t\t.alert-link {font-weight: 700;text-decoration: none;}
\t\t.alert-link:hover{text-decoration: underline;}
\t\t.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;
\t\t}
\t</style>
\t<div class=\"alert alert-primary\">
\t\t\tGo to admin, find Extensions >>  <a class=\"alert-link\" href=\"admin/index.php?route=marketplace/modification\"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file
\t</div>
";
        }
        // line 142
        echo "
<div id=\"socialLogin\"></div>
";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 142,  403 => 130,  399 => 129,  397 => 128,  394 => 127,  392 => 126,  389 => 124,  385 => 122,  383 => 121,  378 => 118,  374 => 117,  370 => 115,  367 => 114,  365 => 113,  361 => 111,  357 => 110,  355 => 109,  352 => 108,  349 => 107,  347 => 106,  343 => 104,  340 => 103,  338 => 102,  335 => 101,  330 => 97,  322 => 93,  317 => 92,  311 => 90,  309 => 89,  305 => 88,  299 => 85,  296 => 83,  281 => 82,  270 => 81,  267 => 80,  258 => 78,  253 => 77,  240 => 76,  234 => 71,  226 => 69,  219 => 68,  216 => 67,  214 => 66,  211 => 65,  203 => 63,  196 => 62,  193 => 61,  191 => 60,  188 => 59,  180 => 57,  173 => 56,  170 => 55,  168 => 54,  160 => 53,  152 => 52,  144 => 51,  138 => 47,  134 => 46,  130 => 45,  126 => 42,  122 => 41,  117 => 39,  113 => 38,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  72 => 25,  68 => 24,  62 => 23,  56 => 22,  52 => 19,  46 => 18,  40 => 17,  35 => 15,  31 => 14,  22 => 10,  19 => 9,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1"> */
/* {% if description %}<meta name="description" content="{{ description }}" />{% endif %}*/
/* {% if keywords %}<meta name="keywords" content="{{ keywords }}" />{% endif %}*/
/* <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->*/
/* */
/* {# =========== Begin General CSS ==============#}*/
/* {% if direction=='ltr' %} {{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}}*/
/* {% elseif direction=='rtl' %}{{soconfig.addCss('catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css')}} */
/* {% else %}{{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}} {% endif %}*/
/* */
/* {{soconfig.addCss('catalog/view/javascript/font-awesome/css/font-awesome.min.css')}}*/
/* {{soconfig.addCss('catalog/view/javascript/soconfig/css/lib.css')}}*/
/* {{soconfig.addCss('catalog/view/javascript/soconfig/css/owl.carousel.css')}}*/
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/ie9-and-up.css')}}*/
/* */
/* {# =========== Begin General Scripts ==============#}*/
/* {{soconfig.addJs('catalog/view/javascript/jquery/jquery-2.1.1.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/bootstrap/js/bootstrap.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/libs.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/owl.carousel.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/so.system.js')}}*/
/* */
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/so.custom.js')}}*/
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/common.js')}}*/
/* */
/* {% if soconfig.get_settings('toppanel_status') %}{{soconfig.addJs('catalog/view/javascript/soconfig/js/toppanel.js')}}{% endif %}*/
/* */
/* */
/* {# =========== Begin Other CSS & JS  ==============#}*/
/* {{soconfig.scss_compass}}*/
/* {{soconfig.css_out}}*/
/* {{soconfig.js_out}}*/
/* */
/* */
/* {# =========== Begin Google Font ==============#}*/
/* {% if soconfig.get_settings('url_body')  and  soconfig.get_settings('body_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_body') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_menu')  and  soconfig.get_settings('menu_status')  ==  'google' %} <link href='{{ soconfig.get_settings('url_menu') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_heading')  and  soconfig.get_settings('heading_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_heading') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if selector_body %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('body_status') == 'google' %} {{ (selector_body|raw~'{font-family:'~ soconfig.get_settings('family_body')~'}') }}*/
/* 		{% else %}  {{ selector_body|raw~'{font-family:'~ soconfig.get_settings('normal_body')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_menu %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('menu_status') == 'google' %} {{ (selector_menu|raw~'{font-family:'~ soconfig.get_settings('family_menu')~'}') }}*/
/* 		{% else %}  {{ selector_menu|raw~'{font-family:'~ soconfig.get_settings('normal_menu')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_heading %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('menu_status') == 'google' %} {{ (selector_heading|raw~'{font-family:'~ soconfig.get_settings('family_heading')~'}') }}*/
/* 		{% else %}  {{ selector_heading|raw~'{font-family:'~ soconfig.get_settings('normal_heading')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* */
/* */
/* */
/* {# =========== Begin Google Analytics ==============#}*/
/* {% for link in links %}<link href="{{ link.href }}" rel="{{ link.rel }}" />{% endfor %}*/
/* 	{% for analytic in analytics %}*/
/* 	{{ analytic }}*/
/* {% endfor %}*/
/* */
/* {% for script in scripts %}<script src="{{ script }}" type="text/javascript"></script>{% endfor %}*/
/* {% for style in styles %}<link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />{% endfor %}*/
/* */
/* {# =========== Begin Cusom Code ==============#}*/
/* {% if soconfig.get_settings('layoutstyle') != 'full'  %} */
/* 	<style type="text/css">*/
/* 	body {*/
/* 		background-color:{{ soconfig.get_settings('theme_bgcolor') ? soconfig.get_settings('theme_bgcolor') : 'none' }} ;		*/
/* 		{% if soconfig.get_settings('contentbg') !='' %}*/
/* 			background-image: url("image/{{soconfig.get_settings('contentbg') }} ");*/
/* 		{% endif %}*/
/* 		background-repeat:{{ soconfig.get_settings('content_bg_mode') is not empty ? soconfig.get_settings('content_bg_mode') : 'no-repeat' }} ;*/
/* 		background-attachment:{{ soconfig.get_settings('content_attachment') is not empty ? soconfig.get_settings('content_attachment') : 'inherit' }} ;*/
/* 		background-position:top center; */
/* 	}*/
/* 	</style>*/
/* {% endif %} 	*/
/* */
/* </head>*/
/* {# =========== Add class Body ==============#}*/
/* */
/* 	{% set layoutbox =  url_layoutbox is not empty  ? url_layoutbox : soconfig.get_settings('layoutstyle') %}*/
/* 	{% set pattern  =  url_pattern is not empty    ? url_pattern : soconfig.get_settings('pattern') %}*/
/* */
/* */
/* 	{% set cls_body = class ~ ' ' %}*/
/* 	{% set cls_body = cls_body ~ direction %}*/
/* 	{% set cls_body = cls_body ~ ' layout-'~soconfig.get_settings('typelayout')%}*/
/* {% if layoutbox!='full' and pattern !='none' and soconfig.get_settings('contentbg') is empty %}*/
/* 	{% set cls_body = cls_body ~ ' pattern-'~pattern%}*/
/* {% endif %} */
/* */
/* 	{% set cls_wrapper = 'wrapper-'~layoutbox%}*/
/* 	{% set cls_wrapper = cls_wrapper ~ ' banners-effect-'~soconfig.get_settings('type_banner')%}*/
/* */
/* 	*/
/* <body class="{{cls_body}}">*/
/* <div id="wrapper" class="{{cls_wrapper}}">  */
/*  */
/* {# =========== Show Preloader ==============#}*/
/* {% if soconfig.get_settings('preloader')%}*/
/* 	{% include theme_directory~'/template/soconfig/preloader.twig' with {preloader: soconfig.get_settings('preloader_animation')} %}*/
/* {% endif %}*/
/* */
/* {# =========== Show Header==============#}*/
/* {% if soconfig.get_settings('typeheader') =='1'%}*/
/* 	{% include theme_directory~'/template/header/header1.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='2'%}*/
/* 	{% include theme_directory~'/template/header/header2.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% else%}	*/
/* 	<style>*/
/* 		.alert-primary .alert-link {color: #002752;}*/
/* 		.alert-link {font-weight: 700;text-decoration: none;}*/
/* 		.alert-link:hover{text-decoration: underline;}*/
/* 		.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;*/
/* 		}*/
/* 	</style>*/
/* 	<div class="alert alert-primary">*/
/* 			Go to admin, find Extensions >>  <a class="alert-link" href="admin/index.php?route=marketplace/modification"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* <div id="socialLogin"></div>*/
/* */
