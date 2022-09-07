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

/* /websicues/themes/vojtasvoboda-vega/partials/modules/copyright.htm */
class __TwigTemplate_1d763a5135c33e81a9f20dc69221913cf5c71bc1046ad6bbfb8de761a50a83f1 extends \Twig\Template
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
        echo "<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Navigation -->
            <div class=\"col-md-8\">
                <ul id=\"menu-footer\" class=\"nav-foot\">
                    <!-- <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"#\">Contáctenos</a>
                    </li> -->
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"https://dti.ues.edu.sv/blog/post/politicas\" target=\"_blank\">POLÍTICAS DE USO DE RECURSOS TECNOLÓGICOS DE LA UNIVERSIDAD DE EL SALVADOR</a>
                    </li>
                    <!-- <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"#\">Privacy</a>
                    </li> -->
                </ul>
            </div>

            <!-- Copyright and Credits -->
            <div class=\"col-md-4\">
                <div class=\"copyright\">
                    Copyright 2022 | SIC UES <br /> <a target=\"_blank\" href=\"https://www.ues.edu.sv\" target=\"_blank\"> Universidad de El Salvador</a>
                </div>
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/modules/copyright.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/partials/modules/copyright.htm", "");
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
