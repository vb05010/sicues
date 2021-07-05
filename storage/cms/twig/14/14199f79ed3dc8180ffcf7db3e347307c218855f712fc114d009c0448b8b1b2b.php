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

/* /websicues/themes/jacoweb-agency/partials/header.htm */
class __TwigTemplate_2ff3dc518c7a1cb0dc85324179ed8e750b190d6cd774ce866f4a91dee3a55c01 extends \Twig\Template
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
    <div class=\"intro-text\">
        <div class=\"intro-lead-in\">Welcome To Our Studio!</div>
        <div class=\"intro-heading\">It's Nice To Meet You</div>
        <a href=\"#services\" class=\"page-scroll btn btn-xl\">Tell Me More</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/partials/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"intro-text\">
        <div class=\"intro-lead-in\">Welcome To Our Studio!</div>
        <div class=\"intro-heading\">It's Nice To Meet You</div>
        <a href=\"#services\" class=\"page-scroll btn btn-xl\">Tell Me More</a>
    </div>
</div>", "/websicues/themes/jacoweb-agency/partials/header.htm", "");
    }
}
