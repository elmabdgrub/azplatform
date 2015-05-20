<?php

/* BackOfficeBundle:Projet:test.html.twig */
class __TwigTemplate_9df1890993924a4734a470834f136fdad64070063bebb6f44ecffb0ae9f5b5c9 extends Twig_Template
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
        echo "    Détails projet  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_content_body($context, array $blocks = array())
    {
        // line 7
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("messages-projet", array("id" => 1));
        echo "\">fdgfdgfdgd</a>
    <div id=\"listmsg\">


</div>
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "



    <script>




        function refresh() {

            \$.ajax({
                url: \"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("messages-projet", array("id" => 1));
        echo "\",
                success:
                        function(retour){

                            var msg=retour[\"messages\"];

                            var str=\"\";

                            for(var j=0 ; j< msg[\"id\"].length; j++){
                                var id=msg[\"id\"][j];
                                if(msg[\"nom\"][j]==\"Vous\"){
                                    str+=\"<li class='right'> <img class='avatar' alt='Dennis Ji' +msg['photo'][j]+> <span class='message'><span class='arrow'></span> <span class='from'>+msg['nom'][j]+' '+msg['prenom'][j]+ : </span> <span class='time'>+msg['date'][j]+</span> <span class='text'>+msg['message'][j]+</span></span></li>\";

                                }
                                else{
                                    str+=\"<li class='left'> <img class='avatar' alt='Dennis Ji' +msg['photo'][j]+> <span class='message'><span class='arrow'></span> <span class='from'>+msg['nom'][j]+' '+msg['prenom'][j]+ : </span> <span class='time'>+msg['date'][j]+</span> <span class='text'>+msg['message'][j]+</span></span></li>\";
                                }

                            }

                            jQuery(\"#listmsg\").html(str);





                        }
            });

            setTimeout('refresh();',2000);
        }
        jQuery(document).ready(function(){ refresh() });
        //refresh();
    </script>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Projet:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  65 => 14,  62 => 13,  51 => 7,  48 => 6,  41 => 4,  38 => 3,  11 => 1,);
    }
}
