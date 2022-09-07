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

/* /websicues/themes/vojtasvoboda-vega/partials/modules/cicues.htm */
class __TwigTemplate_98c304c08d97a20ffb5b78ca6ee06633cec141a3fea8b46441583fb2792e93a7 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<p><img class=\"img-responsive\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/about-img.jpg");
        echo "\" alt=\"\" /></p>
        <p>&nbsp;</p>
                <h3 class=\"widget-title\"> Sobre el CIC UES </h3>
 <div class=\"vertical-menu\">
  <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/miembros-cei.htm");
        echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> Miembros del CEI UES</a>
  <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/funciones-cicues.htm");
        echo "\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> Funciones del CIC UES</a>
  <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/reglamento-cicues.htm");
        echo "\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i> Reglamento del CIC UES</a>
  <!-- <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sicues/seguimiento-proyectos.htm");
        echo "\"><i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i> Seguimiento de Proyectos de Investigación</a> -->
  <!-- <a href=\"#\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> Publicaciones Científicas</a> -->
</div>

<style>
\t.vertical-menu {
  width: 443px; /* Set a width if you like */
}

.vertical-menu a {
  background-color: #eee; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.vertical-menu a:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

.vertical-menu a.active {
  background-color: #a00; /* Add a green color to the \"active/current\" link */
  color: white;
}
</style>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/modules/cicues.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  55 => 7,  51 => 6,  47 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/partials/modules/cicues.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 1, "page" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
