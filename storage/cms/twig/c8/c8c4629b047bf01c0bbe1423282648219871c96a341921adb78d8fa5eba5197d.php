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

/* /websicues/themes/radiantweb-travu/pages/blog/blog.htm */
class __TwigTemplate_e66702637f5081869f3e053cdc96a9be4233c9eaed38d808928402a5494c5847 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
            <li class=\"active\">Blog</li>
        </ol>

        <!-- Article main content -->
        <article class=\"col-sm-8\">
            <ul class=\"blog-post-list\">
                <li>
                    <h3><a href=\"#\">A New Post To See</a></h3>

                    <p class=\"info\">
                        Posted in <a href=\"#\">Uncategorized</a> on Jun 08, 2014 by admin 
                    </p>

                    <p><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blogphoto.png");
        echo "\" alt=\"blog_post_1\" width=\"100%\" /></p>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        <br />
                        <a href=\"#\" class=\"btn primary\">&raquo; Read More</a>
                    </p>
                    <p class=\"info\">
                        Tags: <a href=\"#\">see</a>,<a href=\"#\">tags</a>,<a href=\"/blog/tag/test/\">test</a>
                    </p>
                    <hr />
                </li>
            </ul>
            <div id=\"problog_feed\">
                <a href=\"#\" target=\"_blank\"><span class=\"rss_image\"></span> Get RSS Feed</a>
            </div>
        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class=\"col-sm-4 sidebar sidebar-right\">
            <div class=\"well\">
                <h4>Blog Search</h4>
                <div class=\"input-group\">
                    <input type=\"text\" name=\"keyword\" class=\"form-control\" id=\"keyword\" value=\"\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default search_now\" type=\"button\">
                            <span class=\"glyphicon glyphicon-search\"></span>
                        </button>
                    </span>
                </div>
            <!-- /input-group -->
            </div>

            <div class=\"well\">
                <h3>Categories</h3>
                <ul class=\"category-list\">
                    <li >
                        <a href=\"#\">Uncategorized</a> 
                        <span class=\"badge\">2</span>
                    </li>
                </ul>  

                <h3>Tags</h3>
                <ul class=\"tag-list\">
                    <li >
                        <a href=\"#\">see</a> 
                        <span class=\"badge\">2</span>
                    </li>
                    <li >
                        <a href=\"#\">tags</a> 
                        <span class=\"badge\">2</span>
                    </li>
                    <li >
                        <a href=\"#\">test</a> 
                        <span class=\"badge\">2</span>
                    </li>
                </ul>            
                
                <h3>Archive</h3>
                <ul class=\"category-list\">
                    <li class=\"year\">2014</li>
                        <ul class=\"year_list\" >
                            <li class=\"month\">06</li>
                                <ul class=\"month_list\">
                                    <li>
                                        <a href=\"#\">&raquo; &nbsp;A New Post To See</a> 
                                    </li>


                                    <li>
                                        <a href=\"#\">&raquo; &nbsp;A New Post To See</a> 
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- /Sidebar -->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/pages/blog/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ol class=\"breadcrumb\">
            <li><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li class=\"active\">Blog</li>
        </ol>

        <!-- Article main content -->
        <article class=\"col-sm-8\">
            <ul class=\"blog-post-list\">
                <li>
                    <h3><a href=\"#\">A New Post To See</a></h3>

                    <p class=\"info\">
                        Posted in <a href=\"#\">Uncategorized</a> on Jun 08, 2014 by admin 
                    </p>

                    <p><img src=\"{{ 'assets/images/blogphoto.png'|theme }}\" alt=\"blog_post_1\" width=\"100%\" /></p>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        <br />
                        <a href=\"#\" class=\"btn primary\">&raquo; Read More</a>
                    </p>
                    <p class=\"info\">
                        Tags: <a href=\"#\">see</a>,<a href=\"#\">tags</a>,<a href=\"/blog/tag/test/\">test</a>
                    </p>
                    <hr />
                </li>
            </ul>
            <div id=\"problog_feed\">
                <a href=\"#\" target=\"_blank\"><span class=\"rss_image\"></span> Get RSS Feed</a>
            </div>
        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class=\"col-sm-4 sidebar sidebar-right\">
            <div class=\"well\">
                <h4>Blog Search</h4>
                <div class=\"input-group\">
                    <input type=\"text\" name=\"keyword\" class=\"form-control\" id=\"keyword\" value=\"\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default search_now\" type=\"button\">
                            <span class=\"glyphicon glyphicon-search\"></span>
                        </button>
                    </span>
                </div>
            <!-- /input-group -->
            </div>

            <div class=\"well\">
                <h3>Categories</h3>
                <ul class=\"category-list\">
                    <li >
                        <a href=\"#\">Uncategorized</a> 
                        <span class=\"badge\">2</span>
                    </li>
                </ul>  

                <h3>Tags</h3>
                <ul class=\"tag-list\">
                    <li >
                        <a href=\"#\">see</a> 
                        <span class=\"badge\">2</span>
                    </li>
                    <li >
                        <a href=\"#\">tags</a> 
                        <span class=\"badge\">2</span>
                    </li>
                    <li >
                        <a href=\"#\">test</a> 
                        <span class=\"badge\">2</span>
                    </li>
                </ul>            
                
                <h3>Archive</h3>
                <ul class=\"category-list\">
                    <li class=\"year\">2014</li>
                        <ul class=\"year_list\" >
                            <li class=\"month\">06</li>
                                <ul class=\"month_list\">
                                    <li>
                                        <a href=\"#\">&raquo; &nbsp;A New Post To See</a> 
                                    </li>


                                    <li>
                                        <a href=\"#\">&raquo; &nbsp;A New Post To See</a> 
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- /Sidebar -->", "/websicues/themes/radiantweb-travu/pages/blog/blog.htm", "");
    }
}
