<?php

/* so-oneshop/template/common/search.twig */
class __TwigTemplate_b5549c7cf7e0fe211dc2e5c92fb37d3e7c354e4f3e93148c4a56c5cbf2a39af5 extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "so-oneshop/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg" />*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
