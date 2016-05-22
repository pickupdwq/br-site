
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
	<p>在IOS9的网页的监听功能中新增了webkitmouseforcewillbegin,webkitmouseforcedown,webkitmouseforceup,webkitmouseforcechanged这几个事件。</p>
	<p>Use event.webkitForce to create interactivity with the following events and constants.</p>
	<p>从这句话看出使用webkitForce这个属性可以更好地对页面进行交互</p>
	<p>下面有一个栗子(仅适用于6S 6SP):</p>
	<p><a href="http://niko.asitela.com/discovery/3dtouch/">http://niko.asitela.com/discovery/3dtouch/</a></p>
	<p>在手机上的截图是这样的:</p>
	<p class="ajax-img-block"><img src="../img/3dtouch/3d.png"></p>
	<p>Force表示的是当时屏幕的压力,这个压力是可以处理的,在6S 6SP的屏幕上压力的最大值是385g(假如没记错的话),这里的值是换算过来的,接下来看下代码</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="zifu">var</span> element = document.getElementById('forceMe');</li>
			<li>var forceValueOutput = document.getElementById('forceValue');</li>
			<li>var background = document.getElementById('background');</li>
			<li>var touch = null;</li>
			<li><span class="function-sec">addForceTouchToElement(element);</span></li>
		</li>
	</pre>
	<p>这里定义了控制的变量element，就是将要触发的区域, forceValueOutput表示压力的输出值,background即按压的时候背景的blur(模糊程度)变化</p>
	<p>这里讲element传入addForceTouchElement方法计算用户的压力值,</p>
	<p>这里再一次定义三个方法分别是手指按压时，手指移动时，手指按压结束时。(onTouchStart,onTouchMove,checkForce)</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="function">function onTouchStart(e){</span></li>
			<li>e.preventDefault();</li>
			<li>checkForce(e);</li>
			<li>}</li>
			<li><span class="function">function onTouchMove(e)</span></li>
			<li>e.preventDefault();</li>
			<li><span class="function-sec">checkForce(e);</span></li>
			<li>}</li>
			<li><span class="function">function onTouchEnd(e)</span></li>
			<li><span class="function-sec">e.preventDefault();</span></li>
			<li>touch=<span class="function">null;</span></li>
			<li>}</li>
		</ol>
	</pre>
	<p>这里将event事件传入到checkForce方法，这个方法是检测屏幕的按压，可以从e.touchs[0]中获得按压的对象</p>
	<p>下面就是对checkForce方法的解析</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="function">function checkForce(e) {</span></li>
			<li>touch = e.touches[0];</li>
			<li>setTimeout(refreshForceValue.bind(touch), 10);<span class="com">//将touch事件与refreshForceValue这个方法绑定</span></li>
			<li>}</li>
			<li><span class="function">function checkMacForce(e) {</span></li>
			<li>renderElement(e.webkitForce/3);</li>
			<li>checkForce(e);</li>
			<li>}</li>
			<li><span class="function">function refreshForceValue() {<span class="com">//获取屏幕按压值的方法</span></span></li>
			<li>var touchEvent = this;</li>
			<li>var forceValue = 0;<span class="com">//默认的压力也就是手指还没按压的压力值是0</span></li>
			<li>if(touchEvent) {<span class="com">//如果按压了</span></li>
			<li>var touchEvent = <span class="function-sec">this;</span></li>
			<li>forceValue = touchEvent.<span class="attr">force || 0;</span><span class="com">//这里新增了一个触摸事件属性force,这个属性返回一个屏幕的按压值,将这个按压值赋值给forceValue<span></li>
			<li><span class="function-sec">setTimeout(refreshForceValue.bind(touch), 10);</span></li>
			<li>}else{</li>
			<li>forceValue = 0;</li>
			<li>}</li>
			<li><span class="function-sec">renderElement(forceValue);</span><span class="com">//对获取到的数值进行处理</span></li>
			<li>}</li>
		</ol>
	</pre>
	<p>接下来再自定义一个方法对接收到的数据进行可视化操作</p>
	<pre class="prettyprint pre-scrollable linenums">
		<ol class="linenums">
			<li><span class="function">function renderElement(forceValue) {</span></li>
			<li>element.style.<span class="attr">webkitTransform</span>= 'translateX(-50%) translateY(-50%) scale(' + (1 + forceValue * 1.5) + ')';<span class="com">//对控制元素的按压进行操作</span></li>
			<li>background.style.<span class="attr">webkitFilter</span>= 'blur(' + forceValue * 30 + 'px)';<span class="com">//对控制元素的背景blur进行控制</span></li>
			<li>forceValueOutput.<span class="attr">innerHTML</span>= 'Force: ' + forceValue.toFixed(4);<span class="com">//对按压的压力值进行输出</span></li>
			<li>}</li>
		</ol>
	</pre>
	<p>总结:IOS9提供的force属性可以获得屏幕的压力感应,通过压力感应的值可以使得页面获得更友好的交互..</p>
</body>
</html>