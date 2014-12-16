<?php

/* JetChartersPublicBundle::base.html.twig */
class __TwigTemplate_32a1673902dccb054cff00f8e83800b63daab5a0ebe0a88ab874a820f20146d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'modals' => array($this, 'block_modals'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9e668b1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e668b1_0") : $this->env->getExtension('assets')->getAssetUrl("css/9e668b1_bootstrap_1.css");
            // line 14
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "9e668b1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e668b1_1") : $this->env->getExtension('assets')->getAssetUrl("css/9e668b1_datepicker_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "9e668b1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e668b1_2") : $this->env->getExtension('assets')->getAssetUrl("css/9e668b1_jquery-jvectormap_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "9e668b1_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e668b1_3") : $this->env->getExtension('assets')->getAssetUrl("css/9e668b1_select2_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "9e668b1_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e668b1_4") : $this->env->getExtension('assets')->getAssetUrl("css/9e668b1_styles_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "9e668b1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9e668b1") : $this->env->getExtension('assets')->getAssetUrl("css/9e668b1.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    
    <!--[if lt IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/css/ie.css"), "html", null, true);
        echo "\" media=\"screen\"/>
    <![endif]-->
    
    <style>
    .categories .row > div {
\t    padding:0;
    }
    .categories ul li {
\t    width:50%;
\t    float:left;
\t    padding:0;
    }
    </style>
</head>
<body>
<div class=\"wrapper\">
    <div class=\"mask\">&nbsp;</div>
    <header id=\"header\" class=\"navbar\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 40
        if ($this->env->getExtension('security')->isGranted("ROLE_OPERATOR")) {
            // line 41
            echo "                    <a class=\"btn btn-01\" href=\"";
            echo $this->env->getExtension('routing')->getPath("operator_dashboard");
            echo "\">Operator Panel</a>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "                    <a class=\"btn btn-01\"  href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_dashboard");
            echo "\">Admin Panel</a>
                ";
        } else {
            // line 45
            echo "                    <button class=\"btn btn-01\" data-toggle=\"modal\" data-target=\"#sign-in\">Sign In</button>
                ";
        }
        // line 47
        echo "                <strong class=\"logo\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("public_index");
        echo "\">Jet Charters.com World Wide Air Charter Marketplace</a></strong>
                <nav>
                    <div class=\"navbar-toggle-holder\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                data-target=\"#main-nav\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"main-nav\">
                        <ul class=\"nav nav-pills\">
                            <li class=\"desktop-hidden\"><a href=\"#\">home</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#video\">Video</a></li>
                            <li><a href=\"#\">Why Charter?</a></li>
                            <li><a href=\"#\">About Jet Charters</a></li>
                            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("public_blog");
        echo "\">Blog</a></li>
                            <li class=\"desktop-hidden\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#sign-in\">Sign
                                    In</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- container -->
    </header>
    <!-- header -->
    ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "    <footer id=\"footer\">
        <div class=\"container\">
            <a href=\"#\" class=\"btn-top ie-fix\">back-to-top</a>

            <div class=\"row\">
                <div class=\"col-md-3 col-sm-4 col-md-offset-1 hidden-xs\">
                    <strong class=\"title\">Explore Jet Charters</strong>
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("public_aircraft");
        echo "\">Aircraft by Type</a></li>
                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("public_empty_leg_index");
        echo "\">Empty Legs</a></li>
                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("public_air_ambulance");
        echo "\">Air Ambulance</a></li>
                        <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("public_airports");
        echo "\">Airport Lookup</a></li>
                        <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("public_blog");
        echo "\">Blog</a></li>
                        <li><a href=\"#\">List Your Aircraft</a></li>
                        <li><a href=\"#\">Contact Us</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-4 size-02 hidden-xs\">
                    <strong class=\"title\">Jet Charter Blog</strong>
                    ";
        // line 94
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersPublicBundle:Blog:recentBlog", array("footer" => true)));
        echo "
                    ";
        // line 104
        echo "                </div>
                <div class=\"col-sm-4 social-area\">
                    <strong class=\"title\">Follow Us</strong>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"facebook\">facebook</a></li>
                        <li><a href=\"#\" class=\"linkedin\">linkedin</a></li>
                        <li><a href=\"#\" class=\"youtube\">youtube</a></li>
                        <li><a href=\"#\" class=\"twitter\">twitter</a></li>
                        <li><a href=\"#\" class=\"google\">google+</a></li>
                        <li><a href=\"#\" class=\"rss\">rss</a></li>
                    </ul>
                    <!-- / social -->
                    <strong class=\"title\">Stay Connected</strong>

                    <div class=\"subscribe\">
                        <form action=\"#\">
                            <label for=\"lbl01\">Sign Up To Our News Letter</label>
                            <input type=\"email\" class=\"form-control\" id=\"lbl01\" placeholder=\"enter email address\">
                            <button class=\"btn btn-01\" data-toggle=\"modal\" data-target=\"#sign-in\">Sign In</button>
                        </form>
                    </div>
                    <!-- / subscribe -->
                </div>
            </div>
            <!-- / holder -->
            <div class=\"bottom clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-sm-12\">
                        <ul class=\"sub-nav\">
                            <li><a href=\"#\">Sitemap</a></li>
                            <li class=\"hidden-xs\"><a href=\"#\">Air Charter</a></li>
                            <li class=\"hidden-xs\"><a href=\"#\">RSS Feed</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Terms of Service</a></li>
                        </ul>
                        <!-- / sub-nav -->
                    </div>
                    <div class=\"col-sm-4 hidden-sm hidden-ka\">
                        <strong class=\"copyright\">Copyright 2014, Conceptrix, LLC</strong>
                    </div>
                </div>
                <!-- / row -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"note\">*Conceptrix, LLC, the owner of JetCharters.com, does not own or operate any aircraft or air charter operators and is not a direct or indirect air carrier.</span>
                    </div>
                </div>
                <!-- / row -->
            </div>
            <!-- / bottom -->
        </div>
        <!-- / container -->
    </footer>
    <!-- / footer -->
    <div class=\"modal fade\" id=\"sign-in\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                    <h2 class=\"modal-title\">Sign In</h2>
                </div>
                <div class=\"modal-body\">
                    <div class=\"sign-in-form\">
                        ";
        // line 167
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersPublicBundle:Default:globalLogin"));
        echo "
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <p>Not a Member? <a href=\"#\" class=\"sub-link\">Join Today!</a></p>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class=\"modal fade\" id=\"video\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                    <h2 class=\"modal-title\">Welcome To JetCharters.com</h2>
                </div>
                <div class=\"modal-body\">
                    <iframe src=\"http://www.youtube.com/embed/L9szn1QQfas#t=2m30s\"></iframe>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class=\"modal fade\" id=\"add-favorite\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                    <h2 class=\"modal-title\">Add To Favorites</h2>

                    <h3>Avject Corporation</h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"add-favorite-form\">
                        <form action=\"#\">
                            <label for=\"lbl-0001\">Sign in to add this aircraft to your favorites.</label>
                            <input id=\"lbl-0001\" class=\"form-control\" type=\"email\" placeholder=\"Email Address\"/>
                            <input class=\"form-control\" type=\"password\" placeholder=\"Password\"/>

                            <div class=\"btn-holder\">
                                <button class=\"btn btn-info\">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <p>Not a Member? <a href=\"#\" class=\"sub-link\">Join Today!</a></p>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    ";
        // line 226
        $this->displayBlock('modals', $context, $blocks);
        // line 227
        echo "</div>
";
        // line 228
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "406e6ca_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_0") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_js?key=AIzaSyBsQg5FgWm3D_V9GfTDGUCU_N2CyZ-tJDE&sensor=false_1.js");
            // line 241
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_1") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_jquery-1.10.2_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_2") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_select2.min_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_3") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_ekko-lightbox_4.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_4") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_bootstrap.min_5.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_5") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_custom-form_6.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_6") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_custom-form.select_7.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_7") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_custom-form.checkbox_8.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_8") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_jquery-ui-1.10.4.custom.min_9.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_9") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_jquery.flexslider_10.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_10") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_jquery.sticky_11.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "406e6ca_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca_11") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca_jquery.vmap.min_12.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "406e6ca"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406e6ca") : $this->env->getExtension('assets')->getAssetUrl("js/406e6ca.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 243
        echo "<!--[if IE]>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/js/placeholders.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<!--[if lt IE 9]>
";
        // line 247
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "352228d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_352228d_0") : $this->env->getExtension('assets')->getAssetUrl("js/352228d_respond.min_1.js");
            // line 253
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "352228d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_352228d_1") : $this->env->getExtension('assets')->getAssetUrl("js/352228d_PIE_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "352228d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_352228d_2") : $this->env->getExtension('assets')->getAssetUrl("js/352228d_html5_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "352228d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_352228d_3") : $this->env->getExtension('assets')->getAssetUrl("js/352228d_jquery.vmap_4.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "352228d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_352228d") : $this->env->getExtension('assets')->getAssetUrl("js/352228d.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 255
        echo "<script>
    \$(document).ready(function () {
        \$(\".aircraft-types ul li:last-child\").addClass('last');
    });
</script>
<![endif]-->
";
        // line 261
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b37a39b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b37a39b_0") : $this->env->getExtension('assets')->getAssetUrl("js/b37a39b_jquery.vmap.usa_1.js");
            // line 265
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b37a39b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b37a39b_1") : $this->env->getExtension('assets')->getAssetUrl("js/b37a39b_jquery-actionInView_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "b37a39b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b37a39b_2") : $this->env->getExtension('assets')->getAssetUrl("js/b37a39b_scripts_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "b37a39b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b37a39b") : $this->env->getExtension('assets')->getAssetUrl("js/b37a39b.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('javascripts', $context, $blocks);
        // line 269
        echo "
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Jet Charters";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
    }

    // line 226
    public function block_modals($context, array $blocks = array())
    {
    }

    // line 268
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 268,  531 => 226,  526 => 74,  521 => 16,  515 => 4,  508 => 269,  506 => 268,  503 => 267,  477 => 265,  473 => 261,  465 => 255,  433 => 253,  429 => 247,  423 => 244,  420 => 243,  336 => 228,  333 => 227,  331 => 226,  269 => 167,  200 => 94,  190 => 87,  186 => 86,  182 => 85,  178 => 84,  164 => 75,  162 => 74,  148 => 63,  128 => 47,  124 => 45,  118 => 43,  112 => 41,  110 => 40,  87 => 20,  80 => 17,  77 => 16,  39 => 14,  35 => 7,  29 => 4,  24 => 1,  421 => 274,  400 => 256,  396 => 255,  387 => 249,  364 => 229,  345 => 213,  340 => 241,  334 => 208,  329 => 206,  323 => 203,  318 => 201,  312 => 198,  307 => 196,  301 => 193,  296 => 191,  290 => 188,  285 => 186,  277 => 181,  219 => 125,  208 => 123,  204 => 104,  196 => 117,  184 => 107,  174 => 83,  169 => 101,  165 => 100,  161 => 99,  156 => 97,  153 => 96,  147 => 94,  141 => 92,  139 => 91,  136 => 90,  132 => 89,  78 => 37,  67 => 35,  63 => 34,  31 => 4,  28 => 3,);
    }
}
