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
class __TwigTemplate_7a69b2a84d494264fb3c2399900cd3e6ea5ad5c0dcf73427090bdc4223f7e3b3 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-epic-sic.jpg");
        echo " style=\"width: 66px;height:66px;\" class=\"img-responsive img-circle\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\"><strong>POPULARIZANDO LA CIENCIA</strong></font></p>
                                <p><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i> <a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\">Canal Youtube</a> | <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"> Facebook</a> </br> <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/epi-sic");
        echo "\">Horarios de Transmisión</a></p>
                                <!--<span><strong>-John Doe/</strong> Director of corlate.com</span>-->
                            </div>
                         </div>
 \t\t\t\t\t<div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/memoria-labores");
        echo "\"> <img class=\"img-responsive img-circle\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/folder-download.png");
        echo "\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\"><strong>DESCARGA DE DOCUMENTOS</strong></font></p>
                                <p><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/memoria-labores");
        echo "\">Memoria de Labores</a> | <i class=\"fa fa-download\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/informes");
        echo "\"> Informes</a> </br> <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos-aprobados");
        echo "\">Proyectos aprobados</a> | <i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/eventos");
        echo "\">Eventos</a></p>
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
        return array (  99 => 35,  95 => 34,  91 => 33,  82 => 29,  73 => 23,  62 => 17,  52 => 10,  48 => 9,  42 => 6,  35 => 1,);
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
                                <a href=\"{{'samples/epi-sic'|page}}\"><img src={{'assets/images/logo-epic-sic.jpg'|theme}} style=\"width: 66px;height:66px;\" class=\"img-responsive img-circle\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\"><strong>POPULARIZANDO LA CIENCIA</strong></font></p>
                                <p><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i> <a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\">Canal Youtube</a> | <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"> Facebook</a> </br> <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"{{'samples/epi-sic'|page}}\">Horarios de Transmisión</a></p>
                                <!--<span><strong>-John Doe/</strong> Director of corlate.com</span>-->
                            </div>
                         </div>
 \t\t\t\t\t<div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <a href=\"{{'samples/memoria-labores'|page}}\"> <img class=\"img-responsive img-circle\" src=\"{{ 'assets/images/folder-download.png'|theme }}\"></a>
                            </div>
                            <div class=\"media-body\">
                                <p align=\"left\"><font color=\"#aa0000\"><strong>DESCARGA DE DOCUMENTOS</strong></font></p>
                                <p><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{'samples/memoria-labores'|page}}\">Memoria de Labores</a> | <i class=\"fa fa-download\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"{{'samples/informes'|page}}\"> Informes</a> </br> <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"{{'samples/proyectos-aprobados'|page}}\">Proyectos aprobados</a> | <i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{'samples/eventos'|page}}\">Eventos</a></p>
                                <!--<span><strong>-John Doe/</strong> Director of corlate.com</span>-->
                            </div>
                         </div>

                    </div>
                </div>", "/websicues/themes/sicues/partials/testimonials.htm", "");
    }
}
