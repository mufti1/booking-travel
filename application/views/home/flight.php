<div class="flight">
	<div class="container">
		<h1 class="travel-sist">TravelSist</h1>
		<form action="<?php echo base_url('Home/result'); ?>" method="get" accept-charset="utf-8">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
				<select name="rute_from" class="form-control input-lg" required>
					<option value="">Dari</option>
					<?php foreach ($rute as $data) { ?>
					<option value="<?php echo $data->rute_from ?>"><?php echo $data->rute_from ?></option>
					<?php } ?>
				</select>
				<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
				<select name="rute_to" class="form-control input-lg" required>
					<option value="">Ke</option>
					<?php foreach ($rute_to as $data) { ?>
					<option value="<?php echo $data->rute_to ?>"><?php echo $data->rute_to ?></option>
					<?php } ?>
				</select>
				<span class="input-group-addon" ><i class="fa fa-calendar"></i></span>
				<input name="depart_at" type="text" class="form-control tanggal input-lg" id="datepicker" placeholder="keberangkatan" required>
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control input-lg" placeholder="Penumpang" name="penumpang" value="1">
				<div class="input-group-btn">
					<button type="submit" class="btn btn-danger btn-lg">Cari  <i class="fa fa-plane"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>


