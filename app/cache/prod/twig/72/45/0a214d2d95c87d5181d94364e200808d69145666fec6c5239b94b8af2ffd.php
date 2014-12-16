<?php

/* JetChartersPublicBundle:Airport:detail.html.twig */
class __TwigTemplate_72450a214d2d95c87d5181d94364e200808d69145666fec6c5239b94b8af2ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersPublicBundle::base.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"intro-02\">
    <div class=\"container\">
        <div class=\"airplane-details row ie-fix\">
            <header class=\"headline\">
                <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "name")), "html", null, true);
        echo " Private Jet Charter Service &amp; Air Charter Flights</h2>
            </header>
            <div class=\"info\">
                <div class=\"img\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-22.png"), "html", null, true);
        echo "\" alt=\"image\">
                    <span class=\"identifier\">Identifier: <strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "icaoCode"), "html", null, true);
        echo "</strong></span>
                    <span class=\"city\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
        echo "\" alt=\"image\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "state"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "city"), "html", null, true);
        echo "</span>
                </div><!-- img -->
                <p>Looking for Charter Aircraft at ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "name")), "html", null, true);
        echo " in ";
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "state")), "html", null, true);
        echo "?<br/>Below you will find aircraft available for charter with as little as four hours notice. Simply contact any of the air charter providers listed on this page to obtain a no obligation jet charter quote. </p>
                <p>If you don't see the charter aircraft you desire for your flight call 866-999-5387 or fill out our <br/>jet charter quote request form to have a knowledgeable air charter consultant promptly contact you. Your personal air charter consultant will gladly locate the best suited charter aircraft for your flight and provide you with a no obligation private jet charter quote. </p>
            </div><!-- info -->
        </div><!-- airplane-details -->
    </div>
    <div class=\"aircraft-types-form\">
        <div class=\"container\">
            <form action=\"#\">
                <div class=\"cel\">
                    <select title=\"Aircraft By Type\" class=\"form-control\">
                        <option value=\"1\">Aircraft By Type 1</option>
                        <option value=\"2\">Aircraft By Type 2</option>
                        <option value=\"3\">Aircraft By Type 3</option>
                        <option value=\"4\">Aircraft By Type 4</option>
                    </select>
                </div>
                <div class=\"cel\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"City/Airport Code\" />
                </div>
                <div class=\"cel\">
                    <select title=\"Search Radius\" class=\"form-control\">
                        <option value=\"1\">Search Radius 1</option>
                        <option value=\"2\">Search Radius 2</option>
                        <option value=\"3\">Search Radius 3</option>
                        <option value=\"4\">Search Radius 4</option>
                    </select>
                </div>
                <div class=\"btn-holder\">
                    <button class=\"btn btn-info\">Search</button>
                </div>
            </form>
            <button class=\"btn btn-info btn-mobile\" data-toggle=\"modal\" data-target=\"#aircraft-category\">Aircraft By Radius</button>
        </div>
    </div><!-- aircraft-types-form -->
</section><!-- intro-01 -->
<section class=\"map-holder w1\">
    <div class=\"w2\">
        <div class=\"w3\">
            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-map.jpg"), "html", null, true);
        echo "\" alt=\"image\">
        </div>
    </div>
</section><!-- map-holder -->
<section class=\"available-aircrafts\">
    <div class=\"container\">
        <h2>Aircraft Available for Charter at ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "name")), "html", null, true);
        echo "</h2>
\t
        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["airport"]) ? $context["airport"] : null), "charterAircraft"));
        foreach ($context['_seq'] as $context["_key"] => $context["airplane"]) {
            // line 63
            echo "\t    <div class=\"info-aircraft info-aircraft-inner\">
\t\t<div class=\"img-holder\">
\t\t    ";
            // line 65
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "images")) > 0)) {
                // line 66
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t\t<span class=\"mask-01\">
\t\t\t\t<a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" data-toggle=\"lightbox\" data-parent=\".available-aircrafts\" data-gallery=\"multiimages\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "name"), "html", null, true);
                echo "\" data-footer=\"Get Quote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "operator"), "contactphone"), "html", null, true);
                echo "\">gallery</a>
\t\t\t</span>
\t\t    ";
            } else {
                // line 71
                echo "\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t    ";
            }
            // line 73
            echo "\t\t</div>
\t\t<div class=\"holder\">
\t\t    <header class=\"heading\">
\t\t\t<h3>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "aircraftmodel"), "name"), "html", null, true);
            echo "</h3>
\t\t\t<a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite selected\"><span>Add</span> Favorite<strong> !</strong></a>
\t\t    </header>
\t\t    <div class=\"frame\">
\t\t\t<ul class=\"list-info list-info-big\">
\t\t\t    <li>
\t\t\t\t<img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-002.png"), "html", null, true);
            echo "\" alt=\"\" >
\t\t\t\t<ul>
\t\t\t\t    <li>Tail # <span>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "tailNumber"), "html", null, true);
            echo "</span></li>
\t\t\t\t</ul>
\t\t\t    </li>
\t\t\t    <li><a href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"1";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "location"), "closestcitydistancemiles"), "html", null, true);
            echo " Miles From ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "location"), "closestcity"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
            echo "\" alt=\"\" ><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "location"), "icaoCode"), "html", null, true);
            echo "</span></a></li>
\t\t\t    <li><a href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "operator"), "contactPhoneNumber"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
            echo "\" alt=\"\" ><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "operator"), "name"), "html", null, true);
            echo "</span></a></li>
\t\t\t    <li><img src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
            echo "\" alt=\"\" ><strong>\$";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airplane"]) ? $context["airplane"] : null), "hourlyrate"), "html", null, true);
            echo "/hr</strong></li>
\t\t\t</ul><!-- / list-info -->
\t\t\t<img class=\"custom-logo\" src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-21.png"), "html", null, true);
            echo "\" alt=\"image\">
\t\t\t<button class=\"btn btn-info\">Get Quote</button>
\t\t    </div>
\t\t</div>
\t    </div><!-- / info-aircraft -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airplane'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        ";
        // line 128
        echo "    </div>
</section><!-- available-aircrafts -->
<section class=\"similar-operators parallax-bg-01\">
    <div class=\"container\">
        <h2>Airports Near LAX</h2>
        <div class=\"operators-carousel\" id=\"carousel-02\">
            <ul class=\"slides\">
                <li>
                    <a href=\"#\" class=\"holder\"><div class=\"wrap\">
                            <h3>HHR</h3>
                            <p>Northrop Field <br/>Municipal</p>
                            <span>5 miles</span>
                        </div></a>
                </li><li>
                    <a href=\"#\" class=\"holder\"><div class=\"wrap\">
                            <h3>PSP</h3>
                            <p>Palm Springs Int'l</p>
                            <span>25 miles</span>
                        </div></a>
                </li><li>
                    <a href=\"#\" class=\"holder\"><div class=\"wrap\">
                            <h3>L77</h3>
                            <p>Chiriaco Summit</p>
                            <span>26 miles</span>
                        </div></a>
                </li><li>
                    <a href=\"#\" class=\"holder\"><div class=\"wrap\">
                            <h3>TNP</h3>
                            <p>Twentynine Palms</p>
                            <span>38 miles</span>
                        </div></a>
                </li><li>
                    <a href=\"#\" class=\"holder\"><div class=\"wrap\">
                            <h3>NXP</h3>
                            <p>Twentynine Palms Eaf</p>
                            <span>47 miles</span>
                        </div></a>
                </li><li>
                    <a href=\"#\" class=\"holder\"><div class=\"wrap\">
                            <h3>HHR</h3>
                            <p>Northrop Field <br/>Municipal</p>
                            <span>5 miles</span>
                        </div></a>
                </li><li>
                    <a href=\"#\" class=\"holder\"><div class=\"wrap\">
                            <h3>HHR</h3>
                            <p>Northrop Field <br/>Municipal</p>
                            <span>5 miles</span>
                        </div></a>
                </li>
            </ul>
        </div><!-- aircraft-slider -->
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Airport:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 135,  277 => 117,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 155,  344 => 140,  323 => 129,  320 => 128,  316 => 126,  307 => 123,  304 => 128,  296 => 120,  286 => 117,  279 => 115,  250 => 98,  205 => 91,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 266,  475 => 262,  425 => 245,  422 => 244,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 91,  192 => 88,  150 => 68,  211 => 94,  197 => 107,  20 => 1,  34 => 7,  104 => 55,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 256,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 248,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 242,  340 => 94,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 127,  297 => 77,  291 => 120,  288 => 119,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 103,  239 => 123,  236 => 96,  231 => 57,  218 => 51,  216 => 128,  213 => 49,  195 => 89,  186 => 37,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 67,  126 => 46,  96 => 30,  184 => 78,  110 => 25,  83 => 41,  23 => 4,  81 => 27,  174 => 82,  84 => 26,  70 => 28,  152 => 73,  148 => 31,  74 => 25,  160 => 67,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 105,  249 => 129,  234 => 58,  188 => 87,  185 => 117,  172 => 117,  146 => 71,  137 => 66,  134 => 47,  114 => 42,  90 => 29,  77 => 26,  65 => 14,  37 => 8,  237 => 102,  228 => 97,  225 => 44,  223 => 95,  215 => 134,  207 => 109,  198 => 41,  180 => 85,  167 => 92,  165 => 73,  161 => 81,  157 => 76,  155 => 100,  153 => 36,  124 => 63,  113 => 26,  53 => 18,  145 => 82,  139 => 65,  58 => 18,  120 => 62,  97 => 59,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 159,  368 => 112,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 125,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 116,  278 => 86,  268 => 106,  264 => 142,  258 => 101,  252 => 99,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 97,  177 => 87,  169 => 86,  140 => 80,  132 => 58,  128 => 65,  111 => 67,  107 => 83,  61 => 16,  273 => 96,  269 => 94,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 101,  230 => 82,  227 => 81,  224 => 71,  221 => 115,  219 => 92,  217 => 135,  208 => 90,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 60,  119 => 53,  108 => 56,  102 => 46,  71 => 24,  67 => 20,  63 => 22,  59 => 56,  47 => 14,  38 => 5,  94 => 31,  89 => 21,  85 => 34,  79 => 31,  75 => 23,  68 => 22,  56 => 16,  50 => 15,  29 => 3,  87 => 28,  72 => 21,  55 => 14,  21 => 1,  26 => 12,  98 => 48,  93 => 29,  88 => 60,  78 => 16,  46 => 9,  27 => 5,  40 => 11,  44 => 12,  35 => 7,  31 => 4,  43 => 12,  41 => 6,  28 => 3,  201 => 88,  196 => 90,  183 => 82,  171 => 84,  166 => 82,  163 => 91,  158 => 69,  156 => 60,  151 => 74,  142 => 90,  138 => 62,  136 => 68,  123 => 58,  121 => 97,  117 => 69,  115 => 60,  105 => 50,  101 => 60,  91 => 44,  69 => 20,  66 => 23,  62 => 17,  49 => 17,  24 => 1,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 89,  199 => 67,  193 => 102,  189 => 83,  187 => 88,  182 => 98,  176 => 84,  173 => 76,  168 => 75,  164 => 73,  162 => 72,  154 => 69,  149 => 64,  147 => 35,  144 => 70,  141 => 70,  133 => 61,  130 => 66,  125 => 44,  122 => 43,  116 => 52,  112 => 42,  109 => 66,  106 => 54,  103 => 28,  99 => 54,  95 => 42,  92 => 30,  86 => 42,  82 => 18,  80 => 17,  73 => 33,  64 => 20,  60 => 22,  57 => 15,  54 => 16,  51 => 15,  48 => 13,  45 => 14,  42 => 6,  39 => 5,  36 => 6,  33 => 6,  30 => 3,);
    }
}
