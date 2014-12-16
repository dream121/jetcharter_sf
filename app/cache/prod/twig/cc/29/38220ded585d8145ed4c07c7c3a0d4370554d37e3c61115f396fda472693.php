<?php

/* JetChartersAppBundle:Admin/Operators:index.html.twig */
class __TwigTemplate_cc2938220ded585d8145ed4c07c7c3a0d4370554d37e3c61115f396fda472693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Admin:base.html.twig");

        $this->blocks = array(
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b91a3aa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b91a3aa_0") : $this->env->getExtension('assets')->getAssetUrl("js/b91a3aa_livesearch_1.js");
            // line 8
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

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"container-fluid\">
    <div id=\"pad-wrapper\" class=\"form-page\">
        <div class=\"row-fluid form-wrapper\">
            <div class=\"row-fluid head\">
                <div class=\"span12\">
                    <h4 style=\"margin:-20px 0 20px 0;\"> + Charter Operators</h4>
                </div>
            </div>
            <div class=\"row-fluid filter-block\">
                <div class=\"span8\">
                    <input type=\"text\" placeholder=\"Filter\" id=\"search\">
                </div>
                <div class=\"span4 pull-right\" align=\"right\">
                    <a class=\"btn-flat primary\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_aircraft_status_log");
        echo "\"> Aircraft Status Log</a>
                    <a class=\"btn-glow primary\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_operators_new");
        echo "\"> Add New Charters OperatorUser</a>
                </div>
            </div>
            ";
        // line 30
        if ((!twig_test_empty((isset($context["entities"]) ? $context["entities"] : null)))) {
            // line 31
            echo "            <table class=\"table table-hover\" style=\"margin-top:15px;\">
                <thead>
                    <tr>
                        <th>Operator</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Lastlogin</th>
                        <th>Roles</th>
                        <th>Phone</th>
                        <th>Billing Plan</th>
                        <th>Aircraft Listed</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 48
                echo "                    <tr>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "operator", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "operator", array(), "any", false, true), "name", array(), "any", true, true))) ? ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "operator"), "name")) : (0)), "html", null, true);
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username"), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastName"), "html", null, true);
                echo "</td>
                        <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email"), "html", null, true);
                echo "</td>
                        <td>";
                // line 53
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastLogin")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastLogin"), "m/d/Y h:i A"), "html", null, true);
                }
                echo "</td>
                        <td>
                            <ul>
                                ";
                // line 56
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 57
                    echo "                                <li>";
                    echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : null), "html", null, true);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                            </ul>
                        </td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "phone"), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "billingPlan", array(), "any", true, true)) ? ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "billingPlan")) : (0)), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo "</td>
                        <td>
                            <a class=\"btn-flat icon btn-block\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operators_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\"><i class=\"icon-edit\"></i> Edit</a>
                            <a class=\"btn-flat icon btn-block\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_aircraft", array("op_username" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username"))), "html", null, true);
                echo "\"><i class=\"icon-list\"></i> List Aircraft</a>
                            <a class=\"btn-flat icon btn-block\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operators_assign_aircraft", array("op_username" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username"))), "html", null, true);
                echo "\"><i class=\"icon-plane\"></i> Assign Aircraft</a>
                            <a class=\"btn-flat icon btn-block\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operators_billing", array("op_username" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "username"))), "html", null, true);
                echo "\"><i class=\"icon-briefcase\"></i> Billing</a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </tbody>
            </table>
            ";
        } else {
            // line 75
            echo "            <div class=\"alert\" style=\"margin-top:15px;\"><i class=\"icon-warning-sign\"></i>There are no operators in the Jetcharters.com system</div>
            ";
        }
        // line 77
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/Operators:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 75,  175 => 67,  126 => 52,  96 => 27,  184 => 98,  110 => 44,  83 => 22,  23 => 1,  81 => 22,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 58,  74 => 29,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 66,  134 => 104,  114 => 56,  90 => 25,  77 => 33,  65 => 14,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 77,  180 => 23,  167 => 65,  165 => 63,  161 => 70,  157 => 68,  155 => 61,  153 => 94,  124 => 57,  113 => 54,  53 => 10,  145 => 42,  139 => 73,  58 => 14,  120 => 51,  97 => 47,  52 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 55,  132 => 58,  128 => 69,  111 => 32,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 68,  159 => 62,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 31,  102 => 46,  71 => 18,  67 => 26,  63 => 25,  59 => 6,  47 => 7,  38 => 6,  94 => 26,  89 => 32,  85 => 30,  79 => 27,  75 => 26,  68 => 17,  56 => 11,  50 => 18,  29 => 3,  87 => 31,  72 => 23,  55 => 13,  21 => 2,  26 => 6,  98 => 45,  93 => 26,  88 => 24,  78 => 30,  46 => 8,  27 => 1,  40 => 14,  44 => 14,  35 => 5,  31 => 3,  43 => 7,  41 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 63,  158 => 33,  156 => 60,  151 => 59,  142 => 57,  138 => 56,  136 => 56,  123 => 58,  121 => 97,  117 => 46,  115 => 43,  105 => 47,  101 => 40,  91 => 26,  69 => 17,  66 => 34,  62 => 33,  49 => 9,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 72,  187 => 84,  182 => 66,  176 => 90,  173 => 90,  168 => 115,  164 => 81,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 70,  141 => 60,  133 => 70,  130 => 53,  125 => 44,  122 => 48,  116 => 50,  112 => 49,  109 => 48,  106 => 50,  103 => 53,  99 => 54,  95 => 33,  92 => 45,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 27,  60 => 13,  57 => 12,  54 => 12,  51 => 18,  48 => 11,  45 => 10,  42 => 13,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
