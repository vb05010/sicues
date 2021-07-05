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

/* /websicues/themes/al3xtig3r-bootstart/pages/index.htm */
class __TwigTemplate_4ca0184fb13427700f1c84732ac4edfb27fa076db9e5c0814978899aa180fcf6 extends \Twig\Template
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
        echo "<section id=\"index-main\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col d-flex align-items-center justify-content-center\">
                <div class=\"jumbotron\">
                    <h1 class=\"display-4\">
                        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["index.title"]);
        echo "
                    </h1>
                    <p class=\"lead text-secondary\">
                        ";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["index.text"]);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/al3xtig3r-bootstart/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"index-main\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col d-flex align-items-center justify-content-center\">
                <div class=\"jumbotron\">
                    <h1 class=\"display-4\">
                        {{ 'index.title'|_ }}
                    </h1>
                    <p class=\"lead text-secondary\">
                        {{ 'index.text'|_ }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>", "/websicues/themes/al3xtig3r-bootstart/pages/index.htm", "");
    }
}
