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

/* /websicues/themes/vojtasvoboda-vega/partials/sections/contact.htm */
class __TwigTemplate_530f567ed3da38865343968d10bcc8d0315e8a185d27b1f353aeb4e3e94a45ba extends \Twig\Template
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
        echo "<div class=\"section frontpage-open1 bg-white\" id=\"open\">
    <div class=\"container\">
        <h2 class=\"block-title wow zoomIn\">Contáctanos</h2>
        <div class=\"wow fadeIn\">
            <!-- <p class=\"text-center\">On the left, we placed contact form.</p> -->
            <!-- <p class=\"text-center\">On the left, we embedded the Google Maps code and wrapped it with <code>&lt;div class=\"map\"&gt;&lt;/div&gt;</code></p> -->
            <p>&nbsp;</p>
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <h4>Mapa de ubicación</h4>
                    <div class=\"map\">
                        <div class=\"googlemaps\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.007296124741!2d-89.20390888614625!3d13.718007790369322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633085a6faf643%3A0x794c7d459cebe6ea!2sCentro%20de%20Investigaci%C3%B3n%20y%20Desarrollo%20en%20Salud%20%22CENSALUD%22!5e0!3m2!1ses!2ssv!4v1639165810792!5m2!1ses!2ssv\" width=\"600\" height=\"375\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-5\">
                    <h4>Escríbenos</h4>
                    <p align=\"justify\">Para mayor información escriba al correo electrónico: \"sic@ues.edu.sv\" o llame al teléfono: (+503) 2225 8434 o complete el formulario disponible en el siguiente enlace:</p>
                    <p><a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/contactenos.htm");
        echo "\" class=\"btn btn-primary-custom btn-margin-top\"><strong>Formulario de contacto</strong></a></p>
                    <div id=\"container\">
            \t<!-- <div id=\"left\">
            \t\t<img  src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/ues.jpg");
        echo "\" class=\"img-responsive\" />
            \t</div> -->
  \t\t\t\t<!-- <div id=\"right\">
  \t\t\t\t\t<img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/reima.jpg");
        echo "\" class=\"img-responsive\" />
  \t\t\t\t</div> -->
  \t\t\t\t<!-- <div id=\"center\">
  \t\t\t\t\t<img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/csuca.jpg");
        echo "\" class=\"img-responsive\" />
  \t\t\t\t</div> -->
            </div> <!--end container-->
        </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/sections/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  72 => 26,  66 => 23,  60 => 20,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/partials/sections/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 20, "theme" => 23);
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
