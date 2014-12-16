<?php

/* JetChartersPublicBundle:Default:operatorSignUp.html.twig */
class __TwigTemplate_8ab649e505345628aaff5a2a510032edaed566548e9a29904da83c2a6e9f50ab extends Twig_Template
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
        echo "
<div class=\"sign-Up-area\">
\t<div class=\"container\">
\t\t<header class=\"headline\">
\t\t\t<h2>Register</h2>
\t\t</header>
\t\t";
        // line 10
        if (((array_key_exists("formErrors", $context) && ((isset($context["formErrors"]) ? $context["formErrors"] : null) != "")) || (array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)))) {
            // line 11
            echo "\t\t\t<div>
\t\t\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formErrors"]) ? $context["formErrors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["formError"]) {
                // line 13
                echo "\t\t\t\t\t<p class=\"bg-danger\">";
                echo twig_escape_filter($this->env, (isset($context["formError"]) ? $context["formError"] : null), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formError'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t\t
\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 17
                echo "\t\t\t\t\t<p class=\"bg-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t<div class=\"main sign-up-back\">\t\t\t
\t\t\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t\t<h3>Company Information</h3>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "companyName"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "companyName"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">\t
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "website"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "website"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "certificate"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "certificate"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<h3>Personal Information</h3>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "position"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address1"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address1"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address2"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address2"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "state"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zip"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<h3>Account Information</h3>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"), "first"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"), "first"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"), "second"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password"), "second"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "captcha"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero capcha\">";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "captcha"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero submit-but\">";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Default:operatorSignUp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 112,  212 => 82,  190 => 72,  421 => 274,  400 => 256,  396 => 255,  329 => 206,  290 => 188,  441 => 201,  439 => 200,  418 => 193,  410 => 187,  408 => 186,  401 => 181,  389 => 174,  386 => 173,  383 => 172,  378 => 170,  373 => 169,  370 => 168,  364 => 229,  356 => 163,  352 => 162,  348 => 160,  336 => 159,  332 => 158,  327 => 155,  303 => 138,  265 => 117,  255 => 112,  244 => 109,  191 => 85,  594 => 452,  591 => 451,  580 => 443,  570 => 436,  561 => 430,  553 => 425,  544 => 419,  525 => 403,  520 => 401,  507 => 391,  497 => 384,  488 => 378,  471 => 367,  452 => 351,  447 => 349,  434 => 339,  424 => 332,  334 => 208,  325 => 263,  306 => 247,  233 => 195,  313 => 146,  277 => 181,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 287,  344 => 140,  323 => 203,  320 => 128,  316 => 126,  307 => 196,  304 => 128,  296 => 191,  286 => 117,  279 => 113,  250 => 98,  205 => 93,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 217,  475 => 262,  425 => 195,  422 => 194,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 91,  192 => 88,  150 => 63,  211 => 94,  197 => 76,  20 => 1,  34 => 5,  104 => 43,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 221,  473 => 213,  470 => 136,  467 => 256,  465 => 134,  462 => 208,  449 => 204,  443 => 124,  433 => 198,  431 => 248,  419 => 115,  415 => 326,  404 => 111,  369 => 102,  351 => 280,  347 => 97,  345 => 213,  342 => 274,  340 => 211,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 201,  315 => 85,  301 => 193,  297 => 135,  291 => 120,  288 => 235,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 110,  245 => 62,  242 => 97,  239 => 123,  236 => 96,  231 => 92,  218 => 51,  216 => 101,  213 => 49,  195 => 89,  186 => 71,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 66,  126 => 54,  96 => 34,  184 => 107,  110 => 25,  83 => 27,  23 => 3,  81 => 27,  174 => 103,  84 => 29,  70 => 20,  152 => 73,  148 => 31,  74 => 25,  160 => 66,  127 => 72,  118 => 35,  76 => 35,  300 => 97,  295 => 93,  261 => 217,  257 => 103,  253 => 102,  249 => 129,  234 => 106,  188 => 87,  185 => 117,  172 => 117,  146 => 52,  137 => 66,  134 => 47,  114 => 61,  90 => 26,  77 => 21,  65 => 21,  37 => 5,  237 => 102,  228 => 193,  225 => 44,  223 => 87,  215 => 134,  207 => 109,  198 => 89,  180 => 85,  167 => 92,  165 => 100,  161 => 99,  157 => 57,  155 => 100,  153 => 56,  124 => 42,  113 => 26,  53 => 21,  145 => 82,  139 => 91,  58 => 18,  120 => 41,  97 => 30,  52 => 14,  480 => 373,  474 => 161,  469 => 158,  461 => 155,  457 => 206,  453 => 205,  444 => 202,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 196,  423 => 116,  413 => 134,  409 => 113,  407 => 321,  402 => 130,  398 => 315,  393 => 126,  387 => 249,  384 => 121,  381 => 120,  379 => 299,  374 => 297,  368 => 167,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 198,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 116,  283 => 116,  278 => 228,  268 => 108,  264 => 107,  258 => 101,  252 => 211,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 97,  177 => 77,  169 => 101,  140 => 59,  132 => 89,  128 => 46,  111 => 67,  107 => 83,  61 => 23,  273 => 119,  269 => 222,  254 => 65,  246 => 98,  243 => 88,  240 => 51,  238 => 85,  235 => 93,  230 => 82,  227 => 81,  224 => 71,  221 => 103,  219 => 86,  217 => 135,  208 => 81,  204 => 122,  179 => 67,  159 => 90,  143 => 50,  135 => 47,  131 => 46,  119 => 53,  108 => 35,  102 => 45,  71 => 24,  67 => 35,  63 => 34,  59 => 16,  47 => 12,  38 => 6,  94 => 28,  89 => 45,  85 => 25,  79 => 23,  75 => 23,  68 => 22,  56 => 15,  50 => 15,  29 => 3,  87 => 26,  72 => 21,  55 => 14,  21 => 2,  26 => 3,  98 => 48,  93 => 27,  88 => 60,  78 => 37,  46 => 9,  27 => 5,  40 => 9,  44 => 12,  35 => 6,  31 => 4,  43 => 8,  41 => 11,  28 => 3,  201 => 77,  196 => 117,  183 => 82,  171 => 84,  166 => 68,  163 => 91,  158 => 69,  156 => 97,  151 => 74,  142 => 51,  138 => 62,  136 => 90,  123 => 44,  121 => 97,  117 => 49,  115 => 41,  105 => 37,  101 => 31,  91 => 44,  69 => 17,  66 => 14,  62 => 12,  49 => 11,  24 => 2,  32 => 6,  25 => 4,  22 => 2,  19 => 1,  209 => 82,  203 => 89,  199 => 67,  193 => 102,  189 => 83,  187 => 88,  182 => 98,  176 => 84,  173 => 76,  168 => 62,  164 => 61,  162 => 72,  154 => 69,  149 => 64,  147 => 94,  144 => 70,  141 => 92,  133 => 61,  130 => 56,  125 => 44,  122 => 53,  116 => 41,  112 => 36,  109 => 59,  106 => 54,  103 => 28,  99 => 36,  95 => 43,  92 => 30,  86 => 25,  82 => 32,  80 => 22,  73 => 19,  64 => 17,  60 => 16,  57 => 15,  54 => 9,  51 => 13,  48 => 13,  45 => 10,  42 => 10,  39 => 10,  36 => 5,  33 => 7,  30 => 3,);
    }
}
