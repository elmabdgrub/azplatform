<?php

/* BackOfficeBundle:Collaborateur:view.html.twig */
class __TwigTemplate_4815b9adbfef02b3bbac05afb977166d03f8cc6b4384475fabecf6ce70ce7de6 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "   Collaborateur  ";
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
\t\t\t\t<div class=\"box span9\">
\t\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "\t<div class=\"alert alert-success\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t<strong>Succès ! </strong> ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice_erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "\t<div class=\"alert alert-error\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t<strong>Erreur !</strong> ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white font\"></i><span class=\"break\"></span>Fiche du Collaborateur</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\" >




\t\t\t\t\t\t<ul class=\"list\">


\t\t\t\t\t\t\t\t<strong>Nom : </strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "nom", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Prénom : </strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "prenom", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Email : </strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "email", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Email : </strong>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "telephone", array()), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Poste : </strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "postecollaborateur", array()), "libelle", array()), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Service : </strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "postecollaborateur", array()), "service", array()), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t</ul>

\t\t\t\t</div>

</div><!--/span-->

\t\t\t\t<div class=\"box span3\">
\t\t\t\t\t<div class=\"box-header\" >
\t\t\t\t\t\t<h2><i class=\"halflings-icon white list\"></i><span class=\"break\"></span> </h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t\t";
        // line 56
        $context["photo"] = ("avatars/" . $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "path", array()));
        // line 57
        echo "
<ul class=\"dash-list\">

\t\t\t\t\t\t\t\t";
        // line 60
        if (($this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "path", array()) == "")) {
            // line 61
            echo "\t<img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/avatar.png"), "html", null, true);
            echo "\" alt=\"profil\" height=\"200\" width=\"200\" >
";
        } else {
            // line 63
            echo "\t<img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
            echo "\" alt=\"profil\" height=\"200\" width=\"200\">
";
        }
        // line 65
        echo "


</ul>

<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t\t<tbody>


\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
<a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reset-collaborateur", array("id" => $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"\" data-rel=\"tooltip\" class=\"btn btn-warning\" >Réinitialiser le mot de passe</a>
</td>


\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody></table>






 </div>





\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"row-fluid sortable\">
\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Tâches affectées</h2>
\t\t\t\t\t\t<div class=\"box-icon\">


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable dataTable\">
\t\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t\t  <tr>

\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\"> Titre</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Description</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Date de début</th>

\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 11px;\">Date de fin prévisionnelle</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Date de fin rééle</th>
\t\t\t\t\t\t\t\t\t   <th style=\"font-size: 12px;\">Statut tâche</th>

\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t\t  ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ttaches"]) ? $context["ttaches"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 122
            echo "\t\t\t\t\t\t\t\t<tr>


\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 13px;\"><a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-tache", array("id" => $this->getAttribute($context["tache"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "titre", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t<td  style=\"font-size: 11px;\">";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 12px;\">";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tache"], "datedebut", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 12px;\">";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tache"], "datefinprevis", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t";
            // line 129
            if (($this->getAttribute($context["tache"], "datefinreel", array()) == null)) {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 18px;\"><center>-</center></td>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 132
                echo "\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 12px;\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tache"], "datefinreel", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t";
            }
            // line 133
            echo "</td>
\t\t\t\t\t\t\t\t\t<td  style=\"font-size: 12px;\">";
            // line 134
            if (($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 1)) {
                // line 135
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 2)) {
                // line 137
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 3)) {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 140
            echo "</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t </table>

\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->

\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Productivité</h2>
\t\t\t\t\t\t<div class=\"box-icon\">



\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
<div id=\"linechart\" style=\"min-width: 400px; height: 400px;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t</div><!--/row-->







<div class=\"modal hide fade\" id=\"myModal\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
\t\t\t<h3>Settings</h3>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<p>Hefgdfgdfdfgfsdgigured...</p>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
\t\t\t<a href=\"#\" class=\"btn btn-primary\">Save changes</a>
\t\t</div>
\t</div>
\t\t</div>

";
    }

    // line 187
    public function block_javascripts($context, array $blocks = array())
    {
        // line 188
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "



<script type=\"text/javascript\">
    ";
        // line 193
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["linechart"]) ? $context["linechart"] : null));
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Collaborateur:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 193,  345 => 188,  342 => 187,  296 => 144,  287 => 140,  281 => 139,  275 => 137,  269 => 135,  267 => 134,  264 => 133,  258 => 132,  254 => 130,  252 => 129,  248 => 128,  244 => 127,  240 => 126,  234 => 125,  229 => 122,  225 => 121,  177 => 76,  164 => 65,  158 => 63,  152 => 61,  150 => 60,  145 => 57,  143 => 56,  127 => 43,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  107 => 38,  94 => 27,  83 => 22,  79 => 20,  75 => 19,  64 => 14,  60 => 12,  56 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
