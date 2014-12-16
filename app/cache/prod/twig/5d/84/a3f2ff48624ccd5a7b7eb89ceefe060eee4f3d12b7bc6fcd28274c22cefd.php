<?php

/* JetChartersPublicBundle:Aircraft:detail.html.twig */
class __TwigTemplate_5d84a3f2ff48624ccd5a7b7eb89ceefe060eee4f3d12b7bc6fcd28274c22cefd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersPublicBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "charteraircraft")), "html", null, true);
        echo " Available Aircraft for Charter | JetCharters.com";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <section class=\"intro-01 parallax-bg\">
        <div class=\"container\">
            <div class=\"airplane-details row ie-fix\">
                <header class=\"headline\">
                    <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
        echo "</h2>
                </header>
                <div class=\"info\">
                    <div class=\"img\">
                        ";
        // line 14
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "images")) > 0)) {
            // line 15
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "images"), 0, array(), "array"), "webpath"), "html", null, true);
            echo "\" alt=\"image\" style=\"width: 400px;\">
                        <span class=\"mask-01\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "images"), 0, array(), "array"), "webpath"), "html", null, true);
            echo "\"
                                                 data-toggle=\"lightbox\"
                                                 data-parent=\".available-aircrafts\"
                                                 data-gallery=\"multiimages\"
                                                 data-title=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
            echo "\"
                                                 data-footer=\"\">&nbsp;</a></span>
                        ";
        } else {
            // line 23
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
            echo "\" alt=\"\" width=\"400\" height=\"225\">
                        ";
        }
        // line 25
        echo "                    </div><!-- img -->
                    <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "description"), "html", null, true);
        echo "</p>
                </div><!-- info -->
                <ul class=\"available-list\">
                    <li><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-17.png"), "html", null, true);
        echo "\" alt=\"image\">Seats ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "numberofseats"), "html", null, true);
        echo "</li>
                    <li><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-18.png"), "html", null, true);
        echo "\" alt=\"image\">Available</li>
                    <li><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-19.png"), "html", null, true);
        echo "\" alt=\"image\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "maxairspeed"), "html", null, true);
        echo "kph</li>
                    <li><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-20.png"), "html", null, true);
        echo "\" alt=\"image\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "maxrange"), "html", null, true);
        echo " sm</li>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#video\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-video-001.png"), "html", null, true);
        echo "\" alt=\"image\">Watch Video</a></li>
                </ul>
            </div><!-- airplane-details -->
        </div>
        <div class=\"aircraft-types-form small-types\">
            <div class=\"container\">
                <form action=\"#\">
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
                <button class=\"btn btn-info btn-mobile\" data-toggle=\"modal\" data-target=\"#aircraft-category-small\">Aircraft By Radius</button>
            </div>
        </div><!-- aircraft-types-form -->
    </section><!-- intro-01 -->
    <section class=\"map-holder w1\">
        <div class=\"w2\">
            <div class=\"w3 full-width-map\">
                <div id=\"map-canvas\"></div>
            </div>
        </div>
    </section><!-- map-holder -->
    <section class=\"available-aircrafts\">
        <div class=\"container\">
            <h2>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
        echo " Available Aircraft For Charter</h2>
            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charters"]) ? $context["charters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["charter"]) {
            // line 70
            echo "            <div class=\"info-aircraft info-aircraft-inner\">
                <div class=\"img-holder\">
                    ";
            // line 72
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "images")) > 0)) {
                // line 73
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t\t\t\t\t<span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" data-toggle=\"lightbox\" data-parent=\".available-aircrafts\" data-gallery=\"multiimages\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "name"), "html", null, true);
                echo "\" data-footer=\"Get Quote: 1-800-538-6070\">gallery</a>
\t\t\t\t\t\t</span>
                    ";
            } else {
                // line 78
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
                    ";
            }
            // line 80
            echo "                </div>
                <div class=\"holder\">
                    <header class=\"heading\">
                        <h3><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_charter_aircraft_detail", array("operator" => $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "operator"), "slug"), "aircraft" => $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "model"), "slug"), "tail" => $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "tailnumber"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "model"), "name"), "html", null, true);
            echo "</a></h3>
                        <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong> !</strong></a>
                    </header>
                    <div class=\"frame\">
                        <ul class=\"list-info list-info-big\">
                            <li>
                                <img src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-002.png"), "html", null, true);
            echo "\" alt=\"\" >
                                <ul>
                                    <li>Tail # <span>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "tailnumber"), "html", null, true);
            echo "</span></li>
                                </ul>
                            </li>
                            ";
            // line 94
            if (($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location", array(), "any", false, true), "closestcitydistancemiles", array(), "any", true, true))) {
                echo "<li><a href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "closestcitydistancemiles"), "html", null, true);
                echo " Miles From ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "closestcity"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
                echo "\" alt=\"\" ><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "airportcode"), "html", null, true);
                echo "</span></a></li>";
            }
            // line 95
            echo "                            ";
            if ($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "company", array(), "any", true, true)) {
                echo " <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_operator_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "company"), "slug"))), "html", null, true);
                echo "\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "company"), "name"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
                echo "\" alt=\"\" ><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "company"), "name"), "html", null, true);
                echo "</span></a></li>";
            }
            // line 96
            echo "                            <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
            echo "\" alt=\"\" ><strong>";
            if (($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "hourlyrate") > 0)) {
                echo "\$";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "hourlyrate"), "html", null, true);
                echo "/hr";
            } else {
                echo "Inquire";
            }
            echo "</strong></li>
                        </ul><!-- / list-info -->
                        ";
            // line 98
            if (($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "company", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "company"), "showarguslogo"))) {
                // line 99
                echo "                        <img class=\"custom-logo\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-21.png"), "html", null, true);
                echo "\" alt=\"image\">
                        ";
            }
            // line 101
            echo "                        <button class=\"btn btn-info\">Get Quote</button>
                    </div>
                </div>
            </div><!-- / info-aircraft -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </div>
    </section><!-- available-aircrafts -->
    <section class=\"aircraft-area aircraft-area-inner\" id=\"aircraft\">
        <div class=\"container\">
            <header class=\"headline\">
                <h2>Similar Aircrafts</h2>
            </header>
            <div class=\"aircraft-slider\" id=\"carousel\">
                <ul class=\"slides\">
                    ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["aircraft"]) {
            // line 116
            echo "                    <li>
                        ";
            // line 117
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "images")) > 0)) {
                // line 118
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
                echo "\" width=\"293\" height=\"196\">
                        ";
            } else {
                // line 120
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
                echo "\" width=\"293\" height=\"196\">
                        ";
            }
            // line 122
            echo "                        <div class=\"descr\">
                            <h3>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
            echo "</h3>
                            <ul>
                                <li>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "type"), "name"), "html", null, true);
            echo "</li>
                                <li>Seats: ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "numberofseats"), "html", null, true);
            echo "</li>
                                ";
            // line 128
            echo "                            </ul>
                            <a class=\"btn btn-primary\" href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "slug"))), "html", null, true);
            echo "\">View More</a>
                        </div><!-- descr -->
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aircraft'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                </ul>
            </div><!-- aircraft-slider -->
        </div>
    </section><!-- aircraft-area -->
";
    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        // line 140
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.full-width-map').width(\$(document).width());
            var mapOptions = {
                center: new google.maps.LatLng(38.822591, -101.601563),
                zoom: 4,
                scrollwheel: false
            };

            var map = new google.maps.Map(document.getElementById(\"map-canvas\"),
                    mapOptions);

            var latlngbounds = new google.maps.LatLngBounds();

            // setup the charter markers
            ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charters"]) ? $context["charters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["charter"]) {
            // line 156
            echo "            var ltlg = new google.maps.LatLng(dms2deg('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "latitude"), "html", null, true);
            echo "'), dms2deg('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "longitude"), "html", null, true);
            echo "'));
            var marker = new google.maps.Marker({
                position: ltlg,
                title: '";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "name"), "html", null, true);
            echo "'
            });
            latlngbounds.extend(ltlg);
            marker.setMap(map);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "
            map.setCenter(latlngbounds.getCenter());
            map.fitBounds(latlngbounds);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Aircraft:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 164,  361 => 155,  344 => 140,  323 => 129,  320 => 128,  316 => 126,  307 => 123,  304 => 122,  296 => 120,  286 => 117,  279 => 115,  250 => 98,  205 => 91,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 266,  475 => 262,  425 => 245,  422 => 244,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 95,  192 => 88,  150 => 68,  211 => 94,  197 => 107,  20 => 1,  34 => 7,  104 => 55,  129 => 61,  100 => 31,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 256,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 248,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 242,  340 => 94,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 118,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 123,  236 => 96,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 78,  170 => 75,  194 => 123,  175 => 67,  126 => 46,  96 => 30,  184 => 80,  110 => 25,  83 => 41,  23 => 4,  81 => 25,  174 => 82,  84 => 26,  70 => 28,  152 => 59,  148 => 31,  74 => 30,  160 => 67,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 129,  234 => 58,  188 => 87,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 47,  114 => 42,  90 => 29,  77 => 16,  65 => 14,  37 => 7,  237 => 50,  228 => 140,  225 => 44,  223 => 95,  215 => 134,  207 => 109,  198 => 41,  180 => 85,  167 => 92,  165 => 73,  161 => 81,  157 => 66,  155 => 100,  153 => 36,  124 => 57,  113 => 26,  53 => 18,  145 => 82,  139 => 65,  58 => 18,  120 => 44,  97 => 59,  52 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 159,  368 => 112,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 125,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 116,  278 => 86,  268 => 106,  264 => 142,  258 => 101,  252 => 99,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 80,  132 => 58,  128 => 36,  111 => 67,  107 => 83,  61 => 22,  273 => 96,  269 => 94,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 115,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 46,  119 => 42,  108 => 56,  102 => 46,  71 => 16,  67 => 20,  63 => 23,  59 => 56,  47 => 7,  38 => 8,  94 => 52,  89 => 21,  85 => 34,  79 => 31,  75 => 23,  68 => 22,  56 => 16,  50 => 15,  29 => 4,  87 => 25,  72 => 21,  55 => 14,  21 => 1,  26 => 12,  98 => 76,  93 => 29,  88 => 60,  78 => 16,  46 => 14,  27 => 5,  40 => 11,  44 => 8,  35 => 7,  31 => 9,  43 => 12,  41 => 13,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 93,  166 => 76,  163 => 91,  158 => 70,  156 => 60,  151 => 74,  142 => 90,  138 => 48,  136 => 40,  123 => 58,  121 => 97,  117 => 69,  115 => 43,  105 => 47,  101 => 60,  91 => 27,  69 => 20,  66 => 14,  62 => 16,  49 => 17,  24 => 1,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 108,  199 => 67,  193 => 102,  189 => 83,  187 => 84,  182 => 98,  176 => 84,  173 => 85,  168 => 115,  164 => 73,  162 => 72,  154 => 69,  149 => 83,  147 => 35,  144 => 70,  141 => 70,  133 => 74,  130 => 48,  125 => 44,  122 => 43,  116 => 54,  112 => 33,  109 => 66,  106 => 32,  103 => 28,  99 => 54,  95 => 42,  92 => 3,  86 => 42,  82 => 18,  80 => 17,  73 => 33,  64 => 20,  60 => 22,  57 => 15,  54 => 16,  51 => 17,  48 => 10,  45 => 14,  42 => 6,  39 => 5,  36 => 5,  33 => 6,  30 => 3,);
    }
}
