$(function(){
	$(".aclick").bind("click",function(){
	    $(this).siblings("ul").slideToggle();
	})
})