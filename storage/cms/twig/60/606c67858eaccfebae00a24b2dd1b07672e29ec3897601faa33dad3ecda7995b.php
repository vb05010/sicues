<?php

/* /websicues/themes/rainlab-relax/partials/footer.htm */
class __TwigTemplate_935129fdc3654a4422511d49cabbb2a530c62a19bf2bbfadda13d3901edfbfa1 extends Twig_Template
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
        echo "<div class=\"container\">

    <div class=\"row\" id=\"footerSliceMenu\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["footerMenu"] ?? null), "menuItems", array())) {
            // line 5
            echo "            <ul class=\"menu-links\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["footerMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "                    <li class=\"head-link ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                echo "\">
                        <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
                echo "</a>
                    </li>
                    ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 11
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["childItem"]) {
                        // line 12
                        echo "                            <li class=\"";
                        echo ((twig_get_attribute($this->env, $this->source, $context["childItem"], "isActive", array())) ? ("active") : (""));
                        echo "\">
                                <a href=\"";
                        // line 13
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childItem"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childItem"], "title", array()), "html", null, true);
                        echo "</a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "                    ";
                }
                // line 17
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </ul>
        ";
        }
        // line 20
        echo "
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <div class=\"contact-details\">
                <ul>
                    <li class=\"head-link\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
                    </li>
                </ul>
                ";
        // line 37
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/details"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 38
        echo "            </div>
        </div>
    </div>

    <div class=\"credit text-right\">
        <p>
            &copy; Copyright ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Your Company - Powered by
            <i class=\"icon-leaf\"></i> <a href=\"http://octobercms.com\" target=\"_blank\">OctoberCMS</a>
        </p>
    </div>
</div>

";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 52
        echo "<script>
    jQuery(document).ready(function(\$){
        var \$container = \$('#footerSliceMenu'),
            \$links = \$('.menu-links li', \$container),
            \$slices = \$('.menu-slice', \$container),
            totalLinks = \$links.length,
            totalSlices = \$slices.length,
            perSlice = Math.ceil(totalLinks / totalSlices),
            activeSlice = 1,
            count = 0

            \$.each(\$links, function(){
                \$(this).appendTo(\$slices.eq(activeSlice - 1))

                if (++count == perSlice) {
                    count = 0
                    activeSlice++
                }
            })

            \$('.menu-links', \$container).remove()
    })
</script>
";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 51,  130 => 52,  128 => 51,  119 => 44,  111 => 38,  107 => 37,  101 => 34,  85 => 20,  81 => 18,  75 => 17,  72 => 16,  61 => 13,  56 => 12,  51 => 11,  49 => 10,  42 => 8,  37 => 7,  33 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">

    <div class=\"row\" id=\"footerSliceMenu\">
        {% if footerMenu.menuItems %}
            <ul class=\"menu-links\">
                {% for item in footerMenu.menuItems %}
                    <li class=\"head-link {{ item.isActive ? 'active' : '' }}\">
                        <a href=\"{{ item.url }}\">{{ item.title }}</a>
                    </li>
                    {% if item.items %}
                        {% for childItem in item.items %}
                            <li class=\"{{ childItem.isActive ? 'active' : '' }}\">
                                <a href=\"{{ childItem.url }}\">{{ childItem.title }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                {% endfor %}
            </ul>
        {% endif %}

        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <ul class=\"menu-slice\"></ul>
        </div>
        <div class=\"col-md-3\">
            <div class=\"contact-details\">
                <ul>
                    <li class=\"head-link\">
                        <a href=\"{{ 'contact'|page }}\">Contact</a>
                    </li>
                </ul>
                {% content 'contact/details' %}
            </div>
        </div>
    </div>

    <div class=\"credit text-right\">
        <p>
            &copy; Copyright {{ \"now\"|date(\"Y\") }} Your Company - Powered by
            <i class=\"icon-leaf\"></i> <a href=\"http://octobercms.com\" target=\"_blank\">OctoberCMS</a>
        </p>
    </div>
</div>

{# This script splits the footer menu in to 3 columns #}
{% put scripts %}
<script>
    jQuery(document).ready(function(\$){
        var \$container = \$('#footerSliceMenu'),
            \$links = \$('.menu-links li', \$container),
            \$slices = \$('.menu-slice', \$container),
            totalLinks = \$links.length,
            totalSlices = \$slices.length,
            perSlice = Math.ceil(totalLinks / totalSlices),
            activeSlice = 1,
            count = 0

            \$.each(\$links, function(){
                \$(this).appendTo(\$slices.eq(activeSlice - 1))

                if (++count == perSlice) {
                    count = 0
                    activeSlice++
                }
            })

            \$('.menu-links', \$container).remove()
    })
</script>
{% endput %}", "/websicues/themes/rainlab-relax/partials/footer.htm", "");
    }
}
