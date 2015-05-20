<?php

/* BackOfficeBundle:Hebergement:mailalert.html.twig */
class __TwigTemplate_ac558ffac1fd106b225197223ee7d081e52d51c99ba1b48932f4eef2b4d3cccb extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Notification email </title>
</head>

<body bgcolor=\"#8d8e90\">
<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#8d8e90\">
    <tr>
        <td><table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
                <tr>
                    <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td width=\"61\"><a href= \"\" target=\"_blank\"><img src=\"http://localhost/imghost/logo.png\" width=\"120\" height=\"50\" border=\"0\" alt=\"\"/></a></td>

                                <td width=\"393\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                        <tr>
                                            <td height=\"46\" align=\"right\" valign=\"middle\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">

                                                </table></td>
                                        </tr>
                                        <tr>
                                            <td height=\"30\"><img src=\"http://localhost/imghost/PROMO-GREEN2_01_04.jpg\" width=\"393\" height=\"30\" border=\"0\" alt=\"\"/></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align=\"center\">&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                            <tr>
                                <td width=\"10%\">&nbsp;</td>
                                ";
        // line 40
        $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : null), "dateexpiration", array())), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"))), "method");
        // line 41
        echo "                                ";
        $context["rest"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : null), "days", array());
        // line 42
        echo "                                <td width=\"80%\" align=\"left\" valign=\"top\"><font style=\"font-family: Georgia, 'Times New Roman', Times, serif; color:#010101; font-size:24px\"><strong><em>Chèr(e) client(e),</em></strong></font><br /><br />
                                    <font style=\"font-family: Verdana, Geneva, sans-serif; color:#666766; font-size:13px; line-height:21px\">
                                        Nous vous informons que votre hébergement : ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : null), "nom", array()), "html", null, true);
        echo ", créé le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : null), "datecreation", array()), "d/m/Y"), "html", null, true);
        echo ",  arrive a expiration dans moins de <span \"style=\"color: #D51414;\">";
        echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : null), "html", null, true);
        echo "</span>  jours, il est impératif de contacter l'agence pour renouvler votre contrat, sans quoi votre hébergement sera annulé .
                                         <br /><br />
                                        Cordialement<br />
                                        L'administrateur </font></td>
                                <td width=\"10%\">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td align=\"right\" valign=\"top\"><table width=\"108\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">


                                        <tr>
                                            <td height=\"10\" align=\"center\" valign=\"middle\" bgcolor=\"#6ebe44\"> </td>
                                        </tr>
                                    </table></td>
                                <td>&nbsp;</td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><img src=\"http://localhost/imghost/PROMO-GREEN2_07.jpg\" width=\"598\" height=\"7\" style=\"display:block\" border=\"0\" alt=\"\"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">

                        </table></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align=\"center\"><font style=\"font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#231f20; font-size:8px\"><strong>  <a href= \"http://azcreator.com\" style=\"color:#010203; text-decoration:none\">AZCreator</a> | info@azcreator.com,  15, Avenue Al Abtal Appartement 4, Agdal
                                Rabat - Maroc | Tel: (+212) 661 82 30 36 | Tous droits réservés.</strong></font></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table></td>
    </tr>
</table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Hebergement:mailalert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 44,  65 => 42,  62 => 41,  60 => 40,  19 => 1,);
    }
}
