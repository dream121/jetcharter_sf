<?php

/* JetChartersAppBundle:Operator/EmptyLeg:index.html.twig */
class __TwigTemplate_69cd3645b6d3c2bd3c998529fc5e2313f73bf34517eaba5f8b89c492175d7b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Operator:base.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container-fluid\">
    <div id=\"pad-wrapper\" class=\"form-page\">
        <div class=\"row-fluid form-wrapper\">
            <div class=\"row-fluid head\">
                <div class=\"span12\">
                    <h4 style=\"margin:-20px 0 20px 0;\">+ Empty Legs</h4>
                </div>
            </div>
            <div class=\"row-fluid filter-block\">
                <div class=\"pull-right\">
                    <a class=\"btn-glow primary\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("operator_emptylegs_new");
        echo "\"> Add New Empty Leg </a>
                </div>
            </div>
            ";
        // line 17
        if ((!twig_test_empty((isset($context["entities"]) ? $context["entities"] : null)))) {
            // line 18
            echo "            <table class=\"table table-hover\" style=\"margin-top:15px;\">
                <thead>
                    <tr>
                        <th class=\"span2\">
                            Leg ID
                        </th>
                        <th class=\"span2\">
                            <span class=\"line\"></span>
                            Origin
                        </th>
                        <th class=\"span2\">
                            <span class=\"line\"></span>
                            Destination
                        </th>
                        <th class=\"span2\">
                            <span class=\"line\"></span>
                            Dates Available
                        </th>
                        <th class=\"span2\">
                            <span class=\"line\"></span>
                            Aircraft
                        </th>
                        ";
            // line 41
            echo "                            ";
            // line 42
            echo "                            ";
            // line 43
            echo "                        ";
            // line 44
            echo "                        <th class=\"span2\">
                            <span class=\"line\"></span>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 52
                echo "                    <tr>
                        <td><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_emptylegs_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
                echo "</a>
                        </td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "origin"), "html", null, true);
                echo "</td>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "destination"), "html", null, true);
                echo "</td>
                        <td>";
                // line 57
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fromdate")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fromdate"), "m/d/Y"), "html", null, true);
                }
                echo " — ";
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fromdate")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fromdate"), "m/d/Y"), "html", null, true);
                }
                echo "</td>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aircraft"), "aircraftmodel"), "name"), "html", null, true);
                echo "</td>
                        ";
                // line 60
                echo "                        <td>
                            <a class=\"btn-flat icon\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operator_emptylegs_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-edit\"></i> Edit</a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                </tbody>
            </table>

            ";
        } else {
            // line 69
            echo "            <div class=\"alert\" style=\"margin-top:15px;\"><i class=\"icon-warning-sign\"></i>You have no empty legs in the Jetcharters.com system.</div>
            ";
        }
        // line 71
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Operator/EmptyLeg:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  129 => 61,  100 => 57,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 123,  175 => 67,  126 => 60,  96 => 55,  184 => 36,  110 => 25,  83 => 133,  23 => 1,  81 => 44,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 31,  74 => 30,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 39,  114 => 71,  90 => 51,  77 => 42,  65 => 14,  37 => 14,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 105,  165 => 82,  161 => 81,  157 => 79,  155 => 100,  153 => 36,  124 => 57,  113 => 26,  53 => 18,  145 => 69,  139 => 65,  58 => 14,  120 => 31,  97 => 53,  52 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 36,  111 => 24,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 72,  131 => 31,  119 => 55,  108 => 56,  102 => 46,  71 => 16,  67 => 26,  63 => 25,  59 => 56,  47 => 7,  38 => 6,  94 => 52,  89 => 34,  85 => 33,  79 => 43,  75 => 41,  68 => 22,  56 => 16,  50 => 12,  29 => 3,  87 => 1,  72 => 23,  55 => 11,  21 => 1,  26 => 29,  98 => 45,  93 => 35,  88 => 38,  78 => 16,  46 => 7,  27 => 1,  40 => 15,  44 => 8,  35 => 5,  31 => 4,  43 => 14,  41 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 39,  156 => 60,  151 => 74,  142 => 90,  138 => 89,  136 => 40,  123 => 58,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 58,  69 => 15,  66 => 14,  62 => 57,  49 => 17,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 90,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 71,  147 => 35,  144 => 70,  141 => 73,  133 => 32,  130 => 62,  125 => 44,  122 => 58,  116 => 54,  112 => 57,  109 => 50,  106 => 68,  103 => 67,  99 => 54,  95 => 42,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 20,  60 => 22,  57 => 10,  54 => 9,  51 => 18,  48 => 45,  45 => 26,  42 => 7,  39 => 10,  36 => 6,  33 => 3,  30 => 3,);
    }
}
