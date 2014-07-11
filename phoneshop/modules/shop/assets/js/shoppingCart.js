function showCart(){
  $('#shopping_cart').dialog({
      width: "500px",
      title: "Shopping Cart"
  });
}
function CartForm($scope,$rootScope, $http, Purchase) {
    $scope.invoice = {
        items: []
    };

    $scope.currencies=[
        {cur:"USD",symbol:"$",fromUSD:'1'},
        {cur:"EUR",symbol:"€",fromUSD:'0.73'},
        {cur:"GBP",symbol:"£",fromUSD:'0.61'},
        {cur:"UAH",symbol:"₴",fromUSD:'11.8'}
    ];
    $rootScope.currency = $scope.currencies[3];

    $scope.setCurrency=function(cr){
        $rootScope.currency  = cr;
    }

    $rootScope.price=function(val){
        return (val*$rootScope.currency.fromUSD).toFixed(2);
    }

    $rootScope.addProduct = function(product) {
        for(var i=0;i<$scope.invoice.items.length;i++){
            if($scope.invoice.items[i].id == product.id)
                return $scope.invoice.items[i].qty++;
        }
        $scope.invoice.items.push({
            qty: 1,
            img: product.imageUrl,
            id: product.id,
            cost: product.price
        });
    };

    $scope.removeItem = function(index) {
        $scope.invoice.items.splice(index, 1);
    };

    $scope.total = function() {
        var total = 0;
        angular.forEach($scope.invoice.items, function(item) {
            total += item.qty * item.cost;
        })

        return total;
    };
    
    $scope.submitForm = function(item, event) {
       console.log("--> Submitting form");
       console.log(Purchase);
       var dataObj = [{"t":1}];
       for(var i = 0;i < $scope.invoice.length; i++)
           dataObj.push({
               'id':$scope.invoice[i].id
           });
       console.log(dataObj);

       var bought = new Purchase(dataObj);
       bought.$query();
     }
}