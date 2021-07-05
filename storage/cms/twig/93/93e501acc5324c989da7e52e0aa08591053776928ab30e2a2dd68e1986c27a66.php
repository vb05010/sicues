<?php

/* /websicues/themes/sicues/partials/top.htm */
class __TwigTemplate_502f97870953abab9ec06bbe3df1cb192feb91aca517c2e02c48b693f62b1610 extends Twig_Template
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
        echo "<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 503 2225-8434  <i class=\"fa fa-home\"></i> SECRETARÍA DE INVESTIGACIONES CIENTIFICAS \"SIC-UES\" </p></div>
                    </div><!--/.col-sm-6 col-xs-4-->
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
                                <li><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
                                <li><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\"><i class=\"fa fa-envelope\"></i></a></li>
                                <a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/estado-proyecto");
        echo "\"> <button type=\"button\" class=\"btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Consultar Estado Proyecto </button></a>
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
        return array (  44 => 14,  40 => 13,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-xs-4\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 503 2225-8434  <i class=\"fa fa-home\"></i> SECRETARÍA DE INVESTIGACIONES CIENTIFICAS \"SIC-UES\" </p></div>
                    </div><!--/.col-sm-6 col-xs-4-->
                    <div class=\"col-sm-6 col-xs-8\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <li><a href=\"{{'home'|page}}\"><i class=\"fa fa-home\"></i></a></li>
                                <li><a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
                                <li><a href=\"{{'samples/contact'|page}}\"><i class=\"fa fa-envelope\"></i></a></li>
                                <a href=\"{{'samples/estado-proyecto'|page}}\"> <button type=\"button\" class=\"btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Consultar Estado Proyecto </button></a>
                            </ul>
                            
                       </div>
                    </div>
                </div><!--/.row--> 
            </div><!--/.container-->
\t</div><!--/.top-bar-->", "/websicues/themes/sicues/partials/top.htm", "");
    }
}
