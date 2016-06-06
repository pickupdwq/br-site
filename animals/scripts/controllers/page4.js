'use strict';

/**
 * @ngdoc function
 * @name animalsApp.controller:Page4Ctrl
 * @description
 * # Page4Ctrl
 * Controller of the animalsApp
 */
angular.module('animalsApp')
  .controller('Page4Ctrl', function ($scope) {
     $scope.imgContent = [
      {
      	"imgURL":"images/4.jpg",
      	"content":"胖次鱼嘟嘟",
      	"next":"下一页"
      }
    ];
  });
