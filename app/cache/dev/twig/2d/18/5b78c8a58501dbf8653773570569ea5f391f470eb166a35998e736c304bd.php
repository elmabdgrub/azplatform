<?php

/* BackOfficeBundle:Tache:edit.html.twig */
class __TwigTemplate_2d185b78c8a58501dbf8653773570569ea5f391f470eb166a35998e736c304bd extends Twig_Template
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
        echo "  Modifier une tâche  ";
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
\t\t\t\t\t\t<h2><i class=\"halflings-icon white edit\"></i><span class=\"break\"></span>Modifier tâche</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        echo "\t\t\t\t\t\t ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t\t\t ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t  <fieldset>
\t\t\t\t\t\t\t  

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Titre </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Description </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Date de fin prévisionnelle </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datefinprevis", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Statut </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statuttache", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t  ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t\t <button type=\"reset\" class=\"btn\">Cancel</button>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </fieldset>
\t\t\t\t\t\t";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t\t\t\t\t</div>
</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Tache:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 79,  146 => 72,  136 => 65,  123 => 55,  109 => 44,  97 => 35,  85 => 26,  80 => 25,  69 => 20,  65 => 18,  61 => 17,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
