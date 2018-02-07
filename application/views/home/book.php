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
				<?php  // cek buat user terbesar
				$usr = $customer->id_customer;
				$newus = substr($usr,1,4);

				$tambah=$newus+1;
				if ($tambah<10) {
					$id="C000".$tambah;
				}
				elseif ($tambah<100) {
					$id="C00".$tambah;
				}
				else if($tambah<1000){
					$id="C0".$tambah;
				}
				else{
					$id="C".$tambah;
				} ?>
				<?php $penumpang = $this->input->get('penumpang'); $harga = $penumpang * $book->price; for ($i=1; $i <= $penumpang ; $i++) {  ?>
				<form id="booking" method="post" action="<?php echo base_url('/Home/booking/') ?>" class="booking">
					<?php 
					$date = date("Y-m-d H:i:s"); 
					$rcode = date("Y-m-d");
					$id_user = "sample";
					$id_cust = "sample";
					$new_id = $id++;
					?>
					<input type="hidden" name="reservation_code[<?php echo $i; ?>]" value="<?php echo $rcode ?>">
					<input type="hidden" name="reservation_at[<?php echo $i; ?>]" value="<?php echo $date ?>">
					<input type="hidden" name="reservation_date[<?php echo $i; ?>]" value="<?php echo $date ?>">
					<input type="hidden" name="id_customer[<?php echo $i; ?>]" value="<?php echo $new_id ?>">
					<input type="hidden" name="id_rute[<?php echo $i; ?>]" value="<?php echo $book->id_rute ?>">
					<input type="hidden" name="depart_at[<?php echo $i; ?>]" value="<?php echo $book->depart_at ?>">
					<input type="hidden" name="id_transportation[<?php echo $i; ?>]" value="<?php echo $book->id_transportation ?>">
					<input type="hidden" name="price[<?php echo $i; ?>]" value="<?php echo $book->price ?>">
					<input type="hidden" name="id_user[<?php echo $i; ?>]" value="<?php echo $id_user ?>">
					<input type="hidden" name="penumpang" value="<?php echo $penumpang ?>">
					<fieldset>
						<h3><span><?php echo "0".$i; ?> </span>Isi Data Diri</h3>
						<div class="row twins">
							<div class="f-item">
								<label for="first_name">Nama</label>
								<input type="text" id="first_name" name="name[<?php echo $i; ?>]" />
							</div>
							<div class="f-item">
								<label for="last_name">Alamat</label>
								<input type="text" id="last_name" name="address[<?php echo $i; ?>]" />
							</div>
						</div>

						<div class="row twins">
							<div class="f-item">
								<label for="email">No Hp</label>
								<input type="text" id="email" name="phone[<?php echo $i; ?>]" />
							</div>
							<div class="f-item">
								<label for="gender">Jenis Kelamin</label>
								<select name="gender[<?php echo $i; ?>]">
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
						
						<?php } ?>
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
						<h6>Sisa Kursi</h6>
						<p><?php echo $kursi = $book->seat_qty ?></p>
						<h6>Jumlah Penumpang</h6>
						<p><?php echo $penumpang ?></p>
						<h6>Pesawat</h6>
						<p><?php echo $book->code; ?></p>
					</div>
					<div class="price">
						<p class="total">Total Harga:  <?php echo $harga; ?></p>
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