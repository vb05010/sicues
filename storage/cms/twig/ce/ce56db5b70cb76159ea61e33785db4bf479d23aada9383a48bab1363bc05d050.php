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

/* /websicues/themes/jacoweb-agency/pages/404.htm */
class __TwigTemplate_87da2a7dc4750ff217d6f0f814abdf3d2a170952c27cdb890f993a4440ddefb0 extends \Twig\Template
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
        echo "<div id=\"errorPage\">
\t<div class=\"error text-center\">
\t\t404
\t</div>
\t<p class=\"sub\">Page not found</p>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"errorPage\">
\t<div class=\"error text-center\">
\t\t404
\t</div>
\t<p class=\"sub\">Page not found</p>
</div>", "/websicues/themes/jacoweb-agency/pages/404.htm", "");
    }
}
