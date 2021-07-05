<?php

/* /websicues/themes/rainlab-relax/layouts/home.htm */
class __TwigTemplate_97d5ee009b64f5b619b5d96e439a3b9cf8f71869003fd879c241ee6833e3ce58 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
            <!-- Nav -->
            <nav id=\"layout-nav\">
                ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "            </nav>
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">

                <div class=\"visible-xs visible-sm slider-wrapper title-style\">
                    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "                </div>

                <div id=\"slider-wrapper\" class=\"slider-wrapper hidden-xs hidden-sm\">
                    <div id=\"slider\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 36
            echo "                            ";
            // line 37
            echo "                            ";
            $context["randomImage"] = array(0 => "highchair", 1 => "sofa", 2 => "cafe", 3 => "in-field", 4 => "wheelchair", 5 => "chairs", 6 => "lake", 7 => "rocking-chairs");
            // line 38
            echo "                            ";
            $context["bannerImage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chairPage"], "viewBag", array()), "banner", array())) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
$context["chairPage"], "viewBag", array()), "banner", array()))) : ($this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/chairs/" . twig_random($this->env,             // line 40
($context["randomImage"] ?? null))) . ".jpg"))));
            // line 41
            echo "
                            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["bannerImage"] ?? null), "html", null, true);
            echo "\" alt=\"\" title=\"\" />
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </div>
                    <div id=\"slider-menu\" class=\"slider-menu\">
                        <ul>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 48
            echo "                                <li><a href=\"";
            echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, $context["chairPage"], "url", array()));
            echo "\"><span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chairPage"], "title", array()), "html", null, true);
            echo "</span></a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                            <li class=\"desc\"><h2><span></span></h2></li>
                        </ul>
                    </div>
                    <div id=\"slider-text\" class=\"slider-text\">
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chairsPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chairPage"]) {
            // line 55
            echo "                            <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chairPage"], "viewBag", array()), "tagline", array()), "html", null, true);
            echo "</h2>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chairPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </div>
                    <div class=\"slider-more-info\">
                        See all of our chairs!
                    </div>
                </div>

                <div class=\"row module-homes\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 67
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 72
        $context['__placeholder_news_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('news', $context['__placeholder_news_default_contents']);
        unset($context['__placeholder_news_default_contents']);        // line 73
        echo "                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            ";
        // line 78
        $context['__placeholder_login_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('login', $context['__placeholder_login_default_contents']);
        unset($context['__placeholder_login_default_contents']);        // line 79
        echo "                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 96
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 97
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 100
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "        <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/home.js");
        echo "\"></script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 101,  202 => 100,  197 => 97,  193 => 96,  174 => 79,  172 => 78,  165 => 73,  163 => 72,  156 => 67,  154 => 66,  143 => 57,  134 => 55,  130 => 54,  124 => 50,  113 => 48,  109 => 47,  104 => 44,  96 => 42,  93 => 41,  91 => 40,  90 => 39,  88 => 38,  85 => 37,  83 => 36,  79 => 35,  73 => 31,  69 => 30,  59 => 22,  55 => 21,  50 => 18,  46 => 17,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'meta' %}
    </head>
    <body>

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial \"header\" %}

            <!-- Nav -->
            <nav id=\"layout-nav\">
                {% partial \"nav\" %}
            </nav>
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">

                <div class=\"visible-xs visible-sm slider-wrapper title-style\">
                    {% partial \"title\" %}
                </div>

                <div id=\"slider-wrapper\" class=\"slider-wrapper hidden-xs hidden-sm\">
                    <div id=\"slider\">
                        {% for chairPage in chairsPages %}
                            {# {% set randomImage = random(['sofa', 'cafe', 'in-field', 'wheelchair', 'chairs']) %} #}
                            {% set randomImage = ['highchair', 'sofa', 'cafe', 'in-field', 'wheelchair', 'chairs', 'lake', 'rocking-chairs'] %}
                            {% set bannerImage = chairPage.viewBag.banner 
                                ? chairPage.viewBag.banner|media
                                : ('assets/images/chairs/'~random(randomImage)~'.jpg')|theme %}

                            <img src=\"{{ bannerImage }}\" alt=\"\" title=\"\" />
                        {% endfor %}
                    </div>
                    <div id=\"slider-menu\" class=\"slider-menu\">
                        <ul>
                            {% for chairPage in chairsPages %}
                                <li><a href=\"{{ chairPage.url|app }}\"><span>{{ chairPage.title }}</span></a></li>
                            {% endfor %}
                            <li class=\"desc\"><h2><span></span></h2></li>
                        </ul>
                    </div>
                    <div id=\"slider-text\" class=\"slider-text\">
                        {% for chairPage in chairsPages %}
                            <h2>{{ chairPage.viewBag.tagline }}</h2>
                        {% endfor %}
                    </div>
                    <div class=\"slider-more-info\">
                        See all of our chairs!
                    </div>
                </div>

                <div class=\"row module-homes\">
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            {% page %}
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            {% placeholder news title=\"Latest News\" %}
                        </div>
                    </div>

                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"module-home\">
                            {% placeholder login title=\"Client Area\" %}
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial \"footer\" %}
        </footer>

        <!-- Scripts -->
        {% partial 'scripts' %}
        <script src=\"{{ 'assets/javascript/home.js'|theme }}\"></script>

    </body>
</html>", "/websicues/themes/rainlab-relax/layouts/home.htm", "");
    }
}
