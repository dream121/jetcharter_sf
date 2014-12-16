<?php

/* JetChartersAppBundle:Admin:form_showcase.html.twig */
class __TwigTemplate_d084d0ffbf34b93141a306feef79bcdc3c52b5a7285879f51ea0c99be45013b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Admin:base.html.twig");

        $this->blocks = array(
            'page_styles' => array($this, 'block_page_styles'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
            'the_form' => array($this, 'block_the_form'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JetChartersAppBundle:Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_styles($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("page_styles", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/form-showcase.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/lib/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/css/dropzone.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />

";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0c3257c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c3257c_0") : $this->env->getExtension('assets')->getAssetUrl("js/0c3257c_select2.min_1.js");
            // line 21
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    
    ";
            // asset "0c3257c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c3257c_1") : $this->env->getExtension('assets')->getAssetUrl("js/0c3257c_wysihtml5-0.3.0_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    
    ";
            // asset "0c3257c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c3257c_2") : $this->env->getExtension('assets')->getAssetUrl("js/0c3257c_bootstrap-wysihtml5-0.0.2_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    
    ";
            // asset "0c3257c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c3257c_3") : $this->env->getExtension('assets')->getAssetUrl("js/0c3257c_form_showcase_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    
    ";
            // asset "0c3257c_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c3257c_4") : $this->env->getExtension('assets')->getAssetUrl("js/0c3257c_dropzone_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    
    ";
            // asset "0c3257c_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c3257c_5") : $this->env->getExtension('assets')->getAssetUrl("js/0c3257c_dropzone.custom_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    
    ";
        } else {
            // asset "0c3257c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c3257c") : $this->env->getExtension('assets')->getAssetUrl("js/0c3257c.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    
    ";
        }
        unset($context["asset_url"]);
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"container-fluid\">
  <div id=\"pad-wrapper\" class=\"form-page\">
      <div class=\"row-fluid form-wrapper\">
            <div class=\"row-fluid head\">
                <div class=\"span12\">
                    <h4 style=\"margin:-20px 0 20px 0;\">";
        // line 33
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>

                </div>
            </div>
            <div class=\"row-fluid\">
                <div class=\"span8 columns\">
                    ";
        // line 39
        $this->displayBlock('the_form', $context, $blocks);
        // line 40
        echo "                </div>
                <div class=\"span4 columns\"
                    ";
        // line 42
        $this->displayBlock('aside', $context, $blocks);
        // line 43
        echo "                </div>
            </div>
        </div>
    </div>
</div>

</body>
";
    }

    // line 33
    public function block_title($context, array $blocks = array())
    {
    }

    // line 39
    public function block_the_form($context, array $blocks = array())
    {
    }

    // line 42
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin:form_showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  139 => 39,  58 => 12,  120 => 27,  97 => 36,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 21,  63 => 13,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 34,  85 => 33,  79 => 18,  75 => 17,  68 => 22,  56 => 16,  50 => 10,  29 => 3,  87 => 25,  72 => 23,  55 => 11,  21 => 2,  26 => 6,  98 => 31,  93 => 35,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 5,  44 => 6,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 39,  158 => 33,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 28,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 42,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 43,  144 => 49,  141 => 40,  133 => 55,  130 => 33,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 7,  45 => 8,  42 => 7,  39 => 6,  36 => 4,  33 => 3,  30 => 3,);
    }
}
