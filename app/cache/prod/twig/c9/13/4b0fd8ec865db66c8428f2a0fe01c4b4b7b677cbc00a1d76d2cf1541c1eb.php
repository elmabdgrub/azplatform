<?php

/* BackOfficeBundle:Tache:view.html.twig */
class __TwigTemplate_c9134b0fd8ec865db66c8428f2a0fe01c4b4b7b677cbc00a1d76d2cf1541c1eb extends Twig_Template
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
        echo "  Tache  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content_body($context, array $blocks = array())
    {
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "\t<div class=\"alert alert-success\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t<strong>Succès ! </strong> ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice_erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "\t<div class=\"alert alert-error\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t<strong>Erreur !</strong> ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t<div class=\"row-fluid sortable\">

\t\t\t\t<div class=\"box span8\">

\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white font\"></i><span class=\"break\"></span>Tâche : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "titre", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-projet", array("id" => $this->getAttribute($this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "projet", array()), "id", array()))), "html", null, true);
        echo "\" title=\"retour au projet\"><i class=\"halflings-icon white cog\"></i></a>
\t\t\t\t\t<a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit-tache", array("id" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"Modifier la tâche\"><i class=\"halflings-icon white wrench\"></i></a>
\t\t\t\t\t<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete-tache", array("id" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"Supprimer la tâche\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box-content\" >
\t\t\t\t\t\t  <div class=\"row-fluid\">
<div class=\"box-content\" >

\t\t\t\t\t\t<ul class=\"list\">


\t\t\t\t\t\t\t\t<strong>Titre : </strong> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "titre", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Description : </strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "description", array()), "html", null, true);
        echo "<br><br>

\t\t\t\t\t\t\t\t<strong>Date de début : </strong>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "datedebut", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date de fin prévisionnelle  : </strong>";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "datefinprevis", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date fin réele : </strong>";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "datefinreel", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Projet : </strong><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-projet", array("id" => $this->getAttribute($this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "projet", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "projet", array()), "titre", array()), "html", null, true);
        echo "</a><br/>


\t\t\t\t\t\t</ul>
\t</div>










</div>

\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  \t<div class=\"box  span4\" ontablet=\"span4\" ondesktop=\"span4\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Collaborateurs</h2>
\t\t\t\t\t\t<div class=\"box-icon\">


\t\t\t\t\t\t\t<a href=\"#\" title=\"Affecter un collaborateur\" class=\"btn-setting\"><i class=\"halflings-icon white plus\" ></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul class=\"dashboard-list metro\">
\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prods"]) ? $context["prods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 81
            echo "\t";
            $context["photo"] = ("avatars/" . $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "path", array()));
            // line 82
            echo "
\t\t\t\t\t\t\t<li class=\"red\">

\t\t\t\t\t\t\t\t";
            // line 85
            if (($this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "path", array()) == "")) {
                // line 86
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/avatar.png"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "
\t\t\t\t\t\t\t\t";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "prenom", array()), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t<strong>Poste:</strong> ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "postecollaborateur", array()), "libelle", array()), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t<strong>Date d'affectation:</strong> ";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prod"], "dateaffectation", array()), "d/m/Y H:m:s"), "html", null, true);
            echo "<br/>
\t\t\t\t\t\t\t\t<strong><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("desaffect-collaborateur", array("id" => $this->getAttribute($context["prod"], "id", array()), "tache" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "id", array()))), "html", null, true);
            echo "\">désaffecter le collaborateur</a></strong> <br>
\t\t\t\t\t\t\t</li>

\t<br/>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div><!--/span-->














\t\t\t\t<div class=\"row-fluid\">



<div class=\"box span12\">
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
        // line 148
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 149
            echo "\t";
            $context["file"] = ("files/" . $this->getAttribute($context["fichier"], "path", array()));
            // line 150
            echo "
\t";
            // line 151
            if (($this->getAttribute($context["fichier"], "collaborateur", array()) == null)) {
                // line 152
                echo "\t\t<li class=\"left\">
\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                echo "\">
\t\t<span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">Vous : </span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 156
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["file"]) ? $context["file"] : null)), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 161
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xlsx") || "xls") || "png") || "jpg") || "jpeg")) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t</li>
\t";
            } else {
                // line 176
                echo "\t\t";
                $context["photo"] = ("avatars/" . $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()));
                // line 177
                echo "

\t\t<li class=\"left\">
\t\t\t";
                // line 180
                if (($this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()) == "")) {
                    // line 181
                    echo "
\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 182
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    echo "\">
\t\t\t";
                } else {
                    // line 184
                    echo "
\t\t\t\t<img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 185
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
                    echo "\">



\t\t\t";
                }
                // line 190
                echo "\t\t\t<span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "prenom", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 192
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" >
\t\t\t\t\t\t\t\t\t\t\t";
                // line 197
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xls") || "xlsx") || "png") || "jpg") || "jpeg")) {
                    // line 200
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 204
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t</li>
\t";
            }
            // line 212
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 215
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"chat-form blue\">
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"typeahead\">Titre </label>
\t\t\t\t\t\t\t  <div class=\"controls\">

\t\t\t\t\t\t\t\t";
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "libelle", array()), 'widget', array("attr" => array("class" => "span6 typeahead")));
        echo "
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"fileInput\">Fichier</label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t\t<div class=\"uploader\" id=\"uniform-fileInput\">";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "file", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "</div>

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 233
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : null), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"messages\">
\t\t\t\t\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t\t<ul class=\"chat metro green\" id=\"listmsg\">


\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 243
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"chat-form black\">
\t\t\t\t\t\t\t";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "message", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "
\t\t\t\t\t\t</div>







\t\t\t\t\t\t";
        // line 256
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->


\t\t\t</div>



\t</div><!--/.fluid-container-->

<div class=\"modal hide fade\" id=\"myModal\" style=\"width: 900px; \">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
\t\t\t<h3>Liste des collaborateurs</h3>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>

\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t<th>Poste</th>

\t\t\t\t\t\t<th>Affecter</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>

\t\t\t\t\t";
        // line 292
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listecollaborateur"]) ? $context["listecollaborateur"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 293
            echo "
\t";
            // line 294
            $context["photo"] = ("avatars/" . $this->getAttribute($context["collaborateur"], "path", array()));
            // line 295
            echo "\t<tr>
\t\t";
            // line 296
            if (($this->getAttribute($context["collaborateur"], "path", array()) == "")) {
                // line 297
                echo "\t\t\t<td class=\"center\"><span class=\"avatar\"><center><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($context["collaborateur"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/avatar.png"), "html", null, true);
                echo "\" alt=\"Avatar\" height=\"50\" width=\"50\" class=\"avatar\"></a></center></span></td>
\t\t";
            } else {
                // line 299
                echo "\t\t\t<td class=\"center\"><span class=\"avatar\"><center><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($context["collaborateur"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
                echo "\" alt=\"Avatar\" height=\"50\" width=\"50\" class=\"avatar\"></a></center></span></td>
\t\t";
            }
            // line 301
            echo "\t\t<td class=\"center\">";
            if (($this->getAttribute($context["collaborateur"], "fav", array()) == 1)) {
                echo "<i class=\"halflings-icon star\"></i>";
            } else {
            }
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "nom", array()), "html", null, true);
            echo "</td>
\t\t<td class=\"center\">";
            // line 302
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t<td class=\"center\">";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "email", array()), "html", null, true);
            echo "</td>
\t\t<td class=\"center\">";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "telephone", array()), "html", null, true);
            echo "</td>
\t\t<td class=\"center\">";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["collaborateur"], "postecollaborateur", array()), "libelle", array()), "html", null, true);
            echo "</td>

\t\t<td class=\"center\">
\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affect-collaborateur", array("id" => $this->getAttribute($context["collaborateur"], "id", array()), "tache" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"affecter le collaborateur\">
\t\t\t\t<i class=\" halflings-icon white ok\"></i>
\t\t\t</a>


\t\t</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Fermer</a>

\t\t</div>
\t</div>
";
    }

    // line 327
    public function block_javascripts($context, array $blocks = array())
    {
        // line 328
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
        // line 357
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
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messages-taches", array("id" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "id", array()))), "html", null, true);
        echo "\",
\t\t\t\tsuccess:
\t\t\t\t\t\tfunction(retour){

\t\t\t\t\t\t\tvar msg=retour[\"messages\"];

\t\t\t\t\t\t\tvar str=\"\";

\t\t\t\t\t\t\tfor(var j=0 ; j< msg[\"id\"].length; j++){
\t\t\t\t\t\t\t\tvar id=msg[\"id\"][j];
\t\t\t\t\t\t\t\tif(msg[\"nom\"][j]==\"Vous\"){
\t\t\t\t\t\t\t\t\tstr+=\"<li class='right'> <img class='avatar' alt='Dennis Ji' src='";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
        echo "'> <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";

\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telse{
\t\t\t\t\t\t\t\t\tvar img=msg['photo'][j];

\t\t\t\t\t\t\t\t\tstr+=\"<li class='left'> <img class='avatar'  src='";
        // line 395
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
        return "BackOfficeBundle:Tache:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  728 => 395,  719 => 389,  705 => 378,  681 => 357,  648 => 328,  645 => 327,  632 => 316,  618 => 308,  612 => 305,  608 => 304,  604 => 303,  600 => 302,  591 => 301,  583 => 299,  575 => 297,  573 => 296,  570 => 295,  568 => 294,  565 => 293,  561 => 292,  522 => 256,  510 => 247,  505 => 245,  500 => 243,  487 => 233,  482 => 231,  475 => 227,  466 => 221,  457 => 215,  454 => 214,  447 => 212,  437 => 206,  431 => 204,  425 => 202,  419 => 200,  413 => 198,  411 => 197,  405 => 194,  400 => 192,  394 => 191,  391 => 190,  383 => 185,  380 => 184,  375 => 182,  372 => 181,  370 => 180,  365 => 177,  362 => 176,  352 => 170,  346 => 168,  340 => 166,  334 => 164,  328 => 162,  326 => 161,  322 => 160,  317 => 158,  312 => 156,  306 => 153,  303 => 152,  301 => 151,  298 => 150,  295 => 149,  291 => 148,  247 => 106,  236 => 101,  232 => 100,  228 => 99,  222 => 98,  219 => 97,  211 => 92,  206 => 91,  199 => 87,  194 => 86,  192 => 85,  187 => 82,  184 => 81,  180 => 80,  145 => 50,  141 => 49,  137 => 48,  133 => 47,  128 => 45,  124 => 44,  110 => 33,  106 => 32,  102 => 31,  97 => 29,  90 => 24,  79 => 19,  75 => 17,  70 => 16,  59 => 11,  55 => 9,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
