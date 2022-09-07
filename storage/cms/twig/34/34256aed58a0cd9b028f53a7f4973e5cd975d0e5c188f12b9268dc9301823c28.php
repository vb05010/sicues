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

/* /websicues/themes/vojtasvoboda-vega/partials/sections/cta2.htm */
class __TwigTemplate_b55ebe309f0d3dd79414531b2e3c4c30ba4eed9b691db54c2159d3a09493e97d extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/station-enhanced-2.jpg");
        echo "\" id=\"cta2\">
    <div class=\"container wow zoomIn\">
        <div class=\"description\">
            <p>
                <h2>Investiga en <br />La <em>Universidad</em> de El Salvador</h2>
                
                ";
        // line 8
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("cta2/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 9
        echo "                <p>&nbsp;</p>
                <p><a href=\"#\" target=\"_blank\" class=\"btn btn-primary-custom btn-margin-top\"><strong>Más información</strong></a></p>
                <p>&nbsp;</p>
            </p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/sections/cta2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 8,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"shadow\"></div>
<div class=\"section frontpage-cta parallax-bg\" data-parallax=\"scroll\" data-image-src=\"{{ 'assets/images/samples/station-enhanced-2.jpg' | theme }}\" id=\"cta2\">
    <div class=\"container wow zoomIn\">
        <div class=\"description\">
            <p>
                <h2>Investiga en <br />La <em>Universidad</em> de El Salvador</h2>
                
                {% content 'cta2/content' %}
                <p>&nbsp;</p>
                <p><a href=\"#\" target=\"_blank\" class=\"btn btn-primary-custom btn-margin-top\"><strong>Más información</strong></a></p>
                <p>&nbsp;</p>
            </p>
        </div>
    </div>
</div>", "/websicues/themes/vojtasvoboda-vega/partials/sections/cta2.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 8);
        static $filters = array("theme" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                ['theme'],
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
