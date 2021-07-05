<?php

/* /websicues/themes/rainlab-relax/partials/title.htm */
class __TwigTemplate_6c5a117654b31735ce86e1e4836ba941c09fdc0347d23fe9d999c736edfa3317 extends Twig_Template
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
        if ( !($context["bannerImage"] ?? null)) {
            // line 2
            echo "    ";
            $context["randomImage"] = array(0 => "highchair", 1 => "sofa", 2 => "cafe", 3 => "in-field", 4 => "wheelchair", 5 => "chairs", 6 => "lake", 7 => "rocking-chairs");
            // line 3
            echo "    ";
            $context["bannerImage"] = ((($context["banner"] ?? null)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(($context["banner"] ?? null))) : ($this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/chairs/" . twig_random($this->env, ($context["randomImage"] ?? null))) . ".jpg"))));
        }
        // line 5
        echo "
<div class=\"title-image\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["bannerImage"] ?? null), "html", null, true);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive\" />
</div>
<div class=\"title-heading\">
    <div class=\"title\">
        <h1>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</span>
        </h1>
    </div>
    <div class=\"desc\">
        <h2>
            <span>
                ";
        // line 18
        echo twig_escape_filter($this->env, ((($context["tagline"] ?? null)) ? (($context["tagline"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()))), "html", null, true);
        echo "
            </span>
        </h2>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/partials/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  44 => 12,  36 => 7,  32 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not bannerImage %}
    {% set randomImage = ['highchair', 'sofa', 'cafe', 'in-field', 'wheelchair', 'chairs', 'lake', 'rocking-chairs'] %}
    {% set bannerImage = banner ? banner|media : ('assets/images/chairs/'~random(randomImage)~'.jpg')|theme %}
{% endif %}

<div class=\"title-image\">
    <img src=\"{{ bannerImage }}\" alt=\"\" title=\"\" class=\"img-responsive\" />
</div>
<div class=\"title-heading\">
    <div class=\"title\">
        <h1>
            <span>{{ title ?: this.page.title }}</span>
        </h1>
    </div>
    <div class=\"desc\">
        <h2>
            <span>
                {{ tagline ?: this.page.meta_title }}
            </span>
        </h2>
    </div>
</div>", "/websicues/themes/rainlab-relax/partials/title.htm", "");
    }
}
