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

/* /websicues/themes/sicues/pages/samples/proyectos2007.htm */
class __TwigTemplate_2afbe34deed349794b2618ec946973ba02ac1ae03cdb6ca025e98fab81fd68cb extends \Twig\Template
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
            <p class=\"lead\">Proyectos Aprobados Año 2007</p>
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
    <td>06.03</td>
    <td>Tipos de violencia a la que están expuestos los estudiantes de pre-grado de la sede central de la Universidad de El Salvador, de febrero a marzo de 2007.</td>
    <td>Licda. Maria Josefina Pérez Fuentes</td>
    <td>Medicina, Unidad de Ciencias Básicas, Escuela de Tecnología Médica</td>
    <td>Ciencias Sociales</td>
  </tr>
  <tr>
    <td>06.04</td>
    <td>Estandarización de la técnica de ELISA Anti-IgM e IgG contra el virus del dengue en muestras de suero y sangre capilar absorbida en papel filtro.</td>
    <td>Lic. Omar Alberto Aguilar Guevara</td>
    <td>CENSALUD</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>06.05</td>
    <td>Caracterización del vector de la enfermedad de Chagas en El Salvador a través de marcadores polimórficos específicos.</td>
    <td>Lic. Doris Elizabeth Gómez Flores</td>
    <td>CENSALUD</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>06.07</td>
    <td>La mediatización de la Política, su influencia en el Desarrollo Socioeconómico y la Seguridad Nacional</td>
    <td>MsC. Julio César Grande Rivera</td>
    <td>Ciencias y Humanidades, Depto de Periodismo</td>
    <td>Ciencias Sociales</td>
  </tr>
  <tr>
    <td>06.11</td>
    <td>Identificación de E.COLI 0157:H7 a partir de carne procesada para hamburguesas caracterización de la cepa proveniente de muestras de niños con enfermedades diarreicas agudas provenientes del Hospital Benjamín Bloom. San Salvador.</td>
    <td>Msc. María Evelyn Sánchez de Ramos</td>
    <td>Química y Farmacia</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>06.18</td>
    <td>Estudio de caracterización de las micorrizas de la flora amenazada o en peligro de extinción de El Salvador y puesta a punto de protocolos de micorrización y micropropagación para programas de revegetación con Acrocomia mexicana Kar. ex .Mart. y Brahea salvadorensis H. Wendl. Ex Becc</td>
    <td>Licda. Yanira Elizabeth López Ventura</td>
    <td>CENSALUD-CIC-UES</td>
    <td>Ciencias Exactas</td>
  </tr>
  <tr>
    <td>06.22</td>
    <td>Patrones alimentarios de Triatoma dimidiata en El Salvador.</td>
    <td>Dr. Rafael A. Cedillos</td>
    <td>CENSALUD</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>06.23</td>
    <td>Estudio serológico basal en niños menores de 5 años en localidades bajo control vectorial de la enfermedad de Chagas.</td>
    <td>Dr. Rafael A. Cedillos</td>
    <td>CENSALUD</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr class=\"success\">
    <td>06.26</td>
    <td>Datos anualizado de energía maremotríz diseño del prototipo colector de energía, aplicable en la costa salvadoreña.</td>
    <td>Ing. Francisco De León Torres</td>
    <td>Ingeniería, Escuela de Ingeniería Mecánica</td>
    <td>Ingeniería y Tecnología</td>
  </tr>
  <tr class=\"success\">
    <td>06.29</td>
    <td>Construcción de un modelo de combate integral a la pobreza del Cantón La Libertad, Municipio de Chalchuapa.</td>
    <td>Inga. Soraya Lissette Barrera Rivera</td>
    <td>Multidisciplinaria de Occidente, Depto. de Ingeniería.</td>
    <td>Ciencias Exactas</td>
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->
                <aside class=\"col-md-4\">
                    <!-- <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Proyectos Aprobados 2007 Aquí\">
                        </form>
                    </div> --><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                                ";
        // line 105
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menudescargas"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 106
        echo "                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t<div class=\"widget tags\">
    \t\t\t\t\t ";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tagsproyectos"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "                    </div><!--/.tags-->\t
                     <!--<div class=\"widget categories\">
                        <h3><p align=\"center\">Proyectos Aprobados Año 2007</br> por Áreas del Conocimiento</p></h3>
                        <div class=\"row\">
                                <!-- <ul class=\"blog_category\">
                                    <li><a href=\"#\">Ciencias Exactas <span class=\"badge\">02</span></a></li>
                                    <li><a href=\"#\">Ciencias de la Salud <span class=\"badge\">05</span></a></li>
                                    <li><a href=\"#\">Ciencias Agrícolas <span class=\"badge\">00</span></a></li>
                                    <li><a href=\"#\">Ciencias Sociales <span class=\"badge\">02</span></a></li>
                                    <li><a href=\"#\">Ingeniería y Tecnología <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Humanidades <span class=\"badge\">--</span></a></li>
                                    <li><button type=\"button\" class=\"btn btn-primary btn-md\">Total proyectos aprobados 10</button></li>
                                </ul> -->
                        </div>                     
                    </div><!--/.categories-->
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
    
";
        // line 133
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 134
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
        // line 133
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/proyectos2007.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 133,  183 => 134,  181 => 133,  156 => 110,  152 => 109,  147 => 106,  143 => 105,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2><i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i> Documentos SIC-UES</h2>
            <p class=\"lead\">Proyectos Aprobados Año 2007</p>
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
    <td>06.03</td>
    <td>Tipos de violencia a la que están expuestos los estudiantes de pre-grado de la sede central de la Universidad de El Salvador, de febrero a marzo de 2007.</td>
    <td>Licda. Maria Josefina Pérez Fuentes</td>
    <td>Medicina, Unidad de Ciencias Básicas, Escuela de Tecnología Médica</td>
    <td>Ciencias Sociales</td>
  </tr>
  <tr>
    <td>06.04</td>
    <td>Estandarización de la técnica de ELISA Anti-IgM e IgG contra el virus del dengue en muestras de suero y sangre capilar absorbida en papel filtro.</td>
    <td>Lic. Omar Alberto Aguilar Guevara</td>
    <td>CENSALUD</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>06.05</td>
    <td>Caracterización del vector de la enfermedad de Chagas en El Salvador a través de marcadores polimórficos específicos.</td>
    <td>Lic. Doris Elizabeth Gómez Flores</td>
    <td>CENSALUD</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>06.07</td>
    <td>La mediatización de la Política, su influencia en el Desarrollo Socioeconómico y la Seguridad Nacional</td>
    <td>MsC. Julio César Grande Rivera</td>
    <td>Ciencias y Humanidades, Depto de Periodismo</td>
    <td>Ciencias Sociales</td>
  </tr>
  <tr>
    <td>06.11</td>
    <td>Identificación de E.COLI 0157:H7 a partir de carne procesada para hamburguesas caracterización de la cepa proveniente de muestras de niños con enfermedades diarreicas agudas provenientes del Hospital Benjamín Bloom. San Salvador.</td>
    <td>Msc. María Evelyn Sánchez de Ramos</td>
    <td>Química y Farmacia</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>06.18</td>
    <td>Estudio de caracterización de las micorrizas de la flora amenazada o en peligro de extinción de El Salvador y puesta a punto de protocolos de micorrización y micropropagación para programas de revegetación con Acrocomia mexicana Kar. ex .Mart. y Brahea salvadorensis H. Wendl. Ex Becc</td>
    <td>Licda. Yanira Elizabeth López Ventura</td>
    <td>CENSALUD-CIC-UES</td>
    <td>Ciencias Exactas</td>
  </tr>
  <tr>
    <td>06.22</td>
    <td>Patrones alimentarios de Triatoma dimidiata en El Salvador.</td>
    <td>Dr. Rafael A. Cedillos</td>
    <td>CENSALUD</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr>
    <td>06.23</td>
    <td>Estudio serológico basal en niños menores de 5 años en localidades bajo control vectorial de la enfermedad de Chagas.</td>
    <td>Dr. Rafael A. Cedillos</td>
    <td>CENSALUD</td>
    <td>Ciencias de la Salud</td>
  </tr>
  <tr class=\"success\">
    <td>06.26</td>
    <td>Datos anualizado de energía maremotríz diseño del prototipo colector de energía, aplicable en la costa salvadoreña.</td>
    <td>Ing. Francisco De León Torres</td>
    <td>Ingeniería, Escuela de Ingeniería Mecánica</td>
    <td>Ingeniería y Tecnología</td>
  </tr>
  <tr class=\"success\">
    <td>06.29</td>
    <td>Construcción de un modelo de combate integral a la pobreza del Cantón La Libertad, Municipio de Chalchuapa.</td>
    <td>Inga. Soraya Lissette Barrera Rivera</td>
    <td>Multidisciplinaria de Occidente, Depto. de Ingeniería.</td>
    <td>Ciencias Exactas</td>
  </tr>
  </tbody>
</table>
          </div><!--/.col-md-8-->
                <aside class=\"col-md-4\">
                    <!-- <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Proyectos Aprobados 2007 Aquí\">
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
                        <h3><p align=\"center\">Proyectos Aprobados Año 2007</br> por Áreas del Conocimiento</p></h3>
                        <div class=\"row\">
                                <!-- <ul class=\"blog_category\">
                                    <li><a href=\"#\">Ciencias Exactas <span class=\"badge\">02</span></a></li>
                                    <li><a href=\"#\">Ciencias de la Salud <span class=\"badge\">05</span></a></li>
                                    <li><a href=\"#\">Ciencias Agrícolas <span class=\"badge\">00</span></a></li>
                                    <li><a href=\"#\">Ciencias Sociales <span class=\"badge\">02</span></a></li>
                                    <li><a href=\"#\">Ingeniería y Tecnología <span class=\"badge\">01</span></a></li>
                                    <li><a href=\"#\">Humanidades <span class=\"badge\">--</span></a></li>
                                    <li><button type=\"button\" class=\"btn btn-primary btn-md\">Total proyectos aprobados 10</button></li>
                                </ul> -->
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
{% endput %}", "/websicues/themes/sicues/pages/samples/proyectos2007.htm", "");
    }
}
