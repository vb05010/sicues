<?php

/* /websicues/plugins/rainlab/editable/components/editable/default.htm */
class __TwigTemplate_f4b43478e9f9036f7e082ac3ba61157e017f2cff61e62583b69235e9c50d7a8e extends Twig_Template
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
        echo "<div
    data-control=\"editable\"
    data-handler=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "file", array()), "html", null, true);
        echo "\"
    data-file-mode=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fileMode", array()), "html", null, true);
        echo "\">
    ";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", array());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/websicues/plugins/rainlab/editable/components/editable/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
    data-control=\"editable\"
    data-handler=\"{{ __SELF__ }}::onSave\"
    data-file=\"{{ __SELF__.file }}\"
    data-file-mode=\"{{ __SELF__.fileMode }}\">
    {{ __SELF__.content|raw }}
</div>
", "/websicues/plugins/rainlab/editable/components/editable/default.htm", "");
    }
}
