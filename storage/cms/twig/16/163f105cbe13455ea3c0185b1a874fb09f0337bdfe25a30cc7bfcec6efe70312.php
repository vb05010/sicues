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

/* /websicues/themes/radiantweb-travu/partials/sidebar.htm */
class __TwigTemplate_21e8d14a935fe343fb663a55bf924ee166cdff25bf73a8f30816d35c7d7c322c extends \Twig\Template
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
        echo "<div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
                    </div>
                </div>
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/1.jpg");
        echo "\" alt=\"\"></p>
                    </div>
                </div>
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/2.jpg");
        echo "\" alt=\"\"></p>
                        <p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
                    </div>
                </div>
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p><img src=\"{{ 'assets/images/1.jpg'|theme }}\" alt=\"\"></p>
                    </div>
                </div>
                <div class=\"row widget\">
                    <div class=\"col-xs-12\">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p><img src=\"{{ 'assets/images/2.jpg'|theme }}\" alt=\"\"></p>
                        <p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
                    </div>
                </div>", "/websicues/themes/radiantweb-travu/partials/sidebar.htm", "");
    }
}
