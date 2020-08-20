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

/* F:\xampp\htdocs\news/themes/news/partials/layout/footer-scripts.htm */
class __TwigTemplate_c8c2e2c9152a8ed815db432883e6606576c707f2452655813c180f96a0a44806 extends \Twig\Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery/jquery-2.2.4.min.js");
        echo "\"></script>
    <!-- Popper js -->
    <script src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap/popper.min.js");
        echo "\"></script>
    <!-- Bootstrap js -->
    <script src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap/bootstrap.min.js");
        echo "\"></script>
    <!-- All Plugins js -->
    <script src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugins/plugins.js");
        echo "\"></script>
    <!-- Active js -->
    <script src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/active.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/partials/layout/footer-scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 7,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{'assets/js/jquery/jquery-2.2.4.min.js'|theme}}\"></script>
    <!-- Popper js -->
    <script src=\"{{'assets/js/bootstrap/popper.min.js'|theme}}\"></script>
    <!-- Bootstrap js -->
    <script src=\"{{'assets/js/bootstrap/bootstrap.min.js'|theme}}\"></script>
    <!-- All Plugins js -->
    <script src=\"{{'assets/js/plugins/plugins.js'|theme}}\"></script>
    <!-- Active js -->
    <script src=\"{{'assets/js/active.js'|theme}}\"></script>", "F:\\xampp\\htdocs\\news/themes/news/partials/layout/footer-scripts.htm", "");
    }
}
