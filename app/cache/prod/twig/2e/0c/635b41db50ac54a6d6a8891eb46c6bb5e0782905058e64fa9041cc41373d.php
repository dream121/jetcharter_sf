<?php

/* JetChartersAppBundle::cp_base.html.twig */
class __TwigTemplate_2e0c635b41db50ac54a6d6a8891eb46c6bb5e0782905058e64fa9041cc41373d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_styles' => array($this, 'block_page_styles'),
            'javascripts' => array($this, 'block_javascripts'),
            'additionalJavascripts' => array($this, 'block_additionalJavascripts'),
            'stylesheetsDateTimeWidget' => array($this, 'block_stylesheetsDateTimeWidget'),
            'javascriptsDateTimeWidget' => array($this, 'block_javascriptsDateTimeWidget'),
            'top_navbar' => array($this, 'block_top_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>JetCharters Control Panel</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- bootstrap -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/bootstrap/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/bootstrap/bootstrap-overrides.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    <!-- libraries -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/lib/jquery-ui-1.10.2.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/lib/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/select2.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />

    <!-- global styles -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/layout.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/elements.css"), "html", null, true);
        echo "\" />

    <!-- page specific styles -->
    ";
        // line 23
        $this->displayBlock('page_styles', $context, $blocks);
        // line 24
        echo "
    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!-- lato font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('additionalJavascripts', $context, $blocks);
        // line 47
        echo "

    ";
        // line 49
        $this->displayBlock('stylesheetsDateTimeWidget', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('javascriptsDateTimeWidget', $context, $blocks);
        // line 89
        echo "</head>
<body>

<!-- navbar -->
    ";
        // line 93
        $this->displayBlock('top_navbar', $context, $blocks);
        // line 94
        echo "<!-- end navbar -->

<!-- sidebar -->
    ";
        // line 97
        $this->displayBlock('sidebar', $context, $blocks);
        // line 98
        echo "<!-- end sidebar -->

\t<!-- main container -->
    <div class=\"content\">
\t<div class=\"container-fluid\">
\t\t";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 104
            echo "\t\t    <div class=\"alert alert-success\" style=\"margin-top:15px;\">
\t\t\t<i class=\"icon-ok-sign\"></i>";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 109
            echo "\t\t    <div class=\"alert alert-error\" style=\"margin-top:15px;\">
\t\t\t<i class=\"icon-remove-sign\"></i>";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t</div>
        ";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 115
        echo "    </div>

    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/js/global/nav.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</body>
</html>";
    }

    // line 23
    public function block_page_styles($context, array $blocks = array())
    {
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3679ebe_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe_0") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe_jquery.min_1.js");
            // line 42
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "3679ebe_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe_1") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe_bootstrap.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "3679ebe_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe_2") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe_jquery-ui-1.10.2.custom.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "3679ebe_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe_3") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe_theme_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "3679ebe"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 44
        echo "    ";
    }

    // line 46
    public function block_additionalJavascripts($context, array $blocks = array())
    {
    }

    // line 49
    public function block_stylesheetsDateTimeWidget($context, array $blocks = array())
    {
        // line 50
        echo "\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://jonthornton.github.io/jquery-timepicker/jquery.timepicker.css\" />
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/jonthornton-jquery-datepair-4f1f3bc/lib/bootstrap-datepicker.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 54
    public function block_javascriptsDateTimeWidget($context, array $blocks = array())
    {
        // line 55
        echo "
\t<script src=\"http://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js\"></script>
\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/jonthornton-jquery-datepair-4f1f3bc/lib/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/jonthornton-jquery-datepair-4f1f3bc/lib/pikaday.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/jonthornton-jquery-datepair-4f1f3bc/jquery.datepair.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t    \$( document ).ready(function() {
\t\t    if (document.getElementById(\"datetimecal\")) {
\t\t\t    \$('#datetimecal .time').timepicker({
\t\t\t\t'showDuration': false,
\t\t\t\t'timeFormat': 'g:ia'
\t\t\t    });
\t\t\t    \$('#datetimecal .date').datepicker({
\t\t\t\t'format': 'mm/dd/yyyy',
\t\t\t\t'autoclose': true
\t\t\t    });
\t\t\t    \$(\"#datetimecal .date\").bind(\"change paste keyup\", function() {
\t\t\t\tvar id = this.id;
\t\t\t\tvar timeFieldId = id.replace(\"_caldate\", \"_caltime\");
\t\t\t\tvar OrignalDateFieldId = id.replace(\"_caldate\", \"\");
\t\t\t\t\$('#'+OrignalDateFieldId).val(this.value+\" \"+\$('#'+timeFieldId).val());
\t\t\t    });
\t\t\t    \$(\"#datetimecal .time\").bind(\"change paste keyup\", function() {
\t\t\t\tvar id = this.id;
\t\t\t\tvar dateFieldId = id.replace(\"_caltime\", \"_caldate\");
\t\t\t\tvar OrignalDateFieldId = id.replace(\"_caltime\", \"\");
\t\t\t\t\$('#'+OrignalDateFieldId).val(\$('#'+dateFieldId).val()+\" \"+\$(\"#\"+this.id).val());
\t\t\t    });
\t\t\t    \$('#paired').datepair();
\t\t      }

\t    });
\t</script>
    ";
    }

    // line 93
    public function block_top_navbar($context, array $blocks = array())
    {
    }

    // line 97
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 114
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle::cp_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 105,  134 => 104,  114 => 93,  90 => 35,  77 => 24,  65 => 19,  37 => 9,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 102,  165 => 101,  161 => 99,  157 => 96,  155 => 95,  153 => 94,  124 => 74,  113 => 70,  53 => 16,  145 => 42,  139 => 39,  58 => 12,  120 => 27,  97 => 47,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 72,  108 => 89,  102 => 32,  71 => 19,  67 => 21,  63 => 13,  59 => 16,  47 => 9,  38 => 6,  94 => 28,  89 => 34,  85 => 33,  79 => 18,  75 => 23,  68 => 22,  56 => 16,  50 => 10,  29 => 3,  87 => 25,  72 => 23,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 35,  88 => 6,  78 => 21,  46 => 7,  27 => 1,  40 => 5,  44 => 9,  35 => 5,  31 => 5,  43 => 8,  41 => 10,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 104,  166 => 114,  163 => 113,  158 => 33,  156 => 66,  151 => 109,  142 => 86,  138 => 54,  136 => 56,  123 => 98,  121 => 97,  117 => 44,  115 => 43,  105 => 40,  101 => 49,  91 => 27,  69 => 20,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 42,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 115,  164 => 59,  162 => 59,  154 => 110,  149 => 51,  147 => 43,  144 => 49,  141 => 40,  133 => 80,  130 => 103,  125 => 44,  122 => 43,  116 => 94,  112 => 42,  109 => 34,  106 => 54,  103 => 53,  99 => 31,  95 => 46,  92 => 45,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 7,  45 => 11,  42 => 7,  39 => 6,  36 => 4,  33 => 4,  30 => 3,);
    }
}
