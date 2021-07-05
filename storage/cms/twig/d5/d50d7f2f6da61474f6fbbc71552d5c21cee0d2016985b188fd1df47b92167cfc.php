<?php

/* /websicues/themes/rainlab-relax/partials/sidemenu.htm */
class __TwigTemplate_1ea3a0db59fa4f25556aa8b9c6e14e581f2603d7bc6ddbc629bc38e62676449b extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", array())) : (($context["page"] ?? null)));
        // line 4
        $context["childPages"] = twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "children", array());
        // line 5
        echo "
<ul>
    <li class=\"head-link ";
        // line 7
        echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "url", array()))) ? ("active") : (""));
        echo "\">
        <a href=\"";
        // line 8
        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "url", array()));
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "title", array()), "html", null, true);
        echo "
        </a>
    </li>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["childPage"], "navigation_hidden", array())) {
                // line 13
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->source, $context["childPage"], "url", array()))) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 14
                echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, $context["childPage"], "url", array()));
                echo "\">
                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childPage"], "title", array()), "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/partials/sidemenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  62 => 15,  58 => 14,  53 => 13,  48 => 12,  42 => 9,  38 => 8,  34 => 7,  30 => 5,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Renders a menu with any child static pages #}

{% set parentOrSelf = page.parent ?: page %}
{% set childPages = parentOrSelf.children %}

<ul>
    <li class=\"head-link {{ page.url == parentOrSelf.url ? 'active' }}\">
        <a href=\"{{ parentOrSelf.url|app }}\">
            {{ parentOrSelf.title }}
        </a>
    </li>
    {% for childPage in childPages if not childPage.navigation_hidden %}
        <li class=\"{{ page.url == childPage.url ? 'active' }}\">
            <a href=\"{{ childPage.url|app }}\">
                {{ childPage.title }}
            </a>
        </li>
    {% endfor %}
</ul>", "/websicues/themes/rainlab-relax/partials/sidemenu.htm", "");
    }
}
