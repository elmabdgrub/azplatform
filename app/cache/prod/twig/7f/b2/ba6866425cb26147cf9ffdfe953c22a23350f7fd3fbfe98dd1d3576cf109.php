<?php

/* ::layoutlogin.html.twig */
class __TwigTemplate_7fb2ba6866425cb26147cf9ffdfe953c22a23350f7fd3fbfe98dd1d3576cf109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html><head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">

    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "


</head>
<body class=\"external-page sb-l-c sb-r-c onload-check\">
";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "<!-- end: JavaScript-->

</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "AZCreator-Platform";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/css.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/ie_split1.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/ie_split2.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/ie_split3.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/admin-forms.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "


";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/jquery-1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/jquery-ui.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/bootstrap.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/EasePack.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/TweenLite.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/login.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/utility.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/demo.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2,
                y: window.innerHeight / 3.3
            },
        });


    });
</script>

";
    }

    public function getTemplateName()
    {
        return "::layoutlogin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  139 => 41,  135 => 40,  130 => 38,  126 => 37,  122 => 36,  117 => 34,  112 => 32,  107 => 31,  104 => 30,  97 => 25,  94 => 24,  88 => 17,  83 => 15,  79 => 14,  75 => 13,  69 => 11,  66 => 10,  60 => 6,  53 => 68,  51 => 30,  48 => 29,  46 => 24,  39 => 19,  37 => 10,  30 => 6,  23 => 1,);
    }
}
