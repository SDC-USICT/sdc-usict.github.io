$(function(){function i(){return window.pageYOffset||document.documentElement.scrollTop}var t=150;$(window).scroll(function(){var e=i();e>=t?($(".tophead").css("display","block"),$(".tophead").addClass("fix")):($(".tophead").removeClass("fix"),$(".tophead").hide())})}),$(document).ready(function(){function i(){$(this).find("ul").css("visibility","visible")}function t(){$(this).find("ul").css("visibility","hidden")}$(".myMenu > li").bind("mouseover",i),$(".myMenu > li").bind("mouseout",t)}),$(function(){var i;$("#image img").click(function(){var t=$(this).attr("src");i=$(this),$("#mainimg").attr("src",t),$("#frame").fadeIn(),$("#overlay").fadeIn()}),$("#overlay").click(function(){$(this).fadeOut(),$("#frame").fadeOut()}),$("#arrowright").click(function(){var i=$("#image"),t=i.find("img");if(e<t.length){var a=t[e],r=a.attributes[1],n=r.firstChild,s=n.wholeText.replace(/\"/g,"");$("#mainimg").attr("src",s),e++}else{e=0;var a=t[e],r=a.attributes[1],n=r.firstChild,s=n.wholeText.replace(/\"/g,"");$("#mainimg").attr("src",s),e++}}),$("#arrowleft").click(function(){var i=$("#image"),a=i.find("img");if(t>0){var r=a[t],n=r.attributes[1],s=n.firstChild,c=s.wholeText.replace(/\"/g,"");$("#mainimg").attr("src",c),t--}else{var r=a[e],n=r.attributes[1],s=n.firstChild,c=s.wholeText.replace(/\"/g,"");$("#mainimg").attr("src",c),t=4}});var t=4,e=0});