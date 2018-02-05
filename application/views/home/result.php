<div class="flight">
  <?php foreach ($rute as $data) { 
    $kursi = $data->seat_qty;
    if ($kursi == 0) {} 
      else if($kursi != 0) {
  ?>

<section class="invoice">
<!-- title row -->
<div class="row">
  <div class="col-xs-12">
    <h2 class="page-header">
      <i class="fa fa-plane"></i> <?php echo $data->rute_from. " Ke " . $data->rute_to ?>
    </h2>
  </div>
  <!-- /.col -->
</div>
<!-- info row -->
<div class="row container">
  <span>Dari: <?php echo $data->rute_from; ?></span><br>
  <span>Ke: <?php echo $data->rute_to; ?></span><br>
  <span>Harga: <?php echo $data->price; ?></span><br>
  <span>Keberangkatan: <?php echo "Pukul ". substr($data->depart_at, 11); ?></span><br>
  <span>Sampe: <?php echo "Pukul ". substr($data->arrival,11); ?></span><br>
  <span>Transportasi: <?php echo $data->id_transportation; ?></span><br>
  <span>Sisa Kursi: <?php echo $data->seat_qty; ?></span><br>
  <form action="<?php echo base_url('Home/user_booking/') ?>" method="get" accept-charset="utf-8">
  <input type="hidden" name="id_rute" value="<?php echo $data->id_rute ?>">
  <input type="hidden" name="rute_from" value="<?php echo $data->rute_from ?>">
  <input type="hidden" name="rute_to" value="<?php echo $data->rute_to ?>">
  <input type="hidden" name="id_transportation" value="<?php echo $data->id_transportation ?>">
  <input type="hidden" name="depart_at" value="<?php echo $data->depart_at ?>">
  <input type="hidden" name="penumpang" value="<?php echo $this->input->get('penumpang') ?>">
  <button type="submit" class="btn btn-primary">choose</button>
  </form>
</div>
</section>
<?php } } ?>
</div>