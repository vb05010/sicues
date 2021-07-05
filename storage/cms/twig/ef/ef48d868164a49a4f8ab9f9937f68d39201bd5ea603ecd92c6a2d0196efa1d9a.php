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

/* /websicues/themes/jtherczeg-grill/partials/socials.htm */
class __TwigTemplate_8f7c85fb6d724e7fd411b888fd19d15af46bf0c9bbd265dbe31743548506fd9b extends \Twig\Template
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
        echo "<div class=\"top-footer\">
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"subscribe-form\">
                <span>Get in touch with us</span>
                    <form role=\"form\" method=\"get\" class=\"subscribeForm\">
                        <input id=\"subscribe\" type=\"text\" />
                        <input type=\"submit\" id=\"submitButton\" />
                    </form>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"social-bottom\">
                <span>Follow us:</span>
                    <ul>
                        <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/socials.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-footer\">
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"subscribe-form\">
                <span>Get in touch with us</span>
                    <form role=\"form\" method=\"get\" class=\"subscribeForm\">
                        <input id=\"subscribe\" type=\"text\" />
                        <input type=\"submit\" id=\"submitButton\" />
                    </form>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"social-bottom\">
                <span>Follow us:</span>
                    <ul>
                        <li><a href=\"#\" class=\"fa fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                        <li><a href=\"#\" class=\"fa fa-rss\"></a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/jtherczeg-grill/partials/socials.htm", "");
    }
}
