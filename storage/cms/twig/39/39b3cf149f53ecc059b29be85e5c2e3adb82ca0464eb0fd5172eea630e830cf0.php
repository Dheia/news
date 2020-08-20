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

/* F:\xampp\htdocs\news/themes/news/partials/layout/header-scripts.htm */
class __TwigTemplate_6985d75dd132db5da0dfc27f7b21691252c850d9e1dd9f47963f379a206c6a7a extends \Twig\Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/style.css");
        echo "\">";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/partials/layout/header-scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{'assets/style.css'|theme}}\">", "F:\\xampp\\htdocs\\news/themes/news/partials/layout/header-scripts.htm", "");
    }
}
