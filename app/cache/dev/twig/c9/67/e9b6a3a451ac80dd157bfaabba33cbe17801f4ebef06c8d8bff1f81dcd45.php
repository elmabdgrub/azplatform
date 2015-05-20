<?php

/* ::layout.html.twig */
class __TwigTemplate_c967e9b6a3a451ac80dd157bfaabba33cbe17801f4ebef06c8d8bff1f81dcd45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headermenu' => array($this, 'block_headermenu'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t
\t<!-- start: Meta -->
\t<meta charset=\"utf-8\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
\t<meta name=\"author\" content=\"Dennis Ji\">
\t<meta name=\"keyword\" content=\"Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
\t<!-- end: Meta -->
\t
\t<!-- start: Mobile Specific -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- end: Mobile Specific -->
\t
\t<!-- start: CSS -->
\t ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "\t<!-- end: CSS -->
\t

\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  \t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://html5shim.googlecode.com/svn/trunk/html5.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<link id=\"ie-style\" href=\"css/ie.css\" rel=\"stylesheet\">
\t<![endif]-->
\t
\t<!--[if IE 9]>
\t\t<link id=\"ie9style\" href=\"css/ie9.css\" rel=\"stylesheet\">
\t<![endif]-->
\t\t
\t<!-- start: Favicon -->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\">
\t<!-- end: Favicon -->
\t
\t\t
\t\t
\t\t
</head>

<body>
\t\t<!-- start: Header -->
\t<div class=\"navbar\">
\t\t<div class=\"navbar-inner\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</a>
\t\t\t\t<a class=\"brand\" href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("back_office_homepage");
        echo "\"><span><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo " \" height=\"92\" width=\"150\"></span></a>
\t\t\t\t\t\t\t\t
\t\t\t\t<!-- start: Header Menu -->
\t\t\t\t";
        // line 64
        $this->displayBlock('headermenu', $context, $blocks);
        // line 66
        echo "\t\t\t\t
\t\t\t\t<!-- end: Header Menu -->
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- start: Header -->
\t\t";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 152
        echo "\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>

\t\t\t<!-- start: Content -->

\t\t\t";
        // line 161
        $this->displayBlock('body', $context, $blocks);
        // line 166
        echo "
\t\t</div>
\t\t\t
\t\t\t\t\t\t
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t
\t\t\t
       

\t
\t


\t
\t<div class=\"common-modal modal fade\" id=\"common-Modal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t<div class=\"modal-content\">
\t\t\t<ul class=\"list-inline item-details\">
\t\t\t\t<li><a href=\"http://themifycloud.com\">Admin templates</a></li>
\t\t\t\t<li><a href=\"http://themescloud.org\">Bootstrap themes</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t
\t<div class=\"clearfix\"></div>

\t
\t<footer>

\t\t<p>
\t\t\t<span style=\"text-align:left;float:left\">&copy; 2015 <a href=\"#\" alt=\"Bootstrap_Metro_Dashboard\">EL MINAOUI ABDERRAHMANE @ AZCreator</a></span>
\t\t\t
\t\t</p>

\t</footer>
\t
\t<!-- start: JavaScript-->
\t ";
        // line 204
        $this->displayBlock('javascripts', $context, $blocks);
        // line 274
        echo "\t<!-- end: JavaScript-->

</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "AZCreator";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "\t<link id=\"bootstrap-style\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link id=\"base-style\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link id=\"base-style-responsive\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

\t\t <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.tagit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tagit.ui-zendesk.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

\t    ";
    }

    // line 64
    public function block_headermenu($context, array $blocks = array())
    {
        // line 65
        echo "\t\t\t\t";
    }

    // line 73
    public function block_head($context, array $blocks = array())
    {
        // line 74
        echo "\t\t<div class=\"container-fluid-full\">
\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t<!-- start: Main Menu -->
\t\t\t<div id=\"sidebar-left\" class=\"span2\">
\t\t\t\t<div class=\"nav-collapse sidebar-nav\">
\t\t\t\t\t<ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Hébérgements</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("ajouter-hebergement");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouvel hébergement</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("liste-hebergement");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des hébergements</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Projets</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("ajouter-projet");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouveau projet</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("liste-projet");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des projets</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Clients</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("ajouter-client");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouveau client</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("liste-client");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des clients</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Collaborateurs</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("ajouter-collaborateur");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouveau collaborateur</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("liste-collaborateur");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des collaborateurs</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Postes collaborateurs</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("ajouter-poste-col");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouveau poste</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("liste-poste-col");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des postes</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Types de projets</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("ajouter-type-projet");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouveau type de projets</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("liste-type-projet");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des types de projets</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Statuts de projets</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("ajouter-statut-projet");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouveau statut de projets</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("liste-statut-projet");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des statuts de projets</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Statuts de tâches</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("ajouter-statut-tache");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouveau statut de tâches</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("liste-statut-tache");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des statuts de tâches</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Types de dépenses</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("ajouter-type-depense");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Nouveau type de dépenses</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("liste-type-depense");
        echo "\"><i class=\"icon-list-alt\"></i></i><span class=\"hidden-tablet\"> Liste des types de dépenses</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>

\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- end: Main Menu -->
\t\t\t";
    }

    // line 161
    public function block_body($context, array $blocks = array())
    {
        // line 162
        echo "\t\t\t

\t\t\t
        ";
    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        // line 205
        echo "
\t\t<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t\t<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.chosen.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t
\t\t<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.elfinder.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.raty.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.imagesloaded.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.masonry.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.knob.modified.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/counter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/retina.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t\t<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\"src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/highcharts.js"), "html", null, true);
        echo "\"></script>
\t\t <script type=\"text/javascript\"src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/highcharts-3d.js"), "html", null, true);
        echo "\"></script>
\t\t <script type=\"text/javascript\"src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modules/drilldown.js"), "html", null, true);
        echo "\"></script>
\t\t <script type=\"text/javascript\"src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tag-it.js"), "html", null, true);
        echo "\"></script>




\t\t <script>
\t\t\t \$( \"#statut\" ).click(function() {
\t\t\t\t \$( \"#changerstatut\" ).toggle( \"slow\" );
\t\t\t });
\t\t </script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 263,  522 => 262,  518 => 261,  514 => 260,  510 => 259,  505 => 257,  500 => 255,  495 => 253,  490 => 251,  485 => 249,  480 => 247,  475 => 245,  470 => 243,  465 => 241,  460 => 239,  455 => 237,  450 => 235,  445 => 233,  440 => 231,  435 => 229,  430 => 227,  426 => 226,  422 => 225,  418 => 224,  414 => 223,  409 => 221,  404 => 219,  399 => 217,  394 => 215,  389 => 213,  384 => 211,  379 => 209,  374 => 207,  370 => 206,  367 => 205,  364 => 204,  357 => 162,  354 => 161,  339 => 141,  335 => 140,  326 => 134,  322 => 133,  313 => 127,  309 => 126,  300 => 120,  296 => 119,  287 => 113,  283 => 112,  274 => 106,  270 => 105,  261 => 99,  257 => 98,  248 => 92,  244 => 91,  235 => 85,  231 => 84,  219 => 74,  216 => 73,  212 => 65,  209 => 64,  202 => 26,  198 => 25,  192 => 22,  188 => 21,  184 => 20,  179 => 19,  176 => 18,  170 => 7,  162 => 274,  160 => 204,  120 => 166,  118 => 161,  107 => 152,  105 => 73,  96 => 66,  94 => 64,  86 => 61,  56 => 34,  49 => 29,  47 => 18,  33 => 7,  25 => 1,);
    }
}
