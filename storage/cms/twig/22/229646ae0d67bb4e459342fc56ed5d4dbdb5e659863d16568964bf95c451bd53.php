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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/otrive.htm */
class __TwigTemplate_ebde80c609a7a002af9e111c08cc7e422b83339711e80043420c7c38138079ba extends \Twig\Template
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
        echo "<h3>¿Que es OTRIVE? </h3>
<p align=\"justify\">Es la <strong>Oficina de Transferencia de los Resultados de Investigación y Vínculo Externo</strong>. Nace en el año 2013 como parte de la Acción Preparatoria financiada por la AECID la cual estaba titulada: <em>“Análisis de la viabilidad de un mecanismo de coordinación nacional entre universidades, instituciones públicas, y sector empresarial para la definición de un marco de asociación España-El Salvador en el sector de la educación superior ciencia y tecnología,”</em> coordinada por la Universidad de Alicante y coordinada por Fonseret (2010) </p>

<h4>¿Cuál es el contexto actual de la innovación, transferencia tecnológica e innovación en El Salvador?</h4>
<p align=\"justify\">El Salvador ha presentado avances en materia de Ciencia y Tecnología que han sido importantes, uno de los que cabe destacar es la creación del Viceministerio de Ciencia y Tecnología, que desde el Ministerio de Educación tienen la función específica de promover la ciencia, la tecnología y la investigación a nivel de país y de las IES. Dos importantes avances se hicieron bajo este Viceministerio, el primero es  la creación plan nacional de Desarrollo Científico y Tecnológico (Vice Ministerio de Ciencia y Tecnología, 2010) cuyo fin ulterior es la construcción de una estructura que permita el desarrollo económico y social. El otro avance importante fue la creación de la Ley de Desarrollo Científico y Tecnológico (Asamblea Legislativa, 2013).</p>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-6\">
     <p align=\"justify\">Esta última se conforma como el cuerpo normativo del Plan creado en 2010, por lo que son complementarios. Al revisar los datos agregados disponibles en cuanto al desenvolvimiento de los indicadores de CyT; pero en particular el de inversión en I+D, los cambios no parecen tan alentadores, ya que se pasó tener una inversión de 0.11% en I+D como ratio del PIB en 2008 a 0.15% en 2016. Este incremento de 0.04% muy poco sirve para compensar las enormes necesidades en innovación que el país tiene en todos los sectores económicos (Figura 1). Esto también por su puesto si comparamos con Costa Rica, que tuvo una inversión en este rubro de 0.46% o Brasil, de los países que ostentan la mayor inversión en I+D para Latinoamérica que fue de 1.27%. </p> 
    </div>
    <div class=\"col-sm-6\">
      <div class=\"jetpack-image-container\">
            <figure style=\"width: 1280px\" class=\"wp-caption alignnone\">
                
                    <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/idrario.jpg");
        echo "\" width=\"1280\" height=\"960\" />
                
                <figcaption class=\"wp-caption-text\">Fig. 1. inversión en investigación y desarrollo como porcentaje del PIB en El Salvador. <br />Fuente: RICYT</figcaption>
            </figure>
        </div>
    </div>
  </div>
 </div>
 
<h3>Marco lógico de trabajo</h3>
<div class=\"container\">
   <div class=\"row\">
    <div class=\"col-sm-4\">
        <h4>Objetivo general</h4>
\t    <p align=\"justify\">Incrementar la interacción entre la Universidad y el sector productivo a través de proyectos de investigación aplicada.</p>
    </div>
    <div class=\"col-sm-4\">
    \t<h4>Indicadores de progreso</h4>
\t\t<p align=\"justify\">Proyectos ejecutados entre la Universidad y el sector productivo. </p>
    </div>
    <div class=\"col-sm-4\">
\t\t<h4>Forma de medir los indicadores</h4>
\t\t\t<ul>
\t\t\t\t<li>Número de proyectos diseñados y en ejecución.</li>
\t\t\t\t<li>Número de docentes e investigadores involucrados.</li>
\t\t\t\t<li>Número de estudiantes involucrados.</li>
\t\t    </ul>
    </div>
  </div>
</div>

<p align=\"center\"><strong>Para más información sobre OTRIVE: \"Escríbenos\"</strong></p>
<a href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/contactenos");
        echo "\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\" aria-pressed=\"true\">Click !Aquí¡ para contáctarnos</a>

<h4>Referencias</h4>
<p>Asamblea Legislativa. (2013). Ley de Desarrollo Científico y Tecnológico. Recuperado de http://www.cienciaytecnologia.edu.sv/jdownloads/Marco%20institucional/ley_de_desarrollo_cientifico_9.pdf</p>
<p>Moreno Fonseret, R. (2010). Acción Preparatoria: Análisis de la viabilidad de un mecanismo de coordinación nacional entre universidades, instituciones públicas, y sector empresarial para la definición de un marco de asociación España-El Salvador en el sector de la educación superior ciencia y tecnología. Resolución: BOE 103 del 30.04.10.</p>
<p>Vice Ministerio de Ciencia y Tecnología. (2010). Plan Nacional de Desarrollo Científico y Tecnológico: Marco de Ejecución de la Agenda Nacional de Investigación. Ministerio de Educación.</p>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/otrive.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  56 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/otrive.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 16, "page" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
