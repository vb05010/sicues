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

/* /websicues/themes/sicues/partials/slider-secretaria.htm */
class __TwigTemplate_feea892b59a2131418e26f19e453edcf3b524f1ebf0fe750a8919ebd6f0daedb extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"margin-top\" class=\"container \">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>
                
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img src=\"http://placehold.it/1200x500/3498db/2980b9\" alt=\"First slide\">
                       
                    </div>
                    <div class=\"item\">
                        <img src=\"http://placehold.it/1200x500/9b59b6/8e44ad\" alt=\"Second slide\">
                        
                    </div>
                    <div class=\"item\">
                        <img src=\"http://placehold.it/1200x500/34495e/2c3e50\" alt=\"Third slide\">
                        
                    </div>
                </div>
                
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span></a><a class=\"right carousel-control\"
                        href=\"#carousel-example-generic\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\">
                    </span>
                </a>
            
                
            </div>
        </div>
    </div>
</div>
<div >
</div>

<style>
\t#margin-top {
\t\tmargin-top:6px;
\t}
</style>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/slider-secretaria.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"margin-top\" class=\"container \">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>
                
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                        <img src=\"http://placehold.it/1200x500/3498db/2980b9\" alt=\"First slide\">
                       
                    </div>
                    <div class=\"item\">
                        <img src=\"http://placehold.it/1200x500/9b59b6/8e44ad\" alt=\"Second slide\">
                        
                    </div>
                    <div class=\"item\">
                        <img src=\"http://placehold.it/1200x500/34495e/2c3e50\" alt=\"Third slide\">
                        
                    </div>
                </div>
                
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span></a><a class=\"right carousel-control\"
                        href=\"#carousel-example-generic\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\">
                    </span>
                </a>
            
                
            </div>
        </div>
    </div>
</div>
<div >
</div>

<style>
\t#margin-top {
\t\tmargin-top:6px;
\t}
</style>", "/websicues/themes/sicues/partials/slider-secretaria.htm", "");
    }
}