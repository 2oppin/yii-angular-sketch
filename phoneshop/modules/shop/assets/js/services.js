'use strict';

/* Services */

var shopServices = angular.module('shopServices', ['ngResource']);

shopServices.factory('Product', ['$resource',
  function($resource){
    return $resource('/shop/products/view?id=:productId', {}, {
      query: {method:'GET', params:{productId:'phones'}, isArray:true}
    });
  }]);

shopServices.factory('Department', ['$resource',
    function($resource){
        return $resource('/shop/departments/view?id=:depId', {}, {
            query: {method:'GET', params:{depId:''}, isArray:true}
        });
    }]);

shopServices.factory('Purchase', ['$resource',
    function($resource){
        return $resource('/shop/purchase/create', {}, {
            query: {method:'POST'}
        });
    }]);
