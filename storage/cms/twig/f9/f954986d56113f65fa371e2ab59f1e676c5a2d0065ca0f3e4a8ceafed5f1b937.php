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

/* /websicues/themes/jacoweb-agency/partials/modals.htm */
class __TwigTemplate_37e5600d73a872d04ad040feeed9a7f3287ae2db6d581f8ec8da778a8ec2a404 extends \Twig\Template
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
        echo "<!-- Portfolio Modal 1 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive\" src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/roundicons-free.png");
        echo "\" alt=\"\">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <p>
                            <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href=\"https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc\">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href=\"https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc\">here</a>.</p>
                        <ul class=\"list-inline\">
                            <li>Date: July 2014</li>
                            <li>Client: Round Icons</li>
                            <li>Category: Graphic Design</li>
                        </ul>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <h2>Project Heading</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/startup-framework-preview.png");
        echo "\" alt=\"\">
                        <p><a href=\"http://designmodo.com/startup/?u=787\">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                        <p>You can preview Startup Framework <a href=\"http://designmodo.com/startup/?u=787\">here</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/treehouse-preview.png");
        echo "\" alt=\"\">
                        <p>Treehouse is a free PSD web template built by <a href=\"https://www.behance.net/MathavanJaya\">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/\">FreebiesXpress.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/golden-preview.png");
        echo "\" alt=\"\">
                        <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href=\"https://www.behance.net/MathavanJaya\">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"http://freebiesxpress.com/gallery/golden-free-one-page-web-template/\">FreebiesXpress.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/escape-preview.png");
        echo "\" alt=\"\">
                        <p>Escape is a free PSD web template built by <a href=\"https://www.behance.net/MathavanJaya\">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/\">FreebiesXpress.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/dreams-preview.png");
        echo "\" alt=\"\">
                        <p>Dreams is a free PSD web template built by <a href=\"https://www.behance.net/MathavanJaya\">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/\">FreebiesXpress.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/partials/modals.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 157,  178 => 130,  148 => 103,  118 => 76,  88 => 49,  53 => 17,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Portfolio Modal 1 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/roundicons-free.png'|theme }}\" alt=\"\">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <p>
                            <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href=\"https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc\">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href=\"https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc\">here</a>.</p>
                        <ul class=\"list-inline\">
                            <li>Date: July 2014</li>
                            <li>Client: Round Icons</li>
                            <li>Category: Graphic Design</li>
                        </ul>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <h2>Project Heading</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"{{ 'assets/images/portfolio/startup-framework-preview.png'|theme }}\" alt=\"\">
                        <p><a href=\"http://designmodo.com/startup/?u=787\">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                        <p>You can preview Startup Framework <a href=\"http://designmodo.com/startup/?u=787\">here</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"{{ 'assets/images/portfolio/treehouse-preview.png'|theme }}\" alt=\"\">
                        <p>Treehouse is a free PSD web template built by <a href=\"https://www.behance.net/MathavanJaya\">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/\">FreebiesXpress.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"{{ 'assets/images/portfolio/golden-preview.png'|theme }}\" alt=\"\">
                        <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href=\"https://www.behance.net/MathavanJaya\">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"http://freebiesxpress.com/gallery/golden-free-one-page-web-template/\">FreebiesXpress.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"{{ 'assets/images/portfolio/escape-preview.png'|theme }}\" alt=\"\">
                        <p>Escape is a free PSD web template built by <a href=\"https://www.behance.net/MathavanJaya\">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/\">FreebiesXpress.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"{{ 'assets/images/portfolio/dreams-preview.png'|theme }}\" alt=\"\">
                        <p>Dreams is a free PSD web template built by <a href=\"https://www.behance.net/MathavanJaya\">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/\">FreebiesXpress.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/jacoweb-agency/partials/modals.htm", "");
    }
}
