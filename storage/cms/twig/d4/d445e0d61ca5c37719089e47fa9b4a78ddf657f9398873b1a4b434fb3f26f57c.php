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

/* /websicues/themes/jtherczeg-grill/partials/about/feedback.htm */
class __TwigTemplate_c792a0c3bb385c8374352ad2eb8370987dc2751f54013c615b3f70bae0495bbb extends \Twig\Template
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
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Testimonials and Awards</h2>
                    <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
            </div>
        </div>
    </div>
\t";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/about/feedback.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Testimonials and Awards</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
                </div>
            </div>
        </div>
    </div>
\t{% partial \"testimonials\" %}", "/websicues/themes/jtherczeg-grill/partials/about/feedback.htm", "");
    }
}
