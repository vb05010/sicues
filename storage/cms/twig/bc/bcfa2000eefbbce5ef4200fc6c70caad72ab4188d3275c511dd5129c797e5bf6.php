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

/* /websicues/themes/sicues/partials/produccioncientifica-menu.htm */
class __TwigTemplate_5e77e3c0bb939cbe44d247df42bcbd4860ff7511c0c25ccb9810c53dfd168f27 extends \Twig\Template
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
        echo "<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                        <h3>Producción Científica</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                \t<li><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/articulos-publicados");
        echo "\"><i class=\"fa fa-angle-double-right\"></i> Artículos Públicados <span class=\"pull-right\">(En desarrollo)</a></li>
                                    <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/trabajos-presentados");
        echo "\"><i class=\"fa fa-angle-double-right\"></i> Trabajos Presentados <span class=\"pull-right\">(En desarrollo)</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t<div class=\"widget archieve\">
                        <h3>Reconocimiento a investigadores (as)</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                               <ul class=\"tag-cloud\">
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2017</a> --></li>   \t
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2016</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2015</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2014</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2013</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2012</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2011</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2010</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2009</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2008</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2007</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2006</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2005</a> --></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/reconocimientos-investigadores2004");
        echo "\">2004</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/reconocimientos-investigadores2003");
        echo "\">2003</a></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2002</a> --></li>
                        </ul>
                            </div>
                        </div>                     
                    </div><!--/.Seminarios Científicos-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/produccioncientifica-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 33,  76 => 32,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--/.producción científica-->
    \t\t\t\t<div class=\"widget archieve\">
                        <h3>Producción Científica</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                \t<li><a href=\"{{ 'samples/articulos-publicados'|page }}\"><i class=\"fa fa-angle-double-right\"></i> Artículos Públicados <span class=\"pull-right\">(En desarrollo)</a></li>
                                    <li><a href=\"{{ 'samples/trabajos-presentados'|page }}\"><i class=\"fa fa-angle-double-right\"></i> Trabajos Presentados <span class=\"pull-right\">(En desarrollo)</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.producción científica-->
    \t\t\t\t<!--/.Seminarios científicos-->
    \t\t\t\t<div class=\"widget archieve\">
                        <h3>Reconocimiento a investigadores (as)</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                               <ul class=\"tag-cloud\">
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2017</a> --></li>   \t
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2016</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2015</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2014</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2013</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2012</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2011</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2010</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2009</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2008</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2007</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2006</a> --></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2005</a> --></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"{{ 'samples/reconocimientos-investigadores2004'|page }}\">2004</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"{{ 'samples/reconocimientos-investigadores2003'|page }}\">2003</a></li>
                            <li><!-- <a class=\"btn btn-xs btn-primary\" href=\"#\">2002</a> --></li>
                        </ul>
                            </div>
                        </div>                     
                    </div><!--/.Seminarios Científicos-->", "/websicues/themes/sicues/partials/produccioncientifica-menu.htm", "");
    }
}
