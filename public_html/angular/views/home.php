
<link rel="stylesheet" href="css/style.css" type="text/css">

<p><br></p>

<div class="well homecss">
<div class="row">
	<div class="col-md-2"><img src="image/cartridge/avatar01.jpg" alt="2600"  class="img-responsive img-rounded"></div>
	<div class="col-md-1">

<!--		<a href="/~ddeleeuw/cartridge-coders/public_html/paypal/batchpayout.php">Buy Now!</a>-->


<!--website no encryption-->
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="business" value="cartridgecoders-buyer@gmail.com"> <!-- accoutPpEmail of productAccountId -->
			<input type="hidden" name="lc" value="US">
			<input type="hidden" name="item_name" value="{{ productTitle}}"> <!-- productDescription -->
			<input type="hidden" name="item_number" value="2HOT"> <!-- productId -->
			<input type="hidden" name="amount" value="200.00"> <!-- productPrice + productShipping -->
			<input type="hidden" name="currency_code" value="MXN">
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
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIIowYJKoZIhvcNAQcEoIIIlDCCCJACAQExggE6MIIBNgIBADCBnjCBmDELMAkGA1UEBhMCVVMxEzARBgNVBAgTCkNhbGlmb3JuaWExETAPBgNVBAcTCFNhbiBKb3NlMRUwEwYDVQQKEwxQYXlQYWwsIEluYy4xFjAUBgNVBAsUDXNhbmRib3hfY2VydHMxFDASBgNVBAMUC3NhbmRib3hfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMA0GCSqGSIb3DQEBAQUABIGAU2Q7AX/5rgnA+YQ/f9uAT1guVS8zv9iktN9UpZr7KQMF4fdLZTf+aPwwrLV3BJ4UWZYiQbcAL3WbUQzMQVt1cswAVoizde6ABwLAZ9kDii+lUgY12mQdtNDhPrOZbCpIuHJdxH/8aYGV+6mQFRRj0FvjySiRTzwweCyyolAt3XIxCzAJBgUrDgMCGgUAMIIB7QYJKoZIhvcNAQcBMBQGCCqGSIb3DQMHBAjyXHD/5KLHZ4CCAchKggUtxr6fRm3Kyb3mqLMMu+ZqQTQcg5YysQEUsHkHoM0cTV3SNzZm/PQ2MoOBnS4X+dT2nIH8IkH2O6hiCKYSxUVnZigtNMvaEm15hSIiTLCddlLW9WiLDEqmxTEP6tpTLMaFdmy7R7W69yi1SSzLN+95aCAPRsch6A1fsvRqajr6i+k9IKB8GNEdbFfzUsZoEf0uN1c9PgxVPHAUwpefPVbiSc0s07DBuGdSpBmtidqcyBx2k0Jjfir0V66ZAwjXHU8Ap9w6JQhgkeaxrYetf3ZarxKRRgtQt78rNYljZSyXman2v7Kuxa7TX+PftxZcE27Ge4jQCA4D/gZpgypBi524nQOOqN6SQKYz8VymE8XTmQxSqW93iHlmviM6jyccDA+1RY+w3UO+SVEU0zxvYwN9mLwh/cGyr9htgrwJvEVQqOhgSVpWMvqfPYXyxqkcGfCMOcx2dWdYEeXvf9BnatEIwE1qdDJsMZUp4qM5P07h67G5dI4VTlrvvo+wotLmN/Nid3Ztwr4/YtjgzlB3/4Obs6GhlUp5DmYHB1TPqCpkphvOHueZHdf9w4u5K8X5qQZLKRPTswAiJxeJMRbVGlvAzicACVegggOlMIIDoTCCAwqgAwIBAgIBADANBgkqhkiG9w0BAQUFADCBmDELMAkGA1UEBhMCVVMxEzARBgNVBAgTCkNhbGlmb3JuaWExETAPBgNVBAcTCFNhbiBKb3NlMRUwEwYDVQQKEwxQYXlQYWwsIEluYy4xFjAUBgNVBAsUDXNhbmRib3hfY2VydHMxFDASBgNVBAMUC3NhbmRib3hfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDQxOTA3MDI1NFoXDTM1MDQxOTA3MDI1NFowgZgxCzAJBgNVBAYTAlVTMRMwEQYDVQQIEwpDYWxpZm9ybmlhMREwDwYDVQQHEwhTYW4gSm9zZTEVMBMGA1UEChMMUGF5UGFsLCBJbmMuMRYwFAYDVQQLFA1zYW5kYm94X2NlcnRzMRQwEgYDVQQDFAtzYW5kYm94X2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAt5bjv/0N0qN3TiBL+1+L/EjpO1jeqPaJC1fDi+cC6t6tTbQ55Od4poT8xjSzNH5S48iHdZh0C7EqfE1MPCc2coJqCSpDqxmOrO+9QXsjHWAnx6sb6foHHpsPm7WgQyUmDsNwTWT3OGR398ERmBzzcoL5owf3zBSpRP0NlTWonPMCAwEAAaOB+DCB9TAdBgNVHQ4EFgQUgy4i2asqiC1rp5Ms81Dx8nfVqdIwgcUGA1UdIwSBvTCBuoAUgy4i2asqiC1rp5Ms81Dx8nfVqdKhgZ6kgZswgZgxCzAJBgNVBAYTAlVTMRMwEQYDVQQIEwpDYWxpZm9ybmlhMREwDwYDVQQHEwhTYW4gSm9zZTEVMBMGA1UEChMMUGF5UGFsLCBJbmMuMRYwFAYDVQQLFA1zYW5kYm94X2NlcnRzMRQwEgYDVQQDFAtzYW5kYm94X2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAFc288DYGX+GX2+WP/dwdXwficf+rlG+0V9GBPJZYKZJQ069W/ZRkUuWFQ+Opd2yhPpneGezmw3aU222CGrdKhOrBJRRcpoO3FjHHmXWkqgbQqDWdG7S+/l8n1QfDPp+jpULOrcnGEUY41ImjZJTylbJQ1b5PBBjGiP0PpK48cdFMYIBpDCCAaACAQEwgZ4wgZgxCzAJBgNVBAYTAlVTMRMwEQYDVQQIEwpDYWxpZm9ybmlhMREwDwYDVQQHEwhTYW4gSm9zZTEVMBMGA1UEChMMUGF5UGFsLCBJbmMuMRYwFAYDVQQLFA1zYW5kYm94X2NlcnRzMRQwEgYDVQQDFAtzYW5kYm94X2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTYwNjA5MTcyNzExWjAjBgkqhkiG9w0BCQQxFgQUpKuWWUcTMxdODYXjasqziTrg6yowDQYJKoZIhvcNAQEBBQAEgYA+Dm7GaHOVi54LV/eS2aNGG65Qfei/GEOfGZ2IAWS/9qSNZWUMHs0uEdjgLdFp+gqXlX7G1rNTRzc2+XyRVXK2S46YE3GYU2TEGesGXaJLwtx7AE+EJ4kIVii/MpIjMFnw9ZBaltv8LhM2S01dAMPaYYAABAkh4BjD3IC7PzCTSg==-----END PKCS7-----
">
			<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>


<!--email version-->

		<a href="https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_xclick&business=cartridgecoders%2dfacilitator%40gmail%2ecom&lc=US&item_name=Box%20Fan&item_number=2HOT&amount=200%2e00&currency_code=MXN&button_subtype=services&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&rm=1&return=https%3a%2f%2fbootcamp%2dcoders%2ecnm%2eedu%2f%7eddeleeuw%2fcartridge%2dcoders%2fpublic_html%2findex%2ephp&cancel_return=https%3a%2f%2fbootcamp%2dcoders%2ecnm%2eedu%2f%7eddeleeuw%2fcartridge%2dcoders%2fpublic_html%2findex%2ephp&bn=PP%2dBuyNowBF%3abtn_buynow_SM%2egif%3aNonHosted">Buy Now!</a>


  

	</div>
	<div class="col-md-9">Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description </div>
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


<p><br></p>

<!--<div class="well homecss">-->
<!--<div class="row">-->
<!--	<div class="col-md-2"><img src="../public_html/image/cartridge/avatar01.jpg" alt="2600"  class="img-responsive img-rounded"></div>-->
<!--	<div class="col-md-1"></div>-->
<!--	<div class="col-md-9">Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description </div>-->
<!--</div>-->
<!--	</div>-->
<!---->
<!---->
<!--<div class="well homecss">-->
<!--<div class="row">-->
<!--	<div class="col-md-2"><img src="../public_html/image/cartridge/avatar02.jpg" alt="2600"  class="img-responsive img-rounded"></div>-->
<!--	<div class="col-md-1"></div>-->
<!--	<div class="col-md-9">Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description </div>-->
<!--</div>-->
<!--</div>-->
<!---->
<!---->
<!---->
<!--	<div class="well homecss">-->
<!--<div class="row">-->
<!--	<div class="col-md-2"><img src="../public_html/image/cartridge/avatar03.jpg" alt="2600"  class="img-responsive img-rounded"></div>-->
<!--	<div class="col-md-1"></div>-->
<!--	<div class="col-md-9">Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description Game Description </div>-->
<!--</div>-->
<!--	</div>-->

<div class="row">
	<table class="table table-bordered table-hover table-responsive table-striped table-word-wrap">
		<tr><th>Image</th><th>Product ID</th><th>Title</th><th>Description</th><th>Price</th><th>Shipping</th></tr>
		<tr ng-repeat="product in products">
			<!--			<td>{{ images }}</td>-->
			<td><img ng-src="../public_html/image/cartridge/{{ product.productImageFileName }}"></td>
			<td>{{ product.productId }}</td>
			<td>{{ product.productTitle }}</td>
			<td>{{ product.productDescription }}</td>
			<td>{{ product.productPrice }}</td>
			<td>{{ product.productShipping }}</td>
		</tr>
	</table>
</div>
<!--ng-click="loadProduct(products[$index].productId);"-->




<!--</div>-->




<!--</div>-->