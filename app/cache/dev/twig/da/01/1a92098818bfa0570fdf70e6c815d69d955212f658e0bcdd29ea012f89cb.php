<?php

/* BackOfficeBundle:Collaborateur:list.html.twig */
class __TwigTemplate_da011a92098818bfa0570fdf70e6c815d69d955212f658e0bcdd29ea012f89cb extends Twig_Template
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
        echo "  Liste des  collaborateurs  ";
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
\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span> Collaborateurs</h2>
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
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t<th>Poste</th>

\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listecollaborateur"]) ? $context["listecollaborateur"] : $this->getContext($context, "listecollaborateur")));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 51
            echo "\t\t\t\t\t";
            $context["photo"] = ("avatars/" . $this->getAttribute($context["collaborateur"], "path", array()));
            // line 52
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t";
            // line 53
            if (($this->getAttribute($context["collaborateur"], "path", array()) == "")) {
                // line 54
                echo "\t\t\t\t\t\t\t<td class=\"center\"><span class=\"avatar\"><center><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($context["collaborateur"], "id", array()))), "html", null, true);
                echo "\"><img class=\"avatar\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/avatar.png"), "html", null, true);
                echo "\" alt=\"Avatar\" height=\"50\" width=\"50\" ></a></center></span></td>
\t\t\t\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t\t\t<td class=\"center\"><span class=\"avatar\"><center><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($context["collaborateur"], "id", array()))), "html", null, true);
                echo "\"><img class=\"avatar\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo"))), "html", null, true);
                echo "\" alt=\"Avatar\" height=\"50\" width=\"50\"></a></center></span></td>
\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t<td class=\"center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "telephone", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["collaborateur"], "postecollaborateur", array()), "libelle", array()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view-collaborateur", array("id" => $this->getAttribute($context["collaborateur"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white zoom-in\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit-collaborateur", array("id" => $this->getAttribute($context["collaborateur"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white edit\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete-collaborateur", array("id" => $this->getAttribute($context["collaborateur"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white trash\"></i>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return "BackOfficeBundle:Collaborateur:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 79,  183 => 72,  177 => 69,  170 => 65,  164 => 62,  160 => 61,  156 => 60,  152 => 59,  147 => 58,  139 => 56,  131 => 54,  129 => 53,  126 => 52,  123 => 51,  119 => 50,  102 => 35,  91 => 30,  87 => 28,  82 => 27,  71 => 22,  67 => 20,  63 => 19,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
