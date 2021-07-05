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

/* /websicues/themes/radiantweb-travu/partials/nav.htm */
class __TwigTemplate_60d5b6d531b40acc1776f5b1785909e012bf97cd599f1bed9f841bd5ce3dd2b0 extends \Twig\Template
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
        $context["links"] = ["pages" => ["name" => "Pages", "sublinks" => ["signin" => [0 => "samples/signin", 1 => "Sign In"], "error" => [0 => "error", 1 => "Error Page"], "404" => [0 => "404", 1 => "404 Page"]]], "about" => [0 => "samples/about", 1 => "About"], "blog" => [0 => "blog/blog", 1 => "Blog"]];
        // line 17
        echo "
";
        // line 38
        echo "
";
        // line 39
        $context["nav"] = $this;
        // line 40
        echo "

";
        // line 42
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
    }

    // line 18
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 20
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 20)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 22
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 22)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 22)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 22)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 23)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 24
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 24)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 26
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 26)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 26)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 27)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 28
                echo "            </a>
            ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->getTemplateName(), "render_menu", [0 => twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
                    echo "
                </ul>
            ";
                }
                // line 35
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
        return "/websicues/themes/radiantweb-travu/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  109 => 32,  105 => 30,  103 => 29,  100 => 28,  96 => 27,  92 => 26,  86 => 24,  82 => 23,  78 => 22,  70 => 20,  65 => 19,  53 => 18,  49 => 42,  45 => 40,  43 => 39,  40 => 38,  37 => 17,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
        'pages': {
            name: 'Pages',
            sublinks: {
                'signin':        ['samples/signin', 'Sign In'],
                'error':         ['error', 'Error Page'],
                '404':           ['404', '404 Page'],
            },
        },
        'about': ['samples/about', 'About'],
        'blog': ['blog/blog', 'Blog'],

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


{{ nav.render_menu(links) }}", "/websicues/themes/radiantweb-travu/partials/nav.htm", "");
    }
}
