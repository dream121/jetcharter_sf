<?php

/* JetChartersAppBundle:Admin/Operators:assignaircraft.html.twig */
class __TwigTemplate_d671efcb292dfb11eb2522b4fd9e274acfebbf39aaeaa0f43eeb08464808477b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Admin:form_showcase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'button_widget' => array($this, 'block_button_widget'),
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
        echo "+ Assign Aircraft to ";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : null), "html", null, true);
    }

    // line 5
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 6
        ob_start();
        // line 7
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <table width=\"100%\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            echo "        <tr>
            <td style=\"padding-bottom:10px\">";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "</td>
            <td>";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
            echo "</td>
        </tr>
        ";
            // line 14
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'errors');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </table>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_button_widget($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "<hr>
    ";
        // line 24
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 25
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 26
            echo "    ";
        }
        // line 27
        echo "        <button class=\"btn-glow primary\" type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</button>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_the_form($context, array $blocks = array())
    {
        // line 32
        echo "\t<a class=\"btn-flat icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_aircraft_new", array("op_username" => (isset($context["op_username"]) ? $context["op_username"] : null))), "html", null, true);
        echo "\"><i class=\"icon-plane\"></i> New Aircraft</a>
\t<hr>

\t";
        // line 35
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => $this));
        // line 36
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/Operators:assignaircraft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  184 => 98,  110 => 44,  83 => 22,  23 => 1,  81 => 22,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 58,  74 => 29,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 66,  134 => 104,  114 => 56,  90 => 25,  77 => 33,  65 => 14,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 82,  165 => 63,  161 => 70,  157 => 68,  155 => 95,  153 => 94,  124 => 57,  113 => 54,  53 => 10,  145 => 42,  139 => 73,  58 => 14,  120 => 36,  97 => 47,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 55,  132 => 58,  128 => 69,  111 => 32,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 93,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 31,  102 => 46,  71 => 18,  67 => 26,  63 => 25,  59 => 6,  47 => 7,  38 => 5,  94 => 26,  89 => 32,  85 => 23,  79 => 18,  75 => 19,  68 => 17,  56 => 11,  50 => 18,  29 => 3,  87 => 37,  72 => 23,  55 => 13,  21 => 2,  26 => 6,  98 => 45,  93 => 26,  88 => 24,  78 => 30,  46 => 9,  27 => 1,  40 => 14,  44 => 14,  35 => 5,  31 => 3,  43 => 7,  41 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 114,  163 => 84,  158 => 33,  156 => 60,  151 => 64,  142 => 54,  138 => 54,  136 => 56,  123 => 58,  121 => 97,  117 => 46,  115 => 43,  105 => 49,  101 => 40,  91 => 26,  69 => 17,  66 => 34,  62 => 33,  49 => 9,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 116,  187 => 84,  182 => 66,  176 => 90,  173 => 90,  168 => 115,  164 => 81,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 70,  141 => 60,  133 => 70,  130 => 62,  125 => 44,  122 => 48,  116 => 41,  112 => 39,  109 => 50,  106 => 50,  103 => 53,  99 => 54,  95 => 33,  92 => 45,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 27,  60 => 12,  57 => 25,  54 => 12,  51 => 18,  48 => 11,  45 => 10,  42 => 13,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
