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

/* /websicues/themes/kenshin-kenshinschool/layouts/default.htm */
class __TwigTemplate_35d5e8490b050ea498a72823f05dcc78c4eecc2affbc7e38c87446a909e0fd96 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/normalize.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/icomoon.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/prettyPhoto.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/transitions.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/color.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
        <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js");
        echo "\"></script>
        ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 27
        echo "    </head>
    <body>

        <!-- Header -->
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
        <!-- Content -->
            ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "
        <!-- Footer -->
            ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
        <!-- Scripts -->
        <script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery-library.js");
        echo "\"></script>
        <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapclustering/data.json");
        echo "\"></script>
        <script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en\"></script>
        <script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapclustering/markerclusterer.min.js");
        echo "\"></script>
        <script src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapclustering/infobox.js");
        echo "\"></script>
        <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mapclustering/map.js");
        echo "\"></script>
        <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
        <script src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/isotope.pkgd.js");
        echo "\"></script>
        <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/prettyPhoto.js");
        echo "\"></script>
        <script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/countdown.js");
        echo "\"></script>
        <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/collapse.js");
        echo "\"></script>
        <script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/moment.js");
        echo "\"></script>
        <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/gmap3.js");
        echo "\"></script>
        <script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/kenshin-kenshinschool/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 54,  193 => 53,  189 => 52,  185 => 51,  181 => 50,  177 => 49,  173 => 48,  169 => 47,  165 => 46,  161 => 45,  157 => 44,  152 => 42,  148 => 41,  144 => 40,  140 => 38,  136 => 37,  132 => 35,  130 => 34,  126 => 32,  122 => 31,  116 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  56 => 11,  49 => 7,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

        <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/normalize.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/icomoon.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/prettyPhoto.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.theme.default.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/transitions.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/color.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css'|theme }}\">
        <script src=\"{{ 'assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'|theme }}\"></script>
        {% styles %}
    </head>
    <body>

        <!-- Header -->
            {% partial 'header' %}

        <!-- Content -->
            {% page %}

        <!-- Footer -->
            {% partial 'footer' %}

        <!-- Scripts -->
        <script src=\"{{'assets/js/vendor/jquery-library.js'|theme }}\"></script>
        <script src=\"{{'assets/js/vendor/bootstrap.min.js'|theme }}\"></script>
        <script src=\"{{'assets/js/mapclustering/data.json'|theme }}\"></script>
        <script src=\"https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en\"></script>
        <script src=\"{{'assets/js/mapclustering/markerclusterer.min.js'|theme }}\"></script>
        <script src=\"{{'assets/js/mapclustering/infobox.js'|theme }}\"></script>
        <script src=\"{{'assets/js/mapclustering/map.js'|theme }}\"></script>
        <script src=\"{{'assets/js/owl.carousel.min.js'|theme }}\"></script>
        <script src=\"{{'assets/js/isotope.pkgd.js'|theme }}\"></script>
        <script src=\"{{'assets/js/prettyPhoto.js'|theme }}\"></script>
        <script src=\"{{'assets/js/countdown.js'|theme }}\"></script>
        <script src=\"{{'assets/js/collapse.js'|theme }}\"></script>
        <script src=\"{{'assets/js/moment.js'|theme }}\"></script>
        <script src=\"{{'assets/js/gmap3.js'|theme }}\"></script>
        <script src=\"{{'assets/js/main.js'|theme }}\"></script>

    </body>
</html>", "/websicues/themes/kenshin-kenshinschool/layouts/default.htm", "");
    }
}
