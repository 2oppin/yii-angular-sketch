'use strict';

/* App Module */

var shopApp = angular.module('shopApp', [
  'ngRoute',
  'shopAnimations',
  'shopControllers',
  'shopFilters',
  'shopServices',
]);

shopApp.config(['$routeProvider', '$locationProvider',
  function($routeProvider,$locationProvider) {

    $routeProvider.
      when('/shop/departments', {
        templateUrl: '/shop/departments/index',
        controller: 'DepartmentsListCtrl'
      }).
      when('/shop/products', {
        templateUrl: '/shop/products/list',
        controller: 'ProductListCtrl'
      }).
      when('/shop/products/:productId', {
        templateUrl: '/shop/products/detail',
        controller: 'ProductDetailCtrl'
      }).
      otherwise({
        redirectTo: '/shop/departments'
      });
      
      $locationProvider.html5Mode(true);
  }]);

shopApp.run(function($rootScope) {
   $rootScope.$on('$routeChangeSuccess', function(ev,data) {   
     if (data.$$route && data.$$route.controller)
       $rootScope.controller = data.$$route.controller;
   })
});