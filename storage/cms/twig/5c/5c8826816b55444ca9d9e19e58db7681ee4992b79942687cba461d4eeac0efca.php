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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/pages/personal.htm */
class __TwigTemplate_01848a6af6db26d4a125f78c368d26d6506da04e456515b8a53f04a8a64ea53d extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/breadcrumbs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"personal\">
  <div class=\"container\">
    <div class=\"tab personal__wrap\">
      <div class=\"personal__col\">
        <ul class=\"tabs\">
          <li><a href=\"#\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"26\" viewBox=\"0 0 26 26\" fill=\"none\">
                <path
                  d=\"M14.083 6.49977C14.083 7.09804 13.598 7.58304 12.9998 7.58304C12.4015 7.58304 11.9165 7.09804 11.9165 6.49977C11.9165 5.9015 12.4015 5.4165 12.9998 5.4165C13.598 5.4165 14.083 5.9015 14.083 6.49977Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M12.9998 20.5833C12.5513 20.5833 12.1873 20.2193 12.1873 19.7708V11.375H11.104C10.6555 11.375 10.2915 11.011 10.2915 10.5625C10.2915 10.114 10.6555 9.75 11.104 9.75H12.9998C13.4483 9.75 13.8123 10.114 13.8123 10.5625V19.7708C13.8123 20.2193 13.4483 20.5833 12.9998 20.5833Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M13 26C5.83151 26 0 20.1685 0 13C0 5.83151 5.83151 0 13 0C20.1685 0 26 5.83151 26 13C26 20.1685 20.1685 26 13 26ZM13 1.625C6.72752 1.625 1.625 6.72752 1.625 13C1.625 19.2725 6.72752 24.375 13 24.375C19.2725 24.375 24.375 19.2725 24.375 13C24.375 6.72752 19.2725 1.625 13 1.625Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M15.4375 20.5835H10.5625C10.114 20.5835 9.75 20.2195 9.75 19.771C9.75 19.3225 10.114 18.9585 10.5625 18.9585H15.4375C15.886 18.9585 16.25 19.3225 16.25 19.771C16.25 20.2195 15.886 20.5835 15.4375 20.5835Z\"
                  fill=\"#3A3A3A\"></path>
              </svg>
              <span>";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваши данные"]);
        echo "</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <g clip-path=\"url(#clip0)\">
                  <path
                    d=\"M14.9983 9.375L14.9956 15.9339C14.9956 16.1829 15.0945 16.4209 15.2703 16.5967L19.9623 21.2879L21.288 19.9622L16.8706 15.5456L16.8733 9.375H14.9983Z\"
                    fill=\"#3A3A3A\"></path>
                  <path
                    d=\"M16.875 1.875C10.276 1.875 4.81454 6.77582 3.89984 13.125H0L4.6875 17.8125L9.37499 13.125H5.79435C6.69125 7.81289 11.3115 3.75002 16.875 3.75002C23.0786 3.75002 28.125 8.7964 28.125 15C28.125 21.2037 23.0787 26.25 16.875 26.25C13.3878 26.25 10.1542 24.6717 8.00354 21.9196L6.52588 23.0731C9.0344 26.283 12.8064 28.125 16.875 28.125C24.1122 28.125 30 22.2363 30 15C30 7.76374 24.1122 1.87505 16.875 1.875Z\"
                    fill=\"#3A3A3A\"></path>
                </g>
                <defs>
                  <clippath id=\"clip0\">
                    <rect width=\"30\" height=\"30\" fill=\"white\"></rect>
                  </clippath>
                </defs>
              </svg><span>";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["История заказов"]);
        echo "</span></a></li>
          <li>
            <a href=\"#\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 28 28\" fill=\"none\">
                <path
                  d=\"M7.28587 4.5487C7.28587 3.0474 6.04951 1.81104 4.54821 1.81104C3.04691 1.81104 1.81055 3.0474 1.81055 4.5487C1.81055 6.05 3.04691 7.28636 4.54821 7.28636C6.09366 7.28636 7.28587 6.09415 7.28587 4.5487ZM2.73782 4.5487C2.73782 3.53311 3.57678 2.73831 4.54821 2.73831C5.56379 2.73831 6.3586 3.57727 6.3586 4.5487C6.3586 5.56428 5.51964 6.35909 4.54821 6.35909C4.06249 6.35909 3.62094 6.18246 3.26769 5.82922C2.91444 5.52013 2.73782 5.03441 2.73782 4.5487Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M22.8286 12.7618C20.3558 12.7176 18.3247 14.7046 18.2805 17.1773C18.2805 19.1202 19.561 21.4163 20.7091 23.0501C19.4727 23.3592 18.6338 23.9332 18.3688 24.6397H4.10649C2.34026 24.6397 0.927273 23.2267 0.927273 21.4605C0.927273 19.6942 2.34026 18.2812 4.10649 18.2812H13.2468C15.013 18.2812 16.426 16.8683 16.426 15.102C16.426 13.3358 15.013 11.8786 13.2468 11.8786H9.05195C8.78701 11.1722 7.94805 10.5981 6.71169 10.289C7.85974 8.61111 9.14026 6.35916 9.14026 4.41631C9.0961 1.94358 7.02078 -0.0434339 4.54805 0.000721929C2.07532 -0.0434339 0.0441558 1.94358 0 4.41631C0 6.35916 1.28052 8.65527 2.42857 10.289C0.927273 10.6864 0 11.4371 0 12.3202C0 13.6007 1.94286 14.6163 4.54805 14.6163C6.84416 14.6163 8.61039 13.8657 9.00779 12.8059H13.2468C14.5273 12.8059 15.5429 13.8215 15.5429 15.102C15.5429 16.3825 14.5273 17.3981 13.2468 17.3981H4.10649C1.85455 17.3981 0 19.2527 0 21.5046C0 23.7566 1.85455 25.6111 4.10649 25.6111H18.3247C18.7221 26.6709 20.5325 27.4215 22.7844 27.4215C25.3896 27.4215 27.3325 26.4501 27.3325 25.1254C27.3325 24.2423 26.4052 23.4916 24.9039 23.0942C26.0519 21.4163 27.3325 19.1644 27.3325 17.2215C27.3325 14.7046 25.3013 12.7176 22.8286 12.7618ZM0.927273 4.41631C0.971429 2.42929 2.60519 0.883839 4.59221 0.927995C6.57922 0.883839 8.21299 2.47345 8.25714 4.41631C8.25714 6.97735 5.56364 10.4657 4.59221 11.6137C3.57662 10.4657 0.927273 6.97735 0.927273 4.41631ZM4.54805 13.689C2.34026 13.689 0.883117 12.8942 0.883117 12.3202C0.883117 11.9228 1.63377 11.3488 2.95844 11.0838C3.17922 11.3929 3.35584 11.6137 3.53247 11.8345H3.17922C2.91429 11.8345 2.73766 12.0553 2.73766 12.276C2.73766 12.4968 2.95844 12.7176 3.17922 12.7176H5.91688C6.18182 12.7176 6.35844 12.4968 6.35844 12.276C6.35844 12.0553 6.13766 11.8345 5.91688 11.8345H5.51948C5.6961 11.6137 5.87273 11.3488 6.09351 11.0838C7.46234 11.3488 8.16883 11.8786 8.16883 12.3202C8.21299 12.8942 6.8 13.689 4.54805 13.689ZM26.4494 25.0812C26.4494 25.6553 25.0364 26.4501 22.7844 26.4501C20.5325 26.4501 19.1195 25.6553 19.1195 25.0812C19.1195 24.6838 19.8701 24.1098 21.1948 23.8449C21.4156 24.154 21.5922 24.3748 21.7688 24.5955H21.3714C21.1065 24.5955 20.9299 24.8163 20.9299 25.0371C20.9299 25.302 21.1507 25.4786 21.3714 25.4786H24.1091C24.374 25.4786 24.5506 25.2579 24.5506 25.0371C24.5506 24.7722 24.3299 24.5955 24.1091 24.5955H23.7117C23.8883 24.3748 24.0649 24.1098 24.2857 23.8449C25.7429 24.154 26.4494 24.6838 26.4494 25.0812ZM22.8286 24.3748C21.8571 23.2267 19.1636 19.7384 19.1636 17.1773C19.2519 15.2345 20.8416 13.689 22.8286 13.689C24.8156 13.689 26.4052 15.2345 26.4935 17.1773C26.4494 19.7825 23.7558 23.2267 22.8286 24.3748Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M22.8285 14.6162C21.3272 14.6162 20.0908 15.8526 20.0908 17.3539C20.0908 18.8552 21.3272 20.0915 22.8285 20.0915C24.3298 20.0915 25.5661 18.8552 25.5661 17.3539C25.5661 15.8084 24.3298 14.6162 22.8285 14.6162ZM22.8285 19.1643C21.8129 19.1643 21.0181 18.3253 21.0181 17.3539C21.0181 16.3383 21.8571 15.5435 22.8285 15.5435C23.8441 15.5435 24.6389 16.3824 24.6389 17.3539C24.6389 18.3253 23.7999 19.1643 22.8285 19.1643Z\"
                  fill=\"#3A3A3A\"></path>
              </svg>
              <span>";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отслеживание отгрузки"]);
        echo "</span>
            </a>
          </li>
        </ul>
      </div>
      <div class=\"personal__col\">
        <div class=\"tab_content\">
          <div class=\"tabs_item\">
            <div class=\"personal__info\">
              <div class=\"tabs_item__col\">
                <ul>
                  <li>";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Имя"]);
        echo ": ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "</li>
                  <li>";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Фамилия"]);
        echo ": ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "</li>
                  <li>";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Адрес"]);
        echo ": ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "</li>
                  <li>";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Номер телефона"]);
        echo ": ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "</li>
                  <li>Email: ";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "</li>
                </ul>
              </div>
              <div class=\"tabs_item__col\">
                <ul>
                  <li>Login: ";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "login", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</li>
                  <li>
                    <a href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("update");
        echo "\" style=\"color: #000\" onMouseOver=\"this.style.color='#fcb408'\"
                      onMouseOut=\"this.style.color='#000'\">";
        // line 78
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Изменить"]);
        echo "</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"tabs_item\">

            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "history", [], "any", false, false, true, 86));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "publish", [], "any", false, false, true, 87) == true)) {
                // line 88
                echo "            <div class=\"personal__info personal__info--history\">
              <div class=\"tabs_item__col\">
                <ul>
                  <li>";
                // line 91
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Наименование товара"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 92
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заказ"]);
                echo " № ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "order_number", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 93
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Магазин"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "shop_store", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 94
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Дата отправки"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "departure_date", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 95
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Место отправки"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "dispatch_place", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 96
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вид грузоперевозки"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "transportation_type", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 97
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Номер WhatsApp"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "whats_app_number", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 98
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Трек номер"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "track_number", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 99
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Описание"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 100
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Дополнительная информация"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "additional_info", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 101
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ФИО"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "full_name", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "</li>
                </ul>
              </div>
              <div class=\"tabs_item__col\">
                <h2>";
                // line 105
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Параметры"]);
                echo "</h2>
                <ul>
                  <li>";
                // line 107
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вес груза"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "cargo_weight", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 108
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Длина"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "cargo_length", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 109
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Высота"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "cargo_height", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "</li>
                  <li>";
                // line 110
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ширина"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "cargo_width", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "</li>
                  <li class=\"personal__info-total\">";
                // line 111
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Статус"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "order_status", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                echo "<span>";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Итог"]);
                echo ":
                      ";
                // line 112
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "</span>
                  </li>
                </ul>
              </div>
            </div>
            ";
            } else {
                // line 118
                echo "            ";
            }
            // line 119
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            echo "            <h3 style=\"text-align: center;\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заказов нет"]);
            echo "</h3>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
          </div>
          <div class=\"tabs_item\" id=\"tracking\">
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "history", [], "any", false, false, true, 125));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 126
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "publish1", [], "any", false, false, true, 126) == true)) {
                // line 127
                echo "            <div class=\"personal__tracking-item\">
              <div class=\"personal__tracking-date\">
                <p>";
                // line 129
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Доставка ожидается"]);
                echo ": ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "delivery_expected", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "</p>
              </div>
              ";
                // line 131
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "arrived", [], "any", false, false, true, 131) == true)) {
                    // line 132
                    echo "              <div class=\"personal__tracking\">
                <div class=\"personal__tracking-status\" style=\"left: auto; right: -25px;\">
                  <span>";
                    // line 134
                    echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Прибыл в"]);
                    echo "</span>
                  <div class=\"personal__tracking-plane\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 82.21 89.6\">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #fcb408;
                          }

                          .cls-2 {
                            fill: #f4f6fd;
                          }
                        </style>
                      </defs>
                      <g id=\"Слой_2\" data-name=\"Слой 2\">
                        <g id=\"Слой_1-2\" data-name=\"Слой 1\">
                          <path class=\"cls-1\"
                            d=\"M76.1,39.6a38,38,0,0,0-11.5-1.8H59.8L55,28.5a3.81,3.81,0,0,0-.3-7.6H51l-.8-1.5a4.21,4.21,0,0,0,2-1,4.2,4.2,0,0,0,1.2-2.6A3.71,3.71,0,0,0,49.7,12l-3.3-.1L40.7.9a1.45,1.45,0,0,0-1-.7L35.3,0a1.22,1.22,0,0,0-1.2,1.4L39,38.2c-10.2.4-20.2,1-27.4,1.4L8,30.9a1.23,1.23,0,0,0-1.1-.7l-5.1-.1A1.16,1.16,0,0,0,.6,31.3L0,56.9a1.16,1.16,0,0,0,1.2,1.2l5.1.1a1.23,1.23,0,0,0,1.1-.7l4-8.6c7.1.8,17.1,1.8,27.3,2.6l-.7,4-1,5.6-4.8,27a1.21,1.21,0,0,0,1.2,1.4l4.3.1a1.38,1.38,0,0,0,1.1-.6L45,78.2l3.3.1a3.75,3.75,0,0,0,2.8-6.4,4.53,4.53,0,0,0-1.9-1.1l.8-1.5,3.6.1a3.71,3.71,0,0,0,3.8-3.7,3.87,3.87,0,0,0-3.2-3.8l5.2-9.1c1.7.1,3.3.1,4.8.1a39.88,39.88,0,0,0,11.6-1.3c5.2-1.5,6.4-4.1,6.4-6C82.3,44,81.2,41.4,76.1,39.6ZM54.6,23.4a1.35,1.35,0,0,1,1.3,1.4,1.29,1.29,0,0,1-1.4,1.3h-.8l-1.4-2.8Zm-5-9.1a1.34,1.34,0,0,1,1.3,1.4A1.29,1.29,0,0,1,49.5,17H49l-1.4-2.8ZM36.7,2.4h2.2L57,37.8c-4.9,0-10.3.2-15.6.3ZM2.9,32.5l3.1.1,3,7.2c-2.8.2-5,.3-6.3.4ZM5.6,55.8l-3.1-.1L2.6,48c1.3.2,3.5.4,6.3.7ZM49.7,74.7A1.29,1.29,0,0,1,48.3,76h-2l1.5-2.7h.5A1.37,1.37,0,0,1,49.7,74.7ZM55,65.8a1.34,1.34,0,0,1-1.4,1.3H51.3l1.5-2.7h.8A1.43,1.43,0,0,1,55,65.8ZM37.1,87.3l-2.2-.1,4.6-26,1-5.8.7-3.7c5.3.4,10.7.8,15.6,1Zm38-37.8a38.6,38.6,0,0,1-10.9,1.2c-20.7-.5-55-4.3-61.6-5.1l.1-2.9c6.6-.5,41.1-2.8,61.7-2.4a40.39,40.39,0,0,1,10.8,1.6c2.1.7,4.6,2,4.5,3.9C79.8,47.8,77.3,48.9,75.1,49.5Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M51,15.7A1.29,1.29,0,0,1,49.6,17h-.5l-1.4-2.8h2A1.51,1.51,0,0,1,51,15.7Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M55.9,24.8a1.29,1.29,0,0,1-1.4,1.3h-.8l-1.4-2.8h2.3A1.51,1.51,0,0,1,55.9,24.8Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M49.7,74.7A1.29,1.29,0,0,1,48.3,76h-2l1.5-2.7h.5A1.37,1.37,0,0,1,49.7,74.7Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M55,65.8a1.34,1.34,0,0,1-1.4,1.3H51.3l1.5-2.7h.8A1.43,1.43,0,0,1,55,65.8Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M56.7,52.8,37.1,87.3l-2.2-.1,4.6-26,1-5.8.7-3.7C46.5,52.2,51.8,52.6,56.7,52.8Z\">
                          </path>
                          <path class=\"cls-2\" d=\"M8.9,48.7,5.6,55.8l-3.1-.1L2.6,48C3.9,48.2,6.1,48.4,8.9,48.7Z\">
                          </path>
                          <path class=\"cls-2\" d=\"M9.1,39.8c-2.8.2-5,.3-6.3.4L3,32.5l3.1.1Z\"></path>
                          <path class=\"cls-2\" d=\"M57,37.8c-4.9,0-10.3.2-15.6.3L36.7,2.4h2.2Z\"></path>
                          <path class=\"cls-2\"
                            d=\"M79.8,45.8c-.1,1.9-2.6,3.1-4.7,3.7a38.6,38.6,0,0,1-10.9,1.2c-20.7-.5-55-4.3-61.6-5.1l.1-2.9c6.6-.5,41.1-2.8,61.7-2.4a40.39,40.39,0,0,1,10.8,1.6C77.4,42.6,79.9,43.9,79.8,45.8Z\">
                          </path>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <span style=\"min-height: 15px;\"></span>
                </div>
                <div class=\"personal__tracking-dash\">
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                </div>
                <div class=\"personal__tracking-departure\"><span>";
                    // line 208
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "sent_from", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
                    echo "</span></div>
                <div class=\"personal__tracking-destination\"><span>";
                    // line 209
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "heading_to", [], "any", false, false, true, 209), 209, $this->source), "html", null, true);
                    echo "</span></div>
              </div>
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 211
$context["item"], "arrived", [], "any", false, false, true, 211) == false)) {
                    // line 212
                    echo "              <div class=\"personal__tracking\">
                <div class=\"personal__tracking-status\">
                  <span>";
                    // line 214
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                    echo "</span>
                  <div class=\"personal__tracking-plane\"> <img src=\"";
                    // line 215
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/steps-plane.svg");
                    echo "\" alt=\"\">
                  </div>
                  <span>";
                    // line 217
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "currently", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
                    echo "</span>
                </div>
                <div class=\"personal__tracking-dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i>
                  </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i>
                  </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
                <div class=\"personal__tracking-departure\"><span>";
                    // line 222
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "sent_from", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
                    echo "</span></div>
                <div class=\"personal__tracking-destination\"><span>";
                    // line 223
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "heading_to", [], "any", false, false, true, 223), 223, $this->source), "html", null, true);
                    echo "</span></div>
              </div>


              ";
                }
                // line 228
                echo "            </div>
            ";
            }
            // line 230
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 231
            echo "            <h3 style=\"text-align: center;\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Доставки нет"]);
            echo "</h3>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/personal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 233,  475 => 231,  470 => 230,  466 => 228,  458 => 223,  454 => 222,  446 => 217,  441 => 215,  437 => 214,  433 => 212,  431 => 211,  426 => 209,  422 => 208,  345 => 134,  341 => 132,  339 => 131,  332 => 129,  328 => 127,  325 => 126,  320 => 125,  315 => 122,  306 => 120,  301 => 119,  298 => 118,  289 => 112,  281 => 111,  275 => 110,  269 => 109,  263 => 108,  257 => 107,  252 => 105,  243 => 101,  237 => 100,  231 => 99,  225 => 98,  219 => 97,  213 => 96,  207 => 95,  201 => 94,  195 => 93,  189 => 92,  183 => 91,  178 => 88,  175 => 87,  170 => 86,  159 => 78,  155 => 77,  150 => 75,  142 => 70,  136 => 69,  130 => 68,  124 => 67,  118 => 66,  104 => 55,  87 => 41,  65 => 22,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/breadcrumbs' %}
<div class=\"personal\">
  <div class=\"container\">
    <div class=\"tab personal__wrap\">
      <div class=\"personal__col\">
        <ul class=\"tabs\">
          <li><a href=\"#\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"26\" viewBox=\"0 0 26 26\" fill=\"none\">
                <path
                  d=\"M14.083 6.49977C14.083 7.09804 13.598 7.58304 12.9998 7.58304C12.4015 7.58304 11.9165 7.09804 11.9165 6.49977C11.9165 5.9015 12.4015 5.4165 12.9998 5.4165C13.598 5.4165 14.083 5.9015 14.083 6.49977Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M12.9998 20.5833C12.5513 20.5833 12.1873 20.2193 12.1873 19.7708V11.375H11.104C10.6555 11.375 10.2915 11.011 10.2915 10.5625C10.2915 10.114 10.6555 9.75 11.104 9.75H12.9998C13.4483 9.75 13.8123 10.114 13.8123 10.5625V19.7708C13.8123 20.2193 13.4483 20.5833 12.9998 20.5833Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M13 26C5.83151 26 0 20.1685 0 13C0 5.83151 5.83151 0 13 0C20.1685 0 26 5.83151 26 13C26 20.1685 20.1685 26 13 26ZM13 1.625C6.72752 1.625 1.625 6.72752 1.625 13C1.625 19.2725 6.72752 24.375 13 24.375C19.2725 24.375 24.375 19.2725 24.375 13C24.375 6.72752 19.2725 1.625 13 1.625Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M15.4375 20.5835H10.5625C10.114 20.5835 9.75 20.2195 9.75 19.771C9.75 19.3225 10.114 18.9585 10.5625 18.9585H15.4375C15.886 18.9585 16.25 19.3225 16.25 19.771C16.25 20.2195 15.886 20.5835 15.4375 20.5835Z\"
                  fill=\"#3A3A3A\"></path>
              </svg>
              <span>{{'Ваши данные'|_}}</span>
            </a>
          </li>
          <li>
            <a href=\"#\">
              <svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <g clip-path=\"url(#clip0)\">
                  <path
                    d=\"M14.9983 9.375L14.9956 15.9339C14.9956 16.1829 15.0945 16.4209 15.2703 16.5967L19.9623 21.2879L21.288 19.9622L16.8706 15.5456L16.8733 9.375H14.9983Z\"
                    fill=\"#3A3A3A\"></path>
                  <path
                    d=\"M16.875 1.875C10.276 1.875 4.81454 6.77582 3.89984 13.125H0L4.6875 17.8125L9.37499 13.125H5.79435C6.69125 7.81289 11.3115 3.75002 16.875 3.75002C23.0786 3.75002 28.125 8.7964 28.125 15C28.125 21.2037 23.0787 26.25 16.875 26.25C13.3878 26.25 10.1542 24.6717 8.00354 21.9196L6.52588 23.0731C9.0344 26.283 12.8064 28.125 16.875 28.125C24.1122 28.125 30 22.2363 30 15C30 7.76374 24.1122 1.87505 16.875 1.875Z\"
                    fill=\"#3A3A3A\"></path>
                </g>
                <defs>
                  <clippath id=\"clip0\">
                    <rect width=\"30\" height=\"30\" fill=\"white\"></rect>
                  </clippath>
                </defs>
              </svg><span>{{'История заказов'|_}}</span></a></li>
          <li>
            <a href=\"#\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 28 28\" fill=\"none\">
                <path
                  d=\"M7.28587 4.5487C7.28587 3.0474 6.04951 1.81104 4.54821 1.81104C3.04691 1.81104 1.81055 3.0474 1.81055 4.5487C1.81055 6.05 3.04691 7.28636 4.54821 7.28636C6.09366 7.28636 7.28587 6.09415 7.28587 4.5487ZM2.73782 4.5487C2.73782 3.53311 3.57678 2.73831 4.54821 2.73831C5.56379 2.73831 6.3586 3.57727 6.3586 4.5487C6.3586 5.56428 5.51964 6.35909 4.54821 6.35909C4.06249 6.35909 3.62094 6.18246 3.26769 5.82922C2.91444 5.52013 2.73782 5.03441 2.73782 4.5487Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M22.8286 12.7618C20.3558 12.7176 18.3247 14.7046 18.2805 17.1773C18.2805 19.1202 19.561 21.4163 20.7091 23.0501C19.4727 23.3592 18.6338 23.9332 18.3688 24.6397H4.10649C2.34026 24.6397 0.927273 23.2267 0.927273 21.4605C0.927273 19.6942 2.34026 18.2812 4.10649 18.2812H13.2468C15.013 18.2812 16.426 16.8683 16.426 15.102C16.426 13.3358 15.013 11.8786 13.2468 11.8786H9.05195C8.78701 11.1722 7.94805 10.5981 6.71169 10.289C7.85974 8.61111 9.14026 6.35916 9.14026 4.41631C9.0961 1.94358 7.02078 -0.0434339 4.54805 0.000721929C2.07532 -0.0434339 0.0441558 1.94358 0 4.41631C0 6.35916 1.28052 8.65527 2.42857 10.289C0.927273 10.6864 0 11.4371 0 12.3202C0 13.6007 1.94286 14.6163 4.54805 14.6163C6.84416 14.6163 8.61039 13.8657 9.00779 12.8059H13.2468C14.5273 12.8059 15.5429 13.8215 15.5429 15.102C15.5429 16.3825 14.5273 17.3981 13.2468 17.3981H4.10649C1.85455 17.3981 0 19.2527 0 21.5046C0 23.7566 1.85455 25.6111 4.10649 25.6111H18.3247C18.7221 26.6709 20.5325 27.4215 22.7844 27.4215C25.3896 27.4215 27.3325 26.4501 27.3325 25.1254C27.3325 24.2423 26.4052 23.4916 24.9039 23.0942C26.0519 21.4163 27.3325 19.1644 27.3325 17.2215C27.3325 14.7046 25.3013 12.7176 22.8286 12.7618ZM0.927273 4.41631C0.971429 2.42929 2.60519 0.883839 4.59221 0.927995C6.57922 0.883839 8.21299 2.47345 8.25714 4.41631C8.25714 6.97735 5.56364 10.4657 4.59221 11.6137C3.57662 10.4657 0.927273 6.97735 0.927273 4.41631ZM4.54805 13.689C2.34026 13.689 0.883117 12.8942 0.883117 12.3202C0.883117 11.9228 1.63377 11.3488 2.95844 11.0838C3.17922 11.3929 3.35584 11.6137 3.53247 11.8345H3.17922C2.91429 11.8345 2.73766 12.0553 2.73766 12.276C2.73766 12.4968 2.95844 12.7176 3.17922 12.7176H5.91688C6.18182 12.7176 6.35844 12.4968 6.35844 12.276C6.35844 12.0553 6.13766 11.8345 5.91688 11.8345H5.51948C5.6961 11.6137 5.87273 11.3488 6.09351 11.0838C7.46234 11.3488 8.16883 11.8786 8.16883 12.3202C8.21299 12.8942 6.8 13.689 4.54805 13.689ZM26.4494 25.0812C26.4494 25.6553 25.0364 26.4501 22.7844 26.4501C20.5325 26.4501 19.1195 25.6553 19.1195 25.0812C19.1195 24.6838 19.8701 24.1098 21.1948 23.8449C21.4156 24.154 21.5922 24.3748 21.7688 24.5955H21.3714C21.1065 24.5955 20.9299 24.8163 20.9299 25.0371C20.9299 25.302 21.1507 25.4786 21.3714 25.4786H24.1091C24.374 25.4786 24.5506 25.2579 24.5506 25.0371C24.5506 24.7722 24.3299 24.5955 24.1091 24.5955H23.7117C23.8883 24.3748 24.0649 24.1098 24.2857 23.8449C25.7429 24.154 26.4494 24.6838 26.4494 25.0812ZM22.8286 24.3748C21.8571 23.2267 19.1636 19.7384 19.1636 17.1773C19.2519 15.2345 20.8416 13.689 22.8286 13.689C24.8156 13.689 26.4052 15.2345 26.4935 17.1773C26.4494 19.7825 23.7558 23.2267 22.8286 24.3748Z\"
                  fill=\"#3A3A3A\"></path>
                <path
                  d=\"M22.8285 14.6162C21.3272 14.6162 20.0908 15.8526 20.0908 17.3539C20.0908 18.8552 21.3272 20.0915 22.8285 20.0915C24.3298 20.0915 25.5661 18.8552 25.5661 17.3539C25.5661 15.8084 24.3298 14.6162 22.8285 14.6162ZM22.8285 19.1643C21.8129 19.1643 21.0181 18.3253 21.0181 17.3539C21.0181 16.3383 21.8571 15.5435 22.8285 15.5435C23.8441 15.5435 24.6389 16.3824 24.6389 17.3539C24.6389 18.3253 23.7999 19.1643 22.8285 19.1643Z\"
                  fill=\"#3A3A3A\"></path>
              </svg>
              <span>{{'Отслеживание отгрузки'|_}}</span>
            </a>
          </li>
        </ul>
      </div>
      <div class=\"personal__col\">
        <div class=\"tab_content\">
          <div class=\"tabs_item\">
            <div class=\"personal__info\">
              <div class=\"tabs_item__col\">
                <ul>
                  <li>{{'Имя'|_}}: {{user.name}}</li>
                  <li>{{'Фамилия'|_}}: {{user.surname}}</li>
                  <li>{{'Адрес'|_}}: {{user.address}}</li>
                  <li>{{'Номер телефона'|_}}: {{user.phone}}</li>
                  <li>Email: {{user.email}}</li>
                </ul>
              </div>
              <div class=\"tabs_item__col\">
                <ul>
                  <li>Login: {{ user.login }}</li>
                  <li>
                    <a href=\"{{ 'update'|page }}\" style=\"color: #000\" onMouseOver=\"this.style.color='#fcb408'\"
                      onMouseOut=\"this.style.color='#000'\">{{'Изменить'|_}}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"tabs_item\">

            {% for item in user.history %}
            {% if item.publish == true %}
            <div class=\"personal__info personal__info--history\">
              <div class=\"tabs_item__col\">
                <ul>
                  <li>{{'Наименование товара'|_}}: {{item.product_name}}</li>
                  <li>{{'Заказ'|_}} № {{item.order_number}}</li>
                  <li>{{'Магазин'|_}}: {{item.shop_store}}</li>
                  <li>{{'Дата отправки'|_}}: {{item.departure_date}}</li>
                  <li>{{'Место отправки'|_}}: {{item.dispatch_place}}</li>
                  <li>{{'Вид грузоперевозки'|_}}: {{item.transportation_type}}</li>
                  <li>{{'Номер WhatsApp'|_}}: {{item.whats_app_number}}</li>
                  <li>{{'Трек номер'|_}}: {{item.track_number}}</li>
                  <li>{{'Описание'|_}}: {{item.description}}</li>
                  <li>{{'Дополнительная информация'|_}}: {{item.additional_info}}</li>
                  <li>{{'ФИО'|_}}: {{item.full_name}}</li>
                </ul>
              </div>
              <div class=\"tabs_item__col\">
                <h2>{{'Параметры'|_}}</h2>
                <ul>
                  <li>{{'Вес груза'|_}}: {{item.cargo_weight}}</li>
                  <li>{{'Длина'|_}}: {{item.cargo_length}}</li>
                  <li>{{'Высота'|_}}: {{item.cargo_height}}</li>
                  <li>{{'Ширина'|_}}: {{item.cargo_width}}</li>
                  <li class=\"personal__info-total\">{{'Статус'|_}}: {{item.order_status}}<span>{{'Итог'|_}}:
                      {{item.total}}</span>
                  </li>
                </ul>
              </div>
            </div>
            {% else %}
            {% endif %}
            {% else %}
            <h3 style=\"text-align: center;\">{{'Заказов нет'|_}}</h3>
            {% endfor %}

          </div>
          <div class=\"tabs_item\" id=\"tracking\">
            {% for item in user.history %}
            {% if item.publish1 == true %}
            <div class=\"personal__tracking-item\">
              <div class=\"personal__tracking-date\">
                <p>{{'Доставка ожидается'|_}}: {{item.delivery_expected}}</p>
              </div>
              {% if item.arrived == true %}
              <div class=\"personal__tracking\">
                <div class=\"personal__tracking-status\" style=\"left: auto; right: -25px;\">
                  <span>{{'Прибыл в'|_}}</span>
                  <div class=\"personal__tracking-plane\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 82.21 89.6\">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #fcb408;
                          }

                          .cls-2 {
                            fill: #f4f6fd;
                          }
                        </style>
                      </defs>
                      <g id=\"Слой_2\" data-name=\"Слой 2\">
                        <g id=\"Слой_1-2\" data-name=\"Слой 1\">
                          <path class=\"cls-1\"
                            d=\"M76.1,39.6a38,38,0,0,0-11.5-1.8H59.8L55,28.5a3.81,3.81,0,0,0-.3-7.6H51l-.8-1.5a4.21,4.21,0,0,0,2-1,4.2,4.2,0,0,0,1.2-2.6A3.71,3.71,0,0,0,49.7,12l-3.3-.1L40.7.9a1.45,1.45,0,0,0-1-.7L35.3,0a1.22,1.22,0,0,0-1.2,1.4L39,38.2c-10.2.4-20.2,1-27.4,1.4L8,30.9a1.23,1.23,0,0,0-1.1-.7l-5.1-.1A1.16,1.16,0,0,0,.6,31.3L0,56.9a1.16,1.16,0,0,0,1.2,1.2l5.1.1a1.23,1.23,0,0,0,1.1-.7l4-8.6c7.1.8,17.1,1.8,27.3,2.6l-.7,4-1,5.6-4.8,27a1.21,1.21,0,0,0,1.2,1.4l4.3.1a1.38,1.38,0,0,0,1.1-.6L45,78.2l3.3.1a3.75,3.75,0,0,0,2.8-6.4,4.53,4.53,0,0,0-1.9-1.1l.8-1.5,3.6.1a3.71,3.71,0,0,0,3.8-3.7,3.87,3.87,0,0,0-3.2-3.8l5.2-9.1c1.7.1,3.3.1,4.8.1a39.88,39.88,0,0,0,11.6-1.3c5.2-1.5,6.4-4.1,6.4-6C82.3,44,81.2,41.4,76.1,39.6ZM54.6,23.4a1.35,1.35,0,0,1,1.3,1.4,1.29,1.29,0,0,1-1.4,1.3h-.8l-1.4-2.8Zm-5-9.1a1.34,1.34,0,0,1,1.3,1.4A1.29,1.29,0,0,1,49.5,17H49l-1.4-2.8ZM36.7,2.4h2.2L57,37.8c-4.9,0-10.3.2-15.6.3ZM2.9,32.5l3.1.1,3,7.2c-2.8.2-5,.3-6.3.4ZM5.6,55.8l-3.1-.1L2.6,48c1.3.2,3.5.4,6.3.7ZM49.7,74.7A1.29,1.29,0,0,1,48.3,76h-2l1.5-2.7h.5A1.37,1.37,0,0,1,49.7,74.7ZM55,65.8a1.34,1.34,0,0,1-1.4,1.3H51.3l1.5-2.7h.8A1.43,1.43,0,0,1,55,65.8ZM37.1,87.3l-2.2-.1,4.6-26,1-5.8.7-3.7c5.3.4,10.7.8,15.6,1Zm38-37.8a38.6,38.6,0,0,1-10.9,1.2c-20.7-.5-55-4.3-61.6-5.1l.1-2.9c6.6-.5,41.1-2.8,61.7-2.4a40.39,40.39,0,0,1,10.8,1.6c2.1.7,4.6,2,4.5,3.9C79.8,47.8,77.3,48.9,75.1,49.5Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M51,15.7A1.29,1.29,0,0,1,49.6,17h-.5l-1.4-2.8h2A1.51,1.51,0,0,1,51,15.7Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M55.9,24.8a1.29,1.29,0,0,1-1.4,1.3h-.8l-1.4-2.8h2.3A1.51,1.51,0,0,1,55.9,24.8Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M49.7,74.7A1.29,1.29,0,0,1,48.3,76h-2l1.5-2.7h.5A1.37,1.37,0,0,1,49.7,74.7Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M55,65.8a1.34,1.34,0,0,1-1.4,1.3H51.3l1.5-2.7h.8A1.43,1.43,0,0,1,55,65.8Z\">
                          </path>
                          <path class=\"cls-2\"
                            d=\"M56.7,52.8,37.1,87.3l-2.2-.1,4.6-26,1-5.8.7-3.7C46.5,52.2,51.8,52.6,56.7,52.8Z\">
                          </path>
                          <path class=\"cls-2\" d=\"M8.9,48.7,5.6,55.8l-3.1-.1L2.6,48C3.9,48.2,6.1,48.4,8.9,48.7Z\">
                          </path>
                          <path class=\"cls-2\" d=\"M9.1,39.8c-2.8.2-5,.3-6.3.4L3,32.5l3.1.1Z\"></path>
                          <path class=\"cls-2\" d=\"M57,37.8c-4.9,0-10.3.2-15.6.3L36.7,2.4h2.2Z\"></path>
                          <path class=\"cls-2\"
                            d=\"M79.8,45.8c-.1,1.9-2.6,3.1-4.7,3.7a38.6,38.6,0,0,1-10.9,1.2c-20.7-.5-55-4.3-61.6-5.1l.1-2.9c6.6-.5,41.1-2.8,61.7-2.4a40.39,40.39,0,0,1,10.8,1.6C77.4,42.6,79.9,43.9,79.8,45.8Z\">
                          </path>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <span style=\"min-height: 15px;\"></span>
                </div>
                <div class=\"personal__tracking-dash\">
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                  <i style=\"background-color: #1c2333;\"></i>
                </div>
                <div class=\"personal__tracking-departure\"><span>{{item.sent_from}}</span></div>
                <div class=\"personal__tracking-destination\"><span>{{item.heading_to}}</span></div>
              </div>
              {% elseif  item.arrived == false %}
              <div class=\"personal__tracking\">
                <div class=\"personal__tracking-status\">
                  <span>{{item.status}}</span>
                  <div class=\"personal__tracking-plane\"> <img src=\"{{'assets/icons/steps-plane.svg'|theme}}\" alt=\"\">
                  </div>
                  <span>{{item.currently}}</span>
                </div>
                <div class=\"personal__tracking-dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i>
                  </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i>
                  </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
                <div class=\"personal__tracking-departure\"><span>{{item.sent_from}}</span></div>
                <div class=\"personal__tracking-destination\"><span>{{item.heading_to}}</span></div>
              </div>


              {% endif %}
            </div>
            {% endif %}
            {% else %}
            <h3 style=\"text-align: center;\">{{'Доставки нет'|_}}</h3>
            {% endfor %}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/personal.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "for" => 86, "if" => 87);
        static $filters = array("_" => 22, "escape" => 66, "page" => 77, "theme" => 215);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'for', 'if'],
                ['_', 'escape', 'page', 'theme'],
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
