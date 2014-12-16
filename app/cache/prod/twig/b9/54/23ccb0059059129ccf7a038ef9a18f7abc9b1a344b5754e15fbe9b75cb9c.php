<?php

/* JetChartersAppBundle:Operator/Aircraft:default.html.twig */
class __TwigTemplate_b95423ccb0059059129ccf7a038ef9a18f7abc9b1a344b5754e15fbe9b75cb9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Operator:base.html.twig");

        $this->blocks = array(
            'page_styles' => array($this, 'block_page_styles'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JetChartersAppBundle:Operator:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_styles($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/user-list.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "       <div class=\"container-fluid\">
        <div id=\"pad-wrapper\" class=\"form-page\">
            <div class=\"row-fluid form-wrapper\">


                    <div class=\"row-fluid head\">
                        <div class=\"span12\">
                            <h4 style=\"margin:-20px 0 20px 0;\"> + Aircraft</h4>
                        </div>
                    </div>
                    <div class=\"row-fluid filter-block\">
                        <div class=\"pull-right\">
                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("operator_aircraft_new");
        echo "\" class=\"btn-glow primary\">Add New Aircraft</a>
                        </div>
                    </div>

                    <table class=\"table table-hover\" style=\"margin-top:15px;\">
                        <thead>
                            <tr>
                                <th class=\"span3\">
                                    Name
                                </th>
                                <th class=\"span2\">
                                    <span class=\"line\"></span>
                                    Type
                                </th>
                                <th class=\"span2\">
                                    <span class=\"line\"></span>
                                    Location
                                </th>
                                <th class=\"span2\">
                                    <span class=\"line\"></span>
                                    Tail #
                                </th>
                                <th class=\"span2\">
                                    <span class=\"line\"></span>
                                    Active
                                </th>
                                <th class=\"span4\">
                                    <span class=\"line\"></span>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        ";
        // line 54
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["aircraft"]) {
            // line 55
            echo "                            <tr>
                                <td>
                                ";
            // line 57
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "images")) > 0)) {
                // line 58
                echo "                                    <img width=\"100\" height=\"100\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "images"), "first"), "imagename"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
                echo "\" style=\"padding-right: 10px\" />
                                ";
            }
            // line 60
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
            echo "
                                </td>
                                <td>
                                     ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "aircraftmodel"), "type"), "name"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "location"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "tailNumber"), "html", null, true);
            echo "
                                </td>
                                <td align=\"center\">
                                    ";
            // line 72
            if ($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "active")) {
                echo "Active";
            } else {
                echo "Inactive";
            }
            // line 73
            echo "                                </td>
                                <td style=\"padding:5px;\" align=\"center\">
                                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_aircraft_edit", array("id" => $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "id"))), "html", null, true);
            echo "\"><div class=\"btn-flat icon\" style=\"margin-right:5px;\"><i class=\"icon-edit\"></i> Edit</div></a>
                                    ";
            // line 76
            if ($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "active")) {
                // line 77
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_aircraft_deactivate", array("id" => $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "id"))), "html", null, true);
                echo "\"><div class=\"btn-flat icon\" style=\"margin-right:5px;\"><i class=\"icon-pause\"></i> Pause</div></a>
                                    ";
            } else {
                // line 79
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_aircraft_activate", array("id" => $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "id"))), "html", null, true);
                echo "\"><div class=\"btn-flat icon\" style=\"margin-right:5px;\"><i class=\"icon-play\"></i> Resume</div></a>
                                    ";
            }
            // line 81
            echo "                                    ";
            // line 82
            echo "                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aircraft'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </table>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Operator/Aircraft:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 69,  100 => 57,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 75,  175 => 67,  126 => 52,  96 => 55,  184 => 36,  110 => 60,  83 => 133,  23 => 1,  81 => 22,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 58,  74 => 110,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 35,  172 => 117,  146 => 19,  137 => 66,  134 => 104,  114 => 9,  90 => 2,  77 => 111,  65 => 14,  37 => 14,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 43,  165 => 82,  161 => 25,  157 => 79,  155 => 37,  153 => 94,  124 => 57,  113 => 54,  53 => 10,  145 => 75,  139 => 33,  58 => 14,  120 => 51,  97 => 47,  52 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 30,  111 => 24,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 72,  131 => 31,  119 => 11,  108 => 31,  102 => 58,  71 => 16,  67 => 74,  63 => 25,  59 => 56,  47 => 7,  38 => 6,  94 => 26,  89 => 32,  85 => 30,  79 => 131,  75 => 18,  68 => 17,  56 => 21,  50 => 18,  29 => 3,  87 => 1,  72 => 83,  55 => 13,  21 => 1,  26 => 29,  98 => 45,  93 => 21,  88 => 24,  78 => 30,  46 => 25,  27 => 1,  40 => 15,  44 => 14,  35 => 8,  31 => 3,  43 => 7,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 33,  156 => 60,  151 => 77,  142 => 57,  138 => 16,  136 => 56,  123 => 66,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 54,  69 => 15,  66 => 14,  62 => 57,  49 => 9,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 90,  173 => 85,  168 => 115,  164 => 26,  162 => 59,  154 => 110,  149 => 76,  147 => 35,  144 => 70,  141 => 73,  133 => 32,  130 => 53,  125 => 44,  122 => 48,  116 => 10,  112 => 49,  109 => 48,  106 => 50,  103 => 53,  99 => 54,  95 => 4,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 13,  60 => 13,  57 => 10,  54 => 9,  51 => 18,  48 => 7,  45 => 6,  42 => 9,  39 => 8,  36 => 3,  33 => 2,  30 => 1,);
    }
}
