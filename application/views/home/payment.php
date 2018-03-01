<!--main-->
<div class="main" role="main">		
	<div class="wrap clearfix">
		<!--main content-->
		<div class="content clearfix">
			<!--breadcrumbs-->
			<nav role="navigation" class="breadcrumbs clearfix">
				<!--crumbs-->
				<ul class="crumbs">
					<li><a href="<?php echo base_url() ?>" title="Home">Home</a></li>
					<li><a href="#" title="Hotels">Search Result</a></li>
					<li><a href="#" title="United Kingdom">Booking</a></li>
					<li><a href="#" title="London">Payment</a></li>                                      
				</ul>
				<!--//crumbs-->
				
				<!--top right navigation-->
				<ul class="top-right-nav">
					<li><a href="<?php echo base_url() ?>" title="Change search">Change search</a></li>
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
								<input type="checkbox" name="check" id="check" value="ch1" required />
								<label>Ya saya memahami dengan, <a href="#">kebijakan travelsist</a>.</label>
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
					<h1><?php echo $payment->rute_from. " Ke " . $payment->rute_to ?> </h1>
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
					<h2>Butuh bantuan untuk pemesanan?</h2>
					<p>Silahkan hubungi customer service kami, customer service kami bekerja 24 jam dan di hari libur kami tetap melayani pelanggan</p>
					<p class="number">0281-252002</p>
				</article>
				<!--//Need Help Booking?-->
			</aside>
			<!--//right sidebar-->
		</div>
		<!--//main content-->
	</div>
</div>
	<!--//main-->