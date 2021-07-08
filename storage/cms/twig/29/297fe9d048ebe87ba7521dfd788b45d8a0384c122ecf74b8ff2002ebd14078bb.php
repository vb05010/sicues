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

/* /websicues/themes/sicues/partials/menudescargas.htm */
class __TwigTemplate_1fef54e190cc8af4bb7f9e34037910ae5e19ecd2ed7ec5a1cda9f6df5bc30aec extends \Twig\Template
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
        echo "<div class=\"widget archieve\">
                        <h3>DOCUMENTOS</h3>
                        <div class=\"row\">
<div class=\"col-sm-12\">
\t<ul class=\"blog_archieve\">
\t        <li><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/memoria-labores");
        echo "\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> Memorias de Labores <span class=\"pull-right\">(1)</span></a></li>
\t        <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/informes");
        echo "\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> Informes y Documentos <span class=\"pull-right\">(3)</a></li>
\t        <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos-aprobados");
        echo "\"><i class=\"fa fa-check-square-o\"></i> Proyectos Aprobados <span class=\"pull-right\">(2002-2015)</a></li>
\t         <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/aprobados-y-finalizados");
        echo "\"><i class=\"fa fa-bar-chart\"></i> Proyectos Aprobados <span class=\"pull-right\">(Gráficos 2002-2015)</a></li>
\t        <!--<li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/inversion");
        echo "\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> Inversión Proyectos <span class=\"pull-right\">(2002-2003)</a></li>-->
\t        <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/eventos");
        echo "\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> EVENTOS <span class=\"pull-right\">(Talleres, Conferencias, etc.)</a></li>
\t        </ul>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/menudescargas.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget archieve\">
                        <h3>DOCUMENTOS</h3>
                        <div class=\"row\">
<div class=\"col-sm-12\">
\t<ul class=\"blog_archieve\">
\t        <li><a href=\"{{ 'samples/memoria-labores'|page }}\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> Memorias de Labores <span class=\"pull-right\">(1)</span></a></li>
\t        <li><a href=\"{{ 'samples/informes'|page }}\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> Informes y Documentos <span class=\"pull-right\">(3)</a></li>
\t        <li><a href=\"{{ 'samples/proyectos-aprobados'|page }}\"><i class=\"fa fa-check-square-o\"></i> Proyectos Aprobados <span class=\"pull-right\">(2002-2015)</a></li>
\t         <li><a href=\"{{ 'samples/aprobados-y-finalizados'|page }}\"><i class=\"fa fa-bar-chart\"></i> Proyectos Aprobados <span class=\"pull-right\">(Gráficos 2002-2015)</a></li>
\t        <!--<li><a href=\"{{ 'samples/inversion'|page }}\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> Inversión Proyectos <span class=\"pull-right\">(2002-2003)</a></li>-->
\t        <li><a href=\"{{ 'samples/eventos'|page }}\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i> EVENTOS <span class=\"pull-right\">(Talleres, Conferencias, etc.)</a></li>
\t        </ul>
</div>
</div>
</div>", "/websicues/themes/sicues/partials/menudescargas.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
