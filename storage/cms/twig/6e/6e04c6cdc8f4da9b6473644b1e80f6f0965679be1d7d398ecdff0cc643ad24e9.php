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

/* F:\xampp\htdocs\news/themes/news/pages/contact.htm */
class __TwigTemplate_78a0c531c3eb4fa23600174c875700eb050f27e3cc785e1b0bfe585a583acd30 extends \Twig\Template
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
        echo "<!-- ##### Breadcrumb Area Start ##### -->
    <div class=\"vizew-breadcrumb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Trang chủ"]);
        echo "</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    
  

    <!-- ##### Contact Area Start ##### -->
    <section class=\"contact-area mb-80\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-7 col-lg-8\">
                    <!-- Section Heading -->
                    <div class=\"section-heading style-2\">
                        <h4>";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Liên hệ"]);
        echo "</h4>
                        <div class=\"line\"></div>
                    </div>

                    <p>";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Gửi góp ý của bạn cho tòa soạn"]);
        echo "</p>               
                   
                    <!-- Contact Form Area -->
                    <div class=\"contact-form-area mt-50\">
                       
                        <div class=\"confirm-contact-container\">
</div>
<form id=\"contact-form\"
  data-request=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["contactForm"] ?? null), "html", null, true);
        echo "::onMailSend\"
  data-request-update=\"'";
        // line 40
        echo twig_escape_filter($this->env, ($context["contactForm"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-contact-container'\"
  ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableFileUpload", [], "any", false, false, false, 41)) {
            // line 42
            echo "  data-request-files
  ";
        }
        // line 44
        echo "  >
  <div class=\"form-group\">
    <label for=\"name\">
      ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "
    </label>
    <input type=\"text\" name=\"name\" class=\"form-control\">
  </div>
  ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enablePhoneNumber", [], "any", false, false, false, 51)) {
            // line 52
            echo "    <div class=\"form-group\">
      <label for=\"phone_number\">
        ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "phone_number", [], "any", false, false, false, 54), "html", null, true);
            echo "
      </label>
      <input type=\"text\" name=\"phone_number\" class=\"form-control\">
    </div>
  ";
        }
        // line 59
        echo "  <div class=\"form-group\">
    <label for=\"email\">
      ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "email", [], "any", false, false, false, 61), "html", null, true);
        echo "
    </label>
    <input type=\"text\" name=\"email\" class=\"form-control\">
  </div>
  ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableSubject", [], "any", false, false, false, 65)) {
            // line 66
            echo "    <div class=\"form-group\">
      <label for=\"subject\">
        ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "subject", [], "any", false, false, false, 68), "html", null, true);
            echo "
      </label>
      <input type=\"text\" name=\"subject\" class=\"form-control\">
    </div>
  ";
        }
        // line 73
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableFileUpload", [], "any", false, false, false, 73)) {
            // line 74
            echo "  <div class=\"form-group\">
    <label for=\"attachment\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "attachment", [], "any", false, false, false, 75), "html", null, true);
            echo "</label>
    <input type=\"file\" name=\"attachment\" class=\"form-control\">
  </div>
  ";
        }
        // line 79
        echo "  <div class=\"form-group\">
    <label for=\"message\">
      ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "message", [], "any", false, false, false, 81), "html", null, true);
        echo "
    </label>
    <textarea rows=\"5\" name=\"message_content\" class=\"form-control\"></textarea>
  </div>
  ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableCaptcha", [], "any", false, false, false, 85)) {
            // line 86
            echo "    <div class=\"form-group\">
      <label for=\"g-recaptcha\">
        ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "captcha", [], "any", false, false, false, 88), "html", null, true);
            echo "
      </label>
      <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "captchaSiteKey", [], "any", false, false, false, 90), "html", null, true);
            echo "\"></div>
    </div>
  ";
        }
        // line 93
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "mailgunSubscribeExist", [], "any", false, false, false, 93)) {
            // line 94
            echo "    <div class=\"form-group\">
      <div class=\"checkbox\">
        <label><input type=\"checkbox\" name=\"maillist_subscribe\" checked>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "maillist", [], "any", false, false, false, 96), "html", null, true);
            echo "</label>
        <input type=\"hidden\" name=\"confirm_subscribe\" value=\"true\">
      </div>
    </div>
  ";
        }
        // line 101
        echo "  <button class=\"btn vizew-btn mt-30\">
    ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "button_text", [], "any", false, false, false, 102), "html", null, true);
        echo "
  </button>
</form>

                    </div>
                </div>
                


                <div class=\"col-12 col-md-5 col-lg-4\">
                    <div class=\"sidebar-area\">
                        <!-- ***** Single Widget ***** -->
                        <div class=\"single-widget newsletter-widget mb-50\">
                            <!-- Section Heading -->
                            <div class=\"section-heading style-2 mb-30\">
                                <h4>";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Thông tin về tòa soạn"]);
        echo "</h4>
                                <div class=\"line\"></div>
                            </div>
                            <p>";
        // line 120
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ngày thành lập: 15/07/2020"]);
        echo "</p>
                            
                            <p>";
        // line 122
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cơ quan chủ quản: Nhóm sinh viên"]);
        echo "</p>
                            <p>";
        // line 123
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tổng biên tập: Lê Quang Thuận"]);
        echo "</p>
                            <p>";
        // line 124
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Giấy phép: Chưa có"]);
        echo "</p>
                            
                            <hr>
                           
                            <p>";
        // line 128
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Trụ sở"]);
        echo "</p>
                            <p>";
        // line 129
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["140 Lê Trọng Tấn, Phường Tây Thạnh, TP.HCM"]);
        echo "</p>
                            <p>";
        // line 130
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Điện thoại: 0944005xxx"]);
        echo "</p>
                            <hr>
                            <p>";
        // line 132
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Liên hệ quảng cáo: 0944005xxx"]);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->";
    }

    public function getTemplateName()
    {
        return "F:\\xampp\\htdocs\\news/themes/news/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 132,  264 => 130,  260 => 129,  256 => 128,  249 => 124,  245 => 123,  241 => 122,  236 => 120,  230 => 117,  212 => 102,  209 => 101,  201 => 96,  197 => 94,  194 => 93,  188 => 90,  183 => 88,  179 => 86,  177 => 85,  170 => 81,  166 => 79,  159 => 75,  156 => 74,  153 => 73,  145 => 68,  141 => 66,  139 => 65,  132 => 61,  128 => 59,  120 => 54,  116 => 52,  114 => 51,  107 => 47,  102 => 44,  98 => 42,  96 => 41,  92 => 40,  88 => 39,  77 => 31,  70 => 27,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ##### Breadcrumb Area Start ##### -->
    <div class=\"vizew-breadcrumb\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{'index'|page}}\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i>{{'Trang chủ'|_}}</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    
  

    <!-- ##### Contact Area Start ##### -->
    <section class=\"contact-area mb-80\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-7 col-lg-8\">
                    <!-- Section Heading -->
                    <div class=\"section-heading style-2\">
                        <h4>{{'Liên hệ'|_}}</h4>
                        <div class=\"line\"></div>
                    </div>

                    <p>{{'Gửi góp ý của bạn cho tòa soạn'|_}}</p>               
                   
                    <!-- Contact Form Area -->
                    <div class=\"contact-form-area mt-50\">
                       
                        <div class=\"confirm-contact-container\">
</div>
<form id=\"contact-form\"
  data-request=\"{{ contactForm }}::onMailSend\"
  data-request-update=\"'{{ contactForm }}::confirm': '.confirm-contact-container'\"
  {% if contactForm.enableFileUpload %}
  data-request-files
  {% endif %}
  >
  <div class=\"form-group\">
    <label for=\"name\">
      {{label.name}}
    </label>
    <input type=\"text\" name=\"name\" class=\"form-control\">
  </div>
  {% if contactForm.enablePhoneNumber %}
    <div class=\"form-group\">
      <label for=\"phone_number\">
        {{label.phone_number}}
      </label>
      <input type=\"text\" name=\"phone_number\" class=\"form-control\">
    </div>
  {% endif %}
  <div class=\"form-group\">
    <label for=\"email\">
      {{label.email}}
    </label>
    <input type=\"text\" name=\"email\" class=\"form-control\">
  </div>
  {% if contactForm.enableSubject %}
    <div class=\"form-group\">
      <label for=\"subject\">
        {{label.subject}}
      </label>
      <input type=\"text\" name=\"subject\" class=\"form-control\">
    </div>
  {% endif %}
  {% if contactForm.enableFileUpload %}
  <div class=\"form-group\">
    <label for=\"attachment\">{{label.attachment}}</label>
    <input type=\"file\" name=\"attachment\" class=\"form-control\">
  </div>
  {% endif %}
  <div class=\"form-group\">
    <label for=\"message\">
      {{label.message}}
    </label>
    <textarea rows=\"5\" name=\"message_content\" class=\"form-control\"></textarea>
  </div>
  {% if contactForm.enableCaptcha %}
    <div class=\"form-group\">
      <label for=\"g-recaptcha\">
        {{label.captcha}}
      </label>
      <div class=\"g-recaptcha\" data-sitekey=\"{{ contactForm.captchaSiteKey }}\"></div>
    </div>
  {% endif %}
  {% if contactForm.mailgunSubscribeExist %}
    <div class=\"form-group\">
      <div class=\"checkbox\">
        <label><input type=\"checkbox\" name=\"maillist_subscribe\" checked>{{label.maillist}}</label>
        <input type=\"hidden\" name=\"confirm_subscribe\" value=\"true\">
      </div>
    </div>
  {% endif %}
  <button class=\"btn vizew-btn mt-30\">
    {{label.button_text}}
  </button>
</form>

                    </div>
                </div>
                


                <div class=\"col-12 col-md-5 col-lg-4\">
                    <div class=\"sidebar-area\">
                        <!-- ***** Single Widget ***** -->
                        <div class=\"single-widget newsletter-widget mb-50\">
                            <!-- Section Heading -->
                            <div class=\"section-heading style-2 mb-30\">
                                <h4>{{'Thông tin về tòa soạn'|_}}</h4>
                                <div class=\"line\"></div>
                            </div>
                            <p>{{'Ngày thành lập: 15/07/2020'|_}}</p>
                            
                            <p>{{'Cơ quan chủ quản: Nhóm sinh viên'|_}}</p>
                            <p>{{'Tổng biên tập: Lê Quang Thuận'|_}}</p>
                            <p>{{'Giấy phép: Chưa có'|_}}</p>
                            
                            <hr>
                           
                            <p>{{'Trụ sở'|_}}</p>
                            <p>{{'140 Lê Trọng Tấn, Phường Tây Thạnh, TP.HCM'|_}}</p>
                            <p>{{'Điện thoại: 0944005xxx'|_}}</p>
                            <hr>
                            <p>{{'Liên hệ quảng cáo: 0944005xxx'|_}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->", "F:\\xampp\\htdocs\\news/themes/news/pages/contact.htm", "");
    }
}
