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

/* /websicues/themes/vojtasvoboda-vega/partials/sections/welcome.htm */
class __TwigTemplate_9f2f222d2d55821508d64789f129efb992b3c655a3fa8ca5f42e446f287ade7c extends \Twig\Template
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
        echo "<div class=\"section frontpage-content bg-white\" id=\"welcome\">
    <div class=\"container\">
        <h2 class=\"block-title wow zoomIn\">Bienvenidas (os) a la SIC UES</h2>
        <div class=\"wow fadeInUp description\">
            ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome/content"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "            
            <p class=\"no-margin\">
                <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/preview-2.jpg");
        echo "\" class=\"img-responsive\" />
            </p>
            <p>
                <a class=\"btn btn-primary-custom btn-margin-top\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/sicues.htm");
        echo "\">Más sobre la SIC UES...</a>
            </p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/sections/welcome.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  53 => 8,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section frontpage-content bg-white\" id=\"welcome\">
    <div class=\"container\">
        <h2 class=\"block-title wow zoomIn\">Bienvenidas (os) a la SIC UES</h2>
        <div class=\"wow fadeInUp description\">
            {% content 'welcome/content' %}
            
            <p class=\"no-margin\">
                <img src=\"{{ 'assets/images/samples/preview-2.jpg' | theme }}\" class=\"img-responsive\" />
            </p>
            <p>
                <a class=\"btn btn-primary-custom btn-margin-top\" href=\"{{'sicues/sicues.htm' | page}}\">Más sobre la SIC UES...</a>
            </p>
        </div>
    </div>
</div>", "/websicues/themes/vojtasvoboda-vega/partials/sections/welcome.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 5);
        static $filters = array("theme" => 8, "page" => 11);
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
