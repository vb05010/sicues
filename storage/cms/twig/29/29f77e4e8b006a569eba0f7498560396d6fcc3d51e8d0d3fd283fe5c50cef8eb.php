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

/* /websicues/themes/vojtasvoboda-vega/layouts/default.htm */
class __TwigTemplate_f192940f8af82051ddc40f37f635269aefdd8fc4b00a71c7b99f5e2de25a237e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 2), "site_locale", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    <title>";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo " &#124; ";
        }
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "site_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</title>

    <link rel='stylesheet' href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate/animate.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato%3A400%2C400i%2C700%2C700i%2C900%2C900i&#038;ver=4.6.1' type='text/css' media='all' />
    <link rel='stylesheet' href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-social.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel='stylesheet' href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/css/color-schemes/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 16), "color", [], "any", false, false, true, 16), 16, $this->source)) . ".css"));
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jetpack/jetpack.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\" type=\"text/css\" media=\"all\" />
    <style type=\"text/css\">
        .qtranxs_flag_en {
            background-image: url(";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/gb.png");
        echo "); background-repeat: no-repeat;
        }
        .qtranxs_flag_de {
            background-image: url(";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/de.png");
        echo "); background-repeat: no-repeat;
        }
    </style>
    ";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 28
        echo "
    <link hreflang=\"en\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["baseUrl"] ?? null), 29, $this->source), "html", null, true);
        echo "/en/\" rel=\"alternate\" />
    <link hreflang=\"de\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["baseUrl"] ?? null), 30, $this->source), "html", null, true);
        echo "/de/\" rel=\"alternate\" />
    <link hreflang=\"x-default\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["baseUrl"] ?? null), 31, $this->source), "html", null, true);
        echo "\" rel=\"alternate\" />

    <link rel=\"icon\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicons/cropped-vega-favicon-150x150.png");
        echo "\" sizes=\"32x32\" />
    <link rel=\"icon\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicons/cropped-vega-favicon-300x300.png");
        echo "\" sizes=\"192x192\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicons/cropped-vega-favicon-180x180.png");
        echo "\" />
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicons/cropped-vega-favicon-300x300.png");
        echo "\" />

</head>
<body class=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "id", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo " page page-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "id", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo " ";
        $context['__placeholder_bodyclass_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('bodyclass', $context['__placeholder_bodyclass_default_contents']);
        unset($context['__placeholder_bodyclass_default_contents']);        echo "\">

";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "
<div class=\"section page-content bg-white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"page type-page status-publish hentry\">
                    <h3 class=\"page-title\">";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "</h3>
                    <div class=\"page-content\">
                        ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 52
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/copyright"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/elevator"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "
<script type=\"text/javascript\" src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-migrate.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.form.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.blockUI.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.smartmenus.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.smartmenus.bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vega-wp-anim.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/parallax.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vega-wp.js");
        echo "\"></script>
<script type=\"text/javascript\">
/* <![CDATA[ */
var jpfbembed = {\"appid\":\"249643311490\", \"locale\":\"en_US\"};
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jetpack/facebook-embed.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wp-embed.min.js");
        echo "\"></script>
";
        // line 81
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 82
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 83
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 83,  268 => 82,  257 => 81,  253 => 80,  249 => 79,  240 => 73,  236 => 72,  232 => 71,  228 => 70,  224 => 69,  220 => 68,  216 => 67,  212 => 66,  208 => 65,  204 => 64,  200 => 63,  197 => 62,  193 => 61,  189 => 60,  185 => 59,  176 => 52,  174 => 51,  169 => 49,  161 => 43,  157 => 42,  153 => 41,  144 => 39,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  121 => 31,  117 => 30,  113 => 29,  110 => 28,  107 => 27,  101 => 24,  95 => 21,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  60 => 10,  51 => 8,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "styles" => 27, "placeholder" => 39, "partial" => 41, "page" => 51, "framework" => 81, "scripts" => 82);
        static $filters = array("escape" => 2, "theme" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'styles', 'placeholder', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
