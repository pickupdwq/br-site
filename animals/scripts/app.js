'use strict';

/**
 * @ngdoc overview
 * @name animalsApp
 * @description
 * # animalsApp
 *
 * Main module of the application.
 */
angular
  .module('animalsApp', [
    'ngAnimate',
    'ngRoute',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/page1', {
        templateUrl: 'views/page1.html',
        controller: 'Page1Ctrl',
        // controllerAs: 'page1'
      })
      .when('/page2', {
        templateUrl: 'views/page2.html',
        controller: 'Page2Ctrl',
        // controllerAs: 'page2'
      })
      .when('/page3', {
        templateUrl: 'views/page3.html',
        controller: 'Page3Ctrl',
        // controllerAs: 'page3'
      })
      .when('/page4', {
        templateUrl: 'views/page4.html',
        controller: 'Page4Ctrl',
        // controllerAs: 'page4'
      })
      .when('/page5', {
        templateUrl: 'views/page5.html',
        controller: 'Page5Ctrl',
        // controllerAs: 'page5'
      })
      .otherwise({
        redirectTo: '/page1'
      });
  });
