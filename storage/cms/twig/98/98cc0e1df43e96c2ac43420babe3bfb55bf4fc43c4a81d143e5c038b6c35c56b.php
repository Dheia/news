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

/* F:\xampp\htdocs\news/themes/news/pages/tags.htm */
class __TwigTemplate_e9204ad7960609088a9bd85799fd98f408dd368b5bba0ff82172945fe19edf9e extends \Twig\Template
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
        $context["blogPosts1"] = ($context["blogTagSearch"] ?? null);
        // line 2
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "posts", [], "any", false, false, false, 2);
        // line 3
        echo "  <!-- ##### Breadcrumb Area Start ##### -->
  <div class=\"vizew-breadcrumb\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index", ["slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 10)]);
        echo "\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Trang chủ"]);
        echo "</a></li>                      
                                           
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->
<section class=\"blog_post_container bgc-fa\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"main_blog_post_content\">
                    <div class=\"row\">
                        
                        <div class=\"col-12 section-heading style-2\">
                            <h5>";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tìm kiếm tag"]);
        echo " \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blogTagSearch"] ?? null), "tag", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\": </h5>
                            <div class=\"line\"></div>
                        </div>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 31
            echo "                        <div class=\"col-sm-6 col-lg-6\">
                            <div class=\"blog_grid_post mb35\">
                                <div class=\"thumb\">
                                    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 35), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 36
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 36), "html", null, true);
                    echo "\">
                                        <img class=\"img-fluid\" src=\"";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 37), "html", null, true);
                    echo "\" 
                                            alt=\"{ image.description != null ? image.description : image.filename }}\"
                                            title=\"";
                    // line 39
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 39) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 39)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 39))), "html", null, true);
                    echo "\">
                                    </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                                    ";
            }
            // line 43
            echo "                                    <div class=\"tag\">
                                        ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 44), "count", [], "any", false, false, false, 44)) {
                // line 45
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 45));
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
                    // line 46
                    echo "                                        <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs", ["c" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 46)]);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46), "html", null, true);
                    echo "</a>
                                        ";
                    // line 47
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 47)) {
                        echo ",
                                        ";
                    }
                    // line 49
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
                // line 50
                echo "                                        ";
            }
            // line 51
            echo "                                    </div>
                                </div>
                                <div class=\"details\">
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
                                        <h6>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</h6>
                                    </a>
                                    <ul class=\"post_meta\">
                                        <li><a href=\"#\"><span class=\"flaticon-clock\"></span></a></li>
                                        <li><a href=\"#\"><span>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 59), "d m, Y"), "html", null, true);
            echo "</span></a></li>
                                    </ul>
                                    <p>";
            // line 61
            echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), [strip_tags(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 61)), 100]);
            echo "</p>
                                    <a class=\"text-thm\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 62), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Đọc thêm"]);
            echo " <span
                                            class=\"flaticon-right-arrow pl10\"></span></a>
                                </div>
                            </div>
                        </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "                        <div class=\"col-12\">
                            <p>";
            // line 69
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Không có bài viết nào"]);
            echo "</p>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </div>
                    <!-- ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "totalPosts", [], "any", false, false, false, 73) > 0)) {
            // line 74
            echo "                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"mbp_pagination\">
                                <ul class=\"page_navigation\">
                                    <li class=\"page-item ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 78) <= 1)) {
                echo "disabled";
            }
            echo "\">
                                        <a class=\"page-link\"
                                            ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 80) > 1)) {
                echo "href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tags");
                echo "?page=";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 80) - 1), "html", null, true);
                echo "\"
                                            ";
            } else {
                // line 81
                echo "href=\"#\" ";
            }
            echo " tabindex=\"-1\" aria-disabled=\"true\"> <span
                                                class=\"flaticon-left-arrow\"></span> ";
            // line 82
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Trước"]);
            echo "</a>
                                    </li>
                                    ";
            // line 84
            $context["applyDot"] = true;
            // line 85
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "lastPage", [], "any", false, false, false, 85)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 86
                echo "                                    ";
                if (((($context["page"] == 1) || ($context["page"] == twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "lastPage", [], "any", false, false, false, 86))) || (($context["page"] >= (twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 86) - 1)) && ($context["page"] <= (twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 86) + 1))))) {
                    // line 87
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 87) == $context["page"])) {
                        // line 88
                        echo "                                    <li class=\"page-item active\" aria-current=\"page\">
                                        <a class=\"page-link\" href=\"#\">";
                        // line 89
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo " <span
                                                class=\"sr-only\">(current)</span></a>
                                    </li>
                                    ";
                    } else {
                        // line 93
                        echo "                                    <li class=\"page-item\"><a class=\"page-link\"
                                            href=\"";
                        // line 94
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tags");
                        echo "?page=";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                                    </li>
                                    ";
                    }
                    // line 97
                    echo "                                    ";
                    $context["applyDot"] = true;
                    // line 98
                    echo "                                    ";
                } else {
                    // line 99
                    echo "                                    ";
                    if ((($context["applyDot"] ?? null) == true)) {
                        // line 100
                        echo "                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">...</a></li>
                                    ";
                        // line 101
                        $context["applyDot"] = false;
                        // line 102
                        echo "                                    ";
                    }
                    // line 103
                    echo "                                    ";
                }
                // line 104
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                                    <li
                                        class=\"page-item ";
            // line 106
            if ((twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 106) >= twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "lastPage", [], "any", false, false, false, 106))) {
                echo "disabled";
            }
            echo "\">
                                        <a class=\"page-link\"
                                            ";
            // line 108
            if ((twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 108) < twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "lastPage", [], "any", false, false, false, 108))) {
                // line 109
                echo "                                            href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tags");
                echo "?page=";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["blogPosts1"] ?? null), "currentPage", [], "any", false, false, false, 109) + 1), "html", null, true);
                echo "\"
                                            ";
            } else {
                // line 110
                echo "href=\"#\" ";
            }
            echo ">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tiếp"]);
            echo " <span
                                                class=\"flaticon-right-arrow\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 117
        echo " -->

                 
                
                </div>
            </div>
            <div class=\"col-lg-4\">
               
                <div class=\"single-widget latest-video-widget mb-50\">
                    <!-- Section Heading -->
                    <div class=\"section-heading style-2 mb-30\">
                        <h5>";
        // line 128
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tin mới"]);
        echo "</h5>
                        <div class=\"line\"></div>
                    </div>
                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 131), 4, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["post1"]) {
            echo "  
                    <!-- Single Blog Post -->
                    <div class=\"single-blog-post d-flex\">
                        <div class=\"post-thumbnail\">
                          
                            <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 136), "html", null, true);
            echo "\">
                                <img class=\"img\" src=\"";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post1"], "featured_images", [], "any", false, false, false, 137)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 137), "html", null, true);
            echo "\"
                                    alt=\"{ image.description != null ? image.description : image.filename }}\"
                                    title=\"";
            // line 139
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 139) != null)) ? (twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 139)) : (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 139))), "html", null, true);
            echo "\">
                            </a>
                        </div>
                        <div class=\"post-content\">
                            <a href=\"";
            // line 143
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 143)]);
            echo "\" style=\"font-size: inherit;\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post1"], "title", [], "any", false, false, false, 143), "html", null, true);
            echo "</a>
                            <div class=\"post-meta d-flex justify-content-between\">
                                
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                </div>

                ";
        // line 152
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogTags"] ?? null), "tags", [], "any", false, false, false, 152))) {
            // line 153
            echo "                <div class=\"single-widget\">
                <!-- Section Heading -->
                <div class=\"section-heading style-2 mb-30\">
                <h5>";
            // line 156
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tags"]);
            echo "</h5>
                <div class=\"line\"></div>
                </div>
                
                <ul class=\"tag_list\">
                ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogTags"] ?? null), "tags", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 162
                echo "                <li class=\"list-inline-item\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tags", ["tag" => twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 162)]);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 162), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "posts", [], "any", false, false, false, 162)), "html", null, true);
                echo ")</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                </ul>
                </div>
                ";
        }
        // line 167
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/pages/tags.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 167,  450 => 164,  437 => 162,  433 => 161,  425 => 156,  420 => 153,  418 => 152,  414 => 150,  399 => 143,  392 => 139,  387 => 137,  383 => 136,  373 => 131,  367 => 128,  354 => 117,  340 => 110,  332 => 109,  330 => 108,  323 => 106,  320 => 105,  314 => 104,  311 => 103,  308 => 102,  306 => 101,  303 => 100,  300 => 99,  297 => 98,  294 => 97,  284 => 94,  281 => 93,  274 => 89,  271 => 88,  268 => 87,  265 => 86,  260 => 85,  258 => 84,  253 => 82,  248 => 81,  239 => 80,  232 => 78,  226 => 74,  224 => 73,  221 => 72,  212 => 69,  209 => 68,  196 => 62,  192 => 61,  187 => 59,  180 => 55,  176 => 54,  171 => 51,  168 => 50,  154 => 49,  149 => 47,  142 => 46,  124 => 45,  122 => 44,  119 => 43,  116 => 42,  107 => 39,  102 => 37,  97 => 36,  92 => 35,  90 => 34,  85 => 31,  80 => 30,  72 => 27,  50 => 10,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set blogPosts1 = blogTagSearch %}
{% set posts = blogPosts1.posts %}
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class=\"vizew-breadcrumb\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"{{'index'|page({slug:post.slug})}}\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i>{{'Trang chủ'|_}}</a></li>                      
                                           
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->
<section class=\"blog_post_container bgc-fa\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"main_blog_post_content\">
                    <div class=\"row\">
                        
                        <div class=\"col-12 section-heading style-2\">
                            <h5>{{'Tìm kiếm tag'|_}} \"{{blogTagSearch.tag.name}}\": </h5>
                            <div class=\"line\"></div>
                        </div>
                        {% for post in posts %}
                        <div class=\"col-sm-6 col-lg-6\">
                            <div class=\"blog_grid_post mb35\">
                                <div class=\"thumb\">
                                    {% if post.featured_images.count %}
                                    {% for image in post.featured_images|slice(0, 1) %}
                                    <a href=\"{{ post.url }}\">
                                        <img class=\"img-fluid\" src=\"{{ image.getThumb(350, 208, 'crop') }}\" 
                                            alt=\"{ image.description != null ? image.description : image.filename }}\"
                                            title=\"{{ image.title != null ? image.title : post.title }}\">
                                    </a>
                                    {% endfor %}
                                    {% endif %}
                                    <div class=\"tag\">
                                        {% if post.categories.count %}
                                        {% for category in post.categories %}
                                        <a href=\"{{ 'blogs'|page({c:category.slug}) }}\">{{ category.name }}</a>
                                        {% if not loop.last %},
                                        {% endif %}
                                        {% endfor %}
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"details\">
                                    <a href=\"{{ post.url }}\">
                                        <h6>{{ post.title }}</h6>
                                    </a>
                                    <ul class=\"post_meta\">
                                        <li><a href=\"#\"><span class=\"flaticon-clock\"></span></a></li>
                                        <li><a href=\"#\"><span>{{ post.published_at|date('d m, Y') }}</span></a></li>
                                    </ul>
                                    <p>{{ post.summary | striptags | truncate(100) }}</p>
                                    <a class=\"text-thm\" href=\"{{ post.url }}\">{{'Đọc thêm'|_}} <span
                                            class=\"flaticon-right-arrow pl10\"></span></a>
                                </div>
                            </div>
                        </div>
                        {% else %}
                        <div class=\"col-12\">
                            <p>{{ 'Không có bài viết nào'|_ }}</p>
                        </div>
                        {% endfor %}
                    </div>
                    <!-- {% if blogPosts1.totalPosts>0 %}
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"mbp_pagination\">
                                <ul class=\"page_navigation\">
                                    <li class=\"page-item {% if blogPosts1.currentPage <= 1 %}disabled{% endif %}\">
                                        <a class=\"page-link\"
                                            {% if blogPosts1.currentPage > 1 %}href=\"{{ 'tags'|page}}?page={{blogPosts1.currentPage - 1}}\"
                                            {% else %}href=\"#\" {% endif %} tabindex=\"-1\" aria-disabled=\"true\"> <span
                                                class=\"flaticon-left-arrow\"></span> {{'Trước'|_}}</a>
                                    </li>
                                    {% set applyDot = true %}
                                    {% for page in 1..blogPosts1.lastPage %}
                                    {% if page==1 or page == blogPosts1.lastPage or (page >= blogPosts1.currentPage-1 and page <= blogPosts1.currentPage+1)  %}
                                    {% if blogPosts1.currentPage == page %}
                                    <li class=\"page-item active\" aria-current=\"page\">
                                        <a class=\"page-link\" href=\"#\">{{page}} <span
                                                class=\"sr-only\">(current)</span></a>
                                    </li>
                                    {% else %}
                                    <li class=\"page-item\"><a class=\"page-link\"
                                            href=\"{{ 'tags'|page}}?page={{page}}\">{{page}}</a>
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
                                    <li
                                        class=\"page-item {% if blogPosts1.currentPage >= blogPosts1.lastPage %}disabled{% endif %}\">
                                        <a class=\"page-link\"
                                            {% if blogPosts1.currentPage < blogPosts1.lastPage %}
                                            href=\"{{ 'tags'|page}}?page={{blogPosts1.currentPage + 1}}\"
                                            {% else %}href=\"#\" {% endif %}>{{'Tiếp'|_}} <span
                                                class=\"flaticon-right-arrow\"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {% endif %} -->

                 
                
                </div>
            </div>
            <div class=\"col-lg-4\">
               
                <div class=\"single-widget latest-video-widget mb-50\">
                    <!-- Section Heading -->
                    <div class=\"section-heading style-2 mb-30\">
                        <h5>{{'Tin mới'|_}}</h5>
                        <div class=\"line\"></div>
                    </div>
                    {% for post1 in blogPosts.posts | slice(4, 6) %}  
                    <!-- Single Blog Post -->
                    <div class=\"single-blog-post d-flex\">
                        <div class=\"post-thumbnail\">
                          
                            <a href=\"{{ post.url }}\">
                                <img class=\"img\" src=\"{{post1.featured_images[0].getThumb(350, 208, 'crop')}}\"
                                    alt=\"{ image.description != null ? image.description : image.filename }}\"
                                    title=\"{{ image.title != null ? image.title : post.title }}\">
                            </a>
                        </div>
                        <div class=\"post-content\">
                            <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" style=\"font-size: inherit;\" class=\"post-title\">{{post1.title}}</a>
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
</section>", "F:\\xampp\\htdocs\\news/themes/news/pages/tags.htm", "");
    }
}
