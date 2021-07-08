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
class __TwigTemplate_35c91af234282fe2585e6672af7e6fd541f768761349c65c0794580f8cfe00e7 extends \Twig\Template
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
        return array (  82 => 33,  78 => 32,  51 => 8,  47 => 7,  39 => 1,);
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
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 7);
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
