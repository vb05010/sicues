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

/* /websicues/themes/al3xtig3r-bootstart/layouts/default.htm */
class __TwigTemplate_22f73b32fc79f7a437ba09649aaed7bcb3a73f6428a4f40629d92ba35a516e8a extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["activeLocale"] ?? null), "html", null, true);
        echo "\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- INFO -->
    ";
        // line 9
        $context["title"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9)));
        // line 10
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "prefix_suffix_switch", [], "any", false, false, false, 10) == "prefix")) {
            // line 11
            echo "        ";
            $context["title"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "prefix_suffix_string", [], "any", false, false, false, 11) . " ") . ($context["title"] ?? null));
            // line 12
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "prefix_suffix_switch", [], "any", false, false, false, 12) == "suffix")) {
            // line 13
            echo "        ";
            $context["title"] = ((($context["title"] ?? null) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "prefix_suffix_string", [], "any", false, false, false, 13));
            // line 14
            echo "    ";
        }
        // line 15
        echo "    <title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <meta name=\"title\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" />
    <meta name=\"description\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "description", [], "any", false, false, false, 17)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "description", [], "any", false, false, false, 17)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "description", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" />
    <link rel=\"icon\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/theme/icon.png");
        echo "\" />
    <meta name=\"author\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "author", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "author", [], "any", false, false, false, 19)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 19), "author", [], "any", false, false, false, 19))), "html", null, true);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "keywords", [], "any", false, false, false, 20)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "keywords", [], "any", false, false, false, 20)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 20), "keywords", [], "any", false, false, false, 20))), "html", null, true);
        echo "\" />
    <meta name=\"robots\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "robots", [], "any", false, false, false, 21)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "robots", [], "any", false, false, false, 21)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "robots", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" />
    ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "canonical", [], "any", false, false, false, 22) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "default_canonical", [], "any", false, false, false, 22))) {
            // line 23
            echo "    <link rel=\"canonical\" href=\"";
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "canonical", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "canonical", [], "any", false, false, false, 23), "html", null, true))) : (print ($this->extensions['Cms\Twig\Extension']->pageFilter(""))));
            echo "\">
    ";
        }
        // line 25
        echo "
    <!-- SEO -->
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 27), "open_graph", [], "any", false, false, false, 27)) {
            // line 28
            echo "    <meta name=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 28), "og_title", [], "any", false, false, false, 28), "html", null, true);
            echo "\"/>
    <meta name=\"og:description\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 29), "og_description", [], "any", false, false, false, 29), "html", null, true);
            echo "\"/>
    <meta name=\"og:type\" content=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 30), "og_type", [], "any", false, false, false, 30), "html", null, true);
            echo "\"/>
    <meta name=\"og:url\" content=\"";
            // line 31
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "\"/>
    <meta name=\"og:site_name\" content=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 32), "og_site_name", [], "any", false, false, false, 32), "html", null, true);
            echo "\"/>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 35), "fb_app_id", [], "any", false, false, false, 35)) {
            // line 36
            echo "    <meta name=\"fb:page_id\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 36), "fb_app_id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" />
    ";
        }
        // line 38
        echo "
    <!-- STYLES -->
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 42), "font_awesome", [], "any", false, false, false, 42)) {
            // line 43
            echo "    <!-- Font Awesome -->
        ";
            // line 44
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 44), "font_awesome_link", [], "any", false, false, false, 44) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 44), "font_awesome_link", [], "any", false, false, false, 44) != ""))) {
                // line 45
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 45), "font_awesome_link", [], "any", false, false, false, 45), "html", null, true);
                echo "\" rel=\"stylesheet\" />
        ";
            } else {
                // line 47
                echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css\" integrity=\"sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=\" crossorigin=\"anonymous\" />
        ";
            }
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 50), "animate", [], "any", false, false, false, 50)) {
            // line 51
            echo "    <!-- Animate CSS -->
        ";
            // line 52
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 52), "animate_link", [], "any", false, false, false, 52) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 52), "animate_link", [], "any", false, false, false, 52) != ""))) {
                // line 53
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 53), "animate_link", [], "any", false, false, false, 53), "html", null, true);
                echo "\" rel=\"stylesheet\" />
        ";
            } else {
                // line 55
                echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css\" integrity=\"sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=\" crossorigin=\"anonymous\" />
        ";
            }
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 58), "slick", [], "any", false, false, false, 58)) {
            // line 59
            echo "    <!-- slick Carousel -->
        ";
            // line 60
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 60), "slick_css_link", [], "any", false, false, false, 60) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 60), "slick_css_link", [], "any", false, false, false, 60) != ""))) {
                // line 61
                echo "    <link href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 61), "slick_css_link", [], "any", false, false, false, 61), "html", null, true);
                echo "\" rel=\"stylesheet\" />
        ";
            } else {
                // line 63
                echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
        ";
            }
            // line 65
            echo "    ";
        }
        // line 66
        echo "    <!-- Theme SASS -->
    <link href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/scss/theme.scss"]);
        echo "\" rel=\"stylesheet\" />
    <!-- Your styles -->
    <link href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/scss/style.scss"]);
        echo "\" rel=\"stylesheet\" />

    ";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 73
        echo "</head>
<body>
    <header id=\"main-header\">
        ";
        // line 76
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("theme/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 77
        echo "    </header>

    <!-- PAGE CONTENT -->
    ";
        // line 80
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 81
        echo "
    <footer id=\"main-footer\">
        ";
        // line 83
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("theme/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "    </footer>

    <!-- BODY SCRIPTS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 92), "slick", [], "any", false, false, false, 92)) {
            // line 93
            echo "    <!-- slick Carousel -->
        ";
            // line 94
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 94), "slick_js_link", [], "any", false, false, false, 94) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 94), "slick_js_link", [], "any", false, false, false, 94) != ""))) {
                // line 95
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 95), "slick_js_link", [], "any", false, false, false, 95), "html", null, true);
                echo "\"></script>
        ";
            } else {
                // line 97
                echo "    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
        ";
            }
            // line 99
            echo "    ";
        }
        // line 100
        echo "    <!-- Your scripts -->
    <script src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scripts.js");
        echo "\"></script>
    ";
        // line 102
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
        // line 103
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 104
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/al3xtig3r-bootstart/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 104,  305 => 103,  290 => 102,  286 => 101,  283 => 100,  280 => 99,  276 => 97,  270 => 95,  268 => 94,  265 => 93,  263 => 92,  253 => 84,  249 => 83,  245 => 81,  243 => 80,  238 => 77,  234 => 76,  229 => 73,  226 => 72,  221 => 70,  217 => 69,  212 => 67,  209 => 66,  206 => 65,  202 => 63,  196 => 61,  194 => 60,  191 => 59,  188 => 58,  185 => 57,  181 => 55,  175 => 53,  173 => 52,  170 => 51,  167 => 50,  164 => 49,  160 => 47,  154 => 45,  152 => 44,  149 => 43,  147 => 42,  141 => 38,  135 => 36,  133 => 35,  130 => 34,  125 => 32,  121 => 31,  117 => 30,  113 => 29,  108 => 28,  106 => 27,  102 => 25,  96 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{{ activeLocale }}\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- INFO -->
    {% set title = (this.page.title ? this.page.title : this.theme.title) %}
    {% if this.theme.prefix_suffix_switch == 'prefix' %}
        {% set title = this.theme.prefix_suffix_string ~ ' ' ~ title %}
    {% elseif this.theme.prefix_suffix_switch == 'suffix' %}
        {% set title = title ~ ' ' ~ this.theme.prefix_suffix_string %}
    {% endif %}
    <title>{{ title }}</title>
    <meta name=\"title\" content=\"{{ title }}\" />
    <meta name=\"description\" content=\"{{ this.page.description ? this.page.description : this.theme.description }}\" />
    <link rel=\"icon\" href=\"{{ 'assets/images/theme/icon.png'|theme }}\" />
    <meta name=\"author\" content=\"{{ this.page.author ? this.page.author : this.theme.author }}\" />
    <meta name=\"keywords\" content=\"{{ this.page.keywords ? this.page.keywords : this.theme.keywords }}\" />
    <meta name=\"robots\" content=\"{{ this.page.robots ? this.page.robots : this.theme.robots }}\" />
    {% if this.page.canonical or this.theme.default_canonical %}
    <link rel=\"canonical\" href=\"{{ this.page.canonical ? this.page.canonical : ''|page }}\">
    {% endif %}

    <!-- SEO -->
    {% if this.theme.open_graph %}
    <meta name=\"og:title\" content=\"{{ this.theme.og_title }}\"/>
    <meta name=\"og:description\" content=\"{{ this.theme.og_description }}\"/>
    <meta name=\"og:type\" content=\"{{ this.theme.og_type }}\"/>
    <meta name=\"og:url\" content=\"{{ ''|page }}\"/>
    <meta name=\"og:site_name\" content=\"{{ this.theme.og_site_name }}\"/>
    {% endif %}

    {% if this.theme.fb_app_id %}
    <meta name=\"fb:page_id\" content=\"{{ this.theme.fb_app_id }}\" />
    {% endif %}

    <!-- STYLES -->
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    {% if this.theme.font_awesome %}
    <!-- Font Awesome -->
        {% if this.theme.font_awesome_link != null and this.theme.font_awesome_link != '' %}
    <link href=\"{{ this.theme.font_awesome_link }}\" rel=\"stylesheet\" />
        {% else %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css\" integrity=\"sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=\" crossorigin=\"anonymous\" />
        {% endif %}
    {% endif %}
    {% if this.theme.animate %}
    <!-- Animate CSS -->
        {% if this.theme.animate_link != null and this.theme.animate_link != '' %}
    <link href=\"{{ this.theme.animate_link }}\" rel=\"stylesheet\" />
        {% else %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css\" integrity=\"sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=\" crossorigin=\"anonymous\" />
        {% endif %}
    {% endif %}
    {% if this.theme.slick %}
    <!-- slick Carousel -->
        {% if this.theme.slick_css_link != null and this.theme.slick_css_link != '' %}
    <link href=\"{{ this.theme.slick_css_link }}\" rel=\"stylesheet\" />
        {% else %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
        {% endif %}
    {% endif %}
    <!-- Theme SASS -->
    <link href=\"{{ ['assets/scss/theme.scss']|theme }}\" rel=\"stylesheet\" />
    <!-- Your styles -->
    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\" />
    <link href=\"{{ ['assets/scss/style.scss']|theme }}\" rel=\"stylesheet\" />

    {% styles %}
</head>
<body>
    <header id=\"main-header\">
        {% partial 'theme/header' %}
    </header>

    <!-- PAGE CONTENT -->
    {% page %}

    <footer id=\"main-footer\">
        {% partial 'theme/footer' %}
    </footer>

    <!-- BODY SCRIPTS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    {% if this.theme.slick %}
    <!-- slick Carousel -->
        {% if this.theme.slick_js_link != null and this.theme.slick_js_link != '' %}
    <script src=\"{{ this.theme.slick_js_link }}\"></script>
        {% else %}
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
        {% endif %}
    {% endif %}
    <!-- Your scripts -->
    <script src=\"{{ 'assets/js/scripts.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}
</body>
</html>", "/websicues/themes/al3xtig3r-bootstart/layouts/default.htm", "");
    }
}
