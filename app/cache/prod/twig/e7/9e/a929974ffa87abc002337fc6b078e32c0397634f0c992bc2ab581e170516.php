<?php

/* JetChartersPublicBundle:Blog:recentBlog.html.twig */
class __TwigTemplate_e79ea929974ffa87abc002337fc6b078e32c0397634f0c992bc2ab581e170516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((array_key_exists("footer", $context) && ((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")) == 1))) {
            // line 2
            echo "
<ul class=\"nav\">
    ";
            // line 4
            if ((array_key_exists("blogPostEntity", $context) && (twig_length_filter($this->env, (isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity"))) > 0))) {
                // line 5
                echo "\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")));
                foreach ($context['_seq'] as $context["_key"] => $context["blogPostEntity"]) {
                    // line 6
                    echo "\t    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_blog_single", array("categorySlug" => $this->getAttribute($this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "category"), "categorySlug"), "postSlug" => $this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "postSlug"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "postTitle"), "html", null, true);
                    echo "</a></li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogPostEntity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "\t<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("public_blog");
                echo "\"><em>View More Posts »</em></a></li>
    ";
            }
            // line 10
            echo "</ul>
";
        } else {
            // line 12
            echo "<div class=\"tab-pane active\" id=\"tab-01\">
    <ul class=\"popular-posts\">
\t";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")));
            foreach ($context['_seq'] as $context["_key"] => $context["blogPostEntity"]) {
                // line 15
                echo "\t    <li>
\t\t<div class=\"img\">
\t\t    ";
                // line 17
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "image")) > 0)) {
                    // line 18
                    echo "\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_get_image_thumb", array("imageId" => $this->getAttribute($this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "image"), "id"), "width" => 55, "height" => 55)), "html", null, true);
                    echo "\" alt=\"image\" />
\t\t    ";
                } else {
                    // line 20
                    echo "\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetcharterspublic/images/image-not-found.jpg"), "html", null, true);
                    echo "\" alt=\"\" width=\"55\" height=\"55\" >
\t\t    ";
                }
                // line 22
                echo "\t\t</div><!-- / img -->
\t\t<div class=\"block\">
\t\t    <h3><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_blog_single", array("categorySlug" => $this->getAttribute($this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "category"), "categorySlug"), "postSlug" => $this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "postSlug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "postTitle"), "html", null, true);
                echo "</a></h3>
\t\t    <span class=\"date\">";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blogPostEntity"]) ? $context["blogPostEntity"] : $this->getContext($context, "blogPostEntity")), "createdOn"), "M d, Y"), "html", null, true);
                echo "</span>
\t\t</div><!-- / block -->
\t    </li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogPostEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </ul><!-- / popular-posts -->
</div><!-- / tab-01 -->
";
        }
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Blog:recentBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  89 => 25,  83 => 24,  79 => 22,  73 => 20,  65 => 17,  61 => 15,  57 => 14,  53 => 12,  49 => 10,  43 => 8,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,  536 => 268,  531 => 226,  526 => 74,  521 => 16,  515 => 4,  508 => 269,  506 => 268,  503 => 267,  477 => 265,  473 => 261,  465 => 255,  433 => 253,  429 => 247,  423 => 244,  420 => 243,  336 => 228,  333 => 227,  331 => 226,  269 => 167,  200 => 94,  190 => 87,  186 => 86,  182 => 85,  178 => 84,  164 => 75,  162 => 74,  148 => 63,  128 => 47,  124 => 45,  118 => 43,  112 => 41,  110 => 40,  87 => 20,  80 => 17,  77 => 16,  39 => 14,  35 => 7,  29 => 4,  24 => 1,  421 => 274,  400 => 256,  396 => 255,  387 => 249,  364 => 229,  345 => 213,  340 => 241,  334 => 208,  329 => 206,  323 => 203,  318 => 201,  312 => 198,  307 => 196,  301 => 193,  296 => 191,  290 => 188,  285 => 186,  277 => 181,  219 => 125,  208 => 123,  204 => 104,  196 => 117,  184 => 107,  174 => 83,  169 => 101,  165 => 100,  161 => 99,  156 => 97,  153 => 96,  147 => 94,  141 => 92,  139 => 91,  136 => 90,  132 => 89,  78 => 37,  67 => 18,  63 => 34,  31 => 4,  28 => 3,);
    }
}
