/* Copyright (c) 2012 - Do Not Copy! */
(function(){try{if(typeof _mz!="object")return;function e(){var e=document.createElement("iframe");e.width="1",e.height="1",e.frameborder="0",e.style.border="0",e.style.overflow="none",e.style.position="absolute",e.style.top="-100px",e.style.left="-100px";var t=_mz.config.cdn+"/analytics.html?"+_mz.zonesQS;e.src=t;try{var n=document.getElementsByTagName("body")[0];n.parentNode.insertBefore(e,n.nextSibling)}catch(r){document.body.appendChild(e)}}function t(){function e(e){var t=document.getElementsByTagName("link");for(var n=0,r=t.length;n<r;n++){var i=t[n];if(i.getAttribute("rel").indexOf("stylesheet")!==-1&&i.getAttribute("href").indexOf(e)!==-1)return!0}return!1}var t=document.querySelectorAll("#primary.widget-area")[0]||document.querySelectorAll("#secondary.widget-area")[0];if(typeof t=="object"&&t.getAttribute("role").indexOf("complementary")>-1){var n="0",r="0";e("twentytwelve")?(n="0px",r="0"):e("twentyeleven")?(n="10px",r="-12px"):e("twentyten")&&(n="0px",r="-30px");try{var i=document.getElementsByTagName("head")[0],s=document.createElement("style");s.type="text/css",s.styleSheet?s.styleSheet.cssText="#_mzwp250 a, #_mzwp250 a:hover {color:#808080 !important;}":s.appendChild(document.createTextNode("#_mzwp250 a, #_mzwp250 a:hover {color:#808080 !important;}")),i.appendChild(s)}catch(o){}_mz.placeZone("250x250","font-family:arial,sans-serif;line-height:100%;font-size:9px;text-align:right;width:250px;height:250px;margin:"+n+" 0 25px "+r+";",250,250,"wpWidget","before","#808080")}}if(document.location.protocol!=="https:"&&document.doctype!==null&&document.domain!==null){e();var n=[".google.","facebook.com",".youtube.",".ebay.",".bing.","search.","/search","?q=",".amazon.","wikipedia.org"];for(var r in n)if(document.location.href.indexOf(n[r])>0)return;try{_mz.wildcard&&t()}catch(i){}}}catch(i){}})()