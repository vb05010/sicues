<?php

/* /websicues/themes/sicues/partials/nav.htm */
class __TwigTemplate_5d80189cd1409420bc0e8ce27f63e97cc8aa3a7d8e02a94417618e30f73adcb6 extends Twig_Template
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
        $context["links"] = array("home" => array(0 => "home", 1 => "INICIO"), "centros-institutos" => array(0 => "samples/centros-institutos", 1 => "CENTROS E INSTITUTOS"), "directorio-investigadores" => array(0 => "samples/directorio-investigadores", 1 => "INVESTIGADORES (AS)"), "memoria-labores" => array(0 => "samples/memoria-labores", 1 => "ARCHIVO"), "contact" => array(0 => "samples/contact.htm", 1 => "CONTÁCTENOS"));
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
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
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
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 16
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", array())) : ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["link"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null))))));
                echo "\"
                ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 18
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 20
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", array())) : ((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["link"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 22
                echo "            </a>
            ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())) {
                    // line 24
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->getTemplateName(), "render_menu", array(0 => twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", array())), "method"), "html", null, true);
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

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  125 => 29,  119 => 26,  115 => 24,  113 => 23,  110 => 22,  106 => 21,  102 => 20,  96 => 18,  92 => 17,  88 => 16,  80 => 14,  75 => 13,  63 => 12,  54 => 48,  45 => 44,  33 => 34,  31 => 33,  28 => 32,  25 => 11,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
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
