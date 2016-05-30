
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
<body>
	<p>先来一个简单的例子</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="var">var</span> color="red";</li>
			<li><span class="function">function</span> f1(){</li>
				<li>alert(color);</li>
			<li>}</li>
			<li><span class="function">f1();</span><span class="com">//red</span></li>
			<li><span class="var">var</span> color="red";</li>
			<li><span class="function">function</span> f2(){</li>
			<li>	var color="blue";</li>
			<li>	alert(color);</li>
			<li>}</li>
			<li><span class="function">f2();</span><span class="com">//blue</span></li>
		</ol>
	</pre>
	<p>第一个f1在外部定义了一个color变量，这个变量是属于外部的变量，而f2在外部定义一个color变量后，在自己本身函数内定义了一个局部变量color="red"，执行方法后的结果为blue；这说明函数内的var 局部定义可以保护变量，f2这就是最简单的闭包</p>
	<p>接下来再看一段例子：</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="function">function</span> f3(){</li>
				<li>var num233=22;</li>
			<li>	num234=33;</li>
			<li>}</li>
			<li><span class="function">f3();</span></li>
			<li><span class="function">console.log(num233)</span><span class="com"> //此时的浏览器会报错</span></li>
			<li><span class="function">console.log(num234)</span><span class="com"> // 33</span></li>
		</ol>
	</pre>
	<p>这个例子说明了函数内的var具有保护函数的变量功能,如果在函数内定义了一个全局的变量num234那么这个变量能够在函数外使用.</p>
	<p>那么如何才能从外部获得子元素的变量呢？接下来的例子就可以说明。</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="function">function</span> f4(){</li>
				<li><span class="var">var</span>num=22;</li>
				<li><span class="function">function</span>f5(){</li>
				<li>	<span class="function">return num;</span></li>
				<li>}</li>
				<li>return f5;</li>
			<li>}</li>
			<li>var getValue=f4();</li>
			<li><span class="function">getValue();</span>// 22</li>
		</ol>
	</pre>
	<div class="main-content-imgblock">
                        <img src="./img/closure/pic.png">
    </div>
	<p>这里定义了一个外部函数f4和内部函数f5，（个人理解：在执行f4函数的时候，num22这个变量将会出现在f4的方法和内存中并且返回一个f5方法在内存中,再一次调用变量getValue的时候就调用了f5这个变量，也就是说f5这个方法离不开f4方法，一旦f4方法销毁了，f5方法将会执行不了）这就是更深层次的闭包。</p>
	<p>那么问题来了，变量getValue暴露在了内存中，这将会影响到页面加载的性能，那么可以用一种方法来释放已经暴露的变量，这就是Javascript的内存回收机制</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="function">function</span> f4(){</li>
				<li><span class="var">var</span> num=22;</li>
				<li><span class="function">function</span> f5(){</li>
				<li>	return num;</li>
				<li>}</li>
				<li>return f5;</li>
			<li>}</li>
			<li>var getValue=f4();</li>
			<li><span class="function">getValue();</span>// 22</li>
			<li>delete getValue;</li>
		</ol>
	</pre>
	<p>这里使用了delete，可以将原来定义的变量，但是现在主流的浏览器都有自动的回收机制。</p>
	<p>总结:</p>
	<p>从技术上来讲，在JS中，每个function都是闭包，因为它总是能访问在它外部定义的数据。采用闭包可以有效的保护变量</p>
	<p>但是闭包会造成变量在内存中持久占用，因此会有一定的性能问题，最好不要轻易使用，即便使用也要在恰当的实际进行释放。</p>
	<p>主要应用闭包场合主要是为了：设计私有的方法和变量。</p>
	<p>局部变量只在函数执行的过程中存在。</p>
</body>
</html>