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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/layouts/Static.htm */
class __TwigTemplate_56d85e7effff5e8334dcb5014b7cf8b7eba7ebe7e16be5416e995934dac6314a extends \Twig\Template
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
        echo "



";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "infoBlock", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 6
            echo "



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "



<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>silkroadshipping - ";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "meta_description", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "meta_title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"OctoberCMS\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 26
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
   (max-width:575.98px){.header__middle-wrap .offices span{font-size:.6rem;margin-left:0}}.header__middle-wrap .offices
   ul li{display:inline-block;position:relative;padding-right:3.625rem;margin-right:1.9375rem;font-size:1.875rem}@media
   (max-width:1199.98px){.header__middle-wrap .offices ul
   li{padding-right:3rem;margin-right:1.3125rem;font-size:1.25rem}}@media (max-width:575.98px){.header__middle-wrap
   .offices ul li{font-size:.625rem;padding-right:1.125rem;margin-right:.3125rem}}.header__middle-wrap .offices ul
   li:last-child{margin:0;padding:0}.header__middle-wrap .offices ul
   li:last-child:after{display:none}.header__middle-wrap .offices ul
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
   (max-width:991.98px){.header .social ul li a{width:1.25rem;height:1.25rem}}@media (max-width:991.98px){.header
   .social ul li a i{font-size:.6875rem}}.services-list
   .circle{width:5px;height:5px;margin:3px;background:#fff;border-radius:50%;display:block;-webkit-transition:all
   .3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s;-webkit-animation:translateMenu 1s
   ease-in-out infinite;animation:translateMenu 1s ease-in-out infinite}.services-list .menu__item--meatball
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
   1.5625rem;position:relative;background-color:#000}@media (max-width:1199.98px){.hero{padding:2.5rem 0
   1.5625rem}}@media (max-width:991.98px){.hero{padding:1.875rem 0 1.5625rem}}@media
   (max-width:767.98px){.hero{padding:1.5625rem 0}}@media
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
   .3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}.wrapper
   .content{-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0
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
   .logo{max-width:90px;width:100%}}.logo svg{overflow:visible}@media (max-width:575.98px){.logo svg{width:100%}}.logo
   svg path{-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all
   .3s;transition:all
   .3s;-webkit-transform:translateY(-10px);-ms-transform:translateY(-10px);transform:translateY(-10px);opacity:0}.logo
   svg
   path.fade-svg-elem{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);opacity:1}.btn{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-transform:uppercase;color:#000;font-size:1.125rem;background-color:#fcb408;padding:.875rem
   1.5rem;position:relative;-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all
   .3s;-o-transition:all .3s;transition:all
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
   (max-width:1199.98px){.services-menu__wrap ul li a{font-size:.875rem}}@media
   (max-width:991.98px){.services-menu__wrap ul li a{padding:.625rem}}.services-menu__wrap ul li
   a:hover{background-color:#fcb408}.services-menu__wrap ul li a:hover span:after{width:2.8125rem}.services-menu__wrap
   ul li a i{margin-right:.3125rem;font-size:1.875rem;font-weight:700}.services-menu__wrap ul li a
   i,.services-menu__wrap ul li a img,.services-menu__wrap ul li a svg{margin-right:.3125rem}@media
   (max-width:991.98px){.services-menu__wrap ul li a i,.services-menu__wrap ul li a img,.services-menu__wrap ul li a
   svg{display:none}}.services-menu__wrap ul li a span{position:relative}.services-menu__wrap ul li a
   span:after{position:absolute;content:'';height:.1875rem;background-color:#1c2333;left:50%;width:0;bottom:-.5rem;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);-webkit-transition:all
   .3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}
 </style>
  
  <link href=\"";
        // line 230
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles.min.css");
        echo "\" rel=\"stylesheet\">
  ";
        // line 231
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 232
        echo "
  ";
        // line 233
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 233), "url", [], "any", false, false, true, 233) == "/restore")) {
            // line 234
            echo "
  ";
        } else {
            // line 236
            echo "  ";
        }
        // line 237
        echo "</head>

<body>


  <!-- menu -->
  <a class=\"McButton hamburger\" data=\"hamburger-menu\"><b></b><b></b><b></b></a>
  <div class=\"mobile-menu\" id=\"mnu\">
    <div class=\"logo\">
      <a href=\"";
        // line 246
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
        <img src=\"";
        // line 247
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-light.svg");
        echo "\" alt=\"\" style=\"max-width: 163px;\">
      </a>
    </div>
    <br>
    <div class=\"locale\">
      ";
        // line 252
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 253
            echo "      <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
      <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
      ";
        } else {
            // line 256
            echo "      <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">Ru</a>
      <a href=\"#\" class=\"active\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">En</a>
      ";
        }
        // line 259
        echo "
    </div>
    <div class=\"mobile-menu__menu\">
      <ul>
        <li><a href=\"";
        // line 263
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная"]);
        echo "</a></li>
        <li><a href=\"";
        // line 264
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Услуги"]);
        echo "</a></li>
        <li><a class=\"cost-calc-js order-js\" href=\"#calculator\">";
        // line 265
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Рассчитать перевозку"]);
        echo "</a></li>
        <li><a href=\"";
        // line 266
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("reviews");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отзывы"]);
        echo "</a></li>
        <li><a href=\"";
        // line 267
        echo RainLab\Pages\Classes\Page::url("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["О компании"]);
        echo "</a></li>
        <li><a href=\"";
        // line 268
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контакты"]);
        echo "</a></li>
      </ul>
      <ul>
        <li><a href=\"";
        // line 271
        echo RainLab\Pages\Classes\Page::url("aviaperevozki");
        echo "\">";
        echo "Авиаперевозки";
        echo "</a></li>
        <li><a href=\"";
        // line 272
        echo RainLab\Pages\Classes\Page::url("shopping");
        echo "\">";
        echo "Шоппинг в США";
        echo "</a></li>
        <li><a class=\"fedex-js order-js\" href=\"#illinois-form\">";
        // line 273
        echo "Получить почтовую этикетку";
        echo "</a></li>
        <li><a href=\"";
        // line 274
        echo RainLab\Pages\Classes\Page::url("order");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заказать на склад в США"]);
        echo "</a></li>
      </ul>
      ";
        // line 276
        if (($context["user"] ?? null)) {
            // line 277
            echo "      <ul>
        <li><a href=\"/personal\">";
            // line 278
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Личный кабинет"]);
            echo "</a></li>
        <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" style=\"cursor: pointer;\">";
            // line 279
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Выход"]);
            echo "</a></li>
      </ul>
      ";
        } else {
            // line 282
            echo "      <ul>
        <li><a href=\"/registration\">";
            // line 283
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вход"]);
            echo "</a></li>
      </ul>
      ";
        }
        // line 286
        echo "    </div>
    <div class=\"mobile-menu__contacts\">
      <div class=\"info__item\"><i class=\"icon-envelope\"> </i><a
          href=\"mailto:";
        // line 289
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 289), "email", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 289), "email", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
        echo "</a><span>work </span></div>
      <div class=\"info__item info__item--fw-b\"><i class=\"icon-phone\"> </i><a
          href=\"tel:";
        // line 291
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 291), "phone", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 291), "phone", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
        echo "</a></div>
    </div>
    <div class=\"mobile-menu__social\">
      <div class=\"social\">
        <ul>
          ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 296), "social", [], "any", false, false, true, 296));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 297
            echo "          <li>
            <a href=\"";
            // line 298
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 298), 298, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
              <i class=\"";
            // line 299
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
            echo "\"></i>
            </a>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "
        </ul>
      </div>
    </div>
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/breadcrumbs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 320
        echo "      <div class=\"add-info add-info--with-arrow\" style=\"background-image: url(";
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["banner"] ?? null), 320, $this->source));
        echo ")\">
        <div class=\"container\">
          <div class=\"add-info__wrap\">
            <div class=\"add-info__col\" style=\"flex-direction: column;\">
              <h2 class=\"title title--light\">";
        // line 324
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_title"] ?? null), 324, $this->source), "html", null, true);
        echo "</h2>
              <div class=\"description description--light\">
                <p data-fixture=\"\" data-ce-tag=\"p\" data-component=\"contenteditor::onSave\"
                  data-file=\"illinois/desc.en.htm\"
                  data-tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\">";
        // line 328
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_subtitle"] ?? null), 328, $this->source), "html", null, true);
        echo "
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"static-page\">



        ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["infoBlock"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 340
            echo "        <div class=\"about__wrap\">
          <div class=\"container\">
            <div class=\"about__col\">
              <div class=\"about__img\"> <img src=\"";
            // line 343
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "themeImg", [], "any", false, false, true, 343), 343, $this->source));
            echo "\" alt=\"\"></div>
            </div>
            <div class=\"about__col\">
              <h3 class=\"subtitle\">";
            // line 346
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "subTitle", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
            echo "</h3>
              <h2 class=\"title\">";
            // line 347
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, true, 347), 347, $this->source), "html", null, true);
            echo "</h2>
              <div class=\"description\">
                <p>";
            // line 349
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "desc", [], "any", false, false, true, 349), 349, $this->source);
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
        // line 355
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 356
        echo "
        ";
        // line 357
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 357), "url", [], "any", false, false, true, 357) == "/shopping")) {
            // line 358
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/shop"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 359
            echo "        ";
        } else {
            // line 360
            echo "        ";
        }
        // line 361
        echo "      </div>

    </div>

    ";
        // line 365
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 365), "url", [], "any", false, false, true, 365) == "/")) {
            // line 366
            echo "    ";
        } else {
            // line 367
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/calc"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 368
            echo "
    ";
        }
        // line 370
        echo "    ";
        if (((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 370), "url", [], "any", false, false, true, 370) == "/registration") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 370), "url", [], "any", false, false, true, 370) == "/login")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 370), "url", [], "any", false, false, true, 370) == "/deactivation")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 370), "url", [], "any", false, false, true, 370) == "/restore")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 370), "url", [], "any", false, false, true, 370) == "/404")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 370), "url", [], "any", false, false, true, 370) == "/confirm-message"))) {
            // line 371
            echo "    ";
        } else {
            // line 372
            echo "    <!-- Footer -->
    ";
            // line 373
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 374
            echo "    ";
        }
        // line 375
        echo "




  </div>


  <!-- Scripts -->
  <script src=\"";
        // line 384
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scripts.min.js");
        echo "\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js\"></script>

  ";
        // line 387
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
        // line 388
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 389
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/layouts/Static.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 389,  660 => 388,  649 => 387,  643 => 384,  632 => 375,  629 => 374,  625 => 373,  622 => 372,  619 => 371,  616 => 370,  612 => 368,  607 => 367,  604 => 366,  602 => 365,  596 => 361,  593 => 360,  590 => 359,  585 => 358,  583 => 357,  580 => 356,  577 => 355,  565 => 349,  560 => 347,  556 => 346,  550 => 343,  545 => 340,  541 => 339,  527 => 328,  520 => 324,  512 => 320,  508 => 319,  504 => 317,  501 => 316,  497 => 315,  494 => 314,  490 => 312,  488 => 311,  478 => 303,  468 => 299,  464 => 298,  461 => 297,  457 => 296,  447 => 291,  440 => 289,  435 => 286,  429 => 283,  426 => 282,  420 => 279,  416 => 278,  413 => 277,  411 => 276,  404 => 274,  400 => 273,  394 => 272,  388 => 271,  380 => 268,  374 => 267,  368 => 266,  364 => 265,  358 => 264,  352 => 263,  346 => 259,  341 => 256,  336 => 253,  334 => 252,  326 => 247,  322 => 246,  311 => 237,  308 => 236,  304 => 234,  302 => 233,  299 => 232,  296 => 231,  292 => 230,  85 => 26,  78 => 22,  74 => 21,  70 => 20,  59 => 11,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



{% for fields in extraData.infoBlock %}




{% endfor %}




<!DOCTYPE html>
<html>

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
   (max-width:575.98px){.header__middle-wrap .offices span{font-size:.6rem;margin-left:0}}.header__middle-wrap .offices
   ul li{display:inline-block;position:relative;padding-right:3.625rem;margin-right:1.9375rem;font-size:1.875rem}@media
   (max-width:1199.98px){.header__middle-wrap .offices ul
   li{padding-right:3rem;margin-right:1.3125rem;font-size:1.25rem}}@media (max-width:575.98px){.header__middle-wrap
   .offices ul li{font-size:.625rem;padding-right:1.125rem;margin-right:.3125rem}}.header__middle-wrap .offices ul
   li:last-child{margin:0;padding:0}.header__middle-wrap .offices ul
   li:last-child:after{display:none}.header__middle-wrap .offices ul
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
   (max-width:991.98px){.header .social ul li a{width:1.25rem;height:1.25rem}}@media (max-width:991.98px){.header
   .social ul li a i{font-size:.6875rem}}.services-list
   .circle{width:5px;height:5px;margin:3px;background:#fff;border-radius:50%;display:block;-webkit-transition:all
   .3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s;-webkit-animation:translateMenu 1s
   ease-in-out infinite;animation:translateMenu 1s ease-in-out infinite}.services-list .menu__item--meatball
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
   1.5625rem;position:relative;background-color:#000}@media (max-width:1199.98px){.hero{padding:2.5rem 0
   1.5625rem}}@media (max-width:991.98px){.hero{padding:1.875rem 0 1.5625rem}}@media
   (max-width:767.98px){.hero{padding:1.5625rem 0}}@media
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
   .3s;-o-transition:all .3s;-webkit-transition:all .3s;transition:all .3s}.wrapper
   .content{-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0
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
   .logo{max-width:90px;width:100%}}.logo svg{overflow:visible}@media (max-width:575.98px){.logo svg{width:100%}}.logo
   svg path{-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all .3s;-o-transition:all
   .3s;transition:all
   .3s;-webkit-transform:translateY(-10px);-ms-transform:translateY(-10px);transform:translateY(-10px);opacity:0}.logo
   svg
   path.fade-svg-elem{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);opacity:1}.btn{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-transform:uppercase;color:#000;font-size:1.125rem;background-color:#fcb408;padding:.875rem
   1.5rem;position:relative;-webkit-transition:all .3s;-o-transition:all .3s;-webkit-transition:all
   .3s;-o-transition:all .3s;transition:all
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
   (max-width:1199.98px){.services-menu__wrap ul li a{font-size:.875rem}}@media
   (max-width:991.98px){.services-menu__wrap ul li a{padding:.625rem}}.services-menu__wrap ul li
   a:hover{background-color:#fcb408}.services-menu__wrap ul li a:hover span:after{width:2.8125rem}.services-menu__wrap
   ul li a i{margin-right:.3125rem;font-size:1.875rem;font-weight:700}.services-menu__wrap ul li a
   i,.services-menu__wrap ul li a img,.services-menu__wrap ul li a svg{margin-right:.3125rem}@media
   (max-width:991.98px){.services-menu__wrap ul li a i,.services-menu__wrap ul li a img,.services-menu__wrap ul li a
   svg{display:none}}.services-menu__wrap ul li a span{position:relative}.services-menu__wrap ul li a
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
  <a class=\"McButton hamburger\" data=\"hamburger-menu\"><b></b><b></b><b></b></a>
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
        <li><a href=\"{{'aviaperevozki'|staticPage }}\">{{'Авиаперевозки'}}</a></li>
        <li><a href=\"{{'shopping'|staticPage }}\">{{'Шоппинг в США'}}</a></li>
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
  </div>
  <div class=\"wrapper\">
    <div class=\"content\">

      {% if this.page.url == '/registration' or this.page.url == '/login' or this.page.url == '/deactivation' or this.page.url == '/restore' or this.page.url == '/update' or this.page.url == '/404' or this.page.url == '/confirm-message' %}

      {% else %}
      <!-- Header -->
      {% partial 'site/header' %}
      {% endif %}

      <!-- Content -->
      {% partial 'site/breadcrumbs' %}
      <div class=\"add-info add-info--with-arrow\" style=\"background-image: url({{banner|media}})\">
        <div class=\"container\">
          <div class=\"add-info__wrap\">
            <div class=\"add-info__col\" style=\"flex-direction: column;\">
              <h2 class=\"title title--light\">{{banner_title}}</h2>
              <div class=\"description description--light\">
                <p data-fixture=\"\" data-ce-tag=\"p\" data-component=\"contenteditor::onSave\"
                  data-file=\"illinois/desc.en.htm\"
                  data-tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\">{{banner_subtitle}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"static-page\">



        {% for item in infoBlock %}
        <div class=\"about__wrap\">
          <div class=\"container\">
            <div class=\"about__col\">
              <div class=\"about__img\"> <img src=\"{{ item.themeImg|media }}\" alt=\"\"></div>
            </div>
            <div class=\"about__col\">
              <h3 class=\"subtitle\">{{ item.subTitle }}</h3>
              <h2 class=\"title\">{{ item.Title }}</h2>
              <div class=\"description\">
                <p>{{item.desc | raw}}</p>
              </div>
            </div>
          </div>
        </div>
        {% endfor %}
        {% page %}

        {% if this.page.url == '/shopping' %}
        {% partial 'site/shop' %}
        {% else %}
        {% endif %}
      </div>

    </div>

    {% if this.page.url == '/' %}
    {% else %}
    {% partial 'site/calc' %}

    {% endif %}
    {% if this.page.url == '/registration' or this.page.url == '/login' or this.page.url == '/deactivation' or this.page.url == '/restore' or this.page.url == '/404' or this.page.url == '/confirm-message' %}
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

</html>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/layouts/Static.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "styles" => 231, "if" => 233, "partial" => 315, "page" => 355, "framework" => 387, "scripts" => 388);
        static $filters = array("escape" => 20, "theme" => 26, "page" => 246, "_" => 263, "staticPage" => 267, "media" => 320, "raw" => 349);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'styles', 'if', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme', 'page', '_', 'staticPage', 'media', 'raw'],
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
