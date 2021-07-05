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

/* /websicues/themes/jacoweb-agency/partials/about.htm */
class __TwigTemplate_634d6a42570bafc289342e69c3ecfdf7925b89138428590a75d4503391e633d0 extends \Twig\Template
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
            <h2 class=\"section-heading\">About</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <ul class=\"timeline\">
                <li>
                    <div class=\"timeline-image\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/1.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4>2009-2011</h4>
                            <h4 class=\"subheading\">Our Humble Beginnings</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class=\"timeline-inverted\">
                    <div class=\"timeline-image\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/2.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4>March 2011</h4>
                            <h4 class=\"subheading\">An Agency is Born</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"timeline-image\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/3.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4>December 2012</h4>
                            <h4 class=\"subheading\">Transition to Full Service</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class=\"timeline-inverted\">
                    <div class=\"timeline-image\">
                        <img class=\"img-circle img-responsive\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/4.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4>July 2014</h4>
                            <h4 class=\"subheading\">Phase Two Expansion</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class=\"timeline-inverted\">
                    <div class=\"timeline-image\">
                        <h4>Be Part
                            <br>Of Our
                            <br>Story!</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 55,  83 => 41,  66 => 27,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading\">About</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <ul class=\"timeline\">
                <li>
                    <div class=\"timeline-image\">
                        <img class=\"img-circle img-responsive\" src=\"{{ 'assets/images/about/1.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4>2009-2011</h4>
                            <h4 class=\"subheading\">Our Humble Beginnings</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class=\"timeline-inverted\">
                    <div class=\"timeline-image\">
                        <img class=\"img-circle img-responsive\" src=\"{{ 'assets/images/about/2.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4>March 2011</h4>
                            <h4 class=\"subheading\">An Agency is Born</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class=\"timeline-image\">
                        <img class=\"img-circle img-responsive\" src=\"{{ 'assets/images/about/3.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4>December 2012</h4>
                            <h4 class=\"subheading\">Transition to Full Service</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class=\"timeline-inverted\">
                    <div class=\"timeline-image\">
                        <img class=\"img-circle img-responsive\" src=\"{{ 'assets/images/about/4.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4>July 2014</h4>
                            <h4 class=\"subheading\">Phase Two Expansion</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class=\"timeline-inverted\">
                    <div class=\"timeline-image\">
                        <h4>Be Part
                            <br>Of Our
                            <br>Story!</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>", "/websicues/themes/jacoweb-agency/partials/about.htm", "");
    }
}
