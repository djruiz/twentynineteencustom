!function(e){var t={};function n(o){if(t[o])return t[o].exports;var l=t[o]={i:o,l:!1,exports:{}};return e[o].call(l.exports,l,l.exports,n),l.l=!0,l.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var l in e)n.d(o,l,function(t){return e[t]}.bind(null,l));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t){var n=0;$(document).ready((function(){console.log("test");setInterval(l,6e3);$(this).mousemove((function(e){n=0})),$(this).keypress((function(e){n=0}))}));var o=document.getElementById("modal");function l(){(n+=1)>1&&(!function(e){if(null==e)return;e.classList.add("active"),u.classList.add("active")}(o),n=0)}console.log(o);var u=document.getElementById("overlay");window.closeModal=function(e){console.log("testmod"),null!=e&&(e.classList.remove("active"),u.classList.remove("active"))},$("#sign-up").click((function(){var e=document.getElementById("modal"),t={firstName:document.getElementById("first_name").value,lastName:document.getElementById("last_name").value,phone:document.getElementById("phone").value,email:document.getElementById("email").value};console.log("sign-up button clicked"),$.post("https://hooks.zapier.com/hooks/catch/3424817/odkx2ft/",t,(function(t,n){alert("Data: "+t+"\nStatus: "+n),closeModal(e)}))})),window.send=function(e){console.log("contact runs"),e.preventDefault();document.getElementById("first_name").value,document.getElementById("last_name").value,document.getElementById("phone").value,document.getElementById("email").value}}]);