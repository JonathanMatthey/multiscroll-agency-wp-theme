jQuery.easing.jswing=jQuery.easing.swing;
jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,a,c,b,d){return jQuery.easing[jQuery.easing.def](e,a,c,b,d)},easeInQuad:function(e,a,c,b,d){return b*(a/=d)*a+c},easeOutQuad:function(e,a,c,b,d){return-b*(a/=d)*(a-2)+c},easeInOutQuad:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a+c;return-b/2*(--a*(a-2)-1)+c},easeInCubic:function(e,a,c,b,d){return b*(a/=d)*a*a+c},easeOutCubic:function(e,a,c,b,d){return b*((a=a/d-1)*a*a+1)+c},easeInOutCubic:function(e,a,c,b,d){if((a/=d/2)<1)return b/
2*a*a*a+c;return b/2*((a-=2)*a*a+2)+c},easeInQuart:function(e,a,c,b,d){return b*(a/=d)*a*a*a+c},easeOutQuart:function(e,a,c,b,d){return-b*((a=a/d-1)*a*a*a-1)+c},easeInOutQuart:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a*a*a+c;return-b/2*((a-=2)*a*a*a-2)+c},easeInQuint:function(e,a,c,b,d){return b*(a/=d)*a*a*a*a+c},easeOutQuint:function(e,a,c,b,d){return b*((a=a/d-1)*a*a*a*a+1)+c},easeInOutQuint:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a*a*a*a+c;return b/2*((a-=2)*a*a*a*a+2)+c},easeInSine:function(e,
a,c,b,d){return-b*Math.cos(a/d*(Math.PI/2))+b+c},easeOutSine:function(e,a,c,b,d){return b*Math.sin(a/d*(Math.PI/2))+c},easeInOutSine:function(e,a,c,b,d){return-b/2*(Math.cos(Math.PI*a/d)-1)+c},easeInExpo:function(e,a,c,b,d){return a==0?c:b*Math.pow(2,10*(a/d-1))+c},easeOutExpo:function(e,a,c,b,d){return a==d?c+b:b*(-Math.pow(2,-10*a/d)+1)+c},easeInOutExpo:function(e,a,c,b,d){if(a==0)return c;if(a==d)return c+b;if((a/=d/2)<1)return b/2*Math.pow(2,10*(a-1))+c;return b/2*(-Math.pow(2,-10*--a)+2)+c},
easeInCirc:function(e,a,c,b,d){return-b*(Math.sqrt(1-(a/=d)*a)-1)+c},easeOutCirc:function(e,a,c,b,d){return b*Math.sqrt(1-(a=a/d-1)*a)+c},easeInOutCirc:function(e,a,c,b,d){if((a/=d/2)<1)return-b/2*(Math.sqrt(1-a*a)-1)+c;return b/2*(Math.sqrt(1-(a-=2)*a)+1)+c},easeInElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d)==1)return c+b;f||(f=d*0.3);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);return-(g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f))+c},easeOutElastic:function(e,
a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d)==1)return c+b;f||(f=d*0.3);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);return g*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d/2)==2)return c+b;f||(f=d*0.3*1.5);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);if(a<1)return-0.5*g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+c;return g*Math.pow(2,-10*(a-=1))*Math.sin((a*
d-e)*2*Math.PI/f)*0.5+b+c},easeInBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;return b*(a/=d)*a*((f+1)*a-f)+c},easeOutBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;return b*((a=a/d-1)*a*((f+1)*a+f)+1)+c},easeInOutBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;if((a/=d/2)<1)return b/2*a*a*(((f*=1.525)+1)*a-f)+c;return b/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+c},easeInBounce:function(e,a,c,b,d){return b-jQuery.easing.easeOutBounce(e,d-a,0,b,d)+c},easeOutBounce:function(e,a,c,b,d){return(a/=
d)<1/2.75?b*7.5625*a*a+c:a<2/2.75?b*(7.5625*(a-=1.5/2.75)*a+0.75)+c:a<2.5/2.75?b*(7.5625*(a-=2.25/2.75)*a+0.9375)+c:b*(7.5625*(a-=2.625/2.75)*a+0.984375)+c},easeInOutBounce:function(e,a,c,b,d){if(a<d/2)return jQuery.easing.easeInBounce(e,a*2,0,b,d)*0.5+c;return jQuery.easing.easeOutBounce(e,a*2-d,0,b,d)*0.5+b*0.5+c}});

/**
 * jquery.slimmenu.js
 * http://adnantopal.github.io/slimmenu/
 * Author: @adnantopal
 * Copyright 2013, Adnan Topal (atopal.com)
 * Licensed under the MIT license.
 */
(function(e,c,a,g){var d="slimmenu",f={resizeWidth:"768",collapserTitle:"Main Menu",animSpeed:"medium",easingEffect:null,indentChildren:false,childrenIndenter:"&nbsp;&nbsp;"};function b(i,h){this.element=i;this.$elem=e(this.element);this.options=e.extend({},f,h);this.init()}b.prototype={init:function(){var h=this.options,j=this.$elem,i='<div class="menu-collapser">'+h.collapserTitle+'<div class="collapse-button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div></div>',k;j.before(i);k=j.prev(".menu-collapser");j.on("click",".sub-collapser",function(m){m.preventDefault();m.stopPropagation();var l=e(this).closest("li");if(e(this).hasClass("expanded")){e(this).removeClass("expanded");e(this).find("i").html("&#9660;");l.find(">ul").slideUp(h.animSpeed,h.easingEffect)}else{e(this).addClass("expanded");e(this).find("i").html("&#9650;");l.find(">ul").slideDown(h.animSpeed,h.easingEffect)}});k.on("click",".collapse-button",function(l){l.preventDefault();j.slideToggle(h.animSpeed,h.easingEffect)});this.resizeMenu({data:{el:this.element,options:this.options}});e(c).on("resize",{el:this.element,options:this.options},this.resizeMenu)},resizeMenu:function(k){var l=e(c),h=k.data.options,i=e(k.data.el),j=e("body").find(".menu-collapser");i.find("li").each(function(){if(e(this).has("ul").length){if(e(this).has(".sub-collapser").length){e(this).children(".sub-collapser i").html("&#9660;")}else{e(this).append('<span class="sub-collapser"><i>&#9660;</i></span>')}}e(this).children("ul").hide();e(this).find(".sub-collapser").removeClass("expanded").children("i").html("&#9660;")});if(h.resizeWidth>=l.width()){if(h.indentChildren){i.find("ul").each(function(){var m=e(this).parents("ul").length;if(!e(this).children("li").children("a").has("i").length){e(this).children("li").children("a").prepend(b.prototype.indent(m,h))}})}i.find("li").has("ul").off("mouseenter mouseleave");i.addClass("collapsed").hide();j.show()}else{i.find("li").has("ul").on("mouseenter",function(){e(this).find(">ul").stop().slideDown(h.animSpeed,h.easingEffect)}).on("mouseleave",function(){e(this).find(">ul").stop().slideUp(h.animSpeed,h.easingEffect)});i.find("li > a > i").remove();i.removeClass("collapsed").show();j.hide()}},indent:function(k,j){var h="";for(var l=0;l<k;l++){h+=j.childrenIndenter}return"<i>"+h+"</i>"}};e.fn[d]=function(h){return this.each(function(){if(!e.data(this,"plugin_"+d)){e.data(this,"plugin_"+d,new b(this,h))}})}})(jQuery,window,document);

/*! device.js 0.1.57 */
(function(){var a,b,c,d,e,f,g,h,i;window.device={},b=window.document.documentElement,i=window.navigator.userAgent.toLowerCase(),device.ios=function(){return device.iphone()||device.ipod()||device.ipad()},device.iphone=function(){return c("iphone")},device.ipod=function(){return c("ipod")},device.ipad=function(){return c("ipad")},device.android=function(){return c("android")},device.androidPhone=function(){return device.android()&&c("mobile")},device.androidTablet=function(){return device.android()&&!c("mobile")},device.blackberry=function(){return c("blackberry")||c("bb10")||c("rim")},device.blackberryPhone=function(){return device.blackberry()&&!c("tablet")},device.blackberryTablet=function(){return device.blackberry()&&c("tablet")},device.windows=function(){return c("windows")},device.windowsPhone=function(){return device.windows()&&c("phone")},device.windowsTablet=function(){return device.windows()&&c("touch")},device.fxos=function(){return c("(mobile; rv:")||c("(tablet; rv:")},device.fxosPhone=function(){return device.fxos()&&c("mobile")},device.fxosTablet=function(){return device.fxos()&&c("tablet")},device.mobile=function(){return device.androidPhone()||device.iphone()||device.ipod()||device.windowsPhone()||device.blackberryPhone()||device.fxosPhone()},device.tablet=function(){return device.ipad()||device.androidTablet()||device.blackberryTablet()||device.windowsTablet()||device.fxosTablet()},device.portrait=function(){return 90!==Math.abs(window.orientation)},device.landscape=function(){return 90===Math.abs(window.orientation)},c=function(a){return-1!==i.indexOf(a)},e=function(a){var c;return c=new RegExp(a,"i"),b.className.match(c)},a=function(a){return e(a)?void 0:b.className+=" "+a},g=function(a){return e(a)?b.className=b.className.replace(a,""):void 0},device.ios()?device.ipad()?a("ios ipad tablet"):device.iphone()?a("ios iphone mobile"):device.ipod()&&a("ios ipod mobile"):device.android()?device.androidTablet()?a("android tablet"):a("android mobile"):device.blackberry()?device.blackberryTablet()?a("blackberry tablet"):a("blackberry mobile"):device.windows()?device.windowsTablet()?a("windows tablet"):device.windowsPhone()?a("windows mobile"):a("desktop"):device.fxos()?device.fxosTablet()?a("fxos tablet"):a("fxos mobile"):a("desktop"),d=function(){return device.landscape()?(g("portrait"),a("landscape")):(g("landscape"),a("portrait"))},h="onorientationchange"in window,f=h?"orientationchange":"resize",window.addEventListener?window.addEventListener(f,d,!1):window.attachEvent?window.attachEvent(f,d):window[f]=d,d()}).call(this);

/**
 * Isotope Leak Free
 * 
 * https://github.com/khiltd/isotope-leak-free
 * 
 * Forked from Isotope v1.5.21 to stop crashing browsers.
 *
 * Original, crashy version by:
 *
 * http://isotope.metafizzy.co
 *
 * Commercial use requires one-time license fee
 * http://metafizzy.co/#licenses
 *
 * Copyright 2012 David DeSandro / Metafizzy
 */
(function(a,b,c){"use strict";var d=a.document,e=a.Modernizr,f=function(a){return a.charAt(0).toUpperCase()+a.slice(1)},g="Moz Webkit O Ms".split(" "),h=function(a){var b=d.documentElement.style,c;if(typeof b[a]=="string")return a;a=f(a);for(var e=0,h=g.length;e<h;e++){c=g[e]+a;if(typeof b[c]=="string")return c}},i=h("transform"),j=h("transitionProperty"),k={csstransforms:function(){return!!i},csstransforms3d:function(){var a=!!h("perspective");if(a){var c=" -o- -moz- -ms- -webkit- -khtml- ".split(" "),d="@media ("+c.join("transform-3d),(")+"modernizr)",e=b("<style>"+d+"{#modernizr{height:3px}}"+"</style>").appendTo("head"),f=b('<div id="modernizr" />').appendTo("html");a=f.height()===3,f.remove(),e.remove()}return a},csstransitions:function(){return!!j}},l;if(e)for(l in k)e.hasOwnProperty(l)||e.addTest(l,k[l]);else{e=a.Modernizr={_version:"1.6ish: miniModernizr for Isotope"};var m=" ",n;for(l in k)n=k[l](),e[l]=n,m+=" "+(n?"":"no-")+l;b("html").addClass(m)}if(e.csstransforms){var o=e.csstransforms3d?{translate:function(a){return"translate3d("+a[0]+"px, "+a[1]+"px, 0) "},scale:function(a){return"scale3d("+a+", "+a+", 1) "}}:{translate:function(a){return"translate("+a[0]+"px, "+a[1]+"px) "},scale:function(a){return"scale("+a+") "}},p=function(a,c,d){var e=b.data(a,"isoTransform")||{},f={},g,h={},j;f[c]=d,b.extend(e,f);for(g in e)j=e[g],h[g]=o[g](j);var k=h.translate||"",l=h.scale||"",m=k+l;b.data(a,"isoTransform",e),a.style[i]=m};b.cssNumber.scale=!0,b.cssHooks.scale={set:function(a,b){p(a,"scale",b)},get:function(a,c){var d=b.data(a,"isoTransform");return d&&d.scale?d.scale:1}},b.fx.step.scale=function(a){b.cssHooks.scale.set(a.elem,a.now+a.unit)},b.cssNumber.translate=!0,b.cssHooks.translate={set:function(a,b){p(a,"translate",b)},get:function(a,c){var d=b.data(a,"isoTransform");return d&&d.translate?d.translate:[0,0]}}}var q,r;e.csstransitions&&(q={WebkitTransitionProperty:"webkitTransitionEnd",MozTransitionProperty:"transitionend",OTransitionProperty:"oTransitionEnd otransitionend",transitionProperty:"transitionend"}[j],r=h("transitionDuration"));var s=b.event,t;s.special.smartresize={setup:function(){b(this).bind("resize",s.special.smartresize.handler)},teardown:function(){b(this).unbind("resize",s.special.smartresize.handler)},handler:function(a,b){var c=this,d=arguments;a.type="smartresize",t&&clearTimeout(t),t=setTimeout(function(){jQuery.event.handle.apply(c,d)},b==="execAsap"?0:100)}},b.fn.smartresize=function(a){return a?this.bind("smartresize",a):this.trigger("smartresize",["execAsap"])},b.Isotope=function(a,c,d){this.element=b(c),this._create(a),this._init(d)};var u=["width","height"],v=b(a);b.Isotope.settings={resizable:!0,layoutMode:"masonry",containerClass:"isotope",itemClass:"isotope-item",hiddenClass:"isotope-hidden",hiddenStyle:{opacity:0,scale:.001},visibleStyle:{opacity:1,scale:1},containerStyle:{position:"relative",overflow:"hidden"},animationEngine:"best-available",animationOptions:{queue:!1,duration:800},sortBy:"original-order",sortAscending:!0,resizesContainer:!0,transformsEnabled:!0,itemPositionDataEnabled:!1},b.Isotope.prototype={_create:function(a){this.options=b.extend({},b.Isotope.settings,a),this.styleQueue=[],this.elemCount=0;var c=this.element[0].style;this.originalStyle={};var d=u.slice(0);for(var e in this.options.containerStyle)d.push(e);for(var f=0,g=d.length;f<g;f++)e=d[f],this.originalStyle[e]=c[e]||"";this.element.css(this.options.containerStyle),this._updateAnimationEngine(),this._updateUsingTransforms();var h={"original-order":function(a,b){return b.elemCount++,b.elemCount},random:function(){return Math.random()}};this.options.getSortData=b.extend(this.options.getSortData,h),this.reloadItems(),this.offset={left:parseInt(this.element.css("padding-left")||0,10),top:parseInt(this.element.css("padding-top")||0,10)};var i=this;setTimeout(function(){i.element.addClass(i.options.containerClass)},0),this.options.resizable&&v.bind("smartresize.isotope",function(){i.resize()}),this.element.delegate("."+this.options.hiddenClass,"click",function(){return!1})},_expandoSafe:function(a){return delete a.prevObject,a},_getAtoms:function(a){var b=this.options.itemSelector,c=b?a.filter(b).add(a.find(b)):a,d={position:"absolute"};return this.usingTransforms&&(d.left=0,d.top=0),c.css(d).addClass(this.options.itemClass),this.updateSortData(c,!0),c},_init:function(a){this.$filteredAtoms=this._expandoSafe(this._filter(this.$allAtoms)),this._sort(),this.reLayout(a)},option:function(a){if(b.isPlainObject(a)){this.options=b.extend(!0,this.options,a);var c;for(var d in a)c="_update"+f(d),this[c]&&this[c]()}},_updateAnimationEngine:function(){var a=this.options.animationEngine.toLowerCase().replace(/[ _\-]/g,""),b;switch(a){case"css":case"none":b=!1;break;case"jquery":b=!0;break;default:b=!e.csstransitions}this.isUsingJQueryAnimation=b,this._updateUsingTransforms()},_updateTransformsEnabled:function(){this._updateUsingTransforms()},_updateUsingTransforms:function(){var a=this.usingTransforms=this.options.transformsEnabled&&e.csstransforms&&e.csstransitions&&!this.isUsingJQueryAnimation;a||(delete this.options.hiddenStyle.scale,delete this.options.visibleStyle.scale),this.getPositionStyles=a?this._translate:this._positionAbs},_filter:function(a){var b=this.options.filter===""?"*":this.options.filter;if(!b)return a;var c=this.options.hiddenClass,d="."+c,e=a.filter(d),f=e;if(b!=="*"){f=e.filter(b);var g=a.not(d).not(b).addClass(c);this.styleQueue.push({$el:g,style:this.options.hiddenStyle})}return this.styleQueue.push({$el:f,style:this.options.visibleStyle}),f.removeClass(c),a.filter(b)},updateSortData:function(a,c){var d=this,e=this.options.getSortData,f,g;a.each(function(){f=b(this),g={};for(var a in e)!c&&a==="original-order"?g[a]=b.data(this,"isotope-sort-data")[a]:g[a]=e[a](f,d);b.data(this,"isotope-sort-data",g)})},_sort:function(){var a=this.options.sortBy,b=this._getSorter,c=this.options.sortAscending?1:-1,d=function(d,e){var f=b(d,a),g=b(e,a);return f===g&&a!=="original-order"&&(f=b(d,"original-order"),g=b(e,"original-order")),(f>g?1:f<g?-1:0)*c};this.$filteredAtoms.sort(d)},_getSorter:function(a,c){return b.data(a,"isotope-sort-data")[c]},_translate:function(a,b){return{translate:[a,b]}},_positionAbs:function(a,b){return{left:a,top:b}},_pushPosition:function(a,b,c){b=Math.round(b+this.offset.left),c=Math.round(c+this.offset.top);var d=this.getPositionStyles(b,c);this.styleQueue.push({$el:a,style:d}),this.options.itemPositionDataEnabled&&a.data("isotope-item-position",{x:b,y:c})},layout:function(a,b){var c=this.options.layoutMode;this["_"+c+"Layout"](a);if(this.options.resizesContainer){var d=this["_"+c+"GetContainerSize"]();this.styleQueue.push({$el:this.element,style:d})}this._processStyleQueue(a,b),this.isLaidOut=!0},_processStyleQueue:function(a,c){var d=this.isLaidOut?this.isUsingJQueryAnimation?"animate":"css":"css",f=this.options.animationOptions,g=this.options.onLayout,h,i,j,k;i=function(a,b){b.$el[d](b.style,f)};if(this._isInserting&&this.isUsingJQueryAnimation)i=function(a,b){h=b.$el.hasClass("no-transition")?"css":d,b.$el[h](b.style,f)};else if(c||g||f.complete){var l=!1,m=[c,g,f.complete],n=this;j=!0,k=function(){if(l)return;var b;for(var c=0,d=m.length;c<d;c++)b=m[c],typeof b=="function"&&b.call(n.element,a,n);l=!0};if(this.isUsingJQueryAnimation&&d==="animate")f.complete=k,j=!1;else if(e.csstransitions){var o=0,p=this.styleQueue[0],s=p&&p.$el,t;while(!s||!s.length){t=this.styleQueue[o++];if(!t)return;s=t.$el}var u=parseFloat(getComputedStyle(s[0])[r]);u>0&&(i=function(a,b){b.$el[d](b.style,f).one(q,k)},j=!1)}}b.each(this.styleQueue,i),j&&k(),this.styleQueue=[]},resize:function(){this["_"+this.options.layoutMode+"ResizeChanged"]()&&this.reLayout()},reLayout:function(a){this["_"+this.options.layoutMode+"Reset"](),this.layout(this.$filteredAtoms,a)},addItems:function(a,b){var c=this._getAtoms(a);this.$allAtoms=this._expandoSafe(this.$allAtoms.add(c)),b&&b(c)},insert:function(a,b){this.element.append(a);var c=this;this.addItems(a,function(a){var d=c._filter(a);c._addHideAppended(d),c._sort(),c.reLayout(),c._revealAppended(d,b)})},appended:function(a,b){var c=this;this.addItems(a,function(a){c._addHideAppended(a),c.layout(a),c._revealAppended(a,b)})},_addHideAppended:function(a){this.$filteredAtoms=this._expandoSafe(this.$filteredAtoms.add(a)),a.addClass("no-transition"),this._isInserting=!0,this.styleQueue.push({$el:a,style:this.options.hiddenStyle})},_revealAppended:function(a,b){var c=this;setTimeout(function(){a.removeClass("no-transition"),c.styleQueue.push({$el:a,style:c.options.visibleStyle}),c._isInserting=!1,c._processStyleQueue(a,b)},10)},reloadItems:function(){this.$allAtoms=this._expandoSafe(this._getAtoms(this.element.children()))},remove:function(a,b){this.$allAtoms=this._expandoSafe(this.$allAtoms.not(a)),this.$filteredAtoms=this._expandoSafe(this.$filteredAtoms.not(a));var c=this,d=function(){a.remove(),b&&b.call(c.element)};a.filter(":not(."+this.options.hiddenClass+")").length?(this.styleQueue.push({$el:a,style:this.options.hiddenStyle}),this._sort(),this.reLayout(d)):d()},shuffle:function(a){this.updateSortData(this.$allAtoms),this.options.sortBy="random",this._sort(),this.reLayout(a)},destroy:function(){var a=this.usingTransforms,b=this.options;this.$allAtoms.removeClass(b.hiddenClass+" "+b.itemClass).each(function(){var b=this.style;b.position="",b.top="",b.left="",b.opacity="",a&&(b[i]="")});var c=this.element[0].style;for(var d in this.originalStyle)c[d]=this.originalStyle[d];this.element.unbind(".isotope").undelegate("."+b.hiddenClass,"click").removeClass(b.containerClass).removeData("isotope"),v.unbind(".isotope")},_getSegments:function(a){var b=this.options.layoutMode,c=a?"rowHeight":"columnWidth",d=a?"height":"width",e=a?"rows":"cols",g=this.element[d](),h,i=this.options[b]&&this.options[b][c]||this.$filteredAtoms["outer"+f(d)](!0)||g;h=Math.floor(g/i),h=Math.max(h,1),this[b][e]=h,this[b][c]=i},_checkIfSegmentsChanged:function(a){var b=this.options.layoutMode,c=a?"rows":"cols",d=this[b][c];return this._getSegments(a),this[b][c]!==d},_masonryReset:function(){this.masonry={},this._getSegments();var a=this.masonry.cols;this.masonry.colYs=[];while(a--)this.masonry.colYs.push(0)},_masonryLayout:function(a){var c=this,d=c.masonry;a.each(function(){var a=b(this),e=Math.ceil(a.outerWidth(!0)/d.columnWidth);e=Math.min(e,d.cols);if(e===1)c._masonryPlaceBrick(a,d.colYs);else{var f=d.cols+1-e,g=[],h,i;for(i=0;i<f;i++)h=d.colYs.slice(i,i+e),g[i]=Math.max.apply(Math,h);c._masonryPlaceBrick(a,g)}})},_masonryPlaceBrick:function(a,b){var c=Math.min.apply(Math,b),d=0;for(var e=0,f=b.length;e<f;e++)if(b[e]===c){d=e;break}var g=this.masonry.columnWidth*d,h=c;this._pushPosition(a,g,h);var i=c+a.outerHeight(!0),j=this.masonry.cols+1-f;for(e=0;e<j;e++)this.masonry.colYs[d+e]=i},_masonryGetContainerSize:function(){var a=Math.max.apply(Math,this.masonry.colYs);return{height:a}},_masonryResizeChanged:function(){return this._checkIfSegmentsChanged()},_fitRowsReset:function(){this.fitRows={x:0,y:0,height:0}},_fitRowsLayout:function(a){var c=this,d=this.element.width(),e=this.fitRows;a.each(function(){var a=b(this),f=a.outerWidth(!0),g=a.outerHeight(!0);e.x!==0&&f+e.x>d&&(e.x=0,e.y=e.height),c._pushPosition(a,e.x,e.y),e.height=Math.max(e.y+g,e.height),e.x+=f})},_fitRowsGetContainerSize:function(){return{height:this.fitRows.height}},_fitRowsResizeChanged:function(){return!0},_cellsByRowReset:function(){this.cellsByRow={index:0},this._getSegments(),this._getSegments(!0)},_cellsByRowLayout:function(a){var c=this,d=this.cellsByRow;a.each(function(){var a=b(this),e=d.index%d.cols,f=Math.floor(d.index/d.cols),g=(e+.5)*d.columnWidth-a.outerWidth(!0)/2,h=(f+.5)*d.rowHeight-a.outerHeight(!0)/2;c._pushPosition(a,g,h),d.index++})},_cellsByRowGetContainerSize:function(){return{height:Math.ceil(this.$filteredAtoms.length/this.cellsByRow.cols)*this.cellsByRow.rowHeight+this.offset.top}},_cellsByRowResizeChanged:function(){return this._checkIfSegmentsChanged()},_straightDownReset:function(){this.straightDown={y:0}},_straightDownLayout:function(a){var c=this;a.each(function(a){var d=b(this);c._pushPosition(d,0,c.straightDown.y),c.straightDown.y+=d.outerHeight(!0)})},_straightDownGetContainerSize:function(){return{height:this.straightDown.y}},_straightDownResizeChanged:function(){return!0},_masonryHorizontalReset:function(){this.masonryHorizontal={},this._getSegments(!0);var a=this.masonryHorizontal.rows;this.masonryHorizontal.rowXs=[];while(a--)this.masonryHorizontal.rowXs.push(0)},_masonryHorizontalLayout:function(a){var c=this,d=c.masonryHorizontal;a.each(function(){var a=b(this),e=Math.ceil(a.outerHeight(!0)/d.rowHeight);e=Math.min(e,d.rows);if(e===1)c._masonryHorizontalPlaceBrick(a,d.rowXs);else{var f=d.rows+1-e,g=[],h,i;for(i=0;i<f;i++)h=d.rowXs.slice(i,i+e),g[i]=Math.max.apply(Math,h);c._masonryHorizontalPlaceBrick(a,g)}})},_masonryHorizontalPlaceBrick:function(a,b){var c=Math.min.apply(Math,b),d=0;for(var e=0,f=b.length;e<f;e++)if(b[e]===c){d=e;break}var g=c,h=this.masonryHorizontal.rowHeight*d;this._pushPosition(a,g,h);var i=c+a.outerWidth(!0),j=this.masonryHorizontal.rows+1-f;for(e=0;e<j;e++)this.masonryHorizontal.rowXs[d+e]=i},_masonryHorizontalGetContainerSize:function(){var a=Math.max.apply(Math,this.masonryHorizontal.rowXs);return{width:a}},_masonryHorizontalResizeChanged:function(){return this._checkIfSegmentsChanged(!0)},_fitColumnsReset:function(){this.fitColumns={x:0,y:0,width:0}},_fitColumnsLayout:function(a){var c=this,d=this.element.height(),e=this.fitColumns;a.each(function(){var a=b(this),f=a.outerWidth(!0),g=a.outerHeight(!0);e.y!==0&&g+e.y>d&&(e.x=e.width,e.y=0),c._pushPosition(a,e.x,e.y),e.width=Math.max(e.x+f,e.width),e.y+=g})},_fitColumnsGetContainerSize:function(){return{width:this.fitColumns.width}},_fitColumnsResizeChanged:function(){return!0},_cellsByColumnReset:function(){this.cellsByColumn={index:0},this._getSegments(),this._getSegments(!0)},_cellsByColumnLayout:function(a){var c=this,d=this.cellsByColumn;a.each(function(){var a=b(this),e=Math.floor(d.index/d.rows),f=d.index%d.rows,g=(e+.5)*d.columnWidth-a.outerWidth(!0)/2,h=(f+.5)*d.rowHeight-a.outerHeight(!0)/2;c._pushPosition(a,g,h),d.index++})},_cellsByColumnGetContainerSize:function(){return{width:Math.ceil(this.$filteredAtoms.length/this.cellsByColumn.rows)*this.cellsByColumn.columnWidth}},_cellsByColumnResizeChanged:function(){return this._checkIfSegmentsChanged(!0)},_straightAcrossReset:function(){this.straightAcross={x:0}},_straightAcrossLayout:function(a){var c=this;a.each(function(a){var d=b(this);c._pushPosition(d,c.straightAcross.x,0),c.straightAcross.x+=d.outerWidth(!0)})},_straightAcrossGetContainerSize:function(){return{width:this.straightAcross.x}},_straightAcrossResizeChanged:function(){return!0}},b.fn.imagesLoaded=function(a){function h(){a.call(c,d)}function i(a){var c=a.target;c.src!==f&&b.inArray(c,g)===-1&&(g.push(c),--e<=0&&(setTimeout(h),d.unbind(".imagesLoaded",i)))}var c=this,d=c.find("img").add(c.filter("img")),e=d.length,f="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",g=[];return e||h(),d.bind("load.imagesLoaded error.imagesLoaded",i).each(function(){var a=this.src;this.src=f,this.src=a}),c};var w=function(b){a.console&&a.console.error(b)};b.fn.isotope=function(a,c){if(typeof a=="string"){var d=Array.prototype.slice.call(arguments,1);this.each(function(){var c=b.data(this,"isotope");if(!c){w("cannot call methods on isotope prior to initialization; attempted to call method '"+a+"'");return}if(!b.isFunction(c[a])||a.charAt(0)==="_"){w("no such method '"+a+"' for isotope instance");return}c[a].apply(c,d)})}else this.each(function(){var d=b.data(this,"isotope");d?(d.option(a),d._init(c)):b.data(this,"isotope",new b.Isotope(a,this,c))});return this}})(window,jQuery);

/*
Plugin: jQuery Parallax
Version 1.1.3
Author: Ian Lunn
Twitter: @IanLunn
Author URL: http://www.ianlunn.co.uk/
Plugin URL: http://www.ianlunn.co.uk/plugins/jquery-parallax/

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

(function( $ ){
	var $window = jQuery(window);
	var windowHeight = $window.height();

	$window.resize(function () {
		windowHeight = $window.height();
	});

	jQuery.fn.parallax = function(xpos, speedFactor, outerHeight) {
		var $this = jQuery(this);
		var getHeight;
		var firstTop;
		var paddingTop = 0;
		
		//get the starting position of each element to have parallax applied to it		
		$this.each(function(){
		    firstTop = $this.offset().top;
		});

		if (outerHeight) {
			getHeight = function(jqo) {
				return jqo.outerHeight(true);
			};
		} else {
			getHeight = function(jqo) {
				return jqo.height();
			};
		}
			
		// setup defaults if arguments aren't specified
		if (arguments.length < 1 || xpos === null) xpos = "50%";
		if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
		if (arguments.length < 3 || outerHeight === null) outerHeight = true;
		
		// function to be called whenever the window is scrolled or resized
		function update(){
			var pos = $window.scrollTop();				

			$this.each(function(){
				var $element = jQuery(this);
				var top = $element.offset().top;
				var height = getHeight($element);

				// Check if totally above or totally below viewport
				if (top + height < pos || top > pos + windowHeight) {
					return;
				}

				$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
			});
		}		

		$window.bind('scroll', update).resize(update);
		update();
	};
})(jQuery);

/**
 * multiscroll.js 0.1.0 Beta
 * https://github.com/alvarotrigo/multiscroll.js
 * MIT licensed
 *
 * Copyright (C) 2013 alvarotrigo.com - A project by Alvaro Trigo
 */
(function(a){a.fn.multiscroll=function(b){function w(){q=a(window).height();r();a.isFunction(b.afterResize)&&b.afterResize.call(this)}function r(){b.css3?(m(a(".ms-left"),"translate3d(0px, -"+a(".ms-left").find(".ms-section.active").position().top+"px, 0px)",!1),m(a(".ms-right"),"translate3d(0px, -"+a(".ms-right").find(".ms-section.active").position().top+"px, 0px)",!1)):(a(".ms-left").css("top",-a(".ms-left").find(".ms-section.active").position().top),a(".ms-right").css("top",-a(".ms-right").find(".ms-section.active").position().top))}
function f(c){var d=c.index(),s=a(".ms-right").find(".ms-section").eq(x-1-d),e=c.data("anchor"),f=a(".ms-left .ms-section.active").index()+1,g=y(c);h=!0;b.anchors.length&&(location.hash=e);var k={left:c.position().top,right:s.position().top};s.addClass("active").siblings().removeClass("active");c.addClass("active").siblings().removeClass("active");b.css3?(a.isFunction(b.onLeave)&&b.onLeave.call(this,f,d+1,g),c="translate3d(0px, -"+k.left+"px, 0px)",k="translate3d(0px, -"+k.right+"px, 0px)",m(a(".ms-left"),
c,!0),m(a(".ms-right"),k,!0),setTimeout(function(){a.isFunction(b.afterLoad)&&b.afterLoad.call(this,e,d+1);setTimeout(function(){h=!1},t)},b.scrollingSpeed)):(a.isFunction(b.onLeave)&&b.onLeave.call(this,f,d+1,g),a(".ms-left").animate({top:-k.left},b.scrollingSpeed,b.easing,function(){a.isFunction(b.afterLoad)&&b.afterLoad.call(this,e,d+1);setTimeout(function(){h=!1},t)}),a(".ms-right").animate({top:-k.right},b.scrollingSpeed,b.easing));lastScrolledDestiny=e;z(e);A(e,d)}function u(){document.addEventListener?
(document.addEventListener("mousewheel",g,!1),document.addEventListener("wheel",g,!1)):document.attachEvent("onmousewheel",g)}function g(c){c=window.event||c;c=Math.max(-1,Math.min(1,c.wheelDelta||-c.deltaY||-c.detail));h||(0>c?a.fn.multiscroll.moveSectionDown():a.fn.multiscroll.moveSectionUp());return!1}function m(c,a,b){c.toggleClass("ms-easing",b);c.css({"-webkit-transform":a,"-moz-transform":a,"-ms-transform":a,transform:a})}function A(c,d){b.navigation&&(a("#multiscroll-nav").find(".active").removeClass("active"),
c?a("#multiscroll-nav").find('a[href="#'+c+'"]').addClass("active"):a("#multiscroll-nav").find("li").eq(d).find("a").addClass("active"))}function z(c){b.menu&&(a(b.menu).find(".active").removeClass("active"),a(b.menu).find('[data-menuanchor="'+c+'"]').addClass("active"))}function y(c){var b=a(".ms-left .ms-section.active").index();c=c.index();return b>c?"up":"down"}function B(){var c=document.createElement("p"),a,b={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",
MozTransform:"-moz-transform",transform:"transform"};document.body.insertBefore(c,null);for(var e in b)void 0!==c.style[e]&&(c.style[e]="translate3d(1px,1px,1px)",a=window.getComputedStyle(c).getPropertyValue(b[e]));document.body.removeChild(c);return void 0!==a&&0<a.length&&"none"!==a}function C(a){var d=q;if(b.paddingTop||b.paddingBottom)a=parseInt(a.css("padding-top"))+parseInt(a.css("padding-bottom")),d=q-a;return d}function v(a){var b=[];window.navigator.msPointerEnabled?(b.y=a.pageY,b.x=a.pageX):
(b.y=a.touches[0].pageY,b.x=a.touches[0].pageX);return b}b=a.extend({verticalCentered:!0,scrollingSpeed:700,easing:"easeInQuart",menu:!1,sectionsColor:[],anchors:[],navigation:!1,navigationPosition:"right",navigationColor:"#000",navigationTooltips:[],loopBottom:!1,loopTop:!1,css3:!1,paddingTop:0,paddingBottom:0,fixedElements:null,normalScrollElements:null,keyboardScrolling:!0,touchSensitivity:5,afterLoad:null,onLeave:null,afterRender:null,afterResize:null},b);var t=600,x=a(".ms-left").find(".ms-section").length,
h=!1,l,q=a(window).height();u();a(document).off("touchstart MSPointerDown").on("touchstart MSPointerDown",function(a){n=v(a.originalEvent).y});a(document).off("touchmove MSPointerMove").on("touchmove MSPointerMove",function(c){var d=c.originalEvent;c.preventDefault();a(".ms-left .ms-section.active");h||(p=v(d).y,Math.abs(n-p)>a(window).height()/100*b.touchSensitivity&&(n>p?a.fn.multiscroll.moveSectionDown():p>n&&a.fn.multiscroll.moveSectionUp()))});b.css3&&(b.css3=B());a("html, body").css({overflow:"hidden",
height:"100%"});b.navigation&&(a("body").append('<div id="multiscroll-nav"><ul></ul></div>'),l=a("#multiscroll-nav"),l.css("color",b.navigationColor),l.addClass(b.navigationPosition));a(".ms-right, .ms-left").css({width:"50%",position:"absolute",height:"100%","-ms-touch-action":"none"});a(".ms-right").css({right:"0.1px",top:"0"});a(".ms-left").css({left:"0",top:"0"});a(".ms-left .ms-section, .ms-right .ms-section").each(function(){var c=a(this).index();(b.paddingTop||b.paddingBottom)&&a(this).css("padding",
b.paddingTop+" 0 "+b.paddingBottom+" 0");"undefined"!==typeof b.sectionsColor[c]&&a(this).css("background-color",b.sectionsColor[c]);"undefined"!==typeof b.anchors[c]&&a(this).attr("data-anchor",b.anchors[c]);if(b.verticalCentered){var d=a(this);d.addClass("ms-table").wrapInner('<div class="ms-tableCell" style="height: '+C(d)+'px" />')}a(this).closest(".ms-left").length&&b.navigation&&(d="",b.anchors.length&&(d=b.anchors[c]),c=b.navigationTooltips[c],"undefined"===typeof c&&(c=""),b.navigation&&l.find("ul").append('<li data-tooltip="'+
c+'"><a href="#'+d+'"><span></span></a></li>'))});a(".ms-right").html(a(".ms-right").find(".ms-section").get().reverse());a(".ms-left .ms-section, .ms-right .ms-section").each(function(){var c=a(this).index();a(this).css({height:"100%"});!c&&b.navigation&&l.find("li").eq(c).find("a").addClass("active")}).promise().done(function(){a(".ms-left .ms-section.active").length||(a(".ms-right").find(".ms-section").last().addClass("active"),a(".ms-left").find(".ms-section").first().addClass("active"));a.isFunction(b.afterRender)&&
b.afterRender.call(this);r();a(window).on("load",function(){var c=window.location.hash.replace("#",""),b=a('.ms-left .ms-section[data-anchor="'+c+'"]');c.length&&f(b)})});a(window).on("hashchange",function(){var c=window.location.hash.replace("#",""),b=a(".ms-left").find('[data-anchor="'+c+'"]');"undefined"!==typeof lastScrolledDestiny&&c===lastScrolledDestiny||f(b)});a(document).keydown(function(c){if(b.keyboardScrolling&&!h)switch(c.which){case 38:case 33:a.fn.multiscroll.moveSectionUp();break;
case 40:case 34:a.fn.multiscroll.moveSectionDown()}});a(document).mousedown(function(a){if(1==a.button)return a.preventDefault(),!1});a(document).on("click","#multiscroll-nav a",function(c){c.preventDefault();c=a(this).parent().index();f(a(".ms-left .ms-section").eq(c))});a(document).on({mouseenter:function(){var c=a(this).data("tooltip");a('<div class="multiscroll-tooltip '+b.navigationPosition+'">'+c+"</div>").hide().appendTo(a(this)).fadeIn(200)},mouseleave:function(){a(this).find(".multiscroll-tooltip").fadeOut().remove()}},
"#multiscroll-nav li");b.normalScrollElements&&(a(document).on("mouseover",b.normalScrollElements,function(){a.fn.multiscroll.setMouseWheelScrolling(!1)}),a(document).on("mouseout",b.normalScrollElements,function(){a.fn.multiscroll.setMouseWheelScrolling(!0)}));a(window).resize(function(){w()});a.fn.multiscroll.moveSectionUp=function(){var c=a(".ms-left .ms-section.active").prev(".ms-section");!c.length&&b.loopTop&&(c=a(".ms-left .ms-section").last());c.length&&f(c)};a.fn.multiscroll.moveSectionDown=
function(){var c=a(".ms-left .ms-section.active").next(".ms-section");!c.length&&b.loopBottom&&(c=a(".ms-left .ms-section").first());c.length&&f(c)};a.fn.multiscroll.moveTo=function(c){var b="",b=isNaN(c)?a('.ms-left [data-anchor="'+c+'"]'):a(".ms-left .ms-section").eq(c-1);f(b)};a.fn.multiscroll.setKeyboardScrolling=function(a){b.keyboardScrolling=a};a.fn.multiscroll.setMouseWheelScrolling=function(a){a?u():document.addEventListener?(document.removeEventListener("mousewheel",g,!1),document.removeEventListener("wheel",
g,!1)):document.detachEvent("onmousewheel",g)};a.fn.multiscroll.setScrollingSpeed=function(a){b.scrollingSpeed=a};var n=0,p=0}})(jQuery);

/* 
 * VenoBox - jQuery Plugin
 * version: 1.3.2
 * @requires jQuery
 *
 * Examples at http://lab.veno.it/venobox/
 * License: Creative Commons Attribution 3.0 License
 * License URI: http://creativecommons.org/licenses/by/3.0/
 * Copyright 2013-2014 Nicola Franchini - @nicolafranchini
 *
 */
(function(e){function P(){e.ajax({url:u,cache:false}).done(function(e){s.html('<div class="vbox-inline">'+e+"</div>");q(true)}).fail(function(){s.html('<div class="vbox-inline"><p>Error retrieving contents, please retry</div>');q(true)})}function H(){s.html('<iframe class="venoframe" src="'+u+'"></iframe>');q()}function B(){var e=u.split("/");var t=e[e.length-1];s.html('<iframe class="venoframe" src="http://player.vimeo.com/video/'+t+'"></iframe>');q()}function j(){var e=u.split("/");var t=e[e.length-1];s.html('<iframe class="venoframe" src="http://www.youtube.com/embed/'+t+'"></iframe>');q()}function F(){s.html('<div class="vbox-inline">'+e(u).html()+"</div>");q()}function I(){h=e(".vbox-content").find("img");h.one("load",function(){q()}).each(function(){if(this.complete)e(this).load()})}function q(t){t=t||false;if(t!=true){e(window).scrollTop(0)}C.html(S);s.find(">:first-child").addClass("figlio");e(".figlio").css("width",p).css("height",d).css("padding",v).css("background",m);f=s.outerHeight();l=e(window).height();if(f+80<l){c=(l-f)/2;s.css("margin-top",c);s.css("margin-bottom",c)}else{s.css("margin-top","40px");s.css("margin-bottom","40px")}s.animate({opacity:"1"},"slow")}function R(){if(e(".vbox-content").length){f=s.height();l=e(window).height();if(f+80<l){c=(l-f)/2;s.css("margin-top",c);s.css("margin-bottom",c)}else{s.css("margin-top","40px");s.css("margin-bottom","40px")}}}var t,n,r,i,s,o,u,a,f,l,c,h,p,d,v,m,g,y,b,w,E,S,x,T,N,C,k,L,A,O,M,_,D;e.fn.extend({venobox:function(f){var l={framewidth:"",frameheight:"",border:"0",bgcolor:"#fff",numeratio:false,infinigall:false};var f=e.extend(l,f);return this.each(function(){var l=e(this);l.addClass("vbox-item");l.data("framewidth",f.framewidth);l.data("frameheight",f.frameheight);l.data("border",f.border);l.data("bgcolor",f.bgcolor);l.data("numeratio",f.numeratio);l.data("infinigall",f.infinigall);l.click(function(f){function c(){y=l.data("gall");L=l.data("numeratio");D=l.data("infinigall");b=e('.vbox-item[data-gall="'+y+'"]');if(b.length>0&&L===true){k.html(b.index(l)+1+" / "+b.length);k.fadeIn()}else{k.fadeOut()}w=b.eq(b.index(l)+1);E=b.eq(b.index(l)-1);if(l.attr("title")){S=l.attr("title");C.fadeIn()}else{S="";C.fadeOut()}if(D===true){x=true;T=true;if(w.length<1){w=b.eq(0)}if(b.index(l)<1){E=b.eq(b.index(b.length))}}else{if(w.length>0){e(".vbox-next").css("display","block");x=true}else{e(".vbox-next").css("display","none");x=false}if(b.index(l)>0){e(".vbox-prev").css("display","block");T=true}else{e(".vbox-prev").css("display","none");T=false}}}f.stopPropagation();f.preventDefault();l=e(this);t=l.data("overlay");p=l.data("framewidth");d=l.data("frameheight");v=l.data("border");m=l.data("bgcolor");x=false;T=false;N=false;u=l.attr("href");a=e(window).scrollTop();a=-a;e("body").wrapInner('<div class="vwrap"></div>');r=e(".vwrap");o='<div class="vbox-overlay" style="background:'+t+'"><div class="vbox-preloader">Loading...</div><div class="vbox-container"><div class="vbox-content"></div></div><div class="vbox-title"></div><div class="vbox-num">0/0</div><div class="vbox-close">X</div><div class="vbox-next">next</div><div class="vbox-prev">prev</div></div>';e("body").append(o);n=e(".vbox-overlay");i=e(".vbox-container");s=e(".vbox-content");k=e(".vbox-num");C=e(".vbox-title");s.html("");s.css("opacity","0");c();n.css({opacity:"1","min-height":e(window).outerHeight()+130});if(navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)){r.css({position:"fixed",top:a,opacity:"0"}).data("top",a)}else{r.css({position:"fixed",top:a}).data("top",a);e(window).scrollTop(0)}n.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(){n.css({"min-height":e(window).outerHeight(),height:"auto"});if(l.data("type")=="iframe"){H()}else if(l.data("type")=="inline"){F()}else if(l.data("type")=="ajax"){P()}else if(l.data("type")=="vimeo"){B()}else if(l.data("type")=="youtube"){j()}else{s.html('<img src="'+u+'">');I()}});e("body").keydown(function(r){if(N)return;if(r.keyCode==37&&T==true){N=true;t=E.data("overlay");p=E.data("framewidth");d=E.data("frameheight");v=E.data("border");m=E.data("bgcolor");u=E.attr("href");if(E.attr("title")){S=E.attr("title")}else{S=""}if(t===undefined){t=""}n.css("min-height",e(window).outerHeight()+130);s.animate({opacity:0},500,function(){n.css("min-height",e(window).outerHeight()).css("background",t);if(E.data("type")=="iframe"){H()}else if(E.data("type")=="inline"){F()}else if(E.data("type")=="ajax"){P()}else if(E.data("type")=="youtube"){j()}else if(E.data("type")=="vimeo"){B()}else{s.html('<img src="'+u+'">');I()}l=E;c();N=false})}if(r.keyCode==39&&x==true){N=true;t=w.data("overlay");p=w.data("framewidth");d=w.data("frameheight");v=w.data("border");m=w.data("bgcolor");u=w.attr("href");if(w.attr("title")){S=w.attr("title")}else{S=""}if(t===undefined){t=""}n.css("min-height",e(window).outerHeight()+130);s.animate({opacity:0},500,function(){n.css("min-height",e(window).outerHeight()).css("background",t);if(w.data("type")=="iframe"){H()}else if(w.data("type")=="inline"){F()}else if(w.data("type")=="ajax"){P()}else if(w.data("type")=="youtube"){j()}else if(w.data("type")=="vimeo"){B()}else{s.html('<img src="'+u+'">');I()}l=w;c();N=false})}});e(".vbox-next").click(function(){t=w.data("overlay");p=w.data("framewidth");d=w.data("frameheight");v=w.data("border");m=w.data("bgcolor");u=w.attr("href");if(w.attr("title")){S=w.attr("title")}else{S=""}if(t===undefined){t=""}n.css("min-height",e(window).outerHeight()+130);s.animate({opacity:0},500,function(){n.css("min-height",e(window).outerHeight()).css("background",t);if(w.data("type")=="iframe"){H()}else if(w.data("type")=="inline"){F()}else if(w.data("type")=="ajax"){P()}else if(w.data("type")=="youtube"){j()}else if(w.data("type")=="vimeo"){B()}else{s.html('<img src="'+u+'">');I()}l=w;c()})});e(".vbox-prev").click(function(){t=E.data("overlay");p=E.data("framewidth");d=E.data("frameheight");v=E.data("border");m=E.data("bgcolor");u=E.attr("href");if(E.attr("title")){S=E.attr("title")}else{S=""}if(t===undefined){t=""}n.css("min-height",e(window).outerHeight()+130);s.animate({opacity:0},500,function(){n.css("min-height",e(window).outerHeight()).css("background",t);if(E.data("type")=="iframe"){H()}else if(E.data("type")=="inline"){F()}else if(E.data("type")=="ajax"){P()}else if(E.data("type")=="youtube"){j()}else if(E.data("type")=="vimeo"){B()}else{s.html('<img src="'+u+'">');I()}l=E;c()})});e(".vbox-close, .vbox-overlay").click(function(t){M=".figlio";O=".vbox-prev";A=".vbox-next";_=".figlio *";if(!e(t.target).is(M)&&!e(t.target).is(A)&&!e(t.target).is(O)&&!e(t.target).is(_)){n.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd");n.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(){n.remove();if(navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)){e(".vwrap").css("opacity","1");e(".vwrap").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(){e(".vwrap").children().unwrap();e(window).scrollTop(-a)})}else{e(".vwrap").children().unwrap();e(window).scrollTop(-a)}N=false});n.css("opacity","0")}});return false})})}});e(window).resize(function(){R()})})(jQuery);

/*global jQuery */
/*jshint browser:true */
/*!
* FitVids 1.1
*
* Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
*/

(function( $ ){

  "use strict";

  $.fn.fitVids = function( options ) {
    var settings = {
      customSelector: null,
      ignore: null
    };

    if(!document.getElementById('fit-vids-style')) {
      // appendStyles: https://github.com/toddmotto/fluidvids/blob/master/dist/fluidvids.js
      var head = document.head || document.getElementsByTagName('head')[0];
      var css = '.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}';
      var div = document.createElement('div');
      div.innerHTML = '<p>x</p><style id="fit-vids-style">' + css + '</style>';
      head.appendChild(div.childNodes[1]);
    }

    if ( options ) {
      $.extend( settings, options );
    }

    return this.each(function(){
      var selectors = [
        "iframe[src*='player.vimeo.com']",
        "iframe[src*='youtube.com']",
        "iframe[src*='youtube-nocookie.com']",
        "iframe[src*='kickstarter.com'][src*='video.html']",
        "object",
        "embed"
      ];

      if (settings.customSelector) {
        selectors.push(settings.customSelector);
      }

      var ignoreList = '.fitvidsignore';

      if(settings.ignore) {
        ignoreList = ignoreList + ', ' + settings.ignore;
      }

      var $allVideos = $(this).find(selectors.join(','));
      $allVideos = $allVideos.not("object object"); // SwfObj conflict patch
      $allVideos = $allVideos.not(ignoreList); // Disable FitVids on this video.

      $allVideos.each(function(){
        var $this = $(this);
        if($this.parents(ignoreList).length > 0) {
          return; // Disable FitVids on this video.
        }
        if (this.tagName.toLowerCase() === 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) { return; }
        if ((!$this.css('height') && !$this.css('width')) && (isNaN($this.attr('height')) || isNaN($this.attr('width'))))
        {
          $this.attr('height', 9);
          $this.attr('width', 16);
        }
        var height = ( this.tagName.toLowerCase() === 'object' || ($this.attr('height') && !isNaN(parseInt($this.attr('height'), 10))) ) ? parseInt($this.attr('height'), 10) : $this.height(),
            width = !isNaN(parseInt($this.attr('width'), 10)) ? parseInt($this.attr('width'), 10) : $this.width(),
            aspectRatio = height / width;
        if(!$this.attr('id')){
          var videoID = 'fitvid' + Math.floor(Math.random()*999999);
          $this.attr('id', videoID);
        }
        $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  };
// Works with either jQuery or Zepto
})( window.jQuery || window.Zepto );