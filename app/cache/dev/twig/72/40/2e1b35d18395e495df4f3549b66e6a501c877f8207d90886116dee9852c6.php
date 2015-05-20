<?php

/* BackOfficeBundle:TypeProjet:list.html.twig */
class __TwigTemplate_72402e1b35d18395e495df4f3549b66e6a501c877f8207d90886116dee9852c6 extends Twig_Template
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
        echo "  Liste des types de projets  ";
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
\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Types de projets</h2>
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

\t\t\t\t\t\t<th>Libellé</th>


\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listetypesprojets"]) ? $context["listetypesprojets"] : $this->getContext($context, "listetypesprojets")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 48
            echo "\t\t\t\t\t<tr>

\t\t\t\t\t\t<td class=\"center\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</td>


\t\t\t\t\t\t<td class=\"center\">

\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit-type-projet", array("id" => $this->getAttribute($context["type"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white edit\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete-type-projet", array("id" => $this->getAttribute($context["type"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white trash\"></i>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div><!--/span-->

\t</div><!--/row-->
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:TypeProjet:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  138 => 58,  132 => 55,  124 => 50,  120 => 48,  116 => 47,  102 => 35,  91 => 30,  87 => 28,  82 => 27,  71 => 22,  67 => 20,  63 => 19,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
