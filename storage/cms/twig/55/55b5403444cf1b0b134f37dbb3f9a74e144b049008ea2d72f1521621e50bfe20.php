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

/* /websicues/themes/sicues/pages/samples/inversion-proyectos.htm */
class __TwigTemplate_21c1f73288f4edb310c4b65097787e9b36d97eafd8a39d5dd8ab3a7623ddbf7b extends \Twig\Template
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
            <p class=\"lead\">Inversión Proyectos</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">

   <script type=\"text/javascript\">
window.onload = function () {
\tvar chart = new CanvasJS.Chart(\"chartContainer\",
\t{
\t\ttitle:{
\t\t\ttext: \"Presupuesto ejecutado por área del conocimiento 2002 - 2015\"
\t\t},
\t\texportFileName: \"Pie Chart\",
\t\texportEnabled: true,
        animationEnabled: true,
\t\tlegend:{
\t\t\tverticalAlign: \"bottom\",
\t\t\thorizontalAlign: \"center\"
\t\t
\t\t},
\t
\t\tlegend: {
\t\tfontSize: 18
\t},
\t
\t\tdata: [
\t\t{       
\t\t\ttype: \"pie\",
\t\t\tshowInLegend: true,
\t\t\ttoolTipContent: \"{name}: <strong>{y}%</strong>\",
\t\t\tindexLabel: \"{name} {y}%\",
\t\t\tindexLabelFontSize: 15,
\t\t\tdataPoints: [
\t\t\t\t{  y: 38, name: \"Ciencias Exactas\", exploded: true},
\t\t\t\t{  y: 22, name: \"Ciencias de la Salud\"},
\t\t\t\t{  y: 9, name: \"Ciencias Agrìcolas\"},
\t\t\t\t{  y: 8, name: \"Ciencias Sociales\"},
\t\t\t\t{  y: 12,  name: \"Ingeniería y Tecnología\"},
\t\t\t\t{  y: 11,  name: \"Humanidades\"}
\t\t\t]
\t}
\t]
\t});
\tchart.render();
}
</script>
\t<script type=\"text/javascript\" src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/js/canvasjs.min.js");
        echo "\"></script>
\t<div id=\"chartContainer\" style=\"height: 500px; width: 100%;\"></div>


          </div><!--/.col-md-8-->
            <aside class=\"col-md-4\">
                     <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
          
        <div class=\"widget archieve\">
                        ";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("producion-cientifica"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "       
                    </div><!--/.producción científica-->
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/inversion-proyectos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 65,  92 => 52,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CIC-UES</h2>
            <p class=\"lead\">Inversión Proyectos</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">

   <script type=\"text/javascript\">
window.onload = function () {
\tvar chart = new CanvasJS.Chart(\"chartContainer\",
\t{
\t\ttitle:{
\t\t\ttext: \"Presupuesto ejecutado por área del conocimiento 2002 - 2015\"
\t\t},
\t\texportFileName: \"Pie Chart\",
\t\texportEnabled: true,
        animationEnabled: true,
\t\tlegend:{
\t\t\tverticalAlign: \"bottom\",
\t\t\thorizontalAlign: \"center\"
\t\t
\t\t},
\t
\t\tlegend: {
\t\tfontSize: 18
\t},
\t
\t\tdata: [
\t\t{       
\t\t\ttype: \"pie\",
\t\t\tshowInLegend: true,
\t\t\ttoolTipContent: \"{name}: <strong>{y}%</strong>\",
\t\t\tindexLabel: \"{name} {y}%\",
\t\t\tindexLabelFontSize: 15,
\t\t\tdataPoints: [
\t\t\t\t{  y: 38, name: \"Ciencias Exactas\", exploded: true},
\t\t\t\t{  y: 22, name: \"Ciencias de la Salud\"},
\t\t\t\t{  y: 9, name: \"Ciencias Agrìcolas\"},
\t\t\t\t{  y: 8, name: \"Ciencias Sociales\"},
\t\t\t\t{  y: 12,  name: \"Ingeniería y Tecnología\"},
\t\t\t\t{  y: 11,  name: \"Humanidades\"}
\t\t\t]
\t}
\t]
\t});
\tchart.render();
}
</script>
\t<script type=\"text/javascript\" src=\"{{'/assets/js/canvasjs.min.js'|theme}}\"></script>
\t<div id=\"chartContainer\" style=\"height: 500px; width: 100%;\"></div>


          </div><!--/.col-md-8-->
            <aside class=\"col-md-4\">
                     <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
          
        <div class=\"widget archieve\">
                        {%partial 'producion-cientifica'%}       
                    </div><!--/.producción científica-->
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/inversion-proyectos.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 65);
        static $filters = array("theme" => 52);
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
