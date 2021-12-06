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

/* C:\work\OpenServer\domains\silk-road.loc/plugins/rainlab/user/components/account/update.htm */
class __TwigTemplate_c795abedf76179d7e58db8ba15503518b99cfa30d83b488d68e0043c14b77bd5 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin"]);
        echo "

<div class=\"input input--light\">
  <label for=\"userSigninLogin\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["loginAttributeLabel"] ?? null), 4, $this->source), "html", null, true);
        echo "</label>
  <input name=\"login\" type=\"text\" class=\"form-control\" id=\"userSigninLogin\" placeholder=\"";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите email"]);
        echo "\" />
</div>

<div class=\"input input--light\">
  <label for=\"userSigninPassword\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Пароль"]);
        echo "</label>
  <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\"
    placeholder=\"";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите пароль"]);
        echo "\" />
  <div class=\"eye\">
    <svg class=\"open\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" style=\"display: none;\">
      <path
        d=\"M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z\">
      </path>
    </svg>
    <svg class=\"close\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#000000\" data-name=\"Layer 1\" viewBox=\"0 0 90 90\" x=\"0px\"
      y=\"0px\">
      <path
        d=\"M44.71,49c-16,0-30.52-5.77-36.87-14.71a1.5,1.5,0,1,1,2.45-1.74C16.09,40.73,29.6,46,44.71,46S73.44,40.7,79.2,32.46a1.5,1.5,0,1,1,2.46,1.72C75.36,43.19,60.85,49,44.71,49Z\">
      </path>
      <path
        d=\"M18.69,58.5a1.5,1.5,0,0,1-.76-.21,1.49,1.49,0,0,1-.52-2l7.08-12a1.5,1.5,0,0,1,2.58,1.53L20,57.77A1.5,1.5,0,0,1,18.69,58.5Z\">
      </path>
      <path
        d=\"M2.62,48.59a1.48,1.48,0,0,1-1.08-.46,1.49,1.49,0,0,1,0-2.12l10-9.64a1.5,1.5,0,0,1,2.08,2.16l-10,9.64A1.5,1.5,0,0,1,2.62,48.59Z\">
      </path>
      <path d=\"M44.78,66.56a1.5,1.5,0,0,1-1.5-1.5V47.51a1.5,1.5,0,1,1,3,0V65.06A1.5,1.5,0,0,1,44.78,66.56Z\">
      </path>
      <path
        d=\"M70.8,58.5a1.5,1.5,0,0,1-1.3-.73l-7.08-12A1.5,1.5,0,0,1,65,44.29l7.08,12a1.49,1.49,0,0,1-.52,2A1.5,1.5,0,0,1,70.8,58.5Z\">
      </path>
      <path
        d=\"M86.87,48.59a1.5,1.5,0,0,1-1-.42l-10-9.64a1.51,1.51,0,0,1,0-2.12,1.49,1.49,0,0,1,2.12,0l10,9.64a1.49,1.49,0,0,1,0,2.12A1.48,1.48,0,0,1,86.87,48.59Z\">
      </path>
    </svg>
  </div>
</div>

";
        // line 41
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 42
            echo "<div class=\"form-group\">
  <div class=\"checkbox\">
    <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
  </div>
</div>
";
        }
        // line 48
        echo "
<button type=\"submit\" class=\"btn btn-default\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Войти"]);
        echo "</button>
<p class=\"log-in__additional\"><a href=\"http://silk-road.loc/login\">";
        // line 50
        echo "Забыли пароль?";
        echo "</a></p>
";
        // line 51
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/plugins/rainlab/user/components/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 51,  111 => 50,  107 => 49,  104 => 48,  96 => 42,  94 => 41,  61 => 11,  56 => 9,  49 => 5,  45 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onSignin') }}

<div class=\"input input--light\">
  <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
  <input name=\"login\" type=\"text\" class=\"form-control\" id=\"userSigninLogin\" placeholder=\"{{'Введите email'|_}}\" />
</div>

<div class=\"input input--light\">
  <label for=\"userSigninPassword\">{{'Пароль'|_}}</label>
  <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\"
    placeholder=\"{{'Введите пароль'|_}}\" />
  <div class=\"eye\">
    <svg class=\"open\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" style=\"display: none;\">
      <path
        d=\"M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z\">
      </path>
    </svg>
    <svg class=\"close\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#000000\" data-name=\"Layer 1\" viewBox=\"0 0 90 90\" x=\"0px\"
      y=\"0px\">
      <path
        d=\"M44.71,49c-16,0-30.52-5.77-36.87-14.71a1.5,1.5,0,1,1,2.45-1.74C16.09,40.73,29.6,46,44.71,46S73.44,40.7,79.2,32.46a1.5,1.5,0,1,1,2.46,1.72C75.36,43.19,60.85,49,44.71,49Z\">
      </path>
      <path
        d=\"M18.69,58.5a1.5,1.5,0,0,1-.76-.21,1.49,1.49,0,0,1-.52-2l7.08-12a1.5,1.5,0,0,1,2.58,1.53L20,57.77A1.5,1.5,0,0,1,18.69,58.5Z\">
      </path>
      <path
        d=\"M2.62,48.59a1.48,1.48,0,0,1-1.08-.46,1.49,1.49,0,0,1,0-2.12l10-9.64a1.5,1.5,0,0,1,2.08,2.16l-10,9.64A1.5,1.5,0,0,1,2.62,48.59Z\">
      </path>
      <path d=\"M44.78,66.56a1.5,1.5,0,0,1-1.5-1.5V47.51a1.5,1.5,0,1,1,3,0V65.06A1.5,1.5,0,0,1,44.78,66.56Z\">
      </path>
      <path
        d=\"M70.8,58.5a1.5,1.5,0,0,1-1.3-.73l-7.08-12A1.5,1.5,0,0,1,65,44.29l7.08,12a1.49,1.49,0,0,1-.52,2A1.5,1.5,0,0,1,70.8,58.5Z\">
      </path>
      <path
        d=\"M86.87,48.59a1.5,1.5,0,0,1-1-.42l-10-9.64a1.51,1.51,0,0,1,0-2.12,1.49,1.49,0,0,1,2.12,0l10,9.64a1.49,1.49,0,0,1,0,2.12A1.48,1.48,0,0,1,86.87,48.59Z\">
      </path>
    </svg>
  </div>
</div>

{% if rememberLoginMode == 'ask' %}
<div class=\"form-group\">
  <div class=\"checkbox\">
    <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
  </div>
</div>
{% endif %}

<button type=\"submit\" class=\"btn btn-default\">{{'Войти'|_}}</button>
<p class=\"log-in__additional\"><a href=\"http://silk-road.loc/login\">{{'Забыли пароль?'}}</a></p>
{{ form_close() }}", "C:\\work\\OpenServer\\domains\\silk-road.loc/plugins/rainlab/user/components/account/update.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 41);
        static $filters = array("escape" => 4, "_" => 5);
        static $functions = array("form_ajax" => 1, "form_close" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', '_'],
                ['form_ajax', 'form_close']
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
