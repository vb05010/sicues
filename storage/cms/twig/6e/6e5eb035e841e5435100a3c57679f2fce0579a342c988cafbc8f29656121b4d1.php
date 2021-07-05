<?php

/* /websicues/themes/sicues/partials/accordion.htm */
class __TwigTemplate_6809d098362ab6a9756b482982e911ff0f06f4add9e60a1dfa154392045ecb61 extends Twig_Template
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
        echo "<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>Popularizando la Ciencia</h2>
                        <div class=\"video-responsive\">
                       <iframe width=\"300\" height=\"410\" src=\"https://www.youtube.com/embed/videoseries?list=PL09RA5tZK7yoV2oGyUIdI7olM3R37cfuk\" frameborder=\"0\" allowfullscreen></iframe>
                       </div>
                        
                        </div><!--/#accordion1-->
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/partials/accordion.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-sm-6 wow fadeInDown\">
                    <div class=\"accordion\">
                        <h2>Popularizando la Ciencia</h2>
                        <div class=\"video-responsive\">
                       <iframe width=\"300\" height=\"410\" src=\"https://www.youtube.com/embed/videoseries?list=PL09RA5tZK7yoV2oGyUIdI7olM3R37cfuk\" frameborder=\"0\" allowfullscreen></iframe>
                       </div>
                        
                        </div><!--/#accordion1-->
                    </div>
                </div>", "/websicues/themes/sicues/partials/accordion.htm", "");
    }
}
