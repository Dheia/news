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

/* F:\xampp\htdocs\news/plugins/grofgraf/contactme/components/contactform/confirm.htm */
class __TwigTemplate_e52f9b64255d27953551909022bc6fa48997aad8023cb19c6c4acd4c65c4fe17 extends \Twig\Template
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
        if (($context["errorHappened"] ?? null)) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::flash-messages")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "    ";
            echo ($context["contact_confirmation_message"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/plugins/grofgraf/contactme/components/contactform/confirm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if errorHappened %}
    {% partial __SELF__~'::flash-messages' %}
{% else %}
    {{ contact_confirmation_message|raw }}
{% endif %}
", "F:\\xampp\\htdocs\\news/plugins/grofgraf/contactme/components/contactform/confirm.htm", "");
    }
}
