
/*tech*/
var ajax_content={
    tech_ajax_content:function(){
        function transF($clickIndex,$thisIndex){
        setTimeout(function(){
             $.ajax({
        url: "tech/"+$clickIndex+".php",
        type: "GET",
        success: function (data,status) {
            $(".tech-btn").eq($thisIndex).siblings(".main-content-textblock").find(".ajax-content").html(data);
            $(".loadnow").hide();
        },
        errot:function(){
            alert(error);
        },
        cache:false,
    });
        },2000)
}
   $(".tech-btn a").each(function(i){
        $(this).click(function(){
        var thisClickIndex=$(this).data("clickindex");
           transF(thisClickIndex,i);
           $(this).html("<div class='loadingIn'><img src='./img/logo/logo.png' class='loading' /><p style='margin-top:2%;font-size: 18px;'>加载中</p></div>");
    });
    });
},
    /*discovery*/
    discovery_ajax_content:function(){
        function transF($clickIndex,$thisIndex){
            setTimeout(function(){
                $.ajax({
        url: "discovery/"+$clickIndex+".php",
        type: "GET",
        success: function (data,status) {
            $(".discovery-main-btn").eq($thisIndex).siblings(".main-content-textblock").find(".discovery-ajax-content").html(data)
             $(".loadnow").hide();
        },
        errot:function(){
            alert(error);
        },
        cache:false,
    });
            },1500)
    
}
   $(".discovery-main-btn a").each(function(i){
        $(this).click(function(){
        var thisClickIndex=$(this).data("clickindex");
           transF(thisClickIndex,i);
           $(this).html("<div class='loadingIn'><img src='./img/logo/logo.png' class='loading' /><p style='margin-top:2%;font-size: 18px;'>加载中</p></div>");
    });
    });
    }
}
 ajax_content.discovery_ajax_content();
 ajax_content.tech_ajax_content();


