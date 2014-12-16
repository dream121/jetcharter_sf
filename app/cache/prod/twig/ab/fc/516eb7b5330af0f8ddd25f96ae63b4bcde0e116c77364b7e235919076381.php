<?php

/* JetChartersAppBundle:Admin/AircraftModel:new.html.twig */
class __TwigTemplate_abfc516eb7b5330af0f8ddd25f96ae63b4bcde0e116c77364b7e235919076381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Admin:form_showcase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'the_form' => array($this, 'block_the_form'),
            'aside' => array($this, 'block_aside'),
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
        echo "+ New Aircraft Model";
    }

    // line 5
    public function block_the_form($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["new_form"]) ? $context["new_form"] : null), array(0 => "JetChartersAppBundle:Form:cp_form_theme.html.twig"));
        // line 7
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : null), 'form');
        echo "

";
    }

    // line 11
    public function block_aside($context, array $blocks = array())
    {
        // line 12
        echo "<h4>Upload Images:</h4>
<p>
You must save the form before you can upload images.
</p>
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/AircraftModel:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 80,  127 => 61,  118 => 58,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 105,  134 => 104,  114 => 93,  90 => 35,  77 => 24,  65 => 19,  37 => 9,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 102,  165 => 101,  161 => 99,  157 => 96,  155 => 95,  153 => 94,  124 => 74,  113 => 70,  53 => 12,  145 => 42,  139 => 39,  58 => 12,  120 => 27,  97 => 47,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 72,  108 => 89,  102 => 32,  71 => 19,  67 => 21,  63 => 13,  59 => 16,  47 => 9,  38 => 6,  94 => 28,  89 => 34,  85 => 33,  79 => 18,  75 => 23,  68 => 22,  56 => 16,  50 => 11,  29 => 3,  87 => 25,  72 => 23,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 35,  88 => 6,  78 => 21,  46 => 7,  27 => 1,  40 => 5,  44 => 9,  35 => 5,  31 => 5,  43 => 8,  41 => 10,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 104,  166 => 114,  163 => 113,  158 => 33,  156 => 66,  151 => 109,  142 => 86,  138 => 54,  136 => 56,  123 => 59,  121 => 97,  117 => 44,  115 => 43,  105 => 40,  101 => 49,  91 => 33,  69 => 20,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 42,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 115,  164 => 59,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 49,  141 => 70,  133 => 64,  130 => 103,  125 => 44,  122 => 43,  116 => 94,  112 => 42,  109 => 34,  106 => 54,  103 => 53,  99 => 31,  95 => 46,  92 => 45,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 13,  57 => 14,  54 => 10,  51 => 14,  48 => 11,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 5,  30 => 3,);
    }
}