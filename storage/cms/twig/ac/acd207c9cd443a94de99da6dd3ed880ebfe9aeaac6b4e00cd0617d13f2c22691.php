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

/* /websicues/themes/sicues/layouts/default.htm */
class __TwigTemplate_82162a7cb33dde77ffd2e7b5babb4e8aa386087a4656d30d4236c6e03bfbb7d8 extends \Twig\Template
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_keywords", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "meta_author", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "site_name", [], "any", false, false, false, 10), "html", null, true);
        echo "</title> 
\t
\t<!-- core CSS -->
\t";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 14
        echo "\t<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/prettyPhoto.css", 4 => "assets/css/main.css", 5 => "assets/css/responsive.css", 6 => "assets/css/dataTables.bootstrap.min.css", 7 => "assets/css/highcharts.css", 8 => "assets/css/jquery.dataTables.css"]);
        // line 25
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head><!--/head-->

<body class=\"homepage\">

";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-social"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
<header id=\"header\">
\t\t";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("top"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "</header><!--/header-->

    ";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 44
        echo "
<section id=\"bottom\">
\t";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue\">
\t";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "</footer> <!--/#footer-->

<!--scripts-->

<script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-1.12.4.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.dataTables.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/dataTables.bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/pdfmodal.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/respond.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/search.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.hideseek.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.hideseek.js");
        echo "\"></script>



";
        // line 72
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 73
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo "             
";
        // line 74
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("piwik"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo " 

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 74,  217 => 73,  202 => 72,  195 => 68,  191 => 67,  187 => 66,  183 => 65,  179 => 64,  175 => 63,  171 => 62,  167 => 61,  163 => 60,  159 => 59,  155 => 58,  151 => 57,  147 => 56,  143 => 55,  137 => 51,  133 => 50,  128 => 47,  124 => 46,  120 => 44,  118 => 43,  114 => 41,  109 => 40,  105 => 39,  101 => 37,  97 => 36,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  69 => 25,  66 => 14,  63 => 13,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
\t<meta name=\"keywords\" content=\"{{ this.page.meta_keywords }}\">
    <meta name=\"author\" content=\"{{ this.page.meta_author }}\">
    <title>{{ this.page.title }} | {{ this.theme.site_name }}</title> 
\t
\t<!-- core CSS -->
\t{% styles %}
\t<link href=\"{{ ['assets/css/bootstrap.min.css',
\t\t'assets/css/font-awesome.min.css',
\t\t'assets/css/animate.min.css',
\t\t'assets/css/prettyPhoto.css',
\t\t'assets/css/main.css',
\t\t'assets/css/responsive.css',
\t\t'assets/css/dataTables.bootstrap.min.css',
\t\t'assets/css/highcharts.css',
\t\t'assets/css/jquery.dataTables.css'

\t\t
\t]|theme }}\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/ico/favicon.ico'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ 'assets/images/ico/apple-touch-icon-144-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ 'assets/images/ico/apple-touch-icon-114-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ 'assets/images/ico/apple-touch-icon-72-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'assets/images/ico/apple-touch-icon-57-precomposed.png'|theme }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head><!--/head-->

<body class=\"homepage\">

{% partial \"menu-social\" %}

<header id=\"header\">
\t\t{% partial \"top\" %}
        {% partial \"nav\" %}
</header><!--/header-->

    {% page %}

<section id=\"bottom\">
\t{% partial \"bottom\" %}
</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue\">
\t{% partial \"footer\" %}
</footer> <!--/#footer-->

<!--scripts-->

<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery-1.12.4.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.dataTables.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/dataTables.bootstrap.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/pdfmodal.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/html5shiv.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/respond.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/search.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.hideseek.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.hideseek.js'|theme }}\"></script>



{% framework extras %}
{% scripts %}             
{% component 'piwik' %} 

</body>
</html>", "/websicues/themes/sicues/layouts/default.htm", "");
    }
}
