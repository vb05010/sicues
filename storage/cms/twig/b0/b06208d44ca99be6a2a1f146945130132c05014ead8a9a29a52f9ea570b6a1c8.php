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

/* /websicues/themes/jtherczeg-grill/pages/404.htm */
class __TwigTemplate_0bef090c0f208f539c5af7d58efe5af933830753a73dfa43e3a94d402d7dbaae extends \Twig\Template
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
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>404 Page Not Found</h2>
                    <span>The page you are looking for doesn't exist or another error occurred.</span>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>404 Page Not Found</h2>
                    <span>The page you are looking for doesn't exist or another error occurred.</span>
                </div>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/jtherczeg-grill/pages/404.htm", "");
    }
}
