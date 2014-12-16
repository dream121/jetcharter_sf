<?php

/* JetChartersPublicBundle:Blog:base.html.twig */
class __TwigTemplate_bf0c41e9157cc7610c2bd04d11a09b8940f28972a1c850f9ae7a928da468ab5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersPublicBundle::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'rightSideBar' => array($this, 'block_rightSideBar'),
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
        echo "    <div class=\"blog-area\">
    <div id=\"main\" class=\"container\">
    <h1>Private Jet Charter Blog</h1>
    <div class=\"row\">
\t\t
\t";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "\t
\t";
        // line 11
        $this->displayBlock('rightSideBar', $context, $blocks);
        // line 103
        echo "    </div><!-- / row -->
  </div><!-- / main -->
</div><!-- / blog-area -->
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_rightSideBar($context, array $blocks = array())
    {
        // line 12
        echo "\t\t<aside id=\"sidebar\" class=\"col-md-4\">
\t\t    <div class=\"info-box search\">
\t\t\t<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("public_blog");
        echo "\" id=\"blogSearchFrm\" name=\"blogSearchFrm\" method=\"post\">
\t\t\t    <button class=\"btn btn-primary\">search</button>
\t\t\t    <div class=\"holder\">
\t\t\t\t<span class=\"ico-search\"></span>
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Search Blog Posts\" id=\"blog-search-text\" name=\"blog-search-text\" />
\t\t\t    </div><!-- / holder -->
\t\t\t</form>
\t\t    </div><!-- / search -->
\t\t    <div class=\"info-box\">
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t    <li class=\"active\"><a href=\"#tab-01\" data-toggle=\"tab\">Popular Posts</a></li>
\t\t\t    <li><a href=\"#tab-02\" data-toggle=\"tab\">Recent Posts</a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t    <div class=\"tab-pane active\" id=\"tab-01\">
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersPublicBundle:Blog:popularBlog"));
        echo "
\t\t\t    </div><!-- / tab-01 -->
\t\t\t    <div class=\"tab-pane\" id=\"tab-02\">
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersPublicBundle:Blog:recentBlog"));
        echo "
\t\t\t    </div><!-- / tab-02 -->
\t\t\t</div><!-- / tab-content -->
\t\t    </div><!-- / info-box -->
\t\t    <div class=\"calendar-box\">
\t\t\t<div id=\"calendar\"></div>
\t\t    </div><!-- / calendar-box -->
\t\t    <div class=\"info-box categories\">
\t\t\t<strong class=\"title\">Categories</strong>
\t\t\t<div class=\"row\">
\t\t\t    <div class=\"col-md-12\">
\t\t\t\t  ";
        // line 43
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersPublicBundle:Blog:categories"));
        echo "
\t\t\t    </div>
\t\t\t</div><!-- / row -->
\t\t    </div><!-- / ifo-box -->
\t\t    <div class=\"info-box search-form\">
\t\t\t<strong class=\"title\">Find Charter Aircraft</strong>
\t\t\t<form action=\"#\">
\t\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t    <select title=\"Trip Type\" class=\"form-control\">
\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t<option value=\"1\">2</option>
\t\t\t\t\t<option value=\"1\">3</option>
\t\t\t\t\t<option value=\"1\">4</option>
\t\t\t\t    </select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t    <select title=\"Passengers\" class=\"form-control\">
\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t<option value=\"1\">2</option>
\t\t\t\t\t<option value=\"1\">3</option>
\t\t\t\t\t<option value=\"1\">4</option>
\t\t\t\t    </select>
\t\t\t\t</div>
\t\t\t    </div><!-- / row -->
\t\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t    <input class=\"form-control\" type=\"text\" placeholder=\"Departure\" />
\t\t\t\t</div>
\t\t\t    </div><!-- / row -->
\t\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 datepicker-holder\">
\t\t\t\t    <span class=\"ico-time\"></span>
\t\t\t\t    <input type=\"text\" class=\"form-control time\" placeholder=\"Time\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 datepicker-holder\">
\t\t\t\t    <input type=\"text\" class=\"form-control datepicker\" placeholder=\"Date\" id=\"from\">
\t\t\t\t</div>
\t\t\t    </div><!-- / row -->
\t\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t    <input class=\"form-control\" type=\"text\" placeholder=\"Destination\" />
\t\t\t\t</div>
\t\t\t    </div><!-- / row -->
\t\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 datepicker-holder\">
\t\t\t\t    <span class=\"ico-time\"></span>
\t\t\t\t    <input type=\"text\" class=\"form-control time\" placeholder=\"Time\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 datepicker-holder\">
\t\t\t\t    <input type=\"text\" class=\"form-control datepicker\" placeholder=\"Date\" id=\"to\">
\t\t\t\t</div>
\t\t\t    </div><!-- / row -->
\t\t\t    <div class=\"btn-holder clearfix\">
\t\t\t\t<button class=\"btn btn-info\">Get Quote</button>
\t\t\t    </div>
\t\t\t</form>
\t\t    </div><!-- / search-form -->
\t\t</aside><!-- / sidebar -->
\t";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Blog:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 135,  277 => 117,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 155,  344 => 140,  323 => 129,  320 => 128,  316 => 126,  307 => 123,  304 => 128,  296 => 120,  286 => 117,  279 => 115,  250 => 98,  205 => 91,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 266,  475 => 262,  425 => 245,  422 => 244,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 91,  192 => 88,  150 => 68,  211 => 94,  197 => 107,  20 => 1,  34 => 7,  104 => 43,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 256,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 248,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 242,  340 => 94,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 127,  297 => 77,  291 => 120,  288 => 119,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 103,  239 => 123,  236 => 96,  231 => 57,  218 => 51,  216 => 128,  213 => 49,  195 => 89,  186 => 37,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 67,  126 => 46,  96 => 30,  184 => 78,  110 => 25,  83 => 41,  23 => 4,  81 => 27,  174 => 82,  84 => 29,  70 => 28,  152 => 73,  148 => 31,  74 => 25,  160 => 67,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 105,  249 => 129,  234 => 58,  188 => 87,  185 => 117,  172 => 117,  146 => 71,  137 => 66,  134 => 47,  114 => 42,  90 => 32,  77 => 26,  65 => 14,  37 => 8,  237 => 102,  228 => 97,  225 => 44,  223 => 95,  215 => 134,  207 => 109,  198 => 41,  180 => 85,  167 => 92,  165 => 73,  161 => 81,  157 => 76,  155 => 100,  153 => 36,  124 => 63,  113 => 26,  53 => 18,  145 => 82,  139 => 65,  58 => 18,  120 => 62,  97 => 59,  52 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 159,  368 => 112,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 125,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 116,  278 => 86,  268 => 106,  264 => 142,  258 => 101,  252 => 99,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 97,  177 => 87,  169 => 86,  140 => 80,  132 => 58,  128 => 65,  111 => 67,  107 => 83,  61 => 16,  273 => 96,  269 => 94,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 101,  230 => 82,  227 => 81,  224 => 71,  221 => 115,  219 => 92,  217 => 135,  208 => 90,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 60,  119 => 53,  108 => 46,  102 => 45,  71 => 24,  67 => 28,  63 => 22,  59 => 11,  47 => 103,  38 => 6,  94 => 31,  89 => 21,  85 => 34,  79 => 31,  75 => 23,  68 => 22,  56 => 16,  50 => 15,  29 => 3,  87 => 28,  72 => 21,  55 => 14,  21 => 1,  26 => 12,  98 => 48,  93 => 29,  88 => 60,  78 => 16,  46 => 9,  27 => 5,  40 => 9,  44 => 12,  35 => 5,  31 => 4,  43 => 12,  41 => 6,  28 => 3,  201 => 88,  196 => 90,  183 => 82,  171 => 84,  166 => 82,  163 => 91,  158 => 69,  156 => 60,  151 => 74,  142 => 90,  138 => 62,  136 => 68,  123 => 58,  121 => 97,  117 => 49,  115 => 60,  105 => 50,  101 => 60,  91 => 44,  69 => 20,  66 => 14,  62 => 12,  49 => 17,  24 => 1,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 89,  199 => 67,  193 => 102,  189 => 83,  187 => 88,  182 => 98,  176 => 84,  173 => 76,  168 => 75,  164 => 73,  162 => 72,  154 => 69,  149 => 64,  147 => 35,  144 => 70,  141 => 70,  133 => 61,  130 => 66,  125 => 44,  122 => 43,  116 => 52,  112 => 42,  109 => 66,  106 => 54,  103 => 28,  99 => 44,  95 => 43,  92 => 30,  86 => 42,  82 => 32,  80 => 17,  73 => 29,  64 => 27,  60 => 26,  57 => 15,  54 => 9,  51 => 15,  48 => 13,  45 => 11,  42 => 10,  39 => 5,  36 => 6,  33 => 4,  30 => 3,);
    }
}
