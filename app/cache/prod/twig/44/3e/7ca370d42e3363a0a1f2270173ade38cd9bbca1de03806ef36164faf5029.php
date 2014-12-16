<?php

/* JetChartersAppBundle:Admin/BulkMailer:email_template.html.twig */
class __TwigTemplate_443e7ca370d42e3363a0a1f2270173ade38cd9bbca1de03806ef36164faf5029 extends Twig_Template
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
        echo "<table cellspacing=\"0\" cellpadding=\"8\" width=\"820\">
    <tbody>
        <tr>
            <td align=\"left\"><a href=\"http://www.jetcharters.com\"><img border=\"0\" src=\"<cfoutput>#cdnURL#</cfoutput>/images/logo.gif\" alt=\"\" /></a>
            </td>
            <td align=\"right\" valign=\"bottom\"><a href=\"http://www.facebook.com/pages/JetCharterscom-Worldwide-Air-Charter-Marketplace/136895476515\" target=\"_blank\"><img src=\"<cfoutput>#cdnURL#</cfoutput>/images/facebooksmall2.png\" border=\"0\" width=\"22\" /></a>&nbsp;&nbsp;<a href=\"http://twitter.com/#!/Jet_Charters\" target=\"_blank\"><img src=\"<cfoutput>#cdnURL#</cfoutput>/images/twittersmall.png\" border=\"0\" width=\"22\" /></a>
            </td>
        </tr>
        <tr>
            <td align=\"left\" width=\"790\" colspan=\"2\">
                <table cellpadding=\"10\" bgcolor=\"#cccccc\" width=\"790\">
                    <tbody>
                        <tr>
                            <td align=\"left\" width=\"790\">
                                <table cellpadding=\"10\" width=\"780\">
                                    <tbody>
                                        <tr>
                                            <td bgcolor=\"#ffffff\">
                                                <font size=\"2\" face=\"georgia\">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <img usemap=\"##Map\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "headerImage"), "html", null, true);
        echo "\" border=\"0\" />
                                                                <map name=\"Map\" id=\"Map\">
                                                                    <area shape=\"rect\" coords=\"0,0,799,310\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "topLink"), "html", null, true);
        echo "\" />
                                                                    <area shape=\"rect\" coords=\"0,311,849,519\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "bottomLink"), "html", null, true);
        echo "\" />
                                                                </map>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <font size=\"2\" face=\"georgia\">
                                                                    ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "mailerBody"), "html", null, true);
        echo "
                                                                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "topLink"), "html", null, true);
        echo "\" target=\"_blank\">Read More</a>
                                                                </font>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src=\"http://www.jetcharters.com/bmt.cfm?mid=#getMailer.ID#&uid=#session.unsubemail#\" />
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align=\"center\" colspan=\"2\">
                <font size=\"2\" face=\"Arial, Helvetica, sans-serif\"><a href=\"http://www.jetcharters.com/\" style=\"text-decoration: none;\">Home</a> | <a href=\"http://www.jetcharters.com/private-jets/\" style=\"text-decoration: none;\">Aircraft for Charter</a> | <a href=\"http://www.jetcharters.com/membership/\" style=\"text-decoration: none;\">Jet Membership</a> | <a href=\"http://www.jetcharters.com/directory/\" style=\"text-decoration: none;\">Airport Directory</a> | <a href=\"http://www.jetcharters.com/sales/\" style=\"text-decoration: none;\">Aircraft Sales</a>
                </font>
                <br />
                <font size=\"1\" face=\"Arial, Helvetica, sans-serif\">Copyright 2012 <a href=\"http://www.jetcharters.com\">JetCharters.com</a> All Rights Reserved</font>
            </td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Admin/BulkMailer:email_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  23 => 1,  81 => 34,  174 => 82,  84 => 37,  70 => 36,  152 => 59,  148 => 58,  74 => 30,  160 => 61,  127 => 61,  118 => 58,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 58,  253 => 57,  249 => 55,  234 => 49,  188 => 36,  185 => 35,  172 => 117,  146 => 108,  137 => 105,  134 => 104,  114 => 93,  90 => 35,  77 => 33,  65 => 19,  37 => 5,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 122,  180 => 23,  167 => 82,  165 => 63,  161 => 99,  157 => 96,  155 => 95,  153 => 94,  124 => 53,  113 => 46,  53 => 17,  145 => 42,  139 => 39,  58 => 14,  120 => 52,  97 => 47,  52 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 114,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 64,  140 => 55,  132 => 55,  128 => 54,  111 => 37,  107 => 43,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 137,  219 => 136,  217 => 135,  208 => 68,  204 => 72,  179 => 68,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 42,  102 => 41,  71 => 30,  67 => 26,  63 => 25,  59 => 6,  47 => 12,  38 => 9,  94 => 36,  89 => 29,  85 => 33,  79 => 18,  75 => 23,  68 => 22,  56 => 21,  50 => 19,  29 => 3,  87 => 37,  72 => 23,  55 => 13,  21 => 2,  26 => 6,  98 => 40,  93 => 35,  88 => 6,  78 => 21,  46 => 14,  27 => 1,  40 => 14,  44 => 15,  35 => 11,  31 => 4,  43 => 23,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 114,  163 => 113,  158 => 33,  156 => 60,  151 => 109,  142 => 57,  138 => 54,  136 => 56,  123 => 59,  121 => 97,  117 => 51,  115 => 43,  105 => 49,  101 => 40,  91 => 41,  69 => 11,  66 => 34,  62 => 33,  49 => 10,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 42,  189 => 116,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 115,  164 => 81,  162 => 59,  154 => 110,  149 => 51,  147 => 73,  144 => 49,  141 => 53,  133 => 52,  130 => 103,  125 => 44,  122 => 48,  116 => 45,  112 => 53,  109 => 34,  106 => 50,  103 => 53,  99 => 46,  95 => 46,  92 => 45,  86 => 34,  82 => 22,  80 => 19,  73 => 19,  64 => 21,  60 => 20,  57 => 19,  54 => 10,  51 => 10,  48 => 25,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 10,  30 => 3,);
    }
}
