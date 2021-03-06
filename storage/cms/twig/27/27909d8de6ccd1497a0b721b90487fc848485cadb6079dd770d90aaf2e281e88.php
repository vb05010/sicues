<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /websicues/themes/sicues/pages/samples/aprobados-y-finalizados.htm */
class __TwigTemplate_9c18c1d04577995af430e602e8e50a57babf7d871619e8b1fa908942980653a3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CIC-UES</h2>
            <p class=\"lead\">Proyectos Aprobados y Finalizados</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
            
 <script type=\"text/javascript\">
  window.onload = function () {
    var chart = new CanvasJS.Chart(\"chartContainer\", {

      theme: \"theme2\",
            
      title:{
        text: \"graf.1 2002 - 2015\"              
      },
      axisX:{
      \t title: \"Secretaría de Investigación, Universidad de El Salvador SIC-UES | www.sic.ues.edu.sv \",
        titleFontSize: 11,
        labelFontSize: 10,
      },
\t\texportFileName: \"Proyectos aprobados y finalizados\",
\t\texportEnabled: true,
        animationEnabled: true,
\t\tlegend:{
\t\tverticalAlign: \"bottom\",
\t\thorizontalAlign: \"center\",
\t\tfontSize: 18
\t\t},

      data: [  //array of dataSeries     
      { //dataSeries - first quarter
 /*** Change type \"column\" to \"bar\", \"area\", \"line\" or \"pie\"***/        
       type: \"column\",
       toolTipContent: \"{name}: <strong>{y}%</strong>\", \t
\t   indexLabel: \"{y}%\",
\t   indexLabelFontSize: 12,
       name: \"Aprobados\",
       showInLegend: true,
       dataPoints: [
       { label: \"Química y Farmacia\", y: 6 },
       { label: \"Ciencias Naturales y Matemática\", y: 17 },
       { label: \"Economía\", y: 4 },                                    
       { label: \"Ingeniería y Arquitectura\", y: 12 },
       { label: \"Medicina\", y: 13 },
       { label: \"Jurisprudencia\", y: 2 },
       { label: \"Agronomía\", y: 7 },
      
       
       ]
     },

     { //dataSeries - second quarter

      type: \"column\",
      toolTipContent: \"{name}: <strong>{y}%</strong>\",
      indexLabel: \"{y}%\",
      indexLabelFontSize: 12,
      name: \"Finalizados\", 
      showInLegend: true,               
      dataPoints: [
      { label: \"Química y Farmacia\", y: 3 },
      { label: \"Ciencias Naturales y Matemática\", y: 4 },
      { label: \"Economía\", y: 2 },                                    
      { label: \"Ingeniería y Arquitectura\", y: 4 },
      { label: \"Medicina\", y: 4 },
      { label: \"Jurisprudencia\", y: 0.4 },
      { label: \"Agronomía\", y: 3 },
      
     
      ]
    }
    ],
 /** Set axisY properties here*/
    axisY:{
      //prefix: \"\$\",
      suffix: \"%\"
    }    
  });

chart.render();

var chart = new CanvasJS.Chart(\"chartContainer2\", {

      theme: \"theme2\",
            
      title:{
       text: \"graf. 2\"              
      },
\t\texportFileName: \"Proyectos aprobados y finalizados\",
\t\texportEnabled: true,
        animationEnabled: true,
\t\tlegend:{
\t\tverticalAlign: \"bottom\",
\t\thorizontalAlign: \"center\",
\t\tfontSize: 18
\t\t},
\taxisX:{
      \t title: \"Secretaría de Investigación, Universidad de El Salvador SIC-UES | www.sic.ues.edu.sv \",
        titleFontSize: 11,
        labelFontSize: 10,
      },\t
      data: [  //array of dataSeries     
      { //dataSeries - first quarter
 /*** Change type \"column\" to \"bar\", \"area\", \"line\" or \"pie\"***/        
       type: \"column\",
       toolTipContent: \"{name}: <strong>{y}%</strong>\", \t
\t   indexLabel: \"{y}%\",
\t   indexLabelFontSize: 12,
       name: \"Aprobados\",
       showInLegend: true,
       dataPoints: [
       { label: \"M. Occidente\", y: 11 },
       { label: \"M. Paracentral\", y: 1 },
       { label: \"M. Oriente\", y: 3 },                                    
       { label: \"Humanidades\", y: 13 },
       { label: \"Odontolog{ia\", y: 1 },
       { label: \"Centros de Investigación y otros\", y: 11 },
       ]
     },

     { //dataSeries - second quarter

      type: \"column\",
      toolTipContent: \"{name}: <strong>{y}%</strong>\",
      indexLabel: \"{y}%\",
      indexLabelFontSize: 12,
      name: \"Finalizados\", 
      showInLegend: true,               
      dataPoints: [
      { label: \"M. Occidente\", y: 3 },
      { label: \"M. Paracentral\", y: 0.4 },
      { label: \"M. Oriente\", y: 2 },                                    
      { label: \"Humanidades\", y: 6 },
      { label: \"Odontología\", y: 0.4 },
      { label: \"Centros de Investigación y otros\", y: 3 },
      ]
    }
    ],
 /** Set axisY properties here*/
    axisY:{
      //prefix: \"\$\",
      suffix: \"%\"
    }    
  });

chart.render();
}

</script>
<script type=\"text/javascript\" src=\"";
        // line 154
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/canvasjs.min.js");
        echo "\"></script>
  <div id=\"chartContainer\" style=\"height: 350px; width: 100%;\"></div>
  <div id=\"chartContainer2\" style=\"height: 350px; width: 100%;\"></div>
 </div><!--fin /.col-md-8-->
     

                <aside class=\"col-md-4\">
                \t
                     <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
    \t\t\t\t
    \t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                         ";
        // line 170
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menudescargas"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 171
        echo "                         ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tagsproyectos"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 172
        echo "                    </div><!--/.producción científica-->
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/aprobados-y-finalizados.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 172,  217 => 171,  213 => 170,  194 => 154,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CIC-UES</h2>
            <p class=\"lead\">Proyectos Aprobados y Finalizados</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
            
 <script type=\"text/javascript\">
  window.onload = function () {
    var chart = new CanvasJS.Chart(\"chartContainer\", {

      theme: \"theme2\",
            
      title:{
        text: \"graf.1 2002 - 2015\"              
      },
      axisX:{
      \t title: \"Secretaría de Investigación, Universidad de El Salvador SIC-UES | www.sic.ues.edu.sv \",
        titleFontSize: 11,
        labelFontSize: 10,
      },
\t\texportFileName: \"Proyectos aprobados y finalizados\",
\t\texportEnabled: true,
        animationEnabled: true,
\t\tlegend:{
\t\tverticalAlign: \"bottom\",
\t\thorizontalAlign: \"center\",
\t\tfontSize: 18
\t\t},

      data: [  //array of dataSeries     
      { //dataSeries - first quarter
 /*** Change type \"column\" to \"bar\", \"area\", \"line\" or \"pie\"***/        
       type: \"column\",
       toolTipContent: \"{name}: <strong>{y}%</strong>\", \t
\t   indexLabel: \"{y}%\",
\t   indexLabelFontSize: 12,
       name: \"Aprobados\",
       showInLegend: true,
       dataPoints: [
       { label: \"Química y Farmacia\", y: 6 },
       { label: \"Ciencias Naturales y Matemática\", y: 17 },
       { label: \"Economía\", y: 4 },                                    
       { label: \"Ingeniería y Arquitectura\", y: 12 },
       { label: \"Medicina\", y: 13 },
       { label: \"Jurisprudencia\", y: 2 },
       { label: \"Agronomía\", y: 7 },
      
       
       ]
     },

     { //dataSeries - second quarter

      type: \"column\",
      toolTipContent: \"{name}: <strong>{y}%</strong>\",
      indexLabel: \"{y}%\",
      indexLabelFontSize: 12,
      name: \"Finalizados\", 
      showInLegend: true,               
      dataPoints: [
      { label: \"Química y Farmacia\", y: 3 },
      { label: \"Ciencias Naturales y Matemática\", y: 4 },
      { label: \"Economía\", y: 2 },                                    
      { label: \"Ingeniería y Arquitectura\", y: 4 },
      { label: \"Medicina\", y: 4 },
      { label: \"Jurisprudencia\", y: 0.4 },
      { label: \"Agronomía\", y: 3 },
      
     
      ]
    }
    ],
 /** Set axisY properties here*/
    axisY:{
      //prefix: \"\$\",
      suffix: \"%\"
    }    
  });

chart.render();

var chart = new CanvasJS.Chart(\"chartContainer2\", {

      theme: \"theme2\",
            
      title:{
       text: \"graf. 2\"              
      },
\t\texportFileName: \"Proyectos aprobados y finalizados\",
\t\texportEnabled: true,
        animationEnabled: true,
\t\tlegend:{
\t\tverticalAlign: \"bottom\",
\t\thorizontalAlign: \"center\",
\t\tfontSize: 18
\t\t},
\taxisX:{
      \t title: \"Secretaría de Investigación, Universidad de El Salvador SIC-UES | www.sic.ues.edu.sv \",
        titleFontSize: 11,
        labelFontSize: 10,
      },\t
      data: [  //array of dataSeries     
      { //dataSeries - first quarter
 /*** Change type \"column\" to \"bar\", \"area\", \"line\" or \"pie\"***/        
       type: \"column\",
       toolTipContent: \"{name}: <strong>{y}%</strong>\", \t
\t   indexLabel: \"{y}%\",
\t   indexLabelFontSize: 12,
       name: \"Aprobados\",
       showInLegend: true,
       dataPoints: [
       { label: \"M. Occidente\", y: 11 },
       { label: \"M. Paracentral\", y: 1 },
       { label: \"M. Oriente\", y: 3 },                                    
       { label: \"Humanidades\", y: 13 },
       { label: \"Odontolog{ia\", y: 1 },
       { label: \"Centros de Investigación y otros\", y: 11 },
       ]
     },

     { //dataSeries - second quarter

      type: \"column\",
      toolTipContent: \"{name}: <strong>{y}%</strong>\",
      indexLabel: \"{y}%\",
      indexLabelFontSize: 12,
      name: \"Finalizados\", 
      showInLegend: true,               
      dataPoints: [
      { label: \"M. Occidente\", y: 3 },
      { label: \"M. Paracentral\", y: 0.4 },
      { label: \"M. Oriente\", y: 2 },                                    
      { label: \"Humanidades\", y: 6 },
      { label: \"Odontología\", y: 0.4 },
      { label: \"Centros de Investigación y otros\", y: 3 },
      ]
    }
    ],
 /** Set axisY properties here*/
    axisY:{
      //prefix: \"\$\",
      suffix: \"%\"
    }    
  });

chart.render();
}

</script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/canvasjs.min.js'|theme }}\"></script>
  <div id=\"chartContainer\" style=\"height: 350px; width: 100%;\"></div>
  <div id=\"chartContainer2\" style=\"height: 350px; width: 100%;\"></div>
 </div><!--fin /.col-md-8-->
     

                <aside class=\"col-md-4\">
                \t
                     <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
    \t\t\t\t
    \t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                         {%partial 'menudescargas'%}
                         {% partial 'tagsproyectos' %}
                    </div><!--/.producción científica-->
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/aprobados-y-finalizados.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 170);
        static $filters = array("theme" => 154);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
