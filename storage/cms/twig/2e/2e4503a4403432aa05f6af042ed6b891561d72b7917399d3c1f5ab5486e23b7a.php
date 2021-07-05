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

/* /websicues/themes/sicues/pages/blog.htm */
class __TwigTemplate_dc25e66b67e6684e92c4b6dd05496e665d830b21aa80242f5c8bb89ce355da09 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>Blogs</h2>
            <p class=\"lead\">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"blog-item\">
                        <img class=\"img-responsive img-blog\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/blog1.jpg");
        echo "\" width=\"100%\" alt=\"\" />
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                        <span id=\"publish_date\">07  NOV</span>
                                        <span><i class=\"fa fa-user\"></i> <a href=\"#\"> John Doe</a></span>
                                        <span><i class=\"fa fa-comment\"></i> <a href=\"";
        // line 17
        echo "blog/blog-item";
        echo "\">2 Comments</a></span>
                                        <span><i class=\"fa fa-heart\"></i><a href=\"#\">56 Likes</a></span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Consequat bibendum quam</h2>
                                    <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</p>

                                    <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper.</p>

                                    <div class=\"post-tags\">
                                        <strong>Tag:</strong> <a href=\"#\">Cool</a> / <a href=\"#\">Creative</a> / <a href=\"#\">Dubttstep</a>
                                    </div>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class=\"media reply_section\">
                            <div class=\"pull-left post_reply text-center\">
                                <a href=\"#\"><img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/boy.png");
        echo "\" class=\"img-circle\" alt=\"\" /></a>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i> </a></li>
                                </ul>
                            </div>
                            <div class=\"media-body post_reply_content\">
                                <h3>Antone L. Huges</h3>
                                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturp</p>
                                <p><strong>Web:</strong> <a href=\"http://www.shapebootstrap.net\">www.shapebootstrap.net</a></p>
                            </div>
                        </div> 
                        
                        <h1 id=\"comments_title\">5 Comments</h1>
                        <div class=\"media comment_section\">
                            <div class=\"pull-left post_comments\">
                                <a href=\"#\"><img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/girl.png");
        echo "\" class=\"img-circle\" alt=\"\" /></a>
                            </div>
                            <div class=\"media-body post_reply_comments\">
                                <h3>Marsh</h3>
                                <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href=\"#\">Reply</a>
                            </div>
                        </div> 
                        <div class=\"media comment_section\">
                            <div class=\"pull-left post_comments\">
                                <a href=\"#\"><img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/boy2.png");
        echo "\" class=\"img-circle\" alt=\"\" /></a>
                            </div>
                            <div class=\"media-body post_reply_comments\">
                                <h3>Marsh</h3>
                                <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href=\"#\">Reply</a>
                            </div>
                        </div> 
                        <div class=\"media comment_section\">
                            <div class=\"pull-left post_comments\">
                                <a href=\"#\"><img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/boy3.png");
        echo "\" class=\"img-circle\" alt=\"\" /></a>
                            </div>
                            <div class=\"media-body post_reply_comments\">
                                <h3>Marsh</h3>
                                <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href=\"#\">Reply</a>
                            </div>
                        </div> 


                        <div id=\"contact-page clearfix\">
                            <div class=\"status alert alert-success\" style=\"display: none\"></div>
                            <div class=\"message_heading\">
                                <h4>Leave a Replay</h4>
                                <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
                            </div> 
      
                            <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"sendemail.php\" role=\"form\">
                                <div class=\"row\">
                                    <div class=\"col-sm-5\">
                                        <div class=\"form-group\">
                                            <label>Name *</label>
                                            <input type=\"text\" class=\"form-control\" required=\"required\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Email *</label>
                                            <input type=\"email\" class=\"form-control\" required=\"required\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>URL</label>
                                            <input type=\"url\" class=\"form-control\">
                                        </div>                    
                                    </div>
                                    <div class=\"col-sm-7\">                        
                                        <div class=\"form-group\">
                                            <label>Message *</label>
                                            <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                                        </div>                        
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-lg\" required=\"required\">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Search Here\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget categories\">
                        <h3>Recent Comments</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"";
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/avatar3.png");
        echo "\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     

                    <div class=\"widget categories\">
                        <h3>Categories</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <ul class=\"blog_category\">
                                    <li><a href=\"#\">Computers <span class=\"badge\">04</span></a></li>
                                    <li><a href=\"#\">Smartphone <span class=\"badge\">10</span></a></li>
                                    <li><a href=\"#\">Gedgets <span class=\"badge\">06</span></a></li>
                                    <li><a href=\"#\">Technology <span class=\"badge\">25</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget archieve\">
                        <h3>Archieve</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> December 2013 <span class=\"pull-right\">(97)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> November 2013 <span class=\"pull-right\">(32)</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> October 2013 <span class=\"pull-right\">(19)</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> September 2013 <span class=\"pull-right\">(08)</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    \t\t\t\t
                    <div class=\"widget tags\">
                        <h3>Tag Cloud</h3>
                        <ul class=\"tag-cloud\">
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Apple</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Barcelona</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Office</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Ipod</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Stock</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Race</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">London</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Football</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Porsche</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Gadgets</a></li>
                        </ul>
                    </div><!--/.tags-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget blog_gallery\">
                        <h3>Our Gallery</h3>
                        <ul class=\"sidebar-gallery\">
                            <li><a href=\"#\"><img src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/gallery1.png");
        echo "\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 210
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/gallery2.png");
        echo "\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 211
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/gallery3.png");
        echo "\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 212
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/gallery4.png");
        echo "\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/gallery5.png");
        echo "\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/gallery6.png");
        echo "\" alt=\"\"></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->
    \t\t\t\t\t
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/sicues/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 214,  290 => 213,  286 => 212,  282 => 211,  278 => 210,  274 => 209,  212 => 150,  202 => 143,  192 => 136,  129 => 76,  115 => 65,  101 => 54,  81 => 37,  58 => 17,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\" class=\"container\">
        <div class=\"center\">
            <h2>Blogs</h2>
            <p class=\"lead\">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>

        <div class=\"blog\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"blog-item\">
                        <img class=\"img-responsive img-blog\" src=\"{{ 'assets/images/blog/blog1.jpg'|theme }}\" width=\"100%\" alt=\"\" />
                            <div class=\"row\">  
                                <div class=\"col-xs-12 col-sm-2 text-center\">
                                    <div class=\"entry-meta\">
                                        <span id=\"publish_date\">07  NOV</span>
                                        <span><i class=\"fa fa-user\"></i> <a href=\"#\"> John Doe</a></span>
                                        <span><i class=\"fa fa-comment\"></i> <a href=\"{{ 'blog/blog-item' }}\">2 Comments</a></span>
                                        <span><i class=\"fa fa-heart\"></i><a href=\"#\">56 Likes</a></span>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-10 blog-content\">
                                    <h2>Consequat bibendum quam</h2>
                                    <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</p>

                                    <p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper.</p>

                                    <div class=\"post-tags\">
                                        <strong>Tag:</strong> <a href=\"#\">Cool</a> / <a href=\"#\">Creative</a> / <a href=\"#\">Dubttstep</a>
                                    </div>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class=\"media reply_section\">
                            <div class=\"pull-left post_reply text-center\">
                                <a href=\"#\"><img src=\"{{ 'assets/images/blog/boy.png'|theme }}\" class=\"img-circle\" alt=\"\" /></a>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i> </a></li>
                                </ul>
                            </div>
                            <div class=\"media-body post_reply_content\">
                                <h3>Antone L. Huges</h3>
                                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturp</p>
                                <p><strong>Web:</strong> <a href=\"http://www.shapebootstrap.net\">www.shapebootstrap.net</a></p>
                            </div>
                        </div> 
                        
                        <h1 id=\"comments_title\">5 Comments</h1>
                        <div class=\"media comment_section\">
                            <div class=\"pull-left post_comments\">
                                <a href=\"#\"><img src=\"{{ 'assets/images/blog/girl.png'|theme }}\" class=\"img-circle\" alt=\"\" /></a>
                            </div>
                            <div class=\"media-body post_reply_comments\">
                                <h3>Marsh</h3>
                                <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href=\"#\">Reply</a>
                            </div>
                        </div> 
                        <div class=\"media comment_section\">
                            <div class=\"pull-left post_comments\">
                                <a href=\"#\"><img src=\"{{ 'assets/images/blog/boy2.png'|theme }}\" class=\"img-circle\" alt=\"\" /></a>
                            </div>
                            <div class=\"media-body post_reply_comments\">
                                <h3>Marsh</h3>
                                <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href=\"#\">Reply</a>
                            </div>
                        </div> 
                        <div class=\"media comment_section\">
                            <div class=\"pull-left post_comments\">
                                <a href=\"#\"><img src=\"{{ 'assets/images/blog/boy3.png'|theme }}\" class=\"img-circle\" alt=\"\" /></a>
                            </div>
                            <div class=\"media-body post_reply_comments\">
                                <h3>Marsh</h3>
                                <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href=\"#\">Reply</a>
                            </div>
                        </div> 


                        <div id=\"contact-page clearfix\">
                            <div class=\"status alert alert-success\" style=\"display: none\"></div>
                            <div class=\"message_heading\">
                                <h4>Leave a Replay</h4>
                                <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
                            </div> 
      
                            <form id=\"main-contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"sendemail.php\" role=\"form\">
                                <div class=\"row\">
                                    <div class=\"col-sm-5\">
                                        <div class=\"form-group\">
                                            <label>Name *</label>
                                            <input type=\"text\" class=\"form-control\" required=\"required\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Email *</label>
                                            <input type=\"email\" class=\"form-control\" required=\"required\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>URL</label>
                                            <input type=\"url\" class=\"form-control\">
                                        </div>                    
                                    </div>
                                    <div class=\"col-sm-7\">                        
                                        <div class=\"form-group\">
                                            <label>Message *</label>
                                            <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\"></textarea>
                                        </div>                        
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-lg\" required=\"required\">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8-->

                <aside class=\"col-md-4\">
                    <div class=\"widget search\">
                        <form role=\"form\">
                                <input type=\"text\" class=\"form-control search_box\" autocomplete=\"off\" placeholder=\"Search Here\">
                        </form>
                    </div><!--/.search-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget categories\">
                        <h3>Recent Comments</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/blog/avatar3.png'|theme }}\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/blog/avatar3.png'|theme }}\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t<div class=\"single_comments\">
    \t\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/blog/avatar3.png'|theme }}\" alt=\"\">
    \t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    \t\t\t\t\t\t\t\t<div class=\"entry-meta small muted\">
                                        <span>By <a href=\"#\">Alex</a></span <span>On <a href=\"#\">Creative</a></span>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     

                    <div class=\"widget categories\">
                        <h3>Categories</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <ul class=\"blog_category\">
                                    <li><a href=\"#\">Computers <span class=\"badge\">04</span></a></li>
                                    <li><a href=\"#\">Smartphone <span class=\"badge\">10</span></a></li>
                                    <li><a href=\"#\">Gedgets <span class=\"badge\">06</span></a></li>
                                    <li><a href=\"#\">Technology <span class=\"badge\">25</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget archieve\">
                        <h3>Archieve</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <ul class=\"blog_archieve\">
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> December 2013 <span class=\"pull-right\">(97)</span></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> November 2013 <span class=\"pull-right\">(32)</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> October 2013 <span class=\"pull-right\">(19)</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-double-right\"></i> September 2013 <span class=\"pull-right\">(08)</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    \t\t\t\t
                    <div class=\"widget tags\">
                        <h3>Tag Cloud</h3>
                        <ul class=\"tag-cloud\">
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Apple</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Barcelona</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Office</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Ipod</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Stock</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Race</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">London</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Football</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Porsche</a></li>
                            <li><a class=\"btn btn-xs btn-primary\" href=\"#\">Gadgets</a></li>
                        </ul>
                    </div><!--/.tags-->
    \t\t\t\t
    \t\t\t\t<div class=\"widget blog_gallery\">
                        <h3>Our Gallery</h3>
                        <ul class=\"sidebar-gallery\">
                            <li><a href=\"#\"><img src=\"{{ 'assets/images/blog/gallery1.png'|theme }}\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ 'assets/images/blog/gallery2.png'|theme }}\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ 'assets/images/blog/gallery3.png'|theme }}\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ 'assets/images/blog/gallery4.png'|theme }}\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ 'assets/images/blog/gallery5.png'|theme }}\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ 'assets/images/blog/gallery6.png'|theme }}\" alt=\"\"></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->
    \t\t\t\t\t
    \t\t\t\t
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->", "/websicues/themes/sicues/pages/blog.htm", "");
    }
}
