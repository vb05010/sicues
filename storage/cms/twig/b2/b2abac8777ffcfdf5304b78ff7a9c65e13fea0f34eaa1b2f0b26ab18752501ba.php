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

/* /websicues/themes/sicues/partials/testimonials.htm */
class __TwigTemplate_ea995344611c82f5403798ef18dd3d212b1d37dfd99c44cb2587606b240b47a6 extends \Twig\Template
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
        echo "<div class=\"col-xs-12 col-sm-4 wow fadeInDown\">
                    <div class=\"testimonial\">
                        <!--<h2>EVENTOS</h2>-->
                         <!-- <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <a href=\"http://vinculacion.sic.ues.edu.sv/\" target=\"_blank\"><img class=\"img-responsive img-circle\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sobre-nosotros.png");
        echo "\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\" size=\"4\"><strong><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/sobre-nosotros");
        echo "\">Sobre Nosotros</a></strong></font></p> 
                                <p><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>  <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/sobre-nosotros");
        echo "\">Leer Más ></a></p>
                                
                            </div>
                         </div> -->

                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/epi-sic");
        echo "\"><img src=";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonials1.png");
        echo " style=\"width: 66px;height:66px;\" class=\"img-responsive img-circle\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\"><strong>PROYECTOS DE INVESTIGACIÓN</strong></font></p>
                                <p><i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> <a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/convocatoria19-2020.htm");
        echo "\">Convocatoria 19 2020</a> | <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"#\"> Consultar</a> </br> <i class=\"fa fa-file-text\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 23
        echo "storage/app/media/protocolo_investigacion.docx";
        echo "\" download=\"protocolo_investigacion.docx\">Protocolo de Investigación</a></p>
                                <!--<span><strong>-John Doe/</strong> Director of corlate.com</span>-->
                            </div>
                         </div>
 \t\t\t\t\t<div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/memoria-labores");
        echo "\"> <img class=\"img-responsiveprotoco img-circle\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonials2.png");
        echo "\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\"><strong>REDES DE INVESTIGADORES</strong></font></p>
                                <p><i class=\"fa fa-spinner\" aria-hidden=\"true\"></i> <a href=\"https://sic.ues.edu.sv/riues/\" target=\"_blank\"> Sistema RI-UES</a> | <i class=\"fa fa-bullseye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"https://sic.ues.edu.sv/refcs/\" target=\"_blank\"> REFCS</a> </br> <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"#\">!Conoce como registrarse en RI-UES¡</a> 
                                <!--<span><strong>-John Doe/</strong> Director of corlate.com</span>-->
                            </div>
                         </div>

                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  80 => 23,  75 => 21,  66 => 17,  56 => 10,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xs-12 col-sm-4 wow fadeInDown\">
                    <div class=\"testimonial\">
                        <!--<h2>EVENTOS</h2>-->
                         <!-- <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <a href=\"http://vinculacion.sic.ues.edu.sv/\" target=\"_blank\"><img class=\"img-responsive img-circle\" src=\"{{ 'assets/images/sobre-nosotros.png'|theme }}\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\" size=\"4\"><strong><a href=\"{{'samples/sobre-nosotros'|page}}\">Sobre Nosotros</a></strong></font></p> 
                                <p><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>  <a href=\"{{'samples/sobre-nosotros'|page}}\">Leer Más ></a></p>
                                
                            </div>
                         </div> -->

                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <a href=\"{{'samples/epi-sic'|page}}\"><img src={{'assets/images/testimonials1.png'|theme}} style=\"width: 66px;height:66px;\" class=\"img-responsive img-circle\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\"><strong>PROYECTOS DE INVESTIGACIÓN</strong></font></p>
                                <p><i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> <a href=\"{{'samples/convocatoria19-2020.htm'|page}}\">Convocatoria 19 2020</a> | <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"#\"> Consultar</a> </br> <i class=\"fa fa-file-text\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"{{'storage/app/media/protocolo_investigacion.docx'}}\" download=\"protocolo_investigacion.docx\">Protocolo de Investigación</a></p>
                                <!--<span><strong>-John Doe/</strong> Director of corlate.com</span>-->
                            </div>
                         </div>
 \t\t\t\t\t<div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <a href=\"{{'samples/memoria-labores'|page}}\"> <img class=\"img-responsiveprotoco img-circle\" src=\"{{ 'assets/images/testimonials2.png'|theme }}\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\"><strong>REDES DE INVESTIGADORES</strong></font></p>
                                <p><i class=\"fa fa-spinner\" aria-hidden=\"true\"></i> <a href=\"https://sic.ues.edu.sv/riues/\" target=\"_blank\"> Sistema RI-UES</a> | <i class=\"fa fa-bullseye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"https://sic.ues.edu.sv/refcs/\" target=\"_blank\"> REFCS</a> </br> <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"#\">!Conoce como registrarse en RI-UES¡</a> 
                                <!--<span><strong>-John Doe/</strong> Director of corlate.com</span>-->
                            </div>
                         </div>

                    </div>
                </div>", "/websicues/themes/sicues/partials/testimonials.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 6, "page" => 9);
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
