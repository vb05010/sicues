<?php

/* /websicues/themes/sicues/pages/samples/calendario.htm */
class __TwigTemplate_c461cb6b06b22cc58a6e4cd40821e068011d1ad30249fce616852fb5b6c13312 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"portfolio\">
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
