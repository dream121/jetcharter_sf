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
        $context['_seq'] = twig_ensure_traversable((isset($context["aircraftTypes"]) ? $context["aircraftTypes"] : $this->getContext($context, "aircraftTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["aircraftType"]) {
            // line 15
            echo "\t\t\t    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraftType"]) ? $context["aircraftType"] : $this->getContext($context, "aircraftType")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aircraftType"]) ? $context["aircraftType"] : $this->getContext($context, "aircraftType")), "name"), "html", null, true);
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
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : $this->getContext($context, "models"))) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "airliner", array(), "array", true, true))) {
            // line 49
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")), "airliner", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 50
                echo "\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name"), "html", null, true);
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
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : $this->getContext($context, "models"))) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "turbo-prop", array(), "array", true, true))) {
            // line 61
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")), "turbo-prop", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 62
                echo "\t\t\t    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name"), "html", null, true);
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
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : $this->getContext($context, "models"))) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "light", array(), "array", true, true))) {
            // line 75
            echo "\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")), "light", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 76
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name"), "html", null, true);
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
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : $this->getContext($context, "models"))) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "mid-size", array(), "array", true, true))) {
            // line 89
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")), "mid-size", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 90
                echo "\t\t\t    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name"), "html", null, true);
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
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : $this->getContext($context, "models"))) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "super-mid", array(), "array", true, true))) {
            // line 102
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")), "super-mid", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 103
                echo "\t\t\t    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name"), "html", null, true);
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
        if (((twig_length_filter($this->env, (isset($context["models"]) ? $context["models"] : $this->getContext($context, "models"))) > 0) && $this->getAttribute((isset($context["models"]) ? $context["models"] : null), "heavy", array(), "array", true, true))) {
            // line 116
            echo "\t\t\t    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")), "heavy", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
                // line 117
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_aircraft_detail", array("slug" => $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name"), "html", null, true);
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
        return array (  313 => 135,  304 => 128,  301 => 127,  291 => 120,  288 => 119,  277 => 117,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  253 => 105,  242 => 103,  237 => 102,  235 => 101,  228 => 97,  222 => 93,  219 => 92,  208 => 90,  203 => 89,  201 => 88,  194 => 84,  187 => 79,  184 => 78,  173 => 76,  168 => 75,  166 => 74,  158 => 69,  152 => 65,  149 => 64,  138 => 62,  133 => 61,  131 => 60,  124 => 56,  119 => 53,  116 => 52,  105 => 50,  100 => 49,  98 => 48,  91 => 44,  62 => 17,  51 => 15,  47 => 14,  36 => 6,  32 => 4,  29 => 3,);
    }
}
