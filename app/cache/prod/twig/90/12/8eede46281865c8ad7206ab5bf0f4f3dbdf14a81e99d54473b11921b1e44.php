<?php

/* JetChartersAppBundle:Operator/Inbox:default.html.twig */
class __TwigTemplate_90128eede46281865c8ad7206ab5bf0f4f3dbdf14a81e99d54473b11921b1e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JetChartersAppBundle:Operator:base.html.twig");

        $this->blocks = array(
            'page_styles' => array($this, 'block_page_styles'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JetChartersAppBundle:Operator:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_styles($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jetchartersapp/cp_theme/css/compiled/user-list.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo " <div class=\"container-fluid\">
        <div class=\"container-fluid\" style=\"padding-top:15px;\">
            <div class=\"table-wrapper\">
                <div class=\"row-fluid head\">
                    <div class=\"span12\">
                        <h4> + Inbox</h4>
                    </div>
                </div>

                <div class=\"row-fluid filter-block\">
                    <div class=\"pull-right\">
                        <div class=\"btn-group pull-right\">
                            <button class=\"glow left large\" onclick=\"window.location='?show=all'\">All</button>
                            <button class=\"glow middle large\" onclick=\"window.location='?show=a'\">New</button>
                            <button class=\"glow middle large\" onclick=\"window.location='?show=b'\">Contacted</button>
                            <button class=\"glow middle large\" onclick=\"window.location='?show=s'\">Booked</button>
                            <button class=\"glow right large\" onclick=\"window.location='?show=c'\">Closed</button>
                        </div>
                    </div>
                </div>

                <table class=\"table table-hover\" style=\"margin-top:15px;\">
                    <thead>
                        <tr>
                            <th class=\"span2\">
                                Date
                            </th>
                            <th class=\"span2\">
                                <span class=\"line\"></span>
                                Type
                            </th>
                            <th class=\"span3\">
                                <span class=\"line\"></span>
                                Contact
                            </th>
                            <th class=\"span3\">
                                <span class=\"line\"></span>
                                Email
                            </th>
                            <th class=\"span3\">
                                <span class=\"line\"></span>
                                Phone
                            </th>
                            <th class=\"span2\">
                                <span class=\"line\"></span>
                                Status
                            </th>
                            <th class=\"span3\">
                                <span class=\"line\"></span>
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            02/11/2014
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            33678632220
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform1\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform1.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1776716107\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/e175d3f28378e6d179f92bfd977dbbd8/2014/2/6876948/cid_1776716107_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            02/08/2014
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            James Maitland
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Jmait2009@aol.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9547702651
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform2\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform2.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"14691\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit2\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit2\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                James Maitland
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                Jmait2009@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9547702651
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KFXE
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                MYAT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                05/09/2014 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                05/15/2014 14:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                Hi me and my family are looking to fly to the abacos and return in may8-15 looking for a prop plane any suggestions on what you would recommend for comfort I would appreciate also how pricing works thanks.
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            02/05/2014
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Ashley Albrecht
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            ashley.albrecht@warnerbros.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            8189544043
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform3\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform3.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"14625\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit3\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit3\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Ashley Albrecht
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                ashley.albrecht@warnerbros.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                8189544043
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KVNY
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KLAS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                03/28/2014 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/30/2014 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            02/05/2014
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3102301518
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform4\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform4.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1772615513\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/630fe98452150d0208e11beb6ec40144/2014/2/6876948/cid_1772615513_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            02/03/2014
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Tom Kaney
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            tom.kaney@verizon.net
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9097942823
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform5\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform5.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"14545\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit5\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit5\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Tom Kaney
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                tom.kaney@verizon.net
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9097942823
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KL12
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KS05
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/20/2014 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                08/23/2014 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                dates are hypothetical. Each psgr. will have one bag as well as each passenger will have one set of golf clubs. please send quote by email.


                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            02/03/2014
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Tom Kaney
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            tom.kaney@verizon.net
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9097942823
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform6\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform6.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"14546\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit6\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit6\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Tom Kaney
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                tom.kaney@verizon.net
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9097942823
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KL12
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KS05
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/20/2014 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                08/23/2014 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                dates are hypothetical. Each psgr. will have one bag as well as each passenger will have one set of golf clubs. please send quote by email.


                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Light
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395RC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            01/16/2014
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7609291107
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform7\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform7.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1759854261\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/c3a46f8c66d2f2b2914bde736a310001/2014/1/6876948/cid_1759854261_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            01/15/2014
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            6023880760
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform8\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform8.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1759329391\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/3dae8f4010dd4cce7fd138cca5c87089/2014/1/6876948/cid_1759329391_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            01/15/2014
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            6023880760
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform9\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform9.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1759329759\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/a96ef6580529ebc39da04333e7f45877/2014/1/6876948/cid_1759329759_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            01/13/2014
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Joe Marton
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            joeymarton@yahoo.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7144201407
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform10\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform10.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"14018\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit10\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit10\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Joe Marton
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                joeymarton@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7144201407
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KAPC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                03/27/2014 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/30/2014 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                Looking for 10 people SNA to Napa March 27-30
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            01/13/2014
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Joe Marton
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            joeymarton@yahoo.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7144201407
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform11\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform11.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"14019\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit11\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit11\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Joe Marton
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                joeymarton@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7144201407
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KAPC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                03/27/2014 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/30/2014 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                Looking for 10 people SNA to Napa March 27-30
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Light
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395RC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            01/13/2014
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            6193097861
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform12\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform12.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1757773814\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/4f1b957e286df6ca923fea28e997f3ed/2014/1/6876948/cid_1757773814_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            01/06/2014
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            5618800182
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform13\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform13.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1753606225\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/633ea6d3a25a91dac11fc2a272d3296d/2014/1/6876948/cid_1753606225_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            12/30/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3127306549
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform14\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform14.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1750662451\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/3d36ab27ecdf6bf9f2862e4b45a1fe1b/2013/12/6876948/cid_1750662451_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            11/26/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9376670403
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform15\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform15.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1734268584\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/cd3fd29a570d26cf7df31ac50cfd4019/2013/11/6876948/cid_1734268584_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            11/23/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7655434067
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform16\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform16.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1732562912\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/cdfc1f1ec7a7d0cf4b5c528933be45f7/2013/11/6876948/cid_1732562912_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            11/13/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Deb Munson
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            deb@anthemvp.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            3108996225
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform17\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform17.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"12480\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit17\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit17\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Deb Munson
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                deb@anthemvp.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3108996225
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                PHNL
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                11/21/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                12/02/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Light
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395RC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            11/09/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7144503876
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform18\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform18.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1724679339\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/64f6535a991622e9d92c84b148dad71c/2013/11/6876948/cid_1724679339_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            11/09/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7144503876
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform19\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform19.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1724686047\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/4188ef4c7cd7184b7017efeabf3f990d/2013/11/6876948/cid_1724686047_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            11/07/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            david brown
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            dbrown@moultriegp.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3105602772
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform20\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform20.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"12328\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit20\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit20\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                david brown
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                dbrown@moultriegp.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3105602772
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSUN
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                01/16/2014 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                01/19/2014 17:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            11/06/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Jason Morgan
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            jason.morgan@thekorgroup.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            2136189729
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform21\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform21.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"12314\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit21\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit21\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Jason Morgan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                jason.morgan@thekorgroup.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                2136189729
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KVNY
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KHND
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                01/13/2014 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                01/13/2014 18:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            11/06/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Sanjay Chawla
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            sanjay13659@ridreiffmail.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3475364577
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform22\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform22.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"12288\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit22\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit22\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Sanjay Chawla
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                sanjay13659@ridreiffmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3475364577
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSEZ
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                11/10/2013 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                11/10/2013 20:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            10/24/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            4245555555
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform23\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform23.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1710620484\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/684a20bce03b7563a6c3f8fca63b73a/2013/10/6876948/cid_1710620484_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            10/24/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8185594333
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform24\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform24.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1711211938\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/347d19428383b50a702c1b32c8422fe0/2013/10/6876948/cid_1711211938_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            10/22/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Mike Daher
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            mdaapilot@me.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9497669766
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform25\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform25.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"11919\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit25\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit25\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Mike Daher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                mdaapilot@me.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9497669766
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KAVQ
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                10/29/2013 7:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                10/29/2013 14:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            10/20/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Tammy Jones
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            ghosthollow_114@msn.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            2082934056
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform26\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform26.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"11837\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit26\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit26\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Tammy Jones
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                ghosthollow_114@msn.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                2082934056
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KTUL
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                SDXJ
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                02/22/2014 10:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/01/2014 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                We have 6 adults and 2 children
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>No Aircraft Selected</strong>
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            10/16/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            8658517941
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform27\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform27.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1704666702\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/7cd26887324e582bacaab0ff350cd20/2013/10/6876948/cid_1704666702_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            10/15/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            vaneza Santillan
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            vaneza.santillan@sncorp.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8583752010
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform28\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform28.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"11706\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit28\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit28\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                vaneza Santillan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                vaneza.santillan@sncorp.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                8583752010
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KCRQ
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KMHV
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                10/17/2013 6:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                10/17/2013 18:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                Perfer to fly on a KingAir
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            10/15/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            8583752010
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform29\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform29.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1703581347\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/76bd789cfe1b7710bb494efe3e61daa4/2013/10/6876948/cid_1703581347_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            10/15/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            5138366039
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform30\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform30.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1703977380\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/3ab78ef9041ba4d76b15556c9279b439/2013/10/6876948/cid_1703977380_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            10/14/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Kyle Nauman
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            kyleisaris@gmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            5088632018
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform31\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform31.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"11681\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit31\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit31\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Kyle Nauman
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                kyleisaris@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                5088632018
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KFCH
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                10/15/2013 13:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                10/15/2013 18:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            10/14/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Kyle Nauman
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            kyleisaris@gmail.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            5088632018
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform32\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform32.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"11682\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit32\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit32\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Kyle Nauman
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                kyleisaris@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                5088632018
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KFCH
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                10/15/2013 13:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                10/15/2013 18:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Light
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395RC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            09/17/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Lance Broumand
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            lbroumand@urbandaddy.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9174001225
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform33\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform33.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"11000\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit33\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit33\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Lance Broumand
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                lbroumand@urbandaddy.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9174001225
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KLAS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                09/19/2013 18:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/19/2013 1:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Light
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395RC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            09/17/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Lance Broumand
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            lbroumand@urbandaddy.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9174001225
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform34\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform34.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"11001\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit34\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit34\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Lance Broumand
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                lbroumand@urbandaddy.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9174001225
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KLAS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                09/19/2013 18:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/19/2013 1:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            09/17/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Lance Broumand
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            lbroumand@urbandaddy.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9174001225
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform35\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform35.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"10994\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit35\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit35\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Lance Broumand
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                lbroumand@urbandaddy.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9174001225
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KLAS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                09/19/2013 18:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/19/2013 1:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            09/17/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Lance Broumand
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            lbroumand@urbandaddy.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9174001225
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform36\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform36.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"10993\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit36\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit36\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Lance Broumand
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                lbroumand@urbandaddy.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9174001225
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KLAS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                09/19/2013 18:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/19/2013 1:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Light
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395RC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            08/28/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Suzi Waymanharris
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            suziwaymanharris@gmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            3104004083
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform37\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform37.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"10530\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit37\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit37\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Suzi Waymanharris
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                suziwaymanharris@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3104004083
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KRNO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/30/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/01/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                Trying to get to Black Rock City.
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            08/28/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Suzi Waymanharris
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            suziwaymanharris@gmail.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3104004083
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform38\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform38.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"10531\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit38\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit38\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Suzi Waymanharris
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                suziwaymanharris@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3104004083
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KRNO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/30/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/01/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                Trying to get to Black Rock City.
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Light
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395RC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            08/23/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Robert Baker
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            maria.annunziata@nrdc.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9142728021
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform39\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform39.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"10401\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit39\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit39\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Robert Baker
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                maria.annunziata@nrdc.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9142728021
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KFOK
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                K5B2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                09/02/2013 11:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/02/2013 18:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            08/13/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Joseph Romano
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Jromano@hightoweradvisors.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7606362792
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform40\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform40.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"10158\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit40\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit40\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Joseph Romano
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                Jromano@hightoweradvisors.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7606362792
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                HHR
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KHND
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/15/2013 13:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                08/18/2013 11:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            08/12/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Linda Meschke
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            llmeschke@aol.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9524439890
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform41\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform41.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"10121\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit41\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit41\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Linda Meschke
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                llmeschke@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9524439890
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                MMLP
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                12/28/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                01/04/2014 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            08/02/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3078578453
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform42\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform42.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1655837656\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/2e4f108ca018e1a2482e1b468c30fa3/2013/8/6876948/cid_1655837656_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            08/01/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            3107520040
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform43\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform43.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1654479156\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/ad2e29e5bd3c18c5cf07f055e046294b/2013/8/6876948/cid_1654479156_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            08/01/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8182573953
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform44\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform44.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1654696314\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/57f82cb437e42f76714ff9482f672a04/2013/8/6876948/cid_1654696314_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            07/25/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7149264169
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform45\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform45.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1650450693\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/4fbbe4fc8a2a379186ad3091d1fb7494/2013/7/6876948/cid_1650450693_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            07/13/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7602126944
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform46\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform46.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1643075049\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/3ee843520b30919ce050aadb7441e3c2/2013/7/6876948/cid_1643075049_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            07/08/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Steven Turner
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            dispatch@dcilogistics.org
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            8885527312
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform47\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform47.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"9483\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit47\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit47\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Steven Turner
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                dispatch@dcilogistics.org
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                8885527312
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSTS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/08/2013 11:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/08/2013 17:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            07/08/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Steven Turner
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            dispatch@dcilogistics.org
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8885527312
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform48\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform48.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"9484\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit48\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit48\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Steven Turner
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                dispatch@dcilogistics.org
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                8885527312
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSTS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/08/2013 11:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/08/2013 17:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            06/24/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            5417565181
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform49\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform49.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1620040147\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/5178102960a372ab39e1af4c12f40add/2013/6/6876948/cid_1620040147_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            06/11/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8184070495
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform50\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform50.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1611030525\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/1ef1ea786b36d22727811c81e6705a1c/2013/6/6876948/cid_1611030525_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            06/06/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Mike Gennaro
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            gennaro11@yahoo.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9147142700
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform51\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform51.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8965\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit51\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit51\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Mike Gennaro
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                gennaro11@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9147142700
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KCHO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/23/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            /td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            06/06/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Mike Gennaro
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            gennaro11@yahoo.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9147142700
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform52\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform52.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8966\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit52\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit52\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Mike Gennaro
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                gennaro11@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9147142700
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KCHO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/23/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            05/30/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Sunnie Mathes
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            dandsmathes@aol.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9495825566
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform53\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform53.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8859\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit53\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit53\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Sunnie Mathes
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                dandsmathes@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9495825566
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLGB
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSAF
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                06/02/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                06/02/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            05/30/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Sunnie Mathes
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            dandsmathes@aol.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9495825566
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform54\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform54.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8860\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit54\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit54\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Sunnie Mathes
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                dandsmathes@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9495825566
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLGB
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSAF
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                06/02/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                06/02/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            05/30/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Sunnie Mathes
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            dandsmathes@aol.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9495825566
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform55\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform55.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8861\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit55\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit55\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Sunnie Mathes
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                dandsmathes@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9495825566
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLGB
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSAF
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                06/02/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                06/02/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            05/30/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            5753082094
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform56\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform56.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1602863567\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/4f2d9a047bdf5a9055be7149fce5bb9b/2013/5/6876948/cid_1602863567_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            05/28/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Tony Greenberg
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            tony@joyandwoe.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            3103191599
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform57\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform57.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8807\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit57\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit57\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Tony Greenberg
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                tony@joyandwoe.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3103191599
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                88NV
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/29/2013 10:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/01/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            05/28/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Tony Greenberg
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            tony@joyandwoe.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3103191599
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform58\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform58.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8808\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit58\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit58\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Tony Greenberg
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                tony@joyandwoe.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3103191599
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                88NV
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/29/2013 10:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/01/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            05/28/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Tony Greenberg
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            tony@joyandwoe.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            3103191599
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform59\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform59.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8809\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit59\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit59\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Tony Greenberg
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                tony@joyandwoe.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3103191599
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSMO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                88NV
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/29/2013 10:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/01/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            05/24/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8172858584
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform60\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform60.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1599742089\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/2e3a044be6ff40d1538a5c9c487db8c9/2013/5/6876948/cid_1599742089_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            05/21/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            5619065366
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform61\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform61.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1597140250\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/1e07b8f1e728a69cda7f28842fcec02b/2013/5/6876948/cid_1597140250_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            05/16/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3107141001
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform62\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform62.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1586105546\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/eba1da01f0b5ddd40fbfbf8c898b34fb/2013/5/6876948/cid_1586105546_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            05/13/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7145406413
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform63\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform63.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1582259290\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/94e19cc24f0be20fe1d482a25bc0b293/2013/5/6876948/cid_1582259290_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            04/25/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Erin Walheim
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            erin_mosher@hotmail.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            4152441973
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform64\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform64.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8408\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit64\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit64\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Erin Walheim
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                erin_mosher@hotmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                4152441973
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KHIO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                05/15/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                05/15/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            04/20/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Bill Page
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            billpage@mac.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9494637377
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform65\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform65.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8313\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit65\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit65\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Bill Page
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                billpage@mac.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9494637377
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                K38S
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                06/27/2013 7:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                06/30/2013 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            04/17/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8189893433
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform66\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform66.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1551167810\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/bd550a3b2dffeb134fcf27d6aa7ccca9/2013/4/6876948/cid_1551167810_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            04/11/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Ann Worthington
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            aworthington1@cox.net
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9494967287
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform67\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform67.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8193\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit67\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit67\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Ann Worthington
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                aworthington1@cox.net
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9494967287
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                BDN
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                05/03/2013 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                05/03/2013 13:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            04/11/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Ann Worthington
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            aworthington1@cox.net
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9494967287
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform68\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform68.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"8194\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit68\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit68\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Ann Worthington
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                aworthington1@cox.net
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9494967287
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                BDN
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                05/03/2013 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                05/03/2013 13:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            03/17/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Richard Slaughter
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            ricks@adnc.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            6198906558
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform69\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform69.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"7881\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit69\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit69\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Richard Slaughter
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                ricks@adnc.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                6198906558
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KCRQ
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSLC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                06/12/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                06/16/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            03/01/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            6195012849
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform70\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform70.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1506250569\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/e7ea357447c67fba4e7477758e16505c/2013/3/6876948/cid_1506250569_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            02/19/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            5406622766
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform71\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform71.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1495077756\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/5e54c0188db795a964bf6d4a35090da8/2013/2/6876948/cid_1495077756_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            02/18/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7605621000
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform72\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform72.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1493882459\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/28e1d4bc566b4597485e745d8895b6f5/2013/2/6876948/cid_1493882459_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            02/08/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7603570556
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform73\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform73.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1487069475\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/3cc2775fbab091c1bbf8fa1d1d31ebf1/2013/2/6876948/cid_1487069475_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            02/06/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9493944648
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform74\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform74.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1485268888\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/60ffbe7d64e82e107a5ffff762098cf3/2013/2/6876948/cid_1485268888_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            02/05/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9493944648
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform75\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform75.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1484825164\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/2163d55b100126728575109686c5a6f1/2013/2/6876948/cid_1484825164_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            01/31/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Sharon Judd
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            sjudd@gwcvalve.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            6618341775
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform76\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform76.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"7118\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit76\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit76\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Sharon Judd
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                sjudd@gwcvalve.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                6618341775
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KBFL
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KTUS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                02/13/2013 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                02/15/2013 17:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            01/26/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Jennifer Dunne
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Jdunne@tcslj.org
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            6193001164
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform77\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform77.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"7017\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit77\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit77\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Jennifer Dunne
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                Jdunne@tcslj.org
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                6193001164
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                MMLT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                02/17/2013 15:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                02/02/2013 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            01/04/2013
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Joy Kim
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            jkim@gssigroup.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9494521500
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform78\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform78.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"6770\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit78\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit78\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Joy Kim
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                jkim@gssigroup.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9494521500
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                OCEANO COUNTY
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                01/06/2013 8:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                01/08/2013 16:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            01/04/2013
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Joy Kim
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            jkim@gssigroup.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9494521500
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform79\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform79.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"6771\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit79\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit79\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Joy Kim
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                jkim@gssigroup.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9494521500
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                OCEANO COUNTY
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                01/06/2013 8:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                01/08/2013 16:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            12/10/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7143961053
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform80\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform80.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1440692051\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/261628b162d0e1e638d4a291d7244e1f/2012/12/6876948/cid_1440692051_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            12/10/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Voice Call

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    N/A

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7143961053
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform81\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform81.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateCallStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"1440698860\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                        <audio controls style=\"width:48px;\">
                                        <source src=\"https://www.callfire.com/cloud/1/files/recording/dynamic/fc7b826bd40737cd1254ded1dfe051b/2012/12/6876948/cid_1440698860_1.wav\" type=\"audio/wav\">
                                        Your browser does not support the audio element.
                                        </audio>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            12/04/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Loksarang Hardas
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            ldhardas@hotmail.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7148767554
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform82\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform82.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"6387\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit82\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit82\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Loksarang Hardas
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                ldhardas@hotmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7148767554
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KCNO
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSTS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                12/10/2012 13:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                12/10/2012 19:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            11/30/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Ronnda H
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            RonndaH@gmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            3232516991
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform83\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform83.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"6321\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit83\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit83\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Ronnda H
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                RonndaH@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3232516991
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KVNY
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KLAS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                01/11/2013 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                12/07/2012 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            11/05/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Mike James
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            mikelovesnorthwest@yahoo.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            4842522848
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform84\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform84.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"6033\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit84\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit84\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Mike James
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                mikelovesnorthwest@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                4842522848
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                8
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KRAL
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                12/07/2012 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                12/07/2012 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            09/30/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            keith wagner
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            wagnernml@aol.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            2132470005
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform85\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform85.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"5718\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit85\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit85\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                keith wagner
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                wagnernml@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                2132470005
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KTOA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KEGE
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                10/08/2012 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                10/12/2012 11:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            09/26/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Don Gormly
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            don.Gormly@meritagehealthcare.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7149077677
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform86\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform86.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"5690\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit86\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit86\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Don Gormly
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                don.Gormly@meritagehealthcare.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7149077677
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KCAG
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                11/13/2012 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                11/19/2012 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            09/19/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            MArk humphry
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            mlhumphrey24@gmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            712626225
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform87\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform87.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"5576\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit87\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit87\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                MArk humphry
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                mlhumphrey24@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                712626225
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                09/21/2012 8:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/23/2012 16:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                EMAIL ONLY!!!
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            09/19/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Mark Humphrey
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            mlhumphrey24@gmail.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7142626225
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform88\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform88.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"5570\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit88\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit88\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Mark Humphrey
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                mlhumphrey24@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7142626225
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KMRY
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                03/03/2013 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/05/2013 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                EMAIL ONLY!!!
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            09/19/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Mark Humphrey
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            mlhumphrey24@gmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7142626225
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform89\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform89.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"5571\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit89\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit89\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Mark Humphrey
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                mlhumphrey24@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7142626225
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KMRY
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                03/03/2013 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/05/2013 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                EMAIL ONLY!!!
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            09/18/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Sash Vernis
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            sash_v3@yahoo.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8185009343
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform90\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform90.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"5552\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit90\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit90\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Sash Vernis
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                sash_v3@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                8185009343
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLAX
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                NTTB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                09/18/2012 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/25/2012 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            08/27/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Olga Aguilar
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            oaguilar0604@gmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9999999999
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform91\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform91.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"5320\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit91\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit91\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Olga Aguilar
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                oaguilar0604@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9999999999
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KBUR
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KAPC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/29/2012 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/01/2012 17:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            08/20/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Lisa Bergsstedt
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            lisa@lcbevents.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9492743243
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform92\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform92.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"5208\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit92\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit92\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Lisa Bergsstedt
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                lisa@lcbevents.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9492743243
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KMRY
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                09/06/2012 10:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                09/09/2012 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            07/31/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Tony Garibian
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            tgaribian@coasthotelsusa.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            8188482056
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform93\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform93.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4945\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit93\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit93\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Tony Garibian
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                tgaribian@coasthotelsusa.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                8188482056
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KBUR
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSFO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                08/14/2012 8:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                08/15/2012 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            07/21/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Rob Brutocao
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            rbrutoco@aol.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9494354280
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform94\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform94.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4830\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit94\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit94\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Rob Brutocao
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                rbrutoco@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9494354280
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KRDD
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/24/2012 20:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/28/2012 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                Please do not call.  Email a quote and I will evaluate.  I am looking for cost effective transport and will consider an alternate arrival airport.
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            07/21/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Rob Brutocao
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            rbrutoco@aol.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9494354280
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform95\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform95.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4831\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit95\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit95\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Rob Brutocao
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                rbrutoco@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9494354280
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KRDD
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/24/2012 20:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/28/2012 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">
                                                Please do not call.  Email a quote and I will evaluate.  I am looking for cost effective transport and will consider an alternate arrival airport.
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            07/13/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Aaron Dishon
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Adishon@dishonblock.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9492319575
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform96\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform96.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4740\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit96\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit96\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Aaron Dishon
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                Adishon@dishonblock.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9492319575
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KFAT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/16/2012 19:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/23/2012 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            07/13/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Aaron Dishon
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Adishon@dishonblock.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9492319575
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform97\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform97.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4741\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit97\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit97\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Aaron Dishon
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                Adishon@dishonblock.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9492319575
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KFAT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/16/2012 19:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/23/2012 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            07/13/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Aaron Dishon
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Adishon@dishonblock.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9492319575
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform98\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform98.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4742\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit98\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit98\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Aaron Dishon
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                Adishon@dishonblock.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9492319575
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KFAT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/16/2012 19:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/23/2012 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            07/13/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Aaron Dishon
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Adishon@dishonblock.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            9492319575
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform99\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform99.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4731\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit99\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit99\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Aaron Dishon
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                Adishon@dishonblock.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9492319575
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KFAT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/16/2012 19:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/23/2012 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            07/13/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Aaron Dishon
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Adishon@dishonblock.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            9492319575
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform100\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform100.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4732\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit100\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit100\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Aaron Dishon
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                Adishon@dishonblock.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                9492319575
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KSNA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KFAT
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                07/16/2012 19:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/23/2012 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            06/02/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            William Fairweather
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            wkfairweather@gmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            6615993086
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform101\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform101.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"4115\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit101\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit101\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                William Fairweather
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                wkfairweather@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                6615993086
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KBFL
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KLAS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                10/26/2012 8:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                10/26/2012 23:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            04/24/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            emmanuel martinez
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            lur46@primerica.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            6619032370
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform102\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform102.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"3502\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit102\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit102\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                emmanuel martinez
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                lur46@primerica.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                6619032370
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        One-Way

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KL45
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KIFP
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                04/27/2012 12:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                04/27/2012 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>No Aircraft Selected</strong>
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            04/15/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Marc Pelletier
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            marcopolo620@hotmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7806897277
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform103\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform103.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"3357\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit103\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit103\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Marc Pelletier
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                marcopolo620@hotmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7806897277
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KPSP
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                MMSF
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                04/17/2012 8:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                04/25/2012 16:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            04/15/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Marc Pelletier
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            marcopolo620@hotmail.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            7806897277
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform104\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform104.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"3355\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit104\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit104\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Marc Pelletier
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                marcopolo620@hotmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7806897277
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KPSP
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                MMSF
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                04/17/2012 18:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                04/25/2012 18:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            04/15/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Marc Pelletier
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            marcopolo620@hotmail.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7806897277
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform105\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform105.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"3356\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit105\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit105\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Marc Pelletier
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                marcopolo620@hotmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7806897277
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KPSP
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                MMSF
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                04/17/2012 8:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                04/19/2012 16:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            04/04/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Justin Height
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            jph@penfieldsmith.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            8059252345
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform106\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform106.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"3144\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit106\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit106\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Justin Height
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                jph@penfieldsmith.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                8059252345
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLPC
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSMF
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                04/10/2012 22:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                04/11/2012 15:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            03/30/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Michael Glatfelter
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            mglatfelterjr@yahoo.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            6196238465
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform107\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform107.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"3065\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit107\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit107\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Michael Glatfelter
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                mglatfelterjr@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                6196238465
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KMYF
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                MMUN
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                12/15/2012 23:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                12/29/2012 23:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Beechcraft Baron 58
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Piston
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                3707T
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            03/09/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Gina Podley
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            rlasst@southpaw-entertainment.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            3105873537
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform108\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform108.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"2720\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit108\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit108\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Gina Podley
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                rlasst@southpaw-entertainment.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                3105873537
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                7
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KCMA
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KRNO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                06/30/2012 17:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                07/08/2012 12:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            02/28/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            Jonathan Klein
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            jsklein88@yahoo.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            6267129449
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform109\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform109.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"2560\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit109\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit109\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Jonathan Klein
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                jsklein88@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                6267129449
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KVNY
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KMMH
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                03/02/2012 15:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/04/2012 18:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            02/28/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Jonathan Klein
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            jsklein88@yahoo.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            6267129449
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform110\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform110.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"2561\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit110\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit110\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Jonathan Klein
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                jsklein88@yahoo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                6267129449
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KVNY
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KMMH
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                03/02/2012 15:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/04/2012 18:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air 350
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                9
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N395MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#ffffff;\">
                            02/22/2012
                        </td>
                        <td style=\"background-color:#ffffff;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#ffffff;\">
                            michelle wheeler
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            sweetthang1724@aol.com
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            7142998230
                        </td>
                        <td style=\"background-color:#ffffff;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform111\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform111.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"2519\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#ffffff;\" align=\"center\">

                                <a href=\"#edit111\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit111\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                michelle wheeler
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                sweetthang1724@aol.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                7142998230
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KLGB
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KLAS
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                03/16/2012 9:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                03/18/2012 16:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>No Aircraft Selected</strong>
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

                    <tr>
                        <td style=\"background-color:#f0f0f0;\">
                            02/16/2012
                        </td>
                        <td style=\"background-color:#f0f0f0;\">

                                    Retail

                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            Steve Smarty
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            mrschmautz@gmail.com
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            5304173467
                        </td>
                        <td style=\"background-color:#f0f0f0;\">
                            <div style=\"margin-top:15px;\">
                            <form action=\"\" id=\"statusform112\" method=\"get\">
                                <div class=\"ui-select\">
                                <select name=\"status\" onChange=\"document.forms.statusform112.submit();\" style=\"width:175px; font-size:9px\">
                                    <option value=\"a\" selected>New</option>
                                    <option value=\"b\" >Contacted</option>
                                    <option value=\"s\" >Booked</option>
                                    <option value=\"c\" >Closed</option>
                                </select>
                                </div>

                                        <input type=\"hidden\" name=\"action\" value=\"updateStatus\" />

                                <input type=\"hidden\" name=\"show\" value=\"all\" />
                                <input type=\"hidden\" name=\"quoteID\" value=\"2477\" />
                            </form>
                            </div>
                        </td>
                        <td style=\"background-color:#f0f0f0;\" align=\"center\">

                                <a href=\"#edit112\" data-toggle=\"modal\"><div class=\"btn-flat icon\"><i class=\"icon-folder-open-alt\"></i> Details</div></a>
                                <div class=\"modal hide fade\" id=\"edit112\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">X</button>
                                        <h3>Lead Details</h3>
                                    </div>
                                    <div class=\"modal-body\">
                                    <h4>Contact Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                Steve Smarty
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Email:</strong>
                                            </td>
                                            <td>
                                                mrschmautz@gmail.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Phone:</strong>
                                            </td>
                                            <td>
                                                5304173467
                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Trip Details</h4>
                                    <table style=\"margin:10px 0 20px 0;\">
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Trip Type:</strong>
                                            </td>
                                            <td>

                                                        Round Trip

                                            </td>
                                            <td>
                                                <strong>Passengers:</strong>
                                            </td>
                                            <td>
                                                1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Origin:</strong>
                                            </td>
                                            <td>
                                                KO61
                                            </td>
                                            <td>
                                                <strong>Destination:</strong>
                                            </td>
                                            <td>
                                                KSMX
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Departure Date:</strong>
                                            </td>
                                            <td>
                                                02/16/2012 7:00 EST


                                            </td>
                                            <td style=\"white-space:nowrap\">
                                                <strong>Return Date:</strong>
                                            </td>
                                            <td>
                                                02/16/2012 16:00 EST

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign=\"top\">
                                                <strong>Comments:</strong>
                                            </td>
                                            <td colspan=\"3\">

                                            </td>
                                        </tr>
                                    </table>
                                    <h4>Aircraft Details</h4>

                                    <table style=\"margin:10px 0 10px 0;\">
                                        <tr>
                                            <td>
                                                <strong>Name:</strong>
                                            </td>
                                            <td>
                                                King Air C90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Type:</strong>
                                            </td>
                                            <td>
                                                Turbo prop
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Seats:</strong>
                                            </td>
                                            <td>
                                                6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tail #:</strong>
                                            </td>
                                            <td>
                                                N319MB
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Location:</strong>
                                            </td>
                                            <td>
                                                KHHR
                                            </td>
                                        </tr>
                                    </table>


                                    </div>
                                    <div class=\"modal-footer\">
                                        <a href=\"#\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</a>
                                    </div>
                                </div>

                        </td>
                    </tr>

            </table>

        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "JetChartersAppBundle:Operator/Inbox:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  104 => 55,  129 => 61,  100 => 57,  495 => 144,  493 => 143,  492 => 142,  491 => 141,  490 => 140,  485 => 139,  473 => 137,  470 => 136,  467 => 135,  465 => 134,  462 => 133,  449 => 126,  443 => 124,  433 => 119,  431 => 118,  419 => 115,  415 => 114,  404 => 111,  369 => 102,  351 => 99,  347 => 97,  345 => 96,  342 => 95,  340 => 94,  333 => 91,  330 => 90,  328 => 89,  324 => 88,  321 => 87,  318 => 86,  315 => 85,  301 => 78,  297 => 77,  291 => 75,  288 => 74,  266 => 69,  263 => 68,  260 => 67,  251 => 64,  248 => 63,  245 => 62,  242 => 61,  239 => 60,  236 => 59,  231 => 57,  218 => 51,  216 => 50,  213 => 49,  195 => 40,  186 => 37,  181 => 35,  178 => 34,  170 => 28,  194 => 123,  175 => 67,  126 => 61,  96 => 55,  184 => 36,  110 => 25,  83 => 133,  23 => 1,  81 => 34,  174 => 82,  84 => 37,  70 => 28,  152 => 59,  148 => 31,  74 => 30,  160 => 61,  127 => 61,  118 => 35,  76 => 20,  300 => 97,  295 => 93,  261 => 59,  257 => 66,  253 => 57,  249 => 55,  234 => 58,  188 => 36,  185 => 117,  172 => 117,  146 => 19,  137 => 66,  134 => 66,  114 => 71,  90 => 51,  77 => 42,  65 => 14,  37 => 14,  237 => 50,  228 => 140,  225 => 44,  223 => 138,  215 => 134,  207 => 128,  198 => 41,  180 => 23,  167 => 105,  165 => 82,  161 => 81,  157 => 79,  155 => 100,  153 => 36,  124 => 57,  113 => 26,  53 => 18,  145 => 69,  139 => 65,  58 => 14,  120 => 31,  97 => 53,  52 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 120,  430 => 144,  427 => 117,  423 => 116,  413 => 134,  409 => 113,  407 => 112,  402 => 130,  398 => 129,  393 => 126,  387 => 105,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 84,  309 => 83,  305 => 114,  298 => 91,  294 => 76,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 17,  132 => 58,  128 => 36,  111 => 24,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 65,  246 => 54,  243 => 88,  240 => 51,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 52,  219 => 136,  217 => 135,  208 => 46,  204 => 44,  179 => 68,  159 => 39,  143 => 34,  135 => 72,  131 => 31,  119 => 55,  108 => 56,  102 => 46,  71 => 16,  67 => 26,  63 => 25,  59 => 56,  47 => 7,  38 => 6,  94 => 52,  89 => 34,  85 => 33,  79 => 43,  75 => 41,  68 => 22,  56 => 16,  50 => 12,  29 => 3,  87 => 1,  72 => 23,  55 => 11,  21 => 2,  26 => 29,  98 => 45,  93 => 35,  88 => 38,  78 => 16,  46 => 14,  27 => 1,  40 => 9,  44 => 8,  35 => 5,  31 => 4,  43 => 14,  41 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 66,  166 => 114,  163 => 81,  158 => 39,  156 => 60,  151 => 74,  142 => 90,  138 => 89,  136 => 40,  123 => 58,  121 => 97,  117 => 63,  115 => 43,  105 => 47,  101 => 40,  91 => 58,  69 => 15,  66 => 14,  62 => 57,  49 => 17,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 102,  189 => 38,  187 => 84,  182 => 66,  176 => 90,  173 => 85,  168 => 115,  164 => 26,  162 => 102,  154 => 110,  149 => 71,  147 => 35,  144 => 70,  141 => 70,  133 => 32,  130 => 62,  125 => 44,  122 => 58,  116 => 54,  112 => 57,  109 => 50,  106 => 68,  103 => 67,  99 => 54,  95 => 42,  92 => 3,  86 => 24,  82 => 31,  80 => 21,  73 => 16,  64 => 20,  60 => 22,  57 => 10,  54 => 9,  51 => 18,  48 => 45,  45 => 26,  42 => 9,  39 => 8,  36 => 6,  33 => 3,  30 => 5,);
    }
}
