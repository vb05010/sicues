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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/autoridades-ues.htm */
class __TwigTemplate_77f4954445512c5746622decf2462897f98ad5b56787c9f367cfa22bc8f3b1da extends \Twig\Template
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
        echo "<p><strong>M.Sc. Roger Armando Arias Alvarado</strong><br />
Rector</p>

<p>PhD. Raúl Ernesto Azcúnaga López</strong>
Vicerrector Académico</p>

<p><strong>Ing. Agr. M.Sc. Juan Rosa Quintanilla Quintanilla</strong>
Vicerrector Administrativo</p>

<p><strong>Ing. Francisco Antonio Alarcón Sandoval</strong>
Secretario General<p>

<p>Lic. Rafael Humberto Peña Marín</strong>
Fiscal General</p>

<p><strong>MVZ. María José Vargas Artiga</strong>
Presidenta Asamblea General Universitaria (AGU)</p>

<p><strong>Ing. Agr. M.Sc. José Miguel Sermeño Chicas</strong><br />
Secretario de Investigaciones Científicas; <br />Director Ejectutivo del Consejo de Investigaciones Científicas</p>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/autoridades-ues.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/autoridades-ues.htm", "");
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
