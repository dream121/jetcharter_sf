<?php

/* JetChartersPublicBundle:CharterAircraft:detail.html.twig */
class __TwigTemplate_ce15b09567714d14a654f7d898330c1715d7863567fa1f7f41ff92cb1ca90f00 extends Twig_Template
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
        echo "JetChartersPublicBundle:CharterAircraft:detail";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <section class=\"operator-details info-operators parallax-bg\">
        <div class=\"container information ie-fix\">
            <a class=\"operator-profile\" href=\"#\">
\t\t\t\t<span class=\"holder\">
\t\t\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-operator-profile-001.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<strong class=\"name\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "name"), "html", null, true);
        echo "</strong>
\t\t\t\t</span>
            </a>
            <header class=\"headline\">
                <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('core_locale')->formatFormalText($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "name")), "html", null, true);
        echo "</h2>
                <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span>
                    Favorite<strong>!</strong></a>
            </header>
            <div class=\"block-info\">
                <div class=\"img\">
\t\t    ";
        // line 21
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "images")) > 0)) {
            // line 22
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "images"), "first"), "imagename"))), "html", null, true);
            echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t\t<span class=\"mask-01\">
\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "images"), "first"), "imagename"))), "html", null, true);
            echo "\" data-toggle=\"lightbox\" data-parent=\".available-aircrafts\" data-gallery=\"multiimages\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "name"), "html", null, true);
            echo "\" data-footer=\"Get Quote: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "contactphone"), "html", null, true);
            echo "\">gallery</a>
\t\t\t</span>
\t\t    ";
        } else {
            // line 27
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
            echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t    ";
        }
        // line 29
        echo "                </div>
                <!-- img -->
                <div class=\"frame\">
                    <ul class=\"info-list\">
                        <li>
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-002.png"), "html", null, true);
        echo "\" alt=\"\">
                            <ul>
                                <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "model"), "type"), "name"), "html", null, true);
        echo "</li>
                                <li>Seats ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "seats"), "html", null, true);
        echo "</li>
                                <li>Tail # <span>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "tailNumber"), "html", null, true);
        echo "</span></li>
                            </ul>
                        </li>
                        <li><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
        echo "\" alt=\"\">\$";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "hourlyRate"), "html", null, true);
        echo "/hr
                        </li>
                        <li>
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
        echo "\" alt=\"\">
                            <ul>
                                <li><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "location"), "city"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "location"), "icaoCode"), "html", null, true);
        echo ")</span></li>
                                <li>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "location"), "city"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "location"), "state"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "location"), "countryCode"), "html", null, true);
        echo "</li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"btn-wrap\">
                        <button class=\"btn btn-info\">Get Quote</button>
                    </div>
                </div>
            </div>
            <!-- block-info -->
        </div>
        <!-- information -->
        <div class=\"container info-line ie-fix\">
            <ul class=\"links\">
                <li><a class=\"download\" href=\"#\"><span>Download</span> Aircraft Sheet</a></li>
                <li><a class=\"video\" data-target=\"#video\" data-toggle=\"modal\" href=\"#\">Watch Video</a></li>
            </ul>
            <!-- / links -->
            <div class=\"widget-holder\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-widget-01.png"), "html", null, true);
        echo "\" alt=\"\">
                <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-widget-02.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
        <!-- / info-line -->
    </section><!-- search-category -->
    <section class=\"safety-ratings\">
        <div class=\"container\">
            <h2>Safety Ratings</h2>
            <ul class=\"list\">
                <li>
                    <a href=\"#\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-01.png"), "html", null, true);
        echo "\"
                                     alt=\"\"></a>
                </li>
                <li>
                    <a href=\"#\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-02.png"), "html", null, true);
        echo "\"
                                     alt=\"\"></a>
                </li>
                <li>
                    <a href=\"#\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-03.png"), "html", null, true);
        echo "\"
                                     alt=\"\"></a>
                </li>
                <li>
                    <a href=\"#\"><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-04.png"), "html", null, true);
        echo "\"
                                     alt=\"\"></a>
                </li>
                <li>
                    <a href=\"#\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-safety-ratings-05.png"), "html", null, true);
        echo "\"
                                     alt=\"\"></a>
                </li>
            </ul>
        </div>
    </section><!-- search-category -->
    <section class=\"details-operator\">
        <div class=\"container\">
            <h2>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "name"), "html", null, true);
        echo " Details</h2>
            <ul class=\"list\">
                <li><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
        echo "\" alt=\"\"><span><a href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "name"), "html", null, true);
        echo "</a></span>
                </li>
                <li><img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "contactName"), "html", null, true);
        echo "</li>
                <li><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-003.png"), "html", null, true);
        echo "\" alt=\"\"><ahref=\"callto:";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "contactPhone"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "contactPhone"), "html", null, true);
        echo "</a></li>
            </ul>
            <ul class=\"list cell-01\">
                <li><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-002.png"), "html", null, true);
        echo "\" alt=\"\"><a
                            href=\"http://";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "website"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "website"), "html", null, true);
        echo "</a>
                </li>
                <li><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-004.png"), "html", null, true);
        echo "\" alt=\"\">Certificate #<span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "certificateNumber"), "html", null, true);
        echo "</span>
                </li>
            </ul>
            <div class=\"location\">
                <address>
                    <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
        echo "\" alt=\"\">
                    <span><a href=\"#\">";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "address1"), "html", null, true);
        echo "</a></span>
                    <span>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "city"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "state"), "html", null, true);
        echo "</span>
                    <span>";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "country"), "html", null, true);
        echo "</span>
                </address>
                <ul class=\"social\">
                    <li><a href=\"#\" class=\"facebook\">facebook</a></li>
                    <li><a href=\"#\" class=\"linkedin\">linkedin</a></li>
                    <li><a href=\"#\" class=\"youtube\">youtube</a></li>
                    <li><a href=\"#\" class=\"twitter\">twitter</a></li>
                    <li><a href=\"#\" class=\"google\">google+</a></li>
                </ul>
                <!-- / social -->
            </div>
        </div>
    </section><!-- / operator-info -->
    <section class=\"about-operator parallax-bg-01\">
        <div class=\"container\">
            <h2>About ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "name"), "html", null, true);
        echo "</h2>

            <div class=\"text-holder\">
                <p>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "operator"), "about"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </section>
    <section class=\"map-holder w1\">
        <div class=\"w2\">
            <div class=\"w3 full-width-map\">
                ";
        // line 146
        echo "                <div id=\"map-canvas\"></div>
            </div>
        </div>
    </section><!-- map-holder -->
    <section class=\"available-flights available-flights-changes\">
        <div class=\"container\">
            <h2>Empty Leg Availability</h2>
            <ul class=\"list\">
\t\t";
        // line 154
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["charterAircraft"]) ? $context["charterAircraft"] : null), "emptylegs"));
        foreach ($context['_seq'] as $context["_key"] => $context["emptyleg"]) {
            // line 155
            echo "\t\t    <li>
\t\t\t<ul>
\t\t\t    <li class=\"cell-01\">
\t\t\t\t<img src=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t";
            // line 159
            if ($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "origin")) {
                echo " <strong> ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "origin"), "city") . ", ") . $this->getAttribute($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "origin"), "state")), "html", null, true);
                echo " ";
            }
            echo " </strong> &raquo; ";
            if ($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "destination")) {
                echo " <strong>";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "destination"), "city") . ", ") . $this->getAttribute($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "destination"), "state")), "html", null, true);
                echo "</strong> ";
            }
            // line 160
            echo "\t\t\t    </li>
\t\t\t    <li class=\"cell-02\">
\t\t\t\t<img src=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-005.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t<span>";
            // line 163
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "fromDate"), "d/m/Y"), "html", null, true);
            echo "</span> &raquo; <span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "toDate"), "d/m/Y"), "html", null, true);
            echo "</span>
\t\t\t    </li>
\t\t\t    <li class=\"cell-03\">
\t\t\t\t<img src=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-002.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t";
            // line 167
            if ($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "aircraft")) {
                // line 168
                echo "\t\t\t\t    ";
                if ($this->getAttribute($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "aircraft"), "model")) {
                    // line 169
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "aircraft"), "model"), "type")) {
                        echo "\t
\t\t\t\t\t    ";
                        // line 170
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["emptyleg"]) ? $context["emptyleg"] : null), "aircraft"), "model"), "type"), "name"), "html", null, true);
                        echo "
\t\t\t\t\t";
                    }
                    // line 172
                    echo "\t\t\t\t    ";
                }
                // line 173
                echo "\t\t\t\t";
            }
            // line 174
            echo "\t\t\t    </li>
\t\t\t    <li class=\"cell-04\">
\t\t\t\t<button class=\"btn btn-info\">Get Quote</button>
\t\t\t    </li>
\t\t\t</ul>
\t\t    </li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emptyleg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </ul>
        </div>
    </section><!-- / available-flights -->
    <section class=\"aircraft-area aircraft-area-changes\" id=\"aircraft\">
        <div class=\"container\">
\t    ";
        // line 186
        if (((array_key_exists("similarAircrafts", $context) && ((isset($context["similarAircrafts"]) ? $context["similarAircrafts"] : null) != false)) && (twig_length_filter($this->env, (isset($context["similarAircrafts"]) ? $context["similarAircrafts"] : null)) > 0))) {
            // line 187
            echo "            <header class=\"headline\">
                <h2>Similar Aircrafts</h2>
            </header>
            
            <div class=\"aircraft-slider\" id=\"carousel\">
                <ul class=\"slides\">
\t\t    ";
            // line 193
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["similarAircrafts"]) ? $context["similarAircrafts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["similarAircraft"]) {
                // line 194
                echo "                    <li>
\t\t\t";
                // line 195
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "images")) > 0)) {
                    // line 196
                    echo "\t\t\t    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "images"), "first"), "imagename"))), "html", null, true);
                    echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t\t";
                } else {
                    // line 198
                    echo "\t\t\t    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                    echo "\" alt=\"\" width=\"292\" height=\"196\" >
\t\t\t";
                }
                // line 200
                echo "                        ";
                // line 201
                echo "                        <div class=\"descr\">
                            <h3>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "name"), "html", null, true);
                echo "</h3>
                            <ul>
                                <li>";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "model"), "type"), "name"), "html", null, true);
                echo "</li>
                                <li>Seats: ";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "seats"), "html", null, true);
                echo "</li>
                                <li>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "tailNumber"), "html", null, true);
                echo "</li>
                            </ul>
                            <a href=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_charter_aircraft_detail", array("operator" => $this->getAttribute($this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "operator"), "slug"), "aircraft" => $this->getAttribute($this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "model"), "slug"), "tail" => $this->getAttribute((isset($context["similarAircraft"]) ? $context["similarAircraft"] : null), "tailnumber"))), "html", null, true);
                echo "\"><button class=\"btn btn-primary\">View More</button></a>
                        </div>
                        <!-- descr -->
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similarAircraft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                </ul>
            </div>
            <!-- aircraft-slider -->
            ";
        }
        // line 217
        echo "        </div>
    </section><!-- aircraft-area -->
";
    }

    // line 221
    public function block_javascripts($context, array $blocks = array())
    {
        // line 222
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.full-width-map').width(\$(document).width());
            var mapOptions = {
                center: new google.maps.LatLng(-34.397, 150.644),
                zoom: 8,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById(\"map-canvas\"),
                    mapOptions);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:CharterAircraft:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 201,  439 => 200,  418 => 193,  410 => 187,  408 => 186,  401 => 181,  389 => 174,  386 => 173,  383 => 172,  378 => 170,  373 => 169,  370 => 168,  364 => 166,  356 => 163,  352 => 162,  348 => 160,  336 => 159,  332 => 158,  327 => 155,  303 => 138,  265 => 117,  255 => 112,  244 => 109,  191 => 85,  594 => 452,  591 => 451,  580 => 443,  570 => 436,  561 => 430,  553 => 425,  544 => 419,  525 => 403,  520 => 401,  507 => 391,  497 => 384,  488 => 222,  471 => 367,  452 => 351,  447 => 349,  434 => 339,  424 => 332,  334 => 269,  325 => 263,  306 => 247,  233 => 195,  313 => 146,  277 => 117,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 287,  344 => 140,  323 => 154,  320 => 128,  316 => 126,  307 => 123,  304 => 128,  296 => 120,  286 => 117,  279 => 120,  250 => 98,  205 => 93,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 217,  475 => 262,  425 => 195,  422 => 194,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 91,  192 => 88,  150 => 63,  211 => 94,  197 => 107,  20 => 1,  34 => 5,  104 => 43,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 221,  473 => 213,  470 => 136,  467 => 256,  465 => 134,  462 => 208,  449 => 204,  443 => 124,  433 => 198,  431 => 248,  419 => 115,  415 => 326,  404 => 111,  369 => 102,  351 => 280,  347 => 97,  345 => 96,  342 => 274,  340 => 94,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 245,  297 => 135,  291 => 120,  288 => 235,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 110,  245 => 62,  242 => 103,  239 => 123,  236 => 96,  231 => 57,  218 => 51,  216 => 101,  213 => 49,  195 => 89,  186 => 37,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 67,  126 => 54,  96 => 34,  184 => 81,  110 => 25,  83 => 27,  23 => 3,  81 => 27,  174 => 82,  84 => 29,  70 => 20,  152 => 73,  148 => 31,  74 => 25,  160 => 66,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 217,  257 => 66,  253 => 105,  249 => 129,  234 => 106,  188 => 87,  185 => 117,  172 => 117,  146 => 61,  137 => 66,  134 => 47,  114 => 42,  90 => 27,  77 => 22,  65 => 21,  37 => 5,  237 => 102,  228 => 105,  225 => 44,  223 => 95,  215 => 134,  207 => 109,  198 => 89,  180 => 85,  167 => 92,  165 => 73,  161 => 81,  157 => 76,  155 => 100,  153 => 36,  124 => 63,  113 => 26,  53 => 12,  145 => 82,  139 => 65,  58 => 18,  120 => 62,  97 => 59,  52 => 14,  480 => 373,  474 => 161,  469 => 158,  461 => 155,  457 => 206,  453 => 205,  444 => 202,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 196,  423 => 116,  413 => 134,  409 => 113,  407 => 321,  402 => 130,  398 => 315,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 299,  374 => 297,  368 => 167,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 125,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 116,  278 => 228,  268 => 106,  264 => 142,  258 => 101,  252 => 211,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 97,  177 => 77,  169 => 86,  140 => 59,  132 => 57,  128 => 46,  111 => 67,  107 => 83,  61 => 17,  273 => 119,  269 => 118,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 101,  230 => 82,  227 => 81,  224 => 71,  221 => 103,  219 => 92,  217 => 135,  208 => 90,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 60,  119 => 53,  108 => 88,  102 => 45,  71 => 24,  67 => 22,  63 => 22,  59 => 16,  47 => 12,  38 => 6,  94 => 28,  89 => 29,  85 => 25,  79 => 23,  75 => 23,  68 => 22,  56 => 15,  50 => 15,  29 => 3,  87 => 26,  72 => 21,  55 => 14,  21 => 2,  26 => 3,  98 => 48,  93 => 27,  88 => 60,  78 => 25,  46 => 9,  27 => 5,  40 => 9,  44 => 12,  35 => 6,  31 => 4,  43 => 8,  41 => 6,  28 => 3,  201 => 88,  196 => 90,  183 => 82,  171 => 84,  166 => 68,  163 => 91,  158 => 69,  156 => 64,  151 => 74,  142 => 90,  138 => 62,  136 => 68,  123 => 44,  121 => 97,  117 => 49,  115 => 41,  105 => 37,  101 => 36,  91 => 44,  69 => 17,  66 => 14,  62 => 12,  49 => 11,  24 => 1,  32 => 6,  25 => 4,  22 => 2,  19 => 1,  209 => 82,  203 => 89,  199 => 67,  193 => 102,  189 => 83,  187 => 88,  182 => 98,  176 => 84,  173 => 76,  168 => 96,  164 => 67,  162 => 72,  154 => 69,  149 => 64,  147 => 35,  144 => 70,  141 => 70,  133 => 61,  130 => 56,  125 => 44,  122 => 53,  116 => 41,  112 => 89,  109 => 38,  106 => 54,  103 => 28,  99 => 36,  95 => 43,  92 => 30,  86 => 28,  82 => 32,  80 => 26,  73 => 24,  64 => 27,  60 => 26,  57 => 16,  54 => 9,  51 => 13,  48 => 13,  45 => 10,  42 => 10,  39 => 6,  36 => 5,  33 => 7,  30 => 3,);
    }
}
