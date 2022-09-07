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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/taller-ojs.htm */
class __TwigTemplate_d18374cfb8b6300530cbd02a7bb23d09a1c71bbb0ec51287c84f2c1eb5ca8bb1 extends \Twig\Template
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
        echo "<h1>Taller Virtual de Edición Editorial de Revistas Científicas en Open Journal System (OJS)</h1>
<h3><em>Programa para el Fortalecimiento de Revistas Científicas UES</em></h3>
<p><strong>Fechas:</strong> 1, 3, 8 y 10 de Febrero de 2022</p>


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-8\">
    \t<img class=\"img-responsive\" alt=\"Responsive image\" width=\"720px;\" height=\"1005px;\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/afichetallerojs.png");
        echo "\" />
    </div>
    <div class=\"col-sm-4\">
\t\t<p aling=\"justify\"><strong>Descripción del Taller</strong><br /> Este taller forma parte del Programa de Fortalecimiento a las Revistas Científicas de la Universidad de El Salvador, impulsado por la Vicerrectoría Académica a través de la Secretaría de Investigaciones Científicas. Como estrategia, se promueve el uso de OJS para mejorar la visibilidad y estandarización del proceso editorial dentro de las revistas universitarias.</p>

\t\t <p aling=\"justify\">OJS es una plataforma que facilita el proceso editorial, su lectura y uso de las revistas electrónicas; aumenta su visibilidad en la Web y facilita la interoperabilidad con otros sistemas. Tiene múltiples ventajas y por ello, es usado por 25,000 revistas en el mundo (https://pkp.sfu.ca/ojs/); además, sirve para crear portales de revistas científicas en diferentes universidades. </p>

\t  <p aling=\"justify\"><strong>Metodología</strong><br />El taller se impartirá en la plataforma BigBlueButtom, se darán contenidos teóricos (30%) y en su mayoría, los asistentes deberán poner en práctica (70%) en un sistema OJS de prueba diseñado exclusivamente para este Taller. </p>
\t  <p aling=\"justify\"><strong>Dirigido a: </strong><br /> Editores y miembros del equipo que apoya la Edición de Revistas Científicas de las diferentes Facultades e Institutos de Investigación. </p>
\t\t<p>Enlace para registrarse al taller: <a href=\"https://forms.gle/eRiU1THaCs2XPr6VA\" target=\"_blank\" class=\"btn btn-primary btn-lg active\" role=\"button\" aria-pressed=\"true\">!Registrarse Aquí¡</a> </p> 

    </div>
  </div>
 </div>


<p><strong>Programa del taller</strong></p>
<div class=\"tab\">
    <button class=\"tablinks\" onclick=\"clickHandle(event, '01')\">01 de febrero</button>
    <button class=\"tablinks\" onclick=\"clickHandle(event, '03')\">03 de febrero</button>
    <button class=\"tablinks\" onclick=\"clickHandle(event, '08')\">08 de febrero</button>
    <button class=\"tablinks\" onclick=\"clickHandle(event, '10')\">10 de febrero</button>
  </div>

  <div id=\"01\" class=\"tabcontent\">
    <table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\">Horario</th>
      <th scope=\"col\">Contenido</th>
      <th scope=\"col\">Responsable</th>
    </tr>
    
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">08h45 - 09h00</th>
      <td>Registro y Bienvenida a participantes</td>
      <td>Vicerrectores <br />Secretario SIC-UES</td>
    </tr>
    <tr>
      <th scope=\"row\">09h00 - 10h00</th>
      <td>Introducción a OJS</td>
      <td> </td>
    </tr>
    <tr>
      <th scope=\"row\">10h00 - 10h30</th>
      <td colspan=\"2\">Usuario principal: Super Usuario 
      \t\t\t\t  <ul>
      \t\t\t\t  \t<li>Roles del super usuario</li>
      \t\t\t\t  \t<li>Creación de revista</li>
      \t\t\t\t  \t<li>dentro de OJS</li>
      \t\t\t\t  \t<li>Importancia de actualización de la revista</li>
      \t\t\t\t  \t<li>Importancia de instalación de Plug-ins</li>
      \t\t\t\t  </ul>
      </td>
    </tr>
    
    <tr>
      <th scope=\"row\">10h30 - 11h00</th>
      <td colspan=\"2\">Roles de los Gestores de la Revista 
      \t\t\t\t  <ul>
      \t\t\t\t  \t<li>Creación de usuarios dentro del sistema<ul>
      \t\t\t\t  \t\t<li>Datos principales de los usuarios</li>
      \t\t\t\t  \t\t<li>Creación del código ORCID</li>
      \t\t\t\t  \t</ul></li>
      \t\t\t\t  \t<li>Asignación de roles dentro de la revista</li>
      \t\t\t\t  \t<li>Creación y Modificación de Secciones de la Revista</li>
      \t\t\t\t  \t</ul>
      </td>
    </tr>
  </tbody>
</table>
  </div>

  <div id=\"03\" class=\"tabcontent\">
<table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\">Horario</th>
      <th scope=\"col\">Contenido</th>
      <th scope=\"col\">Responsable</th>
    </tr>
    
  </thead>
  <tbody>
      <tr>
      <th scope=\"row\">10h30 - 11h00</th>
      <td colspan=\"2\">Continuación Roles de los Gestores de la Revista 
      \t\t\t\t  <ul>
      \t\t\t\t  \t<li>Formularios de Revisión</li>
      \t\t\t\t    <li>Configuración de Idiomas</li>
      \t\t\t\t  \t<li>Conformación del Equipo Editorial</li>
      \t\t\t\t  \t<li>Edición y Vista de las Plantillas de Correo Electrónico</li>
      \t\t\t\t  \t<li>Configuración del Sitio Web de la Revista</li>
      \t\t\t\t  \t\t<ul>
      \t\t\t\t  \t\t\t<li>Detalles generales</li>
      \t\t\t\t  \t\t\t<li>Guía de autores / Políticas de la revista</li>
      \t\t\t\t  \t\t\t<li>Configuración Global de la Licencia Creative Commons</li>
      \t\t\t\t  \t\t\t<li>Envíos</li>
      \t\t\t\t  \t\t\t<li>Apariencia personalizada</li>
      \t\t\t\t  \t\t</ul>
      \t\t\t\t  \t<li>Estadísticas e Informes</li>
      \t\t\t\t  \t<li>Plug-ins del sistema</li>
      \t\t\t\t  \t<li>Conector OAI-PMH</li>
      \t\t\t\t  \t<li>Configuración general del sistema</li>
      \t\t\t\t  \t</ul>
      </td>
    </tr>
    </tbody>
    </table>
  </div>
  </div>

  <div id=\"08\" class=\"tabcontent\">
    <table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\">Horario</th>
      <th scope=\"col\">Contenido</th>
      <th scope=\"col\">Responsable</th>
    </tr>
    
  </thead>
  <tbody>
      <tr>
      <th scope=\"row\">09h00 - 11h00</th>
      <td colspan=\"2\">Proceso Editorial 
      \t\t\t\t  <ul>
      \t\t\t\t  \t<li>Generalidades del Rol</li>
      \t\t\t\t    <li>Proceso de envío de un artículo</li>
      \t\t\t\t  \t<li>Conformación del Equipo Editorial</li>
      \t\t\t\t  \t\t<ul>
      \t\t\t\t  \t\t\t<li>Formato de archivos</li>
      \t\t\t\t  \t\t\t<li>Metadatos e indexación</li>
      \t\t\t\t  \t\t</ul>
      \t\t\t\t  \t<li>Crear números</li>
      \t\t\t\t  \t<li>Ordenar números</li>
      \t\t\t\t  \t<li>Administración de las pestañas de artículos</li>
      \t\t\t\t  \t<li>Revisión preliminar de un artículo</li>
      \t\t\t\t  \t<li>Revisión de Plagio</li>
      \t\t\t\t  \t<li>Proceso de revisión de artículos</li>
      \t\t\t\t  \t<li>Práctica de revisión de artículo</li>
      \t\t\t\t  \t<li>Recibir resultados y toma de decisión editorial</li>
      \t\t\t\t  \t<li>Corrección de estilo</li>
      \t\t\t\t  \t</ul>
      </td>
    </tr>
    </tbody>
    </table>
</div>

  <div id=\"10\" class=\"tabcontent\">
    <table class=\"table table-hover\">
  <thead>
    <tr>
      <th scope=\"col\">Horario</th>
      <th scope=\"col\">Contenido</th>
      <th scope=\"col\">Responsable</th>
    </tr>
    
  </thead>
  <tbody>
      <tr>
      <th scope=\"row\">09h00 - 10h40</th>
      <td colspan=\"2\">Continuación Proceso Editorial 
      \t\t\t\t  <ul>
      \t\t\t\t  \t<li>Diagramación y maquetación de galerada</li>
      \t\t\t\t  \t\t<ul>
      \t\t\t\t  \t\t\t<li>Proceso de maquetación</li>
      \t\t\t\t  \t\t\t<li>Archivos de publicación: PDF, ePub y XML</li>
      \t\t\t\t  \t\t</ul>
      \t\t\t\t  \t<li>Proceso de revisión de galerada</li>
      \t\t\t\t  \t<li>Programación de Publicación</li>
      \t\t\t\t  \t<li>Publicación de número</li>
      \t\t\t\t  \t<li>Números próximos (Forthcoming)</li>
      \t\t\t\t  \t<ul>
      \t\t\t\t  \t\t<li>Utilidad y beneficios del uso del plug-in Forthcoming</li>
      \t\t\t\t  \t\t<li>Configuración del Plug-in</li>
      \t\t\t\t  \t</ul>
      \t\t\t\t  </ul>
      </td>
    </tr>
    <tr>
    \t<td>10h40 - 11h00</td>
    \t<td>Preservación Digital
    \t<ul>
    \t\t<li>CAMJOL y beneficios a Revistas Centroamericanas (DOIs)</li>
    \t\t<li>Locks/Clocks</li>
    \t</ul></td>
    \t<td> </td>
    </tr>
    
    <tr>
    \t<td>11h00 - 11h10</td>
    \t<td> Cierre del taller</td>
    \t<td> </td>
    </tr>
    </tbody>
    </table>
</div>


<script>
function clickHandle(evt, animalName) {
  let i, tabcontent, tablinks;

  // This is to clear the previous clicked content.
  tabcontent = document.getElementsByClassName(\"tabcontent\");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = \"none\";
  }

  // Set the tab to be \"active\".
  tablinks = document.getElementsByClassName(\"tablinks\");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
  }

  // Display the clicked tab and set it to active.
  document.getElementById(animalName).style.display = \"block\";
  evt.currentTarget.className += \" active\";
}
</script>

<style>
\t.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/taller-ojs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/taller-ojs.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
