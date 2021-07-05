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

/* /websicues/themes/jacoweb-agency/partials/footer.htm */
class __TwigTemplate_2bca124e205dc43b700684572c899f41021bffd51f893c2f38c30c11bc9cf2ea extends \Twig\Template
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
        <div class=\"col-md-4\">
            <span class=\"copyright\">Copyright © Your Website 2014</span>
        </div>
        <div class=\"col-md-4\">
            <ul class=\"list-inline social-buttons\">
                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                </li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <ul class=\"list-inline quicklinks\">
                <li><a href=\"#\">Privacy Policy</a>
                </li>
                <li><a href=\"#\">Terms of Use</a>
                </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <span class=\"copyright\">Copyright © Your Website 2014</span>
        </div>
        <div class=\"col-md-4\">
            <ul class=\"list-inline social-buttons\">
                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                </li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <ul class=\"list-inline quicklinks\">
                <li><a href=\"#\">Privacy Policy</a>
                </li>
                <li><a href=\"#\">Terms of Use</a>
                </li>
            </ul>
        </div>
    </div>
</div>", "/websicues/themes/jacoweb-agency/partials/footer.htm", "");
    }
}
