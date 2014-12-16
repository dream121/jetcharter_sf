<?php

/* JetChartersPublicBundle:EmptyLeg:index.html.twig */
class __TwigTemplate_2027015e02a3c4e8555bf201b02ed226942c1669480cc00bcc58ba5192699820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersPublicBundle::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'modals' => array($this, 'block_modals'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"head-area parallax-bg\">
        <h1>Complete Form &amp; Select Aircraft to Recieve Quotes</h1>
        <div class=\"setting-bar\">
            <div class=\"container\">
                <div class=\"holder clearfix\">
                    <ul class=\"option\">
                        <li><a href=\"#\" class=\"map ie-fix') }}\" data-toggle=\"modal\" data-target=\"#location\"><span>Map</span></a></li>
                        <li>
                            <a href=\"#\" class=\"preferences ie-fix\"><span>Preferences</span></a>
                            ";
        // line 13
        $this->env->loadTemplate("JetChartersPublicBundle::charter-preferences.html.twig")->display($context);
        // line 14
        echo "                        </li>
                    </ul><!-- / option -->
                </div><!-- / holder -->
                <div class=\"row clearfix hidden-xs\">
                    <form action=\"#\">
                        <div class=\"col col-md-10 col-sm-9 area\">
                            <div class=\"row\">
                                <div class=\"col-md-3 col-sm-6\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"First Name\" />
                                </div>
                                <div class=\"col-md-3 col-sm-6\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"Last Name\" />
                                </div>
                                <div class=\"col-md-3 col-sm-6\">
                                    <input class=\"form-control\" type=\"number\" placeholder=\"Phone\" />
                                </div>
                                <div class=\"col-md-3 col-sm-6\">
                                    <input class=\"form-control\" type=\"email\" placeholder=\"Email\" />
                                </div>
                            </div><!-- / row -->
                            <div class=\"add-area clearfix\">
                                <a href=\"#\" class=\"open-close\"><span>+</span> Add Comment</a>
                                <div class=\"slide-box\">
                                    <header class=\"title\">
                                        <strong>Add Comment</strong>
                                        <a href=\"#\" class=\"close\">close</a>
                                    </header>
                                    <textarea class=\"form-control\" cols=\"1\" rows=\"1\">Commentary text style.</textarea>
                                </div><!-- / slide-box -->
                            </div><!-- / add-area -->
                        </div><!-- / area -->
                        <div class=\"col col-md-2 col-sm-3\">
                            <button class=\"btn btn-info\">Get Quote</button>
                        </div>
                    </form>
                </div><!-- / row -->
                <a href=\"#') }}\" data-toggle=\"modal\" data-target=\"#data-form\" class=\"btn btn-info visible-xs\"><span>Get Quote</span></a>
            </div><!-- / container -->
        </div><!-- / setting-bar -->
    </div><!-- / head-section -->
    <div class=\"select-aicraft type-02 container\">
    <form action=\"#\">
    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["leg"]) {
            // line 57
            echo "    <div class=\"info-aircraft\">
        <div class=\"check\">
            <input id=\"lbl-007\" type=\"checkbox\">
            <label for=\"lbl-007\"><span>select</span></label>
        </div><!-- / check-col -->
        <div class=\"img-holder\">
            ";
            // line 63
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "images")) > 0)) {
                // line 64
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"\" width=\"251\" height=\"168\" >
                <span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" data-toggle=\"lightbox\" data-parent=\".select-aircraft\" data-gallery=\"multiimages\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "name"), "html", null, true);
                echo "\" data-footer=\"Get Quote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "company"), "contactphone"), "html", null, true);
                echo "\">gallery</a>
\t\t\t\t\t\t</span>
            ";
            } else {
                // line 69
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"251\" height=\"168\" >
            ";
            }
            // line 71
            echo "        </div>
        <div class=\"holder\">
            <header class=\"heading\">
                <strong class=\"title\"><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "model"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "model"), "name"), "html", null, true);
            echo "</a></strong>
                <ul class=\"info\">
                    <li>Seats ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "seats"), "html", null, true);
            echo "</li>
                    ";
            // line 77
            if (($this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "hidetailnumber") == false)) {
                // line 78
                echo "                    <li>Tail # <a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "tailnumber"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 80
            echo "                </ul>
                <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong> !</strong></a>
            </header>
            <div class=\"frame\">
                <ul class=\"list-info list-info-big\">
                    <li>
                        <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_operator_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "operator"), "slug"))), "html", null, true);
            echo "\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "operator"), "contactphonenumber"), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
            echo "\" alt=\"\" >
                            ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "operator"), "name"), "html", null, true);
            echo "
                            <em>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "operator"), "contactphonenumber"), "html", null, true);
            echo "</em>
                        </a>
                    </li>
                    <li>
                        <img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-005.png"), "html", null, true);
            echo "\" alt=\"\" >
                        <span>";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "fromdate"), "m/d/Y"), "html", null, true);
            echo "</span> &raquo; <span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "todate"), "m/d/Y"), "html", null, true);
            echo "</span>
                    </li>
                    <li>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#contact-us\" class=\"contact\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
            echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t<span>Contact</span>
\t\t\t\t\t\t\t\t\t</span>
                    </li>
                    <li>

\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
            echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
                                            <span data-toggle=\"modal\" data-target=\"#location\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "origin"), "closestcitydistancemiles"), "html", null, true);
            echo " Miles From ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "origin"), "closestcity"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "origin"), "city"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "origin"), "state"), "html", null, true);
            echo "</span>
                                        </a> &raquo;
                                        <a href=\"#\">
                                            <span data-toggle=\"modal\" data-target=\"#location\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "destination"), "closestcitydistancemiles"), "html", null, true);
            echo " Miles From ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "destination"), "closestcity"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "destination"), "city"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "destination"), "state"), "html", null, true);
            echo "</span>
                                        </a>
                    </li>
                </ul><!-- / list-info -->
                <a href=\"#\" class=\"phone visible-xs\"></a>
                <img class=\"custom-logo\" src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img18.png"), "html", null, true);
            echo "\" alt=\"image\">
            </div>
        </div>
    </div><!-- / info-aircraft -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "    </form>
    </div><!-- / select-aicraft -->
";
    }

    // line 123
    public function block_modals($context, array $blocks = array())
    {
        // line 124
        echo "<div class=\"modal fade\" id=\"data-form\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                <h2 class=\"modal-title\">Get Quote</h2>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"First Name\" />
                    <input class=\"form-control\" type=\"text\" placeholder=\"Last Name\" />
                    <input class=\"form-control\" type=\"number\" placeholder=\"Phone\" />
                    <input class=\"form-control\" type=\"email\" placeholder=\"Email\" />
                    <textarea class=\"form-control\" cols=\"1\" rows=\"1\">Comments</textarea>
                    <div class=\"btn-holder\">
                        <button class=\"btn btn-info\">Get Quote</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:EmptyLeg:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 323,  498 => 322,  482 => 312,  478 => 311,  232 => 92,  210 => 82,  275 => 112,  212 => 82,  190 => 72,  421 => 274,  400 => 256,  396 => 255,  329 => 206,  290 => 188,  441 => 201,  439 => 200,  418 => 193,  410 => 187,  408 => 186,  401 => 181,  389 => 174,  386 => 173,  383 => 172,  378 => 170,  373 => 169,  370 => 168,  364 => 229,  356 => 163,  352 => 162,  348 => 160,  336 => 159,  332 => 158,  327 => 155,  303 => 138,  265 => 107,  255 => 112,  244 => 109,  191 => 98,  594 => 452,  591 => 451,  580 => 443,  570 => 436,  561 => 430,  553 => 425,  544 => 419,  525 => 403,  520 => 401,  507 => 391,  497 => 384,  488 => 315,  471 => 307,  452 => 351,  447 => 349,  434 => 339,  424 => 332,  334 => 208,  325 => 263,  306 => 247,  233 => 195,  313 => 146,  277 => 181,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 287,  344 => 140,  323 => 203,  320 => 128,  316 => 126,  307 => 196,  304 => 128,  296 => 191,  286 => 117,  279 => 113,  250 => 98,  205 => 106,  200 => 104,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 217,  475 => 262,  425 => 195,  422 => 194,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 91,  192 => 73,  150 => 63,  211 => 94,  197 => 76,  20 => 1,  34 => 5,  104 => 43,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 221,  473 => 213,  470 => 136,  467 => 256,  465 => 134,  462 => 208,  449 => 204,  443 => 124,  433 => 198,  431 => 248,  419 => 115,  415 => 326,  404 => 111,  369 => 102,  351 => 280,  347 => 97,  345 => 213,  342 => 274,  340 => 211,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 201,  315 => 85,  301 => 193,  297 => 135,  291 => 120,  288 => 235,  266 => 69,  263 => 68,  260 => 67,  251 => 124,  248 => 123,  245 => 62,  242 => 119,  239 => 123,  236 => 93,  231 => 114,  218 => 51,  216 => 101,  213 => 49,  195 => 89,  186 => 71,  181 => 35,  178 => 93,  170 => 75,  194 => 84,  175 => 66,  126 => 54,  96 => 34,  184 => 107,  110 => 25,  83 => 27,  23 => 3,  81 => 22,  174 => 103,  84 => 29,  70 => 20,  152 => 73,  148 => 31,  74 => 19,  160 => 66,  127 => 72,  118 => 35,  76 => 35,  300 => 97,  295 => 93,  261 => 217,  257 => 103,  253 => 102,  249 => 129,  234 => 106,  188 => 72,  185 => 117,  172 => 117,  146 => 52,  137 => 76,  134 => 47,  114 => 61,  90 => 26,  77 => 21,  65 => 17,  37 => 5,  237 => 102,  228 => 193,  225 => 88,  223 => 87,  215 => 134,  207 => 109,  198 => 89,  180 => 67,  167 => 88,  165 => 61,  161 => 99,  157 => 86,  155 => 100,  153 => 56,  124 => 41,  113 => 36,  53 => 21,  145 => 82,  139 => 91,  58 => 15,  120 => 40,  97 => 30,  52 => 14,  480 => 373,  474 => 161,  469 => 158,  461 => 155,  457 => 206,  453 => 205,  444 => 202,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 196,  423 => 116,  413 => 134,  409 => 113,  407 => 321,  402 => 130,  398 => 315,  393 => 126,  387 => 249,  384 => 121,  381 => 120,  379 => 299,  374 => 297,  368 => 167,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 198,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 116,  283 => 116,  278 => 228,  268 => 108,  264 => 107,  258 => 103,  252 => 211,  247 => 98,  241 => 77,  229 => 118,  220 => 70,  214 => 83,  177 => 77,  169 => 62,  140 => 59,  132 => 46,  128 => 46,  111 => 67,  107 => 83,  61 => 16,  273 => 119,  269 => 108,  254 => 102,  246 => 98,  243 => 97,  240 => 51,  238 => 85,  235 => 93,  230 => 82,  227 => 81,  224 => 71,  221 => 87,  219 => 86,  217 => 109,  208 => 81,  204 => 122,  179 => 67,  159 => 90,  143 => 78,  135 => 47,  131 => 46,  119 => 69,  108 => 35,  102 => 31,  71 => 24,  67 => 35,  63 => 34,  59 => 16,  47 => 12,  38 => 6,  94 => 28,  89 => 56,  85 => 25,  79 => 23,  75 => 23,  68 => 22,  56 => 15,  50 => 15,  29 => 3,  87 => 25,  72 => 21,  55 => 14,  21 => 2,  26 => 3,  98 => 30,  93 => 57,  88 => 60,  78 => 21,  46 => 9,  27 => 5,  40 => 10,  44 => 12,  35 => 6,  31 => 4,  43 => 13,  41 => 11,  28 => 3,  201 => 77,  196 => 117,  183 => 82,  171 => 89,  166 => 68,  163 => 87,  158 => 57,  156 => 97,  151 => 74,  142 => 51,  138 => 62,  136 => 47,  123 => 44,  121 => 97,  117 => 49,  115 => 41,  105 => 37,  101 => 63,  91 => 26,  69 => 17,  66 => 14,  62 => 12,  49 => 13,  24 => 2,  32 => 4,  25 => 4,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 77,  193 => 102,  189 => 83,  187 => 88,  182 => 94,  176 => 66,  173 => 76,  168 => 62,  164 => 61,  162 => 72,  154 => 56,  149 => 80,  147 => 52,  144 => 70,  141 => 77,  133 => 61,  130 => 74,  125 => 71,  122 => 53,  116 => 41,  112 => 36,  109 => 66,  106 => 54,  103 => 64,  99 => 36,  95 => 43,  92 => 30,  86 => 25,  82 => 32,  80 => 22,  73 => 19,  64 => 17,  60 => 16,  57 => 15,  54 => 9,  51 => 13,  48 => 13,  45 => 14,  42 => 11,  39 => 10,  36 => 5,  33 => 7,  30 => 3,);
    }
}
