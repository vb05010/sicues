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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/seguimiento-proyectos.htm */
class __TwigTemplate_354297d7973f8e3122ee3ac9c93ab78870fa3053038e531fa01bd75ac3a3b059 extends \Twig\Template
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
        echo "<p align=\"justify\">Una de las funciones sustantivas de la Universidad de El Salvador es la investigación, y como parte de la mejora continua, en los últimos años ha aumentado el número de académicos que desarrollan y participan en proyectos de investigación, generando productos y conocimiento que es necesario conservar. Cada vez resulta más importante llevar a cabo un seguimiento y registro de la información sobre los proyectos de investigación: número de proyectos, fuentes de financiamiento, grado de avance, tipo de colaboradores y productos generados; esto con el fin de generar los reportes necesarios y obtener las estadísticas que permitan la toma de decisiones a los responsables de dar seguimiento al cumplimiento de las funciones sustantivas de la institución.</p>
    <h4>Equipo de seguimiento</h4>
    <p align=\"justify\">El equipo de seguimiento de proyectos, conformado por el Director Ejecutivo, la Gestora de Seguimiento de Proyectos, y otros que a consideración se soliciten con el visto bueno del Secretario de Investigaciones Científicas; será el responsable de recibir y posteriormente a analizar los informes e instrumentos presentados por el Ejecutor/Investigador del proyecto. Además, será el encargado de constatar que los informes presentados sean verídicos a través de la realización de viajes de campo. De esta manera, el equipo de seguimiento podrá realizar valoraciones y emitir recomendaciones para el mejor desempeño de la ejecución del proyecto.</p>
    <h4>¿Cuándo se hace seguimiento?</h4>
    <p align\"justify\">El proceso de seguimiento es un proceso continuo, integrado en el proyecto desde su inicio.</p>
    <h4>Ejecutor/ Investigador principal del proyecto</h4>
    <p align=\"justify\">El investigador es responsable de presentar informes de avance en la ejecución del proyecto, cada tres meses, de acuerdo al punto 1.5 de los Lineamientos para Seguimiento de Proyectos, vinculado con el Art. 32 del Reglamento del Consejo de Investigaciones Científicas de la Universidad de El Salvador.  Igualmente, debe presentar lo requerido por el punto 3.2 de los Lineamientos para Seguimiento de Proyectos.</p>
    <p align=\"justify\">Para conocer más acerca de la metodología de seguimiento de Proyectos de investigación; contactar con: </p>
    <p><i class=\"fa fa-user\" aria-hidden=\"true\"></i></i> <strong>Rafaela de los Ángeles Pérez</strong> <br /> <i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> Gestora de Seguiemiento de Proyectos de investigación<br /> <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> rafaela.perez@ues.edu.sv</p>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/seguimiento-proyectos.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/seguimiento-proyectos.htm", "");
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
