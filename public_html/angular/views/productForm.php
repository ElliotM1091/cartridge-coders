<div class="container">
	<form name="createProduct" id="createProduct" class="form-horizontal well" ng-controller="ProductController" ng-submit="submit(formData, createProduct.$valid);" novalidate>
	<h3>Create Product</h3>
	<div class="form-group" ng-class="{ 'has-error': createProduct.productTitle.$touched && createProduct.productTitle.$invalid }">
		<label for="productTitle">Product Title</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-user"></i>
			</div>
			<input type="text" id="productTitle" name="productTitle" class="form-control" ng-model="createProduct.productTitle" ng-minlength="4" ng-maxlength="64" ng-required="true" />
		</div>
		<div class="alert alert-danger" role="alert" ng-messages="createProduct.productTitle.$error" ng-if="createProduct.productTitle.$touched" ng-hide="createProduct.productTitle.$valid">
			<p ng-message="minlength">Product title is too short.</p>
			<p ng-message="maxlength">Product title is too long.</p>
			<p ng-message="required">Please enter a product title.</p>
		</div>
	</div>

	<div class="form-group" ng-class="{ 'has-error': createProduct.productDescription.$touched && createProduct.productDescription.$invalid }">
		<label for="productDescription">Product Description</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-user"></i>
			</div>
			<input type="text" id="productDescription" name="productDescription" class="form-control" ng-model="createProduct.productDescription" ng-minlength="4" ng-maxlength="255" ng-required="true" />
		</div>
		<div class="alert alert-danger" role="alert" ng-messages="createProduct.productDescription.$error" ng-if="createProduct.productDescription.$touched" ng-hide="createProduct.productDescription.$valid">
			<p ng-message="minlength">Product description is too short.</p>
			<p ng-message="maxlength">Product description is too long.</p>
			<p ng-message="required">Please enter a product description.</p>
		</div>
	</div>

	<div class="form-group" ng-class="{ 'has-error': createProduct.productPrice.$touched && createProduct.productPrice.$invalid }">
		<label for="productPrice">Product Price</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-user"></i>
			</div>
			<input type="text" id="productPrice" name="productPrice" class="form-control" ng-model="createProduct.productPrice" ng-min="4" ng-max="255" ng-required="true" />
		</div>
		<div class="alert alert-danger" role="alert" ng-messages="createProduct.productPrice.$error" ng-if="createProduct.productPrice.$touched" ng-hide="createProduct.productPrice.$valid">
			<p ng-message="min">Product price is too short.</p>
			<p ng-message="max">Product price is too long.</p>
			<p ng-message="required">Please enter a product price.</p>
		</div>
	</div>

	<h5>Product Form Data</h5>
	<p ng-show="createProduct.$valid"><em>Form data is valid!</em></p>
	<p ng-hide="createProduct.$valid"><em>Form data is invalid!</em></p>
	<pre></pre>
	<uib-alert ng-repeat="alert in alerts" type="" close="alerts.length = 0;"></uib-alert>
</form>
</div>





<!--		<h1>List Product</h1>-->
<!--<form class="form-horizontal well" action="email.php">-->
<!--	<div class="form-group">-->
<!--		<label for="Title">Title</label>-->
<!--		<div class="input-group">-->
<!--			<div class="input-group-addon">-->
<!--				<i class="fa fa-pencil" aria-hidden="true"></i>-->
<!--			</div>-->
<!--			<input type="text" class="form-control" id="title" title="title" placeholder="Title">-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="form-group">-->
<!--		<label for="price">Price</label>-->
<!--		<p class="fee">*There is a administration fee of 1.99 for all items sold</p>-->
<!--		<div class="input-group">-->
<!--			<div class="input-group-addon">-->
<!--				<i class="fa fa-usd" aria-hidden="true"></i>-->
<!--			</div>-->
<!--			<input type="number" class="form-control" id="price" name="price" placeholder="$0.00">-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="form-group">-->
<!--		<label for="shipping">Shipping cost</label>-->
<!--		<div class="input-group">-->
<!--			<div class="input-group-addon">-->
<!--				<i class="fa fa-usd" aria-hidden="true"></i>-->
<!--			</div>-->
<!--			<input type="number" class="form-control" id="shipping" name="shipping" placeholder="$0.00">-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="form-group">-->
<!--		<label for="Image">Image</label>-->
<!--		<div class="input-group">-->
<!--			<div class="input-group-addon">-->
<!--				<i class="fa fa-file-image-o" aria-hidden="true"></i>-->
<!--			</div>-->
<!--			<input  type="file" class="form-control" id="shipping" name="image" placeholder="jpg/png">-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="form-group">-->
<!--		<label for="description">Description</label>-->
<!--		<div class="input-group">-->
<!--			<div class="input-group-addon">-->
<!--				<i class="fa fa-pencil" aria-hidden="true"></i>-->
<!--			</div>-->
<!--			<textarea class="form-control" rows="5" id="description" name="description" placeholder="Description(255 Characters total)"></textarea>-->
<!--		</div>-->
<!--	</div>-->
<!--	<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>-->
<!--	<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>-->
<!--</form>-->
<!--</body>-->
<!--	</html>-->