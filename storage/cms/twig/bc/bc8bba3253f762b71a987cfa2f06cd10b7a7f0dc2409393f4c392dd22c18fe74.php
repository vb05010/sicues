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

/* /websicues/themes/sicues/partials/cronologia-directores-cicues.htm */
class __TwigTemplate_e4c3b7477f17d9702165e7c49e18932573f9fbe0ada2f8f9d0c31e411ad3e0ce extends \Twig\Template
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
        echo "<div class=\"widget categories\">
                        <h3><p align=\"center\" class=\"panel panel-success\">Cronología Directores CIC-UES</p></h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miguel-sermeno");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/ingsermeno.png");
        echo "\" alt=\"\"></a>
    \t\t\t\t\t\t\t\t<p> Ing. MSc., José Miguel Sermeño <br> Director Ejecutivo del CIC-UES</p>
                                    <div class=\"entry-meta small muted\">
                                        <span>Junio 2016 - Actual</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/ingportillo.png");
        echo "\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Ing. Ramon Portillo <br> Director Ejecutivo del CIC-UES </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                       <span>Período 2010 - 2015</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/erlinda-handal");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/erlinda.png");
        echo "\" alt=\"\"></a>
    \t\t\t\t\t\t\t\t<p>Dra. Erlinda Hándal Vega <br>Directora Ejecutiva del CIC-UES </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                        <span>Período 2001 - 2009</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/cronologia-directores-cicues.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  56 => 13,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget categories\">
                        <h3><p align=\"center\" class=\"panel panel-success\">Cronología Directores CIC-UES</p></h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"{{'samples/miguel-sermeno'|page}}\"><img src=\"{{ 'assets/images/blog/ingsermeno.png'|theme }}\" alt=\"\"></a>
    \t\t\t\t\t\t\t\t<p> Ing. MSc., José Miguel Sermeño <br> Director Ejecutivo del CIC-UES</p>
                                    <div class=\"entry-meta small muted\">
                                        <span>Junio 2016 - Actual</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/blog/ingportillo.png'|theme }}\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Ing. Ramon Portillo <br> Director Ejecutivo del CIC-UES </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                       <span>Período 2010 - 2015</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"{{'samples/erlinda-handal'|page}}\"><img src=\"{{ 'assets/images/blog/erlinda.png'|theme }}\" alt=\"\"></a>
    \t\t\t\t\t\t\t\t<p>Dra. Erlinda Hándal Vega <br>Directora Ejecutiva del CIC-UES </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                        <span>Período 2001 - 2009</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->", "/websicues/themes/sicues/partials/cronologia-directores-cicues.htm", "");
    }
}
