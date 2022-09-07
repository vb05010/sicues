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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/sicues.htm */
class __TwigTemplate_b2b0220a0abcbd162098915789e9f23b4fddb1680f45102f8001ad6bf5141271 extends \Twig\Template
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
        echo "<h3>Secretaría de investigaciones Científicas de la Universidad de El Salvador</h3>
<p align=\"justify\">En el año 2012 se desarrolló un taller para dar paso a la creación de la Secretaría de Investigaciones Científicas de la Universidad de El Salvador (SIC-UES), con el Acuerdo Nº 021-
2013-2015 (X-1) del Consejo Superior Universitario, tomado en sesión ordinaria celebrada el día 15 de mayo de 2014, se aprobó la propuesta de conformación de la Secretaría de Investigaciones
Científicas, como organismo que promueve, coordina, gestiona la investigación científica bajo políticas y estrategias definidas, priorizando áreas de acción. Todo con el fin de facilitar, agilizar
y proponer cambios a las instancias administrativas correspondientes, así como innovar los sistemas universitarios implicados en el proceso de investigación.</p>

<p align=\"justify\">La Secretaría debe ser el organismo de promoción de la cultura de investigación y la divulgación de la actividad científica desarrollada en la Universidad, cuyo resultado será la
generación de nuevo conocimiento de carácter interdisciplinario, pertinente que facilite la obtención de recursos financieros de apoyo a la investigación básica y aplicada. De esta manera
se busca posicionar a la Universidad de El Salvador, como la institución de educación superior líder en temas de investigación científica que responda satisfactoriamente a las transformaciones
y necesidades de la sociedad salvadoreña.</p>

<h4>Misión</h4>
<p align=\"justify\">La Secretaría de Investigaciones Científicas de la Universidad de El Salvador (SIC-UES) es la unidad orgánica encargada de coordinar los esfuerzos de la investigación científica que realiza la Universidad de El Salvador, por medio de las actividades de investigación en las Facultades, los Centros, Institutos y Unidades de Investigación, orientadas a la gestión, promoción, avance, seguimiento y divulgación de las investigaciones científicas generadoras de nuevo conocimiento, para contribuir al desarrollo y el bienestar social y económico del país.</p>

<h4>Visión</h4>
<p align=\"justify\">Constituirse en la Unidad que trabaja para hacer de la investigación científica una cultura y una práctica académica relevante en la Universidad de El Salvador, posicionándola como la institución líder a nivel nacional y regional, que realiza investigación pertinente, de actualidad, de calidad y con sentido crítico, de acuerdo a las necesidades del país y de la región centroamericana.</p>

<h4>Objetivos</h4>
<p><ul>
<li><p align=\"justify\">Fortalecer la capacidad de investigación científica, tecnológica y la innovación en la Universidad de El Salvador a fin de promover la superación académica institucional e impactar en el desarrollo económico y social del país, en concordancia con la Ley de Desarrollo Científico y Tecnológico de El Salvador;</p></li>
<li><p align=\"justify\">Integrar la investigación como parte del quehacer académico de la comunidad  universitaria;</p></li>
<li><p align=\"justify\">Posicionar a la UES como líder, a nivel de la Educación Superior Universitaria,  en el campo de la investigación.</p></li>
<li><p align=\"justify\">Promover la conformación coordinada del tejido de investigaciones científicas de la Universidad de El Salvador, entre las Unidades de Investigación o su equivalente en las Facultades, así como con los Institutos y Centros de Investigación existentes o futuros;</p></li>
<li><p align=\"justify\">Facilitar y promover la cultura de la investigación interdisciplinaria;</p></li>
<li><p align=\"justify\">Incorporar los adelantos tecnológicos creativos e innovadores a las tareas de investigación;</p></li>
<li><p align=\"justify\">Promover la generación de respuestas científicas a las necesidades de la sociedad en el campo de la investigación;</p></li>
<li><p align=\"justify\">Garantizar que la transferencia del conocimiento a la sociedad, producto de la labor investigativa de la Universidad de El Salvador, sea pertinente, ágil, oportuna y actualizada;</p></li>
</ul></p>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/sicues.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/sicues.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
