<div class="row">
	<table class="table table-bordered table-hover table-responsive table-striped table-word-wrap">
		<tr><th>Product ID</th><th>Title</th><th>Description</th><th>Price</th><th>Shipping</th></tr>
		<tr ng-click="loadProduct(products[$index].productId);" ng-repeat="product in products | filter: search">
			<td>{{ product.productId }}</td>
			<td>{{ product.title }}</td>
			<td>{{ product.description }}</td>
			<td>{{ product.price }}</td>
			<td>{{ product.shipping }}</td>
		</tr>
	</table>
</div>