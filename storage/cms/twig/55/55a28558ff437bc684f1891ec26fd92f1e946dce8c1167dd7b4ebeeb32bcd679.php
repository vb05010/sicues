<?php

/* /websicues/themes/dannyvantol-blight/layouts/default.htm */
class __TwigTemplate_e4b45166ce994f2226008fd4e2756de777395b12b54c197ada00907d128d4f4d extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">

        <meta name=\"author\" content=\"Danny van Tol\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        ";
        // line 15
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "favicon", array()))) {
            // line 16
            echo "            <link rel=\"icon\" type=\"image/png\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
            echo "\">
        ";
        } else {
            // line 18
            echo "            <link rel=\"icon\" href=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "favicon", array()));
            echo "\">
        ";
        }
        // line 20
        echo "
        <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/css/vendor.min.css", 1 => "assets/less/theme.less"));
        echo "\" rel=\"stylesheet\">

        ";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 24
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery.js", 1 => "assets/vendor/bootstrap.js"));
        echo "\"></script>

        ";
        // line 45
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 46
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 47
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/dannyvantol-blight/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  121 => 46,  114 => 45,  109 => 43,  104 => 40,  100 => 39,  94 => 35,  92 => 34,  86 => 30,  82 => 29,  75 => 24,  72 => 23,  67 => 21,  64 => 20,  58 => 18,  52 => 16,  50 => 15,  42 => 10,  38 => 9,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{{ this.theme.site_name }} - {{ this.page.title }}</title>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">

        <meta name=\"author\" content=\"Danny van Tol\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        {% if this.theme.favicon is empty %}
            <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        {% else %}
            <link rel=\"icon\" href=\"{{ this.theme.favicon|media }}\">
        {% endif%}

        <link href=\"{{ ['assets/css/vendor.min.css', 'assets/less/theme.less']|theme }}\" rel=\"stylesheet\">

        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ ['assets/vendor/jquery.js', 'assets/vendor/bootstrap.js']|theme }}\"></script>

        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/websicues/themes/dannyvantol-blight/layouts/default.htm", "");
    }
}
