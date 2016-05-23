 // document.onreadystatechange = finish;
 //    function finish() {
 //        if (document.readyState == "complete") {
 //            $("#load-pic").fadeOut();
 //            $("body").css({ "height": "auto", "overflow": "auto" });
 //            $(window).unbind("touchstart");
 //            window.onscoll=function(){
 //              $("body").removeAttribute("onmousewheel","return false");
 //            }
 //        }
 //        else {
 //            $(window).bind("touchstart", banSrcoll, false);
 //            window.onscoll=function(){
 //              $("body").attr("onmousewheel","return false");
 //            }
 //        }
 //        function banSrcoll() {
 //            event.preventDefault();
 //        }

            /*slide-fade*/
    function fadeAway(){
        var imgHeight=$(".slider-fade").find('img').height();
            $(".slider-fade").height(imgHeight);
            $(".slider-fade").css({"left":"0"});
            $(".design-block h1").css({"opacity":"1"});
           setTimeout(function(){
             $(".design-block p").css({"top":"0","opacity":"1"});
             setTimeout(function(){
            $(".design-block a").css({"top":"0","opacity":"1"});
             },500)
           },1000) 
        //只需要稍稍改动下就行了
        var timeout = 2000; //每隔1000ms
        var index = 0;
        var addClassOn;
        addClassOn = setInterval(function(){
            if(index >= $(".slider-fade li").length){
                index = 0; //此处改动，可以无限循环 1 2 3 1 2 3 1 2 3  。。。
            }else {
                $(".slider-fade li").eq(index++).addClass("fade-cur").siblings().removeClass("fade-cur");//改动处
            }
        },timeout);

    }
    fadeAway();
    }
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e537e9e6d817ad00eedb873ca37bed90";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();