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

/* F:\xampp\htdocs\news/themes/news/pages/index.htm */
class __TwigTemplate_3b44b26cb6585d4aaff32e811f094ac6288e07a246dc65449756857bd85166aa extends \Twig\Template
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
        $context["post_1"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        $context["cmtpost"] = twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "posts", [], "any", false, false, false, 2);
        // line 3
        echo "<!-- ##### Hero Area Start ##### -->

    <section class=\"hero--area section-padding-80\">
        <div class=\"container\">
            <div class=\"row no-gutters\">
               
                <div class=\"col-12 col-md-7 col-lg-8\">
                    <div class=\"tab-content\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["post_1"] ?? null), 0, 6));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "                        <div class=\"tab-pane fade show";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12) == 1)) {
                echo " active";
            }
            echo "\" id=\"post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12), "html", null, true);
            echo "-tab\">
                            <!-- Single Feature Post -->
                            <div class=\"single-feature-post video-post bg-img\" style=\"background-image: url(";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 14)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getThumb", [0 => 740, 1 => 500, 2 => "crop"], "method", false, false, false, 14), "html", null, true);
            echo ")\">
                                
                                <!-- Play Button -->

                                <!-- Post Content -->
                                <div class=\"post-content\">
                                    
                                    <a href=\"";
            // line 21
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 21)]);
            echo "\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                                    <p style=\"color: white;\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                                    <div class=\"post-meta d-flex\">
                                                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </div>
                </div>
                

                <div class=\"col-12 col-md-5 col-lg-4\">
                    <ul class=\"nav vizew-nav-tab\" role=\"tablist\">
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["post_1"] ?? null), 0, 6));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 37
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38) == 1)) {
                echo " active";
            }
            echo "\" id=\"post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
            echo "-tab\" data-toggle=\"pill\" href=\"#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
            echo "\" aria-selected=\"true\">
                                <!-- Single Blog Post -->
                                <div class=\"single-blog-post style-2 d-flex align-items-center\">
                                    <div class=\"post-thumbnail\">
                                        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 42)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "getThumb", [0 => 740, 1 => 500, 2 => "crop"], "method", false, false, false, 42), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                    <div class=\"post-content\">
                                        <h6 class=\"post-title\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 45), "html", null, true);
            echo "</h6>
                                        <div class=\"post-meta d-flex justify-content-between\">
                                          
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    <section class=\"trending-posts-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Section Heading -->
                    <div class=\"section-heading\">
                        <h4>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tin mới"]);
        echo "</h4>
                        <div class=\"line\"></div>
                    </div>
                </div>
            </div>
            

            <div class=\"row\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["post_1"] ?? null), 6, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 77
            echo "                <!-- Single Blog Post -->
                <div class=\"col-12 col-md-4\">
                    <div class=\"single-post-area mb-80\">
                        <!-- Post Thumbnail -->
                        <div class=\"post-thumbnail\">
                            <a href=\"";
            // line 82
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 82)]);
            echo "\">
                                <img class=\"img\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 83)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 83), "html", null, true);
            echo "\"
                                    alt=\"{ image.description != null ? image.description : image.filename }}\"
                                    title=\"";
            // line 85
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 85) != null)) ? (twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 85)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 85))), "html", null, true);
            echo "\">
                            </a>

                            <!-- Video Duration -->
                            
                        </div>

                        <!-- Post Content -->
                        <div class=\"post-content\">
                           
                            <a href=\"";
            // line 95
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 95)]);
            echo "\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 95), "html", null, true);
            echo "</a>
                            <p>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 96), "html", null, true);
            echo "</p>
                            <div class=\"post-meta d-flex\">
                           
                                
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
            
        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
    <section class=\"vizew-post-area mb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-7 col-lg-8\">
                    <div class=\"all-posts-area\">
                        <!-- Section Heading -->
                        <div class=\"section-heading style-2\">
                            <h4>";
        // line 119
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hình ảnh"]);
        echo "</h4>
                            <div class=\"line\"></div>
                        </div>

                        <!-- Featured Post Slides -->
                        <div class=\"featured-post-slides owl-carousel mb-30\">
                            <!-- Single Feature Post -->
                            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["post_1"] ?? null), 10, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " 
                            <div class=\"single-feature-post video-post bg-img\" style=\"background-image: url(";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 127)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 127), "html", null, true);
            echo ")\">                            
                                <!-- Post Content -->
                                <div class=\"post-content\">
                                    <a href=\"";
            // line 130
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 130)]);
            echo "\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 130), "html", null, true);
            echo "</a>
                                    <div class=\"post-meta d-flex\">
                                
                                 
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                        </div>

                

                        <div class=\"row\">
                            ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 143));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 144
            echo "                            <div class=\"col-12 col-lg-6\">
                                <!-- Section Heading -->
                                
                                <div class=\"section-heading style-2\">
                                    <h5>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 148), "html", null, true);
            echo "</h5>
                                    <div class=\"line\"></div>
                                </div>
                                ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "posts", [], "any", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 152
                echo "                                <!-- Sports Video Slides -->
                                <div class=\"sport-video-slides owl-carousel\">
                                    <!-- Single Blog Post -->
                                    <div class=\"single-blog-post style-3 d-flex mb-50\">
                                        <div class=\"post-thumbnail\">
                                            <a href=\"";
                // line 157
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 157)]);
                echo "\">
                                                <img class=\"img\" src=\"";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 158)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 158), "html", null, true);
                echo "\"
                                                    alt=\"{ image.description != null ? image.description : image.filename }}\"
                                                    title=\"";
                // line 160
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 160) != null)) ? (twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 160)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 160))), "html", null, true);
                echo "\">
                                            </a>
                                        </div>
                                        <div class=\"post-content\">
                                            <a href=\"";
                // line 164
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 164)]);
                echo "\" class=\"post-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 164), "html", null, true);
                echo "</a>
                                            <div class=\"post-meta d-flex justify-content-between\">
                                             
                                            </div>
                                        </div>
                                    </div>                               
                                </div>    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                                                          
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                            

                        </div>


                   

               

                    </div>
                </div>

                <div class=\"col-12 col-md-5 col-lg-4\">
                    <div class=\"sidebar-area\">

                        <!-- ***** Single Widget ***** -->
                        <div class=\"single-widget followers-widget mb-50\">
                            <a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i><span class=\"counter\">198</span><span>Fan</span></a>
                            <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i><span class=\"counter\">220</span><span>Followers</span></a>
                            <a href=\"#\" class=\"google\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i><span class=\"counter\">140</span><span>Subscribe</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class=\"single-widget latest-video-widget mb-50\">
                            <!-- Section Heading -->
                            <div class=\"section-heading style-2 mb-30\">
                                <h5>";
        // line 199
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tin nóng"]);
        echo "</h5>
                                <div class=\"line\"></div>
                            </div>                    
                            ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["blogTagSearch"] ?? null), "posts", [], "any", false, false, false, 202), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 203
            echo "                            <!-- Single Blog Post -->
                            <div class=\"single-blog-post d-flex\">
                                <div class=\"post-thumbnail\">
                                    <a href=\"";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 206), "html", null, true);
            echo "\">
                                        <img class=\"img\" src=\"";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 207)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 207), "html", null, true);
            echo "\"
                                            alt=\"{ image.description != null ? image.description : image.filename }}\"
                                            title=\"";
            // line 209
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 209) != null)) ? (twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 209)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 209))), "html", null, true);
            echo "\">
                                    </a>
                                    
                                </div>
                                <div class=\"post-content\">
                                    <a href=\"";
            // line 214
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 214)]);
            echo "\" style=\"font-size: inherit;\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 214), "html", null, true);
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
        // line 220
        echo "                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class=\"single-widget mb-50\">
                            <!-- Section Heading -->
                            <div class=\"section-heading style-2 mb-30\">
                                <h5>";
        // line 226
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tin mới"]);
        echo "</h5>
                                <div class=\"line\"></div>
                            </div>
                            ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 229), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
                            <!-- Single Blog Post -->
                            <div class=\"single-blog-post d-flex\">
                                <div class=\"post-thumbnail\">
                                  
                                    <a href=\"";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 234), "html", null, true);
            echo "\">
                                        <img class=\"img\" src=\"";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 235)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "getThumb", [0 => 350, 1 => 208, 2 => "crop"], "method", false, false, false, 235), "html", null, true);
            echo "\"
                                            alt=\"{ image.description != null ? image.description : image.filename }}\"
                                            title=\"";
            // line 237
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 237) != null)) ? (twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 237)) : (twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 237))), "html", null, true);
            echo "\">
                                    </a>
                                </div>
                                <div class=\"post-content\">
                                    <a href=\"";
            // line 241
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 241)]);
            echo "\" style=\"font-size: inherit;\" class=\"post-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 241), "html", null, true);
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
        // line 248
        echo "                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 248,  513 => 241,  506 => 237,  501 => 235,  497 => 234,  487 => 229,  481 => 226,  473 => 220,  459 => 214,  451 => 209,  446 => 207,  442 => 206,  437 => 203,  433 => 202,  427 => 199,  399 => 173,  391 => 171,  375 => 164,  368 => 160,  363 => 158,  359 => 157,  352 => 152,  348 => 151,  342 => 148,  336 => 144,  332 => 143,  325 => 138,  309 => 130,  303 => 127,  297 => 126,  287 => 119,  271 => 105,  256 => 96,  250 => 95,  237 => 85,  232 => 83,  228 => 82,  221 => 77,  217 => 76,  206 => 68,  190 => 54,  167 => 45,  161 => 42,  146 => 38,  143 => 37,  126 => 36,  118 => 30,  96 => 22,  90 => 21,  80 => 14,  68 => 12,  51 => 11,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%set post_1 = blogPosts.posts%}
{% set cmtpost = commentsPost.posts %}
<!-- ##### Hero Area Start ##### -->

    <section class=\"hero--area section-padding-80\">
        <div class=\"container\">
            <div class=\"row no-gutters\">
               
                <div class=\"col-12 col-md-7 col-lg-8\">
                    <div class=\"tab-content\">
                        {% for post in post_1 | slice(0, 6) %}
                        <div class=\"tab-pane fade show{%if loop.index==1 %} active{% endif %}\" id=\"post-{{loop.index}}\" role=\"tabpanel\" aria-labelledby=\"post-{{loop.index}}-tab\">
                            <!-- Single Feature Post -->
                            <div class=\"single-feature-post video-post bg-img\" style=\"background-image: url({{post.featured_images[0].getThumb(740, 500, 'crop')}})\">
                                
                                <!-- Play Button -->

                                <!-- Post Content -->
                                <div class=\"post-content\">
                                    
                                    <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" class=\"post-title\">{{post.title}}</a>
                                    <p style=\"color: white;\">{{post.excerpt}}</p>
                                    <div class=\"post-meta d-flex\">
                                                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
                

                <div class=\"col-12 col-md-5 col-lg-4\">
                    <ul class=\"nav vizew-nav-tab\" role=\"tablist\">
                        {% for post in post_1 | slice(0, 6) %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link{% if loop.index==1 %} active{% endif %}\" id=\"post-{{loop.index}}-tab\" data-toggle=\"pill\" href=\"#post-{{loop.index}}\" role=\"tab\" aria-controls=\"post-{{loop.index}}\" aria-selected=\"true\">
                                <!-- Single Blog Post -->
                                <div class=\"single-blog-post style-2 d-flex align-items-center\">
                                    <div class=\"post-thumbnail\">
                                        <img src=\"{{post.featured_images[0].getThumb(740, 500, 'crop')}}\" alt=\"\">
                                    </div>
                                    <div class=\"post-content\">
                                        <h6 class=\"post-title\">{{post.title}}</h6>
                                        <div class=\"post-meta d-flex justify-content-between\">
                                          
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    <section class=\"trending-posts-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Section Heading -->
                    <div class=\"section-heading\">
                        <h4>{{'Tin mới'|_}}</h4>
                        <div class=\"line\"></div>
                    </div>
                </div>
            </div>
            

            <div class=\"row\">
                {% for post in post_1 | slice(6, 6) %}
                <!-- Single Blog Post -->
                <div class=\"col-12 col-md-4\">
                    <div class=\"single-post-area mb-80\">
                        <!-- Post Thumbnail -->
                        <div class=\"post-thumbnail\">
                            <a href=\"{{'blog-detail'|page({slug:post.slug})}}\">
                                <img class=\"img\" src=\"{{post.featured_images[0].getThumb(350, 208, 'crop')}}\"
                                    alt=\"{ image.description != null ? image.description : image.filename }}\"
                                    title=\"{{ image.title != null ? image.title : post.title }}\">
                            </a>

                            <!-- Video Duration -->
                            
                        </div>

                        <!-- Post Content -->
                        <div class=\"post-content\">
                           
                            <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" class=\"post-title\">{{post.title}}</a>
                            <p>{{post.excerpt}}</p>
                            <div class=\"post-meta d-flex\">
                           
                                
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            
        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
    <section class=\"vizew-post-area mb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-7 col-lg-8\">
                    <div class=\"all-posts-area\">
                        <!-- Section Heading -->
                        <div class=\"section-heading style-2\">
                            <h4>{{'Hình ảnh'|_}}</h4>
                            <div class=\"line\"></div>
                        </div>

                        <!-- Featured Post Slides -->
                        <div class=\"featured-post-slides owl-carousel mb-30\">
                            <!-- Single Feature Post -->
                            {% for post in post_1 | slice(10, 6) %} 
                            <div class=\"single-feature-post video-post bg-img\" style=\"background-image: url({{post.featured_images[0].getThumb(350, 208, 'crop')}})\">                            
                                <!-- Post Content -->
                                <div class=\"post-content\">
                                    <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" class=\"post-title\">{{post.title}}</a>
                                    <div class=\"post-meta d-flex\">
                                
                                 
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>

                

                        <div class=\"row\">
                            {% for category in blogCategories.categories %}
                            <div class=\"col-12 col-lg-6\">
                                <!-- Section Heading -->
                                
                                <div class=\"section-heading style-2\">
                                    <h5>{{ category.name }}</h5>
                                    <div class=\"line\"></div>
                                </div>
                                {% for post in category.posts %}
                                <!-- Sports Video Slides -->
                                <div class=\"sport-video-slides owl-carousel\">
                                    <!-- Single Blog Post -->
                                    <div class=\"single-blog-post style-3 d-flex mb-50\">
                                        <div class=\"post-thumbnail\">
                                            <a href=\"{{'blog-detail'|page({slug:post.slug})}}\">
                                                <img class=\"img\" src=\"{{post.featured_images[0].getThumb(350, 208, 'crop')}}\"
                                                    alt=\"{ image.description != null ? image.description : image.filename }}\"
                                                    title=\"{{ image.title != null ? image.title : post.title }}\">
                                            </a>
                                        </div>
                                        <div class=\"post-content\">
                                            <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" class=\"post-title\">{{post.title}}</a>
                                            <div class=\"post-meta d-flex justify-content-between\">
                                             
                                            </div>
                                        </div>
                                    </div>                               
                                </div>    
                                {% endfor %}                                                          
                            </div>
                            {% endfor %}                            

                        </div>


                   

               

                    </div>
                </div>

                <div class=\"col-12 col-md-5 col-lg-4\">
                    <div class=\"sidebar-area\">

                        <!-- ***** Single Widget ***** -->
                        <div class=\"single-widget followers-widget mb-50\">
                            <a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i><span class=\"counter\">198</span><span>Fan</span></a>
                            <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i><span class=\"counter\">220</span><span>Followers</span></a>
                            <a href=\"#\" class=\"google\"><i class=\"fa fa-google\" aria-hidden=\"true\"></i><span class=\"counter\">140</span><span>Subscribe</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->
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
                                    <a href=\"{{ post.url }}\">
                                        <img class=\"img\" src=\"{{post.featured_images[0].getThumb(350, 208, 'crop')}}\"
                                            alt=\"{ image.description != null ? image.description : image.filename }}\"
                                            title=\"{{ image.title != null ? image.title : post.title }}\">
                                    </a>
                                    
                                </div>
                                <div class=\"post-content\">
                                    <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" style=\"font-size: inherit;\" class=\"post-title\">{{post.title}}</a>
                                    <div class=\"post-meta d-flex justify-content-between\">
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class=\"single-widget mb-50\">
                            <!-- Section Heading -->
                            <div class=\"section-heading style-2 mb-30\">
                                <h5>{{'Tin mới'|_}}</h5>
                                <div class=\"line\"></div>
                            </div>
                            {% for post in blogPosts.posts | slice(0, 6) %}  
                            <!-- Single Blog Post -->
                            <div class=\"single-blog-post d-flex\">
                                <div class=\"post-thumbnail\">
                                  
                                    <a href=\"{{ post.url }}\">
                                        <img class=\"img\" src=\"{{post.featured_images[0].getThumb(350, 208, 'crop')}}\"
                                            alt=\"{ image.description != null ? image.description : image.filename }}\"
                                            title=\"{{ image.title != null ? image.title : post.title }}\">
                                    </a>
                                </div>
                                <div class=\"post-content\">
                                    <a href=\"{{'blog-detail'|page({slug:post.slug})}}\" style=\"font-size: inherit;\" class=\"post-title\">{{post.title}}</a>
                                    <div class=\"post-meta d-flex justify-content-between\">
                                        
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>", "F:\\xampp\\htdocs\\news/themes/news/pages/index.htm", "");
    }
}
