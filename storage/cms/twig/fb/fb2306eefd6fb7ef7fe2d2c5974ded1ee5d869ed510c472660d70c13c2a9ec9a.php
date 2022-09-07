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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/cic-ues.htm */
class __TwigTemplate_29ddf22a7f9f440575ae9c31b402077006d3fd6436c619329c9a95fa4b605cf9 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-7\">
    \t<h3>Consejo de Investigaciones Científicas</h3>
        <p align=\"justify\">La Universidad de El Salvador (UES), única Universidad Estatal del País. Impulsa la Investigación Científica mediante la Política de Investigación Científica y Tecnológica con el desarrollo de las Investigaciones en las áreas del Conocimiento que propicien la formación de recursos humanos capaces de impactar en el desarrollo científico y tecnológico de avanzada; e investigaciones que incluyan temáticas que respondan a necesidades críticas del País.</p>
        
        <p align=\"justify\">Mediante este esfuerzo se espera favorecer la formación de grupos multidisciplinarios de investigación y su interacción con otras instituciones nacionales y extranjeras.</p>
        
        <p align=\"justify\">Así como contribuir a establecer la Política Nacional de Ciencia y Tecnología, y promover la integración y coordinación de la Investigación con la docencia y la proyección social en las entidades académicas en el País.</p>
        
        <p align=\"justify\">Para alcanzar sus objetivos la Universidad de El Salvador ha establecido las áreas y líneas prioritarias de investigación en:</p>
        <ul>
        \t<li>Medio Ambiente y Recursos Naturales.</li>
        \t<li>Seguridad Alimentaria y Nutricional.</li>
        \t<li>Rescate de la Identidad Nacional.</li>
        \t<li>Promoción de la Salud.</li>
        \t<li>Enfermedades nuevas Emergentes y Re-emergentes.</li>
        \t<li>Causas y Mitigación de la Pobreza.</li>
        \t<li>Investigación educativa.</li>
        </ul>
        <p>Para lo cual implementa las políticas de:</p>
        <ul>
        \t<li>Financiamiento-</li>
        \t<li>Asignación de Recursos Financieros.</li>
        \t<li>Rescate de la Identidad Nacional.</li>
        \t<li>Propiedad Intelectual.</li>
        \t<li>Usufructo.</li>
        \t<li>Organización de la Investigación.</li>
        \t<li>Formación de Recursos Humanos.</li>
        </ul>
    </div>
    <div class=\"col-md-5\">
        ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/cicues"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    </div> <!-- end col-md-5-->
</div> <!-- end row-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/cic-ues.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 33,  72 => 32,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/cic-ues.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 32);
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
