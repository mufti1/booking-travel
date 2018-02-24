<!--main-->
<div class="main" role="main">		
	<div class="wrap clearfix">
		<!--main content-->
		<div class="content clearfix">
			<!--breadcrumbs-->
			<nav role="navigation" class="breadcrumbs clearfix">
				<!--crumbs-->
				<ul class="crumbs">
					<li><a href="#" title="Home">Home</a></li>
					<li><a href="#" title="Hotels">Hotels</a></li>
					<li><a href="#" title="United Kingdom">United Kingdom</a></li>
					<li><a href="#" title="London">London</a></li>  
					<li>Best ipsum hotel</li>                                       
				</ul>
				<!--//crumbs-->
				
				<!--top right navigation-->
				<ul class="top-right-nav">
					<li><a href="#" title="Back to results">Back to results</a></li>
					<li><a href="#" title="Change search">Change search</a></li>
				</ul>
				<!--//top right navigation-->
			</nav>
			<!--//breadcrumbs-->
			<?php 
			$penumpang = $penumpang->penumpang;
			$kodeUnik = substr($payment->reservation_code, 12, 15); 
			$newPrice = ($payment->price * $penumpang) + $kodeUnik;  
			?>
			<!--three-fourth content-->
			<section class="three-fourth">
				<form id="booking" method="post" action="<?php echo base_url('Home/send_payment'); ?>" class="booking">
					<input type="hidden" name="rcode" value="<?php echo $payment->reservation_code ?>">
					<input type="hidden" name="price" value="<?php echo $newPrice ?>">
					<fieldset>
						<h3><span>02 </span>Payment</h3>
						<div class="row twins">
							<div class="f-item">
								<h4>Pilih Bank:</h4>
								<div class="selector" id="uniform-undefined">
									<script>
										function rekening($i) {
											document.getElementById('rekening').innerHTML = $i;
										}
									</script>
									<select onchange="rekening(value);">
										<option>Pilih Bank</option>
										<option value="Transfer ke : 1563016616 <br/><label>Atas Nama : PT Terbang Selamanya</label>">BCA</option>
										<option value="Transfer ke : 130-00-0010947-3 <br/><label>Atas Nama : PT Terbang Selamanya</label>">Mandiri</option>
										<option value="Transfer ke : 000501001641300 <br/><label>Atas Nama : PT Terbang Selamanya</label>">BRI</option>
										<option value="Transfer ke : 0287171911 <br/><label>Atas Nama : PT Terbang Selamanya</label>">BNI</option>
									</select>
								</div>
							</div>
						</div>
						<h4 id="rekening"></h4>
						<h4> Sebesar : Rp <?php echo $newPrice; ?> </h4>
						<label>*ingat harap transfer sesuai dengan yang tertera di web</label>

						<div class="row">
							<div class="f-item checkbox">
								<input type="checkbox" name="check" id="check" value="ch1" />
								<label>Yes, I have read and I agree to the <a href="#">booking conditions</a>.</label>
							</div>
						</div>
						<hr />
						<input type="submit" class="gradient-button" value="Submit booking" id="next-step" />
					</fieldset>
				</form>
			</section>
			<!--//three-fourth content-->
			
			<!--right sidebar-->
			<aside class="right-sidebar">
				<!--Booking details-->
				<article class="booking-details clearfix">
					<h1>Best ipsum hotel <?php echo $payment->rute_from. " Ke " . $payment->rute_to ?> </h1>
					<div class="booking-info">
						<h6>Berangkat</h6>
						<p><?php echo "Pukul ". substr($payment->depart_at, 11); ?></p>
						<h6>Tiba</h6>
						<p><?php echo "Pukul ". substr($payment->arrival, 11); ?></p>
						<h6>Pesawat</h6>
						<p><?php echo $payment->code; ?></p>
					</div>
					<div class="price">
						<p class="total">Total Harga:  <?php echo $newPrice; ?></p>
						<p>Sudah termasuk PPN(10%)</p>
					</div>
				</article>
				<!--//Booking details-->
				
				<!--Need Help Booking?-->
				<article class="default clearfix">
					<h2>Need Help Booking?</h2>
					<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your holiday needs.</p>
					<p class="number">1- 555 - 555 - 555</p>
				</article>
				<!--//Need Help Booking?-->
			</aside>
			<!--//right sidebar-->
		</div>
		<!--//main content-->
	</div>
</div>
	<!--//main-->