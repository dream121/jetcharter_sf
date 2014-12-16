<?php

/* JetChartersAppBundle:Operator/Profile:companyInfo.html.twig */
class __TwigTemplate_f8abb7ef164ee4d3612633704768cb8c225ce5ed694f4428c41ffc1a53cfc1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Operator:form_showcase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'the_form' => array($this, 'block_the_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JetChartersAppBundle:Operator:form_showcase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "+ Operator Information";
    }

    // line 5
    public function block_the_form($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => "JetChartersAppBundle:Form:cp_form_theme.html.twig"));
        // line 7
        echo "
  <ul class=\"nav nav-tabs\" id=\"tabs\">
    <li class=\"active\"><a href=\"#info\" data-toggle=\"tab\">Info</a></li>
    <li><a href=\"#logo\" data-toggle=\"tab\">Logo</a></li>
    <li><a href=\"#video\" data-toggle=\"tab\">Video</a></li>
    <li><a href=\"#social\" data-toggle=\"tab\">Social</a></li>
    <li><a href=\"#login\" data-toggle=\"tab\">Change Password</a></li>
    <li><a href=\"#callrecording\" data-toggle=\"tab\">Call Recording</a></li>
    <li><a href=\"#salesforce\" data-toggle=\"tab\">Salesforce.com</a></li>
  </ul>
  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"info\">
    \t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "
    </div>
    <div class=\"tab-pane\" id=\"logo\">
\t\t";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersAppBundle:Operator/Profile:companyLogo"));
        echo "
    </div>
    <div class=\"tab-pane\" id=\"video\">
\t\t";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersAppBundle:Operator/Profile:companyVideo"));
        echo "
    </div>
    <div class=\"tab-pane\" id=\"social\">
\t\t";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersAppBundle:Operator/Profile:social"));
        echo "
    </div>
    <div class=\"tab-pane\" id=\"login\">
    \t";
        // line 31
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:ChangePassword:changePassword"));
        echo "
    </div>
    <div class=\"tab-pane\" id=\"callrecording\">
    \t";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersAppBundle:Operator/Profile:callRecording"));
        echo "
    </div>
    <div class=\"tab-pane\" id=\"salesforce\">
    \t";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JetChartersAppBundle:Operator/Profile:salesforce"));
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Operator/Profile:companyInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  104 => 55,  129 => 61,  100 => 57,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 123,  175 => 67,  126 => 61,  96 => 55,  184 => 36,  110 => 25,  83 => 133,  23 => 1,  81 => 34,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 31,  74 => 30,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 66,  114 => 71,  90 => 51,  77 => 42,  65 => 14,  37 => 14,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 105,  165 => 82,  161 => 81,  157 => 79,  155 => 100,  153 => 36,  124 => 57,  113 => 26,  53 => 18,  145 => 69,  139 => 65,  58 => 14,  120 => 31,  97 => 53,  52 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 36,  111 => 24,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 72,  131 => 31,  119 => 55,  108 => 56,  102 => 46,  71 => 16,  67 => 25,  63 => 25,  59 => 56,  47 => 7,  38 => 6,  94 => 52,  89 => 34,  85 => 34,  79 => 31,  75 => 41,  68 => 22,  56 => 16,  50 => 12,  29 => 3,  87 => 1,  72 => 23,  55 => 19,  21 => 2,  26 => 29,  98 => 45,  93 => 35,  88 => 38,  78 => 16,  46 => 14,  27 => 1,  40 => 9,  44 => 8,  35 => 5,  31 => 4,  43 => 14,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 39,  156 => 60,  151 => 74,  142 => 90,  138 => 89,  136 => 40,  123 => 58,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 37,  69 => 15,  66 => 14,  62 => 57,  49 => 17,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 90,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 71,  147 => 35,  144 => 70,  141 => 70,  133 => 32,  130 => 62,  125 => 44,  122 => 58,  116 => 54,  112 => 57,  109 => 50,  106 => 68,  103 => 67,  99 => 54,  95 => 42,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 28,  64 => 20,  60 => 22,  57 => 10,  54 => 9,  51 => 18,  48 => 45,  45 => 26,  42 => 9,  39 => 8,  36 => 6,  33 => 3,  30 => 5,);
    }
}
