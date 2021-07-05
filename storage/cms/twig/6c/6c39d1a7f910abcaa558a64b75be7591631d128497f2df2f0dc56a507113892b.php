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

/* /websicues/themes/jtherczeg-grill/partials/nav.htm */
class __TwigTemplate_fa972a82ec89bfb5bc9933ab9f3a20e6c67e01f0464c5806f85c8e20ed2dd5a9 extends \Twig\Template
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
        $context["links"] = ["home" => [0 => "home", 1 => "Home"], "about" => [0 => "samples/about-us", 1 => "About Us"], "products" => [0 => "samples/products", 1 => "Products"], "contact" => [0 => "samples/contact-us", 1 => "Contact"]];
        // line 10
        echo "
";
        // line 31
        echo "
";
        // line 32
        $context["nav"] = $this;
        // line 33
        echo "
<div id=\"main-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"logo\">
                    <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" title=\"Grill Template\" alt=\"Grill Website Template\" ></a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"main-menu\">
                    <ul>
                        ";
        // line 45
        echo $context["nav"]->macro_render_menu(($context["links"] ?? null));
        echo "
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"search-box\">  
                    <form role=\"form\" name=\"search_form\" method=\"get\" class=\"search_form\">
                        <input id=\"search\" type=\"text\" />
                        <input type=\"submit\" id=\"search-button\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    // line 11
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 13
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 13)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 15
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 15)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 15)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 15)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 16)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 17
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 17)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 19
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 19)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 20)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 21
                echo "            </a>
            ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->getTemplateName(), "render_menu", [0 => twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 25)], "method", false, false, false, 25), "html", null, true);
                    echo "
                </ul>
            ";
                }
                // line 28
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
        return "/websicues/themes/jtherczeg-grill/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 28,  139 => 25,  135 => 23,  133 => 22,  130 => 21,  126 => 20,  122 => 19,  116 => 17,  112 => 16,  108 => 15,  100 => 13,  95 => 12,  83 => 11,  64 => 45,  53 => 39,  45 => 33,  43 => 32,  40 => 31,  37 => 10,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
\t    'home':      ['home', 'Home'],
\t\t'about':     ['samples/about-us', 'About Us'],
\t\t'products':  ['samples/products', 'Products'],
        'contact':   ['samples/contact-us', 'Contact'],
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

<div id=\"main-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"logo\">
                    <a href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" title=\"Grill Template\" alt=\"Grill Website Template\" ></a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"main-menu\">
                    <ul>
                        {{ nav.render_menu(links) }}
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"search-box\">  
                    <form role=\"form\" name=\"search_form\" method=\"get\" class=\"search_form\">
                        <input id=\"search\" type=\"text\" />
                        <input type=\"submit\" id=\"search-button\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/jtherczeg-grill/partials/nav.htm", "");
    }
}
