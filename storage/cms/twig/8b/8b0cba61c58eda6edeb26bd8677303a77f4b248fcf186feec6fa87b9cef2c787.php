<?php

/* /websicues/themes/rainlab-relax/content/static-pages/chairs-deck-chairs.htm */
class __TwigTemplate_9712fd67b9e2119aecde7ad814895a719a57fd3eccdde05f70db52db5175c336 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('sidebarSection'        );
        // line 2
        echo "<h3>​History and usage</h3><p>In Northern Europe, the remains of folding chairs have been found dating back to the Bronze Age. Foldable chairs were also used in Ancient Egypt, Greece and Rome. During the Middle Ages, the folding chair was widely used as a liturgical furniture piece.</p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/content/static-pages/chairs-deck-chairs.htm";
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put sidebarSection %}
<h3>​History and usage</h3><p>In Northern Europe, the remains of folding chairs have been found dating back to the Bronze Age. Foldable chairs were also used in Ancient Egypt, Greece and Rome. During the Middle Ages, the folding chair was widely used as a liturgical furniture piece.</p>
{% endput %}", "/websicues/themes/rainlab-relax/content/static-pages/chairs-deck-chairs.htm", "");
    }
}
