<?php

/* /websicues/themes/sicues/partials/cronologia-secretarios.htm */
class __TwigTemplate_3e7e67cedaf89ba45a17ca6ade6bf5e9d7f884f5084a525f1ce097eedd34798a extends Twig_Template
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
        echo "<div class=\"widget categories\">
                        <h3><p align=\"center\" class=\"panel panel-success\">Cronología Secretarios de Investigación</p></h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/miguel-sermeno");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/ingsermeno.png");
        echo "\" alt=\"\"></a>
    \t\t\t\t\t\t\t\t<p> Ing. MSc., José Miguel Sermeño <br> Secretario de Investigación</p>
                                    <div class=\"entry-meta small muted\">
                                        <span>Junio 2017 - Actual</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/miembroscic/dr.escoto.png");
        echo "\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Ph.D Rafael Antonio Goméz Escoto <br> Secretario de Investigación </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                       <span>Período Mayo 2015 - Mayo 2017</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/cronologia-secretarios.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widget categories\">
                        <h3><p align=\"center\" class=\"panel panel-success\">Cronología Secretarios de Investigación</p></h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<a href=\"{{'samples/miguel-sermeno'|page}}\"><img src=\"{{ 'assets/images/blog/ingsermeno.png'|theme }}\" alt=\"\"></a>
    \t\t\t\t\t\t\t\t<p> Ing. MSc., José Miguel Sermeño <br> Secretario de Investigación</p>
                                    <div class=\"entry-meta small muted\">
                                        <span>Junio 2017 - Actual</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/miembroscic/dr.escoto.png'|theme }}\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Ph.D Rafael Antonio Goméz Escoto <br> Secretario de Investigación </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                       <span>Período Mayo 2015 - Mayo 2017</span>
                                    </div>
    \t\t\t\t\t\t\t</div>
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->", "/websicues/themes/sicues/partials/cronologia-secretarios.htm", "");
    }
}
