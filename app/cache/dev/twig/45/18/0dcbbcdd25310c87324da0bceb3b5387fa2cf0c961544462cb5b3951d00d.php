<?php

/* BackOfficeBundle:StatutTache:edit.html.twig */
class __TwigTemplate_45180dcbbcdd25310c87324da0bceb3b5387fa2cf0c961544462cb5b3951d00d extends Twig_Template
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
        echo "\tModifier un statut de tâches  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"row-fluid sortable ui-sortable\">

\t\t<div class=\"box-header\" data-original-title=\"\">
\t\t\t<h2><i class=\"halflings-icon white edit\"></i><span class=\"break\"></span>Statut de tâches : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statut"]) ? $context["statut"] : $this->getContext($context, "statut")), "libelle", array()), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"box-icon\">

\t\t\t</div>
\t\t</div>
\t\t<div class=\"box-content\">
\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t<button statut=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t<strong>Succès ! </strong> ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t</div>


\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t<fieldset>
\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"date01\">Libellé </label>
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t<button type=\"reset\" class=\"btn\">Cancel</button>

\t\t\t\t</div>


\t\t\t</fieldset>

\t\t\t";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t\t</div>
\t</div>



";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:StatutTache:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  108 => 40,  97 => 32,  88 => 26,  83 => 25,  72 => 20,  68 => 18,  64 => 17,  55 => 11,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
