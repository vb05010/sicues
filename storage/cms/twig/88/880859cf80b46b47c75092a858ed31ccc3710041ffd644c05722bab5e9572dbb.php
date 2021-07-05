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

/* /websicues/themes/jtherczeg-grill/partials/footer.htm */
class __TwigTemplate_c0f6418f255563ddeb803e5050265ffc9742e450ebf6296788008adaf23afa7f extends \Twig\Template
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
        echo "<div class=\"bottom-footer\">
    <p>Copyright &copy; 2084 <a href=\"#\">Your Company Name</a> | Design: <a href=\"http://www.templatemo.com\" title=\"free templates\">templatemo</a> | Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bottom-footer\">
    <p>Copyright &copy; 2084 <a href=\"#\">Your Company Name</a> | Design: <a href=\"http://www.templatemo.com\" title=\"free templates\">templatemo</a> | Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a></p>
</div>", "/websicues/themes/jtherczeg-grill/partials/footer.htm", "");
    }
}
