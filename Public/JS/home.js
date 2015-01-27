//实现banner上下滚动
// $(function floatright(){
//     $(".banner img").animate(
//     	{top:'20px'},5000,
//     	function floatleft()
//     	{$(".banner img").animate({top:'-10px'},5000, floatright());}
//     	);
// }

//简要渐入效果
$(function(){
	$('#slogan').fadeIn(3000);
});

$(".name").hover(function(){
  $('.name').toggleClass("ename");
});