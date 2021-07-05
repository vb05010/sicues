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

/* /websicues/themes/jtherczeg-grill/partials/services.htm */
class __TwigTemplate_14d020f96071535faa9c51abf7f4ff3dd7b42cffe31a7d1417144dccb82a72f1 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Free Website Templates</h2>
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"service-item\">
                <div class=\"icon\">
                    <i class=\"fa fa-pencil\"></i>
                </div>
                    <h4>Make an order</h4>
                    <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
                </div>
            </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"service-item\">
                <div class=\"icon\">
                    <i class=\"fa fa-bullhorn\"></i>
                </div>
                <h4>Promotions</h4>
                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"service-item\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-bell\"></i>
        </div>
            <h4>Ready to Serve</h4>
            <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
        </div>
    </div>
    <div class=\"col-md-3 col-sm-6\">
        <div class=\"service-item\">
            <div class=\"icon\">
                <i class=\"fa fa-heart\"></i>
            </div>
                <h4>Satisfaction</h4>
                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/services.htm";
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
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Free Website Templates</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"service-item\">
                <div class=\"icon\">
                    <i class=\"fa fa-pencil\"></i>
                </div>
                    <h4>Make an order</h4>
                    <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
                </div>
            </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"service-item\">
                <div class=\"icon\">
                    <i class=\"fa fa-bullhorn\"></i>
                </div>
                <h4>Promotions</h4>
                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"service-item\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-bell\"></i>
        </div>
            <h4>Ready to Serve</h4>
            <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
        </div>
    </div>
    <div class=\"col-md-3 col-sm-6\">
        <div class=\"service-item\">
            <div class=\"icon\">
                <i class=\"fa fa-heart\"></i>
            </div>
                <h4>Satisfaction</h4>
                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/jtherczeg-grill/partials/services.htm", "");
    }
}
