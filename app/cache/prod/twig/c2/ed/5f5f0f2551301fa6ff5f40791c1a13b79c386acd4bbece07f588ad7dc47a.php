<?php

/* JetChartersPublicBundle:Default:globalLogin.html.twig */
class __TwigTemplate_c2ed5f5f0f2551301fa6ff5f40791c1a13b79c386acd4bbece07f588ad7dc47a extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <input class=\"form-control\" type=\"email\" placeholder=\"Email Address\" id=\"username\" name=\"_username\" value=\"\"/>
    <input class=\"form-control\" type=\"password\" placeholder=\"Password\" id=\"password\" name=\"_password\"/>

    <div class=\"chk-holder\">
        <input class=\"chk\" type=\"checkbox\" id=\"lbl-01\"/>
        <label for=\"lbl-01\">Remember Me</label>
        <a href=\"#\" class=\"sub-link\">Forgot Password?</a>
    </div>
    <div class=\"btn-holder\">
        <input class=\"btn btn-info\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Login\" />
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Default:globalLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  89 => 25,  83 => 24,  79 => 22,  73 => 20,  65 => 17,  61 => 15,  57 => 14,  53 => 12,  49 => 10,  43 => 8,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,  536 => 268,  531 => 226,  526 => 74,  521 => 16,  515 => 4,  508 => 269,  506 => 268,  503 => 267,  477 => 265,  473 => 261,  465 => 255,  433 => 253,  429 => 247,  423 => 244,  420 => 243,  336 => 228,  333 => 227,  331 => 226,  269 => 167,  200 => 94,  190 => 87,  186 => 86,  182 => 85,  178 => 84,  164 => 75,  162 => 74,  148 => 63,  128 => 47,  124 => 45,  118 => 43,  112 => 41,  110 => 40,  87 => 20,  80 => 17,  77 => 16,  39 => 14,  35 => 7,  29 => 4,  24 => 2,  421 => 274,  400 => 256,  396 => 255,  387 => 249,  364 => 229,  345 => 213,  340 => 241,  334 => 208,  329 => 206,  323 => 203,  318 => 201,  312 => 198,  307 => 196,  301 => 193,  296 => 191,  290 => 188,  285 => 186,  277 => 181,  219 => 125,  208 => 123,  204 => 104,  196 => 117,  184 => 107,  174 => 83,  169 => 101,  165 => 100,  161 => 99,  156 => 97,  153 => 96,  147 => 94,  141 => 92,  139 => 91,  136 => 90,  132 => 89,  78 => 37,  67 => 18,  63 => 34,  31 => 4,  28 => 3,);
    }
}
