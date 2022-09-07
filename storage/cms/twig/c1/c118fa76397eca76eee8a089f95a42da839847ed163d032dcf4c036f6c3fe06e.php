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

/* /websicues/themes/vojtasvoboda-vega/partials/modules/footer.htm */
class __TwigTemplate_5a28b92e4ce1313b38ec0d36d64985c98e95fb049cbef6bfea8f8b2668c2b35c extends \Twig\Template
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
        echo "<div class=\"footer-widgets bg-footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Col 1 -->
            <div class=\"col-md-4 footer-widget footer-widget-col-1 wow\">
                <div id=\"text-2\" class=\"widget widget_text\">
                    <h3 class=\"widget-title\">Universidad de El Salvador</h3>
                    <div class=\"textwidget\">
                        ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("footer/about.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                        <br /><br />
                       <a href=\"https://www.facebook.com/sic.ues.sv\" target= \"_blank\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"https://twitter.com/sicues_sv\" target=\"_blank\" class=\"btn btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></a>                        
                        <a href=\"https://www.instagram.com/sic.ues.sv\" target=\"_blank\" class=\"btn btn-social-icon btn-flickr\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"https://www.youtube.com/c/SICUES\" target=\"_blank\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-youtube\"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 1 -->

            <!-- Footer Col 2 -->
            <!-- <div class=\"col-md-3 footer-widget footer-widget-col-2 wow\">
                <div id=\"categories-3\" class=\"widget widget_categories\">
                    <h3 class=\"widget-title\">Categories</h3>
                    <ul>
                        <li class=\"cat-item cat-item-6\"><a href=\"#\">Sample Posts</a></li>
                        <li class=\"cat-item cat-item-1\"><a href=\"#\">Uncategorized</a></li>
                    </ul>
                </div>
            </div> -->
            <!-- /Footer Col 2 -->

            <!-- Footer Col 3 -->
            <div class=\"col-md-4 footer-widget footer-widget-col-4 wow\">
                <div id=\"text-3\" class=\"widget widget_text\">
                    <h3 class=\"widget-title\">SIC UES</h3>
                    <div class=\"textwidget\">
                        <ul class=\"icon-list\">
                            <li><i class=\"fa fa-home\"></i>1er. Nivel, Edificio de CENSALUD,<br /> Universidad de El Salvador.</li>
                            <li><i class=\"fa fa-headphones\"></i>(503) 2225-8434</li>
                            <li><i class=\"fa fa-paper-plane\"></i>sic@ues.edu.sv</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 3 -->

            <!-- Footer Col 4 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-4 wow\">
                <div id=\"facebook-likebox-1\" class=\"widget widget_facebook_likebox\">
                    <h3 class=\"widget-title\">
                        <a href=\"https://www.facebook.com/sic.ues.sv\">Síganos</a>
                    </h3>
                    <div id=\"fb-root\"></div>
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/sic.ues.sv\" data-width=\"340\" data-height=\"130\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"false\">
                        <div class=\"fb-xfbml-parse-ignore\">
                            <blockquote cite=\"https://www.facebook.com/sic.ues.sv\">
                                <a href=\"https://www.facebook.com/sic.ues.sv\">Like Us</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 4 -->

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/partials/modules/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-widgets bg-footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Col 1 -->
            <div class=\"col-md-4 footer-widget footer-widget-col-1 wow\">
                <div id=\"text-2\" class=\"widget widget_text\">
                    <h3 class=\"widget-title\">Universidad de El Salvador</h3>
                    <div class=\"textwidget\">
                        {% content 'footer/about.txt' %}
                        <br /><br />
                       <a href=\"https://www.facebook.com/sic.ues.sv\" target= \"_blank\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"https://twitter.com/sicues_sv\" target=\"_blank\" class=\"btn btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></a>                        
                        <a href=\"https://www.instagram.com/sic.ues.sv\" target=\"_blank\" class=\"btn btn-social-icon btn-flickr\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"https://www.youtube.com/c/SICUES\" target=\"_blank\" class=\"btn btn-social-icon btn-google\"><i class=\"fa fa-youtube\"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 1 -->

            <!-- Footer Col 2 -->
            <!-- <div class=\"col-md-3 footer-widget footer-widget-col-2 wow\">
                <div id=\"categories-3\" class=\"widget widget_categories\">
                    <h3 class=\"widget-title\">Categories</h3>
                    <ul>
                        <li class=\"cat-item cat-item-6\"><a href=\"#\">Sample Posts</a></li>
                        <li class=\"cat-item cat-item-1\"><a href=\"#\">Uncategorized</a></li>
                    </ul>
                </div>
            </div> -->
            <!-- /Footer Col 2 -->

            <!-- Footer Col 3 -->
            <div class=\"col-md-4 footer-widget footer-widget-col-4 wow\">
                <div id=\"text-3\" class=\"widget widget_text\">
                    <h3 class=\"widget-title\">SIC UES</h3>
                    <div class=\"textwidget\">
                        <ul class=\"icon-list\">
                            <li><i class=\"fa fa-home\"></i>1er. Nivel, Edificio de CENSALUD,<br /> Universidad de El Salvador.</li>
                            <li><i class=\"fa fa-headphones\"></i>(503) 2225-8434</li>
                            <li><i class=\"fa fa-paper-plane\"></i>sic@ues.edu.sv</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 3 -->

            <!-- Footer Col 4 -->
            <div class=\"col-md-3 footer-widget footer-widget-col-4 wow\">
                <div id=\"facebook-likebox-1\" class=\"widget widget_facebook_likebox\">
                    <h3 class=\"widget-title\">
                        <a href=\"https://www.facebook.com/sic.ues.sv\">Síganos</a>
                    </h3>
                    <div id=\"fb-root\"></div>
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/sic.ues.sv\" data-width=\"340\" data-height=\"130\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"false\">
                        <div class=\"fb-xfbml-parse-ignore\">
                            <blockquote cite=\"https://www.facebook.com/sic.ues.sv\">
                                <a href=\"https://www.facebook.com/sic.ues.sv\">Like Us</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Col 4 -->

        </div>
    </div>
</div>", "/websicues/themes/vojtasvoboda-vega/partials/modules/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 10);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                [],
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
