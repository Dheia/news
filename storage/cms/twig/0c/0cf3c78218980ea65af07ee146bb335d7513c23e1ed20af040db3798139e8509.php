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

/* F:\xampp\htdocs\news/themes/news/partials/layout/header.htm */
class __TwigTemplate_062a2f261d4cc86bf5af7bc54ed726bed2d7a6c2dcc72108fd864165514df34e extends \Twig\Template
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
        echo "<div class=\"preloader d-flex align-items-center justify-content-center\">
  <div class=\"lds-ellipsis\">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class=\"header-area\">
  <!-- Top Header Area -->

  <div class=\"top-header-area\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-md-6\">
          <!-- Breaking News Widget -->
          <div class=\"breaking-news-area d-flex align-items-center\">
            <div class=\"news-title\">
              <p>";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tin nóng:"]);
        echo "</p>
            </div>
            <div id=\"breakingNewsTicker\" class=\"ticker\">
              <ul>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 25), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " 
                <li>
                  <a href=\"";
            // line 27
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog-detail", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 27)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "              </ul>
            </div>
          </div>
        </div>
        <div class=\"col-12 col-md-6\">
          <div
            class=\"top-meta-data d-flex align-items-center justify-content-end\"
          >
            <!-- Top Social Info -->
            <div class=\"top-social-info\">
              <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
              <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            </div>
            <!-- Top Search Area -->
            <div class=\"top-search-area\">
              <form action=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list");
        echo "\" method=\"get\">
                <input
                  type=\"search\"
                  name=\"search\"
                  id=\"topSearch\"
                  placeholder=\"";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tìm kiếm"]);
        echo "....\"
                />
                <button type=\"submit\" class=\"btn\">
                  <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </button>
              </form>
            </div>
      
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Area -->

  <div class=\"vizew-main-menu\" id=\"sticker\">
    <div class=\"classy-nav-container breakpoint-off\">
      <div class=\"col-md-2\" style=\"float: left;\">
        <a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index", ["slug" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 69)]);
        echo "\" class=\"nav-brand\"
        ><img src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/core-img/logo3.png");
        echo "\" height=\"157px\" width=\"157px\" style=\"margin-top: 4px; margin-left: 170px;\" alt=\"\"
      /></a>
      </div>
     
      <div class=\"container\">
        <!-- Menu -->
         
            <nav class=\"classy-navbar justify-content-between col-12\" id=\"vizewNav\">
              <!-- Nav brand -->
              <!-- Navbar Toggler -->
              <!-- <div class=\"classy-navbar-toggler\">
                <span class=\"navbarToggler\"
                  ><span></span><span></span><span></span
                ></span>
              </div> -->
                <div class=\"classy-menu\">
                  <!-- Close Button -->
                  <div class=\"classycloseIcon\">
                    <div class=\"cross-wrap\">
                      <span class=\"top\"></span><span class=\"bottom\"></span>
                    </div>
                  </div>
      
                  <!-- Nav Start -->
                  <div class=\"classynav\">
                    <ul>
                      
                      ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blogCategories1"] ?? null), "categories", [], "any", false, false, false, 97));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 98
            echo "                      <li>
                        <a href=\"";
            // line 99
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 99)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "</a>
                        ";
            // line 100
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 100))) {
                // line 101
                echo "                        <ul class=\"dropdown\">
                            ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 102));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 103
                    echo "                          <li><a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("blogs-list", ["slug" => twig_get_attribute($this->env, $this->source, $context["children"], "slug", [], "any", false, false, false, 103)]);
                    echo "\">- ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["children"], "name", [], "any", false, false, false, 103), "html", null, true);
                    echo "</a></li>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "                        </ul>
                        ";
            }
            // line 107
            echo "                      </li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                  </ul>
                  </div>
                  <!-- Nav End -->
              
            </nav>
          </div>
        
      </div>
    </div>
  </div>
</header>";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/partials/layout/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 109,  202 => 107,  198 => 105,  187 => 103,  183 => 102,  180 => 101,  178 => 100,  172 => 99,  169 => 98,  165 => 97,  135 => 70,  131 => 69,  109 => 50,  101 => 45,  84 => 30,  73 => 27,  66 => 25,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"preloader d-flex align-items-center justify-content-center\">
  <div class=\"lds-ellipsis\">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class=\"header-area\">
  <!-- Top Header Area -->

  <div class=\"top-header-area\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-md-6\">
          <!-- Breaking News Widget -->
          <div class=\"breaking-news-area d-flex align-items-center\">
            <div class=\"news-title\">
              <p>{{'Tin nóng:'|_}}</p>
            </div>
            <div id=\"breakingNewsTicker\" class=\"ticker\">
              <ul>
                {% for post in blogPosts.posts | slice(0, 5) %} 
                <li>
                  <a href=\"{{'blog-detail'|page({slug:post.slug})}}\">{{post.title}}</a>
                </li>
                {% endfor %}
              </ul>
            </div>
          </div>
        </div>
        <div class=\"col-12 col-md-6\">
          <div
            class=\"top-meta-data d-flex align-items-center justify-content-end\"
          >
            <!-- Top Social Info -->
            <div class=\"top-social-info\">
              <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
              <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            </div>
            <!-- Top Search Area -->
            <div class=\"top-search-area\">
              <form action=\"{{'blogs-list'|page}}\" method=\"get\">
                <input
                  type=\"search\"
                  name=\"search\"
                  id=\"topSearch\"
                  placeholder=\"{{'Tìm kiếm'|_}}....\"
                />
                <button type=\"submit\" class=\"btn\">
                  <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </button>
              </form>
            </div>
      
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Area -->

  <div class=\"vizew-main-menu\" id=\"sticker\">
    <div class=\"classy-nav-container breakpoint-off\">
      <div class=\"col-md-2\" style=\"float: left;\">
        <a href=\"{{'index'|page({slug:post.slug})}}\" class=\"nav-brand\"
        ><img src=\"{{'assets/img/core-img/logo3.png'|theme}}\" height=\"157px\" width=\"157px\" style=\"margin-top: 4px; margin-left: 170px;\" alt=\"\"
      /></a>
      </div>
     
      <div class=\"container\">
        <!-- Menu -->
         
            <nav class=\"classy-navbar justify-content-between col-12\" id=\"vizewNav\">
              <!-- Nav brand -->
              <!-- Navbar Toggler -->
              <!-- <div class=\"classy-navbar-toggler\">
                <span class=\"navbarToggler\"
                  ><span></span><span></span><span></span
                ></span>
              </div> -->
                <div class=\"classy-menu\">
                  <!-- Close Button -->
                  <div class=\"classycloseIcon\">
                    <div class=\"cross-wrap\">
                      <span class=\"top\"></span><span class=\"bottom\"></span>
                    </div>
                  </div>
      
                  <!-- Nav Start -->
                  <div class=\"classynav\">
                    <ul>
                      
                      {% for category in blogCategories1.categories %}
                      <li>
                        <a href=\"{{'blogs-list'|page({slug: category.slug})}}\">{{category.name}}</a>
                        {% if category.children |length %}
                        <ul class=\"dropdown\">
                            {% for children in category.children %}
                          <li><a href=\"{{'blogs-list'|page({slug: children.slug})}}\">- {{children.name}}</a></li>
                          {% endfor %}
                        </ul>
                        {% endif %}
                      </li>
                      {% endfor %}
                  </ul>
                  </div>
                  <!-- Nav End -->
              
            </nav>
          </div>
        
      </div>
    </div>
  </div>
</header>", "F:\\xampp\\htdocs\\news/themes/news/partials/layout/header.htm", "");
    }
}
