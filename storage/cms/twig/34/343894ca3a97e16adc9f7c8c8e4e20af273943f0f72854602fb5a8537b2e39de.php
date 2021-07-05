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

/* /websicues/themes/jacoweb-agency/layouts/default.htm */
class __TwigTemplate_e43bdc021284c2ac8aa023b26abb46f7a45d5ac31806a90566befd0feb30aa40 extends \Twig\Template
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"jacoweb\">

    <title>Agency-Theme</title>
    
        ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "    
    <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/theme.min.css"]);
        // line 19
        echo "\" rel=\"stylesheet\">
    
\t<link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" class=\"index\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">AGENCY THEME</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#team\">Team</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        ";
        // line 83
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "    </header>
    
    <!-- Services Section -->
    <section id=\"services\">
\t    ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "    </section>
    
    <!-- Portfolio Section -->
    <section id=\"portfolio\" class=\"bg-light-gray\">
    \t";
        // line 93
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("portfolio"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 94
        echo "    </section>

    <!-- About Section -->
\t<section id=\"about\">
        ";
        // line 98
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 99
        echo "    </section>

    <!-- Team Section -->
    <section id=\"team\" class=\"bg-light-gray\">
        ";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("team"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 104
        echo "    </section>
    
    <aside class=\"clients\">
    \t";
        // line 107
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("clients"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 108
        echo "    </aside>


    <!-- Contact Section -->
    <section id=\"contact\">
        ";
        // line 113
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 114
        echo "    </section>

    <!-- Footer -->
    <footer>
        ";
        // line 118
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 119
        echo "    </footer>

    <!-- Portfolio Modals -->
    ";
        // line 122
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 123
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/javascript/jquery.js", 1 => "assets/javascript/app.js", 2 => "assets/javascript/classie.js", 3 => "assets/javascript/cbpAnimatedHeader.js", 4 => "assets/javascript/jqBootstrapValidation.js"]);
        // line 131
        echo "\"></script>

    ";
        // line 133
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 134
        echo "
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 134,  217 => 133,  213 => 131,  211 => 125,  207 => 123,  203 => 122,  198 => 119,  194 => 118,  188 => 114,  184 => 113,  177 => 108,  173 => 107,  168 => 104,  164 => 103,  158 => 99,  154 => 98,  148 => 94,  144 => 93,  138 => 89,  134 => 88,  128 => 84,  124 => 83,  58 => 19,  56 => 16,  53 => 15,  50 => 14,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"jacoweb\">

    <title>Agency-Theme</title>
    
        {% styles %}
    
    <link href=\"{{ [
\t\t'assets/css/bootstrap.min.css',
\t\t'assets/css/theme.min.css'
    ]|theme }}\" rel=\"stylesheet\">
    
\t<link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" class=\"index\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">AGENCY THEME</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#services\">Services</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">About</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#team\">Team</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        {% partial \"header\" %}
    </header>
    
    <!-- Services Section -->
    <section id=\"services\">
\t    {% partial \"services\" %}
    </section>
    
    <!-- Portfolio Section -->
    <section id=\"portfolio\" class=\"bg-light-gray\">
    \t{% partial \"portfolio\" %}
    </section>

    <!-- About Section -->
\t<section id=\"about\">
        {% partial \"about\" %}
    </section>

    <!-- Team Section -->
    <section id=\"team\" class=\"bg-light-gray\">
        {% partial \"team\" %}
    </section>
    
    <aside class=\"clients\">
    \t{% partial \"clients\" %}
    </aside>


    <!-- Contact Section -->
    <section id=\"contact\">
        {% partial \"contact\" %}
    </section>

    <!-- Footer -->
    <footer>
        {% partial \"footer\" %}
    </footer>

    <!-- Portfolio Modals -->
    {% partial \"modals\" %}

    <!-- Scripts -->
    <script src=\"{{ [
        'assets/javascript/jquery.js',
        'assets/javascript/app.js',
        'assets/javascript/classie.js',
        'assets/javascript/cbpAnimatedHeader.js',
        'assets/javascript/jqBootstrapValidation.js'
    ]|theme }}\"></script>

    {% scripts %}

    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

</body>

</html>", "/websicues/themes/jacoweb-agency/layouts/default.htm", "");
    }
}
