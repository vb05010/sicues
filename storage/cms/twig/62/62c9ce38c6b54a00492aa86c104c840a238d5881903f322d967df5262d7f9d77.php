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

/* /websicues/themes/radiantweb-travu/pages/samples/contact.htm */
class __TwigTemplate_e30302e980200a45ce761272c9ddd83d3ca948760148c5a25c7d9f8561ede8aa extends \Twig\Template
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
        echo "<header class=\"page-header\">
                    <h1 class=\"page-title\">Contact us</h1>
                </header>
                
                <p>
                    We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
                </p>
                <br>
                    <form>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Name\">
                            </div>
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Email\">
                            </div>
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Phone\">
                            </div>
                        </div>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <textarea placeholder=\"Type your message here...\" class=\"form-control\" rows=\"9\"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <label class=\"checkbox\"><input type=\"checkbox\"> Sign up for newsletter</label>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <input class=\"btn btn-action\" type=\"submit\" value=\"Send message\">
                            </div>
                        </div>
                    </form>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/pages/samples/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"page-header\">
                    <h1 class=\"page-title\">Contact us</h1>
                </header>
                
                <p>
                    We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
                </p>
                <br>
                    <form>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Name\">
                            </div>
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Email\">
                            </div>
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Phone\">
                            </div>
                        </div>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <textarea placeholder=\"Type your message here...\" class=\"form-control\" rows=\"9\"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <label class=\"checkbox\"><input type=\"checkbox\"> Sign up for newsletter</label>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <input class=\"btn btn-action\" type=\"submit\" value=\"Send message\">
                            </div>
                        </div>
                    </form>", "/websicues/themes/radiantweb-travu/pages/samples/contact.htm", "");
    }
}
