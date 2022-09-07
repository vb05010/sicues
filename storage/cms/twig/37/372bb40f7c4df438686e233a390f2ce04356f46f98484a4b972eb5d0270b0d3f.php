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

/* /websicues/themes/vojtasvoboda-vega/partials/modules/nav.htm */
class __TwigTemplate_05be36bc6ae419aa9fd642d0ef661df7abc1f631481c099cc583965123464453 extends \Twig\Template
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
        echo "<div class=\"nav-wrapper\">
    <div class=\"navbar navbar-custom\" role=\"navigation\">
        <div class=\"container\">
            <!-- Logo -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><i class=\"fa fa-bars\"></i></button>
                <!-- <a class=\"navbar-brand text-logo\" href=\"";
        // line 7
        echo url("");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "site_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</a> -->
                <img class=\"img-responsive\" style=\"margin-top:5px; width: 271px; height: 96px;\" src=\"https://sic.ues.edu.sv/themes/vojtasvoboda-vega/assets/images/sicueslogo.png\" />
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div class=\"navbar-collapse collapse\">
                <ul id=\"menu-header\" class=\"nav navbar-nav navbar-right menu-header\">
                    <li class=\"page-scroll menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Inicio\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home.htm");
        echo "\">Inicio</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"Acerca de\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Acerca de ... <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"SIC UES\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/sicues.htm");
        echo "\">SIC UES &#8211; Secretaría de Investigaciones Científicas</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"CIC\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/cic-ues.htm");
        echo "\">CIC UES &#8211; Consejo de Investigaciones Científicas</a>
                            </li>
                            <!-- <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"CAI\" href=\"#\">CAI &#8211; Consejo Ampliado de Investigación</a>
                            </li> -->
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Documentos\" href=\"#\">Archivos &#8211; (Documentos de ínteres)</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Directorio\" href=\"#\">Investigadores &#8211; (Directorio)</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Reserva\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/solicitud-reserva-auditorio.htm");
        echo "\">Solicitud Reserva Auditorio</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"Investigación\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Investigación <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"PI\" href=\"#\">Programas de Investigación</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Seguimiento de proyectos\" href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/seguimiento-proyectos.htm");
        echo "\">Seguimiento de proyectos de proyectos de investigación</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Centros, Institutos, Laboratorios\" href=\"#\">Investiga en la UES</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Publicaciones Científicas\" href=\"#\">Publicaciones Científicas</a>
                            </li>
                            <!--<li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>-->
                            <!-- <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Post - Full Width\" href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/blog-detail");
        echo "\">Archivos &#8211; (Documentos de ínteres)</a>
                            </li> -->
                            <!-- <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Post - With Sidebar\" href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/blog-detail-with-sidebar");
        echo "\">Investigadores &#8211; (Directorio)</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Oficina de Transferencia\" href=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/otrive.htm");
        echo "\">OTRIVE</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"EPI SIC\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Comunicación Científica <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                           <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                                <a title=\"Boletines\" href=\"#\"> Boletines</a>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                                <a title=\"Infografías\" href=\"#\"> Infografías</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Documentales\" href=\"#\"> Documentales</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Cápsulas\" href=\"#\"> Cápsulas</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Revista minerva\" href=\"https://minerva.sic.ues.edu.sv\" target=\"_blank\"> Revista Minerva</a>
                            </li>
                           <!-- <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>-->
                            <!--<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                                <a title=\"Navigation Level 3\" href=\"#\">Navigation Level 3</a>
                                <ul role=\"menu\" class=\" dropdown-menu\">
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"Level 3\" href=\"#\">Level 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                                <a title=\"English\" href=\"#\"><span class=\"glyphicon English\"></span>&nbsp;Language:&nbsp;<img src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/gb.png");
        echo "\" alt=\"English\" /></a>
                                <ul role=\"menu\" class=\" dropdown-menu\">
                                    <li class=\"qtranxs-lang-menu-item qtranxs-lang-menu-item-en menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"English\" href=\"eUrl }}/en/\"><span class=\"glyphicon English\"></span>&nbsp;<img src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/gb.png");
        echo "\" alt=\"English\" />&nbsp;English</a>
                                    </li>
                                    <li class=\"qtranxs-lang-menu-item qtranxs-lang-menu-item-de menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"Deutsch\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["baseUrl"] ?? null), 112, $this->source), "html", null, true);
        echo "/de/\"><span class=\"glyphicon Deutsch\"></span>&nbsp;<img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/de.png");
        echo "\" alt=\"Deutsch\" />&nbsp;Deutsch</a>
                                    </li>
                                </ul>
                            </li>.-->
                        </ul>
                    </li>
                    
                   <!-- <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Latest Posts\" href=\"#latest\">Formación</a>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a href=\"https://minerva.sic.ues.edu.sv/index.php/Minerva\" target=\"_blank\">Revista Minerva</a>
                    </li>-->
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Convocatoria 20 - 2022\" href=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/convocatoria20-2022.htm");
        echo "\">Convocatoria 2022</a>
                    </li>
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                        <a title=\"Contáctenos\" href=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/contactenos.htm");
        echo "\">Contáctenos</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/modules/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 129,  206 => 126,  187 => 112,  181 => 109,  175 => 106,  137 => 71,  129 => 66,  123 => 63,  108 => 51,  94 => 40,  76 => 25,  70 => 22,  61 => 16,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav-wrapper\">
    <div class=\"navbar navbar-custom\" role=\"navigation\">
        <div class=\"container\">
            <!-- Logo -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><i class=\"fa fa-bars\"></i></button>
                <!-- <a class=\"navbar-brand text-logo\" href=\"{{ url('') }}\">{{ this.theme.site_title }}</a> -->
                <img class=\"img-responsive\" style=\"margin-top:5px; width: 271px; height: 96px;\" src=\"https://sic.ues.edu.sv/themes/vojtasvoboda-vega/assets/images/sicueslogo.png\" />
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div class=\"navbar-collapse collapse\">
                <ul id=\"menu-header\" class=\"nav navbar-nav navbar-right menu-header\">
                    <li class=\"page-scroll menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Inicio\" href=\"{{ 'home.htm' | page }}\">Inicio</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"Acerca de\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Acerca de ... <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"SIC UES\" href=\"{{'sicues/sicues.htm' | page}}\">SIC UES &#8211; Secretaría de Investigaciones Científicas</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"CIC\" href=\"{{'sicues/cic-ues.htm' | page}}\">CIC UES &#8211; Consejo de Investigaciones Científicas</a>
                            </li>
                            <!-- <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"CAI\" href=\"#\">CAI &#8211; Consejo Ampliado de Investigación</a>
                            </li> -->
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Documentos\" href=\"#\">Archivos &#8211; (Documentos de ínteres)</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Directorio\" href=\"#\">Investigadores &#8211; (Directorio)</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Reserva\" href=\"{{'sicues/solicitud-reserva-auditorio.htm' | page }}\">Solicitud Reserva Auditorio</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"Investigación\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Investigación <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"PI\" href=\"#\">Programas de Investigación</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Seguimiento de proyectos\" href=\"{{'sicues/seguimiento-proyectos.htm' | page}}\">Seguimiento de proyectos de proyectos de investigación</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Centros, Institutos, Laboratorios\" href=\"#\">Investiga en la UES</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Publicaciones Científicas\" href=\"#\">Publicaciones Científicas</a>
                            </li>
                            <!--<li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>-->
                            <!-- <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Post - Full Width\" href=\"{{ 'samples/blog-detail' | page }}\">Archivos &#8211; (Documentos de ínteres)</a>
                            </li> -->
                            <!-- <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Post - With Sidebar\" href=\"{{ 'samples/blog-detail-with-sidebar' | page }}\">Investigadores &#8211; (Directorio)</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Oficina de Transferencia\" href=\"{{'sicues/otrive.htm' | page }}\">OTRIVE</a>
                    </li>
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                        <a title=\"EPI SIC\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Comunicación Científica <b class=\"fa fa-angle-down\"></b></a>
                        <ul role=\"menu\" class=\" dropdown-menu\">
                           <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                                <a title=\"Boletines\" href=\"#\"> Boletines</a>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                                <a title=\"Infografías\" href=\"#\"> Infografías</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Documentales\" href=\"#\"> Documentales</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Cápsulas\" href=\"#\"> Cápsulas</a>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"Revista minerva\" href=\"https://minerva.sic.ues.edu.sv\" target=\"_blank\"> Revista Minerva</a>
                            </li>
                           <!-- <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>-->
                            <!--<li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                                <a title=\"Navigation Level 3\" href=\"#\">Navigation Level 3</a>
                                <ul role=\"menu\" class=\" dropdown-menu\">
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"Level 3\" href=\"#\">Level 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"divider menu-item menu-item-type-custom menu-item-object-custom\">
                                <a title=\"---\" href=\"#\">&#8212;</a>
                            </li>
                            <li class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown\">
                                <a title=\"English\" href=\"#\"><span class=\"glyphicon English\"></span>&nbsp;Language:&nbsp;<img src=\"{{ 'assets/images/flags/gb.png' | theme }}\" alt=\"English\" /></a>
                                <ul role=\"menu\" class=\" dropdown-menu\">
                                    <li class=\"qtranxs-lang-menu-item qtranxs-lang-menu-item-en menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"English\" href=\"eUrl }}/en/\"><span class=\"glyphicon English\"></span>&nbsp;<img src=\"{{ 'assets/images/flags/gb.png' | theme }}\" alt=\"English\" />&nbsp;English</a>
                                    </li>
                                    <li class=\"qtranxs-lang-menu-item qtranxs-lang-menu-item-de menu-item menu-item-type-custom menu-item-object-custom\">
                                        <a title=\"Deutsch\" href=\"{{ baseUrl }}/de/\"><span class=\"glyphicon Deutsch\"></span>&nbsp;<img src=\"{{ 'assets/images/flags/de.png' | theme }}\" alt=\"Deutsch\" />&nbsp;Deutsch</a>
                                    </li>
                                </ul>
                            </li>.-->
                        </ul>
                    </li>
                    
                   <!-- <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Latest Posts\" href=\"#latest\">Formación</a>
                    </li>
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a href=\"https://minerva.sic.ues.edu.sv/index.php/Minerva\" target=\"_blank\">Revista Minerva</a>
                    </li>-->
                    <li class=\"page-scroll hidden-sm hidden-md menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item active\">
                        <a title=\"Convocatoria 20 - 2022\" href=\"{{ 'sicues/convocatoria20-2022.htm' | page }}\">Convocatoria 2022</a>
                    </li>
                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page\">
                        <a title=\"Contáctenos\" href=\"{{ 'sicues/contactenos.htm' | page }}\">Contáctenos</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>", "/websicues/themes/vojtasvoboda-vega/partials/modules/nav.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7, "page" => 16, "theme" => 106);
        static $functions = array("url" => 7);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'page', 'theme'],
                ['url']
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
