'use strict';

/* Controllers */
var shopControllers = angular.module('shopControllers', []);

shopControllers.controller('DepartmentsListCtrl', ['$scope', 'Department',
    function ($scope, Department) {
        $scope.departments=Department.query();
    }]);

shopControllers.controller('ProductListCtrl', ['$scope', 'Product',
  function ($scope, Product) {
      $scope.products = Product.query();
      $scope.orderProp = 'age';
  }]);

shopControllers.controller('ProductDetailCtrl', ['$scope', '$routeParams', 'Product',
  function($scope, $routeParams, Product) {
      $scope.product = Product.get({productId: $routeParams.productId}, function(item) {
          $scope.mainImageUrl = item.images[0];
      });
      $scope.setImage = function(imageUrl) {
          $scope.mainImageUrl = imageUrl;
      }
  }]);
  
shopControllers.controller('CartFormCtrl', ['$scope', '$rootScope','$http', 'Purchase', CartForm]);