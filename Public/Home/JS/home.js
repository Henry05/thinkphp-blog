//简要渐入效果
    $(function(){

    $(".ban-pic").animate(
        {left:'0px',opacity:'1'},600);
    });
    $('.ban-slogan').fadeIn(2000);

    $("#hot").click(function(){
    $(this).removeClass("off").addClass("on");
    $("#last").removeClass("on").addClass("off");
    $(".lastlist").css("display","none");
    $(".hotlist").css("display","block");

    $(".lastShow").css("display","none");
    $(".hotShow").css("display","block");
    });

    $("#last").click(function(){
    $(this).removeClass("off").addClass("on");
    $("#hot").removeClass("on").addClass("off");
    $(".hotlist").css("display","none");
    $(".lastlist").css("display","block");

    $(".lastShow").css("display","block");
    $(".hotShow").css("display","none");
    });
