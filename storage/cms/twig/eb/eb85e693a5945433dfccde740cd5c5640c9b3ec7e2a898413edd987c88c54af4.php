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

/* /websicues/themes/sicues/pages/home.htm */
class __TwigTemplate_bb751d3cf310ed2504baa3b1891e0555afd743dec7a9d28c954a37d25b0c72cf extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- <section id=\"main-slider\" class=\"no-margin\">
\t% partial \"carousel\" %}
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>
<section id=\"main-slider\" class=\"no-margin\">
\t<!--% partial \"ues-entornoproductivo\" %}
</section>  -->
";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
<section id=\"content\"><!--mision,vision,objetivos y directores-->
    <div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("tabs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "        </div><!--/.row-->
    <div><!--/.container-->
</section><!--/#content--><!--fin mision,vision,objetivos y directores-->
<!--Aquí va la sección de Eventos-->

<!--Aquí termina la sección de Eventos-->
<section id=\"middle\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reconocimientos"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("accordion"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->
<!--De interes-->




<!--fin de Interes-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  85 => 30,  81 => 29,  70 => 20,  65 => 19,  61 => 18,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <section id=\"main-slider\" class=\"no-margin\">
\t% partial \"carousel\" %}
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>
<section id=\"main-slider\" class=\"no-margin\">
\t<!--% partial \"ues-entornoproductivo\" %}
</section>  -->
{% partial \"slider2\" %}

<section id=\"content\"><!--mision,vision,objetivos y directores-->
    <div class=\"container\">
        <div class=\"row\">
\t\t\t{% partial \"tabs\" %}
\t\t\t{% partial \"testimonials\" %}
        </div><!--/.row-->
    <div><!--/.container-->
</section><!--/#content--><!--fin mision,vision,objetivos y directores-->
<!--Aquí va la sección de Eventos-->

<!--Aquí termina la sección de Eventos-->
<section id=\"middle\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t{% partial \"reconocimientos\" %}
\t\t\t{% partial \"accordion\" %}
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->
<!--De interes-->




<!--fin de Interes-->", "/websicues/themes/sicues/pages/home.htm", "");
    }
}
