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

/* /websicues/themes/jtherczeg-grill/partials/slider.htm */
class __TwigTemplate_858e4d0aa5e464c0e380647dceaef4f7ddc3836c0a2f8aca586c1c526315dbcc extends \Twig\Template
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
        echo "<div class=\"flexslider\">
    <ul class=\"slides\">
        <li>
            <div class=\"slider-caption\">
                <h1>Delicious Meals</h1>
                <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                <br><br>eget tellus luctus fermentum.</p>
                <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">Shop Now</a>
            </div>
        <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide1.jpg");
        echo "\" alt=\"\" />
        </li>
            <li>
                <div class=\"slider-caption\">
                    <h1>Ice-cream Menus</h1>
                    <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam 
                    <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                    <a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">More Details</a>
                </div>
            <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide2.jpg");
        echo "\" alt=\"\" />
            </li>
            <li>
                <div class=\"slider-caption\">
                    <h1>Healthy Drinks</h1>
                    <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet 
                    <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                    <a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">Get Ready</a>
                </div>
            <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slide3.jpg");
        echo "\" alt=\"\" />
            </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  74 => 26,  64 => 19,  59 => 17,  49 => 10,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flexslider\">
    <ul class=\"slides\">
        <li>
            <div class=\"slider-caption\">
                <h1>Delicious Meals</h1>
                <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                <br><br>eget tellus luctus fermentum.</p>
                <a href=\"{{ 'samples/single-post'|page }}\">Shop Now</a>
            </div>
        <img src=\"{{ 'assets/images/slide1.jpg'|theme }}\" alt=\"\" />
        </li>
            <li>
                <div class=\"slider-caption\">
                    <h1>Ice-cream Menus</h1>
                    <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam 
                    <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                    <a href=\"{{ 'samples/single-post'|page }}\">More Details</a>
                </div>
            <img src=\"{{ 'assets/images/slide2.jpg'|theme }}\" alt=\"\" />
            </li>
            <li>
                <div class=\"slider-caption\">
                    <h1>Healthy Drinks</h1>
                    <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet 
                    <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                    <a href=\"{{ 'samples/single-post'|page }}\">Get Ready</a>
                </div>
            <img src=\"{{ 'assets/images/slide3.jpg'|theme }}\" alt=\"\" />
            </li>
        </ul>
    </div>", "/websicues/themes/jtherczeg-grill/partials/slider.htm", "");
    }
}
