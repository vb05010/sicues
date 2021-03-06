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

/* /websicues/themes/sicues/pages/samples/funciones-del-cic-ues.htm */
class __TwigTemplate_fe69e98167afcdab071b5444a668058fcc14e84084f8d46929e1b1e2b7812a6e extends \Twig\Template
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
            <p class=\"lead\">7. De las Funciones del Consejo de Investigaciones Científicas, CIC-UES.</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                        <span id=\"publish_date\">15/10/2016</span>
                                        <span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"";
        // line 15
        echo "storage/app/media/funciones-del-cic-ues.pdf";
        echo "\">Descargar</a></span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Art. 21 del Reglamento del CIC-UES.</h2>
                                    <p align=\"justify\">Las funciones del Consejo Ejecutivo de Investigaciones (CEI) son las siguientes:</p>
                                    <ol type=\"a\">
                    \t\t\t\t<li><p align=\"justify\">Formular y presentar a la aprobación del máximo nivel ejecutivo de la Universidad,  las políticas y prioridades de investigación de la Universidad de El Salvador, por medio del Secretario/a de Investigaciones Científicas </p></li>
                    \t\t\t\t<li><p align=\"justify\">Aprobar el presupuesto anual de gastos de la línea de investigación universitaria, presentado por el/la  Secretario/a de Investigaciones Científicas de la UES;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Evaluar, aprobar y dar seguimiento a los Proyectos de Investigación sometidos al Consejo de Investigaciones Científicas;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Asesorar al máximo nivel ejecutivo de la UES sobre la creación y supresión de Centros, Institutos y Unidades de investigación de la Institución;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Gestionar nuevas fuentes de financiamiento para la Investigación Científica y Tecnológica;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Promover la capacitación del recurso humano de la universidad en el campo científico y tecnológico;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Promover el intercambio y la cooperación científica con Universidades, centros de investigación y otras instituciones estatales y privadas, nacionales y extranjeras;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Coordinar la Investigación con las Unidades de Investigación de las Facultades y los Centros e Institutos de Investigación;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Organizar y mantener un sistema de información científica y tecnológica;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Fomentar la formación de recursos humanos  para la investigación, a través de programas de postgrado y doctorado;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Definir la estructura de apoyo administrativo del CIC-UES y solicitar su contratación  a través de las instancias institucionales  correspondientes, a propuesta del Secretario/a de Investigaciones Científicas</p></li>
                    \t\t\t\t<li><p align=\"justify\">Coordinar con el Consejo Nacional de Ciencia y Tecnología (CONACYT) de El Salvador  la política de investigación en el ámbito nacional y la identificación de fondos para el desarrollo de la investigación;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Todas estas funciones y aquellas necesarias para desarrollar de manera efectiva y eficiente la Política de Investigación de la UES, se desarrollarán en un marco colegiado de toma de decisiones de los miembros del CEI.</p></li>
                    \t\t\t\t</ol>
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
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("producion-cientifica"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "             
                    </div><!--/.producción científica-->
    \t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/funciones-del-cic-ues.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 50,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>CIC-UES</h2>
            <p class=\"lead\">7. De las Funciones del Consejo de Investigaciones Científicas, CIC-UES.</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"blog-item\">
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                        <span id=\"publish_date\">15/10/2016</span>
                                        <span><i class=\"fa fa-download\" aria-hidden=\"true\"></i> <a href=\"{{'storage/app/media/funciones-del-cic-ues.pdf'}}\">Descargar</a></span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Art. 21 del Reglamento del CIC-UES.</h2>
                                    <p align=\"justify\">Las funciones del Consejo Ejecutivo de Investigaciones (CEI) son las siguientes:</p>
                                    <ol type=\"a\">
                    \t\t\t\t<li><p align=\"justify\">Formular y presentar a la aprobación del máximo nivel ejecutivo de la Universidad,  las políticas y prioridades de investigación de la Universidad de El Salvador, por medio del Secretario/a de Investigaciones Científicas </p></li>
                    \t\t\t\t<li><p align=\"justify\">Aprobar el presupuesto anual de gastos de la línea de investigación universitaria, presentado por el/la  Secretario/a de Investigaciones Científicas de la UES;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Evaluar, aprobar y dar seguimiento a los Proyectos de Investigación sometidos al Consejo de Investigaciones Científicas;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Asesorar al máximo nivel ejecutivo de la UES sobre la creación y supresión de Centros, Institutos y Unidades de investigación de la Institución;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Gestionar nuevas fuentes de financiamiento para la Investigación Científica y Tecnológica;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Promover la capacitación del recurso humano de la universidad en el campo científico y tecnológico;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Promover el intercambio y la cooperación científica con Universidades, centros de investigación y otras instituciones estatales y privadas, nacionales y extranjeras;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Coordinar la Investigación con las Unidades de Investigación de las Facultades y los Centros e Institutos de Investigación;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Organizar y mantener un sistema de información científica y tecnológica;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Fomentar la formación de recursos humanos  para la investigación, a través de programas de postgrado y doctorado;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Definir la estructura de apoyo administrativo del CIC-UES y solicitar su contratación  a través de las instancias institucionales  correspondientes, a propuesta del Secretario/a de Investigaciones Científicas</p></li>
                    \t\t\t\t<li><p align=\"justify\">Coordinar con el Consejo Nacional de Ciencia y Tecnología (CONACYT) de El Salvador  la política de investigación en el ámbito nacional y la identificación de fondos para el desarrollo de la investigación;</p></li>
                    \t\t\t\t<li><p align=\"justify\">Todas estas funciones y aquellas necesarias para desarrollar de manera efectiva y eficiente la Política de Investigación de la UES, se desarrollarán en un marco colegiado de toma de decisiones de los miembros del CEI.</p></li>
                    \t\t\t\t</ol>
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

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/samples/funciones-del-cic-ues.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 50);
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
