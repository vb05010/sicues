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

/* /websicues/themes/sicues/pages/samples/centros-institutos.htm */
class __TwigTemplate_10b89e0e372aa8095676506f22f745288c8e5347ae42365585293f07808bd5c4 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"feature\" class=\"transparent-bg\">
        <div class=\"container\">
           <div class=\"center wow fadeInDown\">
                <h2>Centros e Institutos</h2>
                <p class=\"lead\">Centros e Institutos de investigación de la Universidad de El Salvador</p>
            </div>

            <div class=\"row\">
                <div class=\"features\">
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miembros-consejo");
        echo "\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></a>
                            <h2>CIC-UES</h2>
                            <h3>Consejo de Investigaciones Científicas</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <a href=\"https://censalud.ues.edu.sv\" target=\"_blank\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></a>
                            <h2>CENSALUD</h2>
                            <h3>Centro de Investigación y Desarrollo en Salud</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>Vulcanología</h2>
                            <h3>Instituto de Vulcanología</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <a href=\"http://genero.ues.edu.sv/\" target=\"_blank\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></a>
                            <h2>CEG-UES</h2>
                            <h3>Centro de Estudios de Género</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>INFORP</h2>
                            <h3>Instituto de Formación y Recursos Pedagógicos</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>INVE</h2>
                            <h3>Instituto de Investigaciones Económicas</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>CIAN</h2>
                            <h3>Centro de Investigaciones en Aplicaciones</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>Universidad-Empresa</h2>
                            <a href=\"http://vinculacion.sic.ues.edu.sv/\" target=\"_blank\"><h3>Unidad de Vinculación Universidad-Empresa</h3></a>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>IEHAA</h2>
                            <h3>Instituto de Estudios Históricos, Arqueológicos y Antropológicos</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>ICMARES</h2>
                            <h3>IInstituto de Ciencias del Mar y Limnología</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
</div><!--/.row--> 
</div> <!-- /.container -->
</section> <!-- /.section -->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/centros-institutos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"feature\" class=\"transparent-bg\">
        <div class=\"container\">
           <div class=\"center wow fadeInDown\">
                <h2>Centros e Institutos</h2>
                <p class=\"lead\">Centros e Institutos de investigación de la Universidad de El Salvador</p>
            </div>

            <div class=\"row\">
                <div class=\"features\">
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <a href=\"{{'samples/miembros-consejo'|page}}\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></a>
                            <h2>CIC-UES</h2>
                            <h3>Consejo de Investigaciones Científicas</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <a href=\"https://censalud.ues.edu.sv\" target=\"_blank\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></a>
                            <h2>CENSALUD</h2>
                            <h3>Centro de Investigación y Desarrollo en Salud</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>Vulcanología</h2>
                            <h3>Instituto de Vulcanología</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <a href=\"http://genero.ues.edu.sv/\" target=\"_blank\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></a>
                            <h2>CEG-UES</h2>
                            <h3>Centro de Estudios de Género</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>INFORP</h2>
                            <h3>Instituto de Formación y Recursos Pedagógicos</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>INVE</h2>
                            <h3>Instituto de Investigaciones Económicas</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>CIAN</h2>
                            <h3>Centro de Investigaciones en Aplicaciones</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>Universidad-Empresa</h2>
                            <a href=\"http://vinculacion.sic.ues.edu.sv/\" target=\"_blank\"><h3>Unidad de Vinculación Universidad-Empresa</h3></a>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>IEHAA</h2>
                            <h3>Instituto de Estudios Históricos, Arqueológicos y Antropológicos</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class=\"col-md-4 col-sm-6 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
                        <div class=\"feature-wrap\">
                            <i class=\"fa fa-university\" aria-hidden=\"true\"></i>
                            <h2>ICMARES</h2>
                            <h3>IInstituto de Ciencias del Mar y Limnología</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
</div><!--/.row--> 
</div> <!-- /.container -->
</section> <!-- /.section -->", "/websicues/themes/sicues/pages/samples/centros-institutos.htm", "");
    }
}
