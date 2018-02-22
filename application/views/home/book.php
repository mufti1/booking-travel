<?php if (!$this->session->userdata('id_user')) {
	redirect('/Login','refresh');
} ?>

<style>
/* customer */
.customer-color{
	width: 15px;
	height: 15px;
	background-color:#63f15f;
	cursor:pointer;
}
.customer-selected{
	background-color:#27e067;
}
/* seat */
.seat{
	width: 100%;
	background-color:#f2f2f2;
	padding:5px;
	margin-top: 20px;
	overflow: hidden;
}
.seat-id{
	height: 46px;
	width: 46px;
	margin:2px;
	background-color: #bfbfbf;
	float: left;
	cursor: pointer;
}
.seat-id > p{
	text-align: center;
	padding-top: 15px;
}
.seat-notavailabe{
	background-color: #f25d52;
	/* cursor:disabl */
}
.seat-selected{
	background-color: #27e067;
}

</style>
<!-- main--> 
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
				<?php $kursi = []; ?>
				<?php foreach ($seat as $data) {
					$kursi[] = $data->seat_code;
				} ?>
				<?php $penumpang = $this->input->get('penumpang'); $harga = $penumpang * $book->price; for ($i=1; $i <= $penumpang ; $i++) {  ?>
				<form id="booking" method="post" action="<?php echo base_url('/Home/booking/') ?>" class="booking">
					<?php 
					$date = date("Y-m-d"); 
					$at = date("H:i:s");
					$id_user = $this->session->userdata('id_user');
					$rcode = $id_user.date("Ymds");
					
					$new_id = $id++;
					// echo($rcode);
					?>
					<input type="hidden" name="reservation_code[]" value="<?php echo $rcode ?>">
					<input type="hidden" name="reservation_at[]" value="<?php echo $at ?>">
					<input type="hidden" name="reservation_date[]" value="<?php echo $date ?>">
					<input type="hidden" name="id_customer[]" value="<?php echo $new_id ?>">
					<input type="hidden" name="id_rute[]" value="<?php echo $book->id_rute ?>">
					<input type="hidden" name="depart_at[]" value="<?php echo $book->depart_at ?>">
					<input type="hidden" name="id_transportation[]" value="<?php echo $book->id_transportation ?>">
					<input type="hidden" name="price[]" value="<?php echo $harga ?>">
					<input type="hidden" name="id_user[]" value="<?php echo $id_user ?>">
					<input type="hidden" name="penumpang" value="<?php echo $penumpang ?>">
					<fieldset>
						<h3><span><?php echo "0".$i; ?> </span>Isi Data Diri</h3>
						<div class="row twins">
							<div class="f-item">
								<label for="first_name">Nama</label>
								<input type="text" id="first_name" name="name[]" />
							</div>
							<div class="f-item">
								<label for="last_name">Alamat</label>
								<input type="text" id="last_name" name="address[]" />
							</div>
						</div>

						<div class="row twins">
							<div class="f-item">
								<label for="email">No Hp</label>
								<input type="text" id="email" name="phone[]" />
							</div>
							<div class="f-item">
								<label for="gender">Jenis Kelamin</label>
								<select name="gender[]">
									<option value="laki-laki">Laki - laki</option>
									<option value="perempuan">Perempuan</option>}
								</select>
							</div>
						</div>

						<div class="row">
							<div class="f-item">
								<label>Kebutuhan Khusus: <span>(Tidak Wajib)</span></label>
								<textarea rows="10" cols="10" name="kebutuhan[]"></textarea>
							</div>
							<span class="info">Tuliskan kebutuhan khususmu </span>
						</div><br>
						
						<?php } ?>
						<h3>Pilih Tempat Duduk</h3>
						<?php for ($i=1; $i <= $penumpang ; $i++) { ?>
						<div class="customer-name">
							<table>
								<tr>
									<td>
										<div onclick="pget(this.id)" id="p<?php echo$i ?>" class="customer-color id-1"></div>
									</td>
									<td>
										<h6>Penumpang <?php echo $i ?></h6>
									</td>
									<td>
										<input id="i<?php echo$i ?>" type="text" name="seat_code[]">
									</td>
								</tr>
							</table>
						</div>
						<?php } ?>

						<div class="seat">
							<?php  for ($j=1; $j <= $book->seat_qty; $j++) {?>
							<?php if (in_array($j, $kursi)) { ?>
							<div id="<?php echo $j; ?>" class="seat-id seat-notavailabe"><p><?php echo $j; ?></p></div>
							<?php }else{ ?>
							<div onclick="sget(this.id)" id="<?php echo $j; ?>" class="seat-id"><p><?php echo $j; ?></p></div>
							<?php } ?>
							<?php } ?>
						</div>


						<input type="hidden" name="id_t" value="<?php echo $book->id_transportation; ?>">
						<div class="text-center">
							<input type="submit" class="gradient-button" value="Proceed to next step" id="next-step" />
						</div>
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
						<p><?php echo $kursi = $this->input->get('siskur'); ?></p>
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
<script>

	function pget(id){
		seat.p = id;
		$('.customer-color').removeClass("customer-selected");
		$('#'+id).addClass("customer-selected");
	}
	function sget(id){
		seat.selectSeat(id);
	}

	var seat = {
		p:'',
		pn:function(id){
			pn = id.replace('p', '');
			return pn;
		},
		selectSeat: function(id) {
			if ($('#' + id).attr('class') == 'seat-id') {

				if($('#i'+this.pn(this.p)).val() == ''){
					$('#' + id).addClass("seat-selected");
                         // console.log(this.pn(this.p));
                         $('#i'+this.pn(this.p)).val(id);
                         $('#'+id).addClass('seat-for-'+this.p);
                     }


                 } else {
                 	cSeat = $('#' + id).attr('class');
                 	cSeatoc = cSeat.replace('seat-id seat-selected seat-for-p','');
                 	$('#' + id).removeClass("seat-selected");
                 	$('#'+id).removeClass(cSeat.replace('seat-id ',''));
                 	$('#i'+cSeatoc).val(''); 


                 }
                //    console.log($('#'+id).attr('class'));
            }
        }



    </script>
	<!--//main