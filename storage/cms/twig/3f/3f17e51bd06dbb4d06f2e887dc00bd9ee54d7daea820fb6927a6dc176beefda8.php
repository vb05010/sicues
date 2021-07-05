<?php

/* /websicues/themes/dannyvantol-blight/pages/post/listing.htm */
class __TwigTemplate_50b825acf5bc8c24473b83fe9927f12f91f71c7650a417b1fe08718803661c06 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"page-header\">
        <h2>Recent posts</h2>
    </div>

    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("post/item"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("post/item"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("post/item"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("post/item"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("post/item"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/dannyvantol-blight/pages/post/listing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  49 => 10,  44 => 9,  39 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"page-header\">
        <h2>Recent posts</h2>
    </div>

    {% partial 'post/item' %}
    {% partial 'post/item' %}
    {% partial 'post/item' %}
    {% partial 'post/item' %}
    {% partial 'post/item' %}
</div>", "/websicues/themes/dannyvantol-blight/pages/post/listing.htm", "");
    }
}
