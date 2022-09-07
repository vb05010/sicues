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

/* /websicues/themes/vojtasvoboda-vega/partials/modules/sidebar.htm */
class __TwigTemplate_f7e8d5659c7be92fad10e2bcb0b2810bcff8427cae77cc81035538244c2b245c extends \Twig\Template
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
        echo "<div class=\"sidebar-widgets\">
    <div id=\"search-3\" class=\"widget widget_search\">
        <h3 class=\"widget-title\">Monto máximo de la subvención</h3>
        <!-- <form role=\"search\" method=\"get\" class=\"search-form\" action=\"/\">
            <input type=\"search\" class=\"search-field form-control\" placeholder=\"Buscar...\" value=\"\" name=\"s\" title=\"Search for:\"  />
            <button class=\"btn btn-primary-custom\" name=\"submit\" type=\"submit\">
                <i class=\"glyphicon glyphicon-arrow-right\"></i>
            </button>
        </form> -->
        <p>Máximo de USD 20,000.00 por proyecto de investigación.</p>
    </div>
    <div id=\"image-1\" class=\"widget widget_image\">
        <h3 class=\"widget-title\">Calendarización</h3>
        <div class=\"jetpack-image-container\">
            <figure style=\"width: 1280px\" class=\"wp-caption alignnone\">
                <a href=\"#\">
                    <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/convocatoria20-2022/calendario.jpg");
        echo "\" width=\"1280\" height=\"960\" />
                </a>
                <figcaption class=\"wp-caption-text\">Las notificaciones para la corrección de observaciones dadas por el CEI y pares evaluadores externos ciegos, se enviarán conforme a la entrega de los resultados de las evaluaciones. </figcaption>
            </figure>
        </div>
    </div>
    <div id=\"recent-posts-3\" class=\"widget widget_recent_entries\">
        <h3 class=\"widget-title\"><i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> Descargar documentos de referencias (DR) </h3>
        <ul>
            <li>
                <a download=\"DR.1.Guía_Para_Llenado_Protocolo2022.pdf\" href=\"https://sic.ues.edu.sv/storage/app/media/convocatoria20-2022/DR.1.Guia_Para_Llenado_Protocolo2022.pdf\"> <i class=\"fa fa-download\" aria-hidden=\"true\"></i> DR.1.Guía_Para_Llenado_<br />Protocolo2022.pdf </a>
            </li>
            <li>
                <a download=\"DR.2.Protocolo2022.docx\" href=\"https://sic.ues.edu.sv/storage/app/media/convocatoria20-2022/DR.2.Protocolo2022.docx\"> <i class=\"fa fa-download\" aria-hidden=\"true\"></i> DR.2.Protocolo2022.docx</a>
            </li>
            <li>
                <a download=\"DR.3.NTAsicues.pdf\" href=\"https://sic.ues.edu.sv/storage/app/media/convocatoria20-2022/DR.3.NTAsicues.pdf\"> <i class=\"fa fa-download\" aria-hidden=\"true\"></i> DR.3.NTAsicues.pdf</a>
            </li>
            <li>
                <a download=\"DR.4.PoliticasIC.pdf\" href=\"https://sic.ues.edu.sv/storage/app/media/convocatoria20-2022/DR.4.PoliticasIC.pdf\"> <i class=\"fa fa-download\" aria-hidden=\"true\"></i> DR.4.PoliticasIC.pdf</a>
            </li>
            <li>
                <a download=\"DR.5.LegislacionUniversitaria.pdf\" href=\"https://sic.ues.edu.sv/storage/app/media/convocatoria20-2022/DR.5.LegislacionUniversitaria.pdf\"> <i class=\"fa fa-download\" aria-hidden=\"true\"></i> DR.5.LegislacionUniversitaria.pdf</a>
            </li>
            <li>
                <a download=\"DR.6.presupuesto.xlsx\" href=\"https://sic.ues.edu.sv/storage/app/media/convocatoria20-2022/DR.6.presupuesto.xlsx\"> <i class=\"fa fa-download\" aria-hidden=\"true\"></i> DR.6.presupuesto.xlsx</a>
            </li>
        </ul>
    </div>
    <!-- <div class=\"widget widget_tag_cloud\">
        <h3 class=\"widget-title\">Tags</h3>
        <div class=\"tagcloud\">
            <a href='#' class='tag-link-7 tag-link-position-1' title='2 topics' style='font-size: 8pt;'>animal</a>
            <a href='#' class='tag-link-30 tag-link-position-2' title='2 topics' style='font-size: 8pt;'>flower</a>
            <a href='#' class='tag-link-31 tag-link-position-3' title='2 topics' style='font-size: 8pt;'>forest</a>
            <a href='#' class='tag-link-43 tag-link-position-4' title='2 topics' style='font-size: 8pt;'>nature</a>
            <a href='#' class='tag-link-44 tag-link-position-5' title='2 topics' style='font-size: 8pt;'>ocean</a>
            <a href='#' class='tag-link-50 tag-link-position-6' title='2 topics' style='font-size: 8pt;'>sample post</a>
            <a href='#' class='tag-link-66 tag-link-position-7' title='2 topics' style='font-size: 8pt;'>water</a>
        </div>
    </div> -->
    <style type=\"text/css\">
        .qtranxs_widget ul { margin: 0; }
        .qtranxs_widget ul li
        {
            display: inline; /* horizontal list, use \"list-item\" or other appropriate value for vertical list */
            list-style-type: none; /* use \"initial\" or other to enable bullets */
            margin: 0 5px 0 0; /* adjust spacing between items */
            opacity: 0.5;
            -o-transition: 1s ease opacity;
            -moz-transition: 1s ease opacity;
            -webkit-transition: 1s ease opacity;
            transition: 1s ease opacity;
        }
        .qtranxs_widget ul li.active { opacity: 0.8; }
        .qtranxs_widget ul li:hover { opacity: 1; }
        .qtranxs_widget img { box-shadow: none; vertical-align: middle; display: initial; }
        .qtranxs_flag span { display:none; }
    </style>
    
    <div class=\"widget qtranxs_widget\">
        <h3 class=\"widget-title\">Contacto para consultas</h3>
        <!-- <ul class=\"language-chooser language-chooser-image qtranxs_language_chooser\" id=\"qtranslate-1-chooser\">
            <li class=\"lang-en active\">
                <a href=\"#\" hreflang=\"en\" title=\"English (en)\" class=\"qtranxs_image qtranxs_image_en\">
                    <img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/gb.png");
        echo "\" alt=\"English (en)\" />
                    <span style=\"display:none\">English</span>
                </a>
            </li>
            <li class=\"lang-de\">
                <a href=\"#\" hreflang=\"de\" title=\"Deutsch (de)\" class=\"qtranxs_image qtranxs_image_de\">
                    <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/de.png");
        echo "\" alt=\"Deutsch (de)\" />
                    <span style=\"display:none\">Deutsch</span>
                </a>
            </li>
        </ul> -->
        <spam>Rafaela de los Ángeles Pérez<br>Gestora de Seguimientos de proyectos de investigación<br>Correo electrónico: rafaela.perez@ues.edu.sv </spam>
        <div class=\"qtranxs_widget_end\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/modules/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 88,  125 => 82,  57 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/partials/modules/sidebar.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
