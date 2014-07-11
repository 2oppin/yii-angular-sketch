<style>
    body{
        background-image: url(<?php echo ShopModule::$assetsPath;?>/img/wood.png);
    }
</style>
<div class="container-fluid departments-index">
    <div class="row-fluid">
        <ul class="ch-grid">
            <li ng-repeat="dep in departments">
                <div class="ch-item">
                    <div class="ch-info">
                        <h3>{{dep.title}}</h3>
                        <p>{{dep.description}} <a href="{{dep.link}}">View store</a></p>
                    </div>
                    <div class="ch-thumb" style="background-image: url(<?php echo ShopModule::$assetsPath;?>/img/{{dep.image}});z-index:12;"></div>
                </div>
            </li>
        </ul>
    </div>
</div>
