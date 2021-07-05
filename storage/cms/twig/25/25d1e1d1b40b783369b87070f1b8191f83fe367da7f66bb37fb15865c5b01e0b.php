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

/* /websicues/themes/radiantweb-travu/layouts/default.htm */
class __TwigTemplate_0d579feaf05f7c83959ac1e195733fec701080e61903e213fdb543e368691ef1 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
    <header id=\"head\" class=\"secondary\"></header>

    <!-- container -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-sm-12 maincontent\">
                ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 11
        echo "            </article>
            <!-- /Article -->
        </div>
    </div>  <!-- /container -->

";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  51 => 11,  49 => 10,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

    <header id=\"head\" class=\"secondary\"></header>

    <!-- container -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-sm-12 maincontent\">
                {% page %}
            </article>
            <!-- /Article -->
        </div>
    </div>  <!-- /container -->

{% partial 'footer' %}", "/websicues/themes/radiantweb-travu/layouts/default.htm", "");
    }
}
