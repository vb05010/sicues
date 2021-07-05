<?php

/* /websicues/themes/sicues/pages/samples/cic-ues.htm */
class __TwigTemplate_b15c86fbd382af9e641b05fd222a1e44a6225f885da9ed4f4c5a5e60f44a2f88 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        echo "storage/app/media/lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf";
        echo "\">Ver PDF</a>
                                    \t<a href=\"";
        // line 49
        echo "storage/app/media/lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf";
        echo "\" download=\"lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
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
                                    \t<a class=\"btn btn-primary view-pdf\" href=\"";
        // line 64
        echo "storage/app/media/guiaparaelaborarprotocoloinvestigacionCONVOCATGORIA17-2018.pdf";
        echo "\">Ver PDF</a>
                                    \t<a href=\"";
        // line 65
        echo "storage/app/media/guiaparaelaborarprotocoloinvestigacionCONVOCATGORIA17-2018.pdf";
        echo "\" download=\"guiaparaelaborarprotocoloinvestigacionCONVOCATGORIA17-2018.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Protocolo de Investigación</h2>
                                    <p>Guía para la elaboraciòn de propuesta de investigación CONVOCATORIA 17-2018</p>

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
        return array (  133 => 85,  110 => 65,  106 => 64,  88 => 49,  84 => 48,  63 => 30,  59 => 29,  42 => 15,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"blog\" class=\"container\">
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
                                    \t<a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf'}}\">Ver PDF</a>
                                    \t<a href=\"{{'storage/app/media/lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf'}}\" download=\"lineamientosparaelseguimientodeproyectosaprobado2julio2015porcic-ues.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
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
                                    \t<a class=\"btn btn-primary view-pdf\" href=\"{{'storage/app/media/guiaparaelaborarprotocoloinvestigacionCONVOCATGORIA17-2018.pdf'}}\">Ver PDF</a>
                                    \t<a href=\"{{'storage/app/media/guiaparaelaborarprotocoloinvestigacionCONVOCATGORIA17-2018.pdf'}}\" download=\"guiaparaelaborarprotocoloinvestigacionCONVOCATGORIA17-2018.pdf\" class=\"btn btn-danger btn-xs\" role=\"button\">Descargar</a>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Protocolo de Investigación</h2>
                                    <p>Guía para la elaboraciòn de propuesta de investigación CONVOCATORIA 17-2018</p>

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
}
