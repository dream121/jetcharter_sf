<?php

/* JetChartersPublicBundle:Default:index.html.twig */
class __TwigTemplate_34f21fbe678960b42c70d5cc93cb58671d41e870c054bede87112ec4435d39d9 extends Twig_Template
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
        echo "<section class=\"intro\">
    <div class=\"container\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-01\" data-toggle=\"tab\">Charter</a></li>
            <li><a href=\"#tab-02\" data-toggle=\"tab\">Empty Legs</a></li>
            <li><a href=\"#tab-03\" data-toggle=\"tab\">Air Ambulance</a></li>
        </ul>
        <div class=\"row\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-01\">
                    <h2>Find A Charter</h2>
                    <div class=\"search-form\">
                        <a href=\"#\" class=\"multi-search\">Multi-Leg Search</a>
                        <form action=\"#\">
                            <div class=\"cel\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Departure City/Airport Code\" />
                            </div>
                            <div class=\"cel\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Destination City/Airport Code\" />
                            </div>
                            <div class=\"cel-01\">
                                <div class=\"datepicker-holder\">
                                    <input type=\"text\" class=\"form-control datepicker\" placeholder=\"Depart\" id=\"from\">
                                </div>
                                <div class=\"datepicker-holder\">
                                    <input type=\"text\" class=\"form-control datepicker\" placeholder=\"Return\" id=\"to\">
                                </div>
                            </div><!-- cel -->
                            <div class=\"cel-02\">
                                <select title=\"Passengers\" class=\"form-control\">
                                    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                                    <option value=\"16\">16+</option>
                                </select>
                            </div>
                            <div class=\"btn-holder\">
                                <button class=\"btn btn-info\">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tab-02\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, harum, sunt cumque placeat deleniti animi consequatur rem quos amet voluptatum nisi in eius architecto neque magni! Laboriosam, consectetur laborum error.</div>
                <div class=\"tab-pane\" id=\"tab-03\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, odit, harum blanditiis inventore earum ipsa maiores sint ut recusandae adipisci mollitia in eos qui itaque dolores minus amet enim vitae?</div>
            </div>
        </div>
    </div>
</section><!-- intro -->
<section class=\"partners container\">
    <div class=\"col\">
        <h3>Members of:</h3>
        <ul>
            <li><a href=\"#\" class=\"ico-01\">safety</a></li>
            <li><a href=\"#\" class=\"ico-02\">argus</a></li>
            <li><a href=\"#\" class=\"ico-03\">nbaa</a></li>
            <li><a href=\"#\" class=\"ico-04\">bbb</a></li>
        </ul>
    </div>
    <div class=\"col\">
        <h3>Featured In:</h3>
        <ul>
            <li><a href=\"#\" class=\"ico-05\">safety</a></li>
            <li><a href=\"#\" class=\"ico-06\">argus</a></li>
        </ul>
    </div>
</section><!-- partners -->
<section class=\"aircraft-area\" id=\"aircraft\">
    <div class=\"container\">
        <header class=\"headline\">
            <h2>Featured Aircraft</h2>
            <a href=\"#\" class=\"sub-link\">Knoxville, TN</a>
            <div class=\"change-location\">
                <h3>Change Location</h3>
                <div class=\"change-form\">
                    <form action=\"#\">
                        <div class=\"holder\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Location By City Name\" />
                        </div>
                        <button class=\"btn btn-info\">Save</button>
                    </form>
                </div>
            </div><!-- change-location -->
        </header>
        <div class=\"aircraft-slider\" id=\"carousel\">
            <ul class=\"slides\">
                ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["featured_charters"]) ? $context["featured_charters"] : $this->getContext($context, "featured_charters")));
        foreach ($context['_seq'] as $context["_key"] => $context["charter"]) {
            // line 90
            echo "                <li>
                    ";
            // line 91
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "images")) > 0)) {
                // line 92
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "images"), "first"), "webpath")), "html", null, true);
                echo "\" alt=\"image\">
                    ";
            } else {
                // line 94
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"292\" height=\"196\" >
                    ";
            }
            // line 96
            echo "                    <div class=\"descr\">
                        <h3>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "model"), "name"), "html", null, true);
            echo "</h3>
                        <ul>
                            <li>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "model"), "type"), "name"), "html", null, true);
            echo "</li>
                            <li>Seats: ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "seats"), "html", null, true);
            echo "</li>
                            <li>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "location"), "airportcode"), "html", null, true);
            echo "</li>
                        </ul>
                        <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_charter_aircraft_detail", array("operator" => $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "operator"), "slug"), "aircraft" => $this->getAttribute($this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "model"), "slug"), "tail" => $this->getAttribute((isset($context["charter"]) ? $context["charter"] : $this->getContext($context, "charter")), "tailnumber"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">View More</a>
                    </div><!-- descr -->
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </ul>
        </div><!-- aircraft-slider -->
    </div>
</section><!-- aircraft-area -->
<section class=\"search-category parallax-bg\" >
    <div class=\"container\">
        <header class=\"headline\">
            <h2>Search Aircraft By Category</h2>
            <a href=\"#\" class=\"sub-link\">Advanced <span>Aircraft</span> Search</a>
        </header>
        <img class=\"ico-plane\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-plane.png"), "html", null, true);
        echo "\" alt=\"image\">
        <div class=\"search-category-form\">
            <form action=\"/charter-aircraft/\" method=\"post\" name=\"search-category\">
                <div class=\"cel\">
                    <select title=\"All\" class=\"form-control\" name=\"aircraft_type_private_jets\" id=\"aircraft_type_private_jets\" >
                        ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 123
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "name"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                    </select>
                </div><!-- cel -->
                <div class=\"cel-01\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"City/Airport Code\" name =\"city_airport_code_private_jets\" id=\"city_airport_code_private_jets\" />
                </div><!-- cel-01 -->
                <div class=\"cel-02\">
                    <select title=\"Radius\" class=\"form-control\" name=\"radius_private_jets\" id=\"radius_private_jets\">
                        <option value=\"50\">50 mi</option>
                        <option value=\"100\">100 mi</option>
                        <option value=\"250\">250 mi</option>
                        <option value=\"500\">500 mi</option>
                    </select>
                </div><!-- cel -->
                <div class=\"btn-holder\">
                    <button class=\"btn btn-info submit\" type=\"submit\">Search</button>
                </div>
            </form>
        </div>
    </div>
</section><!-- search-category -->
<div class=\"map-section\">
    <div class=\"container\">
        <header class=\"headline\">
            <h2>Popular Charters Cities</h2>
            <a href=\"#\" class=\"sub-link hidden-xs\">View World Map</a>
        </header><!-- / headline -->
        <div id=\"map\" style=\"width:908px; height: 600px\">
            <ul id=\"city-list\" class=\"city\">
                <li><a href=\"#\">Carlsbad</a></li>
                <li><a href=\"#\">Los Angeles</a></li>
                <li class=\"active\"><a href=\"#\">San Diego</a></li>
                <li><a href=\"#\">San Francisco</a></li>
                <li><a href=\"#\">Sacramento</a></li>
            </ul>
            <ul  class=\"city mobile\">
                <li><a href=\"#\">Carlsbad</a></li>
                <li><a href=\"#\">Los Angeles</a></li>
                <li><a href=\"#\">San Diego</a></li>
                <li><a href=\"#\">New York</a></li>
                <li><a href=\"#\">Miami</a></li>
                <li><a href=\"#\">Portland</a></li>
            </ul>
            <ul  class=\"city mobile\">
                <li><a href=\"#\">Knoxville</a></li>
                <li><a href=\"#\">Denver</a></li>
                <li><a href=\"#\">White Plains</a></li>
                <li><a href=\"#\">Dallas</a></li>
                <li><a href=\"#\">Houston</a></li>
                <li><a href=\"#\">Orlando</a></li>
            </ul>
        </div><!-- map -->
    </div><!-- / container -->
</div><!-- / map -->
<section class=\"aircraft-types container\">
    <header class=\"headline\">
        <h2>Aircraft By Type</h2>
        <a href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("public_aircraft");
        echo "\" class=\"sub-link\">View All Aircrafts</a>
    </header>
    <ul>
        ";
        // line 184
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 185
            echo "        <li>
            <div class=\"img\">
                <img src=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/jetcharterspublic/images/img-0" . $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id")) . ".png")), "html", null, true);
            echo "\" alt=\"image\">
            </div>
            <h3><a href=\"";
            // line 189
            echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("public_aircraft") . "?aircraft_type_private_jets=") . $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "name")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "name"), "html", null, true);
            echo "</a></h3>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "    </ul>
</section><!-- aircraft-types -->
<section class=\"misssion\">
    <div class=\"container\">
        <header class=\"headline\">
            <h2>Our Mission</h2>
        </header>
        <div class=\"holder\">
            <div class=\"info\">
                <h3>Booking commercial airline travel is easy. Booking a private jet charter is not.... <span>We aim to <em>change</em> that.</span></h3>
                <p>Why should it be so tedious to book a private aircraft charter? We don't think it should be.Introducing <a href=\"#\">JetCharters.com</a> - our mission is to remove the mystery and put all the information on air charter and jet charter at your fingertips. That means with as little as one search or one phone call, you can research private planes available at charter airports around the world. Refine your search by airport, location, airplane type or whatever search criteria you choose, connect with the private charter operator and get ready to take your next trip.</p>
            </div>
            <div class=\"charters-fact\">
                <div class=\"video-holder\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#video\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-video.png"), "html", null, true);
        echo "\" alt=\"image\"></a>
                </div><!-- video-holder -->
                <div class=\"descr\">
                    <h3>Facts about private Jet Charters</h3>
                    <ul>
                        <li>A jet charter allows you access to 5000 destination charter airports vs. just 500.</li>
                        <li>Chartering a jet allows you to accomplish the most demanding business itinerary.</li>
                        <li>The service and convenience a private jet charter provides is unparalleled.</li>
                        <li>Whether a jet or air charter, travel anywhere, anytime on your schedule.</li>
                        <li>At private terminals, avoid crowded security lines of commercial airports and the jets they serve.</li>
                        <li>Your charter vacation starts the minute you board the private jet - not when you get to your destination.</li>
                        <li>You can have the charter operator plan catering aboard your next jet charter.</li>
                        <li>Travel with who you want aboard a charter jet.</li>
                        <li>Over 400 jets in our private jet search system. </li>
                    </ul>
                    <p><strong>Jet Charters</strong> - taking the hassle <em>out</em> of planning your next private aircraft charter.</p>
                </div>
            </div><!-- charters-fact -->
            <div class=\"charters-mobile\">
                <div class=\"img\">
                    <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-phone.png"), "html", null, true);
        echo "\" alt=\"image\">
                </div>
                <div class=\"descr\">
                    <h3>JetCharters Mobile</h3>
                    <p>The JetCharters.com application makes arranging private aviation easier for retail charter consumers by allowing one click access to aircraft near their current location, or by searching cities or airports. Users also have instant access to discount one way flight availability and the lastest in industry news.</p>
                    <ul>
                        <li><a href=\"#\"><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-appstore.png"), "html", null, true);
        echo "\" alt=\"image\"></a></li>
                        <li><a href=\"#\"><img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-playmarker.png"), "html", null, true);
        echo "\" alt=\"image\"></a></li>
                    </ul>
                </div><!-- descr -->
            </div><!-- charters-mobile -->
        </div><!-- holder -->
    </div>
</section><!-- misssion -->
<section class=\"safety container\">
    <header class=\"headline\">
        <h2>Argus Safety Compliance</h2>
    </header>
    <div class=\"holder\">
        <div class=\"info\">
            <h3>Safety</h3>
            <p>At <a href=\"#\">JetCharters.com</a>, we recognize safety is a top priority. Every aircraft listed on our website is required by the FAA to comply with Part 135 rules and regulations. FAA Part 135 is the operating standard at which aircraft safety, regulations, maintenance, and pilot licensure are ensured.</p>
        </div>
        <div class=\"about\">
            <div class=\"img\">
                <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-03.png"), "html", null, true);
        echo "\" alt=\"image\">
            </div>
            <div class=\"descr\">
                <h3>About ARGUS</h3>
                <p>ARGUS is the worldwide leader in performing on-site safety audits for corporate flight departments, charter operators, and commercial airlines. Founded in 1995, key ARGUS services include Charter Evaluation &amp; Qualification (CHEQ) and CHEQPoint, PRISM (Professional Resources In System Management), TRAQPak market intelligence data service, aircraft operating cost reports, market research, and aviation and travel consulting. For more information, please visit our safety page.</p>
            </div>
        </div>
    </div><!-- holder -->
</section><!-- safety -->
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 251,  359 => 233,  355 => 232,  346 => 226,  323 => 206,  307 => 192,  296 => 189,  291 => 187,  287 => 185,  283 => 184,  277 => 181,  219 => 125,  208 => 123,  204 => 122,  196 => 117,  184 => 107,  174 => 103,  169 => 101,  165 => 100,  161 => 99,  156 => 97,  153 => 96,  147 => 94,  141 => 92,  139 => 91,  136 => 90,  132 => 89,  78 => 37,  67 => 35,  63 => 34,  31 => 4,  28 => 3,);
    }
}
