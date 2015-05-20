<?php

/* BackOfficeBundle:Accueil:profil.html.twig */
class __TwigTemplate_c3ad1b748c73b4180da8412f74076793a76c6aa32da7aa3942d221da5156b7a6 extends Twig_Template
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
        echo "    Modifier profil  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row-fluid sortable ui-sortable\">

        <div class=\"box-header\" data-original-title=\"\">
            <h2><i class=\"halflings-icon white edit\"></i><span class=\"break\"></span>Profil</h2>
            <div class=\"box-icon\">

            </div>
        </div>
        <div class=\"box-content\">
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "                <div class=\"alert alert-success\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <strong>Succès ! </strong> ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice_erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "                <div class=\"alert alert-error\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <strong>Erreur !</strong> ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            <fieldset>



                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"date01\">Login </label>
                    <div class=\"controls\">
                        <div class=\"input-prepend\">
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

                        </div>
                    </div>
                </div>

                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"date01\">Email </label>
                    <div class=\"controls\">
                        <div class=\"input-prepend\">
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

                        </div>
                    </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"date01\">Mot de passe </label>
                    <div class=\"controls\">
                        <div class=\"input-prepend\">
                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

                        </div>
                    </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"date01\">Mot de passe (validation) </label>
                    <div class=\"controls\">
                        <div class=\"input-prepend\">
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "verif", array()), 'widget', array("attr" => array("class" => "input-prepend")));
        echo "

                        </div>
                    </div>
                </div>


                <div class=\"form-actions\">
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                    <button type=\"reset\" class=\"btn\">Cancel</button>

                </div>


            </fieldset>
            ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Accueil:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 86,  165 => 79,  154 => 71,  142 => 62,  130 => 53,  117 => 43,  105 => 34,  100 => 33,  89 => 28,  85 => 26,  80 => 25,  69 => 20,  65 => 18,  61 => 17,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
