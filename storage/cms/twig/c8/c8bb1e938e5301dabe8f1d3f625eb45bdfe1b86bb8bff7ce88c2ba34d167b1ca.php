<?php

/* /websicues/themes/rainlab-relax/pages/contact.htm */
class __TwigTemplate_086cdabdbafa238f766925323a36d04bdc036216314bcbfcfa95f5cc726473a3 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/page"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "
        <div class=\"module-contact well\">
            ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "        </div>
    </div>
    <div class=\"col-md-8\">
        <div id=\"partialContactForm\">
            ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact/form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  45 => 11,  39 => 7,  35 => 6,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-4\">
        {% content 'contact/page' %}

        <div class=\"module-contact well\">
            {% content 'contact/details' %}
        </div>
    </div>
    <div class=\"col-md-8\">
        <div id=\"partialContactForm\">
            {% partial 'contact/form' %}
        </div>
    </div>
</div>", "/websicues/themes/rainlab-relax/pages/contact.htm", "");
    }
}
