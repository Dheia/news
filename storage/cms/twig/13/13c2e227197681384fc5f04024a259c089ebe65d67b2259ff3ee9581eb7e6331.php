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

/* F:\xampp\htdocs\news/themes/news/pages/blogs-list.htm */
class __TwigTemplate_785d7314555a6d4d18db71bcae0149017fbadfa3e8d4d6094a2204f1d2b31d43 extends \Twig\Template
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
        echo "<!-- Preloader -->
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"lds-ellipsis\">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- ##### Breadcrumb Area Start ##### -->
    <div class=\"vizew-breadcrumb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index", ["slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 19)]);
        echo "\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Home</a></li>
                            
                            <li class=\"breadcrumb-item\"><a href=\"\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</a></li>
                            ";
        // line 22
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 22))) {
            // line 23
            echo "                            <li class=\"breadcrumb-item \" aria-current=\"page\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["children"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</li>
                            ";
        }
        // line 25
        echo "                           
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive List Posts Area Start ##### -->
    <div class=\"vizew-archive-list-posts-area mb-80\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-lg-8\">
                    <!-- Archive Catagory & View Options -->
                   
                    <div class=\"archive-catagory-view mb-50 d-flex align-items-center justify-content-between\">
                        <!-- Catagory -->
                        <div class=\"archive-catagory\">
                            <h4><i class=\"\" aria-hidden=\"true\"></i> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 44), "html", null, true);
        echo " </h4>
                        </div>
                        <!-- View Options -->
                        <div class=\"view-options\">

                            <a href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list");
        echo "?view=grid";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "search", [], "any", false, false, false, 49)) {
            echo "&search=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "search", [], "any", false, false, false, 49), "html", null, true);
        }
        echo "&page=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 49), "currentPage", [], "any", false, false, false, 49), "html", null, true);
        echo "\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "view", [], "any", false, false, false, 49) != "list")) {
            echo " class=\"active\"";
        }
        echo "><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i></a>
                            <a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list");
        echo "?view=list";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "search", [], "any", false, false, false, 50)) {
            echo "&search=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "search", [], "any", false, false, false, 50), "html", null, true);
        }
        echo "&page=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 50), "currentPage", [], "any", false, false, false, 50), "html", null, true);
        echo "\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "view", [], "any", false, false, false, 50) == "list")) {
            echo " class=\"active\"";
        }
        echo "><i class=\"fa fa-list-ul\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    
                    ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 54), "search", [], "any", false, false, false, 54)) {
            // line 55
            echo "                    <div class=\"col-12 mb-3\">
                        <h5>";
            // line 56
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tìm kiếm cho"]);
            echo " \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "search", [], "any", false, false, false, 56), "html", null, true);
            echo "\"";
            if (($context["category"] ?? null)) {
                echo " ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["trong danh mục"]);
                echo "
                            \"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
                echo "\"";
            }
            echo ": </h5>
                    </div>
                    ";
        }
        // line 60
        echo "
                    <!-- Single Post Area -->
                    ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 62), "view", [], "any", false, false, false, 62) == "list")) {
            // line 63
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 63));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 64
                echo "                    <div class=\"single-post-area style-2\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-12 col-md-6\">
                                <!-- Post Thumbnail -->
                                <div class=\"post-thumbnail\">
                                    <img src=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 69)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getThumb", [0 => 350, 1 => 207, 2 => "crop"], "method", false, false, false, 69), "html", null, true);
                echo "\" alt=\"\">

                                    <!-- Video Duration -->
                                </div>
                            </div>
                            <div class=\"col-12 col-md-6\">
                                <!-- Post Content -->
                                <div class=\"post-content mt-0\">
                                    <a href=\"";
                // line 77
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 77)]);
                echo "\" class=\"post-title mb-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 77), "html", null, true);
                echo "</a>
                                    <div class=\"post-meta d-flex align-items-center mb-2\">
                                        <i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
                                        <a href=\"#\" class=\"post-date\">";
                // line 80
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
                echo "</a>
                                    </div>
                                    <p class=\"mb-2\">";
                // line 82
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 82)), 100]);
                echo "</p>
                                    ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 83), "count", [], "any", false, false, false, 83)) {
                    echo "             
                                    <div class=\"post-meta d-flex\">
                                        <i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i>
                                        ";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 86));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 87
                        echo "                                        <a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 87)]);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 87), "html", null, true);
                        echo "</a>
                                        ";
                        // line 88
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 88)) {
                            echo ",
                                        ";
                        }
                        // line 90
                        echo "                                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                                    </div>
                                    ";
                }
                // line 93
                echo "                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 98
                echo "                    <div class=\"col-12 mb-3\">
                        <h5>";
                // line 99
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Không có kết quả nào phù hợp"]);
                echo "</h5>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                    ";
        } else {
            // line 103
            echo "
                    <div class=\"row\">                        
                        <!-- Single Blog Post -->                     
                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 106));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 107
                echo "                        <div class=\"col-12 col-md-6\">                            
                            <div class=\"single-post-area mb-50\">
                                <!-- Post Thumbnail -->                                
                                <div class=\"post-thumbnail\">                                   
                                    <img src=\" ";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 111)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "getThumb", [0 => 350, 1 => 207, 2 => "crop"], "method", false, false, false, 111), "html", null, true);
                echo " \"alt=\"\">
                                </div>   
                              <!-- Post Content -->
                                <div class=\"post-content\">
                                    <a href=\"";
                // line 115
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 115)]);
                echo "\" class=\"post-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 115), "html", null, true);
                echo "</a>
                                    
                                    <p class=\"mb-2\">";
                // line 117
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 117)), 100]);
                echo "</p>
                                    ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 118), "count", [], "any", false, false, false, 118)) {
                    echo "             
                                    <div class=\"post-meta d-flex\">
                                        <i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i>
                                        ";
                    // line 121
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 121));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 122
                        echo "                                        <a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs", ["c" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 122)]);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 122), "html", null, true);
                        echo "</a>
                                        ";
                        // line 123
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 123)) {
                            echo ",
                                        ";
                        }
                        // line 125
                        echo "                                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    echo "                                    </div>
                                    ";
                }
                // line 128
                echo "                                </div>
                            </div>                           
                        </div>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 132
                echo "                        <div class=\"col-12 mb-3\">
                            <h5>";
                // line 133
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Không có kết quả nào phù hợp"]);
                echo "</h5>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                    </div>
                    ";
        }
        // line 138
        echo "                 
                    
                    ";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 140), "total", [], "any", false, false, false, 140) > 0)) {
            // line 141
            echo "                    <nav class=\"mt-50\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item\"><a class=\"page-link\" ";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 143), "currentPage", [], "any", false, false, false, 143) > 1)) {
                echo "href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list");
                echo "?page=";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 143), "currentPage", [], "any", false, false, false, 143) - 1), "html", null, true);
                if (($context["search"] ?? null)) {
                    echo "&search=";
                    echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
                }
                echo "\"
                                ";
            } else {
                // line 144
                echo "href=\"#\" ";
            }
            echo "><i class=\"fa fa-angle-left\"></i></a></li>
                                ";
            // line 145
            $context["applyDot"] = true;
            // line 146
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 146), "lastPage", [], "any", false, false, false, 146)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 147
                echo "                                ";
                if (((($context["page"] == 1) || ($context["page"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 147), "lastPage", [], "any", false, false, false, 147))) || (($context["page"] >= (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 147), "currentPage", [], "any", false, false, false, 147) - 1)) && ($context["page"] <= (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 147), "currentPage", [], "any", false, false, false, 147) + 1))))) {
                    // line 148
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 148), "currentPage", [], "any", false, false, false, 148) == $context["page"])) {
                        // line 149
                        echo "                                    <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a></li>
                                ";
                    } else {
                        // line 151
                        echo "                                <li class=\"page-item\"><a class=\"page-link\"
                                        href=\"";
                        // line 152
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list");
                        echo "?page=";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        if (($context["search"] ?? null)) {
                            echo "&search=";
                            echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                                </li>
                                ";
                    }
                    // line 155
                    echo "                                ";
                    $context["applyDot"] = true;
                    // line 156
                    echo "                                ";
                } else {
                    // line 157
                    echo "                                ";
                    if ((($context["applyDot"] ?? null) == true)) {
                        // line 158
                        echo "                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">...</a></li>
                                ";
                        // line 159
                        $context["applyDot"] = false;
                        // line 160
                        echo "                                ";
                    }
                    // line 161
                    echo "                                ";
                }
                // line 162
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                            <li class=\"page-item\"><a class=\"page-link\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 163), "currentPage", [], "any", false, false, false, 163) < twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 163), "lastPage", [], "any", false, false, false, 163))) {
                echo "href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list");
                echo "?page=";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 163), "currentPage", [], "any", false, false, false, 163) + 1), "html", null, true);
                if (($context["search"] ?? null)) {
                    echo "&search=";
                    echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
                }
                echo "\"
                                ";
            } else {
                // line 164
                echo "href=\"#\" ";
            }
            echo "><i class=\"fa fa-angle-right\"></i></a></li>
                        </ul>
                    </nav>
                    ";
        }
        // line 168
        echo "                </div>

                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"single-widget latest-video-widget mb-50\">
                        <!-- Section Heading -->
                        <div class=\"section-heading style-2 mb-30\">
                            <h5>";
        // line 174
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tin nóng"]);
        echo "</h5>
                            <div class=\"line\"></div>
                        </div>                    
                        ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["blogTagSearch"] ?? null), "posts", [], "any", false, false, false, 177), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 178
            echo "                        <!-- Single Blog Post -->
                        <div class=\"single-blog-post d-flex\">
                            <div class=\"post-thumbnail\">
                                <img src=\"";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 181)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 181), "html", null, true);
            echo " \" alt=\"\">
                            </div>
                            <div class=\"post-content\">
                                <a href=\"";
            // line 184
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 184)]);
            echo "\" style=\"font-size: inherit;\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 184), "html", null, true);
            echo "</a>
                                <div class=\"post-meta d-flex justify-content-between\">
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                    </div>

                    ";
        // line 192
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogTags"] ?? null), "tags", [], "any", false, false, false, 192))) {
            // line 193
            echo "                    <div class=\"single-widget\">
                    <!-- Section Heading -->
                    <div class=\"section-heading style-2 mb-30\">
                    <h5>";
            // line 196
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tags"]);
            echo "</h5>
                    <div class=\"line\"></div>
                    </div>
                    
                    <ul class=\"tag_list\">
                    ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogTags"] ?? null), "tags", [], "any", false, false, false, 201));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 202
                echo "                    <li class=\"list-inline-item\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tags", ["tag" => twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 202)]);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 202), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "posts", [], "any", false, false, false, 202)), "html", null, true);
                echo ")</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                    </ul>
                    </div>
                    ";
        }
        // line 207
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/pages/blogs-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 207,  585 => 204,  572 => 202,  568 => 201,  560 => 196,  555 => 193,  553 => 192,  549 => 190,  535 => 184,  529 => 181,  524 => 178,  520 => 177,  514 => 174,  506 => 168,  498 => 164,  484 => 163,  478 => 162,  475 => 161,  472 => 160,  470 => 159,  467 => 158,  464 => 157,  461 => 156,  458 => 155,  444 => 152,  441 => 151,  435 => 149,  432 => 148,  429 => 147,  424 => 146,  422 => 145,  417 => 144,  404 => 143,  400 => 141,  398 => 140,  394 => 138,  390 => 136,  381 => 133,  378 => 132,  370 => 128,  366 => 126,  352 => 125,  347 => 123,  340 => 122,  323 => 121,  317 => 118,  313 => 117,  306 => 115,  299 => 111,  293 => 107,  288 => 106,  283 => 103,  280 => 102,  271 => 99,  268 => 98,  259 => 93,  255 => 91,  241 => 90,  236 => 88,  229 => 87,  212 => 86,  206 => 83,  202 => 82,  197 => 80,  189 => 77,  178 => 69,  171 => 64,  165 => 63,  163 => 62,  159 => 60,  151 => 57,  141 => 56,  138 => 55,  136 => 54,  118 => 50,  103 => 49,  95 => 44,  74 => 25,  68 => 23,  66 => 22,  62 => 21,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Preloader -->
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"lds-ellipsis\">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- ##### Breadcrumb Area Start ##### -->
    <div class=\"vizew-breadcrumb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{'index'|page({slug:post.slug})}}\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Home</a></li>
                            
                            <li class=\"breadcrumb-item\"><a href=\"\">{{category.name}}</a></li>
                            {% if category.name |length %}
                            <li class=\"breadcrumb-item \" aria-current=\"page\">{{children.name}}</li>
                            {% endif %}
                           
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive List Posts Area Start ##### -->
    <div class=\"vizew-archive-list-posts-area mb-80\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-lg-8\">
                    <!-- Archive Catagory & View Options -->
                   
                    <div class=\"archive-catagory-view mb-50 d-flex align-items-center justify-content-between\">
                        <!-- Catagory -->
                        <div class=\"archive-catagory\">
                            <h4><i class=\"\" aria-hidden=\"true\"></i> {{category.name}} </h4>
                        </div>
                        <!-- View Options -->
                        <div class=\"view-options\">

                            <a href=\"{{'blogs-list'|page}}?view=grid{% if this.page.search %}&search={{this.page.search}}{% endif %}&page={{blogPosts.posts.currentPage}}\"{% if this.page.view != 'list' %} class=\"active\"{% endif %}><i class=\"fa fa-th-large\" aria-hidden=\"true\"></i></a>
                            <a href=\"{{'blogs-list'|page}}?view=list{% if this.page.search %}&search={{this.page.search}}{% endif %}&page={{blogPosts.posts.currentPage}}\"{% if this.page.view == 'list' %} class=\"active\"{% endif %}><i class=\"fa fa-list-ul\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                    
                    {% if this.page.search %}
                    <div class=\"col-12 mb-3\">
                        <h5>{{'Tìm kiếm cho'|_}} \"{{this.page.search}}\"{% if category %} {{'trong danh mục'|_}}
                            \"{{category.name}}\"{% endif %}: </h5>
                    </div>
                    {% endif %}

                    <!-- Single Post Area -->
                    {% if this.page.view == 'list' %}
                    {% for post in blogPosts.posts %}
                    <div class=\"single-post-area style-2\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-12 col-md-6\">
                                <!-- Post Thumbnail -->
                                <div class=\"post-thumbnail\">
                                    <img src=\"{{post.featured_images[0].getThumb(350, 207, 'crop')}}\" alt=\"\">

                                    <!-- Video Duration -->
                                </div>
                            </div>
                            <div class=\"col-12 col-md-6\">
                                <!-- Post Content -->
                                <div class=\"post-content mt-0\">
                                    <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" class=\"post-title mb-2\">{{post.title}}</a>
                                    <div class=\"post-meta d-flex align-items-center mb-2\">
                                        <i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
                                        <a href=\"#\" class=\"post-date\">{{post.created_at|date('d/m/Y')}}</a>
                                    </div>
                                    <p class=\"mb-2\">{{ post.summary | striptags | truncate(100) }}</p>
                                    {% if post.categories.count %}             
                                    <div class=\"post-meta d-flex\">
                                        <i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i>
                                        {% for category in post.categories %}
                                        <a href=\"{{ 'blogs-list'|page({slug:category.slug}) }}\">{{ category.name }}</a>
                                        {% if not loop.last %},
                                        {% endif %}
                                        {% endfor %}
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                    {% else %}
                    <div class=\"col-12 mb-3\">
                        <h5>{{'Không có kết quả nào phù hợp'|_}}</h5>
                    </div>
                    {% endfor %}
                    {% else %}

                    <div class=\"row\">                        
                        <!-- Single Blog Post -->                     
                        {% for post in blogPosts.posts %}
                        <div class=\"col-12 col-md-6\">                            
                            <div class=\"single-post-area mb-50\">
                                <!-- Post Thumbnail -->                                
                                <div class=\"post-thumbnail\">                                   
                                    <img src=\" {{post.featured_images[0].getThumb(350, 207, 'crop')}} \"alt=\"\">
                                </div>   
                              <!-- Post Content -->
                                <div class=\"post-content\">
                                    <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" class=\"post-title\">{{ post.title }}</a>
                                    
                                    <p class=\"mb-2\">{{ post.summary | striptags | truncate(100) }}</p>
                                    {% if post.categories.count %}             
                                    <div class=\"post-meta d-flex\">
                                        <i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i>
                                        {% for category in post.categories %}
                                        <a href=\"{{ 'blogs'|page({c:category.slug}) }}\">{{ category.name }}</a>
                                        {% if not loop.last %},
                                        {% endif %}
                                        {% endfor %}
                                    </div>
                                    {% endif %}
                                </div>
                            </div>                           
                        </div>
                        {% else %}
                        <div class=\"col-12 mb-3\">
                            <h5>{{'Không có kết quả nào phù hợp'|_}}</h5>
                        </div>
                        {% endfor %}
                    </div>
                    {% endif %}
                 
                    
                    {% if blogPosts.posts.total>0 %}
                    <nav class=\"mt-50\">
                        <ul class=\"pagination justify-content-center\">
                            <li class=\"page-item\"><a class=\"page-link\" {% if blogPosts.posts.currentPage > 1 %}href=\"{{ 'blogs-list'|page}}?page={{blogPosts.posts.currentPage - 1}}{% if search %}&search={{search}}{% endif %}\"
                                {% else %}href=\"#\" {% endif %}><i class=\"fa fa-angle-left\"></i></a></li>
                                {% set applyDot = true %}
                                {% for page in 1..blogPosts.posts.lastPage %}
                                {% if page==1 or page == blogPosts.posts.lastPage or (page >= blogPosts.posts.currentPage-1 and page <= blogPosts.posts.currentPage+1)  %}
                                {% if blogPosts.posts.currentPage == page %}
                                    <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">{{page}}</a></li>
                                {% else %}
                                <li class=\"page-item\"><a class=\"page-link\"
                                        href=\"{{ 'blogs-list'|page}}?page={{page}}{% if search %}&search={{search}}{% endif %}\">{{page}}</a>
                                </li>
                                {% endif %}
                                {% set applyDot = true %}
                                {% else %}
                                {% if applyDot == true %}
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">...</a></li>
                                {% set applyDot = false %}
                                {% endif %}
                                {% endif %}
                                {% endfor %}
                            <li class=\"page-item\"><a class=\"page-link\" {% if blogPosts.posts.currentPage < blogPosts.posts.lastPage %}href=\"{{ 'blogs-list'|page}}?page={{blogPosts.posts.currentPage + 1}}{% if search %}&search={{search}}{% endif %}\"
                                {% else %}href=\"#\" {% endif %}><i class=\"fa fa-angle-right\"></i></a></li>
                        </ul>
                    </nav>
                    {% endif %}
                </div>

                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"single-widget latest-video-widget mb-50\">
                        <!-- Section Heading -->
                        <div class=\"section-heading style-2 mb-30\">
                            <h5>{{'Tin nóng'|_}}</h5>
                            <div class=\"line\"></div>
                        </div>                    
                        {% for post in blogTagSearch.posts| slice(0, 6) %}
                        <!-- Single Blog Post -->
                        <div class=\"single-blog-post d-flex\">
                            <div class=\"post-thumbnail\">
                                <img src=\"{{post.featured_images[0].getThumb(350, 208, 'crop')}} \" alt=\"\">
                            </div>
                            <div class=\"post-content\">
                                <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" style=\"font-size: inherit;\" class=\"post-title\">{{post.title}}</a>
                                <div class=\"post-meta d-flex justify-content-between\">
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>

                    {% if blogTags.tags|length %}
                    <div class=\"single-widget\">
                    <!-- Section Heading -->
                    <div class=\"section-heading style-2 mb-30\">
                    <h5>{{'Tags'|_}}</h5>
                    <div class=\"line\"></div>
                    </div>
                    
                    <ul class=\"tag_list\">
                    {% for tag in blogTags.tags %}
                    <li class=\"list-inline-item\"><a href=\"{{'tags'|page({tag: tag.slug})}}\">{{ tag.name }} ({{ tag.posts|length }})</a></li>
                    {% endfor %}
                    </ul>
                    </div>
                    {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>", "F:\\xampp\\htdocs\\news/themes/news/pages/blogs-list.htm", "");
    }
}
