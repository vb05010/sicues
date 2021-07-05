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

/* /websicues/themes/gustavoardoino-amerip-topbuilder/pages/index.htm */
class __TwigTemplate_eef5b17971454c1d50d3c28b0d3c63dcfcf681d045ec5f7e3b8fc3f329f4be73 extends \Twig\Template
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
        echo "<!-- Slider area -->
<section class=\"slider_area row m0\">
    <div class=\"slider_inner\">
        <div data-thumb=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider-1.jpg");
        echo "\" data-src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider-1.jpg");
        echo "\">
            <div class=\"camera_caption\">
                <div class=\"container\">
                    <h5 class=\" wow fadeInUp animated\">Welcome to our</h5>
                    <h3 class=\" wow fadeInUp animated\" data-wow-delay=\"0.5s\">CLEAN, MODERN, MULTIPURPOSE THEME</h3>
                    <p class=\" wow fadeInUp animated\" data-wow-delay=\"0.8s\">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                    <a class=\" wow fadeInUp animated\" data-wow-delay=\"1s\" href=\"#\">Read More</a>
                </div>
            </div>
        </div>
        <div data-thumb=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider-2.jpg");
        echo "\" data-src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider-1.jpg");
        echo "\">
            <div class=\"camera_caption\">
                <div class=\"container\">
                    <h5 class=\" wow fadeInUp animated\">Welcome to our</h5>
                    <h3 class=\" wow fadeInUp animated\" data-wow-delay=\"0.5s\">CLEAN ,MODERN, MULTIPURPOSE THEME</h3>
                    <p class=\" wow fadeInUp animated\" data-wow-delay=\"0.8s\">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                    <a class=\" wow fadeInUp animated\" data-wow-delay=\"1s\" href=\"#\">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Slider area -->

<!-- Professional Builde -->
<section class=\"professional_builder row\">
    <div class=\"container\">
        <div class=\"row builder_all\">
            <div class=\"col-md-3 col-sm-6 builder\">
                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                <h4>Professional Builde</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
            </div>
            <div class=\"col-md-3 col-sm-6 builder\">
                <i class=\"fa fa-building\" aria-hidden=\"true\"></i>
                <h4>We Deliver Quality</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
            </div>
            <div class=\"col-md-3 col-sm-6 builder\">
                <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
                <h4>Always On Time</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
            </div>
            <div class=\"col-md-3 col-sm-6 builder\">
                <i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i>
                <h4>We Are Pasionate</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
            </div>
        </div>
    </div>
</section>
<!-- End Professional Builde -->

<!-- About Us Area -->
<section class=\"about_us_area row\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>ABOUT US</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"row about_row\">
            <div class=\"who_we_area col-md-7 col-sm-6\">
                <div class=\"subtittle\">
                    <h2>WHO WE ARE</h2>
                </div>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                <a href=\"#\" class=\"button_all\">Contact Now</a>
            </div>
            <div class=\"col-md-5 col-sm-6 about_client\">
                <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_client.jpg");
        echo "\" alt=\"\">
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->

<!-- What ew offer Area -->
<section class=\"what_we_area row\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>WHAT WE OFFER</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"row construction_iner\">
            <div class=\"col-md-4 col-sm-6 construction\">
                <div class=\"cns-img\">
                    <img src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cns-1.jpg");
        echo "\" alt=\"\">
                </div>
                <div class=\"cns-content\">
                    <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                    <a href=\"#\">BUILDING CONSTRUCTION</a>
                    <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 construction\">
                <div class=\"cns-img\">
                    <img src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cns-2.jpg");
        echo "\" alt=\"\">
                </div>
                <div class=\"cns-content\">
                    <i class=\"fa fa-keyboard-o\" aria-hidden=\"true\"></i>
                    <a href=\"#\">PROJECT PLANNING</a>
                    <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 construction\">
                <div class=\"cns-img\">
                    <img src=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cns-3.jpg");
        echo "\" alt=\"\">
                </div>
                <div class=\"cns-content\">
                    <i class=\"fa fa-gavel\" aria-hidden=\"true\"></i>
                    <a href=\"#\">HOUSE RENOVATION</a>
                    <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End What ew offer Area -->

<!-- Our Features Area -->
<section class=\"our_feature_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Features</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"feature_row row\">
            <div class=\"col-md-6 feature_img\">
                <img src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/feature-man.jpg");
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-6 feature_content\">
                <div class=\"subtittle\">
                    <h2>WHY CHOOSE US</h2>
                    <h5>There are many variations of passages of Lorem Ipsum available.</h5>
                </div>
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <i class=\"fa fa-wrench\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <a href=\"#\">30+ YEARS OF EXPERIENCE</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <i class=\"fa fa-rocket\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <a href=\"#\">QUALIFIED EXPERTS</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <a href=\"#\">Best Customer Services</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Features Area -->

<!-- Our Services Area -->
<section class=\"our_services_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Services</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"portfolio_inner_area\">
            <div class=\"portfolio_filter\">
                <ul>
                    <li data-filter=\"*\" class=\"active\"><a href=\"\"> All</a></li>
                    <li data-filter=\".photography\"><a href=\"\">ARCHITECTURE</a></li>
                    <li data-filter=\".branding\"><a href=\"\">Building</a></li>
                    <li data-filter=\".webdesign\"><a href=\"\">CONSTRUCTION</a></li>
                    <li data-filter=\".adversting\"><a href=\"\">DESIGN</a></li>
                    <li data-filter=\".painting\"><a href=\"\">Painting</a></li>
                </ul>
            </div>
            <div class=\"portfolio_item\">
                <div class=\"grid-sizer\"></div>
                <div class=\"single_facilities col-xs-4 p0 painting photography adversting\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"";
        // line 200
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/sv-1.jpg");
        echo "\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 p0 webdesign\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"";
        // line 212
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/sv-2.jpg");
        echo "\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 painting p0 photography branding\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"";
        // line 224
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/sv-3.jpg");
        echo "\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 p0 adversting webdesign adversting\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/sv-4.jpg");
        echo "\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 p0 painting adversting branding\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"";
        // line 248
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/sv-5.jpg");
        echo "\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 p0 webdesign photography magazine adversting\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"";
        // line 260
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/sv-6.jpg");
        echo "\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Services Area -->

<!-- Our Team Area -->
<section class=\"our_team_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Team</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"row team_row\">
            <div class=\"col-md-3 col-sm-6 wow fadeInUp\">
                <div class=\"team_membar\">
                    <img src=\"";
        // line 286
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/tm-1.jpg");
        echo "\" alt=\"\">
                    <div class=\"team_content\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                        <a href=\"#\" class=\"name\">Prodip Ghosh</a>
                        <h6>Founder &amp; CEO</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.2s\">
                <div class=\"team_membar\">
                    <img src=\"";
        // line 300
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/tm-2.jpg");
        echo "\" alt=\"\">
                    <div class=\"team_content\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                        <a href=\"#\" class=\"name\">Emran Khan</a>
                        <h6>Web-Developer</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"team_membar\">
                    <img src=\"";
        // line 314
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/tm-3.jpg");
        echo "\" alt=\"\">
                    <div class=\"team_content\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                        <a href=\"#\" class=\"name\">Prodip Ghosh</a>
                        <h6>Founder &amp; CEO</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.4s\">
                <div class=\"team_membar\">
                    <img src=\"";
        // line 328
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/tm-4.jpg");
        echo "\" alt=\"\">
                    <div class=\"team_content\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                        <a href=\"#\" class=\"name\">Jakaria Khan</a>
                        <h6>Founder &amp; CEO</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Team Area -->

<!-- Our Achievments Area -->
<section class=\"our_achievments_area\" data-stellar-background-ratio=\"0.3\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Achievments</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"achievments_row row\">
            <div class=\"col-md-3 col-sm-6 p0 completed\">
                <i class=\"fa fa-connectdevelop\" aria-hidden=\"true\"></i>
                <span class=\"counter\">800</span>
                <h6>PROJECT COMPLETED</h6>
            </div>
            <div class=\"col-md-3 col-sm-6 p0 completed\">
                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                <span class=\"counter\">230</span>
                <h6>HOUSE RENOVATIONS</h6>
            </div>
            <div class=\"col-md-3 col-sm-6 p0 completed\">
                <i class=\"fa fa-child\" aria-hidden=\"true\"></i>
                <span class=\"counter\">1390</span>
                <h6>WORKERS EMPLOYED</h6>
            </div>
            <div class=\"col-md-3 col-sm-6 p0 completed\">
                <i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>
                <span class=\"counter\">125</span>
                <h6>AWARDS WON</h6>
            </div>
        </div>
    </div>
</section>
<!-- End Our Achievments Area -->

<!-- Our Testimonial Area -->
<section class=\"testimonial_area row\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our TESTIMONIALS</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"testimonial_carosel\">
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"";
        // line 390
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-2.jpg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Emran Khan</h4>
                        <h6>Web Developer</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"";
        // line 404
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-3.jpg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Emran Khan</h4>
                        <h6>Web Developer</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"";
        // line 418
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-1.jpg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Prodip ghosht</h4>
                        <h6>Brand Manager</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"";
        // line 432
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-2.jpg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Jakaria Khan</h4>
                        <h6>Brand Manager</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"";
        // line 446
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-1.jpg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Prodip ghosht</h4>
                        <h6>Brand Manager</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"";
        // line 460
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-2.jpg");
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Jakaria Khan</h4>
                        <h6>Brand Manager</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
        </div>
    </div>
</section>
<!-- End Our testimonial Area -->

<!-- Our Featured Works Area -->
<section class=\"featured_works row\" data-stellar-background-ratio=\"0.3\">
    <div class=\"tittle wow fadeInUp\">
        <h2>Our Featured Works</h2>
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
    </div>
    <div class=\"featured_gallery\">
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"";
        // line 483
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/gl-1.jpg");
        echo "\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"";
        // line 490
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/gl-2.jpg");
        echo "\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"";
        // line 497
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/gl-3.jpg");
        echo "\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"";
        // line 504
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/gl-4.jpg");
        echo "\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"";
        // line 511
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/gl-5.jpg");
        echo "\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"";
        // line 518
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/gl-6.jpg");
        echo "\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"";
        // line 525
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/gl-7.jpg");
        echo "\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"";
        // line 532
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/gl-8.jpg");
        echo "\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
    </div>
</section>
<!-- End Our Featured Works Area -->

<!-- Our Latest Blog Area -->
<section class=\"latest_blog_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Latest Blog</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"row latest_blog\">
            <div class=\"col-md-4 col-sm-6 blog_content\">
                <img src=\"";
        // line 551
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/lb-1.jpg");
        echo "\" alt=\"\">
                <a href=\"#\" class=\"blog_heading\">Our Latest Project</a>
                <h4><small>by  </small><a href=\"#\">Emran Khan</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href=\"#\">Read More</a></p>
            </div>
            <div class=\"col-md-4 col-sm-6 blog_content\">
                <img src=\"";
        // line 557
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/lb-2.jpg");
        echo "\" alt=\"\">
                <a href=\"#\" class=\"blog_heading\">Our Latest Project</a>
                <h4><small>by  </small><a href=\"#\">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href=\"#\">Read More</a></p>
            </div>
            <div class=\"col-md-4 col-sm-6 blog_content\">
                <img src=\"";
        // line 563
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/lb-3.jpg");
        echo "\" alt=\"\">
                <a href=\"#\" class=\"blog_heading\">Our Latest Project</a>
                <h4><small>by  </small><a href=\"#\">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href=\"#\">Read More</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End Our Latest Blog Area -->

<!-- Our Partners Area -->
<section class=\"our_partners_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Partners</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"partners\">
            <div class=\"item\"><img src=\"";
        // line 581
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client_logo/client_logo-1.png");
        echo "\" alt=\"\"></div>
            <div class=\"item\"><img src=\"";
        // line 582
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client_logo/client_logo-2.png");
        echo "\" alt=\"\"></div>
            <div class=\"item\"><img src=\"";
        // line 583
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client_logo/client_logo-3.png");
        echo "\" alt=\"\"></div>
            <div class=\"item\"><img src=\"";
        // line 584
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client_logo/client_logo-4.png");
        echo "\" alt=\"\"></div>
            <div class=\"item\"><img src=\"";
        // line 585
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client_logo/client_logo-5.png");
        echo "\" alt=\"\"></div>
        </div>
    </div>
    <div class=\"book_now_aera\">
        <div class=\"container\">
            <div class=\"row book_now\">
                <div class=\"col-md-10 booking_text\">
                    <h4>Booking now if you need build your dream home.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class=\"col-md-2 p0 book_bottun\">
                    <a href=\"#\" class=\"button_all\">book now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Partners Area -->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/gustavoardoino-amerip-topbuilder/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  739 => 585,  735 => 584,  731 => 583,  727 => 582,  723 => 581,  702 => 563,  693 => 557,  684 => 551,  662 => 532,  652 => 525,  642 => 518,  632 => 511,  622 => 504,  612 => 497,  602 => 490,  592 => 483,  566 => 460,  549 => 446,  532 => 432,  515 => 418,  498 => 404,  481 => 390,  416 => 328,  399 => 314,  382 => 300,  365 => 286,  336 => 260,  321 => 248,  306 => 236,  291 => 224,  276 => 212,  261 => 200,  190 => 132,  165 => 110,  152 => 100,  139 => 90,  119 => 73,  55 => 14,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Slider area -->
<section class=\"slider_area row m0\">
    <div class=\"slider_inner\">
        <div data-thumb=\"{{ 'assets/images/slider-1.jpg'|theme }}\" data-src=\"{{ 'assets/images/slider-1.jpg'|theme }}\">
            <div class=\"camera_caption\">
                <div class=\"container\">
                    <h5 class=\" wow fadeInUp animated\">Welcome to our</h5>
                    <h3 class=\" wow fadeInUp animated\" data-wow-delay=\"0.5s\">CLEAN, MODERN, MULTIPURPOSE THEME</h3>
                    <p class=\" wow fadeInUp animated\" data-wow-delay=\"0.8s\">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                    <a class=\" wow fadeInUp animated\" data-wow-delay=\"1s\" href=\"#\">Read More</a>
                </div>
            </div>
        </div>
        <div data-thumb=\"{{ 'assets/images/slider-2.jpg'|theme }}\" data-src=\"{{ 'assets/images/slider-1.jpg'|theme }}\">
            <div class=\"camera_caption\">
                <div class=\"container\">
                    <h5 class=\" wow fadeInUp animated\">Welcome to our</h5>
                    <h3 class=\" wow fadeInUp animated\" data-wow-delay=\"0.5s\">CLEAN ,MODERN, MULTIPURPOSE THEME</h3>
                    <p class=\" wow fadeInUp animated\" data-wow-delay=\"0.8s\">Our team of professionals will help you turn your dream home or flat into a reality fast. The Love Boat promises something for everyone. Now the world don't move to the beat of just one</p>
                    <a class=\" wow fadeInUp animated\" data-wow-delay=\"1s\" href=\"#\">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Slider area -->

<!-- Professional Builde -->
<section class=\"professional_builder row\">
    <div class=\"container\">
        <div class=\"row builder_all\">
            <div class=\"col-md-3 col-sm-6 builder\">
                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                <h4>Professional Builde</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
            </div>
            <div class=\"col-md-3 col-sm-6 builder\">
                <i class=\"fa fa-building\" aria-hidden=\"true\"></i>
                <h4>We Deliver Quality</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
            </div>
            <div class=\"col-md-3 col-sm-6 builder\">
                <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
                <h4>Always On Time</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
            </div>
            <div class=\"col-md-3 col-sm-6 builder\">
                <i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i>
                <h4>We Are Pasionate</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
            </div>
        </div>
    </div>
</section>
<!-- End Professional Builde -->

<!-- About Us Area -->
<section class=\"about_us_area row\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>ABOUT US</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"row about_row\">
            <div class=\"who_we_area col-md-7 col-sm-6\">
                <div class=\"subtittle\">
                    <h2>WHO WE ARE</h2>
                </div>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                <a href=\"#\" class=\"button_all\">Contact Now</a>
            </div>
            <div class=\"col-md-5 col-sm-6 about_client\">
                <img src=\"{{ 'assets/images/about_client.jpg'|theme }}\" alt=\"\">
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->

<!-- What ew offer Area -->
<section class=\"what_we_area row\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>WHAT WE OFFER</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"row construction_iner\">
            <div class=\"col-md-4 col-sm-6 construction\">
                <div class=\"cns-img\">
                    <img src=\"{{ 'assets/images/cns-1.jpg'|theme }}\" alt=\"\">
                </div>
                <div class=\"cns-content\">
                    <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                    <a href=\"#\">BUILDING CONSTRUCTION</a>
                    <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 construction\">
                <div class=\"cns-img\">
                    <img src=\"{{ 'assets/images/cns-2.jpg'|theme }}\" alt=\"\">
                </div>
                <div class=\"cns-content\">
                    <i class=\"fa fa-keyboard-o\" aria-hidden=\"true\"></i>
                    <a href=\"#\">PROJECT PLANNING</a>
                    <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 construction\">
                <div class=\"cns-img\">
                    <img src=\"{{ 'assets/images/cns-3.jpg'|theme }}\" alt=\"\">
                </div>
                <div class=\"cns-content\">
                    <i class=\"fa fa-gavel\" aria-hidden=\"true\"></i>
                    <a href=\"#\">HOUSE RENOVATION</a>
                    <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End What ew offer Area -->

<!-- Our Features Area -->
<section class=\"our_feature_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Features</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"feature_row row\">
            <div class=\"col-md-6 feature_img\">
                <img src=\"{{ 'assets/images/feature-man.jpg'|theme }}\" alt=\"\">
            </div>
            <div class=\"col-md-6 feature_content\">
                <div class=\"subtittle\">
                    <h2>WHY CHOOSE US</h2>
                    <h5>There are many variations of passages of Lorem Ipsum available.</h5>
                </div>
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <i class=\"fa fa-wrench\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <a href=\"#\">30+ YEARS OF EXPERIENCE</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <i class=\"fa fa-rocket\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <a href=\"#\">QUALIFIED EXPERTS</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <a href=\"#\">Best Customer Services</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Features Area -->

<!-- Our Services Area -->
<section class=\"our_services_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Services</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"portfolio_inner_area\">
            <div class=\"portfolio_filter\">
                <ul>
                    <li data-filter=\"*\" class=\"active\"><a href=\"\"> All</a></li>
                    <li data-filter=\".photography\"><a href=\"\">ARCHITECTURE</a></li>
                    <li data-filter=\".branding\"><a href=\"\">Building</a></li>
                    <li data-filter=\".webdesign\"><a href=\"\">CONSTRUCTION</a></li>
                    <li data-filter=\".adversting\"><a href=\"\">DESIGN</a></li>
                    <li data-filter=\".painting\"><a href=\"\">Painting</a></li>
                </ul>
            </div>
            <div class=\"portfolio_item\">
                <div class=\"grid-sizer\"></div>
                <div class=\"single_facilities col-xs-4 p0 painting photography adversting\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"{{ 'assets/images/gallery/sv-1.jpg'|theme }}\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 p0 webdesign\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"{{ 'assets/images/gallery/sv-2.jpg'|theme }}\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 painting p0 photography branding\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"{{ 'assets/images/gallery/sv-3.jpg'|theme }}\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 p0 adversting webdesign adversting\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"{{ 'assets/images/gallery/sv-4.jpg'|theme }}\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 p0 painting adversting branding\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"{{ 'assets/images/gallery/sv-5.jpg'|theme }}\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"single_facilities col-xs-4 p0 webdesign photography magazine adversting\">
                    <div class=\"single_facilities_inner\">
                            <img src=\"{{ 'assets/images/gallery/sv-6.jpg'|theme }}\" alt=\"\">
                        <div class=\"gallery_hover\">
                            <h4>Construction</h4>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Services Area -->

<!-- Our Team Area -->
<section class=\"our_team_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Team</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"row team_row\">
            <div class=\"col-md-3 col-sm-6 wow fadeInUp\">
                <div class=\"team_membar\">
                    <img src=\"{{ 'assets/images/team/tm-1.jpg'|theme }}\" alt=\"\">
                    <div class=\"team_content\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                        <a href=\"#\" class=\"name\">Prodip Ghosh</a>
                        <h6>Founder &amp; CEO</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.2s\">
                <div class=\"team_membar\">
                    <img src=\"{{ 'assets/images/team/tm-2.jpg'|theme }}\" alt=\"\">
                    <div class=\"team_content\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                        <a href=\"#\" class=\"name\">Emran Khan</a>
                        <h6>Web-Developer</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"team_membar\">
                    <img src=\"{{ 'assets/images/team/tm-3.jpg'|theme }}\" alt=\"\">
                    <div class=\"team_content\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                        <a href=\"#\" class=\"name\">Prodip Ghosh</a>
                        <h6>Founder &amp; CEO</h6>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.4s\">
                <div class=\"team_membar\">
                    <img src=\"{{ 'assets/images/team/tm-4.jpg'|theme }}\" alt=\"\">
                    <div class=\"team_content\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                        <a href=\"#\" class=\"name\">Jakaria Khan</a>
                        <h6>Founder &amp; CEO</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Team Area -->

<!-- Our Achievments Area -->
<section class=\"our_achievments_area\" data-stellar-background-ratio=\"0.3\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Achievments</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"achievments_row row\">
            <div class=\"col-md-3 col-sm-6 p0 completed\">
                <i class=\"fa fa-connectdevelop\" aria-hidden=\"true\"></i>
                <span class=\"counter\">800</span>
                <h6>PROJECT COMPLETED</h6>
            </div>
            <div class=\"col-md-3 col-sm-6 p0 completed\">
                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                <span class=\"counter\">230</span>
                <h6>HOUSE RENOVATIONS</h6>
            </div>
            <div class=\"col-md-3 col-sm-6 p0 completed\">
                <i class=\"fa fa-child\" aria-hidden=\"true\"></i>
                <span class=\"counter\">1390</span>
                <h6>WORKERS EMPLOYED</h6>
            </div>
            <div class=\"col-md-3 col-sm-6 p0 completed\">
                <i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>
                <span class=\"counter\">125</span>
                <h6>AWARDS WON</h6>
            </div>
        </div>
    </div>
</section>
<!-- End Our Achievments Area -->

<!-- Our Testimonial Area -->
<section class=\"testimonial_area row\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our TESTIMONIALS</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"testimonial_carosel\">
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"{{ 'assets/images/testimonial-2.jpg'|theme }}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Emran Khan</h4>
                        <h6>Web Developer</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"{{ 'assets/images/testimonial-3.jpg'|theme }}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Emran Khan</h4>
                        <h6>Web Developer</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"{{ 'assets/images/testimonial-1.jpg'|theme }}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Prodip ghosht</h4>
                        <h6>Brand Manager</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"{{ 'assets/images/testimonial-2.jpg'|theme }}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Jakaria Khan</h4>
                        <h6>Brand Manager</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"{{ 'assets/images/testimonial-1.jpg'|theme }}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Prodip ghosht</h4>
                        <h6>Brand Manager</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
            <div class=\"item\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <a href=\"#\">
                            <img class=\"media-object\" src=\"{{ 'assets/images/testimonial-2.jpg'|theme }}\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Jakaria Khan</h4>
                        <h6>Brand Manager</h6>
                    </div>
                </div>
                <p><i class=\"fa fa-quote-right\" aria-hidden=\"true\"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i></p>
            </div>
        </div>
    </div>
</section>
<!-- End Our testimonial Area -->

<!-- Our Featured Works Area -->
<section class=\"featured_works row\" data-stellar-background-ratio=\"0.3\">
    <div class=\"tittle wow fadeInUp\">
        <h2>Our Featured Works</h2>
        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
    </div>
    <div class=\"featured_gallery\">
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"{{ 'assets/images/gallery/gl-1.jpg'|theme }}\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"{{ 'assets/images/gallery/gl-2.jpg'|theme }}\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"{{ 'assets/images/gallery/gl-3.jpg'|theme }}\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"{{ 'assets/images/gallery/gl-4.jpg'|theme }}\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"{{ 'assets/images/gallery/gl-5.jpg'|theme }}\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"{{ 'assets/images/gallery/gl-6.jpg'|theme }}\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"{{ 'assets/images/gallery/gl-7.jpg'|theme }}\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-4 col-xs-6 gallery_iner p0\">
            <img src=\"{{ 'assets/images/gallery/gl-8.jpg'|theme }}\" alt=\"\">
            <div class=\"gallery_hover\">
                <h4>Bolt Apartments</h4>
                <a href=\"#\">VIEW PROJECT</a>
            </div>
        </div>
    </div>
</section>
<!-- End Our Featured Works Area -->

<!-- Our Latest Blog Area -->
<section class=\"latest_blog_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Latest Blog</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"row latest_blog\">
            <div class=\"col-md-4 col-sm-6 blog_content\">
                <img src=\"{{ 'assets/images/blog/lb-1.jpg'|theme }}\" alt=\"\">
                <a href=\"#\" class=\"blog_heading\">Our Latest Project</a>
                <h4><small>by  </small><a href=\"#\">Emran Khan</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href=\"#\">Read More</a></p>
            </div>
            <div class=\"col-md-4 col-sm-6 blog_content\">
                <img src=\"{{ 'assets/images/blog/lb-2.jpg'|theme }}\" alt=\"\">
                <a href=\"#\" class=\"blog_heading\">Our Latest Project</a>
                <h4><small>by  </small><a href=\"#\">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href=\"#\">Read More</a></p>
            </div>
            <div class=\"col-md-4 col-sm-6 blog_content\">
                <img src=\"{{ 'assets/images/blog/lb-3.jpg'|theme }}\" alt=\"\">
                <a href=\"#\" class=\"blog_heading\">Our Latest Project</a>
                <h4><small>by  </small><a href=\"#\">Prodip Ghosh</a><span>/</span><small>ON </small> October 15, 2016</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href=\"#\">Read More</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End Our Latest Blog Area -->

<!-- Our Partners Area -->
<section class=\"our_partners_area\">
    <div class=\"container\">
        <div class=\"tittle wow fadeInUp\">
            <h2>Our Partners</h2>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class=\"partners\">
            <div class=\"item\"><img src=\"{{ 'assets/images/client_logo/client_logo-1.png'|theme }}\" alt=\"\"></div>
            <div class=\"item\"><img src=\"{{ 'assets/images/client_logo/client_logo-2.png'|theme }}\" alt=\"\"></div>
            <div class=\"item\"><img src=\"{{ 'assets/images/client_logo/client_logo-3.png'|theme }}\" alt=\"\"></div>
            <div class=\"item\"><img src=\"{{ 'assets/images/client_logo/client_logo-4.png'|theme }}\" alt=\"\"></div>
            <div class=\"item\"><img src=\"{{ 'assets/images/client_logo/client_logo-5.png'|theme }}\" alt=\"\"></div>
        </div>
    </div>
    <div class=\"book_now_aera\">
        <div class=\"container\">
            <div class=\"row book_now\">
                <div class=\"col-md-10 booking_text\">
                    <h4>Booking now if you need build your dream home.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class=\"col-md-2 p0 book_bottun\">
                    <a href=\"#\" class=\"button_all\">book now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Partners Area -->", "/websicues/themes/gustavoardoino-amerip-topbuilder/pages/index.htm", "");
    }
}
