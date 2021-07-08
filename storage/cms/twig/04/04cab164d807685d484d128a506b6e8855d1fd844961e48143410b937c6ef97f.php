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
class __TwigTemplate_b21f7a1f1cc548e2f298e81d68efa39ab1e104c926ab0225d12200cbcb1dbe8c extends \Twig\Template
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
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t&copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "site_name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo ". Secretaría de Investigaciones Científicas. Todos los derechos reservados | Ciudad Universitaria, Final de Av.Mártires y Héroes del 30 julio, San Salvador, El Salvador, América Central.| Tel: +503 2225-8434 | e-mail: sic@ues.edu.sv | Tema producido por: <a href=\"http://octobercms.com/\" target=\"_blank\">OctoberCMS</a>
           
            </div>
          <div class=\"col-sm-4\">
          \t  <div class=\"text-center center-block\">
                <a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook fa-2x social\"></i></a>
\t            <a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i id=\"social-yt\" class=\"fa fa-youtube fa-2x social\"></i></a>
\t            <a href=\"https://www.instagram.com/sic.ues.sv/\" target=\"_blank\"><i id=\"social-yt\" class=\"fa fa-instagram fa-2x social\"></i></a>
\t            <a href=\"https://twitter.com/sicues_sv\" target=\"_blank\"><i id=\"social-yt\" class=\"fa fa-twitter fa-2x social\"></i></a>
\t            <a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\"><i id=\"social-em\" class=\"fa fa-envelope fa-2x social\"></i></a>
\t\t\t</div>
                  
                  <!-- <div class=\"top-number\"><style>a.three:link {color:#fff;} a.three:visited {color:#fff;} a.three:hover {background:#fff; border-radius:5px 5px 5px 5px;}</style>
                        <p><i class=\"fa fa-book\"></i><a class=\"three\" href=\"http://www.minerva.sic.ues.edu.sv\" target=\"_blank\"> Revista Minerva&nbsp;&nbsp;</a>
                        <i class=\"fa fa-cog fa-spin fa-1x fa-fw\"></i><a class=\"three\" href=\"http://www.vinculacion.sic.ues.edu.sv\" target=\"_blank\">Entorno Productivo &nbsp;</a> 
                        </div> --><!--<ul class=\"pull-right\">
                    <li><a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("inicio");
        echo "\">Inicio</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/trabajos-presentados");
        echo "\">Producción Científica</a></li>
                    <li><a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/cic-ues");
        echo "\">CIC-UES</a></li>
                    <li><a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/memoria-labores");
        echo "\">Documentos</a></li>
                    <li><a href=\"";
        // line 24
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
        return array (  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  58 => 13,  44 => 4,  39 => 1,);
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
                <a href=\"https://www.facebook.com/investigacion.cientificaues/?hc_ref=PAGES_TIMELINE\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook fa-2x social\"></i></a>
\t            <a href=\"https://www.youtube.com/channel/UCqAn90MIpfE5MAowdU8klpw?sub_confirmation=1\" target=\"_blank\"><i id=\"social-yt\" class=\"fa fa-youtube fa-2x social\"></i></a>
\t            <a href=\"https://www.instagram.com/sic.ues.sv/\" target=\"_blank\"><i id=\"social-yt\" class=\"fa fa-instagram fa-2x social\"></i></a>
\t            <a href=\"https://twitter.com/sicues_sv\" target=\"_blank\"><i id=\"social-yt\" class=\"fa fa-twitter fa-2x social\"></i></a>
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
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4, "date" => 4, "page" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date', 'page'],
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
