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

/* /websicues/themes/vojtasvoboda-vega/partials/sections/posts.htm */
class __TwigTemplate_a6e5ee7c478311680a4cf6c303edca9fe26d77e57dca0caad02603a8effe5f33 extends \Twig\Template
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
        echo "<div class=\"section frontpage-recent-posts bg-white\" id=\"latest\">
    <div class=\"container\">

        <h2 class=\"block-title wow bounceIn\">Formación</h2>

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 wow zoomIn\">
                <div class=\"post-grid recent-entry\">
                    <div class=\"recent-entry-image image\">
                        <a class=\"post-thumbnail post-thumbnail-recent\" href=\"#\">
                            <img width=\"350\" height=\"220\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/girl-1031772_1920-1-350x220.jpg");
        echo "\" class=\"img-responsive wp-post-image\" alt=\"Taller Virtual de Edición Editorial de Revistas Científicas en Open Journal System (OJS)\" />
                        </a>
                        <div class=\"caption\">
                            <div class=\"caption-inner\">
                                <a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/taller-ojs.htm");
        echo "\" class=\"icon-link white\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"helper\"></div>
                        </div>
                    </div>

                    <!-- Post Title -->
                    <h4 class=\"recent-entry-title\">
                        <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/taller-ojs.htm");
        echo "\">Taller Virtual de Edición Editorial de Revistas Científicas en Open Journal System (OJS)</a>
                    </h4>
                    <!-- /Post Title -->

                    <div class=\"recent-entry-content\">
                        <p>Programa para el Fortalecimiento de Revistas Científicas UES</p>
                    </div>

                    <!-- Post Meta -->
                    <div class=\"recent-entry-meta\">
                        Responsable: Secretaría de Investigaciones Científicas<br />Importante: Disponibilidad de laptop y conexión a internet.
                    </div>
                    <!-- /Post Meta -->
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 wow zoomIn\">
                <div class=\"post-grid recent-entry\">
                    <div class=\"recent-entry-image image\">
                        <a class=\"post-thumbnail post-thumbnail-recent\" href=\"https://sic.ues.edu.sv/congreso-internacional/\" target=\"_blank\">
                            <img width=\"350\" height=\"220\" src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/golden-gate-bridge-350x220.jpg");
        echo "\" class=\"img-responsive wp-post-image\" alt=\"I Congreso Internacional de Medio Ambiente\" />
                        </a>
                        <div class=\"caption\">
                            <div class=\"caption-inner\">
                                <a href=\"#\" class=\"icon-link white\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"helper\"></div>
                        </div>
                    </div>

                    <!-- Post Title -->
                    <h4 class=\"recent-entry-title\">
                        <a href=\"https://sic.ues.edu.sv/congreso-internacional/\" target=\"_blank\">I Congreso internacional de educación ambiental y su impacto sobre la gestión integral de riesgo de desastres y los medios de vida ante el cambio climático</a>
                    </h4>
                    <!-- /Post Title -->

                    <div class=\"recent-entry-content\">
                        <p>Este congreso forma parte de la política ambiental de la Universidad de El Salvador,...</p>
                    </div>

                    <!-- Post Meta -->
                    <div class=\"recent-entry-meta\">
\t\t\t\t\t\t\tSesiones virtuales; además, las inscripciones y ponencias serán gratuitas para ponentes nacionales e internacionales. 
\t\t\t\t\t</div>
                    <!-- /Post Meta -->
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 wow zoomIn\">
                <div class=\"post-grid recent-entry\">
                    <div class=\"recent-entry-image image\">
                        <a class=\"post-thumbnail post-thumbnail-recent\" href=\"#\">
                            <img width=\"350\" height=\"220\" src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/office-computer-350x220.jpg");
        echo "\" class=\"img-responsive wp-post-image\" alt=\"Premium one-on-one support.\" />
                        </a>
                        <div class=\"caption\">
                            <div class=\"caption-inner\">
                                <a href=\"#\" class=\"icon-link white\"><i class=\"fa fa-link\"></i></a>
                            </div>
                            <div class=\"helper\"></div>
                        </div>
                    </div>

                    <!-- Post Title -->
                    <!-- <h4 class=\"recent-entry-title\">
                        <a href=\"#\">Premium one-on-one support.</a>
                    </h4> -->
                    <!-- /Post Title -->

                    <!-- <div class=\"recent-entry-content\">
                        <p>Duis tempus condimentum cursus. Proin posuere et dui nec posuere. Ut tempus odio sit amet ligula bibendum egestas. Ut imperdiet mi id elit fermentum aliquet. Sed vitae eros a mi pulvinar blandit. Fusce at hendrerit dolor, et hendrerit arcu.</p>
                    </div> -->

                    <!-- Post Meta -->
                    <!-- <div class=\"recent-entry-meta\">
                        Posted: Feb 16, 2016<br />Under: <a href=\"#\" rel=\"category tag\">Sample Posts</a>, <a href=\"#\" rel=\"category tag\">Uncategorized</a>
                    </div> -->
                    <!-- /Post Meta -->
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/sections/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 73,  91 => 42,  69 => 23,  58 => 15,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/partials/sections/posts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 11, "page" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
