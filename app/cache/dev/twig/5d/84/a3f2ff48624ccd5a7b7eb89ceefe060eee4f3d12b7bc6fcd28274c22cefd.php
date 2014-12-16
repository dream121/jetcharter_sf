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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "name"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "charteraircraft")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "name"), "html", null, true);
        echo "</h2>
                </header>
                <div class=\"info\">
                    <div class=\"img\">
                        ";
        // line 14
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "images")) > 0)) {
            // line 15
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "images"), 0, array(), "array"), "webpath"), "html", null, true);
            echo "\" alt=\"image\" style=\"width: 400px;\">
                        <span class=\"mask-01\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "images"), 0, array(), "array"), "webpath"), "html", null, true);
            echo "\"
                                                 data-toggle=\"lightbox\"
                                                 data-parent=\".available-aircrafts\"
                                                 data-gallery=\"multiimages\"
                                                 data-title=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "description"), "html", null, true);
        echo "</p>
                </div><!-- info -->
                <ul class=\"available-list\">
                    <li><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-17.png"), "html", null, true);
        echo "\" alt=\"image\">Seats ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "numberofseats"), "html", null, true);
        echo "</li>
                    <li><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-18.png"), "html", null, true);
        echo "\" alt=\"image\">Available</li>
                    <li><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-19.png"), "html", null, true);
        echo "\" alt=\"image\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "maxairspeed"), "html", null, true);
        echo "kph</li>
                    <li><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-20.png"), "html", null, true);
        echo "\" alt=\"image\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "maxrange"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "name"), "html", null, true);
        echo " Available Aircraft For Charter</h2>
            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charters"]) ? $context["charters"] : $this->getContext($context, "charters")));
        foreach ($context['_seq'] as $context["_key"] => $context["charter"]) {
            // line 70
            echo "            <div class=\"info-aircraft info-aircraft-inner\">
                <div class=\"img-holder\">
                    ";
            // line 72
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "images")) > 0)) {
                // line 73
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t\t\t\t\t<span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" data-toggle=\"lightbox\" data-parent=\".available-aircrafts\" data-gallery=\"multiimages\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "name"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_charter_aircraft_detail", array("operator" => $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "operator"), "slug"), "aircraft" => $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "model"), "slug"), "tail" => $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "tailnumber"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "model"), "name"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "tailnumber"), "html", null, true);
            echo "</span></li>
                                </ul>
                            </li>
                            ";
            // line 94
            if (($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location", array(), "any", false, true), "closestcitydistancemiles", array(), "any", true, true))) {
                echo "<li><a href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "location"), "closestcitydistancemiles"), "html", null, true);
                echo " Miles From ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "location"), "closestcity"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
                echo "\" alt=\"\" ><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "location"), "airportcode"), "html", null, true);
                echo "</span></a></li>";
            }
            // line 95
            echo "                            ";
            if ($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "company", array(), "any", true, true)) {
                echo " <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_operator_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "company"), "slug"))), "html", null, true);
                echo "\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "company"), "name"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
                echo "\" alt=\"\" ><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "company"), "name"), "html", null, true);
                echo "</span></a></li>";
            }
            // line 96
            echo "                            <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
            echo "\" alt=\"\" ><strong>";
            if (($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "hourlyrate") > 0)) {
                echo "\$";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "hourlyrate"), "html", null, true);
                echo "/hr";
            } else {
                echo "Inquire";
            }
            echo "</strong></li>
                        </ul><!-- / list-info -->
                        ";
            // line 98
            if (($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "company", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "company"), "showarguslogo"))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["related"]) ? $context["related"] : $this->getContext($context, "related")));
        foreach ($context['_seq'] as $context["_key"] => $context["aircraft"]) {
            // line 116
            echo "                    <li>
                        ";
            // line 117
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "images")) > 0)) {
                // line 118
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "name"), "html", null, true);
                echo "\" width=\"293\" height=\"196\">
                        ";
            } else {
                // line 120
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "name"), "html", null, true);
                echo "\" width=\"293\" height=\"196\">
                        ";
            }
            // line 122
            echo "                        <div class=\"descr\">
                            <h3>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "name"), "html", null, true);
            echo "</h3>
                            <ul>
                                <li>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "type"), "name"), "html", null, true);
            echo "</li>
                                <li>Seats: ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "numberofseats"), "html", null, true);
            echo "</li>
                                ";
            // line 128
            echo "                            </ul>
                            <a class=\"btn btn-primary\" href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "slug"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["charters"]) ? $context["charters"] : $this->getContext($context, "charters")));
        foreach ($context['_seq'] as $context["_key"] => $context["charter"]) {
            // line 156
            echo "            var ltlg = new google.maps.LatLng(dms2deg('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "location"), "latitude"), "html", null, true);
            echo "'), dms2deg('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "location"), "longitude"), "html", null, true);
            echo "'));
            var marker = new google.maps.Marker({
                position: ltlg,
                title: '";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "name"), "html", null, true);
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
        return array (  385 => 164,  374 => 159,  365 => 156,  361 => 155,  344 => 140,  341 => 139,  333 => 133,  323 => 129,  320 => 128,  316 => 126,  312 => 125,  307 => 123,  304 => 122,  296 => 120,  288 => 118,  286 => 117,  283 => 116,  279 => 115,  268 => 106,  258 => 101,  252 => 99,  250 => 98,  236 => 96,  223 => 95,  211 => 94,  205 => 91,  200 => 89,  189 => 83,  184 => 80,  178 => 78,  170 => 75,  164 => 73,  162 => 72,  158 => 70,  154 => 69,  150 => 68,  112 => 33,  106 => 32,  100 => 31,  96 => 30,  90 => 29,  84 => 26,  81 => 25,  75 => 23,  69 => 20,  62 => 16,  57 => 15,  55 => 14,  48 => 10,  42 => 6,  39 => 5,  30 => 3,);
    }
}
