<?php

/* /websicues/themes/sicues/partials/produccioncientifica-menu.htm */
class __TwigTemplate_f9840e347f62bff72c099e9ee15612e97a8138ca97bf1022ea446c7989a79656 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        return array (  66 => 33,  62 => 32,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--/.producción científica-->
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
