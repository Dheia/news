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

/* F:\xampp\htdocs\news/themes/news/partials/layout/footer.htm */
class __TwigTemplate_ebdc48b61c9ddeeea877daed8b2f2ebd262d83b9c182113ef3801b93f3fee807 extends \Twig\Template
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
        echo "<!-- ##### Footer Area Start ##### -->
  <footer class=\"footer-area\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Footer Widget Area -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget mb-70\">
                    <!-- Logo -->
                    <a href=\"index.html\" class=\"foo-logo d-block mb-4\"><img src=\"img/core-img/logo2.png\" alt=\"\"></a>
                    <p>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nhanh hơn, chính xác hơn. Cập nhật đến bạn đọc những tin tức bắt kịp hơi thở của cuộc sống là những gì chúng tôi luôn hướng tới."]);
        echo "</p>
                    <!-- Footer Newsletter Area -->
                    <div class=\"footer-nl-area\">
                        <form action=\"#\" method=\"post\">
                            <input type=\"email\" name=\"nl-email\" class=\"form-control\" id=\"nlEmail\" placeholder=\"";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nhập Email của bạn"]);
        echo "\">
                            <button type=\"submit\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget mb-70\">
                   
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget mb-70\">

                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget mb-70\">
                    <h6 class=\"widget-title\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Liên hệ"]);
        echo "</h6>
                    <!-- Contact Address -->
                    <div class=\"contact-address\">
                        <p>";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phường Sơn Kỳ, Q. Tân Phú"]);
        echo " <br>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hồ Chí Minh, Việt Nam"]);
        echo "</p>
                        <p>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Điện thoại: 094 400 5xxx"]);
        echo "</p>
                        <p>Email: 24news@gmail.com</p>
                    </div>
                    <!-- Footer Social Area -->
                    <div class=\"footer-social-area\">
                        <a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></i></a>
                        <a href=\"#\" class=\"youtube\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class=\"copywrite-area\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Copywrite Text -->
                <div class=\"col-12 col-sm-6\">
                    <p class=\"copywrite-text\">
&copy;<script>document.write(new Date().getFullYear());</script> ";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Bản quyền thuộc về"]);
        echo "<a href=\"https://News.com\" target=\"_blank\"> TodayNews </a>
                    </p>
                </div>
                <div class=\"col-12 col-sm-6\">
                    <nav class=\"footer-nav\">
                        <ul>
                            <li><a href=\"https://eclick.vn/lien-he/?utm_source=VNE&utm_medium=CPC_BOX&utm_campaign=LienHeQuangCao\">";
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Quảng cáo"]);
        echo "</a></li>
                            <li><a href=\"#\">";
        // line 72
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Giới thiệu"]);
        echo "</a></li>
                            <li><a href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Liên hệ"]);
        echo "</a></li>
                            <li><a href=\"#\">";
        // line 74
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Điều khoản"]);
        echo "</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/partials/layout/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 74,  137 => 73,  133 => 72,  129 => 71,  120 => 65,  94 => 42,  88 => 41,  82 => 38,  55 => 14,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ##### Footer Area Start ##### -->
  <footer class=\"footer-area\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Footer Widget Area -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget mb-70\">
                    <!-- Logo -->
                    <a href=\"index.html\" class=\"foo-logo d-block mb-4\"><img src=\"img/core-img/logo2.png\" alt=\"\"></a>
                    <p>{{'Nhanh hơn, chính xác hơn. Cập nhật đến bạn đọc những tin tức bắt kịp hơi thở của cuộc sống là những gì chúng tôi luôn hướng tới.'|_}}</p>
                    <!-- Footer Newsletter Area -->
                    <div class=\"footer-nl-area\">
                        <form action=\"#\" method=\"post\">
                            <input type=\"email\" name=\"nl-email\" class=\"form-control\" id=\"nlEmail\" placeholder=\"{{'Nhập Email của bạn'|_}}\">
                            <button type=\"submit\"><i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget mb-70\">
                   
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget mb-70\">

                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class=\"col-12 col-sm-6 col-xl-3\">
                <div class=\"footer-widget mb-70\">
                    <h6 class=\"widget-title\">{{'Liên hệ'|_}}</h6>
                    <!-- Contact Address -->
                    <div class=\"contact-address\">
                        <p>{{'Phường Sơn Kỳ, Q. Tân Phú'|_}} <br>{{'Hồ Chí Minh, Việt Nam'|_}}</p>
                        <p>{{'Điện thoại: 094 400 5xxx'|_}}</p>
                        <p>Email: 24news@gmail.com</p>
                    </div>
                    <!-- Footer Social Area -->
                    <div class=\"footer-social-area\">
                        <a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></i></a>
                        <a href=\"#\" class=\"youtube\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class=\"copywrite-area\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Copywrite Text -->
                <div class=\"col-12 col-sm-6\">
                    <p class=\"copywrite-text\">
&copy;<script>document.write(new Date().getFullYear());</script> {{'Bản quyền thuộc về'|_}}<a href=\"https://News.com\" target=\"_blank\"> TodayNews </a>
                    </p>
                </div>
                <div class=\"col-12 col-sm-6\">
                    <nav class=\"footer-nav\">
                        <ul>
                            <li><a href=\"https://eclick.vn/lien-he/?utm_source=VNE&utm_medium=CPC_BOX&utm_campaign=LienHeQuangCao\">{{'Quảng cáo'|_}}</a></li>
                            <li><a href=\"#\">{{'Giới thiệu'|_}}</a></li>
                            <li><a href=\"{{'contact'|page}}\">{{'Liên hệ'|_}}</a></li>
                            <li><a href=\"#\">{{'Điều khoản'|_}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->", "F:\\xampp\\htdocs\\news/themes/news/partials/layout/footer.htm", "");
    }
}
