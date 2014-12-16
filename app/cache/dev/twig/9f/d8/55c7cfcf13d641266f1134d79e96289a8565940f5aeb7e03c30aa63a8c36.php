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
        ";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aircrafts"]) ? $context["aircrafts"] : $this->getContext($context, "aircrafts")));
        foreach ($context['_seq'] as $context["_key"] => $context["aircraft"]) {
            // line 189
            echo "        <div class=\"info-aircraft\">
            <div class=\"check\">
                <input id=\"lbl-007\" type=\"checkbox\">
                <label for=\"lbl-007\"><span>select</span></label>
            </div><!-- / check-col -->
            <div class=\"img-holder\">
                ";
            // line 195
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "model"), "images")) > 0)) {
                // line 196
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "model"), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"image\" width=\"232\" height=\"176\">
                    <span class=\"mask-01\">
                        <a href=\" ";
                // line 198
                echo twig_escape_filter($this->env, ("images/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "model"), "images"), "first"), "imagename")), "html", null, true);
                echo "\" data-toggle=\"lightbox\" data-parent=\".select-aicraft\" data-gallery=\"multiimages\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "model"), "name"), "html", null, true);
                echo "\" data-footer=\"Get Quote: 1-800-538-6070\">gallery</a>
                    </span>
                ";
            } else {
                // line 201
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"232\" height=\"176\">
                    <span class=\"mask-01\">
                        <a href=\" ";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                echo "\" data-toggle=\"lightbox\" data-parent=\".select-aicraft\" data-gallery=\"multiimages\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "model"), "name"), "html", null, true);
                echo "\" data-footer=\"Get Quote: 1-800-538-6070\">gallery</a>
                    </span>
                ";
            }
            // line 206
            echo "
            </div>
            <div class=\"holder\">
                <header class=\"heading\">
                    <strong class=\"title\"><a href=\"";
            // line 210
            echo twig_escape_filter($this->env, ("/private-jets/" . $this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "model"), "slug")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "model"), "name"), "html", null, true);
            echo "</a></strong>
                    <ul class=\"info\">
                        <li>";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "seats"), "html", null, true);
            echo "</li>
                        <li>Tail # <a href=\"#\">";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "tailNumber"), "html", null, true);
            echo "</a></li>
                    </ul>
                    <a data-toggle=\"modal\" data-target=\"#add-favorite\" href=\"#\" class=\"add-favorite\"><span>Add</span> Favorite<strong> !</strong></a>
                </header>
                <div class=\"frame\">
                    <ul class=\"list-info list-info-big\">
                        <li>
                            <a href=\"operator-profile.html\" class=\"tooltip-link\" data-placement=\"top\" title=\"\">
                                <img src=\" ";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-001.png"), "html", null, true);
            echo "\" alt=\"\" >
                                ";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "operator"), "name"), "html", null, true);
            echo "
                                <em> ";
            // line 223
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "emptylegs"), "first")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "emptylegs"), "first"), "phone")) : ("")), "html", null, true);
            echo " </em>
                            </a>
                        </li>
                        <li>
                            <img src=\" ";
            // line 227
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-dollar.png"), "html", null, true);
            echo "\" alt=\"\" >
                            <strong>\$750/hr</strong>
                        </li>
                        <li>
                                        <span data-toggle=\"modal\" data-target=\"#contact-us\" class=\"contact\">
                                            <img src=\" ";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico08.png"), "html", null, true);
            echo "\" alt=\"\" >
                                            <span>Contact</span>
                                        </span>
                        </li>
                        <li>
                            <a data-toggle=\"modal\" data-target=\"#location\" href=\"#\" class=\"tooltip-link\" data-placement=\"top\" title=\"18 Miles From LAX\">
                                <img src=\" ";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-001.png"), "html", null, true);
            echo "\" alt=\"\" >
                                ";
            // line 239
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "location")) ? ($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "location"), "city")) : ("")), "html", null, true);
            echo "
                                <em>";
            // line 240
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "location")) ? ($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "location"), "closestCityDistanceMiles")) : ("")), "html", null, true);
            echo " From ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "location")) ? ($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : $this->getContext($context, "aircraft")), "location"), "closestCity")) : ("")), "html", null, true);
            echo " </em>
                            </a>
                        </li>
                    </ul><!-- / list-info -->
                    <a href=\"#\" class=\"phone visible-xs\"></a>
                    <img class=\"custom-logo\" src=\" ";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img18.png"), "html", null, true);
            echo "\" alt=\"image\">
                </div>
            </div>
        </div><!-- / info-aircraft -->

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aircraft'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "
    </form>
    </div><!-- / select-aicraft -->
";
    }

    // line 256
    public function block_modals($context, array $blocks = array())
    {
        // line 257
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
        return array (  365 => 257,  362 => 256,  355 => 251,  343 => 245,  333 => 240,  329 => 239,  325 => 238,  316 => 232,  308 => 227,  301 => 223,  297 => 222,  293 => 221,  282 => 213,  278 => 212,  271 => 210,  265 => 206,  257 => 203,  251 => 201,  243 => 198,  237 => 196,  235 => 195,  227 => 189,  223 => 188,  39 => 6,  36 => 5,  30 => 3,);
    }
}
