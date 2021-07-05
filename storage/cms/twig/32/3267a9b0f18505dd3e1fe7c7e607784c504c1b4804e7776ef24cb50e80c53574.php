<?php

/* /websicues/themes/sicues/pages/samples/inversion-proyectos.htm */
class __TwigTemplate_c61b7f4cb1644300ac527ce3377141f9153dd319265788387dea3d8415072931 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        return array (  92 => 65,  76 => 52,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"blog\" class=\"container\">
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
}
