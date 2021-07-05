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

/* /websicues/themes/jtherczeg-grill/pages/samples/contact-us.htm */
class __TwigTemplate_21b6f61d2f2b2f44edb5441bc505314230a3e04bfb4fb4cc41c42776c1e87c61 extends \Twig\Template
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
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Contact Us</h2>
                    <span>Home / <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/contact-us");
        echo "\">Contact Us</a></span>
                </div>
             </div>
        </div>
    </div>
</div>

<div id=\"product-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Feel free to send a message</h2>
                    <img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
                </div>
            </div>
    </div>
    <div id=\"contact-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"product-item col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">  
                            <div class=\"message-form\">
                                <form role=\"form\" action=\"#\" method=\"post\" class=\"send-message\">
                                    <div class=\"row\">
                                    <div class=\"name col-md-4\">
                                        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"email col-md-4\">
                                        <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"subject col-md-4\">
                                        <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\">
                                    </div>
                                    </div>
                                    <div class=\"row\">        
                                    <div class=\"text col-md-12\">
                                        <textarea name=\"text\" placeholder=\"Message\" class=\"form-control\" required=\"required\"></textarea>
                                    </div>   
                                    </div>                              
                                    <div class=\"send\">
                                        <button type=\"submit\" name=\"submit\" required=\"required\">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit. </p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i>010-020-0340</li>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@company.com</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>     
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"heading-section\">
\t\t\t\t<h2>Find Us On Map</h2>
                <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div id=\"googleMap\" style=\"height:420px;\"></div>
\t\t\t</div>
\t\t</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/pages/samples/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 73,  59 => 20,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-content\">
                    <h2>Contact Us</h2>
                    <span>Home / <a href=\"{{ 'samples/contact-us'|page }}\">Contact Us</a></span>
                </div>
             </div>
        </div>
    </div>
</div>

<div id=\"product-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Feel free to send a message</h2>
                    <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
                </div>
            </div>
    </div>
    <div id=\"contact-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"product-item col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">  
                            <div class=\"message-form\">
                                <form role=\"form\" action=\"#\" method=\"post\" class=\"send-message\">
                                    <div class=\"row\">
                                    <div class=\"name col-md-4\">
                                        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"email col-md-4\">
                                        <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\" class=\"form-control\" required=\"required\">
                                    </div>
                                    <div class=\"subject col-md-4\">
                                        <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\">
                                    </div>
                                    </div>
                                    <div class=\"row\">        
                                    <div class=\"text col-md-12\">
                                        <textarea name=\"text\" placeholder=\"Message\" class=\"form-control\" required=\"required\"></textarea>
                                    </div>   
                                    </div>                              
                                    <div class=\"send\">
                                        <button type=\"submit\" name=\"submit\" required=\"required\">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit. </p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i>010-020-0340</li>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@company.com</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>     
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"heading-section\">
\t\t\t\t<h2>Find Us On Map</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div id=\"googleMap\" style=\"height:420px;\"></div>
\t\t\t</div>
\t\t</div>
    </div>
</div>", "/websicues/themes/jtherczeg-grill/pages/samples/contact-us.htm", "");
    }
}
