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

/* /websicues/themes/jacoweb-agency/partials/clients.htm */
class __TwigTemplate_a0db0a7f2dfd019b00720609fad9553c1b3f260a482724613c0dead55cfda369 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/envato.jpg");
        echo "\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/designmodo.jpg");
        echo "\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/themeforest.jpg");
        echo "\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
\t\t<div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos/octobercms.png");
        echo "\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/partials/clients.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  57 => 15,  49 => 10,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"{{ 'assets/images/logos/envato.jpg'|theme }}\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"{{ 'assets/images/logos/designmodo.jpg'|theme }}\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"{{ 'assets/images/logos/themeforest.jpg'|theme }}\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
\t\t<div class=\"col-md-3 col-sm-6\">
            <a href=\"#\">
                <img src=\"{{ 'assets/images/logos/octobercms.png'|theme }}\" class=\"img-responsive img-centered\" alt=\"\">
            </a>
        </div>
    </div>
</div>", "/websicues/themes/jacoweb-agency/partials/clients.htm", "");
    }
}
