<?php

/* BackOfficeBundle:Collaborateur:add.html.twig */
class __TwigTemplate_88de6ecd062b916d2449df3684d96d08488e84c88ade6d179b0704878679f290 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "  Ajouter un collaborateur  ";
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
\t\t\t\t\t\t<h2><i class=\"halflings-icon white edit\"></i><span class=\"break\"></span>Nouveau collaborateur</h2>
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
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice_erreur"), "method"));
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
        echo "
\t\t\t\t\t\t";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t  <fieldset>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"selectError\">Poste</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postecollaborateur", array()), 'widget', array("attr" => array("class" => "chzn-done")));
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Nom </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Prénom </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Email </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Téléphone </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\">Photo </label>
\t\t\t\t\t\t\t  <div class=\"controls\">
\t\t\t\t\t\t\t  <div class=\"input-prepend\">
\t\t\t\t\t\t\t\t";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  <div class=\"control-group\">
\t\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"date01\"> Compétences  :  </label>


\t\t\t\t\t\t\t\t  <ul id=\"myULTags\">
\t\t\t\t\t\t\t\t\t  <!-- Existing list items will be pre-added to the tags. -->

\t\t\t\t\t\t\t\t  </ul>



\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'widget', array("id" => "mySingleField", "attr" => array("class" => "input-prepend")));
        echo "

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t  ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t\t <button type=\"reset\" class=\"btn\">Cancel</button>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </fieldset>
\t\t\t\t\t\t\t";
        // line 113
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>



";
    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        // line 121
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">

\t\t\$(function(){
\t\t\tvar sampleTags = ['objective-c', 'java', 'php', 'android', 'javascript', 'asp', 'ruby', 'python', 'c', 'html', 'css', 'jquery', 'symfony', 'cakephp', 'zend', 'photoshop', 'illustrator', 'after effect'];

\t\t\t//-------------------------------
\t\t\t// Minimal
\t\t\t//-------------------------------
\t\t\t\$('#myTags').tagit();

\t\t\t//-------------------------------
\t\t\t// Single field
\t\t\t//-------------------------------


\t\t\t//-------------------------------
\t\t\t// Preloading data in markup
\t\t\t//-------------------------------
\t\t\t\$('#myULTags').tagit({
\t\t\t\tavailableTags: sampleTags, // this param is of course optional. it's for autocomplete.
\t\t\t\t// configure the name of the input field (will be submitted with form), default: item[tags]
\t\t\t\titemName: 'item',
\t\t\t\tfieldName: 'tags',
\t\t\t\tsingleField: true,
\t\t\t\tsingleFieldNode: \$('#mySingleField')
\t\t\t});

\t\t\t//-------------------------------
\t\t\t// Tag events
\t\t\t//-------------------------------
\t\t\tvar eventTags = \$('#eventTags');

\t\t\tvar addEvent = function(text) {
\t\t\t\t\$('#events_container').append(text + '<br>');
\t\t\t};

\t\t\teventTags.tagit({
\t\t\t\tavailableTags: sampleTags,
\t\t\t\tbeforeTagAdded: function(evt, ui) {
\t\t\t\t\tif (!ui.duringInitialization) {
\t\t\t\t\t\taddEvent('beforeTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tafterTagAdded: function(evt, ui) {
\t\t\t\t\tif (!ui.duringInitialization) {
\t\t\t\t\t\taddEvent('afterTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tbeforeTagRemoved: function(evt, ui) {
\t\t\t\t\taddEvent('beforeTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
\t\t\t\t},
\t\t\t\tafterTagRemoved: function(evt, ui) {
\t\t\t\t\taddEvent('afterTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
\t\t\t\t},
\t\t\t\tonTagClicked: function(evt, ui) {
\t\t\t\t\taddEvent('onTagClicked: ' + eventTags.tagit('tagLabel', ui.tag));
\t\t\t\t},
\t\t\t\tonTagExists: function(evt, ui) {
\t\t\t\t\taddEvent('onTagExists: ' + eventTags.tagit('tagLabel', ui.existingTag));
\t\t\t\t}
\t\t\t});



\t\t});
\t</script>




";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Collaborateur:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 121,  224 => 120,  213 => 113,  203 => 106,  196 => 102,  176 => 85,  164 => 76,  152 => 67,  140 => 58,  128 => 49,  117 => 41,  108 => 35,  104 => 34,  101 => 33,  90 => 28,  86 => 26,  81 => 25,  70 => 20,  66 => 18,  62 => 17,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
