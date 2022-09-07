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

/* /websicues/themes/vojtasvoboda-vega/partials/sections/intro.htm */
class __TwigTemplate_589f5a9d2a2965b8178ade4fef9d74984f47748ab0c57765bd3efd9bdb6405c3 extends \Twig\Template
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
        echo "<div
    class=\"image-banner frontpage-banner frontpage-banner-parallax-bg";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 2), "intro_fullscreen", [], "any", false, false, true, 2)) {
            echo " full-screen";
        }
        echo "\"
    data-parallax=\"scroll\"
    data-image-src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/vega-banner2-1-1.jpg");
        echo "\"
    id=\"intro\">
    <div class=\"container\">
        <div class=\"inner\">
            <h1 class=\"block-title wow zoomIn\">Programa para el Fortalecimiento de Revistas Científicas UES </h1>
            <div class=\"text-center hidden-xs wow zoomIn description\">
                ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("intro/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                <p><a class=\"btn btn-primary-custom btn-margin-top\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/taller-ojs.htm");
        echo "\">Mas información</a></p>
            </div>
        </div>
        <div class=\"helper\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/sections/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  58 => 10,  49 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    class=\"image-banner frontpage-banner frontpage-banner-parallax-bg{% if this.theme.intro_fullscreen %} full-screen{% endif %}\"
    data-parallax=\"scroll\"
    data-image-src=\"{{ 'assets/images/samples/vega-banner2-1-1.jpg' | theme }}\"
    id=\"intro\">
    <div class=\"container\">
        <div class=\"inner\">
            <h1 class=\"block-title wow zoomIn\">Programa para el Fortalecimiento de Revistas Científicas UES </h1>
            <div class=\"text-center hidden-xs wow zoomIn description\">
                {% content 'intro/content' %}
                <p><a class=\"btn btn-primary-custom btn-margin-top\" href=\"{{ 'sicues/taller-ojs.htm' | page }}\">Mas información</a></p>
            </div>
        </div>
        <div class=\"helper\"></div>
    </div>
</div>", "/websicues/themes/vojtasvoboda-vega/partials/sections/intro.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "content" => 10);
        static $filters = array("theme" => 4, "page" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'content'],
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
