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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/pages/service.htm */
class __TwigTemplate_7d442fe273d16880463e9fc15193736ae04ad9039c964dd5739302c55383274b extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "
<div class=\"breadcrumbs\">
  <div class=\"container\">
    <ul>
      <li> <a href=\"";
            // line 10
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная"]);
            echo " </a></li>
      <li> <a href=\"";
            // line 11
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Услуги"]);
            echo "</a></li>
      <li>";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</li>
    </ul>
  </div>
</div>
<div class=\"services services--inside\">

  <div class=\"services__banner\"
    style=\"background-image: url('";
            // line 19
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "service_img", [], "any", false, false, true, 19), "path", [], "any", false, false, true, 19), 19, $this->source), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]]);
            echo "')\">
    <div class=\"container\">
      <h2 class=\"title\">";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</h2>
      <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "desc", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</p>
    </div>
  </div>

  <div class=\"static-page\">

";
            // line 28
            $context["records"] = twig_get_attribute($this->env, $this->source, ($context["serviceContent"] ?? null), "records", [], "any", false, false, true, 28);
            // line 29
            $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["serviceContent"] ?? null), "displayColumn", [], "any", false, false, true, 29);
            // line 30
            $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["serviceContent"] ?? null), "noRecordsMessage", [], "any", false, false, true, 30);
            // line 31
            $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["serviceContent"] ?? null), "detailsPage", [], "any", false, false, true, 31);
            // line 32
            $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["serviceContent"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 32);
            // line 33
            $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["serviceContent"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 33);
            // line 34
            echo "

    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "content", [], "any", false, false, true, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "    <div class=\"about__wrap\">
      <div class=\"container\">
        <div class=\"about__col\">
          <div class=\"about__img\">
            <img src=\"";
                // line 41
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, true, 41), 41, $this->source)), 548, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]]);
                echo "\" alt=\"\">
          </div>
        </div>
        <div class=\"about__col\">
          <h3 class=\"subtitle\">";
                // line 45
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "subtitle", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "</h3>
          <h2 class=\"title\">";
                // line 46
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</h2>
          <div class=\"description\">
            <p>";
                // line 48
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "desc", [], "any", false, false, true, 48), 48, $this->source);
                echo "</p>
          </div>
        </div>
      </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
            // line 55
            echo "
    ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "pub_shops", [], "any", false, false, true, 56) == 1)) {
                // line 57
                echo "    ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/shop"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 58
                echo "    ";
            } else {
                // line 59
                echo "    ";
            }
            // line 60
            echo "  </div>



</div>
</div>
<div class=\"add-info add-info--with-arrow add-info--yellow\"
  style=\"background-image: url(";
            // line 67
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/add-info.webp");
            echo ")\">
  <div class=\"container\">
    <div class=\"add-info__wrap\">
      <div class=\"add-info__col\">
        <h2 class=\"title title--light\">";
            // line 71
            echo "Рассчитать стоимость перевозки прямо сейчас";
            echo "!</h2>
        <svg class=\"draw-arr\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 183.05 69.85\">
          <defs>
            <style>
              .add-info.cls-3,
              .add-info.cls-4 {
                fill: none;
                stroke: #0dd78f;
                stroke-width: 2px;
              }

              .add-info.cls-4 {
                stroke-dasharray: 48 8;
              }
            </style>
          </defs>
          <g id=\"Слой_2\" data-name=\"Слой 2\">
            <g id=\"Слой_1-2\" data-name=\"Слой 1\">
              <path class=\"cls-3 draw-arrow tail\" d=\"M177,69.46l4.67-11L170.1,54.35\"></path>
              <path class=\"cls-4 draw-arrow\" d=\"M.08,38.13C41.73,34.73,39.8-.29,79.79,1s60.47,75.15,101.08,58.28\">
              </path>
            </g>
          </g>
        </svg>
      </div>
      <div class=\"add-info__col\"><a class=\"btn cost-calc-js order-js\" href=\"#calculator\">";
            // line 96
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Рассчитать"]);
            echo " </a></div>
    </div>
  </div>
</div>
";
        } else {
            // line 101
            echo "<div class=\"log-in\" style=\"background-image: url('";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/login.webp");
            echo "')\">
  <div class=\"log-in__wrap log-in__wrap--page-not-found\">
    <div class=\"log-in__col\">
      <div class=\"logo\">
        <a href=\"";
            // line 105
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">
          <svg width=\"533\" height=\"243\" viewbox=\"0 0 533 243\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path
              d=\"M20.4918 185.026C15.05 184.346 10.4585 183.24 10.4585 179.329C10.4585 176.013 13.5195 173.292 19.8116 173.292C24.7432 173.292 28.9946 175.758 30.5251 178.309L37.3274 174.823C33.9263 167.85 26.6139 165.81 19.5565 165.81C11.2237 165.895 2.04067 169.721 2.04067 178.989C2.04067 189.107 10.5435 191.573 19.8116 192.679C25.8486 193.359 30.2701 195.059 30.2701 199.311C30.2701 204.242 25.2534 206.113 19.8966 206.113C14.3698 206.113 9.18305 203.902 7.14237 198.971L0 202.627C3.3161 210.875 10.4585 213.766 19.7266 213.766C29.7599 213.766 38.6879 209.429 38.6879 199.396C38.6879 188.597 29.93 186.216 20.4918 185.026Z\"
              fill=\"white\"></path>
            <path d=\"M52.6332 180.688H44.7256V212.659H52.6332V180.688Z\" fill=\"white\"></path>
            <path d=\"M67.512 167.51H59.6895V212.66H67.512V167.51Z\" fill=\"white\"></path>
            <path
              d=\"M102.204 181.285V180.86H92.7662L82.0526 193.614V167.51H74.23V212.66H82.0526V198.29L94.5518 212.66H104.075V212.065L89.28 195.825L102.204 181.285Z\"
              fill=\"white\"></path>
            <path
              d=\"M148.714 182.474C148.714 174.652 143.103 167.594 132.474 167.509C125.332 167.509 118.104 167.424 110.962 167.424V212.659H119.465V197.524H127.627L140.807 212.659H150.925V212.064L137.236 196.674C145.823 194.888 148.714 188.596 148.714 182.474ZM119.465 189.872V175.417H132.474C137.831 175.417 140.212 179.073 140.212 182.644C140.212 186.216 137.916 189.872 132.474 189.872H119.465Z\"
              fill=\"white\"></path>
            <path
              d=\"M168.867 180.178C158.748 180.178 152.371 187.661 152.371 196.759C152.371 205.942 158.578 213.339 168.867 213.339C179.155 213.339 185.447 205.942 185.447 196.759C185.532 187.661 178.985 180.178 168.867 180.178ZM168.867 206.112C163.085 206.112 160.194 201.605 160.194 196.759C160.194 191.997 163.17 187.321 168.867 187.321C174.138 187.321 177.539 191.997 177.539 196.759C177.539 201.605 174.648 206.112 168.867 206.112Z\"
              fill=\"white\"></path>
            <path
              d=\"M215.886 185.196C214.101 182.05 210.019 180.01 205.768 180.01C196.5 179.925 189.188 185.707 189.188 196.675C189.188 207.814 196.16 213.681 205.598 213.596C209.169 213.511 214.101 211.725 215.971 207.984L216.397 212.661H223.794V180.86H216.226L215.886 185.196ZM206.448 206.368C201.176 206.368 197.01 202.712 197.01 196.675C197.01 190.638 201.176 187.067 206.448 187.067C218.862 187.067 218.862 206.368 206.448 206.368Z\"
              fill=\"white\"></path>
            <path
              d=\"M255.596 185.111C253.725 181.795 248.453 180.009 245.137 180.009C235.869 180.009 228.897 185.706 228.897 196.675C228.897 207.133 235.954 213.34 245.307 213.34C249.219 213.34 253.13 212.065 255.596 208.239L256.106 212.66H263.503V167.51H255.596V185.111ZM245.818 206.113C240.801 206.113 236.805 202.287 236.805 196.76C236.805 190.978 240.801 187.492 245.818 187.492C250.749 187.492 255.086 191.233 255.086 196.76C255.001 202.457 250.749 206.113 245.818 206.113Z\"
              fill=\"white\"></path>
            <path
              d=\"M290.371 185.025C284.929 184.345 280.337 183.24 280.337 179.329C280.337 176.012 283.398 173.292 289.691 173.292C294.622 173.292 298.874 175.757 300.404 178.308L307.206 174.822C303.805 167.85 296.493 165.809 289.435 165.809C281.103 165.894 271.92 169.72 271.92 178.988C271.92 189.107 280.422 191.573 289.691 192.678C295.728 193.358 300.149 195.059 300.149 199.31C300.149 204.242 295.132 206.112 289.776 206.112C284.249 206.112 279.062 203.902 277.021 198.97L269.879 202.626C273.195 210.874 280.337 213.765 289.605 213.765C299.639 213.765 308.567 209.429 308.567 199.395C308.567 188.597 299.724 186.216 290.371 185.025Z\"
              fill=\"white\"></path>
            <path
              d=\"M332.971 180.349C329.314 180.349 325.828 181.454 323.022 185.11V167.424H315.115V212.659H323.022V196.419C323.022 191.657 326.253 187.661 330.93 187.661C335.096 187.661 338.157 190.127 338.157 195.909V212.659H346.065V195.909C346.065 186.471 342.069 180.349 332.971 180.349Z\"
              fill=\"white\"></path>
            <path d=\"M360.605 180.688H352.697V212.659H360.605V180.688Z\" fill=\"white\"></path>
            <path
              d=\"M385.859 180.093C382.203 180.093 377.952 181.624 375.571 185.195L375.061 180.773H367.663V222.777H375.571V208.833C377.866 212.319 382.798 213.339 386.199 213.339C396.403 213.339 402.27 205.942 402.27 196.674C402.185 187.406 395.722 180.093 385.859 180.093ZM385.264 205.772C379.907 205.772 376.251 201.69 376.251 196.759C376.251 191.827 379.652 187.746 385.264 187.746C390.961 187.746 394.277 191.827 394.277 196.759C394.362 201.775 390.706 205.772 385.264 205.772Z\"
              fill=\"white\"></path>
            <path
              d=\"M426.246 180.093C422.59 180.093 418.339 181.624 415.873 185.195L415.363 180.773H407.965V222.777H415.873V208.833C418.169 212.319 423.1 213.339 426.501 213.339C436.705 213.339 442.572 205.942 442.572 196.674C442.572 187.406 436.025 180.093 426.246 180.093ZM425.651 205.772C420.294 205.772 416.638 201.69 416.638 196.759C416.638 191.827 420.039 187.746 425.651 187.746C431.348 187.746 434.664 191.827 434.664 196.759C434.664 201.775 431.008 205.772 425.651 205.772Z\"
              fill=\"white\"></path>
            <path d=\"M456.262 180.688H448.354V212.659H456.262V180.688Z\" fill=\"white\"></path>
            <path
              d=\"M481.175 180.349C477.179 180.349 473.947 181.965 470.716 185.111L470.206 180.774H463.149V212.66H470.972V196.419C470.972 191.573 474.288 187.492 479.134 187.492C484.151 187.492 486.787 191.148 486.787 195.994V212.66H494.694V195.909C494.694 185.961 488.657 180.349 481.175 180.349Z\"
              fill=\"white\"></path>
            <path
              d=\"M532.022 195.909C532.022 192.423 531.086 189.277 528.705 186.471L532.277 181.964L526.495 177.543L523.349 181.539C521.138 180.094 518.587 179.754 516.036 179.754C507.108 179.754 499.881 185.961 499.881 195.909C499.881 205.857 506.088 211.894 516.036 211.894C519.948 211.894 524.114 213.935 524.114 218.272C524.114 222.608 520.543 225.074 516.036 225.074C511.53 225.074 507.703 222.353 507.703 218.272H499.881C499.881 226.859 506.768 232.471 516.036 232.471C525.304 232.471 532.022 227.029 532.022 218.272C532.022 214.19 530.746 210.364 525.474 207.728C530.576 205.432 532.022 199.905 532.022 195.909ZM515.951 204.752C511.36 204.752 507.618 201.436 507.618 195.909C507.618 190.382 511.36 186.896 515.951 186.896C520.458 186.896 524.199 190.382 524.199 195.909C524.284 201.436 520.543 204.752 515.951 204.752Z\"
              fill=\"white\"></path>
            <path
              d=\"M5.69673 229.92C5.69673 229.155 6.37696 228.815 7.48233 228.815C8.5877 228.815 10.3733 229.41 11.8188 230.26L13.0092 227.624C11.6487 226.689 9.60803 226.094 7.65238 226.094C4.42131 226.094 2.21058 227.709 2.21058 230.26C2.21058 235.192 9.69306 233.661 9.69306 236.297C9.69306 237.147 8.92781 237.658 7.65238 237.658C6.2069 237.658 4.16622 236.807 2.72074 235.532L1.44531 238.083C3.06085 239.443 5.35662 240.293 7.65238 240.293C10.7134 240.293 13.1792 238.848 13.1792 236.042C13.0942 231.11 5.69673 232.556 5.69673 229.92Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M39.1132 236.808L36.1372 226.265H33.0762L30.1002 236.808L27.2092 226.265H23.8081L28.3996 240.209H31.7157L34.6067 230.261L37.4126 240.209H40.6437L45.3203 226.265H42.0892L39.1132 236.808Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M59.8595 226.265H56.7134V240.294H59.8595V226.265Z\" fill=\"#FCB408\"></path>
            <path
              d=\"M72.9536 240.209H76.0997V234.938H82.4768V232.302H76.0997V228.816H82.9869L83.072 226.265H72.9536V240.209Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M93.5303 228.901H97.7817V240.209H100.928V228.901H105.179V226.265H93.5303V228.901Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M117.765 237.233C116.915 237.233 116.235 237.913 116.235 238.763C116.235 239.274 116.405 239.699 116.83 240.039L115.979 242.08H117.51L118.87 240.039C119.126 239.699 119.296 239.274 119.296 238.763C119.296 237.828 118.53 237.233 117.765 237.233Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M158.238 231.111C158.238 228.05 156.197 226.265 152.456 226.265H146.334V240.294H149.48V236.298H152.371H152.711L154.922 240.294H158.493L155.517 235.703C157.303 234.853 158.238 233.237 158.238 231.111ZM152.541 233.577H149.65V228.815H152.541C154.242 228.815 155.262 229.581 155.262 231.196C155.262 232.812 154.242 233.577 152.541 233.577Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M174.053 234.512H180.855V231.877H174.053V228.816H181.62V226.265H170.907V240.209H181.79V237.658H174.053V234.512Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M197.521 226.265H194.29V240.209H203.473V237.488H197.521V226.265Z\" fill=\"#FCB408\">
            </path>
            <path d=\"M218.523 226.265H215.376V240.294H218.523V226.265Z\" fill=\"#FCB408\"></path>
            <path
              d=\"M236.123 226.265L230.001 240.294H233.233L234.338 237.573H240.8L241.905 240.294H245.307L239.355 226.265H236.123ZM235.443 234.938L237.654 229.496L239.865 234.938H235.443Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M265.884 232.812C267.414 232.472 268.264 231.281 268.264 229.751C268.264 227.625 266.309 226.265 263.248 226.265H256.786V240.294H263.418C266.649 240.294 268.69 238.849 268.69 236.383C268.775 234.512 267.669 233.152 265.884 232.812ZM260.017 228.815H263.163C264.353 228.815 265.118 229.326 265.118 230.346C265.118 231.366 264.353 231.877 263.163 231.877H260.017V228.815ZM263.163 237.658H260.017V234.342H263.163C264.693 234.342 265.544 234.938 265.544 235.958C265.544 237.063 264.608 237.658 263.163 237.658Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M284.249 226.265H281.103V240.209H290.286V237.488H284.249V226.265Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M305.337 234.512H312.139V231.877H305.337V228.816H312.82V226.265H302.191V240.209H313.075V237.658H305.337V234.512Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M326.424 237.233C325.574 237.233 324.894 237.913 324.894 238.763C324.894 239.274 325.064 239.699 325.489 240.039L324.639 242.08H326.169L327.53 240.039C327.785 239.699 327.955 239.274 327.955 238.763C327.87 237.828 327.19 237.233 326.424 237.233Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M358.138 229.92C358.138 229.155 358.818 228.815 359.924 228.815C361.029 228.815 362.815 229.41 364.26 230.26L365.451 227.624C364.09 226.689 362.049 226.094 360.094 226.094C356.863 226.094 354.652 227.709 354.652 230.26C354.652 235.192 362.134 233.661 362.134 236.297C362.134 237.147 361.369 237.658 360.094 237.658C358.648 237.658 356.608 236.807 355.162 235.532L353.887 238.083C355.502 239.443 357.798 240.293 360.094 240.293C363.155 240.293 365.621 238.848 365.621 236.042C365.621 231.11 358.138 232.556 358.138 229.92Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M381.012 234.512H387.729V231.877H381.012V228.816H388.495V226.265H377.866V240.209H388.75V237.658H381.012V234.512Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M407.71 237.488C405.329 237.488 403.459 235.617 403.459 233.151C403.459 230.685 405.329 228.815 407.71 228.815C408.985 228.815 410.431 229.495 411.366 230.6L413.237 228.39C411.876 226.944 409.751 226.094 407.71 226.094C403.459 226.094 400.228 229.155 400.228 233.151C400.228 237.232 403.374 240.293 407.54 240.293C409.581 240.293 411.706 239.273 413.237 237.828L411.366 235.787C410.346 236.892 408.985 237.488 407.71 237.488Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M434.325 234.343C434.325 236.384 433.05 237.574 431.179 237.574C429.308 237.574 427.948 236.384 427.948 234.343V226.18H424.802V234.343C424.802 238.084 427.268 240.38 431.179 240.38C435.005 240.38 437.471 238.084 437.471 234.343V226.18H434.325V234.343Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M462.214 231.111C462.214 228.05 460.173 226.265 456.432 226.265H450.31V240.294H453.456V236.298H456.347H456.687L458.898 240.294H462.469L459.493 235.703C461.279 234.853 462.214 233.237 462.214 231.111ZM456.432 233.577H453.541V228.815H456.432C458.133 228.815 459.153 229.581 459.153 231.196C459.153 232.812 458.133 233.577 456.432 233.577Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M478.028 237.658V234.512H484.746V231.877H478.028V228.816H485.511V226.265H474.882V240.209H485.766V237.658H478.028Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M43.9595 171.846C43.9595 177.968 53.2276 177.968 53.2276 171.846C53.3126 165.724 43.9595 165.724 43.9595 171.846Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M361.286 171.846C361.286 165.724 352.018 165.724 352.018 171.846C352.018 177.968 361.286 177.968 361.286 171.846Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M456.941 171.846C456.941 165.724 447.673 165.724 447.673 171.846C447.673 177.968 456.941 177.968 456.941 171.846Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M289.435 131.628C287.565 133.498 284.844 134.178 282.293 133.498L272.09 130.777L264.947 137.92L278.892 141.661C285.184 143.362 291.901 141.576 296.493 136.984L328.633 104.844L325.998 95.1504L289.435 131.628Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M243.775 146.763L265.032 125.421L258.825 119.299L237.568 140.556L243.775 146.763Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M324.383 22.3664L337.477 9.27208C339.178 7.57152 339.178 4.76557 337.477 3.065C335.777 1.36444 332.971 1.36444 331.27 3.065L318.176 16.1594L259.932 0.599188C253.725 -1.01635 247.177 0.684232 242.586 5.1057L252.364 7.74156L252.449 7.65655L311.119 23.3868L308.313 26.1927L268.094 66.4111L230.002 56.0376C225.325 54.7622 220.564 57.5681 219.288 62.2447L265.969 74.9989L278.723 121.679C283.399 120.404 286.205 115.642 284.93 110.966L274.471 72.5331L314.52 32.4848L317.326 29.6789L325.063 58.6735L335.862 97.7865C340.028 93.195 341.644 86.8179 340.028 80.7809L324.383 22.3664Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M223.283 83.6719L216.991 77.4648L196.5 98.0417L202.707 104.249L223.283 83.6719Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M203.473 78.6548L210.615 71.5124L207.044 58.163C206.364 55.6121 207.129 52.8912 208.915 51.0206L245.222 14.7135L235.444 12.0776L203.643 43.8782C199.051 48.4697 197.266 55.187 198.966 61.4791L203.473 78.6548Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M212.316 122.166L191.634 142.849L197.827 149.041L218.509 128.359L212.316 122.166Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M251.174 95.7461L244.967 89.5391L223.114 111.391L229.321 117.598C229.321 117.598 246.667 100.168 251.174 95.7461Z\"
              fill=\"#FCB408\"></path>
          </svg>
        </a>
        <a href=\"";
            // line 232
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\" class=\"btn btn-default\"
          style=\"margin: auto; margin-top: 30px; max-width: 255px;\">";
            // line 233
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная"]);
            echo "</a>
      </div>
    </div>
    <div class=\"log-in__col log-in__col--page-not-found\">


      <p class=\"not-found-page\">404</p>
      <h3 style=\"color: #fff; font-weight: 400;\">";
            // line 240
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Страница не найдена"]);
            echo "</h3>
      <style>
        .log-in__col--page-not-found {
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          padding: 0 !important;
        }

        .not-found-page {
          font-size: 400px;
          line-height: normal;
          color: #fcb408;
        }

        @media (max-width: 1999.98px) {
          .not-found-page {
            font-size: 300px;
          }
        }

        @media (max-width: 1599.98px) {
          .not-found-page {
            font-size: 250px;
          }
        }

        @media (max-width: 1199.98px) {
          .not-found-page {
            font-size: 200px;
          }
        }

        @media (max-width: 992.98px) {
          .not-found-page {
            font-size: 150px;
          }
        }

        @media (max-width: 767.98px) {
          .not-found-page {
            font-size: 130px;
          }
        }

        @media (max-width: 575.98px) {
          .log-in__wrap--page-not-found {
            height: 100vh;
            align-items: center;
            justify-content: center;
            flex-direction: column-reverse;
          }
        }
      </style>

    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 240,  363 => 233,  359 => 232,  229 => 105,  221 => 101,  213 => 96,  185 => 71,  178 => 67,  169 => 60,  166 => 59,  163 => 58,  158 => 57,  156 => 56,  153 => 55,  150 => 54,  138 => 48,  133 => 46,  129 => 45,  122 => 41,  116 => 37,  112 => 36,  108 => 34,  106 => 33,  104 => 32,  102 => 31,  100 => 30,  98 => 29,  96 => 28,  87 => 22,  83 => 21,  78 => 19,  68 => 12,  62 => 11,  56 => 10,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}

<div class=\"breadcrumbs\">
  <div class=\"container\">
    <ul>
      <li> <a href=\"{{ 'home'|page }}\">{{'Главная'|_}} </a></li>
      <li> <a href=\"{{ 'services'|page }}\">{{'Услуги'|_}}</a></li>
      <li>{{record.title}}</li>
    </ul>
  </div>
</div>
<div class=\"services services--inside\">

  <div class=\"services__banner\"
    style=\"background-image: url('{{record.service_img.path | resize(1920, false, { mode: 'crop', quality: '80', extension: 'webp' })}}')\">
    <div class=\"container\">
      <h2 class=\"title\">{{record.title}}</h2>
      <p>{{record.desc}}</p>
    </div>
  </div>

  <div class=\"static-page\">

{% set records = serviceContent.records %}
{% set displayColumn = serviceContent.displayColumn %}
{% set noRecordsMessage = serviceContent.noRecordsMessage %}
{% set detailsPage = serviceContent.detailsPage %}
{% set detailsKeyColumn = serviceContent.detailsKeyColumn %}
{% set detailsUrlParameter = serviceContent.detailsUrlParameter %}


    {% for item in record.content %}
    <div class=\"about__wrap\">
      <div class=\"container\">
        <div class=\"about__col\">
          <div class=\"about__img\">
            <img src=\"{{item.img | media | resize(548, false, { mode: 'crop', quality: '80', extension: 'webp' })}}\" alt=\"\">
          </div>
        </div>
        <div class=\"about__col\">
          <h3 class=\"subtitle\">{{ item.subtitle }}</h3>
          <h2 class=\"title\">{{ item.title }}</h2>
          <div class=\"description\">
            <p>{{item.desc | raw}}</p>
          </div>
        </div>
      </div>
    </div>
    {% endfor %}
    {% page %}

    {% if record.pub_shops == 1 %}
    {% partial 'site/shop' %}
    {% else %}
    {% endif %}
  </div>



</div>
</div>
<div class=\"add-info add-info--with-arrow add-info--yellow\"
  style=\"background-image: url({{'assets/img/add-info.webp'|theme}})\">
  <div class=\"container\">
    <div class=\"add-info__wrap\">
      <div class=\"add-info__col\">
        <h2 class=\"title title--light\">{{'Рассчитать стоимость перевозки прямо сейчас'}}!</h2>
        <svg class=\"draw-arr\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 183.05 69.85\">
          <defs>
            <style>
              .add-info.cls-3,
              .add-info.cls-4 {
                fill: none;
                stroke: #0dd78f;
                stroke-width: 2px;
              }

              .add-info.cls-4 {
                stroke-dasharray: 48 8;
              }
            </style>
          </defs>
          <g id=\"Слой_2\" data-name=\"Слой 2\">
            <g id=\"Слой_1-2\" data-name=\"Слой 1\">
              <path class=\"cls-3 draw-arrow tail\" d=\"M177,69.46l4.67-11L170.1,54.35\"></path>
              <path class=\"cls-4 draw-arrow\" d=\"M.08,38.13C41.73,34.73,39.8-.29,79.79,1s60.47,75.15,101.08,58.28\">
              </path>
            </g>
          </g>
        </svg>
      </div>
      <div class=\"add-info__col\"><a class=\"btn cost-calc-js order-js\" href=\"#calculator\">{{'Рассчитать'|_}} </a></div>
    </div>
  </div>
</div>
{% else %}
<div class=\"log-in\" style=\"background-image: url('{{ 'assets/img/login.webp'|theme }}')\">
  <div class=\"log-in__wrap log-in__wrap--page-not-found\">
    <div class=\"log-in__col\">
      <div class=\"logo\">
        <a href=\"{{ 'home'|page }}\">
          <svg width=\"533\" height=\"243\" viewbox=\"0 0 533 243\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path
              d=\"M20.4918 185.026C15.05 184.346 10.4585 183.24 10.4585 179.329C10.4585 176.013 13.5195 173.292 19.8116 173.292C24.7432 173.292 28.9946 175.758 30.5251 178.309L37.3274 174.823C33.9263 167.85 26.6139 165.81 19.5565 165.81C11.2237 165.895 2.04067 169.721 2.04067 178.989C2.04067 189.107 10.5435 191.573 19.8116 192.679C25.8486 193.359 30.2701 195.059 30.2701 199.311C30.2701 204.242 25.2534 206.113 19.8966 206.113C14.3698 206.113 9.18305 203.902 7.14237 198.971L0 202.627C3.3161 210.875 10.4585 213.766 19.7266 213.766C29.7599 213.766 38.6879 209.429 38.6879 199.396C38.6879 188.597 29.93 186.216 20.4918 185.026Z\"
              fill=\"white\"></path>
            <path d=\"M52.6332 180.688H44.7256V212.659H52.6332V180.688Z\" fill=\"white\"></path>
            <path d=\"M67.512 167.51H59.6895V212.66H67.512V167.51Z\" fill=\"white\"></path>
            <path
              d=\"M102.204 181.285V180.86H92.7662L82.0526 193.614V167.51H74.23V212.66H82.0526V198.29L94.5518 212.66H104.075V212.065L89.28 195.825L102.204 181.285Z\"
              fill=\"white\"></path>
            <path
              d=\"M148.714 182.474C148.714 174.652 143.103 167.594 132.474 167.509C125.332 167.509 118.104 167.424 110.962 167.424V212.659H119.465V197.524H127.627L140.807 212.659H150.925V212.064L137.236 196.674C145.823 194.888 148.714 188.596 148.714 182.474ZM119.465 189.872V175.417H132.474C137.831 175.417 140.212 179.073 140.212 182.644C140.212 186.216 137.916 189.872 132.474 189.872H119.465Z\"
              fill=\"white\"></path>
            <path
              d=\"M168.867 180.178C158.748 180.178 152.371 187.661 152.371 196.759C152.371 205.942 158.578 213.339 168.867 213.339C179.155 213.339 185.447 205.942 185.447 196.759C185.532 187.661 178.985 180.178 168.867 180.178ZM168.867 206.112C163.085 206.112 160.194 201.605 160.194 196.759C160.194 191.997 163.17 187.321 168.867 187.321C174.138 187.321 177.539 191.997 177.539 196.759C177.539 201.605 174.648 206.112 168.867 206.112Z\"
              fill=\"white\"></path>
            <path
              d=\"M215.886 185.196C214.101 182.05 210.019 180.01 205.768 180.01C196.5 179.925 189.188 185.707 189.188 196.675C189.188 207.814 196.16 213.681 205.598 213.596C209.169 213.511 214.101 211.725 215.971 207.984L216.397 212.661H223.794V180.86H216.226L215.886 185.196ZM206.448 206.368C201.176 206.368 197.01 202.712 197.01 196.675C197.01 190.638 201.176 187.067 206.448 187.067C218.862 187.067 218.862 206.368 206.448 206.368Z\"
              fill=\"white\"></path>
            <path
              d=\"M255.596 185.111C253.725 181.795 248.453 180.009 245.137 180.009C235.869 180.009 228.897 185.706 228.897 196.675C228.897 207.133 235.954 213.34 245.307 213.34C249.219 213.34 253.13 212.065 255.596 208.239L256.106 212.66H263.503V167.51H255.596V185.111ZM245.818 206.113C240.801 206.113 236.805 202.287 236.805 196.76C236.805 190.978 240.801 187.492 245.818 187.492C250.749 187.492 255.086 191.233 255.086 196.76C255.001 202.457 250.749 206.113 245.818 206.113Z\"
              fill=\"white\"></path>
            <path
              d=\"M290.371 185.025C284.929 184.345 280.337 183.24 280.337 179.329C280.337 176.012 283.398 173.292 289.691 173.292C294.622 173.292 298.874 175.757 300.404 178.308L307.206 174.822C303.805 167.85 296.493 165.809 289.435 165.809C281.103 165.894 271.92 169.72 271.92 178.988C271.92 189.107 280.422 191.573 289.691 192.678C295.728 193.358 300.149 195.059 300.149 199.31C300.149 204.242 295.132 206.112 289.776 206.112C284.249 206.112 279.062 203.902 277.021 198.97L269.879 202.626C273.195 210.874 280.337 213.765 289.605 213.765C299.639 213.765 308.567 209.429 308.567 199.395C308.567 188.597 299.724 186.216 290.371 185.025Z\"
              fill=\"white\"></path>
            <path
              d=\"M332.971 180.349C329.314 180.349 325.828 181.454 323.022 185.11V167.424H315.115V212.659H323.022V196.419C323.022 191.657 326.253 187.661 330.93 187.661C335.096 187.661 338.157 190.127 338.157 195.909V212.659H346.065V195.909C346.065 186.471 342.069 180.349 332.971 180.349Z\"
              fill=\"white\"></path>
            <path d=\"M360.605 180.688H352.697V212.659H360.605V180.688Z\" fill=\"white\"></path>
            <path
              d=\"M385.859 180.093C382.203 180.093 377.952 181.624 375.571 185.195L375.061 180.773H367.663V222.777H375.571V208.833C377.866 212.319 382.798 213.339 386.199 213.339C396.403 213.339 402.27 205.942 402.27 196.674C402.185 187.406 395.722 180.093 385.859 180.093ZM385.264 205.772C379.907 205.772 376.251 201.69 376.251 196.759C376.251 191.827 379.652 187.746 385.264 187.746C390.961 187.746 394.277 191.827 394.277 196.759C394.362 201.775 390.706 205.772 385.264 205.772Z\"
              fill=\"white\"></path>
            <path
              d=\"M426.246 180.093C422.59 180.093 418.339 181.624 415.873 185.195L415.363 180.773H407.965V222.777H415.873V208.833C418.169 212.319 423.1 213.339 426.501 213.339C436.705 213.339 442.572 205.942 442.572 196.674C442.572 187.406 436.025 180.093 426.246 180.093ZM425.651 205.772C420.294 205.772 416.638 201.69 416.638 196.759C416.638 191.827 420.039 187.746 425.651 187.746C431.348 187.746 434.664 191.827 434.664 196.759C434.664 201.775 431.008 205.772 425.651 205.772Z\"
              fill=\"white\"></path>
            <path d=\"M456.262 180.688H448.354V212.659H456.262V180.688Z\" fill=\"white\"></path>
            <path
              d=\"M481.175 180.349C477.179 180.349 473.947 181.965 470.716 185.111L470.206 180.774H463.149V212.66H470.972V196.419C470.972 191.573 474.288 187.492 479.134 187.492C484.151 187.492 486.787 191.148 486.787 195.994V212.66H494.694V195.909C494.694 185.961 488.657 180.349 481.175 180.349Z\"
              fill=\"white\"></path>
            <path
              d=\"M532.022 195.909C532.022 192.423 531.086 189.277 528.705 186.471L532.277 181.964L526.495 177.543L523.349 181.539C521.138 180.094 518.587 179.754 516.036 179.754C507.108 179.754 499.881 185.961 499.881 195.909C499.881 205.857 506.088 211.894 516.036 211.894C519.948 211.894 524.114 213.935 524.114 218.272C524.114 222.608 520.543 225.074 516.036 225.074C511.53 225.074 507.703 222.353 507.703 218.272H499.881C499.881 226.859 506.768 232.471 516.036 232.471C525.304 232.471 532.022 227.029 532.022 218.272C532.022 214.19 530.746 210.364 525.474 207.728C530.576 205.432 532.022 199.905 532.022 195.909ZM515.951 204.752C511.36 204.752 507.618 201.436 507.618 195.909C507.618 190.382 511.36 186.896 515.951 186.896C520.458 186.896 524.199 190.382 524.199 195.909C524.284 201.436 520.543 204.752 515.951 204.752Z\"
              fill=\"white\"></path>
            <path
              d=\"M5.69673 229.92C5.69673 229.155 6.37696 228.815 7.48233 228.815C8.5877 228.815 10.3733 229.41 11.8188 230.26L13.0092 227.624C11.6487 226.689 9.60803 226.094 7.65238 226.094C4.42131 226.094 2.21058 227.709 2.21058 230.26C2.21058 235.192 9.69306 233.661 9.69306 236.297C9.69306 237.147 8.92781 237.658 7.65238 237.658C6.2069 237.658 4.16622 236.807 2.72074 235.532L1.44531 238.083C3.06085 239.443 5.35662 240.293 7.65238 240.293C10.7134 240.293 13.1792 238.848 13.1792 236.042C13.0942 231.11 5.69673 232.556 5.69673 229.92Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M39.1132 236.808L36.1372 226.265H33.0762L30.1002 236.808L27.2092 226.265H23.8081L28.3996 240.209H31.7157L34.6067 230.261L37.4126 240.209H40.6437L45.3203 226.265H42.0892L39.1132 236.808Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M59.8595 226.265H56.7134V240.294H59.8595V226.265Z\" fill=\"#FCB408\"></path>
            <path
              d=\"M72.9536 240.209H76.0997V234.938H82.4768V232.302H76.0997V228.816H82.9869L83.072 226.265H72.9536V240.209Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M93.5303 228.901H97.7817V240.209H100.928V228.901H105.179V226.265H93.5303V228.901Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M117.765 237.233C116.915 237.233 116.235 237.913 116.235 238.763C116.235 239.274 116.405 239.699 116.83 240.039L115.979 242.08H117.51L118.87 240.039C119.126 239.699 119.296 239.274 119.296 238.763C119.296 237.828 118.53 237.233 117.765 237.233Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M158.238 231.111C158.238 228.05 156.197 226.265 152.456 226.265H146.334V240.294H149.48V236.298H152.371H152.711L154.922 240.294H158.493L155.517 235.703C157.303 234.853 158.238 233.237 158.238 231.111ZM152.541 233.577H149.65V228.815H152.541C154.242 228.815 155.262 229.581 155.262 231.196C155.262 232.812 154.242 233.577 152.541 233.577Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M174.053 234.512H180.855V231.877H174.053V228.816H181.62V226.265H170.907V240.209H181.79V237.658H174.053V234.512Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M197.521 226.265H194.29V240.209H203.473V237.488H197.521V226.265Z\" fill=\"#FCB408\">
            </path>
            <path d=\"M218.523 226.265H215.376V240.294H218.523V226.265Z\" fill=\"#FCB408\"></path>
            <path
              d=\"M236.123 226.265L230.001 240.294H233.233L234.338 237.573H240.8L241.905 240.294H245.307L239.355 226.265H236.123ZM235.443 234.938L237.654 229.496L239.865 234.938H235.443Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M265.884 232.812C267.414 232.472 268.264 231.281 268.264 229.751C268.264 227.625 266.309 226.265 263.248 226.265H256.786V240.294H263.418C266.649 240.294 268.69 238.849 268.69 236.383C268.775 234.512 267.669 233.152 265.884 232.812ZM260.017 228.815H263.163C264.353 228.815 265.118 229.326 265.118 230.346C265.118 231.366 264.353 231.877 263.163 231.877H260.017V228.815ZM263.163 237.658H260.017V234.342H263.163C264.693 234.342 265.544 234.938 265.544 235.958C265.544 237.063 264.608 237.658 263.163 237.658Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M284.249 226.265H281.103V240.209H290.286V237.488H284.249V226.265Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M305.337 234.512H312.139V231.877H305.337V228.816H312.82V226.265H302.191V240.209H313.075V237.658H305.337V234.512Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M326.424 237.233C325.574 237.233 324.894 237.913 324.894 238.763C324.894 239.274 325.064 239.699 325.489 240.039L324.639 242.08H326.169L327.53 240.039C327.785 239.699 327.955 239.274 327.955 238.763C327.87 237.828 327.19 237.233 326.424 237.233Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M358.138 229.92C358.138 229.155 358.818 228.815 359.924 228.815C361.029 228.815 362.815 229.41 364.26 230.26L365.451 227.624C364.09 226.689 362.049 226.094 360.094 226.094C356.863 226.094 354.652 227.709 354.652 230.26C354.652 235.192 362.134 233.661 362.134 236.297C362.134 237.147 361.369 237.658 360.094 237.658C358.648 237.658 356.608 236.807 355.162 235.532L353.887 238.083C355.502 239.443 357.798 240.293 360.094 240.293C363.155 240.293 365.621 238.848 365.621 236.042C365.621 231.11 358.138 232.556 358.138 229.92Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M381.012 234.512H387.729V231.877H381.012V228.816H388.495V226.265H377.866V240.209H388.75V237.658H381.012V234.512Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M407.71 237.488C405.329 237.488 403.459 235.617 403.459 233.151C403.459 230.685 405.329 228.815 407.71 228.815C408.985 228.815 410.431 229.495 411.366 230.6L413.237 228.39C411.876 226.944 409.751 226.094 407.71 226.094C403.459 226.094 400.228 229.155 400.228 233.151C400.228 237.232 403.374 240.293 407.54 240.293C409.581 240.293 411.706 239.273 413.237 237.828L411.366 235.787C410.346 236.892 408.985 237.488 407.71 237.488Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M434.325 234.343C434.325 236.384 433.05 237.574 431.179 237.574C429.308 237.574 427.948 236.384 427.948 234.343V226.18H424.802V234.343C424.802 238.084 427.268 240.38 431.179 240.38C435.005 240.38 437.471 238.084 437.471 234.343V226.18H434.325V234.343Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M462.214 231.111C462.214 228.05 460.173 226.265 456.432 226.265H450.31V240.294H453.456V236.298H456.347H456.687L458.898 240.294H462.469L459.493 235.703C461.279 234.853 462.214 233.237 462.214 231.111ZM456.432 233.577H453.541V228.815H456.432C458.133 228.815 459.153 229.581 459.153 231.196C459.153 232.812 458.133 233.577 456.432 233.577Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M478.028 237.658V234.512H484.746V231.877H478.028V228.816H485.511V226.265H474.882V240.209H485.766V237.658H478.028Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M43.9595 171.846C43.9595 177.968 53.2276 177.968 53.2276 171.846C53.3126 165.724 43.9595 165.724 43.9595 171.846Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M361.286 171.846C361.286 165.724 352.018 165.724 352.018 171.846C352.018 177.968 361.286 177.968 361.286 171.846Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M456.941 171.846C456.941 165.724 447.673 165.724 447.673 171.846C447.673 177.968 456.941 177.968 456.941 171.846Z\"
              fill=\"#FCB408\"></path>
            <path
              d=\"M289.435 131.628C287.565 133.498 284.844 134.178 282.293 133.498L272.09 130.777L264.947 137.92L278.892 141.661C285.184 143.362 291.901 141.576 296.493 136.984L328.633 104.844L325.998 95.1504L289.435 131.628Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M243.775 146.763L265.032 125.421L258.825 119.299L237.568 140.556L243.775 146.763Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M324.383 22.3664L337.477 9.27208C339.178 7.57152 339.178 4.76557 337.477 3.065C335.777 1.36444 332.971 1.36444 331.27 3.065L318.176 16.1594L259.932 0.599188C253.725 -1.01635 247.177 0.684232 242.586 5.1057L252.364 7.74156L252.449 7.65655L311.119 23.3868L308.313 26.1927L268.094 66.4111L230.002 56.0376C225.325 54.7622 220.564 57.5681 219.288 62.2447L265.969 74.9989L278.723 121.679C283.399 120.404 286.205 115.642 284.93 110.966L274.471 72.5331L314.52 32.4848L317.326 29.6789L325.063 58.6735L335.862 97.7865C340.028 93.195 341.644 86.8179 340.028 80.7809L324.383 22.3664Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M223.283 83.6719L216.991 77.4648L196.5 98.0417L202.707 104.249L223.283 83.6719Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M203.473 78.6548L210.615 71.5124L207.044 58.163C206.364 55.6121 207.129 52.8912 208.915 51.0206L245.222 14.7135L235.444 12.0776L203.643 43.8782C199.051 48.4697 197.266 55.187 198.966 61.4791L203.473 78.6548Z\"
              fill=\"#FCB408\"></path>
            <path d=\"M212.316 122.166L191.634 142.849L197.827 149.041L218.509 128.359L212.316 122.166Z\" fill=\"#FCB408\">
            </path>
            <path
              d=\"M251.174 95.7461L244.967 89.5391L223.114 111.391L229.321 117.598C229.321 117.598 246.667 100.168 251.174 95.7461Z\"
              fill=\"#FCB408\"></path>
          </svg>
        </a>
        <a href=\"{{ 'home'|page }}\" class=\"btn btn-default\"
          style=\"margin: auto; margin-top: 30px; max-width: 255px;\">{{'Главная'|_}}</a>
      </div>
    </div>
    <div class=\"log-in__col log-in__col--page-not-found\">


      <p class=\"not-found-page\">404</p>
      <h3 style=\"color: #fff; font-weight: 400;\">{{'Страница не найдена'|_}}</h3>
      <style>
        .log-in__col--page-not-found {
          display: flex !important;
          align-items: center !important;
          justify-content: center !important;
          padding: 0 !important;
        }

        .not-found-page {
          font-size: 400px;
          line-height: normal;
          color: #fcb408;
        }

        @media (max-width: 1999.98px) {
          .not-found-page {
            font-size: 300px;
          }
        }

        @media (max-width: 1599.98px) {
          .not-found-page {
            font-size: 250px;
          }
        }

        @media (max-width: 1199.98px) {
          .not-found-page {
            font-size: 200px;
          }
        }

        @media (max-width: 992.98px) {
          .not-found-page {
            font-size: 150px;
          }
        }

        @media (max-width: 767.98px) {
          .not-found-page {
            font-size: 130px;
          }
        }

        @media (max-width: 575.98px) {
          .log-in__wrap--page-not-found {
            height: 100vh;
            align-items: center;
            justify-content: center;
            flex-direction: column-reverse;
          }
        }
      </style>

    </div>
  </div>
</div>
{% endif %}", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/service.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5, "for" => 36, "page" => 54, "partial" => 57);
        static $filters = array("page" => 10, "_" => 10, "escape" => 12, "resize" => 19, "media" => 41, "raw" => 48, "theme" => 67);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'page', 'partial'],
                ['page', '_', 'escape', 'resize', 'media', 'raw', 'theme'],
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
