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

/* /websicues/themes/radiantweb-travu/partials/header.htm */
class __TwigTemplate_7e9a0220c16d0a0b8d2ec4ed05c1a2b8aa02fd1a0bdbffb2dac2de5197af004b extends \Twig\Template
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
    <meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_keywords", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"author\"      content=\"radiantweb.com\">
    
    <title>Travu - Free bootstrap theme for October CMS</title>

    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("favicon.ico");
        echo "\">
    
    <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">

    <!-- Custom styles for our template -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-theme.css");
        echo "\" media=\"screen\" >
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    
    ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 25
        echo "    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"home\">
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <!-- Button for smallest screens -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav pull-right\">
                    ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "                    <!-- Sample Dropdown nav --

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"sidebar-left.html\">Left Sidebar</a></li>
                            <li class=\"active\"><a href=\"sidebar-right.html\">Right Sidebar</a></li>
                        </ul>
                    </li>

                    -- end Sample Dropdown nav -->
                    <li ";
        // line 56
        if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56)) == "contact")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact");
        echo "\">Contact</a></li>
                    <li ";
        // line 57
        if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 57), "title", [], "any", false, false, false, 57)) == "download")) {
            echo "class=\"active\"";
        }
        echo "><a class=\"btn\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("download");
        echo "\">DOWNLOAD NOW</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 57,  128 => 56,  115 => 45,  111 => 44,  104 => 40,  87 => 25,  84 => 24,  78 => 21,  74 => 20,  68 => 17,  64 => 16,  58 => 13,  50 => 8,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"title\" content=\"{{ this.page.title}}\">
    <meta name=\"description\" content=\"{{ this.page.meta_description}}\">
    <meta name=\"keywords\" content=\"{{ this.page.meta_keywords}}\">
    <meta name=\"author\"      content=\"radiantweb.com\">
    
    <title>Travu - Free bootstrap theme for October CMS</title>

    <link rel=\"shortcut icon\" href=\"{{ 'favicon.ico'|theme }}\">
    
    <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\">

    <!-- Custom styles for our template -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap-theme.css'|theme }}\" media=\"screen\" >
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    
    {% styles %}
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"home\">
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <!-- Button for smallest screens -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav pull-right\">
                    {% partial 'nav' %}
                    <!-- Sample Dropdown nav --

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"sidebar-left.html\">Left Sidebar</a></li>
                            <li class=\"active\"><a href=\"sidebar-right.html\">Right Sidebar</a></li>
                        </ul>
                    </li>

                    -- end Sample Dropdown nav -->
                    <li {% if this.page.title|lower == 'contact' %}class=\"active\"{% endif %}><a href=\"{{ 'samples/contact'|page }}\">Contact</a></li>
                    <li {% if this.page.title|lower == 'download' %}class=\"active\"{% endif %}><a class=\"btn\" href=\"{{ 'download'|page }}\">DOWNLOAD NOW</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->", "/websicues/themes/radiantweb-travu/partials/header.htm", "");
    }
}
