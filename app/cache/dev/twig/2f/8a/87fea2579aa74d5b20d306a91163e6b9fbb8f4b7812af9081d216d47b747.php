<?php

/* BackOfficeBundle:Client:list.html.twig */
class __TwigTemplate_2f8a87fea2579aa74d5b20d306a91163e6b9fbb8f4b7812af9081d216d47b747 extends Twig_Template
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
        echo "  Liste des clients  ";
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
\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Clients</h2>
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
        echo "\t\t\t\t<table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Logo</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Site web</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listclient"]) ? $context["listclient"] : $this->getContext($context, "listclient")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 49
            echo "\t\t\t\t\t\t";
            $context["photo"] = ("logosclient/" . $this->getAttribute($context["client"], "path", array()));
            // line 50
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t";
            // line 51
            if (($this->getAttribute($context["client"], "path", array()) == "")) {
                // line 52
                echo "\t\t\t\t\t\t\t<td class=\"center\"><span class=\"avatar\"><center><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logosclient/logo.png"), "html", null, true);
                echo "\" alt=\"Avatar\" height=\"50\" width=\"50\" ></center></span></td>
\t\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\t\t<td class=\"center\"><span class=\"avatar\"><center><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo"))), "html", null, true);
                echo "\" alt=\"Avatar\" height=\"50\" width=\"50\"></center></span></td>
\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t<td class=\"center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "site", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"center\">

\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit-client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white edit\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete-client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer?')\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white trash\"></i>

\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        return "BackOfficeBundle:Client:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 73,  170 => 66,  164 => 63,  158 => 60,  154 => 59,  150 => 58,  146 => 57,  141 => 56,  135 => 54,  129 => 52,  127 => 51,  124 => 50,  121 => 49,  117 => 48,  102 => 35,  91 => 30,  87 => 28,  82 => 27,  71 => 22,  67 => 20,  63 => 19,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
