<?php

/* BackOfficeBundle:Projet:view.html.twig */
class __TwigTemplate_f0e2ae3c9f27bc82986fb2907a427ad5412d4dcb62d293cbfa31bb045cc9b409 extends Twig_Template
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
        echo "  Détails projet  ";
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice_erreur"), "method"));
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
        echo "\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white font\"></i><span class=\"break\"></span>Fiche du projet</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\" >
\t\t\t\t\t\t  <div class=\"row-fluid\">
<div class=\"box-content\" >
\t\t\t\t<div class=\"box span8\" ontablet=\"span8\" ondesktop=\"span8\" >
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white list\"></i><span class=\"break\"></span>Détails</h2>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t\t<ul class=\"list\">


\t\t\t\t\t\t\t\t<strong>Titre : </strong> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "titre", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Description : </strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "description", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Type du projet : </strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "typeprojet", array()), "libelle", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Date de début : </strong>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "datedebut", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date de fin : </strong>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "datefin", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date livraison : </strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "datelivraison", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Montant : </strong>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "montant", array()), "html", null, true);
        echo "DH<br/>


\t\t\t\t\t\t</ul>
\t</div>


\t\t\t\t</div><!--/span-->


\t\t\t\t<div class=\"box span4\" ontablet=\"span6\" ondesktop=\"span4\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Client</h2>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul class=\"dashboard-list\">
\t\t\t\t\t\t";
        // line 66
        $context["photo"] = ("logosclient/" . $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "path", array()));
        // line 67
        echo "\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t";
        // line 69
        if (($this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "path", array()) == "")) {
            // line 70
            echo "\t<img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logosclient/logo.png"), "html", null, true);
            echo "\" alt=\"Avatar\" height=\"50\" width=\"50\" >
";
        } else {
            // line 72
            echo "\t<img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo"))), "html", null, true);
            echo "\" alt=\"Avatar\" height=\"50\" width=\"50\">
";
        }
        // line 74
        echo "

\t\t\t\t\t\t\t\t<strong>Nom : </strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "nom", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t<strong>Téléphone : </strong>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "telephone", array()), "html", null, true);
        echo " <br>

\t\t\t\t\t\t\t\t<strong>Email : </strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "email", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t<center><strong>Site Web : </strong>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "site", array()), "html", null, true);
        echo "</center>
\t\t\t\t\t\t\t\t<strong>Adresse : </strong>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "client", array()), "adresse", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t</div>
\t\t\t\t</div><!--/span-->
<div class=\"box span4\" ontablet=\"span6\" ondesktop=\"span4\" id=\"changerstatut\" style=\"display: none;\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Etat du projet</h2>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t\t\t ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t  <fieldset>





\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statutprojet", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>



\t\t\t\t\t\t\t  ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "





\t\t\t\t\t\t  </fieldset>
\t\t\t\t\t\t";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
\t\t\t\t</div><!--/span-->




</div>

\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t</div><!--/span-->

\t\t\t\t<div class=\"box span3\">
\t\t\t\t\t<div class=\"box-header\" >
\t\t\t\t\t\t<h2><i class=\"halflings-icon white list\"></i><span class=\"break\"></span>état d'avancement </h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<div class=\"row-fluid hideInIE8 circleStats\">

                \t<div class=\"circleStatsItemBox green\">
\t\t\t\t\t\t<div class=\"header\">";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "statutprojet", array()), "libelle", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<span class=\"percent\">%</span>
\t\t\t\t\t\t<div class=\"circleStat\">
                    \t\t<input type=\"text\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["prcentaches"]) ? $context["prcentaches"] : $this->getContext($context, "prcentaches")), "html", null, true);
        echo "\" class=\"whiteCircle\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<span class=\"count\">

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"sep\"> ";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["tachestermin"]) ? $context["tachestermin"] : $this->getContext($context, "tachestermin")), "html", null, true);
        echo " tâches terminées / ";
        echo twig_escape_filter($this->env, (isset($context["tachestot"]) ? $context["tachestot"] : $this->getContext($context, "tachestot")), "html", null, true);
        echo " tâches </span>

\t\t\t\t\t\t\t<span class=\"value\">

\t\t\t\t\t\t\t</span>

                \t</div>


                </div>



\t\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t\t<tbody>


\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button id=\"statut\" class=\"btn btn-large btn-info\">Changer l'état du projet</button>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t</tbody></table>





\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t\t<div class=\"row-fluid sortable\">
\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Dépenses</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter-depense", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" title=\"Ajouter une dépense\"><i class=\"halflings-icon white plus\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable dataTable\">
\t\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Type </th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\"> Libelle</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Description</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Date</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Montant</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Actions</th>
\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t\t  ";
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depenses"]) ? $context["depenses"] : $this->getContext($context, "depenses")));
        foreach ($context['_seq'] as $context["_key"] => $context["depense"]) {
            // line 202
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["depense"], "typedepense", array()), "libelle", array()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 13px;\">";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["depense"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td  style=\"font-size: 12px;\">";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["depense"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 13px;\">";
            // line 207
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["depense"], "datedepense", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"center\" style=\"font-size: 13px;\">";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["depense"], "montant", array()), "html", null, true);
            echo " DH</td>
\t\t\t\t\t\t\t\t\t<td class=\"center \">

\t\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit-depense", array("id" => $this->getAttribute($context["depense"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"halflings-icon white edit\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete-depense", array("id" => $this->getAttribute($context["depense"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\">
\t\t\t\t\t\t\t\t\t\t<i class=\"halflings-icon white trash\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depense'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "\t\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t </table>

\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->

\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Tranches</h2>
\t\t\t\t\t\t<div class=\"box-icon\">

\t\t\t\t\t\t\t<a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter-tranche", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" title=\"Ajouter une tranche\" ><i class=\"halflings-icon white plus\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable dataTable\">
\t\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t\t  <tr>

\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\"> Libelle</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Description</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Date de paiement</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Montant</th>
\t\t\t\t\t\t\t\t\t  <th style=\"font-size: 12px;\">Actions</th>
\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t\t  ";
        // line 248
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tranches"]) ? $context["tranches"] : $this->getContext($context, "tranches")));
        foreach ($context['_seq'] as $context["_key"] => $context["tranche"]) {
            // line 249
            echo "\t<tr>


\t\t<td class=\"center\" style=\"font-size: 13px;\">";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["tranche"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t<td  style=\"font-size: 12px;\">";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["tranche"], "description", array()), "html", null, true);
            echo "</td>
\t\t<td class=\"center\" style=\"font-size: 13px;\">";
            // line 254
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tranche"], "datepaiment", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t<td class=\"center\" style=\"font-size: 13px;\">";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["tranche"], "montant", array()), "html", null, true);
            echo " DH</td>
\t\t<td class=\"center \">

\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit-tranche", array("id" => $this->getAttribute($context["tranche"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t<i class=\"halflings-icon white edit\"></i>
\t\t\t</a>
\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete-tranche", array("id" => $this->getAttribute($context["tranche"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\">
\t\t\t\t<i class=\"halflings-icon white trash\"></i>
\t\t\t</a>
\t\t</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tranche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "\t\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t </table>

\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t</div><!--/row-->

\t\t\t\t<div class=\"row-fluid\">

\t\t\t\t<div class=\"box  span6 noMargin\" onTablet=\"span6\" onDesktop=\"span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white list\"></i><span class=\"break\"></span>Tâches Timeline</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter-tache", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\" title=\"Ajouter une tâche\"><i class=\"halflings-icon white plus\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">



\t\t\t\t\t<div class=\"timeline\">

\t\t\t\t\t ";
        // line 290
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) ? $context["taches"] : $this->getContext($context, "taches")));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 291
            echo "\t<div class=\"timeslot alt\">

\t\t<div class=\"task\">


\t\t\t\t\t    \t\t<span>
\t\t\t\t\t\t\t\t\t";
            // line 297
            if ((($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 1) || ($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 4))) {
                // line 298
                echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 2)) {
                // line 300
                echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 3)) {
                // line 302
                echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 304
            echo "\t\t\t\t\t\t\t\t\t<span class=\"details\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-tache", array("id" => $this->getAttribute($context["tache"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "titre", array()), "html", null, true);
            echo " :</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"type\">";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "description", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span>

\t\t\t\t\t\t\t\t\t\t<span class=\"remaining\">
\t\t\t\t\t\t\t\t\t\tDate de fin prévisionnelle : ";
            // line 311
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tache"], "datefinprevis", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t<div class=\"arrow\"></div>
\t\t</div>
\t\t<div class=\"icon\">
\t\t\t<i class=\"icon-calendar\"></i>
\t\t</div>
\t\t<div class=\"time\">
\t\t\t";
            // line 321
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tache"], "datedebut", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "
\t\t</div>

\t</div>
\t<div class=\"clearfix\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "




\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->




\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white th\"></i><span class=\"break\"></span>Discussion</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul class=\"nav tab-menu nav-tabs\" id=\"myTab\">



\t\t\t\t\t\t\t<li class=\"active\" ><a href=\"#messages\">Messages</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#fichiers\">Fichiers</a></li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div id=\"myTabContent\" class=\"tab-content\">

\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"fichiers\">
\t\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul class=\"chat metro white\">
\t\t\t\t\t\t\t";
        // line 360
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : $this->getContext($context, "fichiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 361
            echo "\t";
            $context["file"] = ("files/" . $this->getAttribute($context["fichier"], "path", array()));
            // line 362
            echo "
\t";
            // line 363
            if (($this->getAttribute($context["fichier"], "collaborateur", array()) == null)) {
                // line 364
                echo "\t\t<li class=\"right\">
\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                // line 365
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                echo "\">
\t\t<span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">Vous : </span><br/>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 368
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo " : </span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 370
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 372
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file"))), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 373
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 374
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xlsx") || "xls") || "png") || "jpg") || "jpeg")) {
                    // line 376
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 378
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 380
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 382
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t</li>
\t";
            } else {
                // line 388
                echo "\t\t";
                $context["photo"] = ("avatars/" . $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()));
                // line 389
                echo "

\t\t<li class=\"left\">
\t\t\t";
                // line 392
                if (($this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()) == "")) {
                    // line 393
                    echo "
\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 394
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    echo "\">
\t\t\t";
                } else {
                    // line 396
                    echo "
\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 397
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo"))), "html", null, true);
                    echo "\">



\t\t\t";
                }
                // line 402
                echo "\t\t\t<span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">";
                // line 403
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "prenom", array()), "html", null, true);
                echo "</span><br/>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 404
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo " : </span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 406
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 409
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 410
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xls") || "xlsx") || "png") || "jpg") || "jpeg")) {
                    // line 412
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 414
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 416
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 418
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t</li>
\t";
            }
            // line 424
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 427
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"chat-form blue\">
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"typeahead\">Titre </label>
\t\t\t\t\t\t\t  <div class=\"controls\">

\t\t\t\t\t\t\t\t";
        // line 433
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "libelle", array()), 'widget', array("attr" => array("class" => "span6 typeahead")));
        echo "
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"fileInput\">Fichier</label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t\t<div class=\"uploader\" id=\"uniform-fileInput\">";
        // line 439
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "file", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "</div>

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 443
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 445
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"messages\">
\t\t\t\t\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t\t<ul class=\"chat metro green\" id=\"listmsg\">


\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 455
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"chat-form black\">
\t\t\t\t\t\t\t";
        // line 457
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "message", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t";
        // line 459
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "
\t\t\t\t\t\t</div>







\t\t\t\t\t\t";
        // line 468
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->

\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->



\t\t\t</div><!--/row-->



\t</div><!--/.fluid-container-->

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
";
    }

    // line 503
    public function block_javascripts($context, array $blocks = array())
    {
        // line 504
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>

\tfunction postForm( \$form, callback ){

\t\t/*
\t\t * Get all form values
\t\t */
\t\tvar values = {};
\t\t\$.each( \$form.serializeArray(), function(i, field) {
\t\t\tvalues[field.name] = field.value;
\t\t});

\t\t/*
\t\t * Throw the form values to the server!
\t\t */
\t\t\$.ajax({
\t\t\ttype        : \$form.attr( 'method' ),
\t\t\turl         : \$form.attr( 'action' ),
\t\t\tdata        : values,
\t\t\tsuccess     : function(data) {
\t\t\t\tcallback( data );
\t\t\t}
\t\t});

\t}
\t\$(document).ready(function(){

\t\tvar forms = [
\t\t\t'[ name=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"]'
\t\t];

\t\t\$( forms.join(',') ).submit( function( e ){
\t\t\te.preventDefault();

\t\t\tpostForm( \$(this), function( response ){

\t\t\t});


\t\t\treturn false;
\t\t});

\t});


</script>
<script>
\tfunction refresh() {
\$.ajax({
    url: \"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messages-projet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()))), "html", null, true);
        echo "\",
    success:
        function(retour){

        var msg=retour[\"messages\"];

        var str=\"\";

    for(var j=0 ; j< msg[\"id\"].length; j++){
      var id=msg[\"id\"][j];
\t\tif(msg[\"nom\"][j]==\"Vous\"){
\t\t\tstr+=\"<li class='right'> <img class='avatar' alt='Dennis Ji' src='";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
        echo "'> <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";

\t\t}
\t\telse{
\t\t\tvar img=msg['photo'][j];

\t\tstr+=\"<li class='left'> <img class='avatar'  src='";
        // line 571
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "' > <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";
\t\t}

    }


\t\tjQuery(\"#listmsg\").html(str);



    }
});

    setTimeout('refresh();',1000);
 }
\tjQuery(document).ready(function(){ refresh() });
//refresh();
</script>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Projet:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  965 => 571,  956 => 565,  942 => 554,  918 => 533,  885 => 504,  882 => 503,  843 => 468,  831 => 459,  826 => 457,  821 => 455,  808 => 445,  803 => 443,  796 => 439,  787 => 433,  778 => 427,  775 => 426,  768 => 424,  758 => 418,  752 => 416,  746 => 414,  740 => 412,  734 => 410,  732 => 409,  726 => 406,  721 => 404,  715 => 403,  712 => 402,  704 => 397,  701 => 396,  696 => 394,  693 => 393,  691 => 392,  686 => 389,  683 => 388,  673 => 382,  667 => 380,  661 => 378,  655 => 376,  649 => 374,  647 => 373,  643 => 372,  638 => 370,  633 => 368,  627 => 365,  624 => 364,  622 => 363,  619 => 362,  616 => 361,  612 => 360,  577 => 327,  565 => 321,  552 => 311,  545 => 307,  538 => 305,  535 => 304,  529 => 302,  523 => 300,  517 => 298,  515 => 297,  507 => 291,  503 => 290,  490 => 280,  475 => 267,  463 => 261,  457 => 258,  451 => 255,  447 => 254,  443 => 253,  439 => 252,  434 => 249,  430 => 248,  410 => 231,  397 => 220,  385 => 214,  379 => 211,  373 => 208,  369 => 207,  365 => 206,  361 => 205,  356 => 203,  353 => 202,  349 => 201,  329 => 184,  285 => 145,  276 => 139,  270 => 136,  246 => 115,  236 => 108,  227 => 102,  216 => 94,  212 => 93,  197 => 81,  193 => 80,  189 => 79,  184 => 77,  180 => 76,  176 => 74,  170 => 72,  164 => 70,  162 => 69,  158 => 67,  156 => 66,  136 => 49,  132 => 48,  128 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  94 => 27,  83 => 22,  79 => 20,  75 => 19,  64 => 14,  60 => 12,  56 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
