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

/* /websicues/themes/al3xtig3r-bootstart/partials/theme/header.htm */
class __TwigTemplate_c82761ccd1e1297d386ddd1565ae4d3dbe1f6ba5f1733c8806c91e0cde9a0089 extends \Twig\Template
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
        echo "<div class=\"container-fluid bg-light\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">
                <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/theme/icon.png");
        echo "\" class=\"d-inline-block align-top img-fluid\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.brand"]);
        echo "\">
                ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.brand"]);
        echo "
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.toggler.toggle"]);
        echo "\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.home"]);
        echo " <span class=\"sr-only\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.current"]);
        echo "</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.link"]);
        echo "</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.dropdown"]);
        echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.dropdown.action"]);
        echo "</a>
                            <a class=\"dropdown-item\" href=\"#\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.dropdown.another"]);
        echo "</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.dropdown.somethingelse"]);
        echo "</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.disabled"]);
        echo "</a>
                    </li>
                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.search"]);
        echo "\" aria-label=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.search"]);
        echo "\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.header.nav.search"]);
        echo "</button>
                </form>
            </div>
        </nav>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/al3xtig3r-bootstart/partials/theme/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  111 => 36,  104 => 32,  97 => 28,  92 => 26,  88 => 25,  82 => 22,  75 => 18,  65 => 15,  55 => 8,  50 => 6,  44 => 5,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-light\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
            <a class=\"navbar-brand\" href=\"{{ 'index'|page }}\">
                <img src=\"{{ 'assets/images/theme/icon.png'|theme }}\" class=\"d-inline-block align-top img-fluid\" alt=\"{{ 'layout.header.brand'|_ }}\">
                {{ 'layout.header.brand'|_ }}
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"{{ 'layout.header.nav.toggler.toggle'|_ }}\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ 'index'|page }}\">{{ 'layout.header.nav.home'|_ }} <span class=\"sr-only\">{{ 'layout.header.nav.current'|_ }}</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">{{ 'layout.header.nav.link'|_ }}</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'layout.header.nav.dropdown'|_ }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">{{ 'layout.header.nav.dropdown.action'|_ }}</a>
                            <a class=\"dropdown-item\" href=\"#\">{{ 'layout.header.nav.dropdown.another'|_ }}</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">{{ 'layout.header.nav.dropdown.somethingelse'|_ }}</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">{{ 'layout.header.nav.disabled'|_ }}</a>
                    </li>
                </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"{{ 'layout.header.nav.search'|_ }}\" aria-label=\"{{ 'layout.header.nav.search'|_ }}\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">{{ 'layout.header.nav.search'|_ }}</button>
                </form>
            </div>
        </nav>
    </div>
</div>", "/websicues/themes/al3xtig3r-bootstart/partials/theme/header.htm", "");
    }
}
