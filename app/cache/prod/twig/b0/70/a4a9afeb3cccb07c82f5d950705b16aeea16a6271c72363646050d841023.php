<?php

/* ::frontlayout.html.twig */
class __TwigTemplate_b070a4a9afeb3cccb07c82f5d950705b16aeea16a6271c72363646050d841023 extends Twig_Template
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
        // line 25
        echo "\t<!-- end: CSS -->
\t

\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  \t<script src=\"";
        // line 30
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
        // line 57
        echo $this->env->getExtension('routing')->getPath("front_office_homepage");
        echo "\"><span><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo " \" height=\"92\" width=\"150\"></span></a>
\t\t\t\t\t\t\t\t
\t\t\t\t<!-- start: Header Menu -->
\t\t\t\t";
        // line 60
        $this->displayBlock('headermenu', $context, $blocks);
        // line 62
        echo "\t\t\t\t
\t\t\t\t<!-- end: Header Menu -->
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- start: Header -->
\t\t";
        // line 69
        $this->displayBlock('head', $context, $blocks);
        // line 86
        echo "\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>

\t\t\t<!-- start: Content -->

\t\t\t";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 100
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
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 208
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
\t  ";
    }

    // line 60
    public function block_headermenu($context, array $blocks = array())
    {
        // line 61
        echo "\t\t\t\t";
    }

    // line 69
    public function block_head($context, array $blocks = array())
    {
        // line 70
        echo "\t\t<div class=\"container-fluid-full\">
\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t<!-- start: Main Menu -->
\t\t\t<div id=\"sidebar-left\" class=\"span2\">
\t\t\t\t<div class=\"nav-collapse sidebar-nav\">
\t\t\t\t\t<ul class=\"nav nav-tabs nav-stacked main-menu\">


\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- end: Main Menu -->
\t\t\t";
    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        // line 96
        echo "\t\t\t

\t\t\t
        ";
    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        // line 139
        echo "
\t\t<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.0.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.stack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.chosen.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t
\t\t<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cleditor.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.noty.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.elfinder.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.raty.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.gritter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.imagesloaded.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.masonry.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.knob.modified.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/counter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t\t<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/retina.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t\t<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\"src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/highcharts.js"), "html", null, true);
        echo "\"></script>
\t\t <script type=\"text/javascript\"src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/highcharts-3d.js"), "html", null, true);
        echo "\"></script>
\t\t <script type=\"text/javascript\"src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modules/drilldown.js"), "html", null, true);
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
        return "::frontlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 196,  392 => 195,  388 => 194,  384 => 193,  379 => 191,  374 => 189,  369 => 187,  364 => 185,  359 => 183,  354 => 181,  349 => 179,  344 => 177,  339 => 175,  334 => 173,  329 => 171,  324 => 169,  319 => 167,  314 => 165,  309 => 163,  304 => 161,  300 => 160,  296 => 159,  292 => 158,  288 => 157,  283 => 155,  278 => 153,  273 => 151,  268 => 149,  263 => 147,  258 => 145,  253 => 143,  248 => 141,  244 => 140,  241 => 139,  238 => 138,  231 => 96,  228 => 95,  209 => 70,  206 => 69,  202 => 61,  199 => 60,  192 => 22,  188 => 21,  184 => 20,  179 => 19,  176 => 18,  170 => 7,  162 => 208,  160 => 138,  120 => 100,  118 => 95,  107 => 86,  105 => 69,  96 => 62,  94 => 60,  86 => 57,  56 => 30,  49 => 25,  47 => 18,  33 => 7,  25 => 1,);
    }
}
