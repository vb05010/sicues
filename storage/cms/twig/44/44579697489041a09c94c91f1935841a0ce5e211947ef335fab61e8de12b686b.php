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

/* /websicues/themes/jtherczeg-grill/layouts/products.htm */
class __TwigTemplate_006258b0f8e8c66915c318d7115fe0f75a41b9bb1cde75992094611794641b9a extends \Twig\Template
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
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<header>
    ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("top"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</header>

";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 16
        echo "
<footer>
    <div class=\"container\">
       ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("socials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "             
       ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "             
       ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "             
    </div>
</footer>

<!-- Scripts -->
<script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-1.11.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.gmap3.min.js");
        echo "\"></script>
<script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugins.js");
        echo "\"></script>
<script src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 31
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
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 33
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/layouts/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  129 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  84 => 21,  78 => 20,  72 => 19,  67 => 16,  65 => 15,  61 => 13,  56 => 12,  52 => 11,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
{% partial \"meta\" %}

<body>
<!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<header>
    {% partial \"top\" %}
    {% partial \"nav\" %}
</header>

{% page %}

<footer>
    <div class=\"container\">
       {% partial \"socials\" %}             
       {% partial \"bottom\" %}             
       {% partial \"footer\" %}             
    </div>
</footer>

<!-- Scripts -->
<script src=\"{{ 'assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/jquery-1.11.0.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/jquery.gmap3.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/plugins.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "/websicues/themes/jtherczeg-grill/layouts/products.htm", "");
    }
}
