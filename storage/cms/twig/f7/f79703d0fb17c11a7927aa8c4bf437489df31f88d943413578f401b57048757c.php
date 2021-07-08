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

/* /websicues/themes/sicues/pages/samples/cic-ues.htm */
class __TwigTemplate_7eedd8f061fb7d9580bda67340f869ba4d69257cd5741d989654205383dd88ac extends \Twig\Template
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
            <h2>CIC-UES</h2>
            <p class=\"lead\">Consejo de Investigaciones Científicas de la Universidad de El Salvador.</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                        <a class=\"btn btn-primary view-pdf\" href=\"";
        // line 14
        echo "storage/app/media/ultimopoliticasdeinvestigacionencienciaytecnologiauescsu.pdf";
        echo "\">Ver PDF</a>
                                        <a href=\"";
        // line 15
        echo "storage/app/media/antecedentes-y-politicas.pdf";
        echo "\" download=\"antecedentes-y-politicas.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Políticas de Investigación</h2>
                                    <p align=\"justify\">Antecedentes: En la segunda mitad del siglo XX la vida de la Universidad es un reflejo de los acontecimientos que ha vivido el país. En el tiempo delimitado de análisis se distinguen dos períodos claramente definidos, uno de auge y otro de decadencia de la investigación.  </p>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                     <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                    \t<a class=\"btn btn-primary view-pdf\" href=\"";
        // line 29
        echo "storage/app/media/reglamento-del-cic-ues.pdf";
        echo "\">Ver PDF</a>
                                    \t<a href=\"";
        // line 30
        echo "storage/app/media/reglamento-del-cic-ues.pdf";
        echo "\" download=\"reglamento-del-cic-ues.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Reglamento del CIC-UES</h2>
                                    <p align=\"left\"><strong>LA ASAMBLEA GENERAL UNIVERSITARIA DE LA UNIVERSIDAD DE EL SALVADOR CONSIDERANDO:</strong></p>
                 <ol type=\"I\">
                    <li><p align=\"justify\">Que para lograr el cumplimiento de los fines de la Universidad es de primordial interés promover, orientar y coordinar la investigación científica y tecnológica.</p></li>
                    </ol>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                    <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                    \t<a class=\"btn btn-primary view-pdf\" href=\"";
        // line 48
        echo "storage/app/media/lineamientoseguimientoproyectossic.pdf";
        echo "\">Ver PDF</a>
                                    \t<a href=\"";
        // line 49
        echo "storage/app/media/lineamientoseguimientoproyectossic.pdf";
        echo "\" download=\"lineamientoseguimientoproyectossic.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Lineamientos</h2>
                                    <p>LINEAMIENTOS PARA SEGUIMIENTO DE PROYECTOS DE INVESTIGACIÓN</p>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                       <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                    \t<!-- <a class=\"btn btn-primary view-pdf\" href=\"";
        // line 64
        echo "storage/app/media/guiaprotocoloinvestigacion2019-sic-ues.docx";
        echo "\">Ver PDF</a> -->
                                    \t<a href=\"";
        // line 65
        echo "storage/app/media/guiaprotocoloinvestigacion2019-sic-ues.docx";
        echo "\" download=\"guiaprotocoloinvestigacion2019-sic-ues.docx\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Protocolo de Investigación</h2>
                                    <p>Guía para la elaboraciòn de propuesta de investigación CONVOCATORIA 18-2019</p>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                    </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                         ";
        // line 85
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("producion-cientifica"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "            
                    </div><!--/.producción científica-->
    \t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
    
    <style>
    \t    .iframe-container {    
    padding-bottom: 60%;
    padding-top: 30px; height: 0; overflow: hidden;
}
 
.iframe-container iframe,
.iframe-container object,
.iframe-container embed{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.modal.in .modal-dialog {
  transform: none; /*translate(0px, 0px);*/
}
    </style>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/cic-ues.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 85,  126 => 65,  122 => 64,  104 => 49,  100 => 48,  79 => 30,  75 => 29,  58 => 15,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CIC-UES</h2>
            <p class=\"lead\">Consejo de Investigaciones Científicas de la Universidad de El Salvador.</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                        <a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/ultimopoliticasdeinvestigacionencienciaytecnologiauescsu.pdf'}}\">Ver PDF</a>
                                        <a href=\"{{'storage/app/media/antecedentes-y-politicas.pdf'}}\" download=\"antecedentes-y-politicas.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Políticas de Investigación</h2>
                                    <p align=\"justify\">Antecedentes: En la segunda mitad del siglo XX la vida de la Universidad es un reflejo de los acontecimientos que ha vivido el país. En el tiempo delimitado de análisis se distinguen dos períodos claramente definidos, uno de auge y otro de decadencia de la investigación.  </p>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                     <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                    \t<a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/reglamento-del-cic-ues.pdf'}}\">Ver PDF</a>
                                    \t<a href=\"{{'storage/app/media/reglamento-del-cic-ues.pdf'}}\" download=\"reglamento-del-cic-ues.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Reglamento del CIC-UES</h2>
                                    <p align=\"left\"><strong>LA ASAMBLEA GENERAL UNIVERSITARIA DE LA UNIVERSIDAD DE EL SALVADOR CONSIDERANDO:</strong></p>
                 <ol type=\"I\">
                    <li><p align=\"justify\">Que para lograr el cumplimiento de los fines de la Universidad es de primordial interés promover, orientar y coordinar la investigación científica y tecnológica.</p></li>
                    </ol>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                    <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                    \t<a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/lineamientoseguimientoproyectossic.pdf'}}\">Ver PDF</a>
                                    \t<a href=\"{{'storage/app/media/lineamientoseguimientoproyectossic.pdf'}}\" download=\"lineamientoseguimientoproyectossic.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Lineamientos</h2>
                                    <p>LINEAMIENTOS PARA SEGUIMIENTO DE PROYECTOS DE INVESTIGACIÓN</p>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                       <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                    \t<!-- <a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/guiaprotocoloinvestigacion2019-sic-ues.docx'}}\">Ver PDF</a> -->
                                    \t<a href=\"{{'storage/app/media/guiaprotocoloinvestigacion2019-sic-ues.docx'}}\" download=\"guiaprotocoloinvestigacion2019-sic-ues.docx\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Protocolo de Investigación</h2>
                                    <p>Guía para la elaboraciòn de propuesta de investigación CONVOCATORIA 18-2019</p>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                    </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <!--<div class=\"widget search\">-->
                        <!--<form role=\"form\">-->
                                <!--<input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Buscar Aquí\">-->
                        <!--</form>-->
                    <!--</div>--><!--/.search-->
    \t\t\t\t<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                         {%partial 'producion-cientifica'%}            
                    </div><!--/.producción científica-->
    \t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
    
    <style>
    \t    .iframe-container {    
    padding-bottom: 60%;
    padding-top: 30px; height: 0; overflow: hidden;
}
 
.iframe-container iframe,
.iframe-container object,
.iframe-container embed{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.modal.in .modal-dialog {
  transform: none; /*translate(0px, 0px);*/
}
    </style>", "/websicues/themes/sicues/pages/samples/cic-ues.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 85);
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
