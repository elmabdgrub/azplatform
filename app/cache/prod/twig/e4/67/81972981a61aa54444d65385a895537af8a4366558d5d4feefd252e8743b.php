<?php

/* FrontOfficeBundle:Projet:view.html.twig */
class __TwigTemplate_e46781972981a61aa54444d65385a895537af8a4366558d5d4feefd252e8743b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BackOfficeBundle::frontlayout.html.twig");
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
        return "BackOfficeBundle::frontlayout.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "titre", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Description : </strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "description", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Type du projet : </strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "typeprojet", array()), "libelle", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Date de début : </strong>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "datedebut", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date de fin : </strong>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "datefin", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date livraison : </strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "datelivraison", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>



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
        $context["photo"] = ("logosclient/" . $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "client", array()), "path", array()));
        // line 67
        echo "\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t";
        // line 69
        if (($this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "client", array()), "path", array()) == "")) {
            // line 70
            echo "\t<img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logosclient/logo.png"), "html", null, true);
            echo "\" alt=\"Avatar\" height=\"50\" width=\"50\" >
";
        } else {
            // line 72
            echo "\t<img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
            echo "\" alt=\"Avatar\" height=\"50\" width=\"50\">
";
        }
        // line 74
        echo "

\t\t\t\t\t\t\t\t<strong>Nom : </strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "client", array()), "nom", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t<strong>Téléphone : </strong>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "client", array()), "telephone", array()), "html", null, true);
        echo " <br>

\t\t\t\t\t\t\t\t<strong>Email : </strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "client", array()), "email", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t<center><strong>Site Web : </strong>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "client", array()), "site", array()), "html", null, true);
        echo "</center>
\t\t\t\t\t\t\t\t<strong>Adresse : </strong>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "client", array()), "adresse", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t</div>
\t\t\t\t</div><!--/span-->
<div class=\"box span4\" ontablet=\"span6\" ondesktop=\"span4\" id=\"changerstatut\" style=\"display: none;\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Etat du projet</h2>

\t\t\t\t\t</div>

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
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "statutprojet", array()), "libelle", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<span class=\"percent\">%</span>
\t\t\t\t\t\t<div class=\"circleStat\">
                    \t\t<input type=\"text\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["prcentaches"]) ? $context["prcentaches"] : null), "html", null, true);
        echo "\" class=\"whiteCircle\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t<span class=\"count\">

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"sep\"> ";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["tachestermin"]) ? $context["tachestermin"] : null), "html", null, true);
        echo " tâches terminées / ";
        echo twig_escape_filter($this->env, (isset($context["tachestot"]) ? $context["tachestot"] : null), "html", null, true);
        echo " tâches </span>

\t\t\t\t\t\t\t<span class=\"value\">

\t\t\t\t\t\t\t</span>

                \t</div>


                </div>









\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->


\t\t\t\t<div class=\"row-fluid\">

\t\t\t\t<div class=\"box  span6 noMargin\" onTablet=\"span6\" onDesktop=\"span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white list\"></i><span class=\"break\"></span>Tâches Timeline</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter-tache", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"Ajouter une tâche\"><i class=\"halflings-icon white plus\"></i></a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">



\t\t\t\t\t<div class=\"timeline\">

\t\t\t\t\t ";
        // line 161
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) ? $context["taches"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 162
            echo "\t<div class=\"timeslot alt\">

\t\t<div class=\"task\">


\t\t\t\t\t    \t\t<span>
\t\t\t\t\t\t\t\t\t";
            // line 168
            if ((($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 1) || ($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 4))) {
                // line 169
                echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 2)) {
                // line 171
                echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "id", array()) == 3)) {
                // line 173
                echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tache"], "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t\t\t\t\t<span class=\"details\">
\t\t\t\t\t\t\t\t\t";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "titre", array()), "html", null, true);
            echo " :
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"type\">";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["tache"], "description", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span>

\t\t\t\t\t\t\t\t\t\t<span class=\"remaining\">
\t\t\t\t\t\t\t\t\t\tDate de fin prévisionnelle : ";
            // line 182
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
            // line 192
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
        // line 198
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
\t\t\t\t\t\t<ul class=\"chat metro brown\">
\t\t\t\t\t\t\t";
        // line 231
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 232
            echo "\t";
            $context["file"] = ("files/" . $this->getAttribute($context["fichier"], "path", array()));
            // line 233
            echo "
\t";
            // line 234
            if (($this->getAttribute($context["fichier"], "collaborateur", array()) == null)) {
                // line 235
                echo "\t\t<li class=\"left\">
\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                // line 236
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                echo "\">
\t\t<span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">Administrateur : </span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 239
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 241
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 243
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["file"]) ? $context["file"] : null)), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 244
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 245
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xlsx") || "xls") || "png") || "jpg") || "jpeg")) {
                    // line 247
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 249
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t</li>
\t";
            } elseif (($this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                // line 259
                echo "\t\t";
                $context["photo"] = ("avatars/" . $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()));
                // line 260
                echo "

\t\t<li class=\"left \">
\t\t\t";
                // line 263
                if (($this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()) == "")) {
                    // line 264
                    echo "
\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 265
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    echo "\">
\t\t\t";
                } else {
                    // line 267
                    echo "
\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 268
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
                    echo "\">



\t\t\t";
                }
                // line 273
                echo "\t\t\t<span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">Vous</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 275
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 277
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 280
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 281
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xls") || "xlsx") || "png") || "jpg") || "jpeg")) {
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 287
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 289
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t</li>
\t";
            } else {
                // line 295
                echo "\t\t";
                $context["photo"] = ("avatars/" . $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()));
                // line 296
                echo "

\t\t<li class=\"left\">
\t\t\t";
                // line 299
                if (($this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()) == "")) {
                    // line 300
                    echo "
\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 301
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    echo "\">
\t\t\t";
                } else {
                    // line 303
                    echo "
\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 304
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
                    echo "\">



\t\t\t";
                }
                // line 309
                echo "\t\t\t<span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "prenom", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 311
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 313
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 316
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 317
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xls") || "xlsx") || "png") || "jpg") || "jpeg")) {
                    // line 319
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 321
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 323
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 325
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t</li>
\t";
            }
            // line 331
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 334
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"chat-form blue\">
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"typeahead\">Titre </label>
\t\t\t\t\t\t\t  <div class=\"controls\">

\t\t\t\t\t\t\t\t";
        // line 340
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "libelle", array()), 'widget', array("attr" => array("class" => "span6 typeahead")));
        echo "
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"fileInput\">Fichier</label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t\t<div class=\"uploader\" id=\"uniform-fileInput\">";
        // line 346
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "file", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "</div>

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 350
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 352
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : null), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"messages\">
\t\t\t\t\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t\t<ul class=\"chat metro green\" id=\"listmsg\">


\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 362
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"chat-form black\">
\t\t\t\t\t\t\t";
        // line 364
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "message", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t";
        // line 366
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "
\t\t\t\t\t\t</div>







\t\t\t\t\t\t";
        // line 375
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
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

    // line 411
    public function block_javascripts($context, array $blocks = array())
    {
        // line 412
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>

\t\tfunction postForm( \$form, callback ){

\t\t\t/*
\t\t\t * Get all form values
\t\t\t */
\t\t\tvar values = {};
\t\t\t\$.each( \$form.serializeArray(), function(i, field) {
\t\t\t\tvalues[field.name] = field.value;
\t\t\t});

\t\t\t/*
\t\t\t * Throw the form values to the server!
\t\t\t */
\t\t\t\$.ajax({
\t\t\t\ttype        : \$form.attr( 'method' ),
\t\t\t\turl         : \$form.attr( 'action' ),
\t\t\t\tdata        : values,
\t\t\t\tsuccess     : function(data) {
\t\t\t\t\tcallback( data );
\t\t\t\t}
\t\t\t});

\t\t}
\t\t\$(document).ready(function(){

\t\t\tvar forms = [
\t\t\t\t'[ name=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"]'
\t\t\t];

\t\t\t\$( forms.join(',') ).submit( function( e ){
\t\t\t\te.preventDefault();

\t\t\t\tpostForm( \$(this), function( response ){

\t\t\t\t});


\t\t\t\treturn false;
\t\t\t});

\t\t});


\t</script>
\t<script>
\t\tfunction refresh() {
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("msg-projet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : null), "id", array()))), "html", null, true);
        echo "\",
\t\t\t\tsuccess:
\t\t\t\t\t\tfunction(retour){

\t\t\t\t\t\t\tvar msg=retour[\"messages\"];

\t\t\t\t\t\t\tvar str=\"\";

\t\t\t\t\t\t\tfor(var j=0 ; j< msg[\"id\"].length; j++){
\t\t\t\t\t\t\t\tvar id=msg[\"id\"][j];
\t\t\t\t\t\t\t\tif(msg[\"nom\"][j]==\"Administrateur\"){
\t\t\t\t\t\t\t\t\tstr+=\"<li class='left'> <img class='avatar' alt='Dennis Ji' src='";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
        echo "'> <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";

\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telse if(msg[\"nom\"][j]==\"Vous\"){
\t\t\t\t\t\t\t\t\tvar img=msg['photo'][j];
\t\t\t\t\t\t\t\t\tstr+=\"<li class='right'> <img class='avatar' alt='Dennis Ji' src='";
        // line 478
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "'> <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";

\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telse{
\t\t\t\t\t\t\t\t\tvar img=msg['photo'][j];

\t\t\t\t\t\t\t\t\tstr+=\"<li class='left'> <img class='avatar'  src='";
        // line 484
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "' > <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t}


\t\t\t\t\t\t\tjQuery(\"#listmsg\").html(str);



\t\t\t\t\t\t}
\t\t\t});

\t\t\tsetTimeout('refresh();',3000);
\t\t}
\t\tjQuery(document).ready(function(){ refresh() });
\t\t//refresh();
\t</script>
";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Projet:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  840 => 484,  831 => 478,  823 => 473,  809 => 462,  785 => 441,  752 => 412,  749 => 411,  709 => 375,  697 => 366,  692 => 364,  687 => 362,  674 => 352,  669 => 350,  662 => 346,  653 => 340,  644 => 334,  641 => 333,  634 => 331,  624 => 325,  618 => 323,  612 => 321,  606 => 319,  600 => 317,  598 => 316,  592 => 313,  587 => 311,  581 => 310,  578 => 309,  570 => 304,  567 => 303,  562 => 301,  559 => 300,  557 => 299,  552 => 296,  549 => 295,  539 => 289,  533 => 287,  527 => 285,  521 => 283,  515 => 281,  513 => 280,  507 => 277,  502 => 275,  498 => 273,  490 => 268,  487 => 267,  482 => 265,  479 => 264,  477 => 263,  472 => 260,  469 => 259,  459 => 253,  453 => 251,  447 => 249,  441 => 247,  435 => 245,  433 => 244,  429 => 243,  424 => 241,  419 => 239,  413 => 236,  410 => 235,  408 => 234,  405 => 233,  402 => 232,  398 => 231,  363 => 198,  351 => 192,  338 => 182,  331 => 178,  326 => 176,  323 => 175,  317 => 173,  311 => 171,  305 => 169,  303 => 168,  295 => 162,  291 => 161,  278 => 151,  243 => 121,  234 => 115,  228 => 112,  194 => 81,  190 => 80,  186 => 79,  181 => 77,  177 => 76,  173 => 74,  167 => 72,  161 => 70,  159 => 69,  155 => 67,  153 => 66,  132 => 48,  128 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  94 => 27,  83 => 22,  79 => 20,  75 => 19,  64 => 14,  60 => 12,  56 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
