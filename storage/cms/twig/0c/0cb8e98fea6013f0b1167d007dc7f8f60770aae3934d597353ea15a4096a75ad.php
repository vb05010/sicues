<?php

/* /websicues/themes/dannyvantol-blight/partials/site/footer.htm */
class __TwigTemplate_9d4395aaedc0c25551aa70bcaa088902e30ceb43c2c7df93ae28abf2c72a1c3e extends Twig_Template
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
        echo "<div class=\"footer text-center p-y-sm\">
    <p>&copy; ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/dannyvantol-blight/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer text-center p-y-sm\">
    <p>&copy; {{ \"now\"|date(\"Y\") }} {{ this.theme.site_name }}</p>
</div>", "/websicues/themes/dannyvantol-blight/partials/site/footer.htm", "");
    }
}
