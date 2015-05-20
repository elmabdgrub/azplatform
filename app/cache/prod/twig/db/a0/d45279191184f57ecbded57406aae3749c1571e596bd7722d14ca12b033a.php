<?php

/* FrontOfficeBundle:Tache:view.html.twig */
class __TwigTemplate_dba0d45279191184f57ecbded57406aae3749c1571e596bd7722d14ca12b033a extends Twig_Template
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
        echo "    Tache  ";
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
            echo "    <div class=\"alert alert-success\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <strong>Succès ! </strong> ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>


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
            echo "    <div class=\"alert alert-error\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <strong>Erreur !</strong> ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>


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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail-projet", array("id" => $this->getAttribute($this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "projet", array()), "id", array()))), "html", null, true);
        echo "\" title=\"retour au projet\"><i class=\"halflings-icon white cog\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box-content\" >
\t\t\t\t\t\t  <div class=\"row-fluid\">
<div class=\"box-content\" >

\t\t\t\t\t\t<ul class=\"list\">


\t\t\t\t\t\t\t\t<strong>Titre : </strong> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "titre", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Description : </strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "description", array()), "html", null, true);
        echo "<br><br>

\t\t\t\t\t\t\t\t<strong>Date de début : </strong>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "datedebut", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date de fin prévisionnelle  : </strong>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "datefinprevis", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date fin réele : </strong>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "datefinreel", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Projet : </strong><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail-projet", array("id" => $this->getAttribute($this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "projet", array()), "id", array()))), "html", null, true);
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



\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul class=\"dashboard-list metro\">
\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prods"]) ? $context["prods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 79
            echo "    ";
            $context["photo"] = ("avatars/" . $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "path", array()));
            // line 80
            echo "
    <li class=\"red\">

        ";
            // line 83
            if (($this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "path", array()) == "")) {
                // line 84
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "id", array()))), "html", null, true);
                echo "\">
                <img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/avatar.png"), "html", null, true);
                echo "\">
            </a>

        ";
            } else {
                // line 89
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "id", array()))), "html", null, true);
                echo "\">
                <img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
                echo "\">
            </a>


        ";
            }
            // line 95
            echo "
        ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "prenom", array()), "html", null, true);
            echo "<br>
        <strong>Poste:</strong> ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "collaborateur", array()), "postecollaborateur", array()), "libelle", array()), "html", null, true);
            echo "<br>
        <strong>Date d'affectation:</strong> ";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["prod"], "dateaffectation", array()), "d/m/Y H:m:s"), "html", null, true);
            echo "<br/>

    </li>

    <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
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
        // line 146
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 147
            echo "    ";
            $context["file"] = ("files/" . $this->getAttribute($context["fichier"], "path", array()));
            // line 148
            echo "
    ";
            // line 149
            if (($this->getAttribute($context["fichier"], "collaborateur", array()) == null)) {
                // line 150
                echo "        <li class=\"left\">
            <img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                echo "\">
\t\t<span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">Administrateur : </span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 154
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
                                        <br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["file"]) ? $context["file"] : null)), "html", null, true);
                echo "\" >
                                            ";
                // line 159
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 160
                    echo "                                                <span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xlsx") || "xls") || "png") || "jpg") || "jpeg")) {
                    // line 162
                    echo "                                                <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 164
                    echo "                                                <span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } else {
                    // line 166
                    echo "                                                <span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 168
                echo "                                            <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
                                        </a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
        </li>
    ";
            } elseif (($this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                // line 174
                echo "        ";
                $context["photo"] = ("avatars/" . $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()));
                // line 175
                echo "

        <li class=\"left \">
            ";
                // line 178
                if (($this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()) == "")) {
                    // line 179
                    echo "
                <img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 180
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    echo "\">
            ";
                } else {
                    // line 182
                    echo "
                <img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 183
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
                    echo "\">



            ";
                }
                // line 188
                echo "            <span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">Vous</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 190
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
                                        <br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" >
                                            ";
                // line 195
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 196
                    echo "                                                <span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xls") || "xlsx") || "png") || "jpg") || "jpeg")) {
                    // line 198
                    echo "                                                <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 200
                    echo "                                                <span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } else {
                    // line 202
                    echo "                                                <span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 204
                echo "                                            <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
                                        </a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
        </li>
    ";
            } else {
                // line 210
                echo "        ";
                $context["photo"] = ("avatars/" . $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()));
                // line 211
                echo "

        <li class=\"left\">
            ";
                // line 214
                if (($this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "path", array()) == "")) {
                    // line 215
                    echo "
                <img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 216
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    echo "\">
            ";
                } else {
                    // line 218
                    echo "
                <img class=\"avatar\" alt=\"Dennis Ji\" src=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : null)), "html", null, true);
                    echo "\">



            ";
                }
                // line 224
                echo "            <span class=\"fichier\"><span class=\"arrow\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"from\">";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fichier"], "collaborateur", array()), "prenom", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 226
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "datefichier", array()), "d/m/y h:m:s"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "libelle", array()), "html", null, true);
                echo "
                                        <br/>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" >
                                            ";
                // line 231
                if (((((($this->getAttribute($context["fichier"], "fichier", array()) == "pdf") || "pptx") || "ppt") || "rar") || "zip")) {
                    // line 232
                    echo "                                                <span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } elseif (((((($this->getAttribute($context["fichier"], "fichier", array()) == "xls") || "xlsx") || "png") || "jpg") || "jpeg")) {
                    // line 234
                    echo "                                                <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } elseif (((($this->getAttribute($context["fichier"], "fichier", array()) == "doc") || "docx") || "txt")) {
                    // line 236
                    echo "                                                <span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                } else {
                    // line 238
                    echo "                                                <span class=\"label label-info\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "fichier", array()), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 240
                echo "                                            <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "path", array()), "html", null, true);
                echo "</b>
                                        </a>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
        </li>
    ";
            }
            // line 246
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 249
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"chat-form blue\">
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"typeahead\">Titre </label>
\t\t\t\t\t\t\t  <div class=\"controls\">

\t\t\t\t\t\t\t\t";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "libelle", array()), 'widget', array("attr" => array("class" => "span6 typeahead")));
        echo "
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"fileInput\">Fichier</label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t\t<div class=\"uploader\" id=\"uniform-fileInput\">";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "file", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "</div>

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 267
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : null), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"messages\">
\t\t\t\t\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t\t<ul class=\"chat metro green\" id=\"listmsg\">


\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        // line 277
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"chat-form black\">
\t\t\t\t\t\t\t";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "message", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "Envoyer", array()), 'widget', array("attr" => array("class" => "btn btn-warning")));
        echo "
\t\t\t\t\t\t</div>







\t\t\t\t\t\t";
        // line 290
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->


\t\t\t</div>



\t</div><!--/.fluid-container-->


";
    }

    // line 307
    public function block_javascripts($context, array $blocks = array())
    {
        // line 308
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        function postForm( \$form, callback ){

            /*
             * Get all form values
             */
            var values = {};
            \$.each( \$form.serializeArray(), function(i, field) {
                values[field.name] = field.value;
            });

            /*
             * Throw the form values to the server!
             */
            \$.ajax({
                type        : \$form.attr( 'method' ),
                url         : \$form.attr( 'action' ),
                data        : values,
                success     : function(data) {
                    callback( data );
                }
            });

        }
        \$(document).ready(function(){

            var forms = [
                '[ name=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"]'
            ];

            \$( forms.join(',') ).submit( function( e ){
                e.preventDefault();

                postForm( \$(this), function( response ){

                });


                return false;
            });

        });


    </script>
    <script>
        function refresh() {
            \$.ajax({
                url: \"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messages-tache", array("id" => $this->getAttribute((isset($context["tache"]) ? $context["tache"] : null), "id", array()))), "html", null, true);
        echo "\",
                success:
                        function(retour){

                            var msg=retour[\"messages\"];

                            var str=\"\";

                            for(var j=0 ; j< msg[\"id\"].length; j++){
                                var id=msg[\"id\"][j];
                                if(msg[\"nom\"][j]==\"Administrateur\"){
                                    str+=\"<li class='left'> <img class='avatar' alt='Dennis Ji' src='";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.jpg"), "html", null, true);
        echo "'> <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";

                                }
                                else if(msg[\"nom\"][j]==\"Vous\"){
                                    var img=msg['photo'][j];
                                    str+=\"<li class='right'> <img class='avatar' alt='Dennis Ji' src='";
        // line 374
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "'> <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";

                                }
                                else{
                                    var img=msg['photo'][j];

                                    str+=\"<li class='left'> <img class='avatar'  src='";
        // line 380
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "' > <span class='message'><span class='arrow'></span> <span class='from'>\"+msg['nom'][j]+\" \"+msg['prenom'][j]+\" : </span> <span class='time'>\"+msg['date'][j]+\"</span> <span class='text'>\"+msg['message'][j]+\"</span></span></li>\";
                                }

                            }


                            jQuery(\"#listmsg\").html(str);



                        }
            });

            setTimeout('refresh();',3000);
        }
        jQuery(document).ready(function(){ refresh() });
        //refresh();
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Tache:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 380,  693 => 374,  685 => 369,  671 => 358,  647 => 337,  614 => 308,  611 => 307,  591 => 290,  579 => 281,  574 => 279,  569 => 277,  556 => 267,  551 => 265,  544 => 261,  535 => 255,  526 => 249,  523 => 248,  516 => 246,  506 => 240,  500 => 238,  494 => 236,  488 => 234,  482 => 232,  480 => 231,  474 => 228,  469 => 226,  463 => 225,  460 => 224,  452 => 219,  449 => 218,  444 => 216,  441 => 215,  439 => 214,  434 => 211,  431 => 210,  421 => 204,  415 => 202,  409 => 200,  403 => 198,  397 => 196,  395 => 195,  389 => 192,  384 => 190,  380 => 188,  372 => 183,  369 => 182,  364 => 180,  361 => 179,  359 => 178,  354 => 175,  351 => 174,  341 => 168,  335 => 166,  329 => 164,  323 => 162,  317 => 160,  315 => 159,  311 => 158,  306 => 156,  301 => 154,  295 => 151,  292 => 150,  290 => 149,  287 => 148,  284 => 147,  280 => 146,  236 => 104,  224 => 98,  220 => 97,  214 => 96,  211 => 95,  203 => 90,  198 => 89,  191 => 85,  186 => 84,  184 => 83,  179 => 80,  176 => 79,  172 => 78,  137 => 48,  133 => 47,  129 => 46,  125 => 45,  120 => 43,  116 => 42,  102 => 31,  97 => 29,  90 => 24,  79 => 19,  75 => 17,  70 => 16,  59 => 11,  55 => 9,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
