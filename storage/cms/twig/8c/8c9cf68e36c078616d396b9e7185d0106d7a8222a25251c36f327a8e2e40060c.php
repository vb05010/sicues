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

/* /websicues/themes/sicues/pages/404.htm */
class __TwigTemplate_babcdd21894b3f41507e44a322ee1ceddd03b4c5eac51d534bdac1472b058089 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo "<section id=\"error\" class=\"container text-center\">
        <h1>404, Página no funciona</h1>
        <p>La página que quieres ver tiene un error.</p>
        <a class=\"btn btn-primary\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">REGRESA A LA PAGINA PRINCIPAL</a>
    </section><!--/#error-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"error\" class=\"container text-center\">
        <h1>404, Página no funciona</h1>
        <p>La página que quieres ver tiene un error.</p>
        <a class=\"btn btn-primary\" href=\"{{ 'home'|page }}\">REGRESA A LA PAGINA PRINCIPAL</a>
    </section><!--/#error-->", "/websicues/themes/sicues/pages/404.htm", "");
    }
}
