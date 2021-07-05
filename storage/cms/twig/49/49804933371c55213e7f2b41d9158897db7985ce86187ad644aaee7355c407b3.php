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

/* /websicues/themes/sicues/partials/top.htm */
class __TwigTemplate_b1cd53aa428bdd07f073e9849cb0d5d66fe2fecc7304ce3ee19a94e67e02e9c4 extends \Twig\Template
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
        echo "<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 503 2225-8434  <i class=\"fa fa-home\"></i> SECRETARÍA DE INVESTIGACIONES CIENTIFICAS \"SIC-UES\" </p></div>
                    </div><!--/.col-sm-6 col-xs-4-->
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
                                <li><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
                                <li><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\"><i class=\"fa fa-envelope\"></i></a></li>
                                <a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/estado-proyecto");
        echo "\"> <button type=\"button\" class=\"btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Consultar Estado Proyecto </button></a>
                            </ul>
                            
                       </div>
                    </div>
                </div><!--/.row--> 
            </div><!--/.container-->
\t</div><!--/.top-bar-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  52 => 13,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 503 2225-8434  <i class=\"fa fa-home\"></i> SECRETARÍA DE INVESTIGACIONES CIENTIFICAS \"SIC-UES\" </p></div>
                    </div><!--/.col-sm-6 col-xs-4-->
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"{{'home'|page}}\"><i class=\"fa fa-home\"></i></a></li>
                                <li><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
                                <li><a href=\"{{'samples/contact'|page}}\"><i class=\"fa fa-envelope\"></i></a></li>
                                <a href=\"{{'samples/estado-proyecto'|page}}\"> <button type=\"button\" class=\"btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Consultar Estado Proyecto </button></a>
                            </ul>
                            
                       </div>
                    </div>
                </div><!--/.row--> 
            </div><!--/.container-->
\t</div><!--/.top-bar-->", "/websicues/themes/sicues/partials/top.htm", "");
    }
}
