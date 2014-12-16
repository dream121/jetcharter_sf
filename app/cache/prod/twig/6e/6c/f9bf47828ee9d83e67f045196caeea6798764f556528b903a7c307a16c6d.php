<?php

/* JetChartersPublicBundle:Default:operatorSignUpStep2.html.twig */
class __TwigTemplate_6e6cf9bf47828ee9d83e67f045196caeea6798764f556528b903a7c307a16c6d extends Twig_Template
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
        echo "
<div class=\"sign-Up-area\">
\t<div class=\"container\">
\t\t<header class=\"headline\">
\t\t\t<h2>Register</h2>
\t\t</header>
\t\t";
        // line 10
        if (((array_key_exists("formErrors", $context) && ((isset($context["formErrors"]) ? $context["formErrors"] : null) != "")) || (array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)))) {
            // line 11
            echo "\t\t\t<div>
\t\t\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formErrors"]) ? $context["formErrors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["formError"]) {
                // line 13
                echo "\t\t\t\t\t<p class=\"bg-danger\">";
                echo twig_escape_filter($this->env, (isset($context["formError"]) ? $context["formError"] : null), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formError'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t\t
\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 17
                echo "\t\t\t\t\t<p class=\"bg-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t<div class=\"main sign-up-back\">\t\t\t
\t\t\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t\t\t<h3>Number of Aircraft to Advertise</h3>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aircraftFleet"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "aircraftFleet"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">\t
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "couponCode"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "couponCode"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "billCycle"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "billCycle"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalCost"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "totalCost"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<h3>Credit Card Information</h3>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cardType"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cardType"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cardNumber"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cardNumber"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "expireDate"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "expireDate"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ccvNumber"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ccvNumber"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "renewalTerm"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "renewalTerm"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<h3>Billing Information</h3>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "firstName"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "firstName"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "lastName"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "lastName"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "address1"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "address1"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "address2"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "address2"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "city"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "city"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "state"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "state"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "country"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "country"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "zip"), 'label');
        echo "*</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "operator"), "zip"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t    <div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\"></div>
\t\t\t    <div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">
\t\t\t\t<strong>Terms and Conditions</strong>
\t\t\t\t<br>
\t\t\t\t    <div style=\"height:150px; width:444px; overflow-y:scroll; border: 1px solid silver\">

\t\t\t\t<p><font size=\"2\" face=\"Times New Roman\"><b>PAYMENT TERMS</b></font> <br>
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<p><font size=\"2\" face=\"Times New Roman\">Client agrees to make monthly 
\t\t\t\tpayments via major credit card.  
\t\t\t\tA five (5) percent late charge will be assessed on balances thirty (30) 
\t\t\t\tdays past due.  Initial down payment of one month’s payment is 
\t\t\t\tdue upon account activation. </font></p>
\t\t\t\t<ol type=\"1\">
\t\t\t\t<li><font size=\"1\" face=\"Times New Roman\"><u>Definitions:</u></font></li>
\t\t\t\t</ol>
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">1.1. “Advertising 
\t\t\t\tSpace” means the screen and display space designated by JetCharters.com 
\t\t\t\tfor Client’s Advertisement on the JetCharters.com website.</font></p>
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">1.2. “Advertisement” 
\t\t\t\tmeans the text, images and/or graphical advertisement supplied by Client 
\t\t\t\tto JetCharters.com for display and publication on the JetCharters.com 
\t\t\t\twebsite.</font></p>
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">1.3. “Marks” 
\t\t\t\tmeans any trademark, trade name, service mark, logo, slogan, and copyright 
\t\t\t\tassociated with a party’s products or services.</font></p>
\t\t\t\t
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">1.5. “Term” 
\t\t\t\tmeans the initial one (1) year or (6) month Term and any subsequent 
\t\t\t\tRenewal Term(s).</font></p>
\t\t\t\t<ol type=\"1\" start=\"2\">
\t\t\t\t<li><font size=\"1\" face=\"Times New Roman\"><b><u>Obligations:</u></b></font></li>
\t\t\t\t</ol>
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">2.1. <u>Advertisement.</u>  
\t\t\t\tJetCharters.com shall publish the Advertisement in the Advertising Space 
\t\t\t\ton a continuous basis during the Term of this Agreement.  In doing 
\t\t\t\tso, JetCharters.com shall faithfully reproduce the Advertisement as 
\t\t\t\tprovided by Client and shall not alter or change the Advertisement in 
\t\t\t\tany manner, <b>except</b> <b>that JetCharters.com may, at its sole discretion, 
\t\t\t\tchange the size of the Advertisement, including the text and graphics, 
\t\t\t\tas is necessary for the Advertisement to fit within the Advertising 
\t\t\t\tSpace</b>.  JetCharters.com shall at all times maintain a hypertext 
\t\t\t\tlink from the Advertisement to the URL (website address) specified by 
\t\t\t\tClient.  <b>Client is responsible for providing to 
\t\t\t\tJetCharters.com all text, images and/or graphics on or before the Effective 
\t\t\t\tDate of this Agreement.</b></font></p>
\t\t\t\t
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">2.2. <u>Linking 
\t\t\t\tRequirements</u>.  During the Term, Client's advertisements to be displayed 
\t\t\t\ton Publisher's website shall link directly to only those websites as 
\t\t\t\tClient and Publisher shall mutually agree in advance.  The parties further 
\t\t\t\tagree that such advertisements shall not link to any third party websites 
\t\t\t\tincluding, without limitation, websites operated by any Competitive Entities. </font></p>
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">2.3. <u>Right 
\t\t\t\tto Refuse Advertising</u>.  All content of the Advertisement is 
\t\t\t\tsubject to JetCharters.com’s approval.  JetCharters.com reserves 
\t\t\t\tthe right to reject or cancel any Advertisement.  JetCharters.com 
\t\t\t\tdoes not accept advertising from companies that produce or provide pornographic 
\t\t\t\tproducts or services (which JetCharters.com shall have complete discretion 
\t\t\t\tto define).  </font></p>
\t\t\t\t<ol type=\"1\" start=\"3\">
\t\t\t\t<li><font size=\"1\" face=\"Times New Roman\"><b><u>Term and Termination:</u></b></font></li>
\t\t\t\t</ol>
\t\t\t\t
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">3.1. 
\t\t\t\t<u>Term</u>.  The Term of this Agreement shall be for a period 
\t\t\t\tof one (1) year or (6) month ( refraction  selection labeled “renewal 
\t\t\t\tterm” above ) under beginning on the Effective Date of 07/25/2014. 
\t\t\t\tAt the end of the selected term, the Agreement shall automatically renew 
\t\t\t\tfor consecutive term (the “Renewal Term(s)”) thereafter unless either 
\t\t\t\tparty gives written notice to the other party of its intention not to 
\t\t\t\trenew this Agreement no later than thirty (30) days prior to the end 
\t\t\t\tof the current Term.</font></p>
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\">3.2. <u>Termination</u>.  
\t\t\t\tJetCharters.com may terminate this Agreement immediately upon written 
\t\t\t\tnotice to Client if Client breaches a material term of this Agreement 
\t\t\t\tand fails to correct such breach within five (5) days following receipt 
\t\t\t\tof written notice to Client specifying each breach; or by mutual written 
\t\t\t\tagreement of both parties.</font></p>
\t\t\t\t<p>      <font size=\"1\" face=\"Times New Roman\"><b>4. 
\t\t\t\t<u>Other Legal Terms and Conditions:</u> </b>
\t\t\t\tCertain other legal terms and conditions of this Agreement are described 
\t\t\t\tin Exhibit A</font><font size=\"2\" face=\"Times New Roman\">. <br>
\t\t\t\t
\t\t\t\t</font><font size=\"3\" face=\"Times New Roman\"> </font></p>
\t\t\t\t<p align=\"center\"><font size=\"2\" face=\"Times New Roman\"><b>EXHIBIT A </b></font></p>
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">1.  <u>Warranty; Limitation 
\t\t\t\tof Liability; Disclaimer; Indemnification:</u></font></p>
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">1.1. <u>Warranty</u>.</font></p>
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">1.1.1. <u>Client Warranties</u>.  
\t\t\t\tClient represents and warrants that the use, reproduction, distribution, 
\t\t\t\tor transmission of the Advertisement will not violate any criminal laws 
\t\t\t\tor any rights of any third parties, including, but not limited to, such 
\t\t\t\tviolations as infringement or misappropriation of any copyright, patent, 
\t\t\t\ttrademark, trade secret, music, image, or other proprietary or property 
\t\t\t\tright, false advertising, unfair competition, defamation, invasion of 
\t\t\t\tprivacy or rights of any celebrity, violation of any anti-discrimination 
\t\t\t\tlaw or regulation, or any other right of any person or entity.</font></p>
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">1.1.2. <u>JetCharters.com Warranties</u>.  
\t\t\t\tJetCharters.com warrants that the JetCharters.com Advertising Services 
\t\t\t\twill be performed for Client in a diligent and workman-like manner in 
\t\t\t\taccordance with industry standards, laws, and governmental regulations 
\t\t\t\tapplicable to the performance of such services.</font></p>
\t\t\t\t
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">1.2. <u>Limitation of Liability</u>.   
\t\t\t\tIN NO EVENT SHALL <a target=\"_blank\" href=\"http://JETCHARTERS.COM\">JETCHARTERS.COM</a> BE LIABLE TO CLIENT FOR ANY LOSS OF 
\t\t\t\tPROFITS, LOSS OF BUSINESS, LOSS OF USE OF DATA, INTERRUPTION OF BUSINESS, 
\t\t\t\tOR FOR INDIRECT, SPECIAL, INCIDENTAL, EXEMPLARY, MULTIPLE, PUNITIVE, 
\t\t\t\tOR CONSEQUENTIAL DAMAGES OF ANY KIND, WHETHER BASED ON CONTRACT, TORT, 
\t\t\t\tWARRANTY, GUARANTEE, OR ANY OTHER LEGAL OR EQUITABLE GROUNDS.  
\t\t\t\tNEITHER <a target=\"_blank\" href=\"http://JETCHARTERS.COM\">JETCHARTERS.COM</a> NOR CLIENT SHALL MAKE REPRESENTATIONS OR WARRANTIES 
\t\t\t\tTO ANY END USER OR THIRD PARTY ON BEHALF OF THE OTHER PARTY AND IN NO 
\t\t\t\tEVENT WILL EITHER PARTY BE LIABLE TO THE OTHER PARTY FOR ANY REPRESENTATION 
\t\t\t\tOR WARRANTY MADE TO ANY END USER OR THIRD PARTY BY THE OTHER PARTY.  
\t\t\t\tTHESE LIMITATIONS SHALL SURVIVE AND APPLY NOTWITHSTANDING THE VALIDITY 
\t\t\t\tOF THE LIMITED REMEDIES PROVIDED FOR IN THE AGREEMENT.  <a target=\"_blank\" href=\"http://JETCHARTERS.COM\">JETCHARTERS.COM</a> 
\t\t\t\tSHALL IN NO EVENT BE LIABLE TO THE CLIENT UNDER THIS AGREEMENT FOR MORE 
\t\t\t\tTHAN THE AMOUNT PAID BY THE CLIENT TO <a target=\"_blank\" href=\"http://JETCHARTERS.COM\">JETCHARTERS.COM</a> DURING THE YEAR 
\t\t\t\tIN WHICH THE LIABILITY ACCRUES.</font></p>
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">1.3. <u>Disclaimer</u>.  
\t\t\t\tEXCEPT AS EXPRESSLY SET FORTH IN THIS AGREEMENT, <a target=\"_blank\" href=\"http://JETCHARTERS.COM\">JETCHARTERS.COM</a> DOES 
\t\t\t\tNOT MAKE, AND HEREBY SPECIFICALLY DISCLAIMS, ANY REPRESENTATIONS OR 
\t\t\t\tWARRANTIES, EXPRESS OR IMPLIED, REGARDING <a target=\"_blank\" href=\"http://JETCHARTERS.COM\">JETCHARTERS.COM</a>’S SERVICES 
\t\t\t\tOR <a target=\"_blank\" href=\"http://JETCHARTERS.COM\">JETCHARTERS.COM</a>’S ADVERTISING SERVICES, INCLUDING ANY IMPLIED WARRANTY 
\t\t\t\tOF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE AND IMPLIED WARRANTIES 
\t\t\t\tARISING FROM COURSE OF DEALING OR COURSE OF PERFORMANCE.</font></p>
\t\t\t\t
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">1.4. <u>Indemnification</u>.  
\t\t\t\tClient agrees to indemnify, and hold harmless JetCharters.com and its 
\t\t\t\tofficers, directors, employees, agents, successors, and assigns from 
\t\t\t\tand against any and all losses, liabilities, damages, penalties and 
\t\t\t\tclaims and all related costs and expenses (including reasonable attorneys’ 
\t\t\t\tfees) related to claims made by third parties against JetCharters.com 
\t\t\t\tthat the Client’s marks or other intellectual property infringe the 
\t\t\t\tpatents, copyrights, trademarks, or service marks, or other intellectual 
\t\t\t\tproperty rights as such third parties.  Client agrees to indemnify 
\t\t\t\tand hold harmless JetCharters.com and its officers, directors, employees, 
\t\t\t\tagents, successors, and assigns from and against all third party claims, 
\t\t\t\tcauses of action, liabilities, and all other reasonable costs and expenses 
\t\t\t\tresulting or arising from Client’s breach of this agreement.  
\t\t\t\tJetCharters.com agrees to promptly notify Client in writing of any indemnifiable 
\t\t\t\tclaim.  JetCharters.com shall cooperate in all reasonable respects 
\t\t\t\twith the indemnifying party and its attorneys in the investigation, 
\t\t\t\ttrial, defense, and settlement of such claim and any appeal arising 
\t\t\t\ttherefrom.  JetCharters.com may participate in such investigation, 
\t\t\t\ttrial, defense, and settlement of such claim and any appeal arising 
\t\t\t\ttherefrom through its attorneys or otherwise, at its own cost and expense.  
\t\t\t\tNo settlement of a claim that involves a remedy other than the payment 
\t\t\t\tof money by the Client shall be entered into without the consent of 
\t\t\t\tJetCharters.com, which consent will not be unreasonably withheld. <br>
\t\t\t\t<br>
\t\t\t\t2                <u>
\t\t\t\tMiscellaneous:</u></font></p>
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">2.1. <u>Independent Contractors</u>.  
\t\t\t\tThe parties to this Agreement are independent parties and nothing herein 
\t\t\t\tshall be construed as creating an employment relationship between the 
\t\t\t\tparties.  Neither party is an agent, representative, or partner 
\t\t\t\tof the other party, and neither party shall have any right, power or 
\t\t\t\tauthority to enter into any agreement for or on behalf of, or incur 
\t\t\t\tany obligation or liability, or to otherwise bind, the other party.  
\t\t\t\tThe Agreement shall not be interpreted or construed to create an association, 
\t\t\t\tagency, joint venture, or partnership between the parties or to impose 
\t\t\t\tany liability attributable to such a relationship upon either party.</font></p>
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">2.2. <u>Governing Law</u>.   
\t\t\t\tThe Agreement shall be governed by the laws of the State of Tennessee 
\t\t\t\twithout giving effect to applicable conflict of laws provisions.  
\t\t\t\tAll actions with respect to this Agreement shall be brought in federal 
\t\t\t\tor state court in Knox County, Tennessee, and the parties expressly 
\t\t\t\tconsent to the personal jurisdiction of such courts.  In the event 
\t\t\t\tany litigation or other proceeding is brought by either party in connection 
\t\t\t\twith this Agreement, the prevailing party in such litigation or other 
\t\t\t\tproceeding shall be entitled to recover from the other party all costs, 
\t\t\t\tattorneys’ fees, and other expenses incurred by such prevailing party 
\t\t\t\tin such litigation.</font></p>
\t\t\t\t
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">2.3. <u>Entire Agreement</u>.  
\t\t\t\tThis Agreement constitutes the entire agreement between the parties 
\t\t\t\twith respect to the subject matter herein and supersedes all prior negotiations, 
\t\t\t\tcommunications, writings, and understandings.</font></p>
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">2.4. <u>Notice</u>.  Notices 
\t\t\t\tgiven under this Agreement shall be given to the following:</font></p>
\t\t\t\t<ul><ul><p><font size=\"1\" face=\"Times New Roman\"><u>JetCharters.com</u>: <br>
\t\t\t\t\t\t\t    5201 Kingston Pike, Suite 6325 <br>
\t\t\t\tKnoxville, Tennessee 37919</font></p></ul></ul>
\t\t\t\t
\t\t\t\t<p><font size=\"1\" face=\"Times New Roman\">2.5 Headings.  The headings 
\t\t\t\tused in this Agreement and Exhibit are for convenience only and shall 
\t\t\t\tnot be used to interpret or construe its provisions.</font>
\t\t\t\t</p></div>
                            </div>
                            <div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\"></div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero\">";
        // line 307
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "termConditons"), 'row');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t<div class=\"row row-padding\">
\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12 padding-zero\">";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit"), 'label');
        echo "</div>
\t\t\t\t<div class=\"col-md-5 col-sm-8 col-xs-12 padding-zero submit-but\">";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit"), 'widget');
        echo "</div>
\t\t\t\t<div class=\"col-md-4 col-sm-0 col-xs-12 padding-zero\"></div>
\t\t\t</div>
\t\t\t";
        // line 315
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>

";
    }

    // line 322
    public function block_javascripts($context, array $blocks = array())
    {
        // line 323
        echo "<script>
    var planePrice = 49.95;
    \$('#jetcharters_appbundle_operatorbillinginformation_billCycle').change(function(){
\tif(\$(this).val()=='quarterly') {
\t    var discount = 5
\t    var amount = (5/100)*parseFloat(planePrice)
\t    \$(totalCost).val(\"\$\"+amount)+\" per quarter\";
\t}else if(\$(this).val()=='monthly') {
\t    var discount = 5
\t    var amount = (5/100)*parseFloat(planePrice)
\t    \$(totalCost).val(\"\$\"+amount)+\" per year\";
\t}else {
\t    var totalCost = '#jetcharters_appbundle_operatorbillinginformation_totalCost';
\t    \$(totalCost).val(\"\$\"+planePrice)+\" per month\";
\t}
    })
</script>
";
    }

    public function getTemplateName()
    {
        return "JetChartersPublicBundle:Default:operatorSignUpStep2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 323,  498 => 322,  482 => 312,  478 => 311,  232 => 92,  210 => 82,  275 => 112,  212 => 82,  190 => 72,  421 => 274,  400 => 256,  396 => 255,  329 => 206,  290 => 188,  441 => 201,  439 => 200,  418 => 193,  410 => 187,  408 => 186,  401 => 181,  389 => 174,  386 => 173,  383 => 172,  378 => 170,  373 => 169,  370 => 168,  364 => 229,  356 => 163,  352 => 162,  348 => 160,  336 => 159,  332 => 158,  327 => 155,  303 => 138,  265 => 107,  255 => 112,  244 => 109,  191 => 85,  594 => 452,  591 => 451,  580 => 443,  570 => 436,  561 => 430,  553 => 425,  544 => 419,  525 => 403,  520 => 401,  507 => 391,  497 => 384,  488 => 315,  471 => 307,  452 => 351,  447 => 349,  434 => 339,  424 => 332,  334 => 208,  325 => 263,  306 => 247,  233 => 195,  313 => 146,  277 => 181,  272 => 116,  270 => 115,  262 => 110,  256 => 106,  222 => 93,  385 => 164,  361 => 287,  344 => 140,  323 => 203,  320 => 128,  316 => 126,  307 => 196,  304 => 128,  296 => 191,  286 => 117,  279 => 113,  250 => 98,  205 => 93,  200 => 89,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 217,  475 => 262,  425 => 195,  422 => 194,  338 => 229,  335 => 228,  271 => 168,  206 => 105,  202 => 91,  192 => 73,  150 => 63,  211 => 94,  197 => 76,  20 => 1,  34 => 5,  104 => 43,  129 => 61,  100 => 49,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 221,  473 => 213,  470 => 136,  467 => 256,  465 => 134,  462 => 208,  449 => 204,  443 => 124,  433 => 198,  431 => 248,  419 => 115,  415 => 326,  404 => 111,  369 => 102,  351 => 280,  347 => 97,  345 => 213,  342 => 274,  340 => 211,  333 => 133,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 201,  315 => 85,  301 => 193,  297 => 135,  291 => 120,  288 => 235,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 110,  245 => 62,  242 => 97,  239 => 123,  236 => 93,  231 => 92,  218 => 51,  216 => 101,  213 => 49,  195 => 89,  186 => 71,  181 => 35,  178 => 78,  170 => 75,  194 => 84,  175 => 66,  126 => 54,  96 => 34,  184 => 107,  110 => 25,  83 => 27,  23 => 3,  81 => 22,  174 => 103,  84 => 29,  70 => 20,  152 => 73,  148 => 31,  74 => 19,  160 => 66,  127 => 72,  118 => 35,  76 => 35,  300 => 97,  295 => 93,  261 => 217,  257 => 103,  253 => 102,  249 => 129,  234 => 106,  188 => 72,  185 => 117,  172 => 117,  146 => 52,  137 => 66,  134 => 47,  114 => 61,  90 => 26,  77 => 21,  65 => 17,  37 => 5,  237 => 102,  228 => 193,  225 => 88,  223 => 87,  215 => 134,  207 => 109,  198 => 89,  180 => 67,  167 => 92,  165 => 61,  161 => 99,  157 => 57,  155 => 100,  153 => 56,  124 => 41,  113 => 36,  53 => 21,  145 => 82,  139 => 91,  58 => 15,  120 => 40,  97 => 30,  52 => 14,  480 => 373,  474 => 161,  469 => 158,  461 => 155,  457 => 206,  453 => 205,  444 => 202,  440 => 148,  437 => 147,  435 => 254,  430 => 144,  427 => 196,  423 => 116,  413 => 134,  409 => 113,  407 => 321,  402 => 130,  398 => 315,  393 => 126,  387 => 249,  384 => 121,  381 => 120,  379 => 299,  374 => 297,  368 => 167,  365 => 156,  362 => 110,  360 => 109,  355 => 106,  341 => 139,  337 => 103,  322 => 101,  314 => 99,  312 => 198,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 116,  283 => 116,  278 => 228,  268 => 108,  264 => 107,  258 => 103,  252 => 211,  247 => 98,  241 => 77,  229 => 118,  220 => 70,  214 => 83,  177 => 77,  169 => 62,  140 => 59,  132 => 46,  128 => 46,  111 => 67,  107 => 83,  61 => 16,  273 => 119,  269 => 108,  254 => 102,  246 => 98,  243 => 97,  240 => 51,  238 => 85,  235 => 93,  230 => 82,  227 => 81,  224 => 71,  221 => 87,  219 => 86,  217 => 135,  208 => 81,  204 => 122,  179 => 67,  159 => 90,  143 => 51,  135 => 47,  131 => 46,  119 => 53,  108 => 35,  102 => 31,  71 => 24,  67 => 35,  63 => 34,  59 => 16,  47 => 12,  38 => 6,  94 => 28,  89 => 45,  85 => 25,  79 => 23,  75 => 23,  68 => 22,  56 => 15,  50 => 15,  29 => 3,  87 => 25,  72 => 21,  55 => 14,  21 => 2,  26 => 3,  98 => 30,  93 => 27,  88 => 60,  78 => 21,  46 => 9,  27 => 5,  40 => 10,  44 => 12,  35 => 6,  31 => 4,  43 => 8,  41 => 11,  28 => 3,  201 => 77,  196 => 117,  183 => 82,  171 => 84,  166 => 68,  163 => 91,  158 => 57,  156 => 97,  151 => 74,  142 => 51,  138 => 62,  136 => 47,  123 => 44,  121 => 97,  117 => 49,  115 => 41,  105 => 37,  101 => 31,  91 => 26,  69 => 17,  66 => 14,  62 => 12,  49 => 13,  24 => 2,  32 => 4,  25 => 4,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 77,  193 => 102,  189 => 83,  187 => 88,  182 => 98,  176 => 66,  173 => 76,  168 => 62,  164 => 61,  162 => 72,  154 => 56,  149 => 64,  147 => 52,  144 => 70,  141 => 92,  133 => 61,  130 => 56,  125 => 44,  122 => 53,  116 => 41,  112 => 36,  109 => 35,  106 => 54,  103 => 28,  99 => 36,  95 => 43,  92 => 30,  86 => 25,  82 => 32,  80 => 22,  73 => 19,  64 => 17,  60 => 16,  57 => 15,  54 => 9,  51 => 13,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 5,  33 => 7,  30 => 3,);
    }
}
