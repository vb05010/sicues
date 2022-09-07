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

/* /websicues/themes/vojtasvoboda-vega/pages/samples/blog-detail-with-sidebar.htm */
class __TwigTemplate_f1922e675f95aa7899a946d97a1cf449c702e6e5c0d263a30661581313668afe extends \Twig\Template
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
        <h1 class=\"block-title wow zoomIn\">Built-in multiple color schemes</h1>
    </div>
</div>

<div class=\"section post-content bg-white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-9\">
                <div class=\"clearfix post type-post status-publish format-standard has-post-thumbnail hentry category-sample-posts category-uncategorized\">

                    <!-- Post Title -->
                    <h3 class=\"entry-title\">Built-in multiple color schemes</h3>
                    <!-- /Post Title -->

                    <!-- Post Meta -->
                    <div class=\"entry-meta\">
                        Posted: Feb 16, 2016<span class=\"sep\">/</span>Under: <a href=\"#\" rel=\"category tag\">Sample Posts</a>, <a href=\"#\" rel=\"category tag\">Uncategorized</a><span class=\"sep\">/</span>By: admin
                    </div>
                    <!-- /Post Meta -->

                    <!-- Post Tags -->
                    <div class=\"entry-tags\">
                        <p></p>
                    </div>
                    <!-- /Post Tags -->

                    <!-- Post Image -->
                    <div class=\"entry-image\">
                        <img width=\"800\" height=\"533\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/samples/golden-gate-bridge.jpg");
        echo "\" class=\"attachment-full size-full wp-post-image\" alt=\"Built-in multiple color schemes\" />
                    </div>
                    <!-- /Post Image -->

                    <!-- Post Content -->
                    <div class=\"entry-content\">
                        <p>Vivamus interdum leo lectus, id rhoncus leo luctus lobortis. Proin venenatis massa nisi, elementum luctus risus viverra et. Integer lacinia eros massa, id aliquam metus sagittis sed. Ut in aliquet diam. Praesent tristique magna vulputate malesuada elementum. Fusce molestie ante elit, euismod tincidunt nisl mattis eu. Etiam vitae metus sagittis, lobortis lorem et, dapibus dui. Sed id arcu et nunc efficitur semper. Ut placerat nisi ac justo cursus, non lacinia metus posuere. Curabitur aliquam sagittis velit eget scelerisque. In ultrices ante ante, quis dictum magna pretium eget. Curabitur rutrum dapibus dui a accumsan. Phasellus ornare auctor commodo. Quisque vulputate turpis et auctor fermentum.</p>
                        <p>Vivamus interdum leo lectus, id rhoncus leo luctus lobortis. Proin venenatis massa nisi, elementum luctus risus viverra et. Integer lacinia eros massa, id aliquam metus sagittis sed. Ut in aliquet diam. Praesent tristique magna vulputate malesuada elementum. Fusce molestie ante elit, euismod tincidunt nisl mattis eu. Etiam vitae metus sagittis, lobortis lorem et, dapibus dui. Sed id arcu et nunc efficitur semper. Ut placerat nisi ac justo cursus, non lacinia metus posuere. Curabitur aliquam sagittis velit eget scelerisque. In ultrices ante ante, quis dictum magna pretium eget. Curabitur rutrum dapibus dui a accumsan. Phasellus ornare auctor commodo. Quisque vulputate turpis et auctor fermentum.</p>
                        <p>Vivamus interdum leo lectus, id rhoncus leo luctus lobortis. Proin venenatis massa nisi, elementum luctus risus viverra et. Integer lacinia eros massa, id aliquam metus sagittis sed. Ut in aliquet diam. Praesent tristique magna vulputate malesuada elementum. Fusce molestie ante elit, euismod tincidunt nisl mattis eu. Etiam vitae metus sagittis, lobortis lorem et, dapibus dui. Sed id arcu et nunc efficitur semper. Ut placerat nisi ac justo cursus, non lacinia metus posuere. Curabitur aliquam sagittis velit eget scelerisque. In ultrices ante ante, quis dictum magna pretium eget. Curabitur rutrum dapibus dui a accumsan. Phasellus ornare auctor commodo. Quisque vulputate turpis et auctor fermentum.</p>
                    </div>
                    <!-- /Post Content -->

                </div>

                <div class=\"comments-area\">
                    <!-- If comments are open, but there are no comments. -->
                    <div id=\"respond\" class=\"comment-respond\">
                        <h3 id=\"reply-title\" class=\"comment-reply-title\">Leave a Reply <small><a rel=\"nofollow\" id=\"cancel-comment-reply-link\" href=\"#\" style=\"display:none;\">Cancel reply</a></small></h3>
                        <form action=\"#\" method=\"post\" id=\"commentform\" class=\"comment-form\">
                            <p class=\"comment-notes\"><span id=\"email-notes\">Your email address will not be published.</span> Required fields are marked <span class=\"required\">*</span></p><p class=\"comment-form-author\"><label for=\"author\">Name <span class=\"required\">*</span></label> <input id=\"author\" name=\"author\" type=\"text\" value=\"\" size=\"30\" maxlength=\"245\" aria-required='true' required='required' /></p>
                            <p class=\"comment-form-email\"><label for=\"email\">Email <span class=\"required\">*</span></label> <input id=\"email\" name=\"email\" type=\"text\" value=\"\" size=\"30\" maxlength=\"100\" aria-describedby=\"email-notes\" aria-required='true' required='required' /></p>
                            <p class=\"comment-form-url\"><label for=\"url\">Website</label> <input id=\"url\" name=\"url\" type=\"text\" value=\"\" size=\"30\" maxlength=\"200\" /></p>
                            <p class=\"comment-form-comment\"><label for=\"comment\">Comment</label> <textarea id=\"comment\" name=\"comment\" cols=\"45\" rows=\"8\" maxlength=\"65525\" aria-required=\"true\" required=\"required\"></textarea></p><p class=\"form-submit\"><input name=\"submit\" type=\"submit\" id=\"submit\" class=\"submit\" value=\"Post Comment\" /> <input type='hidden' name='comment_post_ID' value='290' id='comment_post_ID' /><input type='hidden' name='comment_parent' id='comment_parent' value='0' /></p>
                            <p class=\"comment-subscription-form\"><input type=\"checkbox\" name=\"subscribe_comments\" id=\"subscribe_comments\" value=\"subscribe\" style=\"width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;\" /> <label class=\"subscribe-label\" id=\"subscribe-label\" for=\"subscribe_comments\">Notify me of follow-up comments by email.</label></p>
                            <p class=\"comment-subscription-form\"><input type=\"checkbox\" name=\"subscribe_blog\" id=\"subscribe_blog\" value=\"subscribe\" style=\"width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;\" /> <label class=\"subscribe-label\" id=\"subscribe-blog-label\" for=\"subscribe_blog\">Notify me of new posts by email.</label></p>
                        </form>
                    </div><!-- #respond -->
                </div>
            </div>

            <div class=\"col-md-3 sidebar\">
                ";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/vojtasvoboda-vega/pages/samples/blog-detail-with-sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 63,  107 => 62,  73 => 31,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/websicues/themes/vojtasvoboda-vega/pages/samples/blog-detail-with-sidebar.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 62);
        static $filters = array("theme" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['theme'],
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
