<?php

/* JetChartersAppBundle:Operator:base.html.twig */
class __TwigTemplate_743a7d73bdfda716d5983da58851527a864a529215b8829ce0666df89a3ab994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle::cp_base.html.twig");

        $this->blocks = array(
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
    public function block_top_navbar($context, array $blocks = array())
    {
        // line 4
        echo " <div class=\"navbar navbar-inverse\">
    <div class=\"navbar-inner\">
        <button type=\"button\" class=\"btn btn-navbar visible-phone\" id=\"menu-toggler\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

        <a class=\"brand\" href=\"index.cfm\"><img src=\"";
        // line 12
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
                    <span class=\"count\">236</span>
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
        // line 58
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

    // line 67
    public function block_sidebar($context, array $blocks = array())
    {
        // line 68
        echo "<div id=\"sidebar-nav\">
    <ul id=\"dashboard-menu\" data-currentcontroller=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
        echo "\">
        <li data-controller=\"DefaultController\">
            <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("operator_dashboard");
        echo "\">
                <i class=\"icon-bar-chart\"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li data-controller=\"InboxController\">
            <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("operator_inbox");
        echo "\">
                <i class=\"icon-envelope\"></i>i
                <span>Inbox</span>
            </a>
        </li>
        <li data-controller=\"ProfileController\">
            <a class=\"dropdown-toggle\" href=\"#\">
                <i class=\"icon-group\"></i>
                <span>Profile</span>
                <i class=\"icon-chevron-down\"></i>
            </a>
            <ul class=\"submenu\" >
                <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("operator_profile_contact");
        echo "\">Contact Info</a></li>
                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("operator_profile_company_info");
        echo "\">Operator Info</a></li>
            </ul>
        </li>
        <li data-controller=\"BillingController\">
            <a class=\"dropdown-toggle\" href=\"#\">
                <i class=\"icon-briefcase\"></i>
                <span>Billing</span>
                <i class=\"icon-chevron-down\"></i>
            </a>
            <ul class=\"submenu\">
                <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("operator_billing_options");
        echo "\">Billing Options</a></li>";
        // line 101
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("operator_billing_history");
        echo "\">Billing History</a></li>";
        // line 102
        echo "            </ul>
        </li>
        <li data-controller=\"CharterAircraftController\">
            <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("operator_aircraft");
        echo "\">
                <i class=\"icon-plane\"></i>
                <span>Aircraft</span>
            </a>
        </li>
        <li data-controller=\"EmptyLegController\">
            <a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("operator_emptylegs");
        echo "\">
                <i class=\"icon-exchange\"></i>
                <span>Empty Legs</span>
            </a>
        </li>
        <li data-controller=\"\">
            <a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("operator_terms");
        echo "\">
                <i class=\"icon-list\"></i>
                <span>Terms</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                <i class=\"icon-off\"></i>
                <span>Sign Out</span>
            </a>
        </li>
    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Operator:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 69,  100 => 57,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 123,  175 => 67,  126 => 52,  96 => 55,  184 => 36,  110 => 60,  83 => 133,  23 => 1,  81 => 22,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 58,  74 => 110,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 104,  114 => 71,  90 => 2,  77 => 111,  65 => 14,  37 => 14,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 105,  165 => 82,  161 => 25,  157 => 79,  155 => 100,  153 => 94,  124 => 57,  113 => 54,  53 => 10,  145 => 75,  139 => 33,  58 => 14,  120 => 51,  97 => 47,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 30,  111 => 24,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 72,  131 => 31,  119 => 11,  108 => 31,  102 => 58,  71 => 16,  67 => 74,  63 => 25,  59 => 56,  47 => 7,  38 => 6,  94 => 26,  89 => 32,  85 => 30,  79 => 131,  75 => 18,  68 => 17,  56 => 21,  50 => 18,  29 => 3,  87 => 1,  72 => 83,  55 => 13,  21 => 1,  26 => 29,  98 => 45,  93 => 21,  88 => 24,  78 => 30,  46 => 25,  27 => 1,  40 => 15,  44 => 14,  35 => 8,  31 => 3,  43 => 7,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 101,  156 => 60,  151 => 77,  142 => 90,  138 => 89,  136 => 56,  123 => 77,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 58,  69 => 15,  66 => 14,  62 => 57,  49 => 9,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 111,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 76,  147 => 35,  144 => 70,  141 => 73,  133 => 32,  130 => 53,  125 => 44,  122 => 48,  116 => 10,  112 => 49,  109 => 69,  106 => 68,  103 => 67,  99 => 54,  95 => 4,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 13,  60 => 13,  57 => 10,  54 => 9,  51 => 18,  48 => 7,  45 => 6,  42 => 12,  39 => 8,  36 => 3,  33 => 2,  30 => 1,);
    }
}
