<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_c84744867bdb6a9b63a3798eaa81046f89a416239ecdbd14e30bf05560ffa642 extends Twig_Template
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
        echo "    Accueil  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content_body($context, array $blocks = array())
    {
        // line 8
        echo "

      
            
     <div class=\"row-fluid sortable\">

        ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours"))) > 3)) {
            // line 15
            echo "        <div class=\"widget span4 red\" onTablet=\"span4\" onDesktop=\"span4\">

          <h3><span class=\"glyphicons calendar white\"><i></i></span> <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail-tache", array("id" => $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 0, array(), "array"), "titre", array()), "html", null, true);
            echo "</a></h3>

          <hr>

          <div class=\"content\">



              ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 0, array(), "array"), "description", array()), "html", null, true);
            echo "
            <br/>

              <span>Date de début : ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 0, array(), "array"), "datedebut", array()), "d/m/Y"), "html", null, true);
            echo "</span>
            <br/>
              <span>Date fin prévisionnelle : ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 0, array(), "array"), "datefinprevis", array()), "d/m/Y"), "html", null, true);
            echo "</span>

            ";
            // line 32
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 0, array(), "array"), "datefinprevis", array())), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"))), "method");
            // line 33
            echo "            ";
            $context["rest"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
            // line 34
            echo "
            <br/>
              <span>Jours restants : ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")), "html", null, true);
            echo " </span>




          </div>
        </div>
  <div class=\"widget span4 blue\" onTablet=\"span4\" onDesktop=\"span4\">

    <h3><span class=\"glyphicons calendar white\"><i></i></span> <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail-tache", array("id" => $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 1, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 1, array(), "array"), "titre", array()), "html", null, true);
            echo "</a></h3>

    <hr>

    <div class=\"content\">



      ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 1, array(), "array"), "description", array()), "html", null, true);
            echo "
      <br/>

      <span>Date de début : ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 1, array(), "array"), "datedebut", array()), "d/m/Y"), "html", null, true);
            echo "</span>
      <br/>
      <span>Date fin prévisionnelle : ";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 1, array(), "array"), "datefinprevis", array()), "d/m/Y"), "html", null, true);
            echo "</span>

      ";
            // line 60
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 1, array(), "array"), "datefinprevis", array())), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"))), "method");
            // line 61
            echo "      ";
            $context["rest"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
            // line 62
            echo "
      <br/>
      <span>Jours restants : ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")), "html", null, true);
            echo " </span>




    </div>
  </div>
  <div class=\"widget span4 yellow\" onTablet=\"span4\" onDesktop=\"span4\">

    <h3><span class=\"glyphicons calendar white\"><i></i></span> <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail-tache", array("id" => $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 2, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 2, array(), "array"), "titre", array()), "html", null, true);
            echo "</a></h3>

    <hr>

    <div class=\"content\">



      ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 2, array(), "array"), "description", array()), "html", null, true);
            echo "
      <br/>

      <span>Date de début : ";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 2, array(), "array"), "datedebut", array()), "d/m/Y"), "html", null, true);
            echo "</span>
      <br/>
      <span>Date fin prévisionnelle : ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 2, array(), "array"), "datefinprevis", array()), "d/m/Y"), "html", null, true);
            echo "</span>

      ";
            // line 88
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")), 2, array(), "array"), "datefinprevis", array())), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"))), "method");
            // line 89
            echo "      ";
            $context["rest"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
            // line 90
            echo "
      <br/>
      <span>Jours restants : ";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")), "html", null, true);
            echo " </span>




    </div>
  </div>
        ";
        } else {
            // line 100
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["encours"]) ? $context["encours"] : $this->getContext($context, "encours")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 101
                echo "        <div class=\"widget span4 yellow\" onTablet=\"span4\" onDesktop=\"span4\">

          <h3><span class=\"glyphicons calendar white\"><i></i></span><a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail-tache", array("id" => $this->getAttribute($context["t"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "titre", array()), "html", null, true);
                echo "</a></h3>

          <hr>

          <div class=\"content\">



            ";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "description", array()), "html", null, true);
                echo "
            <br/>

            <span>Date de début : ";
                // line 114
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "datedebut", array()), "d/m/Y"), "html", null, true);
                echo "</span>
            <br/>
            <span>Date fin prévisionnelle : ";
                // line 116
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "datefinprevis", array()), "d/m/Y"), "html", null, true);
                echo "</span>

            ";
                // line 118
                $context["difference"] = $this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["t"], "datefinprevis", array())), "diff", array(0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"))), "method");
                // line 119
                echo "            ";
                $context["rest"] = $this->getAttribute((isset($context["difference"]) ? $context["difference"] : $this->getContext($context, "difference")), "days", array());
                // line 120
                echo "
            <br/>
            <span>Jours restants : ";
                // line 122
                echo twig_escape_filter($this->env, (isset($context["rest"]) ? $context["rest"] : $this->getContext($context, "rest")), "html", null, true);
                echo " </span>




          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 131
        echo "        



  </div><!--/.fluid-container-->

  <div class=\"row-fluid sortable\">
    <div class=\"box span12\">
      <div class=\"box-header\" data-original-title>
        <h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span> Tâches affectées</h2>
        <div class=\"box-icon\">

        </div>
      </div>

      <div class=\"box-content\">


        <table class=\"table table-striped table-bordered bootstrap-datatable datatable\">
          <thead>
          <tr>

            <th>Titre</th>

            <th>Description </th>
            <th>Date de début</th>
            <th>Date de fin prévisionnelle</th>
            <th>Date fin réele</th>
            <th>Projet </th>
            <th>Statut </th>
            <th>Actions</th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 165
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 166
            echo "            <tr>

              <td class=\"center\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "titre", array()), "html", null, true);
            echo "</td>

              <td class=\"center\">";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "description", array()), "html", null, true);
            echo "</td>
              <td class=\"center\">";
            // line 171
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "datedebut", array()), "d/m/Y"), "html", null, true);
            echo "</td>
              <td class=\"center\">";
            // line 172
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "datefinprevis", array()), "d/m/Y"), "html", null, true);
            echo "</td>
              ";
            // line 173
            if (($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "datefinreel", array()) == null)) {
                // line 174
                echo "
              <td class=\"center\" style=\"font-size: 18px;\"><center>-</center></td>

              ";
            } else {
                // line 178
                echo "              <td class=\"center\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "datefinreel", array()), "d/m/Y"), "html", null, true);
                echo "</td>
              ";
            }
            // line 180
            echo "              <td class=\"center\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail-projet", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "projet", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "projet", array()), "titre", array()), "html", null, true);
            echo "</a></td>

              <td class=\"center\">
                ";
            // line 183
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "statuttache", array()), "id", array()) == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "statuttache", array()), "id", array()) == 4))) {
                // line 184
                echo "                  <span class=\"label label-important\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>

                ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "statuttache", array()), "id", array()) == 2)) {
                // line 187
                echo "                  <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>
                ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "statuttache", array()), "id", array()) == 3)) {
                // line 189
                echo "                  <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "statuttache", array()), "libelle", array()), "html", null, true);
                echo "</span>

                ";
            }
            // line 192
            echo "              </td>

              <td class=\"center\">
                <a class=\"btn btn-info\" href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detail-tache", array("id" => $this->getAttribute($this->getAttribute($context["prod"], "tache", array()), "id", array()))), "html", null, true);
            echo "\">
                  <i class=\"halflings-icon white zoom-in\"></i>
                </a>



              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
          </tbody>
        </table>
      </div>
    </div><!--/span-->

  </div><!--/row-->
  </div>
";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 204,  386 => 195,  381 => 192,  374 => 189,  368 => 187,  361 => 184,  359 => 183,  350 => 180,  344 => 178,  338 => 174,  336 => 173,  332 => 172,  328 => 171,  324 => 170,  319 => 168,  315 => 166,  311 => 165,  275 => 131,  260 => 122,  256 => 120,  253 => 119,  251 => 118,  246 => 116,  241 => 114,  235 => 111,  222 => 103,  218 => 101,  213 => 100,  202 => 92,  198 => 90,  195 => 89,  193 => 88,  188 => 86,  183 => 84,  177 => 81,  164 => 73,  152 => 64,  148 => 62,  145 => 61,  143 => 60,  138 => 58,  133 => 56,  127 => 53,  114 => 45,  102 => 36,  98 => 34,  95 => 33,  93 => 32,  88 => 30,  83 => 28,  77 => 25,  64 => 17,  60 => 15,  58 => 14,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
