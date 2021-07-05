<?php

/* /websicues/themes/rainlab-relax/content/static-pages/chairs-sofas.htm */
class __TwigTemplate_12e96b13bc57a4f549b41e13cb3949a088dcb39fb382b5840d19103506c2d965 extends Twig_Template
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
        echo "<h3>Couches</h3><p><span>Other term</span><span>s which can be synonymous with the above definition are settee, chesterfield, divan, davenport, lounge, and canapé.&nbsp;</span></p><ul><li><span>The word sofa is from Turkish</span></li><li><span>Derived from the Arabic word suffa for \"wool\"</span></li><li><span>Originating in the Aramaic word sippa for \"mat\"</span></li></ul><p><span>T</span><span>he word settee comes from the Old English word, \"setl\", which was used to describe long benches with high backs and arms, but is now generally used to describe upholstered seating.</span></p><p><br></p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/content/static-pages/chairs-sofas.htm";
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put sidebarSection %}
<h3>Couches</h3><p><span>Other term</span><span>s which can be synonymous with the above definition are settee, chesterfield, divan, davenport, lounge, and canapé.&nbsp;</span></p><ul><li><span>The word sofa is from Turkish</span></li><li><span>Derived from the Arabic word suffa for \"wool\"</span></li><li><span>Originating in the Aramaic word sippa for \"mat\"</span></li></ul><p><span>T</span><span>he word settee comes from the Old English word, \"setl\", which was used to describe long benches with high backs and arms, but is now generally used to describe upholstered seating.</span></p><p><br></p>
{% endput %}", "/websicues/themes/rainlab-relax/content/static-pages/chairs-sofas.htm", "");
    }
}
