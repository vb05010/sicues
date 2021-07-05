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

/* /websicues/themes/jtherczeg-grill/pages/home.htm */
class __TwigTemplate_d5d64beda1f64262e3adda31f5e55aad698382b49ab12d5fe751af20d003087c extends \Twig\Template
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
        echo "<div id=\"slider\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>
    
<div id=\"services\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>
    
<div id=\"latest-blog\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("latest-blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>What Customers Say</h2>
                <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
\t<div id=\"testimonails\">
\t\t";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  77 => 23,  69 => 18,  60 => 11,  56 => 10,  51 => 7,  47 => 6,  42 => 3,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"slider\">
    {% partial \"slider\" %}
</div>
    
<div id=\"services\">
    {% partial \"services\" %}
</div>
    
<div id=\"latest-blog\">
    {% partial \"latest-blog\" %}
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>What Customers Say</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>
\t<div id=\"testimonails\">
\t\t{% partial \"testimonials\" %}
\t</div>
</div>", "/websicues/themes/jtherczeg-grill/pages/home.htm", "");
    }
}
