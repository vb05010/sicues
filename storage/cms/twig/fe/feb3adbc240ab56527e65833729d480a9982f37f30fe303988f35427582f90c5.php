<?php

/* /websicues/themes/sicues/pages/404.htm */
class __TwigTemplate_21c2bac5c6486b3320e1c0a1ce14ab0dd0e1294e1411c98b24708470250896c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
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
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"error\" class=\"container text-center\">
        <h1>404, Página no funciona</h1>
        <p>La página que quieres ver tiene un error.</p>
        <a class=\"btn btn-primary\" href=\"{{ 'home'|page }}\">REGRESA A LA PAGINA PRINCIPAL</a>
    </section><!--/#error-->", "/websicues/themes/sicues/pages/404.htm", "");
    }
}
