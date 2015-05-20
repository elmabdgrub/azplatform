<?php

/* FrontOfficeBundle:Collaborateur:edit.html.twig */
class __TwigTemplate_204a061a7775d0ace8039fe406b9766bc842276838d9128401af15c16ab29b72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BackOfficeBundle::frontlayout.html.twig");
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
        return "BackOfficeBundle::frontlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Modifier un collaborateur  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row-fluid sortable ui-sortable\">

\t\t\t\t\t<div class=\"box-header\" data-original-title=\"\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white edit\"></i><span class=\"break\"></span>collaborateur : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collaborateur"]) ? $context["collaborateur"] : null), "nom", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t\t<strong>Succès ! </strong> ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t\t</div>

        
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice_erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t\t\t<strong>Erreur !</strong> ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t\t\t\t\t\t<fieldset>


\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"date01\">Nom </label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"date01\">Prénom </label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"date01\">Email </label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"date01\">Mot de passe </label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"date01\">Mot de passe (validation) </label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "verif", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"date01\">Téléphone </label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t\t\t\t";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"date01\">Photo </label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<div class=\"input-prepend\">
\t\t\t\t\t\t\t\t\t\t";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn\">Cancel</button>

\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t";
        // line 111
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

\t\t\t\t\t</div>
\t\t\t\t</div>



";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Collaborateur:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 111,  202 => 104,  191 => 96,  179 => 87,  167 => 78,  155 => 69,  143 => 60,  131 => 51,  119 => 42,  108 => 34,  103 => 33,  92 => 28,  88 => 26,  83 => 25,  72 => 20,  68 => 18,  64 => 17,  55 => 11,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
