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

/* /websicues/themes/vojtasvoboda-vega/pages/samples/blog-listing-full.htm */
class __TwigTemplate_40c64fe19becd52a2a85b3ce7b31d2f0f792a46f8ab03d19fdf48b6ae595fdab extends \Twig\Template
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
                    <h3 class=\"entry-title block-title block-title-left\">
                        <a href=\"#\">The best free multipurpose theme just got better!</a>
                    </h3>

                    <!-- Large Image Top, Full Content Below -->
                    <div class=\"entry-image entry-image-top\">
                        <a class=\"post-thumbnail post-thumbnail-large\" href=\"#\">
                            <img width=\"1200\" height=\"676\" src=\"";
            // line 24
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/girl-1031772_1920-1.jpg");
            echo "\" class=\"attachment-full size-full wp-post-image\" alt=\"The best free multipurpose theme just got better!\" />
                        </a>
                    </div>

                    <div class=\"entry-content\">
                        <p>Duis tempus condimentum cursus. Proin posuere et dui nec posuere. Ut tempus odio sit amet ligula bibendum egestas. Ut imperdiet mi id elit fermentum aliquet. Sed vitae eros a mi pulvinar blandit. Fusce at hendrerit dolor, et hendrerit arcu. Aenean rhoncus, libero at pulvinar laoreet, massa sapien tincidunt turpis, sit amet rhoncus turpis dolor ac orci. Aliquam erat volutpat. Ut ultrices odio sit amet ipsum mattis tincidunt.</p>
                        <p>Donec semper neque at nunc congue, eget auctor odio mattis. Curabitur ac sapien odio. Duis non venenatis leo, sagittis maximus leo. Nam dolor lectus, sodales a suscipit ut, tincidunt vitae lacus. Duis cursus aliquet tortor quis ultricies. Nunc accumsan dui non dolor elementum, consequat porttitor erat euismod. Donec sed lorem est. Phasellus suscipit placerat sem, nec accumsan elit aliquet ut. Nam scelerisque, sem vel sollicitudin suscipit, lorem enim iaculis odio, a malesuada dolor arcu eu tellus. Maecenas vel placerat mauris, at blandit mauris. Sed consectetur nulla ut interdum vestibulum. Mauris non ex non tortor viverra vulputate. Donec vehicula, justo id blandit ultricies, mi felis egestas tellus, quis egestas neque neque ut velit. Duis mattis gravida sem nec efficitur. Nulla malesuada arcu et turpis vulputate, vel semper metus scelerisque.</p>
                        <p>Vivamus interdum leo lectus, id rhoncus leo luctus lobortis. Proin venenatis massa nisi, elementum luctus risus viverra et. Integer lacinia eros massa, id aliquam metus sagittis sed. Ut in aliquet diam. Praesent tristique magna vulputate malesuada elementum. Fusce molestie ante elit, euismod tincidunt nisl mattis eu. Etiam vitae metus sagittis, lobortis lorem et, dapibus dui. Sed id arcu et nunc efficitur semper. Ut placerat nisi ac justo cursus, non lacinia metus posuere. Curabitur aliquam sagittis velit eget scelerisque. In ultrices ante ante, quis dictum magna pretium eget. Curabitur rutrum dapibus dui a accumsan. Phasellus ornare auctor commodo. Quisque vulputate turpis et auctor fermentum.</p>
                    </div>
                    <!-- /Large Image Top, Full Content Below -->

                    <!-- Post Meta -->
                    <div class=\"entry-meta\">
                        Posted: Feb 16, 2016<br />Under: <a href=\"#\" rel=\"category tag\">Sample Posts</a>, <a href=\"#\" rel=\"category tag\">Uncategorized</a>
                    </div>
                    <!-- /Post Meta -->
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/samples/blog-listing-full.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 57,  111 => 56,  95 => 42,  71 => 24,  59 => 14,  55 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/samples/blog-listing-full.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 13, "partial" => 56);
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
