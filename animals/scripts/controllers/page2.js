'use strict';

/**
 * @ngdoc function
 * @name animalsApp.controller:Page2Ctrl
 * @description
 * # Page2Ctrl
 * Controller of the animalsApp
 */
angular.module('animalsApp')
  .controller('Page2Ctrl', function ($scope) {
     $scope.imgContent = [
      {
      	"imgURL":"images/2.jpg",
      	"content":"胖次鱼嘟嘟",
      	"next":"下一页"
      }
    ];
  });
