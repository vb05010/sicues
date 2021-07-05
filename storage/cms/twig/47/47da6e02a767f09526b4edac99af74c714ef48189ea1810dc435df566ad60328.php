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

/* /websicues/themes/jacoweb-agency/partials/contact.htm */
class __TwigTemplate_adc3386a94a47075bdc41c4e0f7a591cc919e696d63c4cd18c51d0b94d2c5b87 extends \Twig\Template
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
            <h2 class=\"section-heading\">Contact Us</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Your Name *\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Your Email *\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"tel\" class=\"form-control\" placeholder=\"Your Phone *\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" placeholder=\"Your Message *\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"col-lg-12 text-center\">
                        <div id=\"success\"></div>
                        <button type=\"submit\" class=\"btn btn-xl\">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jacoweb-agency/partials/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading\">Contact Us</h2>
            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Your Name *\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Your Email *\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"tel\" class=\"form-control\" placeholder=\"Your Phone *\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" placeholder=\"Your Message *\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                            <p class=\"help-block text-danger\"></p>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"col-lg-12 text-center\">
                        <div id=\"success\"></div>
                        <button type=\"submit\" class=\"btn btn-xl\">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>", "/websicues/themes/jacoweb-agency/partials/contact.htm", "");
    }
}
