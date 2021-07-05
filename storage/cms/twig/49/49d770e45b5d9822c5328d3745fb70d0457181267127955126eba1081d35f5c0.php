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

/* /websicues/themes/jtherczeg-grill/partials/about/team.htm */
class __TwigTemplate_bdd2a1a5fb32ad7a3f2785c72b77848d23200384b10893520a57538dc0772972 extends \Twig\Template
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
                    <h2>Our Team</h2>
                    <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"authors\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team-thumb\">
                        <div class=\"author\">
                            <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/author1.jpg");
        echo "\" alt=\"Tracy - templatemo\">
                        </div>
                        <div class=\"overlay\">
                            <div class=\"author-caption\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"author-details\">
                        <h2>Tracy</h2>
                        <span>Designer</span>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team-thumb\">
                        <div class=\"author\">
                            <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/author2.jpg");
        echo "\" alt=\"Mary - templatemo\">
                        </div>
                        <div class=\"overlay\">
                            <div class=\"author-caption\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"author-details\">
                        <h2>Mary</h2>
                        <span>Developer</span>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team-thumb\">
                        <div class=\"author\">
                            <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/author3.jpg");
        echo "\" alt=\"Julia - templatemo\">
                        </div>
                        <div class=\"overlay\">
                            <div class=\"author-caption\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"author-details\">
                        <h2>Julia</h2>
                        <span>Director</span>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team-thumb\">
                        <div class=\"author\">
                            <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/author4.jpg");
        echo "\" alt=\"Linda - templatemo\">
                        </div>
                        <div class=\"overlay\">
                            <div class=\"author-caption\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"author-details\">
                        <h2>Linda</h2>
                        <span>Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/about/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 75,  100 => 55,  77 => 35,  54 => 15,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Our Team</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"authors\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team-thumb\">
                        <div class=\"author\">
                            <img src=\"{{ 'assets/images/author1.jpg'|theme }}\" alt=\"Tracy - templatemo\">
                        </div>
                        <div class=\"overlay\">
                            <div class=\"author-caption\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"author-details\">
                        <h2>Tracy</h2>
                        <span>Designer</span>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team-thumb\">
                        <div class=\"author\">
                            <img src=\"{{ 'assets/images/author2.jpg'|theme }}\" alt=\"Mary - templatemo\">
                        </div>
                        <div class=\"overlay\">
                            <div class=\"author-caption\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"author-details\">
                        <h2>Mary</h2>
                        <span>Developer</span>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team-thumb\">
                        <div class=\"author\">
                            <img src=\"{{ 'assets/images/author3.jpg'|theme }}\" alt=\"Julia - templatemo\">
                        </div>
                        <div class=\"overlay\">
                            <div class=\"author-caption\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"author-details\">
                        <h2>Julia</h2>
                        <span>Director</span>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"team-thumb\">
                        <div class=\"author\">
                            <img src=\"{{ 'assets/images/author4.jpg'|theme }}\" alt=\"Linda - templatemo\">
                        </div>
                        <div class=\"overlay\">
                            <div class=\"author-caption\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"author-details\">
                        <h2>Linda</h2>
                        <span>Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>", "/websicues/themes/jtherczeg-grill/partials/about/team.htm", "");
    }
}
