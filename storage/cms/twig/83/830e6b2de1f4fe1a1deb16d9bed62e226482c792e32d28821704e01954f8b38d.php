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

/* /websicues/plugins/al3xtig3r/footersignature/components/footersignature/default.htm */
class __TwigTemplate_5a54e3d4e6952b0b609fb0626545181c85f4cfd1ab1018e51215ea0aebeb4614 extends \Twig\Template
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
        $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "icon", [], "method", false, false, false, 1);
        // line 2
        echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "text", [], "method", false, false, false, 2), [":icon" => (((("<i class=\"" . ($context["icon"] ?? null)) . "\" alt=\"") . twig_get_attribute($this->env, $this->source, ($context["icon"] ?? null), "name", [], "any", false, false, false, 2)) . "\"></i>")]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/websicues/plugins/al3xtig3r/footersignature/components/footersignature/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set icon = __SELF__.icon() %}
{{ __SELF__.text()|replace({ ':icon': '<i class=\"' ~ icon ~ '\" alt=\"' ~ icon.name ~ '\"></i>' })|raw }}
", "/websicues/plugins/al3xtig3r/footersignature/components/footersignature/default.htm", "");
    }
}
