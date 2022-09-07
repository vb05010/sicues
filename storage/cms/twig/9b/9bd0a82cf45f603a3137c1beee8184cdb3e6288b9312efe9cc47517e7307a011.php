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

/* /websicues/themes/vojtasvoboda-vega/partials/sections/cta.htm */
class __TwigTemplate_43d3b4a4920a5d792ecaa8251ab0f434fc655b24e4e564fd1a5bfb5e8401a15c extends \Twig\Template
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
        echo "<div class=\"shadow\"></div>
<div class=\"section frontpage-cta parallax-bg\" data-parallax=\"scroll\" data-image-src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/rural-enhanced-1.jpg");
        echo "\" id=\"cta\">
    <div class=\"container wow zoomIn description\">
        <div class=\"description\">
            <h2>SEGUIMIENTO DE PROYECTOS DE <em>INVESTIGACIÓN</em></h2>
            <p class=\"small\">
                Otorgar el  <strong><em>Financiamiento</em></strong> para un proyecto no es suficiente.<br />
                <strong><em>Es también necesario</em></strong>  que éste se ejecute de manera correcta, en forma oportuna y en conformidad con los compromisos adquiridos por los investigadores.
            </p>
            <p>&nbsp;</p>
           
            ";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("cta/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 13
        echo "            <p>
                <a class=\"btn btn-primary-custom btn-margin-top btn-margin-bottom\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/seguimiento-proyectos.htm");
        echo "\">Más información</a>
            </p>
            <p>&nbsp;</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/sections/cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  59 => 13,  55 => 12,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/partials/sections/cta.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 12);
        static $filters = array("theme" => 2, "page" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                ['theme', 'page'],
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
