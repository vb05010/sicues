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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/convocatoria20-2022.htm */
class __TwigTemplate_0b2f234053437d4e52528cf3007c8929bca18bde5087d099dd04e849d0fc30d5 extends \Twig\Template
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
        echo "<h1>Bases de aplicación a fondos institucionales</h1>
<p align=\"justify\">El día 15 de diciembre de 2021, se abre la convocatoria a la presentación de proyectos de investigación para optar por financiamiento institucional</p>
<h3>Registrar el Proyecto de Investigación</h3>
<ul type=\"1\">
\t<li>Los Proyectos de Investigación (PI) deberán elaborarse y presentarse atendiendo lo establecido en el Documento “Normas Técnicas y Administrativas del Consejo de Investigaciones Científicas de la Universidad de El Salvador”.</li>
\t<li>Descargar del Sitio Web de la SIC-UES (https://sic.ues.edu.sv/convocatoria20-2022) los siguientes documentos de referencia (DR): </li>
\t<ul>
\t\t<li>DR.1 Guía de referencia del protocolo de investigación (DR.1.Guía_Para_Llenado_Protocolo2022.pdf)</li>
\t\t<li>DR.2 Documento para el llenado del Protocolo de investigación (DR.2.Protocolo2022.docx)</li>
\t\t<li>DR.3 Normas Técnicas y Administrativas del CIC UES (DR.3.NTAsicues.pdf)</li>
\t\t<li>DR.4 Políticas de Investigación (DR.4.PoliticasIC.pdf)</li>
\t\t<li>DR.5 Legislación Universitaria (DR.5.LegislacionUniversitaria.pdf)</li>
\t\t<li>DR.6 Documento de presupuesto del P.I. (DR.6.presupuesto.xlsx) </li>
\t</ul>
\t<li>Completar el protocolo de investigación de conformidad a las directrices expuestas en <strong>DR.1.Guía_Para_Llenado_Protocolo2022</strong></li>
\t<li>Enviar el protocolo de investigación a la gestora de seguimiento de proyectos de investigación: <strong>Rafaela de los Ángeles Pérez (rafaela.perez@ues.edu.sv) </strong></li>
</ul>

<h3>Consideraciones importantes para elaborar el protocolo de investigación </h3>
<p align=\"justify\">El protocolo de investigación contiene los siguientes elementos relacionados:</p>
<ul type=\"a\">
\t<li><strong>Objetivos:</strong> Un (01) objetivo General, y máximo tres (03) específicos. </li>
\t<li><strong>Actividades:</strong> El número de actividades deben escribirse con relación a cada objetivo específico.</li>
\t<li><strong>Presupuesto:</strong> Este debe estar relacionado con cada actividad. Una actividad específica o un conjunto de actividades puede necesitar los siguientes rubros financiables:</li>
\t<ul type=\"i\">
\t\t<li>Equipos.</li>
\t\t<li>Materiales y suministros.</li>
\t\t<li>Reactivos.</li>
\t\t<li>Contratación de personal (no debe superar el 20% del presupuesto total).</li>
\t\t<li>Viáticos para viajes locales.</li>
\t\t<li>Viáticos plan de viaje al exterior (Uno (01) viaje con una persona, consultar disposiciones a la SIC-UES).</li>
\t\t<li>Publicaciones.</li>
\t</ul>
</ul>

<h3>Proceso de evaluación de los PI</h3>
<p align=\"justify\">El proceso de evaluación incluye observaciones preliminares por los miembros del Consejo Ejecutivo de Investigaciones Científica (CEI UES), para revisar aspectos generales de forma, como la coherencia en el planteamiento y redacción del proyecto de investigación, su apego a las políticas institucionales sobre investigación científica, y el cumplimiento con todos los requisitos formales de la aplicación.</p>
<p align=\"justify\">Superada esta etapa, se pasa a una evaluación por pares externos, para valorar el aporte científico del proyecto, así como su fundamentación teórica y metodológica, según el área de conocimientos. Ellos(as) tomaran en cuenta un enfoque multidisciplinario e innovador y aplicarán para la evaluación los siguientes siete (07) criterios:</p>
<ul type=\"1\">
\t<li><strong>Relevancia/impacto con coeficientes de ponderación</strong> <br>Valorar la calidad e importancia del PI presentado, desde el punto de vista académico, científico y/o tecnológico con originalidad e innovación del mismo. </li>
\t<li><strong>Pertinencia con coeficientes de ponderación</strong></li>
\t<ul type=\"a\">
\t\t<li>Valorar si el PI es oportuno y adecuado a la realidad social y material en que se desarrollará. </li>
\t\t<li>Valorar si el PI responde a las prioridades temáticas de desarrollo de la UES, expuestas en DR.4. </li>
\t\t<li>Evaluar si el PI vulnera aspectos esenciales del medio ambiente, o bien de la cultura u otros derechos de la población supuesta a ser beneficiaria del mismo.</li>
\t</ul>
\t<li><strong>Metodología con coeficientes de ponderación</strong></li>
\t<ul type=\"a\">
\t\t<li>Valorar la viabilidad científico-técnico de la metodología indicada por el investigador para alcanzar los objetivos propuestos en el PI, así como los fundamentos teóricos presentados para justificar su selección. </li>
\t\t<li>Se deberá valorar la complementariedad y coherencia lógica de los métodos y técnicas, así como de las diferentes fases consideradas para que se puedan cumplir los objetivos declarados. </li>
\t\t<li>La nota conferida debe reflejar si se considera viable que el PI se desarrolle dentro del tiempo propuesto por el investigador, tomando en cuenta el enfoque multidisciplinario.</li>
\t</ul>
\t<li><strong>Resultados esperados con coeficientes de ponderación</strong></li>
\t<ul type=\"a\">
\t\t<li>Valorar el alcance y pertinencia de los resultados esperados por el investigador al final del PI. </li>
\t\t<li>Valorar la coherencia y correspondencia lógica de los resultados esperados con la metodología y los objetivos del PI.</li>
\t</ul>
\t<li><strong>Supuestos y riesgos con coeficientes de ponderación</strong></li>
\t<ul type=\"a\">
\t\t<li>Valorar las declaraciones del investigador acerca de los supuestos y riesgos que podrían amenazar la ejecución del PI, y la forma como el investigador piensa superarlos.</li>
\t</ul>
\t<li><strong>Factibilidad técnica y financiera con coeficientes de ponderación</strong></li>
\t<ul type=\"a\">
\t\t<li>Posibilidad real de ejecutar el PI en términos financieros y de recursos. ¿Se ha previsto como se conseguirán los recursos necesarios para hacer frente a los gastos de funcionamiento y mantenimiento del PI, una vez que finalice la etapa de ejecución?</li>
\t</ul>
\t<li><strong>Idoneidad del investigador(a) con coeficientes de Ponderación</strong></li>
\t<ul type=\"a\">
\t\t<li>Valora la experiencia y competencia académica/profesional previa del investigador, tal como se demuestre en su hoja de vida, principalmente por su área de formación/especialización, su experiencia en la ejecución exitosa de otros proyectos de investigación, la cantidad y la importancia de las publicaciones relevantes referidas, etc.</li>
\t</ul>
</ul>

<p align=\"justify\">Para los criterios de evaluación de los proyectos de investigación, puede observar que el mayor puntaje lo tiene el criterio METODOLOGÍA que se muestra a continuación, por tanto, debe poner mucho énfasis a este criterio de evaluación, sin dejar de profundizar el resto de criterios. </p>
 <div class=\"jetpack-image-container\">
            <figure style=\"width: 1280px\" class=\"wp-caption alignnone\">
                
                    <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/convocatoria20-2022/criterios.png");
        echo "\" width=\"1280\" height=\"960\" />
                
                <figcaption class=\"wp-caption-text\">Fig. 1. Criterios de evaluación</figcaption>
            </figure>
        </div>
        
<h3>Compromisos ante la aprobación de un PI</h3>
<ul type=\"1\">
\t<li>El compromiso del Investigador de ejecutar el PI según normas éticas universalmente aceptadas, el cumplimiento de los tiempos de ejecución del proyecto, la entrega de informes de progreso, y la entrega de un informe científico final con los productos y resultados indicados en el proyecto, así como la presentación de un artículo científico publicable en la Revista Científica Multidisciplinaria Minerva y el desarrollo de un video científico con el apoyo del equipo de periodismo científico de la SIC-UES.</li>
\t<li>El compromiso de la SIC-UES y del CIC-UES, es tramitar oportunamente la adquisición de los equipos, suministros, reactivos y otros materiales, según presupuesto aprobado para cada proyecto por el CEI UES. La SIC UES tramitará también, a solicitud del investigador titular, las contrataciones de personal auxiliar y viajes al exterior, así como la adjudicación de vales de combustible para viajes locales, gastos de publicación de resultados, etc., siempre que hayan sido debidamente aprobados en el presupuesto del proyecto de investigación.</li>
\t<li>Las Facultades, Institutos y Centros de Investigación a los que pertenezca el investigador, serán responsables de otorgar, según posibilidades, tiempo laboral al investigador para la ejecución efectiva del PI, proporcionarán en lo posible facilidades de infraestructura, y serán responsables por el adecuado resguardo y mantenimiento del equipo adquirido, que será inventariado como parte de los activos de la Unidad correspondiente, según normativa vigente. </li>
</ul>
<p align=\"justify\">Se recomienda a los investigadores que presenten propuestas de PI relacionados con problemas concretos identificados a través de consultas realizadas con sus pares externos, en comunidades, en instituciones de gobierno que atienden problemas críticos, en ONG´s y sectores productivos, problemas relacionados con el COVID-19 y la Seguridad Alimentaria Nutricional, tendientes a identificar investigaciones pertinentes, y promover la relación Universidad-Sociedad, tomando en cuenta las políticas institucionales de investigación científica. Es importante recordar que las investigaciones científicas son trabajos complejos que implican esfuerzo, dedicación de tiempo, recursos intelectuales y materiales, que deben ser valorados y protegidos por la vía legal correspondiente, por lo que cada investigador debe maximizar la importancia de proteger cada etapa y resultado obtenido en el proceso investigador, por medio de Propiedad Intelectual (Incluye Derechos de autor, como propiedad industrial). También se insta a los investigadores, hacer uso de las herramientas que proporciona la propiedad intelectual nacional e internacional, haciendo búsquedas de patentes ya existentes (Mejoras industriales, modelos de utilidad, entre otros), lo cual permite hacer uso de tecnologias vigentes, condescendiendo la posibilidad de ejecutar investigaciones más efectivas, ya que esto permite tener un punto de partida más claro. Por tanto, los proyectos deben ser elaborados con la visión de crear patentes, registro de procesos, creación de marcas, entre otros, promoviendo el emprendimiento innovador y la creación de Empresas de Base de Conocimiento (EBC) o Empresas de Base Tecnológica (EBT) a partir de los resultados de las investigaciones de la comunidad universitaria.</p>

<h3>Metodología de seguimiento al proceso de registro de los PI</h3>
<p align=\"justify\">La gestora de seguimiento de proyectos de investigación será la responsable de mantener la comunicación con los interesados en presentar los PI, quién estará notificando de acuerdo a la calendarización el paso a paso que requiere la aprobación de los PI. Las notificaciones se realizarán vía correo electrónico o en cualquier inconveniente de conectividad se realizará vía llamada telefónica.</p>

<p align=\"justify\">Para hacer más eficiente el proceso de evaluación del protocolo de investigación, se seguirán los siguientes pasos:</p>
<ul type=\"1\">
\t<li>Al recibir el protocolo de investigación al correo electrónico rafaela.perez@ues.edu.sv, la gestora de seguimiento de proyecto de investigación enviará en el documento al Secretario de Investigaciones. Posteriormente será sometido a evaluación en coordinación con el CEI UES, quienes harán una revisión general del documento. Sí el protocolo de investigación tiene observaciones, este será remitido al interesado para que realice las correcciones pertinentes en el menor tiempo posible.</li>
\t<li>Una vez recibido el documento corregido, el Director Ejecutivo del CIC UES lo enviará a pares evaluadores externos ciegos. La gestora de seguimiento de proyectos de investigación estará notificando al interesado los resultados de la evaluación. El Director Ejecutivo será el encargado de verificar el proceso de corrección de los protocolos de investigación, en caso de que existan observaciones de los pares ciegos. </li>
\t<li>Una vez superada la etapa de revisión, protocolo de investigación será sometido ante el CEI UES para su aprobación o rechazo, dependiendo del dictamen de los expertos ciegos y la evaluación general.</li>
\t
</ul>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/convocatoria20-2022.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 76,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/convocatoria20-2022.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 76);
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
