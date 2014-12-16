<?php

/* JetChartersAppBundle:Admin/CharterAircraft:default.html.twig */
class __TwigTemplate_97a5a27e05483ab5a41e7126ceb1ef429387fc1a7c3d765b5de3358bf105c1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Admin:base.html.twig");

        $this->blocks = array(
            'page_styles' => array($this, 'block_page_styles'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/admin/css/compiled/user-list.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b91a3aa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b91a3aa_0") : $this->env->getExtension('assets')->getAssetUrl("js/b91a3aa_livesearch_1.js");
            // line 13
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "b91a3aa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b91a3aa") : $this->env->getExtension('assets')->getAssetUrl("js/b91a3aa.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "       <div class=\"container-fluid\">
        <div id=\"pad-wrapper\" class=\"form-page\">
            <div class=\"row-fluid form-wrapper\">
                    <div class=\"row-fluid head\">
                        <div class=\"span12\">
                            <h4 style=\"margin:-20px 0 20px 0;\"> + Charter Aircraft</h4>
                        </div>
                    </div>
                    <div class=\"row-fluid filter-block\">
                        <div class=\"span8\">
                            <input type=\"text\" placeholder=\"Filter\" id=\"search\">
                        </div>
                        <div class=\"span4 pull-right\" align=\"right\">
                            <a class=\"btn-glow primary\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_aircraft_new");
        echo "\">Add New Charter Aircraft</a>
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
                                    Status
                                </th>
                                 <th class=\"span2\">
                                    <span class=\"line\"></span>
                                    Operator
                                </th>
                                <th class=\"span4\">
                                    <span class=\"line\"></span>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        ";
        // line 69
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["aircraft"]) {
            // line 70
            echo "                            <tr>
                                <td>
                                    ";
            // line 72
            if ($this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "images")) {
                // line 73
                echo "                                        ";
                // line 74
                echo "                                    ";
            }
            // line 75
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "name"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "type"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "location"), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "tailNumber"), "html", null, true);
            echo "
                                </td>
                                <td align=\"center\" style=\"color: green;\">
                                    ";
            // line 88
            echo "                                </td>
                                <td align=\"center\">
                                    ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "company"), "html", null, true);
            echo "
                                </td>
                                <td style=\"padding:5px;\" align=\"right\">
                                    <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_aircraft_edit", array("id" => $this->getAttribute((isset($context["aircraft"]) ? $context["aircraft"] : null), "id"))), "html", null, true);
            echo "\">
                                    <div class=\"btn-flat icon\" style=\"margin-right:5px;\"><i class=\"icon-edit\"></i> Edit</div></a>
                                    ";
            // line 98
            echo "
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aircraft'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                    </table>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/CharterAircraft:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 98,  110 => 44,  83 => 33,  23 => 1,  81 => 34,  174 => 82,  84 => 37,  70 => 36,  152 => 59,  148 => 58,  74 => 19,  160 => 61,  127 => 61,  118 => 58,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 72,  134 => 104,  114 => 93,  90 => 35,  77 => 33,  65 => 19,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 82,  165 => 63,  161 => 99,  157 => 81,  155 => 95,  153 => 94,  124 => 53,  113 => 54,  53 => 18,  145 => 42,  139 => 73,  58 => 14,  120 => 52,  97 => 47,  52 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 88,  140 => 55,  132 => 50,  128 => 69,  111 => 37,  107 => 43,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 93,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 42,  102 => 41,  71 => 18,  67 => 26,  63 => 25,  59 => 6,  47 => 12,  38 => 6,  94 => 36,  89 => 32,  85 => 33,  79 => 18,  75 => 23,  68 => 22,  56 => 21,  50 => 18,  29 => 3,  87 => 37,  72 => 23,  55 => 13,  21 => 2,  26 => 6,  98 => 45,  93 => 35,  88 => 38,  78 => 21,  46 => 9,  27 => 1,  40 => 14,  44 => 15,  35 => 5,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 114,  163 => 84,  158 => 33,  156 => 60,  151 => 78,  142 => 54,  138 => 54,  136 => 56,  123 => 47,  121 => 97,  117 => 46,  115 => 43,  105 => 49,  101 => 40,  91 => 41,  69 => 11,  66 => 34,  62 => 33,  49 => 10,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 90,  168 => 115,  164 => 81,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 75,  141 => 74,  133 => 70,  130 => 103,  125 => 44,  122 => 48,  116 => 45,  112 => 53,  109 => 34,  106 => 50,  103 => 53,  99 => 46,  95 => 46,  92 => 45,  86 => 34,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 22,  57 => 19,  54 => 10,  51 => 10,  48 => 25,  45 => 9,  42 => 8,  39 => 10,  36 => 6,  33 => 4,  30 => 3,);
    }
}
