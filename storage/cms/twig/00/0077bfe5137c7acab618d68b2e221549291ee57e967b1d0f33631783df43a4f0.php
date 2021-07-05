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

/* /websicues/themes/sicues/partials/tagsproyectos.htm */
class __TwigTemplate_f05b545a9d462a70041168d8d3094363a7aafbab2bc2a766367968d4cc708e8f extends \Twig\Template
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
        echo "<div class=\"widget tags\">
                        <h3><p align=\"center\" class=\"panel panel-success\">PROYECTOS APROBADOS 2002 - 2015</p></h3>
                        <ul class=\"tag-cloud\">
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2015");
        echo ">2015</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2014");
        echo ">2014</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2013");
        echo ">2013</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2012");
        echo ">2012</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2011");
        echo ">2011</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2010");
        echo ">2010</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2009");
        echo ">2009</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2008");
        echo ">2008</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2007");
        echo ">2007</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2006");
        echo ">2006</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2005");
        echo ">2005</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2004");
        echo ">2004</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2003");
        echo ">2003</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/proyectos2002");
        echo ">2002</a></li>
                        </ul>
                    </div><!--/.tags-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/tagsproyectos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget tags\">
                        <h3><p align=\"center\" class=\"panel panel-success\">PROYECTOS APROBADOS 2002 - 2015</p></h3>
                        <ul class=\"tag-cloud\">
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2015\"| page }}>2015</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2014\"| page }}>2014</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2013\"| page }}>2013</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2012\"| page }}>2012</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2011\"| page }}>2011</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2010\"| page }}>2010</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2009\"| page }}>2009</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2008\"| page }}>2008</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2007\"| page }}>2007</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2006\"| page }}>2006</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2005\"| page }}>2005</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2004\"| page }}>2004</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2003\"| page }}>2003</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href={{\"samples/proyectos2002\"| page }}>2002</a></li>
                        </ul>
                    </div><!--/.tags-->", "/websicues/themes/sicues/partials/tagsproyectos.htm", "");
    }
}
