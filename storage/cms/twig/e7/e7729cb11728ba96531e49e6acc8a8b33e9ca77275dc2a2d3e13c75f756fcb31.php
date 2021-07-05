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

/* /websicues/themes/sicues/partials/nav.htm */
class __TwigTemplate_2ddea3e7a80127b700d3306d6ea184512bdfe3034b99979a759abe27015153aa extends \Twig\Template
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
        // line 2
        $context["links"] = ["home" => [0 => "home", 1 => "INICIO"], "centros-institutos" => [0 => "samples/centros-institutos", 1 => "CENTROS E INSTITUTOS"], "directorio-investigadores" => [0 => "samples/directorio-investigadores", 1 => "INVESTIGADORES (AS)"], "memoria-labores" => [0 => "samples/memoria-labores", 1 => "ARCHIVO"], "contact" => [0 => "samples/contact.htm", 1 => "CONTÁCTENOS"]];
        // line 11
        echo "
";
        // line 32
        echo "
";
        // line 33
        $context["nav"] = $this;
        // line 34
        echo "
<nav class=\"navbar navbar-inverse\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img style=\"height:86px;\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logosicaprobado2.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t";
        // line 48
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    // line 12
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 14
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 14)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 16
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 16)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 16)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 17)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 18
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 18)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 20
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 20)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 20)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 21)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 22
                echo "            </a>
            ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->getTemplateName(), "render_menu", [0 => twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 26)], "method", false, false, false, 26), "html", null, true);
                    echo "
                </ul>
            ";
                }
                // line 29
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 29,  131 => 26,  127 => 24,  125 => 23,  122 => 22,  118 => 21,  114 => 20,  108 => 18,  104 => 17,  100 => 16,  92 => 14,  87 => 13,  75 => 12,  66 => 48,  57 => 44,  45 => 34,  43 => 33,  40 => 32,  37 => 11,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
\t   'home':      ['home', 'INICIO'],
\t   'centros-institutos': ['samples/centros-institutos', 'CENTROS E INSTITUTOS'],
\t   'directorio-investigadores': ['samples/directorio-investigadores', 'INVESTIGADORES (AS)'],
\t   'memoria-labores': ['samples/memoria-labores', 'ARCHIVO'],
       'contact': ['samples/contact.htm', 'CONTÁCTENOS'],
    }
%}

{% macro render_menu(links) %}
    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href=\"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\"
            >
                {{ link.name ?: link[1] }}
                {% if link.sublinks %}<span class=\"caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    {{ _self.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

<nav class=\"navbar navbar-inverse\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><img style=\"height:86px;\" src=\"{{ 'assets/images/logosicaprobado2.png'|theme }}\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t{{ nav.render_menu(links) }}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->", "/websicues/themes/sicues/partials/nav.htm", "");
    }
}
