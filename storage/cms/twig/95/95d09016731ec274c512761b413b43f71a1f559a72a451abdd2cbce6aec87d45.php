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

/* /websicues/themes/vojtasvoboda-vega/pages/samples/blog-listing-normal.htm */
class __TwigTemplate_9c1dff87ca8fb726a67dfaf4533199e6ba358a75d366519eb08ee4f8a832b568 extends \Twig\Template
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
        echo "<div class=\"jumbotron image-banner banner-custom-header\" style=\"background:url('";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/cropped-country-road-1149667_1920.jpg");
        echo "') no-repeat 0 0 #ffffff;background-size:cover;background-position:center center\">
    <div class=\"container\">
        <h1 class=\"block-title wow zoomIn\">Blog</h1>
    </div>
</div>

<div class=\"section blog-feed bg-white\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-9 blog-feed-column\">

                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            echo "                <div class=\"entry clearfix wow zoomIn post type-post status-publish format-standard has-post-thumbnail sticky hentry category-sample-posts category-uncategorized\">

                    <!-- Post Title -->
                    <h3 class=\"entry-title\">
                        <a href=\"#\">The best free multipurpose theme just got better!</a>
                    </h3>

                    <!-- Small Image Left, Excerpt Right -->
                    <div class=\"entry-image entry-image-left\">
                        <a class=\"post-thumbnail post-thumbnail-small\" href=\"#\">
                            <img width=\"1200\" height=\"676\" src=\"";
            // line 24
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/girl-1031772_1920-1-300x250.jpg");
            echo "\" class=\"attachment-full size-full wp-post-image\" alt=\"The best free multipurpose theme just got better!\" />
                        </a>
                    </div>

                    <div class=\"entry-content-right\">
                        <p>Duis tempus condimentum cursus. Proin posuere et dui nec posuere. Ut tempus odio sit amet ligula bibendum egestas. Ut imperdiet mi id elit fermentum aliquet. Sed vitae eros a mi pulvinar blandit. Fusce at hendrerit dolor, et hendrerit arcu.</p>
                    </div>
                    <!-- /Small Image Left, Excerpt Right -->

                    <!-- Post Meta -->
                    <div class=\"entry-meta  entry-meta-right \">
                        Posted: Feb 16, 2016<br />Under: <a href=\"#\" rel=\"category tag\">Sample Posts</a>, <a href=\"#\" rel=\"category tag\">Uncategorized</a>
                    </div>
                    <!-- /Post Meta -->
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                <!-- Pagination -->
                <div class=\"posts-pagination\">
                    <div class=\"posts-pagination-block\">
                        <a href=\"#\">
                            <span class=\"ic ic-angle-left\"></span>
                        </a>
                    </div>
                </div>
                <!-- /Pagination -->

            </div>

            <div class=\"col-md-3 sidebar\">
                ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/samples/blog-listing-normal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 55,  109 => 54,  93 => 40,  71 => 24,  59 => 14,  55 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/samples/blog-listing-normal.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 13, "partial" => 54);
        static $filters = array("theme" => 1);
        static $functions = array("range" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'partial'],
                ['theme'],
                ['range']
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
