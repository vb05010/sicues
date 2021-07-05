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

/* /websicues/themes/jtherczeg-grill/partials/bottom.htm */
class __TwigTemplate_d46ff9633e55d25d96db4a744674f57031d2411d8d1589d3e7d5b27a56ac5f4f extends \Twig\Template
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
        echo "<div class=\"main-footer\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"about\">
                <h4 class=\"footer-title\">About Grill</h4>
                <p>Grill is free HTML5 template by <span class=\"blue\">template</span><span class=\"green\">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                <br><br>Credit goes to <a rel=\"nofollow\" href=\"http://unsplash.com\">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"shop-list\">
                <h4 class=\"footer-title\">Shop Categories</h4>
                    <ul>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>New Grill Menu</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Healthy Fresh Juices</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Spicy Delicious Meals</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Simple Italian Pizzas</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Pure Good Yogurts</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Ice-cream for kids</a></li>
                    </ul>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"recent-posts\">
                <h4 class=\"footer-title\">Recent posts</h4>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/recent-post1.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">Delicious and Healthy Menus</a></h6>
                            <span>24/12/2084</span>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/recent-post2.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">Simple and effective meals</a></h6>
                            <span>18/12/2084</span>
                        </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"more-info\">
                <h4 class=\"footer-title\">More info</h4>
                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                    <ul>
                        <li><i class=\"fa fa-phone\"></i>010-020-0340</li>
                        <li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                        <li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@company.com</a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/jtherczeg-grill/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 37,  64 => 28,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main-footer\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"about\">
                <h4 class=\"footer-title\">About Grill</h4>
                <p>Grill is free HTML5 template by <span class=\"blue\">template</span><span class=\"green\">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                <br><br>Credit goes to <a rel=\"nofollow\" href=\"http://unsplash.com\">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"shop-list\">
                <h4 class=\"footer-title\">Shop Categories</h4>
                    <ul>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>New Grill Menu</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Healthy Fresh Juices</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Spicy Delicious Meals</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Simple Italian Pizzas</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Pure Good Yogurts</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i>Ice-cream for kids</a></li>
                    </ul>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"recent-posts\">
                <h4 class=\"footer-title\">Recent posts</h4>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"{{ 'assets/images/recent-post1.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">Delicious and Healthy Menus</a></h6>
                            <span>24/12/2084</span>
                        </div>
                    </div>
                    <div class=\"recent-post\">
                        <div class=\"recent-post-thumb\">
                            <img src=\"{{ 'assets/images/recent-post2.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"recent-post-info\">
                            <h6><a href=\"#\">Simple and effective meals</a></h6>
                            <span>18/12/2084</span>
                        </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"more-info\">
                <h4 class=\"footer-title\">More info</h4>
                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                    <ul>
                        <li><i class=\"fa fa-phone\"></i>010-020-0340</li>
                        <li><i class=\"fa fa-globe\"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                        <li><i class=\"fa fa-envelope\"></i><a href=\"#\">info@company.com</a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>", "/websicues/themes/jtherczeg-grill/partials/bottom.htm", "");
    }
}