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

/* /websicues/themes/jtherczeg-grill/partials/latest-blog.htm */
class __TwigTemplate_dd3211fa0ee686c963b4548c150837cd6684e39b216ac07cf06646af82e5d49b extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Latest blog posts</h2>
                <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" >
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blogpost1.jpg");
        echo "\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">Summer Sandwich</a></h4>
                        <span>29 Sep 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blogpost2.jpg");
        echo "\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">New Great Taste</a></h4>
                        <span>23 Sep 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blogpost3.jpg");
        echo "\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">Spicy Pizza</a></h4>
                        <span>14 Sep 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blogpost4.jpg");
        echo "\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">Healthy Food</a></h4>
                        <span>25 Aug 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blogpost5.jpg");
        echo "\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">Great Breakfast</a></h4>
                        <span>17 Aug 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blogpost6.jpg");
        echo "\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/single-post");
        echo "\">Fresh Fruit Juice</a></h4>
                        <span>12 Aug 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/latest-blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 98,  163 => 94,  148 => 82,  141 => 78,  126 => 66,  119 => 62,  104 => 50,  97 => 46,  82 => 34,  75 => 30,  60 => 18,  53 => 14,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"heading-section\">
                <h2>Latest blog posts</h2>
                <img src=\"{{ 'assets/images/under-heading.png'|theme }}\" alt=\"\" >
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"{{ 'assets/images/blogpost1.jpg'|theme }}\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"{{ 'samples/single-post'|page }}\">Summer Sandwich</a></h4>
                        <span>29 Sep 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"{{ 'assets/images/blogpost2.jpg'|theme }}\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"{{ 'samples/single-post'|page }}\">New Great Taste</a></h4>
                        <span>23 Sep 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"{{ 'assets/images/blogpost3.jpg'|theme }}\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"{{ 'samples/single-post'|page }}\">Spicy Pizza</a></h4>
                        <span>14 Sep 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"{{ 'assets/images/blogpost4.jpg'|theme }}\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"{{ 'samples/single-post'|page }}\">Healthy Food</a></h4>
                        <span>25 Aug 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"{{ 'assets/images/blogpost5.jpg'|theme }}\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"{{ 'samples/single-post'|page }}\">Great Breakfast</a></h4>
                        <span>17 Aug 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"blog-post\">
                <div class=\"blog-thumb\">
                    <img src=\"{{ 'assets/images/blogpost6.jpg'|theme }}\" alt=\"\" />
                </div>
                <div class=\"blog-content\">
                    <div class=\"content-show\">
                        <h4><a href=\"{{ 'samples/single-post'|page }}\">Fresh Fruit Juice</a></h4>
                        <span>12 Aug 2084</span>
                    </div>
                    <div class=\"content-hide\">
                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/jtherczeg-grill/partials/latest-blog.htm", "");
    }
}
