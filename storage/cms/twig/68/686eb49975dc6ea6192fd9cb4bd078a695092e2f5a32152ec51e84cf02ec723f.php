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

/* F:\xampp\htdocs\news/themes/news/layouts/main.htm */
class __TwigTemplate_4658f22f7acd9bf96e1696f9718359e6e362c1e84388e362117769b83f05cf84 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>24News</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/logo5");
        echo "\">

    <!-- Stylesheet -->
    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/header-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 20
        echo "
</head>
<!-- Material Design Lite CSS -->


<body>
    ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 28
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout/footer-scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "    
    ";
        // line 31
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 32
        echo "    
    ";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 34
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  102 => 33,  99 => 32,  95 => 31,  92 => 30,  87 => 29,  82 => 28,  79 => 27,  75 => 26,  67 => 20,  63 => 19,  59 => 18,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>24News</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{'assets/img/core-img/logo5'|theme}}\">

    <!-- Stylesheet -->
    {% partial 'layout/header-scripts' %}
    {% styles %}

</head>
<!-- Material Design Lite CSS -->


<body>
    {% partial 'layout/header' %}
    {%page%}
    {% partial 'layout/footer' %}
    {% partial 'layout/footer-scripts' %}
    
    {% framework %}
    
    {% scripts %}

</body>

</html>", "F:\\xampp\\htdocs\\news/themes/news/layouts/main.htm", "");
    }
}
