<?php

/* /websicues/themes/rainlab-relax/partials/header.htm */
class __TwigTemplate_538e302af61229469136fa040f1ada4d73c83d67fa0a826f83808a5db6d2313f extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"logo\">
                <a href=\"";
        // line 5
        echo RainLab\Pages\Classes\Page::url("index");
        echo "\">
                    <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"House of Chairs\" />
                </a>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"contact-phone\">
                <label>Call us now</label>
                <span class=\"phone-number\">KL5-3226</span>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"logo\">
                <a href=\"{{ 'index'|staticPage }}\">
                    <img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"House of Chairs\" />
                </a>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"contact-phone\">
                <label>Call us now</label>
                <span class=\"phone-number\">KL5-3226</span>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/rainlab-relax/partials/header.htm", "");
    }
}
