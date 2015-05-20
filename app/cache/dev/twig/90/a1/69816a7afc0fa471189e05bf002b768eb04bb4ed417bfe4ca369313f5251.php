<?php

/* BackOfficeBundle:Accueil:index.html.twig */
class __TwigTemplate_90a169816a7afc0fa471189e05bf002b768eb04bb4ed417bfe4ca369313f5251 extends Twig_Template
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
        echo "  Accueil  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row-fluid\">

        <div class=\"span3 statbox blue\" onTablet=\"span6\" onDesktop=\"span3\">
          <div ><span><h1>Projets en <br/> cours</h1></span></div>
          <div class=\"number\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statprojets"]) ? $context["statprojets"] : $this->getContext($context, "statprojets")), 0, array(), "array"), "html", null, true);
        echo "<i ></i></div>
          <div class=\"title\"> </div>
          <div class=\"footer\">
            <a href=\"#\"> </a>
          </div>  
        </div>
        <div class=\"span3 statbox green\" onTablet=\"span6\" onDesktop=\"span3\">
         <div ><span><h1>Projets <br/> terminés </h1></span></div>
          <div class=\"number\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statprojets"]) ? $context["statprojets"] : $this->getContext($context, "statprojets")), 3, array(), "array"), "html", null, true);
        echo "<i ></i></div>
          <div class=\"title\"> </div>
          <div class=\"footer\">
            <a href=\"#\"> </a>
          </div>
        </div>
        <div class=\"span3 statbox red noMargin\" onTablet=\"span6\" onDesktop=\"span3\">
         <div ><span><h1>Projets en <br/> retard </h1></span></div>
          <div class=\"number\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statprojets"]) ? $context["statprojets"] : $this->getContext($context, "statprojets")), 4, array(), "array"), "html", null, true);
        echo "<i ></i></div>
          <div class=\"title\"> </div>
          <div class=\"footer\">
            <a href=\"#\"> </a>
          </div>
        </div>
        <div class=\"span3 statbox yellow \" onTablet=\"span6\" onDesktop=\"span3\">
          <div ><span><h1>Projets non <br/>démarrés </h1></span></div>
          <div class=\"number\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statprojets"]) ? $context["statprojets"] : $this->getContext($context, "statprojets")), 1, array(), "array"), "html", null, true);
        echo "<i ></i></div>
          <div class=\"title\"> </div>
          <div class=\"footer\">
            <a href=\"#\"> </a>
          </div>
        </div>  
        
      </div>    

      <div class=\"row-fluid portable\">
        <div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Total des projets par types</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
                    <div id=\"totptype\" ></div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->

\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Total des projets par clients</h2>
\t\t\t\t\t\t<div class=\"box-icon\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
                    <div id=\"totpclient\" ></div>
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t<!--/span-->


      </div>
      
            
      <div class=\"row-fluid portable\">
         <div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Chiffre d'affaires par clients</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
                    <div id=\"caclients\" ></div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->

\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Rentabilité par types de projets</h2>
\t\t\t\t\t\t<div class=\"box-icon\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
                    <div id=\"typerentable\" ></div>
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t<!--/span-->

      </div>
      
      <div class=\"row-fluid\">

 <div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Temps de réalisation des projets par types de projets</h2>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">

    <div id=\"container\" >
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/span-->

\t\t\t\t<div class=\"box span6\">
\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t<h2><i class=\"halflings-icon white align-justify\"></i><span class=\"break\"></span>Total des dépenses par types</h2>
\t\t\t\t\t\t<div class=\"box-icon\">

\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-minimize\"><i class=\"halflings-icon white chevron-up\"></i></a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-close\"><i class=\"halflings-icon white remove\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-content\">
                    <div id=\"typedepenses\" ></div>
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t<!--/span-->

      
      </div>
      <div class=\"row-fluid hideInIE8 circleStats\">
        

            
      </div>    
      <div class=\"row-fluid sortable\">
\t\t<div class=\"box span12\">
\t\t\t<div class=\"box-header\" data-original-title>
\t\t\t\t<h2><i class=\"halflings-icon white user\"></i><span class=\"break\"></span>Hébergements web </h2>
\t\t\t\t<div class=\"box-icon\">

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"box-content\">

<div id=\"hebergements\" ></div>


\t\t\t</div>
\t\t</div><!--/span-->

\t</div><!--/row-->

      <div class=\"row-fluid\"> 

        <a class=\"quick-button metro yellow span2\">
          <i class=\"icon-group\"></i>
          <p>Collaborateurs</p>
          <span class=\"badge\">";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "collaborateurs", array(), "array"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"quick-button metro red span2\">
          <i class=\"icon-road\"></i>
          <p>Projets</p>
          <span class=\"badge\">";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "projets", array(), "array"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"quick-button metro green span2\">
          <i class=\"icon-tag\"></i>
          <p>Types de projets</p>
          <span class=\"badge\">";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "typesprj", array(), "array"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"quick-button metro blue span2\">
          <i class=\"icon-calendar\"></i>
          <p>Tâches</p>
          <span class=\"badge\">";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "taches", array(), "array"), "html", null, true);
        echo "</span>
        </a>

        <a class=\"quick-button metro pink span2\">
          <i class=\"icon-cloud\"></i>
          <p>Hébergements</p>
          <span class=\"badge\">";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "hebergement", array(), "array"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"quick-button metro black span2\">
          <i class=\"icon-briefcase\"></i>
          <p>Clients</p>
           <span class=\"badge\">";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")), "clients", array(), "array"), "html", null, true);
        echo "</span>
        </a>
        
        <div class=\"clearfix\"></div>
                
      </div><!--/row-->
      
       

  </div><!--/.fluid-container-->


";
    }

    // line 214
    public function block_javascripts($context, array $blocks = array())
    {
        // line 215
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">


    \$(function () {
        \$('#totptype').highcharts({
            chart: {
                type: 'column',
                margin: 75,
                options3d: {
                    enabled: true,
                    alpha: 5,
                    beta: 18,
                    depth: 70
                }
            },
            title: {
                text: ''
            },

            plotOptions: {
                column: {
                    depth: 35
                }
            },
            xAxis: {
                categories: [";
        // line 241
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["typesprojets"]) ? $context["typesprojets"] : $this->getContext($context, "typesprojets")), "type", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "'";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "'";
            } else {
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "',";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                title: {
                    text: null
                },
                labels: {
                    style: {

                                fontSize:'9px'
                    }
                }
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: null
                }
            },
            series: [{
                name: 'Nombre de projets',
                data:  [";
        // line 260
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["typesprojets"]) ? $context["typesprojets"] : $this->getContext($context, "typesprojets")), "tot", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tot"]) {
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["tot"], "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $context["tot"], "html", null, true);
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                color: '#07A5C0'
            }]
        });
    });
    \$(function () {
                \$('#totpclient').highcharts({
                    chart: {
                        type: 'column',
                        margin: 75,
                        options3d: {
                            enabled: true,
                            alpha: 5,
                            beta: 18,
                            depth: 70
                        }
                    },
                    title: {
                        text: ''
                    },

                    plotOptions: {
                        column: {
                            depth: 35
                        }
                    },
                    xAxis: {
                        categories: [";
        // line 287
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["clientstotprj"]) ? $context["clientstotprj"] : $this->getContext($context, "clientstotprj")), "client", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            echo "'";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["client"], "html", null, true);
                echo "'";
            } else {
                echo twig_escape_filter($this->env, $context["client"], "html", null, true);
                echo "',";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                            title: {
                    text: null
                },
                labels: {
                    style: {

                        fontSize:'9px'
                    }
                }
            },
            yAxis: {
        allowDecimals: false,
                title: {
            text: null
        }
    },
    series: [{
        name: 'Nombre de projets',
        data:  [";
        // line 306
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["clientstotprj"]) ? $context["clientstotprj"] : $this->getContext($context, "clientstotprj")), "tot", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tot"]) {
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["tot"], "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $context["tot"], "html", null, true);
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
        color: '#E25A59'
    }]
    });
    });
    \$(function () {
        \$('#caclients').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: '',
                style: {
                    display: 'none'
                }
            },
            subtitle: {
                text: '',
                style: {
                    display: 'none'
                }
            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b> : {point.y} DH'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: \"Pourcentage du chiffre d'affaires total\",
                data: [
                    ";
        // line 351
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["clientstotprj"]) ? $context["clientstotprj"] : $this->getContext($context, "clientstotprj")), "client", array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 352
            echo "                    ['";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["clientstotprj"]) ? $context["clientstotprj"] : $this->getContext($context, "clientstotprj")), "client", array(), "array"), $context["key"], array(), "array"), "html", null, true);
            echo "',   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["clientstotprj"]) ? $context["clientstotprj"] : $this->getContext($context, "clientstotprj")), "ca", array(), "array"), $context["key"], array(), "array"), "html", null, true);
            echo "],
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                ]
            }]
        });
    });

    \$(function () {
                \$('#typerentable').highcharts({
                    chart: {
                        type: 'column',
                        margin: 75,
                        options3d: {
                            enabled: true,
                            alpha: 0,
                            beta: 25,
                            depth: 70
                        }
                    },
                    title: {
                        text: ' '
                    },

                    plotOptions: {
                        column: {
                            depth: 25
                        },
                        dataLabels: {
                            enabled: true,
                            format: '{point.y} DH'
                        }
                    },
                    xAxis: {
                        categories: [";
        // line 385
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["typesprojets"]) ? $context["typesprojets"] : $this->getContext($context, "typesprojets")), "type", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "'";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "'";
            } else {
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "',";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                            title: {
                    text: null
                }
            },
            yAxis: {
        title: {
            text: null
        }
    },
    series: [{
        name: 'Montant total des projets (en DH)',
        data: [";
        // line 397
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["typesprojets"]) ? $context["typesprojets"] : $this->getContext($context, "typesprojets")), "cap", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cap"]) {
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["cap"], "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $context["cap"], "html", null, true);
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
        color: '#084B82'

    },

        { name: 'Total des dépenses (en DH)',
            data: [";
        // line 403
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["typesprojets"]) ? $context["typesprojets"] : $this->getContext($context, "typesprojets")), "depenses", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["depenses"]) {
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["depenses"], "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $context["depenses"], "html", null, true);
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depenses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
            color: '#BB2E32'

        }]
    });
    });
    \$(function () {
        Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
            return {
                radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
                stops: [
                    [0, color],
                    [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                ]
            };
        });

        \$('#typedepenses').highcharts({
            chart: {
                type: 'pie',

                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            colors: ['#4F7CBF', '#23EA3A', '#EF964F', '#83CCFF', '#CCD058'],
            title: {
                text: '',
                style: {
                    display: 'none'
                }
            },
            subtitle: {
                text: '',
                style: {
                    display: 'none'
                }
            },
            tooltip: {
                pointFormat: '<b>{point.percentage:.1f}% ({point.y} DH)</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b> : {point.y} DH',
                        style: {  fontSize: '9px' }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: \" \",
                data: [
                    ";
        // line 462
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["typedepenses"]) ? $context["typedepenses"] : $this->getContext($context, "typedepenses")), "lib", array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 463
            echo "                    ['";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typedepenses"]) ? $context["typedepenses"] : $this->getContext($context, "typedepenses")), "lib", array(), "array"), $context["key"], array(), "array"), "html", null, true);
            echo "',   ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typedepenses"]) ? $context["typedepenses"] : $this->getContext($context, "typedepenses")), "tot", array(), "array"), $context["key"], array(), "array"), "html", null, true);
            echo "],
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "                ]
            }]
        });
    });
    \$(function () {
        \$('#container').highcharts({
        chart: {
            type: 'pie',

            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: true
        },
        title: {
            text: ' '
        },
            tooltip: {
                pointFormat: '<b>{point.name}: {point.y} jours</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
            series: [{

                name: 'Types de projets',
                data: [

                    ";
        // line 502
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["joursprojets"]) ? $context["joursprojets"] : $this->getContext($context, "joursprojets"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 503
            echo "                    {
                        name: '";
            // line 504
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "',
                        y: ";
            // line 505
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["joursprojets"]) ? $context["joursprojets"] : $this->getContext($context, "joursprojets")), $context["key"], array(), "array"), "moy", array(), "array"), "html", null, true);
            echo ",
                        drilldown: '";
            // line 506
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "'

                    }
                    ";
            // line 509
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " ] ";
            } else {
                echo " , ";
            }
            // line 510
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        echo "

            }],
            drilldown: {
                series: [
                    ";
        // line 516
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["joursprojets"]) ? $context["joursprojets"] : $this->getContext($context, "joursprojets"))));
        foreach ($context['_seq'] as $context["_key"] => $context["cle"]) {
            // line 517
            echo "                    {
                        name: 'Projets',
                        id: '";
            // line 519
            echo twig_escape_filter($this->env, $context["cle"], "html", null, true);
            echo "',
                        data: [
                            ";
            // line 521
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["joursprojets"]) ? $context["joursprojets"] : $this->getContext($context, "joursprojets")), $context["cle"], array(), "array"), "projets", array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 522
                echo "                            ['";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joursprojets"]) ? $context["joursprojets"] : $this->getContext($context, "joursprojets")), $context["cle"], array(), "array"), "projets", array(), "array"), $context["key"], array(), "array"), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joursprojets"]) ? $context["joursprojets"] : $this->getContext($context, "joursprojets")), $context["cle"], array(), "array"), "jours", array(), "array"), $context["key"], array(), "array"), "html", null, true);
                echo "],

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 525
            echo "
                        ]
                    },

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "
                ]  }
    });
    });

    \$(function () {
        \$('#hebergements').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: ' '
            },
            subtitle: {
                text: ' '
            },
            xAxis: {
                categories: [";
        // line 547
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hebergementsexpir"]) ? $context["hebergementsexpir"] : $this->getContext($context, "hebergementsexpir")), "nom", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["heb"]) {
            echo "'";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["heb"], "html", null, true);
                echo "'";
            } else {
                echo twig_escape_filter($this->env, $context["heb"], "html", null, true);
                echo "',";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jours',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' Jours'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: \"Nombre de jours avant l'expiration\",
                data: [";
        // line 588
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hebergementsexpir"]) ? $context["hebergementsexpir"] : $this->getContext($context, "hebergementsexpir")), "jours", array(), "array"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["heb"]) {
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, $context["heb"], "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $context["heb"], "html", null, true);
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                color: '#084B82'
            }]
        });
    });
</script>




";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1068 => 588,  989 => 547,  970 => 530,  960 => 525,  948 => 522,  944 => 521,  939 => 519,  935 => 517,  931 => 516,  924 => 511,  910 => 510,  904 => 509,  898 => 506,  894 => 505,  890 => 504,  887 => 503,  870 => 502,  831 => 465,  820 => 463,  816 => 462,  721 => 403,  679 => 397,  629 => 385,  596 => 354,  585 => 352,  581 => 351,  500 => 306,  443 => 287,  380 => 260,  323 => 241,  293 => 215,  290 => 214,  273 => 201,  265 => 196,  256 => 190,  248 => 185,  240 => 180,  232 => 175,  90 => 36,  79 => 28,  68 => 20,  57 => 12,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
