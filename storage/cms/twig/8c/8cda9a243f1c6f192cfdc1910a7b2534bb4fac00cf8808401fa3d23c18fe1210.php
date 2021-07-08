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

/* /websicues/themes/sicues/partials/producion-cientifica.htm */
class __TwigTemplate_cdbb41c211104f4b41de1460d326bb727ae0cfb13fe380744c862531bf0acbec extends \Twig\Template
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
        echo "<div class=\"widget archieve\">
                        <h3>SOBRE CIC-UES</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                 <li><a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miembros-consejo");
        echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Miembros del Consejo <span class=\"pull-right\">(13)</a></li>
                                 <li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/generalidades");
        echo "\"><i class=\"fa fa-outdent\"></i> Generalidades <span class=\"pull-right\"></a></li>
                                 <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/funciones-del-cic-ues");
        echo "\"><i class=\"fa fa-cog\"></i> Funciones del CIC-UES <span class=\"pull-right\">(Art. 21)</a></li>
                                    <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/cic-ues");
        echo "\"><i class=\"fa fa-gavel\"></i> Políticas, Reglamento, Normas Técnicas <span class=\"pull-right\">(3 Doc.)</span></a></li>
                                    <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/articulos-publicados");
        echo "\"><i class=\"fa fa-cogs\"></i> Producción Cientifica <span class=\"pull-right\">(2002-2015)</a></li>
                                   <li><a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos-aprobados");
        echo "\"><i class=\"fa fa-check-square-o\"></i> Proyectos Aprobados <span class=\"pull-right\">(2002 - 2015)</a></li>
                                    <li><a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/eficiencia-terminal");
        echo "\"><i class=\"fa fa-bar-chart\"></i> Eficiencia Terminal <span class=\"pull-right\">(Gráfico 2002-2015)</a></li>
                                    <li><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/inversion-proyectos");
        echo "\"><i class=\"fa fa-bar-chart\"></i> Inversión Proyectos <span class=\"pull-right\">(Gráfico 2002-2015)</a></li>
                                    </ul>
                            </div>
                        </div>                     
                    </div><!--/.producción científica-->
                    
                    <div class=\"widget categories\">
                        <h3>Cronología Directores CIC-UES</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"";
        // line 24
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
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/ingportillo.png");
        echo "\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Ing. Ramon Portillo <br> Director Ejecutivo del CIC-UES </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                       <span>Período 2010 - 2015</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"";
        // line 38
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
        return "/websicues/themes/sicues/partials/producion-cientifica.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  100 => 31,  88 => 24,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget archieve\">
                        <h3>SOBRE CIC-UES</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                 <li><a href=\"{{'samples/miembros-consejo'|page }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Miembros del Consejo <span class=\"pull-right\">(13)</a></li>
                                 <li><a href=\"{{'samples/generalidades'|page }}\"><i class=\"fa fa-outdent\"></i> Generalidades <span class=\"pull-right\"></a></li>
                                 <li><a href=\"{{'samples/funciones-del-cic-ues'|page }}\"><i class=\"fa fa-cog\"></i> Funciones del CIC-UES <span class=\"pull-right\">(Art. 21)</a></li>
                                    <li><a href=\"{{ 'samples/cic-ues'|page }}\"><i class=\"fa fa-gavel\"></i> Políticas, Reglamento, Normas Técnicas <span class=\"pull-right\">(3 Doc.)</span></a></li>
                                    <li><a href=\"{{'samples/articulos-publicados'|page }}\"><i class=\"fa fa-cogs\"></i> Producción Cientifica <span class=\"pull-right\">(2002-2015)</a></li>
                                   <li><a href=\"{{'samples/proyectos-aprobados'|page }}\"><i class=\"fa fa-check-square-o\"></i> Proyectos Aprobados <span class=\"pull-right\">(2002 - 2015)</a></li>
                                    <li><a href=\"{{'samples/eficiencia-terminal'|page }}\"><i class=\"fa fa-bar-chart\"></i> Eficiencia Terminal <span class=\"pull-right\">(Gráfico 2002-2015)</a></li>
                                    <li><a href=\"{{'samples/inversion-proyectos'|page }}\"><i class=\"fa fa-bar-chart\"></i> Inversión Proyectos <span class=\"pull-right\">(Gráfico 2002-2015)</a></li>
                                    </ul>
                            </div>
                        </div>                     
                    </div><!--/.producción científica-->
                    
                    <div class=\"widget categories\">
                        <h3>Cronología Directores CIC-UES</h3>
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
                    </div><!--/.recent comments-->", "/websicues/themes/sicues/partials/producion-cientifica.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 6, "theme" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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
