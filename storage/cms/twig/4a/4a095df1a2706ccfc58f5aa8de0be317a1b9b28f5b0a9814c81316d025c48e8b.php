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

/* /websicues/themes/vojtasvoboda-vega/partials/modules/header.htm */
class __TwigTemplate_54da396edcd57ee7c931931bd453e3c46e310e06cc9be1edd5d8d1f8d84a7886 extends \Twig\Template
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
        echo "<div class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 header-left\">
                <ul id=\"menu-top-left\" class=\"top-menu\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <!--<a href=\"mailto:info@octobercms.com\">sic@ues.edu.sv</a>-->
                        <spam style=\"color:#fff; margin-top:5px; font-size:11px;\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> sic@ues.edu.sv</spam>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <!-- <a href=\"tel:(503) 2225 8434\">(503) 2225 8434</a> -->
                        &nbsp; &nbsp; &nbsp; <spam style=\"color:#fff; margin-top:5px; font-size:11px;\"> <i class=\"fa fa-phone\" aria-hidden=\"true\"></i> (503) 2225 8434</spam>
                    </li>
                </ul>
            </div>

            <div class=\"col-sm-6 header-right\">
                <ul id=\"menu-top-right\" class=\"social-menu top-menu\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"https://www.facebook.com/sic.ues.sv/\" target=\"_blank\">Facebook</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"https://twitter.com/sicues_sv\" target=\"_blank\">Twitter</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"https://www.instagram.com/sic.ues.sv/?hl=es\" target=\"_blank\">Instagram</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                        <a href=\"https://www.youtube.com/c/SICUES\">Youtube</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class=\"header-toggle\"><i class=\"fa fa-angle-down\"></i></div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/modules/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/partials/modules/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
