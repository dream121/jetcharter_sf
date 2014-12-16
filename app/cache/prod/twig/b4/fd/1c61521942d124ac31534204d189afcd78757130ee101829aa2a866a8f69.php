<?php

/* JetChartersAppBundle:Operator/Aircraft:show.html.twig */
class __TwigTemplate_b4fd1c61521942d124ac31534204d189afcd78757130ee101829aa2a866a8f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>CharterAircraft</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Operatorid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "operatorID"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "type"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Seats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "seats"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tailnumber</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tailNumber"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "location"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Availablefrom</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "availableFrom"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Availableto</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "availableTo"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photos</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "photos"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "status"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Video</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "video"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hourlyrate</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "hourlyRate"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hourlyrate2</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "hourlyRate2"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Airambulance</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "airAmbulance"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hidetailnumber</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "hideTailNumber"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Realtailnumber</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "realTailNumber"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("operator_aircraft");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_aircraft_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Operator/Aircraft:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 69,  100 => 57,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 123,  175 => 67,  126 => 52,  96 => 55,  184 => 36,  110 => 25,  83 => 133,  23 => 1,  81 => 34,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 31,  74 => 30,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 39,  114 => 71,  90 => 2,  77 => 111,  65 => 14,  37 => 14,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 105,  165 => 82,  161 => 81,  157 => 79,  155 => 100,  153 => 36,  124 => 57,  113 => 26,  53 => 18,  145 => 75,  139 => 33,  58 => 14,  120 => 31,  97 => 36,  52 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 36,  111 => 24,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 72,  131 => 31,  119 => 55,  108 => 31,  102 => 46,  71 => 16,  67 => 26,  63 => 25,  59 => 56,  47 => 7,  38 => 6,  94 => 26,  89 => 34,  85 => 33,  79 => 131,  75 => 18,  68 => 22,  56 => 16,  50 => 18,  29 => 3,  87 => 1,  72 => 23,  55 => 11,  21 => 1,  26 => 29,  98 => 45,  93 => 35,  88 => 38,  78 => 30,  46 => 14,  27 => 1,  40 => 15,  44 => 14,  35 => 8,  31 => 4,  43 => 7,  41 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 39,  156 => 60,  151 => 74,  142 => 90,  138 => 89,  136 => 40,  123 => 58,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 58,  69 => 15,  66 => 14,  62 => 57,  49 => 9,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 90,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 76,  147 => 35,  144 => 70,  141 => 73,  133 => 32,  130 => 62,  125 => 44,  122 => 56,  116 => 54,  112 => 49,  109 => 50,  106 => 68,  103 => 67,  99 => 54,  95 => 42,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 20,  60 => 22,  57 => 10,  54 => 9,  51 => 18,  48 => 45,  45 => 26,  42 => 7,  39 => 10,  36 => 6,  33 => 3,  30 => 3,);
    }
}
