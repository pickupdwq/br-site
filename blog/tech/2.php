<p>angular.module("Weapp",[</p>
<p>    "ngRoute",</p>
<p>    "bgResource"</p>
<p>])</p>
<p>.config(function($routerProvider){</p>
<p>   $routerProvider</p>
<p>    .when("/",{</p>
<p>          templateUrl:"index.html",</p>
<p>          controller:"indexCtrl",</p>
<p>          controllerAs:"a_indexCtrl"</p>
<p>})</p>
    
    
<p>.when("/",{</p>
<p>          templateUrl:"index.html",</p>
<p>          controller:"indexCtrl",</p>
<p>          controllerAs:"a_indexCtrl"</p>
<p>})

    
<p>.when("/",{</p>
<p>          templateUrl:"index.html",</p>
<p>          controller:"indexCtrl",</p>
<p>          controllerAs:"a_indexCtrl"</p>
<p>})</p>



<p>})</p>

<p>config.js 和config.php配置</p>
<p>cfg是目录的的配置路径</p>
<p>angular.module('weapp')</p>
<p>.value('cfg',{</p>
<p>    baseUrl:'http://192.168.10.208:8080/jianfei/index.php',</p>
<p>    baseImgUrl:'http://192.168.10.208:8080/jianfei'</p>
<p>})</p>

<p>后台给config.php  前端将config.php改为config.js</p>
<p>放在Services目录下</p>
<p>格式</p>
<p>angular.module("weapp")</p>
<p>.factory('jianFeifactory',function($resource,cfg){</p>
<p>    return{</p>
<p>homepage: $resource(cfg.baseUrl + 'api/homepage/:action', {}, {</p>
<p>'fenlei': {method:'GET', params:{action:'fenlei'},isArray:false},</p>
<p>'xuexiao': {method:'GET', params:{action:'xuexiao'},isArray:false},</p>
<p>'jiage': {method:'GET', params:{action:'jiage'},isArray:false},</p>
<p>'zhuangtai': {method:'GET', params:{action:'zhuangtai'},isArray:false},</p>
<p>'dingdan': {method:'GET', params:{action:'dingdan'},isArray:false},</p>
<p>'wdingdan': {method:'GET', params:{action:'wdingdan'},isArray:false},</p>
<p>'touxiang': {method:'GET', params:{action:'touxiang'},isArray:false}, </p>
<p>'ordertype': {method:'GET', params:{action:'ordertype'},isArray:false}, </p>
<p>'shangchuan': {method:'POST', params:{action:'shangchuan'},isArray:false},</p>
<p>'xianshi': {method:'GET', params:{action:'xianshi'},isArray:false},</p>
<p>'lipei': {method:'GET', params:{action:'lipei'},isArray:false},</p>
<p>'chengjidan':{method:'POST', params:{action:'chengjidan'},isArray:false}</p>
<p>}),</p>
<p>user: $resource(cfg.baseUrl + 'api/user/:action', {}, {</p>
<p>'record': {method:'POST', params:{action:'record'},isArray:false},</p>
<p>'wxpay': {method:'POST', params:{action:'wxpay'},isArray:false},</p>
<p>'wxNotify': {method:'GET', params:{action:'wxNotify'},isArray:false},</p>
<p>'info': {method:'GET', params:{action:'info'},isArray:false},</p>
<p>'yazhu': {method:'GET', params:{action:'yazhu'},isArray:false},</p>
<p>'sendDuanxin': {method:'POST', params:{action:'sendDuanxin'},isArray:false}</p>
<p>}),</p>
<p>wechat: $resource(cfg.baseUrl + 'api/wechat/:action', {}, {</p>
<p>'getSignPackage': {method:'GET', params:{action:'getSignPackage'},isArray:false},</p>
<p>'downloadImage': {method:'GET', params:{action:'downloadImage'},isArray:false}</p>
<p>})</p>
    

<p>}</p>
<p>})</p>


<p>与后台数据交互的方法:</p>
<p>$scope.getSchool=function(){</p>
<p>     jianFei.homepage.xuexiao({</p>
<p>          //要发送的数据</p>
<p>},function(data){</p>
<p>          //接收到的数据</p>
<p>          $scope.xuexiao=data.info;</p>
<p>          $scope.selected_school=data.default.school_id;</p>
<p>},function(data){</p>
<p>         alert(data.data.info) //失败的数据</p>
<p>}</p>
<p>)}</p>  



<p>修改SQL以及环境的方法:
<p>mysql:  cmd将sql拖入cmd  输入
<p>SET PASSWORD FOR root@localhost=PASSWORD('root'); -uroot

<p>1.将数据库导入到WampServer中

<p>2.修改SQL的用户名和密码
<p>目录:
<p>Appilcation/Common/Conf/config.php
<p>Application/User/Conf/config.php

<p>使用run的时候  run表示注入器注入完成后执行一次
<p>.run(function($templateCache){
<p>   $templateCache.put('index.html','<div>Hello</div>')
<p>})
<p>.directive('hello',function($templateCache){
<p>    return{
<p>          replace:ture,
<p>          transclude:ture,
<p>          //template:$templateCache.get('index.html'),
<p>            tempalte:'<div>hello<div ng-transclude></div></div>'   //将原来的hello标签内的内容放入ng-transclude中
<p>}
<p>})


<p>link(scope,element,attr)

<p>.controller("myApC",[‘$scope’,function($scope){
<p>          $scope.loderData=function(){
<p>              console.log("加载中...")
<p>}
<p>}])

<p>link:function(scope,element,attr){
<p>     element.bind("mouseenter",function(){
<p>          scope.$apply("loderData");
<p>})    
<p>}

<loader howtoLoader="l1()"></loader>

<p>.directive("loader",function(){
<p>    link:function(scope,element,attr){
<p>    scope.$apply(howtoloader);
<p>}
<p>})


<p>独立的scope  
<p>directive("hello",function(){
<p>    return{
<p>          restrict:‘AEC’,
<p>          scope:{},
          
<p>}
<p>})

<form name="myForm" ng-submit="save()">
<input type="text" require>
<input type="password" require>
<input type="button" ng-disabled="myForm.$invalid">
</form>

<p>.factory("newF",function($scope){
<p>          return{
<p>              name:'xxx',
<p>}
<p>})

<p>.controller(‘myc’,['$scope','$injector',function($scope,$injector){
<p>          $injector.invoke(function(name){
<p>              console.log(newF.name);
<p>})
<p>}])


































