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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/miembros-cei.htm */
class __TwigTemplate_48fce20536fb3607f1e63cac04eac46076ced4a73713919d7b164458bda750fe extends \Twig\Template
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
    \t<h3 style=\"text-align:center;\">Secretario de Investigaciones y Director Ejecutivo del Consejo de Investigaciones Científicas</h3>
        <p align=\"justify\">M.Sc. José Miguel Sermeño | jose.sermeno@ues.edu.sv</p>
        
        <h4 style=\"text-align:center;\">Miembros Titulares Representantes por Facultades ante el Consejo Ejecutivo de Investigaciones (CEI)</h4>
         <p align=\"justify\">Secretario de Investigaciones y Director Ejecutivo del Consejo de Investigaciones Científicas</p>
        
        <h4>Facultad de Odontología</h4>
        <p>Dra. Ruth Fernández de Quezada | ruth.fernandez@ues.edu.sv</p>
        
        <h4>Facultad de Jurisprudencia y Ciencias Sociales</h4>
        <p>Dr. José Humberto Morales | jose.morales@ues.edu.sv</p> 
        
        <h4>Facultad de Ciencias Naturales y Matemáticas</h4>
        <p>Dra. Velia Ruth Sosa Gómez | velia.sosa@ues.edu.sv</p>
        
        <h4>Facultad de Química y Farmacia</h4>
        <p>M.Sc. Eliseo Ernesto Ayala Mejía | eliseo.ayala@ues.edu.sv</p>
        
        <h4>Facultad Multidisciplinaria de Occidente</h4>
        <p>Lic. Jaime Ernesto Sermeño de la Peña | jaime.sermeno@ues.edu.sv</p>
        
        <h4>Facultad Multidisciplinaria Paracentral</h4>
        <p>Ing. Edgard Felipe Rodríguez | edgar.rodriguez@ues.edu.sv</p>
        
        <h4>Facultad de Ciencias Agronómicas</h4>
        <p>Ing. Enrique Alonso Alas García | enrique.alas@ues.edu.sv</p>
        
        <h4>Facultad de Ciencias Económicas</h4>
        <p>M.Sc. Balmore Enrique López Ramírez | balmore.lopez@ues.edu.sv</p>
        
        <h4>Facultad Multidisciplinaria Oriental</h4>
        <p>Lic. Óscar Antonio Campos | oscar.campos@ues.edu.sv</p>
        
        <h4>Facultad de Medicina</h4>
        <p>Dr. Douglas Alfredo Velásquez Raimundo | douglas.velasquez@ues.edu.sv</p>
        
        <h4></h4>
        <p></p>
        
        <h4></h4>
        <p></p>
    </div>
    <div class=\"col-md-5\">
        ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/cicues"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "    </div> <!-- end col-md-5-->
</div> <!-- end row-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/miembros-cei.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 47,  86 => 46,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/miembros-cei.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 46);
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
