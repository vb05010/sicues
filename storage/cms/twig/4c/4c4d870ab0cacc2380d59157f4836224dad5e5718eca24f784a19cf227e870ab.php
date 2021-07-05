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

/* /websicues/themes/radiantweb-travu/layouts/contact.htm */
class __TwigTemplate_7f57b56001f95459a464a18776a30687efbbff143798ced16e62bad23d382869 extends \Twig\Template
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
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
    <header id=\"head\" class=\"secondary\"></header>

    <!-- container -->
    <div class=\"container\">
        <ol class=\"breadcrumb\">
            <li><a href=\"/\">Home</a></li>
            ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9) != "Home")) {
            // line 10
            echo "            <li class=\"active\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</li>
            ";
        }
        // line 12
        echo "        </ol>

        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-sm-9 maincontent\">
                ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 18
        echo "            </article>
            <!-- /Article -->
            
            <!-- Sidebar -->
            <aside class=\"col-sm-3 sidebar sidebar-right\">

                <div class=\"widget\">
                    <h4>Address</h4>
                    <address>
                        409 Claranna Ave, Dayton, OH 77030, USA
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        (713) 791-1414
                    </address>
                </div>

            </aside>
            <!-- /Sidebar -->
        </div>
    </div>  <!-- /container -->

    <section class=\"container-full top-space\">
        <div id=\"map\"></div>
    </section>

    <!-- Google Maps -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js\"></script> 
    <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/google-map.js");
        echo "\"></script>

";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/layouts/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 48,  95 => 46,  65 => 18,  63 => 17,  56 => 12,  50 => 10,  48 => 9,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}

    <header id=\"head\" class=\"secondary\"></header>

    <!-- container -->
    <div class=\"container\">
        <ol class=\"breadcrumb\">
            <li><a href=\"/\">Home</a></li>
            {% if this.page.title != 'Home' %}
            <li class=\"active\">{{this.page.title}}</li>
            {% endif %}
        </ol>

        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-sm-9 maincontent\">
                {% page %}
            </article>
            <!-- /Article -->
            
            <!-- Sidebar -->
            <aside class=\"col-sm-3 sidebar sidebar-right\">

                <div class=\"widget\">
                    <h4>Address</h4>
                    <address>
                        409 Claranna Ave, Dayton, OH 77030, USA
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        (713) 791-1414
                    </address>
                </div>

            </aside>
            <!-- /Sidebar -->
        </div>
    </div>  <!-- /container -->

    <section class=\"container-full top-space\">
        <div id=\"map\"></div>
    </section>

    <!-- Google Maps -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js\"></script> 
    <script src=\"{{ 'assets/js/google-map.js'|theme }}\"></script>

{% partial 'footer' %}", "/websicues/themes/radiantweb-travu/layouts/contact.htm", "");
    }
}
