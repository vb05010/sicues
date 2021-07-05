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

/* /websicues/themes/jacoweb-agency/partials/team.htm */
class __TwigTemplate_a152ed303db3a89aca8a07864128575fa32f8ca61e7b973b8c77ddb813862562 extends \Twig\Template
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
        <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading\">Our Amazing Team</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"team-member\">
                <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/1.jpg");
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                <h4>Kay Garland</h4>
                <p class=\"text-muted\">Lead Designer</p>
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"team-member\">
                <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/2.jpg");
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                <h4>Larry Parker</h4>
                <p class=\"text-muted\">Lead Marketer</p>
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"team-member\">
                <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/3.jpg");
        echo "\" class=\"img-responsive img-circle\" alt=\"\">
                <h4>Diana Pertersen</h4>
                <p class=\"text-muted\">Lead Developer</p>
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 text-center\">
            <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/partials/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  65 => 26,  47 => 11,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading\">Our Amazing Team</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"team-member\">
                <img src=\"{{ 'assets/images/team/1.jpg'|theme }}\" class=\"img-responsive img-circle\" alt=\"\">
                <h4>Kay Garland</h4>
                <p class=\"text-muted\">Lead Designer</p>
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"team-member\">
                <img src=\"{{ 'assets/images/team/2.jpg'|theme }}\" class=\"img-responsive img-circle\" alt=\"\">
                <h4>Larry Parker</h4>
                <p class=\"text-muted\">Lead Marketer</p>
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"team-member\">
                <img src=\"{{ 'assets/images/team/3.jpg'|theme }}\" class=\"img-responsive img-circle\" alt=\"\">
                <h4>Diana Pertersen</h4>
                <p class=\"text-muted\">Lead Developer</p>
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 text-center\">
            <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
    </div>
</div>", "/websicues/themes/jacoweb-agency/partials/team.htm", "");
    }
}
