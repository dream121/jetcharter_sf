<?php

/* JetChartersAppBundle:Admin/AircraftModel:edit.html.twig */
class __TwigTemplate_e25d97f247d4277d2cf5ea139ca87a79aa3c800e335f33e8f9a4359e06e2acc5 extends Twig_Template
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
        echo "+ Edit Aircraft Model";
    }

    // line 5
    public function block_the_form($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => "JetChartersAppBundle:Form:cp_form_theme.html.twig"));
        // line 7
        echo "
\t<ul class=\"nav nav-tabs\" id=\"tabs\">
\t  <li class=\"active\"><a href=\"#form\" data-toggle=\"tab\">Aircraft</a></li>
\t  <li><a href=\"#images\" data-toggle=\"tab\">Images</a></li>
\t  <li><a href=\"#videos\" data-toggle=\"tab\">Videos</a></li>
\t</ul>
\t<div class=\"tab-content\">
\t  <div class=\"tab-pane active\" id=\"form\">
\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "
\t\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "
\t  </div>
\t  <div class=\"tab-pane\" id=\"images\">
\t\t<h4>Images:</h4>
\t\t<p>
\t\t<form   action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_aircraft_upload_image", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" class=\"dropzone\" id=\"dropzone_image_upload\"
\t\t        data-existing=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_aircraft_get_images", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\"
\t\t        data-deleteurl=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_aircraft_delete_image");
        echo "\">
\t\t  <div class=\"fallback\">
\t\t    <input name=\"file\" type=\"file\" multiple />
\t\t  </div>
\t\t</form>
\t\t</p>
\t  </div>
\t  <div class=\"tab-pane\" id=\"videos\">
\t\t<h4>Videos:</h4>
\t\t<p>
\t\t  <form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_aircraft_upload_video", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" class=\"dropzone\" id=\"dropzone_video_upload\"
\t\t        data-existing=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_aircraft_get_videos", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\"
\t\t        data-deleteurl=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_aircraft_delete_video");
        echo "\"
\t\t        data-embedurl=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("admin_aircraft_get_video_embed");
        echo "\">
\t\t  <div class=\"fallback\">
\t\t    <input name=\"file\" type=\"file\" multiple />
\t\t  </div>
\t\t</form>
\t\t</p>
\t  </div>
\t</div>

<div id=\"video-modal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-header\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t<h3 id=\"myModalLabel\">Video</h3>
\t</div>

\t<div class=\"modal-body\"></div>
</div>

";
    }

    // line 56
    public function block_aside($context, array $blocks = array())
    {
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/AircraftModel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 56,  97 => 36,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 34,  85 => 33,  79 => 18,  75 => 17,  68 => 22,  56 => 16,  50 => 10,  29 => 3,  87 => 25,  72 => 23,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 35,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 57,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
