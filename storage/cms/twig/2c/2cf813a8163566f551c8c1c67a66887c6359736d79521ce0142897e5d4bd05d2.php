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

/* F:\xampp\htdocs\news/themes/news/pages/blog-detail.htm */
class __TwigTemplate_f0c3320964d77efa7789d4f2378d12b8623380f4a5a41d5f1279b346c1a69dee extends \Twig\Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "
<!-- ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "
<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 4)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getThumb", [0 => 500, 1 => 500, 2 => "crop"], "method", false, false, false, 4), "html", null, true);
        echo "\" alt=\"\"> -->


   <!-- Preloader -->
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"lds-ellipsis\">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

       <!-- ##### Breadcrumb Area Start ##### -->
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Pager Area Start ##### -->
    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "previousPost", [], "any", false, false, false, 21)) {
            // line 22
            echo "    <div class=\"vizew-pager-area\">
        <div class=\"vizew-pager-prev\">
            <p>";
            // line 24
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Bài trước"]);
            echo "</p>

            <!-- Single Feature Post -->
            <div class=\"single-feature-post video-post bg-img pager-article\" style=\"background-image: url(";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "previousPost", [], "any", false, false, false, 27), "featured_images", [], "any", false, false, false, 27)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 27), "html", null, true);
            echo ");\">
                <!-- Post Content -->
                <div class=\"post-content\">
                    <a href=\"";
            // line 30
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "previousPost", [], "any", false, false, false, 30), "slug", [], "any", false, false, false, 30)]);
            echo "\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "previousPost", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</a>
                    <div class=\"post-meta d-flex\">
                        <a href=\"#\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> 18</a>
                        <a href=\"#\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> 32</a>
                    </div>
                </div>
             
            </div>
        </div>
";
        }
        // line 40
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nextPost", [], "any", false, false, false, 40)) {
            // line 41
            echo "    <div class=\"vizew-pager-next\">
            <p>";
            // line 42
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Bài sau"]);
            echo "</p>

            <!-- Single Feature Post -->
            <div class=\"single-feature-post video-post bg-img pager-article\" style=\"background-image: url(";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nextPost", [], "any", false, false, false, 45), "featured_images", [], "any", false, false, false, 45)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 45), "html", null, true);
            echo ");\">
                <!-- Post Content -->
                <div class=\"post-content\">
                    <a href=\"";
            // line 48
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nextPost", [], "any", false, false, false, 48), "slug", [], "any", false, false, false, 48)]);
            echo "\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "nextPost", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48), "html", null, true);
            echo "</a>
                    <div class=\"post-meta d-flex\">
                        <a href=\"#\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> 25</a>
                        <a href=\"#\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> 25</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 58
        echo "<!-- ##### Pager Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class=\"post-details-area mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"post-details-thumb mb-50\">
                        <img src=\"img/bg-img/34.jpg\" alt=\"\">
                    </div>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <!-- Post Details Content Area -->
                <div class=\"col-12 col-md-6 col-lg-8 col-xl-9\">
                    <div class=\"post-details-content\">
                        <!-- Blog Content -->
                        <div class=\"blog-content\">

                            <!-- Post Content -->
                            <div class=\"post-content mt-0\">
                                <a href=\"#\" class=\"post-title mb-2\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 80), "html", null, true);
        echo "</a>

                                <div class=\"d-flex justify-content-between mb-30\">
                                    <div class=\"post-meta d-flex align-items-center\">
                                        <a href=\"#\" class=\"post-author\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 84), "first_name", [], "any", false, false, false, 84), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 84), "last_name", [], "any", false, false, false, 84), "html", null, true);
        echo "</a>
                                        <i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
                                        <a href=\"#\" class=\"post-date\">";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
        echo "</a>
                                    </div>
                                    ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 88), "count", [], "any", false, false, false, 88)) {
            echo "             
                                    <div class=\"post-meta d-flex\">
                                        <i class=\"fa fa-folder-o\" aria-hidden=\"true\"></i>
                                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 91));
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
                // line 92
                echo "                                        <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 92)]);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 92), "html", null, true);
                echo "</a>
                                        ";
                // line 93
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 93)) {
                    echo ",
                                        ";
                }
                // line 95
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
            // line 96
            echo "                                    </div>
                                    ";
        }
        // line 98
        echo "                                </div>
                            </div>
                            

                            <!-- Post Tags -->
                           <div>";
        // line 103
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 103);
        echo "</div>
                            

                            <!-- Related Post Area -->
                    ";
        // line 107
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogRelated"] ?? null), "posts", [], "any", false, false, false, 107)) > 0)) {
            // line 108
            echo "                    <div class=\"related-post-area mt-5\">
                        <!-- Section Title -->
                        <div class=\"section-heading style-2\">
                            <h5>Tin liên quan</h5>
                            <div class=\"line\"></div>
                        </div>

                        <div class=\"row\">

                            ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["blogRelated"] ?? null), "posts", [], "any", false, false, false, 117), 0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 118
                echo "                            
                            <div class=\"col-12 col-md-6\">
                                <div class=\"single-post-area mb-50\">
                                    <!-- Post Thumbnail -->
                                    <div class=\"post-thumbnail\">
                                        ";
                // line 123
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 123), "count", [], "any", false, false, false, 123)) {
                    // line 124
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 124), 0, 1));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 125
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 125), "html", null, true);
                        echo "\">
                                            <img class=\"img\" src=\"";
                        // line 126
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 126), "html", null, true);
                        echo "\"
                                                alt=\"{ image.description != null ? image.description : image.filename }}\"
                                                title=\"";
                        // line 128
                        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 128) != null)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 128)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 128))), "html", null, true);
                        echo "\">
                                        </a>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 131
                    echo "                                        ";
                }
                // line 132
                echo "                                      
                                    </div>

                                    <!-- Post Content -->
                                    <div class=\"post-content\">
                                        <a href=\"";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 137), "html", null, true);
                echo "\" style=\"font-size:initial ;\" class=\"post-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 137), "html", null, true);
                echo "</a>
                                        
                                    ";
                // line 139
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 139), "count", [], "any", false, false, false, 139)) {
                    echo "             
                                    <div class=\"post-meta d-flex\">
                                        <i class=\"fa fa-folder-o\" aria-hidden=\"true\"> 
                                        </i>
                                        
                                        ";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 144));
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
                        // line 145
                        echo "                                        <a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 145)]);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 145), "html", null, true);
                        echo "</a>
                                        ";
                        // line 146
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 146)) {
                            echo ",
                                        ";
                        }
                        // line 148
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
                    // line 149
                    echo "                                    </div>
                                    ";
                }
                // line 151
                echo "                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                            <!-- Single Blog Post -->
                        </div>
                    </div>
                    ";
        }
        // line 159
        echo "
                            ";
        // line 160
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "posts", [], "any", false, false, false, 160);
        // line 161
        echo "


                    <div class=\"col-xs-6\" id=\"comments-content\">
                            <!-- Comment Area Start -->
                            <div class=\"comment_area clearfix mb-50\">

                                <!-- Section Title -->
                                <div class=\"section-heading style-2\">
                                    <h4>Comment</h4>
                                    ";
        // line 171
        if ((twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "count", [], "any", false, false, false, 171) > 0)) {
            // line 172
            echo "                                    <h6 class=\"text-right\"><span id=\"comments-count\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "count", [], "any", false, false, false, 172), "html", null, true);
            echo "</span> comments</h6>
                                ";
        }
        // line 174
        echo "                                    <div class=\"line\"></div>
                                </div>
                                <div class=\"comments\">
                                    <ul>
                                        ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 179
            echo "                            <li>
                                <div class=\"comment\" id=\"comment-";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 180), "html", null, true);
            echo "\">
                                    <div class=\"comment-avatar\">
                                        ";
            // line 182
            echo twig_get_attribute($this->env, $this->source, $context["post"], "avatar", [], "any", false, false, false, 182);
            echo "
                                    </div>
                                    <div class=\"comment-content\">
                                        <div class=\"comment-header\">
                                            <span class=\"comment-name\">";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 186), "html", null, true);
            echo "</span>
                                            <a class=\"comment-date\" href=\"#comment-";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 187), "html", null, true);
            echo "\">
                                                ";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 188), "diffForHumans", [], "any", false, false, false, 188), "html", null, true);
            echo "
                                            </a>
                                        </div>
                                        <div>";
            // line 191
            echo twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 191);
            echo "</div>
                                        <div class=\"comment-footer\">
                                            <a class=\"comment-reply\" onclick=\"Comment.replay(event,'";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 193), "html", null, true);
            echo "')\">Reply</a>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                            
                                ";
            // line 199
            if (twig_get_attribute($this->env, $this->source, $context["post"], "children", [], "any", false, false, false, 199)) {
                // line 200
                echo "                                <ul>
                                    ";
                // line 201
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['posts'] = twig_get_attribute($this->env, $this->source, $context["post"], "children", [], "any", false, false, false, 201)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::list"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 202
                echo "                                </ul>
                                ";
            }
            // line 204
            echo "                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                                    </ul>
                                </div>
                          
                            </div>

                            <!-- Post A Comment Area -->
                            <div class=\"post-a-comment-area\">

                                <!-- Section Title -->
                                <div class=\"section-heading style-2\">
                                    <h4>";
        // line 216
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Bình luận"]);
        echo "</h4>
                                    <div class=\"line\"></div>
                                </div>

                                <!-- Reply Form -->
                                <div class=\"contact-form-area\">
                                 
                                ";
        // line 223
        if ((($context["user"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "settings", [], "any", false, false, false, 223), "allow_guest", [], "any", false, false, false, 223))) {
            // line 224
            echo "                            
                                <div id=\"wrap-comment-form\">
                                    <div class=\"row\" id=\"comment-form\">
                                
                                        <h2 class=\"comment-reply-title\">
                                            <small><a onclick=\"Comment.cancel()\" style=\"display: none;\" rel=\"nofollow\" id=\"cancel-comment-reply-link\"
                                                      title=\"Cancel reply\">×</a>
                                            </small>
                                        </h2>
                                        <form>
                                            <div class=\"row\">
                                            <div id=\"comment_flash_message\"></div>
                                            ";
            // line 236
            if ((($context["user"] ?? null) == false)) {
                // line 237
                echo "                                                <!-- Name Field -->
                                               
                                                    <div class=\"col-12 col-lg-6\">
                                                        <div class=\"form-group\">
                                                            <input placeholder=\"";
                // line 241
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tên"]);
                echo "\" class=\"form-control\" name=\"author\" type=\"text\">
                                                    </div>   
                                                </div>
                                
                                                <!-- Email Field -->
                                                <div class=\"col-12 col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <input placeholder=\"Email\" class=\"form-control\" name=\"email\" type=\"text\">
                                                    </div>
                                                </div>
                                                
                                            ";
            }
            // line 253
            echo "                                            <!-- Content Field -->
                                            <div class=\"col-12\">
                                                <div class=\"form-group\">
                                                    <textarea placeholder=\"";
            // line 256
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Viết bình luận"]);
            echo "...\" class=\"form-control\" id=\"comment-text\" name=\"content\"
                                                              cols=\"50\" rows=\"10\"></textarea>
                                                </div>
                                            </div>
                                          
                                
                                            <input name=\"post_id\" type=\"hidden\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "post_id", [], "any", false, false, false, 262), "html", null, true);
            echo "\">
                                
                                            ";
            // line 264
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "settings", [], "any", false, false, false, 264), "recaptcha_enabled", [], "any", false, false, false, 264)) {
                echo "  
                                                <div class=\"g-recaptcha\" data-sitekey=\"";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "settings", [], "any", false, false, false, 265), "site_key", [], "any", false, false, false, 265), "html", null, true);
                echo "\"></div>
                                                <br>
                                            ";
            }
            // line 268
            echo "                                
                                            <!-- Submit Field -->
                                            <div class=\"col-12\">
                                                <div class=\"form-group\">
                                                    <button type=\"submit\" class=\"btn vizew-btn mt-30\" \" onclick=\"Comment.saveButton(event)\">";
            // line 272
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Gửi bình luận"]);
            echo "</button>
                                                </div>
                                            </div>
                                          
                                            </div>
                                        </form>
                                    </div>
                                </div>   
                                
                                ";
        }
        // line 282
        echo "                                
                                </div>
                            </div>
                    </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                    <div class=\"single-widget share-post-widget mb-50\">
                        <div class=\"section-heading style-2\">
                            <h6>";
        // line 294
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Chia sẻ"]);
        echo "</h6>
                            <div class=\"line\"></div>
                        </div>
                        <a href=\"https://www.facebook.com/sharer/sharer.php?u=&quote=\" target=\"_blank\" onclick=\"window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> Facebook</a>
                        <a href=\"https://twitter.com/intent/tweet?source=&text=:%20\" target=\"_blank\" title=\"Tweet\" onclick=\"window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> Twitter</a>
                        <a href=\"mailto:?subject=&body=:%20\" target=\"_blank\" title=\"Send email\" onclick=\"window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;\" class=\"google\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i> Google+</a>
                  
                    </div>
                    
                    ";
        // line 303
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogTags"] ?? null), "tags", [], "any", false, false, false, 303))) {
            // line 304
            echo "                        <div class=\"single-widget\">
                        <!-- Section Heading -->
                        <div class=\"section-heading style-2 mb-30\">
                        <h5>";
            // line 307
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tags"]);
            echo "</h5>
                        <div class=\"line\"></div>
                        </div>

                        <ul class=\"tag_list\">
                        ";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogTags"] ?? null), "tags", [], "any", false, false, false, 312));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 313
                echo "                        <li class=\"list-inline-item\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tags", ["tag" => twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 313)]);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 313), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "posts", [], "any", false, false, false, 313)), "html", null, true);
                echo ")</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "                        </ul>
                        </div>
                        ";
        }
        // line 318
        echo "                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/pages/blog-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 318,  645 => 315,  632 => 313,  628 => 312,  620 => 307,  615 => 304,  613 => 303,  601 => 294,  587 => 282,  574 => 272,  568 => 268,  562 => 265,  558 => 264,  553 => 262,  544 => 256,  539 => 253,  524 => 241,  518 => 237,  516 => 236,  502 => 224,  500 => 223,  490 => 216,  478 => 206,  471 => 204,  467 => 202,  462 => 201,  459 => 200,  457 => 199,  448 => 193,  443 => 191,  437 => 188,  433 => 187,  429 => 186,  422 => 182,  417 => 180,  414 => 179,  410 => 178,  404 => 174,  398 => 172,  396 => 171,  384 => 161,  382 => 160,  379 => 159,  373 => 155,  364 => 151,  360 => 149,  346 => 148,  341 => 146,  334 => 145,  317 => 144,  309 => 139,  302 => 137,  295 => 132,  292 => 131,  283 => 128,  278 => 126,  273 => 125,  268 => 124,  266 => 123,  259 => 118,  255 => 117,  244 => 108,  242 => 107,  235 => 103,  228 => 98,  224 => 96,  210 => 95,  205 => 93,  198 => 92,  181 => 91,  175 => 88,  170 => 86,  163 => 84,  156 => 80,  132 => 58,  117 => 48,  111 => 45,  105 => 42,  102 => 41,  99 => 40,  84 => 30,  78 => 27,  72 => 24,  68 => 22,  66 => 21,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}

<!-- {{post.title}}
<img src=\"{{post.featured_images[0].getThumb(500, 500, 'crop')}}\" alt=\"\"> -->


   <!-- Preloader -->
    <div class=\"preloader d-flex align-items-center justify-content-center\">
        <div class=\"lds-ellipsis\">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

       <!-- ##### Breadcrumb Area Start ##### -->
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Pager Area Start ##### -->
    {% if post.previousPost %}
    <div class=\"vizew-pager-area\">
        <div class=\"vizew-pager-prev\">
            <p>{{'Bài trước'|_}}</p>

            <!-- Single Feature Post -->
            <div class=\"single-feature-post video-post bg-img pager-article\" style=\"background-image: url({{post.previousPost.featured_images[0].getThumb(350, 208, 'crop')}});\">
                <!-- Post Content -->
                <div class=\"post-content\">
                    <a href=\"{{'blog-detail'|page({slug:post.previousPost.slug})}}\" class=\"post-title\">{{post.previousPost.title}}</a>
                    <div class=\"post-meta d-flex\">
                        <a href=\"#\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> 18</a>
                        <a href=\"#\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> 32</a>
                    </div>
                </div>
             
            </div>
        </div>
{% endif %}
    {% if post.nextPost %}
    <div class=\"vizew-pager-next\">
            <p>{{'Bài sau'|_}}</p>

            <!-- Single Feature Post -->
            <div class=\"single-feature-post video-post bg-img pager-article\" style=\"background-image: url({{post.nextPost.featured_images[0].getThumb(350, 208, 'crop')}});\">
                <!-- Post Content -->
                <div class=\"post-content\">
                    <a href=\"{{'blog-detail'|page({slug:post.nextPost.slug})}}\" class=\"post-title\">{{post.nextPost.title}}</a>
                    <div class=\"post-meta d-flex\">
                        <a href=\"#\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> 25</a>
                        <a href=\"#\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> 25</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
<!-- ##### Pager Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class=\"post-details-area mb-80\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"post-details-thumb mb-50\">
                        <img src=\"img/bg-img/34.jpg\" alt=\"\">
                    </div>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <!-- Post Details Content Area -->
                <div class=\"col-12 col-md-6 col-lg-8 col-xl-9\">
                    <div class=\"post-details-content\">
                        <!-- Blog Content -->
                        <div class=\"blog-content\">

                            <!-- Post Content -->
                            <div class=\"post-content mt-0\">
                                <a href=\"#\" class=\"post-title mb-2\">{{post.title}}</a>

                                <div class=\"d-flex justify-content-between mb-30\">
                                    <div class=\"post-meta d-flex align-items-center\">
                                        <a href=\"#\" class=\"post-author\">{{post.user.first_name}} {{post.user.last_name}}</a>
                                        <i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
                                        <a href=\"#\" class=\"post-date\">{{post.created_at|date('d/m/Y')}}</a>
                                    </div>
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
                            

                            <!-- Post Tags -->
                           <div>{{post.content_html|raw}}</div>
                            

                            <!-- Related Post Area -->
                    {% if blogRelated.posts|length>0 %}
                    <div class=\"related-post-area mt-5\">
                        <!-- Section Title -->
                        <div class=\"section-heading style-2\">
                            <h5>Tin liên quan</h5>
                            <div class=\"line\"></div>
                        </div>

                        <div class=\"row\">

                            {% for post in blogRelated.posts|slice(0, 4) %}
                            
                            <div class=\"col-12 col-md-6\">
                                <div class=\"single-post-area mb-50\">
                                    <!-- Post Thumbnail -->
                                    <div class=\"post-thumbnail\">
                                        {% if post.featured_images.count %}
                                        {% for image in post.featured_images|slice(0, 1) %}
                                        <a href=\"{{ post.url }}\">
                                            <img class=\"img\" src=\"{{ image.getThumb(350, 208, 'crop') }}\"
                                                alt=\"{ image.description != null ? image.description : image.filename }}\"
                                                title=\"{{ image.title != null ? image.title : post.title }}\">
                                        </a>
                                        {% endfor %}
                                        {% endif %}
                                      
                                    </div>

                                    <!-- Post Content -->
                                    <div class=\"post-content\">
                                        <a href=\"{{ post.url }}\" style=\"font-size:initial ;\" class=\"post-title\">{{ post.title }}</a>
                                        
                                    {% if post.categories.count %}             
                                    <div class=\"post-meta d-flex\">
                                        <i class=\"fa fa-folder-o\" aria-hidden=\"true\"> 
                                        </i>
                                        
                                        {% for category in post.categories %}
                                        <a href=\"{{ 'blogs-list'|page({slug:category.slug}) }}\"> {{ category.name }}</a>
                                        {% if not loop.last %},
                                        {% endif %}
                                        {% endfor %}
                                    </div>
                                    {% endif %}
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                            <!-- Single Blog Post -->
                        </div>
                    </div>
                    {% endif %}

                            {% set posts = commentsPost.posts %}



                    <div class=\"col-xs-6\" id=\"comments-content\">
                            <!-- Comment Area Start -->
                            <div class=\"comment_area clearfix mb-50\">

                                <!-- Section Title -->
                                <div class=\"section-heading style-2\">
                                    <h4>Comment</h4>
                                    {% if(commentsPost.count) > 0 %}
                                    <h6 class=\"text-right\"><span id=\"comments-count\">{{ commentsPost.count }}</span> comments</h6>
                                {% endif %}
                                    <div class=\"line\"></div>
                                </div>
                                <div class=\"comments\">
                                    <ul>
                                        {% for post in posts %}
                            <li>
                                <div class=\"comment\" id=\"comment-{{post.id}}\">
                                    <div class=\"comment-avatar\">
                                        {{post.avatar|raw}}
                                    </div>
                                    <div class=\"comment-content\">
                                        <div class=\"comment-header\">
                                            <span class=\"comment-name\">{{post.name}}</span>
                                            <a class=\"comment-date\" href=\"#comment-{{post.id}}\">
                                                {{post.created_at.diffForHumans}}
                                            </a>
                                        </div>
                                        <div>{{post.content|raw}}</div>
                                        <div class=\"comment-footer\">
                                            <a class=\"comment-reply\" onclick=\"Comment.replay(event,'{{post.id}}')\">Reply</a>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                            
                                {% if post.children %}
                                <ul>
                                    {% partial \"commentsPost::list\" posts=post.children %}
                                </ul>
                                {% endif %}
                            </li>
                            {% endfor %}
                                    </ul>
                                </div>
                          
                            </div>

                            <!-- Post A Comment Area -->
                            <div class=\"post-a-comment-area\">

                                <!-- Section Title -->
                                <div class=\"section-heading style-2\">
                                    <h4>{{'Bình luận'|_}}</h4>
                                    <div class=\"line\"></div>
                                </div>

                                <!-- Reply Form -->
                                <div class=\"contact-form-area\">
                                 
                                {% if(user or commentsPost.settings.allow_guest) %}
                            
                                <div id=\"wrap-comment-form\">
                                    <div class=\"row\" id=\"comment-form\">
                                
                                        <h2 class=\"comment-reply-title\">
                                            <small><a onclick=\"Comment.cancel()\" style=\"display: none;\" rel=\"nofollow\" id=\"cancel-comment-reply-link\"
                                                      title=\"Cancel reply\">×</a>
                                            </small>
                                        </h2>
                                        <form>
                                            <div class=\"row\">
                                            <div id=\"comment_flash_message\"></div>
                                            {% if(user == false) %}
                                                <!-- Name Field -->
                                               
                                                    <div class=\"col-12 col-lg-6\">
                                                        <div class=\"form-group\">
                                                            <input placeholder=\"{{'Tên'|_}}\" class=\"form-control\" name=\"author\" type=\"text\">
                                                    </div>   
                                                </div>
                                
                                                <!-- Email Field -->
                                                <div class=\"col-12 col-lg-6\">
                                                    <div class=\"form-group\">
                                                        <input placeholder=\"Email\" class=\"form-control\" name=\"email\" type=\"text\">
                                                    </div>
                                                </div>
                                                
                                            {% endif %}
                                            <!-- Content Field -->
                                            <div class=\"col-12\">
                                                <div class=\"form-group\">
                                                    <textarea placeholder=\"{{'Viết bình luận'|_}}...\" class=\"form-control\" id=\"comment-text\" name=\"content\"
                                                              cols=\"50\" rows=\"10\"></textarea>
                                                </div>
                                            </div>
                                          
                                
                                            <input name=\"post_id\" type=\"hidden\" value=\"{{commentsPost.post_id}}\">
                                
                                            {% if (commentsPost.settings.recaptcha_enabled) %}  
                                                <div class=\"g-recaptcha\" data-sitekey=\"{{ commentsPost.settings.site_key }}\"></div>
                                                <br>
                                            {% endif %}
                                
                                            <!-- Submit Field -->
                                            <div class=\"col-12\">
                                                <div class=\"form-group\">
                                                    <button type=\"submit\" class=\"btn vizew-btn mt-30\" \" onclick=\"Comment.saveButton(event)\">{{'Gửi bình luận'|_}}</button>
                                                </div>
                                            </div>
                                          
                                            </div>
                                        </form>
                                    </div>
                                </div>   
                                
                                {% endif %}
                                
                                </div>
                            </div>
                    </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
                    <div class=\"single-widget share-post-widget mb-50\">
                        <div class=\"section-heading style-2\">
                            <h6>{{'Chia sẻ'|_}}</h6>
                            <div class=\"line\"></div>
                        </div>
                        <a href=\"https://www.facebook.com/sharer/sharer.php?u=&quote=\" target=\"_blank\" onclick=\"window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> Facebook</a>
                        <a href=\"https://twitter.com/intent/tweet?source=&text=:%20\" target=\"_blank\" title=\"Tweet\" onclick=\"window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i> Twitter</a>
                        <a href=\"mailto:?subject=&body=:%20\" target=\"_blank\" title=\"Send email\" onclick=\"window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;\" class=\"google\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i> Google+</a>
                  
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
    </section>
    <!-- ##### Post Details Area End ##### -->", "F:\\xampp\\htdocs\\news/themes/news/pages/blog-detail.htm", "");
    }
}
