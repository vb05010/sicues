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

/* /websicues/themes/sicues/pages/samples/proyectos2009.htm */
class __TwigTemplate_cf1be6a407e9e928dbe7ada01eceeb7c7b28dfd0c0b6c509d6d3ea5d15106230 extends \Twig\Template
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
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i> Documentos SIC-UES</h2>
            <p class=\"lead\">Proyectos Aprobados Año 2009</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                  
<!-- <table class=\"table table-bordered table-hover results\"> -->
<table id=\"di\" class=\"display\" width=\"100%\" cellspacing=\"0\" data-page-length='5'>

<thead>
  <tr>
     <th>N°</br>Registro</th>
    <th>Nombre del </br>proyecto</th>
    <th>Investigador</br>principal</th>
    <th>Facultad/</br>Unidad</th>
    <th>Área de </br>Conocimiento</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>08.02</td>
    <td>Rescate, preservación y desarrollo de germoplasma de aguacate criollo (persea americana), con adaptación a la zona costera de El Salvador”</td>
    <td>Ing. Fidel Ángel Parada Berrios</td>
    <td>Ciencias Agronómicas, Depto. de Fitotecnia </td>
    <td>Ciencias Agrícolas</td>
  </tr>
  <tr>
    <td>08.05</td>
    <td>Eficacia de la inyección percutánea de etanol en nódulos tiroideos no funcionantes sólidos y quísticos”</td>
    <td>Dr. Roberto Cerritos</td>
    <td>Facultad de Medicina, Depto. de Medicina</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>08.06</td>
    <td>Comparación de dos técnicas para la detección de hongos aflatoxigenicos en pescado seco salado procesado en El Salvador</td>
    <td>Licda. Ángela Gudelia Portillo Zelaya</td>
    <td>Facultad de Ciencias Naturales y Matemática, Escuela de Biología</td>
    <td>Ingeniería y Tecnología</td>
  </tr>
  <tr>
    <td>08.12</td>
    <td>Investigación de patrones biométricos en la forma de teclear de una persona en una computadora</td>
    <td>Ing. Ernesto Alexander Calderón Peraza</td>
    <td>Multidisciplinaria de Occidente. Departamento de Ingeniería</td>
    <td>Ciencias Exactas</td>
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->
                <aside class=\"col-md-4\">
                    <!-- <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Proyectos Aprobados 2009 Aquí\">
                        </form>
                    </div> --><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                                ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menudescargas"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t<div class=\"widget tags\">
    \t\t\t\t\t ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tagsproyectos"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "                    </div><!--/.tags-->\t
                     <!--<div class=\"widget categories\">
                        <h3><p align=\"center\">Proyectos Aprobados Año 2009</br> por Áreas del Conocimiento</p></h3>
                        <div class=\"row\">
                                <ul class=\"blog_category\">
                                    <li><a href=\"#\">Ciencias Exactas <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Ciencias de la Salud <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Ciencias Agrícolas <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Ciencias Sociales <span class=\"badge\">00</span></a></li>
                                    <li><a href=\"#\">Ingeniería y Tecnología <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Humanidades <span class=\"badge\">00</span></a></li>
                                    <li><button type=\"button\" class=\"btn btn-primary btn-md\">Total proyectos aprobados: 3 / Registrados: 1</button></li>
                                </ul>
                        </div>                     
                    </div><!--/.categories-->
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
    
     ";
        // line 91
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 92
        echo "  <script>
    \$(document).ready(function() {
    \$('#di').DataTable({
    \tlanguage:{
    \"decimal\":        \"\",
    \"emptyTable\":     \"No hay datos disponibles en la tabla\",
    \"info\":           \"Mostrando _START_ de _END_ de _TOTAL_ entradas\",
    \"infoEmpty\":      \"Mostrando 0 to 0 of 0 entradas\",
    \"infoFiltered\":   \"(filtrado de _MAX_ total entradas)\",
    \"infoPostFix\":    \"\",
    \"thousands\":      \",\",
    \"lengthMenu\":     \"Mostrar _MENU_ entradas\",
    \"loadingRecords\": \"Cargando...\",
    \"processing\":     \"Procesando...\",
    \"search\":         \"Buscar:\",
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
} );
</script>
";
        // line 91
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/proyectos2009.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 91,  141 => 92,  139 => 91,  114 => 68,  110 => 67,  105 => 64,  101 => 63,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i> Documentos SIC-UES</h2>
            <p class=\"lead\">Proyectos Aprobados Año 2009</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                  
<!-- <table class=\"table table-bordered table-hover results\"> -->
<table id=\"di\" class=\"display\" width=\"100%\" cellspacing=\"0\" data-page-length='5'>

<thead>
  <tr>
     <th>N°</br>Registro</th>
    <th>Nombre del </br>proyecto</th>
    <th>Investigador</br>principal</th>
    <th>Facultad/</br>Unidad</th>
    <th>Área de </br>Conocimiento</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>08.02</td>
    <td>Rescate, preservación y desarrollo de germoplasma de aguacate criollo (persea americana), con adaptación a la zona costera de El Salvador”</td>
    <td>Ing. Fidel Ángel Parada Berrios</td>
    <td>Ciencias Agronómicas, Depto. de Fitotecnia </td>
    <td>Ciencias Agrícolas</td>
  </tr>
  <tr>
    <td>08.05</td>
    <td>Eficacia de la inyección percutánea de etanol en nódulos tiroideos no funcionantes sólidos y quísticos”</td>
    <td>Dr. Roberto Cerritos</td>
    <td>Facultad de Medicina, Depto. de Medicina</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>08.06</td>
    <td>Comparación de dos técnicas para la detección de hongos aflatoxigenicos en pescado seco salado procesado en El Salvador</td>
    <td>Licda. Ángela Gudelia Portillo Zelaya</td>
    <td>Facultad de Ciencias Naturales y Matemática, Escuela de Biología</td>
    <td>Ingeniería y Tecnología</td>
  </tr>
  <tr>
    <td>08.12</td>
    <td>Investigación de patrones biométricos en la forma de teclear de una persona en una computadora</td>
    <td>Ing. Ernesto Alexander Calderón Peraza</td>
    <td>Multidisciplinaria de Occidente. Departamento de Ingeniería</td>
    <td>Ciencias Exactas</td>
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->
                <aside class=\"col-md-4\">
                    <!-- <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Proyectos Aprobados 2009 Aquí\">
                        </form>
                    </div> --><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                                {% partial 'menudescargas' %}
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t<div class=\"widget tags\">
    \t\t\t\t\t {% partial 'tagsproyectos' %}
                    </div><!--/.tags-->\t
                     <!--<div class=\"widget categories\">
                        <h3><p align=\"center\">Proyectos Aprobados Año 2009</br> por Áreas del Conocimiento</p></h3>
                        <div class=\"row\">
                                <ul class=\"blog_category\">
                                    <li><a href=\"#\">Ciencias Exactas <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Ciencias de la Salud <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Ciencias Agrícolas <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Ciencias Sociales <span class=\"badge\">00</span></a></li>
                                    <li><a href=\"#\">Ingeniería y Tecnología <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Humanidades <span class=\"badge\">00</span></a></li>
                                    <li><button type=\"button\" class=\"btn btn-primary btn-md\">Total proyectos aprobados: 3 / Registrados: 1</button></li>
                                </ul>
                        </div>                     
                    </div><!--/.categories-->
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
    
     {% put scripts %}
  <script>
    \$(document).ready(function() {
    \$('#di').DataTable({
    \tlanguage:{
    \"decimal\":        \"\",
    \"emptyTable\":     \"No hay datos disponibles en la tabla\",
    \"info\":           \"Mostrando _START_ de _END_ de _TOTAL_ entradas\",
    \"infoEmpty\":      \"Mostrando 0 to 0 of 0 entradas\",
    \"infoFiltered\":   \"(filtrado de _MAX_ total entradas)\",
    \"infoPostFix\":    \"\",
    \"thousands\":      \",\",
    \"lengthMenu\":     \"Mostrar _MENU_ entradas\",
    \"loadingRecords\": \"Cargando...\",
    \"processing\":     \"Procesando...\",
    \"search\":         \"Buscar:\",
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
} );
</script>
{% endput %}", "/websicues/themes/sicues/pages/samples/proyectos2009.htm", "");
    }
}
