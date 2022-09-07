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

/* /websicues/themes/vojtasvoboda-vega/pages/sicues/contactenos.htm */
class __TwigTemplate_b57acd9bf42e5a6edc8471926abe3e6e2b2fbdbfc293120a7f681ece2963bcc7 extends \Twig\Template
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
        <!-- <h2 class=\"block-title wow zoomIn\">Contáctenos</h2> -->
        <div class=\"wow fadeIn\">
           <spam style=\"color:#a00;\">SIC UES. 1er. Nivel, Edificio de CENSALUD. <em>Ciudad Universitaria \"Dr. Fabio Castillo Figueroa\", Final Av. Héroes y Mártires del 30 julio, San Salvador, El Salvador, América Central. </em></spam>
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <h4>Mapa de ubicación</h4>
                    <div class=\"map\">
                        <div class=\"googlemaps\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.007296124741!2d-89.20390888614625!3d13.718007790369322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633085a6faf643%3A0x794c7d459cebe6ea!2sCentro%20de%20Investigaci%C3%B3n%20y%20Desarrollo%20en%20Salud%20%22CENSALUD%22!5e0!3m2!1ses!2ssv!4v1639165810792!5m2!1ses!2ssv\" width=\"603\" height=\"360\" style=\"border:0;\"  allowfullscreen=\"\" loading=\"lazy\"></iframe>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-md-5\">
                    <h4>Escríbenos</h4>
                    ";
        // line 18
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("customForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        echo "                    <!-- <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f400-o1\" lang=\"en-US\" dir=\"ltr\">
                        <div class=\"screen-reader-response\"></div>
                        <form action=\"#\" method=\"post\" class=\"wpcf7-form\" novalidate=\"novalidate\">
                            <div style=\"display: none;\">
                                <input type=\"hidden\" name=\"_wpcf7\" value=\"400\" />
                                <input type=\"hidden\" name=\"_wpcf7_version\" value=\"4.5.1\" />
                                <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"en_US\" />
                                <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f400-o1\" />
                                <input type=\"hidden\" name=\"_wpnonce\" value=\"3dee91dd9d\" />
                            </div>
                            
                            <div class=\"form-group\"><span class=\"wpcf7-form-control-wrap full-name\"><input type=\"text\" name=\"full-name\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control\" aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Nombre\" /></span></div>
                            <div class=\"form-group\"><span class=\"wpcf7-form-control-wrap email\"><input type=\"email\" name=\"email\" value=\"\" size=\"40\" class=\"wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control\" aria-required=\"true\" aria-invalid=\"false\" placeholder=\"Correo electrónico\" /></span></div>
                            <div class=\"form-group\"><span class=\"wpcf7-form-control-wrap message\"><textarea name=\"message\" cols=\"40\" rows=\"10\" class=\"wpcf7-form-control wpcf7-textarea form-control\" aria-invalid=\"false\" placeholder=\"Mensaje\"></textarea></span></div>
                            <div class=\"form-action\"><input type=\"submit\" value=\"Enviar Mensaje\" class=\"wpcf7-form-control wpcf7-submit btn btn-primary-custom btn-block btn-lg\" /></div>
                            <div class=\"wpcf7-response-output wpcf7-display-none\"></div>
                        </form>
                    </div> -->
                </div>
                 <!-- <h3>Secretaría de Investigaciones Científicas SIC UES</h3> -->
            <!-- <h4>Ciudad Universitaria \"Dr. Fabio Castillo Figueroa\", Final Av. Héroes y Mártires del 30 julio, San Salvador, El Salvador, América Central. <br /> 1er. Nivel, Edificio de CENSALUD. Tel. (503) 2225-8434 correo electronico: sic@ues.edu.sv</h4> -->
            <!-- <p>&nbsp;</p> -->
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/sicues/contactenos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  58 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/sicues/contactenos.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 18);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
