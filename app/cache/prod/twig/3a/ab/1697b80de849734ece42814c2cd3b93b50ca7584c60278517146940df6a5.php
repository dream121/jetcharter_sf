<?php

/* JetChartersPublicBundle::charter-preferences.html.twig */
class __TwigTemplate_3aab1697b80de849734ece42814c2cd3b93b50ca7584c60278517146940df6a5 extends Twig_Template
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
        echo "<div class=\"preference ie-fix\">
    <form action=\"#\">
        <header class=\"title clearfix\">
            <strong>Search Preferences</strong>
            <strong class=\"hidden-xs\">Itinerary Details</strong>
            <a href=\"#\" class=\"close\">close</a>
        </header>
        <div class=\"holder clearfix\">
            <div class=\"two-columns\">
                <div class=\"col-01\">
                    <strong class=\"ttl\">Search Radius</strong>
                    <div class=\"block\">
                        <select title=\"150 Miles\" class=\"form-control\">
                            <option value=\"1\">1</option>
                            <option value=\"1\">2</option>
                            <option value=\"1\">3</option>
                            <option value=\"1\">4</option>
                        </select>
                    </div><!-- / block -->
                    <strong class=\"ttl\">Aircraft By Type</strong>
                    <ul class=\"check-list\">
                        <li>
                            <input id=\"lbl-001\" type=\"checkbox\" checked=\"checked\">
                            <label for=\"lbl-001\">Helicopter</label>
                        </li>
                        <li>
                            <input id=\"lbl-002\" type=\"checkbox\" checked=\"checked\">
                            <label for=\"lbl-002\">Turbo-Prop</label>
                        </li>
                        <li>
                            <input id=\"lbl-003\" type=\"checkbox\" checked=\"checked\">
                            <label for=\"lbl-003\">Light Jets</label>
                        </li>
                        <li>
                            <input id=\"lbl-004\" type=\"checkbox\" checked=\"checked\">
                            <label for=\"lbl-004\">Medium Jets</label>
                        </li>
                        <li>
                            <input id=\"lbl-005\" type=\"checkbox\" checked=\"checked\">
                            <label for=\"lbl-005\">Medium Jets</label>
                        </li>
                        <li>
                            <input id=\"lbl-006\" type=\"checkbox\" checked=\"checked\">
                            <label for=\"lbl-006\">Large Jets</label>
                        </li>
                    </ul><!-- / check-list -->
                </div><!-- / col-01 -->
                <div class=\"col-02\">
                    <strong class=\"ttl\">Sort By</strong>
                    <select title=\"Preferred Aircraft\" class=\"form-control\">
                        <option value=\"1\">1</option>
                        <option value=\"1\">2</option>
                        <option value=\"1\">3</option>
                        <option value=\"1\">4</option>
                    </select>
                    <select title=\"Aircraft Model\" class=\"form-control\">
                        <option value=\"1\">1</option>
                        <option value=\"1\">2</option>
                        <option value=\"1\">3</option>
                        <option value=\"1\">4</option>
                    </select>
                    <select title=\"OperatorUser\" class=\"form-control\">
                        <option value=\"1\">1</option>
                        <option value=\"1\">2</option>
                        <option value=\"1\">3</option>
                        <option value=\"1\">4</option>
                    </select>
                    <select title=\"Safety Rating\" class=\"form-control\" name=\"safety-rating\" id=\"safety-rating\">
                        <option value=\"all\">All</option>
                        <option value=\"argus-platinum\">ARGUS Platinum</option>
                        <option value=\"argus-gold-plus\">ARGUS Gold +</option>
                        <option value=\"argus-gold\">ARGUS Gold</option>
                    </select>
                </div><!-- / col-02 -->
            </div><!-- / two-columns -->
            <div class=\"info-box search-form\">
                <strong class=\"sub-title visible-xs\">intinerary Details</strong>
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <select title=\"Trip Type\" class=\"form-control\" name=\"trip-type\" id=\"trip-type\">
                            <option value=\"round-trip\">Round Trip</option>
                            <option value=\"one-way\">One-Way</option>
                            <option value=\"multi-leg\">Multi-Leg</option>
                        </select>
                    </div>
                    <div class=\"col-xs-6\">
                        <select title=\"Passengers\" class=\"form-control\">
                            ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 89
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : null), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            <option value=\"16\">16+</option>
                        </select>
                    </div>
                </div><!-- / row -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Departure\" />
                    </div>
                </div><!-- / row -->
                <div class=\"row\">
                    <div class=\"col-sm-6 datepicker-holder\">
                        <span class=\"ico-time\"></span>
                        <input type=\"text\" class=\"form-control time\" placeholder=\"Time\">
                    </div>
                    <div class=\"col-sm-6 datepicker-holder\">
                        <input type=\"text\" class=\"form-control datepicker\" placeholder=\"Date\" id=\"from\">
                    </div>
                </div><!-- / row -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <input class=\"form-control\" type=\"text\" placeholder=\"Destination\" />
                    </div>
                </div><!-- / row -->
                <div class=\"row\">
                    <div class=\"col-sm-6 datepicker-holder\">
                        <span class=\"ico-time\"></span>
                        <input type=\"text\" class=\"form-control time\" placeholder=\"Time\">
                    </div>
                    <div class=\"col-sm-6 datepicker-holder\">
                        <input type=\"text\" class=\"form-control datepicker\" placeholder=\"Date\" id=\"to\">
                    </div>
                </div><!-- / row -->
                <div class=\"btn-holder clearfix\">
                    <button class=\"btn btn-info\">Update</button>
                </div>
            </div><!-- / search-form -->
        </div><!-- / row -->
    </form>
</div><!-- / preference -->";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle::charter-preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 135,  277 => 117,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 155,  344 => 140,  323 => 129,  320 => 128,  316 => 126,  307 => 123,  304 => 128,  296 => 120,  286 => 117,  279 => 115,  250 => 98,  205 => 91,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 266,  475 => 262,  425 => 245,  422 => 244,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 91,  192 => 88,  150 => 63,  211 => 94,  197 => 107,  20 => 1,  34 => 5,  104 => 43,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 256,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 248,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 242,  340 => 94,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 127,  297 => 77,  291 => 120,  288 => 119,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 103,  239 => 123,  236 => 96,  231 => 57,  218 => 51,  216 => 128,  213 => 49,  195 => 89,  186 => 37,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 67,  126 => 54,  96 => 30,  184 => 78,  110 => 25,  83 => 23,  23 => 3,  81 => 27,  174 => 82,  84 => 29,  70 => 20,  152 => 73,  148 => 31,  74 => 25,  160 => 67,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 105,  249 => 129,  234 => 58,  188 => 87,  185 => 117,  172 => 117,  146 => 61,  137 => 66,  134 => 47,  114 => 42,  90 => 27,  77 => 22,  65 => 17,  37 => 5,  237 => 102,  228 => 97,  225 => 44,  223 => 95,  215 => 134,  207 => 109,  198 => 41,  180 => 85,  167 => 92,  165 => 73,  161 => 81,  157 => 76,  155 => 100,  153 => 36,  124 => 63,  113 => 26,  53 => 12,  145 => 82,  139 => 65,  58 => 18,  120 => 62,  97 => 59,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 159,  368 => 112,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 125,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 116,  278 => 86,  268 => 106,  264 => 142,  258 => 101,  252 => 99,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 97,  177 => 87,  169 => 86,  140 => 59,  132 => 57,  128 => 65,  111 => 67,  107 => 83,  61 => 17,  273 => 96,  269 => 94,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 101,  230 => 82,  227 => 81,  224 => 71,  221 => 115,  219 => 92,  217 => 135,  208 => 90,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 60,  119 => 53,  108 => 88,  102 => 45,  71 => 24,  67 => 18,  63 => 22,  59 => 16,  47 => 12,  38 => 6,  94 => 28,  89 => 29,  85 => 25,  79 => 23,  75 => 23,  68 => 22,  56 => 16,  50 => 15,  29 => 3,  87 => 26,  72 => 21,  55 => 14,  21 => 2,  26 => 3,  98 => 48,  93 => 27,  88 => 60,  78 => 25,  46 => 9,  27 => 5,  40 => 9,  44 => 12,  35 => 6,  31 => 4,  43 => 8,  41 => 6,  28 => 3,  201 => 88,  196 => 90,  183 => 82,  171 => 84,  166 => 68,  163 => 91,  158 => 69,  156 => 64,  151 => 74,  142 => 90,  138 => 62,  136 => 68,  123 => 91,  121 => 97,  117 => 49,  115 => 60,  105 => 36,  101 => 60,  91 => 44,  69 => 17,  66 => 14,  62 => 12,  49 => 10,  24 => 1,  32 => 6,  25 => 4,  22 => 2,  19 => 1,  209 => 82,  203 => 89,  199 => 67,  193 => 102,  189 => 83,  187 => 88,  182 => 98,  176 => 84,  173 => 76,  168 => 96,  164 => 73,  162 => 72,  154 => 69,  149 => 64,  147 => 35,  144 => 70,  141 => 70,  133 => 61,  130 => 56,  125 => 44,  122 => 53,  116 => 41,  112 => 89,  109 => 66,  106 => 54,  103 => 28,  99 => 36,  95 => 43,  92 => 30,  86 => 28,  82 => 32,  80 => 26,  73 => 20,  64 => 27,  60 => 26,  57 => 16,  54 => 9,  51 => 13,  48 => 13,  45 => 11,  42 => 10,  39 => 7,  36 => 6,  33 => 7,  30 => 3,);
    }
}
