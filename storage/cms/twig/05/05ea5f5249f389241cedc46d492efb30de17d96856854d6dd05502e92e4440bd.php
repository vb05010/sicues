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

/* /websicues/themes/sicues/partials/reconocimientos.htm */
class __TwigTemplate_976b2d50301aec488868e25baeec77e57bafd207f2c8cf35ee01583eb2092aa2 extends \Twig\Template
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
        echo "<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>Unidades de Investigación</h2>
                        <div class=\"panel-group\" id=\"accordion1\">
                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading active\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseOne1\">
                                  Campus Central
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>

                            <div id=\"collapseOne1\" class=\"panel-collapse collapse in\">
                              <div class=\"panel-body\">
                                  <div class=\"media accordion-inner\">
                                        <div class=\"pull-left\">
                                            <!-- <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/antonio-vasquez");
        echo "\"><img class=\"img-responsive\" style=\"height:120px;\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/portfolio/recent/antonio.png");
        echo "\"></a> -->
                                        </div>
                                        <div class=\"media-body\">
                                             <!-- <h4>Dr. Antonio Vasquez Hidalgo</h4> -->
                                             <!-- <p>\"Uso del añil para teñir microrganismos. Primer Lugar, Semana Nacional de la Inventiva.</p> -->
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseTwo1\">
                                  Facultad Multidisciplinaria de Occidente
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseTwo1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                              \t <div class=\"media accordion-inner\">
                              \t<div class=\"pull-left\">
                                            <!-- <img class=\"img-responsive\" style=\"height:120px;\" src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/recent/julio.png");
        echo "\"> -->
                                        </div>
                                <div class=\"media-body\">
                                             <!-- <h4>Lic. Julio Grande</h4> -->
                                             <!-- <p>Artículo más destacado “La propiedad intelectual y su importancia en el contexto académico”. Semana Nacional de la Inventiva. </p> -->
                                        </div>
                              </div>
                            </div>
                          </div>
                        </div>  

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseThree1\">
                                  Facultad Multidisciplinaria Paracentral
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseThree1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                                <div class=\"media accordion-inner\">
                              \t<div class=\"pull-left\">
                                            <!-- <img class=\"img-responsive\" style=\"height:120px;\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/portfolio/recent/salvador.png");
        echo "\"> -->
                                        </div>
                                <div class=\"media-body\">
                                             <!-- <h4>Lic. Salvador López</h4> -->
                                             <!-- <p>\"Invención de procedimiento para la síntesis de acetamidomalonat o dietilo¨. Mejor Invención en Quimica, y Segundo Lugar como inventor. Semana Nacional de la Inventiva.</p> -->
                                        </div>
                              </div>
                            </div>
                          </div>
                        </div>  

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseFour1\">
                                  Facultad Multisciplinaria de Oriente
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseFour1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                                <div class=\"media accordion-inner\">
                              \t<div class=\"pull-left\">
                                            <!-- <img class=\"img-responsive\" style=\"height:120px;\" src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/portfolio/recent/erick.png");
        echo "\"> -->
                                        </div>
                                <div class=\"media-body\">
                                             <!-- <h4>MSc. Erick Méndez</h4> -->
                                             <!-- <p>“Reactor solar fotocatalítico de flujo contínuo”. Primer Lugar en la categoría de Investigación Ambiental. VIII Premio Nacional de Medio Ambiente en la categoría Investigación Científica. </p> -->
                                        </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/reconocimientos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 91,  115 => 67,  88 => 43,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>Unidades de Investigación</h2>
                        <div class=\"panel-group\" id=\"accordion1\">
                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading active\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseOne1\">
                                  Campus Central
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>

                            <div id=\"collapseOne1\" class=\"panel-collapse collapse in\">
                              <div class=\"panel-body\">
                                  <div class=\"media accordion-inner\">
                                        <div class=\"pull-left\">
                                            <!-- <a href=\"{{'samples/antonio-vasquez'|page}}\"><img class=\"img-responsive\" style=\"height:120px;\" src=\"{{ '/assets/images/portfolio/recent/antonio.png'|theme }}\"></a> -->
                                        </div>
                                        <div class=\"media-body\">
                                             <!-- <h4>Dr. Antonio Vasquez Hidalgo</h4> -->
                                             <!-- <p>\"Uso del añil para teñir microrganismos. Primer Lugar, Semana Nacional de la Inventiva.</p> -->
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseTwo1\">
                                  Facultad Multidisciplinaria de Occidente
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseTwo1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                              \t <div class=\"media accordion-inner\">
                              \t<div class=\"pull-left\">
                                            <!-- <img class=\"img-responsive\" style=\"height:120px;\" src=\"{{ 'assets/images/portfolio/recent/julio.png'|theme }}\"> -->
                                        </div>
                                <div class=\"media-body\">
                                             <!-- <h4>Lic. Julio Grande</h4> -->
                                             <!-- <p>Artículo más destacado “La propiedad intelectual y su importancia en el contexto académico”. Semana Nacional de la Inventiva. </p> -->
                                        </div>
                              </div>
                            </div>
                          </div>
                        </div>  

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseThree1\">
                                  Facultad Multidisciplinaria Paracentral
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseThree1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                                <div class=\"media accordion-inner\">
                              \t<div class=\"pull-left\">
                                            <!-- <img class=\"img-responsive\" style=\"height:120px;\" src=\"{{ '/assets/images/portfolio/recent/salvador.png'|theme }}\"> -->
                                        </div>
                                <div class=\"media-body\">
                                             <!-- <h4>Lic. Salvador López</h4> -->
                                             <!-- <p>\"Invención de procedimiento para la síntesis de acetamidomalonat o dietilo¨. Mejor Invención en Quimica, y Segundo Lugar como inventor. Semana Nacional de la Inventiva.</p> -->
                                        </div>
                              </div>
                            </div>
                          </div>
                        </div>  

                          <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                              <h3 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion1\" href=\"#collapseFour1\">
                                  Facultad Multisciplinaria de Oriente
                                  <i class=\"fa fa-angle-right pull-right\"></i>
                                </a>
                              </h3>
                            </div>
                            <div id=\"collapseFour1\" class=\"panel-collapse collapse\">
                              <div class=\"panel-body\">
                                <div class=\"media accordion-inner\">
                              \t<div class=\"pull-left\">
                                            <!-- <img class=\"img-responsive\" style=\"height:120px;\" src=\"{{ '/assets/images/portfolio/recent/erick.png'|theme }}\"> -->
                                        </div>
                                <div class=\"media-body\">
                                             <!-- <h4>MSc. Erick Méndez</h4> -->
                                             <!-- <p>“Reactor solar fotocatalítico de flujo contínuo”. Primer Lugar en la categoría de Investigación Ambiental. VIII Premio Nacional de Medio Ambiente en la categoría Investigación Científica. </p> -->
                                        </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
</div>", "/websicues/themes/sicues/partials/reconocimientos.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 19, "theme" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
