<?php

/* JetChartersAppBundle:Form:form_datePicker.html.twig */
class __TwigTemplate_f024697d8cf1fd68bcbba6b42fe1c43f93a315c61899adc5fd1dc3427c86ef9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datePicker_widget' => array($this, 'block_datePicker_widget'),
            'widget_datetime_attributes' => array($this, 'block_widget_datetime_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('datePicker_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('widget_datetime_attributes', $context, $blocks);
    }

    // line 2
    public function block_datePicker_widget($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "\t";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 5
        echo "\t";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control"))));
        // line 6
        echo "\t";
        $context["defaultClass"] = "";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 8
            if (((isset($context["attrname"]) ? $context["attrname"] : null) == "class")) {
                // line 9
                echo "\t\t    ";
                $context["defaultClass"] = (isset($context["attrvalue"]) ? $context["attrvalue"] : null);
                // line 10
                echo "\t    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        $context["value"] = twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "m/d/Y g:ia");
        // line 14
        echo "\t
\t";
        // line 15
        $context["dateTimeArray"] = twig_split_filter((isset($context["value"]) ? $context["value"] : null), " ");
        // line 16
        echo "\t<div id=\"datetimecal\">
\t\t<div class=\"col-sm-4\">
\t\t\t  <input placeholder=\"";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("mm/dd/yyyy", array(), "messages");
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateTimeArray"]) ? $context["dateTimeArray"] : null), 0, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo " class=\"date ";
        echo twig_escape_filter($this->env, (isset($context["defaultClass"]) ? $context["defaultClass"] : null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_caldate\">
\t\t</div>
\t\t<div class=\"col-sm-2\">
\t\t\t<input placeholder=\"";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("hour", array(), "messages");
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dateTimeArray"]) ? $context["dateTimeArray"] : null), 1, array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo "  class=\"time ";
        echo twig_escape_filter($this->env, (isset($context["defaultClass"]) ? $context["defaultClass"] : null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_caltime\">
\t\t</div>
\t\t<div style=\"display:none;\">
\t\t\t<input type=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\"  ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo " ";
        $this->displayBlock("widget_datetime_attributes", $context, $blocks);
        echo " >
\t\t</div>
\t</div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_widget_datetime_attributes($context, array $blocks = array())
    {
        // line 31
        ob_start();
        // line 32
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        // line 33
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        // line 34
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 35
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 37
            echo " ";
            // line 38
            if (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : null), array(0 => "placeholder", 1 => "title"))) {
                // line 39
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\"
\t";
            } elseif (((isset($context["attrname"]) ? $context["attrname"] : null) == "class")) {
            } elseif (((isset($context["attrvalue"]) ? $context["attrvalue"] : null) === true)) {
                // line 43
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "\"";
            } elseif ((!((isset($context["attrvalue"]) ? $context["attrvalue"] : null) === false))) {
                // line 45
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Form:form_datePicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 75,  175 => 67,  126 => 52,  96 => 27,  184 => 36,  110 => 44,  83 => 133,  23 => 1,  81 => 22,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 58,  74 => 110,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 35,  172 => 117,  146 => 19,  137 => 66,  134 => 104,  114 => 9,  90 => 2,  77 => 111,  65 => 14,  37 => 14,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 43,  165 => 63,  161 => 25,  157 => 38,  155 => 37,  153 => 94,  124 => 57,  113 => 54,  53 => 10,  145 => 42,  139 => 33,  58 => 14,  120 => 51,  97 => 47,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 30,  111 => 24,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 15,  131 => 31,  119 => 11,  108 => 31,  102 => 46,  71 => 16,  67 => 74,  63 => 25,  59 => 56,  47 => 7,  38 => 6,  94 => 26,  89 => 32,  85 => 30,  79 => 131,  75 => 18,  68 => 17,  56 => 11,  50 => 18,  29 => 30,  87 => 1,  72 => 83,  55 => 13,  21 => 1,  26 => 29,  98 => 45,  93 => 21,  88 => 24,  78 => 30,  46 => 25,  27 => 1,  40 => 15,  44 => 14,  35 => 8,  31 => 3,  43 => 7,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 63,  158 => 33,  156 => 60,  151 => 36,  142 => 57,  138 => 16,  136 => 56,  123 => 58,  121 => 97,  117 => 46,  115 => 43,  105 => 47,  101 => 40,  91 => 26,  69 => 15,  66 => 14,  62 => 57,  49 => 9,  24 => 2,  32 => 7,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 90,  173 => 45,  168 => 115,  164 => 26,  162 => 59,  154 => 110,  149 => 20,  147 => 35,  144 => 70,  141 => 60,  133 => 32,  130 => 53,  125 => 44,  122 => 48,  116 => 10,  112 => 49,  109 => 48,  106 => 50,  103 => 53,  99 => 54,  95 => 4,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 13,  60 => 13,  57 => 10,  54 => 9,  51 => 18,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  33 => 2,  30 => 1,);
    }
}
