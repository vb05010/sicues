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

/* /websicues/themes/radiantweb-travu/pages/samples/about.htm */
class __TwigTemplate_df839e98c92496110a12e735c7180cef9ed32313f06c2a1f79c8301795e02c9f extends \Twig\Template
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
            <li class=\"active\">About</li>
        </ol>

        <div class=\"row\">
            
            <!-- Article main content -->
            <article class=\"col-md-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lorem ipsum dolor sit amet, consectetur.</h1>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!</p>
                <p>Consectetur cupiditate labore repudiandae beatae nisi fugiat facilis natus illum vitae doloremque. In, perspiciatis, natus, impedit voluptas itaque odio repudiandae placeat nisi totam repellendus earum dolores mollitia tempore quasi beatae alias cum dicta maxime laborum corporis harum porro magnam laboriosam.</p>
                <p>Aut, eaque, minus atque alias odio mollitia cum nisi ipsa nulla natus quae minima similique ipsam aspernatur molestias animi in deleniti nam. Tempora, labore, modi eum perspiciatis doloremque sequi nam illo corporis iusto maiores nisi recusandae repellat animi reiciendis accusamus.</p>

                <h2>A, quibusdam, nobis, eveniet consequatur</h2>
                <p>A, quibusdam, nobis, eveniet consequatur alias doloremque officia blanditiis fuga et numquam labore reiciendis voluptas quis repellat quos sunt non dolore consectetur at sit nam tenetur dolorem? Harum, quas, sit perspiciatis esse odit temporibus aperiam nulla aspernatur sequi fugiat tempore?</p>
                <p>Ad velit consequuntur quo qui odit quam sapiente repudiandae et ea pariatur? Ex sapiente beatae nobis consectetur ea. Deleniti, beatae, magnam, dolorum, fuga nostrum quas laboriosam sapiente temporibus enim voluptates ullam impedit atque quae provident quos mollitia aperiam perferendis amet.</p>

                <blockquote>Numquam, ut iure quia facere totam quas odit illo incidunt. Voluptatem, nostrum, ex, quasi incidunt similique cum maxime expedita unde labore inventore excepturi veniam corporis sequi facere ullam voluptates amet illum quam fuga voluptatibus ipsum atque sunt eos. Ut, necessitatibus.</blockquote>
                <p>Odit, laudantium, dolores, natus distinctio labore voluptates in inventore quasi qui nobis quis adipisci fugit id! Aliquam alias ea modi. Porro, odio, sed veniam hic numquam qui ad molestiae sint placeat expedita? Perferendis, enim qui numquam sequi obcaecati molestiae fugiat!</p>
                <p>Aperiam, odit, quasi, voluptate fugiat quisquam velit magni provident corporis animi facilis illo eveniet eum obcaecati adipisci blanditiis quas labore doloribus eos veniam repudiandae suscipit tempora ad harum odio eius distinctio hic deleniti. Sunt fuga ad perspiciatis repellat deleniti omnis!</p>

                <h3>Numquam, ut iure quia facere totam quas odit illo incidunt</h3>
                <p>Est, maiores, fuga sed nemo qui veritatis ducimus placeat odit quisquam dolorum. Rem, sunt, praesentium veniam maiores quia molestias eos fugit eaque ducimus veritatis provident assumenda. Quia, fuga, voluptates voluptatibus quis enim nam asperiores aliquam dignissimos ullam recusandae debitis iste.</p>
                <p>Dignissimos, beatae, praesentium illum eos autem perspiciatis? Minus, non, tempore, illo, mollitia exercitationem tempora quas harum odio dolores delectus quidem laudantium adipisci ducimus ullam placeat eaque minima quae iure itaque corporis magni nesciunt eius sed dolor doloremque id quasi nisi.</p>
            </article>
            <!-- /Article -->
            
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-right\">
                ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "            </aside>
            <!-- /Sidebar -->

        </div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/radiantweb-travu/pages/samples/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 34,  72 => 33,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ol class=\"breadcrumb\">
            <li><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li class=\"active\">About</li>
        </ol>

        <div class=\"row\">
            
            <!-- Article main content -->
            <article class=\"col-md-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lorem ipsum dolor sit amet, consectetur.</h1>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!</p>
                <p>Consectetur cupiditate labore repudiandae beatae nisi fugiat facilis natus illum vitae doloremque. In, perspiciatis, natus, impedit voluptas itaque odio repudiandae placeat nisi totam repellendus earum dolores mollitia tempore quasi beatae alias cum dicta maxime laborum corporis harum porro magnam laboriosam.</p>
                <p>Aut, eaque, minus atque alias odio mollitia cum nisi ipsa nulla natus quae minima similique ipsam aspernatur molestias animi in deleniti nam. Tempora, labore, modi eum perspiciatis doloremque sequi nam illo corporis iusto maiores nisi recusandae repellat animi reiciendis accusamus.</p>

                <h2>A, quibusdam, nobis, eveniet consequatur</h2>
                <p>A, quibusdam, nobis, eveniet consequatur alias doloremque officia blanditiis fuga et numquam labore reiciendis voluptas quis repellat quos sunt non dolore consectetur at sit nam tenetur dolorem? Harum, quas, sit perspiciatis esse odit temporibus aperiam nulla aspernatur sequi fugiat tempore?</p>
                <p>Ad velit consequuntur quo qui odit quam sapiente repudiandae et ea pariatur? Ex sapiente beatae nobis consectetur ea. Deleniti, beatae, magnam, dolorum, fuga nostrum quas laboriosam sapiente temporibus enim voluptates ullam impedit atque quae provident quos mollitia aperiam perferendis amet.</p>

                <blockquote>Numquam, ut iure quia facere totam quas odit illo incidunt. Voluptatem, nostrum, ex, quasi incidunt similique cum maxime expedita unde labore inventore excepturi veniam corporis sequi facere ullam voluptates amet illum quam fuga voluptatibus ipsum atque sunt eos. Ut, necessitatibus.</blockquote>
                <p>Odit, laudantium, dolores, natus distinctio labore voluptates in inventore quasi qui nobis quis adipisci fugit id! Aliquam alias ea modi. Porro, odio, sed veniam hic numquam qui ad molestiae sint placeat expedita? Perferendis, enim qui numquam sequi obcaecati molestiae fugiat!</p>
                <p>Aperiam, odit, quasi, voluptate fugiat quisquam velit magni provident corporis animi facilis illo eveniet eum obcaecati adipisci blanditiis quas labore doloribus eos veniam repudiandae suscipit tempora ad harum odio eius distinctio hic deleniti. Sunt fuga ad perspiciatis repellat deleniti omnis!</p>

                <h3>Numquam, ut iure quia facere totam quas odit illo incidunt</h3>
                <p>Est, maiores, fuga sed nemo qui veritatis ducimus placeat odit quisquam dolorum. Rem, sunt, praesentium veniam maiores quia molestias eos fugit eaque ducimus veritatis provident assumenda. Quia, fuga, voluptates voluptatibus quis enim nam asperiores aliquam dignissimos ullam recusandae debitis iste.</p>
                <p>Dignissimos, beatae, praesentium illum eos autem perspiciatis? Minus, non, tempore, illo, mollitia exercitationem tempora quas harum odio dolores delectus quidem laudantium adipisci ducimus ullam placeat eaque minima quae iure itaque corporis magni nesciunt eius sed dolor doloremque id quasi nisi.</p>
            </article>
            <!-- /Article -->
            
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-right\">
                {% partial 'sidebar' %}
            </aside>
            <!-- /Sidebar -->

        </div>", "/websicues/themes/radiantweb-travu/pages/samples/about.htm", "");
    }
}
