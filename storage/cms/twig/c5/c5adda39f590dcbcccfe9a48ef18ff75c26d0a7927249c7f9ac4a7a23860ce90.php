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

/* /websicues/themes/sicues/pages/samples/eficiencia-terminal.htm */
class __TwigTemplate_8a81c13463418e3eb6e2ff125c8f9307b237a0c5769bac1f9587d121e0321522 extends \Twig\Template
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
            <p class=\"lead\">Consejo de Investigaciones Científicas de la Universidad de El Salvador</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
             
<script type=\"text/javascript\">
\twindow.onload = function () {
\t\tvar chart = new CanvasJS.Chart(\"chartContainer\",
\t\t{
\t\t\tzoomEnabled: false,
                        animationEnabled: true,
\t\t\ttitle:{
\t\t\t\ttext: \"Eficiencia Terminal\"
\t\t\t},
\t\t\t
\t\t\t\tsubtitles:[
\t\t{
\t\t\ttext: \"2002 - 2015\"
\t\t\t//Uncomment properties below to see how they behave
\t\t\t//fontColor: \"red\",
\t\t\t//fontSize: 30
\t\t}
\t\t],
\t\t
\t\t exportFileName: \"Eficiencia-terminal(2002-2015)\",
\t\t\texportEnabled: true,
        \tanimationEnabled: true,
\t\t\tlegend:{
\t\t\tverticalAlign: \"bottom\",
\t\t\thorizontalAlign: \"center\"
\t\t},
\t\t
          axisY2:{
\t\t\t\tvalueFormatString:\"#,##0.##\",
\t\t\t\tsuffix: \"%\",
            //maximum: 1.2,
            //\tinterval: .2,
\t\t\t\tinterlacedColor: \"#F5F5F5\",
\t\t\t\tgridColor: \"#D7D7D7\",      
\t \t\t\ttickColor: \"#D7D7D7\"\t\t\t\t\t\t\t\t
\t\t\t},
\t\t\taxisY2:{
        labelFontSize: 14,
      },
      
                        theme: \"theme2\",
                        toolTip:{
                                shared: true
                        },
\t\t\tlegend:{
\t\t\t\tverticalAlign: \"bottom\",
\t\t\t\thorizontalAlign: \"center\",
\t\t\t\tfontSize: 15,
\t\t\t\tfontFamily: \"Lucida Sans Unicode\"

\t\t\t},
\t\t\taxisX:{
        title: \"Secretaría de Investigación, Universidad de El Salvador SIC-UES | https://sic.ues.edu.sv \",
        titleFontSize: 11,
        labelFontSize:14,
      },
\t\t\tdata: [
\t\t\t{        
\t\t\t\ttype: \"line\",
\t\t\t\ttoolTipContent: \"{name}: {y}%\",
\t\t\t\tindexLabel: \"{y}%\",
\t\t\t\tindexLabelFontSize: 11,
\t\t\t\tlineThickness:3,
\t\t\t\taxisYType:\"secondary\",
\t\t\t\tshowInLegend: true,           
\t\t\t\tname: \"Presentados\", 
\t\t\t\tdataPoints: [
\t\t\t\t{ x: new Date(2002, 0), y: 100 },
\t\t\t\t{ x: new Date(2003, 0), y: 100 },
\t\t\t\t{ x: new Date(2004, 0), y: 100 },
\t\t\t\t{ x: new Date(2005, 0), y: 100 },
\t\t\t\t{ x: new Date(2006, 0), y: 100 },
\t\t\t\t{ x: new Date(2007, 0), y: 100 },
\t\t\t\t{ x: new Date(2008, 0), y: 100 },
\t\t\t\t{ x: new Date(2009, 0), y: 100 },
\t\t\t\t{ x: new Date(2010, 0), y: 100 },
\t\t\t\t{ x: new Date(2011, 0), y: 100 },
\t\t\t\t{ x: new Date(2012, 0), y: 100 },
\t\t\t\t{ x: new Date(2013, 0), y: 100 },
\t\t\t\t{ x: new Date(2014, 0), y: 100 },
\t\t\t\t{ x: new Date(2015, 0), y: 100 }


\t\t\t\t]
\t\t\t},
\t\t\t{        
\t\t\t\ttype: \"line\",
\t\t\t\ttoolTipContent: \"{name}: {y}%\",
\t\t\t\tindexLabel: \"{y}%\",
\t\t\t\tindexLabelFontSize: 11,
\t\t\t\tlineThickness:3,
\t\t\t\tshowInLegend: true,           
\t\t\t\tname: \"Aprobados\",
\t\t\t\taxisYType:\"secondary\",
\t\t\t\tdataPoints: [
\t\t\t\t{ x: new Date(2002, 0), y: 66 },
\t\t\t\t{ x: new Date(2003, 0), y: 80 },
\t\t\t\t{ x: new Date(2004, 0), y: 61 },
\t\t\t\t{ x: new Date(2005, 0), y: 50 },
\t\t\t\t{ x: new Date(2006, 0), y: 65 },
\t\t\t\t{ x: new Date(2007, 0), y: 26 },
\t\t\t\t{ x: new Date(2008, 0), y: 71 },
\t\t\t\t{ x: new Date(2009, 0), y: 27 },
\t\t\t\t{ x: new Date(2010, 0), y: 60 },
\t\t\t\t{ x: new Date(2011, 0), y: 55 },
\t\t\t\t{ x: new Date(2012, 0), y: 71 },
\t\t\t\t{ x: new Date(2013, 0), y: 43 },
\t\t\t\t{ x: new Date(2014, 0), y: 93 },
\t\t\t\t{ x: new Date(2015, 0), y: 50 }


\t\t\t\t]
\t\t\t},
              
\t\t\t{        
\t\t\t\ttype: \"line\",
\t\t\t\ttoolTipContent: \"{name}: {y}%\",
\t\t\t\tindexLabel: \"{y}%\",
\t\t\t\tindexLabelFontSize: 11,
\t\t\t\tlineThickness:3,
\t\t\t\tshowInLegend: true,           
\t\t\t\tname: \"Registrados\",        
\t\t\t\taxisYType:\"secondary\",
\t\t\t\tdataPoints: [
\t\t\t\t{ x: new Date(2002, 0), y:0 },
\t\t\t\t{ x: new Date(2003, 0), y: 0 },
\t\t\t\t{ x: new Date(2004, 0), y: 0},
\t\t\t\t{ x: new Date(2005, 0), y: 0 },
\t\t\t\t{ x: new Date(2006, 0), y: 0 },
\t\t\t\t{ x: new Date(2007, 0), y: 18 },
\t\t\t\t{ x: new Date(2008, 0), y: 27 },
\t\t\t\t{ x: new Date(2009, 0), y: 9  },
\t\t\t\t{ x: new Date(2010, 0), y: 9 },
\t\t\t\t{ x: new Date(2011, 0), y: 18 },
\t\t\t\t{ x: new Date(2012, 0), y: 9 },
\t\t\t\t{ x: new Date(2013, 0), y: 0 },
\t\t\t\t{ x: new Date(2014, 0), y: 0 },
\t\t\t\t{ x: new Date(2015, 0), y: 9 },


\t\t\t\t]
\t\t\t},
{        
\t\t\t\ttype: \"line\",
\t\t\t\ttoolTipContent: \"{name}: {y}%\",
\t\t\t\tindexLabel: \"{y}%\",
\t\t\t\tindexLabelFontSize: 11,
\t\t\t\tlineThickness:3,
\t\t\t\tshowInLegend: true,           
\t\t\t\tname: \"Finalizados\",        
\t\t\t\taxisYType:\"secondary\",
\t\t\t\tdataPoints: [
\t\t\t\t{ x: new Date(2002, 0), y: 62 },
\t\t\t\t{ x: new Date(2003, 0), y: 37 },
\t\t\t\t{ x: new Date(2004, 0), y: 56 },
\t\t\t\t{ x: new Date(2005, 0), y: 44 },
\t\t\t\t{ x: new Date(2006, 0), y: 41 },
\t\t\t\t{ x: new Date(2007, 0), y: 63 },
\t\t\t\t{ x: new Date(2008, 0), y: 30 },
\t\t\t\t{ x: new Date(2009, 0), y: 33 },
\t\t\t\t{ x: new Date(2010, 0), y: 33 },
\t\t\t\t{ x: new Date(2011, 0), y: 17 },
\t\t\t\t{ x: new Date(2012, 0), y: 25 },
\t\t\t\t{ x: new Date(2013, 0), y: 0 },
\t\t\t\t{ x: new Date(2014, 0), y: 0 },
\t\t\t\t{ x: new Date(2015, 0), y: 0 },


\t\t\t\t]
\t\t\t}


\t\t\t],
          legend: {
            cursor:\"pointer\",
            itemclick : function(e) {
              if (typeof(e.dataSeries.visible) === \"undefined\" || e.dataSeries.visible) {
              e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
             
              chart.render();
            }
          }
        });

chart.render();
}
</script>
<script type=\"text/javascript\" src=\"";
        // line 202
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/canvasjs.min.js");
        echo "\"></script>
<div id=\"chartContainer\" style=\"height: 500px; width: 100%;\"></div>
          </div><!--/.col-md-8-->
          
                <aside class=\"col-md-4\">
                     <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
    \t\t\t\t
    \t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                        ";
        // line 215
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("producion-cientifica"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "           
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/eficiencia-terminal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 215,  242 => 202,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CIC-UES</h2>
            <p class=\"lead\">Consejo de Investigaciones Científicas de la Universidad de El Salvador</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
             
<script type=\"text/javascript\">
\twindow.onload = function () {
\t\tvar chart = new CanvasJS.Chart(\"chartContainer\",
\t\t{
\t\t\tzoomEnabled: false,
                        animationEnabled: true,
\t\t\ttitle:{
\t\t\t\ttext: \"Eficiencia Terminal\"
\t\t\t},
\t\t\t
\t\t\t\tsubtitles:[
\t\t{
\t\t\ttext: \"2002 - 2015\"
\t\t\t//Uncomment properties below to see how they behave
\t\t\t//fontColor: \"red\",
\t\t\t//fontSize: 30
\t\t}
\t\t],
\t\t
\t\t exportFileName: \"Eficiencia-terminal(2002-2015)\",
\t\t\texportEnabled: true,
        \tanimationEnabled: true,
\t\t\tlegend:{
\t\t\tverticalAlign: \"bottom\",
\t\t\thorizontalAlign: \"center\"
\t\t},
\t\t
          axisY2:{
\t\t\t\tvalueFormatString:\"#,##0.##\",
\t\t\t\tsuffix: \"%\",
            //maximum: 1.2,
            //\tinterval: .2,
\t\t\t\tinterlacedColor: \"#F5F5F5\",
\t\t\t\tgridColor: \"#D7D7D7\",      
\t \t\t\ttickColor: \"#D7D7D7\"\t\t\t\t\t\t\t\t
\t\t\t},
\t\t\taxisY2:{
        labelFontSize: 14,
      },
      
                        theme: \"theme2\",
                        toolTip:{
                                shared: true
                        },
\t\t\tlegend:{
\t\t\t\tverticalAlign: \"bottom\",
\t\t\t\thorizontalAlign: \"center\",
\t\t\t\tfontSize: 15,
\t\t\t\tfontFamily: \"Lucida Sans Unicode\"

\t\t\t},
\t\t\taxisX:{
        title: \"Secretaría de Investigación, Universidad de El Salvador SIC-UES | https://sic.ues.edu.sv \",
        titleFontSize: 11,
        labelFontSize:14,
      },
\t\t\tdata: [
\t\t\t{        
\t\t\t\ttype: \"line\",
\t\t\t\ttoolTipContent: \"{name}: {y}%\",
\t\t\t\tindexLabel: \"{y}%\",
\t\t\t\tindexLabelFontSize: 11,
\t\t\t\tlineThickness:3,
\t\t\t\taxisYType:\"secondary\",
\t\t\t\tshowInLegend: true,           
\t\t\t\tname: \"Presentados\", 
\t\t\t\tdataPoints: [
\t\t\t\t{ x: new Date(2002, 0), y: 100 },
\t\t\t\t{ x: new Date(2003, 0), y: 100 },
\t\t\t\t{ x: new Date(2004, 0), y: 100 },
\t\t\t\t{ x: new Date(2005, 0), y: 100 },
\t\t\t\t{ x: new Date(2006, 0), y: 100 },
\t\t\t\t{ x: new Date(2007, 0), y: 100 },
\t\t\t\t{ x: new Date(2008, 0), y: 100 },
\t\t\t\t{ x: new Date(2009, 0), y: 100 },
\t\t\t\t{ x: new Date(2010, 0), y: 100 },
\t\t\t\t{ x: new Date(2011, 0), y: 100 },
\t\t\t\t{ x: new Date(2012, 0), y: 100 },
\t\t\t\t{ x: new Date(2013, 0), y: 100 },
\t\t\t\t{ x: new Date(2014, 0), y: 100 },
\t\t\t\t{ x: new Date(2015, 0), y: 100 }


\t\t\t\t]
\t\t\t},
\t\t\t{        
\t\t\t\ttype: \"line\",
\t\t\t\ttoolTipContent: \"{name}: {y}%\",
\t\t\t\tindexLabel: \"{y}%\",
\t\t\t\tindexLabelFontSize: 11,
\t\t\t\tlineThickness:3,
\t\t\t\tshowInLegend: true,           
\t\t\t\tname: \"Aprobados\",
\t\t\t\taxisYType:\"secondary\",
\t\t\t\tdataPoints: [
\t\t\t\t{ x: new Date(2002, 0), y: 66 },
\t\t\t\t{ x: new Date(2003, 0), y: 80 },
\t\t\t\t{ x: new Date(2004, 0), y: 61 },
\t\t\t\t{ x: new Date(2005, 0), y: 50 },
\t\t\t\t{ x: new Date(2006, 0), y: 65 },
\t\t\t\t{ x: new Date(2007, 0), y: 26 },
\t\t\t\t{ x: new Date(2008, 0), y: 71 },
\t\t\t\t{ x: new Date(2009, 0), y: 27 },
\t\t\t\t{ x: new Date(2010, 0), y: 60 },
\t\t\t\t{ x: new Date(2011, 0), y: 55 },
\t\t\t\t{ x: new Date(2012, 0), y: 71 },
\t\t\t\t{ x: new Date(2013, 0), y: 43 },
\t\t\t\t{ x: new Date(2014, 0), y: 93 },
\t\t\t\t{ x: new Date(2015, 0), y: 50 }


\t\t\t\t]
\t\t\t},
              
\t\t\t{        
\t\t\t\ttype: \"line\",
\t\t\t\ttoolTipContent: \"{name}: {y}%\",
\t\t\t\tindexLabel: \"{y}%\",
\t\t\t\tindexLabelFontSize: 11,
\t\t\t\tlineThickness:3,
\t\t\t\tshowInLegend: true,           
\t\t\t\tname: \"Registrados\",        
\t\t\t\taxisYType:\"secondary\",
\t\t\t\tdataPoints: [
\t\t\t\t{ x: new Date(2002, 0), y:0 },
\t\t\t\t{ x: new Date(2003, 0), y: 0 },
\t\t\t\t{ x: new Date(2004, 0), y: 0},
\t\t\t\t{ x: new Date(2005, 0), y: 0 },
\t\t\t\t{ x: new Date(2006, 0), y: 0 },
\t\t\t\t{ x: new Date(2007, 0), y: 18 },
\t\t\t\t{ x: new Date(2008, 0), y: 27 },
\t\t\t\t{ x: new Date(2009, 0), y: 9  },
\t\t\t\t{ x: new Date(2010, 0), y: 9 },
\t\t\t\t{ x: new Date(2011, 0), y: 18 },
\t\t\t\t{ x: new Date(2012, 0), y: 9 },
\t\t\t\t{ x: new Date(2013, 0), y: 0 },
\t\t\t\t{ x: new Date(2014, 0), y: 0 },
\t\t\t\t{ x: new Date(2015, 0), y: 9 },


\t\t\t\t]
\t\t\t},
{        
\t\t\t\ttype: \"line\",
\t\t\t\ttoolTipContent: \"{name}: {y}%\",
\t\t\t\tindexLabel: \"{y}%\",
\t\t\t\tindexLabelFontSize: 11,
\t\t\t\tlineThickness:3,
\t\t\t\tshowInLegend: true,           
\t\t\t\tname: \"Finalizados\",        
\t\t\t\taxisYType:\"secondary\",
\t\t\t\tdataPoints: [
\t\t\t\t{ x: new Date(2002, 0), y: 62 },
\t\t\t\t{ x: new Date(2003, 0), y: 37 },
\t\t\t\t{ x: new Date(2004, 0), y: 56 },
\t\t\t\t{ x: new Date(2005, 0), y: 44 },
\t\t\t\t{ x: new Date(2006, 0), y: 41 },
\t\t\t\t{ x: new Date(2007, 0), y: 63 },
\t\t\t\t{ x: new Date(2008, 0), y: 30 },
\t\t\t\t{ x: new Date(2009, 0), y: 33 },
\t\t\t\t{ x: new Date(2010, 0), y: 33 },
\t\t\t\t{ x: new Date(2011, 0), y: 17 },
\t\t\t\t{ x: new Date(2012, 0), y: 25 },
\t\t\t\t{ x: new Date(2013, 0), y: 0 },
\t\t\t\t{ x: new Date(2014, 0), y: 0 },
\t\t\t\t{ x: new Date(2015, 0), y: 0 },


\t\t\t\t]
\t\t\t}


\t\t\t],
          legend: {
            cursor:\"pointer\",
            itemclick : function(e) {
              if (typeof(e.dataSeries.visible) === \"undefined\" || e.dataSeries.visible) {
              e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
             
              chart.render();
            }
          }
        });

chart.render();
}
</script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/canvasjs.min.js'|theme }}\"></script>
<div id=\"chartContainer\" style=\"height: 500px; width: 100%;\"></div>
          </div><!--/.col-md-8-->
          
                <aside class=\"col-md-4\">
                     <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
    \t\t\t\t
    \t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                        {%partial 'producion-cientifica'%}           
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/eficiencia-terminal.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 215);
        static $filters = array("theme" => 202);
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
