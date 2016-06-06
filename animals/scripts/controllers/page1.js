'use strict';

/**
 * @ngdoc function
 * @name animalsApp.controller:Page1Ctrl
 * @description
 * # Page1Ctrl
 * Controller of the animalsApp
 */
angular.module('animalsApp')
  .controller('Page1Ctrl', function ($scope) {
     $scope.imgContent = [
      {
      	"imgURL":"images/1.jpg",
      	"content":"胖次鱼嘟嘟",
      	"next":"下一页"
      }
    ];
  });
