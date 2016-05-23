angular.module("Weapp",[
    "ngRoute",
    "bgResource"
])
.config(function($routerProvider){
    $routerProvider
    .when("/",{
          templateUrl:"index.html",
          controller:"indexCtrl",
          controllerAs:"a_indexCtrl"
})
    
    
.when("/",{
          templateUrl:"index.html",
          controller:"indexCtrl",
          controllerAs:"a_indexCtrl"
})

    
.when("/",{
          templateUrl:"index.html",
          controller:"indexCtrl",
          controllerAs:"a_indexCtrl"
})



})

config.js 和config.php配置
cfg是目录的的配置路径
angular.module('weapp')
.value('cfg',{
    baseUrl:'http://192.168.10.208:8080/jianfei/index.php',
    baseImgUrl:'http://192.168.10.208:8080/jianfei'
})

后台给config.php  前端将config.php改为config.js
放在Services目录下
格式
angular.module("weapp")
.factory('jianFeifactory',function($resource,cfg){
    return{
homepage: $resource(cfg.baseUrl + 'api/homepage/:action', {}, {
'fenlei': {method:'GET', params:{action:'fenlei'},isArray:false},
'xuexiao': {method:'GET', params:{action:'xuexiao'},isArray:false},
'jiage': {method:'GET', params:{action:'jiage'},isArray:false},
'zhuangtai': {method:'GET', params:{action:'zhuangtai'},isArray:false},
'dingdan': {method:'GET', params:{action:'dingdan'},isArray:false},
'wdingdan': {method:'GET', params:{action:'wdingdan'},isArray:false},
'touxiang': {method:'GET', params:{action:'touxiang'},isArray:false}, 
'ordertype': {method:'GET', params:{action:'ordertype'},isArray:false}, 
'shangchuan': {method:'POST', params:{action:'shangchuan'},isArray:false},
'xianshi': {method:'GET', params:{action:'xianshi'},isArray:false},
'lipei': {method:'GET', params:{action:'lipei'},isArray:false},
'chengjidan':{method:'POST', params:{action:'chengjidan'},isArray:false}
}),
user: $resource(cfg.baseUrl + 'api/user/:action', {}, {
'record': {method:'POST', params:{action:'record'},isArray:false},
'wxpay': {method:'POST', params:{action:'wxpay'},isArray:false},
'wxNotify': {method:'GET', params:{action:'wxNotify'},isArray:false},
'info': {method:'GET', params:{action:'info'},isArray:false},
'yazhu': {method:'GET', params:{action:'yazhu'},isArray:false},
'sendDuanxin': {method:'POST', params:{action:'sendDuanxin'},isArray:false}
}),
wechat: $resource(cfg.baseUrl + 'api/wechat/:action', {}, {
'getSignPackage': {method:'GET', params:{action:'getSignPackage'},isArray:false},
'downloadImage': {method:'GET', params:{action:'downloadImage'},isArray:false}
})
    

}
})


与后台数据交互的方法:
$scope.getSchool=function(){
     jianFei.homepage.xuexiao({
          //要发送的数据
},function(data){
          //接收到的数据
          $scope.xuexiao=data.info;
          $scope.selected_school=data.default.school_id;
},function(data){
         alert(data.data.info) //失败的数据
}
)}   



修改SQL以及环境的方法:
mysql:  cmd将sql拖入cmd  输入
SET PASSWORD FOR root@localhost=PASSWORD('root'); -uroot

1.将数据库导入到WampServer中

2.修改SQL的用户名和密码
目录:
Appilcation/Common/Conf/config.php
Application/User/Conf/config.php

使用run的时候  run表示注入器注入完成后执行一次
.run(function($templateCache){
    $templateCache.put('index.html','<div>Hello</div>')
})
.directive('hello',function($templateCache){
    return{
          replace:ture,
          transclude:ture,
          //template:$templateCache.get('index.html'),
            tempalte:'<div>hello<div ng-transclude></div></div>'   //将原来的hello标签内的内容放入ng-transclude中
}
})


link(scope,element,attr)

.controller("myApC",[‘$scope’,function($scope){
          $scope.loderData=function(){
              console.log("加载中...")
}
}])

link:function(scope,element,attr){
     element.bind("mouseenter",function(){
          scope.$apply("loderData");
})    
}

<loader howtoLoader="l1()"></loader>

.directive("loader",function(){
    link:function(scope,element,attr){
    scope.$apply(howtoloader);
}
})


独立的scope  
directive("hello",function(){
    return{
          restrict:‘AEC’,
          scope:{},
          
}
})

<form name="myForm" ng-submit="save()">
<input type="text" require>
<input type="password" require>
<input type="button" ng-disabled="myForm.$invalid">
</form>

.factory("newF",function($scope){
          return{
              name:'xxx',
}
})

.controller(‘myc’,['$scope','$injector',function($scope,$injector){
          $injector.invoke(function(name){
              console.log(newF.name);
})
}])


使用provider的时候也要使用$get
.provider("testProvider",function(){
          var name="xxx";
          $
}
})
































