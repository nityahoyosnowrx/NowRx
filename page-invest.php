<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <?php // force Internet Explorer to use the latest rendering engine available
    ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <meta name="description" content="Disrupting the $480B Retail Pharmacy Industry WITH SAME DAY TELEHEALTH & PHARMACY DELIVERY"/>


    <?php // mobile meta (hooray!)
    $cachever = 1121231111111132111111111121121;
    ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public">

    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/public/frontend.css?vc="vc11112112"'>


    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
    <?php // or, set /favicon.ico for IE10 win
    ?>

    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <meta name="theme-color" content="#121212">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- WP HEAD -->
    <?php wp_head(); ?>



<script async defer>
    !function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=2)}([function(e,t,n){var r;
/*!
 * jQuery JavaScript Library v3.5.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2020-05-04T22:49Z
 */!function(t,n){"use strict";"object"==typeof e.exports?e.exports=t.document?n(t,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return n(e)}:n(t)}("undefined"!=typeof window?window:this,(function(n,i){"use strict";var o=[],a=Object.getPrototypeOf,s=o.slice,u=o.flat?function(e){return o.flat.call(e)}:function(e){return o.concat.apply([],e)},l=o.push,c=o.indexOf,f={},d=f.toString,p=f.hasOwnProperty,h=p.toString,g=h.call(Object),v={},m=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},y=function(e){return null!=e&&e===e.window},b=n.document,x={type:!0,src:!0,nonce:!0,noModule:!0};function w(e,t,n){var r,i,o=(n=n||b).createElement("script");if(o.text=e,t)for(r in x)(i=t[r]||t.getAttribute&&t.getAttribute(r))&&o.setAttribute(r,i);n.head.appendChild(o).parentNode.removeChild(o)}function C(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?f[d.call(e)]||"object":typeof e}var T=function(e,t){return new T.fn.init(e,t)};function k(e){var t=!!e&&"length"in e&&e.length,n=C(e);return!m(e)&&!y(e)&&("array"===n||0===t||"number"==typeof t&&t>0&&t-1 in e)}T.fn=T.prototype={jquery:"3.5.1",constructor:T,length:0,toArray:function(){return s.call(this)},get:function(e){return null==e?s.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=T.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return T.each(this,e)},map:function(e){return this.pushStack(T.map(this,(function(t,n){return e.call(t,n,t)})))},slice:function(){return this.pushStack(s.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},even:function(){return this.pushStack(T.grep(this,(function(e,t){return(t+1)%2})))},odd:function(){return this.pushStack(T.grep(this,(function(e,t){return t%2})))},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(n>=0&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:l,sort:o.sort,splice:o.splice},T.extend=T.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||m(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)r=e[t],"__proto__"!==t&&a!==r&&(l&&r&&(T.isPlainObject(r)||(i=Array.isArray(r)))?(n=a[t],o=i&&!Array.isArray(n)?[]:i||T.isPlainObject(n)?n:{},i=!1,a[t]=T.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},T.extend({expando:"jQuery"+("3.5.1"+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==d.call(e))&&(!(t=a(e))||"function"==typeof(n=p.call(t,"constructor")&&t.constructor)&&h.call(n)===g)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t,n){w(e,{nonce:t&&t.nonce},n)},each:function(e,t){var n,r=0;if(k(e))for(n=e.length;r<n&&!1!==t.call(e[r],r,e[r]);r++);else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},makeArray:function(e,t){var n=t||[];return null!=e&&(k(Object(e))?T.merge(n,"string"==typeof e?[e]:e):l.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:c.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,a=!n;i<o;i++)!t(e[i],i)!==a&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(k(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return u(a)},guid:1,support:v}),"function"==typeof Symbol&&(T.fn[Symbol.iterator]=o[Symbol.iterator]),T.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),(function(e,t){f["[object "+t+"]"]=t.toLowerCase()}));var $=
/*!
   * Sizzle CSS Selector Engine v2.3.5
   * https://sizzlejs.com/
   *
   * Copyright JS Foundation and other contributors
   * Released under the MIT license
   * https://js.foundation/
   *
   * Date: 2020-03-14
   */
function(e){var t,n,r,i,o,a,s,u,l,c,f,d,p,h,g,v,m,y,b,x="sizzle"+1*new Date,w=e.document,C=0,T=0,k=ue(),$=ue(),A=ue(),S=ue(),E=function(e,t){return e===t&&(f=!0),0},D={}.hasOwnProperty,j=[],q=j.pop,N=j.push,L=j.push,O=j.slice,H=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},P="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",R="(?:\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",I="\\["+M+"*("+R+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+R+"))|)"+M+"*\\]",F=":("+R+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+I+")*)|.*)\\)|)",W=new RegExp(M+"+","g"),B=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),_=new RegExp("^"+M+"*,"+M+"*"),z=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp(M+"|>"),X=new RegExp(F),V=new RegExp("^"+R+"$"),Q={ID:new RegExp("^#("+R+")"),CLASS:new RegExp("^\\.("+R+")"),TAG:new RegExp("^("+R+"|[*])"),ATTR:new RegExp("^"+I),PSEUDO:new RegExp("^"+F),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+P+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},G=/HTML$/i,Y=/^(?:input|select|textarea|button)$/i,J=/^h\d$/i,K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\([^\\r\\n\\f])","g"),ne=function(e,t){var n="0x"+e.slice(1)-65536;return t||(n<0?String.fromCharCode(n+65536):String.fromCharCode(n>>10|55296,1023&n|56320))},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"ï¿½":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){d()},ae=xe((function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()}),{dir:"parentNode",next:"legend"});try{L.apply(j=O.call(w.childNodes),w.childNodes),j[w.childNodes.length].nodeType}catch(e){L={apply:j.length?function(e,t){N.apply(e,O.call(t))}:function(e,t){for(var n=e.length,r=0;e[n++]=t[r++];);e.length=n-1}}}function se(e,t,r,i){var o,s,l,c,f,h,m,y=t&&t.ownerDocument,w=t?t.nodeType:9;if(r=r||[],"string"!=typeof e||!e||1!==w&&9!==w&&11!==w)return r;if(!i&&(d(t),t=t||p,g)){if(11!==w&&(f=Z.exec(e)))if(o=f[1]){if(9===w){if(!(l=t.getElementById(o)))return r;if(l.id===o)return r.push(l),r}else if(y&&(l=y.getElementById(o))&&b(t,l)&&l.id===o)return r.push(l),r}else{if(f[2])return L.apply(r,t.getElementsByTagName(e)),r;if((o=f[3])&&n.getElementsByClassName&&t.getElementsByClassName)return L.apply(r,t.getElementsByClassName(o)),r}if(n.qsa&&!S[e+" "]&&(!v||!v.test(e))&&(1!==w||"object"!==t.nodeName.toLowerCase())){if(m=e,y=t,1===w&&(U.test(e)||z.test(e))){for((y=ee.test(e)&&me(t.parentNode)||t)===t&&n.scope||((c=t.getAttribute("id"))?c=c.replace(re,ie):t.setAttribute("id",c=x)),s=(h=a(e)).length;s--;)h[s]=(c?"#"+c:":scope")+" "+be(h[s]);m=h.join(",")}try{return L.apply(r,y.querySelectorAll(m)),r}catch(t){S(e,!0)}finally{c===x&&t.removeAttribute("id")}}}return u(e.replace(B,"$1"),t,r,i)}function ue(){var e=[];return function t(n,i){return e.push(n+" ")>r.cacheLength&&delete t[e.shift()],t[n+" "]=i}}function le(e){return e[x]=!0,e}function ce(e){var t=p.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){for(var n=e.split("|"),i=n.length;i--;)r.attrHandle[n[i]]=t}function de(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)for(;n=n.nextSibling;)if(n===t)return-1;return e?1:-1}function pe(e){return function(t){return"input"===t.nodeName.toLowerCase()&&t.type===e}}function he(e){return function(t){var n=t.nodeName.toLowerCase();return("input"===n||"button"===n)&&t.type===e}}function ge(e){return function(t){return"form"in t?t.parentNode&&!1===t.disabled?"label"in t?"label"in t.parentNode?t.parentNode.disabled===e:t.disabled===e:t.isDisabled===e||t.isDisabled!==!e&&ae(t)===e:t.disabled===e:"label"in t&&t.disabled===e}}function ve(e){return le((function(t){return t=+t,le((function(n,r){for(var i,o=e([],n.length,t),a=o.length;a--;)n[i=o[a]]&&(n[i]=!(r[i]=n[i]))}))}))}function me(e){return e&&void 0!==e.getElementsByTagName&&e}for(t in n=se.support={},o=se.isXML=function(e){var t=e.namespaceURI,n=(e.ownerDocument||e).documentElement;return!G.test(t||n&&n.nodeName||"HTML")},d=se.setDocument=function(e){var t,i,a=e?e.ownerDocument||e:w;return a!=p&&9===a.nodeType&&a.documentElement?(h=(p=a).documentElement,g=!o(p),w!=p&&(i=p.defaultView)&&i.top!==i&&(i.addEventListener?i.addEventListener("unload",oe,!1):i.attachEvent&&i.attachEvent("onunload",oe)),n.scope=ce((function(e){return h.appendChild(e).appendChild(p.createElement("div")),void 0!==e.querySelectorAll&&!e.querySelectorAll(":scope fieldset div").length})),n.attributes=ce((function(e){return e.className="i",!e.getAttribute("className")})),n.getElementsByTagName=ce((function(e){return e.appendChild(p.createComment("")),!e.getElementsByTagName("*").length})),n.getElementsByClassName=K.test(p.getElementsByClassName),n.getById=ce((function(e){return h.appendChild(e).id=x,!p.getElementsByName||!p.getElementsByName(x).length})),n.getById?(r.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},r.find.ID=function(e,t){if(void 0!==t.getElementById&&g){var n=t.getElementById(e);return n?[n]:[]}}):(r.filter.ID=function(e){var t=e.replace(te,ne);return function(e){var n=void 0!==e.getAttributeNode&&e.getAttributeNode("id");return n&&n.value===t}},r.find.ID=function(e,t){if(void 0!==t.getElementById&&g){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];for(i=t.getElementsByName(e),r=0;o=i[r++];)if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),r.find.TAG=n.getElementsByTagName?function(e,t){return void 0!==t.getElementsByTagName?t.getElementsByTagName(e):n.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){for(;n=o[i++];)1===n.nodeType&&r.push(n);return r}return o},r.find.CLASS=n.getElementsByClassName&&function(e,t){if(void 0!==t.getElementsByClassName&&g)return t.getElementsByClassName(e)},m=[],v=[],(n.qsa=K.test(p.querySelectorAll))&&(ce((function(e){var t;h.appendChild(e).innerHTML="<a id='"+x+"'></a><select id='"+x+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&v.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||v.push("\\["+M+"*(?:value|"+P+")"),e.querySelectorAll("[id~="+x+"-]").length||v.push("~="),(t=p.createElement("input")).setAttribute("name",""),e.appendChild(t),e.querySelectorAll("[name='']").length||v.push("\\["+M+"*name"+M+"*="+M+"*(?:''|\"\")"),e.querySelectorAll(":checked").length||v.push(":checked"),e.querySelectorAll("a#"+x+"+*").length||v.push(".#.+[+~]"),e.querySelectorAll("\\\f"),v.push("[\\r\\n\\f]")})),ce((function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=p.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&v.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&v.push(":enabled",":disabled"),h.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&v.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),v.push(",.*:")}))),(n.matchesSelector=K.test(y=h.matches||h.webkitMatchesSelector||h.mozMatchesSelector||h.oMatchesSelector||h.msMatchesSelector))&&ce((function(e){n.disconnectedMatch=y.call(e,"*"),y.call(e,"[s!='']:x"),m.push("!=",F)})),v=v.length&&new RegExp(v.join("|")),m=m.length&&new RegExp(m.join("|")),t=K.test(h.compareDocumentPosition),b=t||K.test(h.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)for(;t=t.parentNode;)if(t===e)return!0;return!1},E=t?function(e,t){if(e===t)return f=!0,0;var r=!e.compareDocumentPosition-!t.compareDocumentPosition;return r||(1&(r=(e.ownerDocument||e)==(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!n.sortDetached&&t.compareDocumentPosition(e)===r?e==p||e.ownerDocument==w&&b(w,e)?-1:t==p||t.ownerDocument==w&&b(w,t)?1:c?H(c,e)-H(c,t):0:4&r?-1:1)}:function(e,t){if(e===t)return f=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e==p?-1:t==p?1:i?-1:o?1:c?H(c,e)-H(c,t):0;if(i===o)return de(e,t);for(n=e;n=n.parentNode;)a.unshift(n);for(n=t;n=n.parentNode;)s.unshift(n);for(;a[r]===s[r];)r++;return r?de(a[r],s[r]):a[r]==w?-1:s[r]==w?1:0},p):p},se.matches=function(e,t){return se(e,null,null,t)},se.matchesSelector=function(e,t){if(d(e),n.matchesSelector&&g&&!S[t+" "]&&(!m||!m.test(t))&&(!v||!v.test(t)))try{var r=y.call(e,t);if(r||n.disconnectedMatch||e.document&&11!==e.document.nodeType)return r}catch(e){S(t,!0)}return se(t,p,null,[e]).length>0},se.contains=function(e,t){return(e.ownerDocument||e)!=p&&d(e),b(e,t)},se.attr=function(e,t){(e.ownerDocument||e)!=p&&d(e);var i=r.attrHandle[t.toLowerCase()],o=i&&D.call(r.attrHandle,t.toLowerCase())?i(e,t,!g):void 0;return void 0!==o?o:n.attributes||!g?e.getAttribute(t):(o=e.getAttributeNode(t))&&o.specified?o.value:null},se.escape=function(e){return(e+"").replace(re,ie)},se.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},se.uniqueSort=function(e){var t,r=[],i=0,o=0;if(f=!n.detectDuplicates,c=!n.sortStable&&e.slice(0),e.sort(E),f){for(;t=e[o++];)t===e[o]&&(i=r.push(o));for(;i--;)e.splice(r[i],1)}return c=null,e},i=se.getText=function(e){var t,n="",r=0,o=e.nodeType;if(o){if(1===o||9===o||11===o){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=i(e)}else if(3===o||4===o)return e.nodeValue}else for(;t=e[r++];)n+=i(t);return n},(r=se.selectors={cacheLength:50,createPseudo:le,match:Q,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||se.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&se.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return Q.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=a(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=k[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&k(e,(function(e){return t.test("string"==typeof e.className&&e.className||void 0!==e.getAttribute&&e.getAttribute("class")||"")}))},ATTR:function(e,t,n){return function(r){var i=se.attr(r,e);return null==i?"!="===t:!t||(i+="","="===t?i===n:"!="===t?i!==n:"^="===t?n&&0===i.indexOf(n):"*="===t?n&&i.indexOf(n)>-1:"$="===t?n&&i.slice(-n.length)===n:"~="===t?(" "+i.replace(W," ")+" ").indexOf(n)>-1:"|="===t&&(i===n||i.slice(0,n.length+1)===n+"-"))}},CHILD:function(e,t,n,r,i){var o="nth"!==e.slice(0,3),a="last"!==e.slice(-4),s="of-type"===t;return 1===r&&0===i?function(e){return!!e.parentNode}:function(t,n,u){var l,c,f,d,p,h,g=o!==a?"nextSibling":"previousSibling",v=t.parentNode,m=s&&t.nodeName.toLowerCase(),y=!u&&!s,b=!1;if(v){if(o){for(;g;){for(d=t;d=d[g];)if(s?d.nodeName.toLowerCase()===m:1===d.nodeType)return!1;h=g="only"===e&&!h&&"nextSibling"}return!0}if(h=[a?v.firstChild:v.lastChild],a&&y){for(b=(p=(l=(c=(f=(d=v)[x]||(d[x]={}))[d.uniqueID]||(f[d.uniqueID]={}))[e]||[])[0]===C&&l[1])&&l[2],d=p&&v.childNodes[p];d=++p&&d&&d[g]||(b=p=0)||h.pop();)if(1===d.nodeType&&++b&&d===t){c[e]=[C,p,b];break}}else if(y&&(b=p=(l=(c=(f=(d=t)[x]||(d[x]={}))[d.uniqueID]||(f[d.uniqueID]={}))[e]||[])[0]===C&&l[1]),!1===b)for(;(d=++p&&d&&d[g]||(b=p=0)||h.pop())&&((s?d.nodeName.toLowerCase()!==m:1!==d.nodeType)||!++b||(y&&((c=(f=d[x]||(d[x]={}))[d.uniqueID]||(f[d.uniqueID]={}))[e]=[C,b]),d!==t)););return(b-=i)===r||b%r==0&&b/r>=0}}},PSEUDO:function(e,t){var n,i=r.pseudos[e]||r.setFilters[e.toLowerCase()]||se.error("unsupported pseudo: "+e);return i[x]?i(t):i.length>1?(n=[e,e,"",t],r.setFilters.hasOwnProperty(e.toLowerCase())?le((function(e,n){for(var r,o=i(e,t),a=o.length;a--;)e[r=H(e,o[a])]=!(n[r]=o[a])})):function(e){return i(e,0,n)}):i}},pseudos:{not:le((function(e){var t=[],n=[],r=s(e.replace(B,"$1"));return r[x]?le((function(e,t,n,i){for(var o,a=r(e,null,i,[]),s=e.length;s--;)(o=a[s])&&(e[s]=!(t[s]=o))})):function(e,i,o){return t[0]=e,r(t,null,o,n),t[0]=null,!n.pop()}})),has:le((function(e){return function(t){return se(e,t).length>0}})),contains:le((function(e){return e=e.replace(te,ne),function(t){return(t.textContent||i(t)).indexOf(e)>-1}})),lang:le((function(e){return V.test(e||"")||se.error("unsupported lang: "+e),e=e.replace(te,ne).toLowerCase(),function(t){var n;do{if(n=g?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return(n=n.toLowerCase())===e||0===n.indexOf(e+"-")}while((t=t.parentNode)&&1===t.nodeType);return!1}})),target:function(t){var n=e.location&&e.location.hash;return n&&n.slice(1)===t.id},root:function(e){return e===h},focus:function(e){return e===p.activeElement&&(!p.hasFocus||p.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ge(!1),disabled:ge(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!r.pseudos.empty(e)},header:function(e){return J.test(e.nodeName)},input:function(e){return Y.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:ve((function(){return[0]})),last:ve((function(e,t){return[t-1]})),eq:ve((function(e,t,n){return[n<0?n+t:n]})),even:ve((function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e})),odd:ve((function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e})),lt:ve((function(e,t,n){for(var r=n<0?n+t:n>t?t:n;--r>=0;)e.push(r);return e})),gt:ve((function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e}))}}).pseudos.nth=r.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})r.pseudos[t]=pe(t);for(t in{submit:!0,reset:!0})r.pseudos[t]=he(t);function ye(){}function be(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function xe(e,t,n){var r=t.dir,i=t.next,o=i||r,a=n&&"parentNode"===o,s=T++;return t.first?function(t,n,i){for(;t=t[r];)if(1===t.nodeType||a)return e(t,n,i);return!1}:function(t,n,u){var l,c,f,d=[C,s];if(u){for(;t=t[r];)if((1===t.nodeType||a)&&e(t,n,u))return!0}else for(;t=t[r];)if(1===t.nodeType||a)if(c=(f=t[x]||(t[x]={}))[t.uniqueID]||(f[t.uniqueID]={}),i&&i===t.nodeName.toLowerCase())t=t[r]||t;else{if((l=c[o])&&l[0]===C&&l[1]===s)return d[2]=l[2];if(c[o]=d,d[2]=e(t,n,u))return!0}return!1}}function we(e){return e.length>1?function(t,n,r){for(var i=e.length;i--;)if(!e[i](t,n,r))return!1;return!0}:e[0]}function Ce(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Te(e,t,n,r,i,o){return r&&!r[x]&&(r=Te(r)),i&&!i[x]&&(i=Te(i,o)),le((function(o,a,s,u){var l,c,f,d=[],p=[],h=a.length,g=o||function(e,t,n){for(var r=0,i=t.length;r<i;r++)se(e,t[r],n);return n}(t||"*",s.nodeType?[s]:s,[]),v=!e||!o&&t?g:Ce(g,d,e,s,u),m=n?i||(o?e:h||r)?[]:a:v;if(n&&n(v,m,s,u),r)for(l=Ce(m,p),r(l,[],s,u),c=l.length;c--;)(f=l[c])&&(m[p[c]]=!(v[p[c]]=f));if(o){if(i||e){if(i){for(l=[],c=m.length;c--;)(f=m[c])&&l.push(v[c]=f);i(null,m=[],l,u)}for(c=m.length;c--;)(f=m[c])&&(l=i?H(o,f):d[c])>-1&&(o[l]=!(a[l]=f))}}else m=Ce(m===a?m.splice(h,m.length):m),i?i(null,a,m,u):L.apply(a,m)}))}function ke(e){for(var t,n,i,o=e.length,a=r.relative[e[0].type],s=a||r.relative[" "],u=a?1:0,c=xe((function(e){return e===t}),s,!0),f=xe((function(e){return H(t,e)>-1}),s,!0),d=[function(e,n,r){var i=!a&&(r||n!==l)||((t=n).nodeType?c(e,n,r):f(e,n,r));return t=null,i}];u<o;u++)if(n=r.relative[e[u].type])d=[xe(we(d),n)];else{if((n=r.filter[e[u].type].apply(null,e[u].matches))[x]){for(i=++u;i<o&&!r.relative[e[i].type];i++);return Te(u>1&&we(d),u>1&&be(e.slice(0,u-1).concat({value:" "===e[u-2].type?"*":""})).replace(B,"$1"),n,u<i&&ke(e.slice(u,i)),i<o&&ke(e=e.slice(i)),i<o&&be(e))}d.push(n)}return we(d)}return ye.prototype=r.filters=r.pseudos,r.setFilters=new ye,a=se.tokenize=function(e,t){var n,i,o,a,s,u,l,c=$[e+" "];if(c)return t?0:c.slice(0);for(s=e,u=[],l=r.preFilter;s;){for(a in n&&!(i=_.exec(s))||(i&&(s=s.slice(i[0].length)||s),u.push(o=[])),n=!1,(i=z.exec(s))&&(n=i.shift(),o.push({value:n,type:i[0].replace(B," ")}),s=s.slice(n.length)),r.filter)!(i=Q[a].exec(s))||l[a]&&!(i=l[a](i))||(n=i.shift(),o.push({value:n,type:a,matches:i}),s=s.slice(n.length));if(!n)break}return t?s.length:s?se.error(e):$(e,u).slice(0)},s=se.compile=function(e,t){var n,i=[],o=[],s=A[e+" "];if(!s){for(t||(t=a(e)),n=t.length;n--;)(s=ke(t[n]))[x]?i.push(s):o.push(s);(s=A(e,function(e,t){var n=t.length>0,i=e.length>0,o=function(o,a,s,u,c){var f,h,v,m=0,y="0",b=o&&[],x=[],w=l,T=o||i&&r.find.TAG("*",c),k=C+=null==w?1:Math.random()||.1,$=T.length;for(c&&(l=a==p||a||c);y!==$&&null!=(f=T[y]);y++){if(i&&f){for(h=0,a||f.ownerDocument==p||(d(f),s=!g);v=e[h++];)if(v(f,a||p,s)){u.push(f);break}c&&(C=k)}n&&((f=!v&&f)&&m--,o&&b.push(f))}if(m+=y,n&&y!==m){for(h=0;v=t[h++];)v(b,x,a,s);if(o){if(m>0)for(;y--;)b[y]||x[y]||(x[y]=q.call(u));x=Ce(x)}L.apply(u,x),c&&!o&&x.length>0&&m+t.length>1&&se.uniqueSort(u)}return c&&(C=k,l=w),b};return n?le(o):o}(o,i))).selector=e}return s},u=se.select=function(e,t,n,i){var o,u,l,c,f,d="function"==typeof e&&e,p=!i&&a(e=d.selector||e);if(n=n||[],1===p.length){if((u=p[0]=p[0].slice(0)).length>2&&"ID"===(l=u[0]).type&&9===t.nodeType&&g&&r.relative[u[1].type]){if(!(t=(r.find.ID(l.matches[0].replace(te,ne),t)||[])[0]))return n;d&&(t=t.parentNode),e=e.slice(u.shift().value.length)}for(o=Q.needsContext.test(e)?0:u.length;o--&&(l=u[o],!r.relative[c=l.type]);)if((f=r.find[c])&&(i=f(l.matches[0].replace(te,ne),ee.test(u[0].type)&&me(t.parentNode)||t))){if(u.splice(o,1),!(e=i.length&&be(u)))return L.apply(n,i),n;break}}return(d||s(e,p))(i,t,!g,n,!t||ee.test(e)&&me(t.parentNode)||t),n},n.sortStable=x.split("").sort(E).join("")===x,n.detectDuplicates=!!f,d(),n.sortDetached=ce((function(e){return 1&e.compareDocumentPosition(p.createElement("fieldset"))})),ce((function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")}))||fe("type|href|height|width",(function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)})),n.attributes&&ce((function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")}))||fe("value",(function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue})),ce((function(e){return null==e.getAttribute("disabled")}))||fe(P,(function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null})),se}(n);T.find=$,T.expr=$.selectors,T.expr[":"]=T.expr.pseudos,T.uniqueSort=T.unique=$.uniqueSort,T.text=$.getText,T.isXMLDoc=$.isXML,T.contains=$.contains,T.escapeSelector=$.escape;var A=function(e,t,n){for(var r=[],i=void 0!==n;(e=e[t])&&9!==e.nodeType;)if(1===e.nodeType){if(i&&T(e).is(n))break;r.push(e)}return r},S=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},E=T.expr.match.needsContext;function D(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var j=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function q(e,t,n){return m(t)?T.grep(e,(function(e,r){return!!t.call(e,r,e)!==n})):t.nodeType?T.grep(e,(function(e){return e===t!==n})):"string"!=typeof t?T.grep(e,(function(e){return c.call(t,e)>-1!==n})):T.filter(t,e,n)}T.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?T.find.matchesSelector(r,e)?[r]:[]:T.find.matches(e,T.grep(t,(function(e){return 1===e.nodeType})))},T.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(T(e).filter((function(){for(t=0;t<r;t++)if(T.contains(i[t],this))return!0})));for(n=this.pushStack([]),t=0;t<r;t++)T.find(e,i[t],n);return r>1?T.uniqueSort(n):n},filter:function(e){return this.pushStack(q(this,e||[],!1))},not:function(e){return this.pushStack(q(this,e||[],!0))},is:function(e){return!!q(this,"string"==typeof e&&E.test(e)?T(e):e||[],!1).length}});var N,L=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(T.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||N,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&e.length>=3?[null,e,null]:L.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof T?t[0]:t,T.merge(this,T.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:b,!0)),j.test(r[1])&&T.isPlainObject(t))for(r in t)m(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=b.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):m(e)?void 0!==n.ready?n.ready(e):e(T):T.makeArray(e,this)}).prototype=T.fn,N=T(b);var O=/^(?:parents|prev(?:Until|All))/,H={children:!0,contents:!0,next:!0,prev:!0};function P(e,t){for(;(e=e[t])&&1!==e.nodeType;);return e}T.fn.extend({has:function(e){var t=T(e,this),n=t.length;return this.filter((function(){for(var e=0;e<n;e++)if(T.contains(this,t[e]))return!0}))},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&T(e);if(!E.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?a.index(n)>-1:1===n.nodeType&&T.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(o.length>1?T.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?c.call(T(e),this[0]):c.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(T.uniqueSort(T.merge(this.get(),T(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),T.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return A(e,"parentNode")},parentsUntil:function(e,t,n){return A(e,"parentNode",n)},next:function(e){return P(e,"nextSibling")},prev:function(e){return P(e,"previousSibling")},nextAll:function(e){return A(e,"nextSibling")},prevAll:function(e){return A(e,"previousSibling")},nextUntil:function(e,t,n){return A(e,"nextSibling",n)},prevUntil:function(e,t,n){return A(e,"previousSibling",n)},siblings:function(e){return S((e.parentNode||{}).firstChild,e)},children:function(e){return S(e.firstChild)},contents:function(e){return null!=e.contentDocument&&a(e.contentDocument)?e.contentDocument:(D(e,"template")&&(e=e.content||e),T.merge([],e.childNodes))}},(function(e,t){T.fn[e]=function(n,r){var i=T.map(this,t,n);return"Until"!==e.slice(-5)&&(r=n),r&&"string"==typeof r&&(i=T.filter(r,i)),this.length>1&&(H[e]||T.uniqueSort(i),O.test(e)&&i.reverse()),this.pushStack(i)}}));var M=/[^\x20\t\r\n\f]+/g;function R(e){return e}function I(e){throw e}function F(e,t,n,r){var i;try{e&&m(i=e.promise)?i.call(e).done(t).fail(n):e&&m(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}T.Callbacks=function(e){e="string"==typeof e?function(e){var t={};return T.each(e.match(M)||[],(function(e,n){t[n]=!0})),t}(e):T.extend({},e);var t,n,r,i,o=[],a=[],s=-1,u=function(){for(i=i||e.once,r=t=!0;a.length;s=-1)for(n=a.shift();++s<o.length;)!1===o[s].apply(n[0],n[1])&&e.stopOnFalse&&(s=o.length,n=!1);e.memory||(n=!1),t=!1,i&&(o=n?[]:"")},l={add:function(){return o&&(n&&!t&&(s=o.length-1,a.push(n)),function t(n){T.each(n,(function(n,r){m(r)?e.unique&&l.has(r)||o.push(r):r&&r.length&&"string"!==C(r)&&t(r)}))}(arguments),n&&!t&&u()),this},remove:function(){return T.each(arguments,(function(e,t){for(var n;(n=T.inArray(t,o,n))>-1;)o.splice(n,1),n<=s&&s--})),this},has:function(e){return e?T.inArray(e,o)>-1:o.length>0},empty:function(){return o&&(o=[]),this},disable:function(){return i=a=[],o=n="",this},disabled:function(){return!o},lock:function(){return i=a=[],n||t||(o=n=""),this},locked:function(){return!!i},fireWith:function(e,n){return i||(n=[e,(n=n||[]).slice?n.slice():n],a.push(n),t||u()),this},fire:function(){return l.fireWith(this,arguments),this},fired:function(){return!!r}};return l},T.extend({Deferred:function(e){var t=[["notify","progress",T.Callbacks("memory"),T.Callbacks("memory"),2],["resolve","done",T.Callbacks("once memory"),T.Callbacks("once memory"),0,"resolved"],["reject","fail",T.Callbacks("once memory"),T.Callbacks("once memory"),1,"rejected"]],r="pending",i={state:function(){return r},always:function(){return o.done(arguments).fail(arguments),this},catch:function(e){return i.then(null,e)},pipe:function(){var e=arguments;return T.Deferred((function(n){T.each(t,(function(t,r){var i=m(e[r[4]])&&e[r[4]];o[r[1]]((function(){var e=i&&i.apply(this,arguments);e&&m(e.promise)?e.promise().progress(n.notify).done(n.resolve).fail(n.reject):n[r[0]+"With"](this,i?[e]:arguments)}))})),e=null})).promise()},then:function(e,r,i){var o=0;function a(e,t,r,i){return function(){var s=this,u=arguments,l=function(){var n,l;if(!(e<o)){if((n=r.apply(s,u))===t.promise())throw new TypeError("Thenable self-resolution");l=n&&("object"==typeof n||"function"==typeof n)&&n.then,m(l)?i?l.call(n,a(o,t,R,i),a(o,t,I,i)):(o++,l.call(n,a(o,t,R,i),a(o,t,I,i),a(o,t,R,t.notifyWith))):(r!==R&&(s=void 0,u=[n]),(i||t.resolveWith)(s,u))}},c=i?l:function(){try{l()}catch(n){T.Deferred.exceptionHook&&T.Deferred.exceptionHook(n,c.stackTrace),e+1>=o&&(r!==I&&(s=void 0,u=[n]),t.rejectWith(s,u))}};e?c():(T.Deferred.getStackHook&&(c.stackTrace=T.Deferred.getStackHook()),n.setTimeout(c))}}return T.Deferred((function(n){t[0][3].add(a(0,n,m(i)?i:R,n.notifyWith)),t[1][3].add(a(0,n,m(e)?e:R)),t[2][3].add(a(0,n,m(r)?r:I))})).promise()},promise:function(e){return null!=e?T.extend(e,i):i}},o={};return T.each(t,(function(e,n){var a=n[2],s=n[5];i[n[1]]=a.add,s&&a.add((function(){r=s}),t[3-e][2].disable,t[3-e][3].disable,t[0][2].lock,t[0][3].lock),a.add(n[3].fire),o[n[0]]=function(){return o[n[0]+"With"](this===o?void 0:this,arguments),this},o[n[0]+"With"]=a.fireWith})),i.promise(o),e&&e.call(o,o),o},when:function(e){var t=arguments.length,n=t,r=Array(n),i=s.call(arguments),o=T.Deferred(),a=function(e){return function(n){r[e]=this,i[e]=arguments.length>1?s.call(arguments):n,--t||o.resolveWith(r,i)}};if(t<=1&&(F(e,o.done(a(n)).resolve,o.reject,!t),"pending"===o.state()||m(i[n]&&i[n].then)))return o.then();for(;n--;)F(i[n],a(n),o.reject);return o.promise()}});var W=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;T.Deferred.exceptionHook=function(e,t){n.console&&n.console.warn&&e&&W.test(e.name)&&n.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},T.readyException=function(e){n.setTimeout((function(){throw e}))};var B=T.Deferred();function _(){b.removeEventListener("DOMContentLoaded",_),n.removeEventListener("load",_),T.ready()}T.fn.ready=function(e){return B.then(e).catch((function(e){T.readyException(e)})),this},T.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--T.readyWait:T.isReady)||(T.isReady=!0,!0!==e&&--T.readyWait>0||B.resolveWith(b,[T]))}}),T.ready.then=B.then,"complete"===b.readyState||"loading"!==b.readyState&&!b.documentElement.doScroll?n.setTimeout(T.ready):(b.addEventListener("DOMContentLoaded",_),n.addEventListener("load",_));var z=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===C(n))for(s in i=!0,n)z(e,t,s,n[s],!0,o,a);else if(void 0!==r&&(i=!0,m(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(T(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},U=/^-ms-/,X=/-([a-z])/g;function V(e,t){return t.toUpperCase()}function Q(e){return e.replace(U,"ms-").replace(X,V)}var G=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function Y(){this.expando=T.expando+Y.uid++}Y.uid=1,Y.prototype={cache:function(e){var t=e[this.expando];return t||(t={},G(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[Q(t)]=n;else for(r in t)i[Q(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][Q(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(Q):(t=Q(t))in r?[t]:t.match(M)||[]).length;for(;n--;)delete r[t[n]]}(void 0===t||T.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!T.isEmptyObject(t)}};var J=new Y,K=new Y,Z=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,ee=/[A-Z]/g;function te(e,t,n){var r;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(ee,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n=function(e){return"true"===e||"false"!==e&&("null"===e?null:e===+e+""?+e:Z.test(e)?JSON.parse(e):e)}(n)}catch(e){}K.set(e,t,n)}else n=void 0;return n}T.extend({hasData:function(e){return K.hasData(e)||J.hasData(e)},data:function(e,t,n){return K.access(e,t,n)},removeData:function(e,t){K.remove(e,t)},_data:function(e,t,n){return J.access(e,t,n)},_removeData:function(e,t){J.remove(e,t)}}),T.fn.extend({data:function(e,t){var n,r,i,o=this[0],a=o&&o.attributes;if(void 0===e){if(this.length&&(i=K.get(o),1===o.nodeType&&!J.get(o,"hasDataAttrs"))){for(n=a.length;n--;)a[n]&&0===(r=a[n].name).indexOf("data-")&&(r=Q(r.slice(5)),te(o,r,i[r]));J.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof e?this.each((function(){K.set(this,e)})):z(this,(function(t){var n;if(o&&void 0===t)return void 0!==(n=K.get(o,e))||void 0!==(n=te(o,e))?n:void 0;this.each((function(){K.set(this,e,t)}))}),null,t,arguments.length>1,null,!0)},removeData:function(e){return this.each((function(){K.remove(this,e)}))}}),T.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=J.get(e,t),n&&(!r||Array.isArray(n)?r=J.access(e,t,T.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=T.queue(e,t),r=n.length,i=n.shift(),o=T._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,(function(){T.dequeue(e,t)}),o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return J.get(e,n)||J.access(e,n,{empty:T.Callbacks("once memory").add((function(){J.remove(e,[t+"queue",n])}))})}}),T.fn.extend({queue:function(e,t){var n=2;return"string"!=typeof e&&(t=e,e="fx",n--),arguments.length<n?T.queue(this[0],e):void 0===t?this:this.each((function(){var n=T.queue(this,e,t);T._queueHooks(this,e),"fx"===e&&"inprogress"!==n[0]&&T.dequeue(this,e)}))},dequeue:function(e){return this.each((function(){T.dequeue(this,e)}))},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=T.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};for("string"!=typeof e&&(t=e,e=void 0),e=e||"fx";a--;)(n=J.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var ne=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,re=new RegExp("^(?:([+-])=|)("+ne+")([a-z%]*)$","i"),ie=["Top","Right","Bottom","Left"],oe=b.documentElement,ae=function(e){return T.contains(e.ownerDocument,e)},se={composed:!0};oe.getRootNode&&(ae=function(e){return T.contains(e.ownerDocument,e)||e.getRootNode(se)===e.ownerDocument});var ue=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&ae(e)&&"none"===T.css(e,"display")};function le(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return T.css(e,t,"")},u=s(),l=n&&n[3]||(T.cssNumber[t]?"":"px"),c=e.nodeType&&(T.cssNumber[t]||"px"!==l&&+u)&&re.exec(T.css(e,t));if(c&&c[3]!==l){for(u/=2,l=l||c[3],c=+u||1;a--;)T.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,T.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var ce={};function fe(e){var t,n=e.ownerDocument,r=e.nodeName,i=ce[r];return i||(t=n.body.appendChild(n.createElement(r)),i=T.css(t,"display"),t.parentNode.removeChild(t),"none"===i&&(i="block"),ce[r]=i,i)}function de(e,t){for(var n,r,i=[],o=0,a=e.length;o<a;o++)(r=e[o]).style&&(n=r.style.display,t?("none"===n&&(i[o]=J.get(r,"display")||null,i[o]||(r.style.display="")),""===r.style.display&&ue(r)&&(i[o]=fe(r))):"none"!==n&&(i[o]="none",J.set(r,"display",n)));for(o=0;o<a;o++)null!=i[o]&&(e[o].style.display=i[o]);return e}T.fn.extend({show:function(){return de(this,!0)},hide:function(){return de(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each((function(){ue(this)?T(this).show():T(this).hide()}))}});var pe,he,ge=/^(?:checkbox|radio)$/i,ve=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,me=/^$|^module$|\/(?:java|ecma)script/i;pe=b.createDocumentFragment().appendChild(b.createElement("div")),(he=b.createElement("input")).setAttribute("type","radio"),he.setAttribute("checked","checked"),he.setAttribute("name","t"),pe.appendChild(he),v.checkClone=pe.cloneNode(!0).cloneNode(!0).lastChild.checked,pe.innerHTML="<textarea>x</textarea>",v.noCloneChecked=!!pe.cloneNode(!0).lastChild.defaultValue,pe.innerHTML="<option></option>",v.option=!!pe.lastChild;var ye={thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function be(e,t){var n;return n=void 0!==e.getElementsByTagName?e.getElementsByTagName(t||"*"):void 0!==e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&D(e,t)?T.merge([e],n):n}function xe(e,t){for(var n=0,r=e.length;n<r;n++)J.set(e[n],"globalEval",!t||J.get(t[n],"globalEval"))}ye.tbody=ye.tfoot=ye.colgroup=ye.caption=ye.thead,ye.th=ye.td,v.option||(ye.optgroup=ye.option=[1,"<select multiple='multiple'>","</select>"]);var we=/<|&#?\w+;/;function Ce(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),d=[],p=0,h=e.length;p<h;p++)if((o=e[p])||0===o)if("object"===C(o))T.merge(d,o.nodeType?[o]:o);else if(we.test(o)){for(a=a||f.appendChild(t.createElement("div")),s=(ve.exec(o)||["",""])[1].toLowerCase(),u=ye[s]||ye._default,a.innerHTML=u[1]+T.htmlPrefilter(o)+u[2],c=u[0];c--;)a=a.lastChild;T.merge(d,a.childNodes),(a=f.firstChild).textContent=""}else d.push(t.createTextNode(o));for(f.textContent="",p=0;o=d[p++];)if(r&&T.inArray(o,r)>-1)i&&i.push(o);else if(l=ae(o),a=be(f.appendChild(o),"script"),l&&xe(a),n)for(c=0;o=a[c++];)me.test(o.type||"")&&n.push(o);return f}var Te=/^key/,ke=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,$e=/^([^.]*)(?:\.(.+)|)/;function Ae(){return!0}function Se(){return!1}function Ee(e,t){return e===function(){try{return b.activeElement}catch(e){}}()==("focus"===t)}function De(e,t,n,r,i,o){var a,s;if("object"==typeof t){for(s in"string"!=typeof n&&(r=r||n,n=void 0),t)De(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Se;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return T().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=T.guid++)),e.each((function(){T.event.add(this,t,i,r,n)}))}function je(e,t,n){n?(J.set(e,t,!1),T.event.add(e,t,{namespace:!1,handler:function(e){var r,i,o=J.get(this,t);if(1&e.isTrigger&&this[t]){if(o.length)(T.event.special[t]||{}).delegateType&&e.stopPropagation();else if(o=s.call(arguments),J.set(this,t,o),r=n(this,t),this[t](),o!==(i=J.get(this,t))||r?J.set(this,t,!1):i={},o!==i)return e.stopImmediatePropagation(),e.preventDefault(),i.value}else o.length&&(J.set(this,t,{value:T.event.trigger(T.extend(o[0],T.Event.prototype),o.slice(1),this)}),e.stopImmediatePropagation())}})):void 0===J.get(e,t)&&T.event.add(e,t,Ae)}T.event={global:{},add:function(e,t,n,r,i){var o,a,s,u,l,c,f,d,p,h,g,v=J.get(e);if(G(e))for(n.handler&&(n=(o=n).handler,i=o.selector),i&&T.find.matchesSelector(oe,i),n.guid||(n.guid=T.guid++),(u=v.events)||(u=v.events=Object.create(null)),(a=v.handle)||(a=v.handle=function(t){return void 0!==T&&T.event.triggered!==t.type?T.event.dispatch.apply(e,arguments):void 0}),l=(t=(t||"").match(M)||[""]).length;l--;)p=g=(s=$e.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),p&&(f=T.event.special[p]||{},p=(i?f.delegateType:f.bindType)||p,f=T.event.special[p]||{},c=T.extend({type:p,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&T.expr.match.needsContext.test(i),namespace:h.join(".")},o),(d=u[p])||((d=u[p]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(e,r,h,a)||e.addEventListener&&e.addEventListener(p,a)),f.add&&(f.add.call(e,c),c.handler.guid||(c.handler.guid=n.guid)),i?d.splice(d.delegateCount++,0,c):d.push(c),T.event.global[p]=!0)},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,d,p,h,g,v=J.hasData(e)&&J.get(e);if(v&&(u=v.events)){for(l=(t=(t||"").match(M)||[""]).length;l--;)if(p=g=(s=$e.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),p){for(f=T.event.special[p]||{},d=u[p=(r?f.delegateType:f.bindType)||p]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=d.length;o--;)c=d[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(d.splice(o,1),c.selector&&d.delegateCount--,f.remove&&f.remove.call(e,c));a&&!d.length&&(f.teardown&&!1!==f.teardown.call(e,h,v.handle)||T.removeEvent(e,p,v.handle),delete u[p])}else for(p in u)T.event.remove(e,p+t[l],n,r,!0);T.isEmptyObject(u)&&J.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,a,s=new Array(arguments.length),u=T.event.fix(e),l=(J.get(this,"events")||Object.create(null))[u.type]||[],c=T.event.special[u.type]||{};for(s[0]=u,t=1;t<arguments.length;t++)s[t]=arguments[t];if(u.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,u)){for(a=T.event.handlers.call(this,u,l),t=0;(i=a[t++])&&!u.isPropagationStopped();)for(u.currentTarget=i.elem,n=0;(o=i.handlers[n++])&&!u.isImmediatePropagationStopped();)u.rnamespace&&!1!==o.namespace&&!u.rnamespace.test(o.namespace)||(u.handleObj=o,u.data=o.data,void 0!==(r=((T.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,s))&&!1===(u.result=r)&&(u.preventDefault(),u.stopPropagation()));return c.postDispatch&&c.postDispatch.call(this,u),u.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&e.button>=1))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?T(i,this).index(l)>-1:T.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(e,t){Object.defineProperty(T.Event.prototype,e,{enumerable:!0,configurable:!0,get:m(t)?function(){if(this.originalEvent)return t(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[e]},set:function(t){Object.defineProperty(this,e,{enumerable:!0,configurable:!0,writable:!0,value:t})}})},fix:function(e){return e[T.expando]?e:new T.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return ge.test(t.type)&&t.click&&D(t,"input")&&je(t,"click",Ae),!1},trigger:function(e){var t=this||e;return ge.test(t.type)&&t.click&&D(t,"input")&&je(t,"click"),!0},_default:function(e){var t=e.target;return ge.test(t.type)&&t.click&&D(t,"input")&&J.get(t,"click")||D(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},T.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},T.Event=function(e,t){if(!(this instanceof T.Event))return new T.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?Ae:Se,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&T.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[T.expando]=!0},T.Event.prototype={constructor:T.Event,isDefaultPrevented:Se,isPropagationStopped:Se,isImmediatePropagationStopped:Se,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=Ae,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=Ae,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=Ae,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},T.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,char:!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&Te.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&ke.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},T.event.addProp),T.each({focus:"focusin",blur:"focusout"},(function(e,t){T.event.special[e]={setup:function(){return je(this,e,Ee),!1},trigger:function(){return je(this,e),!0},delegateType:t}})),T.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},(function(e,t){T.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=this,i=e.relatedTarget,o=e.handleObj;return i&&(i===r||T.contains(r,i))||(e.type=o.origType,n=o.handler.apply(this,arguments),e.type=t),n}}})),T.fn.extend({on:function(e,t,n,r){return De(this,e,t,n,r)},one:function(e,t,n,r){return De(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,T(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Se),this.each((function(){T.event.remove(this,e,n,t)}))}});var qe=/<script|<style|<link/i,Ne=/checked\s*(?:[^=]|=\s*.checked.)/i,Le=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function Oe(e,t){return D(e,"table")&&D(11!==t.nodeType?t:t.firstChild,"tr")&&T(e).children("tbody")[0]||e}function He(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function Pe(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Me(e,t){var n,r,i,o,a,s;if(1===t.nodeType){if(J.hasData(e)&&(s=J.get(e).events))for(i in J.remove(t,"handle events"),s)for(n=0,r=s[i].length;n<r;n++)T.event.add(t,i,s[i][n]);K.hasData(e)&&(o=K.access(e),a=T.extend({},o),K.set(t,a))}}function Re(e,t){var n=t.nodeName.toLowerCase();"input"===n&&ge.test(e.type)?t.checked=e.checked:"input"!==n&&"textarea"!==n||(t.defaultValue=e.defaultValue)}function Ie(e,t,n,r){t=u(t);var i,o,a,s,l,c,f=0,d=e.length,p=d-1,h=t[0],g=m(h);if(g||d>1&&"string"==typeof h&&!v.checkClone&&Ne.test(h))return e.each((function(i){var o=e.eq(i);g&&(t[0]=h.call(this,i,o.html())),Ie(o,t,n,r)}));if(d&&(o=(i=Ce(t,e[0].ownerDocument,!1,e,r)).firstChild,1===i.childNodes.length&&(i=o),o||r)){for(s=(a=T.map(be(i,"script"),He)).length;f<d;f++)l=i,f!==p&&(l=T.clone(l,!0,!0),s&&T.merge(a,be(l,"script"))),n.call(e[f],l,f);if(s)for(c=a[a.length-1].ownerDocument,T.map(a,Pe),f=0;f<s;f++)l=a[f],me.test(l.type||"")&&!J.access(l,"globalEval")&&T.contains(c,l)&&(l.src&&"module"!==(l.type||"").toLowerCase()?T._evalUrl&&!l.noModule&&T._evalUrl(l.src,{nonce:l.nonce||l.getAttribute("nonce")},c):w(l.textContent.replace(Le,""),l,c))}return e}function Fe(e,t,n){for(var r,i=t?T.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||T.cleanData(be(r)),r.parentNode&&(n&&ae(r)&&xe(be(r,"script")),r.parentNode.removeChild(r));return e}T.extend({htmlPrefilter:function(e){return e},clone:function(e,t,n){var r,i,o,a,s=e.cloneNode(!0),u=ae(e);if(!(v.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||T.isXMLDoc(e)))for(a=be(s),r=0,i=(o=be(e)).length;r<i;r++)Re(o[r],a[r]);if(t)if(n)for(o=o||be(e),a=a||be(s),r=0,i=o.length;r<i;r++)Me(o[r],a[r]);else Me(e,s);return(a=be(s,"script")).length>0&&xe(a,!u&&be(e,"script")),s},cleanData:function(e){for(var t,n,r,i=T.event.special,o=0;void 0!==(n=e[o]);o++)if(G(n)){if(t=n[J.expando]){if(t.events)for(r in t.events)i[r]?T.event.remove(n,r):T.removeEvent(n,r,t.handle);n[J.expando]=void 0}n[K.expando]&&(n[K.expando]=void 0)}}}),T.fn.extend({detach:function(e){return Fe(this,e,!0)},remove:function(e){return Fe(this,e)},text:function(e){return z(this,(function(e){return void 0===e?T.text(this):this.empty().each((function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)}))}),null,e,arguments.length)},append:function(){return Ie(this,arguments,(function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||Oe(this,e).appendChild(e)}))},prepend:function(){return Ie(this,arguments,(function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Oe(this,e);t.insertBefore(e,t.firstChild)}}))},before:function(){return Ie(this,arguments,(function(e){this.parentNode&&this.parentNode.insertBefore(e,this)}))},after:function(){return Ie(this,arguments,(function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)}))},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(T.cleanData(be(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map((function(){return T.clone(this,e,t)}))},html:function(e){return z(this,(function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!qe.test(e)&&!ye[(ve.exec(e)||["",""])[1].toLowerCase()]){e=T.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(T.cleanData(be(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)}),null,e,arguments.length)},replaceWith:function(){var e=[];return Ie(this,arguments,(function(t){var n=this.parentNode;T.inArray(this,e)<0&&(T.cleanData(be(this)),n&&n.replaceChild(t,this))}),e)}}),T.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},(function(e,t){T.fn[e]=function(e){for(var n,r=[],i=T(e),o=i.length-1,a=0;a<=o;a++)n=a===o?this:this.clone(!0),T(i[a])[t](n),l.apply(r,n.get());return this.pushStack(r)}}));var We=new RegExp("^("+ne+")(?!px)[a-z%]+$","i"),Be=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=n),t.getComputedStyle(e)},_e=function(e,t,n){var r,i,o={};for(i in t)o[i]=e.style[i],e.style[i]=t[i];for(i in r=n.call(e),t)e.style[i]=o[i];return r},ze=new RegExp(ie.join("|"),"i");function Ue(e,t,n){var r,i,o,a,s=e.style;return(n=n||Be(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||ae(e)||(a=T.style(e,t)),!v.pixelBoxStyles()&&We.test(a)&&ze.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function Xe(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(c){l.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",c.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",oe.appendChild(l).appendChild(c);var e=n.getComputedStyle(c);r="1%"!==e.top,u=12===t(e.marginLeft),c.style.right="60%",a=36===t(e.right),i=36===t(e.width),c.style.position="absolute",o=12===t(c.offsetWidth/3),oe.removeChild(l),c=null}}function t(e){return Math.round(parseFloat(e))}var r,i,o,a,s,u,l=b.createElement("div"),c=b.createElement("div");c.style&&(c.style.backgroundClip="content-box",c.cloneNode(!0).style.backgroundClip="",v.clearCloneStyle="content-box"===c.style.backgroundClip,T.extend(v,{boxSizingReliable:function(){return e(),i},pixelBoxStyles:function(){return e(),a},pixelPosition:function(){return e(),r},reliableMarginLeft:function(){return e(),u},scrollboxSize:function(){return e(),o},reliableTrDimensions:function(){var e,t,r,i;return null==s&&(e=b.createElement("table"),t=b.createElement("tr"),r=b.createElement("div"),e.style.cssText="position:absolute;left:-11111px",t.style.height="1px",r.style.height="9px",oe.appendChild(e).appendChild(t).appendChild(r),i=n.getComputedStyle(t),s=parseInt(i.height)>3,oe.removeChild(e)),s}}))}();var Ve=["Webkit","Moz","ms"],Qe=b.createElement("div").style,Ge={};function Ye(e){var t=T.cssProps[e]||Ge[e];return t||(e in Qe?e:Ge[e]=function(e){for(var t=e[0].toUpperCase()+e.slice(1),n=Ve.length;n--;)if((e=Ve[n]+t)in Qe)return e}(e)||e)}var Je=/^(none|table(?!-c[ea]).+)/,Ke=/^--/,Ze={position:"absolute",visibility:"hidden",display:"block"},et={letterSpacing:"0",fontWeight:"400"};function tt(e,t,n){var r=re.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function nt(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=T.css(e,n+ie[a],!0,i)),r?("content"===n&&(u-=T.css(e,"padding"+ie[a],!0,i)),"margin"!==n&&(u-=T.css(e,"border"+ie[a]+"Width",!0,i))):(u+=T.css(e,"padding"+ie[a],!0,i),"padding"!==n?u+=T.css(e,"border"+ie[a]+"Width",!0,i):s+=T.css(e,"border"+ie[a]+"Width",!0,i));return!r&&o>=0&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))||0),u}function rt(e,t,n){var r=Be(e),i=(!v.boxSizingReliable()||n)&&"border-box"===T.css(e,"boxSizing",!1,r),o=i,a=Ue(e,t,r),s="offset"+t[0].toUpperCase()+t.slice(1);if(We.test(a)){if(!n)return a;a="auto"}return(!v.boxSizingReliable()&&i||!v.reliableTrDimensions()&&D(e,"tr")||"auto"===a||!parseFloat(a)&&"inline"===T.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===T.css(e,"boxSizing",!1,r),(o=s in e)&&(a=e[s])),(a=parseFloat(a)||0)+nt(e,t,n||(i?"border":"content"),o,r,a)+"px"}function it(e,t,n,r,i){return new it.prototype.init(e,t,n,r,i)}T.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Ue(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=Q(t),u=Ke.test(t),l=e.style;if(u||(t=Ye(s)),a=T.cssHooks[t]||T.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"===(o=typeof n)&&(i=re.exec(n))&&i[1]&&(n=le(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||u||(n+=i&&i[3]||(T.cssNumber[s]?"":"px")),v.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=Q(t);return Ke.test(t)||(t=Ye(s)),(a=T.cssHooks[t]||T.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=Ue(e,t,r)),"normal"===i&&t in et&&(i=et[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),T.each(["height","width"],(function(e,t){T.cssHooks[t]={get:function(e,n,r){if(n)return!Je.test(T.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?rt(e,t,r):_e(e,Ze,(function(){return rt(e,t,r)}))},set:function(e,n,r){var i,o=Be(e),a=!v.scrollboxSize()&&"absolute"===o.position,s=(a||r)&&"border-box"===T.css(e,"boxSizing",!1,o),u=r?nt(e,t,r,s,o):0;return s&&a&&(u-=Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-parseFloat(o[t])-nt(e,t,"border",!1,o)-.5)),u&&(i=re.exec(n))&&"px"!==(i[3]||"px")&&(e.style[t]=n,n=T.css(e,t)),tt(0,n,u)}}})),T.cssHooks.marginLeft=Xe(v.reliableMarginLeft,(function(e,t){if(t)return(parseFloat(Ue(e,"marginLeft"))||e.getBoundingClientRect().left-_e(e,{marginLeft:0},(function(){return e.getBoundingClientRect().left})))+"px"})),T.each({margin:"",padding:"",border:"Width"},(function(e,t){T.cssHooks[e+t]={expand:function(n){for(var r=0,i={},o="string"==typeof n?n.split(" "):[n];r<4;r++)i[e+ie[r]+t]=o[r]||o[r-2]||o[0];return i}},"margin"!==e&&(T.cssHooks[e+t].set=tt)})),T.fn.extend({css:function(e,t){return z(this,(function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=Be(e),i=t.length;a<i;a++)o[t[a]]=T.css(e,t[a],!1,r);return o}return void 0!==n?T.style(e,t,n):T.css(e,t)}),e,t,arguments.length>1)}}),T.Tween=it,it.prototype={constructor:it,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||T.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(T.cssNumber[n]?"":"px")},cur:function(){var e=it.propHooks[this.prop];return e&&e.get?e.get(this):it.propHooks._default.get(this)},run:function(e){var t,n=it.propHooks[this.prop];return this.options.duration?this.pos=t=T.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):it.propHooks._default.set(this),this}},it.prototype.init.prototype=it.prototype,it.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=T.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){T.fx.step[e.prop]?T.fx.step[e.prop](e):1!==e.elem.nodeType||!T.cssHooks[e.prop]&&null==e.elem.style[Ye(e.prop)]?e.elem[e.prop]=e.now:T.style(e.elem,e.prop,e.now+e.unit)}}},it.propHooks.scrollTop=it.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},T.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},T.fx=it.prototype.init,T.fx.step={};var ot,at,st=/^(?:toggle|show|hide)$/,ut=/queueHooks$/;function lt(){at&&(!1===b.hidden&&n.requestAnimationFrame?n.requestAnimationFrame(lt):n.setTimeout(lt,T.fx.interval),T.fx.tick())}function ct(){return n.setTimeout((function(){ot=void 0})),ot=Date.now()}function ft(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=ie[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function dt(e,t,n){for(var r,i=(pt.tweeners[t]||[]).concat(pt.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function pt(e,t,n){var r,i,o=0,a=pt.prefilters.length,s=T.Deferred().always((function(){delete u.elem})),u=function(){if(i)return!1;for(var t=ot||ct(),n=Math.max(0,l.startTime+l.duration-t),r=1-(n/l.duration||0),o=0,a=l.tweens.length;o<a;o++)l.tweens[o].run(r);return s.notifyWith(e,[l,r,n]),r<1&&a?n:(a||s.notifyWith(e,[l,1,0]),s.resolveWith(e,[l]),!1)},l=s.promise({elem:e,props:T.extend({},t),opts:T.extend(!0,{specialEasing:{},easing:T.easing._default},n),originalProperties:t,originalOptions:n,startTime:ot||ct(),duration:n.duration,tweens:[],createTween:function(t,n){var r=T.Tween(e,l.opts,t,n,l.opts.specialEasing[t]||l.opts.easing);return l.tweens.push(r),r},stop:function(t){var n=0,r=t?l.tweens.length:0;if(i)return this;for(i=!0;n<r;n++)l.tweens[n].run(1);return t?(s.notifyWith(e,[l,1,0]),s.resolveWith(e,[l,t])):s.rejectWith(e,[l,t]),this}}),c=l.props;for(!function(e,t){var n,r,i,o,a;for(n in e)if(i=t[r=Q(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=T.cssHooks[r])&&"expand"in a)for(n in o=a.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(c,l.opts.specialEasing);o<a;o++)if(r=pt.prefilters[o].call(l,e,c,l.opts))return m(r.stop)&&(T._queueHooks(l.elem,l.opts.queue).stop=r.stop.bind(r)),r;return T.map(c,dt,l),m(l.opts.start)&&l.opts.start.call(e,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),T.fx.timer(T.extend(u,{elem:e,anim:l,queue:l.opts.queue})),l}T.Animation=T.extend(pt,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return le(n.elem,e,re.exec(t),n),n}]},tweener:function(e,t){m(e)?(t=e,e=["*"]):e=e.match(M);for(var n,r=0,i=e.length;r<i;r++)n=e[r],pt.tweeners[n]=pt.tweeners[n]||[],pt.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,d=this,p={},h=e.style,g=e.nodeType&&ue(e),v=J.get(e,"fxshow");for(r in n.queue||(null==(a=T._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,d.always((function(){d.always((function(){a.unqueued--,T.queue(e,"fx").length||a.empty.fire()}))}))),t)if(i=t[r],st.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!v||void 0===v[r])continue;g=!0}p[r]=v&&v[r]||T.style(e,r)}if((u=!T.isEmptyObject(t))||!T.isEmptyObject(p))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=v&&v.display)&&(l=J.get(e,"display")),"none"===(c=T.css(e,"display"))&&(l?c=l:(de([e],!0),l=e.style.display||l,c=T.css(e,"display"),de([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===T.css(e,"float")&&(u||(d.done((function(){h.display=l})),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",d.always((function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]}))),u=!1,p)u||(v?"hidden"in v&&(g=v.hidden):v=J.access(e,"fxshow",{display:l}),o&&(v.hidden=!g),g&&de([e],!0),d.done((function(){for(r in g||de([e]),J.remove(e,"fxshow"),p)T.style(e,r,p[r])}))),u=dt(g?v[r]:0,r,d),r in v||(v[r]=u.start,g&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?pt.prefilters.unshift(e):pt.prefilters.push(e)}}),T.speed=function(e,t,n){var r=e&&"object"==typeof e?T.extend({},e):{complete:n||!n&&t||m(e)&&e,duration:e,easing:n&&t||t&&!m(t)&&t};return T.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in T.fx.speeds?r.duration=T.fx.speeds[r.duration]:r.duration=T.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){m(r.old)&&r.old.call(this),r.queue&&T.dequeue(this,r.queue)},r},T.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ue).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=T.isEmptyObject(e),o=T.speed(t,n,r),a=function(){var t=pt(this,T.extend({},e),o);(i||J.get(this,"finish"))&&t.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(e,t,n){var r=function(e){var t=e.stop;delete e.stop,t(n)};return"string"!=typeof e&&(n=t,t=e,e=void 0),t&&this.queue(e||"fx",[]),this.each((function(){var t=!0,i=null!=e&&e+"queueHooks",o=T.timers,a=J.get(this);if(i)a[i]&&a[i].stop&&r(a[i]);else for(i in a)a[i]&&a[i].stop&&ut.test(i)&&r(a[i]);for(i=o.length;i--;)o[i].elem!==this||null!=e&&o[i].queue!==e||(o[i].anim.stop(n),t=!1,o.splice(i,1));!t&&n||T.dequeue(this,e)}))},finish:function(e){return!1!==e&&(e=e||"fx"),this.each((function(){var t,n=J.get(this),r=n[e+"queue"],i=n[e+"queueHooks"],o=T.timers,a=r?r.length:0;for(n.finish=!0,T.queue(this,e,[]),i&&i.stop&&i.stop.call(this,!0),t=o.length;t--;)o[t].elem===this&&o[t].queue===e&&(o[t].anim.stop(!0),o.splice(t,1));for(t=0;t<a;t++)r[t]&&r[t].finish&&r[t].finish.call(this);delete n.finish}))}}),T.each(["toggle","show","hide"],(function(e,t){var n=T.fn[t];T.fn[t]=function(e,r,i){return null==e||"boolean"==typeof e?n.apply(this,arguments):this.animate(ft(t,!0),e,r,i)}})),T.each({slideDown:ft("show"),slideUp:ft("hide"),slideToggle:ft("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},(function(e,t){T.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}})),T.timers=[],T.fx.tick=function(){var e,t=0,n=T.timers;for(ot=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||T.fx.stop(),ot=void 0},T.fx.timer=function(e){T.timers.push(e),T.fx.start()},T.fx.interval=13,T.fx.start=function(){at||(at=!0,lt())},T.fx.stop=function(){at=null},T.fx.speeds={slow:600,fast:200,_default:400},T.fn.delay=function(e,t){return e=T.fx&&T.fx.speeds[e]||e,t=t||"fx",this.queue(t,(function(t,r){var i=n.setTimeout(t,e);r.stop=function(){n.clearTimeout(i)}}))},function(){var e=b.createElement("input"),t=b.createElement("select").appendChild(b.createElement("option"));e.type="checkbox",v.checkOn=""!==e.value,v.optSelected=t.selected,(e=b.createElement("input")).value="t",e.type="radio",v.radioValue="t"===e.value}();var ht,gt=T.expr.attrHandle;T.fn.extend({attr:function(e,t){return z(this,T.attr,e,t,arguments.length>1)},removeAttr:function(e){return this.each((function(){T.removeAttr(this,e)}))}}),T.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return void 0===e.getAttribute?T.prop(e,t,n):(1===o&&T.isXMLDoc(e)||(i=T.attrHooks[t.toLowerCase()]||(T.expr.match.bool.test(t)?ht:void 0)),void 0!==n?null===n?void T.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=T.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!v.radioValue&&"radio"===t&&D(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(M);if(i&&1===e.nodeType)for(;n=i[r++];)e.removeAttribute(n)}}),ht={set:function(e,t,n){return!1===t?T.removeAttr(e,n):e.setAttribute(n,n),n}},T.each(T.expr.match.bool.source.match(/\w+/g),(function(e,t){var n=gt[t]||T.find.attr;gt[t]=function(e,t,r){var i,o,a=t.toLowerCase();return r||(o=gt[a],gt[a]=i,i=null!=n(e,t,r)?a:null,gt[a]=o),i}}));var vt=/^(?:input|select|textarea|button)$/i,mt=/^(?:a|area)$/i;function yt(e){return(e.match(M)||[]).join(" ")}function bt(e){return e.getAttribute&&e.getAttribute("class")||""}function xt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(M)||[]}T.fn.extend({prop:function(e,t){return z(this,T.prop,e,t,arguments.length>1)},removeProp:function(e){return this.each((function(){delete this[T.propFix[e]||e]}))}}),T.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&T.isXMLDoc(e)||(t=T.propFix[t]||t,i=T.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=T.find.attr(e,"tabindex");return t?parseInt(t,10):vt.test(e.nodeName)||mt.test(e.nodeName)&&e.href?0:-1}}},propFix:{for:"htmlFor",class:"className"}}),v.optSelected||(T.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),T.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],(function(){T.propFix[this.toLowerCase()]=this})),T.fn.extend({addClass:function(e){var t,n,r,i,o,a,s,u=0;if(m(e))return this.each((function(t){T(this).addClass(e.call(this,t,bt(this)))}));if((t=xt(e)).length)for(;n=this[u++];)if(i=bt(n),r=1===n.nodeType&&" "+yt(i)+" "){for(a=0;o=t[a++];)r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=yt(r))&&n.setAttribute("class",s)}return this},removeClass:function(e){var t,n,r,i,o,a,s,u=0;if(m(e))return this.each((function(t){T(this).removeClass(e.call(this,t,bt(this)))}));if(!arguments.length)return this.attr("class","");if((t=xt(e)).length)for(;n=this[u++];)if(i=bt(n),r=1===n.nodeType&&" "+yt(i)+" "){for(a=0;o=t[a++];)for(;r.indexOf(" "+o+" ")>-1;)r=r.replace(" "+o+" "," ");i!==(s=yt(r))&&n.setAttribute("class",s)}return this},toggleClass:function(e,t){var n=typeof e,r="string"===n||Array.isArray(e);return"boolean"==typeof t&&r?t?this.addClass(e):this.removeClass(e):m(e)?this.each((function(n){T(this).toggleClass(e.call(this,n,bt(this),t),t)})):this.each((function(){var t,i,o,a;if(r)for(i=0,o=T(this),a=xt(e);t=a[i++];)o.hasClass(t)?o.removeClass(t):o.addClass(t);else void 0!==e&&"boolean"!==n||((t=bt(this))&&J.set(this,"__className__",t),this.setAttribute&&this.setAttribute("class",t||!1===e?"":J.get(this,"__className__")||""))}))},hasClass:function(e){var t,n,r=0;for(t=" "+e+" ";n=this[r++];)if(1===n.nodeType&&(" "+yt(bt(n))+" ").indexOf(t)>-1)return!0;return!1}});var wt=/\r/g;T.fn.extend({val:function(e){var t,n,r,i=this[0];return arguments.length?(r=m(e),this.each((function(n){var i;1===this.nodeType&&(null==(i=r?e.call(this,n,T(this).val()):e)?i="":"number"==typeof i?i+="":Array.isArray(i)&&(i=T.map(i,(function(e){return null==e?"":e+""}))),(t=T.valHooks[this.type]||T.valHooks[this.nodeName.toLowerCase()])&&"set"in t&&void 0!==t.set(this,i,"value")||(this.value=i))}))):i?(t=T.valHooks[i.type]||T.valHooks[i.nodeName.toLowerCase()])&&"get"in t&&void 0!==(n=t.get(i,"value"))?n:"string"==typeof(n=i.value)?n.replace(wt,""):null==n?"":n:void 0}}),T.extend({valHooks:{option:{get:function(e){var t=T.find.attr(e,"value");return null!=t?t:yt(T.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!D(n.parentNode,"optgroup"))){if(t=T(n).val(),a)return t;s.push(t)}return s},set:function(e,t){for(var n,r,i=e.options,o=T.makeArray(t),a=i.length;a--;)((r=i[a]).selected=T.inArray(T.valHooks.option.get(r),o)>-1)&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),T.each(["radio","checkbox"],(function(){T.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=T.inArray(T(e).val(),t)>-1}},v.checkOn||(T.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})})),v.focusin="onfocusin"in n;var Ct=/^(?:focusinfocus|focusoutblur)$/,Tt=function(e){e.stopPropagation()};T.extend(T.event,{trigger:function(e,t,r,i){var o,a,s,u,l,c,f,d,h=[r||b],g=p.call(e,"type")?e.type:e,v=p.call(e,"namespace")?e.namespace.split("."):[];if(a=d=s=r=r||b,3!==r.nodeType&&8!==r.nodeType&&!Ct.test(g+T.event.triggered)&&(g.indexOf(".")>-1&&(v=g.split("."),g=v.shift(),v.sort()),l=g.indexOf(":")<0&&"on"+g,(e=e[T.expando]?e:new T.Event(g,"object"==typeof e&&e)).isTrigger=i?2:3,e.namespace=v.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+v.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=r),t=null==t?[e]:T.makeArray(t,[e]),f=T.event.special[g]||{},i||!f.trigger||!1!==f.trigger.apply(r,t))){if(!i&&!f.noBubble&&!y(r)){for(u=f.delegateType||g,Ct.test(u+g)||(a=a.parentNode);a;a=a.parentNode)h.push(a),s=a;s===(r.ownerDocument||b)&&h.push(s.defaultView||s.parentWindow||n)}for(o=0;(a=h[o++])&&!e.isPropagationStopped();)d=a,e.type=o>1?u:f.bindType||g,(c=(J.get(a,"events")||Object.create(null))[e.type]&&J.get(a,"handle"))&&c.apply(a,t),(c=l&&a[l])&&c.apply&&G(a)&&(e.result=c.apply(a,t),!1===e.result&&e.preventDefault());return e.type=g,i||e.isDefaultPrevented()||f._default&&!1!==f._default.apply(h.pop(),t)||!G(r)||l&&m(r[g])&&!y(r)&&((s=r[l])&&(r[l]=null),T.event.triggered=g,e.isPropagationStopped()&&d.addEventListener(g,Tt),r[g](),e.isPropagationStopped()&&d.removeEventListener(g,Tt),T.event.triggered=void 0,s&&(r[l]=s)),e.result}},simulate:function(e,t,n){var r=T.extend(new T.Event,n,{type:e,isSimulated:!0});T.event.trigger(r,null,t)}}),T.fn.extend({trigger:function(e,t){return this.each((function(){T.event.trigger(e,t,this)}))},triggerHandler:function(e,t){var n=this[0];if(n)return T.event.trigger(e,t,n,!0)}}),v.focusin||T.each({focus:"focusin",blur:"focusout"},(function(e,t){var n=function(e){T.event.simulate(t,e.target,T.event.fix(e))};T.event.special[t]={setup:function(){var r=this.ownerDocument||this.document||this,i=J.access(r,t);i||r.addEventListener(e,n,!0),J.access(r,t,(i||0)+1)},teardown:function(){var r=this.ownerDocument||this.document||this,i=J.access(r,t)-1;i?J.access(r,t,i):(r.removeEventListener(e,n,!0),J.remove(r,t))}}}));var kt=n.location,$t={guid:Date.now()},At=/\?/;T.parseXML=function(e){var t;if(!e||"string"!=typeof e)return null;try{t=(new n.DOMParser).parseFromString(e,"text/xml")}catch(e){t=void 0}return t&&!t.getElementsByTagName("parsererror").length||T.error("Invalid XML: "+e),t};var St=/\[\]$/,Et=/\r?\n/g,Dt=/^(?:submit|button|image|reset|file)$/i,jt=/^(?:input|select|textarea|keygen)/i;function qt(e,t,n,r){var i;if(Array.isArray(t))T.each(t,(function(t,i){n||St.test(e)?r(e,i):qt(e+"["+("object"==typeof i&&null!=i?t:"")+"]",i,n,r)}));else if(n||"object"!==C(t))r(e,t);else for(i in t)qt(e+"["+i+"]",t[i],n,r)}T.param=function(e,t){var n,r=[],i=function(e,t){var n=m(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!T.isPlainObject(e))T.each(e,(function(){i(this.name,this.value)}));else for(n in e)qt(n,e[n],t,i);return r.join("&")},T.fn.extend({serialize:function(){return T.param(this.serializeArray())},serializeArray:function(){return this.map((function(){var e=T.prop(this,"elements");return e?T.makeArray(e):this})).filter((function(){var e=this.type;return this.name&&!T(this).is(":disabled")&&jt.test(this.nodeName)&&!Dt.test(e)&&(this.checked||!ge.test(e))})).map((function(e,t){var n=T(this).val();return null==n?null:Array.isArray(n)?T.map(n,(function(e){return{name:t.name,value:e.replace(Et,"\r\n")}})):{name:t.name,value:n.replace(Et,"\r\n")}})).get()}});var Nt=/%20/g,Lt=/#.*$/,Ot=/([?&])_=[^&]*/,Ht=/^(.*?):[ \t]*([^\r\n]*)$/gm,Pt=/^(?:GET|HEAD)$/,Mt=/^\/\//,Rt={},It={},Ft="*/".concat("*"),Wt=b.createElement("a");function Bt(e){return function(t,n){"string"!=typeof t&&(n=t,t="*");var r,i=0,o=t.toLowerCase().match(M)||[];if(m(n))for(;r=o[i++];)"+"===r[0]?(r=r.slice(1)||"*",(e[r]=e[r]||[]).unshift(n)):(e[r]=e[r]||[]).push(n)}}function _t(e,t,n,r){var i={},o=e===It;function a(s){var u;return i[s]=!0,T.each(e[s]||[],(function(e,s){var l=s(t,n,r);return"string"!=typeof l||o||i[l]?o?!(u=l):void 0:(t.dataTypes.unshift(l),a(l),!1)})),u}return a(t.dataTypes[0])||!i["*"]&&a("*")}function zt(e,t){var n,r,i=T.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&T.extend(!0,e,r),e}Wt.href=kt.href,T.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:kt.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(kt.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Ft,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":T.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?zt(zt(e,T.ajaxSettings),t):zt(T.ajaxSettings,e)},ajaxPrefilter:Bt(Rt),ajaxTransport:Bt(It),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var r,i,o,a,s,u,l,c,f,d,p=T.ajaxSetup({},t),h=p.context||p,g=p.context&&(h.nodeType||h.jquery)?T(h):T.event,v=T.Deferred(),m=T.Callbacks("once memory"),y=p.statusCode||{},x={},w={},C="canceled",k={readyState:0,getResponseHeader:function(e){var t;if(l){if(!a)for(a={};t=Ht.exec(o);)a[t[1].toLowerCase()+" "]=(a[t[1].toLowerCase()+" "]||[]).concat(t[2]);t=a[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return l?o:null},setRequestHeader:function(e,t){return null==l&&(e=w[e.toLowerCase()]=w[e.toLowerCase()]||e,x[e]=t),this},overrideMimeType:function(e){return null==l&&(p.mimeType=e),this},statusCode:function(e){var t;if(e)if(l)k.always(e[k.status]);else for(t in e)y[t]=[y[t],e[t]];return this},abort:function(e){var t=e||C;return r&&r.abort(t),$(0,t),this}};if(v.promise(k),p.url=((e||p.url||kt.href)+"").replace(Mt,kt.protocol+"//"),p.type=t.method||t.type||p.method||p.type,p.dataTypes=(p.dataType||"*").toLowerCase().match(M)||[""],null==p.crossDomain){u=b.createElement("a");try{u.href=p.url,u.href=u.href,p.crossDomain=Wt.protocol+"//"+Wt.host!=u.protocol+"//"+u.host}catch(e){p.crossDomain=!0}}if(p.data&&p.processData&&"string"!=typeof p.data&&(p.data=T.param(p.data,p.traditional)),_t(Rt,p,t,k),l)return k;for(f in(c=T.event&&p.global)&&0==T.active++&&T.event.trigger("ajaxStart"),p.type=p.type.toUpperCase(),p.hasContent=!Pt.test(p.type),i=p.url.replace(Lt,""),p.hasContent?p.data&&p.processData&&0===(p.contentType||"").indexOf("application/x-www-form-urlencoded")&&(p.data=p.data.replace(Nt,"+")):(d=p.url.slice(i.length),p.data&&(p.processData||"string"==typeof p.data)&&(i+=(At.test(i)?"&":"?")+p.data,delete p.data),!1===p.cache&&(i=i.replace(Ot,"$1"),d=(At.test(i)?"&":"?")+"_="+$t.guid+++d),p.url=i+d),p.ifModified&&(T.lastModified[i]&&k.setRequestHeader("If-Modified-Since",T.lastModified[i]),T.etag[i]&&k.setRequestHeader("If-None-Match",T.etag[i])),(p.data&&p.hasContent&&!1!==p.contentType||t.contentType)&&k.setRequestHeader("Content-Type",p.contentType),k.setRequestHeader("Accept",p.dataTypes[0]&&p.accepts[p.dataTypes[0]]?p.accepts[p.dataTypes[0]]+("*"!==p.dataTypes[0]?", "+Ft+"; q=0.01":""):p.accepts["*"]),p.headers)k.setRequestHeader(f,p.headers[f]);if(p.beforeSend&&(!1===p.beforeSend.call(h,k,p)||l))return k.abort();if(C="abort",m.add(p.complete),k.done(p.success),k.fail(p.error),r=_t(It,p,t,k)){if(k.readyState=1,c&&g.trigger("ajaxSend",[k,p]),l)return k;p.async&&p.timeout>0&&(s=n.setTimeout((function(){k.abort("timeout")}),p.timeout));try{l=!1,r.send(x,$)}catch(e){if(l)throw e;$(-1,e)}}else $(-1,"No Transport");function $(e,t,a,u){var f,d,b,x,w,C=t;l||(l=!0,s&&n.clearTimeout(s),r=void 0,o=u||"",k.readyState=e>0?4:0,f=e>=200&&e<300||304===e,a&&(x=function(e,t,n){for(var r,i,o,a,s=e.contents,u=e.dataTypes;"*"===u[0];)u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}(p,k,a)),!f&&T.inArray("script",p.dataTypes)>-1&&(p.converters["text script"]=function(){}),x=function(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];for(o=c.shift();o;)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e.throws)t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(p,x,k,f),f?(p.ifModified&&((w=k.getResponseHeader("Last-Modified"))&&(T.lastModified[i]=w),(w=k.getResponseHeader("etag"))&&(T.etag[i]=w)),204===e||"HEAD"===p.type?C="nocontent":304===e?C="notmodified":(C=x.state,d=x.data,f=!(b=x.error))):(b=C,!e&&C||(C="error",e<0&&(e=0))),k.status=e,k.statusText=(t||C)+"",f?v.resolveWith(h,[d,C,k]):v.rejectWith(h,[k,C,b]),k.statusCode(y),y=void 0,c&&g.trigger(f?"ajaxSuccess":"ajaxError",[k,p,f?d:b]),m.fireWith(h,[k,C]),c&&(g.trigger("ajaxComplete",[k,p]),--T.active||T.event.trigger("ajaxStop")))}return k},getJSON:function(e,t,n){return T.get(e,t,n,"json")},getScript:function(e,t){return T.get(e,void 0,t,"script")}}),T.each(["get","post"],(function(e,t){T[t]=function(e,n,r,i){return m(n)&&(i=i||r,r=n,n=void 0),T.ajax(T.extend({url:e,type:t,dataType:i,data:n,success:r},T.isPlainObject(e)&&e))}})),T.ajaxPrefilter((function(e){var t;for(t in e.headers)"content-type"===t.toLowerCase()&&(e.contentType=e.headers[t]||"")})),T._evalUrl=function(e,t,n){return T.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){T.globalEval(e,t,n)}})},T.fn.extend({wrapAll:function(e){var t;return this[0]&&(m(e)&&(e=e.call(this[0])),t=T(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map((function(){for(var e=this;e.firstElementChild;)e=e.firstElementChild;return e})).append(this)),this},wrapInner:function(e){return m(e)?this.each((function(t){T(this).wrapInner(e.call(this,t))})):this.each((function(){var t=T(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)}))},wrap:function(e){var t=m(e);return this.each((function(n){T(this).wrapAll(t?e.call(this,n):e)}))},unwrap:function(e){return this.parent(e).not("body").each((function(){T(this).replaceWith(this.childNodes)})),this}}),T.expr.pseudos.hidden=function(e){return!T.expr.pseudos.visible(e)},T.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},T.ajaxSettings.xhr=function(){try{return new n.XMLHttpRequest}catch(e){}};var Ut={0:200,1223:204},Xt=T.ajaxSettings.xhr();v.cors=!!Xt&&"withCredentials"in Xt,v.ajax=Xt=!!Xt,T.ajaxTransport((function(e){var t,r;if(v.cors||Xt&&!e.crossDomain)return{send:function(i,o){var a,s=e.xhr();if(s.open(e.type,e.url,e.async,e.username,e.password),e.xhrFields)for(a in e.xhrFields)s[a]=e.xhrFields[a];for(a in e.mimeType&&s.overrideMimeType&&s.overrideMimeType(e.mimeType),e.crossDomain||i["X-Requested-With"]||(i["X-Requested-With"]="XMLHttpRequest"),i)s.setRequestHeader(a,i[a]);t=function(e){return function(){t&&(t=r=s.onload=s.onerror=s.onabort=s.ontimeout=s.onreadystatechange=null,"abort"===e?s.abort():"error"===e?"number"!=typeof s.status?o(0,"error"):o(s.status,s.statusText):o(Ut[s.status]||s.status,s.statusText,"text"!==(s.responseType||"text")||"string"!=typeof s.responseText?{binary:s.response}:{text:s.responseText},s.getAllResponseHeaders()))}},s.onload=t(),r=s.onerror=s.ontimeout=t("error"),void 0!==s.onabort?s.onabort=r:s.onreadystatechange=function(){4===s.readyState&&n.setTimeout((function(){t&&r()}))},t=t("abort");try{s.send(e.hasContent&&e.data||null)}catch(e){if(t)throw e}},abort:function(){t&&t()}}})),T.ajaxPrefilter((function(e){e.crossDomain&&(e.contents.script=!1)})),T.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return T.globalEval(e),e}}}),T.ajaxPrefilter("script",(function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")})),T.ajaxTransport("script",(function(e){var t,n;if(e.crossDomain||e.scriptAttrs)return{send:function(r,i){t=T("<script>").attr(e.scriptAttrs||{}).prop({charset:e.scriptCharset,src:e.url}).on("load error",n=function(e){t.remove(),n=null,e&&i("error"===e.type?404:200,e.type)}),b.head.appendChild(t[0])},abort:function(){n&&n()}}}));var Vt,Qt=[],Gt=/(=)\?(?=&|$)|\?\?/;T.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Qt.pop()||T.expando+"_"+$t.guid++;return this[e]=!0,e}}),T.ajaxPrefilter("json jsonp",(function(e,t,r){var i,o,a,s=!1!==e.jsonp&&(Gt.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Gt.test(e.data)&&"data");if(s||"jsonp"===e.dataTypes[0])return i=e.jsonpCallback=m(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,s?e[s]=e[s].replace(Gt,"$1"+i):!1!==e.jsonp&&(e.url+=(At.test(e.url)?"&":"?")+e.jsonp+"="+i),e.converters["script json"]=function(){return a||T.error(i+" was not called"),a[0]},e.dataTypes[0]="json",o=n[i],n[i]=function(){a=arguments},r.always((function(){void 0===o?T(n).removeProp(i):n[i]=o,e[i]&&(e.jsonpCallback=t.jsonpCallback,Qt.push(i)),a&&m(o)&&o(a[0]),a=o=void 0})),"script"})),v.createHTMLDocument=((Vt=b.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Vt.childNodes.length),T.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(v.createHTMLDocument?((r=(t=b.implementation.createHTMLDocument("")).createElement("base")).href=b.location.href,t.head.appendChild(r)):t=b),o=!n&&[],(i=j.exec(e))?[t.createElement(i[1])]:(i=Ce([e],t,o),o&&o.length&&T(o).remove(),T.merge([],i.childNodes)));var r,i,o},T.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return s>-1&&(r=yt(e.slice(s)),e=e.slice(0,s)),m(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),a.length>0&&T.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done((function(e){o=arguments,a.html(r?T("<div>").append(T.parseHTML(e)).find(r):e)})).always(n&&function(e,t){a.each((function(){n.apply(this,o||[e.responseText,t,e])}))}),this},T.expr.pseudos.animated=function(e){return T.grep(T.timers,(function(t){return e===t.elem})).length},T.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l=T.css(e,"position"),c=T(e),f={};"static"===l&&(e.style.position="relative"),s=c.offset(),o=T.css(e,"top"),u=T.css(e,"left"),("absolute"===l||"fixed"===l)&&(o+u).indexOf("auto")>-1?(a=(r=c.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),m(t)&&(t=t.call(e,n,T.extend({},s))),null!=t.top&&(f.top=t.top-s.top+a),null!=t.left&&(f.left=t.left-s.left+i),"using"in t?t.using.call(e,f):("number"==typeof f.top&&(f.top+="px"),"number"==typeof f.left&&(f.left+="px"),c.css(f))}},T.fn.extend({offset:function(e){if(arguments.length)return void 0===e?this:this.each((function(t){T.offset.setOffset(this,e,t)}));var t,n,r=this[0];return r?r.getClientRects().length?(t=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:t.top+n.pageYOffset,left:t.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===T.css(r,"position"))t=r.getBoundingClientRect();else{for(t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;e&&(e===n.body||e===n.documentElement)&&"static"===T.css(e,"position");)e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=T(e).offset()).top+=T.css(e,"borderTopWidth",!0),i.left+=T.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-T.css(r,"marginTop",!0),left:t.left-i.left-T.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map((function(){for(var e=this.offsetParent;e&&"static"===T.css(e,"position");)e=e.offsetParent;return e||oe}))}}),T.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},(function(e,t){var n="pageYOffset"===t;T.fn[e]=function(r){return z(this,(function(e,r,i){var o;if(y(e)?o=e:9===e.nodeType&&(o=e.defaultView),void 0===i)return o?o[t]:e[r];o?o.scrollTo(n?o.pageXOffset:i,n?i:o.pageYOffset):e[r]=i}),e,r,arguments.length)}})),T.each(["top","left"],(function(e,t){T.cssHooks[t]=Xe(v.pixelPosition,(function(e,n){if(n)return n=Ue(e,t),We.test(n)?T(e).position()[t]+"px":n}))})),T.each({Height:"height",Width:"width"},(function(e,t){T.each({padding:"inner"+e,content:t,"":"outer"+e},(function(n,r){T.fn[r]=function(i,o){var a=arguments.length&&(n||"boolean"!=typeof i),s=n||(!0===i||!0===o?"margin":"border");return z(this,(function(t,n,i){var o;return y(t)?0===r.indexOf("outer")?t["inner"+e]:t.document.documentElement["client"+e]:9===t.nodeType?(o=t.documentElement,Math.max(t.body["scroll"+e],o["scroll"+e],t.body["offset"+e],o["offset"+e],o["client"+e])):void 0===i?T.css(t,n,s):T.style(t,n,i,s)}),t,a?i:void 0,a)}}))})),T.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],(function(e,t){T.fn[t]=function(e){return this.on(t,e)}})),T.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)},hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),T.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),(function(e,t){T.fn[t]=function(e,n){return arguments.length>0?this.on(t,null,e,n):this.trigger(t)}}));var Yt=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;T.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),m(e))return r=s.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(s.call(arguments)))}).guid=e.guid=e.guid||T.guid++,i},T.holdReady=function(e){e?T.readyWait++:T.ready(!0)},T.isArray=Array.isArray,T.parseJSON=JSON.parse,T.nodeName=D,T.isFunction=m,T.isWindow=y,T.camelCase=Q,T.type=C,T.now=Date.now,T.isNumeric=function(e){var t=T.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},T.trim=function(e){return null==e?"":(e+"").replace(Yt,"")},void 0===(r=function(){return T}.apply(t,[]))||(e.exports=r);var Jt=n.jQuery,Kt=n.$;return T.noConflict=function(e){return n.$===T&&(n.$=Kt),e&&n.jQuery===T&&(n.jQuery=Jt),T},void 0===i&&(n.jQuery=n.$=T),T}))},function(e,t,n){
/*! lozad.js - v1.16.0 - 2020-09-06
* https://github.com/ApoorvSaxena/lozad.js
* Copyright (c) 2020 Apoorv Saxena; Licensed MIT */
e.exports=function(){"use strict";var e="undefined"!=typeof document&&document.documentMode,t={rootMargin:"0px",threshold:0,load:function(t){if("picture"===t.nodeName.toLowerCase()){var n=t.querySelector("img"),r=!1;null===n&&(n=document.createElement("img"),r=!0),e&&t.getAttribute("data-iesrc")&&(n.src=t.getAttribute("data-iesrc")),t.getAttribute("data-alt")&&(n.alt=t.getAttribute("data-alt")),r&&t.append(n)}if("video"===t.nodeName.toLowerCase()&&!t.getAttribute("data-src")&&t.children){for(var i=t.children,o=void 0,a=0;a<=i.length-1;a++)(o=i[a].getAttribute("data-src"))&&(i[a].src=o);t.load()}t.getAttribute("data-poster")&&(t.poster=t.getAttribute("data-poster")),t.getAttribute("data-src")&&(t.src=t.getAttribute("data-src")),t.getAttribute("data-srcset")&&t.setAttribute("srcset",t.getAttribute("data-srcset"));var s=",";if(t.getAttribute("data-background-delimiter")&&(s=t.getAttribute("data-background-delimiter")),t.getAttribute("data-background-image"))t.style.backgroundImage="url('"+t.getAttribute("data-background-image").split(s).join("'),url('")+"')";else if(t.getAttribute("data-background-image-set")){var u=t.getAttribute("data-background-image-set").split(s),l=u[0].substr(0,u[0].indexOf(" "))||u[0];l=-1===l.indexOf("url(")?"url("+l+")":l,1===u.length?t.style.backgroundImage=l:t.setAttribute("style",(t.getAttribute("style")||"")+"background-image: "+l+"; background-image: -webkit-image-set("+u+"); background-image: image-set("+u+")")}t.getAttribute("data-toggle-class")&&t.classList.toggle(t.getAttribute("data-toggle-class"))},loaded:function(){}};function n(e){e.setAttribute("data-loaded",!0)}var r=function(e){return"true"===e.getAttribute("data-loaded")},i=function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:document;return e instanceof Element?[e]:e instanceof NodeList?e:t.querySelectorAll(e)};return function(){var e,o,a=0<arguments.length&&void 0!==arguments[0]?arguments[0]:".lozad",s=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},u=Object.assign({},t,s),l=u.root,c=u.rootMargin,f=u.threshold,d=u.load,p=u.loaded,h=void 0;"undefined"!=typeof window&&window.IntersectionObserver&&(h=new IntersectionObserver((e=d,o=p,function(t,i){t.forEach((function(t){(0<t.intersectionRatio||t.isIntersecting)&&(i.unobserve(t.target),r(t.target)||(e(t.target),n(t.target),o(t.target)))}))}),{root:l,rootMargin:c,threshold:f}));for(var g,v=i(a,l),m=0;m<v.length;m++)(g=v[m]).getAttribute("data-placeholder-background")&&(g.style.background=g.getAttribute("data-placeholder-background"));return{observe:function(){for(var e=i(a,l),t=0;t<e.length;t++)r(e[t])||(h?h.observe(e[t]):(d(e[t]),n(e[t]),p(e[t])))},triggerLoad:function(e){r(e)||(d(e),n(e),p(e))},observer:h}}}()},function(e,t,n){n(3),e.exports=n(4)},function(e,t,n){"use strict";n.r(t);var r=n(0),i=n.n(r),o=n(1),a=n.n(o);window.jQuery=i.a,window.$=i.a,window.addEventListener("load",(function(){a()().observe()})),jQuery(document).ready((function(){jQuery(".orbit-container").length&&jQuery(".orbit-container").slick({autoplay:!0,autoplaySpeed:3e3,fade:!0})})),$(document).ready((function(){if($(".calltoaction").length){$(".calltoaction").offset().top;$(window).scroll((function(){$(window).scrollTop()>=1?$(".calltoaction").addClass("fixed"):$(".calltoaction").removeClass("fixed")}))}})),$(document).ready((function(){$(window).scroll((function(){$(window).scrollTop()>=1?$(".main").addClass("fixedmain"):$(".main").removeClass("fixedmain")})),$(window).scrollTop()>=1&&$(".main").addClass("fixedmain")})),window.addEventListener("load",(function(){var e=!1;$(document).on("click","a.menu-icon-toggle",(function(t){t.preventDefault(),0==e?($("nav.top").addClass("active-menu"),$("a.menu-icon-toggle .txt").text("Close"),e=!0):($("nav.top").removeClass("active-menu"),$("a.menu-icon-toggle .txt").text("Menu"),e=!1)}))})),$('a[href*="#"]').on("click",(function(e){$("html,body").animate({scrollTop:$($(this).attr("href")).offset().top-50},800),e.preventDefault()})),$(document).ready((function(){$(".rvl,.reganim,.imgslide").length&&$(".rvl,.reganim,.imgslide").each((function(e){var t=$(this).offset().top;$(window).scrollTop()+$(window).height()>t?$(this).addClass("animatein"):$(window).scroll((function(){$(".rvl,.reganim,.imgslide").each((function(e){var t=$(this).offset().top;$(window).scrollTop()+$(window).height()>t?$(this).addClass("animatein"):$(this).removeClass("animatein")}))}))}))})),$(document).on("click","[data-toggle]",(function(e){e.preventDefault();var t=$(this).data("toggle");$("#"+t).addClass("active"),$(".reveal-overlay").addClass("active")})),$(document).on("click","button.close-button, .reveal-overlay",(function(e){e.preventDefault(),$(".reveal").removeClass("active"),$(".reveal-overlay").removeClass("active")})),window.onload=function(){var e,t;$(".click").length&&(console.log("d"),$(document).on("click",".click",(function(t){t.stopPropagation(),t.preventDefault(),e=$(this).attr("data-opentab"),$(".click").parent(".faq-block").siblings().find(".click").removeClass("active-faq"),$(".click").parent(".faq-block").siblings().find(".block-content").removeClass("active-faq"),"0"==e?($(".click").attr("data-opentab","0"),$(this).addClass("active-faq"),$(this).siblings(".block-content").addClass("active-faq"),$(this).attr("data-opentab","1")):($(this).removeClass("active-faq"),$(this).siblings(".block-content").removeClass("active-faq"),$(this).attr("data-opentab","0"))})),$(document).on("click",".item .title",(function(e){e.preventDefault(),e.stopPropagation(),$(".item").removeClass("active-faq"),$(".title").removeClass("active-faq"),$(".item-block").removeClass("active-faq"),"false"==(t=$(this).closest(".item").attr("data-opentab"))&&($(".item").attr("data-opentab","false"),$(this).closest(".item").addClass("active-faq"),$(this).addClass("active-faq"),$(this).closest(".item").find(".item-block").addClass("active-faq"),$(this).closest(".item").attr("data-opentab","true")),"true"==t&&($(this).removeClass("active-faq"),$(this).closest(".item").find(".title").removeClass("active-faq"),$(this).closest(".item").find(".item-block").removeClass("active-faq"),$(this).closest(".item").attr("data-opentab","false"))})),$("span.close-itcon").on("click",(function(e){e.stopPropagation(),$(".active-faq.item-block, .active-faq.title, .active-faq.item").removeClass("active-faq"),$(".item").attr("data-opentab","false")})))},$(document).ready((function(){$(".has-animation").each((function(e){$(this).delay($(this).data("delay")).queue((function(){$(this).addClass("animate-in")}))}))})),$(document).ready((function(){setInterval((function(){setTimeout((function(){}),0),setTimeout((function(){}),600)}),4e3)})),$(document).ready((function(){$(".closeicon").on("click",(function(e){e.preventDefault(),$("section.popblog").fadeOut()}))})),$(document).ready((function(){$(".nm").on("click",(function(e){e.preventDefault(),$(this).toggleClass("act")}))})),localStorage.getItem("popUp")?$("#dialog1").hide():$(document).ready((function(){setTimeout((function(){$("section.popblog").css("display","flex").hide().fadeIn()}),3e4),localStorage.setItem("popUp",1)})),$(document).ready((function(){var e=$(".quoteitems .quoteitem").length,t=1;$(".quoteitems .quoteitem:nth-child(1)").addClass("fadeactive");var n=!1;window.setInterval((function(){n||($(".quoteitems .quoteitem").removeClass("fadeactive"),t==e&&(t=0),t++,setTimeout((function(){$(".quoteitems .quoteitem:nth-child("+t+")").addClass("fadeactive")}),300))}),6e3);$(".quoteitems").on("click",(function(e){e.preventDefault(),n=0==n}));var r=250;$(".quoteitems .quoteitem").each((function(){$(this).height()>r&&(r=$(this).height())})),$(".quoteitems .quoteitem").css("min-height",r),$(".quoteitems .quoteitems").css("min-height",r+30)})),$(document).ready((function(){$("input.referralinput").keyup((function(){$("input.referralinput").each((function(){""==$(this).val()?$(this).removeClass("hasval"):$(this).addClass("hasval")}))}));var e=!0;if($(document).on("keyup","input.hasval",(function(){$("input.hasval").each((function(){if(""!=$(this).val()){var t=$(this).closest(".medium-6").siblings(".medium-6").find("input.referralinput");e=""==$(t).val()}else e=!0})),1==e?($("input#Submit").attr("disabled","disabled"),$(".addtional-people").removeClass("addcontact")):($("input#Submit").removeAttr("disabled"),$(".addtional-people").addClass("addcontact"))})),$(".item-referrals").length){$(".item-referrals .grid-x.grid-padding-x").hide(0),$(".item-referrals .grid-x.grid-padding-x:nth-child(1)").slideDown();var t=1;$(".addtional-people .text").on("click",(function(){0==e&&(t++,e=!0,$("input#Submit").attr("disabled","disabled"),$(".addtional-people").removeClass("addcontact"),t>=5&&$(".addtional-people").fadeOut(),$(".item-referrals .grid-x.grid-padding-x:nth-child("+t+")").slideDown())})),$("form#referralForm input, .form-content input,.form-content textarea").focus((function(){$(this).siblings("span").addClass("hasstext")})),$("form#referralForm input, .form-content input,.form-content textarea").on("blur",(function(){$(this).val()?$(this).siblings("span").addClass("hasstext"):$(this).siblings("span").removeClass("hasstext")}))}})),$(document).ready((function(){$("section.rapid figure.list video").length&&$("section.rapid figure.list video").each((function(e){var t=$(this).offset().top;$(window).scrollTop()+$(window).height()>t?($(this).addClass("animatein"),$(this).get(0).play()):$(window).scroll((function(){$("section.rapid figure.list video").each((function(e){var t=$(this).offset().top;$(window).scrollTop()+$(window).height()>t?($(this).addClass("animatein"),$(this).get(0).play()):$(this).removeClass("animatein")}))}))}))}))},function(e,t,n){}]);

    /**
 * Swiper 7.0.8
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2021 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: October 4, 2021
 */

!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e="undefined"!=typeof globalThis?globalThis:e||self).Swiper=t()}(this,(function(){"use strict";function e(e){return null!==e&&"object"==typeof e&&"constructor"in e&&e.constructor===Object}function t(s={},a={}){Object.keys(a).forEach((i=>{void 0===s[i]?s[i]=a[i]:e(a[i])&&e(s[i])&&Object.keys(a[i]).length>0&&t(s[i],a[i])}))}const s={body:{},addEventListener(){},removeEventListener(){},activeElement:{blur(){},nodeName:""},querySelector:()=>null,querySelectorAll:()=>[],getElementById:()=>null,createEvent:()=>({initEvent(){}}),createElement:()=>({children:[],childNodes:[],style:{},setAttribute(){},getElementsByTagName:()=>[]}),createElementNS:()=>({}),importNode:()=>null,location:{hash:"",host:"",hostname:"",href:"",origin:"",pathname:"",protocol:"",search:""}};function a(){const e="undefined"!=typeof document?document:{};return t(e,s),e}const i={document:s,navigator:{userAgent:""},location:{hash:"",host:"",hostname:"",href:"",origin:"",pathname:"",protocol:"",search:""},history:{replaceState(){},pushState(){},go(){},back(){}},CustomEvent:function(){return this},addEventListener(){},removeEventListener(){},getComputedStyle:()=>({getPropertyValue:()=>""}),Image(){},Date(){},screen:{},setTimeout(){},clearTimeout(){},matchMedia:()=>({}),requestAnimationFrame:e=>"undefined"==typeof setTimeout?(e(),null):setTimeout(e,0),cancelAnimationFrame(e){"undefined"!=typeof setTimeout&&clearTimeout(e)}};function r(){const e="undefined"!=typeof window?window:{};return t(e,i),e}class n extends Array{constructor(e){super(...e||[]),function(e){const t=e.__proto__;Object.defineProperty(e,"__proto__",{get:()=>t,set(e){t.__proto__=e}})}(this)}}function l(e=[]){const t=[];return e.forEach((e=>{Array.isArray(e)?t.push(...l(e)):t.push(e)})),t}function o(e,t){return Array.prototype.filter.call(e,t)}function d(e,t){const s=r(),i=a();let l=[];if(!t&&e instanceof n)return e;if(!e)return new n(l);if("string"==typeof e){const s=e.trim();if(s.indexOf("<")>=0&&s.indexOf(">")>=0){let e="div";0===s.indexOf("<li")&&(e="ul"),0===s.indexOf("<tr")&&(e="tbody"),0!==s.indexOf("<td")&&0!==s.indexOf("<th")||(e="tr"),0===s.indexOf("<tbody")&&(e="table"),0===s.indexOf("<option")&&(e="select");const t=i.createElement(e);t.innerHTML=s;for(let e=0;e<t.childNodes.length;e+=1)l.push(t.childNodes[e])}else l=function(e,t){if("string"!=typeof e)return[e];const s=[],a=t.querySelectorAll(e);for(let e=0;e<a.length;e+=1)s.push(a[e]);return s}(e.trim(),t||i)}else if(e.nodeType||e===s||e===i)l.push(e);else if(Array.isArray(e)){if(e instanceof n)return e;l=e}return new n(function(e){const t=[];for(let s=0;s<e.length;s+=1)-1===t.indexOf(e[s])&&t.push(e[s]);return t}(l))}d.fn=n.prototype;const c={addClass:function(...e){const t=l(e.map((e=>e.split(" "))));return this.forEach((e=>{e.classList.add(...t)})),this},removeClass:function(...e){const t=l(e.map((e=>e.split(" "))));return this.forEach((e=>{e.classList.remove(...t)})),this},hasClass:function(...e){const t=l(e.map((e=>e.split(" "))));return o(this,(e=>t.filter((t=>e.classList.contains(t))).length>0)).length>0},toggleClass:function(...e){const t=l(e.map((e=>e.split(" "))));this.forEach((e=>{t.forEach((t=>{e.classList.toggle(t)}))}))},attr:function(e,t){if(1===arguments.length&&"string"==typeof e)return this[0]?this[0].getAttribute(e):void 0;for(let s=0;s<this.length;s+=1)if(2===arguments.length)this[s].setAttribute(e,t);else for(const t in e)this[s][t]=e[t],this[s].setAttribute(t,e[t]);return this},removeAttr:function(e){for(let t=0;t<this.length;t+=1)this[t].removeAttribute(e);return this},transform:function(e){for(let t=0;t<this.length;t+=1)this[t].style.transform=e;return this},transition:function(e){for(let t=0;t<this.length;t+=1)this[t].style.transitionDuration="string"!=typeof e?`${e}ms`:e;return this},on:function(...e){let[t,s,a,i]=e;function r(e){const t=e.target;if(!t)return;const i=e.target.dom7EventData||[];if(i.indexOf(e)<0&&i.unshift(e),d(t).is(s))a.apply(t,i);else{const e=d(t).parents();for(let t=0;t<e.length;t+=1)d(e[t]).is(s)&&a.apply(e[t],i)}}function n(e){const t=e&&e.target&&e.target.dom7EventData||[];t.indexOf(e)<0&&t.unshift(e),a.apply(this,t)}"function"==typeof e[1]&&([t,a,i]=e,s=void 0),i||(i=!1);const l=t.split(" ");let o;for(let e=0;e<this.length;e+=1){const t=this[e];if(s)for(o=0;o<l.length;o+=1){const e=l[o];t.dom7LiveListeners||(t.dom7LiveListeners={}),t.dom7LiveListeners[e]||(t.dom7LiveListeners[e]=[]),t.dom7LiveListeners[e].push({listener:a,proxyListener:r}),t.addEventListener(e,r,i)}else for(o=0;o<l.length;o+=1){const e=l[o];t.dom7Listeners||(t.dom7Listeners={}),t.dom7Listeners[e]||(t.dom7Listeners[e]=[]),t.dom7Listeners[e].push({listener:a,proxyListener:n}),t.addEventListener(e,n,i)}}return this},off:function(...e){let[t,s,a,i]=e;"function"==typeof e[1]&&([t,a,i]=e,s=void 0),i||(i=!1);const r=t.split(" ");for(let e=0;e<r.length;e+=1){const t=r[e];for(let e=0;e<this.length;e+=1){const r=this[e];let n;if(!s&&r.dom7Listeners?n=r.dom7Listeners[t]:s&&r.dom7LiveListeners&&(n=r.dom7LiveListeners[t]),n&&n.length)for(let e=n.length-1;e>=0;e-=1){const s=n[e];a&&s.listener===a||a&&s.listener&&s.listener.dom7proxy&&s.listener.dom7proxy===a?(r.removeEventListener(t,s.proxyListener,i),n.splice(e,1)):a||(r.removeEventListener(t,s.proxyListener,i),n.splice(e,1))}}}return this},trigger:function(...e){const t=r(),s=e[0].split(" "),a=e[1];for(let i=0;i<s.length;i+=1){const r=s[i];for(let s=0;s<this.length;s+=1){const i=this[s];if(t.CustomEvent){const s=new t.CustomEvent(r,{detail:a,bubbles:!0,cancelable:!0});i.dom7EventData=e.filter(((e,t)=>t>0)),i.dispatchEvent(s),i.dom7EventData=[],delete i.dom7EventData}}}return this},transitionEnd:function(e){const t=this;return e&&t.on("transitionend",(function s(a){a.target===this&&(e.call(this,a),t.off("transitionend",s))})),this},outerWidth:function(e){if(this.length>0){if(e){const e=this.styles();return this[0].offsetWidth+parseFloat(e.getPropertyValue("margin-right"))+parseFloat(e.getPropertyValue("margin-left"))}return this[0].offsetWidth}return null},outerHeight:function(e){if(this.length>0){if(e){const e=this.styles();return this[0].offsetHeight+parseFloat(e.getPropertyValue("margin-top"))+parseFloat(e.getPropertyValue("margin-bottom"))}return this[0].offsetHeight}return null},styles:function(){const e=r();return this[0]?e.getComputedStyle(this[0],null):{}},offset:function(){if(this.length>0){const e=r(),t=a(),s=this[0],i=s.getBoundingClientRect(),n=t.body,l=s.clientTop||n.clientTop||0,o=s.clientLeft||n.clientLeft||0,d=s===e?e.scrollY:s.scrollTop,c=s===e?e.scrollX:s.scrollLeft;return{top:i.top+d-l,left:i.left+c-o}}return null},css:function(e,t){const s=r();let a;if(1===arguments.length){if("string"!=typeof e){for(a=0;a<this.length;a+=1)for(const t in e)this[a].style[t]=e[t];return this}if(this[0])return s.getComputedStyle(this[0],null).getPropertyValue(e)}if(2===arguments.length&&"string"==typeof e){for(a=0;a<this.length;a+=1)this[a].style[e]=t;return this}return this},each:function(e){return e?(this.forEach(((t,s)=>{e.apply(t,[t,s])})),this):this},html:function(e){if(void 0===e)return this[0]?this[0].innerHTML:null;for(let t=0;t<this.length;t+=1)this[t].innerHTML=e;return this},text:function(e){if(void 0===e)return this[0]?this[0].textContent.trim():null;for(let t=0;t<this.length;t+=1)this[t].textContent=e;return this},is:function(e){const t=r(),s=a(),i=this[0];let l,o;if(!i||void 0===e)return!1;if("string"==typeof e){if(i.matches)return i.matches(e);if(i.webkitMatchesSelector)return i.webkitMatchesSelector(e);if(i.msMatchesSelector)return i.msMatchesSelector(e);for(l=d(e),o=0;o<l.length;o+=1)if(l[o]===i)return!0;return!1}if(e===s)return i===s;if(e===t)return i===t;if(e.nodeType||e instanceof n){for(l=e.nodeType?[e]:e,o=0;o<l.length;o+=1)if(l[o]===i)return!0;return!1}return!1},index:function(){let e,t=this[0];if(t){for(e=0;null!==(t=t.previousSibling);)1===t.nodeType&&(e+=1);return e}},eq:function(e){if(void 0===e)return this;const t=this.length;if(e>t-1)return d([]);if(e<0){const s=t+e;return d(s<0?[]:[this[s]])}return d([this[e]])},append:function(...e){let t;const s=a();for(let a=0;a<e.length;a+=1){t=e[a];for(let e=0;e<this.length;e+=1)if("string"==typeof t){const a=s.createElement("div");for(a.innerHTML=t;a.firstChild;)this[e].appendChild(a.firstChild)}else if(t instanceof n)for(let s=0;s<t.length;s+=1)this[e].appendChild(t[s]);else this[e].appendChild(t)}return this},prepend:function(e){const t=a();let s,i;for(s=0;s<this.length;s+=1)if("string"==typeof e){const a=t.createElement("div");for(a.innerHTML=e,i=a.childNodes.length-1;i>=0;i-=1)this[s].insertBefore(a.childNodes[i],this[s].childNodes[0])}else if(e instanceof n)for(i=0;i<e.length;i+=1)this[s].insertBefore(e[i],this[s].childNodes[0]);else this[s].insertBefore(e,this[s].childNodes[0]);return this},next:function(e){return this.length>0?e?this[0].nextElementSibling&&d(this[0].nextElementSibling).is(e)?d([this[0].nextElementSibling]):d([]):this[0].nextElementSibling?d([this[0].nextElementSibling]):d([]):d([])},nextAll:function(e){const t=[];let s=this[0];if(!s)return d([]);for(;s.nextElementSibling;){const a=s.nextElementSibling;e?d(a).is(e)&&t.push(a):t.push(a),s=a}return d(t)},prev:function(e){if(this.length>0){const t=this[0];return e?t.previousElementSibling&&d(t.previousElementSibling).is(e)?d([t.previousElementSibling]):d([]):t.previousElementSibling?d([t.previousElementSibling]):d([])}return d([])},prevAll:function(e){const t=[];let s=this[0];if(!s)return d([]);for(;s.previousElementSibling;){const a=s.previousElementSibling;e?d(a).is(e)&&t.push(a):t.push(a),s=a}return d(t)},parent:function(e){const t=[];for(let s=0;s<this.length;s+=1)null!==this[s].parentNode&&(e?d(this[s].parentNode).is(e)&&t.push(this[s].parentNode):t.push(this[s].parentNode));return d(t)},parents:function(e){const t=[];for(let s=0;s<this.length;s+=1){let a=this[s].parentNode;for(;a;)e?d(a).is(e)&&t.push(a):t.push(a),a=a.parentNode}return d(t)},closest:function(e){let t=this;return void 0===e?d([]):(t.is(e)||(t=t.parents(e).eq(0)),t)},find:function(e){const t=[];for(let s=0;s<this.length;s+=1){const a=this[s].querySelectorAll(e);for(let e=0;e<a.length;e+=1)t.push(a[e])}return d(t)},children:function(e){const t=[];for(let s=0;s<this.length;s+=1){const a=this[s].children;for(let s=0;s<a.length;s+=1)e&&!d(a[s]).is(e)||t.push(a[s])}return d(t)},filter:function(e){return d(o(this,e))},remove:function(){for(let e=0;e<this.length;e+=1)this[e].parentNode&&this[e].parentNode.removeChild(this[e]);return this}};function p(e,t=0){return setTimeout(e,t)}function u(){return Date.now()}function h(e,t="x"){const s=r();let a,i,n;const l=function(e){const t=r();let s;return t.getComputedStyle&&(s=t.getComputedStyle(e,null)),!s&&e.currentStyle&&(s=e.currentStyle),s||(s=e.style),s}(e);return s.WebKitCSSMatrix?(i=l.transform||l.webkitTransform,i.split(",").length>6&&(i=i.split(", ").map((e=>e.replace(",","."))).join(", ")),n=new s.WebKitCSSMatrix("none"===i?"":i)):(n=l.MozTransform||l.OTransform||l.MsTransform||l.msTransform||l.transform||l.getPropertyValue("transform").replace("translate(","matrix(1, 0, 0, 1,"),a=n.toString().split(",")),"x"===t&&(i=s.WebKitCSSMatrix?n.m41:16===a.length?parseFloat(a[12]):parseFloat(a[4])),"y"===t&&(i=s.WebKitCSSMatrix?n.m42:16===a.length?parseFloat(a[13]):parseFloat(a[5])),i||0}function m(e){return"object"==typeof e&&null!==e&&e.constructor&&"Object"===Object.prototype.toString.call(e).slice(8,-1)}function f(...e){const t=Object(e[0]),s=["__proto__","constructor","prototype"];for(let i=1;i<e.length;i+=1){const r=e[i];if(null!=r&&(a=r,!("undefined"!=typeof window&&void 0!==window.HTMLElement?a instanceof HTMLElement:a&&(1===a.nodeType||11===a.nodeType)))){const e=Object.keys(Object(r)).filter((e=>s.indexOf(e)<0));for(let s=0,a=e.length;s<a;s+=1){const a=e[s],i=Object.getOwnPropertyDescriptor(r,a);void 0!==i&&i.enumerable&&(m(t[a])&&m(r[a])?r[a].__swiper__?t[a]=r[a]:f(t[a],r[a]):!m(t[a])&&m(r[a])?(t[a]={},r[a].__swiper__?t[a]=r[a]:f(t[a],r[a])):t[a]=r[a])}}}var a;return t}function g(e,t,s){e.style.setProperty(t,s)}function v({swiper:e,targetPosition:t,side:s}){const a=r(),i=-e.translate;let n,l=null;const o=e.params.speed;e.wrapperEl.style.scrollSnapType="none",a.cancelAnimationFrame(e.cssModeFrameID);const d=t>i?"next":"prev",c=(e,t)=>"next"===d&&e>=t||"prev"===d&&e<=t,p=()=>{n=(new Date).getTime(),null===l&&(l=n);const r=Math.max(Math.min((n-l)/o,1),0),d=.5-Math.cos(r*Math.PI)/2;let u=i+d*(t-i);if(c(u,t)&&(u=t),e.wrapperEl.scrollTo({[s]:u}),c(u,t))return e.wrapperEl.style.overflow="hidden",e.wrapperEl.style.scrollSnapType="",setTimeout((()=>{e.wrapperEl.style.overflow="",e.wrapperEl.scrollTo({[s]:u})})),void a.cancelAnimationFrame(e.cssModeFrameID);e.cssModeFrameID=a.requestAnimationFrame(p)};p()}let w,b,x;function y(){return w||(w=function(){const e=r(),t=a();return{smoothScroll:t.documentElement&&"scrollBehavior"in t.documentElement.style,touch:!!("ontouchstart"in e||e.DocumentTouch&&t instanceof e.DocumentTouch),passiveListener:function(){let t=!1;try{const s=Object.defineProperty({},"passive",{get(){t=!0}});e.addEventListener("testPassiveListener",null,s)}catch(e){}return t}(),gestures:"ongesturestart"in e}}()),w}function E(e={}){return b||(b=function({userAgent:e}={}){const t=y(),s=r(),a=s.navigator.platform,i=e||s.navigator.userAgent,n={ios:!1,android:!1},l=s.screen.width,o=s.screen.height,d=i.match(/(Android);?[\s\/]+([\d.]+)?/);let c=i.match(/(iPad).*OS\s([\d_]+)/);const p=i.match(/(iPod)(.*OS\s([\d_]+))?/),u=!c&&i.match(/(iPhone\sOS|iOS)\s([\d_]+)/),h="Win32"===a;let m="MacIntel"===a;return!c&&m&&t.touch&&["1024x1366","1366x1024","834x1194","1194x834","834x1112","1112x834","768x1024","1024x768","820x1180","1180x820","810x1080","1080x810"].indexOf(`${l}x${o}`)>=0&&(c=i.match(/(Version)\/([\d.]+)/),c||(c=[0,1,"13_0_0"]),m=!1),d&&!h&&(n.os="android",n.android=!0),(c||u||p)&&(n.os="ios",n.ios=!0),n}(e)),b}function T(){return x||(x=function(){const e=r();return{isSafari:function(){const t=e.navigator.userAgent.toLowerCase();return t.indexOf("safari")>=0&&t.indexOf("chrome")<0&&t.indexOf("android")<0}(),isWebView:/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(e.navigator.userAgent)}}()),x}Object.keys(c).forEach((e=>{Object.defineProperty(d.fn,e,{value:c[e],writable:!0})}));var C={on(e,t,s){const a=this;if("function"!=typeof t)return a;const i=s?"unshift":"push";return e.split(" ").forEach((e=>{a.eventsListeners[e]||(a.eventsListeners[e]=[]),a.eventsListeners[e][i](t)})),a},once(e,t,s){const a=this;if("function"!=typeof t)return a;function i(...s){a.off(e,i),i.__emitterProxy&&delete i.__emitterProxy,t.apply(a,s)}return i.__emitterProxy=t,a.on(e,i,s)},onAny(e,t){const s=this;if("function"!=typeof e)return s;const a=t?"unshift":"push";return s.eventsAnyListeners.indexOf(e)<0&&s.eventsAnyListeners[a](e),s},offAny(e){const t=this;if(!t.eventsAnyListeners)return t;const s=t.eventsAnyListeners.indexOf(e);return s>=0&&t.eventsAnyListeners.splice(s,1),t},off(e,t){const s=this;return s.eventsListeners?(e.split(" ").forEach((e=>{void 0===t?s.eventsListeners[e]=[]:s.eventsListeners[e]&&s.eventsListeners[e].forEach(((a,i)=>{(a===t||a.__emitterProxy&&a.__emitterProxy===t)&&s.eventsListeners[e].splice(i,1)}))})),s):s},emit(...e){const t=this;if(!t.eventsListeners)return t;let s,a,i;"string"==typeof e[0]||Array.isArray(e[0])?(s=e[0],a=e.slice(1,e.length),i=t):(s=e[0].events,a=e[0].data,i=e[0].context||t),a.unshift(i);return(Array.isArray(s)?s:s.split(" ")).forEach((e=>{t.eventsAnyListeners&&t.eventsAnyListeners.length&&t.eventsAnyListeners.forEach((t=>{t.apply(i,[e,...a])})),t.eventsListeners&&t.eventsListeners[e]&&t.eventsListeners[e].forEach((e=>{e.apply(i,a)}))})),t}};function $({swiper:e,runCallbacks:t,direction:s,step:a}){const{activeIndex:i,previousIndex:r}=e;let n=s;if(n||(n=i>r?"next":i<r?"prev":"reset"),e.emit(`transition${a}`),t&&i!==r){if("reset"===n)return void e.emit(`slideResetTransition${a}`);e.emit(`slideChangeTransition${a}`),"next"===n?e.emit(`slideNextTransition${a}`):e.emit(`slidePrevTransition${a}`)}}function S(e){const t=this,s=a(),i=r(),n=t.touchEventsData,{params:l,touches:o,enabled:c}=t;if(!c)return;if(t.animating&&l.preventInteractionOnTransition)return;!t.animating&&l.cssMode&&l.loop&&t.loopFix();let p=e;p.originalEvent&&(p=p.originalEvent);let h=d(p.target);if("wrapper"===l.touchEventsTarget&&!h.closest(t.wrapperEl).length)return;if(n.isTouchEvent="touchstart"===p.type,!n.isTouchEvent&&"which"in p&&3===p.which)return;if(!n.isTouchEvent&&"button"in p&&p.button>0)return;if(n.isTouched&&n.isMoved)return;!!l.noSwipingClass&&""!==l.noSwipingClass&&p.target&&p.target.shadowRoot&&e.path&&e.path[0]&&(h=d(e.path[0]));const m=l.noSwipingSelector?l.noSwipingSelector:`.${l.noSwipingClass}`,f=!(!p.target||!p.target.shadowRoot);if(l.noSwiping&&(f?function(e,t=this){return function t(s){return s&&s!==a()&&s!==r()?(s.assignedSlot&&(s=s.assignedSlot),s.closest(e)||t(s.getRootNode().host)):null}(t)}(m,p.target):h.closest(m)[0]))return void(t.allowClick=!0);if(l.swipeHandler&&!h.closest(l.swipeHandler)[0])return;o.currentX="touchstart"===p.type?p.targetTouches[0].pageX:p.pageX,o.currentY="touchstart"===p.type?p.targetTouches[0].pageY:p.pageY;const g=o.currentX,v=o.currentY,w=l.edgeSwipeDetection||l.iOSEdgeSwipeDetection,b=l.edgeSwipeThreshold||l.iOSEdgeSwipeThreshold;if(w&&(g<=b||g>=i.innerWidth-b)){if("prevent"!==w)return;e.preventDefault()}if(Object.assign(n,{isTouched:!0,isMoved:!1,allowTouchCallbacks:!0,isScrolling:void 0,startMoving:void 0}),o.startX=g,o.startY=v,n.touchStartTime=u(),t.allowClick=!0,t.updateSize(),t.swipeDirection=void 0,l.threshold>0&&(n.allowThresholdMove=!1),"touchstart"!==p.type){let e=!0;h.is(n.focusableElements)&&(e=!1),s.activeElement&&d(s.activeElement).is(n.focusableElements)&&s.activeElement!==h[0]&&s.activeElement.blur();const a=e&&t.allowTouchMove&&l.touchStartPreventDefault;!l.touchStartForcePreventDefault&&!a||h[0].isContentEditable||p.preventDefault()}t.emit("touchStart",p)}function M(e){const t=a(),s=this,i=s.touchEventsData,{params:r,touches:n,rtlTranslate:l,enabled:o}=s;if(!o)return;let c=e;if(c.originalEvent&&(c=c.originalEvent),!i.isTouched)return void(i.startMoving&&i.isScrolling&&s.emit("touchMoveOpposite",c));if(i.isTouchEvent&&"touchmove"!==c.type)return;const p="touchmove"===c.type&&c.targetTouches&&(c.targetTouches[0]||c.changedTouches[0]),h="touchmove"===c.type?p.pageX:c.pageX,m="touchmove"===c.type?p.pageY:c.pageY;if(c.preventedByNestedSwiper)return n.startX=h,void(n.startY=m);if(!s.allowTouchMove)return s.allowClick=!1,void(i.isTouched&&(Object.assign(n,{startX:h,startY:m,currentX:h,currentY:m}),i.touchStartTime=u()));if(i.isTouchEvent&&r.touchReleaseOnEdges&&!r.loop)if(s.isVertical()){if(m<n.startY&&s.translate<=s.maxTranslate()||m>n.startY&&s.translate>=s.minTranslate())return i.isTouched=!1,void(i.isMoved=!1)}else if(h<n.startX&&s.translate<=s.maxTranslate()||h>n.startX&&s.translate>=s.minTranslate())return;if(i.isTouchEvent&&t.activeElement&&c.target===t.activeElement&&d(c.target).is(i.focusableElements))return i.isMoved=!0,void(s.allowClick=!1);if(i.allowTouchCallbacks&&s.emit("touchMove",c),c.targetTouches&&c.targetTouches.length>1)return;n.currentX=h,n.currentY=m;const f=n.currentX-n.startX,g=n.currentY-n.startY;if(s.params.threshold&&Math.sqrt(f**2+g**2)<s.params.threshold)return;if(void 0===i.isScrolling){let e;s.isHorizontal()&&n.currentY===n.startY||s.isVertical()&&n.currentX===n.startX?i.isScrolling=!1:f*f+g*g>=25&&(e=180*Math.atan2(Math.abs(g),Math.abs(f))/Math.PI,i.isScrolling=s.isHorizontal()?e>r.touchAngle:90-e>r.touchAngle)}if(i.isScrolling&&s.emit("touchMoveOpposite",c),void 0===i.startMoving&&(n.currentX===n.startX&&n.currentY===n.startY||(i.startMoving=!0)),i.isScrolling)return void(i.isTouched=!1);if(!i.startMoving)return;s.allowClick=!1,!r.cssMode&&c.cancelable&&c.preventDefault(),r.touchMoveStopPropagation&&!r.nested&&c.stopPropagation(),i.isMoved||(r.loop&&!r.cssMode&&s.loopFix(),i.startTranslate=s.getTranslate(),s.setTransition(0),s.animating&&s.$wrapperEl.trigger("webkitTransitionEnd transitionend"),i.allowMomentumBounce=!1,!r.grabCursor||!0!==s.allowSlideNext&&!0!==s.allowSlidePrev||s.setGrabCursor(!0),s.emit("sliderFirstMove",c)),s.emit("sliderMove",c),i.isMoved=!0;let v=s.isHorizontal()?f:g;n.diff=v,v*=r.touchRatio,l&&(v=-v),s.swipeDirection=v>0?"prev":"next",i.currentTranslate=v+i.startTranslate;let w=!0,b=r.resistanceRatio;if(r.touchReleaseOnEdges&&(b=0),v>0&&i.currentTranslate>s.minTranslate()?(w=!1,r.resistance&&(i.currentTranslate=s.minTranslate()-1+(-s.minTranslate()+i.startTranslate+v)**b)):v<0&&i.currentTranslate<s.maxTranslate()&&(w=!1,r.resistance&&(i.currentTranslate=s.maxTranslate()+1-(s.maxTranslate()-i.startTranslate-v)**b)),w&&(c.preventedByNestedSwiper=!0),!s.allowSlideNext&&"next"===s.swipeDirection&&i.currentTranslate<i.startTranslate&&(i.currentTranslate=i.startTranslate),!s.allowSlidePrev&&"prev"===s.swipeDirection&&i.currentTranslate>i.startTranslate&&(i.currentTranslate=i.startTranslate),s.allowSlidePrev||s.allowSlideNext||(i.currentTranslate=i.startTranslate),r.threshold>0){if(!(Math.abs(v)>r.threshold||i.allowThresholdMove))return void(i.currentTranslate=i.startTranslate);if(!i.allowThresholdMove)return i.allowThresholdMove=!0,n.startX=n.currentX,n.startY=n.currentY,i.currentTranslate=i.startTranslate,void(n.diff=s.isHorizontal()?n.currentX-n.startX:n.currentY-n.startY)}r.followFinger&&!r.cssMode&&((r.freeMode&&r.freeMode.enabled&&s.freeMode||r.watchSlidesProgress)&&(s.updateActiveIndex(),s.updateSlidesClasses()),s.params.freeMode&&r.freeMode.enabled&&s.freeMode&&s.freeMode.onTouchMove(),s.updateProgress(i.currentTranslate),s.setTranslate(i.currentTranslate))}function P(e){const t=this,s=t.touchEventsData,{params:a,touches:i,rtlTranslate:r,slidesGrid:n,enabled:l}=t;if(!l)return;let o=e;if(o.originalEvent&&(o=o.originalEvent),s.allowTouchCallbacks&&t.emit("touchEnd",o),s.allowTouchCallbacks=!1,!s.isTouched)return s.isMoved&&a.grabCursor&&t.setGrabCursor(!1),s.isMoved=!1,void(s.startMoving=!1);a.grabCursor&&s.isMoved&&s.isTouched&&(!0===t.allowSlideNext||!0===t.allowSlidePrev)&&t.setGrabCursor(!1);const d=u(),c=d-s.touchStartTime;if(t.allowClick&&(t.updateClickedSlide(o),t.emit("tap click",o),c<300&&d-s.lastClickTime<300&&t.emit("doubleTap doubleClick",o)),s.lastClickTime=u(),p((()=>{t.destroyed||(t.allowClick=!0)})),!s.isTouched||!s.isMoved||!t.swipeDirection||0===i.diff||s.currentTranslate===s.startTranslate)return s.isTouched=!1,s.isMoved=!1,void(s.startMoving=!1);let h;if(s.isTouched=!1,s.isMoved=!1,s.startMoving=!1,h=a.followFinger?r?t.translate:-t.translate:-s.currentTranslate,a.cssMode)return;if(t.params.freeMode&&a.freeMode.enabled)return void t.freeMode.onTouchEnd({currentPos:h});let m=0,f=t.slidesSizesGrid[0];for(let e=0;e<n.length;e+=e<a.slidesPerGroupSkip?1:a.slidesPerGroup){const t=e<a.slidesPerGroupSkip-1?1:a.slidesPerGroup;void 0!==n[e+t]?h>=n[e]&&h<n[e+t]&&(m=e,f=n[e+t]-n[e]):h>=n[e]&&(m=e,f=n[n.length-1]-n[n.length-2])}const g=(h-n[m])/f,v=m<a.slidesPerGroupSkip-1?1:a.slidesPerGroup;if(c>a.longSwipesMs){if(!a.longSwipes)return void t.slideTo(t.activeIndex);"next"===t.swipeDirection&&(g>=a.longSwipesRatio?t.slideTo(m+v):t.slideTo(m)),"prev"===t.swipeDirection&&(g>1-a.longSwipesRatio?t.slideTo(m+v):t.slideTo(m))}else{if(!a.shortSwipes)return void t.slideTo(t.activeIndex);t.navigation&&(o.target===t.navigation.nextEl||o.target===t.navigation.prevEl)?o.target===t.navigation.nextEl?t.slideTo(m+v):t.slideTo(m):("next"===t.swipeDirection&&t.slideTo(m+v),"prev"===t.swipeDirection&&t.slideTo(m))}}function k(){const e=this,{params:t,el:s}=e;if(s&&0===s.offsetWidth)return;t.breakpoints&&e.setBreakpoint();const{allowSlideNext:a,allowSlidePrev:i,snapGrid:r}=e;e.allowSlideNext=!0,e.allowSlidePrev=!0,e.updateSize(),e.updateSlides(),e.updateSlidesClasses(),("auto"===t.slidesPerView||t.slidesPerView>1)&&e.isEnd&&!e.isBeginning&&!e.params.centeredSlides?e.slideTo(e.slides.length-1,0,!1,!0):e.slideTo(e.activeIndex,0,!1,!0),e.autoplay&&e.autoplay.running&&e.autoplay.paused&&e.autoplay.run(),e.allowSlidePrev=i,e.allowSlideNext=a,e.params.watchOverflow&&r!==e.snapGrid&&e.checkOverflow()}function z(e){const t=this;t.enabled&&(t.allowClick||(t.params.preventClicks&&e.preventDefault(),t.params.preventClicksPropagation&&t.animating&&(e.stopPropagation(),e.stopImmediatePropagation())))}function O(){const e=this,{wrapperEl:t,rtlTranslate:s,enabled:a}=e;if(!a)return;let i;e.previousTranslate=e.translate,e.isHorizontal()?e.translate=-t.scrollLeft:e.translate=-t.scrollTop,-0===e.translate&&(e.translate=0),e.updateActiveIndex(),e.updateSlidesClasses();const r=e.maxTranslate()-e.minTranslate();i=0===r?0:(e.translate-e.minTranslate())/r,i!==e.progress&&e.updateProgress(s?-e.translate:e.translate),e.emit("setTranslate",e.translate,!1)}let I=!1;function L(){}const A=(e,t)=>{const s=a(),{params:i,touchEvents:r,el:n,wrapperEl:l,device:o,support:d}=e,c=!!i.nested,p="on"===t?"addEventListener":"removeEventListener",u=t;if(d.touch){const t=!("touchstart"!==r.start||!d.passiveListener||!i.passiveListeners)&&{passive:!0,capture:!1};n[p](r.start,e.onTouchStart,t),n[p](r.move,e.onTouchMove,d.passiveListener?{passive:!1,capture:c}:c),n[p](r.end,e.onTouchEnd,t),r.cancel&&n[p](r.cancel,e.onTouchEnd,t)}else n[p](r.start,e.onTouchStart,!1),s[p](r.move,e.onTouchMove,c),s[p](r.end,e.onTouchEnd,!1);(i.preventClicks||i.preventClicksPropagation)&&n[p]("click",e.onClick,!0),i.cssMode&&l[p]("scroll",e.onScroll),i.updateOnWindowResize?e[u](o.ios||o.android?"resize orientationchange observerUpdate":"resize observerUpdate",k,!0):e[u]("observerUpdate",k,!0)};const D=(e,t)=>e.grid&&t.grid&&t.grid.rows>1;var G={init:!0,direction:"horizontal",touchEventsTarget:"wrapper",initialSlide:0,speed:300,cssMode:!1,updateOnWindowResize:!0,resizeObserver:!0,nested:!1,createElements:!1,enabled:!0,focusableElements:"input, select, option, textarea, button, video, label",width:null,height:null,preventInteractionOnTransition:!1,userAgent:null,url:null,edgeSwipeDetection:!1,edgeSwipeThreshold:20,autoHeight:!1,setWrapperSize:!1,virtualTranslate:!1,effect:"slide",breakpoints:void 0,breakpointsBase:"window",spaceBetween:0,slidesPerView:1,slidesPerGroup:1,slidesPerGroupSkip:0,slidesPerGroupAuto:!1,centeredSlides:!1,centeredSlidesBounds:!1,slidesOffsetBefore:0,slidesOffsetAfter:0,normalizeSlideIndex:!0,centerInsufficientSlides:!1,watchOverflow:!0,roundLengths:!1,touchRatio:1,touchAngle:45,simulateTouch:!0,shortSwipes:!0,longSwipes:!0,longSwipesRatio:.5,longSwipesMs:300,followFinger:!0,allowTouchMove:!0,threshold:0,touchMoveStopPropagation:!1,touchStartPreventDefault:!0,touchStartForcePreventDefault:!1,touchReleaseOnEdges:!1,uniqueNavElements:!0,resistance:!0,resistanceRatio:.85,watchSlidesProgress:!1,grabCursor:!1,preventClicks:!0,preventClicksPropagation:!0,slideToClickedSlide:!1,preloadImages:!0,updateOnImagesReady:!0,loop:!1,loopAdditionalSlides:0,loopedSlides:null,loopFillGroupWithBlank:!1,loopPreventsSlide:!0,allowSlidePrev:!0,allowSlideNext:!0,swipeHandler:null,noSwiping:!0,noSwipingClass:"swiper-no-swiping",noSwipingSelector:null,passiveListeners:!0,containerModifierClass:"swiper-",slideClass:"swiper-slide",slideBlankClass:"swiper-slide-invisible-blank",slideActiveClass:"swiper-slide-active",slideDuplicateActiveClass:"swiper-slide-duplicate-active",slideVisibleClass:"swiper-slide-visible",slideDuplicateClass:"swiper-slide-duplicate",slideNextClass:"swiper-slide-next",slideDuplicateNextClass:"swiper-slide-duplicate-next",slidePrevClass:"swiper-slide-prev",slideDuplicatePrevClass:"swiper-slide-duplicate-prev",wrapperClass:"swiper-wrapper",runCallbacksOnInit:!0,_emitClasses:!1};function N(e,t){return function(s={}){const a=Object.keys(s)[0],i=s[a];"object"==typeof i&&null!==i?(["navigation","pagination","scrollbar"].indexOf(a)>=0&&!0===e[a]&&(e[a]={auto:!0}),a in e&&"enabled"in i?(!0===e[a]&&(e[a]={enabled:!0}),"object"!=typeof e[a]||"enabled"in e[a]||(e[a].enabled=!0),e[a]||(e[a]={enabled:!1}),f(t,s)):f(t,s)):f(t,s)}}const B={eventsEmitter:C,update:{updateSize:function(){const e=this;let t,s;const a=e.$el;t=void 0!==e.params.width&&null!==e.params.width?e.params.width:a[0].clientWidth,s=void 0!==e.params.height&&null!==e.params.height?e.params.height:a[0].clientHeight,0===t&&e.isHorizontal()||0===s&&e.isVertical()||(t=t-parseInt(a.css("padding-left")||0,10)-parseInt(a.css("padding-right")||0,10),s=s-parseInt(a.css("padding-top")||0,10)-parseInt(a.css("padding-bottom")||0,10),Number.isNaN(t)&&(t=0),Number.isNaN(s)&&(s=0),Object.assign(e,{width:t,height:s,size:e.isHorizontal()?t:s}))},updateSlides:function(){const e=this;function t(t){return e.isHorizontal()?t:{width:"height","margin-top":"margin-left","margin-bottom ":"margin-right","margin-left":"margin-top","margin-right":"margin-bottom","padding-left":"padding-top","padding-right":"padding-bottom",marginRight:"marginBottom"}[t]}function s(e,s){return parseFloat(e.getPropertyValue(t(s))||0)}const a=e.params,{$wrapperEl:i,size:r,rtlTranslate:n,wrongRTL:l}=e,o=e.virtual&&a.virtual.enabled,d=o?e.virtual.slides.length:e.slides.length,c=i.children(`.${e.params.slideClass}`),p=o?e.virtual.slides.length:c.length;let u=[];const h=[],m=[];let f=a.slidesOffsetBefore;"function"==typeof f&&(f=a.slidesOffsetBefore.call(e));let v=a.slidesOffsetAfter;"function"==typeof v&&(v=a.slidesOffsetAfter.call(e));const w=e.snapGrid.length,b=e.slidesGrid.length;let x=a.spaceBetween,y=-f,E=0,T=0;if(void 0===r)return;"string"==typeof x&&x.indexOf("%")>=0&&(x=parseFloat(x.replace("%",""))/100*r),e.virtualSize=-x,n?c.css({marginLeft:"",marginBottom:"",marginTop:""}):c.css({marginRight:"",marginBottom:"",marginTop:""}),a.centeredSlides&&a.cssMode&&(g(e.wrapperEl,"--swiper-centered-offset-before",""),g(e.wrapperEl,"--swiper-centered-offset-after",""));const C=a.grid&&a.grid.rows>1&&e.grid;let $;C&&e.grid.initSlides(p);const S="auto"===a.slidesPerView&&a.breakpoints&&Object.keys(a.breakpoints).filter((e=>void 0!==a.breakpoints[e].slidesPerView)).length>0;for(let i=0;i<p;i+=1){$=0;const n=c.eq(i);if(C&&e.grid.updateSlide(i,n,p,t),"none"!==n.css("display")){if("auto"===a.slidesPerView){S&&(c[i].style[t("width")]="");const r=getComputedStyle(n[0]),l=n[0].style.transform,o=n[0].style.webkitTransform;if(l&&(n[0].style.transform="none"),o&&(n[0].style.webkitTransform="none"),a.roundLengths)$=e.isHorizontal()?n.outerWidth(!0):n.outerHeight(!0);else{const e=s(r,"width"),t=s(r,"padding-left"),a=s(r,"padding-right"),i=s(r,"margin-left"),l=s(r,"margin-right"),o=r.getPropertyValue("box-sizing");if(o&&"border-box"===o)$=e+i+l;else{const{clientWidth:s,offsetWidth:r}=n[0];$=e+t+a+i+l+(r-s)}}l&&(n[0].style.transform=l),o&&(n[0].style.webkitTransform=o),a.roundLengths&&($=Math.floor($))}else $=(r-(a.slidesPerView-1)*x)/a.slidesPerView,a.roundLengths&&($=Math.floor($)),c[i]&&(c[i].style[t("width")]=`${$}px`);c[i]&&(c[i].swiperSlideSize=$),m.push($),a.centeredSlides?(y=y+$/2+E/2+x,0===E&&0!==i&&(y=y-r/2-x),0===i&&(y=y-r/2-x),Math.abs(y)<.001&&(y=0),a.roundLengths&&(y=Math.floor(y)),T%a.slidesPerGroup==0&&u.push(y),h.push(y)):(a.roundLengths&&(y=Math.floor(y)),(T-Math.min(e.params.slidesPerGroupSkip,T))%e.params.slidesPerGroup==0&&u.push(y),h.push(y),y=y+$+x),e.virtualSize+=$+x,E=$,T+=1}}if(e.virtualSize=Math.max(e.virtualSize,r)+v,n&&l&&("slide"===a.effect||"coverflow"===a.effect)&&i.css({width:`${e.virtualSize+a.spaceBetween}px`}),a.setWrapperSize&&i.css({[t("width")]:`${e.virtualSize+a.spaceBetween}px`}),C&&e.grid.updateWrapperSize($,u,t),!a.centeredSlides){const t=[];for(let s=0;s<u.length;s+=1){let i=u[s];a.roundLengths&&(i=Math.floor(i)),u[s]<=e.virtualSize-r&&t.push(i)}u=t,Math.floor(e.virtualSize-r)-Math.floor(u[u.length-1])>1&&u.push(e.virtualSize-r)}if(0===u.length&&(u=[0]),0!==a.spaceBetween){const s=e.isHorizontal()&&n?"marginLeft":t("marginRight");c.filter(((e,t)=>!a.cssMode||t!==c.length-1)).css({[s]:`${x}px`})}if(a.centeredSlides&&a.centeredSlidesBounds){let e=0;m.forEach((t=>{e+=t+(a.spaceBetween?a.spaceBetween:0)})),e-=a.spaceBetween;const t=e-r;u=u.map((e=>e<0?-f:e>t?t+v:e))}if(a.centerInsufficientSlides){let e=0;if(m.forEach((t=>{e+=t+(a.spaceBetween?a.spaceBetween:0)})),e-=a.spaceBetween,e<r){const t=(r-e)/2;u.forEach(((e,s)=>{u[s]=e-t})),h.forEach(((e,s)=>{h[s]=e+t}))}}if(Object.assign(e,{slides:c,snapGrid:u,slidesGrid:h,slidesSizesGrid:m}),a.centeredSlides&&a.cssMode&&!a.centeredSlidesBounds){g(e.wrapperEl,"--swiper-centered-offset-before",-u[0]+"px"),g(e.wrapperEl,"--swiper-centered-offset-after",e.size/2-m[m.length-1]/2+"px");const t=-e.snapGrid[0],s=-e.slidesGrid[0];e.snapGrid=e.snapGrid.map((e=>e+t)),e.slidesGrid=e.slidesGrid.map((e=>e+s))}p!==d&&e.emit("slidesLengthChange"),u.length!==w&&(e.params.watchOverflow&&e.checkOverflow(),e.emit("snapGridLengthChange")),h.length!==b&&e.emit("slidesGridLengthChange"),a.watchSlidesProgress&&e.updateSlidesOffset()},updateAutoHeight:function(e){const t=this,s=[],a=t.virtual&&t.params.virtual.enabled;let i,r=0;"number"==typeof e?t.setTransition(e):!0===e&&t.setTransition(t.params.speed);const n=e=>a?t.slides.filter((t=>parseInt(t.getAttribute("data-swiper-slide-index"),10)===e))[0]:t.slides.eq(e)[0];if("auto"!==t.params.slidesPerView&&t.params.slidesPerView>1)if(t.params.centeredSlides)t.visibleSlides.each((e=>{s.push(e)}));else for(i=0;i<Math.ceil(t.params.slidesPerView);i+=1){const e=t.activeIndex+i;if(e>t.slides.length&&!a)break;s.push(n(e))}else s.push(n(t.activeIndex));for(i=0;i<s.length;i+=1)if(void 0!==s[i]){const e=s[i].offsetHeight;r=e>r?e:r}r&&t.$wrapperEl.css("height",`${r}px`)},updateSlidesOffset:function(){const e=this,t=e.slides;for(let s=0;s<t.length;s+=1)t[s].swiperSlideOffset=e.isHorizontal()?t[s].offsetLeft:t[s].offsetTop},updateSlidesProgress:function(e=this&&this.translate||0){const t=this,s=t.params,{slides:a,rtlTranslate:i}=t;if(0===a.length)return;void 0===a[0].swiperSlideOffset&&t.updateSlidesOffset();let r=-e;i&&(r=e),a.removeClass(s.slideVisibleClass),t.visibleSlidesIndexes=[],t.visibleSlides=[];for(let e=0;e<a.length;e+=1){const n=a[e];let l=n.swiperSlideOffset;s.cssMode&&s.centeredSlides&&(l-=a[0].swiperSlideOffset);const o=(r+(s.centeredSlides?t.minTranslate():0)-l)/(n.swiperSlideSize+s.spaceBetween),d=-(r-l),c=d+t.slidesSizesGrid[e];(d>=0&&d<t.size-1||c>1&&c<=t.size||d<=0&&c>=t.size)&&(t.visibleSlides.push(n),t.visibleSlidesIndexes.push(e),a.eq(e).addClass(s.slideVisibleClass)),n.progress=i?-o:o}t.visibleSlides=d(t.visibleSlides)},updateProgress:function(e){const t=this;if(void 0===e){const s=t.rtlTranslate?-1:1;e=t&&t.translate&&t.translate*s||0}const s=t.params,a=t.maxTranslate()-t.minTranslate();let{progress:i,isBeginning:r,isEnd:n}=t;const l=r,o=n;0===a?(i=0,r=!0,n=!0):(i=(e-t.minTranslate())/a,r=i<=0,n=i>=1),Object.assign(t,{progress:i,isBeginning:r,isEnd:n}),(s.watchSlidesProgress||s.centeredSlides&&s.autoHeight)&&t.updateSlidesProgress(e),r&&!l&&t.emit("reachBeginning toEdge"),n&&!o&&t.emit("reachEnd toEdge"),(l&&!r||o&&!n)&&t.emit("fromEdge"),t.emit("progress",i)},updateSlidesClasses:function(){const e=this,{slides:t,params:s,$wrapperEl:a,activeIndex:i,realIndex:r}=e,n=e.virtual&&s.virtual.enabled;let l;t.removeClass(`${s.slideActiveClass} ${s.slideNextClass} ${s.slidePrevClass} ${s.slideDuplicateActiveClass} ${s.slideDuplicateNextClass} ${s.slideDuplicatePrevClass}`),l=n?e.$wrapperEl.find(`.${s.slideClass}[data-swiper-slide-index="${i}"]`):t.eq(i),l.addClass(s.slideActiveClass),s.loop&&(l.hasClass(s.slideDuplicateClass)?a.children(`.${s.slideClass}:not(.${s.slideDuplicateClass})[data-swiper-slide-index="${r}"]`).addClass(s.slideDuplicateActiveClass):a.children(`.${s.slideClass}.${s.slideDuplicateClass}[data-swiper-slide-index="${r}"]`).addClass(s.slideDuplicateActiveClass));let o=l.nextAll(`.${s.slideClass}`).eq(0).addClass(s.slideNextClass);s.loop&&0===o.length&&(o=t.eq(0),o.addClass(s.slideNextClass));let d=l.prevAll(`.${s.slideClass}`).eq(0).addClass(s.slidePrevClass);s.loop&&0===d.length&&(d=t.eq(-1),d.addClass(s.slidePrevClass)),s.loop&&(o.hasClass(s.slideDuplicateClass)?a.children(`.${s.slideClass}:not(.${s.slideDuplicateClass})[data-swiper-slide-index="${o.attr("data-swiper-slide-index")}"]`).addClass(s.slideDuplicateNextClass):a.children(`.${s.slideClass}.${s.slideDuplicateClass}[data-swiper-slide-index="${o.attr("data-swiper-slide-index")}"]`).addClass(s.slideDuplicateNextClass),d.hasClass(s.slideDuplicateClass)?a.children(`.${s.slideClass}:not(.${s.slideDuplicateClass})[data-swiper-slide-index="${d.attr("data-swiper-slide-index")}"]`).addClass(s.slideDuplicatePrevClass):a.children(`.${s.slideClass}.${s.slideDuplicateClass}[data-swiper-slide-index="${d.attr("data-swiper-slide-index")}"]`).addClass(s.slideDuplicatePrevClass)),e.emitSlidesClasses()},updateActiveIndex:function(e){const t=this,s=t.rtlTranslate?t.translate:-t.translate,{slidesGrid:a,snapGrid:i,params:r,activeIndex:n,realIndex:l,snapIndex:o}=t;let d,c=e;if(void 0===c){for(let e=0;e<a.length;e+=1)void 0!==a[e+1]?s>=a[e]&&s<a[e+1]-(a[e+1]-a[e])/2?c=e:s>=a[e]&&s<a[e+1]&&(c=e+1):s>=a[e]&&(c=e);r.normalizeSlideIndex&&(c<0||void 0===c)&&(c=0)}if(i.indexOf(s)>=0)d=i.indexOf(s);else{const e=Math.min(r.slidesPerGroupSkip,c);d=e+Math.floor((c-e)/r.slidesPerGroup)}if(d>=i.length&&(d=i.length-1),c===n)return void(d!==o&&(t.snapIndex=d,t.emit("snapIndexChange")));const p=parseInt(t.slides.eq(c).attr("data-swiper-slide-index")||c,10);Object.assign(t,{snapIndex:d,realIndex:p,previousIndex:n,activeIndex:c}),t.emit("activeIndexChange"),t.emit("snapIndexChange"),l!==p&&t.emit("realIndexChange"),(t.initialized||t.params.runCallbacksOnInit)&&t.emit("slideChange")},updateClickedSlide:function(e){const t=this,s=t.params,a=d(e.target).closest(`.${s.slideClass}`)[0];let i,r=!1;if(a)for(let e=0;e<t.slides.length;e+=1)if(t.slides[e]===a){r=!0,i=e;break}if(!a||!r)return t.clickedSlide=void 0,void(t.clickedIndex=void 0);t.clickedSlide=a,t.virtual&&t.params.virtual.enabled?t.clickedIndex=parseInt(d(a).attr("data-swiper-slide-index"),10):t.clickedIndex=i,s.slideToClickedSlide&&void 0!==t.clickedIndex&&t.clickedIndex!==t.activeIndex&&t.slideToClickedSlide()}},translate:{getTranslate:function(e=(this.isHorizontal()?"x":"y")){const{params:t,rtlTranslate:s,translate:a,$wrapperEl:i}=this;if(t.virtualTranslate)return s?-a:a;if(t.cssMode)return a;let r=h(i[0],e);return s&&(r=-r),r||0},setTranslate:function(e,t){const s=this,{rtlTranslate:a,params:i,$wrapperEl:r,wrapperEl:n,progress:l}=s;let o,d=0,c=0;s.isHorizontal()?d=a?-e:e:c=e,i.roundLengths&&(d=Math.floor(d),c=Math.floor(c)),i.cssMode?n[s.isHorizontal()?"scrollLeft":"scrollTop"]=s.isHorizontal()?-d:-c:i.virtualTranslate||r.transform(`translate3d(${d}px, ${c}px, 0px)`),s.previousTranslate=s.translate,s.translate=s.isHorizontal()?d:c;const p=s.maxTranslate()-s.minTranslate();o=0===p?0:(e-s.minTranslate())/p,o!==l&&s.updateProgress(e),s.emit("setTranslate",s.translate,t)},minTranslate:function(){return-this.snapGrid[0]},maxTranslate:function(){return-this.snapGrid[this.snapGrid.length-1]},translateTo:function(e=0,t=this.params.speed,s=!0,a=!0,i){const r=this,{params:n,wrapperEl:l}=r;if(r.animating&&n.preventInteractionOnTransition)return!1;const o=r.minTranslate(),d=r.maxTranslate();let c;if(c=a&&e>o?o:a&&e<d?d:e,r.updateProgress(c),n.cssMode){const e=r.isHorizontal();if(0===t)l[e?"scrollLeft":"scrollTop"]=-c;else{if(!r.support.smoothScroll)return v({swiper:r,targetPosition:-c,side:e?"left":"top"}),!0;l.scrollTo({[e?"left":"top"]:-c,behavior:"smooth"})}return!0}return 0===t?(r.setTransition(0),r.setTranslate(c),s&&(r.emit("beforeTransitionStart",t,i),r.emit("transitionEnd"))):(r.setTransition(t),r.setTranslate(c),s&&(r.emit("beforeTransitionStart",t,i),r.emit("transitionStart")),r.animating||(r.animating=!0,r.onTranslateToWrapperTransitionEnd||(r.onTranslateToWrapperTransitionEnd=function(e){r&&!r.destroyed&&e.target===this&&(r.$wrapperEl[0].removeEventListener("transitionend",r.onTranslateToWrapperTransitionEnd),r.$wrapperEl[0].removeEventListener("webkitTransitionEnd",r.onTranslateToWrapperTransitionEnd),r.onTranslateToWrapperTransitionEnd=null,delete r.onTranslateToWrapperTransitionEnd,s&&r.emit("transitionEnd"))}),r.$wrapperEl[0].addEventListener("transitionend",r.onTranslateToWrapperTransitionEnd),r.$wrapperEl[0].addEventListener("webkitTransitionEnd",r.onTranslateToWrapperTransitionEnd))),!0}},transition:{setTransition:function(e,t){const s=this;s.params.cssMode||s.$wrapperEl.transition(e),s.emit("setTransition",e,t)},transitionStart:function(e=!0,t){const s=this,{params:a}=s;a.cssMode||(a.autoHeight&&s.updateAutoHeight(),$({swiper:s,runCallbacks:e,direction:t,step:"Start"}))},transitionEnd:function(e=!0,t){const s=this,{params:a}=s;s.animating=!1,a.cssMode||(s.setTransition(0),$({swiper:s,runCallbacks:e,direction:t,step:"End"}))}},slide:{slideTo:function(e=0,t=this.params.speed,s=!0,a,i){if("number"!=typeof e&&"string"!=typeof e)throw new Error(`The 'index' argument cannot have type other than 'number' or 'string'. [${typeof e}] given.`);if("string"==typeof e){const t=parseInt(e,10);if(!isFinite(t))throw new Error(`The passed-in 'index' (string) couldn't be converted to 'number'. [${e}] given.`);e=t}const r=this;let n=e;n<0&&(n=0);const{params:l,snapGrid:o,slidesGrid:d,previousIndex:c,activeIndex:p,rtlTranslate:u,wrapperEl:h,enabled:m}=r;if(r.animating&&l.preventInteractionOnTransition||!m&&!a&&!i)return!1;const f=Math.min(r.params.slidesPerGroupSkip,n);let g=f+Math.floor((n-f)/r.params.slidesPerGroup);g>=o.length&&(g=o.length-1),(p||l.initialSlide||0)===(c||0)&&s&&r.emit("beforeSlideChangeStart");const w=-o[g];if(r.updateProgress(w),l.normalizeSlideIndex)for(let e=0;e<d.length;e+=1){const t=-Math.floor(100*w),s=Math.floor(100*d[e]),a=Math.floor(100*d[e+1]);void 0!==d[e+1]?t>=s&&t<a-(a-s)/2?n=e:t>=s&&t<a&&(n=e+1):t>=s&&(n=e)}if(r.initialized&&n!==p){if(!r.allowSlideNext&&w<r.translate&&w<r.minTranslate())return!1;if(!r.allowSlidePrev&&w>r.translate&&w>r.maxTranslate()&&(p||0)!==n)return!1}let b;if(b=n>p?"next":n<p?"prev":"reset",u&&-w===r.translate||!u&&w===r.translate)return r.updateActiveIndex(n),l.autoHeight&&r.updateAutoHeight(),r.updateSlidesClasses(),"slide"!==l.effect&&r.setTranslate(w),"reset"!==b&&(r.transitionStart(s,b),r.transitionEnd(s,b)),!1;if(l.cssMode){const e=r.isHorizontal(),s=u?w:-w;if(0===t){const t=r.virtual&&r.params.virtual.enabled;t&&(r.wrapperEl.style.scrollSnapType="none",r._immediateVirtual=!0),h[e?"scrollLeft":"scrollTop"]=s,t&&requestAnimationFrame((()=>{r.wrapperEl.style.scrollSnapType="",r._swiperImmediateVirtual=!1}))}else{if(!r.support.smoothScroll)return v({swiper:r,targetPosition:s,side:e?"left":"top"}),!0;h.scrollTo({[e?"left":"top"]:s,behavior:"smooth"})}return!0}return 0===t?(r.setTransition(0),r.setTranslate(w),r.updateActiveIndex(n),r.updateSlidesClasses(),r.emit("beforeTransitionStart",t,a),r.transitionStart(s,b),r.transitionEnd(s,b)):(r.setTransition(t),r.setTranslate(w),r.updateActiveIndex(n),r.updateSlidesClasses(),r.emit("beforeTransitionStart",t,a),r.transitionStart(s,b),r.animating||(r.animating=!0,r.onSlideToWrapperTransitionEnd||(r.onSlideToWrapperTransitionEnd=function(e){r&&!r.destroyed&&e.target===this&&(r.$wrapperEl[0].removeEventListener("transitionend",r.onSlideToWrapperTransitionEnd),r.$wrapperEl[0].removeEventListener("webkitTransitionEnd",r.onSlideToWrapperTransitionEnd),r.onSlideToWrapperTransitionEnd=null,delete r.onSlideToWrapperTransitionEnd,r.transitionEnd(s,b))}),r.$wrapperEl[0].addEventListener("transitionend",r.onSlideToWrapperTransitionEnd),r.$wrapperEl[0].addEventListener("webkitTransitionEnd",r.onSlideToWrapperTransitionEnd))),!0},slideToLoop:function(e=0,t=this.params.speed,s=!0,a){const i=this;let r=e;return i.params.loop&&(r+=i.loopedSlides),i.slideTo(r,t,s,a)},slideNext:function(e=this.params.speed,t=!0,s){const a=this,{animating:i,enabled:r,params:n}=a;if(!r)return a;let l=n.slidesPerGroup;"auto"===n.slidesPerView&&1===n.slidesPerGroup&&n.slidesPerGroupAuto&&(l=Math.max(a.slidesPerViewDynamic("current",!0),1));const o=a.activeIndex<n.slidesPerGroupSkip?1:l;if(n.loop){if(i&&n.loopPreventsSlide)return!1;a.loopFix(),a._clientLeft=a.$wrapperEl[0].clientLeft}return a.slideTo(a.activeIndex+o,e,t,s)},slidePrev:function(e=this.params.speed,t=!0,s){const a=this,{params:i,animating:r,snapGrid:n,slidesGrid:l,rtlTranslate:o,enabled:d}=a;if(!d)return a;if(i.loop){if(r&&i.loopPreventsSlide)return!1;a.loopFix(),a._clientLeft=a.$wrapperEl[0].clientLeft}function c(e){return e<0?-Math.floor(Math.abs(e)):Math.floor(e)}const p=c(o?a.translate:-a.translate),u=n.map((e=>c(e)));let h=n[u.indexOf(p)-1];if(void 0===h&&i.cssMode){let e;n.forEach(((t,s)=>{p>=t&&(e=s)})),void 0!==e&&(h=n[e>0?e-1:e])}let m=0;return void 0!==h&&(m=l.indexOf(h),m<0&&(m=a.activeIndex-1),"auto"===i.slidesPerView&&1===i.slidesPerGroup&&i.slidesPerGroupAuto&&(m=m-a.slidesPerViewDynamic("previous",!0)+1,m=Math.max(m,0))),a.slideTo(m,e,t,s)},slideReset:function(e=this.params.speed,t=!0,s){return this.slideTo(this.activeIndex,e,t,s)},slideToClosest:function(e=this.params.speed,t=!0,s,a=.5){const i=this;let r=i.activeIndex;const n=Math.min(i.params.slidesPerGroupSkip,r),l=n+Math.floor((r-n)/i.params.slidesPerGroup),o=i.rtlTranslate?i.translate:-i.translate;if(o>=i.snapGrid[l]){const e=i.snapGrid[l];o-e>(i.snapGrid[l+1]-e)*a&&(r+=i.params.slidesPerGroup)}else{const e=i.snapGrid[l-1];o-e<=(i.snapGrid[l]-e)*a&&(r-=i.params.slidesPerGroup)}return r=Math.max(r,0),r=Math.min(r,i.slidesGrid.length-1),i.slideTo(r,e,t,s)},slideToClickedSlide:function(){const e=this,{params:t,$wrapperEl:s}=e,a="auto"===t.slidesPerView?e.slidesPerViewDynamic():t.slidesPerView;let i,r=e.clickedIndex;if(t.loop){if(e.animating)return;i=parseInt(d(e.clickedSlide).attr("data-swiper-slide-index"),10),t.centeredSlides?r<e.loopedSlides-a/2||r>e.slides.length-e.loopedSlides+a/2?(e.loopFix(),r=s.children(`.${t.slideClass}[data-swiper-slide-index="${i}"]:not(.${t.slideDuplicateClass})`).eq(0).index(),p((()=>{e.slideTo(r)}))):e.slideTo(r):r>e.slides.length-a?(e.loopFix(),r=s.children(`.${t.slideClass}[data-swiper-slide-index="${i}"]:not(.${t.slideDuplicateClass})`).eq(0).index(),p((()=>{e.slideTo(r)}))):e.slideTo(r)}else e.slideTo(r)}},loop:{loopCreate:function(){const e=this,t=a(),{params:s,$wrapperEl:i}=e;i.children(`.${s.slideClass}.${s.slideDuplicateClass}`).remove();let r=i.children(`.${s.slideClass}`);if(s.loopFillGroupWithBlank){const e=s.slidesPerGroup-r.length%s.slidesPerGroup;if(e!==s.slidesPerGroup){for(let a=0;a<e;a+=1){const e=d(t.createElement("div")).addClass(`${s.slideClass} ${s.slideBlankClass}`);i.append(e)}r=i.children(`.${s.slideClass}`)}}"auto"!==s.slidesPerView||s.loopedSlides||(s.loopedSlides=r.length),e.loopedSlides=Math.ceil(parseFloat(s.loopedSlides||s.slidesPerView,10)),e.loopedSlides+=s.loopAdditionalSlides,e.loopedSlides>r.length&&(e.loopedSlides=r.length);const n=[],l=[];r.each(((t,s)=>{const a=d(t);s<e.loopedSlides&&l.push(t),s<r.length&&s>=r.length-e.loopedSlides&&n.push(t),a.attr("data-swiper-slide-index",s)}));for(let e=0;e<l.length;e+=1)i.append(d(l[e].cloneNode(!0)).addClass(s.slideDuplicateClass));for(let e=n.length-1;e>=0;e-=1)i.prepend(d(n[e].cloneNode(!0)).addClass(s.slideDuplicateClass))},loopFix:function(){const e=this;e.emit("beforeLoopFix");const{activeIndex:t,slides:s,loopedSlides:a,allowSlidePrev:i,allowSlideNext:r,snapGrid:n,rtlTranslate:l}=e;let o;e.allowSlidePrev=!0,e.allowSlideNext=!0;const d=-n[t]-e.getTranslate();if(t<a){o=s.length-3*a+t,o+=a;e.slideTo(o,0,!1,!0)&&0!==d&&e.setTranslate((l?-e.translate:e.translate)-d)}else if(t>=s.length-a){o=-s.length+t+a,o+=a;e.slideTo(o,0,!1,!0)&&0!==d&&e.setTranslate((l?-e.translate:e.translate)-d)}e.allowSlidePrev=i,e.allowSlideNext=r,e.emit("loopFix")},loopDestroy:function(){const{$wrapperEl:e,params:t,slides:s}=this;e.children(`.${t.slideClass}.${t.slideDuplicateClass},.${t.slideClass}.${t.slideBlankClass}`).remove(),s.removeAttr("data-swiper-slide-index")}},grabCursor:{setGrabCursor:function(e){const t=this;if(t.support.touch||!t.params.simulateTouch||t.params.watchOverflow&&t.isLocked||t.params.cssMode)return;const s="container"===t.params.touchEventsTarget?t.el:t.wrapperEl;s.style.cursor="move",s.style.cursor=e?"-webkit-grabbing":"-webkit-grab",s.style.cursor=e?"-moz-grabbin":"-moz-grab",s.style.cursor=e?"grabbing":"grab"},unsetGrabCursor:function(){const e=this;e.support.touch||e.params.watchOverflow&&e.isLocked||e.params.cssMode||(e["container"===e.params.touchEventsTarget?"el":"wrapperEl"].style.cursor="")}},events:{attachEvents:function(){const e=this,t=a(),{params:s,support:i}=e;e.onTouchStart=S.bind(e),e.onTouchMove=M.bind(e),e.onTouchEnd=P.bind(e),s.cssMode&&(e.onScroll=O.bind(e)),e.onClick=z.bind(e),i.touch&&!I&&(t.addEventListener("touchstart",L),I=!0),A(e,"on")},detachEvents:function(){A(this,"off")}},breakpoints:{setBreakpoint:function(){const e=this,{activeIndex:t,initialized:s,loopedSlides:a=0,params:i,$el:r}=e,n=i.breakpoints;if(!n||n&&0===Object.keys(n).length)return;const l=e.getBreakpoint(n,e.params.breakpointsBase,e.el);if(!l||e.currentBreakpoint===l)return;const o=(l in n?n[l]:void 0)||e.originalParams,d=D(e,i),c=D(e,o),p=i.enabled;d&&!c?(r.removeClass(`${i.containerModifierClass}grid ${i.containerModifierClass}grid-column`),e.emitContainerClasses()):!d&&c&&(r.addClass(`${i.containerModifierClass}grid`),(o.grid.fill&&"column"===o.grid.fill||!o.grid.fill&&"column"===i.grid.fill)&&r.addClass(`${i.containerModifierClass}grid-column`),e.emitContainerClasses());const u=o.direction&&o.direction!==i.direction,h=i.loop&&(o.slidesPerView!==i.slidesPerView||u);u&&s&&e.changeDirection(),f(e.params,o);const m=e.params.enabled;Object.assign(e,{allowTouchMove:e.params.allowTouchMove,allowSlideNext:e.params.allowSlideNext,allowSlidePrev:e.params.allowSlidePrev}),p&&!m?e.disable():!p&&m&&e.enable(),e.currentBreakpoint=l,e.emit("_beforeBreakpoint",o),h&&s&&(e.loopDestroy(),e.loopCreate(),e.updateSlides(),e.slideTo(t-a+e.loopedSlides,0,!1)),e.emit("breakpoint",o)},getBreakpoint:function(e,t="window",s){if(!e||"container"===t&&!s)return;let a=!1;const i=r(),n="window"===t?i.innerHeight:s.clientHeight,l=Object.keys(e).map((e=>{if("string"==typeof e&&0===e.indexOf("@")){const t=parseFloat(e.substr(1));return{value:n*t,point:e}}return{value:e,point:e}}));l.sort(((e,t)=>parseInt(e.value,10)-parseInt(t.value,10)));for(let e=0;e<l.length;e+=1){const{point:r,value:n}=l[e];"window"===t?i.matchMedia(`(min-width: ${n}px)`).matches&&(a=r):n<=s.clientWidth&&(a=r)}return a||"max"}},checkOverflow:{checkOverflow:function(){const e=this,{isLocked:t,params:s}=e,{slidesOffsetBefore:a}=s;if(a){const t=e.slides.length-1,s=e.slidesGrid[t]+e.slidesSizesGrid[t]+2*a;e.isLocked=e.size>s}else e.isLocked=1===e.snapGrid.length;!0===s.allowSlideNext&&(e.allowSlideNext=!e.isLocked),!0===s.allowSlidePrev&&(e.allowSlidePrev=!e.isLocked),t&&t!==e.isLocked&&(e.isEnd=!1),t!==e.isLocked&&e.emit(e.isLocked?"lock":"unlock")}},classes:{addClasses:function(){const e=this,{classNames:t,params:s,rtl:a,$el:i,device:r,support:n}=e,l=function(e,t){const s=[];return e.forEach((e=>{"object"==typeof e?Object.keys(e).forEach((a=>{e[a]&&s.push(t+a)})):"string"==typeof e&&s.push(t+e)})),s}(["initialized",s.direction,{"pointer-events":!n.touch},{"free-mode":e.params.freeMode&&s.freeMode.enabled},{autoheight:s.autoHeight},{rtl:a},{grid:s.grid&&s.grid.rows>1},{"grid-column":s.grid&&s.grid.rows>1&&"column"===s.grid.fill},{android:r.android},{ios:r.ios},{"css-mode":s.cssMode},{centered:s.cssMode&&s.centeredSlides}],s.containerModifierClass);t.push(...l),i.addClass([...t].join(" ")),e.emitContainerClasses()},removeClasses:function(){const{$el:e,classNames:t}=this;e.removeClass(t.join(" ")),this.emitContainerClasses()}},images:{loadImage:function(e,t,s,a,i,n){const l=r();let o;function c(){n&&n()}d(e).parent("picture")[0]||e.complete&&i?c():t?(o=new l.Image,o.onload=c,o.onerror=c,a&&(o.sizes=a),s&&(o.srcset=s),t&&(o.src=t)):c()},preloadImages:function(){const e=this;function t(){null!=e&&e&&!e.destroyed&&(void 0!==e.imagesLoaded&&(e.imagesLoaded+=1),e.imagesLoaded===e.imagesToLoad.length&&(e.params.updateOnImagesReady&&e.update(),e.emit("imagesReady")))}e.imagesToLoad=e.$el.find("img");for(let s=0;s<e.imagesToLoad.length;s+=1){const a=e.imagesToLoad[s];e.loadImage(a,a.currentSrc||a.getAttribute("src"),a.srcset||a.getAttribute("srcset"),a.sizes||a.getAttribute("sizes"),!0,t)}}}},X={};class H{constructor(...e){let t,s;if(1===e.length&&e[0].constructor&&"Object"===Object.prototype.toString.call(e[0]).slice(8,-1)?s=e[0]:[t,s]=e,s||(s={}),s=f({},s),t&&!s.el&&(s.el=t),s.el&&d(s.el).length>1){const e=[];return d(s.el).each((t=>{const a=f({},s,{el:t});e.push(new H(a))})),e}const a=this;a.__swiper__=!0,a.support=y(),a.device=E({userAgent:s.userAgent}),a.browser=T(),a.eventsListeners={},a.eventsAnyListeners=[],a.modules=[...a.__modules__],s.modules&&Array.isArray(s.modules)&&a.modules.push(...s.modules);const i={};a.modules.forEach((e=>{e({swiper:a,extendParams:N(s,i),on:a.on.bind(a),once:a.once.bind(a),off:a.off.bind(a),emit:a.emit.bind(a)})}));const r=f({},G,i);return a.params=f({},r,X,s),a.originalParams=f({},a.params),a.passedParams=f({},s),a.params&&a.params.on&&Object.keys(a.params.on).forEach((e=>{a.on(e,a.params.on[e])})),a.params&&a.params.onAny&&a.onAny(a.params.onAny),a.$=d,Object.assign(a,{enabled:a.params.enabled,el:t,classNames:[],slides:d(),slidesGrid:[],snapGrid:[],slidesSizesGrid:[],isHorizontal:()=>"horizontal"===a.params.direction,isVertical:()=>"vertical"===a.params.direction,activeIndex:0,realIndex:0,isBeginning:!0,isEnd:!1,translate:0,previousTranslate:0,progress:0,velocity:0,animating:!1,allowSlideNext:a.params.allowSlideNext,allowSlidePrev:a.params.allowSlidePrev,touchEvents:function(){const e=["touchstart","touchmove","touchend","touchcancel"],t=["pointerdown","pointermove","pointerup"];return a.touchEventsTouch={start:e[0],move:e[1],end:e[2],cancel:e[3]},a.touchEventsDesktop={start:t[0],move:t[1],end:t[2]},a.support.touch||!a.params.simulateTouch?a.touchEventsTouch:a.touchEventsDesktop}(),touchEventsData:{isTouched:void 0,isMoved:void 0,allowTouchCallbacks:void 0,touchStartTime:void 0,isScrolling:void 0,currentTranslate:void 0,startTranslate:void 0,allowThresholdMove:void 0,focusableElements:a.params.focusableElements,lastClickTime:u(),clickTimeout:void 0,velocities:[],allowMomentumBounce:void 0,isTouchEvent:void 0,startMoving:void 0},allowClick:!0,allowTouchMove:a.params.allowTouchMove,touches:{startX:0,startY:0,currentX:0,currentY:0,diff:0},imagesToLoad:[],imagesLoaded:0}),a.emit("_swiper"),a.params.init&&a.init(),a}enable(){const e=this;e.enabled||(e.enabled=!0,e.params.grabCursor&&e.setGrabCursor(),e.emit("enable"))}disable(){const e=this;e.enabled&&(e.enabled=!1,e.params.grabCursor&&e.unsetGrabCursor(),e.emit("disable"))}setProgress(e,t){const s=this;e=Math.min(Math.max(e,0),1);const a=s.minTranslate(),i=(s.maxTranslate()-a)*e+a;s.translateTo(i,void 0===t?0:t),s.updateActiveIndex(),s.updateSlidesClasses()}emitContainerClasses(){const e=this;if(!e.params._emitClasses||!e.el)return;const t=e.el.className.split(" ").filter((t=>0===t.indexOf("swiper")||0===t.indexOf(e.params.containerModifierClass)));e.emit("_containerClasses",t.join(" "))}getSlideClasses(e){const t=this;return e.className.split(" ").filter((e=>0===e.indexOf("swiper-slide")||0===e.indexOf(t.params.slideClass))).join(" ")}emitSlidesClasses(){const e=this;if(!e.params._emitClasses||!e.el)return;const t=[];e.slides.each((s=>{const a=e.getSlideClasses(s);t.push({slideEl:s,classNames:a}),e.emit("_slideClass",s,a)})),e.emit("_slideClasses",t)}slidesPerViewDynamic(e="current",t=!1){const{params:s,slides:a,slidesGrid:i,slidesSizesGrid:r,size:n,activeIndex:l}=this;let o=1;if(s.centeredSlides){let e,t=a[l].swiperSlideSize;for(let s=l+1;s<a.length;s+=1)a[s]&&!e&&(t+=a[s].swiperSlideSize,o+=1,t>n&&(e=!0));for(let s=l-1;s>=0;s-=1)a[s]&&!e&&(t+=a[s].swiperSlideSize,o+=1,t>n&&(e=!0))}else if("current"===e)for(let e=l+1;e<a.length;e+=1){(t?i[e]+r[e]-i[l]<n:i[e]-i[l]<n)&&(o+=1)}else for(let e=l-1;e>=0;e-=1){i[l]-i[e]<n&&(o+=1)}return o}update(){const e=this;if(!e||e.destroyed)return;const{snapGrid:t,params:s}=e;function a(){const t=e.rtlTranslate?-1*e.translate:e.translate,s=Math.min(Math.max(t,e.maxTranslate()),e.minTranslate());e.setTranslate(s),e.updateActiveIndex(),e.updateSlidesClasses()}let i;s.breakpoints&&e.setBreakpoint(),e.updateSize(),e.updateSlides(),e.updateProgress(),e.updateSlidesClasses(),e.params.freeMode&&e.params.freeMode.enabled?(a(),e.params.autoHeight&&e.updateAutoHeight()):(i=("auto"===e.params.slidesPerView||e.params.slidesPerView>1)&&e.isEnd&&!e.params.centeredSlides?e.slideTo(e.slides.length-1,0,!1,!0):e.slideTo(e.activeIndex,0,!1,!0),i||a()),s.watchOverflow&&t!==e.snapGrid&&e.checkOverflow(),e.emit("update")}changeDirection(e,t=!0){const s=this,a=s.params.direction;return e||(e="horizontal"===a?"vertical":"horizontal"),e===a||"horizontal"!==e&&"vertical"!==e||(s.$el.removeClass(`${s.params.containerModifierClass}${a}`).addClass(`${s.params.containerModifierClass}${e}`),s.emitContainerClasses(),s.params.direction=e,s.slides.each((t=>{"vertical"===e?t.style.width="":t.style.height=""})),s.emit("changeDirection"),t&&s.update()),s}mount(e){const t=this;if(t.mounted)return!0;const s=d(e||t.params.el);if(!(e=s[0]))return!1;e.swiper=t;const i=()=>`.${(t.params.wrapperClass||"").trim().split(" ").join(".")}`;let r=(()=>{if(e&&e.shadowRoot&&e.shadowRoot.querySelector){const t=d(e.shadowRoot.querySelector(i()));return t.children=e=>s.children(e),t}return s.children(i())})();if(0===r.length&&t.params.createElements){const e=a().createElement("div");r=d(e),e.className=t.params.wrapperClass,s.append(e),s.children(`.${t.params.slideClass}`).each((e=>{r.append(e)}))}return Object.assign(t,{$el:s,el:e,$wrapperEl:r,wrapperEl:r[0],mounted:!0,rtl:"rtl"===e.dir.toLowerCase()||"rtl"===s.css("direction"),rtlTranslate:"horizontal"===t.params.direction&&("rtl"===e.dir.toLowerCase()||"rtl"===s.css("direction")),wrongRTL:"-webkit-box"===r.css("display")}),!0}init(e){const t=this;if(t.initialized)return t;return!1===t.mount(e)||(t.emit("beforeInit"),t.params.breakpoints&&t.setBreakpoint(),t.addClasses(),t.params.loop&&t.loopCreate(),t.updateSize(),t.updateSlides(),t.params.watchOverflow&&t.checkOverflow(),t.params.grabCursor&&t.enabled&&t.setGrabCursor(),t.params.preloadImages&&t.preloadImages(),t.params.loop?t.slideTo(t.params.initialSlide+t.loopedSlides,0,t.params.runCallbacksOnInit,!1,!0):t.slideTo(t.params.initialSlide,0,t.params.runCallbacksOnInit,!1,!0),t.attachEvents(),t.initialized=!0,t.emit("init"),t.emit("afterInit")),t}destroy(e=!0,t=!0){const s=this,{params:a,$el:i,$wrapperEl:r,slides:n}=s;return void 0===s.params||s.destroyed||(s.emit("beforeDestroy"),s.initialized=!1,s.detachEvents(),a.loop&&s.loopDestroy(),t&&(s.removeClasses(),i.removeAttr("style"),r.removeAttr("style"),n&&n.length&&n.removeClass([a.slideVisibleClass,a.slideActiveClass,a.slideNextClass,a.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index")),s.emit("destroy"),Object.keys(s.eventsListeners).forEach((e=>{s.off(e)})),!1!==e&&(s.$el[0].swiper=null,function(e){const t=e;Object.keys(t).forEach((e=>{try{t[e]=null}catch(e){}try{delete t[e]}catch(e){}}))}(s)),s.destroyed=!0),null}static extendDefaults(e){f(X,e)}static get extendedDefaults(){return X}static get defaults(){return G}static installModule(e){H.prototype.__modules__||(H.prototype.__modules__=[]);const t=H.prototype.__modules__;"function"==typeof e&&t.indexOf(e)<0&&t.push(e)}static use(e){return Array.isArray(e)?(e.forEach((e=>H.installModule(e))),H):(H.installModule(e),H)}}function Y(e,t,s,i){const r=a();return e.params.createElements&&Object.keys(i).forEach((a=>{if(!s[a]&&!0===s.auto){let n=e.$el.children(`.${i[a]}`)[0];n||(n=r.createElement("div"),n.className=i[a],e.$el.append(n)),s[a]=n,t[a]=n}})),s}function W(e=""){return`.${e.trim().replace(/([\.:!\/])/g,"\\$1").replace(/ /g,".")}`}function R(e){const t=this,{$wrapperEl:s,params:a}=t;if(a.loop&&t.loopDestroy(),"object"==typeof e&&"length"in e)for(let t=0;t<e.length;t+=1)e[t]&&s.append(e[t]);else s.append(e);a.loop&&t.loopCreate(),a.observer||t.update()}function j(e){const t=this,{params:s,$wrapperEl:a,activeIndex:i}=t;s.loop&&t.loopDestroy();let r=i+1;if("object"==typeof e&&"length"in e){for(let t=0;t<e.length;t+=1)e[t]&&a.prepend(e[t]);r=i+e.length}else a.prepend(e);s.loop&&t.loopCreate(),s.observer||t.update(),t.slideTo(r,0,!1)}function _(e,t){const s=this,{$wrapperEl:a,params:i,activeIndex:r}=s;let n=r;i.loop&&(n-=s.loopedSlides,s.loopDestroy(),s.slides=a.children(`.${i.slideClass}`));const l=s.slides.length;if(e<=0)return void s.prependSlide(t);if(e>=l)return void s.appendSlide(t);let o=n>e?n+1:n;const d=[];for(let t=l-1;t>=e;t-=1){const e=s.slides.eq(t);e.remove(),d.unshift(e)}if("object"==typeof t&&"length"in t){for(let e=0;e<t.length;e+=1)t[e]&&a.append(t[e]);o=n>e?n+t.length:n}else a.append(t);for(let e=0;e<d.length;e+=1)a.append(d[e]);i.loop&&s.loopCreate(),i.observer||s.update(),i.loop?s.slideTo(o+s.loopedSlides,0,!1):s.slideTo(o,0,!1)}function V(e){const t=this,{params:s,$wrapperEl:a,activeIndex:i}=t;let r=i;s.loop&&(r-=t.loopedSlides,t.loopDestroy(),t.slides=a.children(`.${s.slideClass}`));let n,l=r;if("object"==typeof e&&"length"in e){for(let s=0;s<e.length;s+=1)n=e[s],t.slides[n]&&t.slides.eq(n).remove(),n<l&&(l-=1);l=Math.max(l,0)}else n=e,t.slides[n]&&t.slides.eq(n).remove(),n<l&&(l-=1),l=Math.max(l,0);s.loop&&t.loopCreate(),s.observer||t.update(),s.loop?t.slideTo(l+t.loopedSlides,0,!1):t.slideTo(l,0,!1)}function q(){const e=this,t=[];for(let s=0;s<e.slides.length;s+=1)t.push(s);e.removeSlide(t)}function F(e){const{effect:t,swiper:s,on:a,setTranslate:i,setTransition:r,overwriteParams:n,perspective:l}=e;a("beforeInit",(()=>{if(s.params.effect!==t)return;s.classNames.push(`${s.params.containerModifierClass}${t}`),l&&l()&&s.classNames.push(`${s.params.containerModifierClass}3d`);const e=n?n():{};Object.assign(s.params,e),Object.assign(s.originalParams,e)})),a("setTranslate",(()=>{s.params.effect===t&&i()})),a("setTransition",((e,a)=>{s.params.effect===t&&r(a)}))}function U(e,t){return e.transformEl?t.find(e.transformEl).css({"backface-visibility":"hidden","-webkit-backface-visibility":"hidden"}):t}function K({swiper:e,duration:t,transformEl:s,allSlides:a}){const{slides:i,activeIndex:r,$wrapperEl:n}=e;if(e.params.virtualTranslate&&0!==t){let t,l=!1;t=a?s?i.find(s):i:s?i.eq(r).find(s):i.eq(r),t.transitionEnd((()=>{if(l)return;if(!e||e.destroyed)return;l=!0,e.animating=!1;const t=["webkitTransitionEnd","transitionend"];for(let e=0;e<t.length;e+=1)n.trigger(t[e])}))}}function Z(e,t,s){const a="swiper-slide-shadow"+(s?`-${s}`:""),i=e.transformEl?t.find(e.transformEl):t;let r=i.children(`.${a}`);return r.length||(r=d(`<div class="swiper-slide-shadow${s?`-${s}`:""}"></div>`),i.append(r)),r}Object.keys(B).forEach((e=>{Object.keys(B[e]).forEach((t=>{H.prototype[t]=B[e][t]}))})),H.use([function({swiper:e,on:t,emit:s}){const a=r();let i=null;const n=()=>{e&&!e.destroyed&&e.initialized&&(s("beforeResize"),s("resize"))},l=()=>{e&&!e.destroyed&&e.initialized&&s("orientationchange")};t("init",(()=>{e.params.resizeObserver&&void 0!==a.ResizeObserver?e&&!e.destroyed&&e.initialized&&(i=new ResizeObserver((t=>{const{width:s,height:a}=e;let i=s,r=a;t.forEach((({contentBoxSize:t,contentRect:s,target:a})=>{a&&a!==e.el||(i=s?s.width:(t[0]||t).inlineSize,r=s?s.height:(t[0]||t).blockSize)})),i===s&&r===a||n()})),i.observe(e.el)):(a.addEventListener("resize",n),a.addEventListener("orientationchange",l))})),t("destroy",(()=>{i&&i.unobserve&&e.el&&(i.unobserve(e.el),i=null),a.removeEventListener("resize",n),a.removeEventListener("orientationchange",l)}))},function({swiper:e,extendParams:t,on:s,emit:a}){const i=[],n=r(),l=(e,t={})=>{const s=new(n.MutationObserver||n.WebkitMutationObserver)((e=>{if(1===e.length)return void a("observerUpdate",e[0]);const t=function(){a("observerUpdate",e[0])};n.requestAnimationFrame?n.requestAnimationFrame(t):n.setTimeout(t,0)}));s.observe(e,{attributes:void 0===t.attributes||t.attributes,childList:void 0===t.childList||t.childList,characterData:void 0===t.characterData||t.characterData}),i.push(s)};t({observer:!1,observeParents:!1,observeSlideChildren:!1}),s("init",(()=>{if(e.params.observer){if(e.params.observeParents){const t=e.$el.parents();for(let e=0;e<t.length;e+=1)l(t[e])}l(e.$el[0],{childList:e.params.observeSlideChildren}),l(e.$wrapperEl[0],{attributes:!1})}})),s("destroy",(()=>{i.forEach((e=>{e.disconnect()})),i.splice(0,i.length)}))}]);const J=[function({swiper:e,extendParams:t,on:s}){let a;function i(t,s){const a=e.params.virtual;if(a.cache&&e.virtual.cache[s])return e.virtual.cache[s];const i=a.renderSlide?d(a.renderSlide.call(e,t,s)):d(`<div class="${e.params.slideClass}" data-swiper-slide-index="${s}">${t}</div>`);return i.attr("data-swiper-slide-index")||i.attr("data-swiper-slide-index",s),a.cache&&(e.virtual.cache[s]=i),i}function r(t){const{slidesPerView:s,slidesPerGroup:a,centeredSlides:r}=e.params,{addSlidesBefore:n,addSlidesAfter:l}=e.params.virtual,{from:o,to:d,slides:c,slidesGrid:p,offset:u}=e.virtual;e.params.cssMode||e.updateActiveIndex();const h=e.activeIndex||0;let m,f,g;m=e.rtlTranslate?"right":e.isHorizontal()?"left":"top",r?(f=Math.floor(s/2)+a+l,g=Math.floor(s/2)+a+n):(f=s+(a-1)+l,g=a+n);const v=Math.max((h||0)-g,0),w=Math.min((h||0)+f,c.length-1),b=(e.slidesGrid[v]||0)-(e.slidesGrid[0]||0);function x(){e.updateSlides(),e.updateProgress(),e.updateSlidesClasses(),e.lazy&&e.params.lazy.enabled&&e.lazy.load()}if(Object.assign(e.virtual,{from:v,to:w,offset:b,slidesGrid:e.slidesGrid}),o===v&&d===w&&!t)return e.slidesGrid!==p&&b!==u&&e.slides.css(m,`${b}px`),void e.updateProgress();if(e.params.virtual.renderExternal)return e.params.virtual.renderExternal.call(e,{offset:b,from:v,to:w,slides:function(){const e=[];for(let t=v;t<=w;t+=1)e.push(c[t]);return e}()}),void(e.params.virtual.renderExternalUpdate&&x());const y=[],E=[];if(t)e.$wrapperEl.find(`.${e.params.slideClass}`).remove();else for(let t=o;t<=d;t+=1)(t<v||t>w)&&e.$wrapperEl.find(`.${e.params.slideClass}[data-swiper-slide-index="${t}"]`).remove();for(let e=0;e<c.length;e+=1)e>=v&&e<=w&&(void 0===d||t?E.push(e):(e>d&&E.push(e),e<o&&y.push(e)));E.forEach((t=>{e.$wrapperEl.append(i(c[t],t))})),y.sort(((e,t)=>t-e)).forEach((t=>{e.$wrapperEl.prepend(i(c[t],t))})),e.$wrapperEl.children(".swiper-slide").css(m,`${b}px`),x()}t({virtual:{enabled:!1,slides:[],cache:!0,renderSlide:null,renderExternal:null,renderExternalUpdate:!0,addSlidesBefore:0,addSlidesAfter:0}}),e.virtual={cache:{},from:void 0,to:void 0,slides:[],offset:0,slidesGrid:[]},s("beforeInit",(()=>{e.params.virtual.enabled&&(e.virtual.slides=e.params.virtual.slides,e.classNames.push(`${e.params.containerModifierClass}virtual`),e.params.watchSlidesProgress=!0,e.originalParams.watchSlidesProgress=!0,e.params.initialSlide||r())})),s("setTranslate",(()=>{e.params.virtual.enabled&&(e.params.cssMode&&!e._immediateVirtual?(clearTimeout(a),a=setTimeout((()=>{r()}),100)):r())})),s("init update resize",(()=>{e.params.virtual.enabled&&e.params.cssMode&&g(e.wrapperEl,"--swiper-virtual-size",`${e.virtualSize}px`)})),Object.assign(e.virtual,{appendSlide:function(t){if("object"==typeof t&&"length"in t)for(let s=0;s<t.length;s+=1)t[s]&&e.virtual.slides.push(t[s]);else e.virtual.slides.push(t);r(!0)},prependSlide:function(t){const s=e.activeIndex;let a=s+1,i=1;if(Array.isArray(t)){for(let s=0;s<t.length;s+=1)t[s]&&e.virtual.slides.unshift(t[s]);a=s+t.length,i=t.length}else e.virtual.slides.unshift(t);if(e.params.virtual.cache){const t=e.virtual.cache,s={};Object.keys(t).forEach((e=>{const a=t[e],r=a.attr("data-swiper-slide-index");r&&a.attr("data-swiper-slide-index",parseInt(r,10)+i),s[parseInt(e,10)+i]=a})),e.virtual.cache=s}r(!0),e.slideTo(a,0)},removeSlide:function(t){if(null==t)return;let s=e.activeIndex;if(Array.isArray(t))for(let a=t.length-1;a>=0;a-=1)e.virtual.slides.splice(t[a],1),e.params.virtual.cache&&delete e.virtual.cache[t[a]],t[a]<s&&(s-=1),s=Math.max(s,0);else e.virtual.slides.splice(t,1),e.params.virtual.cache&&delete e.virtual.cache[t],t<s&&(s-=1),s=Math.max(s,0);r(!0),e.slideTo(s,0)},removeAllSlides:function(){e.virtual.slides=[],e.params.virtual.cache&&(e.virtual.cache={}),r(!0),e.slideTo(0,0)},update:r})},function({swiper:e,extendParams:t,on:s,emit:i}){const n=a(),l=r();function o(t){if(!e.enabled)return;const{rtlTranslate:s}=e;let a=t;a.originalEvent&&(a=a.originalEvent);const r=a.keyCode||a.charCode,o=e.params.keyboard.pageUpDown,d=o&&33===r,c=o&&34===r,p=37===r,u=39===r,h=38===r,m=40===r;if(!e.allowSlideNext&&(e.isHorizontal()&&u||e.isVertical()&&m||c))return!1;if(!e.allowSlidePrev&&(e.isHorizontal()&&p||e.isVertical()&&h||d))return!1;if(!(a.shiftKey||a.altKey||a.ctrlKey||a.metaKey||n.activeElement&&n.activeElement.nodeName&&("input"===n.activeElement.nodeName.toLowerCase()||"textarea"===n.activeElement.nodeName.toLowerCase()))){if(e.params.keyboard.onlyInViewport&&(d||c||p||u||h||m)){let t=!1;if(e.$el.parents(`.${e.params.slideClass}`).length>0&&0===e.$el.parents(`.${e.params.slideActiveClass}`).length)return;const a=e.$el,i=a[0].clientWidth,r=a[0].clientHeight,n=l.innerWidth,o=l.innerHeight,d=e.$el.offset();s&&(d.left-=e.$el[0].scrollLeft);const c=[[d.left,d.top],[d.left+i,d.top],[d.left,d.top+r],[d.left+i,d.top+r]];for(let e=0;e<c.length;e+=1){const s=c[e];if(s[0]>=0&&s[0]<=n&&s[1]>=0&&s[1]<=o){if(0===s[0]&&0===s[1])continue;t=!0}}if(!t)return}e.isHorizontal()?((d||c||p||u)&&(a.preventDefault?a.preventDefault():a.returnValue=!1),((c||u)&&!s||(d||p)&&s)&&e.slideNext(),((d||p)&&!s||(c||u)&&s)&&e.slidePrev()):((d||c||h||m)&&(a.preventDefault?a.preventDefault():a.returnValue=!1),(c||m)&&e.slideNext(),(d||h)&&e.slidePrev()),i("keyPress",r)}}function c(){e.keyboard.enabled||(d(n).on("keydown",o),e.keyboard.enabled=!0)}function p(){e.keyboard.enabled&&(d(n).off("keydown",o),e.keyboard.enabled=!1)}e.keyboard={enabled:!1},t({keyboard:{enabled:!1,onlyInViewport:!0,pageUpDown:!0}}),s("init",(()=>{e.params.keyboard.enabled&&c()})),s("destroy",(()=>{e.keyboard.enabled&&p()})),Object.assign(e.keyboard,{enable:c,disable:p})},function({swiper:e,extendParams:t,on:s,emit:a}){const i=r();let n;t({mousewheel:{enabled:!1,releaseOnEdges:!1,invert:!1,forceToAxis:!1,sensitivity:1,eventsTarget:"container",thresholdDelta:null,thresholdTime:null}}),e.mousewheel={enabled:!1};let l,o=u();const c=[];function h(){e.enabled&&(e.mouseEntered=!0)}function m(){e.enabled&&(e.mouseEntered=!1)}function f(t){return!(e.params.mousewheel.thresholdDelta&&t.delta<e.params.mousewheel.thresholdDelta)&&(!(e.params.mousewheel.thresholdTime&&u()-o<e.params.mousewheel.thresholdTime)&&(t.delta>=6&&u()-o<60||(t.direction<0?e.isEnd&&!e.params.loop||e.animating||(e.slideNext(),a("scroll",t.raw)):e.isBeginning&&!e.params.loop||e.animating||(e.slidePrev(),a("scroll",t.raw)),o=(new i.Date).getTime(),!1)))}function g(t){let s=t,i=!0;if(!e.enabled)return;const r=e.params.mousewheel;e.params.cssMode&&s.preventDefault();let o=e.$el;if("container"!==e.params.mousewheel.eventsTarget&&(o=d(e.params.mousewheel.eventsTarget)),!e.mouseEntered&&!o[0].contains(s.target)&&!r.releaseOnEdges)return!0;s.originalEvent&&(s=s.originalEvent);let h=0;const m=e.rtlTranslate?-1:1,g=function(e){let t=0,s=0,a=0,i=0;return"detail"in e&&(s=e.detail),"wheelDelta"in e&&(s=-e.wheelDelta/120),"wheelDeltaY"in e&&(s=-e.wheelDeltaY/120),"wheelDeltaX"in e&&(t=-e.wheelDeltaX/120),"axis"in e&&e.axis===e.HORIZONTAL_AXIS&&(t=s,s=0),a=10*t,i=10*s,"deltaY"in e&&(i=e.deltaY),"deltaX"in e&&(a=e.deltaX),e.shiftKey&&!a&&(a=i,i=0),(a||i)&&e.deltaMode&&(1===e.deltaMode?(a*=40,i*=40):(a*=800,i*=800)),a&&!t&&(t=a<1?-1:1),i&&!s&&(s=i<1?-1:1),{spinX:t,spinY:s,pixelX:a,pixelY:i}}(s);if(r.forceToAxis)if(e.isHorizontal()){if(!(Math.abs(g.pixelX)>Math.abs(g.pixelY)))return!0;h=-g.pixelX*m}else{if(!(Math.abs(g.pixelY)>Math.abs(g.pixelX)))return!0;h=-g.pixelY}else h=Math.abs(g.pixelX)>Math.abs(g.pixelY)?-g.pixelX*m:-g.pixelY;if(0===h)return!0;r.invert&&(h=-h);let v=e.getTranslate()+h*r.sensitivity;if(v>=e.minTranslate()&&(v=e.minTranslate()),v<=e.maxTranslate()&&(v=e.maxTranslate()),i=!!e.params.loop||!(v===e.minTranslate()||v===e.maxTranslate()),i&&e.params.nested&&s.stopPropagation(),e.params.freeMode&&e.params.freeMode.enabled){const t={time:u(),delta:Math.abs(h),direction:Math.sign(h)},i=l&&t.time<l.time+500&&t.delta<=l.delta&&t.direction===l.direction;if(!i){l=void 0,e.params.loop&&e.loopFix();let o=e.getTranslate()+h*r.sensitivity;const d=e.isBeginning,u=e.isEnd;if(o>=e.minTranslate()&&(o=e.minTranslate()),o<=e.maxTranslate()&&(o=e.maxTranslate()),e.setTransition(0),e.setTranslate(o),e.updateProgress(),e.updateActiveIndex(),e.updateSlidesClasses(),(!d&&e.isBeginning||!u&&e.isEnd)&&e.updateSlidesClasses(),e.params.freeMode.sticky){clearTimeout(n),n=void 0,c.length>=15&&c.shift();const s=c.length?c[c.length-1]:void 0,a=c[0];if(c.push(t),s&&(t.delta>s.delta||t.direction!==s.direction))c.splice(0);else if(c.length>=15&&t.time-a.time<500&&a.delta-t.delta>=1&&t.delta<=6){const s=h>0?.8:.2;l=t,c.splice(0),n=p((()=>{e.slideToClosest(e.params.speed,!0,void 0,s)}),0)}n||(n=p((()=>{l=t,c.splice(0),e.slideToClosest(e.params.speed,!0,void 0,.5)}),500))}if(i||a("scroll",s),e.params.autoplay&&e.params.autoplayDisableOnInteraction&&e.autoplay.stop(),o===e.minTranslate()||o===e.maxTranslate())return!0}}else{const s={time:u(),delta:Math.abs(h),direction:Math.sign(h),raw:t};c.length>=2&&c.shift();const a=c.length?c[c.length-1]:void 0;if(c.push(s),a?(s.direction!==a.direction||s.delta>a.delta||s.time>a.time+150)&&f(s):f(s),function(t){const s=e.params.mousewheel;if(t.direction<0){if(e.isEnd&&!e.params.loop&&s.releaseOnEdges)return!0}else if(e.isBeginning&&!e.params.loop&&s.releaseOnEdges)return!0;return!1}(s))return!0}return s.preventDefault?s.preventDefault():s.returnValue=!1,!1}function v(t){let s=e.$el;"container"!==e.params.mousewheel.eventsTarget&&(s=d(e.params.mousewheel.eventsTarget)),s[t]("mouseenter",h),s[t]("mouseleave",m),s[t]("wheel",g)}function w(){return e.params.cssMode?(e.wrapperEl.removeEventListener("wheel",g),!0):!e.mousewheel.enabled&&(v("on"),e.mousewheel.enabled=!0,!0)}function b(){return e.params.cssMode?(e.wrapperEl.addEventListener(event,g),!0):!!e.mousewheel.enabled&&(v("off"),e.mousewheel.enabled=!1,!0)}s("init",(()=>{!e.params.mousewheel.enabled&&e.params.cssMode&&b(),e.params.mousewheel.enabled&&w()})),s("destroy",(()=>{e.params.cssMode&&w(),e.mousewheel.enabled&&b()})),Object.assign(e.mousewheel,{enable:w,disable:b})},function({swiper:e,extendParams:t,on:s,emit:a}){function i(t){let s;return t&&(s=d(t),e.params.uniqueNavElements&&"string"==typeof t&&s.length>1&&1===e.$el.find(t).length&&(s=e.$el.find(t))),s}function r(t,s){const a=e.params.navigation;t&&t.length>0&&(t[s?"addClass":"removeClass"](a.disabledClass),t[0]&&"BUTTON"===t[0].tagName&&(t[0].disabled=s),e.params.watchOverflow&&e.enabled&&t[e.isLocked?"addClass":"removeClass"](a.lockClass))}function n(){if(e.params.loop)return;const{$nextEl:t,$prevEl:s}=e.navigation;r(s,e.isBeginning),r(t,e.isEnd)}function l(t){t.preventDefault(),e.isBeginning&&!e.params.loop||e.slidePrev()}function o(t){t.preventDefault(),e.isEnd&&!e.params.loop||e.slideNext()}function c(){const t=e.params.navigation;if(e.params.navigation=Y(e,e.originalParams.navigation,e.params.navigation,{nextEl:"swiper-button-next",prevEl:"swiper-button-prev"}),!t.nextEl&&!t.prevEl)return;const s=i(t.nextEl),a=i(t.prevEl);s&&s.length>0&&s.on("click",o),a&&a.length>0&&a.on("click",l),Object.assign(e.navigation,{$nextEl:s,nextEl:s&&s[0],$prevEl:a,prevEl:a&&a[0]}),e.enabled||(s&&s.addClass(t.lockClass),a&&a.addClass(t.lockClass))}function p(){const{$nextEl:t,$prevEl:s}=e.navigation;t&&t.length&&(t.off("click",o),t.removeClass(e.params.navigation.disabledClass)),s&&s.length&&(s.off("click",l),s.removeClass(e.params.navigation.disabledClass))}t({navigation:{nextEl:null,prevEl:null,hideOnClick:!1,disabledClass:"swiper-button-disabled",hiddenClass:"swiper-button-hidden",lockClass:"swiper-button-lock"}}),e.navigation={nextEl:null,$nextEl:null,prevEl:null,$prevEl:null},s("init",(()=>{c(),n()})),s("toEdge fromEdge lock unlock",(()=>{n()})),s("destroy",(()=>{p()})),s("enable disable",(()=>{const{$nextEl:t,$prevEl:s}=e.navigation;t&&t[e.enabled?"removeClass":"addClass"](e.params.navigation.lockClass),s&&s[e.enabled?"removeClass":"addClass"](e.params.navigation.lockClass)})),s("click",((t,s)=>{const{$nextEl:i,$prevEl:r}=e.navigation,n=s.target;if(e.params.navigation.hideOnClick&&!d(n).is(r)&&!d(n).is(i)){if(e.pagination&&e.params.pagination&&e.params.pagination.clickable&&(e.pagination.el===n||e.pagination.el.contains(n)))return;let t;i?t=i.hasClass(e.params.navigation.hiddenClass):r&&(t=r.hasClass(e.params.navigation.hiddenClass)),a(!0===t?"navigationShow":"navigationHide"),i&&i.toggleClass(e.params.navigation.hiddenClass),r&&r.toggleClass(e.params.navigation.hiddenClass)}})),Object.assign(e.navigation,{update:n,init:c,destroy:p})},function({swiper:e,extendParams:t,on:s,emit:a}){const i="swiper-pagination";let r;t({pagination:{el:null,bulletElement:"span",clickable:!1,hideOnClick:!1,renderBullet:null,renderProgressbar:null,renderFraction:null,renderCustom:null,progressbarOpposite:!1,type:"bullets",dynamicBullets:!1,dynamicMainBullets:1,formatFractionCurrent:e=>e,formatFractionTotal:e=>e,bulletClass:`${i}-bullet`,bulletActiveClass:`${i}-bullet-active`,modifierClass:`${i}-`,currentClass:`${i}-current`,totalClass:`${i}-total`,hiddenClass:`${i}-hidden`,progressbarFillClass:`${i}-progressbar-fill`,progressbarOppositeClass:`${i}-progressbar-opposite`,clickableClass:`${i}-clickable`,lockClass:`${i}-lock`,horizontalClass:`${i}-horizontal`,verticalClass:`${i}-vertical`}}),e.pagination={el:null,$el:null,bullets:[]};let n=0;function l(){return!e.params.pagination.el||!e.pagination.el||!e.pagination.$el||0===e.pagination.$el.length}function o(t,s){const{bulletActiveClass:a}=e.params.pagination;t[s]().addClass(`${a}-${s}`)[s]().addClass(`${a}-${s}-${s}`)}function c(){const t=e.rtl,s=e.params.pagination;if(l())return;const i=e.virtual&&e.params.virtual.enabled?e.virtual.slides.length:e.slides.length,c=e.pagination.$el;let p;const u=e.params.loop?Math.ceil((i-2*e.loopedSlides)/e.params.slidesPerGroup):e.snapGrid.length;if(e.params.loop?(p=Math.ceil((e.activeIndex-e.loopedSlides)/e.params.slidesPerGroup),p>i-1-2*e.loopedSlides&&(p-=i-2*e.loopedSlides),p>u-1&&(p-=u),p<0&&"bullets"!==e.params.paginationType&&(p=u+p)):p=void 0!==e.snapIndex?e.snapIndex:e.activeIndex||0,"bullets"===s.type&&e.pagination.bullets&&e.pagination.bullets.length>0){const a=e.pagination.bullets;let i,l,u;if(s.dynamicBullets&&(r=a.eq(0)[e.isHorizontal()?"outerWidth":"outerHeight"](!0),c.css(e.isHorizontal()?"width":"height",r*(s.dynamicMainBullets+4)+"px"),s.dynamicMainBullets>1&&void 0!==e.previousIndex&&(n+=p-e.previousIndex,n>s.dynamicMainBullets-1?n=s.dynamicMainBullets-1:n<0&&(n=0)),i=p-n,l=i+(Math.min(a.length,s.dynamicMainBullets)-1),u=(l+i)/2),a.removeClass(["","-next","-next-next","-prev","-prev-prev","-main"].map((e=>`${s.bulletActiveClass}${e}`)).join(" ")),c.length>1)a.each((e=>{const t=d(e),a=t.index();a===p&&t.addClass(s.bulletActiveClass),s.dynamicBullets&&(a>=i&&a<=l&&t.addClass(`${s.bulletActiveClass}-main`),a===i&&o(t,"prev"),a===l&&o(t,"next"))}));else{const t=a.eq(p),r=t.index();if(t.addClass(s.bulletActiveClass),s.dynamicBullets){const t=a.eq(i),n=a.eq(l);for(let e=i;e<=l;e+=1)a.eq(e).addClass(`${s.bulletActiveClass}-main`);if(e.params.loop)if(r>=a.length-s.dynamicMainBullets){for(let e=s.dynamicMainBullets;e>=0;e-=1)a.eq(a.length-e).addClass(`${s.bulletActiveClass}-main`);a.eq(a.length-s.dynamicMainBullets-1).addClass(`${s.bulletActiveClass}-prev`)}else o(t,"prev"),o(n,"next");else o(t,"prev"),o(n,"next")}}if(s.dynamicBullets){const i=Math.min(a.length,s.dynamicMainBullets+4),n=(r*i-r)/2-u*r,l=t?"right":"left";a.css(e.isHorizontal()?l:"top",`${n}px`)}}if("fraction"===s.type&&(c.find(W(s.currentClass)).text(s.formatFractionCurrent(p+1)),c.find(W(s.totalClass)).text(s.formatFractionTotal(u))),"progressbar"===s.type){let t;t=s.progressbarOpposite?e.isHorizontal()?"vertical":"horizontal":e.isHorizontal()?"horizontal":"vertical";const a=(p+1)/u;let i=1,r=1;"horizontal"===t?i=a:r=a,c.find(W(s.progressbarFillClass)).transform(`translate3d(0,0,0) scaleX(${i}) scaleY(${r})`).transition(e.params.speed)}"custom"===s.type&&s.renderCustom?(c.html(s.renderCustom(e,p+1,u)),a("paginationRender",c[0])):a("paginationUpdate",c[0]),e.params.watchOverflow&&e.enabled&&c[e.isLocked?"addClass":"removeClass"](s.lockClass)}function p(){const t=e.params.pagination;if(l())return;const s=e.virtual&&e.params.virtual.enabled?e.virtual.slides.length:e.slides.length,i=e.pagination.$el;let r="";if("bullets"===t.type){let a=e.params.loop?Math.ceil((s-2*e.loopedSlides)/e.params.slidesPerGroup):e.snapGrid.length;e.params.freeMode&&e.params.freeMode.enabled&&!e.params.loop&&a>s&&(a=s);for(let s=0;s<a;s+=1)t.renderBullet?r+=t.renderBullet.call(e,s,t.bulletClass):r+=`<${t.bulletElement} class="${t.bulletClass}"></${t.bulletElement}>`;i.html(r),e.pagination.bullets=i.find(W(t.bulletClass))}"fraction"===t.type&&(r=t.renderFraction?t.renderFraction.call(e,t.currentClass,t.totalClass):`<span class="${t.currentClass}"></span> / <span class="${t.totalClass}"></span>`,i.html(r)),"progressbar"===t.type&&(r=t.renderProgressbar?t.renderProgressbar.call(e,t.progressbarFillClass):`<span class="${t.progressbarFillClass}"></span>`,i.html(r)),"custom"!==t.type&&a("paginationRender",e.pagination.$el[0])}function u(){e.params.pagination=Y(e,e.originalParams.pagination,e.params.pagination,{el:"swiper-pagination"});const t=e.params.pagination;if(!t.el)return;let s=d(t.el);0!==s.length&&(e.params.uniqueNavElements&&"string"==typeof t.el&&s.length>1&&(s=e.$el.find(t.el),s.length>1&&(s=s.filter((t=>d(t).parents(".swiper")[0]===e.el)))),"bullets"===t.type&&t.clickable&&s.addClass(t.clickableClass),s.addClass(t.modifierClass+t.type),s.addClass(t.modifierClass+e.params.direction),"bullets"===t.type&&t.dynamicBullets&&(s.addClass(`${t.modifierClass}${t.type}-dynamic`),n=0,t.dynamicMainBullets<1&&(t.dynamicMainBullets=1)),"progressbar"===t.type&&t.progressbarOpposite&&s.addClass(t.progressbarOppositeClass),t.clickable&&s.on("click",W(t.bulletClass),(function(t){t.preventDefault();let s=d(this).index()*e.params.slidesPerGroup;e.params.loop&&(s+=e.loopedSlides),e.slideTo(s)})),Object.assign(e.pagination,{$el:s,el:s[0]}),e.enabled||s.addClass(t.lockClass))}function h(){const t=e.params.pagination;if(l())return;const s=e.pagination.$el;s.removeClass(t.hiddenClass),s.removeClass(t.modifierClass+t.type),s.removeClass(t.modifierClass+e.params.direction),e.pagination.bullets&&e.pagination.bullets.removeClass&&e.pagination.bullets.removeClass(t.bulletActiveClass),t.clickable&&s.off("click",W(t.bulletClass))}s("init",(()=>{u(),p(),c()})),s("activeIndexChange",(()=>{(e.params.loop||void 0===e.snapIndex)&&c()})),s("snapIndexChange",(()=>{e.params.loop||c()})),s("slidesLengthChange",(()=>{e.params.loop&&(p(),c())})),s("snapGridLengthChange",(()=>{e.params.loop||(p(),c())})),s("destroy",(()=>{h()})),s("enable disable",(()=>{const{$el:t}=e.pagination;t&&t[e.enabled?"removeClass":"addClass"](e.params.pagination.lockClass)})),s("lock unlock",(()=>{c()})),s("click",((t,s)=>{const i=s.target,{$el:r}=e.pagination;if(e.params.pagination.el&&e.params.pagination.hideOnClick&&r.length>0&&!d(i).hasClass(e.params.pagination.bulletClass)){if(e.navigation&&(e.navigation.nextEl&&i===e.navigation.nextEl||e.navigation.prevEl&&i===e.navigation.prevEl))return;const t=r.hasClass(e.params.pagination.hiddenClass);a(!0===t?"paginationShow":"paginationHide"),r.toggleClass(e.params.pagination.hiddenClass)}})),Object.assign(e.pagination,{render:p,update:c,init:u,destroy:h})},function({swiper:e,extendParams:t,on:s,emit:i}){const r=a();let n,l,o,c,u=!1,h=null,m=null;function f(){if(!e.params.scrollbar.el||!e.scrollbar.el)return;const{scrollbar:t,rtlTranslate:s,progress:a}=e,{$dragEl:i,$el:r}=t,n=e.params.scrollbar;let d=l,c=(o-l)*a;s?(c=-c,c>0?(d=l-c,c=0):-c+l>o&&(d=o+c)):c<0?(d=l+c,c=0):c+l>o&&(d=o-c),e.isHorizontal()?(i.transform(`translate3d(${c}px, 0, 0)`),i[0].style.width=`${d}px`):(i.transform(`translate3d(0px, ${c}px, 0)`),i[0].style.height=`${d}px`),n.hide&&(clearTimeout(h),r[0].style.opacity=1,h=setTimeout((()=>{r[0].style.opacity=0,r.transition(400)}),1e3))}function g(){if(!e.params.scrollbar.el||!e.scrollbar.el)return;const{scrollbar:t}=e,{$dragEl:s,$el:a}=t;s[0].style.width="",s[0].style.height="",o=e.isHorizontal()?a[0].offsetWidth:a[0].offsetHeight,c=e.size/(e.virtualSize+e.params.slidesOffsetBefore-(e.params.centeredSlides?e.snapGrid[0]:0)),l="auto"===e.params.scrollbar.dragSize?o*c:parseInt(e.params.scrollbar.dragSize,10),e.isHorizontal()?s[0].style.width=`${l}px`:s[0].style.height=`${l}px`,a[0].style.display=c>=1?"none":"",e.params.scrollbar.hide&&(a[0].style.opacity=0),e.params.watchOverflow&&e.enabled&&t.$el[e.isLocked?"addClass":"removeClass"](e.params.scrollbar.lockClass)}function v(t){return e.isHorizontal()?"touchstart"===t.type||"touchmove"===t.type?t.targetTouches[0].clientX:t.clientX:"touchstart"===t.type||"touchmove"===t.type?t.targetTouches[0].clientY:t.clientY}function w(t){const{scrollbar:s,rtlTranslate:a}=e,{$el:i}=s;let r;r=(v(t)-i.offset()[e.isHorizontal()?"left":"top"]-(null!==n?n:l/2))/(o-l),r=Math.max(Math.min(r,1),0),a&&(r=1-r);const d=e.minTranslate()+(e.maxTranslate()-e.minTranslate())*r;e.updateProgress(d),e.setTranslate(d),e.updateActiveIndex(),e.updateSlidesClasses()}function b(t){const s=e.params.scrollbar,{scrollbar:a,$wrapperEl:r}=e,{$el:l,$dragEl:o}=a;u=!0,n=t.target===o[0]||t.target===o?v(t)-t.target.getBoundingClientRect()[e.isHorizontal()?"left":"top"]:null,t.preventDefault(),t.stopPropagation(),r.transition(100),o.transition(100),w(t),clearTimeout(m),l.transition(0),s.hide&&l.css("opacity",1),e.params.cssMode&&e.$wrapperEl.css("scroll-snap-type","none"),i("scrollbarDragStart",t)}function x(t){const{scrollbar:s,$wrapperEl:a}=e,{$el:r,$dragEl:n}=s;u&&(t.preventDefault?t.preventDefault():t.returnValue=!1,w(t),a.transition(0),r.transition(0),n.transition(0),i("scrollbarDragMove",t))}function y(t){const s=e.params.scrollbar,{scrollbar:a,$wrapperEl:r}=e,{$el:n}=a;u&&(u=!1,e.params.cssMode&&(e.$wrapperEl.css("scroll-snap-type",""),r.transition("")),s.hide&&(clearTimeout(m),m=p((()=>{n.css("opacity",0),n.transition(400)}),1e3)),i("scrollbarDragEnd",t),s.snapOnRelease&&e.slideToClosest())}function E(t){const{scrollbar:s,touchEventsTouch:a,touchEventsDesktop:i,params:n,support:l}=e,o=s.$el[0],d=!(!l.passiveListener||!n.passiveListeners)&&{passive:!1,capture:!1},c=!(!l.passiveListener||!n.passiveListeners)&&{passive:!0,capture:!1};if(!o)return;const p="on"===t?"addEventListener":"removeEventListener";l.touch?(o[p](a.start,b,d),o[p](a.move,x,d),o[p](a.end,y,c)):(o[p](i.start,b,d),r[p](i.move,x,d),r[p](i.end,y,c))}function T(){const{scrollbar:t,$el:s}=e;e.params.scrollbar=Y(e,e.originalParams.scrollbar,e.params.scrollbar,{el:"swiper-scrollbar"});const a=e.params.scrollbar;if(!a.el)return;let i=d(a.el);e.params.uniqueNavElements&&"string"==typeof a.el&&i.length>1&&1===s.find(a.el).length&&(i=s.find(a.el));let r=i.find(`.${e.params.scrollbar.dragClass}`);0===r.length&&(r=d(`<div class="${e.params.scrollbar.dragClass}"></div>`),i.append(r)),Object.assign(t,{$el:i,el:i[0],$dragEl:r,dragEl:r[0]}),a.draggable&&e.params.scrollbar.el&&E("on"),i&&i[e.enabled?"removeClass":"addClass"](e.params.scrollbar.lockClass)}function C(){e.params.scrollbar.el&&E("off")}t({scrollbar:{el:null,dragSize:"auto",hide:!1,draggable:!1,snapOnRelease:!0,lockClass:"swiper-scrollbar-lock",dragClass:"swiper-scrollbar-drag"}}),e.scrollbar={el:null,dragEl:null,$el:null,$dragEl:null},s("init",(()=>{T(),g(),f()})),s("update resize observerUpdate lock unlock",(()=>{g()})),s("setTranslate",(()=>{f()})),s("setTransition",((t,s)=>{!function(t){e.params.scrollbar.el&&e.scrollbar.el&&e.scrollbar.$dragEl.transition(t)}(s)})),s("enable disable",(()=>{const{$el:t}=e.scrollbar;t&&t[e.enabled?"removeClass":"addClass"](e.params.scrollbar.lockClass)})),s("destroy",(()=>{C()})),Object.assign(e.scrollbar,{updateSize:g,setTranslate:f,init:T,destroy:C})},function({swiper:e,extendParams:t,on:s}){t({parallax:{enabled:!1}});const a=(t,s)=>{const{rtl:a}=e,i=d(t),r=a?-1:1,n=i.attr("data-swiper-parallax")||"0";let l=i.attr("data-swiper-parallax-x"),o=i.attr("data-swiper-parallax-y");const c=i.attr("data-swiper-parallax-scale"),p=i.attr("data-swiper-parallax-opacity");if(l||o?(l=l||"0",o=o||"0"):e.isHorizontal()?(l=n,o="0"):(o=n,l="0"),l=l.indexOf("%")>=0?parseInt(l,10)*s*r+"%":l*s*r+"px",o=o.indexOf("%")>=0?parseInt(o,10)*s+"%":o*s+"px",null!=p){const e=p-(p-1)*(1-Math.abs(s));i[0].style.opacity=e}if(null==c)i.transform(`translate3d(${l}, ${o}, 0px)`);else{const e=c-(c-1)*(1-Math.abs(s));i.transform(`translate3d(${l}, ${o}, 0px) scale(${e})`)}},i=()=>{const{$el:t,slides:s,progress:i,snapGrid:r}=e;t.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((e=>{a(e,i)})),s.each(((t,s)=>{let n=t.progress;e.params.slidesPerGroup>1&&"auto"!==e.params.slidesPerView&&(n+=Math.ceil(s/2)-i*(r.length-1)),n=Math.min(Math.max(n,-1),1),d(t).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((e=>{a(e,n)}))}))};s("beforeInit",(()=>{e.params.parallax.enabled&&(e.params.watchSlidesProgress=!0,e.originalParams.watchSlidesProgress=!0)})),s("init",(()=>{e.params.parallax.enabled&&i()})),s("setTranslate",(()=>{e.params.parallax.enabled&&i()})),s("setTransition",((t,s)=>{e.params.parallax.enabled&&((t=e.params.speed)=>{const{$el:s}=e;s.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((e=>{const s=d(e);let a=parseInt(s.attr("data-swiper-parallax-duration"),10)||t;0===t&&(a=0),s.transition(a)}))})(s)}))},function({swiper:e,extendParams:t,on:s,emit:a}){const i=r();t({zoom:{enabled:!1,maxRatio:3,minRatio:1,toggle:!0,containerClass:"swiper-zoom-container",zoomedSlideClass:"swiper-slide-zoomed"}}),e.zoom={enabled:!1};let n,l,o,c=1,p=!1;const u={$slideEl:void 0,slideWidth:void 0,slideHeight:void 0,$imageEl:void 0,$imageWrapEl:void 0,maxRatio:3},m={isTouched:void 0,isMoved:void 0,currentX:void 0,currentY:void 0,minX:void 0,minY:void 0,maxX:void 0,maxY:void 0,width:void 0,height:void 0,startX:void 0,startY:void 0,touchesStart:{},touchesCurrent:{}},f={x:void 0,y:void 0,prevPositionX:void 0,prevPositionY:void 0,prevTime:void 0};let g=1;function v(e){if(e.targetTouches.length<2)return 1;const t=e.targetTouches[0].pageX,s=e.targetTouches[0].pageY,a=e.targetTouches[1].pageX,i=e.targetTouches[1].pageY;return Math.sqrt((a-t)**2+(i-s)**2)}function w(t){const s=e.support,a=e.params.zoom;if(l=!1,o=!1,!s.gestures){if("touchstart"!==t.type||"touchstart"===t.type&&t.targetTouches.length<2)return;l=!0,u.scaleStart=v(t)}u.$slideEl&&u.$slideEl.length||(u.$slideEl=d(t.target).closest(`.${e.params.slideClass}`),0===u.$slideEl.length&&(u.$slideEl=e.slides.eq(e.activeIndex)),u.$imageEl=u.$slideEl.find(`.${a.containerClass}`).eq(0).find("img, svg, canvas, picture, .swiper-zoom-target"),u.$imageWrapEl=u.$imageEl.parent(`.${a.containerClass}`),u.maxRatio=u.$imageWrapEl.attr("data-swiper-zoom")||a.maxRatio,0!==u.$imageWrapEl.length)?(u.$imageEl&&u.$imageEl.transition(0),p=!0):u.$imageEl=void 0}function b(t){const s=e.support,a=e.params.zoom,i=e.zoom;if(!s.gestures){if("touchmove"!==t.type||"touchmove"===t.type&&t.targetTouches.length<2)return;o=!0,u.scaleMove=v(t)}u.$imageEl&&0!==u.$imageEl.length?(s.gestures?i.scale=t.scale*c:i.scale=u.scaleMove/u.scaleStart*c,i.scale>u.maxRatio&&(i.scale=u.maxRatio-1+(i.scale-u.maxRatio+1)**.5),i.scale<a.minRatio&&(i.scale=a.minRatio+1-(a.minRatio-i.scale+1)**.5),u.$imageEl.transform(`translate3d(0,0,0) scale(${i.scale})`)):"gesturechange"===t.type&&w(t)}function x(t){const s=e.device,a=e.support,i=e.params.zoom,r=e.zoom;if(!a.gestures){if(!l||!o)return;if("touchend"!==t.type||"touchend"===t.type&&t.changedTouches.length<2&&!s.android)return;l=!1,o=!1}u.$imageEl&&0!==u.$imageEl.length&&(r.scale=Math.max(Math.min(r.scale,u.maxRatio),i.minRatio),u.$imageEl.transition(e.params.speed).transform(`translate3d(0,0,0) scale(${r.scale})`),c=r.scale,p=!1,1===r.scale&&(u.$slideEl=void 0))}function y(t){const s=e.zoom;if(!u.$imageEl||0===u.$imageEl.length)return;if(e.allowClick=!1,!m.isTouched||!u.$slideEl)return;m.isMoved||(m.width=u.$imageEl[0].offsetWidth,m.height=u.$imageEl[0].offsetHeight,m.startX=h(u.$imageWrapEl[0],"x")||0,m.startY=h(u.$imageWrapEl[0],"y")||0,u.slideWidth=u.$slideEl[0].offsetWidth,u.slideHeight=u.$slideEl[0].offsetHeight,u.$imageWrapEl.transition(0));const a=m.width*s.scale,i=m.height*s.scale;if(!(a<u.slideWidth&&i<u.slideHeight)){if(m.minX=Math.min(u.slideWidth/2-a/2,0),m.maxX=-m.minX,m.minY=Math.min(u.slideHeight/2-i/2,0),m.maxY=-m.minY,m.touchesCurrent.x="touchmove"===t.type?t.targetTouches[0].pageX:t.pageX,m.touchesCurrent.y="touchmove"===t.type?t.targetTouches[0].pageY:t.pageY,!m.isMoved&&!p){if(e.isHorizontal()&&(Math.floor(m.minX)===Math.floor(m.startX)&&m.touchesCurrent.x<m.touchesStart.x||Math.floor(m.maxX)===Math.floor(m.startX)&&m.touchesCurrent.x>m.touchesStart.x))return void(m.isTouched=!1);if(!e.isHorizontal()&&(Math.floor(m.minY)===Math.floor(m.startY)&&m.touchesCurrent.y<m.touchesStart.y||Math.floor(m.maxY)===Math.floor(m.startY)&&m.touchesCurrent.y>m.touchesStart.y))return void(m.isTouched=!1)}t.cancelable&&t.preventDefault(),t.stopPropagation(),m.isMoved=!0,m.currentX=m.touchesCurrent.x-m.touchesStart.x+m.startX,m.currentY=m.touchesCurrent.y-m.touchesStart.y+m.startY,m.currentX<m.minX&&(m.currentX=m.minX+1-(m.minX-m.currentX+1)**.8),m.currentX>m.maxX&&(m.currentX=m.maxX-1+(m.currentX-m.maxX+1)**.8),m.currentY<m.minY&&(m.currentY=m.minY+1-(m.minY-m.currentY+1)**.8),m.currentY>m.maxY&&(m.currentY=m.maxY-1+(m.currentY-m.maxY+1)**.8),f.prevPositionX||(f.prevPositionX=m.touchesCurrent.x),f.prevPositionY||(f.prevPositionY=m.touchesCurrent.y),f.prevTime||(f.prevTime=Date.now()),f.x=(m.touchesCurrent.x-f.prevPositionX)/(Date.now()-f.prevTime)/2,f.y=(m.touchesCurrent.y-f.prevPositionY)/(Date.now()-f.prevTime)/2,Math.abs(m.touchesCurrent.x-f.prevPositionX)<2&&(f.x=0),Math.abs(m.touchesCurrent.y-f.prevPositionY)<2&&(f.y=0),f.prevPositionX=m.touchesCurrent.x,f.prevPositionY=m.touchesCurrent.y,f.prevTime=Date.now(),u.$imageWrapEl.transform(`translate3d(${m.currentX}px, ${m.currentY}px,0)`)}}function E(){const t=e.zoom;u.$slideEl&&e.previousIndex!==e.activeIndex&&(u.$imageEl&&u.$imageEl.transform("translate3d(0,0,0) scale(1)"),u.$imageWrapEl&&u.$imageWrapEl.transform("translate3d(0,0,0)"),t.scale=1,c=1,u.$slideEl=void 0,u.$imageEl=void 0,u.$imageWrapEl=void 0)}function T(t){const s=e.zoom,a=e.params.zoom;if(u.$slideEl||(t&&t.target&&(u.$slideEl=d(t.target).closest(`.${e.params.slideClass}`)),u.$slideEl||(e.params.virtual&&e.params.virtual.enabled&&e.virtual?u.$slideEl=e.$wrapperEl.children(`.${e.params.slideActiveClass}`):u.$slideEl=e.slides.eq(e.activeIndex)),u.$imageEl=u.$slideEl.find(`.${a.containerClass}`).eq(0).find("img, svg, canvas, picture, .swiper-zoom-target"),u.$imageWrapEl=u.$imageEl.parent(`.${a.containerClass}`)),!u.$imageEl||0===u.$imageEl.length||!u.$imageWrapEl||0===u.$imageWrapEl.length)return;let r,n,l,o,p,h,f,g,v,w,b,x,y,E,T,C,$,S;e.params.cssMode&&(e.wrapperEl.style.overflow="hidden",e.wrapperEl.style.touchAction="none"),u.$slideEl.addClass(`${a.zoomedSlideClass}`),void 0===m.touchesStart.x&&t?(r="touchend"===t.type?t.changedTouches[0].pageX:t.pageX,n="touchend"===t.type?t.changedTouches[0].pageY:t.pageY):(r=m.touchesStart.x,n=m.touchesStart.y),s.scale=u.$imageWrapEl.attr("data-swiper-zoom")||a.maxRatio,c=u.$imageWrapEl.attr("data-swiper-zoom")||a.maxRatio,t?($=u.$slideEl[0].offsetWidth,S=u.$slideEl[0].offsetHeight,l=u.$slideEl.offset().left+i.scrollX,o=u.$slideEl.offset().top+i.scrollY,p=l+$/2-r,h=o+S/2-n,v=u.$imageEl[0].offsetWidth,w=u.$imageEl[0].offsetHeight,b=v*s.scale,x=w*s.scale,y=Math.min($/2-b/2,0),E=Math.min(S/2-x/2,0),T=-y,C=-E,f=p*s.scale,g=h*s.scale,f<y&&(f=y),f>T&&(f=T),g<E&&(g=E),g>C&&(g=C)):(f=0,g=0),u.$imageWrapEl.transition(300).transform(`translate3d(${f}px, ${g}px,0)`),u.$imageEl.transition(300).transform(`translate3d(0,0,0) scale(${s.scale})`)}function C(){const t=e.zoom,s=e.params.zoom;u.$slideEl||(e.params.virtual&&e.params.virtual.enabled&&e.virtual?u.$slideEl=e.$wrapperEl.children(`.${e.params.slideActiveClass}`):u.$slideEl=e.slides.eq(e.activeIndex),u.$imageEl=u.$slideEl.find(`.${s.containerClass}`).eq(0).find("img, svg, canvas, picture, .swiper-zoom-target"),u.$imageWrapEl=u.$imageEl.parent(`.${s.containerClass}`)),u.$imageEl&&0!==u.$imageEl.length&&u.$imageWrapEl&&0!==u.$imageWrapEl.length&&(e.params.cssMode&&(e.wrapperEl.style.overflow="",e.wrapperEl.style.touchAction=""),t.scale=1,c=1,u.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"),u.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"),u.$slideEl.removeClass(`${s.zoomedSlideClass}`),u.$slideEl=void 0)}function $(t){const s=e.zoom;s.scale&&1!==s.scale?C():T(t)}function S(){const t=e.support;return{passiveListener:!("touchstart"!==e.touchEvents.start||!t.passiveListener||!e.params.passiveListeners)&&{passive:!0,capture:!1},activeListenerWithCapture:!t.passiveListener||{passive:!1,capture:!0}}}function M(){return`.${e.params.slideClass}`}function P(t){const{passiveListener:s}=S(),a=M();e.$wrapperEl[t]("gesturestart",a,w,s),e.$wrapperEl[t]("gesturechange",a,b,s),e.$wrapperEl[t]("gestureend",a,x,s)}function k(){n||(n=!0,P("on"))}function z(){n&&(n=!1,P("off"))}function O(){const t=e.zoom;if(t.enabled)return;t.enabled=!0;const s=e.support,{passiveListener:a,activeListenerWithCapture:i}=S(),r=M();s.gestures?(e.$wrapperEl.on(e.touchEvents.start,k,a),e.$wrapperEl.on(e.touchEvents.end,z,a)):"touchstart"===e.touchEvents.start&&(e.$wrapperEl.on(e.touchEvents.start,r,w,a),e.$wrapperEl.on(e.touchEvents.move,r,b,i),e.$wrapperEl.on(e.touchEvents.end,r,x,a),e.touchEvents.cancel&&e.$wrapperEl.on(e.touchEvents.cancel,r,x,a)),e.$wrapperEl.on(e.touchEvents.move,`.${e.params.zoom.containerClass}`,y,i)}function I(){const t=e.zoom;if(!t.enabled)return;const s=e.support;t.enabled=!1;const{passiveListener:a,activeListenerWithCapture:i}=S(),r=M();s.gestures?(e.$wrapperEl.off(e.touchEvents.start,k,a),e.$wrapperEl.off(e.touchEvents.end,z,a)):"touchstart"===e.touchEvents.start&&(e.$wrapperEl.off(e.touchEvents.start,r,w,a),e.$wrapperEl.off(e.touchEvents.move,r,b,i),e.$wrapperEl.off(e.touchEvents.end,r,x,a),e.touchEvents.cancel&&e.$wrapperEl.off(e.touchEvents.cancel,r,x,a)),e.$wrapperEl.off(e.touchEvents.move,`.${e.params.zoom.containerClass}`,y,i)}Object.defineProperty(e.zoom,"scale",{get:()=>g,set(e){if(g!==e){const t=u.$imageEl?u.$imageEl[0]:void 0,s=u.$slideEl?u.$slideEl[0]:void 0;a("zoomChange",e,t,s)}g=e}}),s("init",(()=>{e.params.zoom.enabled&&O()})),s("destroy",(()=>{I()})),s("touchStart",((t,s)=>{e.zoom.enabled&&function(t){const s=e.device;u.$imageEl&&0!==u.$imageEl.length&&(m.isTouched||(s.android&&t.cancelable&&t.preventDefault(),m.isTouched=!0,m.touchesStart.x="touchstart"===t.type?t.targetTouches[0].pageX:t.pageX,m.touchesStart.y="touchstart"===t.type?t.targetTouches[0].pageY:t.pageY))}(s)})),s("touchEnd",((t,s)=>{e.zoom.enabled&&function(){const t=e.zoom;if(!u.$imageEl||0===u.$imageEl.length)return;if(!m.isTouched||!m.isMoved)return m.isTouched=!1,void(m.isMoved=!1);m.isTouched=!1,m.isMoved=!1;let s=300,a=300;const i=f.x*s,r=m.currentX+i,n=f.y*a,l=m.currentY+n;0!==f.x&&(s=Math.abs((r-m.currentX)/f.x)),0!==f.y&&(a=Math.abs((l-m.currentY)/f.y));const o=Math.max(s,a);m.currentX=r,m.currentY=l;const d=m.width*t.scale,c=m.height*t.scale;m.minX=Math.min(u.slideWidth/2-d/2,0),m.maxX=-m.minX,m.minY=Math.min(u.slideHeight/2-c/2,0),m.maxY=-m.minY,m.currentX=Math.max(Math.min(m.currentX,m.maxX),m.minX),m.currentY=Math.max(Math.min(m.currentY,m.maxY),m.minY),u.$imageWrapEl.transition(o).transform(`translate3d(${m.currentX}px, ${m.currentY}px,0)`)}()})),s("doubleTap",((t,s)=>{!e.animating&&e.params.zoom.enabled&&e.zoom.enabled&&e.params.zoom.toggle&&$(s)})),s("transitionEnd",(()=>{e.zoom.enabled&&e.params.zoom.enabled&&E()})),s("slideChange",(()=>{e.zoom.enabled&&e.params.zoom.enabled&&e.params.cssMode&&E()})),Object.assign(e.zoom,{enable:O,disable:I,in:T,out:C,toggle:$})},function({swiper:e,extendParams:t,on:s,emit:a}){t({lazy:{checkInView:!1,enabled:!1,loadPrevNext:!1,loadPrevNextAmount:1,loadOnTransitionStart:!1,scrollingElement:"",elementClass:"swiper-lazy",loadingClass:"swiper-lazy-loading",loadedClass:"swiper-lazy-loaded",preloaderClass:"swiper-lazy-preloader"}}),e.lazy={};let i=!1,n=!1;function l(t,s=!0){const i=e.params.lazy;if(void 0===t)return;if(0===e.slides.length)return;const r=e.virtual&&e.params.virtual.enabled?e.$wrapperEl.children(`.${e.params.slideClass}[data-swiper-slide-index="${t}"]`):e.slides.eq(t),n=r.find(`.${i.elementClass}:not(.${i.loadedClass}):not(.${i.loadingClass})`);!r.hasClass(i.elementClass)||r.hasClass(i.loadedClass)||r.hasClass(i.loadingClass)||n.push(r[0]),0!==n.length&&n.each((t=>{const n=d(t);n.addClass(i.loadingClass);const o=n.attr("data-background"),c=n.attr("data-src"),p=n.attr("data-srcset"),u=n.attr("data-sizes"),h=n.parent("picture");e.loadImage(n[0],c||o,p,u,!1,(()=>{if(null!=e&&e&&(!e||e.params)&&!e.destroyed){if(o?(n.css("background-image",`url("${o}")`),n.removeAttr("data-background")):(p&&(n.attr("srcset",p),n.removeAttr("data-srcset")),u&&(n.attr("sizes",u),n.removeAttr("data-sizes")),h.length&&h.children("source").each((e=>{const t=d(e);t.attr("data-srcset")&&(t.attr("srcset",t.attr("data-srcset")),t.removeAttr("data-srcset"))})),c&&(n.attr("src",c),n.removeAttr("data-src"))),n.addClass(i.loadedClass).removeClass(i.loadingClass),r.find(`.${i.preloaderClass}`).remove(),e.params.loop&&s){const t=r.attr("data-swiper-slide-index");if(r.hasClass(e.params.slideDuplicateClass)){l(e.$wrapperEl.children(`[data-swiper-slide-index="${t}"]:not(.${e.params.slideDuplicateClass})`).index(),!1)}else{l(e.$wrapperEl.children(`.${e.params.slideDuplicateClass}[data-swiper-slide-index="${t}"]`).index(),!1)}}a("lazyImageReady",r[0],n[0]),e.params.autoHeight&&e.updateAutoHeight()}})),a("lazyImageLoad",r[0],n[0])}))}function o(){const{$wrapperEl:t,params:s,slides:a,activeIndex:i}=e,r=e.virtual&&s.virtual.enabled,o=s.lazy;let c=s.slidesPerView;function p(e){if(r){if(t.children(`.${s.slideClass}[data-swiper-slide-index="${e}"]`).length)return!0}else if(a[e])return!0;return!1}function u(e){return r?d(e).attr("data-swiper-slide-index"):d(e).index()}if("auto"===c&&(c=0),n||(n=!0),e.params.watchSlidesProgress)t.children(`.${s.slideVisibleClass}`).each((e=>{l(r?d(e).attr("data-swiper-slide-index"):d(e).index())}));else if(c>1)for(let e=i;e<i+c;e+=1)p(e)&&l(e);else l(i);if(o.loadPrevNext)if(c>1||o.loadPrevNextAmount&&o.loadPrevNextAmount>1){const e=o.loadPrevNextAmount,t=c,s=Math.min(i+t+Math.max(e,t),a.length),r=Math.max(i-Math.max(t,e),0);for(let e=i+c;e<s;e+=1)p(e)&&l(e);for(let e=r;e<i;e+=1)p(e)&&l(e)}else{const e=t.children(`.${s.slideNextClass}`);e.length>0&&l(u(e));const a=t.children(`.${s.slidePrevClass}`);a.length>0&&l(u(a))}}function c(){const t=r();if(!e||e.destroyed)return;const s=e.params.lazy.scrollingElement?d(e.params.lazy.scrollingElement):d(t),a=s[0]===t,n=a?t.innerWidth:s[0].offsetWidth,l=a?t.innerHeight:s[0].offsetHeight,p=e.$el.offset(),{rtlTranslate:u}=e;let h=!1;u&&(p.left-=e.$el[0].scrollLeft);const m=[[p.left,p.top],[p.left+e.width,p.top],[p.left,p.top+e.height],[p.left+e.width,p.top+e.height]];for(let e=0;e<m.length;e+=1){const t=m[e];if(t[0]>=0&&t[0]<=n&&t[1]>=0&&t[1]<=l){if(0===t[0]&&0===t[1])continue;h=!0}}const f=!("touchstart"!==e.touchEvents.start||!e.support.passiveListener||!e.params.passiveListeners)&&{passive:!0,capture:!1};h?(o(),s.off("scroll",c,f)):i||(i=!0,s.on("scroll",c,f))}s("beforeInit",(()=>{e.params.lazy.enabled&&e.params.preloadImages&&(e.params.preloadImages=!1)})),s("init",(()=>{e.params.lazy.enabled&&(e.params.lazy.checkInView?c():o())})),s("scroll",(()=>{e.params.freeMode&&e.params.freeMode.enabled&&!e.params.freeMode.sticky&&o()})),s("scrollbarDragMove resize _freeModeNoMomentumRelease",(()=>{e.params.lazy.enabled&&(e.params.lazy.checkInView?c():o())})),s("transitionStart",(()=>{e.params.lazy.enabled&&(e.params.lazy.loadOnTransitionStart||!e.params.lazy.loadOnTransitionStart&&!n)&&(e.params.lazy.checkInView?c():o())})),s("transitionEnd",(()=>{e.params.lazy.enabled&&!e.params.lazy.loadOnTransitionStart&&(e.params.lazy.checkInView?c():o())})),s("slideChange",(()=>{const{lazy:t,cssMode:s,watchSlidesProgress:a,touchReleaseOnEdges:i,resistanceRatio:r}=e.params;t.enabled&&(s||a&&(i||0===r))&&o()})),Object.assign(e.lazy,{load:o,loadInSlide:l})},function({swiper:e,extendParams:t,on:s}){function a(e,t){const s=function(){let e,t,s;return(a,i)=>{for(t=-1,e=a.length;e-t>1;)s=e+t>>1,a[s]<=i?t=s:e=s;return e}}();let a,i;return this.x=e,this.y=t,this.lastIndex=e.length-1,this.interpolate=function(e){return e?(i=s(this.x,e),a=i-1,(e-this.x[a])*(this.y[i]-this.y[a])/(this.x[i]-this.x[a])+this.y[a]):0},this}function i(){e.controller.control&&e.controller.spline&&(e.controller.spline=void 0,delete e.controller.spline)}t({controller:{control:void 0,inverse:!1,by:"slide"}}),e.controller={control:void 0},s("beforeInit",(()=>{e.controller.control=e.params.controller.control})),s("update",(()=>{i()})),s("resize",(()=>{i()})),s("observerUpdate",(()=>{i()})),s("setTranslate",((t,s,a)=>{e.controller.control&&e.controller.setTranslate(s,a)})),s("setTransition",((t,s,a)=>{e.controller.control&&e.controller.setTransition(s,a)})),Object.assign(e.controller,{setTranslate:function(t,s){const i=e.controller.control;let r,n;const l=e.constructor;function o(t){const s=e.rtlTranslate?-e.translate:e.translate;"slide"===e.params.controller.by&&(!function(t){e.controller.spline||(e.controller.spline=e.params.loop?new a(e.slidesGrid,t.slidesGrid):new a(e.snapGrid,t.snapGrid))}(t),n=-e.controller.spline.interpolate(-s)),n&&"container"!==e.params.controller.by||(r=(t.maxTranslate()-t.minTranslate())/(e.maxTranslate()-e.minTranslate()),n=(s-e.minTranslate())*r+t.minTranslate()),e.params.controller.inverse&&(n=t.maxTranslate()-n),t.updateProgress(n),t.setTranslate(n,e),t.updateActiveIndex(),t.updateSlidesClasses()}if(Array.isArray(i))for(let e=0;e<i.length;e+=1)i[e]!==s&&i[e]instanceof l&&o(i[e]);else i instanceof l&&s!==i&&o(i)},setTransition:function(t,s){const a=e.constructor,i=e.controller.control;let r;function n(s){s.setTransition(t,e),0!==t&&(s.transitionStart(),s.params.autoHeight&&p((()=>{s.updateAutoHeight()})),s.$wrapperEl.transitionEnd((()=>{i&&(s.params.loop&&"slide"===e.params.controller.by&&s.loopFix(),s.transitionEnd())})))}if(Array.isArray(i))for(r=0;r<i.length;r+=1)i[r]!==s&&i[r]instanceof a&&n(i[r]);else i instanceof a&&s!==i&&n(i)}})},function({swiper:e,extendParams:t,on:s}){t({a11y:{enabled:!0,notificationClass:"swiper-notification",prevSlideMessage:"Previous slide",nextSlideMessage:"Next slide",firstSlideMessage:"This is the first slide",lastSlideMessage:"This is the last slide",paginationBulletMessage:"Go to slide {{index}}",slideLabelMessage:"{{index}} / {{slidesLength}}",containerMessage:null,containerRoleDescriptionMessage:null,itemRoleDescriptionMessage:null,slideRole:"group"}});let a=null;function i(e){const t=a;0!==t.length&&(t.html(""),t.html(e))}function r(e){e.attr("tabIndex","0")}function n(e){e.attr("tabIndex","-1")}function l(e,t){e.attr("role",t)}function o(e,t){e.attr("aria-roledescription",t)}function c(e,t){e.attr("aria-label",t)}function p(e){e.attr("aria-disabled",!0)}function u(e){e.attr("aria-disabled",!1)}function h(t){if(13!==t.keyCode&&32!==t.keyCode)return;const s=e.params.a11y,a=d(t.target);e.navigation&&e.navigation.$nextEl&&a.is(e.navigation.$nextEl)&&(e.isEnd&&!e.params.loop||e.slideNext(),e.isEnd?i(s.lastSlideMessage):i(s.nextSlideMessage)),e.navigation&&e.navigation.$prevEl&&a.is(e.navigation.$prevEl)&&(e.isBeginning&&!e.params.loop||e.slidePrev(),e.isBeginning?i(s.firstSlideMessage):i(s.prevSlideMessage)),e.pagination&&a.is(W(e.params.pagination.bulletClass))&&a[0].click()}function m(){if(e.params.loop||!e.navigation)return;const{$nextEl:t,$prevEl:s}=e.navigation;s&&s.length>0&&(e.isBeginning?(p(s),n(s)):(u(s),r(s))),t&&t.length>0&&(e.isEnd?(p(t),n(t)):(u(t),r(t)))}function f(){return e.pagination&&e.params.pagination.clickable&&e.pagination.bullets&&e.pagination.bullets.length}const g=(e,t,s)=>{r(e),"BUTTON"!==e[0].tagName&&(l(e,"button"),e.on("keydown",h)),c(e,s),function(e,t){e.attr("aria-controls",t)}(e,t)};function v(){const t=e.params.a11y;e.$el.append(a);const s=e.$el;t.containerRoleDescriptionMessage&&o(s,t.containerRoleDescriptionMessage),t.containerMessage&&c(s,t.containerMessage);const i=e.$wrapperEl,r=i.attr("id")||`swiper-wrapper-${function(e=16){return"x".repeat(e).replace(/x/g,(()=>Math.round(16*Math.random()).toString(16)))}(16)}`,n=e.params.autoplay&&e.params.autoplay.enabled?"off":"polite";var p;p=r,i.attr("id",p),function(e,t){e.attr("aria-live",t)}(i,n),t.itemRoleDescriptionMessage&&o(d(e.slides),t.itemRoleDescriptionMessage),l(d(e.slides),t.slideRole);const u=e.params.loop?e.slides.filter((t=>!t.classList.contains(e.params.slideDuplicateClass))).length:e.slides.length;let m,v;e.slides.each(((s,a)=>{const i=d(s),r=e.params.loop?parseInt(i.attr("data-swiper-slide-index"),10):a;c(i,t.slideLabelMessage.replace(/\{\{index\}\}/,r+1).replace(/\{\{slidesLength\}\}/,u))})),e.navigation&&e.navigation.$nextEl&&(m=e.navigation.$nextEl),e.navigation&&e.navigation.$prevEl&&(v=e.navigation.$prevEl),m&&m.length&&g(m,r,t.nextSlideMessage),v&&v.length&&g(v,r,t.prevSlideMessage),f()&&e.pagination.$el.on("keydown",W(e.params.pagination.bulletClass),h)}s("beforeInit",(()=>{a=d(`<span class="${e.params.a11y.notificationClass}" aria-live="assertive" aria-atomic="true"></span>`)})),s("afterInit",(()=>{e.params.a11y.enabled&&(v(),m())})),s("toEdge",(()=>{e.params.a11y.enabled&&m()})),s("fromEdge",(()=>{e.params.a11y.enabled&&m()})),s("paginationUpdate",(()=>{e.params.a11y.enabled&&function(){const t=e.params.a11y;f()&&e.pagination.bullets.each((s=>{const a=d(s);r(a),e.params.pagination.renderBullet||(l(a,"button"),c(a,t.paginationBulletMessage.replace(/\{\{index\}\}/,a.index()+1)))}))}()})),s("destroy",(()=>{e.params.a11y.enabled&&function(){let t,s;a&&a.length>0&&a.remove(),e.navigation&&e.navigation.$nextEl&&(t=e.navigation.$nextEl),e.navigation&&e.navigation.$prevEl&&(s=e.navigation.$prevEl),t&&t.off("keydown",h),s&&s.off("keydown",h),f()&&e.pagination.$el.off("keydown",W(e.params.pagination.bulletClass),h)}()}))},function({swiper:e,extendParams:t,on:s}){t({history:{enabled:!1,root:"",replaceState:!1,key:"slides"}});let a=!1,i={};const n=e=>e.toString().replace(/\s+/g,"-").replace(/[^\w-]+/g,"").replace(/--+/g,"-").replace(/^-+/,"").replace(/-+$/,""),l=e=>{const t=r();let s;s=e?new URL(e):t.location;const a=s.pathname.slice(1).split("/").filter((e=>""!==e)),i=a.length;return{key:a[i-2],value:a[i-1]}},o=(t,s)=>{const i=r();if(!a||!e.params.history.enabled)return;let l;l=e.params.url?new URL(e.params.url):i.location;const o=e.slides.eq(s);let d=n(o.attr("data-history"));if(e.params.history.root.length>0){let s=e.params.history.root;"/"===s[s.length-1]&&(s=s.slice(0,s.length-1)),d=`${s}/${t}/${d}`}else l.pathname.includes(t)||(d=`${t}/${d}`);const c=i.history.state;c&&c.value===d||(e.params.history.replaceState?i.history.replaceState({value:d},null,d):i.history.pushState({value:d},null,d))},d=(t,s,a)=>{if(s)for(let i=0,r=e.slides.length;i<r;i+=1){const r=e.slides.eq(i);if(n(r.attr("data-history"))===s&&!r.hasClass(e.params.slideDuplicateClass)){const s=r.index();e.slideTo(s,t,a)}}else e.slideTo(0,t,a)},c=()=>{i=l(e.params.url),d(e.params.speed,e.paths.value,!1)};s("init",(()=>{e.params.history.enabled&&(()=>{const t=r();if(e.params.history){if(!t.history||!t.history.pushState)return e.params.history.enabled=!1,void(e.params.hashNavigation.enabled=!0);a=!0,i=l(e.params.url),(i.key||i.value)&&(d(0,i.value,e.params.runCallbacksOnInit),e.params.history.replaceState||t.addEventListener("popstate",c))}})()})),s("destroy",(()=>{e.params.history.enabled&&(()=>{const t=r();e.params.history.replaceState||t.removeEventListener("popstate",c)})()})),s("transitionEnd _freeModeNoMomentumRelease",(()=>{a&&o(e.params.history.key,e.activeIndex)})),s("slideChange",(()=>{a&&e.params.cssMode&&o(e.params.history.key,e.activeIndex)}))},function({swiper:e,extendParams:t,emit:s,on:i}){let n=!1;const l=a(),o=r();t({hashNavigation:{enabled:!1,replaceState:!1,watchState:!1}});const c=()=>{s("hashChange");const t=l.location.hash.replace("#","");if(t!==e.slides.eq(e.activeIndex).attr("data-hash")){const s=e.$wrapperEl.children(`.${e.params.slideClass}[data-hash="${t}"]`).index();if(void 0===s)return;e.slideTo(s)}},p=()=>{if(n&&e.params.hashNavigation.enabled)if(e.params.hashNavigation.replaceState&&o.history&&o.history.replaceState)o.history.replaceState(null,null,`#${e.slides.eq(e.activeIndex).attr("data-hash")}`||""),s("hashSet");else{const t=e.slides.eq(e.activeIndex),a=t.attr("data-hash")||t.attr("data-history");l.location.hash=a||"",s("hashSet")}};i("init",(()=>{e.params.hashNavigation.enabled&&(()=>{if(!e.params.hashNavigation.enabled||e.params.history&&e.params.history.enabled)return;n=!0;const t=l.location.hash.replace("#","");if(t){const s=0;for(let a=0,i=e.slides.length;a<i;a+=1){const i=e.slides.eq(a);if((i.attr("data-hash")||i.attr("data-history"))===t&&!i.hasClass(e.params.slideDuplicateClass)){const t=i.index();e.slideTo(t,s,e.params.runCallbacksOnInit,!0)}}}e.params.hashNavigation.watchState&&d(o).on("hashchange",c)})()})),i("destroy",(()=>{e.params.hashNavigation.enabled&&e.params.hashNavigation.watchState&&d(o).off("hashchange",c)})),i("transitionEnd _freeModeNoMomentumRelease",(()=>{n&&p()})),i("slideChange",(()=>{n&&e.params.cssMode&&p()}))},function({swiper:e,extendParams:t,on:s,emit:i}){let r;function n(){const t=e.slides.eq(e.activeIndex);let s=e.params.autoplay.delay;t.attr("data-swiper-autoplay")&&(s=t.attr("data-swiper-autoplay")||e.params.autoplay.delay),clearTimeout(r),r=p((()=>{let t;e.params.autoplay.reverseDirection?e.params.loop?(e.loopFix(),t=e.slidePrev(e.params.speed,!0,!0),i("autoplay")):e.isBeginning?e.params.autoplay.stopOnLastSlide?o():(t=e.slideTo(e.slides.length-1,e.params.speed,!0,!0),i("autoplay")):(t=e.slidePrev(e.params.speed,!0,!0),i("autoplay")):e.params.loop?(e.loopFix(),t=e.slideNext(e.params.speed,!0,!0),i("autoplay")):e.isEnd?e.params.autoplay.stopOnLastSlide?o():(t=e.slideTo(0,e.params.speed,!0,!0),i("autoplay")):(t=e.slideNext(e.params.speed,!0,!0),i("autoplay")),(e.params.cssMode&&e.autoplay.running||!1===t)&&n()}),s)}function l(){return void 0===r&&(!e.autoplay.running&&(e.autoplay.running=!0,i("autoplayStart"),n(),!0))}function o(){return!!e.autoplay.running&&(void 0!==r&&(r&&(clearTimeout(r),r=void 0),e.autoplay.running=!1,i("autoplayStop"),!0))}function d(t){e.autoplay.running&&(e.autoplay.paused||(r&&clearTimeout(r),e.autoplay.paused=!0,0!==t&&e.params.autoplay.waitForTransition?["transitionend","webkitTransitionEnd"].forEach((t=>{e.$wrapperEl[0].addEventListener(t,u)})):(e.autoplay.paused=!1,n())))}function c(){const t=a();"hidden"===t.visibilityState&&e.autoplay.running&&d(),"visible"===t.visibilityState&&e.autoplay.paused&&(n(),e.autoplay.paused=!1)}function u(t){e&&!e.destroyed&&e.$wrapperEl&&t.target===e.$wrapperEl[0]&&(["transitionend","webkitTransitionEnd"].forEach((t=>{e.$wrapperEl[0].removeEventListener(t,u)})),e.autoplay.paused=!1,e.autoplay.running?n():o())}function h(){e.params.autoplay.disableOnInteraction?o():d(),["transitionend","webkitTransitionEnd"].forEach((t=>{e.$wrapperEl[0].removeEventListener(t,u)}))}function m(){e.params.autoplay.disableOnInteraction||(e.autoplay.paused=!1,n())}e.autoplay={running:!1,paused:!1},t({autoplay:{enabled:!1,delay:3e3,waitForTransition:!0,disableOnInteraction:!0,stopOnLastSlide:!1,reverseDirection:!1,pauseOnMouseEnter:!1}}),s("init",(()=>{if(e.params.autoplay.enabled){l();a().addEventListener("visibilitychange",c),e.params.autoplay.pauseOnMouseEnter&&(e.$el.on("mouseenter",h),e.$el.on("mouseleave",m))}})),s("beforeTransitionStart",((t,s,a)=>{e.autoplay.running&&(a||!e.params.autoplay.disableOnInteraction?e.autoplay.pause(s):o())})),s("sliderFirstMove",(()=>{e.autoplay.running&&(e.params.autoplay.disableOnInteraction?o():d())})),s("touchEnd",(()=>{e.params.cssMode&&e.autoplay.paused&&!e.params.autoplay.disableOnInteraction&&n()})),s("destroy",(()=>{e.$el.off("mouseenter",h),e.$el.off("mouseleave",m),e.autoplay.running&&o();a().removeEventListener("visibilitychange",c)})),Object.assign(e.autoplay,{pause:d,run:n,start:l,stop:o})},function({swiper:e,extendParams:t,on:s}){t({thumbs:{swiper:null,multipleActiveThumbs:!0,autoScrollOffset:0,slideThumbActiveClass:"swiper-slide-thumb-active",thumbsContainerClass:"swiper-thumbs"}});let a=!1,i=!1;function r(){const t=e.thumbs.swiper;if(!t)return;const s=t.clickedIndex,a=t.clickedSlide;if(a&&d(a).hasClass(e.params.thumbs.slideThumbActiveClass))return;if(null==s)return;let i;if(i=t.params.loop?parseInt(d(t.clickedSlide).attr("data-swiper-slide-index"),10):s,e.params.loop){let t=e.activeIndex;e.slides.eq(t).hasClass(e.params.slideDuplicateClass)&&(e.loopFix(),e._clientLeft=e.$wrapperEl[0].clientLeft,t=e.activeIndex);const s=e.slides.eq(t).prevAll(`[data-swiper-slide-index="${i}"]`).eq(0).index(),a=e.slides.eq(t).nextAll(`[data-swiper-slide-index="${i}"]`).eq(0).index();i=void 0===s?a:void 0===a?s:a-t<t-s?a:s}e.slideTo(i)}function n(){const{thumbs:t}=e.params;if(a)return!1;a=!0;const s=e.constructor;if(t.swiper instanceof s)e.thumbs.swiper=t.swiper,Object.assign(e.thumbs.swiper.originalParams,{watchSlidesProgress:!0,slideToClickedSlide:!1}),Object.assign(e.thumbs.swiper.params,{watchSlidesProgress:!0,slideToClickedSlide:!1});else if(m(t.swiper)){const a=Object.assign({},t.swiper);Object.assign(a,{watchSlidesProgress:!0,slideToClickedSlide:!1}),e.thumbs.swiper=new s(a),i=!0}return e.thumbs.swiper.$el.addClass(e.params.thumbs.thumbsContainerClass),e.thumbs.swiper.on("tap",r),!0}function l(t){const s=e.thumbs.swiper;if(!s)return;const a="auto"===s.params.slidesPerView?s.slidesPerViewDynamic():s.params.slidesPerView,i=e.params.thumbs.autoScrollOffset,r=i&&!s.params.loop;if(e.realIndex!==s.realIndex||r){let n,l,o=s.activeIndex;if(s.params.loop){s.slides.eq(o).hasClass(s.params.slideDuplicateClass)&&(s.loopFix(),s._clientLeft=s.$wrapperEl[0].clientLeft,o=s.activeIndex);const t=s.slides.eq(o).prevAll(`[data-swiper-slide-index="${e.realIndex}"]`).eq(0).index(),a=s.slides.eq(o).nextAll(`[data-swiper-slide-index="${e.realIndex}"]`).eq(0).index();n=void 0===t?a:void 0===a?t:a-o==o-t?s.params.slidesPerGroup>1?a:o:a-o<o-t?a:t,l=e.activeIndex>e.previousIndex?"next":"prev"}else n=e.realIndex,l=n>e.previousIndex?"next":"prev";r&&(n+="next"===l?i:-1*i),s.visibleSlidesIndexes&&s.visibleSlidesIndexes.indexOf(n)<0&&(s.params.centeredSlides?n=n>o?n-Math.floor(a/2)+1:n+Math.floor(a/2)-1:n>o&&s.params.slidesPerGroup,s.slideTo(n,t?0:void 0))}let n=1;const l=e.params.thumbs.slideThumbActiveClass;if(e.params.slidesPerView>1&&!e.params.centeredSlides&&(n=e.params.slidesPerView),e.params.thumbs.multipleActiveThumbs||(n=1),n=Math.floor(n),s.slides.removeClass(l),s.params.loop||s.params.virtual&&s.params.virtual.enabled)for(let t=0;t<n;t+=1)s.$wrapperEl.children(`[data-swiper-slide-index="${e.realIndex+t}"]`).addClass(l);else for(let t=0;t<n;t+=1)s.slides.eq(e.realIndex+t).addClass(l)}e.thumbs={swiper:null},s("beforeInit",(()=>{const{thumbs:t}=e.params;t&&t.swiper&&(n(),l(!0))})),s("slideChange update resize observerUpdate",(()=>{e.thumbs.swiper&&l()})),s("setTransition",((t,s)=>{const a=e.thumbs.swiper;a&&a.setTransition(s)})),s("beforeDestroy",(()=>{const t=e.thumbs.swiper;t&&i&&t&&t.destroy()})),Object.assign(e.thumbs,{init:n,update:l})},function({swiper:e,extendParams:t,emit:s,once:a}){t({freeMode:{enabled:!1,momentum:!0,momentumRatio:1,momentumBounce:!0,momentumBounceRatio:1,momentumVelocityRatio:1,sticky:!1,minimumVelocity:.02}}),Object.assign(e,{freeMode:{onTouchMove:function(){const{touchEventsData:t,touches:s}=e;0===t.velocities.length&&t.velocities.push({position:s[e.isHorizontal()?"startX":"startY"],time:t.touchStartTime}),t.velocities.push({position:s[e.isHorizontal()?"currentX":"currentY"],time:u()})},onTouchEnd:function({currentPos:t}){const{params:i,$wrapperEl:r,rtlTranslate:n,snapGrid:l,touchEventsData:o}=e,d=u()-o.touchStartTime;if(t<-e.minTranslate())e.slideTo(e.activeIndex);else if(t>-e.maxTranslate())e.slides.length<l.length?e.slideTo(l.length-1):e.slideTo(e.slides.length-1);else{if(i.freeMode.momentum){if(o.velocities.length>1){const t=o.velocities.pop(),s=o.velocities.pop(),a=t.position-s.position,r=t.time-s.time;e.velocity=a/r,e.velocity/=2,Math.abs(e.velocity)<i.freeMode.minimumVelocity&&(e.velocity=0),(r>150||u()-t.time>300)&&(e.velocity=0)}else e.velocity=0;e.velocity*=i.freeMode.momentumVelocityRatio,o.velocities.length=0;let t=1e3*i.freeMode.momentumRatio;const d=e.velocity*t;let c=e.translate+d;n&&(c=-c);let p,h=!1;const m=20*Math.abs(e.velocity)*i.freeMode.momentumBounceRatio;let f;if(c<e.maxTranslate())i.freeMode.momentumBounce?(c+e.maxTranslate()<-m&&(c=e.maxTranslate()-m),p=e.maxTranslate(),h=!0,o.allowMomentumBounce=!0):c=e.maxTranslate(),i.loop&&i.centeredSlides&&(f=!0);else if(c>e.minTranslate())i.freeMode.momentumBounce?(c-e.minTranslate()>m&&(c=e.minTranslate()+m),p=e.minTranslate(),h=!0,o.allowMomentumBounce=!0):c=e.minTranslate(),i.loop&&i.centeredSlides&&(f=!0);else if(i.freeMode.sticky){let t;for(let e=0;e<l.length;e+=1)if(l[e]>-c){t=e;break}c=Math.abs(l[t]-c)<Math.abs(l[t-1]-c)||"next"===e.swipeDirection?l[t]:l[t-1],c=-c}if(f&&a("transitionEnd",(()=>{e.loopFix()})),0!==e.velocity){if(t=n?Math.abs((-c-e.translate)/e.velocity):Math.abs((c-e.translate)/e.velocity),i.freeMode.sticky){const s=Math.abs((n?-c:c)-e.translate),a=e.slidesSizesGrid[e.activeIndex];t=s<a?i.speed:s<2*a?1.5*i.speed:2.5*i.speed}}else if(i.freeMode.sticky)return void e.slideToClosest();i.freeMode.momentumBounce&&h?(e.updateProgress(p),e.setTransition(t),e.setTranslate(c),e.transitionStart(!0,e.swipeDirection),e.animating=!0,r.transitionEnd((()=>{e&&!e.destroyed&&o.allowMomentumBounce&&(s("momentumBounce"),e.setTransition(i.speed),setTimeout((()=>{e.setTranslate(p),r.transitionEnd((()=>{e&&!e.destroyed&&e.transitionEnd()}))}),0))}))):e.velocity?(s("_freeModeNoMomentumRelease"),e.updateProgress(c),e.setTransition(t),e.setTranslate(c),e.transitionStart(!0,e.swipeDirection),e.animating||(e.animating=!0,r.transitionEnd((()=>{e&&!e.destroyed&&e.transitionEnd()})))):e.updateProgress(c),e.updateActiveIndex(),e.updateSlidesClasses()}else{if(i.freeMode.sticky)return void e.slideToClosest();i.freeMode&&s("_freeModeNoMomentumRelease")}(!i.freeMode.momentum||d>=i.longSwipesMs)&&(e.updateProgress(),e.updateActiveIndex(),e.updateSlidesClasses())}}}})},function({swiper:e,extendParams:t}){let s,a,i;t({grid:{rows:1,fill:"column"}}),e.grid={initSlides:t=>{const{slidesPerView:r}=e.params,{rows:n,fill:l}=e.params.grid;a=s/n,i=Math.floor(t/n),s=Math.floor(t/n)===t/n?t:Math.ceil(t/n)*n,"auto"!==r&&"row"===l&&(s=Math.max(s,r*n))},updateSlide:(t,r,n,l)=>{const{slidesPerGroup:o,spaceBetween:d}=e.params,{rows:c,fill:p}=e.params.grid;let u,h,m;if("row"===p&&o>1){const e=Math.floor(t/(o*c)),a=t-c*o*e,i=0===e?o:Math.min(Math.ceil((n-e*c*o)/c),o);m=Math.floor(a/i),h=a-m*i+e*o,u=h+m*s/c,r.css({"-webkit-order":u,order:u})}else"column"===p?(h=Math.floor(t/c),m=t-h*c,(h>i||h===i&&m===c-1)&&(m+=1,m>=c&&(m=0,h+=1))):(m=Math.floor(t/a),h=t-m*a);r.css(l("margin-top"),0!==m?d&&`${d}px`:"")},updateWrapperSize:(t,a,i)=>{const{spaceBetween:r,centeredSlides:n,roundLengths:l}=e.params,{rows:o}=e.params.grid;if(e.virtualSize=(t+r)*s,e.virtualSize=Math.ceil(e.virtualSize/o)-r,e.$wrapperEl.css({[i("width")]:`${e.virtualSize+r}px`}),n){a.splice(0,a.length);const t=[];for(let s=0;s<a.length;s+=1){let i=a[s];l&&(i=Math.floor(i)),a[s]<e.virtualSize+a[0]&&t.push(i)}a.push(...t)}}}},function({swiper:e}){Object.assign(e,{appendSlide:R.bind(e),prependSlide:j.bind(e),addSlide:_.bind(e),removeSlide:V.bind(e),removeAllSlides:q.bind(e)})},function({swiper:e,extendParams:t,on:s}){t({fadeEffect:{crossFade:!1,transformEl:null}}),F({effect:"fade",swiper:e,on:s,setTranslate:()=>{const{slides:t}=e,s=e.params.fadeEffect;for(let a=0;a<t.length;a+=1){const t=e.slides.eq(a);let i=-t[0].swiperSlideOffset;e.params.virtualTranslate||(i-=e.translate);let r=0;e.isHorizontal()||(r=i,i=0);const n=e.params.fadeEffect.crossFade?Math.max(1-Math.abs(t[0].progress),0):1+Math.min(Math.max(t[0].progress,-1),0);U(s,t).css({opacity:n}).transform(`translate3d(${i}px, ${r}px, 0px)`)}},setTransition:t=>{const{transformEl:s}=e.params.fadeEffect;(s?e.slides.find(s):e.slides).transition(t),K({swiper:e,duration:t,transformEl:s,allSlides:!0})},overwriteParams:()=>({slidesPerView:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!e.params.cssMode})})},function({swiper:e,extendParams:t,on:s}){t({cubeEffect:{slideShadows:!0,shadow:!0,shadowOffset:20,shadowScale:.94}}),F({effect:"cube",swiper:e,on:s,setTranslate:()=>{const{$el:t,$wrapperEl:s,slides:a,width:i,height:r,rtlTranslate:n,size:l,browser:o}=e,c=e.params.cubeEffect,p=e.isHorizontal(),u=e.virtual&&e.params.virtual.enabled;let h,m=0;c.shadow&&(p?(h=s.find(".swiper-cube-shadow"),0===h.length&&(h=d('<div class="swiper-cube-shadow"></div>'),s.append(h)),h.css({height:`${i}px`})):(h=t.find(".swiper-cube-shadow"),0===h.length&&(h=d('<div class="swiper-cube-shadow"></div>'),t.append(h))));for(let e=0;e<a.length;e+=1){const t=a.eq(e);let s=e;u&&(s=parseInt(t.attr("data-swiper-slide-index"),10));let i=90*s,r=Math.floor(i/360);n&&(i=-i,r=Math.floor(-i/360));const o=Math.max(Math.min(t[0].progress,1),-1);let h=0,f=0,g=0;s%4==0?(h=4*-r*l,g=0):(s-1)%4==0?(h=0,g=4*-r*l):(s-2)%4==0?(h=l+4*r*l,g=l):(s-3)%4==0&&(h=-l,g=3*l+4*l*r),n&&(h=-h),p||(f=h,h=0);const v=`rotateX(${p?0:-i}deg) rotateY(${p?i:0}deg) translate3d(${h}px, ${f}px, ${g}px)`;if(o<=1&&o>-1&&(m=90*s+90*o,n&&(m=90*-s-90*o)),t.transform(v),c.slideShadows){let e=p?t.find(".swiper-slide-shadow-left"):t.find(".swiper-slide-shadow-top"),s=p?t.find(".swiper-slide-shadow-right"):t.find(".swiper-slide-shadow-bottom");0===e.length&&(e=d(`<div class="swiper-slide-shadow-${p?"left":"top"}"></div>`),t.append(e)),0===s.length&&(s=d(`<div class="swiper-slide-shadow-${p?"right":"bottom"}"></div>`),t.append(s)),e.length&&(e[0].style.opacity=Math.max(-o,0)),s.length&&(s[0].style.opacity=Math.max(o,0))}}if(s.css({"-webkit-transform-origin":`50% 50% -${l/2}px`,"transform-origin":`50% 50% -${l/2}px`}),c.shadow)if(p)h.transform(`translate3d(0px, ${i/2+c.shadowOffset}px, ${-i/2}px) rotateX(90deg) rotateZ(0deg) scale(${c.shadowScale})`);else{const e=Math.abs(m)-90*Math.floor(Math.abs(m)/90),t=1.5-(Math.sin(2*e*Math.PI/360)/2+Math.cos(2*e*Math.PI/360)/2),s=c.shadowScale,a=c.shadowScale/t,i=c.shadowOffset;h.transform(`scale3d(${s}, 1, ${a}) translate3d(0px, ${r/2+i}px, ${-r/2/a}px) rotateX(-90deg)`)}const f=o.isSafari||o.isWebView?-l/2:0;s.transform(`translate3d(0px,0,${f}px) rotateX(${e.isHorizontal()?0:m}deg) rotateY(${e.isHorizontal()?-m:0}deg)`)},setTransition:t=>{const{$el:s,slides:a}=e;a.transition(t).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(t),e.params.cubeEffect.shadow&&!e.isHorizontal()&&s.find(".swiper-cube-shadow").transition(t)},perspective:()=>!0,overwriteParams:()=>({slidesPerView:1,slidesPerGroup:1,watchSlidesProgress:!0,resistanceRatio:0,spaceBetween:0,centeredSlides:!1,virtualTranslate:!0})})},function({swiper:e,extendParams:t,on:s}){t({flipEffect:{slideShadows:!0,limitRotation:!0,transformEl:null}}),F({effect:"flip",swiper:e,on:s,setTranslate:()=>{const{slides:t,rtlTranslate:s}=e,a=e.params.flipEffect;for(let i=0;i<t.length;i+=1){const r=t.eq(i);let n=r[0].progress;e.params.flipEffect.limitRotation&&(n=Math.max(Math.min(r[0].progress,1),-1));const l=r[0].swiperSlideOffset;let o=-180*n,d=0,c=e.params.cssMode?-l-e.translate:-l,p=0;if(e.isHorizontal()?s&&(o=-o):(p=c,c=0,d=-o,o=0),r[0].style.zIndex=-Math.abs(Math.round(n))+t.length,a.slideShadows){let t=e.isHorizontal()?r.find(".swiper-slide-shadow-left"):r.find(".swiper-slide-shadow-top"),s=e.isHorizontal()?r.find(".swiper-slide-shadow-right"):r.find(".swiper-slide-shadow-bottom");0===t.length&&(t=Z(a,r,e.isHorizontal()?"left":"top")),0===s.length&&(s=Z(a,r,e.isHorizontal()?"right":"bottom")),t.length&&(t[0].style.opacity=Math.max(-n,0)),s.length&&(s[0].style.opacity=Math.max(n,0))}const u=`translate3d(${c}px, ${p}px, 0px) rotateX(${d}deg) rotateY(${o}deg)`;U(a,r).transform(u)}},setTransition:t=>{const{transformEl:s}=e.params.flipEffect;(s?e.slides.find(s):e.slides).transition(t).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(t),K({swiper:e,duration:t,transformEl:s})},perspective:()=>!0,overwriteParams:()=>({slidesPerView:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!e.params.cssMode})})},function({swiper:e,extendParams:t,on:s}){t({coverflowEffect:{rotate:50,stretch:0,depth:100,scale:1,modifier:1,slideShadows:!0,transformEl:null}}),F({effect:"coverflow",swiper:e,on:s,setTranslate:()=>{const{width:t,height:s,slides:a,slidesSizesGrid:i}=e,r=e.params.coverflowEffect,n=e.isHorizontal(),l=e.translate,o=n?t/2-l:s/2-l,d=n?r.rotate:-r.rotate,c=r.depth;for(let e=0,t=a.length;e<t;e+=1){const t=a.eq(e),s=i[e],l=(o-t[0].swiperSlideOffset-s/2)/s*r.modifier;let p=n?d*l:0,u=n?0:d*l,h=-c*Math.abs(l),m=r.stretch;"string"==typeof m&&-1!==m.indexOf("%")&&(m=parseFloat(r.stretch)/100*s);let f=n?0:m*l,g=n?m*l:0,v=1-(1-r.scale)*Math.abs(l);Math.abs(g)<.001&&(g=0),Math.abs(f)<.001&&(f=0),Math.abs(h)<.001&&(h=0),Math.abs(p)<.001&&(p=0),Math.abs(u)<.001&&(u=0),Math.abs(v)<.001&&(v=0);const w=`translate3d(${g}px,${f}px,${h}px)  rotateX(${u}deg) rotateY(${p}deg) scale(${v})`;if(U(r,t).transform(w),t[0].style.zIndex=1-Math.abs(Math.round(l)),r.slideShadows){let e=n?t.find(".swiper-slide-shadow-left"):t.find(".swiper-slide-shadow-top"),s=n?t.find(".swiper-slide-shadow-right"):t.find(".swiper-slide-shadow-bottom");0===e.length&&(e=Z(r,t,n?"left":"top")),0===s.length&&(s=Z(r,t,n?"right":"bottom")),e.length&&(e[0].style.opacity=l>0?l:0),s.length&&(s[0].style.opacity=-l>0?-l:0)}}},setTransition:t=>{const{transformEl:s}=e.params.coverflowEffect;(s?e.slides.find(s):e.slides).transition(t).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(t)},perspective:()=>!0,overwriteParams:()=>({watchSlidesProgress:!0})})},function({swiper:e,extendParams:t,on:s}){t({creativeEffect:{transformEl:null,limitProgress:1,shadowPerProgress:!1,progressMultiplier:1,perspective:!0,prev:{translate:[0,0,0],rotate:[0,0,0],opacity:1,scale:1},next:{translate:[0,0,0],rotate:[0,0,0],opacity:1,scale:1}}});const a=e=>"string"==typeof e?e:`${e}px`;F({effect:"creative",swiper:e,on:s,setTranslate:()=>{const{slides:t}=e,s=e.params.creativeEffect,{progressMultiplier:i}=s;for(let r=0;r<t.length;r+=1){const n=t.eq(r),l=n[0].progress,o=Math.min(Math.max(n[0].progress,-s.limitProgress),s.limitProgress),d=n[0].swiperSlideOffset,c=[e.params.cssMode?-d-e.translate:-d,0,0],p=[0,0,0];let u=!1;e.isHorizontal()||(c[1]=c[0],c[0]=0);let h={translate:[0,0,0],rotate:[0,0,0],scale:1,opacity:1};o<0?(h=s.next,u=!0):o>0&&(h=s.prev,u=!0),c.forEach(((e,t)=>{c[t]=`calc(${e}px + (${a(h.translate[t])} * ${Math.abs(o*i)}))`})),p.forEach(((e,t)=>{p[t]=h.rotate[t]*Math.abs(o*i)})),n[0].style.zIndex=-Math.abs(Math.round(l))+t.length;const m=c.join(", "),f=`rotateX(${p[0]}deg) rotateY(${p[1]}deg) rotateZ(${p[2]}deg)`,g=o<0?`scale(${1+(1-h.scale)*o*i})`:`scale(${1-(1-h.scale)*o*i})`,v=o<0?1+(1-h.opacity)*o*i:1-(1-h.opacity)*o*i,w=`translate3d(${m}) ${f} ${g}`;if(u&&h.shadow||!u){let e=n.children(".swiper-slide-shadow");if(0===e.length&&h.shadow&&(e=Z(s,n)),e.length){const t=s.shadowPerProgress?o*(1/s.limitProgress):o;e[0].style.opacity=Math.min(Math.max(Math.abs(t),0),1)}}const b=U(s,n);b.transform(w).css({opacity:v}),h.origin&&b.css("transform-origin",h.origin)}},setTransition:t=>{const{transformEl:s}=e.params.creativeEffect;(s?e.slides.find(s):e.slides).transition(t).find(".swiper-slide-shadow").transition(t),K({swiper:e,duration:t,transformEl:s,allSlides:!0})},perspective:()=>e.params.creativeEffect.perspective,overwriteParams:()=>({watchSlidesProgress:!0,virtualTranslate:!e.params.cssMode})})},function({swiper:e,extendParams:t,on:s}){t({cardsEffect:{slideShadows:!0,transformEl:null}}),F({effect:"cards",swiper:e,on:s,setTranslate:()=>{const{slides:t,activeIndex:s}=e,a=e.params.cardsEffect,{startTranslate:i,isTouched:r}=e.touchEventsData,n=e.translate;for(let l=0;l<t.length;l+=1){const o=t.eq(l),d=o[0].progress,c=Math.min(Math.max(d,-4),4);let p=o[0].swiperSlideOffset;e.params.centeredSlides&&!e.params.cssMode&&e.$wrapperEl.transform(`translateX(${e.minTranslate()}px)`),e.params.centeredSlides&&e.params.cssMode&&(p-=t[0].swiperSlideOffset);let u=e.params.cssMode?-p-e.translate:-p,h=0;const m=-100*Math.abs(c);let f=1,g=-2*c,v=8-.75*Math.abs(c);const w=(l===s||l===s-1)&&c>0&&c<1&&(r||e.params.cssMode)&&n<i,b=(l===s||l===s+1)&&c<0&&c>-1&&(r||e.params.cssMode)&&n>i;if(w||b){const e=(1-Math.abs((Math.abs(c)-.5)/.5))**.5;g+=-28*c*e,f+=-.5*e,v+=96*e,h=-25*e*Math.abs(c)+"%"}if(u=c<0?`calc(${u}px + (${v*Math.abs(c)}%))`:c>0?`calc(${u}px + (-${v*Math.abs(c)}%))`:`${u}px`,!e.isHorizontal()){const e=h;h=u,u=e}const x=`\n        translate3d(${u}, ${h}, ${m}px)\n        rotateZ(${g}deg)\n        scale(${c<0?""+(1+(1-f)*c):""+(1-(1-f)*c)})\n      `;if(a.slideShadows){let e=o.find(".swiper-slide-shadow");0===e.length&&(e=Z(a,o)),e.length&&(e[0].style.opacity=Math.min(Math.max((Math.abs(c)-.5)/.5,0),1))}o[0].style.zIndex=-Math.abs(Math.round(d))+t.length;U(a,o).transform(x)}},setTransition:t=>{const{transformEl:s}=e.params.cardsEffect;(s?e.slides.find(s):e.slides).transition(t).find(".swiper-slide-shadow").transition(t),K({swiper:e,duration:t,transformEl:s})},perspective:()=>!0,overwriteParams:()=>({watchSlidesProgress:!0,virtualTranslate:!e.params.cssMode})})}];return H.use(J),H}));
//# sourceMappingURL=swiper-bundle.min.js.map
//
/*

*/
jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.wheel = {
    setup: function( _, ns, handle ){
        this.addEventListener("wheel", handle, { passive: true });
    }
};
jQuery.event.special.mousewheel = {
    setup: function( _, ns, handle ){
        this.addEventListener("mousewheel", handle, { passive: true });
    }
};

    setTimeout(() => {
        let cnko = new Swiper('.cnko', {
                // Optional parameters
                direction: 'vertical',
                slidesPerView: 4,
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 2000,
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 2,
                    },
                    // when window width is >= 480px
                    480: {
                        slidesPerView: 3,
                    },
                    // when window width is >= 640px
                    640: {
                        slidesPerView: 4,

                    }
                }

            });
    }, 440);

        setTimeout(function(){


            let owlswiper = new Swiper('.owlswiper', {
                // Optional parameters
                slidesPerView: 3,
                loop:true,
                spaceBetween: 30,
                  // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                centeredSlides: true,
                // autoplay: {
                //     // delay: 2000,
                // },
                breakpoints: {
                    // when window width is >= 320px
                    1: {
                        slidesPerView: 1,
                    },
                    // when window width is >= 480px
                    700: {
                        slidesPerView: 2,
                    },
                    // when window width is >= 640px
                    1280: {
                        slidesPerView: 3,
                    }
                }

            });


        },3000)

        $(document).ready(function () {
            var screenTop = $(document).scrollTop();
            $(document ).scroll(function() {
                var screenTop = $(document).scrollTop();
            });

            $(document).on('click', "input.hs-button.primary.large", function(e){
                $('html,body').animate({
                    scrollTop: screenTop
                    },800);
                // var link = "https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral";
                //     window.open(link,'newStuff');
            });

            $('.closebutton').click(function(){
                $('section.popupform').fadeOut()
            })

            setTimeout(()=>{
                $('section.popupform').fadeIn()
            },5000)
            activeMenu = false;
            $("header.main ul.nav li a").on('click', function(e) {
                $('nav.top').removeClass('active-menu');
                $('a.menu-icon-toggle .txt').text('Menu');
                activeMenu = false;
                return activeMenu;
                e.preventDefault();
            });



            $("a.menu-icon-toggle").unbind("click").bind("click", function(){
                if (activeMenu == false) {
                    $('nav.top,header.main.investorhead').addClass('active-menu');
                    $('a.menu-icon-toggle .txt').text('Close');
                    activeMenu = true;
                } else {
                    $('nav.top,header.main.investorhead').removeClass('active-menu');
                    $('a.menu-icon-toggle .txt').text('Menu');
                    activeMenu = false;
                }
            });

            $(".psedo").bind("click", function(){
                if (activeMenu == false) {
                    $('nav.top,header.main.investorhead').addClass('active-menu');
                    $('a.menu-icon-toggle .txt').text('Close');
                    activeMenu = true;
                } else {
                    $('nav.top,header.main.investorhead').removeClass('active-menu');
                    $('a.menu-icon-toggle .txt').text('Menu');
                    activeMenu = false;
                }
            });

            $('a[href*="#"]').on('click', function(e) {
                $('html,body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 100
                    },800);
                e.preventDefault();
                });

        });



</script>

    <meta name="p:domain_verify" content="3f36cac4340da88df6ca76c1a431cd53" />
    <meta name="facebook-domain-verification" content="51y4k3ncdot6d21810cxa2yfje7xzg" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117353738-1"> </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    // gtag('config', 'UA-117353738-1');
    gtag('config', 'AW-875503484');
  </script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LWZKR7');</script>
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?> id="investor">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LWZKR7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header class="main investorhead" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="psedo"></div>
        <div class="container">
            <div class="content">
                <div class="rlcontainer">

                    <div class="responsive-bar">

                        <a class="menu-icon-toggle" href="">

                            <img data-src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" class="lozad"
                                alt="">

                            <div class="txt">Menu</div>
                        </a>
                    </div>
                    <div class="linksmsall">
                        <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral" magic-link="invest-button"
                            target="_blank" class="button button-nav buy-now w-button">INVEST NOW</a>
                    </div>
                    <!-- logo -->
                    <div class="logo-block">
                        <a class="main-nav-logo" href="<?php echo get_site_url(); ?>/"
                            title="Pharmacy delivery in hours. Just pay your normal copay.">
                            <figure class="sk">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/best-investment-tech-nowrx-logo.webp"
                                    class="orbit-image " alt="NowRx Pharmacy Delivery Logo" height="60px" width="150px">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- nav -->
                <nav class="top">
                    <ul class="nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                    <li itemprop="name">
                            <a itemprop="url" href="#shareprice">

                                <div class="tk">
                                Share Price
                                    <span class="sub">
                                    NowRx share price vs. alternatives
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a itemprop="url" href="#highlights"
                                title="See what customers are saying about NowRx Pharmacy.">

                                <div class="tk">
                                    Highlights
                                    <span class="sub">
                                    Highlights for NowRx investors
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a itemprop="url" href="#how-it-works">

                                <div class="tk">
                                    How it Works
                                    <span class="sub">
                                    How NowRx works for customers
                                    </span>
                                </div>
                            </a>
                        </li>

                        <li itemprop="name">
                            <a itemprop="url" href="#competitor">

                                <div class="tk">
                                Competitors
                                    <span class="sub">
                                    NowRx vs "next gen" competitors
                                    </span>
                                </div>
                            </a>
                        </li>




                        <li itemprop="name">
                            <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral" magic-link="invest-button"
                                target="_blank" class="button button-nav buy-now w-button">INVEST NOW</a>

                        </li>



                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php
if ( 'post' == get_post_type()  || is_archive('post') ||  'locations' == get_post_type() ):
else:
?>
    <main>
        <article>
            <?php endif; ?>


            <section data-ix="display-nav" id="company" class="hero-section centered landingpage7 wf-section">
                <div class="container container-main">
                    <div class="heading">

                        <h1 class="h1">
                            Disrupting the <strong>$480B</strong> Retail Pharmacy Industry
                        </h1>
                        <div class="text-block-24 cap">
                            <strong>WITH FREE SAME DAY DELIVERY AND AMAZING SERVICE</strong>
                        </div>

                        <div class="btnfig">
                        <div class="hero-buttons button-home">
                            <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral"  target="_blank" magic-link="invest-button"  class="button white-button buy-now w-button">
                            Invest Now
                            </a>

                        </div>
                        <div class="fig">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/best-investment-2021-nowrx-sec-qualified-and-crowdcheck-approved1.webp" alt="">
                        </div>
                        </div>
                    </div>

                </div>
                <div class="blue-bg lozad"
                    data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da44fcc16e1ccac834a8f_pill.svg">
                </div>
                <div class="main-image">
                    <div role="img" aria-label="pharmacy tech robotics that make nowrx startup stock to watch" class="background-video-3 lozad w-background-video w-background-video-atom lozad">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tech-high-growth-startup-nowrx-pharmacy-robot.webp" width="400px" height="530px" alt="tech high growth startup nowrx pharmacy robot" class="placeholdermobile lozad">
                        <video autoplay="" loop="" class="lozad" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9eb01c17e28894c3e7f65_mediaio_NowRx_1-transcode.mp4"
                                data-wf-ignore="true">
                            <source
                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9eb01c17e28894c3e7f65_mediaio_NowRx_1-transcode.webm"
                                data-wf-ignore="true">
                        </video>

                    </div>
                </div>
                <div class="red-bg red-2"></div>
                <div class="red-bg"></div>

            </section>




            <section class="section section-bottom-padding blue-sec">
                <div class="container">
                    <div class="w-layout-grid grid-6">
                        <div class="div-block-10">
                            <h2 class="h2-box white-t">
                                <span class="red">Previous Round <b>Oversubscribed</b> </span> on
                                SeedInvest!
                            </h2>
                            <span class="tx">
                                NowRx’s oversubscribed $20M Series B was a SeedInvest record. Don’t miss your chance to
                                invest in this rapidly growing startup that is rebuilding healthcare the way it should
                                be!
                                </p>
                            </span>
                            <div class="btninvst">
                                <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral" magic-link="invest-button" target="_blank" class="button button-mobile buy-now w-button">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/invest-in-healthcare-opportunity-nowrx-has-pharmacist-pulling-prescription-out-of-robot-technology.webp" width="300px" height="300px"
                            loading="lazy" id="w-node-_376c93d4-a4fa-b178-991c-5c443d70786f-a3cc193b" alt="invest in healthcare opportunity nowrx has pharmacist pulling prescription out of robot technology"
                            class="image-7 lozad">

                        <div id="w-node-_3ada1b61-094f-4770-3e0b-ef0521fc1e5d-a3cc193b" class="div-block-11">
                            <h3 class="fttitle">Featured In:</h3>
                            <span class="imgs">
                                <div class="swiper cnko">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <span class="m swiper-slide" id="1">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-fortune.webp"
                                                alt="top investment nowrx featured in fortune" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="2">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-venture-beat.webp"
                                                alt="top investment nowrx featured in venture beat.webp" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="3">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-tech-crunch.webp"
                                                alt="top investment nowrx featured in tech crunch" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="4">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-entrepreneur.webp"
                                                alt="top investment nowrx featured in entrepreneur" width="400px" height="200px">
                                        </span>

                                        <span class="m swiper-slide" id="5">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-yahoo.webp"
                                                alt="top investment nowrx featured in yahoo" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="6">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-forbes.webp"
                                                alt="top investment nowrx featured in forbes" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="7">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-crunchbase.webp"
                                                alt="top investment nowrx featured in crunchbase" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="8">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-fierce-healthcare.webp"
                                                alt="top investment nowrx featured in fierce healthcare" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="9">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-barrons.webp"
                                                alt="top investment nowrx featured in barrons" width="400px" height="200px">
                                        </span>


                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="stockprice " id="shareprice" >
            <div class="absolv lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da44fcc16e1ccac834a8f_pill.svg"></div>
                <div class="container">
                <span class="desc">
                *Based on data from <a href="https://www.macrotrends.net/" target="_blank">macrotrends.net</a>, <a href="https://www.spglobal.com/en/" target="_blank">spglobal.com</a>, and  <a href="https://www.seedinvest.com/" target="_blank">SeedInvest</a>. Past performance is no guarantee of future results.</span>

                    <div class="stockticker">

                            <div class="price">
                                <div class="txt">
                                <div class="logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/best-investment-tech-nowrx-logo.webp" alt="">
                                </div>

                                </div>
                                <div class="priceop">
                                    <b>
                                    <span class="rl">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path style="fill:#098551;" d="M263.169,3.051c-2.015-1.976-4.73-3.073-7.552-3.051l0,0c-2.834,0.001-5.551,1.129-7.552,3.136  L35.286,216.555c-4.112,4.218-4.026,10.972,0.192,15.084c1.971,1.921,4.608,3.006,7.36,3.028h117.333v266.667  c0,5.891,4.776,10.667,10.667,10.667h170.667c5.891,0,10.667-4.776,10.667-10.667V234.667h116.885  c5.891,0.011,10.675-4.757,10.686-10.648c0.005-2.84-1.123-5.565-3.134-7.571L263.169,3.051z"/>

                                            </svg>
                                            </span>
                                            1,650%</b>
                                    <span class="ince">Share Price Increase Since 2016*</span>
                                </div>
                                </div>

                                <div class="price">
                                    <div class="txt">
                                        <div class="logo">
                                        S&P 500
                                        </div>

                                    </div>
                                    <div class="priceop">
                                        <b>
                                        <span class="rl">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path style="fill:#098551;" d="M263.169,3.051c-2.015-1.976-4.73-3.073-7.552-3.051l0,0c-2.834,0.001-5.551,1.129-7.552,3.136  L35.286,216.555c-4.112,4.218-4.026,10.972,0.192,15.084c1.971,1.921,4.608,3.006,7.36,3.028h117.333v266.667  c0,5.891,4.776,10.667,10.667,10.667h170.667c5.891,0,10.667-4.776,10.667-10.667V234.667h116.885  c5.891,0.011,10.675-4.757,10.686-10.648c0.005-2.84-1.123-5.565-3.134-7.571L263.169,3.051z"/>

                                            </svg>
                                            </span>
                                            114%</b>
                                        <span class="ince">5 year returns*</span>
                                    </div>
                                </div>

                                <div class="price">
                                    <div class="txt">
                                        <div class="logo">
                                        DJIA
                                        </div>

                                    </div>
                                    <div class="priceop">
                                        <b>
                                            <span class="rl">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path style="fill:#098551;" d="M263.169,3.051c-2.015-1.976-4.73-3.073-7.552-3.051l0,0c-2.834,0.001-5.551,1.129-7.552,3.136  L35.286,216.555c-4.112,4.218-4.026,10.972,0.192,15.084c1.971,1.921,4.608,3.006,7.36,3.028h117.333v266.667  c0,5.891,4.776,10.667,10.667,10.667h170.667c5.891,0,10.667-4.776,10.667-10.667V234.667h116.885  c5.891,0.011,10.675-4.757,10.686-10.648c0.005-2.84-1.123-5.565-3.134-7.571L263.169,3.051z"/>

                                            </svg>
                                            </span>
                                            96%</b>
                                        <span class="ince">5 year returns*</span>
                                    </div>
                                </div>

                                <div class="price">
                                    <div class="txt">
                                        <div class="logo">
                                        Gold
                                        </div>

                                    </div>
                                    <div class="priceop">
                                        <b>
                                        <span class="rl">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path style="fill:#098551;" d="M263.169,3.051c-2.015-1.976-4.73-3.073-7.552-3.051l0,0c-2.834,0.001-5.551,1.129-7.552,3.136  L35.286,216.555c-4.112,4.218-4.026,10.972,0.192,15.084c1.971,1.921,4.608,3.006,7.36,3.028h117.333v266.667  c0,5.891,4.776,10.667,10.667,10.667h170.667c5.891,0,10.667-4.776,10.667-10.667V234.667h116.885  c5.891,0.011,10.675-4.757,10.686-10.648c0.005-2.84-1.123-5.565-3.134-7.571L263.169,3.051z"/>

                                            </svg>
                                            </span>
                                            22%
                                            </b>
                                        <span class="ince">5 year returns*</span>
                                    </div>
                                </div>



                        </div>

                    <div class="txt mainblockheader">

                        <h2 class="title">NowRx <b>Stock Share Price</b> vs. Alternatives </b></h2>
                            <p>

                            Since its initial Preseed offering in 2016, NowRx has seen consistent growth alongside an increase in share price of 1,650%

                            </p>
                            <div class="btnc">
                                <a href="" class="button">
                                Invest Now
                                </a>
                            </div>

                    </div>

                    </div>

                </div>
            </section>





            <div class="cta lozad"
            data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx <strong>Investor Deck</strong></h2>
                    <div class="form-block w-form">

                        <script>
                            window.addEventListener('load', function() {
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "1",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad"
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>

            <section class="rapid" id="highlights">
                <div class="container">
                    <div class="header">
                        <h2 class="title">Rapid <b>Growth</b> & Raving <b>Customers</b></h2>
                        <p>
                            NowRx is growing rapidly as patients and doctors are raving about the pharmacy's amazing
                            service and free same day prescription delivery.
                        </p>
                    </div>
                    <div class="content">
                        <div class="listblock">
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    35K+
                                </div>
                                <div class="til">
                                    NowRx Customers
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    365K+
                                </div>
                                <div class="til">
                                    Prescriptions Delivered
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    8
                                </div>
                                <div class="til">
                                    DEA Licensed Pharmacies
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    $2.8M
                                </div>
                                <div class="til">
                                    Prescription Savings (2020)
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    70%
                                </div>
                                <div class="til">
                                    NowRx Telehealth Average MoM Growth Since Launching
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="number">
                                    5 Stars
                                </div>
                                <div class="til">
                                    Average NowRx Patient & Doctor Rating on Yelp
                                </div>
                            </div>
                        </div>
                        <figure class="list lozad" data-background-image="<?php echo get_template_directory_uri(); ?>/images/chart-with-line.webp">
                            <video data-src="<?php echo get_template_directory_uri(); ?>/images/Chart-10.mp4" muted class="lozad"></video>
                        </figure>
                        <div class="callitem">
                            <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral" magic-link="invest-button" target="_blank" class="button button-mobile buy-now w-button">
                                Invest Now
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <div class="quote-section"><img
                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895c983afd43a4f8ad190_image%2021-min.jpg"
                    loading="lazy" width="169px" height="212px" alt="" class="image-11 lozad">
                <blockquote class="block-quote"><em class="italic-text">“I highly recommend NowRx Pharmacy. I
                        use them professionally as well as personally for my own prescriptions and they really
                        are as good as advertised. They accept standing orders which has saved my office staff
                        significant time and energy in addition to accurately applying drug coupons to lower out
                        of pocket costs for my patients. I could not be happier with
                        NowRx!”</em><br><br><strong>-Dr. James E Tearse, MD</strong></blockquote>
            </div>


            <section id="how-it-works" class="section lozad section-bussiness hand-bg"
                data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg">
                <div class="container">
                    <div class="pricing-wrapper">
                        <div class="business-model lozad model-2" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5da9e57d43911225f442dcca_nowrx-blue-left-2.png"
                            >
                        </div>
                        <div id="how" class="business-model model-1">
                            <h2 class="h2-box h2-op">How <strong>NowRx</strong> Works</h2>
                            <p class="p-sub p-short">
                                Sending a prescription to NowRx is just like sending it to any other retail pharmacy.
                            </p>
                            <div class="business-box">
                                <div class="invesments-list list-full hor"><img width="60px" height="60px"
                                        class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/61489905e242c2c0d1558b0c_Group%2078.svg"
                                        loading="lazy" alt="" class="image-10">
                                    <p class="p-sub p-short p-margin small-dot no-dot">
                                        When a doctor writes a prescription and asks where to send it, tell them NowRx.
                                        The doctor can then use fax, ePrescribe, or paper to send the prescription.
                                        <br>
                                    </p>
                                </div>
                                <div class="invesments-list list-full hor"><img width="60px" height="60px"
                                        class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899051151975fdb36a408_Group%2079.svg"
                                        loading="lazy" alt="" class="image-10">
                                    <p class="p-sub p-short p-margin small-dot no-dot">Once NowRx receives the
                                        prescription, the patient is contacted to schedule a delivery and then a HIPAA
                                        certified NowRx employee will deliver in hours for FREE!
                                        <br>
                                    </p>
                                </div>
                                <div class="invesments-list list-full hor"><img width="60px" height="60px"
                                        class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899065cc8091c4d8b5b18_Group%2080.svg"
                                        loading="lazy" alt="" class="image-10">
                                    <p class="p-sub p-short p-margin small-dot no-dot">Refills and transfers can be
                                        requested online, by phone, or through the NowRx app. Patients can even set up
                                        automatic refills each month for maximum convenience.<br></p>
                                </div>
                                <div class="button-wrapper"><a
                                        href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral"
                                        target="_blank" magic-link="invest-button"
                                        class="button white-button button-menu buy-now w-button">Invest Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="section blue-section" id="proprietarypharmacytech">
                <div class="container">
                    <div class="pricing-wrapper">
                        <div class="cl-80">
                            <h2 class="h2-box h2-op">NowRx’s Pharmacy Tech Creates a <strong>Better Experience</strong>
                                for
                                Customers<br></h2>
                            <p class="p-sub mar-b">In comparison to antiquated legacy software used by most pharmacies,
                                NowRx incorporates modern, full stack technology that produces a simple, frictionless
                                experience for customers.</p>
                            <div class="text-block-27">Our Technology Stack</div>
                            <div class="rows row-new _2">
                                <div class="column-19 top-0"><a href="#/"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded89edac67851e60fc3c_Group%2057.svg"
                                            loading="lazy" width="66px" height="60px" alt="" class="icon-b nom lozad">
                                        <div>Inventory System</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#/"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8bcd671550459ff14d_Group%2058.svg"
                                            loading="lazy"  width="66px" height="60px" alt="" class="icon-b nom lozad">
                                        <div>Automated Adjudication</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#/"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8939123e236ce04fcc_Group%2014.svg"
                                            loading="lazy"  width="66px" height="60px" alt="" class="icon-b nom lozad">
                                        <div>Chatbots</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#/"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8839123ef5f5e04fcb_Group%2015.svg"
                                            loading="lazy"  width="66px" height="60px" alt="" class="icon-b nom lozad">
                                        <div>Robotics Processing</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#/"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8b9900f83fb124f372_Group%2060.svg"
                                            loading="lazy"  width="66px" height="60px" alt="" class="icon-b nom lozad">
                                        <div>2-Way Msg Physician (EMR)</div>
                                    </a></div>
                                <div class="column-19 top-0"><a href="#/"
                                        class="featurelogos-2 wh w-inline-block"><img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8a69891454acc1569c_Group%2059.svg"
                                            loading="lazy"  width="66px" height="60px" alt="" class="icon-b nom lozad">
                                        <div>Logistics</div>
                                    </a></div>
                            </div>
                        </div>
                        <div class="image right lozad"
                            data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613df231d23ae1d3e4ccdcf3_Group%2061-min.jpeg">
                        </div>
                    </div>
                </div>
                <div class="container"></div>
            </section>
            <section class="comptiv">
                <div class="container">
                    <div class="header">
                        <h2 class="title">NowRx Pharmacy is Driven By a <strong>Powerful Technology Stack</strong></h2>
                        <p>
                            NowRx's proprietary "QuickFill" software provides a competitive advantage for NowRx by
                            enabling a number of customer benefits.
                        </p>
                    </div>
                    <div class="contentx">
                        <div class="phone">
                            <figure>
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/stock-to-invest-in-nowrx-mobile-app.webp"
                                    alt="stock to invest in nowrx mobile app" width="550px" height="550px" class="lozad">
                            </figure>
                        </div>
                        <div class="blocks">
                            <!-- block -->
                            <div class="block">
                                <div class="nm">1</div>
                                <div class="txt">
                                    <h3 class="title">FREE Same Day Delivery</h3>
                                    <p>Better efficiency & automated processes allow NowRx to provide FREE same day
                                        delivery profitably!</p>
                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="nm">2</div>
                                <div class="txt">
                                    <h3 class="title">Reduced Insurance Rejections</h3>
                                    <p>Intelligent claims adjudication features help the pharmacy process insurance more
                                        effectively.</p>
                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="nm">3</div>
                                <div class="txt">
                                    <h3 class="title">Reduced Out of Stock Issues</h3>
                                    <p>Machine learning algorithms help automate purchases & maintain proper inventory
                                        levels.</p>
                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="nm">4</div>
                                <div class="txt">
                                    <h3 class="title">Lower Out of Pocket Costs</h3>
                                    <p>Discount search features find & apply discounts automatically ($2.8M saved in
                                        2020)</p>
                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="nm">5</div>
                                <div class="txt">
                                    <h3 class="title">5 Star Customer Service</h3>
                                    <p>Optimized workflows & automated processes free pharmacist time for what matters -
                                        customer!</p>
                                </div>
                            </div>
                            <div class="btninvst">
                                <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral" magic-link="invest-button" target="_blank" class="button button-mobile buy-now w-button">
                                    Invest Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="cta lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx <strong>Investor Deck</strong></h2>
                    <div class="form-block w-form">

                    <script>
                            window.addEventListener('load', function() {
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "2",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad"
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>

            <section class="section padding-m quickf" id="competitor">

                <div class="container">
                    <div class="flex hor-mo margin">
                        <div class="col-left">
                            <h2 class="blocktitle h2-box h2-op center">
                                NowRx vs "Next-Gen" Pharmacy <strong>Competitors</strong>
                            </h2>
                            <p class="txtuncder">
                                NowRx's proprietary pharmacy software and robotics provide an unrivaled pharmacy
                                experience for customers.
                            </p>

                            <img data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min.jpg"
                                loading="lazy" width="800px" height="890px"
                                sizes="(max-width: 479px) 98vw, (max-width: 991px) 100vw, (max-width: 1439px) 54vw, 705.09765625px"
                                srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min-p-500.jpeg 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min-p-800.jpeg 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min-p-1080.jpeg 1080w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897d91c72ce333e5c156b_Group%2088-min.jpg 1380w"
                                alt="" class="image-12 lozad">

                            <p class="txtunder">
                                The Net Promoter Score measures the willingness of customers to recommend a company's
                                products or services to others. It is used as a proxy for gauging the customer’s overall
                                satisfaction and loyalty to the brand.
                            </p>

                        </div>
                        <div class="business-box right-box white shadow">
                            <div class="w-layout-gridgrid-8d"><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cbc74189197fd3ef1e_Group%2087-min.jpg"
                                    class="lozad" loading="lazy" id="w-node-_89d1b09f-28ec-4318-e2ea-5e98f9bda998-a3cc193b"
                                    sizes="(max-width: 479px) 95vw, (max-width: 830px) 100vw, 830px"
                                    srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cbc74189197fd3ef1e_Group%2087-min-p-500.jpeg 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cbc74189197fd3ef1e_Group%2087-min-p-800.jpeg 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cbc74189197fd3ef1e_Group%2087-min.jpg 830w"
                                    alt=""><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cd66a325d161c3126e_Group%2086-min.jpg"
                                    class="lozad" loading="lazy" sizes="(max-width: 479px) 95vw, (max-width: 830px) 100vw, 830px"
                                    srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cd66a325d161c3126e_Group%2086-min-p-500.jpeg 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cd66a325d161c3126e_Group%2086-min-p-800.jpeg 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895cd66a325d161c3126e_Group%2086-min.jpg 830w"
                                    alt=""><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897646502186d9dee4e7d_Group%2085-min.jpg"
                                    class="lozad" loading="lazy" sizes="(max-width: 479px) 95vw, (max-width: 830px) 100vw, 830px"
                                    srcset="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897646502186d9dee4e7d_Group%2085-min-p-500.jpeg 500w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897646502186d9dee4e7d_Group%2085-min-p-800.jpeg 800w, https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614897646502186d9dee4e7d_Group%2085-min.jpg 830w"
                                    alt=""></div>
                        </div>
                    </div>
                </div>

            </section>





            <section id="testimonials" class="section section-bottom-padding lab">
                <div class="container testimonials">
                    <div class="team-intro">
                        <h2 class="h2-box h2-op h2-center">What People Are Saying <strong>About NowRx</strong></h2>
                        <p class="p-sub p-short p-center">NowRx has delivered more than 365K prescriptions to over 35K
                            customers – see what they are saying about NowRx!<br></p>
                    </div>
                    <div class="team-intro labs-intro">
                        <div class="container-11">
                            <div id="loop" class="owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">

                                    <!-- Slider main container -->
                                    <div class="swiper owlswiper" style="width:100%;height:auto;">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">

                                    <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "Companies that <strong>ACTUALLY PROVIDE CUSTOMER SERVICE</strong> are so rare in this day and age. These guys are awesome!"</span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> <strong>Best pharmacy I have ever used!</strong> I have nothing but good things to say about them. Exemplary customer service, delivery right to your door with text updates, and great pricing. I will be using them for as long as I can! </span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "<strong>Best Pharmacy experience EVER</strong>! These guys are like going to your old neighborhood pharmacy, you know the one, where they deliver your medications to you and actually care about the customer? You don't get better service than this." </span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">This is my new pharmacy. <strong>Not only was
                                                        their price lower, but they do same day delivery</strong> to my
                                                    neighborhood. And when you call it's easy to reach a real person. My
                                                    kind of store!<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Julie B.<br></em></div> -->
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al"><strong>NowRx is the best pharmacy I've ever used.</strong>
                                                    They take all the work out of prescription management, they have
                                                    incredible communication (text and phone, whichever is your
                                                    preference), and they keep providing service at a level I never
                                                    expect.<br></p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"Super easy to use. <strong>Fast and WAY
                                                        cheaper</strong> than Costco or any other place I've ever
                                                    checked."<br></p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"We have been using NowRx for the last year
                                                    and the service is great as well as all the staff we have talked to
                                                    in getting our prescriptions filled. <strong>They go the extra mile
                                                        in customer service!</strong>"<br></p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"<strong>Best Pharmacy experience
                                                        EVER!</strong> These guys are like going to your old
                                                    neighborhood pharmacy, you know the one, where they deliver your
                                                    medications to you and actually care about the customer? You don't
                                                    get better service than this."<br></p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "<strong>Hands down best pharmacy you could ask for!</strong> I no longer have to wait in line to fill my grandmother's medications, and the customer service is amazing. Try them out and you won't regret it!" </span>
                                                <br></p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                Responsible business. <strong>Actually the best pharmacy I've used so far.</strong> Delivery is always on time. Customer service is awesome and service is very reliable.
                                                <br></p>
                                                <div class="review-w">
                                                    <div>NowRx Customer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relnav">

                                    <div class="swiper-button-prev">
                                        <img width="30px" height="30px" src="https://assets.website-files.com/5d2a7a40b9b05dd3c13ea7e7/5d52e91ed4a630a0f23d2a7d_prev-2.svg">
                                    </div>
                                    <div class="swiper-button-next">
                                        <img width="30px" height="30px" src="https://assets.website-files.com/5d2a7a40b9b05dd3c13ea7e7/5d52e91e48c1ac639ca0f932_next-2.svg">
                                    </div>
                                    </div>

                                    </div>

                                    </div>
                                </div>

                            </div>
                            <div class="btninvst">
                                <a href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral" magic-link="invest-button" target="_blank" class="button button-mobile buy-now w-button">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section section-bottom-padding team-sec">

                <div class="container">
                    <div class="team-intro less-m">
                        <h2 class="h2-box h2-op h2-center">We’re <strong>growing</strong></h2>
                        <p class="p-sub p-short p-center"><strong>NowRx Has Plans To Expand Nationwide</strong></p>
                    </div>
                    <div class="team">
                        <div class="w-layout-grid grid-5">
                            <div id="w-node-_5f6c87f4-8d40-ac83-0a71-ac3837c92298-a3cc193b"><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6140c92d117d8b068379aa99_Group%2075.svg"
                                    loading="lazy" width="400px" height="200px" alt="" class="image-13 lozad"></div>
                            <div id="w-node-_46417f79-3a8d-7813-ccfe-2b88b8550b62-a3cc193b"><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6137693b89c4889e4c5fa396_Group%2049.svg"
                                    loading="lazy" alt="" width="400px" height="200px" class="hide-m lozad"></div>
                            <div class="timeline-box">
                                <div class="year">2016</div>
                                <div>
                                    <div class="white-box time">
                                        <div>Launch 1st micro-fulfillment location in Mountain View, CA</div>
                                    </div>
                                    <div class="year deatil">LAUNCH</div>
                                </div>
                                <div class="logo-wrapper hide2"></div>
                            </div>
                            <div class="timeline-box">
                                <div class="year">2017</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Industry’s first modern Pharmacy Mgt System: QuickFill</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V1.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ddeb5ee7de4b899a82f59_image%204.png"
                                                loading="lazy" width="400px" height="200px" class="lozad" alt="surescripts approves nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year">2018</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Pharmacy-Optimized Logistics Solution:Wheelz</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V2.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/cvs-caremark-approves-nowrx.webp"
                                                loading="lazy" class="lozad" width="400px" height="200px" alt="cvs caremark approves nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year">2019</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Natural Language AI Chatbot and Predictive Inventory (ML)</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V3.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/controlled-substance-eprescribe-certification-for-nowrx.webp"
                                                loading="lazy" class="lozad" width="400px" height="200px" alt="controlled substance eprescribe certification for nowrx"></div>
                                    </div>
                                </div>
                            </div><img
                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6137693b89c4889e4c5fa396_Group%2049.svg"
                                loading="lazy" alt="" class="lozad" width="400px" height="200px"  class="hide-d">
                            <div class="timeline-box">
                                <div class="year blue">2020</div>
                                <div class="full-time">
                                    <div class="white-box time blue-box">
                                        <div>Expand to 2nd state, Arizona</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil blue">MULTI-STATE</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/surescripts-whoite-coat-award-winner-nowrx.webp"
                                                loading="lazy" width="400px" height="200px" class="lozad" alt="surescripts whoite coat award winner nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year blue">2021-2022 E</div>
                                <div class="full-time">
                                    <div class="white-box time blue-box">
                                        <div>Expand to top 15 metro areas across 10 states</div>
                                    </div>
                                    <div class="year deatil blue">NATIONAL</div>
                                </div>
                                <div class="logo-wrapper hide2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="section white shadow no-pill">
                <div class="container">
                    <h2 class="h2-box h2-op center _2">Geographic <strong>Expansion</strong></h2><img
                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614a202469484c5b84e195a3_NowRX_WebsiteMap_091721%20(1).gif"
                        loading="lazy" alt="" class="image-8">
                </div>
                <div class="button-wrapper button-center"><a
                        href="https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&amp;utm_medium=referral" magic-link="invest-button"
                        target="_blank" class="button white-button button-menu buy-now w-button">Invest Now</a>
                </div>
            </section>

            <div class="cta lozad"
            data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg"
                >
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx <strong>Investor Deck</strong></h2>
                    <div class="form-block w-form">

                        <script>
                            window.addEventListener('load', function() {
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "3",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad"
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>

            <section id="Opportunity" class="section white growth lozad"
                data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895c69feb3f181cc73117_Rectangle%2085-min.jpg">
                <div class="container">
                    <h2 class="h2-box h2-op center _2">Growth <strong>Strategy</strong></h2>
                    <div class="business-box _2">
                        <div class="invesments-list list-full hor"><img
                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/61489905e242c2c0d1558b0c_Group%2078.svg"
                                loading="lazy" alt="" class="image-10 lozad">
                            <p class="p-sub p-short p-margin small-dot no-dot"><strong>96% of new customers come from
                                    physician referral</strong> and 4% of new customers from digital. We will scale
                                digital once the physician referral channel is established.<br></p>
                        </div>
                        <div class="invesments-list list-full hor"><img
                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899051151975fdb36a408_Group%2079.svg"
                                loading="lazy" alt="" class="image-10 lozad">
                            <p class="p-sub p-short p-margin small-dot no-dot">New territories to be launched with
                                resulting exponential increase in total annual orders. West coast expansion underway
                                now, and <strong>nationwide expansion planned as the next phase.</strong><br></p>
                        </div>
                        <div class="invesments-list list-full hor"><img
                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899065cc8091c4d8b5b18_Group%2080.svg"
                                loading="lazy" alt="" class="image-10 lozad">
                            <p class="p-sub p-short p-margin small-dot no-dot"><strong>Additional opportunities for
                                    growth include non-prescription health and wellness products,</strong> telehealth
                                and specialty pharmacies for complex conditions.<br></p>
                        </div>
                    </div>
                </div>
            </section>



            <section id="our-team" class="section section-bottom-padding team-sec">
                <section class="meetteam" id="execteam">
                    <div class="container">
                        <div class="header">
                            <h2 class="sec-title">Leadership <strong>Team</strong>
                            </h2>
                        </div>
                        <div class="contentprofile">
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Cary Breese">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">Cary Breese</h3>
                                    <div class="subtitle">
                                        CEO/Founder
                                    </div>
                                    <p>
                                        Successful, serial entrepreneur with expertise in technology, healthcare, and
                                        financial services. Former CEO of financial services startup acquired for 18x
                                        cash-on-cash. Led $100M product line as EVP, CIGNA. B.S. in Electrical
                                        Engineering from Drexel University and credentialed actuary.


                                    </p>
                                </div>
                            </div>
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Sumeet Sheokand">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">
                                        Sumeet Sheokand

                                    </h3>
                                    <div class="subtitle">
                                        CTO/Founder


                                    </div>
                                    <p>
                                        15+ years of senior leadership in software and technology startups (CTO – Genie
                                        DB, VP Engineering – X1). Extensive expertise in building business line and
                                        enterprise grade software. Adept at utilizing Big Data techniques to solve real
                                        business problems.
                                    </p>
                                </div>
                            </div>
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Melissa Bostock">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">
                                        Melissa Bostock
                                    </h3>
                                    <div class="subtitle">
                                        Director of Pharmacy


                                    </div>
                                    <p>
                                        Doctor of Pharmacy (Pharm D) from UCSF, Master's Degree in Public Health and
                                        B.S. in Microbiology, Immunology, & Molecular Genetics from UCLA. Former Target
                                        managing pharmacist trained in medication therapy management, diabetes
                                        screening, pain management, pediatrics, and immunizations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </section>
            <div class="cta lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg"
                >
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx <strong>Investor Deck</strong></h2>
                    <div class="form-block w-form">

                    <script>
                            window.addEventListener('load', function() {
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "4",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad"
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>



<section class="popupform lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg">
    <div class="content">
        <div class="closebutton">
            X
        </div>
        <h2 class="title">Get the NowRx Investor Deck</h2>
        <p>
            Sign up for campaign updates and learn more about the opportunity to invest in NowRx.
        </p>
        <div class="formcall">
                        <script>
                            window.addEventListener('load', function() {
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "5",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad"
                                });
                            });
                        </script>
        </div>
    </div>
</section>



            <footer class="footer wf-section">
                <div class="footer-links">
                    <div class="container-10 footer-container w-container"><img
                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d690b818dfed925245b6de0_NowRx-Logo-900px-white.png"
                            height="200px" width="600"
                            alt="" class="logo-2 lozad">
                        <div class="footer-nav-wrapper">
                            <a href="#highlights" class="footer-nav-link">HIGHLIGHTS</a>
                            <a href="#how-it-works" class="footer-nav-link">HOW IT WORKS</a>
                            <a href="#our-team" class="footer-nav-link">OUR TEAM</a>
                        </div>
                    </div>
                    <div class="footer-top">
                        <div class="w-container">
                            <div class="footer-bottom-text"><strong class="bold-text">NowRx is offering securities
                                    through
                                    the use of an Offering Statement that has been qualified by the Securities and
                                    Exchange
                                    Commission under Tier II of Regulation A. A copy of the Final Offering Circular that
                                    forms a part of the Offering Statement may be obtained from: NowRx<br></strong><a
                                    target="_blank" href="https://www.seedinvest.com/nowrx" magic-link="invest-button" class="footer-link"><strong
                                        class="bold-text">https://www.seedinvest.com/nowrx</strong></a>You should read
                                the
                                Offering Circular before making any investment. This presentation contains offering
                                materials prepared solely by NowRx without the assistance of SI Securities, and not
                                subject
                                to FINRA Rule 2210. In addition, this presentation may contain forward-looking
                                statements
                                and information relating to, among other things, the company, its business plan and
                                strategy, and its industry. These statements reflect management’s current views with
                                respect
                                to future events based information currently available and are subject to risks and
                                uncertainties that could cause the company’s actual results to differ materially.
                                Investors
                                are cautioned not to place undue reliance on these forward-looking statements as they
                                are
                                meant for illustrative purposes and they do not represent guarantees of future results,
                                levels of activity, performance, or achievements, all of which cannot be made. Moreover,
                                no
                                person nor any other person or entity assumes responsibility for the accuracy and
                                completeness of forward-looking statements, and is under no duty to update any such
                                statements to conform them to actual results.<br><br>The statement regarding "share
                                price"
                                does not represent guarantees of future valuation growth and/or declines.</div>
                        </div>
                    </div>
            </footer>


            <?php
if ( 'post' == get_post_type()  || is_archive('post') ||  'locations' == get_post_type() ):
else:
?>
        </article>
    </main>
    <?php endif; ?>




    <?php wp_footer(); ?>
    </div> <!-- closes off canvas content -->


    <!-- <script src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js"></script> -->

    <?php
    // include modals
    // get_template_part('footer-modals');
    ?>
    <!-- tracking code -->

    <?php // drop Google Analytics Here
  ?>











  <script async type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "NowRX Pharmacy",
  "url": "<?php echo get_site_url(); ?>",
  "logo": "<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Logo.webp",
  "sameAs": ["https://www.facebook.com/NowRx", "https://twitter.com/nowrx", "https://www.linkedin.com/company/nowrx","https://www.instagram.com/nowrxpharmacy"]

}
</script>
  <?php

if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
<?php $author_id = get_the_author_meta( 'ID' ); ?>

<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

$id = get_the_ID();
$yoast_desc = get_post_meta( $id, '_yoast_wpseo_metadesc', true );

?>

<script async type="application/ld+json">{
"@context": "http://schema.org",
"@type": "WebSite",
"name": "Prescription Delivery in Hours Now Rx for Free | NowRx Pharmacy",
        "description": "Prescription Delivery in Hours for Free | NowRx Pharmacy",
"url": "<?php the_permalink(); ?>",
"sameAs": ["https://www.facebook.com/NowRx", "https://twitter.com/nowrx", "https://www.linkedin.com/company/nowrx","https://www.instagram.com/nowrxpharmacy"]


}</script>



<script async type="application/ld+json">
{
    "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "<?php the_permalink(); ?>#webpage",
        "url": "<?php the_permalink(); ?>",
        "name": "Prescription Delivery in Hours for Free | NowRx Pharmacy",
        "isPartOf": {
            "@id": "<?php the_permalink(); ?>#website"
        },
        "datePublished": "<?php echo get_the_date( 'D, M d Y - h:i a' ); ?>",
        "dateModified": "<?php echo get_the_modified_date(); ?>",
        "description": "<?php echo $yoast_desc; ?>",
        "inLanguage": "en-US"
}
</script>

<?php endwhile; endif;


?>


<!-- Event snippet for Download Investor Pitch Deck conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
var callback = function () {
if (typeof(url) != 'undefined') {
window.location = url;
}
};
gtag('event', 'conversion', {
'send_to': 'AW-875503484/TH5YCO2MhfsCEPy-vKED',
'event_callback': callback
});
return false;
}
</script>




    <script async type=“text/javascript”  src=“https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=HcMd6f”></script>

<style>
    /**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
// .owl-carousel,.owl-carousel .owl-item{-webkit-tap-highlight-color:transparent;position:relative}.owl-carousel{display:none;width:100%;z-index:1}.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y;touch-action:manipulation;-moz-backface-visibility:hidden}.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-item,.owl-carousel .owl-wrapper{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0)}.owl-carousel .owl-item{min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-touch-callout:none}.owl-carousel .owl-item img{display:block;width:100%}.owl-carousel .owl-dots.disabled,.owl-carousel .owl-nav.disabled{display:none}.no-js .owl-carousel,.owl-carousel.owl-loaded{display:block}.owl-carousel .owl-dot,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-nav .owl-prev{cursor:pointer;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel .owl-nav button.owl-next,.owl-carousel .owl-nav button.owl-prev,.owl-carousel button.owl-dot{background:0 0;color:inherit;border:none;padding:0!important;font:inherit}.owl-carousel.owl-loading{opacity:0;display:block}.owl-carousel.owl-hidden{opacity:0}.owl-carousel.owl-refresh .owl-item{visibility:hidden}.owl-carousel.owl-drag .owl-item{-ms-touch-action:pan-y;touch-action:pan-y;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-grab{cursor:move;cursor:grab}.owl-carousel.owl-rtl{direction:rtl}.owl-carousel.owl-rtl .owl-item{float:right}.owl-carousel .animated{animation-duration:1s;animation-fill-mode:both}.owl-carousel .owl-animated-in{z-index:0}.owl-carousel .owl-animated-out{z-index:1}.owl-carousel .fadeOut{animation-name:fadeOut}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.owl-height{transition:height .5s ease-in-out}.owl-carousel .owl-item .owl-lazy{opacity:0;transition:opacity .4s ease}.owl-carousel .owl-item .owl-lazy:not([src]),.owl-carousel .owl-item .owl-lazy[src^=""]{max-height:0}.owl-carousel .owl-item img.owl-lazy{transform-style:preserve-3d}.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000}.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url(owl.video.play.png) no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;transition:transform .1s ease}.owl-carousel .owl-video-play-icon:hover{-ms-transform:scale(1.3,1.3);transform:scale(1.3,1.3)}.owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn{display:none}.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;background-size:contain;transition:opacity .4s ease}.owl-carousel .owl-video-frame{position:relative;z-index:1;height:100%;width:100%}

/**
 * Swiper 7.0.8
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * https://swiperjs.com
 *
 * Copyright 2014-2021 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: October 4, 2021
 */

@font-face{font-family:swiper-icons;src:url('data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA');font-weight:400;font-style:normal}:root{--swiper-theme-color:#007aff}.swiper{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-vertical>.swiper-wrapper{flex-direction:column}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:flex;transition-property:transform;box-sizing:content-box}.swiper-android .swiper-slide,.swiper-wrapper{transform:translate3d(0px,0,0)}.swiper-pointer-events{touch-action:pan-y}.swiper-pointer-events.swiper-vertical{touch-action:pan-x}.swiper-slide{flex-shrink:0;width:100%;height:100%;position:relative;transition-property:transform}.swiper-slide-invisible-blank{visibility:hidden}.swiper-autoheight,.swiper-autoheight .swiper-slide{height:auto}.swiper-autoheight .swiper-wrapper{align-items:flex-start;transition-property:transform,height}.swiper-3d,.swiper-3d.swiper-css-mode .swiper-wrapper{perspective:1200px}.swiper-3d .swiper-cube-shadow,.swiper-3d .swiper-slide,.swiper-3d .swiper-slide-shadow,.swiper-3d .swiper-slide-shadow-bottom,.swiper-3d .swiper-slide-shadow-left,.swiper-3d .swiper-slide-shadow-right,.swiper-3d .swiper-slide-shadow-top,.swiper-3d .swiper-wrapper{transform-style:preserve-3d}.swiper-3d .swiper-slide-shadow,.swiper-3d .swiper-slide-shadow-bottom,.swiper-3d .swiper-slide-shadow-left,.swiper-3d .swiper-slide-shadow-right,.swiper-3d .swiper-slide-shadow-top{position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:none;z-index:10}.swiper-3d .swiper-slide-shadow{background:rgba(0,0,0,.15)}.swiper-3d .swiper-slide-shadow-left{background-image:linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-3d .swiper-slide-shadow-right{background-image:linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-3d .swiper-slide-shadow-top{background-image:linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-3d .swiper-slide-shadow-bottom{background-image:linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-css-mode>.swiper-wrapper{overflow:auto;scrollbar-width:none;-ms-overflow-style:none}.swiper-css-mode>.swiper-wrapper::-webkit-scrollbar{display:none}.swiper-css-mode>.swiper-wrapper>.swiper-slide{scroll-snap-align:start start}.swiper-horizontal.swiper-css-mode>.swiper-wrapper{scroll-snap-type:x mandatory}.swiper-vertical.swiper-css-mode>.swiper-wrapper{scroll-snap-type:y mandatory}.swiper-centered>.swiper-wrapper::before{content:'';flex-shrink:0;order:9999}.swiper-centered.swiper-horizontal>.swiper-wrapper>.swiper-slide:first-child{margin-inline-start:var(--swiper-centered-offset-before)}.swiper-centered.swiper-horizontal>.swiper-wrapper::before{height:100%;min-height:1px;width:var(--swiper-centered-offset-after)}.swiper-centered.swiper-vertical>.swiper-wrapper>.swiper-slide:first-child{margin-block-start:var(--swiper-centered-offset-before)}.swiper-centered.swiper-vertical>.swiper-wrapper::before{width:100%;min-width:1px;height:var(--swiper-centered-offset-after)}.swiper-centered>.swiper-wrapper>.swiper-slide{scroll-snap-align:center center}.swiper-virtual.swiper-css-mode .swiper-wrapper::after{content:'';position:absolute;left:0;top:0;pointer-events:none}.swiper-virtual.swiper-css-mode.swiper-horizontal .swiper-wrapper::after{height:1px;width:var(--swiper-virtual-size)}.swiper-virtual.swiper-css-mode.swiper-vertical .swiper-wrapper::after{width:1px;height:var(--swiper-virtual-size)}:root{--swiper-navigation-size:44px}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;width:calc(var(--swiper-navigation-size)/ 44 * 27);height:var(--swiper-navigation-size);margin-top:calc(0px - (var(--swiper-navigation-size)/ 2));z-index:10;cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--swiper-navigation-color,var(--swiper-theme-color))}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{opacity:.35;cursor:auto;pointer-events:none}.swiper-button-next:after,.swiper-button-prev:after{font-family:swiper-icons;font-size:var(--swiper-navigation-size);text-transform:none!important;letter-spacing:0;text-transform:none;font-variant:initial;line-height:1}.swiper-button-prev,.swiper-rtl .swiper-button-next{left:10px;right:auto}.swiper-button-prev:after,.swiper-rtl .swiper-button-next:after{content:'prev'}.swiper-button-next,.swiper-rtl .swiper-button-prev{right:10px;left:auto}.swiper-button-next:after,.swiper-rtl .swiper-button-prev:after{content:'next'}.swiper-button-lock{display:none}.swiper-pagination{position:absolute;text-align:center;transition:.3s opacity;transform:translate3d(0,0,0);z-index:10}.swiper-pagination.swiper-pagination-hidden{opacity:0}.swiper-horizontal>.swiper-pagination-bullets,.swiper-pagination-bullets.swiper-pagination-horizontal,.swiper-pagination-custom,.swiper-pagination-fraction{bottom:10px;left:0;width:100%}.swiper-pagination-bullets-dynamic{overflow:hidden;font-size:0}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{transform:scale(.33);position:relative}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active{transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main{transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev{transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev{transform:scale(.33)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next{transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next{transform:scale(.33)}.swiper-pagination-bullet{width:var(--swiper-pagination-bullet-width,var(--swiper-pagination-bullet-size,8px));height:var(--swiper-pagination-bullet-height,var(--swiper-pagination-bullet-size,8px));display:inline-block;border-radius:50%;background:var(--swiper-pagination-bullet-inactive-color,#000);opacity:var(--swiper-pagination-bullet-inactive-opacity, .2)}button.swiper-pagination-bullet{border:none;margin:0;padding:0;box-shadow:none;-webkit-appearance:none;appearance:none}.swiper-pagination-clickable .swiper-pagination-bullet{cursor:pointer}.swiper-pagination-bullet:only-child{display:none!important}.swiper-pagination-bullet-active{opacity:var(--swiper-pagination-bullet-opacity, 1);background:var(--swiper-pagination-color,var(--swiper-theme-color))}.swiper-pagination-vertical.swiper-pagination-bullets,.swiper-vertical>.swiper-pagination-bullets{right:10px;top:50%;transform:translate3d(0px,-50%,0)}.swiper-pagination-vertical.swiper-pagination-bullets .swiper-pagination-bullet,.swiper-vertical>.swiper-pagination-bullets .swiper-pagination-bullet{margin:var(--swiper-pagination-bullet-vertical-gap,6px) 0;display:block}.swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic,.swiper-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{top:50%;transform:translateY(-50%);width:8px}.swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet,.swiper-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{display:inline-block;transition:.2s transform,.2s top}.swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,.swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet{margin:0 var(--swiper-pagination-bullet-horizontal-gap,4px)}.swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic,.swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{left:50%;transform:translateX(-50%);white-space:nowrap}.swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet,.swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{transition:.2s transform,.2s left}.swiper-horizontal.swiper-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{transition:.2s transform,.2s right}.swiper-pagination-progressbar{background:rgba(0,0,0,.25);position:absolute}.swiper-pagination-progressbar .swiper-pagination-progressbar-fill{background:var(--swiper-pagination-color,var(--swiper-theme-color));position:absolute;left:0;top:0;width:100%;height:100%;transform:scale(0);transform-origin:left top}.swiper-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill{transform-origin:right top}.swiper-horizontal>.swiper-pagination-progressbar,.swiper-pagination-progressbar.swiper-pagination-horizontal,.swiper-pagination-progressbar.swiper-pagination-vertical.swiper-pagination-progressbar-opposite,.swiper-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite{width:100%;height:4px;left:0;top:0}.swiper-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,.swiper-pagination-progressbar.swiper-pagination-horizontal.swiper-pagination-progressbar-opposite,.swiper-pagination-progressbar.swiper-pagination-vertical,.swiper-vertical>.swiper-pagination-progressbar{width:4px;height:100%;left:0;top:0}.swiper-pagination-lock{display:none}.swiper-scrollbar{border-radius:10px;position:relative;-ms-touch-action:none;background:rgba(0,0,0,.1)}.swiper-horizontal>.swiper-scrollbar{position:absolute;left:1%;bottom:3px;z-index:50;height:5px;width:98%}.swiper-vertical>.swiper-scrollbar{position:absolute;right:3px;top:1%;z-index:50;width:5px;height:98%}.swiper-scrollbar-drag{height:100%;width:100%;position:relative;background:rgba(0,0,0,.5);border-radius:10px;left:0;top:0}.swiper-scrollbar-cursor-drag{cursor:move}.swiper-scrollbar-lock{display:none}.swiper-zoom-container{width:100%;height:100%;display:flex;justify-content:center;align-items:center;text-align:center}.swiper-zoom-container>canvas,.swiper-zoom-container>img,.swiper-zoom-container>svg{max-width:100%;max-height:100%;object-fit:contain}.swiper-slide-zoomed{cursor:move}.swiper-lazy-preloader{width:42px;height:42px;position:absolute;left:50%;top:50%;margin-left:-21px;margin-top:-21px;z-index:10;transform-origin:50%;animation:swiper-preloader-spin 1s infinite linear;box-sizing:border-box;border:4px solid var(--swiper-preloader-color,var(--swiper-theme-color));border-radius:50%;border-top-color:transparent}.swiper-lazy-preloader-white{--swiper-preloader-color:#fff}.swiper-lazy-preloader-black{--swiper-preloader-color:#000}@keyframes swiper-preloader-spin{100%{transform:rotate(360deg)}}.swiper .swiper-notification{position:absolute;left:0;top:0;pointer-events:none;opacity:0;z-index:-1000}.swiper-free-mode>.swiper-wrapper{transition-timing-function:ease-out;margin:0 auto}.swiper-grid>.swiper-wrapper{flex-wrap:wrap}.swiper-grid-column>.swiper-wrapper{flex-wrap:wrap;flex-direction:column}.swiper-fade.swiper-free-mode .swiper-slide{transition-timing-function:ease-out}.swiper-fade .swiper-slide{pointer-events:none;transition-property:opacity}.swiper-fade .swiper-slide .swiper-slide{pointer-events:none}.swiper-fade .swiper-slide-active,.swiper-fade .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-cube{overflow:visible}.swiper-cube .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1;visibility:hidden;transform-origin:0 0;width:100%;height:100%}.swiper-cube .swiper-slide .swiper-slide{pointer-events:none}.swiper-cube.swiper-rtl .swiper-slide{transform-origin:100% 0}.swiper-cube .swiper-slide-active,.swiper-cube .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-cube .swiper-slide-active,.swiper-cube .swiper-slide-next,.swiper-cube .swiper-slide-next+.swiper-slide,.swiper-cube .swiper-slide-prev{pointer-events:auto;visibility:visible}.swiper-cube .swiper-slide-shadow-bottom,.swiper-cube .swiper-slide-shadow-left,.swiper-cube .swiper-slide-shadow-right,.swiper-cube .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}.swiper-cube .swiper-cube-shadow{position:absolute;left:0;bottom:0px;width:100%;height:100%;opacity:.6;z-index:0}.swiper-cube .swiper-cube-shadow:before{content:'';background:#000;position:absolute;left:0;top:0;bottom:0;right:0;filter:blur(50px)}.swiper-flip{overflow:visible}.swiper-flip .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1}.swiper-flip .swiper-slide .swiper-slide{pointer-events:none}.swiper-flip .swiper-slide-active,.swiper-flip .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-flip .swiper-slide-shadow-bottom,.swiper-flip .swiper-slide-shadow-left,.swiper-flip .swiper-slide-shadow-right,.swiper-flip .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}.swiper-creative .swiper-slide{-webkit-backface-visibility:hidden;backface-visibility:hidden;overflow:hidden;transition-property:transform,opacity,height}.swiper-cards{overflow:visible}.swiper-cards .swiper-slide{transform-origin:center bottom;-webkit-backface-visibility:hidden;backface-visibility:hidden;overflow:hidden}

/**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
// .owl-theme .owl-dots,.owl-theme .owl-nav{text-align:center;-webkit-tap-highlight-color:transparent}.owl-theme .owl-nav{margin-top:10px}.owl-theme .owl-nav [class*=owl-]{color:#FFF;font-size:14px;margin:5px;padding:4px 7px;background:#D6D6D6;display:inline-block;cursor:pointer;border-radius:3px}.owl-theme .owl-nav [class*=owl-]:hover{background:#869791;color:#FFF;text-decoration:none}.owl-theme .owl-nav .disabled{opacity:.5;cursor:default}.owl-theme .owl-nav.disabled+.owl-dots{margin-top:10px}.owl-theme .owl-dots .owl-dot{display:inline-block;zoom:1}.owl-theme .owl-dots .owl-dot span{width:10px;height:10px;margin:5px 7px;background:#D6D6D6;display:block;-webkit-backface-visibility:visible;transition:opacity .2s ease;border-radius:30px}.owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#869791}
</style>

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->
    <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->


            <style>
            .swiper {
                width: 300px;
                height: 300px;
            }

            @media screen and (max-width:992px) {
                .swiper {
                    width: 300px;
                    height: 150px;
                }
            }
            </style>

        <!--[if lte IE 8]>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->

    <script charset="utf-8" async defer type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->


<!-- Facebook Pixel Code -->
    <script>
        setTimeout(function(){
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '436318323245107');
    fbq('track', 'PageView');
    }, 5000);
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=436318323245107&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

    <script>
    const baseUrl = "https://www.seedinvest.com/nowrx/series.c";
    const utm_source_default = "nowrxinvestpage";
    const utm_medium_default = "referral";
    </script>
    <script async type="text/javascript" src="https://storage.googleapis.com/magiclink/v4/index.js"></script>





    </body>

</html> <!-- end of site. what a ride! -->