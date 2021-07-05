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

/* /websicues/themes/sicues/partials/footer.htm */
class __TwigTemplate_0ac16f57cca9fe437002cd5755423513504fa8791da3060240781c5df530152c extends \Twig\Template
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
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t&copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_name", [], "any", false, false, false, 4), "html", null, true);
        echo ". Secretaría de Investigaciones Científicas. Todos los derechos reservados | Ciudad Universitaria, Final de Av.Mártires y Héroes del 30 julio, San Salvador, El Salvador, América Central.| Tel: +503 2225-8434 | e-mail: sic@ues.edu.sv | Tema producido por: <a href=\"http://octobercms.com/\" target=\"_blank\">OctoberCMS</a>
           
            </div>
          <div class=\"col-sm-4\">
          \t  <div class=\"text-center center-block\">
                <a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-2x social\"></i></a>
\t            <a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i id=\"social-yt\" class=\"fa fa-youtube-square fa-2x social\"></i></a>
\t            <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\"><i id=\"social-em\" class=\"fa fa-envelope fa-2x social\"></i></a>
\t\t\t</div>
                  
                  <!-- <div class=\"top-number\"><style>a.three:link {color:#fff;} a.three:visited {color:#fff;} a.three:hover {background:#fff; border-radius:5px 5px 5px 5px;}</style>
                        <p><i class=\"fa fa-book\"></i><a class=\"three\" href=\"http://www.minerva.sic.ues.edu.sv\" target=\"_blank\"> Revista Minerva&nbsp;&nbsp;</a>
                        <i class=\"fa fa-cog fa-spin fa-1x fa-fw\"></i><a class=\"three\" href=\"http://www.vinculacion.sic.ues.edu.sv\" target=\"_blank\">Entorno Productivo &nbsp;</a> 
                        </div> --><!--<ul class=\"pull-right\">
                    <li><a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("inicio");
        echo "\">Inicio</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/trabajos-presentados");
        echo "\">Producción Científica</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/cic-ues");
        echo "\">CIC-UES</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/memoria-labores");
        echo "\">Documentos</a></li>
                    <li><a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\">Contáctenos</a></li>
                </ul>
            </div>-->
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  52 => 11,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t&copy;  {{ \"now\"|date(\"Y\") }} {{ this.theme.site_name }}. Secretaría de Investigaciones Científicas. Todos los derechos reservados | Ciudad Universitaria, Final de Av.Mártires y Héroes del 30 julio, San Salvador, El Salvador, América Central.| Tel: +503 2225-8434 | e-mail: sic@ues.edu.sv | Tema producido por: <a href=\"http://octobercms.com/\" target=\"_blank\">OctoberCMS</a>
           
            </div>
          <div class=\"col-sm-4\">
          \t  <div class=\"text-center center-block\">
                <a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-2x social\"></i></a>
\t            <a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i id=\"social-yt\" class=\"fa fa-youtube-square fa-2x social\"></i></a>
\t            <a href=\"{{ 'samples/contact'|page }}\"><i id=\"social-em\" class=\"fa fa-envelope fa-2x social\"></i></a>
\t\t\t</div>
                  
                  <!-- <div class=\"top-number\"><style>a.three:link {color:#fff;} a.three:visited {color:#fff;} a.three:hover {background:#fff; border-radius:5px 5px 5px 5px;}</style>
                        <p><i class=\"fa fa-book\"></i><a class=\"three\" href=\"http://www.minerva.sic.ues.edu.sv\" target=\"_blank\"> Revista Minerva&nbsp;&nbsp;</a>
                        <i class=\"fa fa-cog fa-spin fa-1x fa-fw\"></i><a class=\"three\" href=\"http://www.vinculacion.sic.ues.edu.sv\" target=\"_blank\">Entorno Productivo &nbsp;</a> 
                        </div> --><!--<ul class=\"pull-right\">
                    <li><a href=\"{{ 'inicio'|page }}\">Inicio</a></li>
                    <li><a href=\"{{ 'samples/trabajos-presentados'|page }}\">Producción Científica</a></li>
                    <li><a href=\"{{'samples/cic-ues'|page}}\">CIC-UES</a></li>
                    <li><a href=\"{{'samples/memoria-labores'|page}}\">Documentos</a></li>
                    <li><a href=\"{{ 'samples/contact'|page }}\">Contáctenos</a></li>
                </ul>
            </div>-->
        </div>
    </div>", "/websicues/themes/sicues/partials/footer.htm", "");
    }
}
