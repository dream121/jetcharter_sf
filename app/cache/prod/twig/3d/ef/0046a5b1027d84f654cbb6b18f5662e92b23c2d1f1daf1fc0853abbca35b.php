<?php

/* JetChartersPublicBundle:AirAmbulance:index.html.twig */
class __TwigTemplate_3def0046a5b1027d84f654cbb6b18f5662e92b23c2d1f1daf1fc0853abbca35b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersPublicBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Jet Charters - Private Jet Charters and Charter Flights";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"head-area parallax-bg\">
        <h1>Complete Form &amp; Select Aircraft to Receive Quotes</h1>
        <div class=\"setting-bar\">
            <div class=\"container\">
                <div class=\"holder clearfix\">
                    <ul class=\"option\">
                        <li><a href=\"#\" class=\"map ie-fix\" data-toggle=\"modal\" data-target=\"#location\"><span>Map</span></a></li>
                        <li>
                            <a href=\"#\" class=\"preferences ie-fix\"><span>Preferences</span></a>
                            ";
        // line 15
        $this->env->loadTemplate("JetChartersPublicBundle::charter-preferences.html.twig")->display($context);
        // line 16
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
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#data-form\" class=\"btn btn-info visible-xs\"><span>Get Quote</span></a>
            </div><!-- / container -->
        </div><!-- / setting-bar -->
    </div><!-- / head-section -->
    <div class=\"select-aicraft container\">
    
\t<form action=\"#\">
\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["airAmbulance"]) {
            // line 60
            echo "\t<div class=\"info-aircraft\">
\t    <div class=\"check\">
\t\t<input id=\"lbl-007\" type=\"checkbox\">
\t\t<label for=\"lbl-007\"><span>select</span></label>
\t    </div><!-- / check-col -->
\t    <div class=\"img-holder\">
\t\t";
            // line 66
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "images")) > 0)) {
                // line 67
                echo "\t\t    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t    <span class=\"mask-01\">
\t\t\t    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" data-toggle=\"lightbox\" data-parent=\".available-aircrafts\" data-gallery=\"multiimages\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "name"), "html", null, true);
                echo "\" data-footer=\"Get Quote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "operator"), "contactphone"), "html", null, true);
                echo "\">gallery</a>
\t\t    </span>
\t\t";
            } else {
                // line 72
                echo "\t\t    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t";
            }
            // line 74
            echo "\t\t";
            // line 77
            echo "\t    </div>
\t    <div class=\"holder\">
\t\t<header class=\"heading\">
\t\t    <strong class=\"title\"><a href=\"aircraft.html\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "aircraftmodel"), "name"), "html", null, true);
            echo "</a></strong>
\t\t    <ul class=\"info\">
\t\t\t<li>Seats ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "seats"), "html", null, true);
            echo "</li>
\t\t\t<li>Tail # <a href=\"#\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "tailNumber"), "html", null, true);
            echo "</a></li>
\t\t    </ul>
\t\t    <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong> !</strong></a>
\t\t</header>
\t\t<div class=\"frame\">
\t\t    <ul class=\"list-info list-info-big\">
\t\t\t<li>
\t\t\t    <a href=\"operator-profile.html\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "operator"), "contactPhoneNumber"), "html", null, true);
            echo "\">
\t\t\t\t<img src=\" ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
            echo "\" alt=\"\" >
\t\t\t\t";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "operator"), "name"), "html", null, true);
            echo "
\t\t\t\t<em>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "operator"), "contactPhoneNumber"), "html", null, true);
            echo "</em>
\t\t\t    </a>
\t\t\t</li>
\t\t\t<li>
\t\t\t    <img src=\" ";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
            echo "\" alt=\"\" >
\t\t\t    <strong>\$";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "hourlyrate"), "html", null, true);
            echo "/hr</strong>
\t\t\t</li>
\t\t\t<li>
\t\t\t    <span data-toggle=\"modal\" data-target=\"#contact-us\" class=\"contact\">
\t\t\t\t    <img src=\" ";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
            echo "\" alt=\"\" >
\t\t\t\t    <span>Contact</span>
\t\t\t    </span>
\t\t\t</li>
\t\t\t<li>
\t\t\t    <a data-toggle=\"modal\" data-target=\"#location\" href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "location"), "closestcitydistancemiles"), "html", null, true);
            echo " Miles From ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "location"), "closestcity"), "html", null, true);
            echo "\">
\t\t\t\t<img src=\" ";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
            echo "\" alt=\"\" >
\t\t\t\t";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "location"), "icaoCode"), "html", null, true);
            echo "
\t\t\t\t<em>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "location"), "closestcitydistancemiles"), "html", null, true);
            echo " Miles From ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "location"), "closestcity"), "html", null, true);
            echo "</em>
\t\t\t    </a>
\t\t\t</li>
\t\t    </ul><!-- / list-info -->
\t\t    <a href=\"#\" class=\"phone visible-xs\"></a>
            ";
            // line 115
            if ($this->getAttribute($this->getAttribute((isset($context["airAmbulance"]) ? $context["airAmbulance"] : null), "operator"), "showArgusLogo")) {
                // line 116
                echo "\t\t    <img class=\"custom-logo\" src=\" ";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img18.png"), "html", null, true);
                echo "\" alt=\"image\">
            ";
            }
            // line 118
            echo "\t\t</div>
\t    </div>
\t</div><!-- / info-aircraft -->
\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airAmbulance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t</form>
\t
    </div><!-- / select-aicraft -->
";
    }

    // line 128
    public function block_modals($context, array $blocks = array())
    {
        // line 129
        echo "<div class=\"modal fade\" id=\"location\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                <h2 class=\"modal-title\">Aircraft Locations</h2>
            </div>
            <div class=\"modal-body\">
                <img src=\"images/img16.jpg\" alt=\"image\" />
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    ";
        // line 142
        $this->env->loadTemplate("JetChartersPublicBundle::charter-contact-us.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:AirAmbulance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 110,  197 => 107,  20 => 1,  34 => 7,  104 => 55,  129 => 61,  100 => 27,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 123,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 97,  170 => 28,  194 => 123,  175 => 67,  126 => 61,  96 => 66,  184 => 36,  110 => 25,  83 => 41,  23 => 4,  81 => 24,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 31,  74 => 30,  160 => 67,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 129,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 47,  114 => 71,  90 => 51,  77 => 42,  65 => 14,  37 => 7,  237 => 50,  228 => 140,  225 => 44,  223 => 116,  215 => 134,  207 => 109,  198 => 41,  180 => 23,  167 => 92,  165 => 73,  161 => 81,  157 => 66,  155 => 100,  153 => 36,  124 => 57,  113 => 26,  53 => 18,  145 => 82,  139 => 65,  58 => 18,  120 => 31,  97 => 59,  52 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 142,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 80,  132 => 58,  128 => 36,  111 => 67,  107 => 83,  61 => 22,  273 => 96,  269 => 94,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 115,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 46,  119 => 42,  108 => 56,  102 => 46,  71 => 16,  67 => 20,  63 => 23,  59 => 56,  47 => 7,  38 => 8,  94 => 52,  89 => 34,  85 => 34,  79 => 31,  75 => 41,  68 => 22,  56 => 16,  50 => 15,  29 => 6,  87 => 25,  72 => 21,  55 => 19,  21 => 1,  26 => 12,  98 => 76,  93 => 29,  88 => 60,  78 => 16,  46 => 14,  27 => 5,  40 => 11,  44 => 8,  35 => 10,  31 => 9,  43 => 12,  41 => 13,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 93,  166 => 114,  163 => 91,  158 => 39,  156 => 60,  151 => 74,  142 => 90,  138 => 48,  136 => 40,  123 => 58,  121 => 97,  117 => 69,  115 => 43,  105 => 47,  101 => 60,  91 => 27,  69 => 15,  66 => 14,  62 => 19,  49 => 17,  24 => 7,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 108,  199 => 67,  193 => 102,  189 => 102,  187 => 84,  182 => 98,  176 => 90,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 83,  147 => 35,  144 => 70,  141 => 70,  133 => 74,  130 => 62,  125 => 44,  122 => 43,  116 => 54,  112 => 57,  109 => 66,  106 => 68,  103 => 28,  99 => 54,  95 => 42,  92 => 3,  86 => 42,  82 => 31,  80 => 21,  73 => 33,  64 => 20,  60 => 22,  57 => 20,  54 => 16,  51 => 17,  48 => 12,  45 => 14,  42 => 9,  39 => 6,  36 => 5,  33 => 6,  30 => 3,);
    }
}
