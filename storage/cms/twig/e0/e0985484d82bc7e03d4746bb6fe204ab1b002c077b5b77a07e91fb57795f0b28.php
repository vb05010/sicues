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

/* /websicues/themes/al3xtig3r-bootstart/partials/theme/footer.htm */
class __TwigTemplate_fcb5b2c4dd8bd1dadfcd73fc93d954a07937dcfb809e3dadd06b115f1737e18a extends \Twig\Template
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
        echo "<div class=\"container-fluid bg-light text-dark py-5\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-12 order-3 col-lg-4 order-lg-1\">
                ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.footer.left", ["date" => twig_date_format_filter($this->env, "today", "Y")]]);
        echo "
                <div class=\"mt-2\">
                    ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "                </div>
            </div>
            <div class=\"col-12 order-2 col-lg-4 py-3 py-lg-0\">
                ";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("footerSignature"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "            </div>
            <div class=\"col-12 order-1 col-lg-4 order-lg-3\">
                ";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.footer.right", ["love" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "font_awesome", [], "any", false, false, false, 14)) ? ("<i class=\"fas fa-heart text-danger\"></i>") : ((("<span class=\"text-danger\"><strong>" . call_user_func_array($this->env->getFilter('_')->getCallable(), ["layout.footer.right.love"])) . "</strong></span>")))]]);
        echo "!
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/al3xtig3r-bootstart/partials/theme/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  59 => 12,  55 => 11,  50 => 8,  46 => 7,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid bg-light text-dark py-5\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-12 order-3 col-lg-4 order-lg-1\">
                {{ 'layout.footer.left'|_({ date: 'today'|date('Y') }) }}
                <div class=\"mt-2\">
                    {% component 'localePicker' %}
                </div>
            </div>
            <div class=\"col-12 order-2 col-lg-4 py-3 py-lg-0\">
                {% component 'footerSignature' %}
            </div>
            <div class=\"col-12 order-1 col-lg-4 order-lg-3\">
                {{ 'layout.footer.right'|_({ love: (this.theme.font_awesome ? '<i class=\"fas fa-heart text-danger\"></i>' : '<span class=\"text-danger\"><strong>' ~ 'layout.footer.right.love'|_ ~ '</strong></span>') }) }}!
            </div>
        </div>
    </div>
</div>", "/websicues/themes/al3xtig3r-bootstart/partials/theme/footer.htm", "");
    }
}
