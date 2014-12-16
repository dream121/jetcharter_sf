<?php

/* JetChartersAppBundle:Operator/Aircraft:edit.html.twig */
class __TwigTemplate_136c2e145b977ef1ad13587533c13abd5a263fd6a5a9340f6dc28baf78807307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Operator:form_showcase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'the_form' => array($this, 'block_the_form'),
            'aside' => array($this, 'block_aside'),
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
        echo "+ Edit Aircraft";
    }

    // line 5
    public function block_the_form($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => "JetChartersAppBundle:Form:cp_form_theme.html.twig"));
        // line 7
        echo "
  <ul class=\"nav nav-tabs\" id=\"tabs\">
    <li class=\"active\"><a href=\"#form\" data-toggle=\"tab\">Aircraft</a></li>
    <li><a href=\"#images\" data-toggle=\"tab\">Images</a></li>
    <li><a href=\"#videos\" data-toggle=\"tab\">Videos</a></li>
  </ul>
  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"form\">
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "
    </div>
    <div class=\"tab-pane\" id=\"images\">
    <h4>Images:</h4>
    <p>
    <form   action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_aircraft_upload_image", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" class=\"dropzone\" id=\"dropzone_image_upload\"
            data-existing=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_aircraft_get_images", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\"
            data-deleteurl=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("operator_aircraft_delete_image");
        echo "\">
      <div class=\"fallback\">
        <input name=\"file\" type=\"file\" multiple />
      </div>
    </form>
    </p>
    </div>
    <div class=\"tab-pane\" id=\"videos\">
    <h4>Videos:</h4>
    <p>
      <form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_aircraft_upload_video", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" class=\"dropzone\" id=\"dropzone_video_upload\"
            data-existing=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_aircraft_get_videos", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\"
            data-deleteurl=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("operator_aircraft_delete_video");
        echo "\"
            data-embedurl=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("operator_aircraft_get_video_embed");
        echo "\">
      <div class=\"fallback\">
        <input name=\"file\" type=\"file\" multiple />
      </div>
    </form>
    </p>
    </div>
  </div>

<div id=\"video-modal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-header\">
  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
  <h3 id=\"myModalLabel\">Video</h3>
  </div>

  <div class=\"modal-body\"></div>
</div>
";
    }

    // line 55
    public function block_aside($context, array $blocks = array())
    {
        // line 56
        echo "
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Operator/Aircraft:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 69,  100 => 57,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 123,  175 => 67,  126 => 52,  96 => 55,  184 => 36,  110 => 60,  83 => 133,  23 => 1,  81 => 22,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 58,  74 => 110,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 104,  114 => 71,  90 => 2,  77 => 111,  65 => 14,  37 => 14,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 105,  165 => 82,  161 => 25,  157 => 79,  155 => 100,  153 => 94,  124 => 57,  113 => 54,  53 => 10,  145 => 75,  139 => 33,  58 => 14,  120 => 51,  97 => 36,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 30,  111 => 24,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 72,  131 => 31,  119 => 55,  108 => 31,  102 => 58,  71 => 16,  67 => 74,  63 => 25,  59 => 56,  47 => 7,  38 => 6,  94 => 26,  89 => 34,  85 => 33,  79 => 131,  75 => 18,  68 => 22,  56 => 16,  50 => 18,  29 => 3,  87 => 1,  72 => 23,  55 => 13,  21 => 1,  26 => 29,  98 => 45,  93 => 35,  88 => 24,  78 => 30,  46 => 25,  27 => 1,  40 => 15,  44 => 14,  35 => 8,  31 => 3,  43 => 7,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 101,  156 => 60,  151 => 77,  142 => 90,  138 => 89,  136 => 56,  123 => 77,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 58,  69 => 15,  66 => 14,  62 => 57,  49 => 9,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 111,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 76,  147 => 35,  144 => 70,  141 => 73,  133 => 32,  130 => 53,  125 => 44,  122 => 56,  116 => 10,  112 => 49,  109 => 69,  106 => 68,  103 => 67,  99 => 54,  95 => 4,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 21,  60 => 13,  57 => 10,  54 => 9,  51 => 18,  48 => 7,  45 => 6,  42 => 7,  39 => 6,  36 => 5,  33 => 2,  30 => 3,);
    }
}
