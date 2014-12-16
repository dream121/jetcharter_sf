<?php

/* JetChartersAppBundle:Admin/BlogPostCategory:_form.html.twig */
class __TwigTemplate_b4a635925c89f8e7bfe727abd2fcce4e9267372efcf1636918a66916bc40a4ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container-fluid\">
\t<div class=\"form-page\" id=\"pad-wrapper\">
\t\t<div class=\"row-fluid form-wrapper\">
\t\t      <div class=\"row-fluid head\">
\t\t\t  <div class=\"span12\">
\t\t\t      <h4 style=\"margin:-20px 0 20px 0;\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h4>
\t\t\t  </div>
\t\t      </div>
\t\t      
\t\t      ";
        // line 10
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0))) {
            // line 11
            echo "\t\t\t      <div class=\"alert alert-danger alert-white rounded\">
\t\t\t\t    <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
\t\t\t\t    <div class=\"icon\"><i class=\"fa fa-times-circle\"></i></div>
\t\t\t\t    ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
                echo "<br>
\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t      </div>
\t\t      ";
        }
        // line 19
        echo "\t\t      
\t\t      ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t\t      ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
\t\t      ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/BlogPostCategory:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  23 => 1,  81 => 34,  174 => 82,  84 => 37,  70 => 36,  152 => 59,  148 => 58,  74 => 30,  160 => 61,  127 => 61,  118 => 58,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 105,  134 => 104,  114 => 93,  90 => 35,  77 => 33,  65 => 19,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 82,  165 => 63,  161 => 99,  157 => 96,  155 => 95,  153 => 94,  124 => 53,  113 => 46,  53 => 17,  145 => 42,  139 => 39,  58 => 23,  120 => 52,  97 => 47,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 64,  140 => 55,  132 => 55,  128 => 54,  111 => 37,  107 => 43,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 68,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 42,  102 => 41,  71 => 30,  67 => 26,  63 => 25,  59 => 6,  47 => 12,  38 => 9,  94 => 36,  89 => 29,  85 => 33,  79 => 18,  75 => 23,  68 => 22,  56 => 21,  50 => 19,  29 => 3,  87 => 37,  72 => 23,  55 => 11,  21 => 2,  26 => 6,  98 => 40,  93 => 35,  88 => 6,  78 => 21,  46 => 14,  27 => 1,  40 => 14,  44 => 15,  35 => 11,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 114,  163 => 113,  158 => 33,  156 => 60,  151 => 109,  142 => 57,  138 => 54,  136 => 56,  123 => 59,  121 => 97,  117 => 51,  115 => 43,  105 => 49,  101 => 40,  91 => 41,  69 => 11,  66 => 32,  62 => 23,  49 => 18,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 42,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 115,  164 => 81,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 49,  141 => 53,  133 => 52,  130 => 103,  125 => 44,  122 => 48,  116 => 45,  112 => 53,  109 => 34,  106 => 50,  103 => 53,  99 => 46,  95 => 46,  92 => 45,  86 => 34,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 20,  57 => 19,  54 => 10,  51 => 10,  48 => 10,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 10,  30 => 5,);
    }
}
