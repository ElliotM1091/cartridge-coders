
<!-- contents -->



	<div class="row">
		<div class="col-xs-12">
			<div class="btn-group btn-group-justified " role="group" aria-label="...">
				<div class="btn-group " role="group">
					<button type="button" class="btn categorybar" ng-click="category('')">All</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar" ng-click="category('atari')">ATARI</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar" ng-click="category('nes')">NES</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar" ng-click="category('Super NES')">Super NES</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar" ng-click="category('Nintendo 64')">N64</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar" ng-click="category('Sega')">Sega</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar">Gameboy</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar">GBA</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar">GBA DS</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn categorybar">Other</button>
				</div>
			</div>
		</div>
	</div>






<section id="feature" class="p-y-4" >
	<div class="row">

	<form class="navbar-form " >
		<div class="form-group">
			<!--					<label >Search</label>-->
			<input type="text" size="42" ng-model="search" class="form-control" placeholder="Search">

		</div>
	</form>
	</div>
		<div class="row row-flex">
			<div ng-repeat="product in products | filter:search" class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img ng-src="../public_html/image/cartridge/{{ product.productImageFileName }}"
						  alt="{{ product.productImageFileName }}">
					<div class="caption">
						<h3>{{ product.productTitle }}</h3>
						<p>{{ product.productPrice }}</p>
						<p>{{ product.productDescription }}</p>
						<div>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_xclick">
							<input type="hidden" name="business" value="SellerDemo@gmail.com">
							<!-- accoutPpEmail of productAccountId -->
							<input type="hidden" name="lc" value="US">
							<input type="hidden" name="item_name" value="{{ product.productTitle }}"> <!-- productDescription -->
							<input type="hidden" name="item_number" value="Cartridge"> <!-- productId -->
							<input type="hidden" name="amount" value="{{ product.productPrice }}"> <!-- productPrice + productShipping -->
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="button_subtype" value="services">
							<input type="hidden" name="no_note" value="0">
							<input type="hidden" name="cn" value="Add special instructions to the seller:">
							<input type="hidden" name="no_shipping" value="2">
							<input type="hidden" name="rm" value="1">
							<input type="hidden" name="return"
									 value="https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/index.php">
							<input type="hidden" name="cancel_return"
									 value="https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/index.php">
							<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_SM.gif:NonHosted">
							<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_SM.gif"
									 border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1"
								  height="1">
						</form>
						<a class="btn btn-primary" href="sendMessage">Message Seller </a>
						<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
