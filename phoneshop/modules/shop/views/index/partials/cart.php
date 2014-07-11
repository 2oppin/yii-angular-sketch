<div id="shopping_cart" ng:controller="CartForm">
    <form>
    <div ng:repeat="cr in currencies">
        <span class="badge {{cr==currency? 'badge-success':''}}" ng:click="setCurrency(cr)">{{cr.symbol}}</span>
    </div>
    <table class="table">
        <tr>

            <th>Picture</th>
            <th>Qty</th>
            <th>Cost</th>
            <th>Total</th>
            <th></th>
        </tr>
        <tr ng:repeat="item in invoice.items">
            <td><img ng:src="{{item.img}}"></td>
            <td><input type="number" min="0" ng:model="item.qty" ng:required class="input-mini"></td>
            <td>{{price(item.cost)}}{{currency.symbol}}</td>
            <td>{{price(item.qty * item.cost)}}{{currency.symbol}}</td>
            <td>
                [<a href ng:click="removeItem($index)">X</a>]
            </td>
        </tr>
        <tr>
            <td><button ng:click="submitForm()" >Create request</button></td>
            <td></td>
            <td>Total:</td>
            <td>{{price(total())}}{{currency.symbol}}</td>
        </tr>
    </table>
    </form>
</div>
