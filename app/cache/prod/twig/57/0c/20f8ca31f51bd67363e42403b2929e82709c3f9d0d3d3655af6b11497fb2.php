<?php

/* JetChartersPublicBundle:Aircraft:index.html.twig */
class __TwigTemplate_570c20f8ca31f51bd67363e42403b2929e82709c3f9d0d3d3655af6b11497fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersPublicBundle::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JetChartersPublicBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"intro-01 parallax-bg\">
    <header class=\"container\">
        <img class=\" ico-plane\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/ico-plane.png"), "html", null, true);
        echo "\" alt=\"image\">
        <h1>Aircraft By Type</h1>
    </header>
    <div class=\"aircraft-types-form\">
        <div class=\"container\">
            <form action=\"#\">
                <div class=\"cel\">
                    <select title=\"Aircraft By Type\" class=\"form-control\" name =\"aircraft_type_private_jets\" id=\"aircraft_type_private_jets\">
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aircraftTypes"]) ? $context["aircraftTypes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["aircraftType"]) {
            // line 15
            echo "\t\t\t    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraftType"]) ? $context["aircraftType"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraftType"]) ? $context["aircraftType"] : null), "name"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aircraftType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </select>
                </div>
                <div class=\"cel\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"City/Airport Code\" name =\"city_airport_code_private_jets\" id=\"city_airport_code_private_jets\" />
                </div>
                <div class=\"cel\">
                    <select title=\"Search Radius\" class=\"form-control\" name =\"radius_private_jets\" id=\"radius_private_jets\">
\t\t\t<option value=\"50\">50 mi</option>
\t\t\t<option value=\"100\">100 mi</option>
\t\t\t<option value=\"250\">250 mi</option>
\t\t\t<option value=\"500\">500 mi</option>
                    </select>
                </div>
                <div class=\"btn-holder\">
                    <button class=\"btn btn-info\">Search</button>
                </div>
            </form>
            <button class=\"btn btn-info btn-mobile\" data-toggle=\"modal\" data-target=\"#aircraft-category\">Aircraft By Category</button>
        </div>
    </div><!-- aircraft-types-form -->
</section><!-- intro-01 -->
<section class=\"aircraft-type-list\">
    <div class=\"container\">
        <ul>
            <li>
                <a name=\"air-taxi\"></a>
                <div class=\"img\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-01.png"), "html", null, true);
        echo "\" alt=\"image\">
                </div>
                <h3>Air Taxi</h3>
                <ul class=\"models\">
\t\t    ";
        // line 48
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : null)) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "airliner", array(), "array", true, true))) {
            // line 49
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : null), "airliner", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 50
                echo "\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    ";
        }
        // line 53
        echo "                </ul>
            </li><li>
                <div class=\"img\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-02.png"), "html", null, true);
        echo "\" alt=\"image\">
                </div>
                <h3><a href=\"#\">Turbo-Prop</a></h3>
                <ul class=\"models\">
\t\t    ";
        // line 60
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : null)) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "turbo-prop", array(), "array", true, true))) {
            // line 61
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : null), "turbo-prop", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 62
                echo "\t\t\t    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    ";
        }
        // line 65
        echo "                </ul>
            </li><li>
                <a name=\"light\"></a>
                <div class=\"img\">
                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-03.png"), "html", null, true);
        echo "\" alt=\"image\">
                </div>
                <h3><a href=\"#\">Light Jets</a></h3>
                <div class=\"holder\">
                    <ul class=\"models\">
\t\t\t";
        // line 74
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : null)) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "light", array(), "array", true, true))) {
            // line 75
            echo "\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : null), "light", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 76
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name"), "html", null, true);
                echo "</a></li>
\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                    </ul>
                </div>
            </li><li>
                <a name=\"mid-size\"></a>
                <div class=\"img\">
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-09.png"), "html", null, true);
        echo "\" alt=\"image\">
                </div>
                <h3><a href=\"#\">Medium Jets</a></h3>
                <ul class=\"models\">
\t\t    ";
        // line 88
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : null)) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "mid-size", array(), "array", true, true))) {
            // line 89
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : null), "mid-size", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 90
                echo "\t\t\t    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    ";
        }
        // line 93
        echo "                </ul>
            </li><li>
                <a name=\"super-mid\"></a>
                <div class=\"img\">
                    <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-07.png"), "html", null, true);
        echo "\" alt=\"image\">
                </div>
                <h3><a href=\"#\">Super-Mid Jets</a></h3>
                <ul class=\"models\">
\t\t    ";
        // line 101
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : null)) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "super-mid", array(), "array", true, true))) {
            // line 102
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : null), "super-mid", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 103
                echo "\t\t\t    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t    ";
        }
        // line 106
        echo "\t\t</ul>
            </li><li>
                <a name=\"heavy\"></a>
                <div class=\"img\">
                    <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/img-08.png"), "html", null, true);
        echo "\" alt=\"image\">
                </div>
                <h3><a href=\"#\">Large Jets</a></h3>
                <div class=\"holder\">
                    <ul class=\"models\">
\t\t\t";
        // line 115
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : null)) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "heavy", array(), "array", true, true))) {
            // line 116
            echo "\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : null), "heavy", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 117
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "name"), "html", null, true);
                echo "</a></li>
\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t";
        }
        // line 120
        echo "                    </ul>
                </div>
            </li>
        </ul>
    </div>
</section><!-- aircraft-type-list -->
";
    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        // line 128
        echo "<script>
    //For private-jet page
    \$(document).ready(function() {
\t\$('#city_airport_code_private_jets').select2({
\t    minimumInputLength: 2,
\t    placeholder: 'Search',
\t    ajax: {
\t\turl: \"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("public_aircraft_search_airport");
        echo "\",
\t\tdataType: 'json',
\t\ttype: \"POST\",
\t\tdata: function (term, page) {
\t\t    return {
\t\t\tterm: term, // search term
\t\t\tpage_limit: 10,
\t\t\tapikey: \"ju6z9mjyajq2djue3gbvv26t\" // please do not use so this example keeps working
\t\t    };
\t\t},
\t\tresults: function (data, page) { // parse the results into the format expected by Select2.
\t\t    // since we are using custom formatting functions we do not need to alter remote JSON data
\t\t    return {results: data};
\t\t    //return { results: [ {id:'CA', text:'California'}, {id:'CO', text: 'Colarado' }]}
\t\t}
\t    }
\t});
    });
    
</script>
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Aircraft:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 135,  277 => 117,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 155,  344 => 140,  323 => 129,  320 => 128,  316 => 126,  307 => 123,  304 => 128,  296 => 120,  286 => 117,  279 => 115,  250 => 98,  205 => 91,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 266,  475 => 262,  425 => 245,  422 => 244,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 95,  192 => 88,  150 => 68,  211 => 94,  197 => 107,  20 => 1,  34 => 7,  104 => 55,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 256,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 248,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 242,  340 => 94,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 127,  297 => 77,  291 => 120,  288 => 119,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 103,  239 => 123,  236 => 96,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 67,  126 => 46,  96 => 30,  184 => 78,  110 => 25,  83 => 41,  23 => 4,  81 => 25,  174 => 82,  84 => 26,  70 => 28,  152 => 65,  148 => 31,  74 => 30,  160 => 67,  127 => 72,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 105,  249 => 129,  234 => 58,  188 => 87,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 47,  114 => 42,  90 => 29,  77 => 16,  65 => 14,  37 => 7,  237 => 102,  228 => 97,  225 => 44,  223 => 95,  215 => 134,  207 => 109,  198 => 41,  180 => 85,  167 => 92,  165 => 73,  161 => 81,  157 => 66,  155 => 100,  153 => 36,  124 => 56,  113 => 26,  53 => 18,  145 => 82,  139 => 65,  58 => 18,  120 => 44,  97 => 59,  52 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 159,  368 => 112,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 125,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 116,  278 => 86,  268 => 106,  264 => 142,  258 => 101,  252 => 99,  247 => 78,  241 => 77,  229 => 118,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 80,  132 => 58,  128 => 36,  111 => 67,  107 => 83,  61 => 22,  273 => 96,  269 => 94,  254 => 65,  246 => 128,  243 => 88,  240 => 51,  238 => 85,  235 => 101,  230 => 82,  227 => 81,  224 => 71,  221 => 115,  219 => 92,  217 => 135,  208 => 90,  204 => 44,  179 => 68,  159 => 90,  143 => 50,  135 => 77,  131 => 60,  119 => 53,  108 => 56,  102 => 46,  71 => 16,  67 => 20,  63 => 23,  59 => 56,  47 => 14,  38 => 8,  94 => 52,  89 => 21,  85 => 34,  79 => 31,  75 => 23,  68 => 22,  56 => 16,  50 => 15,  29 => 3,  87 => 25,  72 => 21,  55 => 14,  21 => 1,  26 => 12,  98 => 48,  93 => 29,  88 => 60,  78 => 16,  46 => 14,  27 => 5,  40 => 11,  44 => 8,  35 => 7,  31 => 9,  43 => 12,  41 => 13,  28 => 4,  201 => 88,  196 => 90,  183 => 82,  171 => 93,  166 => 74,  163 => 91,  158 => 69,  156 => 60,  151 => 74,  142 => 90,  138 => 62,  136 => 40,  123 => 58,  121 => 97,  117 => 69,  115 => 43,  105 => 50,  101 => 60,  91 => 44,  69 => 20,  66 => 14,  62 => 17,  49 => 17,  24 => 1,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 89,  199 => 67,  193 => 102,  189 => 83,  187 => 79,  182 => 98,  176 => 84,  173 => 76,  168 => 75,  164 => 73,  162 => 72,  154 => 69,  149 => 64,  147 => 35,  144 => 70,  141 => 70,  133 => 61,  130 => 48,  125 => 44,  122 => 43,  116 => 52,  112 => 33,  109 => 66,  106 => 32,  103 => 28,  99 => 54,  95 => 42,  92 => 3,  86 => 42,  82 => 18,  80 => 17,  73 => 33,  64 => 20,  60 => 22,  57 => 15,  54 => 16,  51 => 15,  48 => 10,  45 => 14,  42 => 6,  39 => 5,  36 => 6,  33 => 6,  30 => 3,);
    }
}
