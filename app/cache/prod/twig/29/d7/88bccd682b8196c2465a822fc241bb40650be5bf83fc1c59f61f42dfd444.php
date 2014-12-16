<?php

/* JetChartersAppBundle:Admin:base.html.twig */
class __TwigTemplate_29d788bccd682b8196c2465a822fc241bb40650be5bf83fc1c59f61f42dfd444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle::cp_base.html.twig");

        $this->blocks = array(
            'page_styles' => array($this, 'block_page_styles'),
            'top_navbar' => array($this, 'block_top_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JetChartersAppBundle::cp_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_styles($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/admin.css"), "html", null, true);
        echo "\" />

";
    }

    // line 8
    public function block_top_navbar($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"navbar navbar-inverse\">
    <div class=\"navbar-inner\">
        <button type=\"button\" class=\"btn btn-navbar visible-phone\" id=\"menu-toggler\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        </button>
        <a class=\"brand\" href=\"index.cfm\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/img/logo.png"), "html", null, true);
        echo "\"></a>
        <ul class=\"nav pull-right\">
            <li class=\"notification-dropdown hidden-phone\">
                <a href=\"#\" class=\"trigger\">
                <i class=\"icon-warning-sign\"></i>
                <span class=\"count\">0</span>
                </a>
                <div class=\"pop-dialog\">
                    <div class=\"pointer right\">
                        <div class=\"arrow\"></div>
                        <div class=\"arrow_border\"></div>
                    </div>
                    <div class=\"body\">
                        <a href=\"#\" class=\"close-icon\"><i class=\"icon-remove-sign\"></i></a>
                        <div class=\"notifications\">
                            <h3>You have 0 new notifications</h3>
                        </div>
                    </div>
                </div>
            </li>
            <li class=\"notification-dropdown hidden-phone\">
                <a href=\"#\" class=\"trigger\">
                <i class=\"icon-envelope-alt\"></i>
                <span class=\"count\">###</span>
                </a>
                <div class=\"pop-dialog\">
                    <div class=\"pointer right\">
                        <div class=\"arrow\"></div>
                        <div class=\"arrow_border\"></div>
                    </div>
                    <div class=\"body\">
                        <a href=\"#\" class=\"close-icon\"><i class=\"icon-remove-sign\"></i></a>
                        <div class=\"notifications\">
                            <h3>You have 0 new calls in your inbox</h3>
                            <h3>You have 236 new web leads in your inbox</h3>
                        </div>
                        <div class=\"messages\">
                            <div class=\"footer\">
                                <a href=\"inbox.cfm\" class=\"logout\">Go to the inbox</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class=\"settings hidden-phone\">
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" role=\"button\">
                <i class=\"icon-share-alt\"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
";
    }

    // line 70
    public function block_sidebar($context, array $blocks = array())
    {
        // line 71
        echo "<div id=\"sidebar-nav\">
    <ul id=\"dashboard-menu\" data-currentcontroller=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
        echo "\">
        <li data-controller=\"DefaultController\">
            <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">
            <i class=\"icon-bar-chart\"></i>
            <span>Dashboard</span>
            </a>
        </li>
\t<li data-controller=\"BlogPostCategoryController\">
            <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("admin_blog_post_category");
        echo "\">
            <i class=\"icon-book\"></i>
            <span>Blog Post Category</span>
            </a>
        </li>
        <li data-controller=\"BlogPostController\">
            <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("admin_blog_post");
        echo "\">
            <i class=\"icon-pencil\"></i>
            <span>Blog Post</span>
            </a>
        </li>
        <li data-controller=\"PassphraseController\">
            ";
        // line 93
        echo "            ";
        // line 94
        echo "            ";
        // line 95
        echo "            ";
        // line 96
        echo "        </li>
        <li data-controller=\"CharterQuotesController\">
            ";
        // line 99
        echo "            ";
        // line 100
        echo "            ";
        // line 101
        echo "            ";
        // line 102
        echo "        </li>
        <li data-controller=\"EmptyLegController\">
            <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("admin_emptylegs");
        echo "\">
            <i class=\"icon-exchange\"></i>
            <span>Empty Legs</span>
            </a>
        </li>
        <li data-controller=\"OperatorsController\">
            <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("admin_operators");
        echo "\">
            <i class=\"icon-group\"></i>
            <span>Charter Operators</span>
            </a>
        </li>
        <li data-controller=\"BillingPlanController\">
            <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("admin_billingplans");
        echo "\">
            <i class=\"icon-briefcase\"></i>
            <span>Billing Plans</span>
            </a>
        </li>
        <li data-controller=\"BulkMailController\">
            <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("admin_bulkmailer");
        echo "\">
            <i class=\"icon-envelope\"></i>
            <span>Bulk Mail</span>
            </a>
        </li>
        <li data-controller=\"CharterAircraftController\">
            <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("admin_aircraft_models");
        echo "\">
            <i class=\"icon-plane\"></i>
            <span>Aircraft Models</span>
            </a>
        </li>
        ";
        // line 134
        echo "            ";
        // line 135
        echo "            ";
        // line 136
        echo "            ";
        // line 137
        echo "            ";
        // line 138
        echo "        ";
        // line 139
        echo "        <li data-controller=\"BadgesController\">
            <a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("admin_badges");
        echo "\">
            <i class=\"icon-certificate\"></i>
            <span>Badges</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
            <i class=\"icon-off\"></i>
            <span>Logout</span>
            </a>
        </li>
    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 146,  228 => 140,  225 => 139,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 110,  167 => 102,  165 => 101,  161 => 99,  157 => 96,  155 => 95,  153 => 94,  124 => 74,  113 => 70,  53 => 16,  145 => 42,  139 => 39,  58 => 12,  120 => 27,  97 => 36,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 72,  108 => 36,  102 => 32,  71 => 19,  67 => 21,  63 => 13,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 34,  85 => 33,  79 => 18,  75 => 17,  68 => 22,  56 => 16,  50 => 10,  29 => 3,  87 => 25,  72 => 23,  55 => 11,  21 => 2,  26 => 6,  98 => 31,  93 => 35,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 5,  44 => 9,  35 => 5,  31 => 5,  43 => 8,  41 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 104,  166 => 71,  163 => 100,  158 => 33,  156 => 66,  151 => 93,  142 => 86,  138 => 54,  136 => 56,  123 => 28,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 61,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 42,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 43,  144 => 49,  141 => 40,  133 => 80,  130 => 33,  125 => 44,  122 => 43,  116 => 71,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 7,  45 => 8,  42 => 7,  39 => 6,  36 => 4,  33 => 4,  30 => 3,);
    }
}
