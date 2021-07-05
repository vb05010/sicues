<?php

/* /websicues/themes/sicues/partials/tabs.htm */
class __TwigTemplate_77f40b767b49567c976857a8b30c1e14bcbc83e43882676fca1b3725cec8ad0c extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-8 wow fadeInDown\">
                   <div class=\"tab-wrap\"> 
                        <div class=\"media\">
                            <div class=\"parrent pull-left\">
                                <ul class=\"nav nav-tabs nav-stacked\">
                                    <!--<li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Sobre Nosotros</a></li> -->
                                    <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Misión</a></li>
                                    <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Visión</a></li>
                                    <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Objetivos</a></li>
                                    <!--<li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">Generalidades</a></li>-->
                                </ul>
                            </div>

                            <div class=\"parrent media-body\">
                                <div class=\"tab-content\">
                                \t<!-- <div class=\"tab-pane fade active in\" id=\"tab1\">
                                \t                                        <div class=\"media\">
                                \t                                           <div class=\"pull-left\">
                                \t                                                <img class=\"img-responsive\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tab2.png");
        echo "\">
                                \t                                            </div>
                                \t                                            <div class=\"media-body\">
                                \t                                                 <h2>Sobre Nosotros</h2>
                                \t                                                 <p align=\"justify\">El trabajo en equipo es una habilidad que nos lleva hacia una visión común. Nuestro esfuerzo, compromiso, entrega y profesionalidad tiene su recompensa: un equipo consolidado.</p>
                                \t                                                  <a class=\"btn btn-primary readmore\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/sobre-nosotros");
        echo "\">Leer Más <i class=\"fa fa-angle-right\"></i></a>
                                \t                                            </div>
                                \t                                        </div>
                                \t                                    </div> -->

                                    <div class=\"tab-pane fade active in\" id=\"tab2\">
                                        <div class=\"media\">
                                            <div class=\"media-body\">
                                             <p align=\"justify\">La Secretaría de Investigaciones Científicas de la Universidad de El Salvador (SIC-UES)  es la unidad orgánica encargada de coordinar los esfuerzos de la investigación científica que realiza la Universidad de El Salvador, por medio de las actividades de investigación en las Facultades, los Centros, Institutos y Unidades de Investigación, orientadas a la gestión, promoción, avance, seguimiento y divulgación de las investigaciones científicas generadoras de nuevo conocimiento, para contribuir al desarrollo y el bienestar social y económico del país.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>
                            
                                     <div class=\"tab-pane fade\" id=\"tab3\">                                    
                                        <p align=\"justify\">Constituirse en  la Unidad que trabaja para hacer de la investigación científica una cultura y una práctica académica relevante en la Universidad de El Salvador, posicionándola como la institución líder a nivel nacional y regional, que realiza investigación pertinente, de actualidad, de calidad y con sentido crítico, de acuerdo a las necesidades del país y de la región centroamericana.</p>
                                     </div>
                                     
                                     <div class=\"tab-pane fade\" id=\"tab4\">
                                        <p><ol type=\"1\">
                                            <li><p align=\"justify\">Fortalecer la capacidad de investigación científica, tecnológica y la innovación en la Universidad de El Salvador a fin de promover la superación académica institucional e impactar en el desarrollo económico y social del país, en concordancia con la Ley de Desarrollo Científico y Tecnológico de El Salvador;</p></li>
                                            <li><p align=\"justify\">Integrar la investigación como parte del quehacer académico de la comunidad  universitaria;</p></li>
                                            <li><p align=\"justify\">Posicionar a la UES como líder, a nivel de la Educación Superior Universitaria,  en el campo de la investigación.</p></li>
                                            <li><p align=\"justify\">Promover la conformación coordinada del tejido de investigaciones científicas de la Universidad de El Salvador, entre las Unidades de Investigación o su equivalente en las Facultades, así como con los Institutos y Centros de Investigación existentes o futuros;</p></li>
                                            <li><p align=\"justify\">Facilitar y promover la cultura de la investigación interdisciplinaria;</p></li>
                                            <li><p align=\"justify\">Incorporar los adelantos tecnológicos creativos e innovadores a las tareas de investigación;</p></li>
                                            <li><p align=\"justify\">Promover la generación de respuestas científicas a las necesidades de la sociedad en el campo de la investigación;</p></li>
                                            <li><p align=\"justify\">Garantizar que la transferencia del conocimiento a la sociedad, producto de la labor investigativa de la Universidad de El Salvador, sea pertinente, ágil, oportuna y actualizada;</p></li>
                                        </ol></p>
                                     </div>

                                     <!--<div class=\"tab-pane fade\" id=\"tab5\">-->
                                     <!--<div class=\"media\">-->
                                           <!--<div class=\"pull-left\">-->
                                                <!--<img src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tab1.png");
        echo "\" class=\"img-responsive\">-->
                                            <!--</div>
                                            <!--<div class=\"media-body\">-->
                                        <!--<p align=\"justify\">La Universidad de El Salvador (UES) única Universidad Estatal del País, impulsa a través del consejo de Investigaciones Científicas (CIC_UES), mediante la Política de Investigación Científica y Tecnológica, el desarrollo de las Investigaciones en todas las áreas del ...</p>-->
                                         <!--<a class=\"btn btn-primary readmore\" href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/generalidades");
        echo "\">Seguir leyendo <i class=\"fa fa-angle-right\"></i></a>-->
                                     <!--</div>-->
                                     <!--</div>-->
                                     <!--</div>-->
                                <!--</div>--> <!--/.tab-content-->  
                           <!-- </div>--> <!--/.media-body-->
                        <!--</div>--> <!--/.media-->     
                    </div>
                    </div>
                    </div>
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/tabs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 62,  88 => 58,  51 => 24,  43 => 19,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-xs-12 col-sm-8 wow fadeInDown\">
                   <div class=\"tab-wrap\"> 
                        <div class=\"media\">
                            <div class=\"parrent pull-left\">
                                <ul class=\"nav nav-tabs nav-stacked\">
                                    <!--<li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Sobre Nosotros</a></li> -->
                                    <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Misión</a></li>
                                    <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Visión</a></li>
                                    <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Objetivos</a></li>
                                    <!--<li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">Generalidades</a></li>-->
                                </ul>
                            </div>

                            <div class=\"parrent media-body\">
                                <div class=\"tab-content\">
                                \t<!-- <div class=\"tab-pane fade active in\" id=\"tab1\">
                                \t                                        <div class=\"media\">
                                \t                                           <div class=\"pull-left\">
                                \t                                                <img class=\"img-responsive\" src=\"{{ 'assets/images/tab2.png'|theme }}\">
                                \t                                            </div>
                                \t                                            <div class=\"media-body\">
                                \t                                                 <h2>Sobre Nosotros</h2>
                                \t                                                 <p align=\"justify\">El trabajo en equipo es una habilidad que nos lleva hacia una visión común. Nuestro esfuerzo, compromiso, entrega y profesionalidad tiene su recompensa: un equipo consolidado.</p>
                                \t                                                  <a class=\"btn btn-primary readmore\" href=\"{{ 'samples/sobre-nosotros'|page }}\">Leer Más <i class=\"fa fa-angle-right\"></i></a>
                                \t                                            </div>
                                \t                                        </div>
                                \t                                    </div> -->

                                    <div class=\"tab-pane fade active in\" id=\"tab2\">
                                        <div class=\"media\">
                                            <div class=\"media-body\">
                                             <p align=\"justify\">La Secretaría de Investigaciones Científicas de la Universidad de El Salvador (SIC-UES)  es la unidad orgánica encargada de coordinar los esfuerzos de la investigación científica que realiza la Universidad de El Salvador, por medio de las actividades de investigación en las Facultades, los Centros, Institutos y Unidades de Investigación, orientadas a la gestión, promoción, avance, seguimiento y divulgación de las investigaciones científicas generadoras de nuevo conocimiento, para contribuir al desarrollo y el bienestar social y económico del país.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>
                            
                                     <div class=\"tab-pane fade\" id=\"tab3\">                                    
                                        <p align=\"justify\">Constituirse en  la Unidad que trabaja para hacer de la investigación científica una cultura y una práctica académica relevante en la Universidad de El Salvador, posicionándola como la institución líder a nivel nacional y regional, que realiza investigación pertinente, de actualidad, de calidad y con sentido crítico, de acuerdo a las necesidades del país y de la región centroamericana.</p>
                                     </div>
                                     
                                     <div class=\"tab-pane fade\" id=\"tab4\">
                                        <p><ol type=\"1\">
                                            <li><p align=\"justify\">Fortalecer la capacidad de investigación científica, tecnológica y la innovación en la Universidad de El Salvador a fin de promover la superación académica institucional e impactar en el desarrollo económico y social del país, en concordancia con la Ley de Desarrollo Científico y Tecnológico de El Salvador;</p></li>
                                            <li><p align=\"justify\">Integrar la investigación como parte del quehacer académico de la comunidad  universitaria;</p></li>
                                            <li><p align=\"justify\">Posicionar a la UES como líder, a nivel de la Educación Superior Universitaria,  en el campo de la investigación.</p></li>
                                            <li><p align=\"justify\">Promover la conformación coordinada del tejido de investigaciones científicas de la Universidad de El Salvador, entre las Unidades de Investigación o su equivalente en las Facultades, así como con los Institutos y Centros de Investigación existentes o futuros;</p></li>
                                            <li><p align=\"justify\">Facilitar y promover la cultura de la investigación interdisciplinaria;</p></li>
                                            <li><p align=\"justify\">Incorporar los adelantos tecnológicos creativos e innovadores a las tareas de investigación;</p></li>
                                            <li><p align=\"justify\">Promover la generación de respuestas científicas a las necesidades de la sociedad en el campo de la investigación;</p></li>
                                            <li><p align=\"justify\">Garantizar que la transferencia del conocimiento a la sociedad, producto de la labor investigativa de la Universidad de El Salvador, sea pertinente, ágil, oportuna y actualizada;</p></li>
                                        </ol></p>
                                     </div>

                                     <!--<div class=\"tab-pane fade\" id=\"tab5\">-->
                                     <!--<div class=\"media\">-->
                                           <!--<div class=\"pull-left\">-->
                                                <!--<img src=\"{{ 'assets/images/tab1.png'|theme }}\" class=\"img-responsive\">-->
                                            <!--</div>
                                            <!--<div class=\"media-body\">-->
                                        <!--<p align=\"justify\">La Universidad de El Salvador (UES) única Universidad Estatal del País, impulsa a través del consejo de Investigaciones Científicas (CIC_UES), mediante la Política de Investigación Científica y Tecnológica, el desarrollo de las Investigaciones en todas las áreas del ...</p>-->
                                         <!--<a class=\"btn btn-primary readmore\" href=\"{{ 'samples/generalidades'|page }}\">Seguir leyendo <i class=\"fa fa-angle-right\"></i></a>-->
                                     <!--</div>-->
                                     <!--</div>-->
                                     <!--</div>-->
                                <!--</div>--> <!--/.tab-content-->  
                           <!-- </div>--> <!--/.media-body-->
                        <!--</div>--> <!--/.media-->     
                    </div>
                    </div>
                    </div>
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->", "/websicues/themes/sicues/partials/tabs.htm", "");
    }
}
