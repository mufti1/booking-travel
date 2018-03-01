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
          <li>Search results</li>                                       
        </ul>
        <!--//crumbs-->
      </nav>
      <!--//breadcrumbs-->
      
      <!--three-fourth content-->
      <section>
        <!-- <div class="sort-by">
          <h3>Sort by</h3>
          <ul class="sort">
            <li>Popularity <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
            <li>Price <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
            <li>Stars <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
            <li>Rating <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
          </ul>
        </div> -->
        
        <div class="deals clearfix flights" >
          <?php $i = 0;?>
          <?php foreach ($rute as $data) { 
            $qry="Select * from reservation where status = 2 and id_rute like '".$data->id_rute."' And depart_at like '".$data->depart_at."'";
            $w[$i] = $this->db->query($qry)->num_rows();
            $x[$i] = $data->seat_qty - $w[$i];
            $penumpang = $this->input->get('penumpang');
            $sisa = $x[$i] - $penumpang;

          // $x[$i] = ($data->seat_qty - $muf) - $this->input->get('penumpang');
            if ($sisa < 0) { ?>
            <article class="full-width">
              <div class="details">
                <h2>404 Not Found</h2>
                <img src="<?php echo base_url('/assets/depan/'); ?>images/themes/pink/txt/logo.png" style="float: right;" alt="TravelSist" />
                <img src="<?php echo base_url('/assets/depan/'); ?>images/themes/pink/txt/logo.png" style="float: left;" alt="TravelSist" />
              </div>
            </article>
            <?php } 
            else if($sisa >= 0) {
              ?>
              <!--deal-->
              <article class="full-width">
                <div class="details">
                  <h1><?php echo $data->rute_from; ?> Ke <?php echo $data->rute_to; ?></h1>
                  <div class="f-wrap">
                    <h5>Durasi</h5>
                    <div class="flight-info">
                      <?php  
                      $arrive = strtotime($data->arrival);
                      $depart = strtotime($data->depart_at);
                      $durasi = $arrive-$depart;

                      echo gmdate("H", $durasi ), ' jam ' .gmdate("i", $durasi). ' menit'
                      ?>

                    </div>
                  </div>
                  <div class="f-wrap">
                    <h5>Pergi</h5>
                    <div class="flight-info"><?php echo $data->depart_at; ?><br><?php echo $data->rute_from; ?></div>
                  </div>
                  <div class="f-wrap">
                    <h5>Sampai</h5>
                    <div class="flight-info"><?php echo $data->arrival; ?><br><?php echo $data->rute_to; ?></div>
                  </div>  
                  <div class="f-wrap last">
                    <h5>Sisa Kursi</h5>
                    <div class="flight-info"><?php echo $x[$i]; ?></div>
                  </div>
                  <span class="price">Harga Perorang  <em>Rp <?php echo $data->price; ?></em> </span>
                  <div class="description">
                    <p>Harga diatas sudah termasuk ppn sebesar 10%</p>
                  </div>
                  <div>
                    <form action="<?php echo base_url('Home/user_booking/') ?>" method="get" accept-charset="utf-8">
                      <input type="hidden" name="rute_from" value="<?php echo $data->rute_from ?>">
                      <input type="hidden" name="rute_to" value="<?php echo $data->rute_to ?>">
                      <input type="hidden" name="depart_at" value="<?php echo $data->depart_at ?>">
                      <input type="hidden" name="id_rute" value="<?php echo $data->id_rute ?>">
                      <input type="hidden" name="penumpang" value="<?php echo $this->input->get('penumpang') ?>">
                      <input type="hidden" name="siskur" value="<?php echo $x[$i]; ?>">
                      <?php $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                      <input type="hidden" name="url" value="<?php echo($url); ?>">
                      <button type="submit" class="gradient-button">Choose</button>
                    </form>
                  </div>
                </div>
              </article>
              <?php } $i++;} ?>
              <!--//deal-->

              <!--bottom navigation-->
              <!-- <div class="bottom-nav"> -->

                <!--pager-->
                 <!--  <div class="pager">
                    <span><a href="#">First page</a></span>
                    <span><a href="#">&lt;</a></span>
                    <span class="current">1</span>
                    <span><a href="#">2</a></span>
                    <span><a href="#">&gt;</a></span>
                    <span><a href="#">Last page</a></span>
                  </div> -->
                  <!--//pager-->
                  <!-- </div> -->
                  <!--//bottom navigation-->
                </div>
              </section>
              <!--//three-fourth content-->
            </div>
            <!--//main content-->
          </div>
        </div>
        <!--//main-->
