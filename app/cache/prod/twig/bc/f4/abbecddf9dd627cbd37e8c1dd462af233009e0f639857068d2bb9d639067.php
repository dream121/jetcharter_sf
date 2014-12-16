<?php

/* JetChartersAppBundle:Admin/BlogPost:index.html.twig */
class __TwigTemplate_bcf4abbecddf9dd627cbd37e8c1dd462af233009e0f639857068d2bb9d639067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Admin:base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'additionalJavascripts' => array($this, 'block_additionalJavascripts'),
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
        echo "\t\t\t
<div class=\"container-fluid\">
\t<div class=\"form-page\" id=\"pad-wrapper\">
\t\t<div class=\"row-fluid form-wrapper\">
\t\t\t<div class=\"row-fluid head\">
\t\t\t    <div class=\"span12\">
\t\t\t\t<h4 style=\"margin:-20px 0 20px 0;\">Blog Post</h4>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<div class=\"row-fluid filter-block\">
\t\t\t    <div class=\"span8\">
\t\t\t    
\t\t\t\t";
        // line 16
        echo "\t\t\t    </div>
\t\t\t    <div align=\"right\" class=\"span4 pull-right\">
\t\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_blog_post_new");
        echo "\" class=\"btn-glow primary\"> Add New</a>
\t\t\t    </div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<table style=\"margin-top:15px;\" class=\"table table-hover\">
\t\t\t\t
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t    <th>#</th>
\t\t\t\t\t    <th>Post title</th>
\t\t\t\t\t    <th>Post category</th>
\t\t\t\t\t    <th>Created on</th>
\t\t\t\t\t    <th>Updated on</th>
\t\t\t\t\t    <th width=\"16%\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 37
            echo "\t\t\t\t\t      <tr>
\t\t\t\t\t\t  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "postTitle"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "category"), "categoryName"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  <td>";
            // line 41
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdOn")) {
                echo $this->env->getExtension('core_locale')->formatDatetime($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdOn"), "date"), "m/d/Y h:iA");
            }
            echo "</td>
\t\t\t\t\t\t  <td>";
            // line 42
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedOn")) {
                echo $this->env->getExtension('core_locale')->formatDatetime($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedOn"), "date"), "m/d/Y h:iA");
            }
            echo "</td>
\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_blog_post_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn-flat icon btn-block\"><i class=\"icon-edit\"></i>edit</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" id=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_blog_post_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn-flat icon btn-block btn-danger-icon\"  data-target=\"#mod-warning\" data-toggle=\"modal\"><i class=\"icon-remove\"></i>remove</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </td>
\t\t\t\t\t      </tr>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>

<!-- Modal -->
<div class=\"modal fade\" id=\"mod-warning\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t<form action=\"\" method=\"POST\" id=\"removePostForm\">\t\t
\t    <div class=\"modal-header\">
\t      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t      <h4 class=\"modal-title\" id=\"myModalLabel\">Remove Confirmation</h4>
\t    </div>
\t    <div class=\"modal-body\">
\t\tAre you sure to proceed?
\t    </div>
\t    <div class=\"modal-footer\">
\t      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t      <button type=\"submit\" class=\"btn btn-primary\">Proceed</button>
\t    </div>
\t</form>
    </div>
  </div>
</div>
";
    }

    // line 81
    public function block_additionalJavascripts($context, array $blocks = array())
    {
        // line 82
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
\t\$(\".btn-danger-icon\").click(function() {
\t    \$('#removePostForm').attr(\"action\", this.id);\t
\t});\t    
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/BlogPost:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 82,  84 => 37,  70 => 36,  152 => 59,  148 => 58,  74 => 16,  160 => 61,  127 => 61,  118 => 58,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 105,  134 => 104,  114 => 93,  90 => 38,  77 => 33,  65 => 19,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 102,  165 => 63,  161 => 99,  157 => 96,  155 => 95,  153 => 94,  124 => 53,  113 => 50,  53 => 12,  145 => 42,  139 => 39,  58 => 23,  120 => 52,  97 => 47,  52 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 64,  140 => 55,  132 => 55,  128 => 54,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 68,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 42,  102 => 41,  71 => 15,  67 => 21,  63 => 25,  59 => 16,  47 => 9,  38 => 9,  94 => 39,  89 => 29,  85 => 33,  79 => 18,  75 => 23,  68 => 22,  56 => 21,  50 => 11,  29 => 3,  87 => 37,  72 => 23,  55 => 11,  21 => 2,  26 => 6,  98 => 40,  93 => 35,  88 => 6,  78 => 21,  46 => 9,  27 => 1,  40 => 5,  44 => 9,  35 => 5,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 114,  163 => 113,  158 => 33,  156 => 60,  151 => 109,  142 => 57,  138 => 54,  136 => 56,  123 => 59,  121 => 97,  117 => 51,  115 => 43,  105 => 49,  101 => 49,  91 => 41,  69 => 20,  66 => 15,  62 => 23,  49 => 18,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 42,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 115,  164 => 59,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 49,  141 => 53,  133 => 64,  130 => 103,  125 => 44,  122 => 48,  116 => 45,  112 => 53,  109 => 34,  106 => 54,  103 => 53,  99 => 31,  95 => 46,  92 => 45,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 13,  57 => 14,  54 => 10,  51 => 10,  48 => 10,  45 => 16,  42 => 7,  39 => 6,  36 => 5,  33 => 6,  30 => 5,);
    }
}
