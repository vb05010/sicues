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

/* /websicues/themes/vojtasvoboda-vega/partials/sections/features.htm */
class __TwigTemplate_dfbda9f9c3761e35da18b853ed0dff3f723597b7cf54ded77b79b195420ec987 extends \Twig\Template
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
        echo "<div class=\"section bg-grey-light frontpage-4cols\" id=\"4cols\">
    <div class=\"container\">
        <h2 class=\"wow zoomIn block-title\">Organización de la Investigación Científica en la UES</h2>
        <div class=\"wow zoomIn text-center description\">
            ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("features/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "        </div>
        <div class=\"row cols\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-users\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">línea prioritaria de investigación en: </a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>Seguridad alimentaria y nutricional</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">Leer más</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-hand-paper-o\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">línea prioritaria de investigación en:</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>Violencia, seguridad y pobreza</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">En formulación</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-heart-o\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">línea prioritaria de investigación en:</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>Salud Pública en prevención, vigilancia y control epidemiológico, diagnóstico y tratamiento de la enfermedad</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">En formulación</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-list-ul\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Áreas de investigación</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>se han definido áreas de investigación de acuerdo al manual de Frascati, contando  con  líneas  prioritarias  de  investigación...</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/sections/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section bg-grey-light frontpage-4cols\" id=\"4cols\">
    <div class=\"container\">
        <h2 class=\"wow zoomIn block-title\">Organización de la Investigación Científica en la UES</h2>
        <div class=\"wow zoomIn text-center description\">
            {% content 'features/content' %}
        </div>
        <div class=\"row cols\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-users\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">línea prioritaria de investigación en: </a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>Seguridad alimentaria y nutricional</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">Leer más</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-hand-paper-o\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">línea prioritaria de investigación en:</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>Violencia, seguridad y pobreza</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">En formulación</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-heart-o\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">línea prioritaria de investigación en:</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>Salud Pública en prevención, vigilancia y control epidemiológico, diagnóstico y tratamiento de la enfermedad</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">En formulación</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"content-icon wow fadeInUp\">
                    <a class=\"icon\" href=\"#\">
                        <i class=\"fa fa-list-ul\"></i>
                    </a>
                    <h4 class=\"title\">
                        <a href=\"#\">Áreas de investigación</a>
                    </h4>
                    <div class=\"body\">
                        <p>
                            <p>se han definido áreas de investigación de acuerdo al manual de Frascati, contando  con  líneas  prioritarias  de  investigación...</p>
                        </p>
                    </div>
                    <div class=\"foot\">
                        <a href=\"#\" class=\"btn btn-inverse\">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/vojtasvoboda-vega/partials/sections/features.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 5);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
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
