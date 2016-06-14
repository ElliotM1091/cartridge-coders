<!--<div class="row" ng-class="{ 'spacer': collapseAddForm }">
	<button type="button" class="btn btn-lg btn-info" ng-click="collapseAddForm = !collapseAddForm"><i class="fa fa-plus"></i> Add Product</button>
<!--	<search-misquote></search-misquote>
</div>-->

	<form name="addProductForm" id="addProductForm" class="form-horizontal well" ng-submit="createProduct(newProduct, addProductForm.$valid);" uib-collapse="collapseAddForm" novalidate>
		<h2>Create Product</h2>
		<hr />
		<div class="form-group" ng-class="{ 'has-error': addProductForm.addTitle.$touched && addProductForm.addTitle.$invalid }">
			<label for="addTitle">Title</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-comment" aria-hidden="true"></i>
				</div>
				<input type="text" name="addTitle" id="addTitle" class="form-control" maxlength="255" ng-model="newProduct.productTitle" ng-minlength="1" ng-maxlength="255" ng-required="true" />
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="addProductForm.addTitle.$error" ng-if="addProductForm.addTitle.$touched" ng-hide="addProductForm.addTitle.$valid">
				<p ng-message="required">Title is required.</p>
				<p ng-message="minlength">Title cannot be empty.</p>
				<p ng-message="maxlength">Title is too long.</p>
			</div>
		</div>
		<div class="form-group" ng-class="{ 'has-error': addProductForm.addDescription.$touched && addProductForm.addDescription.$invalid }">
			<label for="addDescription">Description</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
				</div>
				<input type="text" name="addDescription" id="addDescription" class="form-control" maxlength="64" ng-model="newProduct.productDescription" ng-minlength="1" ng-maxlength="64" ng-required="true" />
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="addProductForm.addDescription.$error" ng-if="addProductForm.addDescription.$touched" ng-hide="addProductForm.addDescription.$valid">
				<p ng-message="required">Description is required.</p>
				<p ng-message="minlength">Description cannot be empty.</p>
				<p ng-message="maxlength">Description is too long.</p>
			</div>
		</div>
		<div class="form-group" ng-class="{ 'has-error': addProductForm.addPrice.$touched && addProductForm.addPrice.$invalid }">
			<label for="addPrice">Price</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<input type="text" name="addPrice" id="addPrice" class="form-control" maxlength="64" ng-model="newProduct.productPrice" ng-minlength="1" ng-maxlength="64" ng-required="true" />
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="addProductForm.addPrice.$error" ng-if="addProductForm.addPrice.$touched" ng-hide="addProductForm.addPrice.$valid">
				<p ng-message="required">Price is required.</p>
				<p ng-message="minlength">Price cannot be empty.</p>
				<p ng-message="maxlength">Price is too big.</p>
			</div>
		</div>
		<div class="form-group" ng-class="{ 'has-error': addProductForm.addShipping.$touched && addProductForm.addShipping.$invalid }">
			<label for="addShipping">Shipping</label>
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<input type="text" name="addShipping" id="addShipping" class="form-control" maxlength="64" ng-model="newProduct.productShipping" ng-minlength="1" ng-maxlength="64" ng-required="true" />
			</div>
			<div class="alert alert-danger" role="alert" ng-messages="addProductForm.addShipping.$error" ng-if="addProductForm.addShipping.$touched" ng-hide="addProductForm.addShipping.$valid">
				<p ng-message="required">Shipping is required.</p>
				<p ng-message="minlength">Shipping cannot be empty.</p>
				<p ng-message="maxlength">Shipping is too big.</p>
			</div>
		</div>
<!--		<div ng-init="newProduct.productAccountId='10'"></div>-->
<!--		<div ng-hide="newProduct.productSold" ng-hide="newProduct.productAccountId" ng-hide="newProduct.productImageId" ng-hide="newProduct.productAdminFee">-->
<!--		<input type="text" name="addAccount" id="addAccount"  class="form-control" ng-model="newProduct.productAccountId" ng-init="newProduct.productAccountId='10'"/>-->
<!--		<input type="text" name="addImage" id="addImage"  class="form-control" ng-model="newProduct.productImageId" ng-init="newProduct.productImageId='16'"/>-->
<!--		<input type="text" name="addAccount" id="addAccount"  class="form-control" ng-model="newProduct.productAdminFee" ng-init="newProduct.productAdminFee='0'"/>-->
<!--		<input type="text" name="addImage" id="addImage"  class="form-control" ng-model="newProduct.productSold" ng-init="newProduct.productSold='0'"/>-->
<!--		</div>-->

		<button type="submit" class="btn btn-info btn-lg" ng-disabled="addProductForm.$invalid"><i class="fa fa-share"></i> Product</button>
		<button type="reset" class="btn btn-warning btn-lg"><i class="fa fa-ban"></i> Cancel</button>
	</form>
</div>
	<uib-alert ng-repeat="alert in alerts" type="{{ alert.type }}" close="alerts.length = 0;">{{ alert.msg }}</uib-alert>
