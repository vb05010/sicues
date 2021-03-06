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

/* /websicues/themes/sicues/pages/samples/contact.htm */
class __TwigTemplate_8db4767c6c6f4bf2b458dd15d4c95b7ecadf42ab2737d5ad50718b4e8c6b0f9d extends \Twig\Template
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
        echo "<section id=\"contact-info\">
        <div class=\"center\">                
            <h2>¿Cómo podemos ayudarte? </h2>
            <p class=\"lead\">Solicita más información</p>
        </div>
        <div class=\"gmap-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 text-center\">
                        <div class=\"gmap\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1017.5030457665036!2d-89.20198676183585!3d13.717912505267877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6330843530ff0b%3A0xd2e3ab336929e47f!2sUniversidad+de+El+Salvador!5e1!3m2!1ses!2ses!4v1476996710452\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class=\"col-sm-7 map-content\">
                        <ul class=\"row\">
                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>SIC-UES</h5>
                                    <p>Final Avenida Martíres Estudiantes<br>
                                    del 30 de julio, Edificio de CENSALUD</p>
                                    <p>Teléfono: 503 2225-8434 <br>
                                    Email: sic@ues.edu.sv</p>
                                </address>

                                <address>
                                    <h5>OTRIVE</h5>
                                   <p>Teléfono: 503 2225-8434 <br>
                                    Email: sic@ues.edu.sv</p>
                                </address>
                            </li>


                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>CIC-UES</h5>
                                    <p>Teléfono: 503 2225-8434 <br>
                                    Email: cic@ues.edu.sv</p>
                                </address>

                                <address>
                                    <h5>Administración Financiera</h5>
                                    <p>Teléfono: 503 2225-8434 <br>
                                    Email: cic@ues.edu.sv</p>
                                </address>
                                <address>
                                    <h5>EPI-CIC</h5>
                                    <p>Enlace y Promoción de la Investigación<br>Teléfono: 503 2511-2077 <br>
                                    Email: investigación.cic@gmail.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <!-- <section id=\"contact-page\">
        % partial \"formulario-contacto\" %}
    </section> --><!--/#contact-page-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact-info\">
        <div class=\"center\">                
            <h2>¿Cómo podemos ayudarte? </h2>
            <p class=\"lead\">Solicita más información</p>
        </div>
        <div class=\"gmap-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 text-center\">
                        <div class=\"gmap\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1017.5030457665036!2d-89.20198676183585!3d13.717912505267877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6330843530ff0b%3A0xd2e3ab336929e47f!2sUniversidad+de+El+Salvador!5e1!3m2!1ses!2ses!4v1476996710452\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class=\"col-sm-7 map-content\">
                        <ul class=\"row\">
                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>SIC-UES</h5>
                                    <p>Final Avenida Martíres Estudiantes<br>
                                    del 30 de julio, Edificio de CENSALUD</p>
                                    <p>Teléfono: 503 2225-8434 <br>
                                    Email: sic@ues.edu.sv</p>
                                </address>

                                <address>
                                    <h5>OTRIVE</h5>
                                   <p>Teléfono: 503 2225-8434 <br>
                                    Email: sic@ues.edu.sv</p>
                                </address>
                            </li>


                            <li class=\"col-sm-6\">
                                <address>
                                    <h5>CIC-UES</h5>
                                    <p>Teléfono: 503 2225-8434 <br>
                                    Email: cic@ues.edu.sv</p>
                                </address>

                                <address>
                                    <h5>Administración Financiera</h5>
                                    <p>Teléfono: 503 2225-8434 <br>
                                    Email: cic@ues.edu.sv</p>
                                </address>
                                <address>
                                    <h5>EPI-CIC</h5>
                                    <p>Enlace y Promoción de la Investigación<br>Teléfono: 503 2511-2077 <br>
                                    Email: investigación.cic@gmail.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <!-- <section id=\"contact-page\">
        % partial \"formulario-contacto\" %}
    </section> --><!--/#contact-page-->", "/websicues/themes/sicues/pages/samples/contact.htm", "");
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
