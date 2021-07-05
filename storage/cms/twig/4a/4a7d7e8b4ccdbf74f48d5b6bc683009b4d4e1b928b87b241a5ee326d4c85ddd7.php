<?php

/* /websicues/themes/rainlab-relax/content/static-pages/index.htm */
class __TwigTemplate_fe9dbc6b00d84c0afc3eb11fe95b4386f576d8db53db8c2d550421b8eccc9df3 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('news'        );
        // line 2
        echo "<h3>Latest news</h3>
<figure data-snippet=\"news\"></figure>
<p><a href=\"blog\">View all news and announcements</a></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('login'        );
        // line 8
        echo "<h3>Customer Sign in</h3>
<p>Sign in to view prices and instructions.</p>
<figure data-snippet=\"login-module\"></figure>
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/content/static-pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  37 => 8,  35 => 7,  32 => 6,  30 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put news %}
<h3>Latest news</h3>
<figure data-snippet=\"news\"></figure>
<p><a href=\"blog\">View all news and announcements</a></p>
{% endput %}

{% put login %}
<h3>Customer Sign in</h3>
<p>Sign in to view prices and instructions.</p>
<figure data-snippet=\"login-module\"></figure>
{% endput %}", "/websicues/themes/rainlab-relax/content/static-pages/index.htm", "");
    }
}
