<?php

/* BackOfficeBundle:Projet:list.html.twig */
class __TwigTemplate_8f05f6747263cbd6f6d71c29f0716eaaf726c37a27d9640283e6494b53284221 extends Twig_Template
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
        echo "  Liste des projets  ";
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
\t\t<div class=\"box span12\">
\t\t\t<div class=\"box-header\" data-original-title>
\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Projets</h2>
\t\t\t\t<div class=\"box-icon\">

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"box-content\">
\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t<strong>Succès ! </strong> ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t</div>


\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice_erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "\t\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t<strong>Erreur !</strong> ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t</div>


\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>

\t\t\t\t\t\t<th>Titre</th>

\t\t\t\t\t\t<th>Type du projet</th>
\t\t\t\t\t\t<th>Client</th>
\t\t\t\t\t\t<th>Date début</th>
\t\t\t\t\t\t<th>Date de fin</th>
\t\t\t\t\t\t<th>Date de livraison</th>
\t\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t\t<th>Statut</th>

\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeprojet"]) ? $context["listeprojet"] : $this->getContext($context, "listeprojet")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 55
            echo "\t\t\t\t\t<tr>

\t\t\t\t\t\t<td class=\"center\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t<td class=\"center\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "typeprojet", array()), "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "datedebut", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "datefin", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "datelivraison", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "montant", array()), "html", null, true);
            echo "DH</td>
\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t";
            // line 66
            if (($this->getAttribute($this->getAttribute($context["projet"], "statutprojet", array()), "id", array()) == 1)) {
                // line 67
                echo "\t\t\t\t\t\t\t\t<span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statutprojet", array()), "libelle", array()), "html", null, true);
                echo "</span>

\t\t\t\t\t\t\t";
            } elseif ((($this->getAttribute($this->getAttribute($context["projet"], "statutprojet", array()), "id", array()) == 2) || ($this->getAttribute($this->getAttribute($context["projet"], "statutprojet", array()), "id", array()) == 4))) {
                // line 70
                echo "\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statutprojet", array()), "libelle", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t";
            } elseif ((($this->getAttribute($this->getAttribute($context["projet"], "statutprojet", array()), "id", array()) == 3) || ($this->getAttribute($this->getAttribute($context["projet"], "statutprojet", array()), "id", array()) == 5))) {
                // line 72
                echo "\t\t\t\t\t\t\t\t<span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "statutprojet", array()), "libelle", array()), "html", null, true);
                echo "</span>

\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t</td>

\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-projet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white zoom-in\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit-projet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white edit\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div><!--/span-->

\t</div><!--/row-->
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Projet:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 89,  195 => 82,  188 => 78,  183 => 75,  176 => 72,  170 => 70,  163 => 67,  161 => 66,  156 => 64,  152 => 63,  148 => 62,  144 => 61,  140 => 60,  136 => 59,  131 => 57,  127 => 55,  123 => 54,  102 => 35,  91 => 30,  87 => 28,  82 => 27,  71 => 22,  67 => 20,  63 => 19,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
