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

/* /websicues/themes/sicues/pages/samples/calendario.htm */
class __TwigTemplate_696b0359553390a238b7364cf4754b047fedadc80139a6ca9422c1530d3d5835 extends \Twig\Template
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
        echo "<section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"center\">
               <h2>Calendario de Actividades</h2>
               <!-- <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
            
            <div class=\"row\">
               <iframe src=\"https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=sic%40ues.edu.sv&amp;color=%23aa0000&amp;ctz=America%2FEl_Salvador\" style=\"border-width:0\" width=\"1128\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>
        </div>
    </section><!--/#portfolio-item-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/samples/calendario.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"center\">
               <h2>Calendario de Actividades</h2>
               <!-- <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
            
            <div class=\"row\">
               <iframe src=\"https://calendar.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=sic%40ues.edu.sv&amp;color=%23aa0000&amp;ctz=America%2FEl_Salvador\" style=\"border-width:0\" width=\"1128\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>
        </div>
    </section><!--/#portfolio-item-->", "/websicues/themes/sicues/pages/samples/calendario.htm", "");
    }
}
