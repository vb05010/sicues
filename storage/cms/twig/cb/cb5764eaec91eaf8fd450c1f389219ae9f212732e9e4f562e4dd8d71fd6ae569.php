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
class __TwigTemplate_124990a132b46aca3f79b9cb9990691650dfa26fd5142eb0b9db835579bb3f12 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-6\">
                        <div class=\"top-number\"><p><i class=\"fa fa-envelope\"></i> sic@ues.edu.sv </p></div>
                    </div><!--/.col-sm-6 col-xs-4-->
                    <div class=\"col-sm-6 col-xs-6\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <!-- <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><i class=\"fa fa-home\"></i></a></li> -->
                                <li><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
                                <li><a href=\"https://www.instagram.com/sic.ues.sv/\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
                                 <li><a href=\"https://twitter.com/sicues_sv\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                                <!-- <li><a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\"><i class=\"fa fa-map-marker\"></i></a></li> -->
                                
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
        return array (  58 => 15,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-6\">
                        <div class=\"top-number\"><p><i class=\"fa fa-envelope\"></i> sic@ues.edu.sv </p></div>
                    </div><!--/.col-sm-6 col-xs-4-->
                    <div class=\"col-sm-6 col-xs-6\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <!-- <li><a href=\"{{'home'|page}}\"><i class=\"fa fa-home\"></i></a></li> -->
                                <li><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
                                <li><a href=\"https://www.instagram.com/sic.ues.sv/\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
                                 <li><a href=\"https://twitter.com/sicues_sv\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                                <!-- <li><a href=\"{{'samples/contact'|page}}\"><i class=\"fa fa-map-marker\"></i></a></li> -->
                                
                            </ul>
                            
                       </div>
                    </div>
                </div><!--/.row--> 
            </div><!--/.container-->
\t</div><!--/.top-bar-->", "/websicues/themes/sicues/partials/top.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
