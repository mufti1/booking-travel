<div class="flight">


	<section class="invoice">
		<!-- title row -->
		<div class="row">
			<div class="col-xs-12">
				<h2 class="page-header">
					<i class="fa fa-plane"></i> <?php echo $book->rute_from. " Ke " . $book->rute_to ?>
				</h2>
			</div>
			<!-- /.col -->
		</div>
		<!-- info row -->
		<div class="row container">
			<span>Dari: <?php echo $book->rute_from; ?></span><br>
			<span>Ke: <?php echo $book->rute_to; ?></span><br>
			<span>Harga: <?php echo $book->price; ?></span><br>
			<span>Keberangkatan: <?php echo "Pukul ". substr($book->depart_at, 11); ?></span><br>
			<span>Sampe: <?php echo "Pukul ". substr($book->arrival,11); ?></span><br>
			<span>Transportasi: <?php echo $book->id_transportation; ?></span><br>
			<span>Sisa Kursi: <?php echo $kursi = $book->seat_qty; ?></span><br>
			<span>Penumpang: <?php echo $penumpang = $this->input->get('penumpang'); ?></span>
			<h1>Isi Data Diri</h1>
			<input type="text" name="name" class="form-control" placeholder="Nama">
			<input type="text" name="address" class="form-control" placeholder="Alamat">
			<input type="text" name="phone" class="form-control" placeholder="No Hp">
			<select name="gender" class="form-control">
				<option value="laki-laki">Laki-laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
			<?php echo date("Y-m-d H:i:s") ?>
		</div>
	</section>

</div>