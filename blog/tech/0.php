<style type="text/css">
	li.L0, li.L1, li.L2, li.L3, li.L5, li.L6, li.L7, li.L8 {
 list-style-type: decimal !important
}
</style>
</style>
</head>
<body onload="window.prettyPrint && prettyPrint();">
	<p>这个页面已经用到了Ajax,HTML,CSS,Javascript,Jquery以及一些最基本的环境搭建过程.</p>
	<p>先看看本网站的页面结构</p>
	<p class="ajax-img-block"><img src="../img/01/3.png"></p>
    <h2>废话开始</h2>
	<p>结构很明显..可以清楚地看到主页是index.html其分目录下是tech目录,这个目录下主要是存放有关于科技的blog.里面写成PHP是为了今后能够方便的调用..不知道这样写有啥好处..只是看到我们项目里面大部分都是PHP嵌套来个Ajax..老牛逼了</p>
	<p>昂...不说PHP的了...现在学得还不够老练..不能装X...这个网站点击‘阅读全文’的实现吧.</p>
	<p>First of all ,在传递Ajax的内容区域楼楼定义了一个ajax-content这个类还有一个ajax-title的类..ajax-title存放的是通过PHP传递过来的blog标题值..</p>
	<p>看下Ajax是怎么写的</p>
	<!-- <p class="ajax-img-block"><img src="../img/01/4.png"></p> -->
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li class="L0"><span class="fun">function</span> transF($clickIndex){
    <li class="L1"><span class="fun">$.ajax</span>({
        <span class="atv">url: "/tech/01.php",
        type: "POST",
    data:{"trans_data":my_data},
<span class="com">// dataType: "script",</span>
success: function (data,status) {
$(".ajax-content").eq($clickIndex).html(data);},
error:function(){
alert(error);
        },
    });</span>
	}</li>
  <li class="L1"><span class="tag">$(".main-btn a")</span>.each(function(i){
        $(this).click(function(){
           <span class="pln">transF(i);</span>
           $(this).hide();
    });
    });</li>
	</pre>
	<p>定义一个transF的方法.往该方法里面传递一个参数..这个参数值就是当前用户所点击的i，大家都知道$.each(function(i,item)){},i所代表的是当前点击的元素的序列的返回值..比如现在是第一篇...这里的i=0,至于为什么从零开始计数...点击这里<a href="http://www.baidu.com" class="mystery-link">神秘传送地址</a></p>
	<p>返回的值传送到transF这个方法后..这个方法就知道自己应该控制哪一个元素的显示或者是隐藏了..$.ajax这个方法在接下来的文章里会更加详细的解释..success的英文意思是成功,表示ajax接收到或者发送完毕所执行的方法.function(data,status).data表示元素的返回数据,status返回当前的状态是接收成功还是失败..</p>
	<h2>关于页面更新的版本号定义.</h2>
	<p>这算是第一版了吧.今后的格式V X.X.XX 这是第一版就是V0.0.01,第一位表示页面会发生很大的变动.第二个X表示普通的版本更新.第三个X和第四个X表示在现有的版本上更新修复Bug</p>
	<div class="version-area clearfix"> 
        <p class="fl">V0.0.1</p>
        <p class="fr">2016/3/18</p>
        <h1 class="version-info">版本上线</h1>
        <p class="fl">V0.0.2</p>
        <p class="fr">2016/3/30</p>
        <h1 class="version-info">新增返回顶部按钮</h1>
        <p class="fl">V0.0.3</p>
        <p class="fr">2016/4/5</p>
        <h1 class="version-info">增加SP版导航链接</h1>
        <p class="fl">V0.0.4</p>
        <p class="fr">2016/4/11</p>
        <h1 class="version-info">发布3dtouch发现文章</h1>
        <p class="fl">V0.1.0</p>
        <p class="fr">2016/4/13</p>
        <h1 class="version-info">升级1.0版本.<br>修复导航栏阴影BUG增加LINK</h1>
        <p class="fl">V0.1.1</p>
        <p class="fr">2016/4/13</p>
        <h1 class="version-info">发布初识RequireJS</h1>
        <p class="fl">V0.1.2</p>
        <p class="fr">2016/4/13</p>
        <h1 class="version-info">合作页面开始编写</h1>
        <p class="fl">V0.1.3</p>
        <p class="fr">2016/4/13</p>
        <h1 class="version-info">资深设计师入驻,增加动效</h1>
        <p class="fl">V0.1.4</p>
        <p class="fr">2016/4/18</p>
        <h1 class="version-info">PC端增加背景</h1>
        <p class="fl">V0.2.0</p>
        <p class="fr">2016/4/13</p>
        <h1 class="version-info">加入AngularJS加载,压缩图片大小<br>页面性能大大提升.升级2.0版本</h1>
        <p class="fl">V0.2.1</p>
        <p class="fr">2016/4/13</p>
        <h1 class="version-info">优化JS算法</h1>
    </div>

</body>