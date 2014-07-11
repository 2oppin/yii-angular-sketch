<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <!--Sidebar content-->

      Search: <input ng-model="query">
      Sort by:
      <select ng-model="orderProp">
        <option value="name">Alphabetical</option>
        <option value="age">Newest</option>
      </select>

    </div>
    <div class="span10">
      <!--Body content-->

        <ul class="phones">
            <li ng-repeat="product in products | filter:query | orderBy:orderProp"
                class="thumbnail phone-listing">
                <a href="products/{{product.id}}" class="thumb"><img ng-src="{{product.imageUrl}}"></a>
                <a href="products/{{product.id}}">{{product.name}}</a>
                <p>{{product.snippet}}</p>
                <b>{{price(product.price)}}{{currency.symbol}}</b>
                <a class="btn btn-success" ng:click="addProduct(product)">Buy</a>
            </li>
        </ul>

    </div>
  </div>
</div>
