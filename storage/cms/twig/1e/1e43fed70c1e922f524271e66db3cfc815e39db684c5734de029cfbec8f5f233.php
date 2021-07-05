<?php

/* /websicues/themes/dannyvantol-blight/pages/home.htm */
class __TwigTemplate_f01dc2a5ae26becf6f09319a2a70e692deda39413a8d642f365fce0e8d7bd08d extends Twig_Template
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
        echo "<div class=\"illustration\" ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "illustration_image", array()))) {
            // line 2
            echo "     style=\"background-image: url('";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "illustration_image", array()));
            echo "')\" ";
        }
        echo ">
    <div class=\"illustration-overlay\">
        <div class=\"container\">
            <div class=\"illustration-content\">
                ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "            </div>
        </div>
    </div>
</div>

<div class=\"container p-t-md p-b-lg\">
    <div class=\"page-header\">
        ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable3"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "        </div>

        <div class=\"col-md-4\">
            ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable4"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "        </div>

        <div class=\"col-md-4\">
            ";
        // line 27
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable5"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "        </div>
    </div>
</div>


<div class=\"theme-color p-t-md p-b-lg\">
    <div class=\"container\">
        <div class=\"page-header\">
            ";
        // line 36
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable6"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "        </div>

        ";
        // line 39
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable7"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 40
        echo "    </div>
</div>

<div class=\"container p-t-md\">
    <div class=\"page-header\">
        ";
        // line 45
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable8"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 46
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 50
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable9"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 51
        echo "        </div>

        <div class=\"col-md-6\">
            ";
        // line 54
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable10"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 55
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 60
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable11"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 61
        echo "        </div>

        <div class=\"col-md-6\">
            ";
        // line 64
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editable12"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 65
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/dannyvantol-blight/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 65,  149 => 64,  144 => 61,  140 => 60,  133 => 55,  129 => 54,  124 => 51,  120 => 50,  114 => 46,  110 => 45,  103 => 40,  99 => 39,  95 => 37,  91 => 36,  81 => 28,  77 => 27,  72 => 24,  68 => 23,  63 => 20,  59 => 19,  53 => 15,  49 => 14,  40 => 7,  36 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"illustration\" {% if this.theme.illustration_image is not empty %}
     style=\"background-image: url('{{ this.theme.illustration_image|media }}')\" {% endif %}>
    <div class=\"illustration-overlay\">
        <div class=\"container\">
            <div class=\"illustration-content\">
                {% component 'editable' %}
            </div>
        </div>
    </div>
</div>

<div class=\"container p-t-md p-b-lg\">
    <div class=\"page-header\">
        {% component 'editable2' %}
    </div>

    <div class=\"row\">
        <div class=\"col-md-4\">
            {% component 'editable3' %}
        </div>

        <div class=\"col-md-4\">
            {% component 'editable4' %}
        </div>

        <div class=\"col-md-4\">
            {% component 'editable5' %}
        </div>
    </div>
</div>


<div class=\"theme-color p-t-md p-b-lg\">
    <div class=\"container\">
        <div class=\"page-header\">
            {% component 'editable6' %}
        </div>

        {% component 'editable7' %}
    </div>
</div>

<div class=\"container p-t-md\">
    <div class=\"page-header\">
        {% component 'editable8' %}
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            {% component 'editable9' %}
        </div>

        <div class=\"col-md-6\">
            {% component 'editable10' %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            {% component 'editable11' %}
        </div>

        <div class=\"col-md-6\">
            {% component 'editable12' %}
        </div>
    </div>
</div>", "/websicues/themes/dannyvantol-blight/pages/home.htm", "");
    }
}
