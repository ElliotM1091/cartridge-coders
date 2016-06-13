<!doctype html>

<html lang="en" ng-app="AccountProductController">
	<head>

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
		

	</head>

<body>

	<div ng-controller = "AccountProductController">
		<ul>
			<li class="productlist" ng-repeat="items in productlist">
				<div class=""info">
				<p>{{item.productAccountId}}</p>
				<p>{{item.productTitle}}</p>
				<p>{{item.productPrice}}</p>
	</div>


			</li>
		</ul>






	</div>


</body>


<!--<div class="row">-->
<!--	<table class="table table-bordered table-hover table-responsive table-striped table-word-wrap">-->
<!--		<tr><th>Product ID</th><th>Title</th><th>Description</th><th>Price</th><th>Shipping</th></tr>-->
<!--		<tr ng-click="loadProduct(products[$index].productId);" ng-repeat="product in products | filter: search">-->
<!--			<td>{{ product.productId }}</td>-->
<!--			<td>{{ product.title }}</td>-->
<!--			<td>{{ product.description }}</td>-->
<!--			<td>{{ product.price }}</td>-->
<!--			<td>{{ product.shipping }}</td>-->
<!--		</tr>-->
<!--	</table>-->
<!--</div>-->










</html>