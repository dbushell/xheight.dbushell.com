
/* Modernizr 2.0.6 (Custom Build) | MIT & BSD
 * Contains: fontface | rgba | cssgradients | csstransforms | csstransforms3d | csstransitions | cssclasses | teststyles | testprop | testallprops | prefixes | domprefixes
 */
;window.Modernizr=function(a,b,c){function C(a,b){var c=a.charAt(0).toUpperCase()+a.substr(1),d=(a+" "+o.join(c+" ")+c).split(" ");return B(d,b)}function B(a,b){for(var d in a)if(k[a[d]]!==c)return b=="pfx"?a[d]:!0;return!1}function A(a,b){return!!~(""+a).indexOf(b)}function z(a,b){return typeof a===b}function y(a,b){return x(n.join(a+";")+(b||""))}function x(a){k.cssText=a}var d="2.0.6",e={},f=!0,g=b.documentElement,h=b.head||b.getElementsByTagName("head")[0],i="modernizr",j=b.createElement(i),k=j.style,l,m=Object.prototype.toString,n=" -webkit- -moz- -o- -ms- -khtml- ".split(" "),o="Webkit Moz O ms Khtml".split(" "),p={},q={},r={},s=[],t=function(a,c,d,e){var f,h,j,k=b.createElement("div");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:i+(d+1),k.appendChild(j);f=["&shy;","<style>",a,"</style>"].join(""),k.id=i,k.innerHTML+=f,g.appendChild(k),h=c(k,a),k.parentNode.removeChild(k);return!!h},u,v={}.hasOwnProperty,w;!z(v,c)&&!z(v.call,c)?w=function(a,b){return v.call(a,b)}:w=function(a,b){return b in a&&z(a.constructor.prototype[b],c)};var D=function(a,c){var d=a.join(""),f=c.length;t(d,function(a,c){var d=b.styleSheets[b.styleSheets.length-1],g=d.cssRules&&d.cssRules[0]?d.cssRules[0].cssText:d.cssText||"",h=a.childNodes,i={};while(f--)i[h[f].id]=h[f];e.csstransforms3d=i.csstransforms3d.offsetLeft===9,e.fontface=/src/i.test(g)&&g.indexOf(c.split(" ")[0])===0},f,c)}(['@font-face {font-family:"font";src:url("https://")}',["@media (",n.join("transform-3d),("),i,")","{#csstransforms3d{left:9px;position:absolute}}"].join("")],["fontface","csstransforms3d"]);p.rgba=function(){x("background-color:rgba(150,255,150,.5)");return A(k.backgroundColor,"rgba")},p.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";x((a+n.join(b+a)+n.join(c+a)).slice(0,-a.length));return A(k.backgroundImage,"gradient")},p.csstransforms=function(){return!!B(["transformProperty","WebkitTransform","MozTransform","OTransform","msTransform"])},p.csstransforms3d=function(){var a=!!B(["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"]);a&&"webkitPerspective"in g.style&&(a=e.csstransforms3d);return a},p.csstransitions=function(){return C("transitionProperty")},p.fontface=function(){return e.fontface};for(var E in p)w(p,E)&&(u=E.toLowerCase(),e[u]=p[E](),s.push((e[u]?"":"no-")+u));x(""),j=l=null,e._version=d,e._prefixes=n,e._domPrefixes=o,e.testProp=function(a){return B([a])},e.testAllProps=C,e.testStyles=t,g.className=g.className.replace(/\bno-js\b/,"")+(f?" js "+s.join(" "):"");return e}(this,this.document);

/*
 * Socialite v1.0
 * http://socialitejs.com
 * Copyright (c) 2011 David Bushell
 * Dual-licensed under the BSD or MIT licenses: http://socialitejs.com/license.txt
 */
window.Socialite=function(a,b,c){var d={},e={},f={},g={},h={},i={},j={},k=a.setTimeout,l=encodeURIComponent,m=typeof b.getElementsByClassName=="function";return e.appendScript=function(a,d,f){if(g[a]||h[a]===c)return!1;var j=g[a]=b.createElement("script");return j.async=!0,j.src=h[a],j.onload=j.onreadystatechange=function(){if(e.hasLoaded(a))return;var b=j.readyState;if(!b||b==="loaded"||b==="complete")i[a]=!0,j.onload=j.onreadystatechange=null,f!==c?typeof f=="function"&&f():e.activateCache(a)},d&&(j.id=d),b.body.appendChild(j),!0},e.hasLoaded=function(a){return typeof a!="string"?!1:i[a]===!0},e.removeScript=function(a){return e.hasLoaded(a)?(b.body.removeChild(g[a]),g[a]=i[a]=!1,!0):!1},e.createIframe=function(a,d){var f=b.createElement("iframe");return f.style.cssText="overflow: hidden; border: none;",f.setAttribute("allowtransparency","true"),f.setAttribute("frameborder","0"),f.setAttribute("scrolling","no"),f.setAttribute("src",a),d!==c&&(m?f.onload=f.onreadystatechange=function(){f.onload=f.onreadystatechange=null,e.activateInstance(d)}:k(function(){e.activateInstance(d)},10)),f},e.activateInstance=function(a){if(a.loaded)return;a.loaded=!0,a.container.className+=" socialite-loaded"},e.activateCache=function(a){if(j[a]!==c)for(var b=0;b<j[a].length;b++)e.activateInstance(j[a][b])},e.copyDataAttributes=function(a,b){var c,d=a.attributes;for(c=0;c<d.length;c++){var e=d[c].name,f=d[c].value;e.indexOf("data-")===0&&f.length&&b.setAttribute(e,f)}},e.getDataAttributes=function(a,b,c){var d,e="",f={},g=a.attributes;for(d=0;d<g.length;d++){var h=g[d].name,i=g[d].value;h.indexOf("data-")===0&&i.length&&(b===!0&&(h=h.substring(5)),c?f[h]=i:e+=l(h)+"="+l(i)+"&")}return c?f:e},e.getElements=function(a,b){if(m)return a.getElementsByClassName(b);var c=0,d=[],e=a.getElementsByTagName("*"),f=e.length;for(c=0;c<f;c++){var g=" "+e[c].className+" ";g.indexOf(" "+b+" ")!==-1&&d.push(e[c])}return d},d.activate=function(a,b){d.load(null,a,b)},d.load=function(a,g,h){a=typeof a=="object"&&a!==null&&a.nodeType===1?a:b;if(g===c||g===null){var i=e.getElements(a,"socialite"),k=i,l=i.length;if(!l)return;if(typeof k.item!==c){k=[];for(var m=0;m<l;m++)k[m]=i[m]}d.load(a,k,h);return}if(typeof g=="object"&&g.length){for(var n=0;n<g.length;n++)d.load(a,g[n],h);return}if(typeof g!="object"||g.nodeType!==1)return;if(typeof h!="string"||f[h]===c){h=null;var o=g.className.split(" ");for(var p=0;p<o.length;p++)if(f[o[p]]!==c){h=o[p];break}if(typeof h!="string")return}typeof f[h]=="string"&&(h=f[h]);if(typeof f[h]!="function")return;var q=b.createElement("div"),r=b.createElement("div");q.className="socialised "+h,r.className="socialite-button";var s=g.parentNode;s===null?(s=a===b?b.body:a,s.appendChild(q)):s.insertBefore(q,g),q.appendChild(r),r.appendChild(g),g.className=g.className.replace(/\bsocialite\b/,""),j[h]===c&&(j[h]=[]);var t={elem:g,button:r,container:q,parent:s,loaded:!1};j[h].push(t),f[h](t,e)},d.extend=function(a,b,d){if(typeof a!="string"||typeof b!="function")return!1;a=a.indexOf(" ")>0?a.split(" "):[a];if(f[a[0]]!==c)return!1;for(var e=1;e<a.length;e++)f[a[e]]=a[0];return d!==c&&typeof d=="string"&&(h[a[0]]=d),f[a[0]]=b,!0},d}(window,window.document),function(a,b,c,d){c.extend("twitter tweet",function(c,e){var f=c.elem,g=" "+f.className+" ";if(g.indexOf(" tweet ")!==-1)f.className="twitter-tweet";else{var h=b.createElement("a"),i=f.getAttribute("data-type"),j=["share","follow","hashtag","mention"],k=0;for(var l=1;l<4;l++)if(i===j[l]||g.indexOf(" "+j[l]+" ")!==-1)k=l;h.className="twitter-"+j[k]+"-button",f.getAttribute("href")!==d&&h.setAttribute("href",f.href),e.copyDataAttributes(f,h),c.button.replaceChild(h,f)}var m=a.twttr;typeof m=="object"&&typeof m.widgets=="object"&&typeof m.widgets.load=="function"?(m.widgets.load(),e.activateInstance(c)):(e.hasLoaded("twitter")&&e.removeScript("twitter"),e.appendScript("twitter","twitter-wjs",!1)&&(a.twttr={_e:[function(){e.activateCache("twitter")}]}))},"//platform.twitter.com/widgets.js"),c.extend("googleplus",function(c,d){var e=c.elem,f=b.createElement("div");f.className="g-plusone",d.copyDataAttributes(e,f),c.button.replaceChild(f,e),typeof a.gapi=="object"&&typeof a.gapi.plusone=="object"&&typeof gapi.plusone.render=="function"?(a.gapi.plusone.render(c.button,d.getDataAttributes(f,!0,!0)),d.activateInstance(c)):d.hasLoaded("googleplus")||d.appendScript("googleplus")},"//apis.google.com/js/plusone.js"),c.extend("facebook",function(a,c){var d=b.getElementById("fb-root"),e=a.elem,f=b.createElement("div");d||(d=b.createElement("div"),d.id="fb-root",b.body.appendChild(d));if(!c.hasLoaded("facebook"))f.className="fb-like",c.copyDataAttributes(e,f),a.button.replaceChild(f,e),c.appendScript("facebook","facebook-jssdk");else{var g="//www.facebook.com/plugins/like.php?";g+=c.getDataAttributes(e,!0);var h=c.createIframe(g,a);a.button.replaceChild(h,e)}},"//connect.facebook.net/en_US/all.js#xfbml=1"),c.extend("linkedin",function(c,d){var e=c.elem,f=e.attributes,g=b.createElement("script");g.type="IN/Share",d.copyDataAttributes(e,g),c.button.replaceChild(g,e),typeof a.IN=="object"&&typeof a.IN.init=="function"?(a.IN.init(),d.activateInstance(c)):d.hasLoaded("linkedin")||d.appendScript("linkedin")},"//platform.linkedin.com/in.js")}(window,window.document,window.Socialite);

/*!
 * xheight
 * http://www.xheight.co.uk
 *
 * Copyright (c) 2011 David Bushell https://dbushell.com
 * All rights reserved
 */

window.xheight = (function(window, document, undefined) {

	var xheight = { },

	docElement = document.documentElement,
	docHead = document.head || document.getElementsByTagName('head')[0],
	docObj = $(document.documentElement);

	xheight.init = function(a)
	{
		if (xheight._init) return; xheight._init = true;

		xheight.mouseTimeout = setTimeout(xheight.onMouseTimeout, 5000);
		$(document).bind('mousemove', xheight.onMouseMove).bind('scroll', xheight.onScroll);

		xheight.logoTop = /*$('#bar').height()*/ + $('#logo').position().top +  $('#logo').height();

		$('#return').bind('click', function()
		{
			$('html:not(:animated),body:not(:animated)').animate({ 'scrollTop': 0 }, $(document).scrollTop() / 2, function() {
				xheight.onMouseMove();
			});
			return false;
		});

		xheight.template = a.template;
		xheight.home = a.home;

		/* REMOVED FOR ARCHIVE

		if (xheight.home && xheight.template === 'articles') {

			xheight.articles = { page: a.page, ppp: a.ppp, total: a.total };
			xheight.initArticles();
		}
		*/
	};

	xheight.initArticles = function()
	{
			var x = xheight.articles;
			x.container = $('#archives');
			x.more = x.container.find('#articles-older a:first');
			x.moreParent = x.more.parent();
			if (!x.more.length) return;
			x.more.addClass('json').html('More Articles').bind('click', function()
			{
				if (x.loading || (x.page * x.ppp) >= x.total) return false;
				x.loading = true;
				docElement.className += ' articles-loading';
				x.page++;
				$.ajax({
					url: '/',
					dataType: 'json',
					data: { json: 'get_recent_posts', page: x.page },
					success: function(data)
					{
						if (!data.status == 'ok') return true;
						if ((x.page * x.ppp) >= x.total) {
							x.more.fadeOut();
						} else {
							x.more.attr('href', xheight.home + '/articles/page/' + (x.page + 1) + '/');
						}
						for (var i = 0; i < data.count; i++) {
							var p = data.posts[i];
							x.moreParent.before('<article id="post-' + p.id + '" class="box"><div class="article inside"><h2><a href="' + p.url + '">' + p.title + '</a></h2><p>' + p.excerpt + '</p></div></article>');
							x['post-'+p.id] = x.container.find('#post-' + p.id);
							x['post-'+p.id].hide();
							x['post-'+p.id].delay(i * 500).slideDown(500).fadeIn(500);
						}
						x.loading = false;
						docObj.removeClass('articles-loading');
					}
				});
				return false;
			});
	};


	xheight.onMouseMove = function()
	{
		xheight.mouseIdle = false;
		clearTimeout(xheight.mouseTimeout);
		xheight.mouseTimeout = setTimeout(xheight.onMouseTimeout, 5000);
		docObj.removeClass('mouse-idle');
	};

	xheight.onMouseTimeout = function()
	{
		if (xheight.mouseIdle) return;
		xheight.mouseIdle = true;
		clearTimeout(xheight.mouseTimeout);
		docElement.className += ' mouse-idle';
	};

	xheight.onScroll = function()
	{
		var scrollTop = $(document).scrollTop();

		if (scrollTop == 0 && xheight.mouseIdle) {
			xheight.onMouseMove();
		}
		if (scrollTop >= xheight.logoTop) {
			if (!xheight.logoHidden) {
				xheight.logoHidden = true;
				docElement.className += ' logo-hidden';
			}
		} else if (xheight.logoHidden) {
			xheight.logoHidden = false;
			docObj.removeClass('logo-hidden');
		}
	};

	return xheight;

})(this, this.document);
