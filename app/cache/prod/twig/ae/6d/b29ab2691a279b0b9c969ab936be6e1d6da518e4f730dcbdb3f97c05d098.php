<?php

/* JetChartersPublicBundle:Operator:detail.html.twig */
class __TwigTemplate_ae6db29ab2691a279b0b9c969ab936be6e1d6da518e4f730dcbdb3f97c05d098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersPublicBundle::base.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"operator-details parallax-bg\">
        <div class=\"container information ie-fix\">
            <header class=\"headline\">
                <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "name"), "html", null, true);
        echo "</h2>
                <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong>!</strong></a>
            </header>
            <div class=\"block-info\">
                <div class=\"img\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "logoname"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "contactname"), "html", null, true);
        echo " Logo\" width=\"246\" height=\"227\" >
                </div>
                <ul class=\"info-list\">
                    <li><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
        echo "\" alt=\"\" >";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "contactname"), "html", null, true);
        echo "</li>
                    <li><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-002.png"), "html", null, true);
        echo "\" alt=\"\" ><a href=\"http://";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "website"), "html", null, true);
        echo "\">Visit Website</a></li>
                    <li><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-003.png"), "html", null, true);
        echo "\" alt=\"\" ><a href=\"callto:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "contactphone"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "contactPhoneNumber"), "html", null, true);
        echo "</a></li>
                    <li><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-004.png"), "html", null, true);
        echo "\" alt=\"\" >Certificate #<span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "certificatenumber"), "html", null, true);
        echo "</span></li>
                </ul>
                <div class=\"location\">
                    <address>
                        <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "address1"), "html", null, true);
        echo "</span>
                        <span>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "city"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "state"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "zipcode"), "html", null, true);
        echo "</span>
                        <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "country"), "html", null, true);
        echo "</span>
                    </address>
                    <button class=\"btn btn-info\">Get Quote</button>
                </div>
            </div><!-- block-info -->
        </div><!-- information -->
        <div class=\"container info-line ie-fix\">
            <ul class=\"links\">
                ";
        // line 32
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "specsheet")) > 0)) {
            // line 33
            echo "                <li><a class=\"download\" href=\"#\"><span>Download</span> Fleet Sheet</a></li>
                ";
        }
        // line 35
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "videoname")) > 0)) {
            // line 36
            echo "                <li><a class=\"video\" data-target=\"#video') }}\" data-toggle=\"modal\" href=\"#\">Watch Video</a></li>
                ";
        }
        // line 38
        echo "            </ul><!-- / links -->
            <ul class=\"social\">
                ";
        // line 40
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "facebookurl")) > 0)) {
            // line 41
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "facebookurl"), "html", null, true);
            echo "\" target=\"_blank\" class=\"facebook\">facebook</a></li>
                ";
        }
        // line 43
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "linkedinurl")) > 0)) {
            // line 44
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "linkedinurl"), "html", null, true);
            echo "\" target=\"_blank\" class=\"linkedin\">linkedin</a></li>
                ";
        }
        // line 46
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "twitterurl")) > 0)) {
            // line 47
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "twitterurl"), "html", null, true);
            echo "\" target=\"_blank\" class=\"twitter\">twitter</a></li>
                ";
        }
        // line 49
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "googleurl")) > 0)) {
            // line 50
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "googleurl"), "html", null, true);
            echo "\" target=\"_blank\" class=\"google\">google+</a></li>
                ";
        }
        // line 52
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "youtubeurl")) > 0)) {
            // line 53
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "youtubeurl"), "html", null, true);
            echo "\" target=\"_blank\" class=\"youtube\">youtube</a></li>
                ";
        }
        // line 55
        echo "            </ul><!-- / social -->
        </div><!-- / info-line -->
    </section><!-- search-category -->
    <section class=\"safety-ratings\">
        <div class=\"container\">
            <h2>Safety Ratings</h2>
            <ul class=\"list\">
                ";
        // line 62
        if ($this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "showarguslogo")) {
            // line 63
            echo "                <li>
                    <a href=\"#\"><img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-01.png"), "html", null, true);
            echo "\" alt=\"\" ></a>
                </li>
                ";
        }
        // line 67
        echo "                ";
        if ($this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "showwyvernlogo")) {
            // line 68
            echo "                <li>
                    <a href=\"#\"><img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-02.png"), "html", null, true);
            echo "\" alt=\"\" ></a>
                </li>
                ";
        }
        // line 72
        echo "                ";
        if ($this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "showisbaologo")) {
            // line 73
            echo "                <li>
                    <a href=\"#\"><img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-03.png"), "html", null, true);
            echo "\" alt=\"\" ></a>
                </li>
                ";
        }
        // line 77
        echo "                ";
        if ($this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "showfaalogo")) {
            // line 78
            echo "                <li>
                    <a href=\"#\"><img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-04.png"), "html", null, true);
            echo "\" alt=\"\" ></a>
                </li>
                ";
        }
        // line 82
        echo "                ";
        if ($this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "showacsflogo")) {
            // line 83
            echo "                <li>
                    <a href=\"#\"><img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-05.png"), "html", null, true);
            echo "\" alt=\"\" ></a>
                </li>
                ";
        }
        // line 87
        echo "            </ul>
        </div>
    </section><!-- search-category -->
    <section class=\"operator-info\">
        <div class=\"container\">
            <h2>About ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "name"), "html", null, true);
        echo "</h2>
            <div class=\"text-holder\">
                <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "about"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </section><!-- / operator-info -->
    <section class=\"map-holder w1\">
        <div class=\"w2\">
            <div class=\"w3 full-width-map\">
                <div id=\"map-canvas\"></div>
            </div>
        </div>
    </section><!-- map-holder -->
    <section class=\"available-aircrafts\">
        <div class=\"container\">
            <h2>Available Aircraft For Charter</h2>
            ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "aircraft"));
        foreach ($context['_seq'] as $context["_key"] => $context["charter"]) {
            // line 109
            echo "            <div class=\"info-aircraft\">
                <div class=\"img-holder\">
                    ";
            // line 111
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "images")) > 0)) {
                // line 112
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
                        <span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" data-toggle=\"lightbox\" data-parent=\".available-aircrafts\" data-gallery=\"multiimages\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "name"), "html", null, true);
                echo "\" data-footer=\"Get Quote: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "operator"), "contactphone"), "html", null, true);
                echo "\">gallery</a>
\t\t\t\t\t\t</span>
                    ";
            } else {
                // line 117
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
                    ";
            }
            // line 119
            echo "                </div>
                <div class=\"holder\">
                    <header class=\"heading\">
                        <h3>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "name"), "html", null, true);
            echo "</h3>
                        <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite selected\"><span>Add</span> Favorite<strong> !</strong></a>
                    </header>
                    <div class=\"frame\">
                        <ul class=\"list-info\">
                            <li>
                                <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-002.png"), "html", null, true);
            echo "\" alt=\"\" >
                                <ul>
                                    <li>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "type"), "html", null, true);
            echo "</li>
                                    <li>Seats ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "seats"), "html", null, true);
            echo "</li>
                                    ";
            // line 132
            if (($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "hideTailNumber") == false)) {
                // line 133
                echo "                                    <li>Tail # <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "tailnumber"), "html", null, true);
                echo "</span></li>
                                    ";
            }
            // line 135
            echo "                                </ul>
                            </li>
                            <li><a href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "closestcitydistancemiles"), "html", null, true);
            echo " Miles From ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "closestcity"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
            echo "\" alt=\"\" ><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "faacode"), "html", null, true);
            echo "</span></a></li>
                            <li><img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
            echo "\" alt=\"\" ><strong>\$";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "hourlyrate"), "html", null, true);
            echo "/hr</strong></li>
                            <li>
                                <div class=\"widget-holder\">
                                </div>
                            </li>
                        </ul><!-- / list-info -->
                        <button class=\"btn btn-info\">Get Quote</button>
                    </div>
                </div>
            </div><!-- / info-aircraft -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        </div>
    </section><!-- / available-aircraft -->
    ";
        // line 151
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "emptylegs")) > 0)) {
            // line 152
            echo "    <section class=\"available-flights\">
        <div class=\"container\">
            <h2>Available Empty Leg Flights</h2>
            <ul class=\"list\">
                ";
            // line 156
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "emptylegs"));
            foreach ($context['_seq'] as $context["_key"] => $context["leg"]) {
                // line 157
                echo "                <li>
                    <ul>
                        <li class=\"cell-01\">
                            <img src=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
                echo "\" alt=\"\" >
                            <strong>";
                // line 161
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "origin"), "city"))), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "origin"), "state"))), "html", null, true);
                echo "</strong> &raquo; <strong>";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "destination"), "city"))), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "destination"), "state"))), "html", null, true);
                echo "</strong>
                        </li>
                        <li class=\"cell-02\">
                            <img src=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-005.png"), "html", null, true);
                echo "\" alt=\"\" >
                            <span>";
                // line 165
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "fromdate"), "m/d/Y"), "html", null, true);
                echo "</span> &raquo; <span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "todate"), "m/d/Y"), "html", null, true);
                echo "</span>
                        </li>
                        <li class=\"cell-03\">
                            <img src=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-002.png"), "html", null, true);
                echo "\" alt=\"\" >
                            ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["leg"]) ? $context["leg"] : null), "aircraft"), "type"), "name"), "html", null, true);
                echo "
                        </li>
                        <li class=\"cell-04\"><button class=\"btn btn-info\">Get Quote</button></li>
                    </ul>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "            </ul>
        </div>
    </section><!-- / available-flights -->
    ";
        }
        // line 179
        echo "    <section class=\"similar-operators parallax-bg-01\">
        <div class=\"container\">
            <h2>Similar Operators</h2>
            <div class=\"operators-carousel\" id=\"carousel-01\">
                <ul class=\"slides\">
                    <li>
                        <a href=\"#\" class=\"holder\"><div class=\"wrap\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-operators-001.png"), "html", null, true);
        echo "\" alt=\"image\"></div></a>
                    </li><li>
                        <a href=\"#\" class=\"holder\"><div class=\"wrap\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-operators-002.png"), "html", null, true);
        echo "\" alt=\"image\"></div></a>
                    </li><li>
                        <a href=\"#\" class=\"holder\"><div class=\"wrap\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-operators-003.png"), "html", null, true);
        echo "\" alt=\"image\"></div></a>
                    </li><li>
                        <a href=\"#\" class=\"holder\"><div class=\"wrap\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-operators-004.png"), "html", null, true);
        echo "\" alt=\"image\"></div></a>
                    </li><li>
                        <a href=\"#\" class=\"holder\"><div class=\"wrap\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-operators-005.png"), "html", null, true);
        echo "\" alt=\"image\"></div></a>
                    </li><li>
                        <a href=\"#\" class=\"holder\"><div class=\"wrap\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-operators-001.png"), "html", null, true);
        echo "\" alt=\"image\"></div></a>
                    </li><li>
                        <a href=\"#\" class=\"holder\"><div class=\"wrap\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-operators-002.png"), "html", null, true);
        echo "\" alt=\"image\"></div></a>
                    </li>
                </ul>
            </div><!-- aircraft-slider -->
        </div>
    </section>
";
    }

    // line 205
    public function block_javascripts($context, array $blocks = array())
    {
        // line 206
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
        // line 221
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["operator"]) ? $context["operator"] : null), "aircraft"));
        foreach ($context['_seq'] as $context["_key"] => $context["charter"]) {
            // line 222
            echo "            var ltlg = new google.maps.LatLng(dms2deg('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "latitude"), "html", null, true);
            echo "'), dms2deg('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : null), "location"), "longitude"), "html", null, true);
            echo "'));
            var marker = new google.maps.Marker({
                position: ltlg,
                title: '";
            // line 225
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
        // line 230
        echo "
            map.setCenter(latlngbounds.getCenter());
            map.fitBounds(latlngbounds);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Operator:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 230,  516 => 225,  503 => 221,  486 => 206,  483 => 205,  472 => 197,  442 => 185,  428 => 175,  416 => 169,  412 => 168,  388 => 161,  375 => 156,  367 => 151,  363 => 149,  289 => 117,  267 => 109,  501 => 323,  498 => 322,  482 => 312,  478 => 311,  232 => 92,  210 => 77,  275 => 112,  212 => 82,  190 => 72,  421 => 274,  400 => 164,  396 => 255,  329 => 206,  290 => 188,  441 => 201,  439 => 200,  418 => 193,  410 => 187,  408 => 186,  401 => 181,  389 => 174,  386 => 173,  383 => 172,  378 => 170,  373 => 169,  370 => 168,  364 => 229,  356 => 163,  352 => 162,  348 => 160,  336 => 159,  332 => 158,  327 => 155,  303 => 138,  265 => 107,  255 => 112,  244 => 109,  191 => 98,  594 => 452,  591 => 451,  580 => 443,  570 => 436,  561 => 430,  553 => 425,  544 => 419,  525 => 403,  520 => 401,  507 => 222,  497 => 384,  488 => 315,  471 => 307,  452 => 189,  447 => 187,  434 => 179,  424 => 332,  334 => 137,  325 => 263,  306 => 247,  233 => 195,  313 => 146,  277 => 181,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 82,  385 => 164,  361 => 287,  344 => 138,  323 => 203,  320 => 128,  316 => 126,  307 => 196,  304 => 128,  296 => 191,  286 => 117,  279 => 114,  250 => 98,  205 => 106,  200 => 104,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 217,  475 => 262,  425 => 195,  422 => 194,  338 => 229,  335 => 228,  271 => 111,  206 => 105,  202 => 91,  192 => 69,  150 => 63,  211 => 94,  197 => 76,  20 => 1,  34 => 5,  104 => 43,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 221,  473 => 213,  470 => 136,  467 => 195,  465 => 134,  462 => 193,  449 => 204,  443 => 124,  433 => 198,  431 => 248,  419 => 115,  415 => 326,  404 => 165,  369 => 152,  351 => 280,  347 => 97,  345 => 213,  342 => 274,  340 => 211,  333 => 133,  330 => 135,  328 => 89,  324 => 133,  321 => 87,  318 => 131,  315 => 85,  301 => 193,  297 => 135,  291 => 120,  288 => 235,  266 => 69,  263 => 108,  260 => 67,  251 => 124,  248 => 123,  245 => 62,  242 => 119,  239 => 123,  236 => 93,  231 => 114,  218 => 51,  216 => 79,  213 => 78,  195 => 89,  186 => 67,  181 => 35,  178 => 93,  170 => 75,  194 => 84,  175 => 62,  126 => 54,  96 => 34,  184 => 107,  110 => 25,  83 => 27,  23 => 3,  81 => 22,  174 => 103,  84 => 29,  70 => 20,  152 => 73,  148 => 49,  74 => 19,  160 => 53,  127 => 72,  118 => 38,  76 => 35,  300 => 122,  295 => 119,  261 => 217,  257 => 103,  253 => 102,  249 => 129,  234 => 87,  188 => 72,  185 => 117,  172 => 117,  146 => 52,  137 => 76,  134 => 47,  114 => 36,  90 => 26,  77 => 21,  65 => 17,  37 => 7,  237 => 102,  228 => 84,  225 => 83,  223 => 87,  215 => 134,  207 => 109,  198 => 72,  180 => 64,  167 => 88,  165 => 61,  161 => 99,  157 => 52,  155 => 100,  153 => 56,  124 => 41,  113 => 36,  53 => 15,  145 => 82,  139 => 46,  58 => 15,  120 => 40,  97 => 30,  52 => 14,  480 => 373,  474 => 161,  469 => 158,  461 => 155,  457 => 191,  453 => 205,  444 => 202,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 196,  423 => 116,  413 => 134,  409 => 113,  407 => 321,  402 => 130,  398 => 315,  393 => 126,  387 => 249,  384 => 160,  381 => 120,  379 => 157,  374 => 297,  368 => 167,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 132,  314 => 130,  312 => 198,  309 => 128,  305 => 114,  298 => 91,  294 => 76,  285 => 116,  283 => 116,  278 => 228,  268 => 108,  264 => 107,  258 => 103,  252 => 211,  247 => 98,  241 => 92,  229 => 118,  220 => 70,  214 => 83,  177 => 63,  169 => 62,  140 => 59,  132 => 46,  128 => 46,  111 => 35,  107 => 33,  61 => 16,  273 => 112,  269 => 108,  254 => 102,  246 => 94,  243 => 97,  240 => 51,  238 => 85,  235 => 93,  230 => 82,  227 => 81,  224 => 71,  221 => 87,  219 => 86,  217 => 109,  208 => 81,  204 => 74,  179 => 67,  159 => 90,  143 => 78,  135 => 47,  131 => 46,  119 => 69,  108 => 35,  102 => 31,  71 => 24,  67 => 35,  63 => 34,  59 => 16,  47 => 12,  38 => 6,  94 => 24,  89 => 56,  85 => 25,  79 => 23,  75 => 23,  68 => 22,  56 => 15,  50 => 15,  29 => 3,  87 => 25,  72 => 21,  55 => 14,  21 => 2,  26 => 3,  98 => 30,  93 => 57,  88 => 60,  78 => 21,  46 => 9,  27 => 5,  40 => 10,  44 => 12,  35 => 6,  31 => 4,  43 => 13,  41 => 11,  28 => 3,  201 => 73,  196 => 117,  183 => 82,  171 => 89,  166 => 55,  163 => 87,  158 => 57,  156 => 97,  151 => 50,  142 => 47,  138 => 62,  136 => 47,  123 => 44,  121 => 97,  117 => 49,  115 => 41,  105 => 32,  101 => 63,  91 => 26,  69 => 17,  66 => 14,  62 => 12,  49 => 13,  24 => 2,  32 => 4,  25 => 4,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 77,  193 => 102,  189 => 68,  187 => 88,  182 => 94,  176 => 66,  173 => 76,  168 => 62,  164 => 61,  162 => 72,  154 => 56,  149 => 80,  147 => 52,  144 => 70,  141 => 77,  133 => 44,  130 => 43,  125 => 71,  122 => 40,  116 => 41,  112 => 36,  109 => 66,  106 => 54,  103 => 64,  99 => 36,  95 => 43,  92 => 30,  86 => 23,  82 => 22,  80 => 22,  73 => 18,  64 => 17,  60 => 16,  57 => 15,  54 => 9,  51 => 13,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 5,  33 => 7,  30 => 3,);
    }
}
