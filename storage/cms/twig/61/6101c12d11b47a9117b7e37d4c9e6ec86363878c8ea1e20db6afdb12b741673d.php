<?php

/* /websicues/themes/rainlab-relax/partials/scripts.htm */
class __TwigTemplate_fccb3b3b9a70860384ed45af89917adaec414221380e3f5fe919859f2e71108b extends Twig_Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/nivo/jquery.nivo.slider.js", 2 => "assets/javascript/app.js"));
        // line 5
        echo "\"></script>
";
        // line 6
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/partials/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  29 => 6,  26 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ [
    'assets/javascript/jquery.js',
    'assets/vendor/nivo/jquery.nivo.slider.js',
    'assets/javascript/app.js'
]|theme }}\"></script>
{% framework extras %}
{% scripts %}", "/websicues/themes/rainlab-relax/partials/scripts.htm", "");
    }
}
