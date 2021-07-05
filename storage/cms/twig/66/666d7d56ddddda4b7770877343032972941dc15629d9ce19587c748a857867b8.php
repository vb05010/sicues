<?php

/* /websicues/themes/rainlab-relax/partials/contact/form.htm */
class __TwigTemplate_c689421c7a6aa32c5a6bfd6e06570b5ca4443f6c2ffc87cd78b72000fe451bd4 extends Twig_Template
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
        if (($context["success"] ?? null)) {
            // line 2
            echo "
    <div class=\"jumbotron contact-sent\">
        ";
            // line 4
            $context['__cms_content_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contact/success"            , $context['__cms_content_params']            );
            unset($context['__cms_content_params']);
            // line 5
            echo "    </div>

";
        } else {
            // line 8
            echo "
    <h3>Online enquiry</h3>

    ";
            // line 11
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onSubmit", array("class" => "contact-form", "update" => array("contact/form" => "#partialContactForm"))));
            // line 14
            echo "

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        First name <span class=\"required\">*</span>
                    </label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" />
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Last name
                    </label>
                    <input type=\"text\" name=\"surname\" class=\"form-control\" />
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Phone <span class=\"required\">*</span>
                    </label>
                    <input type=\"text\" name=\"phone\" class=\"form-control\" />
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Company
                    </label>
                    <input type=\"text\" name=\"company\" class=\"form-control\" />
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label\">
                Email <span class=\"required\">*</span>
            </label>
            <input type=\"text\" name=\"email\" class=\"form-control\" />
        </div>

        <div class=\"form-group\">
            <label class=\"control-label\">
                Message <span class=\"required\">*</span>
            </label>
            <textarea rows=\"7\" cols=\"10\" name=\"comments\" class=\"form-control\"></textarea>
        </div>

        <div class=\"pull-right\">
            <button type=\"submit\" class=\"submit-button btn btn-default btn-lg\">
                Send message!
            </button>
        </div>

    ";
            // line 74
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "/websicues/themes/rainlab-relax/partials/contact/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 74,  45 => 14,  43 => 11,  38 => 8,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if success %}

    <div class=\"jumbotron contact-sent\">
        {% content 'contact/success' %}
    </div>

{% else %}

    <h3>Online enquiry</h3>

    {{ form_ajax('onSubmit', {
        class: 'contact-form',
        update: { 'contact/form': '#partialContactForm' }
    }) }}

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        First name <span class=\"required\">*</span>
                    </label>
                    <input type=\"text\" name=\"name\" class=\"form-control\" />
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Last name
                    </label>
                    <input type=\"text\" name=\"surname\" class=\"form-control\" />
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Phone <span class=\"required\">*</span>
                    </label>
                    <input type=\"text\" name=\"phone\" class=\"form-control\" />
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">
                        Company
                    </label>
                    <input type=\"text\" name=\"company\" class=\"form-control\" />
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label\">
                Email <span class=\"required\">*</span>
            </label>
            <input type=\"text\" name=\"email\" class=\"form-control\" />
        </div>

        <div class=\"form-group\">
            <label class=\"control-label\">
                Message <span class=\"required\">*</span>
            </label>
            <textarea rows=\"7\" cols=\"10\" name=\"comments\" class=\"form-control\"></textarea>
        </div>

        <div class=\"pull-right\">
            <button type=\"submit\" class=\"submit-button btn btn-default btn-lg\">
                Send message!
            </button>
        </div>

    {{ form_close() }}

{% endif %}", "/websicues/themes/rainlab-relax/partials/contact/form.htm", "");
    }
}
