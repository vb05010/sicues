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

/* /websicues/themes/jtherczeg-grill/partials/about/intro.htm */
class __TwigTemplate_fd2019e6bf87f0dfd0ee69cce434d06f098faa882fc0d77d9a8923a6950ef4f8 extends \Twig\Template
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
                    <h2>Who We Are</h2>
                    <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
            </div>
        </div>
                    
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Our Company</h3>
                <p>Duis efficitur, est ut sollicitudin efficitur, nulla eros tempus lacus, non auctor mi leo ut justo. Proin euismod sapien nec risus bibendum aliquam. Quisque non maximus augue. Vivamus mattis placerat faucibus. Fusce nec facilisis justo. Vestibulum tristique et purus condimentum dignissim. Curabitur mollis, sem nec condimentum consequat, velit diam consequat ex, nec rhoncus risus purus eget nibh. Sed a mollis dolor.</p>
            </div>
            <div class=\"col-md-6\">
                <h3>Team Management</h3>
                <p>Nam id felis nec libero posuere pretium ut ut tortor. Maecenas molestie dolor sed lectus vestibulum viverra. Morbi quis augue massa. Curabitur vel imperdiet justo, ut commodo sem. Donec ac elementum dolor, at finibus ex. Curabitur viverra venenatis gravida. Proin augue libero, accumsan sit amet ullamcorper in, posuere ac erat. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </div>
        </div>
                    
        <div class=\"space50\"></div>
                    
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/timeline1.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Breakfast</h4></a>
                            <p>8:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/timeline2.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Lunch</h4></a>
                            <p>11:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/timeline3.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Lunch</h4></a>
                            <p>2:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/timeline4.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Dinner</h4></a>
                            <p>7:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/timeline5.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Dinner</h4></a>
                            <p>8:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/timeline6.jpg");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Dinner</h4></a>
                            <p>9:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/about/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 93,  131 => 80,  115 => 67,  99 => 54,  83 => 41,  67 => 28,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Who We Are</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
                </div>
            </div>
        </div>
                    
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3>Our Company</h3>
                <p>Duis efficitur, est ut sollicitudin efficitur, nulla eros tempus lacus, non auctor mi leo ut justo. Proin euismod sapien nec risus bibendum aliquam. Quisque non maximus augue. Vivamus mattis placerat faucibus. Fusce nec facilisis justo. Vestibulum tristique et purus condimentum dignissim. Curabitur mollis, sem nec condimentum consequat, velit diam consequat ex, nec rhoncus risus purus eget nibh. Sed a mollis dolor.</p>
            </div>
            <div class=\"col-md-6\">
                <h3>Team Management</h3>
                <p>Nam id felis nec libero posuere pretium ut ut tortor. Maecenas molestie dolor sed lectus vestibulum viverra. Morbi quis augue massa. Curabitur vel imperdiet justo, ut commodo sem. Donec ac elementum dolor, at finibus ex. Curabitur viverra venenatis gravida. Proin augue libero, accumsan sit amet ullamcorper in, posuere ac erat. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </div>
        </div>
                    
        <div class=\"space50\"></div>
                    
        <div class=\"row\">
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"{{ 'assets/images/timeline1.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Breakfast</h4></a>
                            <p>8:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"{{ 'assets/images/timeline2.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Lunch</h4></a>
                            <p>11:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"{{ 'assets/images/timeline3.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Lunch</h4></a>
                            <p>2:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"{{ 'assets/images/timeline4.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Dinner</h4></a>
                            <p>7:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"{{ 'assets/images/timeline5.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Dinner</h4></a>
                            <p>8:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-2 col-sm-4\">
                <div class=\"timeline-thumb\">
                    <div class=\"thumb\">
                        <img src=\"{{ 'assets/images/timeline6.jpg'|theme }}\" alt=\"\">
                    </div>
                    <div class=\"overlay\">
                        <div class=\"timeline-caption\">
                            <a href=\"#\"><h4>Dinner</h4></a>
                            <p>9:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>", "/websicues/themes/jtherczeg-grill/partials/about/intro.htm", "");
    }
}
