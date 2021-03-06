<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4797acf2e658dc476d081cc8784da9b01066f6c67dff09b5728d6eb02e438c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : null)))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  34 => 6,  104 => 55,  129 => 61,  100 => 27,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 123,  175 => 67,  126 => 61,  96 => 55,  184 => 36,  110 => 25,  83 => 133,  23 => 4,  81 => 24,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 31,  74 => 30,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 66,  114 => 71,  90 => 51,  77 => 42,  65 => 14,  37 => 7,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 105,  165 => 82,  161 => 81,  157 => 79,  155 => 100,  153 => 36,  124 => 57,  113 => 26,  53 => 18,  145 => 69,  139 => 65,  58 => 18,  120 => 31,  97 => 53,  52 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 36,  111 => 24,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 72,  131 => 31,  119 => 55,  108 => 56,  102 => 46,  71 => 16,  67 => 20,  63 => 23,  59 => 56,  47 => 7,  38 => 8,  94 => 52,  89 => 34,  85 => 34,  79 => 31,  75 => 41,  68 => 22,  56 => 16,  50 => 10,  29 => 5,  87 => 25,  72 => 21,  55 => 19,  21 => 2,  26 => 29,  98 => 45,  93 => 29,  88 => 38,  78 => 16,  46 => 14,  27 => 4,  40 => 11,  44 => 8,  35 => 5,  31 => 6,  43 => 8,  41 => 9,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 39,  156 => 60,  151 => 74,  142 => 90,  138 => 89,  136 => 40,  123 => 58,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 27,  69 => 15,  66 => 14,  62 => 19,  49 => 17,  24 => 3,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 90,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 71,  147 => 35,  144 => 70,  141 => 70,  133 => 32,  130 => 62,  125 => 44,  122 => 58,  116 => 54,  112 => 57,  109 => 50,  106 => 68,  103 => 28,  99 => 54,  95 => 42,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 28,  64 => 20,  60 => 22,  57 => 21,  54 => 16,  51 => 18,  48 => 10,  45 => 26,  42 => 9,  39 => 6,  36 => 7,  33 => 6,  30 => 3,);
    }
}
