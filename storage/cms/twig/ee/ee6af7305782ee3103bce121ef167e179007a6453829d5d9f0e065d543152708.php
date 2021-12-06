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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/pages/contacts.htm */
class __TwigTemplate_f8bd423305ea68038d98df178907288cc0bd5f8b2cfc0f63b191dbb0590a3fdc extends \Twig\Template
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
        echo "<div class=\"contacts\">
  <div class=\"contacts__points\">
    <div class=\"container\">
      <h6>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Пункты сбора"]);
        echo "</h6>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "collection_points", [], "any", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "      <div class=\"contacts__map\">
        <div class=\"contacts__map-col\">
          <div class=\"contacts__block\">
            ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_office", [], "any", false, false, true, 10) == true)) {
                // line 11
                echo "            <h2 class=\"title\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_office", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "</h2>
            ";
            } else {
                // line 13
                echo "
            ";
            }
            // line 15
            echo "            <ul>
              ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_address", [], "any", false, false, true, 16) == true)) {
                // line 17
                echo "              <li class=\"contacts__location\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"18\" viewBox=\"0 0 13 18\" fill=\"none\">
                  <path
                    d=\"M6.10887 0C2.74045 0 0 2.74041 0 6.10884C0 7.46244 0.796921 9.52102 2.50797 12.5872C3.67556 14.6794 4.83777 16.4466 4.8868 16.5211L5.72682 17.7943C5.81151 17.9227 5.95501 18 6.10887 18C6.26273 18 6.40623 17.9227 6.49093 17.7943L7.33091 16.5211C7.37946 16.4475 8.53321 14.6956 9.70977 12.5872C11.4208 9.52116 12.2177 7.46258 12.2177 6.10884C12.2177 2.74041 9.47729 0 6.10887 0ZM8.91043 12.1411C7.75024 14.22 6.61473 15.9445 6.56687 16.0169L6.10887 16.7111L5.65102 16.0171C5.60291 15.9441 4.45868 14.2042 3.30731 12.1411C1.72017 9.29692 0.915412 7.26734 0.915412 6.10884C0.915412 3.24517 3.24517 0.915412 6.10887 0.915412C8.97257 0.915412 11.3023 3.24517 11.3023 6.10884C11.3023 7.26749 10.4976 9.297 8.91043 12.1411Z\"
                    fill=\"#616161\"></path>
                  <path
                    d=\"M6.1087 2.68359C4.24108 2.68359 2.72168 4.20303 2.72168 6.07061C2.72168 7.93819 4.24108 9.45763 6.1087 9.45763C7.97633 9.45763 9.49573 7.93819 9.49573 6.07061C9.49573 4.20303 7.97633 2.68359 6.1087 2.68359ZM6.1087 8.54222C4.74584 8.54222 3.63709 7.43347 3.63709 6.07061C3.63709 4.70775 4.74584 3.599 6.1087 3.599C7.47161 3.599 8.58032 4.70775 8.58032 6.07061C8.58032 7.43347 7.47161 8.54222 6.1087 8.54222Z\"
                    fill=\"#616161\"></path>
                </svg>
                ";
                // line 26
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_address", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "
              </li>
              ";
            } else {
                // line 29
                echo "
              ";
            }
            // line 31
            echo "
              ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_working_days1", [], "any", false, false, true, 32) == true)) {
                // line 33
                echo "              <li>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\">
                  <g clip-path=\"url(#clip0)\">
                    <path
                      d=\"M11.1042 1.08331H10.5625C10.413 1.08331 10.2917 1.20465 10.2917 1.35415C10.2917 1.50365 10.413 1.62497 10.5625 1.62497H11.1042C11.8511 1.62497 12.4583 2.23219 12.4583 2.97913V11.1041C12.4583 11.8511 11.8511 12.4583 11.1042 12.4583H1.89584C1.14887 12.4583 0.541684 11.8511 0.541684 11.1041V2.97913C0.541658 2.23219 1.14887 1.62497 1.89584 1.62497H2.4375C2.587 1.62497 2.70834 1.50363 2.70834 1.35413C2.70834 1.20463 2.587 1.08331 2.4375 1.08331H1.89584C0.850408 1.08331 0 1.93372 0 2.97913V11.1041C0 12.1496 0.850408 13 1.89584 13H11.1042C12.1496 13 13 12.1496 13 11.1041V2.97913C13 1.93372 12.1496 1.08331 11.1042 1.08331Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M8.39602 1.08331H4.60434C4.45484 1.08331 4.3335 1.20465 4.3335 1.35415C4.3335 1.50365 4.45484 1.62497 4.60434 1.62497H8.39599C8.54549 1.62497 8.66684 1.50363 8.66684 1.35413C8.66684 1.20463 8.54552 1.08331 8.39602 1.08331Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M12.7292 3.79169H0.270842C0.121342 3.79169 0 3.91303 0 4.06253C0 4.21203 0.121342 4.33337 0.270842 4.33337H12.7292C12.8787 4.33337 13 4.21203 13 4.06253C13 3.91303 12.8787 3.79169 12.7292 3.79169Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M3.52084 0C3.37134 0 3.25 0.121342 3.25 0.270842V2.4375C3.25 2.587 3.37134 2.70834 3.52084 2.70834C3.67034 2.70834 3.79168 2.587 3.79168 2.4375V0.270842C3.79166 0.121342 3.67034 0 3.52084 0Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M9.47934 0C9.32984 0 9.2085 0.121342 9.2085 0.270842V2.4375C9.2085 2.587 9.32984 2.70834 9.47934 2.70834C9.62884 2.70834 9.75018 2.587 9.75018 2.4375V0.270842C9.75018 0.121342 9.62884 0 9.47934 0Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M5.41559 8.39581C5.74493 8.14881 5.95834 7.75447 5.95834 7.31247C5.95834 6.5655 5.35113 5.95831 4.60418 5.95831C3.85722 5.95831 3.25 6.5655 3.25 7.31247C3.25 7.46197 3.37134 7.58331 3.52084 7.58331C3.67034 7.58331 3.79168 7.46197 3.79168 7.31247C3.79168 6.8645 4.15622 6.49997 4.60418 6.49997C5.05215 6.49997 5.41668 6.8645 5.41668 7.31247C5.41668 7.76044 5.05215 8.12497 4.60418 8.12497H4.0625C3.913 8.12497 3.79166 8.24631 3.79166 8.39581C3.79166 8.54531 3.913 8.66665 4.0625 8.66665H4.60416C5.05213 8.66665 5.41666 9.03119 5.41666 9.47915C5.41666 9.92712 5.05213 10.2917 4.60416 10.2917C4.15619 10.2917 3.79166 9.92712 3.79166 9.47915C3.79166 9.32965 3.67032 9.20831 3.52082 9.20831C3.37132 9.20831 3.25 9.32963 3.25 9.47913C3.25 10.2261 3.85722 10.8333 4.60416 10.8333C5.35113 10.8333 5.95832 10.2261 5.95832 9.47913C5.95834 9.03713 5.74491 8.64281 5.41559 8.39581Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M8.49977 5.9789C8.39902 5.93718 8.28255 5.9594 8.20455 6.0374L7.12121 7.12074C7.01559 7.22636 7.01559 7.39808 7.12121 7.50371C7.22684 7.60933 7.39855 7.60933 7.50418 7.50371L8.12493 6.88296V10.5625C8.12493 10.712 8.24627 10.8333 8.39577 10.8333C8.54527 10.8333 8.66661 10.712 8.66661 10.5625V6.22915C8.66659 6.11974 8.60052 6.02062 8.49977 5.9789Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M9.479 10.2916H7.31235C7.16285 10.2916 7.0415 10.413 7.0415 10.5625C7.0415 10.712 7.16285 10.8333 7.31235 10.8333H9.479C9.6285 10.8333 9.74985 10.712 9.74985 10.5625C9.74985 10.413 9.6285 10.2916 9.479 10.2916Z\"
                      fill=\"#616161\"></path>
                  </g>
                  <defs>
                    <clippath id=\"clip0\">
                      <rect width=\"13\" height=\"13\" fill=\"white\"></rect>
                    </clippath>
                  </defs>
                </svg>
                ";
                // line 67
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_working_days1", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "
              </li>
              ";
            } else {
                // line 70
                echo "
              ";
            }
            // line 72
            echo "

              ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_work_time1", [], "any", false, false, true, 74) == true)) {
                // line 75
                echo "              <li class=\"contacts__time\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\">
                  <path
                    d=\"M6.49999 0C2.91596 0 0 2.91596 0 6.49999C0 10.084 2.91596 13 6.49999 13C10.084 13 13 10.084 13 6.49999C13 2.91596 10.084 0 6.49999 0ZM6.49999 12.4348C3.22738 12.4348 0.565208 9.77259 0.565208 6.49999C0.565208 3.22738 3.22738 0.565208 6.49999 0.565208C9.77259 0.565208 12.4348 3.22738 12.4348 6.49999C12.4348 9.77259 9.77259 12.4348 6.49999 12.4348Z\"
                    fill=\"#616161\"></path>
                  <path
                    d=\"M9.24346 8.84399L6.78252 6.38301V1.9783C6.78252 1.8223 6.6559 1.69568 6.4999 1.69568C6.3439 1.69568 6.21729 1.8223 6.21729 1.9783V6.50004C6.21729 6.57521 6.24725 6.64701 6.29982 6.70013L8.84329 9.2436C8.89869 9.29842 8.97102 9.32613 9.04338 9.32613C9.11573 9.32613 9.18806 9.29845 9.24346 9.2436C9.35368 9.13336 9.35368 8.9542 9.24346 8.84399Z\"
                    fill=\"#616161\"></path>
                </svg>
                ";
                // line 84
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_work_time1", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "
              </li>
              ";
            } else {
                // line 87
                echo "              ";
            }
            // line 88
            echo "
              ";
            // line 89
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_working_days2", [], "any", false, false, true, 89) == true)) {
                // line 90
                echo "              <li>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\">
                  <g clip-path=\"url(#clip0)\">
                    <path
                      d=\"M11.1042 1.08331H10.5625C10.413 1.08331 10.2917 1.20465 10.2917 1.35415C10.2917 1.50365 10.413 1.62497 10.5625 1.62497H11.1042C11.8511 1.62497 12.4583 2.23219 12.4583 2.97913V11.1041C12.4583 11.8511 11.8511 12.4583 11.1042 12.4583H1.89584C1.14887 12.4583 0.541684 11.8511 0.541684 11.1041V2.97913C0.541658 2.23219 1.14887 1.62497 1.89584 1.62497H2.4375C2.587 1.62497 2.70834 1.50363 2.70834 1.35413C2.70834 1.20463 2.587 1.08331 2.4375 1.08331H1.89584C0.850408 1.08331 0 1.93372 0 2.97913V11.1041C0 12.1496 0.850408 13 1.89584 13H11.1042C12.1496 13 13 12.1496 13 11.1041V2.97913C13 1.93372 12.1496 1.08331 11.1042 1.08331Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M8.39602 1.08331H4.60434C4.45484 1.08331 4.3335 1.20465 4.3335 1.35415C4.3335 1.50365 4.45484 1.62497 4.60434 1.62497H8.39599C8.54549 1.62497 8.66684 1.50363 8.66684 1.35413C8.66684 1.20463 8.54552 1.08331 8.39602 1.08331Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M12.7292 3.79169H0.270842C0.121342 3.79169 0 3.91303 0 4.06253C0 4.21203 0.121342 4.33337 0.270842 4.33337H12.7292C12.8787 4.33337 13 4.21203 13 4.06253C13 3.91303 12.8787 3.79169 12.7292 3.79169Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M3.52084 0C3.37134 0 3.25 0.121342 3.25 0.270842V2.4375C3.25 2.587 3.37134 2.70834 3.52084 2.70834C3.67034 2.70834 3.79168 2.587 3.79168 2.4375V0.270842C3.79166 0.121342 3.67034 0 3.52084 0Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M9.47934 0C9.32984 0 9.2085 0.121342 9.2085 0.270842V2.4375C9.2085 2.587 9.32984 2.70834 9.47934 2.70834C9.62884 2.70834 9.75018 2.587 9.75018 2.4375V0.270842C9.75018 0.121342 9.62884 0 9.47934 0Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M5.41559 8.39581C5.74493 8.14881 5.95834 7.75447 5.95834 7.31247C5.95834 6.5655 5.35113 5.95831 4.60418 5.95831C3.85722 5.95831 3.25 6.5655 3.25 7.31247C3.25 7.46197 3.37134 7.58331 3.52084 7.58331C3.67034 7.58331 3.79168 7.46197 3.79168 7.31247C3.79168 6.8645 4.15622 6.49997 4.60418 6.49997C5.05215 6.49997 5.41668 6.8645 5.41668 7.31247C5.41668 7.76044 5.05215 8.12497 4.60418 8.12497H4.0625C3.913 8.12497 3.79166 8.24631 3.79166 8.39581C3.79166 8.54531 3.913 8.66665 4.0625 8.66665H4.60416C5.05213 8.66665 5.41666 9.03119 5.41666 9.47915C5.41666 9.92712 5.05213 10.2917 4.60416 10.2917C4.15619 10.2917 3.79166 9.92712 3.79166 9.47915C3.79166 9.32965 3.67032 9.20831 3.52082 9.20831C3.37132 9.20831 3.25 9.32963 3.25 9.47913C3.25 10.2261 3.85722 10.8333 4.60416 10.8333C5.35113 10.8333 5.95832 10.2261 5.95832 9.47913C5.95834 9.03713 5.74491 8.64281 5.41559 8.39581Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M8.49977 5.9789C8.39902 5.93718 8.28255 5.9594 8.20455 6.0374L7.12121 7.12074C7.01559 7.22636 7.01559 7.39808 7.12121 7.50371C7.22684 7.60933 7.39855 7.60933 7.50418 7.50371L8.12493 6.88296V10.5625C8.12493 10.712 8.24627 10.8333 8.39577 10.8333C8.54527 10.8333 8.66661 10.712 8.66661 10.5625V6.22915C8.66659 6.11974 8.60052 6.02062 8.49977 5.9789Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M9.479 10.2916H7.31235C7.16285 10.2916 7.0415 10.413 7.0415 10.5625C7.0415 10.712 7.16285 10.8333 7.31235 10.8333H9.479C9.6285 10.8333 9.74985 10.712 9.74985 10.5625C9.74985 10.413 9.6285 10.2916 9.479 10.2916Z\"
                      fill=\"#616161\"></path>
                  </g>
                  <defs>
                    <clippath id=\"clip0\">
                      <rect width=\"13\" height=\"13\" fill=\"white\"></rect>
                    </clippath>
                  </defs>
                </svg>
                ";
                // line 124
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_working_days2", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                echo "
              </li>
              ";
            } else {
                // line 127
                echo "              ";
            }
            // line 128
            echo "

              ";
            // line 130
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_work_time2", [], "any", false, false, true, 130) == true)) {
                // line 131
                echo "              <li>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\">
                  <path
                    d=\"M6.49999 0C2.91596 0 0 2.91596 0 6.49999C0 10.084 2.91596 13 6.49999 13C10.084 13 13 10.084 13 6.49999C13 2.91596 10.084 0 6.49999 0ZM6.49999 12.4348C3.22738 12.4348 0.565208 9.77259 0.565208 6.49999C0.565208 3.22738 3.22738 0.565208 6.49999 0.565208C9.77259 0.565208 12.4348 3.22738 12.4348 6.49999C12.4348 9.77259 9.77259 12.4348 6.49999 12.4348Z\"
                    fill=\"#616161\"></path>
                  <path
                    d=\"M9.24346 8.84399L6.78252 6.38301V1.9783C6.78252 1.8223 6.6559 1.69568 6.4999 1.69568C6.3439 1.69568 6.21729 1.8223 6.21729 1.9783V6.50004C6.21729 6.57521 6.24725 6.64701 6.29982 6.70013L8.84329 9.2436C8.89869 9.29842 8.97102 9.32613 9.04338 9.32613C9.11573 9.32613 9.18806 9.29845 9.24346 9.2436C9.35368 9.13336 9.35368 8.9542 9.24346 8.84399Z\"
                    fill=\"#616161\"></path>
                </svg>
                ";
                // line 140
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_work_time2", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
                echo "
              </li>
              ";
            } else {
                // line 143
                echo "              ";
            }
            // line 144
            echo "
            </ul>
            ";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_add_info", [], "any", false, false, true, 146) == true)) {
                // line 147
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_add_info", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
                echo "</p>
            ";
            } else {
                // line 149
                echo "            ";
            }
            // line 150
            echo "          </div>
        </div>
        <div class=\"contacts__map-col\">
          ";
            // line 153
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "collection_point_map", [], "any", false, false, true, 153), 153, $this->source);
            echo "
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "    </div>
  </div>
  <div class=\"add-info add-info--contacts\" style=\"background-image: url('";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/add-info.webp");
        echo "')\">
    <div class=\"container\">
      <div class=\"add-info__wrap\">
        <div class=\"add-info__col\">
          <h2 class=\"title title--light\">";
        // line 163
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["За пределами штата Иллинойс? Посылайте свои посылки на этот <br> адрес:"]);
        echo "
          </h2>
        </div>
        <div class=\"add-info__col\">
          <div class=\"add-info__address\">
            <p>";
        // line 168
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Высылайте на свое ФИО и номер телефона"]);
        echo "</p>
            <p>";
        // line 169
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Address: 1304 Derby Lane"]);
        echo "</p>
            <p>";
        // line 170
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["City: Mundelein"]);
        echo "</p>
            <p>";
        // line 171
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["State: IL"]);
        echo "</p>
            <p>";
        // line 172
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Zip Code: 60060"]);
        echo "</p>
            <p>";
        // line 173
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Воспользуйтесь эксклюзивной ценой при отправке с FedEx на наш склад!"]);
        echo " </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 173,  317 => 172,  313 => 171,  309 => 170,  305 => 169,  301 => 168,  293 => 163,  286 => 159,  282 => 157,  272 => 153,  267 => 150,  264 => 149,  258 => 147,  256 => 146,  252 => 144,  249 => 143,  243 => 140,  232 => 131,  230 => 130,  226 => 128,  223 => 127,  217 => 124,  181 => 90,  179 => 89,  176 => 88,  173 => 87,  167 => 84,  156 => 75,  154 => 74,  150 => 72,  146 => 70,  140 => 67,  104 => 33,  102 => 32,  99 => 31,  95 => 29,  89 => 26,  78 => 17,  76 => 16,  73 => 15,  69 => 13,  63 => 11,  61 => 10,  56 => 7,  52 => 6,  48 => 5,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/breadcrumbs' %}
<div class=\"contacts\">
  <div class=\"contacts__points\">
    <div class=\"container\">
      <h6>{{'Пункты сбора'|_}}</h6>
      {% for item in this.theme.collection_points %}
      <div class=\"contacts__map\">
        <div class=\"contacts__map-col\">
          <div class=\"contacts__block\">
            {% if item.collection_point_office == true %}
            <h2 class=\"title\">{{item.collection_point_office}}</h2>
            {% else %}

            {% endif %}
            <ul>
              {% if item.collection_point_address == true %}
              <li class=\"contacts__location\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"18\" viewBox=\"0 0 13 18\" fill=\"none\">
                  <path
                    d=\"M6.10887 0C2.74045 0 0 2.74041 0 6.10884C0 7.46244 0.796921 9.52102 2.50797 12.5872C3.67556 14.6794 4.83777 16.4466 4.8868 16.5211L5.72682 17.7943C5.81151 17.9227 5.95501 18 6.10887 18C6.26273 18 6.40623 17.9227 6.49093 17.7943L7.33091 16.5211C7.37946 16.4475 8.53321 14.6956 9.70977 12.5872C11.4208 9.52116 12.2177 7.46258 12.2177 6.10884C12.2177 2.74041 9.47729 0 6.10887 0ZM8.91043 12.1411C7.75024 14.22 6.61473 15.9445 6.56687 16.0169L6.10887 16.7111L5.65102 16.0171C5.60291 15.9441 4.45868 14.2042 3.30731 12.1411C1.72017 9.29692 0.915412 7.26734 0.915412 6.10884C0.915412 3.24517 3.24517 0.915412 6.10887 0.915412C8.97257 0.915412 11.3023 3.24517 11.3023 6.10884C11.3023 7.26749 10.4976 9.297 8.91043 12.1411Z\"
                    fill=\"#616161\"></path>
                  <path
                    d=\"M6.1087 2.68359C4.24108 2.68359 2.72168 4.20303 2.72168 6.07061C2.72168 7.93819 4.24108 9.45763 6.1087 9.45763C7.97633 9.45763 9.49573 7.93819 9.49573 6.07061C9.49573 4.20303 7.97633 2.68359 6.1087 2.68359ZM6.1087 8.54222C4.74584 8.54222 3.63709 7.43347 3.63709 6.07061C3.63709 4.70775 4.74584 3.599 6.1087 3.599C7.47161 3.599 8.58032 4.70775 8.58032 6.07061C8.58032 7.43347 7.47161 8.54222 6.1087 8.54222Z\"
                    fill=\"#616161\"></path>
                </svg>
                {{item.collection_point_address}}
              </li>
              {% else %}

              {% endif %}

              {% if item.collection_point_working_days1 == true %}
              <li>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\">
                  <g clip-path=\"url(#clip0)\">
                    <path
                      d=\"M11.1042 1.08331H10.5625C10.413 1.08331 10.2917 1.20465 10.2917 1.35415C10.2917 1.50365 10.413 1.62497 10.5625 1.62497H11.1042C11.8511 1.62497 12.4583 2.23219 12.4583 2.97913V11.1041C12.4583 11.8511 11.8511 12.4583 11.1042 12.4583H1.89584C1.14887 12.4583 0.541684 11.8511 0.541684 11.1041V2.97913C0.541658 2.23219 1.14887 1.62497 1.89584 1.62497H2.4375C2.587 1.62497 2.70834 1.50363 2.70834 1.35413C2.70834 1.20463 2.587 1.08331 2.4375 1.08331H1.89584C0.850408 1.08331 0 1.93372 0 2.97913V11.1041C0 12.1496 0.850408 13 1.89584 13H11.1042C12.1496 13 13 12.1496 13 11.1041V2.97913C13 1.93372 12.1496 1.08331 11.1042 1.08331Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M8.39602 1.08331H4.60434C4.45484 1.08331 4.3335 1.20465 4.3335 1.35415C4.3335 1.50365 4.45484 1.62497 4.60434 1.62497H8.39599C8.54549 1.62497 8.66684 1.50363 8.66684 1.35413C8.66684 1.20463 8.54552 1.08331 8.39602 1.08331Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M12.7292 3.79169H0.270842C0.121342 3.79169 0 3.91303 0 4.06253C0 4.21203 0.121342 4.33337 0.270842 4.33337H12.7292C12.8787 4.33337 13 4.21203 13 4.06253C13 3.91303 12.8787 3.79169 12.7292 3.79169Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M3.52084 0C3.37134 0 3.25 0.121342 3.25 0.270842V2.4375C3.25 2.587 3.37134 2.70834 3.52084 2.70834C3.67034 2.70834 3.79168 2.587 3.79168 2.4375V0.270842C3.79166 0.121342 3.67034 0 3.52084 0Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M9.47934 0C9.32984 0 9.2085 0.121342 9.2085 0.270842V2.4375C9.2085 2.587 9.32984 2.70834 9.47934 2.70834C9.62884 2.70834 9.75018 2.587 9.75018 2.4375V0.270842C9.75018 0.121342 9.62884 0 9.47934 0Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M5.41559 8.39581C5.74493 8.14881 5.95834 7.75447 5.95834 7.31247C5.95834 6.5655 5.35113 5.95831 4.60418 5.95831C3.85722 5.95831 3.25 6.5655 3.25 7.31247C3.25 7.46197 3.37134 7.58331 3.52084 7.58331C3.67034 7.58331 3.79168 7.46197 3.79168 7.31247C3.79168 6.8645 4.15622 6.49997 4.60418 6.49997C5.05215 6.49997 5.41668 6.8645 5.41668 7.31247C5.41668 7.76044 5.05215 8.12497 4.60418 8.12497H4.0625C3.913 8.12497 3.79166 8.24631 3.79166 8.39581C3.79166 8.54531 3.913 8.66665 4.0625 8.66665H4.60416C5.05213 8.66665 5.41666 9.03119 5.41666 9.47915C5.41666 9.92712 5.05213 10.2917 4.60416 10.2917C4.15619 10.2917 3.79166 9.92712 3.79166 9.47915C3.79166 9.32965 3.67032 9.20831 3.52082 9.20831C3.37132 9.20831 3.25 9.32963 3.25 9.47913C3.25 10.2261 3.85722 10.8333 4.60416 10.8333C5.35113 10.8333 5.95832 10.2261 5.95832 9.47913C5.95834 9.03713 5.74491 8.64281 5.41559 8.39581Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M8.49977 5.9789C8.39902 5.93718 8.28255 5.9594 8.20455 6.0374L7.12121 7.12074C7.01559 7.22636 7.01559 7.39808 7.12121 7.50371C7.22684 7.60933 7.39855 7.60933 7.50418 7.50371L8.12493 6.88296V10.5625C8.12493 10.712 8.24627 10.8333 8.39577 10.8333C8.54527 10.8333 8.66661 10.712 8.66661 10.5625V6.22915C8.66659 6.11974 8.60052 6.02062 8.49977 5.9789Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M9.479 10.2916H7.31235C7.16285 10.2916 7.0415 10.413 7.0415 10.5625C7.0415 10.712 7.16285 10.8333 7.31235 10.8333H9.479C9.6285 10.8333 9.74985 10.712 9.74985 10.5625C9.74985 10.413 9.6285 10.2916 9.479 10.2916Z\"
                      fill=\"#616161\"></path>
                  </g>
                  <defs>
                    <clippath id=\"clip0\">
                      <rect width=\"13\" height=\"13\" fill=\"white\"></rect>
                    </clippath>
                  </defs>
                </svg>
                {{ item.collection_point_working_days1 }}
              </li>
              {% else %}

              {% endif %}


              {% if item.collection_point_work_time1 == true %}
              <li class=\"contacts__time\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\">
                  <path
                    d=\"M6.49999 0C2.91596 0 0 2.91596 0 6.49999C0 10.084 2.91596 13 6.49999 13C10.084 13 13 10.084 13 6.49999C13 2.91596 10.084 0 6.49999 0ZM6.49999 12.4348C3.22738 12.4348 0.565208 9.77259 0.565208 6.49999C0.565208 3.22738 3.22738 0.565208 6.49999 0.565208C9.77259 0.565208 12.4348 3.22738 12.4348 6.49999C12.4348 9.77259 9.77259 12.4348 6.49999 12.4348Z\"
                    fill=\"#616161\"></path>
                  <path
                    d=\"M9.24346 8.84399L6.78252 6.38301V1.9783C6.78252 1.8223 6.6559 1.69568 6.4999 1.69568C6.3439 1.69568 6.21729 1.8223 6.21729 1.9783V6.50004C6.21729 6.57521 6.24725 6.64701 6.29982 6.70013L8.84329 9.2436C8.89869 9.29842 8.97102 9.32613 9.04338 9.32613C9.11573 9.32613 9.18806 9.29845 9.24346 9.2436C9.35368 9.13336 9.35368 8.9542 9.24346 8.84399Z\"
                    fill=\"#616161\"></path>
                </svg>
                {{item.collection_point_work_time1}}
              </li>
              {% else %}
              {% endif %}

              {% if item.collection_point_working_days2 == true %}
              <li>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\">
                  <g clip-path=\"url(#clip0)\">
                    <path
                      d=\"M11.1042 1.08331H10.5625C10.413 1.08331 10.2917 1.20465 10.2917 1.35415C10.2917 1.50365 10.413 1.62497 10.5625 1.62497H11.1042C11.8511 1.62497 12.4583 2.23219 12.4583 2.97913V11.1041C12.4583 11.8511 11.8511 12.4583 11.1042 12.4583H1.89584C1.14887 12.4583 0.541684 11.8511 0.541684 11.1041V2.97913C0.541658 2.23219 1.14887 1.62497 1.89584 1.62497H2.4375C2.587 1.62497 2.70834 1.50363 2.70834 1.35413C2.70834 1.20463 2.587 1.08331 2.4375 1.08331H1.89584C0.850408 1.08331 0 1.93372 0 2.97913V11.1041C0 12.1496 0.850408 13 1.89584 13H11.1042C12.1496 13 13 12.1496 13 11.1041V2.97913C13 1.93372 12.1496 1.08331 11.1042 1.08331Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M8.39602 1.08331H4.60434C4.45484 1.08331 4.3335 1.20465 4.3335 1.35415C4.3335 1.50365 4.45484 1.62497 4.60434 1.62497H8.39599C8.54549 1.62497 8.66684 1.50363 8.66684 1.35413C8.66684 1.20463 8.54552 1.08331 8.39602 1.08331Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M12.7292 3.79169H0.270842C0.121342 3.79169 0 3.91303 0 4.06253C0 4.21203 0.121342 4.33337 0.270842 4.33337H12.7292C12.8787 4.33337 13 4.21203 13 4.06253C13 3.91303 12.8787 3.79169 12.7292 3.79169Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M3.52084 0C3.37134 0 3.25 0.121342 3.25 0.270842V2.4375C3.25 2.587 3.37134 2.70834 3.52084 2.70834C3.67034 2.70834 3.79168 2.587 3.79168 2.4375V0.270842C3.79166 0.121342 3.67034 0 3.52084 0Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M9.47934 0C9.32984 0 9.2085 0.121342 9.2085 0.270842V2.4375C9.2085 2.587 9.32984 2.70834 9.47934 2.70834C9.62884 2.70834 9.75018 2.587 9.75018 2.4375V0.270842C9.75018 0.121342 9.62884 0 9.47934 0Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M5.41559 8.39581C5.74493 8.14881 5.95834 7.75447 5.95834 7.31247C5.95834 6.5655 5.35113 5.95831 4.60418 5.95831C3.85722 5.95831 3.25 6.5655 3.25 7.31247C3.25 7.46197 3.37134 7.58331 3.52084 7.58331C3.67034 7.58331 3.79168 7.46197 3.79168 7.31247C3.79168 6.8645 4.15622 6.49997 4.60418 6.49997C5.05215 6.49997 5.41668 6.8645 5.41668 7.31247C5.41668 7.76044 5.05215 8.12497 4.60418 8.12497H4.0625C3.913 8.12497 3.79166 8.24631 3.79166 8.39581C3.79166 8.54531 3.913 8.66665 4.0625 8.66665H4.60416C5.05213 8.66665 5.41666 9.03119 5.41666 9.47915C5.41666 9.92712 5.05213 10.2917 4.60416 10.2917C4.15619 10.2917 3.79166 9.92712 3.79166 9.47915C3.79166 9.32965 3.67032 9.20831 3.52082 9.20831C3.37132 9.20831 3.25 9.32963 3.25 9.47913C3.25 10.2261 3.85722 10.8333 4.60416 10.8333C5.35113 10.8333 5.95832 10.2261 5.95832 9.47913C5.95834 9.03713 5.74491 8.64281 5.41559 8.39581Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M8.49977 5.9789C8.39902 5.93718 8.28255 5.9594 8.20455 6.0374L7.12121 7.12074C7.01559 7.22636 7.01559 7.39808 7.12121 7.50371C7.22684 7.60933 7.39855 7.60933 7.50418 7.50371L8.12493 6.88296V10.5625C8.12493 10.712 8.24627 10.8333 8.39577 10.8333C8.54527 10.8333 8.66661 10.712 8.66661 10.5625V6.22915C8.66659 6.11974 8.60052 6.02062 8.49977 5.9789Z\"
                      fill=\"#616161\"></path>
                    <path
                      d=\"M9.479 10.2916H7.31235C7.16285 10.2916 7.0415 10.413 7.0415 10.5625C7.0415 10.712 7.16285 10.8333 7.31235 10.8333H9.479C9.6285 10.8333 9.74985 10.712 9.74985 10.5625C9.74985 10.413 9.6285 10.2916 9.479 10.2916Z\"
                      fill=\"#616161\"></path>
                  </g>
                  <defs>
                    <clippath id=\"clip0\">
                      <rect width=\"13\" height=\"13\" fill=\"white\"></rect>
                    </clippath>
                  </defs>
                </svg>
                {{item.collection_point_working_days2}}
              </li>
              {% else %}
              {% endif %}


              {% if item.collection_point_work_time2 == true %}
              <li>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"13\" height=\"13\" viewBox=\"0 0 13 13\" fill=\"none\">
                  <path
                    d=\"M6.49999 0C2.91596 0 0 2.91596 0 6.49999C0 10.084 2.91596 13 6.49999 13C10.084 13 13 10.084 13 6.49999C13 2.91596 10.084 0 6.49999 0ZM6.49999 12.4348C3.22738 12.4348 0.565208 9.77259 0.565208 6.49999C0.565208 3.22738 3.22738 0.565208 6.49999 0.565208C9.77259 0.565208 12.4348 3.22738 12.4348 6.49999C12.4348 9.77259 9.77259 12.4348 6.49999 12.4348Z\"
                    fill=\"#616161\"></path>
                  <path
                    d=\"M9.24346 8.84399L6.78252 6.38301V1.9783C6.78252 1.8223 6.6559 1.69568 6.4999 1.69568C6.3439 1.69568 6.21729 1.8223 6.21729 1.9783V6.50004C6.21729 6.57521 6.24725 6.64701 6.29982 6.70013L8.84329 9.2436C8.89869 9.29842 8.97102 9.32613 9.04338 9.32613C9.11573 9.32613 9.18806 9.29845 9.24346 9.2436C9.35368 9.13336 9.35368 8.9542 9.24346 8.84399Z\"
                    fill=\"#616161\"></path>
                </svg>
                {{item.collection_point_work_time2}}
              </li>
              {% else %}
              {% endif %}

            </ul>
            {% if item.collection_point_add_info == true %}
            <p>{{item.collection_point_add_info}}</p>
            {% else %}
            {% endif %}
          </div>
        </div>
        <div class=\"contacts__map-col\">
          {{item.collection_point_map | raw}}
        </div>
      </div>
      {% endfor %}
    </div>
  </div>
  <div class=\"add-info add-info--contacts\" style=\"background-image: url('{{ 'assets/img/add-info.webp'|theme }}')\">
    <div class=\"container\">
      <div class=\"add-info__wrap\">
        <div class=\"add-info__col\">
          <h2 class=\"title title--light\">{{'За пределами штата Иллинойс? Посылайте свои посылки на этот <br> адрес:'|_}}
          </h2>
        </div>
        <div class=\"add-info__col\">
          <div class=\"add-info__address\">
            <p>{{'Высылайте на свое ФИО и номер телефона'|_}}</p>
            <p>{{'Address: 1304 Derby Lane'|_}}</p>
            <p>{{'City: Mundelein'|_}}</p>
            <p>{{'State: IL'|_}}</p>
            <p>{{'Zip Code: 60060'|_}}</p>
            <p>{{'Воспользуйтесь эксклюзивной ценой при отправке с FedEx на наш склад!'|_}} </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/contacts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "for" => 6, "if" => 10);
        static $filters = array("_" => 5, "escape" => 11, "raw" => 153, "theme" => 159);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'for', 'if'],
                ['_', 'escape', 'raw', 'theme'],
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
