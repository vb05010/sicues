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
class __TwigTemplate_83f207d57d2d40bd7f71eb55c65c5107fae0235532a2538b39185ef022409985 extends \Twig\Template
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
        echo "<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>Popularizando la Ciencia</h2>
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
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>Popularizando la Ciencia</h2>
                        <div class=\"video-responsive\">
                       <iframe width=\"300\" height=\"410\" src=\"https://www.youtube.com/embed/videoseries?list=PL09RA5tZK7yoV2oGyUIdI7olM3R37cfuk\" frameborder=\"0\" allowfullscreen></iframe>
                       </div>
                        
                        </div><!--/#accordion1-->
                    </div>
                </div>", "/websicues/themes/sicues/partials/accordion.htm", "");
    }
}
