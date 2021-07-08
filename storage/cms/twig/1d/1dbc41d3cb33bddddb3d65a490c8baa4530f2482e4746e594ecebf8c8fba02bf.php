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

/* /websicues/themes/sicues/pages/samples/convocatoria19-2020.htm */
class __TwigTemplate_d4a67cebabdfa8560674e0c2b70e7b24364db173448c25f112aef91ccc44f97c extends \Twig\Template
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
            <h2>CONVOCATORIA 19 2020</h2>
            <p class=\"lead\">DEL 02 DE MAYO AL 31 DE JULIO DE 2020</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">

   <p align=\"center\"><strong>CALENDARIZACIÓN PARA LA PRESENTACIÓN, EVALUACIÓN Y EJECUCIÓN DE PROYECTOS CONVOCATORIA 2020</strong></p>
   <p><strong>FASE I:</strong> Presentación y evaluación de Proyectos</p>
   <ul>
   \t<li>Preparación: 25 de mayo al 12 de septiembre de 2020</li>
   \t<li>Fecha límite de presentación: 12 de septiembre de 2020</li>
   \t<li>Observaciones preliminares: 14 de septiembre al 31 octubre 2020.</li>
   \t<li>Evaluación por pares externos: 01 de noviembre al 14 de diciembre de 2020.</li>
   \t<li>Entrega por parte de los investigadores(as) de proyectos definitivos con observaciones incorporadas, 15 diciembre de 2020 al 15 de enero de 2021.</li>
   \t<li>Inicio de notificación a investigadores, a partir del 16 de enero 2021.</li>
   </ul>

   <p><strong>FASE II:</strong> Evaluación de Resultados de los proyectos ejecutados para publicarlos en Revista Nacionales o Internacionales y presentados a la sociedad civil: de enero a diciembre 2022.</p>
   <!-- <ul>
   \t<li>febrero a diciembre 2021</li>
   </ul>
   
   <p><strong>CICLO III:</strong> Evaluación de Resultados de los proyectos ejecutados con fondos institucionales: de febrero a diciembre 2022</p> -->

<table class=\"table table-bordered table-hover results\">
  <thead>
  <tr>
    <th>Archivos</th>
    <th>Descargar</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Convocatoria 19 2020</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 39
        echo "storage/app/media/convocatoria19_2020.pdf";
        echo "\" download=\"convocatoria19_2020.pdf\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>Guía para el llenado del Protocolo de Investigación. Convocatoria 19-2020</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 43
        echo "storage/app/media/guiaprotocoloinvestigacion.pdf";
        echo "\" download=\"guiaprotocoloinvestigacion.pdf\">Descargar</a></span></td>
  </tr>
   <!-- <tr>
    <td>Lineamientos para el seguimiento de proyectos investigación</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 47
        echo "storage/app/media/lineamientosparaelseguimientodeproyectos.pdf";
        echo "\" download=\"lineamientosparaelseguimientodeproyectos.pdf\">Descargar</a></span></td>
     </tr> -->
  <tr>
    <td>Protocolo de investigación</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 51
        echo "storage/app/media/protocolo_investigacion.docx";
        echo "\" download=\"protocolo_investigacion.docx\">Descargar</a></span></td>
  </tr>
  </tbody>
  </table>
  
  <!-- <a class=\"btn btn-primary view-pdf\" href=\"";
        // line 56
        echo "storage/app/media/lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf";
        echo "\">VER LINEAMIENTOS</a> -->
  <!-- <a class=\"btn btn-primary view-pdf\" href=\"";
        // line 57
        echo "storage/app/media/guiaparaelaborarprotocoloinvestigacionCONVOCATGORIA17-2018.pdf";
        echo "\">VER GUÍA</a> -->
  
  <p align=\"center\">Para registrar su proyecto hacer click en el siguiente enlace: <a class=\"btn btn-success\" href=\"https://sipc.sic.ues.edu.sv\" target=\"blank\" role=\"button\">REGISTRAR PROYECTO</a></p>
          </div><!--/.col-md-8-->
            <aside class=\"col-md-4\">
                     <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
          
        <div class=\"widget archieve\">
                        ";
        // line 69
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
        return "/websicues/themes/sicues/pages/samples/convocatoria19-2020.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 69,  112 => 57,  108 => 56,  100 => 51,  93 => 47,  86 => 43,  79 => 39,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CONVOCATORIA 19 2020</h2>
            <p class=\"lead\">DEL 02 DE MAYO AL 31 DE JULIO DE 2020</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">

   <p align=\"center\"><strong>CALENDARIZACIÓN PARA LA PRESENTACIÓN, EVALUACIÓN Y EJECUCIÓN DE PROYECTOS CONVOCATORIA 2020</strong></p>
   <p><strong>FASE I:</strong> Presentación y evaluación de Proyectos</p>
   <ul>
   \t<li>Preparación: 25 de mayo al 12 de septiembre de 2020</li>
   \t<li>Fecha límite de presentación: 12 de septiembre de 2020</li>
   \t<li>Observaciones preliminares: 14 de septiembre al 31 octubre 2020.</li>
   \t<li>Evaluación por pares externos: 01 de noviembre al 14 de diciembre de 2020.</li>
   \t<li>Entrega por parte de los investigadores(as) de proyectos definitivos con observaciones incorporadas, 15 diciembre de 2020 al 15 de enero de 2021.</li>
   \t<li>Inicio de notificación a investigadores, a partir del 16 de enero 2021.</li>
   </ul>

   <p><strong>FASE II:</strong> Evaluación de Resultados de los proyectos ejecutados para publicarlos en Revista Nacionales o Internacionales y presentados a la sociedad civil: de enero a diciembre 2022.</p>
   <!-- <ul>
   \t<li>febrero a diciembre 2021</li>
   </ul>
   
   <p><strong>CICLO III:</strong> Evaluación de Resultados de los proyectos ejecutados con fondos institucionales: de febrero a diciembre 2022</p> -->

<table class=\"table table-bordered table-hover results\">
  <thead>
  <tr>
    <th>Archivos</th>
    <th>Descargar</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Convocatoria 19 2020</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/convocatoria19_2020.pdf' }}\" download=\"convocatoria19_2020.pdf\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>Guía para el llenado del Protocolo de Investigación. Convocatoria 19-2020</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/guiaprotocoloinvestigacion.pdf' }}\" download=\"guiaprotocoloinvestigacion.pdf\">Descargar</a></span></td>
  </tr>
   <!-- <tr>
    <td>Lineamientos para el seguimiento de proyectos investigación</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/lineamientosparaelseguimientodeproyectos.pdf' }}\" download=\"lineamientosparaelseguimientodeproyectos.pdf\">Descargar</a></span></td>
     </tr> -->
  <tr>
    <td>Protocolo de investigación</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/protocolo_investigacion.docx' }}\" download=\"protocolo_investigacion.docx\">Descargar</a></span></td>
  </tr>
  </tbody>
  </table>
  
  <!-- <a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf'}}\">VER LINEAMIENTOS</a> -->
  <!-- <a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/guiaparaelaborarprotocoloinvestigacionCONVOCATGORIA17-2018.pdf'}}\">VER GUÍA</a> -->
  
  <p align=\"center\">Para registrar su proyecto hacer click en el siguiente enlace: <a class=\"btn btn-success\" href=\"https://sipc.sic.ues.edu.sv\" target=\"blank\" role=\"button\">REGISTRAR PROYECTO</a></p>
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

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/convocatoria19-2020.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 69);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                [],
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
