
<link rel="stylesheet" href="css/style.css" type="text/css">

<p><br></p>

<div class="well homecss">
<div class="row">
	<div class="col-md-2"><img src="image/cartridge/avatar01.jpg" alt="2600"  class="img-responsive img-rounded"></div>
	<div class="col-md-2">


<!--website no encryption-->
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="business" value="RDVVD8PSYE5AG">
			<input type="hidden" name="lc" value="US">
			<input type="hidden" name="item_name" value="ITEM NAME">
			<input type="hidden" name="item_number" value="ITEM_ID">
			<input type="hidden" name="amount" value="9.99">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="button_subtype" value="services">
			<input type="hidden" name="no_note" value="0">
			<input type="hidden" name="cn" value="Add special instructions to the seller:">
			<input type="hidden" name="no_shipping" value="2">
			<input type="hidden" name="rm" value="1">
			<input type="hidden" name="return" value="https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/index.php">
			<input type="hidden" name="cancel_return" value="https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/index.php">
			<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_SM.gif:NonHosted">
			<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>

<!--		website with encryption-->
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
			<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>


<!--		email-->
		https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_xclick&business=RDVVD8PSYE5AG&lc=US&item_name=ITEM%20NAME&item_number=ITEM_ID&amount=9%2e99&currency_code=USD&button_subtype=services&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&rm=1&return=https%3a%2f%2fbootcamp%2dcoders%2ecnm%2eedu%2f%7eddeleeuw%2fcartridge%2dcoders%2fpublic_html%2findex%2ephp&cancel_return=https%3a%2f%2fbootcamp%2dcoders%2ecnm%2eedu%2f%7eddeleeuw%2fcartridge%2dcoders%2fpublic_html%2findex%2ephp&bn=PP%2dBuyNowBF%3abtn_buynow_SM%2egif%3aNonHosted


		<!--<a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_xclick&business=MDCF4WD82ZLPE&lc=US&item_name=TEST%20ITEM&item_number=TESTid&amount=999%2e99&currency_code=USD&button_subtype=services&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&rm=1&return=https%3a%2f%2fbootcamp%2dcoders%2ecnm%2eedu%2f%7eddeleeuw%2fcartridge%2dcoders%2fpublic_html%2findex%2ephp&cancel_return=https%3a%2f%2fbootcamp%2dcoders%2ecnm%2eedu%2f%7eddeleeuw%2fcartridge%2dcoders%2fpublic_html%2findex%2ephp&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted">-->
<!---->
<!--	<img src="image/paypal-buynow-button.png">-->
<!---->
<!---->
<!--</a>-->
<!--		<form method=post action=https://api-3t.sandbox.paypal.com/nvp>-->
<!--			<input type=hidden name=USER value=cartridgecoders-facilitator_api1.gmail.com>-->
<!--			<input type=hidden name=PWD value=W6Y4ZVYHAQM2JU68>-->
<!--			<input type=hidden name=SIGNATURE value=AFcWxV21C7fd0v3bYYYRCpSSRl31A-RPo55pukRJz.ZD0Z-IbhNQtuu8>-->
<!--			<input type=hidden name=VERSION value=109.0>-->
<!--			<input type=hidden name=PAYMENTREQUEST_0_PAYMENTACTION value=Sale>-->
<!--			<input type=hidden name=PAYMENTREQUEST_0_AMT value=99.99>-->
<!--			<input type=hidden name=RETURNURL value=https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/index.php>-->
<!--			<input type=hidden name=CANCELURL value=https://bootcamp-coders.cnm.edu/~ddeleeuw/cartridge-coders/public_html/index.php>-->
<!--			<input type=submit name=METHOD value=SetExpressCheckout>-->


	</div>
	<div class="col-md-8">Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description </div>
</div>
	</div>


<div class="well homecss">
<div class="row">
	<div class="col-md-2"><img src="image/cartridge/avatar02.jpg" alt="2600"  class="img-responsive img-rounded"></div>
	<div class="col-md-1"></div>
	<div class="col-md-9">Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description </div>
</div>
</div>



	<div class="well homecss">
<div class="row">
	<div class="col-md-2"><img src="../public_html/image/cartridge/avatar03.jpg" alt="2600"  class="img-responsive img-rounded"></div>
	<div class="col-md-1"></div>
	<div class="col-md-9">Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description </div>
</div>
	</div>




<!--</div>-->