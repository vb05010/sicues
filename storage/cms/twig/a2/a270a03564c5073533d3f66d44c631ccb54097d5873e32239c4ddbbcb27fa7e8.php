<?php

/* /websicues/themes/dannyvantol-blight/partials/post/item.htm */
class __TwigTemplate_d31c403f7cc1fd6c2e79623f1d820c62a0e37d611ef11acf499aa0beaca52660 extends Twig_Template
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
        echo "<div class=\"row m-b-lg post-item\">
    <div class=\"col-xs-12 col-md-4\">
        <img class=\"img-responsive\" src=\"https://via.placeholder.com/700x350\" alt=\"Placeholder\">
    </div>

    <div class=\"col-xs-12 col-md-8\">
        <h4>Lorem Ipsum</h4>
        <p class=\"text-muted\">Published at: 1-1-2019 by Danny van Tol</p>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, aut, deserunt eaque eligendi
            fugiat
            impedit laboriosam molestiae nam nostrum nulla odit omnis possimus praesentium quasi similique unde
            vero
            voluptatem voluptatibus.
        </p>

        <a class=\"btn btn-theme\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post/item");
        echo "\" type=\"button\">Read
            more</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/websicues/themes/dannyvantol-blight/partials/post/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row m-b-lg post-item\">
    <div class=\"col-xs-12 col-md-4\">
        <img class=\"img-responsive\" src=\"https://via.placeholder.com/700x350\" alt=\"Placeholder\">
    </div>

    <div class=\"col-xs-12 col-md-8\">
        <h4>Lorem Ipsum</h4>
        <p class=\"text-muted\">Published at: 1-1-2019 by Danny van Tol</p>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, aut, deserunt eaque eligendi
            fugiat
            impedit laboriosam molestiae nam nostrum nulla odit omnis possimus praesentium quasi similique unde
            vero
            voluptatem voluptatibus.
        </p>

        <a class=\"btn btn-theme\" href=\"{{ 'post/item'|page }}\" type=\"button\">Read
            more</a>
    </div>
</div>", "/websicues/themes/dannyvantol-blight/partials/post/item.htm", "");
    }
}
