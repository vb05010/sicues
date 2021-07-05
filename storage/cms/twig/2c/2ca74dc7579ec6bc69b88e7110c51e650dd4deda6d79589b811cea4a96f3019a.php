<?php

/* /websicues/themes/dannyvantol-blight/partials/site/header.htm */
class __TwigTemplate_3ccccacde447a7b1bf9a6128bd82d6483831842882a32350617bdfd8781c9718 extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-default navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

            ";
        // line 12
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_logo", array()))) {
            // line 13
            echo "                <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 15
            echo "            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">
                <img class=\"navbar-brand\" src=\"";
            // line 16
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_logo", array()));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
            echo "\">
            </a>
            ";
        }
        // line 19
        echo "        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                <li class=\"";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "post-listing")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post/listing");
        echo "\">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/dannyvantol-blight/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  64 => 22,  59 => 19,  51 => 16,  46 => 15,  38 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-default navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>

            {% if this.theme.site_logo is empty %}
                <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">{{ this.theme.site_name }}</a>
            {% else %}
            <a href=\"{{ 'home'|page }}\">
                <img class=\"navbar-brand\" src=\"{{ this.theme.site_logo|media }}\" alt=\"{{ this.theme.site_name }}\">
            </a>
            {% endif %}
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                <li class=\"{% if this.page.id == 'post-listing' %}active{% endif %}\"><a href=\"{{ 'post/listing'|page }}\">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>", "/websicues/themes/dannyvantol-blight/partials/site/header.htm", "");
    }
}
