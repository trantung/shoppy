<?php

/* extension/soconfig/soconfig.twig */
class __TwigTemplate_92d5b842e2e72f735974b89198368052f454d06349d3e950fb5d93e4ed55673f extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 

<div id=\"content\">
    <div class=\"page-header\" style=\"border:none\">    </div>

    <div id=\"theme-options\" class=\"container-fluid\">
        ";
        // line 7
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            echo " 
        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 8
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " 
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 11
        echo " 
\t\t
        ";
        // line 13
        if (((isset($context["success"]) ? $context["success"] : null) && (isset($context["success"]) ? $context["success"] : null))) {
            echo " 
        <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 14
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 17
        echo " 

        <div class=\"panel \">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"btn-group heading-store\">View Store : </div>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t";
            // line 27
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn  dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo " <span class=\"fa fa-angle-down\"></span></a>
\t\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t\t\t<span class=\"label label-primary\">Version 1.0.1</span>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu store_dropdown\">
\t\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t\t";
            // line 34
            $context["store_active"] = ((($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) ? ("active") : (""));
            // line 35
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["store"], "status", array())) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t<li class=\"";
                echo (isset($context["store_active"]) ? $context["store_active"] : null);
                echo "\" ><a href=\"";
                echo (isset($context["base_href"]) ? $context["base_href"] : null);
                echo "&store_id=";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" >";
                echo $this->getAttribute($context["store"], "name", array());
                echo " </a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t   </div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a onclick=\"buttonApply();\" data-toggle=\"tooltip\" title=\"Apply Changes\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></a>
\t\t\t\t\t\t\t<a href=\"";
        // line 47
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " \" class=\"btn btn-default\"><i class=\"fa fa-close\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form name=\"settingsform\" action=\"";
        // line 55
        echo (isset($context["action"]) ? $context["action"] : null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-optimus\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"tab-content tab-content-main\">
\t\t\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t";
            // line 59
            $context["store_active"] = ((($this->getAttribute($context["store"], "store_id", array()) == 0)) ? ("active") : (""));
            // line 60
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["active_store"]) ? $context["active_store"] : null))) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<div class=\"clearfix tab-pane-demo\" id=\"tab-store\" data-sticky_parent>
\t\t\t\t\t\t\t\t\t\t";
                // line 62
                $this->loadTemplate("extension/soconfig/options_stores.twig", "extension/soconfig/soconfig.twig", 62)->display(array_merge($context, array("store" => $context["store"])));
                // line 63
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "
\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo " 
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input name=\"buttonForm\" type=\"hidden\"  value=\"\" />
\t\t\t\t\t\t<input name=\"buttonColor\" type=\"hidden\"  value=\"\" />
\t\t\t\t\t</form>


\t\t\t\t</div>
\t\t\t</div>
        </div>

    </div>

</div>



<script type=\"text/javascript\"><!--
\$(document).ready(function(){
\t\t/*** Change ColorPicker ***/
\t\tChangeColor(\"#theme_color\");
\t\tChangeColor(\"#theme_bgcolor\");
\t\t
\t\t\$('#tab-general__headertype').on('click', '.type', function () {
\t\t   \$('#tab-general__headertype .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});
\t\t\$('#tab-general__footertype').on('click', '.type', function () {
\t\t   \$('#tab-general__footertype .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});
\t\t\$('#tab-general__layouttype').on('click', '.type', function () {
\t\t    \$('#tab-general__layouttype .type').removeClass(\"active\");
\t\t    \$(this).addClass(\"active\");
\t\t\t\$keylayout = \$(this).data(\"keylayout\");
\t\t\t\$keyheader = \$(this).data(\"keyheader\");
\t\t\t\$keyfooter = \$(this).data(\"keyfooter\");
\t\t\t
\t\t\t\$(\"#tab-general__headertype .group-typeheader\").each(function() {
\t\t\t    \$(this).find(\".type\").removeClass(\"active\");
\t\t\t\t\$(this).find(\"input:radio\").prop(\"checked\", false);
\t\t\t    if( \$keyheader ==  \$(this).find(\".type\").data(\"typeheader\")) {
\t\t\t\t\t\$(this).find(\".type\").addClass(\"active\");
\t\t\t\t\t\$(this).find(\".type\").prev().prop(\"checked\", true);
\t\t\t    }
\t\t\t});
\t\t\t\$(\"#tab-general__footertype .group-typeheader\").each(function() {
\t\t\t    \$(this).find(\".type\").removeClass(\"active\");
\t\t\t\t\$(this).find(\"input:radio\").prop(\"checked\", false);
\t\t\t\t
\t\t\t    if(\$keyfooter ==  \$(this).find(\".type\").data(\"typefooter\")) {
\t\t\t\t\t\$(this).find(\".type\").addClass(\"active\");
\t\t\t\t\t\$(this).find(\".type\").prev().prop(\"checked\", true);
\t\t\t    }
\t\t\t});
\t\t\t
\t\t\tvar \$currentcolor = \$(\"#select_color option\").filter(\":selected\").val();
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/soconfig/ColorScheme&user_token=";
        // line 126
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&keylayout='+\$keylayout ,
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$.map(json, function(item) {
\t\t\t\t\t\tvar selectList = \"<select name='numbers'>\";
\t\t\t\t\t\t\$.each(json, function (index, value) {
\t\t\t\t\t\t\t(\$currentcolor == value['name']) ? \$current = 'selected' : \$current=''; 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tselectList += \"<option \"+\$current+\">\" + value['name'] + \"</option>\";
\t\t\t\t\t\t});
\t\t\t\t\t\tselectList += \"</select>\";
\t\t\t\t\t\t\$select_id = \$('#select_color select');
\t\t\t\t\t\t\$select_id.html(selectList);
\t\t\t\t\t});
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t
\t\t});
\t\t
\t
\t\t\$('#tab-general__bannereffect').on('click', '.type', function () {
\t\t   \$('#tab-general__bannereffect .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});
\t\t
\t\t
\t\t/*Button Radio On/Off*/
\t\tBtnToggle(\".field-preloader\");
\t\tBtnToggle(\".field-toppanel_status\");
\t\tBtnToggle(\".field-phone_status\");
\t\tBtnToggle(\".field-welcome_message_status\");
\t\tBtnToggle(\".field-imgpayment_status\");
\t\tBtnToggle(\".field-product_enablezoom\");
   \t\tBtnToggle(\".field-product_page_button\");
    \tBtnToggle(\".field-related_status\");
    \tBtnToggle(\".field-social_fb_status\");
    \tBtnToggle(\".field-social_twitter_status\");
    \tBtnToggle(\".field-social_custom_status\");
    \tBtnToggle(\".field-layoutstyle\");
\t
});


function buttonApply() {document.settingsform.buttonForm.value='apply'; \$('#form-optimus').submit();}
function buttonApplyColor() {document.settingsform.buttonForm.value='color';\$('#form-optimus').submit();}
function installMegamenu() { document.settingsform.buttonForm.value='install-data'; \$('#form-optimus').submit();}

function BtnToggle(class_name) {
\tvar \$checkedValue = \$(class_name).filter(':checked').val();
\tif (\$checkedValue == 1) \$('#tab-'+\$(class_name).attr('class')).show();
\telse \$('#tab-'+\$(class_name).attr('class')).hide();
\t
\t\$(class_name).change(function(){
\t\tval = \$(this).val();
\t\tif(val ==1 ) {\$('#tab-'+\$(this).attr('class')).show(); }
\t\telse{\$('#tab-'+\$(this).attr('class')).hide();} 
\t});
}

function ChangeColor(class_name) {
\t\$(class_name).ColorPicker({
\t\t
\t\tcolor: \$(class_name).val(),
\t\tonShow: function (colpkr) {
\t\t\t\$(colpkr).fadeIn(500);
\t\t\treturn false;
\t\t},
\t\tonHide: function (colpkr) {
\t\t\t\$(colpkr).fadeOut(500);
\t\t\treturn false;
\t\t},
\t\tonChange: function (hsb, hex, rgb) {
\t\t\t\$(class_name).css('backgroundColor', '#' + hex);
\t\t\t\$(class_name).val('#' + hex);
\t\t}
\t});
}

//--></script>

";
        // line 210
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/soconfig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 210,  259 => 126,  197 => 66,  182 => 65,  178 => 63,  176 => 62,  173 => 61,  170 => 60,  168 => 59,  149 => 58,  143 => 55,  130 => 47,  114 => 38,  102 => 36,  99 => 35,  97 => 34,  91 => 33,  81 => 30,  75 => 28,  73 => 27,  67 => 26,  56 => 17,  49 => 14,  45 => 13,  41 => 11,  34 => 8,  30 => 7,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }} */
/* */
/* <div id="content">*/
/*     <div class="page-header" style="border:none">    </div>*/
/* */
/*     <div id="theme-options" class="container-fluid">*/
/*         {% if error.warning %} */
/*         <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }} */
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %} */
/* 		*/
/*         {% if success  and  success %} */
/*         <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }} */
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %} */
/* */
/*         <div class="panel ">*/
/* 			<div class="content">*/
/* 				<div class="panel-heading">*/
/* 					*/
/* 					<div class="col-sm-6">*/
/* 						<div class="btn-group heading-store">View Store : </div>*/
/* 						<div class="btn-group">*/
/* 							{% for store  in stores %}  */
/* 								{% if store.store_id == active_store %}*/
/* 									<a class="btn  dropdown-toggle" data-toggle="dropdown" href="#">{{ store.name }} <span class="fa fa-angle-down"></span></a>*/
/* 								{% endif %}*/
/* 							{% endfor %} */
/* 							<span class="label label-primary">Version 1.0.1</span>*/
/* 							<ul class="dropdown-menu store_dropdown">*/
/* 								{% for store  in stores %}  */
/* 									{% set store_active = store.store_id == active_store  ? 'active' :  '' %}*/
/* 									{% if store.status  %}*/
/* 									<li class="{{ store_active }}" ><a href="{{base_href}}&store_id={{ store.store_id }}" >{{ store.name }} </a></li>*/
/* 									{% endif %}*/
/* 								{% endfor %} */
/* 							</ul>*/
/* 					   </div>*/
/* */
/* 					</div>*/
/* 					*/
/* 					<div class="col-sm-6">*/
/* 						<div class="pull-right">*/
/* 							<a onclick="buttonApply();" data-toggle="tooltip" title="Apply Changes" class="btn btn-success"><i class="fa fa-save"></i></a>*/
/* 							<a href="{{ cancel }} " data-toggle="tooltip" title="{{ button_cancel }} " class="btn btn-default"><i class="fa fa-close"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/*             </div>*/
/*             */
/* 			<div class="content">*/
/* 				<div class="panel-body">*/
/* 					<form name="settingsform" action="{{ action }} " method="post" enctype="multipart/form-data" id="form-optimus" class="form-horizontal">*/
/* 						<div class="form-horizontal">*/
/* 							<div class="tab-content tab-content-main">*/
/* 								{% for store in stores %}  */
/* 								{% set store_active = (store.store_id == 0 ? 'active' :  '') %}*/
/* 									{% if store.store_id == active_store %}*/
/* 									<div class="clearfix tab-pane-demo" id="tab-store" data-sticky_parent>*/
/* 										{% include 'extension/soconfig/options_stores.twig' with {store: store} %}*/
/* 									</div>*/
/* 									{% endif %}*/
/* */
/* 								{% endfor %} */
/* 							</div>*/
/* */
/* 						</div>*/
/* 						<input name="buttonForm" type="hidden"  value="" />*/
/* 						<input name="buttonColor" type="hidden"  value="" />*/
/* 					</form>*/
/* */
/* */
/* 				</div>*/
/* 			</div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* <script type="text/javascript"><!--*/
/* $(document).ready(function(){*/
/* 		/*** Change ColorPicker ***//* */
/* 		ChangeColor("#theme_color");*/
/* 		ChangeColor("#theme_bgcolor");*/
/* 		*/
/* 		$('#tab-general__headertype').on('click', '.type', function () {*/
/* 		   $('#tab-general__headertype .type').removeClass("active");*/
/* 		   $(this).addClass("active");*/
/* 		});*/
/* 		$('#tab-general__footertype').on('click', '.type', function () {*/
/* 		   $('#tab-general__footertype .type').removeClass("active");*/
/* 		   $(this).addClass("active");*/
/* 		});*/
/* 		$('#tab-general__layouttype').on('click', '.type', function () {*/
/* 		    $('#tab-general__layouttype .type').removeClass("active");*/
/* 		    $(this).addClass("active");*/
/* 			$keylayout = $(this).data("keylayout");*/
/* 			$keyheader = $(this).data("keyheader");*/
/* 			$keyfooter = $(this).data("keyfooter");*/
/* 			*/
/* 			$("#tab-general__headertype .group-typeheader").each(function() {*/
/* 			    $(this).find(".type").removeClass("active");*/
/* 				$(this).find("input:radio").prop("checked", false);*/
/* 			    if( $keyheader ==  $(this).find(".type").data("typeheader")) {*/
/* 					$(this).find(".type").addClass("active");*/
/* 					$(this).find(".type").prev().prop("checked", true);*/
/* 			    }*/
/* 			});*/
/* 			$("#tab-general__footertype .group-typeheader").each(function() {*/
/* 			    $(this).find(".type").removeClass("active");*/
/* 				$(this).find("input:radio").prop("checked", false);*/
/* 				*/
/* 			    if($keyfooter ==  $(this).find(".type").data("typefooter")) {*/
/* 					$(this).find(".type").addClass("active");*/
/* 					$(this).find(".type").prev().prop("checked", true);*/
/* 			    }*/
/* 			});*/
/* 			*/
/* 			var $currentcolor = $("#select_color option").filter(":selected").val();*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=extension/module/soconfig/ColorScheme&user_token={{ user_token }}&keylayout='+$keylayout ,*/
/* 				dataType: 'json',*/
/* 				success: function(json) {*/
/* 					$.map(json, function(item) {*/
/* 						var selectList = "<select name='numbers'>";*/
/* 						$.each(json, function (index, value) {*/
/* 							($currentcolor == value['name']) ? $current = 'selected' : $current=''; */
/* 							*/
/* 							selectList += "<option "+$current+">" + value['name'] + "</option>";*/
/* 						});*/
/* 						selectList += "</select>";*/
/* 						$select_id = $('#select_color select');*/
/* 						$select_id.html(selectList);*/
/* 					});*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			*/
/* 		});*/
/* 		*/
/* 	*/
/* 		$('#tab-general__bannereffect').on('click', '.type', function () {*/
/* 		   $('#tab-general__bannereffect .type').removeClass("active");*/
/* 		   $(this).addClass("active");*/
/* 		});*/
/* 		*/
/* 		*/
/* 		/*Button Radio On/Off*//* */
/* 		BtnToggle(".field-preloader");*/
/* 		BtnToggle(".field-toppanel_status");*/
/* 		BtnToggle(".field-phone_status");*/
/* 		BtnToggle(".field-welcome_message_status");*/
/* 		BtnToggle(".field-imgpayment_status");*/
/* 		BtnToggle(".field-product_enablezoom");*/
/*    		BtnToggle(".field-product_page_button");*/
/*     	BtnToggle(".field-related_status");*/
/*     	BtnToggle(".field-social_fb_status");*/
/*     	BtnToggle(".field-social_twitter_status");*/
/*     	BtnToggle(".field-social_custom_status");*/
/*     	BtnToggle(".field-layoutstyle");*/
/* 	*/
/* });*/
/* */
/* */
/* function buttonApply() {document.settingsform.buttonForm.value='apply'; $('#form-optimus').submit();}*/
/* function buttonApplyColor() {document.settingsform.buttonForm.value='color';$('#form-optimus').submit();}*/
/* function installMegamenu() { document.settingsform.buttonForm.value='install-data'; $('#form-optimus').submit();}*/
/* */
/* function BtnToggle(class_name) {*/
/* 	var $checkedValue = $(class_name).filter(':checked').val();*/
/* 	if ($checkedValue == 1) $('#tab-'+$(class_name).attr('class')).show();*/
/* 	else $('#tab-'+$(class_name).attr('class')).hide();*/
/* 	*/
/* 	$(class_name).change(function(){*/
/* 		val = $(this).val();*/
/* 		if(val ==1 ) {$('#tab-'+$(this).attr('class')).show(); }*/
/* 		else{$('#tab-'+$(this).attr('class')).hide();} */
/* 	});*/
/* }*/
/* */
/* function ChangeColor(class_name) {*/
/* 	$(class_name).ColorPicker({*/
/* 		*/
/* 		color: $(class_name).val(),*/
/* 		onShow: function (colpkr) {*/
/* 			$(colpkr).fadeIn(500);*/
/* 			return false;*/
/* 		},*/
/* 		onHide: function (colpkr) {*/
/* 			$(colpkr).fadeOut(500);*/
/* 			return false;*/
/* 		},*/
/* 		onChange: function (hsb, hex, rgb) {*/
/* 			$(class_name).css('backgroundColor', '#' + hex);*/
/* 			$(class_name).val('#' + hex);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* //--></script>*/
/* */
/* {{ footer }} */
