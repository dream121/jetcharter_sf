<?php

/* JetChartersAppBundle:Admin/EmptyLeg:index.html.twig */
class __TwigTemplate_7ec3e39b52e1d942938ed0cae857e6d7c82681c42b025ecd4b37361a1a3fdc8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Admin:base.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container-fluid\">
        <div id=\"pad-wrapper\" class=\"form-page\">
            <div class=\"row-fluid form-wrapper\">
                <div class=\"row-fluid head\">
                    <div class=\"span12\">
                        <h4 style=\"margin:-20px 0 20px 0;\"> + Empty Legs</h4>
                    </div>
                </div>
                <div class=\"row-fluid filter-block\">
                    <div class=\"pull-right\">
                        <a class=\"btn-glow primary\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_emptylegs_new");
        echo "\"> Add New Empty Leg </a>
                    </div>
                </div>
                ";
        // line 17
        if ((!twig_test_empty((isset($context["entities"]) ? $context["entities"] : null)))) {
            // line 18
            echo "                <table class=\"table table-hover\" style=\"margin-top:15px;\">
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
                            <th class=\"span2\">
                                <span class=\"line\"></span>
                                OperatorUser
                            </th>
                            <th class=\"span2\">
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_emptylegs_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 54
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "origin")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "origin"), "name"), "html", null, true);
                    echo " ";
                }
                echo "</td>
                        <td>";
                // line 55
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "destination")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "destination"), "name"), "html", null, true);
                }
                echo "</td>
                        <td>";
                // line 56
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fromDate")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fromDate"), "m/d/Y"), "html", null, true);
                }
                echo "—";
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "toDate")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "toDate"), "m/d/Y"), "html", null, true);
                }
                echo "</td>
                        <td>";
                // line 57
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aircraft")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "aircraft"), "name"), "html", null, true);
                    echo " ";
                }
                echo "</td>
                        <td>";
                // line 58
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "operator") && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "operator", array(), "any", true, true))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "operator"), "name"), "html", null, true);
                    echo " ";
                }
                echo "</td>
                        <td>
                            <a class=\"btn-flat icon\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_emptylegs_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-edit\"></i> Edit</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </tbody>
            </table>

            ";
        } else {
            // line 68
            echo "            <div class=\"alert\" style=\"margin-top:15px;\"><i class=\"icon-warning-sign\"></i>You have no empty legs in the Jetcharters.com system.</div>
            ";
        }
        // line 70
        echo "
            </div>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/EmptyLeg:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 98,  110 => 44,  83 => 33,  23 => 1,  81 => 22,  174 => 82,  84 => 37,  70 => 36,  152 => 59,  148 => 58,  74 => 30,  160 => 61,  127 => 61,  118 => 58,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 66,  134 => 104,  114 => 56,  90 => 52,  77 => 33,  65 => 16,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 82,  165 => 63,  161 => 70,  157 => 68,  155 => 95,  153 => 94,  124 => 57,  113 => 54,  53 => 18,  145 => 42,  139 => 73,  58 => 14,  120 => 52,  97 => 47,  52 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 55,  132 => 58,  128 => 69,  111 => 37,  107 => 55,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 93,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 42,  102 => 46,  71 => 18,  67 => 26,  63 => 25,  59 => 6,  47 => 7,  38 => 6,  94 => 26,  89 => 32,  85 => 23,  79 => 18,  75 => 19,  68 => 17,  56 => 21,  50 => 18,  29 => 3,  87 => 37,  72 => 23,  55 => 13,  21 => 2,  26 => 6,  98 => 45,  93 => 53,  88 => 38,  78 => 21,  46 => 9,  27 => 1,  40 => 14,  44 => 8,  35 => 5,  31 => 4,  43 => 14,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 114,  163 => 84,  158 => 33,  156 => 60,  151 => 64,  142 => 54,  138 => 54,  136 => 56,  123 => 58,  121 => 97,  117 => 46,  115 => 43,  105 => 49,  101 => 40,  91 => 41,  69 => 17,  66 => 34,  62 => 33,  49 => 17,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 116,  187 => 84,  182 => 66,  176 => 90,  173 => 90,  168 => 115,  164 => 81,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 70,  141 => 60,  133 => 70,  130 => 62,  125 => 44,  122 => 48,  116 => 54,  112 => 53,  109 => 50,  106 => 50,  103 => 53,  99 => 54,  95 => 42,  92 => 45,  86 => 51,  82 => 22,  80 => 19,  73 => 19,  64 => 15,  60 => 22,  57 => 13,  54 => 12,  51 => 18,  48 => 25,  45 => 10,  42 => 9,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
