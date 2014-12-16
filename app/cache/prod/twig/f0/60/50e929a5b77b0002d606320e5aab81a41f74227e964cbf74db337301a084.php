<?php

/* JetChartersAppBundle:Admin/CharterAircraft:new.html.twig */
class __TwigTemplate_f06050e929a5b77b0002d606320e5aab81a41f74227e964cbf74db337301a084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Admin:form_showcase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'the_form' => array($this, 'block_the_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JetChartersAppBundle:Admin:form_showcase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "+ Add Aircraft ";
        if ((isset($context["op_company"]) ? $context["op_company"] : null)) {
            echo " to ";
            echo twig_escape_filter($this->env, (isset($context["op_company"]) ? $context["op_company"] : null), "html", null, true);
            echo " ";
        }
        echo " ";
    }

    // line 5
    public function block_the_form($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "JetChartersAppBundle:Form:cp_form_theme.html.twig"));
        // line 7
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/CharterAircraft:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 98,  110 => 44,  83 => 33,  23 => 1,  81 => 34,  174 => 82,  84 => 37,  70 => 36,  152 => 59,  148 => 58,  74 => 19,  160 => 61,  127 => 61,  118 => 58,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 72,  134 => 104,  114 => 93,  90 => 35,  77 => 33,  65 => 16,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 82,  165 => 63,  161 => 99,  157 => 81,  155 => 95,  153 => 94,  124 => 53,  113 => 54,  53 => 18,  145 => 42,  139 => 73,  58 => 14,  120 => 52,  97 => 47,  52 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 88,  140 => 55,  132 => 50,  128 => 69,  111 => 37,  107 => 43,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 93,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 42,  102 => 41,  71 => 18,  67 => 26,  63 => 25,  59 => 6,  47 => 7,  38 => 6,  94 => 36,  89 => 32,  85 => 33,  79 => 18,  75 => 23,  68 => 22,  56 => 21,  50 => 18,  29 => 3,  87 => 37,  72 => 23,  55 => 13,  21 => 2,  26 => 6,  98 => 45,  93 => 35,  88 => 38,  78 => 21,  46 => 9,  27 => 1,  40 => 14,  44 => 6,  35 => 5,  31 => 4,  43 => 8,  41 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 114,  163 => 84,  158 => 33,  156 => 60,  151 => 78,  142 => 54,  138 => 54,  136 => 56,  123 => 47,  121 => 97,  117 => 46,  115 => 43,  105 => 49,  101 => 40,  91 => 41,  69 => 17,  66 => 34,  62 => 33,  49 => 10,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 90,  168 => 115,  164 => 81,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 75,  141 => 74,  133 => 70,  130 => 103,  125 => 44,  122 => 48,  116 => 45,  112 => 53,  109 => 34,  106 => 50,  103 => 53,  99 => 46,  95 => 46,  92 => 45,  86 => 34,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 22,  57 => 13,  54 => 12,  51 => 10,  48 => 25,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
