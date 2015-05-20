<?php

/* BackOfficeBundle::layout.html.twig */
class __TwigTemplate_1464563848eeebdda20ea50dbc07f2bad4bb6174e50c217c5a0a55fa37b50539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headermenu' => array($this, 'block_headermenu'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content_body' => array($this, 'block_content_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_headermenu($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"nav-no-collapse header-nav\">
\t\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\" id=\"nbr2\">
\t\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu notifications\" id=\"notifs\">

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- start: Notifications Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-calendar\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\" id=\"nbrp\">
\t\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu tasks\" id=\"encours\">


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: Notifications Dropdown -->
\t\t\t\t\t\t<!-- start: Message Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-envelope\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\" id=\"nbr\">
\t\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu messages\" id=\"msgs\">





\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- start: User Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white user\"></i> ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>Account Settings</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin-profil");
        echo "\"><i class=\"halflings-icon user\"></i> Profil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("backlogout");
        echo "\"><i class=\"halflings-icon off\"></i> Logout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: User Dropdown -->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
    }

    // line 67
    public function block_head($context, array $blocks = array())
    {
        // line 68
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "\t<div id=\"content\" class=\"span10\">
 <ul class=\"breadcrumb\">
        <li>
          <i class=\"icon-home\"></i>
          <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("back_office_homepage");
        echo "\">Accueil</a>
          <i class=\"icon-angle-right\"></i>
        </li>

      </ul>

";
        // line 81
        $this->displayBlock('content_body', $context, $blocks);
        // line 88
        echo "\t</div><!--/#content.span10-->

</div>


";
    }

    // line 81
    public function block_content_body($context, array $blocks = array())
    {
        // line 82
        echo "




";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
\tfunction refresh2() {
\t\t\$.ajax({
\t\t\turl: \"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("messages-notification");
        echo "\",
\t\t\tsuccess:
\t\t\t\t\tfunction(retour){

\t\t\t\t\t\tvar msg=retour[\"notificationsm\"];

\t\t\t\t\t\tvar str=\"\";
\t\t\t\t\t\tvar nbr=msg[\"id\"].length;

\t\t\t\t\t\tfor(var j=0 ; j< msg[\"id\"].length; j++){
\t\t\t\t\t\t\tvar id=msg[\"id\"][j];

\t\t\t\t\t\t\tvar img=msg['photo'][j];
\t\t\t\t\t\t\t\tvar pt=msg['idpt'][j];

\t\t\t\t\t\t\tvar date=msg['date'][j];
\t\t\t\t\t\t\tif(msg['type'][j]==1) {

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 117
        echo sprintf($this->env->getExtension('routing')->getPath("view-projet", array("id" => "%s")), "\"+pt+\"");
        echo " '><span class='avatar'><img src='";
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "' alt='Avatar'></span><span class='header'><span class='from'>\" + msg['collaborateur'][j] + \" </span><br><span class='label label-important'> p </span><span class='message'> \"+msg['projet'][j]+\"</span><br/><span class='time'>\" + date + \"</span><br/><span class='message'>\" + msg['message'][j] + \"</span></a></li>\";

\t\t\t\t\t\t\t}else{

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 121
        echo sprintf($this->env->getExtension('routing')->getPath("view-tache", array("id" => "%s")), "\"+pt+\"");
        echo " '><span class='avatar'><img src='";
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "' alt='Avatar'></span><span class='header'><span class='from'>\" + msg['collaborateur'][j] + \" </span><br><span class='label label-success'> t </span><span class='message'> \"+msg['projet'][j]+\"</span><br/><span class='time'>\" + date + \"</span><br/><span class='message'>\" + msg['message'][j] + \"</span></a></li>\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\tjQuery(\"#nbr\").html(nbr);

\t\t\t\t\t\tjQuery(\"#msgs\").html(str);
\t\t\t\t\t\tjQuery(\"#msgs\").append(\"<li><a class='dropdown-menu-sub-footer'><br/></a></li>\");



\t\t\t\t\t}
\t\t});
\t\t\$.ajax({
\t\t\turl: \"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("fichiers-notification");
        echo "\",
\t\t\tsuccess:
\t\t\t\t\tfunction(retour){

\t\t\t\t\t\tvar msg=retour[\"notificationsf\"];

\t\t\t\t\t\tvar str=\"\";
\t\t\t\t\t\tvar nbr=msg[\"id\"].length;

\t\t\t\t\t\tfor(var j=0 ; j< msg[\"id\"].length; j++){
\t\t\t\t\t\t\tvar id=msg[\"id\"][j];

\t\t\t\t\t\t\tvar img=msg['photo'][j];
\t\t\t\t\t\t\tvar pt=msg['idpt'][j];

\t\t\t\t\t\t\tvar date=msg['date'][j];
\t\t\t\t\t\t\tif(msg['type'][j]==1) {

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 153
        echo sprintf($this->env->getExtension('routing')->getPath("view-projet", array("id" => "%s")), "\"+pt+\"");
        echo " '><span class='avatar'><img src='";
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "' alt='Avatar'></span><span class='header'><span class='label label-important'> p </span><span class='message'> \"+msg['projet'][j]+\"</span><br/><span class='time'>\" + date + \"</span><br/><span class='message'>\" + msg['message'][j] + \"</span></a></li>\";

\t\t\t\t\t\t\t}else if(msg['type'][j]==2){

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 157
        echo sprintf($this->env->getExtension('routing')->getPath("view-tache", array("id" => "%s")), "\"+pt+\"");
        echo " '><span class='avatar'><img src='";
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "' alt='Avatar'></span><span class='header'><span class='label label-success'> t </span><span class='message'> \"+msg['projet'][j]+\"</span><br/><span class='time'>\" + date + \"</span><br/><span class='message'>\" + msg['message'][j] + \"</span></a></li>\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse if(msg['type'][j]==3){

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 161
        echo sprintf($this->env->getExtension('routing')->getPath("view-hebergement", array("id" => "%s")), "\"+pt+\"");
        echo " '><span class='avatar'><img src='";
        echo sprintf($this->env->getExtension('assets')->getAssetUrl("%s"), "\"+img+\"");
        echo "' alt='Avatar'></span><span class='header'><span class='label label-warning'> h </span><span class='message'> \"+msg['projet'][j]+\"</span><br/><span class='message'>\" + msg['message'][j] + \"</span></a></li>\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tjQuery(\"#nbr2\").html(nbr);

\t\t\t\t\t\tjQuery(\"#notifs\").html(str);
\t\t\t\t\t\tjQuery(\"#notifs\").append(\"<li><a class='dropdown-menu-sub-footer'><br/></a></li>\");



\t\t\t\t\t}
\t\t});
\t\t\$.ajax({
\t\t\turl: \"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("encours-projet");
        echo "\",
\t\t\tsuccess:
\t\t\t\t\tfunction(retour){

\t\t\t\t\t\tvar msg=retour[\"encours\"];

\t\t\t\t\t\tvar str=\"\";
\t\t\t\t\t\tvar nbr=msg[\"id\"].length;

\t\t\t\t\t\tfor(var j=0 ; j< msg[\"id\"].length; j++){
\t\t\t\t\t\t\tvar id=msg[\"id\"][j];
\t\t\t\t\t\t\tif(msg['prcentaches'][j]>=0 && msg['prcentaches'][j]<33) {

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 188
        echo sprintf($this->env->getExtension('routing')->getPath("view-projet", array("id" => "%s")), "\"+id+\"");
        echo "'><span class='header'><span class='title'>\" + msg['titre'][j] + \"</span><span class='percent'>\" + msg['prcentaches'][j] + \"%</span></span><div class='taskProgress progressSlim red ui-progressbar ui-widget ui-widget-content ui-corner-all' role='progressbar' aria-valuemin='0' aria-valuemax='100' aria-valuenow='\" + msg['prcentaches'][j] + \"'><div class='ui-progressbar-value ui-widget-header ui-corner-left' style='width: \" + msg['prcentaches'][j] + \"%;'></div></div></a></li>\";

\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse if(msg['prcentaches'][j]>=33 && msg['prcentaches'][j]<60) {

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 193
        echo sprintf($this->env->getExtension('routing')->getPath("view-projet", array("id" => "%s")), "\"+id+\"");
        echo "'><span class='header'><span class='title'>\" + msg['titre'][j] + \"</span><span class='percent'>\" + msg['prcentaches'][j] + \"%</span></span><div class='taskProgress progressSlim orange ui-progressbar ui-widget ui-widget-content ui-corner-all' role='progressbar' aria-valuemin='0' aria-valuemax='100' aria-valuenow='\" + msg['prcentaches'][j] + \"'><div class='ui-progressbar-value ui-widget-header ui-corner-left' style='width: \" + msg['prcentaches'][j] + \"%;'></div></div></a></li>\";

\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse if(msg['prcentaches'][j]>=60 && msg['prcentaches'][j]<80) {

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 198
        echo sprintf($this->env->getExtension('routing')->getPath("view-projet", array("id" => "%s")), "\"+id+\"");
        echo "'><span class='header'><span class='title'>\" + msg['titre'][j] + \"</span><span class='percent'>\" + msg['prcentaches'][j] + \"%</span></span><div class='taskProgress progressSlim greenLight ui-progressbar ui-widget ui-widget-content ui-corner-all' role='progressbar' aria-valuemin='0' aria-valuemax='100' aria-valuenow='\" + msg['prcentaches'][j] + \"'><div class='ui-progressbar-value ui-widget-header ui-corner-left' style='width: \" + msg['prcentaches'][j] + \"%;'></div></div></a></li>\";

\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse if(msg['prcentaches'][j]>=80 ) {

\t\t\t\t\t\t\t\tstr += \"<li><a href='";
        // line 203
        echo sprintf($this->env->getExtension('routing')->getPath("view-projet", array("id" => "%s")), "\"+id+\"");
        echo "'><span class='header'><span class='title'>\" + msg['titre'][j] + \"</span><span class='percent'>\" + msg['prcentaches'][j] + \"%</span></span><div class='taskProgress progressSlim green ui-progressbar ui-widget ui-widget-content ui-corner-all' role='progressbar' aria-valuemin='0' aria-valuemax='100' aria-valuenow='\" + msg['prcentaches'][j] + \"'><div class='ui-progressbar-value ui-widget-header ui-corner-left' style='width: \" + msg['prcentaches'][j] + \"%;'></div></div></a></li>\";

\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tjQuery(\"#nbrp\").html(nbr);

\t\t\t\t\t\tjQuery(\"#encours\").html(str);
\t\t\t\t\t\tjQuery(\"#encours\").append(\"<li><a class='dropdown-menu-sub-footer'><br/></a></li>\");



\t\t\t\t\t}
\t\t});
\t\tsetTimeout('refresh2();',3000);
\t}
\tjQuery(document).ready(function(){ refresh2() });
\t//refresh();
</script>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 203,  332 => 198,  324 => 193,  316 => 188,  300 => 175,  281 => 161,  272 => 157,  263 => 153,  242 => 135,  223 => 121,  214 => 117,  193 => 99,  185 => 95,  182 => 94,  173 => 82,  170 => 81,  161 => 88,  159 => 81,  150 => 75,  144 => 71,  141 => 70,  134 => 68,  131 => 67,  120 => 60,  116 => 59,  108 => 53,  102 => 51,  100 => 50,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }
}
