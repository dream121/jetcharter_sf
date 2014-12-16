<?php

/* JetChartersPublicBundle:CharterAircraft:index.html.twig */
class __TwigTemplate_9fd855c7cfcf13d641266f1134d79e96289a8565940f5aeb7e03c30aa63a8c36 extends Twig_Template
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
        echo "JetChartersPublicBundle:CharterAircraft:index";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"head-area parallax-bg\">
        <h1>Complete Form &amp; Select Aircraft to Recieve Quotes</h1>
        <div class=\"setting-bar\">
            <div class=\"container\">
                <div class=\"holder clearfix\">
                    <ul class=\"option\">
                        <li><a href=\"#\" class=\"map ie-fix\" data-toggle=\"modal\" data-target=\"#location\"><span>Map</span></a></li>
                        <li>
                            <a href=\"#\" class=\"preferences ie-fix\"><span>Preferences</span></a>
                            <div class=\"preference ie-fix\">
                                <form action=\"#\">
                                    <header class=\"title clearfix\">
                                        <strong>Search Preferences</strong>
                                        <strong class=\"hidden-xs\">intinerary Details</strong>
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
                                                <select title=\"Safety Rating\" class=\"form-control\">
                                                    <option value=\"1\">1</option>
                                                    <option value=\"1\">2</option>
                                                    <option value=\"1\">3</option>
                                                    <option value=\"1\">4</option>
                                                </select>
                                            </div><!-- / col-02 -->
                                        </div><!-- / two-columns -->
                                        <div class=\"info-box search-form\">
                                            <strong class=\"sub-title visible-xs\">intinerary Details</strong>
                                            <div class=\"row\">
                                                <div class=\"col-xs-6\">
                                                    <select title=\"Trip Type\" class=\"form-control\">
                                                        <option value=\"1\">1</option>
                                                        <option value=\"1\">2</option>
                                                        <option value=\"1\">3</option>
                                                        <option value=\"1\">4</option>
                                                    </select>
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <select title=\"Passengers\" class=\"form-control\">
                                                        <option value=\"1\">1</option>
                                                        <option value=\"1\">2</option>
                                                        <option value=\"1\">3</option>
                                                        <option value=\"1\">4</option>
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
                            </div><!-- / preference -->
                        </li>
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
    <form action=\"#\">
    <div class=\"info-aircraft\">
        <div class=\"check\">
            <input id=\"lbl-007\" type=\"checkbox\">
            <label for=\"lbl-007\"><span>select</span></label>
        </div><!-- / check-col -->
        <div class=\"img-holder\">
            <img src=\" ";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img17.jpg"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t<span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\" ";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img13.png"), "html", null, true);
        echo "\" data-toggle=\"lightbox\" data-parent=\".select-aicraft\" data-gallery=\"multiimages\" data-title=\"Name Of Jet\" data-footer=\"Get Quote: 1-800-538-6070\">gallery</a>
\t\t\t\t\t\t</span>
        </div>
        <div class=\"holder\">
            <header class=\"heading\">
                <strong class=\"title\"><a href=\"aircraft.html\">Global Express</a></strong>
                <ul class=\"info\">
                    <li>Seats 13</li>
                    <li>Tail # <a href=\"#\">N184WW</a></li>
                </ul>
                <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong> !</strong></a>
            </header>
            <div class=\"frame\">
                <ul class=\"list-info list-info-big\">
                    <li>
                        <a href=\"operator-profile.html\" class=\"tooltip-link\" data-placement=\"top\" title=\"(800) 555-5555\">
                            <img src=\" ";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            Avjet Corperation
                            <em>(800) 555-5555</em>
                        </a>
                    </li>
                    <li>
                        <img src=\" ";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
        echo "\" alt=\"\" >
                        <strong>\$750/hr</strong>
                    </li>
                    <li>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#contact-us\" class=\"contact\">
\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t<span>Contact</span>
\t\t\t\t\t\t\t\t\t</span>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" data-target=\"#location\" href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"18 Miles From LAX\">
                            <img src=\" ";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            BUR
                            <em>18 Miles From LAX</em>
                        </a>
                    </li>
                </ul><!-- / list-info -->
                <a href=\"#\" class=\"phone visible-xs\"></a>
                <img class=\"custom-logo\" src=\" ";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img18.png"), "html", null, true);
        echo "\" alt=\"image\">
            </div>
        </div>
    </div><!-- / info-aircraft -->
    <div class=\"info-aircraft\">
        <div class=\"check\">
            <input id=\"lbl-008\" type=\"checkbox\">
            <label for=\"lbl-008\"><span>select</span></label>
        </div><!-- / check-col -->
        <div class=\"img-holder\">
            <img src=\" ";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img17.jpg"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t<span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\" ";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img14.png"), "html", null, true);
        echo "\" data-toggle=\"lightbox\" data-parent=\".select-aicraft\" data-gallery=\"multiimages\" data-title=\"Name Of Jet\" data-footer=\"Get Quote: 1-800-538-6070\">gallery</a>
\t\t\t\t\t\t</span>
        </div>
        <div class=\"holder\">
            <header class=\"heading\">
                <strong class=\"title\"><a href=\"aircraft.html\">Global Express</a></strong>
                <ul class=\"info\">
                    <li>Seats 13</li>
                    <li>Tail # <a href=\"#\">N184WW</a></li>
                </ul>
                <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong> !</strong></a>
            </header>
            <div class=\"frame\">
                <ul class=\"list-info list-info-big\">
                    <li>
                        <a href=\"operator-profile.html\" class=\"tooltip-link\" data-placement=\"top\" title=\"(800) 555-5555\">
                            <img src=\" ";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            Avjet Corperation
                            <em>(800) 555-5555</em>
                        </a>
                    </li>
                    <li>
                        <img src=\" ";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
        echo "\" alt=\"\" >
                        <strong>\$750/hr</strong>
                    </li>
                    <li>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#contact-us\" class=\"contact\">
\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t</span>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" data-target=\"#location\" href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"18 Miles From LAX\">
                            <img src=\" ";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            BUR
                            <em>18 Miles From LAX</em>
                        </a>
                    </li>
                </ul><!-- / list-info -->
                <a href=\"#\" class=\"phone visible-xs\"></a>
                <img class=\"custom-logo\" src=\" ";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img18.png"), "html", null, true);
        echo "\" alt=\"image\">
            </div>
        </div>
    </div><!-- / info-aircraft -->
    <div class=\"info-aircraft selected-block\">
        <div class=\"check\">
            <input id=\"lbl-009\" type=\"checkbox\" checked=\"checked\">
            <label for=\"lbl-009\"><span>Selected</span></label>
        </div><!-- / check-col -->
        <div class=\"img-holder\">
            <img src=\" ";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img17.jpg"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t<span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\" ";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img14.png"), "html", null, true);
        echo "\" data-toggle=\"lightbox\" data-parent=\".select-aicraft\" data-gallery=\"multiimages\" data-title=\"Name Of Jet\" data-footer=\"Get Quote: 1-800-538-6070\">gallery</a>
\t\t\t\t\t\t</span>
        </div>
        <div class=\"holder\">
            <header class=\"heading\">
                <strong class=\"title\"><a href=\"aircraft.html\">Global Express</a></strong>
                <ul class=\"info\">
                    <li>Seats 13</li>
                    <li>Tail # <a href=\"#\">N184WW</a></li>
                </ul>
                <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite selected\"><span>Add</span> Favorite<strong> !</strong></a>
            </header>
            <div class=\"frame\">
                <ul class=\"list-info list-info-big\">
                    <li>
                        <a href=\"operator-profile.html\" class=\"tooltip-link\" data-placement=\"top\" title=\"(800) 555-5555\">
                            <img src=\" ";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            Avjet Corperation
                            <em>(800) 555-5555</em>
                        </a>
                    </li>
                    <li>
                        <img src=\" ";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
        echo "\" alt=\"\" >
                        <strong>\$750/hr</strong>
                    </li>
                    <li>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#contact-us\" class=\"contact\">
\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t</span>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" data-target=\"#location\" href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"18 Miles From LAX\">
                            <img src=\" ";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            BUR
                            <em>18 Miles From LAX</em>
                        </a>
                    </li>
                </ul><!-- / list-info -->
                <a href=\"#\" class=\"phone visible-xs\"></a>
                <img class=\"custom-logo\" src=\" ";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img18.png"), "html", null, true);
        echo "\" alt=\"image\">
            </div>
        </div>
    </div><!-- / info-aircraft -->
    <div class=\"info-aircraft\">
        <div class=\"check\">
            <input id=\"lbl-010\" type=\"checkbox\">
            <label for=\"lbl-010\"><span>select</span></label>
        </div><!-- / check-col -->
        <div class=\"img-holder\">
            <img src=\" ";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img17.jpg"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t<span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\" ";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img14.png"), "html", null, true);
        echo "\" data-toggle=\"lightbox\" data-parent=\".select-aicraft\" data-gallery=\"multiimages\" data-title=\"Name Of Jet\" data-footer=\"Get Quote: 1-800-538-6070\">gallery</a>
\t\t\t\t\t\t</span>
        </div>
        <div class=\"holder\">
            <header class=\"heading\">
                <strong class=\"title\"><a href=\"aircraft.html\">Global Express</a></strong>
                <ul class=\"info\">
                    <li>Seats 13</li>
                    <li>Tail # <a href=\"#\">N184WW</a></li>
                </ul>
                <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong> !</strong></a>
            </header>
            <div class=\"frame\">
                <ul class=\"list-info list-info-big\">
                    <li>
                        <a href=\"operator-profile.html\" class=\"tooltip-link\" data-placement=\"top\" title=\"(800) 555-5555\">
                            <img src=\" ";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            Avjet Corperation
                            <em>(800) 555-5555</em>
                        </a>
                    </li>
                    <li>
                        <img src=\" ";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
        echo "\" alt=\"\" >
                        <strong>\$750/hr</strong>
                    </li>
                    <li>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#contact-us\" class=\"contact\">
\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t</span>
                    </li>
                    <li>
                        <a data-toggle=\"modal\" data-target=\"#location\" href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"18 Miles From LAX\">
                            <img src=\" ";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            BUR
                            <em>18 Miles From LAX</em>
                        </a>
                    </li>
                </ul><!-- / list-info -->
                <a href=\"#\" class=\"phone visible-xs\"></a>
                <img class=\"custom-logo\" src=\" ";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img18.png"), "html", null, true);
        echo "\" alt=\"image\">
            </div>
        </div>
    </div><!-- / info-aircraft -->
    <div class=\"info-aircraft\">
        <div class=\"check\">
            <input id=\"lbl-011\" type=\"checkbox\">
            <label for=\"lbl-011\"><span>select</span></label>
        </div><!-- / check-col -->
        <div class=\"img-holder\">
            <img src=\" ";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img17.jpg"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t<span class=\"mask-01\">
\t\t\t\t\t\t\t<a href=\" ";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img14.png"), "html", null, true);
        echo "\" data-toggle=\"lightbox\" data-parent=\".select-aicraft\" data-gallery=\"multiimages\" data-title=\"Name Of Jet\" data-footer=\"Get Quote: 1-800-538-6070\">gallery</a>
\t\t\t\t\t\t</span>
        </div>
        <div class=\"holder\">
            <header class=\"heading\">
                <strong class=\"title\"><a href=\"aircraft.html\">Global Express</a></strong>
                <ul class=\"info\">
                    <li>Seats 13</li>
                    <li>Tail # <a href=\"#\">N184WW</a></li>
                </ul>
                <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong> !</strong></a>
            </header>
            <div class=\"frame\">
                <ul class=\"list-info list-info-big\">
                    <li>
                        <a href=\"operator-profile.html\" class=\"tooltip-link\" data-placement=\"top\" title=\"(800) 555-5555\">
                            <img src=\" ";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
        echo "\" alt=\"\" >
                            Avjet Corperation
                            <em>(800) 555-5555</em>
                        </a>
                    </li>
                    <li>
                        <img src=\" ";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
        echo "\" alt=\"\" >
                        <strong>\$750/hr</strong>
                    </li>
                    <li>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#contact-us\" class=\"contact\">
\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t</span>
                    </li>
                    <li>
\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#location\" class=\"tooltip-link\" data-placement=\"top\" title=\"18 Miles From LAX\">
\t\t\t\t\t\t\t\t\t\t<img src=\" ";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\tBUR
\t\t\t\t\t\t\t\t\t\t<em>18 Miles From LAX</em>
\t\t\t\t\t\t\t\t\t</span>
                    </li>
                </ul><!-- / list-info -->
                <a href=\"#\" class=\"phone visible-xs\"></a>
                <img class=\"custom-logo\" src=\" ";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img18.png"), "html", null, true);
        echo "\" alt=\"image\">
            </div>
        </div>
    </div><!-- / info-aircraft -->
    </form>
    </div><!-- / select-aicraft -->
";
    }

    // line 451
    public function block_modals($context, array $blocks = array())
    {
        // line 452
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
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:CharterAircraft:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 201,  439 => 200,  418 => 193,  410 => 187,  408 => 186,  401 => 181,  389 => 174,  386 => 173,  383 => 172,  378 => 170,  373 => 169,  370 => 168,  364 => 166,  356 => 163,  352 => 162,  348 => 160,  336 => 159,  332 => 158,  327 => 155,  303 => 138,  265 => 117,  255 => 112,  244 => 109,  191 => 85,  594 => 452,  591 => 451,  580 => 443,  570 => 436,  561 => 430,  553 => 425,  544 => 419,  525 => 403,  520 => 401,  507 => 391,  497 => 384,  488 => 378,  471 => 367,  452 => 351,  447 => 349,  434 => 339,  424 => 332,  334 => 269,  325 => 263,  306 => 247,  233 => 195,  313 => 146,  277 => 117,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 287,  344 => 140,  323 => 154,  320 => 128,  316 => 126,  307 => 123,  304 => 128,  296 => 120,  286 => 117,  279 => 120,  250 => 98,  205 => 93,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 217,  475 => 262,  425 => 195,  422 => 194,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 91,  192 => 88,  150 => 63,  211 => 94,  197 => 107,  20 => 1,  34 => 5,  104 => 43,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 221,  473 => 213,  470 => 136,  467 => 256,  465 => 134,  462 => 208,  449 => 204,  443 => 124,  433 => 198,  431 => 248,  419 => 115,  415 => 326,  404 => 111,  369 => 102,  351 => 280,  347 => 97,  345 => 96,  342 => 274,  340 => 94,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 245,  297 => 135,  291 => 120,  288 => 235,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 110,  245 => 62,  242 => 103,  239 => 123,  236 => 96,  231 => 57,  218 => 51,  216 => 101,  213 => 49,  195 => 89,  186 => 37,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 67,  126 => 54,  96 => 34,  184 => 81,  110 => 25,  83 => 27,  23 => 3,  81 => 27,  174 => 82,  84 => 29,  70 => 20,  152 => 73,  148 => 31,  74 => 25,  160 => 66,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 217,  257 => 66,  253 => 105,  249 => 129,  234 => 106,  188 => 87,  185 => 117,  172 => 117,  146 => 61,  137 => 66,  134 => 47,  114 => 42,  90 => 27,  77 => 22,  65 => 21,  37 => 5,  237 => 102,  228 => 193,  225 => 44,  223 => 95,  215 => 134,  207 => 109,  198 => 89,  180 => 85,  167 => 92,  165 => 73,  161 => 81,  157 => 76,  155 => 100,  153 => 36,  124 => 63,  113 => 26,  53 => 12,  145 => 82,  139 => 65,  58 => 18,  120 => 62,  97 => 59,  52 => 14,  480 => 373,  474 => 161,  469 => 158,  461 => 155,  457 => 206,  453 => 205,  444 => 202,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 196,  423 => 116,  413 => 134,  409 => 113,  407 => 321,  402 => 130,  398 => 315,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 299,  374 => 297,  368 => 167,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 125,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 116,  278 => 228,  268 => 106,  264 => 142,  258 => 101,  252 => 211,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 97,  177 => 77,  169 => 86,  140 => 59,  132 => 57,  128 => 46,  111 => 67,  107 => 83,  61 => 17,  273 => 119,  269 => 222,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 101,  230 => 82,  227 => 81,  224 => 71,  221 => 103,  219 => 92,  217 => 135,  208 => 90,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 60,  119 => 53,  108 => 88,  102 => 45,  71 => 24,  67 => 22,  63 => 22,  59 => 16,  47 => 12,  38 => 6,  94 => 28,  89 => 29,  85 => 25,  79 => 23,  75 => 23,  68 => 22,  56 => 15,  50 => 15,  29 => 3,  87 => 26,  72 => 21,  55 => 14,  21 => 2,  26 => 3,  98 => 48,  93 => 27,  88 => 60,  78 => 25,  46 => 9,  27 => 5,  40 => 9,  44 => 12,  35 => 6,  31 => 4,  43 => 8,  41 => 6,  28 => 3,  201 => 88,  196 => 90,  183 => 82,  171 => 84,  166 => 68,  163 => 91,  158 => 69,  156 => 64,  151 => 74,  142 => 90,  138 => 62,  136 => 68,  123 => 44,  121 => 97,  117 => 49,  115 => 41,  105 => 37,  101 => 36,  91 => 44,  69 => 17,  66 => 14,  62 => 12,  49 => 11,  24 => 1,  32 => 6,  25 => 4,  22 => 2,  19 => 1,  209 => 82,  203 => 89,  199 => 67,  193 => 102,  189 => 83,  187 => 88,  182 => 98,  176 => 84,  173 => 76,  168 => 96,  164 => 67,  162 => 72,  154 => 69,  149 => 64,  147 => 35,  144 => 70,  141 => 70,  133 => 61,  130 => 56,  125 => 44,  122 => 53,  116 => 41,  112 => 89,  109 => 38,  106 => 54,  103 => 28,  99 => 36,  95 => 43,  92 => 30,  86 => 28,  82 => 32,  80 => 26,  73 => 24,  64 => 27,  60 => 26,  57 => 16,  54 => 9,  51 => 13,  48 => 13,  45 => 10,  42 => 10,  39 => 6,  36 => 5,  33 => 7,  30 => 3,);
    }
}
