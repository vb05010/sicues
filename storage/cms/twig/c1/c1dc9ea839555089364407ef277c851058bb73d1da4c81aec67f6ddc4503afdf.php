<?php

/* /websicues/themes/sicues/pages/home.htm */
class __TwigTemplate_99ba9a3ebd8bff04a58ec586d758258b4fdb7057342204928204f1ab6056bcae extends Twig_Template
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
        return array (  76 => 31,  71 => 30,  67 => 29,  56 => 20,  51 => 19,  47 => 18,  41 => 14,  37 => 13,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- <section id=\"main-slider\" class=\"no-margin\">
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
