<?php

/* /websicues/themes/rainlab-relax/partials/meta.htm */
class __TwigTemplate_fefc5772bb7b421eca5bcc9b05cd6e58b1c01b1be8ddf0fa0f69951170ff6960 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<title>OctoberCMS - ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />
<meta name=\"generator\" content=\"OctoberCMS\" />
";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 10
        echo "
";
        // line 12
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/nivo/nivo-slider.css", 1 => "assets/less/vendor.less"));
        // line 15
        echo "\" rel=\"stylesheet\" />

";
        // line 18
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/less/theme.less"));
        echo "\" rel=\"stylesheet\" />";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  54 => 15,  51 => 12,  48 => 10,  45 => 9,  40 => 7,  34 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<title>OctoberCMS - {{ this.page.title }}</title>
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
<meta name=\"generator\" content=\"OctoberCMS\" />
{% styles %}

{# Vendor #}
<link href=\"{{ [
    'assets/vendor/nivo/nivo-slider.css',
    'assets/less/vendor.less',
]|theme }}\" rel=\"stylesheet\" />

{# Theme #}
<link href=\"{{ ['assets/less/theme.less']|theme }}\" rel=\"stylesheet\" />", "/websicues/themes/rainlab-relax/partials/meta.htm", "");
    }
}
