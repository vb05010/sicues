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

/* /websicues/themes/sicues/partials/bottom.htm */
class __TwigTemplate_a5df197b4d147a31e2e0c2044b14c417eed3f5385cfabbeb3382cd6eef555301 extends \Twig\Template
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
        echo "<div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>SIC-UES</h3>
                    <ul>
                        <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("inicio");
        echo "\">Inicio</a></li>
                        <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/trabajos-presentados");
        echo "\">Producción Científica</a></li>
                        <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/cic-ues");
        echo "\">CIC-UES</a></li>
                        <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/memoria-labores");
        echo "\">Documentos</a></li>
                        <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\">Contáctenos</a></li>
                        <li><a href=\"http://www.transparencia.ues.edu.sv/\" target=\"_blank\">Portal de Transparencia UES</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Centros e Institutos</h3>
                    <ul>
                        <li><a href=\"http://www.censalud.ues.edu.sv/\" target=\"_blank\">CENSALUD</a></li>
                        <li><a href=\"#\">IEHAA</a></li>
                        <li><a href=\"#\">ICT-UES</a></li>
                        <li><a href=\"http://icmares.cimat.ues.edu.sv\" target=\"_blank\">ICMARES</a></li>
                        <li><a href=\"#\">CIAN</a></li>
                        <li><a href=\"#\">CIV</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Facultades</h3>
                    <ul>
                        <li><a href=\"http://www.cimat.ues.edu.sv/\" target=\"_blank\"> Ciencias Naturales y Matemática</a></li>
                        <li><a href=\"http://www.agronomia.ues.edu.sv/\" target=\"_blank\">Ciencias Agronómicas</a></li>
                        <li><a href=\"http://www.jurisprudencia.ues.edu.sv/\" target=\"_blank\">Jurisprudencia y Ciencias Sociales</a></li>
                        <li><a href=\"http://www.medicina.ues.edu.sv/\" target=\"_blank\">Medicina</a></li>
                        <li><a href=\"http://www.fce.ues.edu.sv/\" target=\"_blank\">Ciencias Economicas</a></li>
                        <li><a href=\"http://www.fia.ues.edu.sv/\" target=\"_blank\">Ingeniería y Arquitectura</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Facultades</h3>
                    <ul>
\t\t\t\t\t\t<li><a href=\"http://www.odontologia.ues.edu.sv/\" target=\"_blank\">Odontología</a></li>
\t\t\t\t\t\t<li><a href=\"http://www.quimicayfarmacia.ues.edu.sv/\" target=\"_blank\">Química y Farmacia</a></li>
                        <li><a href=\"http://www.humanidades.ues.edu.sv/\" target=\"_blank\">Humaninades</a></li>
                        <li><a href=\"http://www.uesocc.edu.sv/\" target=\"_blank\">Multisdisciplinara de Occidente</a></li>
                        <li><a href=\"http://fmp.ues.edu.sv/\" target=\"_blank\">Multisdisciplinara Paracentral</a></li>
                        <li><a href=\"http://www.fmoues.edu.sv/\" target=\"_blank\">Multisdisciplinara de Oriente</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>SIC-UES</h3>
                    <ul>
                        <li><a href=\"{{ 'inicio'|page }}\">Inicio</a></li>
                        <li><a href=\"{{'samples/trabajos-presentados'|page}}\">Producción Científica</a></li>
                        <li><a href=\"{{'samples/cic-ues'|page}}\">CIC-UES</a></li>
                        <li><a href=\"{{'samples/memoria-labores'|page}}\">Documentos</a></li>
                        <li><a href=\"{{ 'samples/contact'|page }}\">Contáctenos</a></li>
                        <li><a href=\"http://www.transparencia.ues.edu.sv/\" target=\"_blank\">Portal de Transparencia UES</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Centros e Institutos</h3>
                    <ul>
                        <li><a href=\"http://www.censalud.ues.edu.sv/\" target=\"_blank\">CENSALUD</a></li>
                        <li><a href=\"#\">IEHAA</a></li>
                        <li><a href=\"#\">ICT-UES</a></li>
                        <li><a href=\"http://icmares.cimat.ues.edu.sv\" target=\"_blank\">ICMARES</a></li>
                        <li><a href=\"#\">CIAN</a></li>
                        <li><a href=\"#\">CIV</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Facultades</h3>
                    <ul>
                        <li><a href=\"http://www.cimat.ues.edu.sv/\" target=\"_blank\"> Ciencias Naturales y Matemática</a></li>
                        <li><a href=\"http://www.agronomia.ues.edu.sv/\" target=\"_blank\">Ciencias Agronómicas</a></li>
                        <li><a href=\"http://www.jurisprudencia.ues.edu.sv/\" target=\"_blank\">Jurisprudencia y Ciencias Sociales</a></li>
                        <li><a href=\"http://www.medicina.ues.edu.sv/\" target=\"_blank\">Medicina</a></li>
                        <li><a href=\"http://www.fce.ues.edu.sv/\" target=\"_blank\">Ciencias Economicas</a></li>
                        <li><a href=\"http://www.fia.ues.edu.sv/\" target=\"_blank\">Ingeniería y Arquitectura</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Facultades</h3>
                    <ul>
\t\t\t\t\t\t<li><a href=\"http://www.odontologia.ues.edu.sv/\" target=\"_blank\">Odontología</a></li>
\t\t\t\t\t\t<li><a href=\"http://www.quimicayfarmacia.ues.edu.sv/\" target=\"_blank\">Química y Farmacia</a></li>
                        <li><a href=\"http://www.humanidades.ues.edu.sv/\" target=\"_blank\">Humaninades</a></li>
                        <li><a href=\"http://www.uesocc.edu.sv/\" target=\"_blank\">Multisdisciplinara de Occidente</a></li>
                        <li><a href=\"http://fmp.ues.edu.sv/\" target=\"_blank\">Multisdisciplinara Paracentral</a></li>
                        <li><a href=\"http://www.fmoues.edu.sv/\" target=\"_blank\">Multisdisciplinara de Oriente</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>", "/websicues/themes/sicues/partials/bottom.htm", "");
    }
}
