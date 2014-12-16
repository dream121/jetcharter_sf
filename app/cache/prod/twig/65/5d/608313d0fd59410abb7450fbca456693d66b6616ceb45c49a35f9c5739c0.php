<?php

/* JetChartersAppBundle:Admin/BillingPlan:index.html.twig */
class __TwigTemplate_655d608313d0fd59410abb7450fbca456693d66b6616ceb45c49a35f9c5739c0 extends Twig_Template
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
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b91a3aa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b91a3aa_0") : $this->env->getExtension('assets')->getAssetUrl("js/b91a3aa_livesearch_1.js");
            // line 11
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

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"container-fluid\">
    <div id=\"pad-wrapper\" class=\"form-page\">
        <div class=\"row-fluid form-wrapper\">
            <div class=\"row-fluid head\">
                <div class=\"span12\">
                    <h4 style=\"margin:-20px 0 20px 0;\">+ Billing Plans</h4>
                </div>
            </div>
            <div class=\"row-fluid filter-block\">
                <div class=\"span8\">
                    <input type=\"text\" placeholder=\"Filter\" id=\"search\">
                </div>
                <div class=\"span4 pull-right\" align=\"right\">
                    <a class=\"btn-glow primary\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_billingplans_new");
        echo "\">Add a Billing Plan</a>
                </div>
            </div>

            <table class=\"table table-hover\" style=\"margin-top:15px;\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Autorenew</th>
                        <th>Activefrom</th>
                        <th>Activeto</th>
                        <th>Sortorder</th>
                        <th>Lengthindays</th>
                        <th>Enabled</th>
                        <th>Numberaircraft</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "                    <tr>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "price"), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description"), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "autorenew"), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activeFrom")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activeFrom"), "m/d/Y h:i A"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 57
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activeTo")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activeTo"), "m/d/Y h:i A"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sortOrder"), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lengthInDays"), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "enabled"), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numberOfAircraft"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn-flat icon btn-block\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_billingplans_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-list\"></i>Details</a>
                            <a class=\"btn-flat icon btn-block\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_billingplans_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i>Edit</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/BillingPlan:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 59,  148 => 58,  74 => 16,  160 => 61,  127 => 61,  118 => 58,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 105,  134 => 104,  114 => 93,  90 => 35,  77 => 24,  65 => 19,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 102,  165 => 63,  161 => 99,  157 => 96,  155 => 95,  153 => 94,  124 => 53,  113 => 50,  53 => 12,  145 => 42,  139 => 39,  58 => 23,  120 => 52,  97 => 47,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 64,  140 => 55,  132 => 55,  128 => 54,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 68,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 72,  108 => 89,  102 => 32,  71 => 15,  67 => 21,  63 => 13,  59 => 16,  47 => 9,  38 => 7,  94 => 28,  89 => 29,  85 => 33,  79 => 18,  75 => 23,  68 => 22,  56 => 16,  50 => 11,  29 => 3,  87 => 25,  72 => 23,  55 => 11,  21 => 2,  26 => 6,  98 => 31,  93 => 35,  88 => 6,  78 => 21,  46 => 9,  27 => 1,  40 => 5,  44 => 9,  35 => 6,  31 => 4,  43 => 8,  41 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 104,  166 => 114,  163 => 113,  158 => 33,  156 => 60,  151 => 109,  142 => 57,  138 => 54,  136 => 56,  123 => 59,  121 => 97,  117 => 51,  115 => 43,  105 => 40,  101 => 49,  91 => 33,  69 => 20,  66 => 15,  62 => 23,  49 => 17,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 42,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 115,  164 => 59,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 49,  141 => 70,  133 => 64,  130 => 103,  125 => 44,  122 => 43,  116 => 94,  112 => 42,  109 => 34,  106 => 54,  103 => 53,  99 => 31,  95 => 46,  92 => 45,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 13,  57 => 14,  54 => 10,  51 => 10,  48 => 10,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
