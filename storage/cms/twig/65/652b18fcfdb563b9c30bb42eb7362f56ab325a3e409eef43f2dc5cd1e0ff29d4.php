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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/partials/site/header.htm */
class __TwigTemplate_44576f9347c6f75cb792e637caa4c3e1e0eb65d9605efd3915b4cea10dfbf1a1 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"header\">
  <div class=\"header__top\">
    <div class=\"container\">
      <div class=\"header__top-wrap\">
       <div class=\"social\">
          <ul>

            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "social", [], "any", false, false, true, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            <li>
              <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                <i class=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\"></i>
              </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            <li>
              <a href=\"mailto:";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 16), "email", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
                <i class=\"icon-envelope\" style=\"font-size: 11px; margin-left: -2px;\"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class=\"info\">
          <div class=\"info__item\" style=\"display: flex; flex-direction: row; width: 100%;padding: 0;\">
            <p>";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Сбор посылок на следующий груз до"]);
        echo "

              ";
        // line 26
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 27
            echo "              ";
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), ["wednesday", "%e %BP"]);
            echo "

              ";
        } else {
            // line 30
            echo "              ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "wednesday", "d F"), "html", null, true);
            echo "
              ";
        }
        // line 32
        echo "
            </p>
          </div>
        </div>
        <div class=\"info\">
          <div class=\"info__item info__item--fw-b info__item--login\">

            ";
        // line 39
        if (($context["user"] ?? null)) {
            // line 40
            echo "            <div class=\"user-login\" style=\"width: 35px; cursor: pointer;\">
              <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fal\" data-icon=\"user-circle\" role=\"img\"
                xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 496 512\"
                class=\"svg-inline--fa fa-user-circle fa-w-16 fa-3x\">
                <path fill=\"currentColor\"
                  d=\"M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z\"
                  class=\"\"></path>
              </svg>

              <div class=\"drop-down\">
                <a href=\"";
            // line 50
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("personal");
            echo "\">
                  <div class=\"login\">";
            // line 51
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Личный кабинет"]);
            echo "</div>
                </a>
                <a data-request=\"onLogout\" data-request-data=\"redirect: '";
            // line 53
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "'\" style=\"cursor: pointer;\">
                  <div class=\"login\">";
            // line 54
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Выход"]);
            echo "</div>
                </a>
              </div>
            </div>


            ";
        } else {
            // line 61
            echo "            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("registration");
            echo "\">
              <i class=\"icon-login\"></i>
              <div class=\"login\">";
            // line 63
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Войти"]);
            echo "</div>
            </a>
            ";
        }
        // line 66
        echo "          </div>
          <div class=\"locale\">
            ";
        // line 68
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 69
            echo "            <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
            <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
            ";
        } else {
            // line 72
            echo "            <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
            <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
            ";
        }
        // line 75
        echo "
          </div>
          <div class=\"services-list\">
            <div class=\"menu__wrapper\">
              <div class=\"menu__item--meatball\">
                <div class=\"circle\"></div>
                <div class=\"circle\"></div>
                <div class=\"circle\"></div>
              </div>
            </div>
            <div class=\"services-list__dropdown\">
              <ul>
                <li class=\"active\"><a href=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"> <i class=\"icon-home\"></i>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная"]);
        echo "</a></li>
                <li><a href=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\"><i class=\"icon-serv\"></i>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Услуги"]);
        echo " </a></li>
                <li><a href=\"#calculator\" class=\"cost-calc-js order-js\"><i
                      class=\"icon-calculate\"></i>";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Рассчитать перевозку"]);
        echo "</a></li>
                <li><a href=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reviews");
        echo "\"><i class=\"icon-handshake\"></i>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отзывы"]);
        echo " </a></li>
                <li><a href=\"";
        // line 92
        echo RainLab\Pages\Classes\Page::url("about");
        echo "\"><i class=\"icon-about\"></i>";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["О компании"]);
        echo " </a></li>
                <li><a href=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("faq");
        echo "\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" style=\"margin-right: 15px;\" viewBox=\"0 0 26 26\"
                      fill=\"none\">
                      <path
                        d=\"M14.083 6.49977C14.083 7.09804 13.598 7.58304 12.9998 7.58304C12.4015 7.58304 11.9165 7.09804 11.9165 6.49977C11.9165 5.9015 12.4015 5.4165 12.9998 5.4165C13.598 5.4165 14.083 5.9015 14.083 6.49977Z\"
                        fill=\"#fcb408\"></path>
                      <path
                        d=\"M12.9998 20.5833C12.5513 20.5833 12.1873 20.2193 12.1873 19.7708V11.375H11.104C10.6555 11.375 10.2915 11.011 10.2915 10.5625C10.2915 10.114 10.6555 9.75 11.104 9.75H12.9998C13.4483 9.75 13.8123 10.114 13.8123 10.5625V19.7708C13.8123 20.2193 13.4483 20.5833 12.9998 20.5833Z\"
                        fill=\"#fcb408\"></path>
                      <path
                        d=\"M13 26C5.83151 26 0 20.1685 0 13C0 5.83151 5.83151 0 13 0C20.1685 0 26 5.83151 26 13C26 20.1685 20.1685 26 13 26ZM13 1.625C6.72752 1.625 1.625 6.72752 1.625 13C1.625 19.2725 6.72752 24.375 13 24.375C19.2725 24.375 24.375 19.2725 24.375 13C24.375 6.72752 19.2725 1.625 13 1.625Z\"
                        fill=\"#fcb408\"></path>
                      <path
                        d=\"M15.4375 20.5835H10.5625C10.114 20.5835 9.75 20.2195 9.75 19.771C9.75 19.3225 10.114 18.9585 10.5625 18.9585H15.4375C15.886 18.9585 16.25 19.3225 16.25 19.771C16.25 20.2195 15.886 20.5835 15.4375 20.5835Z\"
                        fill=\"#fcb408\"></path>
                    </svg> FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"header__middle\">
    <div class=\"container\">
      <div class=\"header__middle-wrap\">
        <div class=\"header__middle-item logo\">
          <a href=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
            <svg width=\"130\" viewBox=\"0 0 166 76\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <path
                d=\"M6.39074 57.7039C4.69361 57.4918 3.26166 57.147 3.26166 55.9272C3.26166 54.893 4.21629 54.0445 6.1786 54.0445C7.71661 54.0445 9.04249 54.8135 9.51981 55.609L11.6412 54.5218C10.5805 52.3474 8.3 51.7109 6.09904 51.7109C3.50032 51.7375 0.63642 52.9307 0.63642 55.8212C0.63642 58.9768 3.28818 59.7458 6.1786 60.0905C8.06134 60.3026 9.44026 60.833 9.44026 62.1589C9.44026 63.6969 7.87572 64.2803 6.20511 64.2803C4.48147 64.2803 2.8639 63.5908 2.22747 62.0528L0 63.193C1.03419 65.7652 3.26166 66.6668 6.15208 66.6668C9.28115 66.6668 12.0655 65.3145 12.0655 62.1854C12.0655 58.8176 9.33419 58.0751 6.39074 57.7039Z\"
                fill=\"#1C2333\"></path>
              <path d=\"M16.4144 56.3516H13.9482V66.3222H16.4144V56.3516Z\" fill=\"#1C2333\"></path>
              <path d=\"M21.0548 52.2422H18.6152V66.323H21.0548V52.2422Z\" fill=\"#1C2333\"></path>
              <path
                d=\"M31.8737 56.538V56.4054H28.9302L25.589 60.3831V52.2422H23.1494V66.323H25.589V61.8416L29.4871 66.323H32.4571V66.1374L27.843 61.0725L31.8737 56.538Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M46.3793 56.9085C46.3793 54.4688 44.6291 52.2679 41.3144 52.2414C39.0869 52.2414 36.8329 52.2148 34.6055 52.2148V66.3222H37.2572V61.6021H39.8029L43.9131 66.3222H47.0687V66.1366L42.7994 61.3369C45.4777 60.78 46.3793 58.8177 46.3793 56.9085ZM37.2572 59.2155V54.7075H41.3144C42.985 54.7075 43.7275 55.8478 43.7275 56.9615C43.7275 58.1018 43.0115 59.2155 41.3144 59.2155H37.2572Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M52.6639 56.1934C49.5083 56.1934 47.5195 58.5269 47.5195 61.3643C47.5195 64.2282 49.4553 66.5352 52.6639 66.5352C55.8726 66.5352 57.8349 64.2282 57.8349 61.3643C57.8614 58.5269 55.8195 56.1934 52.6639 56.1934ZM52.6639 64.2812C50.8607 64.2812 49.9591 62.8758 49.9591 61.3643C49.9591 59.8793 50.8873 58.4208 52.6639 58.4208C54.308 58.4208 55.3687 59.8793 55.3687 61.3643C55.3687 62.8758 54.4671 64.2812 52.6639 64.2812Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M67.3285 57.7565C66.7716 56.7754 65.4988 56.139 64.1729 56.139C61.2825 56.1124 59.002 57.9156 59.002 61.3364C59.002 64.8102 61.1764 66.6399 64.1198 66.6134C65.2336 66.5869 66.7716 66.03 67.355 64.8632L67.4876 66.3217H69.7946V56.4041H67.4345L67.3285 57.7565ZM64.385 64.3594C62.7409 64.3594 61.4416 63.2191 61.4416 61.3364C61.4416 59.4536 62.7409 58.3399 64.385 58.3399C68.2566 58.3399 68.2566 64.3594 64.385 64.3594Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M79.7123 57.7313C79.1289 56.6971 77.4848 56.1403 76.4506 56.1403C73.5602 56.1403 71.3857 57.9169 71.3857 61.3377C71.3857 64.5994 73.5867 66.5351 76.5036 66.5351C77.7234 66.5351 78.9432 66.1374 79.7123 64.9441L79.8714 66.323H82.1784V52.2422H79.7123V57.7313ZM76.6627 64.2812C75.0982 64.2812 73.8519 63.0879 73.8519 61.3642C73.8519 59.561 75.0982 58.4738 76.6627 58.4738C78.2008 58.4738 79.5532 59.6406 79.5532 61.3642C79.5266 63.1409 78.2008 64.2812 76.6627 64.2812Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M90.5577 57.7039C88.8606 57.4918 87.4287 57.147 87.4287 55.9272C87.4287 54.893 88.3833 54.0445 90.3456 54.0445C91.8836 54.0445 93.2095 54.8135 93.6868 55.609L95.8082 54.5218C94.7475 52.3474 92.467 51.7109 90.266 51.7109C87.6673 51.7375 84.8034 52.9307 84.8034 55.8212C84.8034 58.9768 87.4552 59.7458 90.3456 60.0905C92.2283 60.3026 93.6073 60.833 93.6073 62.1589C93.6073 63.6969 92.0427 64.2803 90.3721 64.2803C88.6485 64.2803 87.0309 63.5908 86.3945 62.0528L84.167 63.193C85.2012 65.7652 87.4286 66.6668 90.3191 66.6668C93.4481 66.6668 96.2325 65.3145 96.2325 62.1854C96.2325 58.8176 93.4747 58.0751 90.5577 57.7039Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M103.843 56.2455C102.703 56.2455 101.616 56.5903 100.741 57.7305V52.2148H98.2744V66.3222H100.741V61.2573C100.741 59.7724 101.748 58.526 103.207 58.526C104.506 58.526 105.461 59.295 105.461 61.0982V66.3222H107.927V61.0982C107.927 58.1548 106.68 56.2455 103.843 56.2455Z\"
                fill=\"#1C2333\"></path>
              <path d=\"M112.461 56.3516H109.995V66.3222H112.461V56.3516Z\" fill=\"#1C2333\"></path>
              <path
                d=\"M120.337 56.166C119.197 56.166 117.871 56.6433 117.128 57.7571L116.969 56.3782H114.662V69.4778H117.128V65.129C117.844 66.2162 119.382 66.5344 120.443 66.5344C123.625 66.5344 125.455 64.2274 125.455 61.3369C125.428 58.4465 123.413 56.166 120.337 56.166ZM120.151 64.1743C118.481 64.1743 117.34 62.9015 117.34 61.3635C117.34 59.8254 118.401 58.5526 120.151 58.5526C121.928 58.5526 122.962 59.8254 122.962 61.3635C122.962 62.9015 121.848 64.1743 120.151 64.1743Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M132.933 56.166C131.792 56.166 130.467 56.6433 129.698 57.7571L129.538 56.3782H127.231V69.4778H129.698V65.129C130.414 66.2162 131.952 66.5344 133.012 66.5344C136.194 66.5344 138.024 64.2274 138.024 61.3369C138.024 58.4465 135.982 56.166 132.933 56.166ZM132.747 64.1743C131.076 64.1743 129.936 62.9015 129.936 61.3635C129.936 59.8254 130.997 58.5526 132.747 58.5526C134.524 58.5526 135.558 59.8254 135.558 61.3635C135.558 62.9015 134.418 64.1743 132.747 64.1743Z\"
                fill=\"#1C2333\"></path>
              <path d=\"M142.293 56.3516H139.827V66.3222H142.293V56.3516Z\" fill=\"#1C2333\"></path>
              <path
                d=\"M150.063 56.2461C148.817 56.2461 147.809 56.7499 146.801 57.7311L146.642 56.3787H144.441V66.3228H146.881V61.2579C146.881 59.7464 147.915 58.4736 149.427 58.4736C150.991 58.4736 151.813 59.6138 151.813 61.1253V66.3228H154.279V61.0988C154.279 57.9963 152.397 56.2461 150.063 56.2461Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M165.92 61.0989C165.92 60.0117 165.628 59.0305 164.886 58.1554L166 56.75L164.196 55.3711L163.215 56.6174C162.526 56.1666 161.73 56.0605 160.935 56.0605C158.15 56.0605 155.896 57.9963 155.896 61.0989C155.896 64.2014 157.832 66.0842 160.935 66.0842C162.155 66.0842 163.454 66.7206 163.454 68.073C163.454 69.4519 162.34 70.1944 160.935 70.1944C159.529 70.1944 158.336 69.3459 158.336 68.073H155.896C155.896 70.7513 158.044 72.5014 160.935 72.5014C163.825 72.5014 165.92 70.8043 165.92 68.073C165.92 66.8002 165.522 65.6069 163.878 64.7848C165.469 64.0689 165.92 62.3452 165.92 61.0989ZM160.908 63.8567C159.476 63.8567 158.31 62.8225 158.31 61.0989C158.31 59.3752 159.476 58.288 160.908 58.288C162.314 58.288 163.481 59.3752 163.481 61.0989C163.507 62.8225 162.34 63.8567 160.908 63.8567Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M1.77705 71.705C1.77705 71.4664 1.98919 71.3603 2.33392 71.3603C2.67865 71.3603 3.23552 71.5459 3.68632 71.8111L4.05756 70.989C3.63328 70.6974 2.99686 70.5117 2.38696 70.5117C1.37929 70.5117 0.689832 71.0156 0.689832 71.8111C0.689832 73.3491 3.02338 72.8718 3.02338 73.6938C3.02338 73.959 2.78472 74.1181 2.38696 74.1181C1.93616 74.1181 1.29973 73.8529 0.848935 73.4552L0.451172 74.2507C0.955006 74.675 1.67098 74.9402 2.38696 74.9402C3.34159 74.9402 4.1106 74.4894 4.1106 73.6143C4.08408 72.0763 1.77705 72.5271 1.77705 71.705Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M12.198 73.8526L11.2699 70.5645H10.3152L9.3871 73.8526L8.48551 70.5645H7.4248L8.85675 74.9133H9.89094L10.7925 71.8108L11.6676 74.9133H12.6753L14.1338 70.5645H13.1261L12.198 73.8526Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M18.6686 70.5645H17.6875V74.9399H18.6686V70.5645Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M22.7529 74.9133H23.7341V73.2692H25.7229V72.4472H23.7341V71.36H25.882L25.9085 70.5645H22.7529V74.9133Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M29.1699 71.3865H30.4958V74.9133H31.477V71.3865H32.8028V70.5645H29.1699V71.3865Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M36.7268 73.9844C36.4616 73.9844 36.2495 74.1965 36.2495 74.4617C36.2495 74.6208 36.3025 74.7534 36.4351 74.8595L36.1699 75.4959H36.6472L37.0715 74.8595C37.1511 74.7534 37.2041 74.6208 37.2041 74.4617C37.2041 74.17 36.9655 73.9844 36.7268 73.9844Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M49.3492 72.076C49.3492 71.1213 48.7128 70.5645 47.546 70.5645H45.6367V74.9399H46.6179V73.6935H47.5195H47.6255L48.315 74.9399H49.4287L48.5006 73.5079C49.0575 73.2427 49.3492 72.7389 49.3492 72.076ZM47.5725 72.845H46.6709V71.36H47.5725C48.1028 71.36 48.4211 71.5986 48.4211 72.1025C48.4211 72.6063 48.1028 72.845 47.5725 72.845Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M54.2819 73.1367H56.4033V72.3146H54.2819V71.36H56.642V70.5645H53.3008V74.9133H56.695V74.1178H54.2819V73.1367Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M61.6004 70.5645H60.5928V74.9133H63.4567V74.0648H61.6004V70.5645Z\" fill=\"#FCB408\"></path>
              <path d=\"M68.1501 70.5645H67.1689V74.9399H68.1501V70.5645Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M73.6397 70.5645L71.7305 74.9399H72.7381L73.0829 74.0913H75.0982L75.4429 74.9399H76.5036L74.6474 70.5645H73.6397ZM73.4276 73.2692L74.1171 71.5721L74.8065 73.2692H73.4276Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M82.9204 72.6063C83.3977 72.5002 83.6629 72.129 83.6629 71.6517C83.6629 70.9887 83.053 70.5645 82.0983 70.5645H80.083V74.9399H82.1514C83.159 74.9399 83.7955 74.4891 83.7955 73.7201C83.822 73.1367 83.4773 72.7124 82.9204 72.6063ZM81.0907 71.36H82.0718C82.4431 71.36 82.6817 71.5191 82.6817 71.8373C82.6817 72.1555 82.4431 72.3146 82.0718 72.3146H81.0907V71.36ZM82.0718 74.1178H81.0907V73.0836H82.0718C82.5491 73.0836 82.8143 73.2693 82.8143 73.5875C82.8143 73.9322 82.5226 74.1178 82.0718 74.1178Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M88.6481 70.5645H87.667V74.9133H90.5309V74.0648H88.6481V70.5645Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M95.2253 73.1367H97.3467V72.3146H95.2253V71.36H97.5588V70.5645H94.2441V74.9133H97.6384V74.1178H95.2253V73.1367Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M101.801 73.9844C101.536 73.9844 101.324 74.1965 101.324 74.4617C101.324 74.6208 101.377 74.7534 101.509 74.8595L101.244 75.4959H101.721L102.146 74.8595C102.225 74.7534 102.278 74.6208 102.278 74.4617C102.252 74.17 102.04 73.9844 101.801 73.9844Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M111.692 71.705C111.692 71.4664 111.904 71.3603 112.249 71.3603C112.594 71.3603 113.151 71.5459 113.601 71.8111L113.973 70.989C113.548 70.6974 112.912 70.5117 112.302 70.5117C111.294 70.5117 110.605 71.0156 110.605 71.8111C110.605 73.3491 112.938 72.8718 112.938 73.6938C112.938 73.959 112.7 74.1181 112.302 74.1181C111.851 74.1181 111.215 73.8529 110.764 73.4552L110.366 74.2507C110.87 74.675 111.586 74.9402 112.302 74.9402C113.257 74.9402 114.026 74.4894 114.026 73.6143C114.026 72.0763 111.692 72.5271 111.692 71.705Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M118.826 73.1367H120.921V72.3146H118.826V71.36H121.159V70.5645H117.845V74.9133H121.239V74.1178H118.826V73.1367Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M127.152 74.0651C126.409 74.0651 125.826 73.4817 125.826 72.7127C125.826 71.9437 126.409 71.3603 127.152 71.3603C127.55 71.3603 128 71.5724 128.292 71.9172L128.876 71.2277C128.451 70.7769 127.788 70.5117 127.152 70.5117C125.826 70.5117 124.818 71.4664 124.818 72.7127C124.818 73.9855 125.8 74.9402 127.099 74.9402C127.735 74.9402 128.398 74.622 128.876 74.1712L128.292 73.5347C127.974 73.8795 127.55 74.0651 127.152 74.0651Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M135.452 73.0828C135.452 73.7192 135.055 74.0905 134.471 74.0905C133.888 74.0905 133.464 73.7192 133.464 73.0828V70.5371H132.482V73.0828C132.482 74.2496 133.251 74.9655 134.471 74.9655C135.665 74.9655 136.434 74.2496 136.434 73.0828V70.5371H135.452V73.0828Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M144.15 72.076C144.15 71.1213 143.514 70.5645 142.347 70.5645H140.438V74.9399H141.419V73.6935H142.32H142.426L143.116 74.9399H144.23L143.301 73.5079C143.858 73.2427 144.15 72.7389 144.15 72.076ZM142.347 72.845H141.445V71.36H142.347C142.877 71.36 143.195 71.5986 143.195 72.1025C143.195 72.6063 142.877 72.845 142.347 72.845Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M149.082 74.1178V73.1367H151.177V72.3146H149.082V71.36H151.415V70.5645H148.101V74.9133H151.495V74.1178H149.082Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M13.71 53.5941C13.71 55.5033 16.6004 55.5033 16.6004 53.5941C16.6269 51.6848 13.71 51.6848 13.71 53.5941Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M112.674 53.5941C112.674 51.6848 109.783 51.6848 109.783 53.5941C109.783 55.5033 112.674 55.5033 112.674 53.5941Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M142.506 53.5941C142.506 51.6848 139.615 51.6848 139.615 53.5941C139.615 55.5033 142.506 55.5033 142.506 53.5941Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M90.266 41.0499C89.6826 41.6333 88.834 41.8454 88.0385 41.6333L84.8564 40.7847L82.6289 43.0122L86.9778 44.1789C88.9401 44.7093 91.035 44.1524 92.4669 42.7205L102.491 32.6968L101.669 29.6738L90.266 41.0499Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M76.0266 45.7703L82.656 39.1143L80.7202 37.2051L74.0908 43.8345L76.0266 45.7703Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M101.165 6.97537L105.249 2.89166C105.779 2.36131 105.779 1.48623 105.249 0.955875C104.719 0.425524 103.844 0.425524 103.313 0.955875L99.2296 5.03959L81.0651 0.186867C79.1293 -0.316967 77.0874 0.21339 75.6555 1.5923L78.705 2.41434L78.7315 2.38783L97.0286 7.29358L96.1535 8.16866L83.6107 20.7115L71.7309 17.4763C70.2724 17.0786 68.7874 17.9536 68.3896 19.4121L82.9478 23.3897L86.9254 37.9479C88.3839 37.5501 89.259 36.0651 88.8612 34.6067L85.5996 22.6207L98.0893 10.131L98.9644 9.25588L101.378 18.2984L104.745 30.4965C106.045 29.0645 106.548 27.0757 106.045 25.1929L101.165 6.97537Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M69.6353 26.094L67.673 24.1582L61.2822 30.5755L63.218 32.5112L69.6353 26.094Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M63.4571 24.5308L65.6846 22.3034L64.5709 18.1401C64.3587 17.3446 64.5974 16.496 65.1543 15.9126L76.4773 4.58962L73.4278 3.76758L63.5102 13.6851C62.0782 15.1171 61.5214 17.212 62.0517 19.1743L63.4571 24.5308Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M66.2148 38.0986L59.7646 44.5488L61.696 46.4801L68.1462 40.0299L66.2148 38.0986Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M78.3328 29.8596L76.3971 27.9238L69.582 34.7388L71.5178 36.6746C71.5178 36.6746 76.9274 31.2385 78.3328 29.8596Z\"
                fill=\"#FCB408\"></path>
            </svg>
          </a>
        </div>
        <div class=\"header__middle-item\">
          <div class=\"offices\"><span>";
        // line 247
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Офисы по всему миру."]);
        echo "</span>
            <ul>
              <li>USA</li>
              <li>KG</li>
              <li>KZ</li>
            </ul>
          </div>
        </div>
        <div class=\"header__middle-item\">
          <a class=\"btn\" href=\"";
        // line 256
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Пункты сбора"]);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"services-menu\">
    <div class=\"container\">
      <div class=\"services-menu__wrap\">
        <ul>
          <li>
            <a href=\"";
        // line 266
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">
              <img src=\"";
        // line 267
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/boing.svg");
        echo "\" alt=\"\" style=\"max-width: 60px;\">
              <span>";
        // line 268
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Авиаперевозки"]);
        echo "</span>
            </a>
          </li>
          <li>
            <a href=\"";
        // line 272
        echo RainLab\Pages\Classes\Page::url("shopping");
        echo "\">
              <img src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/shopping.svg");
        echo "\" alt=\"\" style=\"max-width: 27px;\">
              <span>";
        // line 274
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Шоппинг в США"]);
        echo "</span>
            </a>
          </li>
          <li>
            <a class=\"fedex-js order-js\" href=\"#illinois-form\">
              <img src=\"";
        // line 279
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/bookmark.svg");
        echo "\" alt=\"\" style=\"max-width: 14px;margin-right: 10px;\">
              <span>";
        // line 280
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Получить почтовую этикетку"]);
        echo "</span>
            </a>
          </li>
          <li>
            <a href=\"";
        // line 284
        echo RainLab\Pages\Classes\Page::url("order");
        echo "\">
              <img src=\"";
        // line 285
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/basket.svg");
        echo "\" alt=\"\" style=\"max-width: 27px;\">
              <span>";
        // line 286
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заказать на склад в США"]);
        echo "</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 286,  453 => 285,  449 => 284,  442 => 280,  438 => 279,  430 => 274,  426 => 273,  422 => 272,  415 => 268,  411 => 267,  407 => 266,  392 => 256,  380 => 247,  250 => 120,  220 => 93,  214 => 92,  208 => 91,  204 => 90,  197 => 88,  191 => 87,  177 => 75,  172 => 72,  167 => 69,  165 => 68,  161 => 66,  155 => 63,  149 => 61,  139 => 54,  135 => 53,  130 => 51,  126 => 50,  114 => 40,  112 => 39,  103 => 32,  97 => 30,  90 => 27,  88 => 26,  83 => 24,  72 => 16,  69 => 15,  59 => 11,  55 => 10,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
  <div class=\"header__top\">
    <div class=\"container\">
      <div class=\"header__top-wrap\">
       <div class=\"social\">
          <ul>

            {% for item in this.theme.social %}
            <li>
              <a href=\"{{item.url}}\" target=\"_blank\">
                <i class=\"{{item.awesome_icon}}\"></i>
              </a>
            </li>
            {%endfor%}
            <li>
              <a href=\"mailto:{{this.theme.email}}\" target=\"_blank\">
                <i class=\"icon-envelope\" style=\"font-size: 11px; margin-left: -2px;\"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class=\"info\">
          <div class=\"info__item\" style=\"display: flex; flex-direction: row; width: 100%;padding: 0;\">
            <p>{{'Сбор посылок на следующий груз до'|_}}

              {% if activeLocale == 'ru' %}
              {{ 'wednesday'|rudate('%e %BP') }}

              {% else %}
              {{ \"wednesday\"|date('d F') }}
              {% endif %}

            </p>
          </div>
        </div>
        <div class=\"info\">
          <div class=\"info__item info__item--fw-b info__item--login\">

            {% if user %}
            <div class=\"user-login\" style=\"width: 35px; cursor: pointer;\">
              <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fal\" data-icon=\"user-circle\" role=\"img\"
                xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 496 512\"
                class=\"svg-inline--fa fa-user-circle fa-w-16 fa-3x\">
                <path fill=\"currentColor\"
                  d=\"M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z\"
                  class=\"\"></path>
              </svg>

              <div class=\"drop-down\">
                <a href=\"{{'personal'|page}}\">
                  <div class=\"login\">{{'Личный кабинет'|_}}</div>
                </a>
                <a data-request=\"onLogout\" data-request-data=\"redirect: '{{'home'|page}}'\" style=\"cursor: pointer;\">
                  <div class=\"login\">{{'Выход'|_}}</div>
                </a>
              </div>
            </div>


            {% else %}
            <a href=\"{{'registration'|page}}\">
              <i class=\"icon-login\"></i>
              <div class=\"login\">{{'Войти'|_}}</div>
            </a>
            {% endif %}
          </div>
          <div class=\"locale\">
            {% if activeLocale == 'ru' %}
            <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
            <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
            {% else %}
            <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
            <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
            {% endif %}

          </div>
          <div class=\"services-list\">
            <div class=\"menu__wrapper\">
              <div class=\"menu__item--meatball\">
                <div class=\"circle\"></div>
                <div class=\"circle\"></div>
                <div class=\"circle\"></div>
              </div>
            </div>
            <div class=\"services-list__dropdown\">
              <ul>
                <li class=\"active\"><a href=\"{{ 'home'|page }}\"> <i class=\"icon-home\"></i>{{'Главная'|_}}</a></li>
                <li><a href=\"{{'services'|page}}\"><i class=\"icon-serv\"></i>{{'Услуги'|_}} </a></li>
                <li><a href=\"#calculator\" class=\"cost-calc-js order-js\"><i
                      class=\"icon-calculate\"></i>{{'Рассчитать перевозку'|_}}</a></li>
                <li><a href=\"{{'reviews'|page}}\"><i class=\"icon-handshake\"></i>{{'Отзывы'|_}} </a></li>
                <li><a href=\"{{'about'|staticPage }}\"><i class=\"icon-about\"></i>{{'О компании'|_}} </a></li>
                <li><a href=\"{{'faq'|page }}\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" style=\"margin-right: 15px;\" viewBox=\"0 0 26 26\"
                      fill=\"none\">
                      <path
                        d=\"M14.083 6.49977C14.083 7.09804 13.598 7.58304 12.9998 7.58304C12.4015 7.58304 11.9165 7.09804 11.9165 6.49977C11.9165 5.9015 12.4015 5.4165 12.9998 5.4165C13.598 5.4165 14.083 5.9015 14.083 6.49977Z\"
                        fill=\"#fcb408\"></path>
                      <path
                        d=\"M12.9998 20.5833C12.5513 20.5833 12.1873 20.2193 12.1873 19.7708V11.375H11.104C10.6555 11.375 10.2915 11.011 10.2915 10.5625C10.2915 10.114 10.6555 9.75 11.104 9.75H12.9998C13.4483 9.75 13.8123 10.114 13.8123 10.5625V19.7708C13.8123 20.2193 13.4483 20.5833 12.9998 20.5833Z\"
                        fill=\"#fcb408\"></path>
                      <path
                        d=\"M13 26C5.83151 26 0 20.1685 0 13C0 5.83151 5.83151 0 13 0C20.1685 0 26 5.83151 26 13C26 20.1685 20.1685 26 13 26ZM13 1.625C6.72752 1.625 1.625 6.72752 1.625 13C1.625 19.2725 6.72752 24.375 13 24.375C19.2725 24.375 24.375 19.2725 24.375 13C24.375 6.72752 19.2725 1.625 13 1.625Z\"
                        fill=\"#fcb408\"></path>
                      <path
                        d=\"M15.4375 20.5835H10.5625C10.114 20.5835 9.75 20.2195 9.75 19.771C9.75 19.3225 10.114 18.9585 10.5625 18.9585H15.4375C15.886 18.9585 16.25 19.3225 16.25 19.771C16.25 20.2195 15.886 20.5835 15.4375 20.5835Z\"
                        fill=\"#fcb408\"></path>
                    </svg> FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"header__middle\">
    <div class=\"container\">
      <div class=\"header__middle-wrap\">
        <div class=\"header__middle-item logo\">
          <a href=\"{{ 'home'|page }}\">
            <svg width=\"130\" viewBox=\"0 0 166 76\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <path
                d=\"M6.39074 57.7039C4.69361 57.4918 3.26166 57.147 3.26166 55.9272C3.26166 54.893 4.21629 54.0445 6.1786 54.0445C7.71661 54.0445 9.04249 54.8135 9.51981 55.609L11.6412 54.5218C10.5805 52.3474 8.3 51.7109 6.09904 51.7109C3.50032 51.7375 0.63642 52.9307 0.63642 55.8212C0.63642 58.9768 3.28818 59.7458 6.1786 60.0905C8.06134 60.3026 9.44026 60.833 9.44026 62.1589C9.44026 63.6969 7.87572 64.2803 6.20511 64.2803C4.48147 64.2803 2.8639 63.5908 2.22747 62.0528L0 63.193C1.03419 65.7652 3.26166 66.6668 6.15208 66.6668C9.28115 66.6668 12.0655 65.3145 12.0655 62.1854C12.0655 58.8176 9.33419 58.0751 6.39074 57.7039Z\"
                fill=\"#1C2333\"></path>
              <path d=\"M16.4144 56.3516H13.9482V66.3222H16.4144V56.3516Z\" fill=\"#1C2333\"></path>
              <path d=\"M21.0548 52.2422H18.6152V66.323H21.0548V52.2422Z\" fill=\"#1C2333\"></path>
              <path
                d=\"M31.8737 56.538V56.4054H28.9302L25.589 60.3831V52.2422H23.1494V66.323H25.589V61.8416L29.4871 66.323H32.4571V66.1374L27.843 61.0725L31.8737 56.538Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M46.3793 56.9085C46.3793 54.4688 44.6291 52.2679 41.3144 52.2414C39.0869 52.2414 36.8329 52.2148 34.6055 52.2148V66.3222H37.2572V61.6021H39.8029L43.9131 66.3222H47.0687V66.1366L42.7994 61.3369C45.4777 60.78 46.3793 58.8177 46.3793 56.9085ZM37.2572 59.2155V54.7075H41.3144C42.985 54.7075 43.7275 55.8478 43.7275 56.9615C43.7275 58.1018 43.0115 59.2155 41.3144 59.2155H37.2572Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M52.6639 56.1934C49.5083 56.1934 47.5195 58.5269 47.5195 61.3643C47.5195 64.2282 49.4553 66.5352 52.6639 66.5352C55.8726 66.5352 57.8349 64.2282 57.8349 61.3643C57.8614 58.5269 55.8195 56.1934 52.6639 56.1934ZM52.6639 64.2812C50.8607 64.2812 49.9591 62.8758 49.9591 61.3643C49.9591 59.8793 50.8873 58.4208 52.6639 58.4208C54.308 58.4208 55.3687 59.8793 55.3687 61.3643C55.3687 62.8758 54.4671 64.2812 52.6639 64.2812Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M67.3285 57.7565C66.7716 56.7754 65.4988 56.139 64.1729 56.139C61.2825 56.1124 59.002 57.9156 59.002 61.3364C59.002 64.8102 61.1764 66.6399 64.1198 66.6134C65.2336 66.5869 66.7716 66.03 67.355 64.8632L67.4876 66.3217H69.7946V56.4041H67.4345L67.3285 57.7565ZM64.385 64.3594C62.7409 64.3594 61.4416 63.2191 61.4416 61.3364C61.4416 59.4536 62.7409 58.3399 64.385 58.3399C68.2566 58.3399 68.2566 64.3594 64.385 64.3594Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M79.7123 57.7313C79.1289 56.6971 77.4848 56.1403 76.4506 56.1403C73.5602 56.1403 71.3857 57.9169 71.3857 61.3377C71.3857 64.5994 73.5867 66.5351 76.5036 66.5351C77.7234 66.5351 78.9432 66.1374 79.7123 64.9441L79.8714 66.323H82.1784V52.2422H79.7123V57.7313ZM76.6627 64.2812C75.0982 64.2812 73.8519 63.0879 73.8519 61.3642C73.8519 59.561 75.0982 58.4738 76.6627 58.4738C78.2008 58.4738 79.5532 59.6406 79.5532 61.3642C79.5266 63.1409 78.2008 64.2812 76.6627 64.2812Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M90.5577 57.7039C88.8606 57.4918 87.4287 57.147 87.4287 55.9272C87.4287 54.893 88.3833 54.0445 90.3456 54.0445C91.8836 54.0445 93.2095 54.8135 93.6868 55.609L95.8082 54.5218C94.7475 52.3474 92.467 51.7109 90.266 51.7109C87.6673 51.7375 84.8034 52.9307 84.8034 55.8212C84.8034 58.9768 87.4552 59.7458 90.3456 60.0905C92.2283 60.3026 93.6073 60.833 93.6073 62.1589C93.6073 63.6969 92.0427 64.2803 90.3721 64.2803C88.6485 64.2803 87.0309 63.5908 86.3945 62.0528L84.167 63.193C85.2012 65.7652 87.4286 66.6668 90.3191 66.6668C93.4481 66.6668 96.2325 65.3145 96.2325 62.1854C96.2325 58.8176 93.4747 58.0751 90.5577 57.7039Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M103.843 56.2455C102.703 56.2455 101.616 56.5903 100.741 57.7305V52.2148H98.2744V66.3222H100.741V61.2573C100.741 59.7724 101.748 58.526 103.207 58.526C104.506 58.526 105.461 59.295 105.461 61.0982V66.3222H107.927V61.0982C107.927 58.1548 106.68 56.2455 103.843 56.2455Z\"
                fill=\"#1C2333\"></path>
              <path d=\"M112.461 56.3516H109.995V66.3222H112.461V56.3516Z\" fill=\"#1C2333\"></path>
              <path
                d=\"M120.337 56.166C119.197 56.166 117.871 56.6433 117.128 57.7571L116.969 56.3782H114.662V69.4778H117.128V65.129C117.844 66.2162 119.382 66.5344 120.443 66.5344C123.625 66.5344 125.455 64.2274 125.455 61.3369C125.428 58.4465 123.413 56.166 120.337 56.166ZM120.151 64.1743C118.481 64.1743 117.34 62.9015 117.34 61.3635C117.34 59.8254 118.401 58.5526 120.151 58.5526C121.928 58.5526 122.962 59.8254 122.962 61.3635C122.962 62.9015 121.848 64.1743 120.151 64.1743Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M132.933 56.166C131.792 56.166 130.467 56.6433 129.698 57.7571L129.538 56.3782H127.231V69.4778H129.698V65.129C130.414 66.2162 131.952 66.5344 133.012 66.5344C136.194 66.5344 138.024 64.2274 138.024 61.3369C138.024 58.4465 135.982 56.166 132.933 56.166ZM132.747 64.1743C131.076 64.1743 129.936 62.9015 129.936 61.3635C129.936 59.8254 130.997 58.5526 132.747 58.5526C134.524 58.5526 135.558 59.8254 135.558 61.3635C135.558 62.9015 134.418 64.1743 132.747 64.1743Z\"
                fill=\"#1C2333\"></path>
              <path d=\"M142.293 56.3516H139.827V66.3222H142.293V56.3516Z\" fill=\"#1C2333\"></path>
              <path
                d=\"M150.063 56.2461C148.817 56.2461 147.809 56.7499 146.801 57.7311L146.642 56.3787H144.441V66.3228H146.881V61.2579C146.881 59.7464 147.915 58.4736 149.427 58.4736C150.991 58.4736 151.813 59.6138 151.813 61.1253V66.3228H154.279V61.0988C154.279 57.9963 152.397 56.2461 150.063 56.2461Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M165.92 61.0989C165.92 60.0117 165.628 59.0305 164.886 58.1554L166 56.75L164.196 55.3711L163.215 56.6174C162.526 56.1666 161.73 56.0605 160.935 56.0605C158.15 56.0605 155.896 57.9963 155.896 61.0989C155.896 64.2014 157.832 66.0842 160.935 66.0842C162.155 66.0842 163.454 66.7206 163.454 68.073C163.454 69.4519 162.34 70.1944 160.935 70.1944C159.529 70.1944 158.336 69.3459 158.336 68.073H155.896C155.896 70.7513 158.044 72.5014 160.935 72.5014C163.825 72.5014 165.92 70.8043 165.92 68.073C165.92 66.8002 165.522 65.6069 163.878 64.7848C165.469 64.0689 165.92 62.3452 165.92 61.0989ZM160.908 63.8567C159.476 63.8567 158.31 62.8225 158.31 61.0989C158.31 59.3752 159.476 58.288 160.908 58.288C162.314 58.288 163.481 59.3752 163.481 61.0989C163.507 62.8225 162.34 63.8567 160.908 63.8567Z\"
                fill=\"#1C2333\"></path>
              <path
                d=\"M1.77705 71.705C1.77705 71.4664 1.98919 71.3603 2.33392 71.3603C2.67865 71.3603 3.23552 71.5459 3.68632 71.8111L4.05756 70.989C3.63328 70.6974 2.99686 70.5117 2.38696 70.5117C1.37929 70.5117 0.689832 71.0156 0.689832 71.8111C0.689832 73.3491 3.02338 72.8718 3.02338 73.6938C3.02338 73.959 2.78472 74.1181 2.38696 74.1181C1.93616 74.1181 1.29973 73.8529 0.848935 73.4552L0.451172 74.2507C0.955006 74.675 1.67098 74.9402 2.38696 74.9402C3.34159 74.9402 4.1106 74.4894 4.1106 73.6143C4.08408 72.0763 1.77705 72.5271 1.77705 71.705Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M12.198 73.8526L11.2699 70.5645H10.3152L9.3871 73.8526L8.48551 70.5645H7.4248L8.85675 74.9133H9.89094L10.7925 71.8108L11.6676 74.9133H12.6753L14.1338 70.5645H13.1261L12.198 73.8526Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M18.6686 70.5645H17.6875V74.9399H18.6686V70.5645Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M22.7529 74.9133H23.7341V73.2692H25.7229V72.4472H23.7341V71.36H25.882L25.9085 70.5645H22.7529V74.9133Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M29.1699 71.3865H30.4958V74.9133H31.477V71.3865H32.8028V70.5645H29.1699V71.3865Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M36.7268 73.9844C36.4616 73.9844 36.2495 74.1965 36.2495 74.4617C36.2495 74.6208 36.3025 74.7534 36.4351 74.8595L36.1699 75.4959H36.6472L37.0715 74.8595C37.1511 74.7534 37.2041 74.6208 37.2041 74.4617C37.2041 74.17 36.9655 73.9844 36.7268 73.9844Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M49.3492 72.076C49.3492 71.1213 48.7128 70.5645 47.546 70.5645H45.6367V74.9399H46.6179V73.6935H47.5195H47.6255L48.315 74.9399H49.4287L48.5006 73.5079C49.0575 73.2427 49.3492 72.7389 49.3492 72.076ZM47.5725 72.845H46.6709V71.36H47.5725C48.1028 71.36 48.4211 71.5986 48.4211 72.1025C48.4211 72.6063 48.1028 72.845 47.5725 72.845Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M54.2819 73.1367H56.4033V72.3146H54.2819V71.36H56.642V70.5645H53.3008V74.9133H56.695V74.1178H54.2819V73.1367Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M61.6004 70.5645H60.5928V74.9133H63.4567V74.0648H61.6004V70.5645Z\" fill=\"#FCB408\"></path>
              <path d=\"M68.1501 70.5645H67.1689V74.9399H68.1501V70.5645Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M73.6397 70.5645L71.7305 74.9399H72.7381L73.0829 74.0913H75.0982L75.4429 74.9399H76.5036L74.6474 70.5645H73.6397ZM73.4276 73.2692L74.1171 71.5721L74.8065 73.2692H73.4276Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M82.9204 72.6063C83.3977 72.5002 83.6629 72.129 83.6629 71.6517C83.6629 70.9887 83.053 70.5645 82.0983 70.5645H80.083V74.9399H82.1514C83.159 74.9399 83.7955 74.4891 83.7955 73.7201C83.822 73.1367 83.4773 72.7124 82.9204 72.6063ZM81.0907 71.36H82.0718C82.4431 71.36 82.6817 71.5191 82.6817 71.8373C82.6817 72.1555 82.4431 72.3146 82.0718 72.3146H81.0907V71.36ZM82.0718 74.1178H81.0907V73.0836H82.0718C82.5491 73.0836 82.8143 73.2693 82.8143 73.5875C82.8143 73.9322 82.5226 74.1178 82.0718 74.1178Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M88.6481 70.5645H87.667V74.9133H90.5309V74.0648H88.6481V70.5645Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M95.2253 73.1367H97.3467V72.3146H95.2253V71.36H97.5588V70.5645H94.2441V74.9133H97.6384V74.1178H95.2253V73.1367Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M101.801 73.9844C101.536 73.9844 101.324 74.1965 101.324 74.4617C101.324 74.6208 101.377 74.7534 101.509 74.8595L101.244 75.4959H101.721L102.146 74.8595C102.225 74.7534 102.278 74.6208 102.278 74.4617C102.252 74.17 102.04 73.9844 101.801 73.9844Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M111.692 71.705C111.692 71.4664 111.904 71.3603 112.249 71.3603C112.594 71.3603 113.151 71.5459 113.601 71.8111L113.973 70.989C113.548 70.6974 112.912 70.5117 112.302 70.5117C111.294 70.5117 110.605 71.0156 110.605 71.8111C110.605 73.3491 112.938 72.8718 112.938 73.6938C112.938 73.959 112.7 74.1181 112.302 74.1181C111.851 74.1181 111.215 73.8529 110.764 73.4552L110.366 74.2507C110.87 74.675 111.586 74.9402 112.302 74.9402C113.257 74.9402 114.026 74.4894 114.026 73.6143C114.026 72.0763 111.692 72.5271 111.692 71.705Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M118.826 73.1367H120.921V72.3146H118.826V71.36H121.159V70.5645H117.845V74.9133H121.239V74.1178H118.826V73.1367Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M127.152 74.0651C126.409 74.0651 125.826 73.4817 125.826 72.7127C125.826 71.9437 126.409 71.3603 127.152 71.3603C127.55 71.3603 128 71.5724 128.292 71.9172L128.876 71.2277C128.451 70.7769 127.788 70.5117 127.152 70.5117C125.826 70.5117 124.818 71.4664 124.818 72.7127C124.818 73.9855 125.8 74.9402 127.099 74.9402C127.735 74.9402 128.398 74.622 128.876 74.1712L128.292 73.5347C127.974 73.8795 127.55 74.0651 127.152 74.0651Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M135.452 73.0828C135.452 73.7192 135.055 74.0905 134.471 74.0905C133.888 74.0905 133.464 73.7192 133.464 73.0828V70.5371H132.482V73.0828C132.482 74.2496 133.251 74.9655 134.471 74.9655C135.665 74.9655 136.434 74.2496 136.434 73.0828V70.5371H135.452V73.0828Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M144.15 72.076C144.15 71.1213 143.514 70.5645 142.347 70.5645H140.438V74.9399H141.419V73.6935H142.32H142.426L143.116 74.9399H144.23L143.301 73.5079C143.858 73.2427 144.15 72.7389 144.15 72.076ZM142.347 72.845H141.445V71.36H142.347C142.877 71.36 143.195 71.5986 143.195 72.1025C143.195 72.6063 142.877 72.845 142.347 72.845Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M149.082 74.1178V73.1367H151.177V72.3146H149.082V71.36H151.415V70.5645H148.101V74.9133H151.495V74.1178H149.082Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M13.71 53.5941C13.71 55.5033 16.6004 55.5033 16.6004 53.5941C16.6269 51.6848 13.71 51.6848 13.71 53.5941Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M112.674 53.5941C112.674 51.6848 109.783 51.6848 109.783 53.5941C109.783 55.5033 112.674 55.5033 112.674 53.5941Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M142.506 53.5941C142.506 51.6848 139.615 51.6848 139.615 53.5941C139.615 55.5033 142.506 55.5033 142.506 53.5941Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M90.266 41.0499C89.6826 41.6333 88.834 41.8454 88.0385 41.6333L84.8564 40.7847L82.6289 43.0122L86.9778 44.1789C88.9401 44.7093 91.035 44.1524 92.4669 42.7205L102.491 32.6968L101.669 29.6738L90.266 41.0499Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M76.0266 45.7703L82.656 39.1143L80.7202 37.2051L74.0908 43.8345L76.0266 45.7703Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M101.165 6.97537L105.249 2.89166C105.779 2.36131 105.779 1.48623 105.249 0.955875C104.719 0.425524 103.844 0.425524 103.313 0.955875L99.2296 5.03959L81.0651 0.186867C79.1293 -0.316967 77.0874 0.21339 75.6555 1.5923L78.705 2.41434L78.7315 2.38783L97.0286 7.29358L96.1535 8.16866L83.6107 20.7115L71.7309 17.4763C70.2724 17.0786 68.7874 17.9536 68.3896 19.4121L82.9478 23.3897L86.9254 37.9479C88.3839 37.5501 89.259 36.0651 88.8612 34.6067L85.5996 22.6207L98.0893 10.131L98.9644 9.25588L101.378 18.2984L104.745 30.4965C106.045 29.0645 106.548 27.0757 106.045 25.1929L101.165 6.97537Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M69.6353 26.094L67.673 24.1582L61.2822 30.5755L63.218 32.5112L69.6353 26.094Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M63.4571 24.5308L65.6846 22.3034L64.5709 18.1401C64.3587 17.3446 64.5974 16.496 65.1543 15.9126L76.4773 4.58962L73.4278 3.76758L63.5102 13.6851C62.0782 15.1171 61.5214 17.212 62.0517 19.1743L63.4571 24.5308Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M66.2148 38.0986L59.7646 44.5488L61.696 46.4801L68.1462 40.0299L66.2148 38.0986Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M78.3328 29.8596L76.3971 27.9238L69.582 34.7388L71.5178 36.6746C71.5178 36.6746 76.9274 31.2385 78.3328 29.8596Z\"
                fill=\"#FCB408\"></path>
            </svg>
          </a>
        </div>
        <div class=\"header__middle-item\">
          <div class=\"offices\"><span>{{'Офисы по всему миру.'|_}}</span>
            <ul>
              <li>USA</li>
              <li>KG</li>
              <li>KZ</li>
            </ul>
          </div>
        </div>
        <div class=\"header__middle-item\">
          <a class=\"btn\" href=\"{{ 'contacts'|page }}\">{{'Пункты сбора'|_}}</a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"services-menu\">
    <div class=\"container\">
      <div class=\"services-menu__wrap\">
        <ul>
          <li>
            <a href=\"{{'services'|page }}\">
              <img src=\"{{'assets/icons/boing.svg'| theme}}\" alt=\"\" style=\"max-width: 60px;\">
              <span>{{'Авиаперевозки'|_}}</span>
            </a>
          </li>
          <li>
            <a href=\"{{'shopping'|staticPage }}\">
              <img src=\"{{'assets/icons/shopping.svg'| theme}}\" alt=\"\" style=\"max-width: 27px;\">
              <span>{{'Шоппинг в США'|_}}</span>
            </a>
          </li>
          <li>
            <a class=\"fedex-js order-js\" href=\"#illinois-form\">
              <img src=\"{{'assets/icons/bookmark.svg'| theme}}\" alt=\"\" style=\"max-width: 14px;margin-right: 10px;\">
              <span>{{'Получить почтовую этикетку'|_}}</span>
            </a>
          </li>
          <li>
            <a href=\"{{'order'|staticPage }}\">
              <img src=\"{{'assets/icons/basket.svg'| theme}}\" alt=\"\" style=\"max-width: 27px;\">
              <span>{{'Заказать на склад в США'|_}}</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8, "if" => 26);
        static $filters = array("escape" => 10, "_" => 24, "rudate" => 27, "date" => 30, "page" => 50, "staticPage" => 92, "theme" => 267);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', '_', 'rudate', 'date', 'page', 'staticPage', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
