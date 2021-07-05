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

/* /websicues/themes/sicues/pages/samples/estado-proyecto.htm */
class __TwigTemplate_0eba93864ab922e1bad59d40b182e1f0835adcb27c68ff04f5b007050a7bc5ae extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-search\" aria-hidden=\"true\"></i> CONSULTAR PROYECTOS DE INVESTIGACIÓN</h2>
            <p class=\"lead\">Consulte el estado de su proyecto de investigación </p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
    
    <!-- busqueda avanzada-->
    <form id=\"consulta\" method=\"get\" action=\"#\">
      <div class=\"row\" style=\"margin-bottom: 10px; \">
\t\t<div class=\"col-md-3\">
\t\t\t<label>Facultad:</label>
\t\t\t<select name=\"facultad\" id=\"facultad\" class=\"form-control\">
\t\t\t\t<option value=\"\" selected>Selecionar</option>
\t\t\t\t<option value=\"1\">Oficinas Centrales</option>
\t\t\t\t<option value=\"14\">CENSALUD</option>
\t\t\t\t<option value=\"2\">Ingeniería y Arquitectura</option>
\t\t\t\t<option value=\"3\">Ciencias y Humanidades</option>
\t\t\t\t<option value=\"4\">Medicina</option>
\t\t\t\t<option value=\"5\">Odontología</option>
\t\t\t\t<option value=\"6\">Economía</option>
\t\t\t\t<option value=\"7\">Ciencias Naturales y Matemática</option>
\t\t\t\t<option value=\"8\">Jurisprudencia y Ciencias Sociales</option>
\t\t\t\t<option value=\"9\">Química y Farmacia</option>
\t\t\t\t<option value=\"10\">Ciencias Agronómicas</option>
\t\t\t\t<option value=\"11\">Multidisciplinaria Oriental</option>
\t\t\t\t<option value=\"12\">Multidisciplinaria Paracentral</option>
\t\t\t\t<option value=\"13\">Multidisciplinaria Occidental</option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"col-md-3\">
\t\t\t<label>Año Convocatoria:</label>
\t\t\t<select name=\"numconvocatoria\" id=\"numconvocatoria\" class=\"form-control\">
\t\t\t\t<option value=\"16\">2017</option>
\t\t\t\t\t<option value=\"15\">2016</option>
\t\t\t</select>
\t\t</div>

    \t<div class=\"col-md-3\">
\t\t\t<label>Iniciar la:</label>
\t\t\t<button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Búsqueda</button>
\t\t</div>
\t</div>       
    </form><!-- fin de busqueda avanzada-->
<table id=\"di\" class=\"display\" width=\"100%\" cellspacing=\"0\" data-page-length='10'>

<thead>
  <tr class=\"table-active\">
  \t<th>Código</th>
    <th>Título del proyecto</th>
    <th>Área de Conocimiento</th>
    <th>Estado Proyecto</th>
  </tr>
</thead>
<tbody>
  <tr>
  \t<td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                \t<a href=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/directorio-investigadores");
        echo "\"><button class=\"btn btn-warning\">Búsqueda Perfil Investigador (a) <span class=\"glyphicon glyphicon-search\"></span></button></a>
                   <!-- <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Investigador (a)\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
    \t\t\t\t\t ";
        // line 79
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tagsproyectos"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 80
        echo "    \t\t\t\t\t ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cronologia-secretarios"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "                         ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cronologia-directores-cicues"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "                         
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
    
  ";
        // line 94
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 95
        echo "  <script>
    \$(document).ready(function() {
    var table= \$('#di').DataTable({
\t\t    \tajax: {
\t\turl: 'https://sipc.sic.ues.edu.sv/indicadores-publicos/proyectos?numero=16',
\t\tdataSrc: ''
\t\t},
\t\t\"columns\": [
\t\t{ \"data\": \"codigo\" },
\t\t{ \"data\": \"titulo\" },
\t\t{ \"data\": \"area\" },
\t\t{ \"data\": \"estado\" }
\t\t],
    \tlanguage:{
    \"decimal\":        \"\",
    \"emptyTable\":     \"No hay datos disponibles en la tabla\",
    \"info\":           \"Mostrando _START_ de _END_ de _TOTAL_ entradas\",
    \"infoEmpty\":      \"Mostrando 0 de 0 de 0 entradas\",
    \"infoFiltered\":   \"(filtrado de _MAX_ total entradas)\",
    \"infoPostFix\":    \"\",
    \"thousands\":      \",\",
    \"lengthMenu\":     \"Mostrar _MENU_ entradas\",
    \"loadingRecords\": \"Cargando...\",
    \"processing\":     \"Procesando...\",
    \"search\":         \"Buscar en los resultados:\",
    \"zeroRecords\":    \"No se encontraron registros coincidentes\",
    \"paginate\": {
        \"first\":      \"Primero\",
        \"last\":       \"Último\",
        \"next\":       \"Siguiente\",
        \"previous\":   \"Anterior\"
    },
    \"aria\": {
        \"sortAscending\":  \": Activar para ordenar la columna ascendente\",
        \"sortDescending\": \": Activar para ordenar la columna descendente\"
    }
}
    });
    
    \$(\"#consulta\").submit (function( event ) {
    \tevent.preventDefault();
    \tvar numconvocatoria=\$(\"#numconvocatoria\").val();
    \tvar facultad=\$(\"#facultad\").val();
    \ttable.ajax.url ('https://sipc.sic.ues.edu.sv/indicadores-publicos/proyectos?numero='+numconvocatoria+\"&idfacultad=\"+facultad).load();
    });
    
} );
</script>
";
        // line 94
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/estado-proyecto.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 94,  150 => 95,  148 => 94,  134 => 82,  129 => 81,  124 => 80,  120 => 79,  109 => 71,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-search\" aria-hidden=\"true\"></i> CONSULTAR PROYECTOS DE INVESTIGACIÓN</h2>
            <p class=\"lead\">Consulte el estado de su proyecto de investigación </p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
    
    <!-- busqueda avanzada-->
    <form id=\"consulta\" method=\"get\" action=\"#\">
      <div class=\"row\" style=\"margin-bottom: 10px; \">
\t\t<div class=\"col-md-3\">
\t\t\t<label>Facultad:</label>
\t\t\t<select name=\"facultad\" id=\"facultad\" class=\"form-control\">
\t\t\t\t<option value=\"\" selected>Selecionar</option>
\t\t\t\t<option value=\"1\">Oficinas Centrales</option>
\t\t\t\t<option value=\"14\">CENSALUD</option>
\t\t\t\t<option value=\"2\">Ingeniería y Arquitectura</option>
\t\t\t\t<option value=\"3\">Ciencias y Humanidades</option>
\t\t\t\t<option value=\"4\">Medicina</option>
\t\t\t\t<option value=\"5\">Odontología</option>
\t\t\t\t<option value=\"6\">Economía</option>
\t\t\t\t<option value=\"7\">Ciencias Naturales y Matemática</option>
\t\t\t\t<option value=\"8\">Jurisprudencia y Ciencias Sociales</option>
\t\t\t\t<option value=\"9\">Química y Farmacia</option>
\t\t\t\t<option value=\"10\">Ciencias Agronómicas</option>
\t\t\t\t<option value=\"11\">Multidisciplinaria Oriental</option>
\t\t\t\t<option value=\"12\">Multidisciplinaria Paracentral</option>
\t\t\t\t<option value=\"13\">Multidisciplinaria Occidental</option>
\t\t\t</select>
\t\t</div>

\t\t<div class=\"col-md-3\">
\t\t\t<label>Año Convocatoria:</label>
\t\t\t<select name=\"numconvocatoria\" id=\"numconvocatoria\" class=\"form-control\">
\t\t\t\t<option value=\"16\">2017</option>
\t\t\t\t\t<option value=\"15\">2016</option>
\t\t\t</select>
\t\t</div>

    \t<div class=\"col-md-3\">
\t\t\t<label>Iniciar la:</label>
\t\t\t<button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Búsqueda</button>
\t\t</div>
\t</div>       
    </form><!-- fin de busqueda avanzada-->
<table id=\"di\" class=\"display\" width=\"100%\" cellspacing=\"0\" data-page-length='10'>

<thead>
  <tr class=\"table-active\">
  \t<th>Código</th>
    <th>Título del proyecto</th>
    <th>Área de Conocimiento</th>
    <th>Estado Proyecto</th>
  </tr>
</thead>
<tbody>
  <tr>
  \t<td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                \t<a href=\"{{'samples/directorio-investigadores'|page}}\"><button class=\"btn btn-warning\">Búsqueda Perfil Investigador (a) <span class=\"glyphicon glyphicon-search\"></span></button></a>
                   <!-- <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Investigador (a)\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
    \t\t\t\t\t {% partial 'tagsproyectos' %}
    \t\t\t\t\t {% partial 'cronologia-secretarios' %}
                         {% partial 'cronologia-directores-cicues' %}
                         
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
    
  {% put scripts %}
  <script>
    \$(document).ready(function() {
    var table= \$('#di').DataTable({
\t\t    \tajax: {
\t\turl: 'https://sipc.sic.ues.edu.sv/indicadores-publicos/proyectos?numero=16',
\t\tdataSrc: ''
\t\t},
\t\t\"columns\": [
\t\t{ \"data\": \"codigo\" },
\t\t{ \"data\": \"titulo\" },
\t\t{ \"data\": \"area\" },
\t\t{ \"data\": \"estado\" }
\t\t],
    \tlanguage:{
    \"decimal\":        \"\",
    \"emptyTable\":     \"No hay datos disponibles en la tabla\",
    \"info\":           \"Mostrando _START_ de _END_ de _TOTAL_ entradas\",
    \"infoEmpty\":      \"Mostrando 0 de 0 de 0 entradas\",
    \"infoFiltered\":   \"(filtrado de _MAX_ total entradas)\",
    \"infoPostFix\":    \"\",
    \"thousands\":      \",\",
    \"lengthMenu\":     \"Mostrar _MENU_ entradas\",
    \"loadingRecords\": \"Cargando...\",
    \"processing\":     \"Procesando...\",
    \"search\":         \"Buscar en los resultados:\",
    \"zeroRecords\":    \"No se encontraron registros coincidentes\",
    \"paginate\": {
        \"first\":      \"Primero\",
        \"last\":       \"Último\",
        \"next\":       \"Siguiente\",
        \"previous\":   \"Anterior\"
    },
    \"aria\": {
        \"sortAscending\":  \": Activar para ordenar la columna ascendente\",
        \"sortDescending\": \": Activar para ordenar la columna descendente\"
    }
}
    });
    
    \$(\"#consulta\").submit (function( event ) {
    \tevent.preventDefault();
    \tvar numconvocatoria=\$(\"#numconvocatoria\").val();
    \tvar facultad=\$(\"#facultad\").val();
    \ttable.ajax.url ('https://sipc.sic.ues.edu.sv/indicadores-publicos/proyectos?numero='+numconvocatoria+\"&idfacultad=\"+facultad).load();
    });
    
} );
</script>
{% endput %}", "/websicues/themes/sicues/pages/samples/estado-proyecto.htm", "");
    }
}
