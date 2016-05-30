<style type="text/css">
	li.L0, li.L1, li.L2, li.L3, li.L5, li.L6, li.L7, li.L8 {
 list-style-type: decimal !important
}
</style>
</style>
</head>
<body onload="window.prettyPrint && prettyPrint();">
	<p>ng-app:指令为AngualrJS应用程序的根元素</p>
    <p>ng-app:指令在页面加载完毕时会自动引导</p>
    <p>ng-app="moudle":连接到module</p>
    <p>JS调用语法:var app=angular.module('myApp',[]);</p>
    <p>app.controller('myCtrl',function($scope){
    <p>$scope.firstName="Jhon";</p>
    })</p>
    <p>绑定firstName这个ng-model</p>
    <p>ng-init:指令为AngularJS应用程序定义了初始值，通常情况下，不使用ng-init使用ng-model来代替</p>
    <p>ng-model:绑定HTML元素到应用程序数据</p>
    <p>为应用程序数据提供类型验证(invalid、dirty、touched、error)</p>
    <p>为HTML元素提供CSS类</p>
    <p>绑定HTML元素到HTML表单。</p>
    <p>ng-repeat:指令对于集合中(数组中)的每个项会克隆一次HTML元素</p>
    <P>使用.directive函数添加自定义的指令:</p>
    <p>例如要建立:</p>
    <p>&lt;noob-directive&gt; &lt;/noob-directive&gt;要使用属性时要调用restrict:A这个也是一个默认值</p>
    <p>&lt;div class = "noob-directive"&gt;&lt;/div&gt;要使用属性时要调用restrict:C</p>
    <p>
        E 只限元素名使用
        A 只限属性使用
        C 只限类名使用
        M 只限注释使用
    </p>
    <p>JS调用语法:var app=angular.module('myApp',[]);</p>
    <p>app.directive('noobDirective',function($scope){ //Directive要大写</p>
    <p>var option={</p>
    <p>restrict:"AEC",</p>
    <p>template:"Hello,Directive",</p>
    }</p>
    })</p>
    <p>双向绑定:ng-model="name" {{name}} 都可以通过$scope.name来控制实现双向绑定,ng-bind{{xxx}}是从controller中得到数据然后显示在view中</p>
    <p>ng-show提示信息会在ng-show属性返回true的情况下显示</p>
    <p>ng-model会根据表单区域的状态添加/移除以下类{</p>
    ng-empty
    ng-not-empty
    ng-touched
    ng-untouched
    ng-valid
    ng-invalid
    ng-dirty
    ng-pending
    ng-pristineng-empty}</P>
    <p>根作用域:$rootscope可以作用域整个应用中,是各个controller中的scope的桥梁。用rootscope定义的值，可以在各个controller中使用。</p>
    <p>AngularJS过滤器:</p>
    <p>
        currency :格式化数字为货币格式
        filter:从数组项中选择一个子集
        lowercase:格式化字符串为小写
        orderBy:根据某个表达式排列数组
        uppercase：格式化字符串为大写
    </p>
    <p>{{lastname|uppercase}}将lastname转换为大写</p>
    <p>AngularJS服务</p>
    <p>$location.absUrl(); 能够获得当前的url地址类似于JS中location.href</p>
    <p>$http.get("welcome.html").then(function(response){</p>
    <p>$scope.myWelcome=reponse.data;</p>
    <p>})</p>
    <p>$timeout相当于window.setTimout()</p>
    <p>$timeout(function(){</p>
    <p>    $scope.myHeader="How are you today?";</p>
    <p>},2000)</p>
    <p>$interval相当于window.interval()</p>
    <p>$interval(function(){</p>
    <p>    $scope.theTime=new Date().toLocaleTimeString();</p>
    <p>},1000);</p>
    <p>自定义创建模块hexafy</p>
    <p>app.service('hexafy',function(){
        <p>this.myFunc=function(x){</p>
        <p>    return x.toString(16);</p>
    <p>    }</p>
    ]})</p>
    <p>
       <p> app.controller('myCtrl',function(hexafy){</p>
        <p>    return hexafy.Func(255);</p>
    <p>    })</p>
    </p>
    <div class="version-area clearfix"> 
        
    </div>

</body>