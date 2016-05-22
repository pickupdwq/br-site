
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style type="text/css">
	li.L0, li.L1, li.L2, li.L3, li.L5, li.L6, li.L7, li.L8 {
 list-style-type: decimal !important
}
</style>
</style>
</head>
<body onload="window.prettyPrint && prettyPrint();">
	<p>以本网站为例主页头部以及分页的头部加入以下代码:</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="pln">&lt;scirpt&nbsp;data-main="js/control"&nbsp;src="js/require.js"&gt;</span></li>
		</ol>
	</pre>
	<p>下面来解读下这段代码</p>
	<p>data-main表示的是requireJS加载完成后马上执行的代码,值得一提的是js/control这里会自动将js/设置为接下来require的目录</p>
	<p>让我们更进一步看看control里面的代码</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="function">require.config({</span></li>
			<li>baseUrl:"js",</li>
			<li>paths:{</li>
			<li><span class="zifu">"pageajax"</span>:"common/ajaxmodel",</li>
			<li><span class="zifu">"globaljs"</span>:"common/main",</li>
			<li>}</li>
			<li>})</li>
			<li><span class="function">require</span>(["globaljs","pageajax"],function(){</li>
			<li><span class="com">//your code</span> })</li>
		</ol>
	</pre>
	<p>config是作为requirejs重要的属性之一，这里面可以配置paths的目录以及模块的配置</p>
	<p>baseUrl设置默认的js加载路径</p>
	<p>paths定义了各个模块,也可以用require(["xxxxx"],function(){})来定义</p>
	<p>paths里面定义的模块可以通过require来调用,实际的目录以baseUrl下面加载的目录为准</p>
	<p>下面的requriejs(["globaljs","pageajax"],callback)，请求执行globaljs,pageajax(这两个之前定义过的模块),callback回调函数执行requirejs后执行callback</p>
	<p>这里也能这样定义一个模块</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="zifu">define("moduleA",["pageajax","globaljs"],function(){ console.log("finish!")})</span></li>
			<li>require(["moduleA"])</li>
		</ol>
	</pre>
	<p>用define定义一个moduleA的模块，这个模块可以在接下来的require(["moduleA"])调用，其实这个moduleA内部包含了"pageajax","globaljs"这两个模块,这两个模块是依次按照顺序执行的</p>
	<p>初识总结:</p>
	<p>ReuqireJS能够提升网页的性能，在加载JS的同时也能够加载DOM结构，唯一一点不足的就是在加载JS时不能向DOM结构里增加新的标签(这个之前有试过，在js里面用document.write写入DOM这时的浏览器的console会报错.),Reuqire JS还是比较适合加载海量JS的网站.</p>
	<p>最后附上globaljs与pageajax的图(代码太多了直接上图):</p>
	<p class="ajax-img-block"><img src="../img/requirejs/ajax.png"></p>
</body>
</html>