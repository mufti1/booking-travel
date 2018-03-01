<script type="text/javascript">
	function printpage()
	{
		var printcontent = document.getElementById('print').innerHTML;
		var original = document.body.innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = original
	}
</script>
<!--main-->
<div class="main" role="main" id="print">		
	<div class="wrap clearfix">
		<!--main content-->
		<div class="content clearfix">

			<!--three-fourth content-->
			<section class="three-fourth">
				<form id="booking" method="post" action="booking" class="booking">
					<fieldset>
						<img src="<?php echo base_url('/assets/depan/'); ?>images/themes/pink/txt/logo.png" style="float: right;" alt="TravelSist" />
						<h3><span>03 </span>Bukti Reservasi</h3>
						<div class="text-wrap">
							<?php if ($reservation->status == 3): ?>
								<a href="#" class="gradient-button print" title="Print booking" onclick="printpage()">Print booking</a>
							<?php endif ?>
							<?php if ($reservation->status == 2): ?>
								<a href="#" class="gradient-button print">Sedang Dikonfirmasi</a>
							<?php endif ?>
							<?php if ($reservation->status == 0): ?>
								<a href="<?php echo base_url('Home/payment/'.$reservation->reservation_code) ?>" class="gradient-button print">Pembayaran</a>
							<?php endif ?>
							<p>Terimakasih atas menggunakan TravelSist</p>
						</div>

						<h3>Data Penumpang</h3>
						<div class="text-wrap">
							<div class="output">
								<p>Kode Booking:</p>
								<p><?php echo $reservation->reservation_code ?></p>
								<p>Nama: </p>
								<p><?php echo $reservation->name ?></p>
								<p>Alamat: </p>
								<p><?php echo $reservation->address ?></p>
								<p>Jenis Kelamin:</p>
								<p><?php echo $reservation->gender ?></p>
								<p>Dari: </p>
								<p><?php echo $reservation->rute_from ?></p>
								<p>Ke: </p>
								<p><?php echo $reservation->rute_to ?></p>
								<p>Harga:</p>
								<p><?php echo $reservation->price ?></p>
							</div>
						</div>

						<h3>Pembayaran</h3>
						<div class="text-wrap">
							<p>Anda telah membayar tiket ini dengan melalui transfer ke TravelSist, nikmatilah pernjalanan anda</p>
							<p><strong class="dark">Pembayaran TravelSist melalui:</strong></p>
							<p>BNI, BCA, BRI, Mandiri</p>
						</div>

						<h3>Jangan Lupa</h3>
						<div class="text-wrap">
							<p>Selalu jaga barang bawaan dan keamanan anda<br />
								<p><strong>Kami selalu mendoakan anda</strong><br /><i>TravelSist</i></p>
								<img src="<?php echo base_url('/assets/depan/'); ?>images/themes/pink/txt/logo.png" style="float: right;" alt="TravelSist" />
							</div>
						</fieldset>
					</form>
					
				</section>
				<!--//three-fourth content-->
				<!--//right sidebar-->
			</div>
			<!--//main content-->
		</div>
	</div>
	<!--//main-->