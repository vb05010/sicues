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

/* /websicues/themes/jtherczeg-grill/pages/samples/about-us.htm */
class __TwigTemplate_a9584db29bea0b22063d1b798d7bde8cc557df3fb5214c62e7d8fa7acdb42dc0 extends \Twig\Template
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
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>About Us</h2>
                    <span>Home / <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/about-us");
        echo "\">About us</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"timeline-post\">
    ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "</div>


<div id=\"our-team\">
    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about/team"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</div>


<div id=\"testimonails\">
    ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about/feedback"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/pages/samples/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  74 => 25,  68 => 21,  64 => 20,  58 => 16,  54 => 15,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>About Us</h2>
                    <span>Home / <a href=\"{{ 'samples/about-us'|page }}\">About us</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"timeline-post\">
    {% partial \"about/intro\" %}
</div>


<div id=\"our-team\">
    {% partial \"about/team\" %}
</div>


<div id=\"testimonails\">
    {% partial \"about/feedback\" %}
</div>", "/websicues/themes/jtherczeg-grill/pages/samples/about-us.htm", "");
    }
}
