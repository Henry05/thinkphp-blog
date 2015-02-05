$(function(){
	$(".update").bind("click",function(){
	     var td =$(this).parents("td");
	    $(td).siblings().children("span").css("display","none");
	    $(td).siblings().children("input").not("#thisid").attr("type","text");
	     $(td).siblings().children(".inp").attr("disabled",false);

	    });
	
	
    $(".update").blur(function(){
       $(this).attr({ type: "submit", value: "提交" });
       $(this).css({"background-color":"orange","color":"#fff"});
       $(".update").not(this).attr("disabled","disabled");
        $(".update").not(this).css("color","#C0C0C0");
     });
})