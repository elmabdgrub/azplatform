<?php

/* BackOfficeBundle:Hebergement:list.html.twig */
class __TwigTemplate_7bafdf04af6ad2a654be08d192cc693e531ceb78acef7ae4dfd9e681b893dc05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BackOfficeBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_body' => array($this, 'block_content_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Liste des hébergements  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t<div class=\"row-fluid sortable\">
\t\t<div class=\"box span12\">
\t\t\t<div class=\"box-header\" data-original-title>
\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Hébergements</h2>
\t\t\t\t<div class=\"box-icon\">

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"box-content\">
\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t<strong>Succès ! </strong> ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t</div>


\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice_erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "\t\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t<strong>Erreur !</strong> ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t</div>


\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>

\t\t\t\t\t\t<th style=\"font-size: 12px;\">Nom</th>
\t\t\t\t\t\t<th style=\"font-size: 12px;\">Client</th>
\t\t\t\t\t\t<th style=\"font-size: 12px;\">Description</th>
\t\t\t\t\t\t<th style=\"font-size: 12px;\">Date création</th>
\t\t\t\t\t\t<th style=\"font-size: 12px;\">Date expiration</th>
\t\t\t\t\t\t<th style=\"font-size: 12px;\">Date renouvellement </th>
\t\t\t\t\t\t<th style=\"font-size: 12px;\"> Jours restant</th>

\t\t\t\t\t\t<th style=\"font-size: 12px;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listhebergement"]) ? $context["listhebergement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["heb"]) {
            // line 53
            echo "\t\t\t\t\t<tr>

\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 13px;\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["heb"], "nom", array()), "html", null, true);
            echo "</td>


\t\t\t\t\t\t<td class=\"center\" >";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["heb"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 12px;\" width=\"15%\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["heb"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\" >";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["heb"], "datecreation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\" >";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["heb"], "dateexpiration", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 62
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["heb"], "dateexpiration", array())), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"))), "method");
            // line 63
            echo "\t\t\t\t\t\t";
            $context["rest"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : null), "days", array());
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["heb"], "daterenouv", array()) == null)) {
                // line 64
                echo "
\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 18px;\"><center>-</center></td>

\t\t\t\t\t\t";
            } else {
                // line 68
                echo "
\t\t\t\t\t\t\t<td class=\"center\" >";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["heb"], "daterenouv", array()), "d/m/Y"), "html", null, true);
                echo "</td>

\t\t\t\t\t\t";
            }
            // line 72
            echo "
\t\t\t\t\t\t";
            // line 73
            if ((((isset($context["rest"]) ? $context["rest"] : null) <= 20) && ((isset($context["rest"]) ? $context["rest"] : null) > 0))) {
                // line 74
                echo "\t\t\t\t\t\t<td class=\"center\"><span class=\"label label-important\">";
                echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : null), "html", null, true);
                echo " jours</span></td>
\t\t\t\t\t\t";
            } elseif (((isset($context["rest"]) ? $context["rest"] : null) <= 0)) {
                // line 76
                echo "\t\t\t\t\t\t\t<td class=\"center\"><span class=\"label label-important\">Expiré</span></td>
\t\t\t\t\t\t";
            } elseif ((((isset($context["rest"]) ? $context["rest"] : null) > 20) && ((isset($context["rest"]) ? $context["rest"] : null) <= 60))) {
                // line 78
                echo "\t\t\t\t\t\t\t<td class=\"center\"><span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : null), "html", null, true);
                echo " jours</span></td>
\t\t\t\t\t\t";
            } else {
                // line 80
                echo "\t\t\t\t\t\t\t<td class=\"center\"><span class=\"label label-success\">";
                echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : null), "html", null, true);
                echo " jours</span></td>
\t\t\t\t\t\t";
            }
            // line 82
            echo "

\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-hebergement", array("id" => $this->getAttribute($context["heb"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white zoom-in\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit-hebergement", array("id" => $this->getAttribute($context["heb"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white edit\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete-hebergement", array("id" => $this->getAttribute($context["heb"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white trash\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div><!--/span-->

\t</div><!--/row-->
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Hebergement:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 98,  218 => 92,  212 => 89,  205 => 85,  200 => 82,  194 => 80,  188 => 78,  184 => 76,  178 => 74,  176 => 73,  173 => 72,  167 => 69,  164 => 68,  158 => 64,  153 => 63,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  129 => 55,  125 => 53,  121 => 52,  102 => 35,  91 => 30,  87 => 28,  82 => 27,  71 => 22,  67 => 20,  63 => 19,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
