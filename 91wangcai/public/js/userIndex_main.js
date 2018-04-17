/*! jQuery v1.11.0 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */
!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=c.slice,e=c.concat,f=c.push,g=c.indexOf,h={},i=h.toString,j=h.hasOwnProperty,k="".trim,l={},m="1.11.0",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return d.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:d.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a,b){return n.each(this,a,b)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(d.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(e=arguments[h]))for(d in e)a=g[d],c=e[d],g!==c&&(j&&c&&(n.isPlainObject(c)||(b=n.isArray(c)))?(b?(b=!1,f=a&&n.isArray(a)?a:[]):f=a&&n.isPlainObject(a)?a:{},g[d]=n.extend(j,f,c)):void 0!==c&&(g[d]=c));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray||function(a){return"array"===n.type(a)},isWindow:function(a){return null!=a&&a==a.window},isNumeric:function(a){return a-parseFloat(a)>=0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},isPlainObject:function(a){var b;if(!a||"object"!==n.type(a)||a.nodeType||n.isWindow(a))return!1;try{if(a.constructor&&!j.call(a,"constructor")&&!j.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}if(l.ownLast)for(b in a)return j.call(a,b);for(b in a);return void 0===b||j.call(a,b)},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?h[i.call(a)]||"object":typeof a},globalEval:function(b){b&&n.trim(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,c){var d,e=0,f=a.length,g=s(a);if(c){if(g){for(;f>e;e++)if(d=b.apply(a[e],c),d===!1)break}else for(e in a)if(d=b.apply(a[e],c),d===!1)break}else if(g){for(;f>e;e++)if(d=b.call(a[e],e,a[e]),d===!1)break}else for(e in a)if(d=b.call(a[e],e,a[e]),d===!1)break;return a},trim:k&&!k.call("\ufeff\xa0")?function(a){return null==a?"":k.call(a)}:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):f.call(c,a)),c},inArray:function(a,b,c){var d;if(b){if(g)return g.call(b,a,c);for(d=b.length,c=c?0>c?Math.max(0,d+c):c:0;d>c;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,b){var c=+b.length,d=0,e=a.length;while(c>d)a[e++]=b[d++];if(c!==c)while(void 0!==b[d])a[e++]=b[d++];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,f=0,g=a.length,h=s(a),i=[];if(h)for(;g>f;f++)d=b(a[f],f,c),null!=d&&i.push(d);else for(f in a)d=b(a[f],f,c),null!=d&&i.push(d);return e.apply([],i)},guid:1,proxy:function(a,b){var c,e,f;return"string"==typeof b&&(f=a[b],b=a,a=f),n.isFunction(a)?(c=d.call(arguments,2),e=function(){return a.apply(b||this,c.concat(d.call(arguments)))},e.guid=a.guid=a.guid||n.guid++,e):void 0},now:function(){return+new Date},support:l}),n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){h["[object "+b+"]"]=b.toLowerCase()});function s(a){var b=a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:1===a.nodeType&&b?!0:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s="sizzle"+-new Date,t=a.document,u=0,v=0,w=eb(),x=eb(),y=eb(),z=function(a,b){return a===b&&(j=!0),0},A="undefined",B=1<<31,C={}.hasOwnProperty,D=[],E=D.pop,F=D.push,G=D.push,H=D.slice,I=D.indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(this[b]===a)return b;return-1},J="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",K="[\\x20\\t\\r\\n\\f]",L="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",M=L.replace("w","w#"),N="\\["+K+"*("+L+")"+K+"*(?:([*^$|!~]?=)"+K+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+M+")|)|)"+K+"*\\]",O=":("+L+")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|"+N.replace(3,8)+")*)|.*)\\)|)",P=new RegExp("^"+K+"+|((?:^|[^\\\\])(?:\\\\.)*)"+K+"+$","g"),Q=new RegExp("^"+K+"*,"+K+"*"),R=new RegExp("^"+K+"*([>+~]|"+K+")"+K+"*"),S=new RegExp("="+K+"*([^\\]'\"]*?)"+K+"*\\]","g"),T=new RegExp(O),U=new RegExp("^"+M+"$"),V={ID:new RegExp("^#("+L+")"),CLASS:new RegExp("^\\.("+L+")"),TAG:new RegExp("^("+L.replace("w","w*")+")"),ATTR:new RegExp("^"+N),PSEUDO:new RegExp("^"+O),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+K+"*(even|odd|(([+-]|)(\\d*)n|)"+K+"*(?:([+-]|)"+K+"*(\\d+)|))"+K+"*\\)|)","i"),bool:new RegExp("^(?:"+J+")$","i"),needsContext:new RegExp("^"+K+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+K+"*((?:-\\d)?\\d*)"+K+"*\\)|)(?=[^-]|$)","i")},W=/^(?:input|select|textarea|button)$/i,X=/^h\d$/i,Y=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,$=/[+~]/,_=/'|\\/g,ab=new RegExp("\\\\([\\da-f]{1,6}"+K+"?|("+K+")|.)","ig"),bb=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)};try{G.apply(D=H.call(t.childNodes),t.childNodes),D[t.childNodes.length].nodeType}catch(cb){G={apply:D.length?function(a,b){F.apply(a,H.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function db(a,b,d,e){var f,g,h,i,j,m,p,q,u,v;if((b?b.ownerDocument||b:t)!==l&&k(b),b=b||l,d=d||[],!a||"string"!=typeof a)return d;if(1!==(i=b.nodeType)&&9!==i)return[];if(n&&!e){if(f=Z.exec(a))if(h=f[1]){if(9===i){if(g=b.getElementById(h),!g||!g.parentNode)return d;if(g.id===h)return d.push(g),d}else if(b.ownerDocument&&(g=b.ownerDocument.getElementById(h))&&r(b,g)&&g.id===h)return d.push(g),d}else{if(f[2])return G.apply(d,b.getElementsByTagName(a)),d;if((h=f[3])&&c.getElementsByClassName&&b.getElementsByClassName)return G.apply(d,b.getElementsByClassName(h)),d}if(c.qsa&&(!o||!o.test(a))){if(q=p=s,u=b,v=9===i&&a,1===i&&"object"!==b.nodeName.toLowerCase()){m=ob(a),(p=b.getAttribute("id"))?q=p.replace(_,"\\$&"):b.setAttribute("id",q),q="[id='"+q+"'] ",j=m.length;while(j--)m[j]=q+pb(m[j]);u=$.test(a)&&mb(b.parentNode)||b,v=m.join(",")}if(v)try{return G.apply(d,u.querySelectorAll(v)),d}catch(w){}finally{p||b.removeAttribute("id")}}}return xb(a.replace(P,"$1"),b,d,e)}function eb(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function fb(a){return a[s]=!0,a}function gb(a){var b=l.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function hb(a,b){var c=a.split("|"),e=a.length;while(e--)d.attrHandle[c[e]]=b}function ib(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||B)-(~a.sourceIndex||B);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function jb(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function kb(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function lb(a){return fb(function(b){return b=+b,fb(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function mb(a){return a&&typeof a.getElementsByTagName!==A&&a}c=db.support={},f=db.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},k=db.setDocument=function(a){var b,e=a?a.ownerDocument||a:t,g=e.defaultView;return e!==l&&9===e.nodeType&&e.documentElement?(l=e,m=e.documentElement,n=!f(e),g&&g!==g.top&&(g.addEventListener?g.addEventListener("unload",function(){k()},!1):g.attachEvent&&g.attachEvent("onunload",function(){k()})),c.attributes=gb(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=gb(function(a){return a.appendChild(e.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=Y.test(e.getElementsByClassName)&&gb(function(a){return a.innerHTML="<div class='a'></div><div class='a i'></div>",a.firstChild.className="i",2===a.getElementsByClassName("i").length}),c.getById=gb(function(a){return m.appendChild(a).id=s,!e.getElementsByName||!e.getElementsByName(s).length}),c.getById?(d.find.ID=function(a,b){if(typeof b.getElementById!==A&&n){var c=b.getElementById(a);return c&&c.parentNode?[c]:[]}},d.filter.ID=function(a){var b=a.replace(ab,bb);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(ab,bb);return function(a){var c=typeof a.getAttributeNode!==A&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return typeof b.getElementsByTagName!==A?b.getElementsByTagName(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return typeof b.getElementsByClassName!==A&&n?b.getElementsByClassName(a):void 0},p=[],o=[],(c.qsa=Y.test(e.querySelectorAll))&&(gb(function(a){a.innerHTML="<select t=''><option selected=''></option></select>",a.querySelectorAll("[t^='']").length&&o.push("[*^$]="+K+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||o.push("\\["+K+"*(?:value|"+J+")"),a.querySelectorAll(":checked").length||o.push(":checked")}),gb(function(a){var b=e.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&o.push("name"+K+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||o.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),o.push(",.*:")})),(c.matchesSelector=Y.test(q=m.webkitMatchesSelector||m.mozMatchesSelector||m.oMatchesSelector||m.msMatchesSelector))&&gb(function(a){c.disconnectedMatch=q.call(a,"div"),q.call(a,"[s!='']:x"),p.push("!=",O)}),o=o.length&&new RegExp(o.join("|")),p=p.length&&new RegExp(p.join("|")),b=Y.test(m.compareDocumentPosition),r=b||Y.test(m.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},z=b?function(a,b){if(a===b)return j=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===e||a.ownerDocument===t&&r(t,a)?-1:b===e||b.ownerDocument===t&&r(t,b)?1:i?I.call(i,a)-I.call(i,b):0:4&d?-1:1)}:function(a,b){if(a===b)return j=!0,0;var c,d=0,f=a.parentNode,g=b.parentNode,h=[a],k=[b];if(!f||!g)return a===e?-1:b===e?1:f?-1:g?1:i?I.call(i,a)-I.call(i,b):0;if(f===g)return ib(a,b);c=a;while(c=c.parentNode)h.unshift(c);c=b;while(c=c.parentNode)k.unshift(c);while(h[d]===k[d])d++;return d?ib(h[d],k[d]):h[d]===t?-1:k[d]===t?1:0},e):l},db.matches=function(a,b){return db(a,null,null,b)},db.matchesSelector=function(a,b){if((a.ownerDocument||a)!==l&&k(a),b=b.replace(S,"='$1']"),!(!c.matchesSelector||!n||p&&p.test(b)||o&&o.test(b)))try{var d=q.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return db(b,l,null,[a]).length>0},db.contains=function(a,b){return(a.ownerDocument||a)!==l&&k(a),r(a,b)},db.attr=function(a,b){(a.ownerDocument||a)!==l&&k(a);var e=d.attrHandle[b.toLowerCase()],f=e&&C.call(d.attrHandle,b.toLowerCase())?e(a,b,!n):void 0;return void 0!==f?f:c.attributes||!n?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},db.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},db.uniqueSort=function(a){var b,d=[],e=0,f=0;if(j=!c.detectDuplicates,i=!c.sortStable&&a.slice(0),a.sort(z),j){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return i=null,a},e=db.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=db.selectors={cacheLength:50,createPseudo:fb,match:V,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(ab,bb),a[3]=(a[4]||a[5]||"").replace(ab,bb),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||db.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&db.error(a[0]),a},PSEUDO:function(a){var b,c=!a[5]&&a[2];return V.CHILD.test(a[0])?null:(a[3]&&void 0!==a[4]?a[2]=a[4]:c&&T.test(c)&&(b=ob(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(ab,bb).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=w[a+" "];return b||(b=new RegExp("(^|"+K+")"+a+"("+K+"|$)"))&&w(a,function(a){return b.test("string"==typeof a.className&&a.className||typeof a.getAttribute!==A&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=db.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),t=!i&&!h;if(q){if(f){while(p){l=b;while(l=l[p])if(h?l.nodeName.toLowerCase()===r:1===l.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&t){k=q[s]||(q[s]={}),j=k[a]||[],n=j[0]===u&&j[1],m=j[0]===u&&j[2],l=n&&q.childNodes[n];while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if(1===l.nodeType&&++m&&l===b){k[a]=[u,n,m];break}}else if(t&&(j=(b[s]||(b[s]={}))[a])&&j[0]===u)m=j[1];else while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if((h?l.nodeName.toLowerCase()===r:1===l.nodeType)&&++m&&(t&&((l[s]||(l[s]={}))[a]=[u,m]),l===b))break;return m-=e,m===d||m%d===0&&m/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||db.error("unsupported pseudo: "+a);return e[s]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?fb(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=I.call(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:fb(function(a){var b=[],c=[],d=g(a.replace(P,"$1"));return d[s]?fb(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),!c.pop()}}),has:fb(function(a){return function(b){return db(a,b).length>0}}),contains:fb(function(a){return function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:fb(function(a){return U.test(a||"")||db.error("unsupported lang: "+a),a=a.replace(ab,bb).toLowerCase(),function(b){var c;do if(c=n?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===m},focus:function(a){return a===l.activeElement&&(!l.hasFocus||l.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return X.test(a.nodeName)},input:function(a){return W.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:lb(function(){return[0]}),last:lb(function(a,b){return[b-1]}),eq:lb(function(a,b,c){return[0>c?c+b:c]}),even:lb(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:lb(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:lb(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:lb(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=jb(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=kb(b);function nb(){}nb.prototype=d.filters=d.pseudos,d.setFilters=new nb;function ob(a,b){var c,e,f,g,h,i,j,k=x[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){(!c||(e=Q.exec(h)))&&(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=R.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(P," ")}),h=h.slice(c.length));for(g in d.filter)!(e=V[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?db.error(a):x(a,i).slice(0)}function pb(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function qb(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=v++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j=[u,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(i=b[s]||(b[s]={}),(h=i[d])&&h[0]===u&&h[1]===f)return j[2]=h[2];if(i[d]=j,j[2]=a(b,c,g))return!0}}}function rb(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function sb(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),j&&b.push(h));return g}function tb(a,b,c,d,e,f){return d&&!d[s]&&(d=tb(d)),e&&!e[s]&&(e=tb(e,f)),fb(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||wb(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:sb(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=sb(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?I.call(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=sb(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):G.apply(g,r)})}function ub(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],i=g||d.relative[" "],j=g?1:0,k=qb(function(a){return a===b},i,!0),l=qb(function(a){return I.call(b,a)>-1},i,!0),m=[function(a,c,d){return!g&&(d||c!==h)||((b=c).nodeType?k(a,c,d):l(a,c,d))}];f>j;j++)if(c=d.relative[a[j].type])m=[qb(rb(m),c)];else{if(c=d.filter[a[j].type].apply(null,a[j].matches),c[s]){for(e=++j;f>e;e++)if(d.relative[a[e].type])break;return tb(j>1&&rb(m),j>1&&pb(a.slice(0,j-1).concat({value:" "===a[j-2].type?"*":""})).replace(P,"$1"),c,e>j&&ub(a.slice(j,e)),f>e&&ub(a=a.slice(e)),f>e&&pb(a))}m.push(c)}return rb(m)}function vb(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,i,j,k){var m,n,o,p=0,q="0",r=f&&[],s=[],t=h,v=f||e&&d.find.TAG("*",k),w=u+=null==t?1:Math.random()||.1,x=v.length;for(k&&(h=g!==l&&g);q!==x&&null!=(m=v[q]);q++){if(e&&m){n=0;while(o=a[n++])if(o(m,g,i)){j.push(m);break}k&&(u=w)}c&&((m=!o&&m)&&p--,f&&r.push(m))}if(p+=q,c&&q!==p){n=0;while(o=b[n++])o(r,s,g,i);if(f){if(p>0)while(q--)r[q]||s[q]||(s[q]=E.call(j));s=sb(s)}G.apply(j,s),k&&!f&&s.length>0&&p+b.length>1&&db.uniqueSort(j)}return k&&(u=w,h=t),r};return c?fb(f):f}g=db.compile=function(a,b){var c,d=[],e=[],f=y[a+" "];if(!f){b||(b=ob(a)),c=b.length;while(c--)f=ub(b[c]),f[s]?d.push(f):e.push(f);f=y(a,vb(e,d))}return f};function wb(a,b,c){for(var d=0,e=b.length;e>d;d++)db(a,b[d],c);return c}function xb(a,b,e,f){var h,i,j,k,l,m=ob(a);if(!f&&1===m.length){if(i=m[0]=m[0].slice(0),i.length>2&&"ID"===(j=i[0]).type&&c.getById&&9===b.nodeType&&n&&d.relative[i[1].type]){if(b=(d.find.ID(j.matches[0].replace(ab,bb),b)||[])[0],!b)return e;a=a.slice(i.shift().value.length)}h=V.needsContext.test(a)?0:i.length;while(h--){if(j=i[h],d.relative[k=j.type])break;if((l=d.find[k])&&(f=l(j.matches[0].replace(ab,bb),$.test(i[0].type)&&mb(b.parentNode)||b))){if(i.splice(h,1),a=f.length&&pb(i),!a)return G.apply(e,f),e;break}}}return g(a,m)(f,b,!n,e,$.test(a)&&mb(b.parentNode)||b),e}return c.sortStable=s.split("").sort(z).join("")===s,c.detectDuplicates=!!j,k(),c.sortDetached=gb(function(a){return 1&a.compareDocumentPosition(l.createElement("div"))}),gb(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||hb("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&gb(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||hb("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),gb(function(a){return null==a.getAttribute("disabled")})||hb(J,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),db}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=n.expr.match.needsContext,v=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,w=/^.[^:#\[\.,]*$/;function x(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(w.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return n.inArray(a,b)>=0!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=[],d=this,e=d.length;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;e>b;b++)if(n.contains(d[b],this))return!0}));for(b=0;e>b;b++)n.find(a,d[b],c);return c=this.pushStack(e>1?n.unique(c):c),c.selector=this.selector?this.selector+" "+a:a,c},filter:function(a){return this.pushStack(x(this,a||[],!1))},not:function(a){return this.pushStack(x(this,a||[],!0))},is:function(a){return!!x(this,"string"==typeof a&&u.test(a)?n(a):a||[],!1).length}});var y,z=a.document,A=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,B=n.fn.init=function(a,b){var c,d;if(!a)return this;if("string"==typeof a){if(c="<"===a.charAt(0)&&">"===a.charAt(a.length-1)&&a.length>=3?[null,a,null]:A.exec(a),!c||!c[1]&&b)return!b||b.jquery?(b||y).find(a):this.constructor(b).find(a);if(c[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(c[1],b&&b.nodeType?b.ownerDocument||b:z,!0)),v.test(c[1])&&n.isPlainObject(b))for(c in b)n.isFunction(this[c])?this[c](b[c]):this.attr(c,b[c]);return this}if(d=z.getElementById(c[2]),d&&d.parentNode){if(d.id!==c[2])return y.find(a);this.length=1,this[0]=d}return this.context=z,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?"undefined"!=typeof y.ready?y.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};B.prototype=n.fn,y=n(z);var C=/^(?:parents|prev(?:Until|All))/,D={children:!0,contents:!0,next:!0,prev:!0};n.extend({dir:function(a,b,c){var d=[],e=a[b];while(e&&9!==e.nodeType&&(void 0===c||1!==e.nodeType||!n(e).is(c)))1===e.nodeType&&d.push(e),e=e[b];return d},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}}),n.fn.extend({has:function(a){var b,c=n(a,this),d=c.length;return this.filter(function(){for(b=0;d>b;b++)if(n.contains(this,c[b]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=u.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.unique(f):f)},index:function(a){return a?"string"==typeof a?n.inArray(this[0],n(a)):n.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.unique(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function E(a,b){do a=a[b];while(a&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return n.dir(a,"parentNode")},parentsUntil:function(a,b,c){return n.dir(a,"parentNode",c)},next:function(a){return E(a,"nextSibling")},prev:function(a){return E(a,"previousSibling")},nextAll:function(a){return n.dir(a,"nextSibling")},prevAll:function(a){return n.dir(a,"previousSibling")},nextUntil:function(a,b,c){return n.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return n.dir(a,"previousSibling",c)},siblings:function(a){return n.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return n.sibling(a.firstChild)},contents:function(a){return n.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(D[a]||(e=n.unique(e)),C.test(a)&&(e=e.reverse())),this.pushStack(e)}});var F=/\S+/g,G={};function H(a){var b=G[a]={};return n.each(a.match(F)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?G[a]||H(a):n.extend({},a);var b,c,d,e,f,g,h=[],i=!a.once&&[],j=function(l){for(c=a.memory&&l,d=!0,f=g||0,g=0,e=h.length,b=!0;h&&e>f;f++)if(h[f].apply(l[0],l[1])===!1&&a.stopOnFalse){c=!1;break}b=!1,h&&(i?i.length&&j(i.shift()):c?h=[]:k.disable())},k={add:function(){if(h){var d=h.length;!function f(b){n.each(b,function(b,c){var d=n.type(c);"function"===d?a.unique&&k.has(c)||h.push(c):c&&c.length&&"string"!==d&&f(c)})}(arguments),b?e=h.length:c&&(g=d,j(c))}return this},remove:function(){return h&&n.each(arguments,function(a,c){var d;while((d=n.inArray(c,h,d))>-1)h.splice(d,1),b&&(e>=d&&e--,f>=d&&f--)}),this},has:function(a){return a?n.inArray(a,h)>-1:!(!h||!h.length)},empty:function(){return h=[],e=0,this},disable:function(){return h=i=c=void 0,this},disabled:function(){return!h},lock:function(){return i=void 0,c||k.disable(),this},locked:function(){return!i},fireWith:function(a,c){return!h||d&&!i||(c=c||[],c=[a,c.slice?c.slice():c],b?i.push(c):j(c)),this},fire:function(){return k.fireWith(this,arguments),this},fired:function(){return!!d}};return k},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=d.call(arguments),e=c.length,f=1!==e||a&&n.isFunction(a.promise)?e:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(e){b[a]=this,c[a]=arguments.length>1?d.call(arguments):e,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(e>1)for(i=new Array(e),j=new Array(e),k=new Array(e);e>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().done(h(b,k,c)).fail(g.reject).progress(h(b,j,i)):--f;return f||g.resolveWith(k,c),g.promise()}});var I;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){if(a===!0?!--n.readyWait:!n.isReady){if(!z.body)return setTimeout(n.ready);n.isReady=!0,a!==!0&&--n.readyWait>0||(I.resolveWith(z,[n]),n.fn.trigger&&n(z).trigger("ready").off("ready"))}}});function J(){z.addEventListener?(z.removeEventListener("DOMContentLoaded",K,!1),a.removeEventListener("load",K,!1)):(z.detachEvent("onreadystatechange",K),a.detachEvent("onload",K))}function K(){(z.addEventListener||"load"===event.type||"complete"===z.readyState)&&(J(),n.ready())}n.ready.promise=function(b){if(!I)if(I=n.Deferred(),"complete"===z.readyState)setTimeout(n.ready);else if(z.addEventListener)z.addEventListener("DOMContentLoaded",K,!1),a.addEventListener("load",K,!1);else{z.attachEvent("onreadystatechange",K),a.attachEvent("onload",K);var c=!1;try{c=null==a.frameElement&&z.documentElement}catch(d){}c&&c.doScroll&&!function e(){if(!n.isReady){try{c.doScroll("left")}catch(a){return setTimeout(e,50)}J(),n.ready()}}()}return I.promise(b)};var L="undefined",M;for(M in n(l))break;l.ownLast="0"!==M,l.inlineBlockNeedsLayout=!1,n(function(){var a,b,c=z.getElementsByTagName("body")[0];c&&(a=z.createElement("div"),a.style.cssText="border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px",b=z.createElement("div"),c.appendChild(a).appendChild(b),typeof b.style.zoom!==L&&(b.style.cssText="border:0;margin:0;width:1px;padding:1px;display:inline;zoom:1",(l.inlineBlockNeedsLayout=3===b.offsetWidth)&&(c.style.zoom=1)),c.removeChild(a),a=b=null)}),function(){var a=z.createElement("div");if(null==l.deleteExpando){l.deleteExpando=!0;try{delete a.test}catch(b){l.deleteExpando=!1}}a=null}(),n.acceptData=function(a){var b=n.noData[(a.nodeName+" ").toLowerCase()],c=+a.nodeType||1;return 1!==c&&9!==c?!1:!b||b!==!0&&a.getAttribute("classid")===b};var N=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,O=/([A-Z])/g;function P(a,b,c){if(void 0===c&&1===a.nodeType){var d="data-"+b.replace(O,"-$1").toLowerCase();if(c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:N.test(c)?n.parseJSON(c):c}catch(e){}n.data(a,b,c)}else c=void 0}return c}function Q(a){var b;for(b in a)if(("data"!==b||!n.isEmptyObject(a[b]))&&"toJSON"!==b)return!1;return!0}function R(a,b,d,e){if(n.acceptData(a)){var f,g,h=n.expando,i=a.nodeType,j=i?n.cache:a,k=i?a[h]:a[h]&&h;if(k&&j[k]&&(e||j[k].data)||void 0!==d||"string"!=typeof b)return k||(k=i?a[h]=c.pop()||n.guid++:h),j[k]||(j[k]=i?{}:{toJSON:n.noop}),("object"==typeof b||"function"==typeof b)&&(e?j[k]=n.extend(j[k],b):j[k].data=n.extend(j[k].data,b)),g=j[k],e||(g.data||(g.data={}),g=g.data),void 0!==d&&(g[n.camelCase(b)]=d),"string"==typeof b?(f=g[b],null==f&&(f=g[n.camelCase(b)])):f=g,f
}}function S(a,b,c){if(n.acceptData(a)){var d,e,f=a.nodeType,g=f?n.cache:a,h=f?a[n.expando]:n.expando;if(g[h]){if(b&&(d=c?g[h]:g[h].data)){n.isArray(b)?b=b.concat(n.map(b,n.camelCase)):b in d?b=[b]:(b=n.camelCase(b),b=b in d?[b]:b.split(" ")),e=b.length;while(e--)delete d[b[e]];if(c?!Q(d):!n.isEmptyObject(d))return}(c||(delete g[h].data,Q(g[h])))&&(f?n.cleanData([a],!0):l.deleteExpando||g!=g.window?delete g[h]:g[h]=null)}}}n.extend({cache:{},noData:{"applet ":!0,"embed ":!0,"object ":"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(a){return a=a.nodeType?n.cache[a[n.expando]]:a[n.expando],!!a&&!Q(a)},data:function(a,b,c){return R(a,b,c)},removeData:function(a,b){return S(a,b)},_data:function(a,b,c){return R(a,b,c,!0)},_removeData:function(a,b){return S(a,b,!0)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=n.data(f),1===f.nodeType&&!n._data(f,"parsedAttrs"))){c=g.length;while(c--)d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),P(f,d,e[d]));n._data(f,"parsedAttrs",!0)}return e}return"object"==typeof a?this.each(function(){n.data(this,a)}):arguments.length>1?this.each(function(){n.data(this,a,b)}):f?P(f,a,n.data(f,a)):void 0},removeData:function(a){return this.each(function(){n.removeData(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=n._data(a,b),c&&(!d||n.isArray(c)?d=n._data(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return n._data(a,c)||n._data(a,c,{empty:n.Callbacks("once memory").add(function(){n._removeData(a,b+"queue"),n._removeData(a,c)})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=n._data(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var T=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,U=["Top","Right","Bottom","Left"],V=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)},W=n.access=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)n.access(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f},X=/^(?:checkbox|radio)$/i;!function(){var a=z.createDocumentFragment(),b=z.createElement("div"),c=z.createElement("input");if(b.setAttribute("className","t"),b.innerHTML="  <link/><table></table><a href='/a'>a</a>",l.leadingWhitespace=3===b.firstChild.nodeType,l.tbody=!b.getElementsByTagName("tbody").length,l.htmlSerialize=!!b.getElementsByTagName("link").length,l.html5Clone="<:nav></:nav>"!==z.createElement("nav").cloneNode(!0).outerHTML,c.type="checkbox",c.checked=!0,a.appendChild(c),l.appendChecked=c.checked,b.innerHTML="<textarea>x</textarea>",l.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue,a.appendChild(b),b.innerHTML="<input type='radio' checked='checked' name='t'/>",l.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,l.noCloneEvent=!0,b.attachEvent&&(b.attachEvent("onclick",function(){l.noCloneEvent=!1}),b.cloneNode(!0).click()),null==l.deleteExpando){l.deleteExpando=!0;try{delete b.test}catch(d){l.deleteExpando=!1}}a=b=c=null}(),function(){var b,c,d=z.createElement("div");for(b in{submit:!0,change:!0,focusin:!0})c="on"+b,(l[b+"Bubbles"]=c in a)||(d.setAttribute(c,"t"),l[b+"Bubbles"]=d.attributes[c].expando===!1);d=null}();var Y=/^(?:input|select|textarea)$/i,Z=/^key/,$=/^(?:mouse|contextmenu)|click/,_=/^(?:focusinfocus|focusoutblur)$/,ab=/^([^.]*)(?:\.(.+)|)$/;function bb(){return!0}function cb(){return!1}function db(){try{return z.activeElement}catch(a){}}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n._data(a);if(r){c.handler&&(i=c,c=i.handler,e=i.selector),c.guid||(c.guid=n.guid++),(g=r.events)||(g=r.events={}),(k=r.handle)||(k=r.handle=function(a){return typeof n===L||a&&n.event.triggered===a.type?void 0:n.event.dispatch.apply(k.elem,arguments)},k.elem=a),b=(b||"").match(F)||[""],h=b.length;while(h--)f=ab.exec(b[h])||[],o=q=f[1],p=(f[2]||"").split(".").sort(),o&&(j=n.event.special[o]||{},o=(e?j.delegateType:j.bindType)||o,j=n.event.special[o]||{},l=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},i),(m=g[o])||(m=g[o]=[],m.delegateCount=0,j.setup&&j.setup.call(a,d,p,k)!==!1||(a.addEventListener?a.addEventListener(o,k,!1):a.attachEvent&&a.attachEvent("on"+o,k))),j.add&&(j.add.call(a,l),l.handler.guid||(l.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,l):m.push(l),n.event.global[o]=!0);a=null}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n.hasData(a)&&n._data(a);if(r&&(k=r.events)){b=(b||"").match(F)||[""],j=b.length;while(j--)if(h=ab.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=k[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),i=f=m.length;while(f--)g=m[f],!e&&q!==g.origType||c&&c.guid!==g.guid||h&&!h.test(g.namespace)||d&&d!==g.selector&&("**"!==d||!g.selector)||(m.splice(f,1),g.selector&&m.delegateCount--,l.remove&&l.remove.call(a,g));i&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete k[o])}else for(o in k)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(k)&&(delete r.handle,n._removeData(a,"events"))}},trigger:function(b,c,d,e){var f,g,h,i,k,l,m,o=[d||z],p=j.call(b,"type")?b.type:b,q=j.call(b,"namespace")?b.namespace.split("."):[];if(h=l=d=d||z,3!==d.nodeType&&8!==d.nodeType&&!_.test(p+n.event.triggered)&&(p.indexOf(".")>=0&&(q=p.split("."),p=q.shift(),q.sort()),g=p.indexOf(":")<0&&"on"+p,b=b[n.expando]?b:new n.Event(p,"object"==typeof b&&b),b.isTrigger=e?2:3,b.namespace=q.join("."),b.namespace_re=b.namespace?new RegExp("(^|\\.)"+q.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=d),c=null==c?[b]:n.makeArray(c,[b]),k=n.event.special[p]||{},e||!k.trigger||k.trigger.apply(d,c)!==!1)){if(!e&&!k.noBubble&&!n.isWindow(d)){for(i=k.delegateType||p,_.test(i+p)||(h=h.parentNode);h;h=h.parentNode)o.push(h),l=h;l===(d.ownerDocument||z)&&o.push(l.defaultView||l.parentWindow||a)}m=0;while((h=o[m++])&&!b.isPropagationStopped())b.type=m>1?i:k.bindType||p,f=(n._data(h,"events")||{})[b.type]&&n._data(h,"handle"),f&&f.apply(h,c),f=g&&h[g],f&&f.apply&&n.acceptData(h)&&(b.result=f.apply(h,c),b.result===!1&&b.preventDefault());if(b.type=p,!e&&!b.isDefaultPrevented()&&(!k._default||k._default.apply(o.pop(),c)===!1)&&n.acceptData(d)&&g&&d[p]&&!n.isWindow(d)){l=d[g],l&&(d[g]=null),n.event.triggered=p;try{d[p]()}catch(r){}n.event.triggered=void 0,l&&(d[g]=l)}return b.result}},dispatch:function(a){a=n.event.fix(a);var b,c,e,f,g,h=[],i=d.call(arguments),j=(n._data(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,g=0;while((e=f.handlers[g++])&&!a.isImmediatePropagationStopped())(!a.namespace_re||a.namespace_re.test(e.namespace))&&(a.handleObj=e,a.data=e.data,c=((n.event.special[e.origType]||{}).handle||e.handler).apply(f.elem,i),void 0!==c&&(a.result=c)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&(!a.button||"click"!==a.type))for(;i!=this;i=i.parentNode||this)if(1===i.nodeType&&(i.disabled!==!0||"click"!==a.type)){for(e=[],f=0;h>f;f++)d=b[f],c=d.selector+" ",void 0===e[c]&&(e[c]=d.needsContext?n(c,this).index(i)>=0:n.find(c,this,null,[i]).length),e[c]&&e.push(d);e.length&&g.push({elem:i,handlers:e})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},fix:function(a){if(a[n.expando])return a;var b,c,d,e=a.type,f=a,g=this.fixHooks[e];g||(this.fixHooks[e]=g=$.test(e)?this.mouseHooks:Z.test(e)?this.keyHooks:{}),d=g.props?this.props.concat(g.props):this.props,a=new n.Event(f),b=d.length;while(b--)c=d[b],a[c]=f[c];return a.target||(a.target=f.srcElement||z),3===a.target.nodeType&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,g.filter?g.filter(a,f):a},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,d,e,f=b.button,g=b.fromElement;return null==a.pageX&&null!=b.clientX&&(d=a.target.ownerDocument||z,e=d.documentElement,c=d.body,a.pageX=b.clientX+(e&&e.scrollLeft||c&&c.scrollLeft||0)-(e&&e.clientLeft||c&&c.clientLeft||0),a.pageY=b.clientY+(e&&e.scrollTop||c&&c.scrollTop||0)-(e&&e.clientTop||c&&c.clientTop||0)),!a.relatedTarget&&g&&(a.relatedTarget=g===a.target?b.toElement:g),a.which||void 0===f||(a.which=1&f?1:2&f?3:4&f?2:0),a}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==db()&&this.focus)try{return this.focus(),!1}catch(a){}},delegateType:"focusin"},blur:{trigger:function(){return this===db()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return n.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c,d){var e=n.extend(new n.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?n.event.trigger(e,null,b):n.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},n.removeEvent=z.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){var d="on"+b;a.detachEvent&&(typeof a[d]===L&&(a[d]=null),a.detachEvent(d,c))},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&(a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault())?bb:cb):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={isDefaultPrevented:cb,isPropagationStopped:cb,isImmediatePropagationStopped:cb,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=bb,a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=bb,a&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=bb,this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return(!e||e!==d&&!n.contains(d,e))&&(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),l.submitBubbles||(n.event.special.submit={setup:function(){return n.nodeName(this,"form")?!1:void n.event.add(this,"click._submit keypress._submit",function(a){var b=a.target,c=n.nodeName(b,"input")||n.nodeName(b,"button")?b.form:void 0;c&&!n._data(c,"submitBubbles")&&(n.event.add(c,"submit._submit",function(a){a._submit_bubble=!0}),n._data(c,"submitBubbles",!0))})},postDispatch:function(a){a._submit_bubble&&(delete a._submit_bubble,this.parentNode&&!a.isTrigger&&n.event.simulate("submit",this.parentNode,a,!0))},teardown:function(){return n.nodeName(this,"form")?!1:void n.event.remove(this,"._submit")}}),l.changeBubbles||(n.event.special.change={setup:function(){return Y.test(this.nodeName)?(("checkbox"===this.type||"radio"===this.type)&&(n.event.add(this,"propertychange._change",function(a){"checked"===a.originalEvent.propertyName&&(this._just_changed=!0)}),n.event.add(this,"click._change",function(a){this._just_changed&&!a.isTrigger&&(this._just_changed=!1),n.event.simulate("change",this,a,!0)})),!1):void n.event.add(this,"beforeactivate._change",function(a){var b=a.target;Y.test(b.nodeName)&&!n._data(b,"changeBubbles")&&(n.event.add(b,"change._change",function(a){!this.parentNode||a.isSimulated||a.isTrigger||n.event.simulate("change",this.parentNode,a,!0)}),n._data(b,"changeBubbles",!0))})},handle:function(a){var b=a.target;return this!==b||a.isSimulated||a.isTrigger||"radio"!==b.type&&"checkbox"!==b.type?a.handleObj.handler.apply(this,arguments):void 0},teardown:function(){return n.event.remove(this,"._change"),!Y.test(this.nodeName)}}),l.focusinBubbles||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a),!0)};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=n._data(d,b);e||d.addEventListener(a,c,!0),n._data(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=n._data(d,b)-1;e?n._data(d,b,e):(d.removeEventListener(a,c,!0),n._removeData(d,b))}}}),n.fn.extend({on:function(a,b,c,d,e){var f,g;if("object"==typeof a){"string"!=typeof b&&(c=c||b,b=void 0);for(f in a)this.on(f,b,c,a[f],e);return this}if(null==c&&null==d?(d=b,c=b=void 0):null==d&&("string"==typeof b?(d=c,c=void 0):(d=c,c=b,b=void 0)),d===!1)d=cb;else if(!d)return this;return 1===e&&(g=d,d=function(a){return n().off(a),g.apply(this,arguments)},d.guid=g.guid||(g.guid=n.guid++)),this.each(function(){n.event.add(this,a,d,c,b)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return(b===!1||"function"==typeof b)&&(c=b,b=void 0),c===!1&&(c=cb),this.each(function(){n.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}});function eb(a){var b=fb.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}var fb="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",gb=/ jQuery\d+="(?:null|\d+)"/g,hb=new RegExp("<(?:"+fb+")[\\s/>]","i"),ib=/^\s+/,jb=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,kb=/<([\w:]+)/,lb=/<tbody/i,mb=/<|&#?\w+;/,nb=/<(?:script|style|link)/i,ob=/checked\s*(?:[^=]|=\s*.checked.)/i,pb=/^$|\/(?:java|ecma)script/i,qb=/^true\/(.*)/,rb=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,sb={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:l.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]},tb=eb(z),ub=tb.appendChild(z.createElement("div"));sb.optgroup=sb.option,sb.tbody=sb.tfoot=sb.colgroup=sb.caption=sb.thead,sb.th=sb.td;function vb(a,b){var c,d,e=0,f=typeof a.getElementsByTagName!==L?a.getElementsByTagName(b||"*"):typeof a.querySelectorAll!==L?a.querySelectorAll(b||"*"):void 0;if(!f)for(f=[],c=a.childNodes||a;null!=(d=c[e]);e++)!b||n.nodeName(d,b)?f.push(d):n.merge(f,vb(d,b));return void 0===b||b&&n.nodeName(a,b)?n.merge([a],f):f}function wb(a){X.test(a.type)&&(a.defaultChecked=a.checked)}function xb(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function yb(a){return a.type=(null!==n.find.attr(a,"type"))+"/"+a.type,a}function zb(a){var b=qb.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function Ab(a,b){for(var c,d=0;null!=(c=a[d]);d++)n._data(c,"globalEval",!b||n._data(b[d],"globalEval"))}function Bb(a,b){if(1===b.nodeType&&n.hasData(a)){var c,d,e,f=n._data(a),g=n._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;e>d;d++)n.event.add(b,c,h[c][d])}g.data&&(g.data=n.extend({},g.data))}}function Cb(a,b){var c,d,e;if(1===b.nodeType){if(c=b.nodeName.toLowerCase(),!l.noCloneEvent&&b[n.expando]){e=n._data(b);for(d in e.events)n.removeEvent(b,d,e.handle);b.removeAttribute(n.expando)}"script"===c&&b.text!==a.text?(yb(b).text=a.text,zb(b)):"object"===c?(b.parentNode&&(b.outerHTML=a.outerHTML),l.html5Clone&&a.innerHTML&&!n.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):"input"===c&&X.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):"option"===c?b.defaultSelected=b.selected=a.defaultSelected:("input"===c||"textarea"===c)&&(b.defaultValue=a.defaultValue)}}n.extend({clone:function(a,b,c){var d,e,f,g,h,i=n.contains(a.ownerDocument,a);if(l.html5Clone||n.isXMLDoc(a)||!hb.test("<"+a.nodeName+">")?f=a.cloneNode(!0):(ub.innerHTML=a.outerHTML,ub.removeChild(f=ub.firstChild)),!(l.noCloneEvent&&l.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(d=vb(f),h=vb(a),g=0;null!=(e=h[g]);++g)d[g]&&Cb(e,d[g]);if(b)if(c)for(h=h||vb(a),d=d||vb(f),g=0;null!=(e=h[g]);g++)Bb(e,d[g]);else Bb(a,f);return d=vb(f,"script"),d.length>0&&Ab(d,!i&&vb(a,"script")),d=h=e=null,f},buildFragment:function(a,b,c,d){for(var e,f,g,h,i,j,k,m=a.length,o=eb(b),p=[],q=0;m>q;q++)if(f=a[q],f||0===f)if("object"===n.type(f))n.merge(p,f.nodeType?[f]:f);else if(mb.test(f)){h=h||o.appendChild(b.createElement("div")),i=(kb.exec(f)||["",""])[1].toLowerCase(),k=sb[i]||sb._default,h.innerHTML=k[1]+f.replace(jb,"<$1></$2>")+k[2],e=k[0];while(e--)h=h.lastChild;if(!l.leadingWhitespace&&ib.test(f)&&p.push(b.createTextNode(ib.exec(f)[0])),!l.tbody){f="table"!==i||lb.test(f)?"<table>"!==k[1]||lb.test(f)?0:h:h.firstChild,e=f&&f.childNodes.length;while(e--)n.nodeName(j=f.childNodes[e],"tbody")&&!j.childNodes.length&&f.removeChild(j)}n.merge(p,h.childNodes),h.textContent="";while(h.firstChild)h.removeChild(h.firstChild);h=o.lastChild}else p.push(b.createTextNode(f));h&&o.removeChild(h),l.appendChecked||n.grep(vb(p,"input"),wb),q=0;while(f=p[q++])if((!d||-1===n.inArray(f,d))&&(g=n.contains(f.ownerDocument,f),h=vb(o.appendChild(f),"script"),g&&Ab(h),c)){e=0;while(f=h[e++])pb.test(f.type||"")&&c.push(f)}return h=null,o},cleanData:function(a,b){for(var d,e,f,g,h=0,i=n.expando,j=n.cache,k=l.deleteExpando,m=n.event.special;null!=(d=a[h]);h++)if((b||n.acceptData(d))&&(f=d[i],g=f&&j[f])){if(g.events)for(e in g.events)m[e]?n.event.remove(d,e):n.removeEvent(d,e,g.handle);j[f]&&(delete j[f],k?delete d[i]:typeof d.removeAttribute!==L?d.removeAttribute(i):d[i]=null,c.push(f))}}}),n.fn.extend({text:function(a){return W(this,function(a){return void 0===a?n.text(this):this.empty().append((this[0]&&this[0].ownerDocument||z).createTextNode(a))},null,a,arguments.length)},append:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=xb(this,a);b.appendChild(a)}})},prepend:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=xb(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},remove:function(a,b){for(var c,d=a?n.filter(a,this):this,e=0;null!=(c=d[e]);e++)b||1!==c.nodeType||n.cleanData(vb(c)),c.parentNode&&(b&&n.contains(c.ownerDocument,c)&&Ab(vb(c,"script")),c.parentNode.removeChild(c));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++){1===a.nodeType&&n.cleanData(vb(a,!1));while(a.firstChild)a.removeChild(a.firstChild);a.options&&n.nodeName(a,"select")&&(a.options.length=0)}return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return W(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a)return 1===b.nodeType?b.innerHTML.replace(gb,""):void 0;if(!("string"!=typeof a||nb.test(a)||!l.htmlSerialize&&hb.test(a)||!l.leadingWhitespace&&ib.test(a)||sb[(kb.exec(a)||["",""])[1].toLowerCase()])){a=a.replace(jb,"<$1></$2>");try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(vb(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=arguments[0];return this.domManip(arguments,function(b){a=this.parentNode,n.cleanData(vb(this)),a&&a.replaceChild(b,this)}),a&&(a.length||a.nodeType)?this:this.remove()},detach:function(a){return this.remove(a,!0)},domManip:function(a,b){a=e.apply([],a);var c,d,f,g,h,i,j=0,k=this.length,m=this,o=k-1,p=a[0],q=n.isFunction(p);if(q||k>1&&"string"==typeof p&&!l.checkClone&&ob.test(p))return this.each(function(c){var d=m.eq(c);q&&(a[0]=p.call(this,c,d.html())),d.domManip(a,b)});if(k&&(i=n.buildFragment(a,this[0].ownerDocument,!1,this),c=i.firstChild,1===i.childNodes.length&&(i=c),c)){for(g=n.map(vb(i,"script"),yb),f=g.length;k>j;j++)d=i,j!==o&&(d=n.clone(d,!0,!0),f&&n.merge(g,vb(d,"script"))),b.call(this[j],d,j);if(f)for(h=g[g.length-1].ownerDocument,n.map(g,zb),j=0;f>j;j++)d=g[j],pb.test(d.type||"")&&!n._data(d,"globalEval")&&n.contains(h,d)&&(d.src?n._evalUrl&&n._evalUrl(d.src):n.globalEval((d.text||d.textContent||d.innerHTML||"").replace(rb,"")));i=c=null}return this}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=0,e=[],g=n(a),h=g.length-1;h>=d;d++)c=d===h?this:this.clone(!0),n(g[d])[b](c),f.apply(e,c.get());return this.pushStack(e)}});var Db,Eb={};function Fb(b,c){var d=n(c.createElement(b)).appendTo(c.body),e=a.getDefaultComputedStyle?a.getDefaultComputedStyle(d[0]).display:n.css(d[0],"display");return d.detach(),e}function Gb(a){var b=z,c=Eb[a];return c||(c=Fb(a,b),"none"!==c&&c||(Db=(Db||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=(Db[0].contentWindow||Db[0].contentDocument).document,b.write(),b.close(),c=Fb(a,b),Db.detach()),Eb[a]=c),c}!function(){var a,b,c=z.createElement("div"),d="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0";c.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=c.getElementsByTagName("a")[0],a.style.cssText="float:left;opacity:.5",l.opacity=/^0.5/.test(a.style.opacity),l.cssFloat=!!a.style.cssFloat,c.style.backgroundClip="content-box",c.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===c.style.backgroundClip,a=c=null,l.shrinkWrapBlocks=function(){var a,c,e,f;if(null==b){if(a=z.getElementsByTagName("body")[0],!a)return;f="border:0;width:0;height:0;position:absolute;top:0;left:-9999px",c=z.createElement("div"),e=z.createElement("div"),a.appendChild(c).appendChild(e),b=!1,typeof e.style.zoom!==L&&(e.style.cssText=d+";width:1px;padding:1px;zoom:1",e.innerHTML="<div></div>",e.firstChild.style.width="5px",b=3!==e.offsetWidth),a.removeChild(c),a=c=e=null}return b}}();var Hb=/^margin/,Ib=new RegExp("^("+T+")(?!px)[a-z%]+$","i"),Jb,Kb,Lb=/^(top|right|bottom|left)$/;a.getComputedStyle?(Jb=function(a){return a.ownerDocument.defaultView.getComputedStyle(a,null)},Kb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Jb(a),g=c?c.getPropertyValue(b)||c[b]:void 0,c&&(""!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),Ib.test(g)&&Hb.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f)),void 0===g?g:g+""}):z.documentElement.currentStyle&&(Jb=function(a){return a.currentStyle},Kb=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Jb(a),g=c?c[b]:void 0,null==g&&h&&h[b]&&(g=h[b]),Ib.test(g)&&!Lb.test(b)&&(d=h.left,e=a.runtimeStyle,f=e&&e.left,f&&(e.left=a.currentStyle.left),h.left="fontSize"===b?"1em":g,g=h.pixelLeft+"px",h.left=d,f&&(e.left=f)),void 0===g?g:g+""||"auto"});function Mb(a,b){return{get:function(){var c=a();if(null!=c)return c?void delete this.get:(this.get=b).apply(this,arguments)}}}!function(){var b,c,d,e,f,g,h=z.createElement("div"),i="border:0;width:0;height:0;position:absolute;top:0;left:-9999px",j="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0";h.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",b=h.getElementsByTagName("a")[0],b.style.cssText="float:left;opacity:.5",l.opacity=/^0.5/.test(b.style.opacity),l.cssFloat=!!b.style.cssFloat,h.style.backgroundClip="content-box",h.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===h.style.backgroundClip,b=h=null,n.extend(l,{reliableHiddenOffsets:function(){if(null!=c)return c;var a,b,d,e=z.createElement("div"),f=z.getElementsByTagName("body")[0];if(f)return e.setAttribute("className","t"),e.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=z.createElement("div"),a.style.cssText=i,f.appendChild(a).appendChild(e),e.innerHTML="<table><tr><td></td><td>t</td></tr></table>",b=e.getElementsByTagName("td"),b[0].style.cssText="padding:0;margin:0;border:0;display:none",d=0===b[0].offsetHeight,b[0].style.display="",b[1].style.display="none",c=d&&0===b[0].offsetHeight,f.removeChild(a),e=f=null,c},boxSizing:function(){return null==d&&k(),d},boxSizingReliable:function(){return null==e&&k(),e},pixelPosition:function(){return null==f&&k(),f},reliableMarginRight:function(){var b,c,d,e;if(null==g&&a.getComputedStyle){if(b=z.getElementsByTagName("body")[0],!b)return;c=z.createElement("div"),d=z.createElement("div"),c.style.cssText=i,b.appendChild(c).appendChild(d),e=d.appendChild(z.createElement("div")),e.style.cssText=d.style.cssText=j,e.style.marginRight=e.style.width="0",d.style.width="1px",g=!parseFloat((a.getComputedStyle(e,null)||{}).marginRight),b.removeChild(c)}return g}});function k(){var b,c,h=z.getElementsByTagName("body")[0];h&&(b=z.createElement("div"),c=z.createElement("div"),b.style.cssText=i,h.appendChild(b).appendChild(c),c.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;display:block;padding:1px;border:1px;width:4px;margin-top:1%;top:1%",n.swap(h,null!=h.style.zoom?{zoom:1}:{},function(){d=4===c.offsetWidth}),e=!0,f=!1,g=!0,a.getComputedStyle&&(f="1%"!==(a.getComputedStyle(c,null)||{}).top,e="4px"===(a.getComputedStyle(c,null)||{width:"4px"}).width),h.removeChild(b),c=h=null)}}(),n.swap=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e};var Nb=/alpha\([^)]*\)/i,Ob=/opacity\s*=\s*([^)]*)/,Pb=/^(none|table(?!-c[ea]).+)/,Qb=new RegExp("^("+T+")(.*)$","i"),Rb=new RegExp("^([+-])=("+T+")","i"),Sb={position:"absolute",visibility:"hidden",display:"block"},Tb={letterSpacing:0,fontWeight:400},Ub=["Webkit","O","Moz","ms"];function Vb(a,b){if(b in a)return b;var c=b.charAt(0).toUpperCase()+b.slice(1),d=b,e=Ub.length;while(e--)if(b=Ub[e]+c,b in a)return b;return d}function Wb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=n._data(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&V(d)&&(f[g]=n._data(d,"olddisplay",Gb(d.nodeName)))):f[g]||(e=V(d),(c&&"none"!==c||!e)&&n._data(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}function Xb(a,b,c){var d=Qb.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function Yb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+U[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+U[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+U[f]+"Width",!0,e))):(g+=n.css(a,"padding"+U[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+U[f]+"Width",!0,e)));return g}function Zb(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=Jb(a),g=l.boxSizing()&&"border-box"===n.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=Kb(a,b,f),(0>e||null==e)&&(e=a.style[b]),Ib.test(e))return e;d=g&&(l.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Yb(a,b,c||(g?"border":"content"),d,f)+"px"}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=Kb(a,"opacity");return""===c?"1":c}}}},cssNumber:{columnCount:!0,fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":l.cssFloat?"cssFloat":"styleFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;if(b=n.cssProps[h]||(n.cssProps[h]=Vb(i,h)),g=n.cssHooks[b]||n.cssHooks[h],void 0===c)return g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b];if(f=typeof c,"string"===f&&(e=Rb.exec(c))&&(c=(e[1]+1)*e[2]+parseFloat(n.css(a,b)),f="number"),null!=c&&c===c&&("number"!==f||n.cssNumber[h]||(c+="px"),l.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),!(g&&"set"in g&&void 0===(c=g.set(a,c,d)))))try{i[b]="",i[b]=c}catch(j){}}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=Vb(a.style,h)),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(f=g.get(a,!0,c)),void 0===f&&(f=Kb(a,b,d)),"normal"===f&&b in Tb&&(f=Tb[b]),""===c||c?(e=parseFloat(f),c===!0||n.isNumeric(e)?e||0:f):f}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?0===a.offsetWidth&&Pb.test(n.css(a,"display"))?n.swap(a,Sb,function(){return Zb(a,b,d)}):Zb(a,b,d):void 0},set:function(a,c,d){var e=d&&Jb(a);return Xb(a,c,d?Yb(a,b,d,l.boxSizing()&&"border-box"===n.css(a,"boxSizing",!1,e),e):0)}}}),l.opacity||(n.cssHooks.opacity={get:function(a,b){return Ob.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=n.isNumeric(b)?"alpha(opacity="+100*b+")":"",f=d&&d.filter||c.filter||"";c.zoom=1,(b>=1||""===b)&&""===n.trim(f.replace(Nb,""))&&c.removeAttribute&&(c.removeAttribute("filter"),""===b||d&&!d.filter)||(c.filter=Nb.test(f)?f.replace(Nb,e):f+" "+e)}}),n.cssHooks.marginRight=Mb(l.reliableMarginRight,function(a,b){return b?n.swap(a,{display:"inline-block"},Kb,[a,"marginRight"]):void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+U[d]+b]=f[d]||f[d-2]||f[0];return e}},Hb.test(a)||(n.cssHooks[a+b].set=Xb)}),n.fn.extend({css:function(a,b){return W(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=Jb(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)
},a,b,arguments.length>1)},show:function(){return Wb(this,!0)},hide:function(){return Wb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){V(this)?n(this).show():n(this).hide()})}});function $b(a,b,c,d,e){return new $b.prototype.init(a,b,c,d,e)}n.Tween=$b,$b.prototype={constructor:$b,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=$b.propHooks[this.prop];return a&&a.get?a.get(this):$b.propHooks._default.get(this)},run:function(a){var b,c=$b.propHooks[this.prop];return this.pos=b=this.options.duration?n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):$b.propHooks._default.set(this),this}},$b.prototype.init.prototype=$b.prototype,$b.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[n.cssProps[a.prop]]||n.cssHooks[a.prop])?n.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},$b.propHooks.scrollTop=$b.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},n.fx=$b.prototype.init,n.fx.step={};var _b,ac,bc=/^(?:toggle|show|hide)$/,cc=new RegExp("^(?:([+-])=|)("+T+")([a-z%]*)$","i"),dc=/queueHooks$/,ec=[jc],fc={"*":[function(a,b){var c=this.createTween(a,b),d=c.cur(),e=cc.exec(b),f=e&&e[3]||(n.cssNumber[a]?"":"px"),g=(n.cssNumber[a]||"px"!==f&&+d)&&cc.exec(n.css(c.elem,a)),h=1,i=20;if(g&&g[3]!==f){f=f||g[3],e=e||[],g=+d||1;do h=h||".5",g/=h,n.style(c.elem,a,g+f);while(h!==(h=c.cur()/d)&&1!==h&&--i)}return e&&(g=c.start=+g||+d||0,c.unit=f,c.end=e[1]?g+(e[1]+1)*e[2]:+e[2]),c}]};function gc(){return setTimeout(function(){_b=void 0}),_b=n.now()}function hc(a,b){var c,d={height:a},e=0;for(b=b?1:0;4>e;e+=2-b)c=U[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function ic(a,b,c){for(var d,e=(fc[b]||[]).concat(fc["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function jc(a,b,c){var d,e,f,g,h,i,j,k,m=this,o={},p=a.style,q=a.nodeType&&V(a),r=n._data(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,m.always(function(){m.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[p.overflow,p.overflowX,p.overflowY],j=n.css(a,"display"),k=Gb(a.nodeName),"none"===j&&(j=k),"inline"===j&&"none"===n.css(a,"float")&&(l.inlineBlockNeedsLayout&&"inline"!==k?p.zoom=1:p.display="inline-block")),c.overflow&&(p.overflow="hidden",l.shrinkWrapBlocks()||m.always(function(){p.overflow=c.overflow[0],p.overflowX=c.overflow[1],p.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],bc.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(q?"hide":"show")){if("show"!==e||!r||void 0===r[d])continue;q=!0}o[d]=r&&r[d]||n.style(a,d)}if(!n.isEmptyObject(o)){r?"hidden"in r&&(q=r.hidden):r=n._data(a,"fxshow",{}),f&&(r.hidden=!q),q?n(a).show():m.done(function(){n(a).hide()}),m.done(function(){var b;n._removeData(a,"fxshow");for(b in o)n.style(a,b,o[b])});for(d in o)g=ic(q?r[d]:0,d,m),d in r||(r[d]=g.start,q&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function kc(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function lc(a,b,c){var d,e,f=0,g=ec.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=_b||gc(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:_b||gc(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;for(kc(k,j.opts.specialEasing);g>f;f++)if(d=ec[f].call(j,a,k,j.opts))return d;return n.map(k,ic,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(lc,{tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var c,d=0,e=a.length;e>d;d++)c=a[d],fc[c]=fc[c]||[],fc[c].unshift(b)},prefilter:function(a,b){b?ec.unshift(a):ec.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,(null==d.queue||d.queue===!0)&&(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(V).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=lc(this,n.extend({},a),f);(e||n._data(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=n._data(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&dc.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));(b||!c)&&n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=n._data(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(hc(b,!0),a,d,e)}}),n.each({slideDown:hc("show"),slideUp:hc("hide"),slideToggle:hc("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=n.timers,c=0;for(_b=n.now();c<b.length;c++)a=b[c],a()||b[c]!==a||b.splice(c--,1);b.length||n.fx.stop(),_b=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){ac||(ac=setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){clearInterval(ac),ac=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(a,b){return a=n.fx?n.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},function(){var a,b,c,d,e=z.createElement("div");e.setAttribute("className","t"),e.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=e.getElementsByTagName("a")[0],c=z.createElement("select"),d=c.appendChild(z.createElement("option")),b=e.getElementsByTagName("input")[0],a.style.cssText="top:1px",l.getSetAttribute="t"!==e.className,l.style=/top/.test(a.getAttribute("style")),l.hrefNormalized="/a"===a.getAttribute("href"),l.checkOn=!!b.value,l.optSelected=d.selected,l.enctype=!!z.createElement("form").enctype,c.disabled=!0,l.optDisabled=!d.disabled,b=z.createElement("input"),b.setAttribute("value",""),l.input=""===b.getAttribute("value"),b.value="t",b.setAttribute("type","radio"),l.radioValue="t"===b.value,a=b=c=d=e=null}();var mc=/\r/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(mc,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.text(a)}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],!(!c.selected&&i!==e||(l.optDisabled?c.disabled:null!==c.getAttribute("disabled"))||c.parentNode.disabled&&n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)if(d=e[g],n.inArray(n.valHooks.option.get(d),f)>=0)try{d.selected=c=!0}catch(h){d.scrollHeight}else d.selected=!1;return c||(a.selectedIndex=-1),e}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>=0:void 0}},l.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})});var nc,oc,pc=n.expr.attrHandle,qc=/^(?:checked|selected)$/i,rc=l.getSetAttribute,sc=l.input;n.fn.extend({attr:function(a,b){return W(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(a&&3!==f&&8!==f&&2!==f)return typeof a.getAttribute===L?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),d=n.attrHooks[b]||(n.expr.match.bool.test(b)?oc:nc)),void 0===c?d&&"get"in d&&null!==(e=d.get(a,b))?e:(e=n.find.attr(a,b),null==e?void 0:e):null!==c?d&&"set"in d&&void 0!==(e=d.set(a,c,b))?e:(a.setAttribute(b,c+""),c):void n.removeAttr(a,b))},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(F);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)?sc&&rc||!qc.test(c)?a[d]=!1:a[n.camelCase("default-"+c)]=a[d]=!1:n.attr(a,c,""),a.removeAttribute(rc?c:d)},attrHooks:{type:{set:function(a,b){if(!l.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}}}),oc={set:function(a,b,c){return b===!1?n.removeAttr(a,c):sc&&rc||!qc.test(c)?a.setAttribute(!rc&&n.propFix[c]||c,c):a[n.camelCase("default-"+c)]=a[c]=!0,c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=pc[b]||n.find.attr;pc[b]=sc&&rc||!qc.test(b)?function(a,b,d){var e,f;return d||(f=pc[b],pc[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,pc[b]=f),e}:function(a,b,c){return c?void 0:a[n.camelCase("default-"+b)]?b.toLowerCase():null}}),sc&&rc||(n.attrHooks.value={set:function(a,b,c){return n.nodeName(a,"input")?void(a.defaultValue=b):nc&&nc.set(a,b,c)}}),rc||(nc={set:function(a,b,c){var d=a.getAttributeNode(c);return d||a.setAttributeNode(d=a.ownerDocument.createAttribute(c)),d.value=b+="","value"===c||b===a.getAttribute(c)?b:void 0}},pc.id=pc.name=pc.coords=function(a,b,c){var d;return c?void 0:(d=a.getAttributeNode(b))&&""!==d.value?d.value:null},n.valHooks.button={get:function(a,b){var c=a.getAttributeNode(b);return c&&c.specified?c.value:void 0},set:nc.set},n.attrHooks.contenteditable={set:function(a,b,c){nc.set(a,""===b?!1:b,c)}},n.each(["width","height"],function(a,b){n.attrHooks[b]={set:function(a,c){return""===c?(a.setAttribute(b,"auto"),c):void 0}}})),l.style||(n.attrHooks.style={get:function(a){return a.style.cssText||void 0},set:function(a,b){return a.style.cssText=b+""}});var tc=/^(?:input|select|textarea|button|object)$/i,uc=/^(?:a|area)$/i;n.fn.extend({prop:function(a,b){return W(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return a=n.propFix[a]||a,this.each(function(){try{this[a]=void 0,delete this[a]}catch(b){}})}}),n.extend({propFix:{"for":"htmlFor","class":"className"},prop:function(a,b,c){var d,e,f,g=a.nodeType;if(a&&3!==g&&8!==g&&2!==g)return f=1!==g||!n.isXMLDoc(a),f&&(b=n.propFix[b]||b,e=n.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){var b=n.find.attr(a,"tabindex");return b?parseInt(b,10):tc.test(a.nodeName)||uc.test(a.nodeName)&&a.href?0:-1}}}}),l.hrefNormalized||n.each(["href","src"],function(a,b){n.propHooks[b]={get:function(a){return a.getAttribute(b,4)}}}),l.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this}),l.enctype||(n.propFix.enctype="encoding");var vc=/[\t\r\n\f]/g;n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j="string"==typeof a&&a;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(F)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(vc," "):" ")){f=0;while(e=b[f++])d.indexOf(" "+e+" ")<0&&(d+=e+" ");g=n.trim(d),c.className!==g&&(c.className=g)}return this},removeClass:function(a){var b,c,d,e,f,g,h=0,i=this.length,j=0===arguments.length||"string"==typeof a&&a;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,this.className))});if(j)for(b=(a||"").match(F)||[];i>h;h++)if(c=this[h],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(vc," "):"")){f=0;while(e=b[f++])while(d.indexOf(" "+e+" ")>=0)d=d.replace(" "+e+" "," ");g=a?n.trim(d):"",c.className!==g&&(c.className=g)}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):this.each(n.isFunction(a)?function(c){n(this).toggleClass(a.call(this,c,this.className,b),b)}:function(){if("string"===c){var b,d=0,e=n(this),f=a.match(F)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else(c===L||"boolean"===c)&&(this.className&&n._data(this,"__className__",this.className),this.className=this.className||a===!1?"":n._data(this,"__className__")||"")})},hasClass:function(a){for(var b=" "+a+" ",c=0,d=this.length;d>c;c++)if(1===this[c].nodeType&&(" "+this[c].className+" ").replace(vc," ").indexOf(b)>=0)return!0;return!1}}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}});var wc=n.now(),xc=/\?/,yc=/(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;n.parseJSON=function(b){if(a.JSON&&a.JSON.parse)return a.JSON.parse(b+"");var c,d=null,e=n.trim(b+"");return e&&!n.trim(e.replace(yc,function(a,b,e,f){return c&&b&&(d=0),0===d?a:(c=e||b,d+=!f-!e,"")}))?Function("return "+e)():n.error("Invalid JSON: "+b)},n.parseXML=function(b){var c,d;if(!b||"string"!=typeof b)return null;try{a.DOMParser?(d=new DOMParser,c=d.parseFromString(b,"text/xml")):(c=new ActiveXObject("Microsoft.XMLDOM"),c.async="false",c.loadXML(b))}catch(e){c=void 0}return c&&c.documentElement&&!c.getElementsByTagName("parsererror").length||n.error("Invalid XML: "+b),c};var zc,Ac,Bc=/#.*$/,Cc=/([?&])_=[^&]*/,Dc=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Ec=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Fc=/^(?:GET|HEAD)$/,Gc=/^\/\//,Hc=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,Ic={},Jc={},Kc="*/".concat("*");try{Ac=location.href}catch(Lc){Ac=z.createElement("a"),Ac.href="",Ac=Ac.href}zc=Hc.exec(Ac.toLowerCase())||[];function Mc(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(F)||[];if(n.isFunction(c))while(d=f[e++])"+"===d.charAt(0)?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function Nc(a,b,c,d){var e={},f=a===Jc;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function Oc(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(d in b)void 0!==b[d]&&((e[d]?a:c||(c={}))[d]=b[d]);return c&&n.extend(!0,a,c),a}function Pc(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===e&&(e=a.mimeType||b.getResponseHeader("Content-Type"));if(e)for(g in h)if(h[g]&&h[g].test(e)){i.unshift(g);break}if(i[0]in c)f=i[0];else{for(g in c){if(!i[0]||a.converters[g+" "+i[0]]){f=g;break}d||(d=g)}f=f||d}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function Qc(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Ac,type:"GET",isLocal:Ec.test(zc[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Kc,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?Oc(Oc(a,n.ajaxSettings),b):Oc(n.ajaxSettings,a)},ajaxPrefilter:Mc(Ic),ajaxTransport:Mc(Jc),ajax:function(a,b){"object"==typeof a&&(b=a,a=void 0),b=b||{};var c,d,e,f,g,h,i,j,k=n.ajaxSetup({},b),l=k.context||k,m=k.context&&(l.nodeType||l.jquery)?n(l):n.event,o=n.Deferred(),p=n.Callbacks("once memory"),q=k.statusCode||{},r={},s={},t=0,u="canceled",v={readyState:0,getResponseHeader:function(a){var b;if(2===t){if(!j){j={};while(b=Dc.exec(f))j[b[1].toLowerCase()]=b[2]}b=j[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===t?f:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return t||(a=s[c]=s[c]||a,r[a]=b),this},overrideMimeType:function(a){return t||(k.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>t)for(b in a)q[b]=[q[b],a[b]];else v.always(a[v.status]);return this},abort:function(a){var b=a||u;return i&&i.abort(b),x(0,b),this}};if(o.promise(v).complete=p.add,v.success=v.done,v.error=v.fail,k.url=((a||k.url||Ac)+"").replace(Bc,"").replace(Gc,zc[1]+"//"),k.type=b.method||b.type||k.method||k.type,k.dataTypes=n.trim(k.dataType||"*").toLowerCase().match(F)||[""],null==k.crossDomain&&(c=Hc.exec(k.url.toLowerCase()),k.crossDomain=!(!c||c[1]===zc[1]&&c[2]===zc[2]&&(c[3]||("http:"===c[1]?"80":"443"))===(zc[3]||("http:"===zc[1]?"80":"443")))),k.data&&k.processData&&"string"!=typeof k.data&&(k.data=n.param(k.data,k.traditional)),Nc(Ic,k,b,v),2===t)return v;h=k.global,h&&0===n.active++&&n.event.trigger("ajaxStart"),k.type=k.type.toUpperCase(),k.hasContent=!Fc.test(k.type),e=k.url,k.hasContent||(k.data&&(e=k.url+=(xc.test(e)?"&":"?")+k.data,delete k.data),k.cache===!1&&(k.url=Cc.test(e)?e.replace(Cc,"$1_="+wc++):e+(xc.test(e)?"&":"?")+"_="+wc++)),k.ifModified&&(n.lastModified[e]&&v.setRequestHeader("If-Modified-Since",n.lastModified[e]),n.etag[e]&&v.setRequestHeader("If-None-Match",n.etag[e])),(k.data&&k.hasContent&&k.contentType!==!1||b.contentType)&&v.setRequestHeader("Content-Type",k.contentType),v.setRequestHeader("Accept",k.dataTypes[0]&&k.accepts[k.dataTypes[0]]?k.accepts[k.dataTypes[0]]+("*"!==k.dataTypes[0]?", "+Kc+"; q=0.01":""):k.accepts["*"]);for(d in k.headers)v.setRequestHeader(d,k.headers[d]);if(k.beforeSend&&(k.beforeSend.call(l,v,k)===!1||2===t))return v.abort();u="abort";for(d in{success:1,error:1,complete:1})v[d](k[d]);if(i=Nc(Jc,k,b,v)){v.readyState=1,h&&m.trigger("ajaxSend",[v,k]),k.async&&k.timeout>0&&(g=setTimeout(function(){v.abort("timeout")},k.timeout));try{t=1,i.send(r,x)}catch(w){if(!(2>t))throw w;x(-1,w)}}else x(-1,"No Transport");function x(a,b,c,d){var j,r,s,u,w,x=b;2!==t&&(t=2,g&&clearTimeout(g),i=void 0,f=d||"",v.readyState=a>0?4:0,j=a>=200&&300>a||304===a,c&&(u=Pc(k,v,c)),u=Qc(k,u,v,j),j?(k.ifModified&&(w=v.getResponseHeader("Last-Modified"),w&&(n.lastModified[e]=w),w=v.getResponseHeader("etag"),w&&(n.etag[e]=w)),204===a||"HEAD"===k.type?x="nocontent":304===a?x="notmodified":(x=u.state,r=u.data,s=u.error,j=!s)):(s=x,(a||!x)&&(x="error",0>a&&(a=0))),v.status=a,v.statusText=(b||x)+"",j?o.resolveWith(l,[r,x,v]):o.rejectWith(l,[v,x,s]),v.statusCode(q),q=void 0,h&&m.trigger(j?"ajaxSuccess":"ajaxError",[v,k,j?r:s]),p.fireWith(l,[v,x]),h&&(m.trigger("ajaxComplete",[v,k]),--n.active||n.event.trigger("ajaxStop")))}return v},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax({url:a,type:b,dataType:e,data:c,success:d})}}),n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){if(n.isFunction(a))return this.each(function(b){n(this).wrapAll(a.call(this,b))});if(this[0]){var b=n(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&1===a.firstChild.nodeType)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return this.each(n.isFunction(a)?function(b){n(this).wrapInner(a.call(this,b))}:function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}}),n.expr.filters.hidden=function(a){return a.offsetWidth<=0&&a.offsetHeight<=0||!l.reliableHiddenOffsets()&&"none"===(a.style&&a.style.display||n.css(a,"display"))},n.expr.filters.visible=function(a){return!n.expr.filters.hidden(a)};var Rc=/%20/g,Sc=/\[\]$/,Tc=/\r?\n/g,Uc=/^(?:submit|button|image|reset|file)$/i,Vc=/^(?:input|select|textarea|keygen)/i;function Wc(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||Sc.test(a)?d(a,e):Wc(a+"["+("object"==typeof e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)Wc(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)Wc(c,a[c],b,e);return d.join("&").replace(Rc,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&Vc.test(this.nodeName)&&!Uc.test(a)&&(this.checked||!X.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(Tc,"\r\n")}}):{name:b.name,value:c.replace(Tc,"\r\n")}}).get()}}),n.ajaxSettings.xhr=void 0!==a.ActiveXObject?function(){return!this.isLocal&&/^(get|post|head|put|delete|options)$/i.test(this.type)&&$c()||_c()}:$c;var Xc=0,Yc={},Zc=n.ajaxSettings.xhr();a.ActiveXObject&&n(a).on("unload",function(){for(var a in Yc)Yc[a](void 0,!0)}),l.cors=!!Zc&&"withCredentials"in Zc,Zc=l.ajax=!!Zc,Zc&&n.ajaxTransport(function(a){if(!a.crossDomain||l.cors){var b;return{send:function(c,d){var e,f=a.xhr(),g=++Xc;if(f.open(a.type,a.url,a.async,a.username,a.password),a.xhrFields)for(e in a.xhrFields)f[e]=a.xhrFields[e];a.mimeType&&f.overrideMimeType&&f.overrideMimeType(a.mimeType),a.crossDomain||c["X-Requested-With"]||(c["X-Requested-With"]="XMLHttpRequest");for(e in c)void 0!==c[e]&&f.setRequestHeader(e,c[e]+"");f.send(a.hasContent&&a.data||null),b=function(c,e){var h,i,j;if(b&&(e||4===f.readyState))if(delete Yc[g],b=void 0,f.onreadystatechange=n.noop,e)4!==f.readyState&&f.abort();else{j={},h=f.status,"string"==typeof f.responseText&&(j.text=f.responseText);try{i=f.statusText}catch(k){i=""}h||!a.isLocal||a.crossDomain?1223===h&&(h=204):h=j.text?200:404}j&&d(h,i,j,f.getAllResponseHeaders())},a.async?4===f.readyState?setTimeout(b):f.onreadystatechange=Yc[g]=b:b()},abort:function(){b&&b(void 0,!0)}}}});function $c(){try{return new a.XMLHttpRequest}catch(b){}}function _c(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c=z.head||n("head")[0]||z.documentElement;return{send:function(d,e){b=z.createElement("script"),b.async=!0,a.scriptCharset&&(b.charset=a.scriptCharset),b.src=a.url,b.onload=b.onreadystatechange=function(a,c){(c||!b.readyState||/loaded|complete/.test(b.readyState))&&(b.onload=b.onreadystatechange=null,b.parentNode&&b.parentNode.removeChild(b),b=null,c||e(200,"success"))},c.insertBefore(b,c.firstChild)},abort:function(){b&&b.onload(void 0,!0)}}}});var ad=[],bd=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=ad.pop()||n.expando+"_"+wc++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(bd.test(b.url)?"url":"string"==typeof b.data&&!(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&bd.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(bd,"$1"+e):b.jsonp!==!1&&(b.url+=(xc.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,ad.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||z;var d=v.exec(a),e=!c&&[];return d?[b.createElement(d[1])]:(d=n.buildFragment([a],b,e),e&&e.length&&n(e).remove(),n.merge([],d.childNodes))};var cd=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&cd)return cd.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>=0&&(d=a.slice(h,a.length),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(f="POST"),g.length>0&&n.ajax({url:a,type:f,dataType:"html",data:b}).done(function(a){e=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).complete(c&&function(a,b){g.each(c,e||[a.responseText,b,a])}),this},n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};var dd=a.document.documentElement;function ed(a){return n.isWindow(a)?a:9===a.nodeType?a.defaultView||a.parentWindow:!1}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&n.inArray("auto",[f,i])>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,h)),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d={top:0,left:0},e=this[0],f=e&&e.ownerDocument;if(f)return b=f.documentElement,n.contains(b,e)?(typeof e.getBoundingClientRect!==L&&(d=e.getBoundingClientRect()),c=ed(f),{top:d.top+(c.pageYOffset||b.scrollTop)-(b.clientTop||0),left:d.left+(c.pageXOffset||b.scrollLeft)-(b.clientLeft||0)}):d},position:function(){if(this[0]){var a,b,c={top:0,left:0},d=this[0];return"fixed"===n.css(d,"position")?b=d.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(c=a.offset()),c.top+=n.css(a[0],"borderTopWidth",!0),c.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-c.top-n.css(d,"marginTop",!0),left:b.left-c.left-n.css(d,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||dd;while(a&&!n.nodeName(a,"html")&&"static"===n.css(a,"position"))a=a.offsetParent;return a||dd})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var c=/Y/.test(b);n.fn[a]=function(d){return W(this,function(a,d,e){var f=ed(a);return void 0===e?f?b in f?f[b]:f.document.documentElement[d]:a[d]:void(f?f.scrollTo(c?n(f).scrollLeft():e,c?e:n(f).scrollTop()):a[d]=e)},a,d,arguments.length,null)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=Mb(l.pixelPosition,function(a,c){return c?(c=Kb(a,b),Ib.test(c)?n(a).position()[b]+"px":c):void 0})}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return W(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.size=function(){return this.length},n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var fd=a.jQuery,gd=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=gd),b&&a.jQuery===n&&(a.jQuery=fd),n},typeof b===L&&(a.jQuery=a.$=n),n});

/**
 * jQuery MD5 hash algorithm function
 *
 * 	<code>
 * 		Calculate the md5 hash of a String
 * 		String $.md5 ( String str )
 * 	</code>
 *
 * Calculates the MD5 hash of str using the » RSA Data Security, Inc. MD5 Message-Digest Algorithm, and returns that hash.
 * MD5 (Message-Digest algorithm 5) is a widely-used cryptographic hash function with a 128-bit hash value. MD5 has been employed in a wide variety of security applications, and is also commonly used to check the integrity of data. The generated hash is also non-reversable. Data cannot be retrieved from the message digest, the digest uniquely identifies the data.
 * MD5 was developed by Professor Ronald L. Rivest in 1994. Its 128 bit (16 byte) message digest makes it a faster implementation than SHA-1.
 * This script is used to process a variable length message into a fixed-length output of 128 bits using the MD5 algorithm. It is fully compatible with UTF-8 encoding. It is very useful when u want to transfer encrypted passwords over the internet. If you plan using UTF-8 encoding in your project don't forget to set the page encoding to UTF-8 (Content-Type meta tag).
 * This function orginally get from the WebToolkit and rewrite for using as the jQuery plugin.
 *
 * Example
 * 	Code
 * 		<code>
 * 			$.md5("I'm Persian.");
 * 		</code>
 * 	Result
 * 		<code>
 * 			"b8c901d0f02223f9761016cfff9d68df"
 * 		</code>
 *
 * @alias Muhammad Hussein Fattahizadeh < muhammad [AT] semnanweb [DOT] com >
 * @link http://www.semnanweb.com/jquery-plugin/md5.html
 * @see http://www.webtoolkit.info/
 * @license http://www.gnu.org/licenses/gpl.html [GNU General Public License]
 * @param {jQuery} {md5:function(string))
 * @return string
 */ (function($) {
    var rotateLeft = function(lValue, iShiftBits) {
        return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
    }
    var addUnsigned = function(lX, lY) {
        var lX4, lY4, lX8, lY8, lResult;
        lX8 = (lX & 0x80000000);
        lY8 = (lY & 0x80000000);
        lX4 = (lX & 0x40000000);
        lY4 = (lY & 0x40000000);
        lResult = (lX & 0x3FFFFFFF) + (lY & 0x3FFFFFFF);
        if (lX4 & lY4) return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
        if (lX4 | lY4) {
            if (lResult & 0x40000000) return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
            else return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
        } else {
            return (lResult ^ lX8 ^ lY8);
        }
    }
    var F = function(x, y, z) {
        return (x & y) | ((~x) & z);
    }
    var G = function(x, y, z) {
        return (x & z) | (y & (~z));
    }
    var H = function(x, y, z) {
        return (x ^ y ^ z);
    }
    var I = function(x, y, z) {
        return (y ^ (x | (~z)));
    }
    var FF = function(a, b, c, d, x, s, ac) {
        a = addUnsigned(a, addUnsigned(addUnsigned(F(b, c, d), x), ac));
        return addUnsigned(rotateLeft(a, s), b);
    };
    var GG = function(a, b, c, d, x, s, ac) {
        a = addUnsigned(a, addUnsigned(addUnsigned(G(b, c, d), x), ac));
        return addUnsigned(rotateLeft(a, s), b);
    };
    var HH = function(a, b, c, d, x, s, ac) {
        a = addUnsigned(a, addUnsigned(addUnsigned(H(b, c, d), x), ac));
        return addUnsigned(rotateLeft(a, s), b);
    };
    var II = function(a, b, c, d, x, s, ac) {
        a = addUnsigned(a, addUnsigned(addUnsigned(I(b, c, d), x), ac));
        return addUnsigned(rotateLeft(a, s), b);
    };
    var convertToWordArray = function(string) {
        var lWordCount;
        var lMessageLength = string.length;
        var lNumberOfWordsTempOne = lMessageLength + 8;
        var lNumberOfWordsTempTwo = (lNumberOfWordsTempOne - (lNumberOfWordsTempOne % 64)) / 64;
        var lNumberOfWords = (lNumberOfWordsTempTwo + 1) * 16;
        var lWordArray = Array(lNumberOfWords - 1);
        var lBytePosition = 0;
        var lByteCount = 0;
        while (lByteCount < lMessageLength) {
            lWordCount = (lByteCount - (lByteCount % 4)) / 4;
            lBytePosition = (lByteCount % 4) * 8;
            lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount) << lBytePosition));
            lByteCount++;
        }
        lWordCount = (lByteCount - (lByteCount % 4)) / 4;
        lBytePosition = (lByteCount % 4) * 8;
        lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
        lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
        lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
        return lWordArray;
    };
    var wordToHex = function(lValue) {
        var WordToHexValue = "",
            WordToHexValueTemp = "",
            lByte, lCount;
        for (lCount = 0; lCount <= 3; lCount++) {
            lByte = (lValue >>> (lCount * 8)) & 255;
            WordToHexValueTemp = "0" + lByte.toString(16);
            WordToHexValue = WordToHexValue + WordToHexValueTemp.substr(WordToHexValueTemp.length - 2, 2);
        }
        return WordToHexValue;
    };
    var uTF8Encode = function(string) {
        string = string.replace(/\x0d\x0a/g, "\x0a");
        var output = "";
        for (var n = 0; n < string.length; n++) {
            var c = string.charCodeAt(n);
            if (c < 128) {
                output += String.fromCharCode(c);
            } else if ((c > 127) && (c < 2048)) {
                output += String.fromCharCode((c >> 6) | 192);
                output += String.fromCharCode((c & 63) | 128);
            } else {
                output += String.fromCharCode((c >> 12) | 224);
                output += String.fromCharCode(((c >> 6) & 63) | 128);
                output += String.fromCharCode((c & 63) | 128);
            }
        }
        return output;
    };
    $.extend({
        md5: function(string) {
            var x = Array();
            var k, AA, BB, CC, DD, a, b, c, d;
            var S11 = 7,
                S12 = 12,
                S13 = 17,
                S14 = 22;
            var S21 = 5,
                S22 = 9,
                S23 = 14,
                S24 = 20;
            var S31 = 4,
                S32 = 11,
                S33 = 16,
                S34 = 23;
            var S41 = 6,
                S42 = 10,
                S43 = 15,
                S44 = 21;
            string = uTF8Encode(string);
            x = convertToWordArray(string);
            a = 0x67452301;
            b = 0xEFCDAB89;
            c = 0x98BADCFE;
            d = 0x10325476;
            for (k = 0; k < x.length; k += 16) {
                AA = a;
                BB = b;
                CC = c;
                DD = d;
                a = FF(a, b, c, d, x[k + 0], S11, 0xD76AA478);
                d = FF(d, a, b, c, x[k + 1], S12, 0xE8C7B756);
                c = FF(c, d, a, b, x[k + 2], S13, 0x242070DB);
                b = FF(b, c, d, a, x[k + 3], S14, 0xC1BDCEEE);
                a = FF(a, b, c, d, x[k + 4], S11, 0xF57C0FAF);
                d = FF(d, a, b, c, x[k + 5], S12, 0x4787C62A);
                c = FF(c, d, a, b, x[k + 6], S13, 0xA8304613);
                b = FF(b, c, d, a, x[k + 7], S14, 0xFD469501);
                a = FF(a, b, c, d, x[k + 8], S11, 0x698098D8);
                d = FF(d, a, b, c, x[k + 9], S12, 0x8B44F7AF);
                c = FF(c, d, a, b, x[k + 10], S13, 0xFFFF5BB1);
                b = FF(b, c, d, a, x[k + 11], S14, 0x895CD7BE);
                a = FF(a, b, c, d, x[k + 12], S11, 0x6B901122);
                d = FF(d, a, b, c, x[k + 13], S12, 0xFD987193);
                c = FF(c, d, a, b, x[k + 14], S13, 0xA679438E);
                b = FF(b, c, d, a, x[k + 15], S14, 0x49B40821);
                a = GG(a, b, c, d, x[k + 1], S21, 0xF61E2562);
                d = GG(d, a, b, c, x[k + 6], S22, 0xC040B340);
                c = GG(c, d, a, b, x[k + 11], S23, 0x265E5A51);
                b = GG(b, c, d, a, x[k + 0], S24, 0xE9B6C7AA);
                a = GG(a, b, c, d, x[k + 5], S21, 0xD62F105D);
                d = GG(d, a, b, c, x[k + 10], S22, 0x2441453);
                c = GG(c, d, a, b, x[k + 15], S23, 0xD8A1E681);
                b = GG(b, c, d, a, x[k + 4], S24, 0xE7D3FBC8);
                a = GG(a, b, c, d, x[k + 9], S21, 0x21E1CDE6);
                d = GG(d, a, b, c, x[k + 14], S22, 0xC33707D6);
                c = GG(c, d, a, b, x[k + 3], S23, 0xF4D50D87);
                b = GG(b, c, d, a, x[k + 8], S24, 0x455A14ED);
                a = GG(a, b, c, d, x[k + 13], S21, 0xA9E3E905);
                d = GG(d, a, b, c, x[k + 2], S22, 0xFCEFA3F8);
                c = GG(c, d, a, b, x[k + 7], S23, 0x676F02D9);
                b = GG(b, c, d, a, x[k + 12], S24, 0x8D2A4C8A);
                a = HH(a, b, c, d, x[k + 5], S31, 0xFFFA3942);
                d = HH(d, a, b, c, x[k + 8], S32, 0x8771F681);
                c = HH(c, d, a, b, x[k + 11], S33, 0x6D9D6122);
                b = HH(b, c, d, a, x[k + 14], S34, 0xFDE5380C);
                a = HH(a, b, c, d, x[k + 1], S31, 0xA4BEEA44);
                d = HH(d, a, b, c, x[k + 4], S32, 0x4BDECFA9);
                c = HH(c, d, a, b, x[k + 7], S33, 0xF6BB4B60);
                b = HH(b, c, d, a, x[k + 10], S34, 0xBEBFBC70);
                a = HH(a, b, c, d, x[k + 13], S31, 0x289B7EC6);
                d = HH(d, a, b, c, x[k + 0], S32, 0xEAA127FA);
                c = HH(c, d, a, b, x[k + 3], S33, 0xD4EF3085);
                b = HH(b, c, d, a, x[k + 6], S34, 0x4881D05);
                a = HH(a, b, c, d, x[k + 9], S31, 0xD9D4D039);
                d = HH(d, a, b, c, x[k + 12], S32, 0xE6DB99E5);
                c = HH(c, d, a, b, x[k + 15], S33, 0x1FA27CF8);
                b = HH(b, c, d, a, x[k + 2], S34, 0xC4AC5665);
                a = II(a, b, c, d, x[k + 0], S41, 0xF4292244);
                d = II(d, a, b, c, x[k + 7], S42, 0x432AFF97);
                c = II(c, d, a, b, x[k + 14], S43, 0xAB9423A7);
                b = II(b, c, d, a, x[k + 5], S44, 0xFC93A039);
                a = II(a, b, c, d, x[k + 12], S41, 0x655B59C3);
                d = II(d, a, b, c, x[k + 3], S42, 0x8F0CCC92);
                c = II(c, d, a, b, x[k + 10], S43, 0xFFEFF47D);
                b = II(b, c, d, a, x[k + 1], S44, 0x85845DD1);
                a = II(a, b, c, d, x[k + 8], S41, 0x6FA87E4F);
                d = II(d, a, b, c, x[k + 15], S42, 0xFE2CE6E0);
                c = II(c, d, a, b, x[k + 6], S43, 0xA3014314);
                b = II(b, c, d, a, x[k + 13], S44, 0x4E0811A1);
                a = II(a, b, c, d, x[k + 4], S41, 0xF7537E82);
                d = II(d, a, b, c, x[k + 11], S42, 0xBD3AF235);
                c = II(c, d, a, b, x[k + 2], S43, 0x2AD7D2BB);
                b = II(b, c, d, a, x[k + 9], S44, 0xEB86D391);
                a = addUnsigned(a, AA);
                b = addUnsigned(b, BB);
                c = addUnsigned(c, CC);
                d = addUnsigned(d, DD);
            }
            var tempValue = wordToHex(a) + wordToHex(b) + wordToHex(c) + wordToHex(d);
            return tempValue.toLowerCase();
        }
    });
})(jQuery);
/*!
 * artDialog 4.1.5
 * Date: 2012-02-25 22:12
 * http://code.google.com/p/artdialog/
 * (c) 2009-2012 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
eval(function(B,D,A,G,E,F){function C(A){return A<62?String.fromCharCode(A+=A<26?65:A<52?71:-4):A<63?'_':A<64?'$':C(A>>6)+C(A&63)}while(A>0)E[C(G--)]=D[--A];return B.replace(/[\w\$]+/g,function(A){return E[A]==F[A]?A:E[A]})}('(6(E,C,D){E.BJ=E.BJ||6(){};a A,B,U,T,L=R,M=E(C),J=E(7),K=E("o"),H=7.B4,I=C.VBArray&&!C.XMLHttpRequest,F="createTouch"Z 7&&!("onmousemove"Z H)||/(iPhone|iPad|iPod)/D4.Df(navigator.userAgent),G="9"+ +(B$ Date),P=6(C,B,U){C=C||{};X(0 C=="3"||C.B9===S)C={5:C,t:!F};a T,J=P.BK,H=C.z=h.B9===S&&h||C.z;BX(a I Z J)C[I]===D&&(C[I]=J[I]);w E.C$({Bu:"yesFn",BR:"noFn",v:"closeFn",CD:"initFn",C2:"yesText",BG:"noText"},6(T,U){C[T]=C[T]!==D?C[T]:C[U]}),0 H=="3"&&(H=E(H)[R]),C.Be=H&&H[G+"z"]||C.Be||G+L,T=P.Bi[C.Be],H&&T?T.z(H).1().s():T?T.1().s():(F&&(C.t=!S),E.Dl(C.2)||(C.2=C.2?[C.2]:[]),B!==D&&(C.Bu=B),U!==D&&(C.BR=U),C.Bu&&C.2.Dz({Cj:C.C2,BA:C.Bu,s:!R}),C.BR&&C.2.Dz({Cj:C.BG,BA:C.BR}),P.BK.1=C.1,L++,P.Bi[C.Be]=A?A.CL(C):B$ P.BF.CL(C))};P.BF=P.Cm={Dp:"D5.S.D6",Cq:!S,CL:6(E){a D=h,B,U=E.Ck,T=U&&(I?{CA:"Dc/"+U+".CA"}:{Cx:"DQ(\'"+E.C0+"/C3/Dc/"+U+".CA\')"});w D.x=E,D.b=B=D.b||D.Dh(),B.i.BZ(E.Cw),B.v[E.BR===!S?"BE":"BB"](),B.Ck[R].p.BS=U?"":"Bx",B.iconBg.e(T||{CB:"Bx"}),B.CF.e("De",E.Bc?"CF-Bc":"n"),B.u.e("De",E.Cs?"Bv":"n"),B.5.e("CZ",E.CZ),D[E.BB?"BB":"BE"](!R),D.2(E.2).u(E.u).5(E.5,!R).Cd(E.q,E.y).BL(E.BL),E.z?D.z(E.z):D.8(E.j,E.c),D.1().s(),E.B1&&D.B1(),D.DO(),D.DB(),A=k,E.CD&&E.CD.Bz(D,C),D},5:6(E){a C,A,B,U,T=h,L=T.b,M=L.i[R],J=M._,K=M.$,H=BT(M.p.j),I=BT(M.p.c),F=M.p.q,G=L.5,N=G[R];w T.Bg&&T.Bg(),M.p.q="n",E===D?N:(0 E=="3"?G.o(E):E&&E.B9===S&&(U=E.p.BS,C=E.previousSibling,A=E.DL,B=E.BV,T.Bg=6(){C&&C.BV?C.BV.CM(E,C.DL):A&&A.BV?A.BV.CM(E,A):B&&B.Bh(E),E.p.BS=U,T.Bg=k},G.o(""),N.Bh(E),E.p.BS="block"),BP[S]||(T.x.z?T.z(T.x.z):(J=M._-J,K=M.$-K,H-=J/BM,I-=K/BM,M.p.j=m.f(H,R)+"W",M.p.c=m.f(I,R)+"W"),F&&F!=="n"&&(M.p.q=M._+"W"),T.B0()),T.BU(),T.D0(N),T)},u:6(C){a B=h.b,T=B.i,A=B.u,U="aui_state_noTitle";w C===D?A[R]:(C===!S?(A.BE().o(""),T.BZ(U)):(A.BB().o(C||""),T.Bs(U)),h)},8:6(E,C){a A=h,B=A.x,U=A.b.i[R],T=I?!S:B.t,L=I&&A.x.t,K=J.BQ(),H=J.Bf(),F=T?R:K,G=T?R:H,BN=M.q(),Q=M.y(),P=U._,O=U.$,N=U.p;X(E||E===R)A.Cb=E.CN().Bt("%")!==-S?E:k,E=A.B2(E,BN-P),0 E=="Bl"?(E=L?E+=K:E+F,N.j=m.f(E,F)+"W"):0 E=="3"&&(N.j=E);X(C||C===R)A.Ca=C.CN().Bt("%")!==-S?C:k,C=A.B2(C,Q-O),0 C=="Bl"?(C=L?C+=H:C+G,N.c=m.f(C,G)+"W"):0 C=="3"&&(N.c=C);w E!==D&&C!==D&&(A.Bw=k,A.B0()),A},Cd:6(E,C){a D,A,B,U,T=h,K=T.x,I=T.b,J=I.i,G=I.Da,H=J[R].p,F=G[R].p;w E&&(T.DR=E.CN().Bt("%")!==-S?E:k,D=M.q()-J[R]._+G[R]._,B=T.B2(E,D),E=B,0 E=="Bl"?(H.q="n",F.q=m.f(T.x.Cv,E)+"W",H.q=J[R]._+"W"):0 E=="3"&&(F.q=E,E==="n"&&J.e("q","n"))),C&&(T.Dq=C.CN().Bt("%")!==-S?C:k,A=M.y()-J[R].$+G[R].$,U=T.B2(C,A),C=U,0 C=="Bl"?F.y=m.f(T.x.C_,C)+"W":0 C=="3"&&(F.y=C)),T.BU(),T},z:6(C){a F,A=h,B=A.x;X(0 C=="3"||C&&C.B9===S)F=E(C),C=F[R];X(!C||!C._&&!C.$)w A.8(A.Cb,A.Ca);a U=G+"z",T=M.q(),O=M.y(),N=J.BQ(),L=J.Bf(),K=F.offset(),CT=C._,DD=C.$,Bn=I?!S:B.t,Bo=Bn?K.j-N:K.j,B8=Bn?K.c-L:K.c,BN=A.b.i[R],Q=BN.p,P=BN._,B_=BN.$,BO=Bo-(P-CT)/BM,Bp=B8+DD,D=Bn?R:N,H=Bn?R:L;w BO=BO<D?Bo:BO+P>T&&Bo-P>D?Bo-P+CT:BO,Bp=Bp+B_>O+H&&B8-B_>H?B8-B_:Bp,Q.j=BO+"W",Q.c=Bp+"W",A.Bw&&A.Bw.Dd(U),A.Bw=C,C[U]=B.Be,A.B0(),A},2:6(){a C=h,A=BP,B=C.b,U=B.DF,T=U[R],H="aui_state_highlight",I=C.CE=C.CE||{},F=E.Dl(A[R])?A[R]:[].slice.Bz(A);w A[R]===D?T:(E.C$(F,6(D,A){a B=A.Cj,U=!I[B],F=U?7.BW("2"):I[B].Db;I[B]||(I[B]={}),A.BA&&(I[B].BA=A.BA),A.Br&&(F.Br=A.Br),A.s&&(C.Bq&&C.Bq.Bs(H),C.Bq=E(F).BZ(H),C.s()),F.setAttribute("Du","2"),F[G+"BA"]=B,F.Cl=!!A.Cl,U&&(F.CQ=B,I[B].Db=F,T.Bh(F))}),U[R].p.BS=F.BH?"":"Bx",C.BU(),C)},BB:6(){w h.b.i.BB(),!BP[R]&&h.BD&&h.BD.BB(),h},BE:6(){w h.b.i.BE(),!BP[R]&&h.BD&&h.BD.BE(),h},v:6(){X(h.Cq)w h;a E=h,D=E.b,B=D.i,U=P.Bi,T=E.x.v,F=E.x.z;E.BL();X(0 T=="6"&&T.Bz(E,C)===!S)w E;E.Di(),E.Bg&&E.Bg(),B[R].Br=B[R].p.BY="",D.u.o(""),D.5.o(""),D.DF.o(""),P.s===E&&(P.s=k),F&&F.Dd(G+"z"),Dr U[E.x.Be],E.DG(),E.BE(!R).B5();BX(a H Z E)E.hasOwnProperty(H)&&H!=="b"&&Dr E[H];w A?B.Dm():A=E,E},BL:6(B){a T=h,A=T.x.BG,U=T.DM;w U&&DS(U),B&&(T.DM=CV(6(){T.Bb(A)},1000*B)),T},s:6(){CS{a T=h.Bq&&h.Bq[R]||h.b.v[R];T&&T.s()}Ch(U){}w h},1:6(){a C=h,A=C.b,B=A.i,U=P.s,T=P.BK.1++;w B.e("1",T),C.By&&C.By.e("1",T-S),U&&U.b.i.Bs("DY"),P.s=C,B.BZ("DY"),C},B1:6(){X(h.B7)w h;a C=h,D=P.BK.1-S,A=C.b.i,B=C.x,U=J.q(),T=J.y(),L=C.BD||E(7.CX.Bh(7.BW("d"))),M=C.By||E(L[R].Bh(7.BW("d"))),K="(7).B4",H=F?"q:"+U+"W;y:"+T+"W":"q:Ba%;y:Ba%",G=I?"8:Bm;j:CC("+K+".BQ);c:CC("+K+".Bf);q:CC("+K+".clientWidth);y:CC("+K+".clientHeight)":"";w C.1(),A.BZ("DJ"),L[R].p.BY=H+";8:t;CW-Cc:"+D+";c:R;j:R;overflow:hidden;"+G,M[R].p.BY="y:Ba%;CB:"+B.CB+";CO:Ci(4=R);4:R",I&&M.o("<Cf BI=\\"Cg:Cr\\" p=\\"q:Ba%;y:Ba%;8:Bm;c:R;j:R;CW-Cc:-S;CO:Ci(4=R)\\"></Cf>"),M.Dx(),M.l("Cp",6(){C.Cz()}).l("Ce",6(){C.Bb(C.x.BG)}),B.B3===R?M.e({4:B.4}):M.C4({4:B.4},B.B3),C.BD=L,C.By=M,C.B7=!R,C},Di:6(){a D=h,B=D.BD,C=D.By;X(!D.B7)w D;a T=B[R].p,U=6(){I&&(T.Bd("q"),T.Bd("y"),T.Bd("j"),T.Bd("c")),T.BY="BS:Bx",A&&B.Dm()};w C.Dx().BC(),D.b.i.Bs("DJ"),D.x.B3?C.C4({4:R},D.x.B3,U):U(),D.B7=!S,D},Dh:6(){a C=7.BW("d"),D=7.CX;C.p.BY="8:Bm;j:R;c:R",C.CQ=P.D1,D.CM(C,D.firstChild);a A,B=R,U={i:E(C)},T=C.B6("*"),F=T.BH;BX(;B<F;B++)A=T[B].Br.CR("aui_")[S],A&&(U[A]=E(T[B]));w U},B2:6(A,U){X(!A&&A!==R||0 A=="Bl")w A;a T=A.BH-S;w A.CI("W")===T?A=BT(A):A.CI("%")===T&&(A=BT(U*A.CR("%")[R]/Ba)),A},DB:I?6(){a E=R,C,D,A,B,U=P.BK.C0+"/C3/",T=h.b.i[R].B6("*");BX(;E<T.BH;E++)C=T[E],D=C.currentStyle.CA,D&&(A=U+D,B=C.runtimeStyle,B.Cx="Bx",B.CO="progid:DXImageTransform.Microsoft.AlphaImageLoader(BI=\'"+A+"\',sizingMethod=\'crop\')")}:E.BJ,BU:I?6(){a D=h.b.i,B=D[R],C=G+"iframeMask",T=D[C],A=B._,U=B.$;A+="W",U+="W",T?(T.p.q=A,T.p.y=U):(T=B.Bh(7.BW("Cf")),D[C]=T,T.BI="Cg:Cr",T.p.BY="8:Bm;CW-Cc:-S;j:R;c:R;CO:Ci(4=R);q:"+A+";y:"+U)}:E.BJ,D0:6(E){a C,D=R,A=R,B=E.B6("DP"),U=B.BH,T=[];BX(;D<U;D++)B[D].Du==="text/C1"&&(T[A]=B[D].CQ,A++);T.BH&&(T=T.join(""),C=B$ Function(T),C.Bz(h))},B0:6(){h[h.x.t?"DV":"B5"]()},DV:6(){w I&&E(6(){a U="Dg";K.e(U)!=="t"&&E("CX").e(U)!=="t"&&K.e({zoom:S,Cx:"DQ(Cg:Cr)",Dg:"t"})}),6(){a E=h.b.i,C=E[R].p;X(I){a D=BT(E.e("j")),A=BT(E.e("c")),B=J.BQ(),U=J.Bf(),T="(7.B4)";h.B5(),C.DX("j","C9("+T+".BQ + "+(D-B)+") + \\"W\\""),C.DX("c","C9("+T+".Bf + "+(A-U)+") + \\"W\\"")}C8 C.8="t"}}(),B5:6(){a U=h.b.i[R].p;I&&(U.Bd("j"),U.Bd("c")),U.8="Bm"},Bb:6(A){a T=h,U=T.CE[A]&&T.CE[A].BA;w 0 U!="6"||U.Bz(T,C)!==!S?T.v():T},Cz:6(E){a C,D=h,A=D.DW||M.q()*M.y(),B=D.Bw,U=D.DR,T=D.Dq,G=D.Cb,F=D.Ca;X(E){C=D.DW=M.q()*M.y();X(A===C)w}(U||T)&&D.Cd(U,T),B?D.z(B):(G||F)&&D.8(G,F)},DO:6(){a D,B=h,T=B.x,A="CollectGarbage"Z C,U=B.b;B.Ct=6(){D&&DS(D),D=CV(6(){B.Cz(A)},40)},M.l("Bc",B.Ct),U.i.l("Cp",6(D){a C=D.CP,A;X(C.Cl)w!S;X(C===U.v[R])w B.Bb(T.BG),!S;A=C[G+"BA"],A&&B.Bb(A),B.BU()}).l("DN",6(){B.1()})},DG:6(){a T=h,U=T.b;U.i.BC(),M.BC("Bc",T.Ct)}},P.BF.CL.Cm=P.BF,E.BF.C1=E.BF.9=6(){a U=BP;w h[h.Dv?"Dv":"l"]("Cp",6(){w P.Dt(h,U),!S}),h},P.s=k,P.get=6(U){w U===D?P.Bi:P.Bi[U]},P.Bi={},J.l("keydown",6(D){a B=D.CP,C=B.nodeName,T=/^INPUT|TEXTAREA$/,A=P.s,U=D.keyCode;X(!A||!A.x.DZ||T.Df(C))w;U===27&&A.Bb(A.x.BG)}),T=C._artDialog_path||6(A,U,T){BX(U Z A)A[U].BI&&A[U].BI.Bt("9")!==-S&&(T=A[U]);w B=T||A[A.BH-S],T=B.BI.replace(/\\\\/D3,"/"),T.CI("/")<R?".":T.substring(R,T.CI("/"))}(7.B6("DP")),U=B.BI.CR("Cw=")[S];X(U){a O=7.BW("link");O.rel="stylesheet",O.C7=T+"/C3/"+U+".e?"+P.BF.Dp,B.BV.CM(O,B)}M.l("load",6(){CV(6(){X(L)w;P({j:"-9999em",BL:D8,t:!S,B1:!S,s:!S})},150)});CS{7.execCommand("BackgroundImageCache",!S,!R)}Ch(N){}P.D1="<d r=\\"aui_outer\\"><CJ r=\\"aui_border\\"><CG><Y><V r=\\"aui_nw\\"></V><V r=\\"aui_n\\"></V><V r=\\"aui_ne\\"></V></Y><Y><V r=\\"aui_w\\"></V><V r=\\"aui_c\\"><d r=\\"aui_inner\\"><CJ r=\\"aui_dialog\\"><CG><Y><V Dw=\\"BM\\" r=\\"aui_header\\"><d r=\\"aui_titleBar\\"><d r=\\"aui_title\\"></d><DE r=\\"aui_close\\" C7=\\"javascript:/*9*/;\\">\\xd7</DE></d></V></Y><Y><V r=\\"aui_icon\\"><d r=\\"aui_iconBg\\"></d></V><V r=\\"aui_main\\"><d r=\\"aui_content\\"></d></V></Y><Y><V Dw=\\"BM\\" r=\\"aui_footer\\"><d r=\\"aui_buttons\\"></d></V></Y></CG></CJ></d></V><V r=\\"aui_e\\"></V></Y><Y><V r=\\"aui_sw\\"></V><V r=\\"aui_s\\"></V><V r=\\"aui_se\\"></V></Y></CG></CJ></d>",P.BK={5:"<d r=\\"aui_loading\\"><DT>loading..</DT></d>",u:"\\D2\\u606f",2:k,Bu:k,BR:k,CD:k,v:k,C2:"\\u786e\\u5b9a",BG:"\\u53d6\\D2",q:"n",y:"n",Cv:96,C_:32,CZ:"20px 25px",Cw:"",Ck:k,BL:k,DZ:!R,s:!R,BB:!R,z:k,C0:T,B1:!S,CB:"#000",4:R.D7,B3:300,t:!S,j:"50%",c:"38.BM%",1:1987,Bc:!R,Cs:!R},C.9=E.C1=E.9=P})(h.CH||h.CK&&(h.CH=CK),h),6(E){a C,D,A=E(Cy),B=E(7),U=7.B4,T=!("Cv"Z U.p),F="onlosecapture"Z U,G="DA"Z U;9.Cu=6(){a T=h,U=6(U){a A=T[U];T[U]=6(){w A.Dt(T,BP)}};U("Co"),U("Bv"),U("g")},9.Cu.Cm={CY:E.BJ,Co:6(U){w B.l("DC",h.Bv).l("DU",h.g),h.Dj=U.Bk,h.Dk=U.Bj,h.CY(U.Bk,U.Bj),!S},Cn:E.BJ,Bv:6(U){w h._mClientX=U.Bk,h._mClientY=U.Bj,h.Cn(U.Bk-h.Dj,U.Bj-h.Dk),!S},CU:E.BJ,g:6(U){w B.BC("DC",h.Bv).BC("DU",h.g),h.CU(U.Bk,U.Bj),!S}},D=6(E){a D,U,L,M,J,K,H=9.s,I=H.b,Q=I.i,P=I.u,O=I.Da,N="DI"Z Cy?6(){Cy.DI().removeAllRanges()}:6(){CS{7.selection.empty()}Ch(U){}};C.CY=6(E,D){K?(U=O[R]._,L=O[R].$):(M=Q[R].offsetLeft,J=Q[R].offsetTop),B.l("Ce",C.g),!T&&F?P.l("DH",C.g):A.l("Dy",C.g),G&&P[R].DA(),Q.BZ("DK"),H.s()},C.Cn=6(E,C){X(K){a A=Q[R].p,B=O[R].p,T=E+U,G=C+L;A.q="n",B.q=m.f(R,T)+"W",A.q=Q[R]._+"W",B.y=m.f(R,G)+"W"}C8{a B=Q[R].p,I=m.f(D.Dn,m.Ds(D.C6,E+M)),F=m.f(D.Do,m.Ds(D.C5,C+J));B.j=I+"W",B.c=F+"W"}N(),H.BU()},C.CU=6(D,U){B.BC("Ce",C.g),!T&&F?P.BC("DH",C.g):A.BC("Dy",C.g),G&&P[R].releaseCapture(),T&&!H.Cq&&H.B0(),Q.Bs("DK")},K=E.CP===I.CF[R]?!R:!S,D=6(){a E,C,D=H.b.i[R],U=D.p.8==="t",T=D._,J=D.$,K=A.q(),G=A.y(),I=U?R:B.BQ(),F=U?R:B.Bf(),E=K-T+I;w C=G-J+F,{Dn:I,Do:F,C6:E,C5:C}}(),C.Co(E)},B.l("DN",6(E){a A=9.s;X(!A)w;a B=E.CP,U=A.x,T=A.b;X(U.Cs!==!S&&B===T.u[R]||U.Bc!==!S&&B===T.CF[R])w C=C||B$ 9.Cu,D(E),!S})}(h.CH||h.CK&&(h.CH=CK))','0|1|_|$|td|px|if|tr|in|var|DOM|top|div|css|max|end|this|wrap|left|null|bind|Math|auto|html|style|width|class|focus|fixed|title|close|return|config|height|follow|typeof|zIndex|button|string|opacity|content|function|document|position|artDialog|offsetWidth|offsetHeight|callback|show|unbind|_lockMaskWrap|hide|fn|cancelVal|length|src|noop|defaults|time|2|R|Y|arguments|scrollLeft|cancel|display|parseInt|_ie6SelectFix|parentNode|createElement|for|cssText|addClass|100|_click|resize|removeExpression|id|scrollTop|_elemBack|appendChild|list|clientY|clientX|number|absolute|U|T|X|_focus|className|removeClass|indexOf|ok|move|_follow|none|_lockMask|call|_autoPositionType|lock|_toNumber|duration|documentElement|_setAbsolute|getElementsByTagName|_lock|S|nodeType|Z|new|png|background|expression|init|_listeners|se|tbody|art|lastIndexOf|table|jQuery|_init|insertBefore|toString|filter|target|innerHTML|split|try|W|onend|setTimeout|z|body|onstart|padding|_top|_left|index|size|dblclick|iframe|about|catch|alpha|name|icon|disabled|prototype|onmove|start|click|closed|blank|drag|_winResize|dragEvent|minWidth|skin|backgroundImage|window|_reset|path|dialog|okVal|skins|animate|maxY|maxX|href|else|eval|minHeight|each|setCapture|_ie6PngFix|mousemove|V|a|buttons|_removeEvent|losecapture|getSelection|aui_state_lock|aui_state_drag|nextSibling|_timer|mousedown|_addEvent|script|url|_width|clearTimeout|span|mouseup|_setFixed|_winSize|setExpression|aui_state_focus|esc|main|elem|icons|removeAttribute|cursor|test|backgroundAttachment|_getDOM|unlock|_sClientX|_sClientY|isArray|remove|minX|minY|version|_height|delete|min|apply|type|thirddata|colspan|stop|blur|push|_runScript|_templates|u6d88|g|i|4|5|7|9'.split('|'),236,252,{},{}));
/*!
 * artDialog iframeTools
 * Date: 2011-12-08 1:32
 * http://code.google.com/p/artdialog/
 * (c) 2009-2011 TangBin, http://www.planeArt.cn
 *
 * This is licensed under the GNU LGPL, version 2.1 or later.
 * For details, see: http://creativecommons.org/licenses/LGPL/2.1/
 */
eval(function(B,D,A,G,E,F){function C(A){return A<62?String.fromCharCode(A+=A<26?65:A<52?71:-4):A<63?'_':A<64?'$':C(A>>6)+C(A&63)}while(A>0)E[C(G--)]=D[--A];return B.replace(/[\w\$]+/g,function(A){return E[A]==F[A]?A:E[A]})}('(6(E,C,D,A){c B,X,W,J="@_.DATA",K="@_.OPEN",H="@_.OPENER",I=C.k=C.k||"@_.WINNAME"+(Bd Bo).Be(),F=C.VBArray&&!C.XMLHttpRequest;E(6(){!C.Bu&&7.BY==="B0"&&Br("9 Error: 7.BY === \\"B0\\"")});c G=D.d=6(){c W=C,X=6(A){f{c W=C[A].7;W.BE}u(X){v!V}v C[A].9&&W.BE("frameset").length===U};v X("d")?W=C.d:X("BB")&&(W=C.BB),W}();D.BB=G,B=G.9,W=6(){v B.BW.w},D.m=6(C,B){c W=D.d,X=W[J]||{};W[J]=X;b(B!==A)X[C]=B;else v X[C];v X},D.BQ=6(W){c X=D.d[J];X&&X[W]&&1 X[W]},D.through=X=6(){c X=B.BR(i,BJ);v G!==C&&(D.B4[X.0.Z]=X),X},G!==C&&E(C).BN("unload",6(){c A=D.B4,W;BO(c X BS A)A[X]&&(W=A[X].0,W&&(W.duration=U),A[X].s(),1 A[X])}),D.p=6(B,O,BZ){O=O||{};c N,L,M,Bc,T,S,R,Q,BF,P=D.d,Ba="8:BD;n:-Bb;d:-Bb;Bp:o U;Bf:transparent",BI="r:g%;x:g%;Bp:o U";b(BZ===!V){c BH=(Bd Bo).Be(),BG=B.replace(/([?&])W=[^&]*/,"$1_="+BH);B=BG+(BG===B?(/\\?/.test(B)?"&":"?")+"W="+BH:"")}c G=6(){c B,C,W=L.2.B2(".aui_loading"),A=N.0;M.addClass("Bi"),W&&W.hide();f{Q=T.$,R=E(Q.7),BF=Q.7.Bg}u(X){T.q.5=BI,A.z?N.z(A.z):N.8(A.n,A.d),O.j&&O.j.l(N,Q,P),O.j=By;v}B=A.r==="Bt"?R.r()+(F?U:parseInt(E(BF).Bv("marginLeft"))):A.r,C=A.x==="Bt"?R.x():A.x,setTimeout(6(){T.q.5=BI},U),N.Bk(B,C),A.z?N.z(A.z):N.8(A.n,A.d),O.j&&O.j.l(N,Q,P),O.j=By},I={w:W(),j:6(){N=i,L=N.h,Bc=L.BM,M=L.2,T=N.BK=P.7.Bn("BK"),T.Bx=B,T.k="Open"+N.0.Z,T.q.5=Ba,T.BX("frameborder",U,U),T.BX("allowTransparency",!U),S=E(T),N.2().B3(T),Q=T.$;f{Q.k=T.k,D.m(T.k+K,N),D.m(T.k+H,C)}u(X){}S.BN("BC",G)},s:6(){S.Bv("4","o").unbind("BC",G);b(O.s&&O.s.l(i,T.$,P)===!V)v!V;M.removeClass("Bi"),S[U].Bx="about:blank",S.remove();f{D.BQ(T.k+K),D.BQ(T.k+H)}u(X){}}};Bq O.Y=="6"&&(I.Y=6(){v O.Y.l(N,T.$,P)}),Bq O.y=="6"&&(I.y=6(){v O.y.l(N,T.$,P)}),1 O.2;BO(c J BS O)I[J]===A&&(I[J]=O[J]);v X(I)},D.p.Bw=D.m(I+K),D.BT=D.m(I+H)||C,D.p.origin=D.BT,D.s=6(){c X=D.m(I+K);v X&&X.s(),!V},G!=C&&E(7).BN("mousedown",6(){c X=D.p.Bw;X&&X.w()}),D.BC=6(C,D,B){B=B||!V;c G=D||{},H={w:W(),j:6(A){c W=i,X=W.0;E.ajax({url:C,success:6(X){W.2(X),G.j&&G.j.l(W,A)},cache:B})}};1 D.2;BO(c F BS G)H[F]===A&&(H[F]=G[F]);v X(H)},D.Br=6(B,A){v X({Z:"Alert",w:W(),BL:"warning",t:!U,BA:!U,2:B,Y:!U,s:A})},D.confirm=6(C,A,B){v X({Z:"Confirm",w:W(),BL:"Bm",t:!U,BA:!U,3:U.V,2:C,Y:6(X){v A.l(i,X)},y:6(X){v B&&B.l(i,X)}})},D.prompt=6(D,B,C){C=C||"";c A;v X({Z:"Prompt",w:W(),BL:"Bm",t:!U,BA:!U,3:U.V,2:["<e q=\\"margin-bottom:5px;font-Bk:12px\\">",D,"</e>","<e>","<Bl B1=\\"",C,"\\" q=\\"r:18em;Bh:6px 4px\\" />","</e>"].join(""),j:6(){A=i.h.2.B2("Bl")[U],A.select(),A.BP()},Y:6(X){v B&&B.l(i,A.B1,X)},y:!U})},D.tips=6(B,A){v X({Z:"Tips",w:W(),title:!V,y:!V,t:!U,BA:!V}).2("<e q=\\"Bh: U 1em;\\">"+B+"</e>").time(A||V.B6)},E(6(){c A=D.dragEvent;b(!A)v;c B=E(C),X=E(7),W=F?"BD":"t",H=A.prototype,I=7.Bn("e"),G=I.q;G.5="4:o;8:"+W+";n:U;d:U;r:g%;x:g%;"+"cursor:move;filter:alpha(3=U);3:U;Bf:#FFF",7.Bg.B3(I),H.Bj=H.Bs,H.BV=H.Bz,H.Bs=6(){c E=D.BP.h,C=E.BM[U],A=E.2[U].BE("BK")[U];H.Bj.BR(i,BJ),G.4="block",G.w=D.BW.w+B5,W==="BD"&&(G.r=B.r()+"a",G.x=B.x()+"a",G.n=X.scrollLeft()+"a",G.d=X.scrollTop()+"a"),A&&C.offsetWidth*C.offsetHeight>307200&&(C.q.BU="hidden")},H.Bz=6(){c X=D.BP;H.BV.BR(i,BJ),G.4="o",X&&(X.h.BM[U].q.BU="visible")}})})(i.art||i.Bu,i,i.9)','P|R|T|U|V|W|0|1|_|$|ok|id|px|if|var|top|div|try|100|DOM|this|init|name|call|data|left|none|open|style|width|close|fixed|catch|return|zIndex|height|cancel|follow|config|delete|content|opacity|display|cssText|function|document|position|artDialog|ARTDIALOG|contentWindow|lock|parent|load|absolute|getElementsByTagName|S|Y|Z|a|arguments|iframe|icon|main|bind|for|focus|removeData|apply|in|opener|visibility|_end|defaults|setAttribute|compatMode|O|Q|9999em|X|new|getTime|background|body|padding|aui_state_full|_start|size|input|question|createElement|Date|border|typeof|alert|start|auto|jQuery|css|api|src|null|end|BackCompat|value|find|appendChild|list|3|5'.split('|'),109,122,{},{}));
//核心脚本
//author liangyu(2016-5-5 17:52:41)
//update

var Deposit={}
Deposit.Core={
    //判断用户是否开通存管通账户
    checkUserIsDeposit:function(_link,_type,_class,_money,callback) {
        var _that=this;
        var obj={};
        obj.url="/xiamen/deposit/isDeposit";
        obj.type="post";
        obj.params={"type":_type};
        obj.beforeSend=function(data){
            $(_class).addClass("disable");
        };
        obj.success=function(data){
            $(_class).removeClass("disable");
            var _status=data.status.toString();
            var _data=data.data;
            if(_status == "0"){//请求成功
                var isDeposit = _data.isDeposit,//是否开通存管账号 0：未开通，1：已开通
                    isUnBindCard = _data.isUnBindCard,//是否绑定银行卡 0：已绑卡，1：未绑卡
                    isActivate = _data.isActivate,//{0:未激活；1:已激活}
                    priorityAutoTenderDialog = _data.priorityAutoTenderDialog,//0:优选计划自动投标未开启，1：优选计划自动投标开启
                    // isAllowMiddleUserHandle = data.data.isAllowMiddleUserHandle,//是否居间人用户，如果是居间人则只允许居间人充值、提现 0：不允许，1：允许
                    autoTenderDialog = _data.autoTenderDialog,//是否提示失败 0：不提示失败，1：提示
                    userRiskTestFlag=_data.userRiskTestFlag,//是否测评 0:表示没有测评，1：表示已经测评
                    riskSwitch=_data.riskSwitch;//测评开关状态  0关闭，不用进行测评   1开启，需要进行测评
                if(isDeposit == 0){//未开户
                    WC.Core.Dialog({
                        "content":"您尚未开通厦门银行资金存管账户，请先开通。",
                        "btnValue":"立即开通",
                        "btn2Value":"暂不开通",
                        "icon":'error',
                        "btnFn":function(){
                            Deposit.Core.registerDeposit();//开通存管通账户
                        }
                    });
                    return;
                }else{//已开户
                    if(isActivate == 0){//未激活
                        WC.Core.Dialog({
                            "content":"您的账户已升级为厦门银行资金存管账户，请您激活账户。",
                            // "close":true,
                            "btnValue":"确定",
                            "icon":'error',
                            "btnFn":function(){
                                Deposit.Core.activeDeposit();//激活存管通账户
                            }
                        });
                        return;
                    }
                    // 优选进来的已激活的做预授权处理
                    if(_type=="buyPriority"){
                        if(priorityAutoTenderDialog==0){//未开启授权
                            _that.goPreLicensing();
                            return;
                        }
                    }
                    if(isUnBindCard == 1&&(_type=="recharge"||_type=="cash")){//未绑卡，并且是充值或体现流程，进行是否绑卡判断
                        WC.Core.Dialog({
                            "content":"您尚未绑定银行卡，请立即绑定",
                            "btnValue":"立即绑卡",
                            "btn2Value":"暂不绑定",
                            "icon":'error',
                            "btnFn":function(){
                                Deposit.Core.bindBankcard();//重新绑定银行卡
                            }
                        });
                        return;
                    }
                }
                if(_type=="buy" || _type=="buyPriority" || _type=="buyTransfer"){//开启授权
                    // 判断是否开启测评开关
                    if(riskSwitch==0){//开关关闭
                        _that.checkTender(_money);
                    }else{//开关开启
                        //判断用户是否风险测评
                        if(userRiskTestFlag==0){//没有测评
                            WC.Core.Dialog({
                                "content":"请先完成风险测评",
                                "btnValue":"去测评",
                                "btn2Value":"取消",
                                "icon":'error',
                                "btnFn":function(){
                                    window.location.href="/user/riskTest";//跳转到风险测评页面
                                }
                            });
                            return;
                        }else{//已测评，用户待收本金超过其风险等级限额，给出提示
                            _that.checkTender(_money);
                        }
                    }
                }else{
                    window.location.href=_link;//跳转至相应页面链接
                }
                if(callback&&typeof callback=="function"){
                    callback(isDeposit,isUnBindCard,autoTenderDialog);
                }
            }else if(_status == "300"){//登录超时
                window.location.href="/user/to_login";
            }else if(_status=="314"){//存管停服返回说明
                WC.Core.Dialog({
                    "content":data.data.announcement,
                    "type":"cunguan",
                    "close":true,
                    "cgTitle":data.data.title
                });
                return;
            }else{//请求失败
                WC.Core.Dialog({
                    "content":data.message,
                    "icon":"error"
                });
            }
        };
        obj.error=function(){
            $(_class).removeClass("disable");
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    },
    // 已测评，用户待收本金超过其风险等级限额，给出提示
    checkTender:function(money){
        var obj={};
        obj.url="/view/tender/tender_over_risk_set";
        obj.params={"money":money};//出借金额
        obj.type="get";
        obj.success=function(data){
            var _status=data.status.toString();
            var _data=data.data;
            if(_status == "300"){//登录超时
                window.location.href="/user/to_login";
            }else if(_status=="200"){//请求成功直接跳转
                $("form[name=totender]").submit();
            }else if(_status=="202"){//请求失败
                WC.Core.Dialog({
                    "content":data.message,
                    "btnValue":"确定",
                    "icon":'error',
                    "btnFn":function(){
                        WC.Core.DialogClose();
                    }
                });
            }
        };
        obj.error=function(){
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    },
    // 预授权接口
    goPreLicensing:function(){
        var obj={};
        obj.url="/xiamen/deposit/tender_authorization";
        obj.params={"userDevice":"PC","priority_status":"1"};
        obj.type="post";
        obj.success=function(data){
            var _status=data.status.toString();
            var _data=data.data;
            if(_status=="0"){//成功
                var _url = _data.url;//跳转链接
                var _param=_data.param;//参数
                WC.Core.postRequest(_url,_param);//使用post方式请求跳转存管通url
            }else if(_status == "300"){//登录超时
                window.location.href="/user/to_login";
            }else{//请求失败
                WC.Core.Dialog({"content":data.message,"icon":"error"});
            }
        };
        obj.error=function(){
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    },
    //开通存管通账户
    registerDeposit:function(){
        var obj={};
        obj.url="/xiamen/deposit/register";
        obj.type="post";
        obj.params={
            "realName":"",//用户实名信息
            "idCardNo":"",//身份证号
            "mobile":"",//银行预留手机号
            "bankcardNo":"",//银行卡号
            "checkType":"LIMIT",//目前统一为：LIMIT
            "userDevice":"PC"//用户设备（PC：PC 端，MOBILE：移动端）
        };
        obj.success=function(data){
            var _status=data.status.toString();
            var _data=data.data;
            if(_status == "0"){//请求成功
                var _url = _data.url;//跳转链接
                var _param=_data.param;//参数
                WC.Core.postRequest(_url,_param);//使用post方式请求跳转存管通url
            }else if(_status == "300"){//登录超时
                window.location.href="/user/to_login";
            }else{//请求失败
                WC.Core.Dialog({"content":data.message,"icon":"error"});
            }
        };
        obj.error=function(){
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    },
    //激活存管通账户
    activeDeposit:function(){
        var obj={};
        obj.url="/xiamen/deposit/activate_account";
        obj.type="post";
        obj.params={"userDevice":"PC"};//用户设备（PC：PC 端，MOBILE：移动端）
        obj.success=function(data){
            var _status=data.status.toString();
            var _data=data.data;
            if(_status=="0"){//请求成功
                var _url = _data.url;//跳转链接
                var _param=_data.param;//参数
                WC.Core.postRequest(_url,_param);//使用post方式请求跳转存管通url
            }else if(_status=="300"){//登录超时
                window.location.href="/user/to_login";
            }else{//请求失败
                WC.Core.Dialog({"content":data.message,"icon":"error"});
            }
        };
        obj.error=function(){
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    },
    //解绑银行卡方法（用户为开通存管通账户，进行解绑银行卡）
    unbindBankCard:function(){
        var obj={};
        obj.url="/xiamen/deposit/unbindBankCard";
        obj.type="post";
        obj.params={"userDevice":"PC"};//用户设备（PC：PC 端，MOBILE：移动端）
        obj.success=function(data){
            var _status=data.status.toString();
            if(_status == "0"){//请求成功
                var _url = data.data.url;//跳转链接
                var _param=data.data.param;//参数
                WC.Core.postRequest(_url,_param);//使用post方式请求跳转存管通url
            }else if(_status == "300"){//登录超时
                window.location.href="/user/to_login";
            }else{//请求失败
                WC.Core.Dialog({"content":data.message,"icon":"error"});
            }
        };
        obj.error=function(){
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    },
    //重新绑定银行卡方法（用户为开通存管通账户，但解绑了银行卡）
    bindBankcard:function(){
        var obj={};
        obj.url="/xiamen/deposit/personal_bind_bankcard";
        obj.type="post";
        obj.params={
            "mobile":"",//银行预留手机号
            "bankcardNo":"",//银行卡号
            "checkType":"LIMIT",//目前统一为：LIMIT
            "userDevice":"PC"//用户设备（PC：PC 端，MOBILE：移动端）
        };
        obj.success=function(data){
            var _status=data.status.toString();
            var _data=data.data;
            if(_status == "0"){//请求成功
                var _url = _data.url;//跳转链接
                var _param=_data.param;//参数
                WC.Core.postRequest(_url,_param);//使用post方式请求跳转存管通url
            }else if(_status == "300"){//登录超时
                window.location.href="/user/to_login";
            }else{//请求失败
                WC.Core.Dialog({"content":data.message,"icon":"error"});
            }
        };
        obj.error=function(){
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    },
    //修改交易密码方法
    resetPassword:function(){
        var obj={};
        obj.url="/xiamen/deposit/reset_password";
        obj.type="post";
        obj.params={"userDevice":"PC"};//用户设备（PC：PC 端，MOBILE：移动端）
        obj.success=function(data){
            var _status=data.status.toString();
            var _data=data.data;
            if(_status == "0"){//请求成功
                var _url = _data.url;//跳转链接
                var _param=_data.param;//参数
                WC.Core.postRequest(_url,_param);//使用post方式请求跳转存管通url
            }else if(_status == "300"){
                window.location.href="/user/to_login";
            }else{//请求失败
                WC.Core.Dialog({"content":data.message,"icon":"error"});
            }
        };
        obj.error=function(){
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    },
    //获取实名信息
    getRealname:function(){
        var obj={};
        obj.url="/xiamen/deposit/getRealname";
        obj.type="get";
        obj.params={};
        obj.success=function(data){
            var _status=data.status.toString();
            var _data=data.data;
            if(_status == "0"){//请求成功
                var authDate = _data.authDate,//实名时间
                    cardId = _data.cardId,//身份证号
                    realname = _data.realname,//真实姓名
                    sex = _data.sex;//性别
            }else if(_status == "300"){//登录超时
                window.location.href="/user/to_login";
            }else{//请求失败
                WC.Core.Dialog({"content":data.message,"icon":"error"});
            }
        };
        obj.error=function(){
            WC.Core.Dialog({"content":"网络异常，请稍后重试","icon":"error"});
        };
        WC.Core.ajax(obj);
    }
}
//核心脚本
//author shanghongliang(2015-3-3 09:26:41) version 1.0
//update vicshang(2017-07-31 18:22:30) version 2.0
// jQuery.support.cors = true;//低版本ie登陆时兼容性问题
var WC = {}
WC.Core = {
    //核心ajax
    ajax: function (obj) {
        if (obj.beforeSend && typeof obj.beforeSend === "function") {
            obj.beforeSend();
        }
        $.ajax({
            url: obj.url,
            type: obj.type || "post",
            data: obj.params,
            cache: obj.cache || false,
            xhrFields: {
                withCredentials: true
            },
            dataType: obj.dataType || "json",
            beforeSend: function () {

            },
            complete: function (XHR, TS) {
                if (obj.complete && typeof obj.complete === "function") {
                    obj.complete(XHR, TS);
                }
            },
            success: function (data) {
                if (obj.success && typeof obj.success === "function") {
                    obj.success(data);
                }
            },
            error: function () {
                if (obj.error && typeof obj.error === "function") {
                    obj.error();
                }
            }
        });
    },
    //弹框
    Dialog: function (opt) {
        WC.Core.DialogClose();
        //默认属性
        var def = {
            title: "提示",
            icon: 'ok',
            btnFn: null,
            btnValue: '确定',
            btn2Fn: null,
            btn2Value: '',
            content: '操作成功',
            close: false,
            desc: '',
            type: 'normal',
            cgTitle: ''
        };
        //参数覆盖默认属性
        $.extend(def, opt);
        var cls = 'status-right';
        if (def.icon != 'ok') {
            cls = "status-wrong";
        }
        if (def.type == "normal") {
            /*status-wrong  status-right*/
            var cavs = $('<div class="dialogMatte_new" id="popCanv"></div>');
            var box = $('<div class="dialogWrap_new" id="popBox"><div class="dialogTitle_new">' + def.title + '</div></div>');
            var content = $('<section class="dialogCont_new"><span class="' + cls + '"></span><p class="tipText_new">' + def.content + '</p><p class="desc">' + def.desc + '<p></section>');
            var btnRow = $('<div class="btn_row clearfix"></div>');
            var btn = $('<a href="javascript:void(0);" class="btnOkR">' + def.btnValue + '</a>');
            var btn2 = $('<a href="javascript:void(0);" class="btnOkL disabled">' + def.btn2Value + '</a>');
            if (typeof def.btnFn == 'function') {
                btn.click(function () {
                    def.btnFn();
                });
            } else {
                btn.click(function () {
                    WC.Core.DialogClose();
                });
            }
            if (def.btn2Value != "") {
                btnRow.append(btn2);
                if (typeof def.btn2Fn == 'function') {
                    btn2.click(function () {
                        def.btn2Fn();
                    });
                } else {
                    btn2.click(function () {
                        WC.Core.DialogClose();
                    });
                }
            }
            if (def.close) {
                var closeBtn = $('<div class="dialogClose_btn">×</div>');
                box.append(closeBtn);
            }
            box.append(content.append(btnRow.append(btn)));
        } else if (def.type == "cunguan") {
            var cavs = $('<div class="cunguandialogMatte" id="popCanv"></div>');
            var box = $('<div class="cunguandialogWrap" id="popBox"><div class="cgTitle"><p></p></div><h2 class="cunguandialogTitle">' + def.cgTitle + '</h2></div>');
            var contentCunguan = $('<section class="cunguandialogCont"><p class="cunguanDesc"><p></section><div class="bottomCg"><p class="cgLogo"></p><p class="contactCg"><span class="phongCg">400-000-0091</span> 联系小旺 (7X24小时接听) </p></div>');
            if (def.close) {
                var closeBtn = $('<div class="cunguandialogClose"></div>');
                box.append(closeBtn);
            }
            box.append(contentCunguan);
        }

        if (def.close) {
            //点击弹框关闭按钮，关闭弹框
            closeBtn.click(function () {
                WC.Core.DialogClose();
            });
        }
        $('body').append(cavs);
        $('body').append(box);
        $(".cunguanDesc").html(def.content);
        //点击遮罩层，关闭弹框
        $("#popCanv").on("click",function(){
            WC.Core.DialogClose();
        })
    },
    //post请求跳转url
    postRequest: function (url, param) {
        // var p = url.split('?');
        // var action = p[0];
        // var params = p[1].split('&');
        var params = param.split('&');
        var form = $(document.createElement('form')).attr('action', url).attr('method', 'post');
        $('body').append(form);
        for (var i in params) {
            var tmp = params[i].split('=');
            var key = tmp[0], value = tmp[1];
            if (key == "sign") {
                $(document.createElement('input')).attr('type', 'hidden').attr('name', key).attr('value', unescape(value)).appendTo(form);
            } else {
                $(document.createElement('input')).attr('type', 'hidden').attr('name', key).attr('value', value).appendTo(form);
            }
        }
        // console.log(form)
        $(form).submit();
        return false;
    },
    //获取浏览器url参数
    getQueryString: function (name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return "";
    },
    //关闭弹窗
    DialogClose: function () {
        $("#popCanv").remove();
        $("#popBox").remove();
    },
    setCookie: function (name, value) {
        var Days = 1;
        var exp = new Date();
        exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
        document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString()+ ";secure=true";
    },
    getCookie: function (name) {
        var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
        if (arr = document.cookie.match(reg)) {
            return unescape(arr[2]);
        } else {
            return null;
        }
    },
    delCookie: function (name) {
        var exp = new Date();
        exp.setTime(exp.getTime() - 1);
        var cval = WC.Core.getCookie(name);
        if (cval != null) {
            document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
        }
    }
}
WC.artDialog = function (opts) {
    var rootUrl = $("#ctx").val(), imgUrl;
    if (rootUrl) {
        imgUrl = rootUrl;
    }
    var def = {
        title: '提示',
        tip: '',
        msg: '操作成功',
        padding: 0,
        lock: true,
        height: '200px',
        width: '450px',
        linkOne: null,
        linkTwo: null,
        btn: null,
        explain: '',
        icon: "ok",
    }
    $.extend(true, def, opts);
    // var imgSrc = imgUrl+'/images/icons/layer_ok.png';
    var imgSrc = imgUrl + '/img/icons/layer_ok.png';
    switch (def.icon) {
        case "error":
            // imgSrc = imgUrl+'/images/icons/layer_wrong.png';
            imgSrc = imgUrl + '/img/icons/layer_wrong.png';
            break;
    }
    var content = '<div class="layer"><table class="layerTable"><tr><td valign="top" class="icon_tu"><img src="' + imgSrc + '"></td><td><h1>' + def.tip + '</h1><h2>' + def.msg + '</h2>';
    if (def.linkOne != null || def.linkTwo != null) {
        content += '<p>';
        if (def.linkOne != null) {
            content += '<a href="' + def.linkOne.href + '" class="btn_c1">' + def.linkOne.title + '</a>&nbsp;&nbsp;';
        }
        if (def.linkTwo != null) {
            content += '<a href="' + def.linkTwo.href + '" class="btn_c1">' + def.linkTwo.title + '</a>&nbsp;&nbsp;';
        }
        if (def.btn != null) {
            content += '<div class="btn_c1 DialogCloseBtn">' + def.btn.title + '</div>&nbsp;&nbsp;';
        }
        content += def.explain + '</p>';
    }
    content += '</td></tr></table></div>';
    def.content = content;
    return art.dialog(def);
}

WC.fn = {};
WC.fn.round = function (number, point) {
    var _point = 2;
    if (/^\d+$/.test(point) && point > 2) {
        _point = point;
    }
    //    if(!/^\d+$/.test(number)){
    //        throw "wrong number";
    //    }
    var _point_len = "1";
    for (var i = 0; i < _point; i++) {
        _point_len += '0';
    }
    var _point = parseInt(_point_len);
    return Math.round(number * _point) / _point;
}
//版本
var _version = WC.Core.getCookie("CURRENT_VERSION");
if (!_version) {
    WC.Core.setCookie("CURRENT_VERSION", "4.2.1");
}
//来源
var _source = WC.Core.getCookie("VISIT_SOURCE");
if (!_source) {
    WC.Core.setCookie("VISIT_SOURCE", "pc");
}
//产品名称
var _name = WC.Core.getCookie("VISIT_APP_NAME");
if (!_name) {
    WC.Core.setCookie("VISIT_APP_NAME", "wangcai");
}
/**
 * @desc 旺财页面公共脚本调用
 * @author zhangjingbo(2015-8-31 15:26:09)
 * @update vicshang(2016-05-17 15:39:38)
 */
    // alert(2);
var CommonObj = function(){
        this.init();
    };
CommonObj.prototype = {
    init:function(){
        //初始化事件绑定
        this.initBind();
        //获取上一级页面 记录到cookie
        this.getReferrer();
        //获取pc端旺财apk地址
        // this.getWcApk();
    },
    //初始化事件绑定
    initBind:function(){
        var _that = this;
        //点击立即设置一账通按钮
        $(".forget_pay_pwd").click(function(){
            $(".shade").addClass("hidden");
            $(".dialogBox").addClass("hidden");
            art.dialog.open('/user/setup/pay_pwd_reset?refer=setup',{title: _that.checkStatus('设置一账通支付密码'),padding:0,lock:true,height:'340px',width:'430px'});
        });
        //全站hover显示效果(top:微信、新浪分享、我的账户)
        $(".show").hover(
            function(){
                var a = $(this).children(".ico").attr("class").split(" ");//
                $(this).children(".ico").addClass(a[1]+"Hover");//选中样式
                $(this).children(".none").slideToggle();//下拉内容出现
            },
            function(){
                var a = $(this).children(".ico").attr("class").split(" ");
                if(a[2]){
                    $(this).children(".ico").removeClass(a[2]);//取消选中
                }
                $(this).children(".none").hide();//隐藏下拉内容
            }
        );

        //top 退出登录
        $("#exitUser").click(function(){
            var oauth_url=$("#oauth_base_url").val();//oauth url 前缀
            var wc_pc_clientsecret=$("#wc_pc_clientsecret").val();
            var wangcai_domain=$("#wangcai_domain").val();
            window.location = oauth_url+"/logoutandcb?callback=http://"+wangcai_domain+"/callback";
        });


        if(!Array.isArray){// 判断ie8浏览器
            $(window).scroll(function(){
                if($(window).scrollTop()>200){
                    $("#backTop").fadeIn(500);
                    $(".tools").css("top","40%");
                }else{
                    $("#backTop").fadeOut(500);
                    $(".tools").css("top","50%");
                }
                //吸灯效果
                if( document.documentElement.scrollTop>90 || window.pageYOffset>90 || document.body.scrollTop>90){
                    $(".header").addClass("headerFlex");
                }else{
                    $(".header").removeClass("headerFlex");
                }
            });
        }else{
            //右侧 	回到顶部icon显示和隐藏
            var tit = document.getElementById("header");
            //占位符的位置
            var rect = tit.getBoundingClientRect();//获得页面中导航条相对于浏览器视窗的位置
            var inser = document.createElement("div");
            tit.parentNode.replaceChild(inser,tit);
            inser.appendChild(tit);
            inser.style.height = rect.height + "px";

            //获取距离页面顶端的距离
            var titleTop = tit.offsetTop;
            //滚动事件
            document.onscroll = function(){
                if($(window).scrollTop()>200){
                    $("#backTop").fadeIn(500);
                    $(".tools").css("top","40%");
                }else{
                    $("#backTop").fadeOut(500);
                    $(".tools").css("top","50%");
                }
                //获取当前滚动的距离
                var btop = document.body.scrollTop||document.documentElement.scrollTop||window.pageYOffset;
                //如果滚动距离大于导航条据顶部的距离
                if(btop>titleTop){
                    //为导航条设置headerFlex
                    tit.className = "header headerFlex";
                }else{
                    //移除headerFlex
                    tit.className = "header";
                }
            };
        }

        //右侧	回到顶部动画
        $("#backTop,.js_userTabLink").click(function(){
            $("html,body").animate({scrollTop:0});
        });
        //右侧	联系我们hover效果
        $(".slideWrap").hover(function(){
                $(this).stop(true,false);
                $(this).children('.sideNav').addClass("hover");
                $(this).children('.sideNav').stop().animate({marginLeft:"-352px"},300);
                $(this).children('.slideContact').stop().animate({right:"0"},300);
                $(".sideShade").fadeIn(320);
                if($(this).parent().find("#backTop")){
                    $('#backTop').stop().animate({marginLeft:"-352px"},300);
                }
            },function(){
                $(this).children('.sideNav').removeClass("hover");
                $(this).children('.sideNav').stop().animate({marginLeft:"0"},300);
                $(this).children('.slideContact').stop().animate({right:"-350px"},300);
                $(".sideShade").fadeOut(320);
                if($(this).parent().find("#backTop")){
                    $('#backTop').stop().animate({marginLeft:"0"},300);
                }
            }
        );
        function placeholderSupport() {
            return 'placeholder' in document.createElement('input');
        }
        //placeholder支持ie
        if(!placeholderSupport()){// 判断浏览器是否支持 placeholder
            $(document).on('click','.form_text',function(){
                $(this).hide().parent().find('[placeholder]').focus();//点击占位字符隐藏
            })
            $('[placeholder]').on("keyup focus",function() {
                $(this).parent().children(".form_text").remove();
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.parent().append('<span class="form_text">' + input.attr('placeholder') + '</span>');
                }
            }).blur();
        };
        //用户中心左侧导航伸缩click事件绑定
        $(".dropdown a").click(function () {
            var smenu = $(this).next();
            if (smenu.is(':hidden')) {
                $(this).parent().addClass("active");
                smenu.slideDown("fast");
            }else {
                $(this).parent().removeClass("active");
                smenu.slideUp("fast");
            }
        });
        //展开active选项内的节点
        if($(".dropdown.active").length){
            $(".dropdown.active").children(".dropdown-menu").slideDown(0);
        }
        //点击左边自动出借按钮，进行开户判断
        $("#autotender").click(function(e){
            e.preventDefault();
            var _link=$(this).attr("href");
            window.location.href=_link;//直接在开启自动理财时调用
            // Deposit.Core.checkUserIsDeposit(_link,"auto_financial");//自动理财按钮点击判断是否开通存管通账户
        });
        //点击左边理财卡按钮，进行开户判断
        $("#giftcard").click(function(e){
            e.preventDefault();
            var _link=$(this).attr("href");
            //防止2次提交
            if(!$(this).hasClass("disable")){
                Deposit.Core.checkUserIsDeposit(_link,"financial_card","giftcard");//自动出借按钮点击判断是否开通存管通账户
            }
        });
        //充值校验绑定
        $(".checkStatusBtn").click(function(e){
            e.preventDefault();
            var _link=$(this).attr("href");
            // var obj = {
            //    	url:"/user/judgeUserInfo",
            //    	type:"get",
            //    	params:"",
            //    	cache:false,
            //    	success:function(data){
            //    		_that.statusResult(data,_link);
            //    	}
            //    };
            //    WC.Core.ajax(obj);
            //防止2次提交
            if(!$(this).hasClass("disable")){
                Deposit.Core.checkUserIsDeposit(_link,"recharge","checkStatusBtn");//充值相关按钮点击判断是否开通存管通账户
            }
        });
        //提现校验绑定
        $(".checkStatusBtn_payPwd").click(function(e){
            e.preventDefault();
            var _link=$(this).attr("href");
            // var obj = {
            //    	url:"/user/judgeUserInfo",
            //    	type:"get",
            //    	params:"",
            //    	cache:false,
            //    	success:function(data){
            //    		_that.statusCheck(data,_link);
            //    	}
            //    };
            //    WC.Core.ajax(obj);
            //防止2次提交
            if(!$(this).hasClass("disable")){
                Deposit.Core.checkUserIsDeposit(_link,"cash","checkStatusBtn_payPwd");//提现相关按钮点击判断是否开通存管通账户
            }
        });
        /*用于校验用户是否已经登录oauth系统*/
        $(".loginCheckOa").click(function(){
            var _that = this;
            var wangcai_domain=$("#wangcai_domain").val();
            var clientid=$("#wc_pc_clientid").val();//（oauth给分配的client_id）登录不使用
            var oauth_url=$("#oauth_base_url").val();//oauth url 前缀
            var wc_pc_clientsecret=$("#wc_pc_clientsecret").val();
            //获取回调的地址
            var obj = {
                url:oauth_url+"/oauth2/authorize",
                params:{grant_type:"password",client_id:clientid,client_secret:wc_pc_clientsecret},
                success:function(data){
                    var status = data.status;//获取登录请求状态
                    if(status == '1'){
                        window.location.href="/user/to_login";
                        // window.location.href = oauth_url+"/views/login/login.html?response_type=token&redirect_uri="+wangcai_domain+"&clientid="+clientid+"&clientsecret="+wc_pc_clientsecret;
                    }else{
                        window.location.href="/callback?scope="+data.data.scope+"&token_type="+data.data.token_type+"&expires_in="+data.data.expires_in+"&refresh_token="+data.data.refresh_token+"&access_token="+data.data.access_token;
                    }
                }
            };
            WC.Core.ajax(obj);
        });
    },
    //充值校验响应
    statusResult:function(data,_link){
        var _that=this;
        var wangcai_domain=$("#wangcai_domain").val();
        var oauth_url=$("#oauth_base_url").val();//oauth url 前缀
        var wc_pc_clientsecret=$("#wc_pc_clientsecret").val();
        var clientid=$("#wc_pc_clientid").val();
        if(data&&data.status.toString()=="-100"){
            window.location.href="/user/to_login";
            // window.location.href=oauth_url+"/views/login/login.html?response_type=token&redirect_uri="+wangcai_domain+"&clientid="+clientid+"&clientsecret="+wc_pc_clientsecret;
            return;
        }
        if(data&&data.data){
            //未实名
            if(data.data.realnameFlag&&data.data.realnameFlag.toString()=="0"){
                WC.artDialog({

                    msg:data.message,
                    icon:"error",
                    close:function(){},
                    linkOne:{href:"/user/setup",title:"确认"}
                });
                return;
            }
        }
        if(data&&data.data){
            //未绑卡
            if(data.data.bindbankFlag&&data.data.bindbankFlag.toString()=="0"){
                WC.artDialog({
                    msg:data.message,
                    icon:"error",
                    close:function(){},
                    linkOne:{href:"/user/recharge/to",title:"确认"}
                });
                return;
            }
        }
        window.location.href=_link;
    },
    //提现校验响应
    statusCheck:function(data,_link){
        var _that=this;
        var wangcai_domain=$("#wangcai_domain").val();
        var oauth_url=$("#oauth_base_url").val();//oauth url 前缀
        var wc_pc_clientsecret=$("#wc_pc_clientsecret").val();
        var clientid=$("#wc_pc_clientid").val();
        if(data&&data.status.toString()=="-100"){
            window.location.href="/user/to_login";
            // window.location.href=oauth_url+"/views/login/login.html?response_type=token&redirect_uri="+wangcai_domain+"&clientid="+clientid+"&clientsecret="+wc_pc_clientsecret;
            return;
        }
        if(data&&data.data){
            //未实名
            if(data.data.realnameFlag&&data.data.realnameFlag.toString()=="0"){
                WC.artDialog({

                    msg:data.message,
                    icon:"error",
                    close:function(){},
                    linkOne:{href:"/user/setup",title:"确认"}
                });
                return;
            }
        }
        if(data&&data.data){
            //未绑卡
            if(data.data.bindbankFlag&&data.data.bindbankFlag.toString()=="0"){
                WC.artDialog({
                    msg:data.message,
                    icon:"error",
                    close:function(){},
                    linkOne:{href:"/user/recharge/to",title:"确认"}
                });
                return;
            }
        }
        _that.checkPayPwd(_link);
    },
    //判断是否设置过支付密码
    checkPayPwd:function(_link){
        var _that=this;
        var wangcai_domain=$("#wangcai_domain").val();
        var oauth_url=$("#oauth_base_url").val();//oauth url 前缀
        var wc_pc_clientsecret=$("#wc_pc_clientsecret").val();
        var clientid=$("#wc_pc_clientid").val();
        var obj = {
            url:"/mobile/check_status/pay_pwd",
            type:"get",
            params:"",
            success:function(data){
                var _status=data.status;
                var _data=data.data;
                var _pay_pwd_status=_data.pay_pwd_status;
                var _pay_pwd_reset_flag=_data.pay_pwd_reset_flag;
                var _msg=data.message;
                if(_status==200){
                    if(_pay_pwd_status==0){//没有设置支付密码
                        WC.artDialog({
                            "title":"设置支付密码",
                            "msg":_msg,
                            linkOne:{"href":"/user/setup","title":"确认"}
                        });
                        $(".aui_close").addClass("hidden");
                        return;
                    }else{//已设置支付密码
                        if(_pay_pwd_reset_flag==0){//不需要重设密码

                        }else if(_pay_pwd_reset_flag==1){//需要重设密码
                            $("#tipMsg").text(_msg);
                            $(".shade,.dialogBox").removeClass("hidden");
                            return;
                        }
                    }
                }else if(_status==202){
                    alert(data.message);
                    return;
                }else if(_status==300){
                    window.location.href="/user/to_login";
                    // window.location.href=oauth_url+"/views/login/login.html?response_type=token&redirect_uri="+wangcai_domain+"&clientid="+clientid+"&clientsecret="+wc_pc_clientsecret;
                    return;
                }
                window.location.href=_link;
            }
        };
        WC.Core.ajax(obj);
    },
    getReferrer:function(){
        //获取上一页url
        var referrer = document.referrer;
        var cookieName = "referrerName";
        var refeSource,_domain=document.domain;
        if(referrer.indexOf(_domain+"/?semnew") != -1){//为着陆页时 从着陆页进入
            //http://www.91wangcai.com/?sem&source=baidupp
            refeSource="";
            //获取source值
            if(referrer.indexOf("?")){
                var UrlParams = referrer.split("?");
                if(UrlParams.length==2){
                    var UrlParam = UrlParams[1];
                    var reg = new RegExp("(^|&)source=([^&]*)(&|$)", "i");
                    var r = UrlParam.match(reg);
                    if (r != null){
                        refeSource = unescape(r[2]);
                    }
                }
            }
        }else if(referrer.indexOf(_domain) == -1){//其它方式进入（不包括直接访问）
            // cookieName = "referrerName";
            refeSource = referrer;//其它方式 默认记录整个域名
            //剥离符合条件的域名
            if(referrer.indexOf("://") != -1){//去除协议标识
                var urls = referrer.split("://");
                if(urls.length >= 2 ){
                    var murl = urls[1];// url
                    if(murl.indexOf("/") != -1){//以 / 分割域名
                        var rootUrls = murl.split("/");
                        if(rootUrls.length > 0){
                            var rootUrl = rootUrls[0];//根域名
                            rootUrl = rootUrl.replace(/www.|.com|.cn|.net|.org|.edu/g, "");
                            refeSource = rootUrl;
                        }
                    }else{
                        refeSource = murl.replace(/www.|.com|.cn|.net|.org|.edu/g, "");
                    }
                }
            }
            var _source=WC.Core.getQueryString("source");
            if(_source){
                refeSource=_source;
            }
        }
        if(refeSource){
            WC.Core.setCookie(cookieName,refeSource);
        }
    },
    //校验登录状态
    checkStatus:function(title){
        var _title="登录",_cookie;

        _cookie=this.getCookie("wallet_token").replace(/\"/g,"");//去除双引号
        //_cookie=this.getCookie("adw_id").replace(/\"/g,"");//去除双引号
        if(_cookie){
            _title=title;
        }else{
            _title="登录";
        }
        return _title;
    },
    getCookie:function(name){
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr=document.cookie.match(reg)){
            return unescape(arr[2]);
        }else{
            return null;
        }
    }
    // getWcApk:function(){
    // 	var obj={};
    // 	obj.url="/mobile/get_apk_url";
    // 	obj.params={};
    // 	obj.type="get";
    // 	obj.success=function(data){
    // 		var _status=data.status.toString();
    // 		var _data=data.data;
    // 		if(_status == "200"){//登录超时
    // 			$(".androidApk").attr("href",_data);
    // 		}
    // 	};
    // 	obj.error=function(){

    // 	};
    // 	WC.Core.ajax(obj);
    // }
};
$(document).ready(function(){
    var commonObj = new CommonObj();
});


//author yangzhangbo
//date 2017-09-11 18:50:00

var WebUpdate = function () {}
WebUpdate.prototype = {
    init: function () {
        this.update();
        this.isPC();
    },
    //判断浏览器版本，提示升级
    update: function () {
        if (!Array.isArray) {
            $("#web_browserTip").show();
        }
    },
    isPC: function () {
        // 判断移动端及pc端访问不同的网站，在移动端显示m站落地页
        if (navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)) {
            //运营报告响应式页面，在移动端访问显示正常页面，不进行旺财m站落地页的跳转
            var reportURL = window.location.search;
            if (reportURL.indexOf("?operateReport1") > -1 || reportURL.indexOf("?operateReport2") > -1 || reportURL.indexOf("?operateReport3") > -1 || reportURL.indexOf("?operateReport4") > -1 || reportURL.indexOf("?operateReportQ1") > -1 || reportURL.indexOf("?reportData") > -1) {
                return;
            }
            location.href = 'https://www.91wangcai.com/mobileapp/index.html';
        }
    }
}
var _webUpdate = new WebUpdate();
_webUpdate.init();

/**
 * @desc 账户概况
 * @author zhangjingbo
 * @update 2015-9-6 10:47:58
 */
var UsrInfo = function(){
    this.isCheckHistory;//是否查看过历史总记录
    this.isBilateralUser;//是否是双边用户
    this.pageSize=10;
    this.pageNum=0;
};
UsrInfo.prototype = {
    init:function(){
        var _that=this;
        //初始化事件绑定
        this.initBind();
        this.getAccount_all();
        // this.getAccount("recovering");
        _that.getFinancial("recovering",_that.pageNum,_that.pageSize);
        $(".tableB").hide();
        $(".tableA").show();
        // this.slideSwitch();//轮播
    },
    //初始化事件绑定
    initBind:function(){
        var _that = this;
        //点击弹框关闭按钮
        $(".dialogClose").click(function(){
            $(".dialogBox,.shade").addClass("hidden");
        });

        // //最近代收
        // $("#recoveringIndex").click(function(){
        // 	_that.getAccount("recovering");
        // });
        // //最近交易
        // $("#tenderedIndex").click(function(){
        // 	_that.getAccount("tendered");
        // });

        //最近代收
        $("#recoveringIndex").click(function(){
            $(".tableB").hide();
            $(".tableA").show();
            _that.getFinancial("recovering",_that.pageNum,_that.pageSize);
        });
        //最近交易
        $("#tenderedIndex").click(function(){
            $(".tableA").hide();
            $(".tableB").show();
            // _that.getFinancial("tendered",_that.pageNum,_that.pageSize);
            _that.getAccount("tendered");
        });

        // 转让债权
        $("body").on("click",".transferId",function(){
            var type=$(this).attr("attrType");//购买产品来源 0 散标；1 债权
            var buy_nid=$(this).attr("attrId");//购买产品ID
            WC.Core.Dialog({
                "content":"是否转让该债权？",
                "btnValue":"确认",
                "btn2Value":"取消",
                "icon":'error',
                "btnFn":function(){
                    _that.openChange(type,buy_nid);//转让接口
                }
            });
        })

        //最近待收和最近交易tab切换
        $(".tab .hd li").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(".tab li").index(this);
            // $(".tab .bd > div").eq(index).show().siblings().hide();
        });
        //问号hover提示
        $(".wt").hover(function(){
                $(this).children("sup").show();
            },function(){
                $(this).children("sup").hide();
            }
        );
        //点击查看展示全部
        $(".account_details ul").hide();
        $("#click_see_all").click(function(){
            if($(this).hasClass("click_see")){
                $(".account_details ul").slideDown();
                $("#click_see").text("收起");
                $(this).removeClass("click_see");
            }else{
                $(".account_details ul").slideUp();
                $("#click_see").text("点击查看");
                $(this).addClass("click_see");
            }
        })
    },
    //banner图切换效果（图片堆叠）
    slideSwitch:function(){
        var stay = 6;
        var fade = 0.3;
        var msec = 1000;
        var timer = 400;
        var timeout;
        var prev = next = 0;
        var slider = $('#slider');
        var slideindex = true;
        var controls = false;
        var html = '';
        var term = slider.children('li');
        var len = term.length;
        slider.wrap('<div class="slider-items"></div>');
        if (slideindex) {
            if (len > 1) {
                html += '<div class="slider-index">';
                html += '<ol class="items">';
                for (var i = 1; i <= len; i++) {
                    html += '<li ' + (i == 1 ? 'class="active"': '') + '>' + i + '</li>'
                };
                html += '</ol>';
                html += '</div>'
            }
        };
        //未使用
        if (controls) {
            html += '<div class="slider-updown">';
            html += '<a href="#" class="button prev" data-rel="prev">prev</a>';
            html += '<a href="#" class="button next" data-rel="next">next</a>';
            html += '</div>'
        };
        slider.parent('.slider-items').wrap('<div class="slider-wrap"></div>').css({
            'position': 'relative',
            'overflow': 'hidden'
        }).after(html);
        var thumbCont = slider.parent().siblings('.slider-index');
        var thumb = thumbCont.find('li');
        var button = slider.parent().siblings('.slider-updown');
        slider.fadeIn();
        if (len == 1) {
            term.first().fadeIn()
        };
        button.find('.button').bind('click',
            function() {
                var self = $(this).attr('data-rel');
                if (self == 'prev') {
                    if (prev == 0) {
                        next = len - 1
                    } else {
                        next = prev - 1
                    }
                } else if (self == 'next') {
                    if (prev == len - 1) {
                        next = 0
                    } else {
                        next = prev + 1
                    }
                };
                autoPlay();
                return false
            });
        thumb.bind('click',function() {
            next = thumb.index($(this));
            clearTimeout(timeout);
            changePlay(next);
            if (next == len - 1) {
                next = 0
            } else {
                next++
            }
        });
        slider.hover(function() {
                clearTimeout(timeout)
            },
            function() {
                if (len > 1) {
                    timeout = setTimeout(autoPlay, stay * msec)
                }
            });
        var changePlay = function(next) {
            term.eq(prev).fadeOut(fade * msec);
            term.eq(next).fadeIn(fade * msec);
            thumb.removeClass('active');
            thumb.eq(next).addClass('active');
            if (typeof($('#userGain')[0]) != '') {
                $('#userGain').find('.opacity').css({
                    opacity: term.eq(next).attr('data-opacity')
                })
            };
            prev = next
        };
        var autoPlay = function() {
            clearTimeout(timeout);
            changePlay(next);
            next = prev + 1;
            if (next >= len) {
                next = 0
            };
            timeout = setTimeout(autoPlay, stay * msec)
        };
        if (len > 1) {
            autoPlay()
        }
    },
    /**
     * 最近待收   最近交易 数据获取
     * @param {String} param recovering：最近待收 tendered：最近交易
     */
    getAccount:function(param){
        var url = document.getElementById("accountForm").action;
        var ajaxObj = {
            url: url,
            params: "status=" + param,
            success: function(data){
                document.getElementById("recovering").innerHTML = "";
                document.getElementById("recovering").innerHTML = data.message;//表头 数据信息
                $("#recovering tfoot td").attr("colspan", 5);
                $("#recovering tfoot td").css("border", "none");
                //console.log($("#recovering tbody").html())
                var tbodyCont=$("#recovering tbody").html()
                if(tbodyCont==null || tbodyCont.length==0){
                    $("#recovering tbody").append("<tr><td colspan='5'>暂无数据</td></tr>");
                }
            },
            error:function(data){
                art.Dialog({
                    content: '<div class="layer"><div class="layer_ok_a"><div class="l pic"><img src="/images/icons/layer_wrong.jpg" width="80" height="80"></div><div class="l"><h2>'+data.message+'</h2></div></div></div>',padding:0,lock:true,height:'200px',width:'450px'
                });
            }
        };
        WC.Core.ajax(ajaxObj);
        return false;
    },
    /**
     * 获取理财列表数据
     * @param {String} data tendering：投标中 recovering：回款中 tendered：已结束
     * @param {Number} page 当前页数
     */
    getFinancial:function(type,pageNum,pageSize){
        var _that=this;
        var obj = {};
        obj.url = "/mobile/v4/capital_detail_priority";
        obj.params={
            type:type,
            pageNum:pageNum,//当前页码
            pageSize:pageSize,//每页个数
            // business_line:2,//1 ：钱包 2 ：旺财
            device:"pc"
        };
        obj.type="get";
        obj.beforeSend=function(){

        };
        obj.success=function(json){
            var _data=json.data;
            if(json.status==200){//成功
                var _item_str="";
                var _tz_middle=[];
                var tableA="<thead><tr><th width='120'>项目</th><th width='130'>出借金额（元）</th><th width='130'>持有金额（元）</th><th width='80'>本期利息</th><th width='60'>期数</th><th width='120'>本期回款时间</th><th width='60' class='opera_qb'></th><th width='50'></th></tr></thead>";
                _tz_middle.push(tableA);
                if(_data.product.length==0){
                    var noneDate='<tr class="noneData"><td colspan="8">暂无数据</td></tr>';
                    _tz_middle.push(noneDate);
                }
                for(var i=0;i<_data.product.length;i++){
                    _tz_middle.push(noneDate);
                    var sj_bl=_data.product[i];
                    var _status=_data.product[i].tender_status;//投资 回款 已回款状态
                    var pro_style=_data.product[i].product_style;//判断类型
                    var _business_line=_data.product[i].business_line;//判断产品线 1 ：钱包 2 ：旺财

                    // 展示产品来源 0 散标；1 债权
                    if(sj_bl.show_product_from==0){
                        //旺财与金融理财记录字段不同，所以先校验旺财与金融
                        if(_business_line==1){//钱包
                            switch(_status){
                                case 3://已回款
                                    switch(pro_style){
                                        case "end":
                                            //项目 出借金额 到期收益 已回款 收款时间
                                            _item_str="<tr><td class='text'><a href='javascript:void(0);' class='buy_qianbao'>"+sj_bl.name+"</a></td><td class='green'>"+sj_bl.account+"</td><td>"+sj_bl.money+"</td><td>"+sj_bl.redeem_account_yes+"</td><td>"+sj_bl.end_time+"</td></tr>";
                                            _tz_middle.push(_item_str);
                                            break;

                                        case "tad":
                                            //项目 出借金额 到期收益 已回款 收款时间
                                            _item_str="<tr><td class='text'><a href='javascript:void(0);' class='buy_qianbao'>"+sj_bl.name+"</a></td><td class='green'>"+sj_bl.account+"</td><td>"+sj_bl.money+"</td><td>"+sj_bl.redeem_account_yes+"</td><td>"+sj_bl.end_time+"</td></tr>";
                                            _tz_middle.push(_item_str);
                                            break;

                                        case "tid":
                                            //项目 出借金额 到期收益 已回款 收款时间
                                            _item_str="<tr><td class='text'><a href='javascript:void(0);' class='buy_qianbao'>"+sj_bl.name+"</a></td><td class='green'>"+sj_bl.account+"</td><td>"+sj_bl.money+"</td><td>"+sj_bl.redeem_account_yes+"</td><td>"+sj_bl.end_time+"</td></tr>";
                                            _tz_middle.push(_item_str);
                                            break;
                                    }
                                    break;
                            }
                        }else if(_business_line==2){//旺财
                            //回款中——待回款 已回款（出借金额+到期收益）
                            //加息券利息
                            var _all_money=Number(sj_bl.recover_account_interest)+Number(sj_bl.coupon_interest);//审核中-利息  回款中-本期利息  已回款-获得收益
                            var all_money=Number(_all_money).toFixed(2);//保留2位小数
                            switch(_status){
                                case 2://回款中  end不显示期数
                                    switch(pro_style){
                                        case "end":
                                            //是否允许债转
                                            if(sj_bl.allow_credit==0 && sj_bl.selling_status!=1){//允许债权
                                                var _allow_credit="<td><a href='javascript:void(0);' class='transferId' attrType='0' attrId='"+sj_bl.buy_nid+"'>转让</a></td>";
                                            }else{//不允许债权
                                                var _allow_credit="<td></td>";
                                            }

                                            //项目 出借金额 到期收益 待回款 到期回款时间 操作
                                            _item_str="<tr><td class='text'><a href='/view/borrow/"+sj_bl.product_nid+"'>"+sj_bl.name+"</a></td><td class='green'>"+sj_bl.origin_account+"</td><td class='green'>"+sj_bl.account+"</td><td>"+all_money+"</td><td>1/1</td><td>"+sj_bl.redeem_account_time+"</td><td><a href='/user/protocol/"+sj_bl.buy_nid+"'>协议书</a></td>"+_allow_credit+"</tr>";
                                            _tz_middle.push(_item_str);

                                            break;

                                        case "tid":
                                            //是否允许债转
                                            if(sj_bl.allow_credit==0 && sj_bl.selling_status!=1){//允许债权
                                                var _allow_credit="<td><a href='javascript:void(0);' class='transferId' attrType='0' attrId='"+sj_bl.buy_nid+"'>转让</a></td>";
                                            }else{//不允许债权
                                                var _allow_credit="<td></td>";
                                            }

                                            //项目 出借金额 到期收益 待回款 到期回款时间 操作
                                            _item_str="<tr><td class='text'><a href='/view/borrow/"+sj_bl.product_nid+"'>"+sj_bl.name+"</a></td><td class='green'>"+sj_bl.origin_account+"</td><td class='green'>"+sj_bl.account+"</td><td>"+all_money+"</td><td>"+sj_bl.repay_account_times+"/"+sj_bl.product_period+"</td><td>"+sj_bl.redeem_account_time+"</td><td><a href='/user/protocol/"+sj_bl.buy_nid+"'>协议书</a></td>"+_allow_credit+"</tr>";
                                            _tz_middle.push(_item_str);
                                            break;
                                    }
                                    break;
                            }
                        }
                    }else{
                        //是否允许债转
                        if(sj_bl.allow_credit==0 && sj_bl.selling_status!=1){//允许债权
                            var _allow_credit="<td><a href='javascript:void(0);' class='transferId' attrType='1' attrId='"+sj_bl.buy_nid+"'>转让</a></td>";
                        }else{//不允许债权
                            var _allow_credit="<td></td>";
                        }

                        _item_str="<tr><td class='text'><a href='/view/credit_assignment/"+sj_bl.id+"'>"+sj_bl.name+"</a></td><td class='green'>"+sj_bl.origin_account+"</td><td class='green'>"+sj_bl.account+"</td><td>"+sj_bl.recover_account_interest+"</td><td>1/1</td><td>"+sj_bl.redeem_account_time+"</td><td><a href='/user/protocol/credit_assignment/"+sj_bl.buy_nid+"'>协议书</a></td>"+_allow_credit+"</tr>";
                        _tz_middle.push(_item_str);
                    }
                }
                _tz_middle.push("<tfoot><tr><td colspan='8' class='last'><a href='/user/financial/chart' class='link'>查看更多>></a></td></tr></tfoot>");
                //设置存本取息理财数据
                $(".tableA").html(_tz_middle.join(""));
                $("#recovering tbody tr td:last-child").addClass("last");
                $(".buy_qianbao").click(function(){
                    WC.Core.Dialog({
                        "content": "查看标的详情，请拨打服务电话 400-000-0091",
                        "btnValue": "确定",
                        "icon": "ok",
                        "btnFn": function () {
                            WC.Core.DialogClose();
                        }
                    });
                })
            }
        };
        obj.error=function(){

        };
        WC.Core.ajax(obj);
    },
    // 转让债权
    openChange:function(type,buyId){
        var _that=this;
        var obj = {};
        obj.url = "/credit_assignment/selling_credit";
        obj.params={
            "buy_id":buyId,//购买产品ID，如果是散标则是出借记录中的‘id’，若是债权则是出借记录中的‘credit_assignment_id’
            "product_from":type//购买产品来源 0 散标；1 债权
        };
        obj.type="post";
        obj.beforeSend=function(){

        };
        obj.success=function(data){
            var _data=data.data;
            if(data.status==200){//成功
                WC.Core.Dialog({
                    "content":"转让成功",
                    "btnValue":"确认",
                    "icon":'ok',
                    "btnFn":function(){
                        _that.getFinancial("recovering",_that.pageNum,_that.pageSize);
                        WC.Core.DialogClose();
                    }
                });
            }else{
                WC.Core.Dialog({"content":data.message,"icon":"error"});
            }
        };
        obj.error=function(){

        };
        WC.Core.ajax(obj);
    },
    //获取账户信息
    getAccount_all:function(){
        var _that=this;
        var obj={};
        obj.url="/mobile/v2/wc_user_account.php";
        obj.params={'id':23};
        obj.type="get";
        obj.success=function(json){
            // $(".uBtn").addClass("active");
            var _status=json.status.toString(),
                data=json.data;
                console.log(data);
            _that.isBilateralUser=data.isBilateralUser.toString();//是否是双边用户 1 是；，0 否'。如果不是双边用户则不弹框也没有下拉历史
            _that.isCheckHistory=data.isCheckHistory.toString();//是否查看过历史总记录 0 没有看过 则弹出历史框；1 看过 则无需弹出历史框
            if(_status=="200"){
                var _wc_total=data.wc_total,//旺财总金额
                    _wc_await=data.wc_await,//旺财代收
                    _wc_frost=data.wc_frost,//旺财冻结
                    _wc_balance=data.wc_balance;//旺财余额

                var _qb_total=data.qb_total,//钱包总账
                    _qb_await=data.qb_await,//钱包代收
                    _qb_frost=data.qb_frost,//钱包冻结
                    _qb_balance=data.qb_balance;//钱包余额

                var _all_total=data.old_total,//合并后总帐户
                    _all_balance=data.old_balance,//合并后总余额
                    _all_frost=data.old_frost,//合并后总冻结
                    _all_await=data.old_await;//合并后总待收

                var _qbwc_total=data.total,//总金额
                    _qbwc_balance=data.balance,//余额
                    _qbwc_frost=data.frost,//账户冻结
                    _qbwc_await=data.await,//账户总待收
                    _getMoney=data.getMoney;//已赚收益

                var _priority_await=data.priority_await;//待收

                var _end_time=data.end_time;
                $(".end_time").text(_end_time);

                // 旺财账户
                $(".wc_total").text(parseFloat(_wc_total).toFixed(2));
                $(".wc_yue").text(parseFloat(_wc_balance).toFixed(2));
                $(".wc_frost").text(parseFloat(_wc_frost).toFixed(2));
                $(".wc_await").text(parseFloat(_wc_await).toFixed(2));
                // 91金融账户
                $(".qb_total").text(parseFloat(_qb_total).toFixed(2));
                $(".qb_yue").text(parseFloat(_qb_balance).toFixed(2));
                $(".qb_frost").text(parseFloat(_qb_frost).toFixed(2));
                $(".qb_await").text(parseFloat(_qb_await).toFixed(2));
                //合并后总账户
                $(".all_total").text(parseFloat(_all_total).toFixed(2));
                $(".all_yue").text(parseFloat(_all_balance).toFixed(2));
                $(".all_frost").text(parseFloat(_all_frost).toFixed(2));
                $(".all_await").text(parseFloat(_all_await).toFixed(2));

                //总账户
                $(".qbwc_total").text(parseFloat(_qbwc_total).toFixed(2));
                $(".qbwc_yue").text(parseFloat(_qbwc_balance).toFixed(2));
                $(".qbwc_frost").text(parseFloat(_qbwc_frost).toFixed(2));
                $(".qbwc_await").text(parseFloat(_qbwc_await).toFixed(2));
                $(".firstwc_await").text(parseFloat(_priority_await).toFixed(2));

                // 已赚收益
                $(".getMoney").text(parseFloat(_getMoney).toFixed(2));
            }else if(_status=="300"){
                WC.Core.Dialog({"icon":"error","content":json.message,"btnFn":function(){window.location.href="/home/login.html";}});
            }else{
                WC.Core.Dialog({"icon":"error","content":json.message});
            }
        };
        // obj.error=function(){
        //     WC.Core.Dialog({"icon":"error","content":"获取信息出现网络异常"});
        // }
        WC.Core.ajax(obj);
    }
};

$(document).ready(function(){
    var userInfo = new UsrInfo();
    userInfo.init();
});
