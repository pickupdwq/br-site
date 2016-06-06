'use strict';

/**
 * @ngdoc function
 * @name animalsApp.controller:Page3Ctrl
 * @description
 * # Page3Ctrl
 * Controller of the animalsApp
 */
angular.module('animalsApp')
  .controller('Page3Ctrl', function ($scope) {
     $scope.imgContent = [
      {
      	"imgURL":"images/3.jpg",
      	"content":"胖次鱼嘟嘟",
      	"next":"下一页"
      }
    ];
  });
