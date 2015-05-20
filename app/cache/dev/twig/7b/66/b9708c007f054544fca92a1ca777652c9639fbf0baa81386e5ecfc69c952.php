<?php

/* BackOfficeBundle:Hebergement:view.html.twig */
class __TwigTemplate_7b66b9708c007f054544fca92a1ca777652c9639fbf0baa81386e5ecfc69c952 extends Twig_Template
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
        echo "   Hébergement  ";
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
        echo "\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white font\"></i><span class=\"break\"></span>Fiche hébergement</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\" >

\t\t\t\t\t\t<div class=\"box span8\" ontablet=\"span8\" ondesktop=\"span8\">


\t\t\t\t\t\t<ul class=\"list\">


\t\t\t\t\t\t\t\t<strong>Nom : </strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "nom", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Description : </strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "description", array()), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Date de création : </strong>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "datecreation", array()), "d/m/Y"), "html", null, true);
        echo "<br><br>
\t\t\t\t\t\t\t\t<strong>Date d'expiration : </strong>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "dateexpiration", array()), "d/m/Y"), "html", null, true);
        echo " <br><br>
\t\t\t\t\t\t\t\t<strong>Date de renouvellement : </strong>";
        // line 42
        if (($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "daterenouv", array()) == null)) {
            echo "-";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "daterenouv", array()), "d/m/Y"), "html", null, true);
        }
        echo " <br><br>

\t\t\t\t\t\t</ul>

</div>
<div class=\"box span4\" ontablet=\"span6\" ondesktop=\"span4\">
\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Client</h2>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t<ul class=\"dashboard-list\">
\t\t\t\t\t\t";
        // line 54
        $context["photo"] = ("logosclient/" . $this->getAttribute($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "client", array()), "path", array()));
        // line 55
        echo "\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "client", array()), "path", array()) == "")) {
            // line 58
            echo "\t<img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logosclient/logo.png"), "html", null, true);
            echo "\" alt=\"Avatar\" height=\"50\" width=\"50\" >
";
        } else {
            // line 60
            echo "\t<img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo"))), "html", null, true);
            echo "\" alt=\"Avatar\" height=\"50\" width=\"50\">
";
        }
        // line 62
        echo "

\t\t\t\t\t\t\t\t<strong>Nom : </strong> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "client", array()), "nom", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t<strong>Téléphone : </strong>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "client", array()), "telephone", array()), "html", null, true);
        echo " <br>

\t\t\t\t\t\t\t\t<strong>Email : </strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "client", array()), "email", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t<center><strong>Site Web : </strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "client", array()), "site", array()), "html", null, true);
        echo "</center>
\t\t\t\t\t\t\t\t<strong>Adresse : </strong>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "client", array()), "adresse", array()), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t</div>
\t\t\t\t</div><!--/span-->
\t\t\t\t</div>

</div><!--/span-->
";
        // line 78
        $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "dateexpiration", array())), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"))), "method");
        // line 79
        echo "\t\t\t\t\t\t";
        $context["rest"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
        // line 80
        echo "\t\t\t\t\t\t";
        if ((((isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")) <= 40) && ((isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")) > 0))) {
            // line 81
            echo "\t<div class=\"span3 statbox red\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t<div ><span><h1>Jours <br/>restants</h1></span></div>
\t\t<div class=\"number\">";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")), "html", null, true);
            echo "<i class=\"\"></i></div>
\t\t<div class=\"title\">Jours</div>
\t\t<div class=\"footer\">

\t\t\t<a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notifier-hebergement", array("id" => $this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "id", array()), "client" => $this->getAttribute($this->getAttribute((isset($context["hebergement"]) ? $context["hebergement"] : $this->getContext($context, "hebergement")), "client", array()), "id", array()))), "html", null, true);
            echo "\"> Notifier le client</a>
\t\t</div>
\t</div>
";
        } elseif ((((isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")) > 40) && ((isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")) <= 80))) {
            // line 91
            echo "\t<div class=\"span3 statbox yellow\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t<div ><span><h1>Jours <br/> restants</h1></span></div>
\t\t<div class=\"number\">";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")), "html", null, true);
            echo "<i class=\"\"></i></div>
\t\t<div class=\"title\">Jours</div>
\t\t<div class=\"footer\">

\t\t</div>
\t</div>
";
        } elseif (((isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")) <= 0)) {
            // line 100
            echo "\t<div class=\"span3 statbox black\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t<div ><span><h1>Hébergement expiré</h1></span></div>

\t\t<div class=\"footer\">

\t\t</div>
\t</div>
";
        } else {
            // line 108
            echo "\t<div class=\"span3 statbox green\" onTablet=\"span6\" onDesktop=\"span3\">
\t\t<div ><span><h1>Jours <br/> restants</h1></span></div>
\t\t<div class=\"number\">";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")), "html", null, true);
            echo "<i class=\"\"></i></div>
\t\t<div class=\"title\">Jours</div>
\t\t<div class=\"footer\">

\t\t</div>
\t</div>
";
        }
        // line 117
        echo "
\t\t\t\t\t</div>























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

    public function getTemplateName()
    {
        return "BackOfficeBundle:Hebergement:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 117,  248 => 110,  244 => 108,  234 => 100,  224 => 93,  220 => 91,  213 => 87,  206 => 83,  202 => 81,  199 => 80,  196 => 79,  194 => 78,  182 => 69,  178 => 68,  174 => 67,  169 => 65,  165 => 64,  161 => 62,  155 => 60,  149 => 58,  147 => 57,  143 => 55,  141 => 54,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  93 => 27,  82 => 22,  78 => 20,  74 => 19,  63 => 14,  59 => 12,  55 => 11,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
