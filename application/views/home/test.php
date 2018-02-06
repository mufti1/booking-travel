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
					</ul>
					<!--//crumbs-->
				</nav>
				<!--//breadcrumbs-->

				<!--three-fourth content-->
					<section class="three-fourth">
						<form id="booking" method="post" action="booking-step2.html" class="booking">
							<fieldset>
								<h3><span>01 </span>Isi Data Diri</h3>
								<div class="row twins">
									<div class="f-item">
										<label for="first_name">Nama</label>
										<input type="text" id="first_name" name="first_name" />
									</div>
									<div class="f-item">
										<label for="last_name">Alamat</label>
										<input type="text" id="last_name" name="last_name" />
									</div>
								</div>
								
								<div class="row twins">
									<div class="f-item">
										<label for="email">No Hp</label>
										<input type="email" id="email" name="email" />
									</div>
									<div class="f-item">
										<label for="gender">Jenis Kelamin</label>
										<select name="gender">
											<option value="laki-laki">Laki - laki</option>
											<option value="perempuan">Perempuan</option>}
										</select>
									</div>
								</div>
								
								<div class="row">
									<div class="f-item">
										<label>Kebutuhan Khusus: <span>(Tidak Wajib)</span></label>
										<textarea rows="10" cols="10"></textarea>
									</div>
									<span class="info">Tuliskan kebutuhan khususmu</span>
								</div>
								<input type="submit" class="gradient-button" value="Proceed to next step" id="next-step" />
							</fieldset>
						</form>
					</section>
				<!--//three-fourth content-->
				
				<!--right sidebar-->
				<aside class="right-sidebar">
					<!--Booking details-->
					<article class="booking-details clearfix">
						<h1>Best ipsum hotel <?php echo $book->rute_from. " Ke " . $book->rute_to ?> </h1>
						<div class="booking-info">
							<h6>Berangkat</h6>
							<p><?php echo "Pukul ". substr($book->depart_at, 11); ?></p>
							<h6>Tiba</h6>
							<p><?php echo "Pukul ". substr($book->arrival, 11); ?></p>
							<h6>Jumlah Penumpang</h6>
							<p><?php echo $penumpang = $this->input->get('penumpang'); ?></p>
							<h6>Pesawat</h6>
							<p><?php echo $book->code; ?></p>
						</div>
						<div class="price">
							<p class="total">Total Harga:  <?php echo $book->price; ?></p>
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