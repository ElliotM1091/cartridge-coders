<div class="container">
	<form name="createProduct" id="createProduct" class="form-horizontal well" ng-controller="ProductController"
			ng-submit="submit(formData, createProduct.$valid);" novalidate>
		<h3>Create Product</h3>
		<div class="form-group"
			  ng-class="{ 'has-error': createProduct.productTitle.$touched && createProduct.productTitle.$invalid }">
			<label for="productTitle">Product Title</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user"></i>
				</div>
				<input type="text" id="productTitle" name="productTitle" class="form-control"
						 ng-model="createProduct.productTitle" ng-minlength="4" ng-maxlength="64" ng-required="true"/>
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="createProduct.productTitle.$error"
				  ng-if="createProduct.productTitle.$touched" ng-hide="createProduct.productTitle.$valid">
				<p ng-message="minlength">Product title is too short.</p>
				<p ng-message="maxlength">Product title is too long.</p>
				<p ng-message="required">Please enter a product title.</p>
			</div>
		</div>

		<div class="form-group"
			  ng-class="{ 'has-error': createProduct.productDescription.$touched && createProduct.productDescription.$invalid }">
			<label for="productDescription">Product Description</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user"></i>
				</div>
				<input type="text" id="productDescription" name="productDescription" class="form-control"
						 ng-model="createProduct.productDescription" ng-minlength="4" ng-maxlength="255" ng-required="true"/>
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="createProduct.productDescription.$error"
				  ng-if="createProduct.productDescription.$touched" ng-hide="createProduct.productDescription.$valid">
				<p ng-message="minlength">Product description is too short.</p>
				<p ng-message="maxlength">Product description is too long.</p>
				<p ng-message="required">Please enter a product description.</p>
			</div>
		</div>

		<div class="form-group"
			  ng-class="{ 'has-error': createProduct.productPrice.$touched && createProduct.productPrice.$invalid }">
			<label for="productPrice">Product Price</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user"></i>
				</div>
				<input type="text" id="productPrice" name="productPrice" class="form-control"
						 ng-model="createProduct.productPrice" ng-min="0" ng-max="999999" ng-required="true"/>
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="createProduct.productPrice.$error"
				  ng-if="createProduct.productPrice.$touched" ng-hide="createProduct.productPrice.$valid">
				<p ng-message="min">Product price is too low.</p>
				<p ng-message="max">Product price is too high.</p>
				<p ng-message="required">Please enter product price.</p>
			</div>
		</div>

		<div class="form-group"
			  ng-class="{ 'has-error': createProduct.productShipping.$touched && createProduct.productShipping.$invalid }">
			<label for="productShipping">Product Shipping</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user"></i>
				</div>
				<input type="text" id="productShipping" name="productShipping" class="form-control"
						 ng-model="createProduct.productShipping"  ng-min="0" ng-required="true"/>
				ng-max="9999"		</div>
			<div class="alert alert-danger" role="alert" ng-messages="createProduct.productShipping.$error"
				  ng-if="createProduct.productShipping.$touched" ng-hide="createProduct.productShipping.$valid">
								<p ng-message="min">Product shipping is too low.</p>
				<p ng-message="max">Product shipping is too high.</p>
				<p ng-message="required">Please enter product shipping.</p>
			</div>
		</div>

		<h5>Product Form Data</h5>
		<p ng-show="createProduct.$valid"><em>Form data is valid!</em></p>
		<p ng-hide="createProduct.$valid"><em>Form data is invalid!</em></p>
		<pre></pre>
		<uib-alert ng-repeat="alert in alerts" type="" close="alerts.length = 0;"></uib-alert>
	</form>
</div>
