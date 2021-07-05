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

/* /websicues/themes/sicues/partials/accordion.htm */
class __TwigTemplate_5a4eca585a0b80b9e8632a0605f4d25beab0e1fcfa4a5010d270b595ef3d0bda extends \Twig\Template
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
        echo "<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>La Investigación Científica UES</h2>
                        <div class=\"video-responsive\">
                       <iframe width=\"300\" height=\"410\" src=\"https://www.youtube.com/embed/videoseries?list=PL09RA5tZK7yoV2oGyUIdI7olM3R37cfuk\" frameborder=\"0\" allowfullscreen></iframe>
                       </div>
                        
                        </div><!--/#accordion1-->
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/accordion.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>La Investigación Científica UES</h2>
                        <div class=\"video-responsive\">
                       <iframe width=\"300\" height=\"410\" src=\"https://www.youtube.com/embed/videoseries?list=PL09RA5tZK7yoV2oGyUIdI7olM3R37cfuk\" frameborder=\"0\" allowfullscreen></iframe>
                       </div>
                        
                        </div><!--/#accordion1-->
                    </div>
                </div>", "/websicues/themes/sicues/partials/accordion.htm", "");
    }
}
