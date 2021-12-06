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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/layouts/default.htm */
class __TwigTemplate_c0e68198f3b5c6f311b33f9e6f02154b6d578135b3c59b00428d03b00539a1fe extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
  <meta charset=\"utf-8\">
  <title>silkroadshipping - ";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_description", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.png");
        echo "\">
  <style>
.header .drop-down a{color:#3a3a3a}.header__top{background-color:#1c2333;padding:.75rem 0}@media
(max-width:767.98px){.header__top{display:none}}.header__top-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.locale{display:-webkit-box;display:-ms-flexbox;display:flex}.locale
a{color:#fff;position:relative;padding-right:.3125rem}.locale a:last-child:after{display:none}.locale
a:after{position:absolute;content:'|';right:0;color:#fff}.locale a:hover{color:#fcb408}.locale
a.active{color:#fcb408}.header__middle{padding:.6rem
0}.header__middle-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center}@media
(max-width:767.98px){.header__middle-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.header__middle-wrap
.offices span{font-size:.75rem;color:#bebebe;margin-left:.25rem;margin-bottom:.125rem;font-weight:300}@media
(max-width:575.98px){.header__middle-wrap .offices span{font-size:.6rem;margin-left:0}}.header__middle-wrap .offices ul
li{display:inline-block;position:relative;padding-right:3.625rem;margin-right:1.9375rem;font-size:1.875rem}@media
(max-width:1199.98px){.header__middle-wrap .offices ul
li{padding-right:3rem;margin-right:1.3125rem;font-size:1.25rem}}@media (max-width:575.98px){.header__middle-wrap
.offices ul li{font-size:.625rem;padding-right:1.125rem;margin-right:.3125rem}}.header__middle-wrap .offices ul
li:last-child{margin:0;padding:0}.header__middle-wrap .offices ul li:last-child:after{display:none}.header__middle-wrap
.offices ul
li:after{position:absolute;content:'';font-family:icon;top:50%;right:0;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);font-size:1rem}@media
(max-width:575.98px){.header__middle-wrap .offices ul li:after{font-size:.625rem}}@media
(max-width:991.98px){.header__middle-item{margin-right:1.25rem}}.header__middle-item:last-child{margin:0}@media
(max-width:767.98px){.header__middle-item:last-child{-ms-flex-preferred-size:100%;flex-basis:100%;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;display:-webkit-box;display:-ms-flexbox;display:flex;margin-top:10px}.header__middle-item
.btn{width:auto;font-size:14px;padding:.65rem 1rem}.header__middle-item .btn:hover{padding:.65rem 1rem}}@media
(max-width:991.98px){.header
.social{background-color:#1c2333;position:fixed;left:0;top:1.25rem;padding:.3125rem;z-index:9}}@media
(max-width:991.98px){.header .social
ul{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}@media
(max-width:991.98px){.header .social ul li{margin-right:0;margin-bottom:.625rem}.info__item{padding-left:0}}@media
(max-width:991.98px){.header .social ul li a{width:1.25rem;height:1.25rem}}@media (max-width:991.98px){.header .social
ul li a i{font-size:.6875rem}}.services-list
.circle{width:5px;height:5px;margin:3px;background:#fff;border-radius:50%;display:block;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s;-webkit-animation:translateMenu 1s ease-in-out
infinite;animation:translateMenu 1s ease-in-out infinite}.services-list .menu__item--meatball
.circle:first-child{-webkit-animation-delay:.3s;animation-delay:.3s}.services-list .menu__item--meatball
.circle:nth-child(2){-webkit-animation-delay:.5s;animation-delay:.5s}.services-list .menu__item--meatball
.circle:nth-child(3){-webkit-animation-delay:.7s;animation-delay:.7s}.services-list
.menu__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:1;-ms-flex:1;flex:1}.services-list
.menu__item--meatball{margin-left:20px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;cursor:pointer}.services-list{position:relative}@-webkit-keyframes
translateMenu{0%{-webkit-transform:translateY(0);transform:translateY(0)}50%{-webkit-transform:translateY(-5px);transform:translateY(-5px);background-color:#fcb408}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes
translateMenu{0%{-webkit-transform:translateY(0);transform:translateY(0)}50%{-webkit-transform:translateY(-5px);transform:translateY(-5px);background-color:#fcb408}100%{-webkit-transform:translateY(0);transform:translateY(0)}}.services-list__dropdown{padding-top:20px;position:absolute;min-width:270px;top:0;right:0;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all
.3s;opacity:0;pointer-events:none;-webkit-filter:drop-shadow(0 4px 40px rgba(0,
0, 0, .45));filter:drop-shadow(0 4px 40px rgba(0, 0, 0, .45))}.services-list
ul{background-color:#fff;-webkit-box-sizing:border-box;box-sizing:border-box}.services-list:hover
.services-list__dropdown{top:100%;opacity:1;pointer-events:inherit;z-index:2}.services-list ul li
a{text-transform:uppercase;font-size:15px;color:#3a3a3a;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px
15px}.services-list ul li a:hover{color:#fcb408;background-color:#f5f5f5}.services-list ul li a
i{color:#fcb408;margin-right:15px}.drop-down{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;min-width:200px;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;position:absolute;background-color:#fff;right:0;top:135%;z-index:9;-webkit-box-shadow:5px
5px 10px 5px rgba(0,0,0,.57);box-shadow:5px 5px 10px 5px rgba(0,0,0,.57);opacity:0;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s;pointer-events:none}.drop-down
a{color:#1c2333;font-weight:400;padding:10px;display:block;width:100%}.drop-down
a:first-child{background-color:#f5f5f5}.user-login:hover
.drop-down{opacity:1;top:100%;pointer-events:inherit}.example{display:-ms-grid;display:grid;-webkit-transition:all
.5s;-o-transition:all .5s;-o-transition:all .5s;transition:all
.5s;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background:-o-linear-gradient(top,#fff,#000);background:-webkit-gradient(linear,left
top,left bottom,from(#fff),to(#000));background:linear-gradient(to bottom,#fff,#000)}.hero{padding:3.75rem 0
1.5625rem;position:relative;background-color:#000}@media (max-width:1199.98px){.hero{padding:2.5rem 0 1.5625rem}}@media
(max-width:991.98px){.hero{padding:1.875rem 0 1.5625rem}}@media (max-width:767.98px){.hero{padding:1.5625rem 0}}@media
(max-width:575.98px){.hero{position:relative}.hero:before{position:absolute;content:'';top:0;right:0;bottom:0;left:0;background-color:rgba(0,0,0,.5);z-index:1}.hero
.container{z-index:3;position:relative}}.hero__bg{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%}.hero__bg
img{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}.hero__bg
*{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%}.hero__text-block{max-width:50%;width:100%}@media
(max-width:575.98px){.hero__text-block{max-width:80%}}.hero__title{font-size:3.5rem;line-height:70px;color:#fff;font-weight:300;margin-bottom:5rem}@media
(max-width:1199.98px){.hero__title{font-size:2.875rem;line-height:3.75rem;margin-bottom:2.5rem}}@media
(max-width:991.98px){.hero__title{font-size:1.875rem;line-height:normal;margin-bottom:1.875rem}}@media
(max-width:767.98px){.hero__title{font-size:1.5625rem;margin-bottom:1.25rem}}.hero__desc
p{font-size:1.25rem;line-height:1.5rem;color:#fff;font-weight:300;margin-bottom:1.875rem}@media
(max-width:1199.98px){.hero__desc p{margin-bottom:2.5rem;font-size:1.125rem;line-height:1.375rem}}@media
(max-width:991.98px){.hero__desc p{margin-bottom:1.875rem;font-size:1rem;line-height:normal}}@media
(max-width:767.98px){.hero__desc p{margin-bottom:1.25rem;font-size:.875rem}}.hero__desc
a{margin-bottom:1.875rem}.hero-bg .ce-element--empty::after{background-color:#fff}.hero-bg
.ce-element.ce-element--type-image{width:600px!important;height:400px!important;background-position:center;background-size:cover;float:right}.schedule{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-top:6.25rem}@media
(max-width:1199.98px){.schedule{margin-top:4.375rem}}@media
(max-width:991.98px){.schedule{-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:2.5rem}}@media
(max-width:575.98px){.schedule{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-top:1.875rem}}.schedule__item{border-right:.125rem
solid
#fcb408;width:25%;text-align:right;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:0
1.25rem .625rem}@media (max-width:1199.98px){.schedule__item{padding:0 .625rem .625rem}}@media
(max-width:991.98px){.schedule__item{width:50%;padding:.625rem!important}}@media
(max-width:575.98px){.schedule__item{width:100%;max-width:17.1875rem;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;border:none;border-left:.125rem
solid #fcb408!important;margin-bottom:1.25rem;padding:.625rem!important;background-color:rgba(255,255,255,.2)}}@media
(max-width:575.98px){.schedule__item *{color:#fff!important}}.schedule__item i{color:#fff;font-size:1.4375rem}@media
(max-width:991.98px){.schedule__item i{font-size:1.0625rem}}.schedule__item i.icon-product{font-size:2.1875rem}@media
(max-width:991.98px){.schedule__item i.icon-product{font-size:1.5625rem}}.schedule__item
i.icon-marker{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;margin-bottom:.125rem}.schedule__item:nth-child(1),.schedule__item:nth-child(3){padding-left:0!important}@media
(max-width:575.98px){.schedule__item:nth-child(1),.schedule__item:nth-child(3){padding:.625rem!important}}@media
(max-width:991.98px){.schedule__item:nth-child(2){padding-right:0!important;border:none}}@media
(max-width:575.98px){.schedule__item:nth-child(2){padding:.625rem!important}}.schedule__item:last-child{border:none;margin:0}@media
(max-width:991.98px){.schedule__item:last-child{padding-right:0!important}}@media
(max-width:575.98px){.schedule__item:last-child{padding:.625rem!important}}.schedule__item--next{padding:0 .4375rem
.625rem}.schedule__item--next
.schedule__inside-block{margin-right:.9375rem}.schedule__item--collection{padding-left:.625rem;padding-right:0}.schedule__item--collection
.schedule__inside-block{margin-right:.9375rem}.schedule__inside-block{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.schedule__inside-block
i{margin-right:.625rem}.schedule__inside-block p{font-weight:200;color:rgba(255,255,255,.7)}@media
(max-width:1199.98px){.schedule__inside-block
p{font-size:11px}}.schedule__date{color:#fff;font-size:1.25rem;padding-left:.625rem}@media
(max-width:1199.98px){.schedule__date{font-size:.8rem}}.schedule__date
span{color:rgba(255,255,255,.7);font-size:.875rem;font-weight:200;display:block}.schedule__location{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;width:100%}.schedule__location
p{font-size:.875rem;line-height:1.05rem;font-weight:200;color:rgba(255,255,255,.7)}@media
(max-width:1199.98px){.schedule__location
p{font-size:.7rem;line-height:normal}}@font-face{font-display:swap;font-family:st;font-weight:200;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stlight.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stlight.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stlight.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stlight.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:st;font-weight:300;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stbook.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stbook.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stbook.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stbook.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:st;font-weight:400;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stregular.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stregular.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stregular.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stregular.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:st;font-weight:500;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stmedium.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stmedium.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stmedium.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stmedium.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:st;font-weight:700;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stbold.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stbold.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stbold.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stbold.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:pangolin;font-weight:400;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/pangolin.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/pangolin.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/pangolin.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/pangolin.ttf)
format(\"truetype\")}*{margin:0;padding:0;-webkit-box-sizing:border-box;box-sizing:border-box}body,html{height:100%;position:relative;font-family:st}a{text-decoration:none;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all
.3s}img{width:100%;max-width:100%}ul{padding:0;margin:0}ul
li{list-style:none}button,input{outline:0;border:none;background:0
0}p{font-size:.875rem;line-height:1.05rem;color:#000}.wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;min-height:100%;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}.wrapper .content{-webkit-box-flex:1;-ms-flex:1
0 auto;flex:1 0
auto}.wrapper.--open{-webkit-transform:translateX(-300px);-ms-transform:translateX(-300px);transform:translateX(-300px);position:relative}.wrapper.--open:before{position:absolute;content:\"\";top:0;right:0;bottom:0;left:0;background-color:rgba(0,0,0,.5);z-index:3}.container{width:100%;padding-right:.9375rem;padding-left:.9375rem;margin-right:auto;margin-left:auto;max-width:73.125rem;position:relative;-webkit-box-sizing:border-box;box-sizing:border-box}@media
(max-width:1199.98px){.container{max-width:60rem}}@media (max-width:991.98px){.container{max-width:45rem}}@media
(max-width:767.98px){.container{max-width:33.75rem}}@media (max-width:575.98px){.container{max-width:100%}}.social
ul{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.social
ul li{margin-right:.625rem}.social ul li:hover
a{color:#3c5a99;border-radius:0;-webkit-transform:translate(-3px,-4px);-ms-transform:translate(-3px,-4px);transform:translate(-3px,-4px);-webkit-box-shadow:5px
5px 2px 0 rgba(255,255,255,.3);box-shadow:5px 5px 2px 0 rgba(255,255,255,.3)}.social ul li:hover
a:after{right:9.375rem;bottom:9.375rem}.social ul li:last-child{margin:0!important}.social ul li
a{width:1.5625rem;height:1.5625rem;border-radius:.1875rem;border:.0625rem solid
#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#bebebe;font-size:.8125rem;position:relative;overflow:hidden;background-color:#fff}.social
ul li a i{position:relative;z-index:2}.social ul li
a:after{position:absolute;content:\"\";background-color:#1c2333;right:-50px;bottom:0;width:9.375rem;height:9.375rem;-webkit-transition:all
.3s;-o-transition:all .3s;-o-transition:all .3s;transition:all
.3s;z-index:1;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.info{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.info__item{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;position:relative;padding-left:1.875rem;margin-right:2.1875rem;color:#fff}@media
(max-width:991.98px){.info__item{margin-right:1.25rem}}.info__item:last-child{margin-right:0}.info__item
i{position:absolute;color:#fff;left:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.info__item
i.icon-envelope{font-size:.75rem}.info__item a{color:#fff}@media (max-width:1199.98px){.info__item
a{font-size:.90625rem}}@media (max-width:991.98px){.info__item a{font-size:.8125rem}}.info__item
a:hover{color:#fcb408}.info__item
span{display:block;text-align:right;color:#bebebe;font-size:.75rem}.info__item--fw-b{font-weight:500}.info__item--login{padding-left:0}@media
(max-width:1199.98px){.info__item--login{margin-right:.625rem}}.info__item--login
*{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.info__item--login
i{-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all .3s;transition:all
.3s;position:relative;top:auto;-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0);margin-right:.625rem}.info__item--login:hover
i{color:#fcb408}.info__item .icon-login{font-size:.8125rem}@media (max-width:1199.98px){.info__item
.login{display:none}}@media (max-width:767.98px){.info--contacts{display:none}}@media (max-width:575.98px){.header
.logo{max-width:90px;width:100%}}.logo svg{overflow:visible}@media (max-width:575.98px){.logo svg{width:100%}}.logo svg
path{-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all .3s;transition:all
.3s;-webkit-transform:translateY(-10px);-ms-transform:translateY(-10px);transform:translateY(-10px);opacity:0}.logo svg
path.fade-svg-elem{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);opacity:1}.btn{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-transform:uppercase;color:#000;font-size:1.125rem;background-color:#fcb408;padding:.875rem
1.5rem;position:relative;-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all
.3s;transition:all
.3s;width:100%;-webkit-box-sizing:border-box;box-sizing:border-box;line-height:normal;cursor:pointer;outline:0}.btn:hover{padding-right:2.0625rem;padding-left:.9375rem}@media
(max-width:575.98px){.btn:hover{padding:.875rem
1.5rem}}.btn:hover:after{right:.875rem;opacity:1}.btn:after{position:absolute;content:\"\";font-family:icon;right:1.75rem;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all
.3s;font-size:.625rem;opacity:0;font-weight:700}@media
(max-width:575.98px){.btn:after{display:none}}.btn--sm{width:auto;padding:.8125rem .625rem;font-size:.875rem}@media
(max-width:575.98px){.btn--sm:hover{padding:.8125rem .625rem}}@media
(max-width:575.98px){.btn--sm{font-size:.8125rem}}.title{font-size:1.6875rem;font-weight:400;line-height:2.025rem;color:#3a3a3a;margin-bottom:1.25rem}@media
(max-width:1199.98px){.title{font-size:1.5625rem;line-height:normal}}@media
(max-width:991.98px){.title{font-size:1.25rem}}@media (max-width:767.98px){.title{font-size:1.1875rem}}@media
(max-width:575.98px){.title{font-size:1.125rem;font-weight:500}}.title--light{color:#fff}.subtitle{font-size:.6875rem;line-height:.825rem;font-weight:500;color:#3a3a3a;margin-bottom:.625rem;text-transform:uppercase}.subtitle--light{color:#fff}.description
p{color:#616161;font-weight:300}.description--light
p{color:#fff;font-weight:200}::-webkit-scrollbar{width:.4375rem;padding:.125rem;border-radius:10px}::-webkit-scrollbar-track{background:#f4f6fd;-webkit-box-shadow:inset
0 0 5px grey;box-shadow:inset 0 0 5px
grey}::-webkit-scrollbar-thumb{background:#fcb408;border-radius:.625rem}::-webkit-scrollbar-thumb:hover{background:#555}.mobile-menu{background-color:#1c2333;padding:1.25rem;max-width:20rem;width:100%;position:fixed;right:-100%;top:0;bottom:0;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all
.3s;z-index:2;overflow-y:scroll}.mobile-menu__menu{margin:1.25rem 0}.mobile-menu__menu
ul{margin-bottom:1.25rem}.mobile-menu__menu ul li{margin-bottom:.3125rem}.mobile-menu__menu ul li
a{font-size:.9375rem;color:#fff}.mobile-menu__menu ul li
a:hover{color:#fcb408}.mobile-menu__contacts{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;border-top:.0625rem
solid #fff;padding:1.25rem 0}.mobile-menu__contacts
.info__item{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;margin:0;margin-bottom:.9375rem}.mobile-menu__contacts
.info__item:last-child{margin:0}.mobile-menu.--open{right:0}.services-menu{background-color:#f5f5f5}@media
(max-width:767.98px){.services-menu{display:none}}.services-menu__wrap
ul{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:100%;max-width:100%}.services-menu__wrap
ul li{position:relative;-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all
.3s;transition:all
.3s;-ms-flex-preferred-size:50%;flex-basis:50%;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;display:-webkit-box;display:-ms-flexbox;display:flex}.services-menu__wrap
ul li:last-child:after{display:none}.services-menu__wrap ul
li:after{position:absolute;content:'';height:3.125rem;width:.125rem;background-color:#1c2333;top:50%;right:0;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.services-menu__wrap
ul li.active span:after{width:2.8125rem}.services-menu__wrap ul li
a{color:#1c2333;font-size:.9375rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:1rem
.625rem;width:calc(100% -
1px);max-width:100%;-webkit-box-sizing:border-box;box-sizing:border-box;min-height:4rem;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center}@media
(max-width:1199.98px){.services-menu__wrap ul li a{font-size:.875rem}}@media (max-width:991.98px){.services-menu__wrap
ul li a{padding:.625rem}}.services-menu__wrap ul li a:hover{background-color:#fcb408}.services-menu__wrap ul li a:hover
span:after{width:2.8125rem}.services-menu__wrap ul li a
i{margin-right:.3125rem;font-size:1.875rem;font-weight:700}.services-menu__wrap ul li a i,.services-menu__wrap ul li a
img,.services-menu__wrap ul li a svg{margin-right:.3125rem}@media (max-width:991.98px){.services-menu__wrap ul li a
i,.services-menu__wrap ul li a img,.services-menu__wrap ul li a svg{display:none}}.services-menu__wrap ul li a
span{position:relative}.services-menu__wrap ul li a
span:after{position:absolute;content:'';height:.1875rem;background-color:#1c2333;left:50%;width:0;bottom:-.5rem;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}
  </style>
  <link href=\"";
        // line 212
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles.min.css");
        echo "\" rel=\"stylesheet\">
  ";
        // line 213
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 214
        echo "
  ";
        // line 215
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 215), "url", [], "any", false, false, true, 215) == "/restore")) {
            // line 216
            echo "  ";
        } else {
            // line 217
            echo "  ";
        }
        // line 218
        echo "</head>

<body>

  <!-- menu -->
  ";
        // line 223
        if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 223), "url", [], "any", false, false, true, 223) == "/registration") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 223), "url", [], "any", false, false, true, 223) == "/login")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 223), "url", [], "any", false, false, true, 223) == "/restore")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 223), "url", [], "any", false, false, true, 223) == "/update")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 223), "url", [], "any", false, false, true, 223) == "/404"))) {
            // line 224
            echo "  <a class=\"McButton hamburger\" data=\"hamburger-menu\" style=\"display: block;\"><b></b><b></b><b></b></a>
  ";
        } else {
            // line 226
            echo "  <a class=\"McButton hamburger\" data=\"hamburger-menu\"><b></b><b></b><b></b></a>
  ";
        }
        // line 228
        echo "  <div class=\"mobile-menu\" id=\"mnu\">

    <div class=\"logo\">
      <a href=\"";
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
        <img src=\"";
        // line 232
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-light.svg");
        echo "\" alt=\"\" style=\"max-width: 163px;\">
      </a>
    </div>
    <br>

    <div class=\"locale\">

      ";
        // line 239
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 240
            echo "      <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
      <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
      ";
        } else {
            // line 243
            echo "      <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
      <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
      ";
        }
        // line 246
        echo "
    </div>
    <div class=\"mobile-menu__menu\">
      <ul>
        <li><a href=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная"]);
        echo "</a></li>
        <li><a href=\"";
        // line 251
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Услуги"]);
        echo "</a></li>
        <li><a class=\"cost-calc-js order-js\" href=\"#calculator\">";
        // line 252
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Рассчитать перевозку"]);
        echo "</a></li>
        <li><a href=\"";
        // line 253
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reviews");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отзывы"]);
        echo "</a></li>
        <li><a href=\"";
        // line 254
        echo RainLab\Pages\Classes\Page::url("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["О компании"]);
        echo "</a></li>
        <li><a href=\"";
        // line 255
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контакты"]);
        echo "</a></li>
      </ul>
      <ul>
        <li><a href=\"";
        // line 258
        echo RainLab\Pages\Classes\Page::url("aviaperevozki");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Авиаперевозки"]);
        echo "</a></li>
        <li><a href=\"";
        // line 259
        echo RainLab\Pages\Classes\Page::url("shopping");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Шоппинг в США"]);
        echo "</a></li>
        <li><a class=\"fedex-js order-js\" href=\"#illinois-form\">";
        // line 260
        echo "Получить почтовую этикетку";
        echo "</a></li>
        <li><a href=\"";
        // line 261
        echo RainLab\Pages\Classes\Page::url("order");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заказать на склад в США"]);
        echo "</a></li>
      </ul>
      ";
        // line 263
        if (($context["user"] ?? null)) {
            // line 264
            echo "      <ul>
        <li><a href=\"/personal\">";
            // line 265
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Личный кабинет"]);
            echo "</a></li>
        <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"cursor: pointer;\">";
            // line 266
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Выход"]);
            echo "</a></li>
      </ul>
      ";
        } else {
            // line 269
            echo "      <ul>
        <li><a href=\"/registration\">";
            // line 270
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вход"]);
            echo "</a></li>
      </ul>
      ";
        }
        // line 273
        echo "    </div>
    <div class=\"mobile-menu__contacts\">
      <div class=\"info__item\"><i class=\"icon-envelope\"> </i><a
          href=\"mailto:";
        // line 276
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 276), "email", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 276), "email", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
        echo "</a><span>work </span></div>
      <div class=\"info__item info__item--fw-b\"><i class=\"icon-phone\"> </i><a
          href=\"tel:";
        // line 278
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 278), "phone", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 278), "phone", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
        echo "</a></div>
    </div>
    <div class=\"mobile-menu__social\">
      <div class=\"social\">
        <ul>
          ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 283), "social", [], "any", false, false, true, 283));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 284
            echo "          <li>
            <a href=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
              <i class=\"";
            // line 286
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
            echo "\"></i>
            </a>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "
        </ul>
      </div>
    </div>
    <ul style=\"color: #fff; margin-top: 15px;\">
      <li style=\"font-size: 13px; margin-bottom: 5px;\">
        ";
        // line 296
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Сбор посылок на следующий груз до"]);
        echo " </li>
      <li> ";
        // line 297
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 298
            echo "        ";
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), ["wednesday", "%e %BP"]);
            echo "

        ";
        } else {
            // line 301
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "wednesday", "d F"), "html", null, true);
            echo "
        ";
        }
        // line 302
        echo "</li>
    </ul>
  </div>



  <div class=\"wrapper\">
    <div class=\"content\">

      ";
        // line 311
        if ((((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 311), "url", [], "any", false, false, true, 311) == "/registration") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 311), "url", [], "any", false, false, true, 311) == "/login")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 311), "url", [], "any", false, false, true, 311) == "/deactivation")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 311), "url", [], "any", false, false, true, 311) == "/restore")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 311), "url", [], "any", false, false, true, 311) == "/update")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 311), "url", [], "any", false, false, true, 311) == "/404")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 311), "url", [], "any", false, false, true, 311) == "/confirm-message"))) {
            // line 312
            echo "
      ";
        } else {
            // line 314
            echo "      <!-- Header -->
      ";
            // line 315
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 316
            echo "      ";
        }
        // line 317
        echo "
      <!-- Content -->
      ";
        // line 319
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 320
        echo "
    </div>

    ";
        // line 323
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 323), "url", [], "any", false, false, true, 323) == "/")) {
            // line 324
            echo "    ";
        } else {
            // line 325
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/calc"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 326
            echo "

    ";
        }
        // line 329
        echo "    ";
        if ((((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 329), "url", [], "any", false, false, true, 329) == "/registration") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 329), "url", [], "any", false, false, true, 329) == "/login")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 329), "url", [], "any", false, false, true, 329) == "/deactivation")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 329), "url", [], "any", false, false, true, 329) == "/restore")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 329), "url", [], "any", false, false, true, 329) == "/update")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 329), "url", [], "any", false, false, true, 329) == "/404")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 329), "url", [], "any", false, false, true, 329) == "/confirm-message"))) {
            // line 330
            echo "    ";
        } else {
            // line 331
            echo "    <!-- Footer -->
    ";
            // line 332
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 333
            echo "    ";
        }
        // line 334
        echo "




  </div>


  <!-- Scripts -->
  <script src=\"";
        // line 343
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scripts.min.js");
        echo "\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js\"></script>

  ";
        // line 346
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 347
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 348
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 348,  586 => 347,  575 => 346,  569 => 343,  558 => 334,  555 => 333,  551 => 332,  548 => 331,  545 => 330,  542 => 329,  537 => 326,  532 => 325,  529 => 324,  527 => 323,  522 => 320,  520 => 319,  516 => 317,  513 => 316,  509 => 315,  506 => 314,  502 => 312,  500 => 311,  489 => 302,  483 => 301,  476 => 298,  474 => 297,  470 => 296,  462 => 290,  452 => 286,  448 => 285,  445 => 284,  441 => 283,  431 => 278,  424 => 276,  419 => 273,  413 => 270,  410 => 269,  404 => 266,  400 => 265,  397 => 264,  395 => 263,  388 => 261,  384 => 260,  378 => 259,  372 => 258,  364 => 255,  358 => 254,  352 => 253,  348 => 252,  342 => 251,  336 => 250,  330 => 246,  325 => 243,  320 => 240,  318 => 239,  308 => 232,  304 => 231,  299 => 228,  295 => 226,  291 => 224,  289 => 223,  282 => 218,  279 => 217,  276 => 216,  274 => 215,  271 => 214,  268 => 213,  264 => 212,  61 => 12,  54 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>
  <meta charset=\"utf-8\">
  <title>silkroadshipping - {{ this.page.title }}</title>
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/favicon.png'|theme }}\">
  <style>
.header .drop-down a{color:#3a3a3a}.header__top{background-color:#1c2333;padding:.75rem 0}@media
(max-width:767.98px){.header__top{display:none}}.header__top-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.locale{display:-webkit-box;display:-ms-flexbox;display:flex}.locale
a{color:#fff;position:relative;padding-right:.3125rem}.locale a:last-child:after{display:none}.locale
a:after{position:absolute;content:'|';right:0;color:#fff}.locale a:hover{color:#fcb408}.locale
a.active{color:#fcb408}.header__middle{padding:.6rem
0}.header__middle-wrap{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center}@media
(max-width:767.98px){.header__middle-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}.header__middle-wrap
.offices span{font-size:.75rem;color:#bebebe;margin-left:.25rem;margin-bottom:.125rem;font-weight:300}@media
(max-width:575.98px){.header__middle-wrap .offices span{font-size:.6rem;margin-left:0}}.header__middle-wrap .offices ul
li{display:inline-block;position:relative;padding-right:3.625rem;margin-right:1.9375rem;font-size:1.875rem}@media
(max-width:1199.98px){.header__middle-wrap .offices ul
li{padding-right:3rem;margin-right:1.3125rem;font-size:1.25rem}}@media (max-width:575.98px){.header__middle-wrap
.offices ul li{font-size:.625rem;padding-right:1.125rem;margin-right:.3125rem}}.header__middle-wrap .offices ul
li:last-child{margin:0;padding:0}.header__middle-wrap .offices ul li:last-child:after{display:none}.header__middle-wrap
.offices ul
li:after{position:absolute;content:'';font-family:icon;top:50%;right:0;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);font-size:1rem}@media
(max-width:575.98px){.header__middle-wrap .offices ul li:after{font-size:.625rem}}@media
(max-width:991.98px){.header__middle-item{margin-right:1.25rem}}.header__middle-item:last-child{margin:0}@media
(max-width:767.98px){.header__middle-item:last-child{-ms-flex-preferred-size:100%;flex-basis:100%;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;display:-webkit-box;display:-ms-flexbox;display:flex;margin-top:10px}.header__middle-item
.btn{width:auto;font-size:14px;padding:.65rem 1rem}.header__middle-item .btn:hover{padding:.65rem 1rem}}@media
(max-width:991.98px){.header
.social{background-color:#1c2333;position:fixed;left:0;top:1.25rem;padding:.3125rem;z-index:9}}@media
(max-width:991.98px){.header .social
ul{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}}@media
(max-width:991.98px){.header .social ul li{margin-right:0;margin-bottom:.625rem}.info__item{padding-left:0}}@media
(max-width:991.98px){.header .social ul li a{width:1.25rem;height:1.25rem}}@media (max-width:991.98px){.header .social
ul li a i{font-size:.6875rem}}.services-list
.circle{width:5px;height:5px;margin:3px;background:#fff;border-radius:50%;display:block;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s;-webkit-animation:translateMenu 1s ease-in-out
infinite;animation:translateMenu 1s ease-in-out infinite}.services-list .menu__item--meatball
.circle:first-child{-webkit-animation-delay:.3s;animation-delay:.3s}.services-list .menu__item--meatball
.circle:nth-child(2){-webkit-animation-delay:.5s;animation-delay:.5s}.services-list .menu__item--meatball
.circle:nth-child(3){-webkit-animation-delay:.7s;animation-delay:.7s}.services-list
.menu__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:1;-ms-flex:1;flex:1}.services-list
.menu__item--meatball{margin-left:20px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;cursor:pointer}.services-list{position:relative}@-webkit-keyframes
translateMenu{0%{-webkit-transform:translateY(0);transform:translateY(0)}50%{-webkit-transform:translateY(-5px);transform:translateY(-5px);background-color:#fcb408}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes
translateMenu{0%{-webkit-transform:translateY(0);transform:translateY(0)}50%{-webkit-transform:translateY(-5px);transform:translateY(-5px);background-color:#fcb408}100%{-webkit-transform:translateY(0);transform:translateY(0)}}.services-list__dropdown{padding-top:20px;position:absolute;min-width:270px;top:0;right:0;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all
.3s;opacity:0;pointer-events:none;-webkit-filter:drop-shadow(0 4px 40px rgba(0,
0, 0, .45));filter:drop-shadow(0 4px 40px rgba(0, 0, 0, .45))}.services-list
ul{background-color:#fff;-webkit-box-sizing:border-box;box-sizing:border-box}.services-list:hover
.services-list__dropdown{top:100%;opacity:1;pointer-events:inherit;z-index:2}.services-list ul li
a{text-transform:uppercase;font-size:15px;color:#3a3a3a;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px
15px}.services-list ul li a:hover{color:#fcb408;background-color:#f5f5f5}.services-list ul li a
i{color:#fcb408;margin-right:15px}.drop-down{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;min-width:200px;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;position:absolute;background-color:#fff;right:0;top:135%;z-index:9;-webkit-box-shadow:5px
5px 10px 5px rgba(0,0,0,.57);box-shadow:5px 5px 10px 5px rgba(0,0,0,.57);opacity:0;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s;pointer-events:none}.drop-down
a{color:#1c2333;font-weight:400;padding:10px;display:block;width:100%}.drop-down
a:first-child{background-color:#f5f5f5}.user-login:hover
.drop-down{opacity:1;top:100%;pointer-events:inherit}.example{display:-ms-grid;display:grid;-webkit-transition:all
.5s;-o-transition:all .5s;-o-transition:all .5s;transition:all
.5s;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background:-o-linear-gradient(top,#fff,#000);background:-webkit-gradient(linear,left
top,left bottom,from(#fff),to(#000));background:linear-gradient(to bottom,#fff,#000)}.hero{padding:3.75rem 0
1.5625rem;position:relative;background-color:#000}@media (max-width:1199.98px){.hero{padding:2.5rem 0 1.5625rem}}@media
(max-width:991.98px){.hero{padding:1.875rem 0 1.5625rem}}@media (max-width:767.98px){.hero{padding:1.5625rem 0}}@media
(max-width:575.98px){.hero{position:relative}.hero:before{position:absolute;content:'';top:0;right:0;bottom:0;left:0;background-color:rgba(0,0,0,.5);z-index:1}.hero
.container{z-index:3;position:relative}}.hero__bg{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%}.hero__bg
img{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}.hero__bg
*{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%}.hero__text-block{max-width:50%;width:100%}@media
(max-width:575.98px){.hero__text-block{max-width:80%}}.hero__title{font-size:3.5rem;line-height:70px;color:#fff;font-weight:300;margin-bottom:5rem}@media
(max-width:1199.98px){.hero__title{font-size:2.875rem;line-height:3.75rem;margin-bottom:2.5rem}}@media
(max-width:991.98px){.hero__title{font-size:1.875rem;line-height:normal;margin-bottom:1.875rem}}@media
(max-width:767.98px){.hero__title{font-size:1.5625rem;margin-bottom:1.25rem}}.hero__desc
p{font-size:1.25rem;line-height:1.5rem;color:#fff;font-weight:300;margin-bottom:1.875rem}@media
(max-width:1199.98px){.hero__desc p{margin-bottom:2.5rem;font-size:1.125rem;line-height:1.375rem}}@media
(max-width:991.98px){.hero__desc p{margin-bottom:1.875rem;font-size:1rem;line-height:normal}}@media
(max-width:767.98px){.hero__desc p{margin-bottom:1.25rem;font-size:.875rem}}.hero__desc
a{margin-bottom:1.875rem}.hero-bg .ce-element--empty::after{background-color:#fff}.hero-bg
.ce-element.ce-element--type-image{width:600px!important;height:400px!important;background-position:center;background-size:cover;float:right}.schedule{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-top:6.25rem}@media
(max-width:1199.98px){.schedule{margin-top:4.375rem}}@media
(max-width:991.98px){.schedule{-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:2.5rem}}@media
(max-width:575.98px){.schedule{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-top:1.875rem}}.schedule__item{border-right:.125rem
solid
#fcb408;width:25%;text-align:right;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:0
1.25rem .625rem}@media (max-width:1199.98px){.schedule__item{padding:0 .625rem .625rem}}@media
(max-width:991.98px){.schedule__item{width:50%;padding:.625rem!important}}@media
(max-width:575.98px){.schedule__item{width:100%;max-width:17.1875rem;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;border:none;border-left:.125rem
solid #fcb408!important;margin-bottom:1.25rem;padding:.625rem!important;background-color:rgba(255,255,255,.2)}}@media
(max-width:575.98px){.schedule__item *{color:#fff!important}}.schedule__item i{color:#fff;font-size:1.4375rem}@media
(max-width:991.98px){.schedule__item i{font-size:1.0625rem}}.schedule__item i.icon-product{font-size:2.1875rem}@media
(max-width:991.98px){.schedule__item i.icon-product{font-size:1.5625rem}}.schedule__item
i.icon-marker{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;margin-bottom:.125rem}.schedule__item:nth-child(1),.schedule__item:nth-child(3){padding-left:0!important}@media
(max-width:575.98px){.schedule__item:nth-child(1),.schedule__item:nth-child(3){padding:.625rem!important}}@media
(max-width:991.98px){.schedule__item:nth-child(2){padding-right:0!important;border:none}}@media
(max-width:575.98px){.schedule__item:nth-child(2){padding:.625rem!important}}.schedule__item:last-child{border:none;margin:0}@media
(max-width:991.98px){.schedule__item:last-child{padding-right:0!important}}@media
(max-width:575.98px){.schedule__item:last-child{padding:.625rem!important}}.schedule__item--next{padding:0 .4375rem
.625rem}.schedule__item--next
.schedule__inside-block{margin-right:.9375rem}.schedule__item--collection{padding-left:.625rem;padding-right:0}.schedule__item--collection
.schedule__inside-block{margin-right:.9375rem}.schedule__inside-block{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.schedule__inside-block
i{margin-right:.625rem}.schedule__inside-block p{font-weight:200;color:rgba(255,255,255,.7)}@media
(max-width:1199.98px){.schedule__inside-block
p{font-size:11px}}.schedule__date{color:#fff;font-size:1.25rem;padding-left:.625rem}@media
(max-width:1199.98px){.schedule__date{font-size:.8rem}}.schedule__date
span{color:rgba(255,255,255,.7);font-size:.875rem;font-weight:200;display:block}.schedule__location{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;width:100%}.schedule__location
p{font-size:.875rem;line-height:1.05rem;font-weight:200;color:rgba(255,255,255,.7)}@media
(max-width:1199.98px){.schedule__location
p{font-size:.7rem;line-height:normal}}@font-face{font-display:swap;font-family:st;font-weight:200;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stlight.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stlight.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stlight.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stlight.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:st;font-weight:300;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stbook.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stbook.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stbook.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stbook.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:st;font-weight:400;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stregular.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stregular.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stregular.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stregular.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:st;font-weight:500;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stmedium.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stmedium.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stmedium.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stmedium.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:st;font-weight:700;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stbold.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/stbold.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stbold.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/stbold.ttf)
format(\"truetype\")}@font-face{font-display:swap;font-family:pangolin;font-weight:400;font-style:normal;src:url(http://silk-road.loc/themes/silk-road/assets/fonts/pangolin.eot);src:url(http://silk-road.loc/themes/silk-road/assets/fonts/pangolin.eot?#iefix)
format(\"embedded-opentype\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/pangolin.woff)
format(\"woff\"),url(http://silk-road.loc/themes/silk-road/assets/fonts/pangolin.ttf)
format(\"truetype\")}*{margin:0;padding:0;-webkit-box-sizing:border-box;box-sizing:border-box}body,html{height:100%;position:relative;font-family:st}a{text-decoration:none;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all
.3s}img{width:100%;max-width:100%}ul{padding:0;margin:0}ul
li{list-style:none}button,input{outline:0;border:none;background:0
0}p{font-size:.875rem;line-height:1.05rem;color:#000}.wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;min-height:100%;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}.wrapper .content{-webkit-box-flex:1;-ms-flex:1
0 auto;flex:1 0
auto}.wrapper.--open{-webkit-transform:translateX(-300px);-ms-transform:translateX(-300px);transform:translateX(-300px);position:relative}.wrapper.--open:before{position:absolute;content:\"\";top:0;right:0;bottom:0;left:0;background-color:rgba(0,0,0,.5);z-index:3}.container{width:100%;padding-right:.9375rem;padding-left:.9375rem;margin-right:auto;margin-left:auto;max-width:73.125rem;position:relative;-webkit-box-sizing:border-box;box-sizing:border-box}@media
(max-width:1199.98px){.container{max-width:60rem}}@media (max-width:991.98px){.container{max-width:45rem}}@media
(max-width:767.98px){.container{max-width:33.75rem}}@media (max-width:575.98px){.container{max-width:100%}}.social
ul{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.social
ul li{margin-right:.625rem}.social ul li:hover
a{color:#3c5a99;border-radius:0;-webkit-transform:translate(-3px,-4px);-ms-transform:translate(-3px,-4px);transform:translate(-3px,-4px);-webkit-box-shadow:5px
5px 2px 0 rgba(255,255,255,.3);box-shadow:5px 5px 2px 0 rgba(255,255,255,.3)}.social ul li:hover
a:after{right:9.375rem;bottom:9.375rem}.social ul li:last-child{margin:0!important}.social ul li
a{width:1.5625rem;height:1.5625rem;border-radius:.1875rem;border:.0625rem solid
#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#bebebe;font-size:.8125rem;position:relative;overflow:hidden;background-color:#fff}.social
ul li a i{position:relative;z-index:2}.social ul li
a:after{position:absolute;content:\"\";background-color:#1c2333;right:-50px;bottom:0;width:9.375rem;height:9.375rem;-webkit-transition:all
.3s;-o-transition:all .3s;-o-transition:all .3s;transition:all
.3s;z-index:1;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.info{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.info__item{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;position:relative;padding-left:1.875rem;margin-right:2.1875rem;color:#fff}@media
(max-width:991.98px){.info__item{margin-right:1.25rem}}.info__item:last-child{margin-right:0}.info__item
i{position:absolute;color:#fff;left:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.info__item
i.icon-envelope{font-size:.75rem}.info__item a{color:#fff}@media (max-width:1199.98px){.info__item
a{font-size:.90625rem}}@media (max-width:991.98px){.info__item a{font-size:.8125rem}}.info__item
a:hover{color:#fcb408}.info__item
span{display:block;text-align:right;color:#bebebe;font-size:.75rem}.info__item--fw-b{font-weight:500}.info__item--login{padding-left:0}@media
(max-width:1199.98px){.info__item--login{margin-right:.625rem}}.info__item--login
*{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.info__item--login
i{-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all .3s;transition:all
.3s;position:relative;top:auto;-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0);margin-right:.625rem}.info__item--login:hover
i{color:#fcb408}.info__item .icon-login{font-size:.8125rem}@media (max-width:1199.98px){.info__item
.login{display:none}}@media (max-width:767.98px){.info--contacts{display:none}}@media (max-width:575.98px){.header
.logo{max-width:90px;width:100%}}.logo svg{overflow:visible}@media (max-width:575.98px){.logo svg{width:100%}}.logo svg
path{-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all .3s;transition:all
.3s;-webkit-transform:translateY(-10px);-ms-transform:translateY(-10px);transform:translateY(-10px);opacity:0}.logo svg
path.fade-svg-elem{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);opacity:1}.btn{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-transform:uppercase;color:#000;font-size:1.125rem;background-color:#fcb408;padding:.875rem
1.5rem;position:relative;-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all
.3s;transition:all
.3s;width:100%;-webkit-box-sizing:border-box;box-sizing:border-box;line-height:normal;cursor:pointer;outline:0}.btn:hover{padding-right:2.0625rem;padding-left:.9375rem}@media
(max-width:575.98px){.btn:hover{padding:.875rem
1.5rem}}.btn:hover:after{right:.875rem;opacity:1}.btn:after{position:absolute;content:\"\";font-family:icon;right:1.75rem;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all
.3s;font-size:.625rem;opacity:0;font-weight:700}@media
(max-width:575.98px){.btn:after{display:none}}.btn--sm{width:auto;padding:.8125rem .625rem;font-size:.875rem}@media
(max-width:575.98px){.btn--sm:hover{padding:.8125rem .625rem}}@media
(max-width:575.98px){.btn--sm{font-size:.8125rem}}.title{font-size:1.6875rem;font-weight:400;line-height:2.025rem;color:#3a3a3a;margin-bottom:1.25rem}@media
(max-width:1199.98px){.title{font-size:1.5625rem;line-height:normal}}@media
(max-width:991.98px){.title{font-size:1.25rem}}@media (max-width:767.98px){.title{font-size:1.1875rem}}@media
(max-width:575.98px){.title{font-size:1.125rem;font-weight:500}}.title--light{color:#fff}.subtitle{font-size:.6875rem;line-height:.825rem;font-weight:500;color:#3a3a3a;margin-bottom:.625rem;text-transform:uppercase}.subtitle--light{color:#fff}.description
p{color:#616161;font-weight:300}.description--light
p{color:#fff;font-weight:200}::-webkit-scrollbar{width:.4375rem;padding:.125rem;border-radius:10px}::-webkit-scrollbar-track{background:#f4f6fd;-webkit-box-shadow:inset
0 0 5px grey;box-shadow:inset 0 0 5px
grey}::-webkit-scrollbar-thumb{background:#fcb408;border-radius:.625rem}::-webkit-scrollbar-thumb:hover{background:#555}.mobile-menu{background-color:#1c2333;padding:1.25rem;max-width:20rem;width:100%;position:fixed;right:-100%;top:0;bottom:0;-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all
.3s;z-index:2;overflow-y:scroll}.mobile-menu__menu{margin:1.25rem 0}.mobile-menu__menu
ul{margin-bottom:1.25rem}.mobile-menu__menu ul li{margin-bottom:.3125rem}.mobile-menu__menu ul li
a{font-size:.9375rem;color:#fff}.mobile-menu__menu ul li
a:hover{color:#fcb408}.mobile-menu__contacts{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;border-top:.0625rem
solid #fff;padding:1.25rem 0}.mobile-menu__contacts
.info__item{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;margin:0;margin-bottom:.9375rem}.mobile-menu__contacts
.info__item:last-child{margin:0}.mobile-menu.--open{right:0}.services-menu{background-color:#f5f5f5}@media
(max-width:767.98px){.services-menu{display:none}}.services-menu__wrap
ul{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:100%;max-width:100%}.services-menu__wrap
ul li{position:relative;-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all
.3s;transition:all
.3s;-ms-flex-preferred-size:50%;flex-basis:50%;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;display:-webkit-box;display:-ms-flexbox;display:flex}.services-menu__wrap
ul li:last-child:after{display:none}.services-menu__wrap ul
li:after{position:absolute;content:'';height:3.125rem;width:.125rem;background-color:#1c2333;top:50%;right:0;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.services-menu__wrap
ul li.active span:after{width:2.8125rem}.services-menu__wrap ul li
a{color:#1c2333;font-size:.9375rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:1rem
.625rem;width:calc(100% -
1px);max-width:100%;-webkit-box-sizing:border-box;box-sizing:border-box;min-height:4rem;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center}@media
(max-width:1199.98px){.services-menu__wrap ul li a{font-size:.875rem}}@media (max-width:991.98px){.services-menu__wrap
ul li a{padding:.625rem}}.services-menu__wrap ul li a:hover{background-color:#fcb408}.services-menu__wrap ul li a:hover
span:after{width:2.8125rem}.services-menu__wrap ul li a
i{margin-right:.3125rem;font-size:1.875rem;font-weight:700}.services-menu__wrap ul li a i,.services-menu__wrap ul li a
img,.services-menu__wrap ul li a svg{margin-right:.3125rem}@media (max-width:991.98px){.services-menu__wrap ul li a
i,.services-menu__wrap ul li a img,.services-menu__wrap ul li a svg{display:none}}.services-menu__wrap ul li a
span{position:relative}.services-menu__wrap ul li a
span:after{position:absolute;content:'';height:.1875rem;background-color:#1c2333;left:50%;width:0;bottom:-.5rem;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);-webkit-transition:all
.3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}
  </style>
  <link href=\"{{ 'assets/styles.min.css'|theme }}\" rel=\"stylesheet\">
  {% styles %}

  {% if this.page.url == '/restore' %}
  {% else %}
  {% endif %}
</head>

<body>

  <!-- menu -->
  {% if this.page.url == \"/registration\" or this.page.url == \"/login\" or this.page.url == \"/restore\" or this.page.url == \"/update\" or this.page.url == \"/404\" %}
  <a class=\"McButton hamburger\" data=\"hamburger-menu\" style=\"display: block;\"><b></b><b></b><b></b></a>
  {% else %}
  <a class=\"McButton hamburger\" data=\"hamburger-menu\"><b></b><b></b><b></b></a>
  {% endif %}
  <div class=\"mobile-menu\" id=\"mnu\">

    <div class=\"logo\">
      <a href=\"{{ 'home'|page }}\">
        <img src=\"{{'assets/img/logo-light.svg'| theme}}\" alt=\"\" style=\"max-width: 163px;\">
      </a>
    </div>
    <br>

    <div class=\"locale\">

      {% if activeLocale == 'ru' %}
      <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
      <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
      {% else %}
      <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
      <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
      {% endif %}

    </div>
    <div class=\"mobile-menu__menu\">
      <ul>
        <li><a href=\"{{'home'|page}}\">{{'Главная'|_}}</a></li>
        <li><a href=\"{{'services'|page}}\">{{'Услуги'|_}}</a></li>
        <li><a class=\"cost-calc-js order-js\" href=\"#calculator\">{{'Рассчитать перевозку'|_}}</a></li>
        <li><a href=\"{{'reviews'|page}}\">{{'Отзывы'|_}}</a></li>
        <li><a href=\"{{'about'|staticPage }}\">{{'О компании'|_}}</a></li>
        <li><a href=\"{{'contacts'|page}}\">{{'Контакты'|_}}</a></li>
      </ul>
      <ul>
        <li><a href=\"{{'aviaperevozki'|staticPage }}\">{{'Авиаперевозки'|_}}</a></li>
        <li><a href=\"{{'shopping'|staticPage }}\">{{'Шоппинг в США'|_}}</a></li>
        <li><a class=\"fedex-js order-js\" href=\"#illinois-form\">{{'Получить почтовую этикетку'}}</a></li>
        <li><a href=\"{{'order'|staticPage }}\">{{'Заказать на склад в США'|_}}</a></li>
      </ul>
      {% if user %}
      <ul>
        <li><a href=\"/personal\">{{'Личный кабинет'|_}}</a></li>
        <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"cursor: pointer;\">{{'Выход'|_}}</a></li>
      </ul>
      {% else %}
      <ul>
        <li><a href=\"/registration\">{{'Вход'|_}}</a></li>
      </ul>
      {% endif %}
    </div>
    <div class=\"mobile-menu__contacts\">
      <div class=\"info__item\"><i class=\"icon-envelope\"> </i><a
          href=\"mailto:{{this.theme.email}}\">{{this.theme.email}}</a><span>work </span></div>
      <div class=\"info__item info__item--fw-b\"><i class=\"icon-phone\"> </i><a
          href=\"tel:{{this.theme.phone}}\">{{this.theme.phone}}</a></div>
    </div>
    <div class=\"mobile-menu__social\">
      <div class=\"social\">
        <ul>
          {% for item in this.theme.social %}
          <li>
            <a href=\"{{item.url}}\" target=\"_blank\">
              <i class=\"{{item.awesome_icon}}\"></i>
            </a>
          </li>
          {%endfor%}

        </ul>
      </div>
    </div>
    <ul style=\"color: #fff; margin-top: 15px;\">
      <li style=\"font-size: 13px; margin-bottom: 5px;\">
        {{'Сбор посылок на следующий груз до'|_}} </li>
      <li> {% if activeLocale == 'ru' %}
        {{ 'wednesday'|rudate('%e %BP') }}

        {% else %}
        {{ \"wednesday\"|date('d F') }}
        {% endif %}</li>
    </ul>
  </div>



  <div class=\"wrapper\">
    <div class=\"content\">

      {% if this.page.url == '/registration' or this.page.url == '/login' or this.page.url == '/deactivation' or this.page.url == '/restore' or this.page.url == '/update' or this.page.url == '/404' or this.page.url == '/confirm-message' %}

      {% else %}
      <!-- Header -->
      {% partial 'site/header' %}
      {% endif %}

      <!-- Content -->
      {% page %}

    </div>

    {% if this.page.url == '/' %}
    {% else %}
    {% partial 'site/calc' %}


    {% endif %}
    {% if this.page.url == '/registration' or this.page.url == '/login' or this.page.url == '/deactivation' or this.page.url == '/restore' or this.page.url == \"/update\" or this.page.url == '/404' or this.page.url == '/confirm-message' %}
    {% else %}
    <!-- Footer -->
    {% partial 'site/footer' %}
    {% endif %}





  </div>


  <!-- Scripts -->
  <script src=\"{{ 'assets/scripts.min.js'|theme }}\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js\"></script>

  {% framework extras %}
  {% scripts %}

</body>

</html>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 213, "if" => 215, "for" => 283, "partial" => 315, "page" => 319, "framework" => 346, "scripts" => 347);
        static $filters = array("escape" => 6, "theme" => 12, "page" => 231, "_" => 250, "staticPage" => 254, "rudate" => 298, "date" => 301);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'if', 'for', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme', 'page', '_', 'staticPage', 'rudate', 'date'],
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
