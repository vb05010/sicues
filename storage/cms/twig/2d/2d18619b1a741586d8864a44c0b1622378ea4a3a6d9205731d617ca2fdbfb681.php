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

/* /websicues/themes/gustavoardoino-amerip-topbuilder/pages/404.htm */
class __TwigTemplate_59eec117817e19923b49fa22f35a4141634504955bb2fcbbc18d0fa242bda686 extends \Twig\Template
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
        echo "<!-- Not Found area -->
    <section class=\"not_found_area\">
        <h2>404 PAGE NOT FOUND</h2>
        <p>This page is temporarily unavailable. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <h1>404</h1>
        <form action=\"#\" class=\"search_error\">
            <input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
            <a href=\"#\"><i class=\"fa fa-search\"></i> </a>
        </form>
    </section>
    <!-- End Not Found area -->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/gustavoardoino-amerip-topbuilder/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Not Found area -->
    <section class=\"not_found_area\">
        <h2>404 PAGE NOT FOUND</h2>
        <p>This page is temporarily unavailable. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <h1>404</h1>
        <form action=\"#\" class=\"search_error\">
            <input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
            <a href=\"#\"><i class=\"fa fa-search\"></i> </a>
        </form>
    </section>
    <!-- End Not Found area -->", "/websicues/themes/gustavoardoino-amerip-topbuilder/pages/404.htm", "");
    }
}
