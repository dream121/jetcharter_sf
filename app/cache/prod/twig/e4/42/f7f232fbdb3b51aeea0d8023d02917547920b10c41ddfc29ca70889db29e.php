<?php

/* JetChartersPublicBundle:Airport:airportList.html.twig */
class __TwigTemplate_e442f7f232fbdb3b51aeea0d8023d02917547920b10c41ddfc29ca70889db29e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersPublicBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JetChartersPublicBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "location"), "method")), "html", null, true);
        echo " Airports Information and ";
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "location"), "method")), "html", null, true);
        echo " Airport Code";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"intro-02\">
\t<div class=\"container\">
\t\t<div class=\"airplane-details row ie-fix\">
\t\t\t<header class=\"headline airport-bottom-margin\"><h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "location"), "method")), "html", null, true);
        echo " Airport Information</h2></header>
\t\t\t<div class=\"info airport-paragraph\">
\t\t\t\t<p>Jet Charter Media knows you need more than just the airport name. We have everything from the Airport Code, to Airport Hotels that are nearby, and even Maps of Alabama Airports. Choose the airport you want more info on; it's our service to you. </p>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"pull-left col-md-6\">
\t\t\t\t\t<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspaing=\"0\" class=\"airport-table\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th width=\"25%\">City</th>
\t\t\t\t\t\t\t<th width=\"50%\">Airport</th>
\t\t\t\t\t\t\t<th width=\"25%\">Airport Code</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 21
        $context["halfCountAirport"] = twig_round((twig_length_filter($this->env, (isset($context["airports"]) ? $context["airports"] : null)) / 2));
        // line 22
        echo "\t\t\t\t\t\t";
        $context["count"] = 0;
        // line 23
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["airports"]) ? $context["airports"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["airport"]) {
            // line 24
            echo "\t\t\t\t\t\t";
            $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
            // line 25
            echo "\t\t\t\t\t    <tr>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "city"))), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_airport_detail", array("location" => $this->env->getExtension('core_locale')->formatCleanurl($this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "state")), "slug" => $this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "name")), "html", null, true);
            echo " Airport</a></td>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "airportcode"), "html", null, true);
            echo "</td>
\t\t\t\t\t    </tr>
\t\t\t\t\t\t";
            // line 30
            if (((isset($context["count"]) ? $context["count"] : null) == (isset($context["halfCountAirport"]) ? $context["halfCountAirport"] : null))) {
                // line 31
                echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-left col-md-6\">
\t\t\t\t\t<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspaing=\"0\" class=\"airport-table\">
\t\t\t\t\t    <tr>
\t\t\t\t\t\t\t<th width=\"25%\">City</th>
\t\t\t\t\t\t\t<th width=\"50%\">Airport</th>
\t\t\t\t\t\t\t<th width=\"25%\">Airport Code</th>
\t\t\t\t\t    </tr>
\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t    </table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>&nbsp;</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Airport:airportList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 135,  277 => 117,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 155,  344 => 140,  323 => 129,  320 => 128,  316 => 126,  307 => 123,  304 => 128,  296 => 120,  286 => 117,  279 => 115,  250 => 98,  205 => 91,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 266,  475 => 262,  425 => 245,  422 => 244,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 95,  192 => 88,  150 => 68,  211 => 94,  197 => 107,  20 => 1,  34 => 7,  104 => 55,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 256,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 248,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 242,  340 => 94,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 127,  297 => 77,  291 => 120,  288 => 119,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 103,  239 => 123,  236 => 96,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 67,  126 => 46,  96 => 30,  184 => 78,  110 => 25,  83 => 41,  23 => 4,  81 => 27,  174 => 82,  84 => 26,  70 => 28,  152 => 65,  148 => 31,  74 => 25,  160 => 67,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 105,  249 => 129,  234 => 58,  188 => 87,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 47,  114 => 42,  90 => 29,  77 => 26,  65 => 14,  37 => 7,  237 => 102,  228 => 97,  225 => 44,  223 => 95,  215 => 134,  207 => 109,  198 => 41,  180 => 85,  167 => 92,  165 => 73,  161 => 81,  157 => 66,  155 => 100,  153 => 36,  124 => 56,  113 => 26,  53 => 18,  145 => 82,  139 => 65,  58 => 18,  120 => 44,  97 => 59,  52 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 159,  368 => 112,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 125,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 116,  278 => 86,  268 => 106,  264 => 142,  258 => 101,  252 => 99,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 80,  132 => 58,  128 => 36,  111 => 67,  107 => 83,  61 => 21,  273 => 96,  269 => 94,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 101,  230 => 82,  227 => 81,  224 => 71,  221 => 115,  219 => 92,  217 => 135,  208 => 90,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 60,  119 => 53,  108 => 56,  102 => 46,  71 => 24,  67 => 20,  63 => 22,  59 => 56,  47 => 14,  38 => 5,  94 => 31,  89 => 21,  85 => 34,  79 => 31,  75 => 23,  68 => 22,  56 => 16,  50 => 15,  29 => 3,  87 => 28,  72 => 21,  55 => 14,  21 => 1,  26 => 12,  98 => 48,  93 => 29,  88 => 60,  78 => 16,  46 => 9,  27 => 5,  40 => 11,  44 => 8,  35 => 7,  31 => 9,  43 => 12,  41 => 6,  28 => 4,  201 => 88,  196 => 90,  183 => 82,  171 => 93,  166 => 74,  163 => 91,  158 => 69,  156 => 60,  151 => 74,  142 => 90,  138 => 62,  136 => 40,  123 => 58,  121 => 97,  117 => 69,  115 => 43,  105 => 50,  101 => 60,  91 => 44,  69 => 20,  66 => 23,  62 => 17,  49 => 17,  24 => 1,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 89,  199 => 67,  193 => 102,  189 => 83,  187 => 79,  182 => 98,  176 => 84,  173 => 76,  168 => 75,  164 => 73,  162 => 72,  154 => 69,  149 => 64,  147 => 35,  144 => 70,  141 => 70,  133 => 61,  130 => 48,  125 => 44,  122 => 43,  116 => 52,  112 => 42,  109 => 66,  106 => 41,  103 => 28,  99 => 54,  95 => 42,  92 => 30,  86 => 42,  82 => 18,  80 => 17,  73 => 33,  64 => 20,  60 => 22,  57 => 15,  54 => 16,  51 => 15,  48 => 10,  45 => 14,  42 => 6,  39 => 5,  36 => 6,  33 => 6,  30 => 3,);
    }
}
