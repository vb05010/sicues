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

/* /websicues/themes/sicues/pages/samples/convocatoria18-2019.htm */
class __TwigTemplate_a336ff2c5fc0631ce287cab71b22715fc2a2b7f32ee3a1686debcff26615b111 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CONVOCATORIA 18 2019</h2>
            <p class=\"lead\">DEL 02 DE MAYO AL 31 DE JULIO DE 2019</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">

   <p align=\"center\"><strong>CALENDARIZACIÓN PARA LA PRESENTACIÓN, EVALUACIÓN Y EJECUCIÓN DE PROYECTOS CONVOCATORIA 2019</strong></p>
   <p><strong>CICLO I:</strong> Presentación y evaluación de Proyectos</p>
   <ul>
   \t<li>Preparación: 02 de mayo al 31 de julio de 2019</li>
   \t<li>Fecha límite de presentación: 31 de julio de 2019</li>
   \t<li>Evaluación: 07 de agosto al 30 de noviembre de 2019</li>
   \t<li>Inicio de notificación a investigadores, diciembre de 2019</li>
   </ul>

   <p><strong>CICLO II:</strong> Período de Ejecución y seguimiento de Proyectos</p>
   <ul>
   \t<li>febrero a diciembre 2020</li>
   </ul>
   
<p><strong>CICLO III:</strong> Evaluación de Resultados de los proyectos ejecutados con fondos institucionales: de febrero a diciembre 2021</p>

<table class=\"table table-bordered table-hover results\">
  <thead>
  <tr>
    <th>Archivos</th>
    <th>Descargar</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Convocatoria 18 2019</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 37
        echo "storage/app/media/Convocatoria18-2019SICUES.pdf";
        echo "\" download=\"Convocatoria18-2019SICUES.pdf\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>Guía para la elaboración de Protocolo de Investigación convocatoria 18-2019</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 41
        echo "storage/app/media/guiaprotocoloinvestigacion2019-sic-ues.docx";
        echo "\" download=\"guiaprotocoloinvestigacion2019-sic-ues.docx\">Descargar</a></span></td>
  </tr>
   <tr>
    <td>Lineamientos para el seguimiento de proyectos investigación</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 45
        echo "storage/app/media/lineamientosparaelseguimientodeproyectos.pdf";
        echo "\" download=\"lineamientosparaelseguimientodeproyectos.pdf\">Descargar</a></span></td>
  </tr>
  <!-- <tr>
    <td>Protocolo de investigación 2019</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 49
        echo "storage/app/media/protocolo_investigacion_2019.docx";
        echo "\" download=\"protocolo_investigacion_2019.docx\">Descargar</a></span></td>
  </tr> -->
  </tbody>
  </table>
  
  <!-- <a class=\"btn btn-primary view-pdf\" href=\"";
        // line 54
        echo "storage/app/media/lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf";
        echo "\">VER LINEAMIENTOS</a> -->
  <!-- <a class=\"btn btn-primary view-pdf\" href=\"";
        // line 55
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
        // line 67
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
        return "/websicues/themes/sicues/pages/samples/convocatoria18-2019.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 67,  106 => 55,  102 => 54,  94 => 49,  87 => 45,  80 => 41,  73 => 37,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CONVOCATORIA 18 2019</h2>
            <p class=\"lead\">DEL 02 DE MAYO AL 31 DE JULIO DE 2019</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">

   <p align=\"center\"><strong>CALENDARIZACIÓN PARA LA PRESENTACIÓN, EVALUACIÓN Y EJECUCIÓN DE PROYECTOS CONVOCATORIA 2019</strong></p>
   <p><strong>CICLO I:</strong> Presentación y evaluación de Proyectos</p>
   <ul>
   \t<li>Preparación: 02 de mayo al 31 de julio de 2019</li>
   \t<li>Fecha límite de presentación: 31 de julio de 2019</li>
   \t<li>Evaluación: 07 de agosto al 30 de noviembre de 2019</li>
   \t<li>Inicio de notificación a investigadores, diciembre de 2019</li>
   </ul>

   <p><strong>CICLO II:</strong> Período de Ejecución y seguimiento de Proyectos</p>
   <ul>
   \t<li>febrero a diciembre 2020</li>
   </ul>
   
<p><strong>CICLO III:</strong> Evaluación de Resultados de los proyectos ejecutados con fondos institucionales: de febrero a diciembre 2021</p>

<table class=\"table table-bordered table-hover results\">
  <thead>
  <tr>
    <th>Archivos</th>
    <th>Descargar</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Convocatoria 18 2019</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/Convocatoria18-2019SICUES.pdf' }}\" download=\"Convocatoria18-2019SICUES.pdf\">Descargar</a></span></td>
  </tr>
  <tr>
    <td>Guía para la elaboración de Protocolo de Investigación convocatoria 18-2019</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/guiaprotocoloinvestigacion2019-sic-ues.docx' }}\" download=\"guiaprotocoloinvestigacion2019-sic-ues.docx\">Descargar</a></span></td>
  </tr>
   <tr>
    <td>Lineamientos para el seguimiento de proyectos investigación</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/lineamientosparaelseguimientodeproyectos.pdf' }}\" download=\"lineamientosparaelseguimientodeproyectos.pdf\">Descargar</a></span></td>
  </tr>
  <!-- <tr>
    <td>Protocolo de investigación 2019</td>
    <td><span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{ 'storage/app/media/protocolo_investigacion_2019.docx' }}\" download=\"protocolo_investigacion_2019.docx\">Descargar</a></span></td>
  </tr> -->
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

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/convocatoria18-2019.htm", "");
    }
}
