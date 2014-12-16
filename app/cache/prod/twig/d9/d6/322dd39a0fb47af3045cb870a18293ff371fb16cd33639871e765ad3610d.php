<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d9d6322dd39a0fb47af3045cb870a18293ff371fb16cd33639871e765ad3610d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"login-bg\">
<head>
    <title>Detail Admin - Sign in</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- bootstrap -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/bootstrap/bootstrap-overrides.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    <!-- global styles -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/layout.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/elements.css"), "html", null, true);
        echo "\" />

    <!-- libraries -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/lib/font-awesome.css"), "html", null, true);
        echo "\" />

    <!-- this page specific styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/signin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />

    <!-- open sans font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>
<body>

  <div class=\"row-fluid login-wrapper\">
    <a href=\"index.html\">
        <img class=\"logo\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/img/logo-white.png"), "html", null, true);
        echo "\">
    </a>

    <div class=\"span4 box\">
        <div class=\"content-wrap\">
            <h6>Log in</h6>

            ";
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 60
        echo "
        </div>
    </div>
</div>

    <!-- scripts -->
    ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "
<div class=\"modal hide fade\" id=\"forgotPasswordModal\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
        <h3>Forgot Your Password?</h3>
    </div>
    <div class=\"modal-body\">
        ";
        // line 83
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Resetting:request"));
        echo "
    </div>
    <div class=\"modal-footer\">
        <a href=\"##\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
    </div>
</div>
</body>
</html>";
    }

    // line 42
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 43
        echo "            ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 44
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 46
        echo "
            <form action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                <input class=\"span12\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
                <input class=\"span12\" placeholder=\"Your password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                <a href=\"#forgotPasswordModal\" data-toggle=\"modal\" class=\"forgot\">Forgot password?</a>
                <div class=\"remember\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">Remember Me</label>
                </div>
                <input class=\"btn-glow primary login\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Log in\" />
            </form>
            ";
    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        // line 67
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3679ebe_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe_0") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe_jquery.min_1.js");
            // line 73
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "3679ebe_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe_1") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe_bootstrap.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "3679ebe_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe_2") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe_jquery-ui-1.10.2.custom.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "3679ebe_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe_3") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe_theme_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "3679ebe"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3679ebe") : $this->env->getExtension('assets')->getAssetUrl("js/3679ebe.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 75
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 75,  20 => 1,  34 => 7,  104 => 55,  129 => 61,  100 => 27,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 123,  175 => 67,  126 => 61,  96 => 66,  184 => 36,  110 => 25,  83 => 41,  23 => 4,  81 => 24,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 31,  74 => 30,  160 => 67,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 47,  114 => 71,  90 => 51,  77 => 42,  65 => 14,  37 => 7,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 105,  165 => 73,  161 => 81,  157 => 66,  155 => 100,  153 => 36,  124 => 57,  113 => 26,  53 => 18,  145 => 69,  139 => 65,  58 => 18,  120 => 31,  97 => 53,  52 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 36,  111 => 24,  107 => 83,  61 => 22,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 50,  135 => 72,  131 => 46,  119 => 42,  108 => 56,  102 => 46,  71 => 16,  67 => 20,  63 => 23,  59 => 56,  47 => 7,  38 => 8,  94 => 52,  89 => 34,  85 => 34,  79 => 31,  75 => 41,  68 => 22,  56 => 16,  50 => 10,  29 => 6,  87 => 25,  72 => 21,  55 => 19,  21 => 1,  26 => 12,  98 => 76,  93 => 29,  88 => 60,  78 => 16,  46 => 14,  27 => 5,  40 => 11,  44 => 8,  35 => 10,  31 => 9,  43 => 12,  41 => 13,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 39,  156 => 60,  151 => 74,  142 => 90,  138 => 48,  136 => 40,  123 => 58,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 27,  69 => 15,  66 => 14,  62 => 19,  49 => 17,  24 => 7,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 90,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 71,  147 => 35,  144 => 70,  141 => 70,  133 => 32,  130 => 62,  125 => 44,  122 => 43,  116 => 54,  112 => 57,  109 => 50,  106 => 68,  103 => 28,  99 => 54,  95 => 42,  92 => 3,  86 => 42,  82 => 31,  80 => 21,  73 => 33,  64 => 20,  60 => 22,  57 => 20,  54 => 16,  51 => 17,  48 => 12,  45 => 14,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
