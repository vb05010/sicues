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

/* /websicues/themes/jtherczeg-grill/partials/top.htm */
class __TwigTemplate_73371572b1cedd57bb0dc6b7bb718d66ddbdfc6ce3409282d576fe56d72298d4 extends \Twig\Template
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
        echo "<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
                    <a href=\"#\">My account</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <i class=\"fa fa-shopping-cart\"></i>
                    (<a href=\"#\">5 items</a>) in your cart (<a href=\"#\">\$45.80</a>)
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"top-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"home-account\">
                    <a href=\"{{ 'home'|page }}\">Home</a>
                    <a href=\"#\">My account</a>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"cart-info\">
                    <i class=\"fa fa-shopping-cart\"></i>
                    (<a href=\"#\">5 items</a>) in your cart (<a href=\"#\">\$45.80</a>)
                </div>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/jtherczeg-grill/partials/top.htm", "");
    }
}
