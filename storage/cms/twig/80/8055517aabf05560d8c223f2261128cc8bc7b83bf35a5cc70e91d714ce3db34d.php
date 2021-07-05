<?php

/* /websicues/themes/rainlab-relax/partials/nav.htm */
class __TwigTemplate_2624e2d9d554855f48d4a73fd8baba11f91f1434017c257a763a7a92708dbe6d extends Twig_Template
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
        $context["nav"] = $this;
        // line 4
        echo "
";
        // line 18
        echo "
<div class=\"container\">
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array())) {
            // line 21
            echo "        <ul class=\"nav nav-tabs pull-right\">
            ";
            // line 22
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array()));
            echo "
        </ul>
    ";
        }
        // line 25
        echo "</div>";
    }

    // line 5
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            $context["nav"] = $this;
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <li role=\"presentation\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                echo "\">
            <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "</a>

            ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 13
                    echo "                <ul>";
                    echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                    echo "</ul>
            ";
                }
                // line 15
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 15,  88 => 13,  86 => 12,  79 => 10,  72 => 9,  68 => 8,  65 => 7,  62 => 6,  50 => 5,  46 => 25,  40 => 22,  37 => 21,  35 => 20,  31 => 18,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Custom navigation implementation that only shows 2 levels deep #}

{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }}\">
            <a href=\"{{ item.url }}\">{{ item.title }}</a>

            {% if item.items %}
                <ul>{{ nav.render_menu(item.items) }}</ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

<div class=\"container\">
    {% if mainMenu.menuItems %}
        <ul class=\"nav nav-tabs pull-right\">
            {{ nav.render_menu(mainMenu.menuItems) }}
        </ul>
    {% endif %}
</div>", "/websicues/themes/rainlab-relax/partials/nav.htm", "");
    }
}
