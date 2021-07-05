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

/* /websicues/themes/kenshin-kenshinschool/partials/slider.htm */
class __TwigTemplate_fd3b431a64877c50179298c56243ce3dbad44dcc952997e8f762e9726e5183d6 extends \Twig\Template
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
        echo "<!--************************************
\t\t\t\tHome Slider Start
\t\t*************************************-->
<div class=\"clearfix\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"tg-homebannervtwo\">
                <div id=\"tg-homeslider\" class=\"tg-homeslider owl-carousel tg-btnround tg-haslayout\">
                    <div class=\"item\">
                        <figure>
                            <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/img-04.jpg");
        echo "\" alt=\"image description\">
                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <a class=\"tg-btn\" href=\"javascript:void(0);\">read more</a>
                                    <div class=\"tg-titledescription\">
                                        <h1>Annual Convocation 2017</h1>
                                        <div class=\"tg-description\"><p>Consectetur adipisicing elit sed do eiusmod tempor inci labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris...</p></div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"item\">
                        <figure>
                            <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/img-05.jpg");
        echo "\" alt=\"image description\">
                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <a class=\"tg-btn\" href=\"javascript:void(0);\">read more</a>
                                    <div class=\"tg-titledescription\">
                                        <h1>Annual Convocation 2017</h1>
                                        <div class=\"tg-description\"><p>Consectetur adipisicing elit sed do eiusmod amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris...</p></div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"item\">
                        <figure>
                            <img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/img-06.jpg");
        echo "\" alt=\"image description\">
                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <a class=\"tg-btn\" href=\"javascript:void(0);\">read more</a>
                                    <div class=\"tg-titledescription\">
                                        <h1>Annual Convocation 2017</h1>
                                        <div class=\"tg-description\"><p>Consectetur adipisicing elit sed do eiusmod tempor inci labore et dolore amit agna aliqua enimnate minim veniam quis nostrud  ullamco laboris...</p></div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class=\"tg-noticeboardarea\">
                    <div class=\"tg-widget tg-widgetadmissionform\">
                        <div class=\"tg-widgetcontent\">
                            <h3>Result Announced 2017</h3>
                            <div class=\"tg-description\">
                                <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
                            </div>
                            <a class=\"tg-btn tg-btnicon\" href=\"javascript:void(0);\">
                                <i class=\"fa fa-file-pdf-o\"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"tg-widget tg-widgetadmissionform\">
                        <div class=\"tg-widgetcontent\">
                            <h3>Admission Form</h3>
                            <div class=\"tg-description\">
                                <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
                            </div>
                            <a class=\"tg-btn tg-btnicon\" href=\"javascript:void(0);\">
                                <i class=\"fa fa-file-pdf-o\"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tg-tickerbox\">
                <span>Daily Alerts:</span>
                <div id=\"tg-ticker\" class=\"tg-ticker owl-carousel\">
                    <div class=\"item\">
                        <div class=\"tg-description\">
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-description\">
                            <p>Consectetur adipisicing elit sed do eiusmod qua enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-description\">
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Home Slider End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/kenshin-kenshinschool/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 40,  65 => 26,  48 => 12,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
\t\t\t\tHome Slider Start
\t\t*************************************-->
<div class=\"clearfix\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"tg-homebannervtwo\">
                <div id=\"tg-homeslider\" class=\"tg-homeslider owl-carousel tg-btnround tg-haslayout\">
                    <div class=\"item\">
                        <figure>
                            <img src=\"{{ 'assets/images/slider/img-04.jpg'|theme}}\" alt=\"image description\">
                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <a class=\"tg-btn\" href=\"javascript:void(0);\">read more</a>
                                    <div class=\"tg-titledescription\">
                                        <h1>Annual Convocation 2017</h1>
                                        <div class=\"tg-description\"><p>Consectetur adipisicing elit sed do eiusmod tempor inci labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris...</p></div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"item\">
                        <figure>
                            <img src=\"{{ 'assets/images/slider/img-05.jpg'|theme}}\" alt=\"image description\">
                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <a class=\"tg-btn\" href=\"javascript:void(0);\">read more</a>
                                    <div class=\"tg-titledescription\">
                                        <h1>Annual Convocation 2017</h1>
                                        <div class=\"tg-description\"><p>Consectetur adipisicing elit sed do eiusmod amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris...</p></div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class=\"item\">
                        <figure>
                            <img src=\"{{ 'assets/images/slider/img-06.jpg'|theme}}\" alt=\"image description\">
                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <a class=\"tg-btn\" href=\"javascript:void(0);\">read more</a>
                                    <div class=\"tg-titledescription\">
                                        <h1>Annual Convocation 2017</h1>
                                        <div class=\"tg-description\"><p>Consectetur adipisicing elit sed do eiusmod tempor inci labore et dolore amit agna aliqua enimnate minim veniam quis nostrud  ullamco laboris...</p></div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class=\"tg-noticeboardarea\">
                    <div class=\"tg-widget tg-widgetadmissionform\">
                        <div class=\"tg-widgetcontent\">
                            <h3>Result Announced 2017</h3>
                            <div class=\"tg-description\">
                                <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
                            </div>
                            <a class=\"tg-btn tg-btnicon\" href=\"javascript:void(0);\">
                                <i class=\"fa fa-file-pdf-o\"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"tg-widget tg-widgetadmissionform\">
                        <div class=\"tg-widgetcontent\">
                            <h3>Admission Form</h3>
                            <div class=\"tg-description\">
                                <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
                            </div>
                            <a class=\"tg-btn tg-btnicon\" href=\"javascript:void(0);\">
                                <i class=\"fa fa-file-pdf-o\"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tg-tickerbox\">
                <span>Daily Alerts:</span>
                <div id=\"tg-ticker\" class=\"tg-ticker owl-carousel\">
                    <div class=\"item\">
                        <div class=\"tg-description\">
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-description\">
                            <p>Consectetur adipisicing elit sed do eiusmod qua enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-description\">
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Home Slider End
*************************************-->", "/websicues/themes/kenshin-kenshinschool/partials/slider.htm", "");
    }
}
