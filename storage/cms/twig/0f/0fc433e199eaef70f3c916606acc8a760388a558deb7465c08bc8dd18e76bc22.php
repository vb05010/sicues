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

/* /websicues/themes/sicues/partials/miguelsermeno-menu.htm */
class __TwigTemplate_9f2ab166d9067a8e628c996b58fb48a7a6f43e1fb251ba7f6a4a4c63d809aaf2 extends \Twig\Template
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
        echo "<div class=\"widget archieve\">
                      \t<table class=\"table\">
            \t\t\t\t\t\t<thead>
            \t\t\t\t\t\t\t<tr>
            \t\t\t\t\t\t\t\t<th>
            \t\t\t\t\t\t\t\t\tResumen
            \t\t\t\t\t\t\t\t</th>
            \t\t\t\t\t\t\t\t<th>
            \t\t\t\t\t\t\t\t\tDetalles
            \t\t\t\t\t\t\t\t</th> 
            \t\t\t\t\t\t\t</tr>
            \t\t\t\t\t\t</thead>
            \t\t\t\t\t\t<tbody>
            \t\t\t\t\t\t<tr>
            \t\t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\tProducción Científica
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\t<ol>
            \t\t\t\t\t\t\t\t\t<li>Trabajos presentados:</li>
            \t\t\t\t\t\t\t\t\t<li>Artículos publicados:</li>
            \t\t\t\t\t\t\t\t\t<li>Investigaciones premiadas:</li>
            \t\t\t\t\t\t\t\t\t<li>Proyectos ejecutados con SIC-UES:</li>
            \t\t\t\t\t\t\t\t\t</ol>
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t</tr>
                                        <tr>
                \t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\tPublicaciones
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\t<strong>80</strong>
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t</tr>
                                        <tr>
                \t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\tManuales Técnicos
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t     <ol>
            \t\t\t\t\t\t\t     \t<li>Publicados: <strong>18</strong></li>
            \t\t\t\t\t\t\t     \t<li>Edición de Documentos Técnicos: <strong>8</strong></li>
            \t\t\t\t\t\t\t     </ol>
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t</tr>
            \t\t\t\t\t\t</tbody>
            \t\t\t\t\t</table>
                    </div><!--/.producción científica-->
              
                    <div class=\"widget categories\">
                        <h3>Cronología Directores</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"";
        // line 55
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
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/ingportillo.png");
        echo "\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Ing. Ramon Portillo <br> Ex Director del CIC-UES </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                       <span>Período 2010 - 2015</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/erlinda-handal");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/erlinda.png");
        echo "\" alt=\"\"></a>
    \t\t\t\t\t\t\t\t<p>Dra. Herlinda Handal Vega <br>Ex Directora del CIC-UES </p>
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
        return "/websicues/themes/sicues/partials/miguelsermeno-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 69,  105 => 62,  93 => 55,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget archieve\">
                      \t<table class=\"table\">
            \t\t\t\t\t\t<thead>
            \t\t\t\t\t\t\t<tr>
            \t\t\t\t\t\t\t\t<th>
            \t\t\t\t\t\t\t\t\tResumen
            \t\t\t\t\t\t\t\t</th>
            \t\t\t\t\t\t\t\t<th>
            \t\t\t\t\t\t\t\t\tDetalles
            \t\t\t\t\t\t\t\t</th> 
            \t\t\t\t\t\t\t</tr>
            \t\t\t\t\t\t</thead>
            \t\t\t\t\t\t<tbody>
            \t\t\t\t\t\t<tr>
            \t\t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\tProducción Científica
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\t<ol>
            \t\t\t\t\t\t\t\t\t<li>Trabajos presentados:</li>
            \t\t\t\t\t\t\t\t\t<li>Artículos publicados:</li>
            \t\t\t\t\t\t\t\t\t<li>Investigaciones premiadas:</li>
            \t\t\t\t\t\t\t\t\t<li>Proyectos ejecutados con SIC-UES:</li>
            \t\t\t\t\t\t\t\t\t</ol>
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t</tr>
                                        <tr>
                \t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\tPublicaciones
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\t<strong>80</strong>
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t</tr>
                                        <tr>
                \t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t\t\tManuales Técnicos
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t\t<td>
            \t\t\t\t\t\t\t     <ol>
            \t\t\t\t\t\t\t     \t<li>Publicados: <strong>18</strong></li>
            \t\t\t\t\t\t\t     \t<li>Edición de Documentos Técnicos: <strong>8</strong></li>
            \t\t\t\t\t\t\t     </ol>
            \t\t\t\t\t\t\t\t</td>
            \t\t\t\t\t\t\t</tr>
            \t\t\t\t\t\t</tbody>
            \t\t\t\t\t</table>
                    </div><!--/.producción científica-->
              
                    <div class=\"widget categories\">
                        <h3>Cronología Directores</h3>
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
    \t\t\t\t\t\t\t\t<p>Ing. Ramon Portillo <br> Ex Director del CIC-UES </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                       <span>Período 2010 - 2015</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"{{'samples/erlinda-handal'|page}}\"><img src=\"{{ 'assets/images/blog/erlinda.png'|theme }}\" alt=\"\"></a>
    \t\t\t\t\t\t\t\t<p>Dra. Herlinda Handal Vega <br>Ex Directora del CIC-UES </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                        <span>Período 2001 - 2009</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->", "/websicues/themes/sicues/partials/miguelsermeno-menu.htm", "");
    }
}
