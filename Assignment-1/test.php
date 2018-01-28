
<!DOCTYPE html>
<html>
<head>
<title>Live demo for Real Estate Agency Responsive Website Template #41989</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Before you purchase it, get the look and feel of the professional Real Estate Agency Responsive Website Template (#41989) by viewing the live preview. Go through the pages, check the images, click the buttons, explore the functionality." />
<meta charset="utf-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1059.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
<meta property="fb:admins" content="720898483" />
<meta property="fb:admins" content="1129631948" />
<meta property="fb:admins" content="100001777951090" />
<link rel="publisher" href="https://plus.google.com/116173187155256042113" />
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-310x150.png?d=fd37f38" />
<meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-310x310.png?d=fd37f38" />
<meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-150x150.png?d=fd37f38" />
<meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-144x144.png?d=fd37f38" />
<meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-70x70.png?d=fd37f38" />
<meta name="msapplication-config" content="https://s.tmimgcdn.com/img/logo-touch/browserconfig.xml?d=fd37f38" />
<link rel="icon" href="https://s.tmimgcdn.com/img/favicon.ico?d=fd37f38" type="image/x-icon" />
<link rel="shortcut icon" href="https://s.tmimgcdn.com/img/favicon.ico?d=fd37f38" type="image/x-icon" />
<link rel="icon" type="image/png" href="https://s.tmimgcdn.com/img/logo-touch/favicon-16x16.png?d=fd37f38" sizes="16x16">
<link rel="icon" type="image/png" href="https://s.tmimgcdn.com/img/logo-touch/favicon-32x32.png?d=fd37f38" sizes="32x32">
<link rel="icon" type="image/png" href="https://s.tmimgcdn.com/img/logo-touch/favicon-96x96.png?d=fd37f38" sizes="96x96">
<link rel="icon" type="image/png" sizes="36x36" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-36.png?d=fd37f38" />
<link rel="icon" type="image/png" sizes="48x48" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-48.png?d=fd37f38" />
<link rel="icon" type="image/png" sizes="72x72" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-72.png?d=fd37f38" />
<link rel="icon" type="image/png" sizes="96x96" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-96.png?d=fd37f38" />
<link rel="icon" type="image/png" sizes="144x144" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-144.png?d=fd37f38" />
<link rel="icon" type="image/png" sizes="192x192" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-192.png?d=fd37f38" />
<link rel="mask-icon" sizes="any" href="https://s.tmimgcdn.com/img/logo-touch/safari-pinned-tab.svg?d=fd37f38">
<link rel="apple-touch-icon" sizes="180x180" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-precomposed.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="180x180" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-180.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="152x152" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-152.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="144x144" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-144.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="120x120" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-120.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="114x114" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-114.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="76x76" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-76.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="72x72" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-72.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="60x60" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-60.png?d=fd37f38" />
<link rel="apple-touch-icon" sizes="57x57" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-57.png?d=fd37f38" />
<link rel="canonical" href="https://www.templatemonster.com/demo/41989.html" />
<link rel="alternate" hreflang="en" href="https://www.templatemonster.com/demo/41989.html" />
<link rel="alternate" hreflang="de" href="https://www.templatemonster.com/de/demo/41989.html" />
<link rel="alternate" hreflang="ru" href="https://www.templatemonster.com/ru/demo/41989.html" />
<link rel="alternate" hreflang="es" href="https://www.templatemonster.com/es/demo/41989.html" />
<link rel="alternate" hreflang="fr" href="https://www.templatemonster.com/fr/demo/41989.html" />
<link rel="alternate" hreflang="it" href="https://www.templatemonster.com/it/demo/41989.html" />
<link rel="alternate" hreflang="pl" href="https://www.templatemonster.com/pl/demo/41989.html" />
<link rel="alternate" hreflang="tr" href="https://www.templatemonster.com/tr/demo/41989.html" />
<link rel="alternate" hreflang="pt" href="https://www.templatemonster.com/pt-br/demo/41989.html" />
<link rel="alternate" hreflang="uk" href="https://www.templatemonster.com/ua/demo/41989.html" />
<link rel="alternate" hreflang="zh" href="https://www.templatemonster.com/cn/demo/41989.html" />
<link rel="alternate" hreflang="hu" href="https://www.templatemonster.com/hu/demo/41989.html" />
<link rel="alternate" hreflang="cs" href="https://www.templatemonster.com/cz/demo/41989.html" />
<link rel="alternate" hreflang="nl" href="https://www.templatemonster.com/nl/demo/41989.html" />
<link rel="alternate" hreflang="sv" href="https://www.templatemonster.com/sv/demo/41989.html" />
<meta property="og:url" content="https://www.templatemonster.com/demo/41989.html" />
<meta property="og:title" content="" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="es_ES" />
<meta property="og:locale:alternate" content="ru_RU" />
<meta property="og:locale:alternate" content="de_DE" />
<meta property="og:locale:alternate" content="pl_PL" />
<meta property="og:locale:alternate" content="it_IT" />
<meta property="og:locale:alternate" content="tr_TR" />
<meta property="og:locale:alternate" content="fr_FR" />
<meta property="og:locale:alternate" content="pt_BR" />
<meta property="og:locale:alternate" content="nl_NL" />
<meta property="og:locale:alternate" content="zh_CN" />
<meta property="og:locale:alternate" content="cs_CZ" />
<meta property="og:locale:alternate" content="uk_UA" />
<meta property="og:locale:alternate" content="hu_HU" />
<meta property="og:locale:alternate" content="sv_SE" />
<meta property="og:site_name" content="TemplateMonster" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="templatemonster" />
<meta name="twitter:creator" content="templatemonster" />
<style>:root{content:"Thu Jan 25 2018 05:37:22 GMT-0500 (EST)---demo"}html:not(.js) body .navigation [class*=sub-menu-],html:not(.js) body .sub-menu__additional{display:none}[class*=icon-]:before{content:attr(data-icon);-moz-osx-font-smoothing:grayscale}.icon-arrow-small-down,.icon-arrow-small-up,.icon-cart,.icon-close,[class*=icon-]:before{speak:none;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased}.icon-arrow-small-down,.icon-arrow-small-up,.icon-cart,.icon-close{font-style:normal}.icon-cart:before{content:"\e046"}.icon-arrow-small-up:before{content:"\e01e"}.icon-arrow-small-down:before{content:"\e022"}.icon-close:before{content:"\e039"}.tm-icon:before{speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background:0 0!important}.tm-icon.icon-cart:before{content:"\e901"}.tm-icon.icon-cross:before{content:"\e911"}.button{height:40px;line-height:40px;border-radius:3px;padding:0 20px;color:#fff;font-size:14px;font-weight:400!important;position:relative;display:inline-block;vertical-align:top;text-decoration:none!important;text-align:center;border:0;outline:0!important;box-shadow:none!important;cursor:pointer;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.button.btn-important{background:#f4511e;background:linear-gradient(180deg,#f4511e 0,#d84315)}.button.tm-icon:before{width:20px;height:20px;margin-right:10px;display:inline-block;position:relative;top:-2px;font-size:20px;vertical-align:middle}.rd-notice{opacity:0;position:relative;padding:0;border:0;text-align:left;box-shadow:0 5px 10px 0 rgba(36,50,56,.2)}.rd-notice,.rd-notice .rd-notice-content,.rd-notice:after{background-color:#546e7a}.rd-notice:after{box-shadow:0 5px 10px 0 rgba(36,50,56,.2)}.rd-notice:not(.rd-notice-position-static) .rd-notice-content{color:#fff!important}.rd-notice-tooltip{box-shadow:0 2px 2px rgba(0,0,0,.2);font-size:14px;border-radius:3px;line-height:1.25;position:absolute;z-index:5;opacity:1}.rd-notice-tooltip:after{position:absolute;display:block;content:"";height:20px;width:20px;box-shadow:none;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);border-radius:3px;z-index:3}.rd-notice-tooltip .rd-notice-content{background:0;border-radius:3px;width:100%;color:#fff;position:relative;z-index:4;padding:20px;font-weight:400;line-height:1.45}.rd-notice-position-bottom{margin-top:20px;margin-bottom:-20px}.rd-notice-position-bottom:after{top:-6px;left:50%;margin-left:-10px}.link-click,a{cursor:pointer}*{outline:medium none!important;margin:0;padding:0}body,html{height:100%}html{font-size:100%}.block-hidden{visibility:hidden}body{background-color:#fff;color:#243238;font-size:13px;line-height:16px;margin:0;min-width:320px;overflow:hidden;width:100%}a{color:#2196f3;text-decoration:none}ul{list-style-type:none;margin:0 0 8px 25px;padding:0}li{line-height:16px}img{border:0 none;height:auto;max-width:100%;vertical-align:middle}.clear{clear:both}.live-container{margin-left:auto;margin-right:auto}.live-container:after,.live-container:before{content:"";display:table;line-height:0}.live-container:after{clear:both}.clearfix:after,.clearfix:before{content:"";display:table;line-height:0}.js-none{display:none}.btn-group{display:inline-block;font-size:0;position:relative;vertical-align:middle;white-space:nowrap}#advanced{position:relative;z-index:7;height:50px;top:0;left:0}#advanced .bg{height:50px;border-bottom:1px solid #fff;background:#eceff1;box-sizing:content-box}#advanced .top_container{width:100%}#advanced a.brand_livedemo{display:block;float:left;font-size:0;line-height:0;margin-left:10px;overflow:hidden;position:relative;text-indent:-9999px;z-index:6;padding:5px 15px 0 0;box-sizing:content-box}#advanced a.brand_livedemo .logo-icon{width:52px;height:40px}#advanced .name_template{color:#243238;float:left;width:180px;font-size:14px;line-height:16px;padding:19px 22px 15px 0;position:relative;box-sizing:border-box}#advanced .name_template h1{margin:0;padding:0;font-size:14px;line-height:16px;font-weight:400;max-width:440px;padding-right:50px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}#advanced .name_template .link-1{border-bottom:1px dashed #2196f3;color:#2196f3;cursor:pointer;overflow:hidden;letter-spacing:0;position:absolute;right:22px}#advanced .demo-bar-phone{width:351px;position:relative;float:left;padding:16px 42px}#advanced .demo-bar-phone span{vertical-align:middle;display:inline-block;font-size:12px;color:#243238;margin-right:3px}#advanced .demo-bar-phone a{font-size:14px;color:#1ca138;position:relative}#advanced .demo-bar-phone a:before{content:"";position:relative;display:inline-block;width:19px;height:19px;left:0;top:0;vertical-align:middle;background-repeat:no-repeat}#popover2{background:#fff;border:1px solid #cfd8dc;display:none;font-size:12px;right:-47px;margin:0;min-width:164px;padding:12px 0 16px 21px;position:absolute;text-align:left;top:51px;z-index:10;box-shadow:0 0 6px 2px rgba(36,50,56,.15);box-sizing:content-box}#popover2:before{border:6px solid transparent;top:-6px;border-bottom-color:#fff;border-top:0;z-index:2}#popover2:after,#popover2:before{position:absolute;display:block;left:88px;content:" "}#popover2:after{border:6px solid transparent;top:-7px;border-bottom-color:#cfd8dc;border-top:0;z-index:1}#popover2 .icon-close:before{color:#b0bec5;font-size:12px;position:absolute;top:9px;right:11px;cursor:pointer}#popover2 a,#popover2 span.link-click{color:inherit;display:inline-block;padding:5px 0 0;line-height:17px;cursor:pointer}.responsive-block{width:248px;height:50px;float:left;display:none;position:relative;z-index:1;box-sizing:content-box}#responsivator{margin:0 0 0 20px}#responsivator li:not(.qr){float:left;margin-top:11px}#desktop{position:relative;top:0;left:0;background:none no-repeat scroll 3px 0 transparent;opacity:.4;width:34px;height:28px;display:block;float:right;margin-right:18px;cursor:pointer}#desktop.active{opacity:1}#tablet-landscape{position:relative;top:0;left:0;opacity:.4;width:23px;display:block;cursor:pointer}#tablet-landscape{margin-right:18px;background:none no-repeat scroll -53px 8px transparent;height:29px}#iphone-landscape{position:relative;top:0;opacity:.4;display:block;cursor:pointer}#iphone-landscape{left:0;background:none no-repeat scroll -95px 14px transparent;width:22px;height:28px;margin-right:17px}#qr{position:relative}#qr .img-wrapper{border:1px solid #cfd8dc;padding:32px 33px 22px}#qr .icon-close:before{color:#b0bec5;font-size:12px;position:absolute;top:9px;right:10px;cursor:pointer}.view_options{position:relative}#qr-open{position:absolute;display:inline-block;padding:16px 19px 11px;width:21px;height:23px;border:1px solid #cfd8dc;border-bottom:0;border-top:0;cursor:pointer;box-sizing:content-box}#qr-open span{background:none no-repeat;background-position:-159px 0!important;display:block;width:22px;height:22px}#qr-content:before{border:6px solid transparent;top:-5px;left:119px;border-bottom-color:#fff;border-top:0;z-index:2;margin-left:-1px}#qr-content:after,#qr-content:before{position:absolute;display:block;content:" "}#qr-content:after{border:7px solid transparent;top:-6px;left:121px;border-bottom-color:#cfd8dc;border-top:0;z-index:1;margin-left:-4px}#qr-content{background:#fff;margin:0;position:absolute;left:77px;top:45px;width:248px;border:1px solid #cfd8dc;box-shadow:0 0 6px 2px rgba(36,50,56,.15)}#qr-text:before{position:absolute;display:block;border:7px solid transparent;top:229px;left:117px;border-bottom-color:#546e7a;border-top:0;content:" ";z-index:2}#qr-text{background-color:#546e7a;color:#fff;padding-top:1px;font-size:10px;line-height:36px;text-align:center;text-transform:uppercase}.hide-price{color:#eceff1!important}.topbar_info{position:relative;padding:0 70px 0 0;float:right;height:50px}.topbar_info__wrapper{overflow:hidden;height:inherit}.topbar_info .js-cart-item-info{color:#243238;display:none;font-size:13px;padding:18px 17px 17px 0;position:relative;overflow:hidden;float:right}.topbar_info .js-none{display:none!important}.topbar_info .price-wrapper{float:right;color:#b0bec5;vertical-align:top;line-height:20px;text-align:right;margin-right:17px;overflow:hidden;height:28px}.topbar_info .price-wrapper,.topbar_info .price-wrapper .price-title{position:relative;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.topbar_info .price-wrapper .price-title{float:left;font-size:12px;max-width:237px;text-align:left;color:#243238}.topbar_info .price-wrapper .price{color:#d84315;font-weight:700;font-size:22px;line-height:28px}.topbar_info .price-wrapper.dropdown-arrow{cursor:pointer}.topbar_info .price-wrapper.dropdown-arrow #buy-button{display:inline-block}.topbar_info .price-wrapper.dropdown-arrow #buy-button:before{color:#90a4ae;text-shadow:none;font-size:10px}.topbar_info #buy-button{display:none}.topbar_info .vertical-alignment{float:right;position:relative;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.box-drop{background-clip:padding-box;display:none;list-style:none outside none;margin:2px 0 0;min-width:215px;z-index:9;background:#fff;border:1px solid #cfd8dc;border-bottom:0;box-shadow:0 0 6px 2px rgba(36,50,56,.15);border-radius:0;padding:0;position:absolute;top:49px;text-align:left}.box-drop:before{position:absolute;display:block;border:6px solid transparent;top:-6px;right:calc(50% - 6px);border-bottom-color:#fff;border-top:0;content:" ";z-index:2;margin-left:-1px}@media (min-width:1360px){.box-drop:before{right:33px}}.box-drop:after{position:absolute;display:block;border:6px solid transparent;top:-7px;right:calc(50% - 6px);border-bottom-color:#7d7d7d;border-top:0;content:" ";z-index:1;opacity:.5;margin-left:-1px}@media (min-width:1360px){.box-drop:after{right:33px}}.box-drop .hide-price{color:#fff!important}.list-drop{margin:0;padding:0}.list-drop li{font-size:12px;padding:17px 20px;position:relative;color:#243238;border-bottom:1px solid #cfd8dc;line-height:16px}.list-drop li>span{padding:0;position:relative}.list-drop li .recommended{display:block;position:absolute;top:0;margin-top:6px;padding:0}.list-drop li .recommended:before{content:"";display:block;width:98px;height:11px;background-image:none;background-repeat:no-repeat}.list-drop li .popover{right:0;top:43px}.list-drop .price{color:#d84315;font-weight:700;position:relative}.list-drop .popover{left:auto;display:block;opacity:0;width:260px}#headerlivedemo span.trigger{border-left:1px solid #cfd8dc;cursor:pointer;display:block;height:50px;position:absolute;right:0;top:0;width:50px;z-index:8;background:#eceff1;box-sizing:content-box}#headerlivedemo span.trigger:before{color:#78909c;font-size:22px;top:14px;position:absolute;left:15px}#headerlivedemo span.trigger:after{border-bottom:1px solid #fff;content:"";display:block;position:absolute;height:50px;right:0;width:51px}#iframelive,iframe{width:100%;background-color:#fff}#iframelive{height:100%;background:#cfd8dc}#frame{position:relative;height:100%;border:0}#advanced .top_container .name_template{display:none}#advanced .top_container .demo-bar-phone{width:19px}#advanced .top_container .demo-bar-phone span{display:none}#advanced .top_container .demo-bar-phone a:before{left:0}#advanced .top_container .responsive-block{display:none!important}#advanced .top_container .topbar_info .btn-inner,#advanced .top_container .topbar_info .price-wrapper{display:none}@media (min-width:480px){#advanced .top_container a.brand_livedemo{border-right:1px solid #cfd8dc}#advanced .top_container .topbar_info{padding:0 70px 0 20px;border-left:1px solid #cfd8dc}#advanced .top_container .topbar_info .price-wrapper{display:block}#advanced .top_container .topbar_info .price-wrapper .price-title{display:none}}@media (min-width:768px){#advanced .top_container{display:flex}#advanced .top_container a.brand_livedemo{border-right:0}#advanced .top_container .name_template{display:block;border-right:1px solid #cfd8dc}#advanced .top_container .demo-bar-phone{box-sizing:border-box;min-width:73px;padding-left:13px;padding-right:14px;text-align:center;flex-grow:1;border-left:0}#advanced .top_container .demo-bar-phone .phone-inner{color:#1ca138;font-size:14px;margin-left:5px}}@media (min-width:840px){#advanced .top_container .demo-bar-phone .phone-inner{display:inline-block}}@media (min-width:1060px){#advanced a.brand_livedemo{margin-left:20px}#advanced .top_container .name_template{width:255px}#advanced .top_container .demo-bar-phone{width:0;white-space:nowrap}#advanced .top_container .topbar_info{margin-left:0;text-align:right}#advanced .top_container .topbar_info .price-wrapper{display:inline-block}}@media (min-width:1245px){#advanced .top_container .topbar_info .buy_now .btn-inner{display:inline-block}}@media (min-width:1069px){#advanced .top_container .name_template{width:245px}#advanced .top_container .demo-bar-phone .phone-inner{display:none}#advanced .top_container .responsive-block{display:block!important;width:191px}#advanced .top_container .responsive-block #qr{display:none}#advanced .top_container .topbar_info{flex-grow:1}}@media (min-width:1440px){#advanced .top_container .topbar_info .price-wrapper .price-title{display:block}#advanced .price-wrapper .price{padding-left:40px}}@media (min-width:1505px){.demo-bar-phone{flex-grow:1}.demo-bar-phone .phone-inner{display:inline-block}}@media (min-width:1430px){#advanced .top_container .responsive-block{width:251px}#advanced .top_container .responsive-block #qr{display:block}#advanced .top_container .topbar_info{width:auto;flex-grow:0}}@media (min-width:1685px){#advanced .top_container .demo-bar-phone{width:auto}#advanced .top_container .demo-bar-phone>span{display:inline-block}#advanced .top_container .topbar_info{flex-grow:1}}@media screen and (max-width:560px){.demo-bar-phone{display:none}}html:not(.js) body{font-family:Helvetica,Arial,sans-serif}html:not(.js) body .nav.main-menu>li>a{letter-spacing:-.4px}.sub-menu-1 li a b{background-color:#f0f0f0}.sub-menu-1 li:first-child a b{background-color:#1a1e23}.sub-menu-1 li:nth-child(2) a b{background-color:#dce1e6}.sub-menu-1 li:nth-child(3) a b{background-color:#ef9145}.sub-menu-1 li:nth-child(4) a b{background-color:#aad8e5}.sub-menu-1 li:nth-child(5) a b{background-color:#e06f40}.sub-menu-1 li:nth-child(6) a b{background-color:#9b6896}.sub-menu-1 li:nth-child(7) a b{background-color:#665387}</style>
<script>
    !function(e){"use strict"
        var n=function(n,t,o){function i(e){return f.body?e():void setTimeout(function(){i(e)})}var d,r,a,l,f=e.document,s=f.createElement("link"),u=o||"all"
            return t?d=t:(r=(f.body||f.getElementsByTagName("head")[0]).childNodes,d=r[r.length-1]),a=f.styleSheets,s.rel="stylesheet",s.href=n,s.media="only x",i(function(){d.parentNode.insertBefore(s,t?d:d.nextSibling)}),l=function(e){for(var n=s.href,t=a.length;t--;)if(a[t].href===n)return e()
                setTimeout(function(){l(e)})},s.addEventListener&&s.addEventListener("load",function(){this.media=u}),s.onloadcssdefined=l,l(function(){s.media!==u&&(s.media=u)}),s};
        "undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);
    function isLocalStorageExists() {
        try {
            localStorage.setItem('t*',1);
            localStorage.removeItem('t*');
            return true;
        } catch(e) {
            return false;
        }
    }
</script>
<script>
    </script> <script>
					loadCSS("https://s.tmimgcdn.com/css/standalone/livedemo.css?d=7b26598");
				loadCSS("https://s.tmimgcdn.com/css/owl.carousel.css?d=7b26598");
		loadCSS("https://s.tmimgcdn.com/css/owl.theme.css?d=7b26598");
		</script>
<script type="text/javascript">
	window.template = {'id':41989 , 'price':1}
</script>
<script>document.cookie = "chat_presales=1; expires=03 Jul 2036 21:44:38 GMT; domain=.templatemonster.com; path=/";</script>
<script>document.cookie = "callback_notice=closed; expires=03 Jul 2036 21:44:38 GMT; domain=.templatemonster.com; path=/";</script>
<script>
window.defaultPriceVariationExperiment = 0;
</script>
</head>
<body itemscope itemtype="http://schema.org/WebPage" id="demo-page" class=" is-responsive">
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MS2BNB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MS2BNB');</script>
<div class="relative js-demo-upper-menu js-template-id " id="headerlivedemo" data-template_id="41989" data-brand="Website" data-property-type-id="50108" data-categories="Real Estate Templates / Real Estate Agency Templates" data-variant="premium" data-product_name="Website Templates">
<div id="advanced">
<div class="bg">
 <div class="top_container live-container">
<a id="brand_livedemo" class="brand brand_livedemo" href="https://www.templatemonster.com/">
<img class="logo-icon svg" alt="Website Templates & Themes" src="https://s.tmimgcdn.com//wp-content/uploads/2016/05/logo_tm_head_new.svg">
</a>
<div class="name_template">
<h1 title="Real Estate Agency Responsive Website Template">Real Estate Agency Responsive Website Template
<span id="livedemo-popover-opener" class="link-1 js-popup-open" data-popupi="js-popupi-1"> #41989</span>
</h1>
<div id="popover2" class="js-popup-content js-popupi-1">
<div class="tm-icon icon-cross icon-close"></div>
<a id="livedemo-teml-det" href="https://www.templatemonster.com/website-templates/41989.html">Template Details</a>
<div class="clear"></div>
<span id="pop_link2"></span>
<span id="livedemo-without-frame" class="js-btn link-click" data-href="https://livedemo00.template-help.com/wt_41989">Preview without Frame</span>
<div class="clear"></div>
<span id="pop_link3"></span>
<span id="livedemo-view-sim" class="js-btn link-click" data-href="https://www.templatemonster.com/templates.php?similar-to=41989">View Similar Templates</span>
</div>
</div>
<div class="js-demo-bar-phone demo-bar-phone block-hidden">
<span>Can I help you choose a product?</span>
<a href="tel:+18555445335"><span class="phone-inner">1 855 544 5335</span></a>
</div>
<div class="responsive-block">
<ul id="responsivator">
<li class="response active" id="desktop"></li>
<li class="response" id="tablet-portrait"></li>
<li class="response" id="tablet-landscape"></li>
<li class="response" id="iphone-portrait"></li>
<li class="response" id="iphone-landscape"></li>
<li id="qr" class="qr">
<div class="_slide-down1 view_options">
<div id="qr-open" class="js-popup-open" data-popupi="js-popupi-2"><span></span>
</div>
<div id="qr-content" class="clearfix js-popup-content js-popupi-2" style="display:none">
<div class="img-wrapper">
<div class="tm-icon icon-cross icon-close"></div>
<img src="https://chart.googleapis.com/chart?cht=qr&amp;chs=180&amp;chl=https%3A%2F%2Flivedemo00.template-help.com%2Fwt_41989%3Futm_source%3Ddirect%26utm_medium%3Ddemo%26utm_campaign%3Dqr-code&amp;choe=UTF-8&amp;chld=M|0" alt="" />
</div>
<div id="qr-text">Preview on mobile device</div>
<div class="clear"></div>
</div>
</div>
</li>
</ul>
</div>
<div class="topbar_info">
<div class="js-subscription-after">

</div>
<div class="btn-group buy_now vertical-alignment">
<span class="  button btn-important tm-icon icon-cart js-demo-buy-button js-btn" data-href="https://www.templatemonster.com/cart.php?add=41989&amp;price_variant=regular" data-default-variant="regular" data-variant='regular' data-price='69' data-full_price='69' id="livedemo-buy-now-variant-regular">
<span class="btn-inner">Buy Now</span>
</span>
<span class=" js-none button btn-important tm-icon icon-cart js-demo-buy-button js-btn" data-href="https://www.templatemonster.com/cart.php?add=41989&amp;price_variant=installation" data-variant='installation' data-price='138' data-full_price='138' id="livedemo-buy-now-variant-installation">
<span class="btn-inner">Buy Now</span>
</span>
<span class=" js-none button btn-important tm-icon icon-cart js-demo-buy-button js-btn" data-href="https://www.templatemonster.com/cart.php?add=41989&amp;price_variant=exclusive" data-variant='exclusive' data-price='4100' data-full_price='4100' id="livedemo-buy-now-variant-exclusive">
<span class="btn-inner">Buy Now</span>
</span>
<span id="livedemo-go-to-cart-regular" class="button btn-important tm-icon icon-cart already-get js-none js-btn" data-href="https://www.templatemonster.com/cart.php">
<span class="btn-inner">Go to Cart</span>
</span>
</div>
<span class="price-item-title js-cart-item-info js-none">Item 41989 in cart.</span>
<div id="livedemo-offer-trigger" class="price-wrapper regular js-offer-trigger js-popup-open dropdown-arrow" data-popupi="js-popupi-3">
<span class="price-title">Single Site License </span>
<span class="price  js-price js-price-topbar hide-price">$69</span>
<span id="buy-button" class="icon-arrow-small-down" data-toggle="dropdown"></span>
</div>
<div class="box-drop js-popup-content js-popupi-3" id="dropdown">
<ul class="list-drop">
<li id="livedemo-licence-regular" class="js-demo-list-li" data-default-variant="regular" data-variant='regular'>
<span class="js-drop" data-href="https://www.templatemonster.com/cart.php?add=41989&amp;price_variant=regular">
Single Site License
<span class="price js-price hide-price" data-discount="69" data-price="69"> $69</span>
</span>
<span class="recommended"></span>
<div class="popover rd-notice rd-notice-tooltip rd-notice-position-bottom">
<div class="popover-content rd-notice-content">
Under a Single Site License for the template you are granted a non-exclusive non-transferable permission to use the template on a single domain.
</div>
</div>
</li>
<li id="livedemo-licence-installation" class="js-demo-list-li" data-variant='installation'>
<span class="js-drop" data-href="https://www.templatemonster.com/cart.php?add=41989&amp;price_variant=installation">
Developer's License
<span class="price js-price hide-price" data-discount="138" data-price="138"> $138</span>
</span>
<div class="popover rd-notice rd-notice-tooltip rd-notice-position-bottom">
<div class="popover-content rd-notice-content">
Under Developer's License you are granted a non-exclusive permission to use the template on up to 5 domains.
</div>
</div>
</li>
<li id="livedemo-licence-exclusive" class="js-demo-list-li" data-variant='exclusive'>
<span class="js-drop" data-href="https://www.templatemonster.com/cart.php?add=41989&amp;price_variant=exclusive">
Buyout License
<span class="price js-price hide-price" data-discount="4100" data-price="4100"> $4,100</span>
</span>
<div class="popover rd-notice rd-notice-tooltip rd-notice-position-bottom">
<div class="popover-content rd-notice-content">
A Buyout License ensures that you are the last buyer/licensee of the template. You are granted a non-exclusive non-transferable permission to use the template on multiple domains.
</div>
</div>
</li>
</ul>
</div>
<div class='topbar_info__wrapper js-topbar_info__wrapper'>

</div>
<div class="clear" style="clear: both;"></div>
</div>
</div>
</div>
</div>

<span id="livedemo-toolbar-toggle" class="trigger icon-arrow-small-up"></span>

</div>
<div id="iframelive" class="">
<div id="frameWrapper">
<iframe id="frame" src='' data-src="https://livedemo00.template-help.com/wt_41989">
			[Your user agent does not support frames or is currently configured not to display frames. However, you may visit the related document.]
			</iframe>
</div>
</div>
<script type="text/javascript" id="zone_18">
  window.banner_zone = window.banner_zone || [];
  window.banner_zone.push({
    id: 18,
    zone: "<div class='js-revive-banner-container'><ins data-revive-zoneid='18' data-revive-id='5dba4d01a92de7101be5c5e6e1630dfe'></ins></div>"
  });
</script>
<script>
	//this function will work cross-browser for loading scripts asynchronously
	function loadScript(src, isasync, callback) {
		var s,
			r,
			t;
		r = false;
		s = document.createElement('script');
		s.type = 'text/javascript';
		s.src = src;
		s.async = isasync;
		s.onload = s.onreadystatechange = function () {
//console.log( this.readyState ); //uncomment this line to see which ready states are called.
			if (!r && (!this.readyState || this.readyState == 'complete')) {
				r = true;
				if ("undefined" != typeof callback) {
					callback();
				}
			}
		};
		t = document.getElementsByTagName('script')[0];
		t.parentNode.insertBefore(s, t);
	}
	window.isJsLoaded = false;

	function loadIncJs() {
		loadScript("https://s.tmimgcdn.com/js/tm/frontend/indclude-js.min.js?d=ef285b7", false, loadAllJS);
	}

	function toLoadJsList(src) {
		if (typeof window.jsList !== "undefined") {
			window.jsList.push(src);
		} else {
			window.jsList = [src]
		}
	}

	function loadAllJS() {
		var dependencyLibs = [
						"https://s.tmimgcdn.com/js/varnish.compiled.application.en.js?d=ef285b7",
					  'https://s.tmimgcdn.com/js/plasma-pocket-react/monsterBundle.js?d=ef285b7'
		];
		if (window.jsList) {
			dependencyLibs = dependencyLibs.concat(window.jsList);
		}
		var indcludeJsLoader = new Tm.IndcludeJs(dependencyLibs, false);
		indcludeJsLoader.add(function (state) {
			$(document).trigger("TM_JS_LOADED");
//			$(document).trigger("ready");
			$(window).trigger("load");
            var event;
			var eventName = 'TM_JS_LOADED_NATIVE';
			if (typeof(CustomEvent) === 'function') {
				event = new CustomEvent(eventName);
			} else {
				event = document.createEvent('CustomEvent');
				event.initEvent(eventName, true, true);
			}
            document.dispatchEvent(event);
		});
	}
	window.onload = function () {
		if (!window.isJsLoaded) {
			window.isJsLoaded = true;
			loadCSS("https://s.tmimgcdn.com/css/svg-icons.css?d=7b26598");
			            	loadScript("https://www.templatemonster.com/js/config.js", true, loadIncJs);
            		}
	};

</script>

<script type="text/javascript" id="banner_zone_init">
	window.banner_zone_init = 'https://r.templatemonster.com/dl/1asyncjs.php'
</script>
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js" data-pin-build="parsePins">
</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"72d7dcce33","applicationID":"68712044,11369496","transactionName":"ZV1TZ0FTVkFVWkwKXlwXckZARldfG3BWB1RKe15dR0BXXlhcSlkLVl1cXA==","queueTime":0,"applicationTime":697,"atts":"SRpEEQlJRR4WWBpZSk9F","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
