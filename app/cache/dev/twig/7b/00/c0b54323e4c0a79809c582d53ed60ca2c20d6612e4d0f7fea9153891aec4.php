<?php

/* UserBundle:Security:clogin.html.twig */
class __TwigTemplate_7b00c0b54323e4c0a79809c582d53ed60ca2c20d6612e4d0f7fea9153891aec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::layoutlogin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutlogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"main\" class=\"animated fadeIn\">

    <section id=\"content_wrapper\">

        <div id=\"canvas-wrapper\">
            <canvas height=\"634\" width=\"1366\" id=\"demo-canvas\"></canvas>
        </div>

        <section id=\"content\">
            <div class=\"admin-form theme-info\" id=\"login1\">
                <div class=\"row mb15 table-layout\">
                    <div class=\"col-xs-6 va-m pln\">
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("FilesLogin/logo.png"), "html", null, true);
        echo "\" title=\"AdminDesigns Logo\" class=\"img-responsive w250\">

                    </div>

                </div>
                <div class=\"panel panel-info mt10 br-n\">
                    <div class=\"panel-heading heading-border bg-white\">
                        <span class=\"panel-title hidden\"><i class=\"fa fa-sign-in\"></i>Authentification</span>

                    </div>


                    <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("frontlogin_check");
        echo "\" method=\"post\" >
                        <div class=\"panel-body bg-light p30\">
                            <div class=\"row\">
                                <div class=\"col-sm-7 pr30\">
                                    ";
        // line 35
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 36
            echo "                                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 38
        echo "                                    <div class=\"section\" >
                                        <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Email</label>
                                        <label for=\"username\" class=\"field prepend-icon\">
                                            <input name=\"_username\" id=\"username\" class=\"gui-input\" placeholder=\"Entrer votre login\" type=\"text\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                            <label for=\"username\" class=\"field-icon\"><i class=\"fa fa-user\"></i>
                                            </label>
                                        </label>
                                    </div>

                                    <div class=\"section\">
                                        <label for=\"username\" class=\"field-label text-muted fs18 mb10\">Mot de passe</label>
                                        <label for=\"password\" class=\"field prepend-icon\">
                                            <input name=\"_password\" id=\"password\" class=\"gui-input\" placeholder=\"Entrer votre mot de passe\" type=\"password\">
                                            <label for=\"password\" class=\"field-icon\"><i class=\"fa fa-lock\"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <label class=\"switch block switch-primary pull-left input-align mt10\">
                                        <button type=\"submit\" class=\"button btn-primary mr10 pull-right\">Connexion</button>
                                    </label>
                                </div>



                            </div></div></form></div></div></section></section></div>






    <div class=\"jvectormap-label\"></div>

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Security:clogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  94 => 38,  88 => 36,  86 => 35,  79 => 31,  64 => 19,  50 => 7,  47 => 6,  40 => 4,  37 => 3,  11 => 2,);
    }
}
