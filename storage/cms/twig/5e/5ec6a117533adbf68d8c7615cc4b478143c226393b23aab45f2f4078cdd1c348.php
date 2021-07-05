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
class __TwigTemplate_3e09e1a36a0df65f4d98319364e1d129fdd5a7369c1f031b41c5b71d968f749e extends \Twig\Template
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
        return array (  40 => 4,  35 => 1,);
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
