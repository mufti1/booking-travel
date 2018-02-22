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
          <li><a href="#" title="Get inspired">Get inspired</a></li> 
          <li>Search results</li>                                       
        </ul>
        <!--//crumbs-->
      </nav>
      <!--//breadcrumbs-->
      
      <!--three-fourth content-->
      <section>
        <div class="sort-by">
          <h3>Sort by</h3>
          <ul class="sort">
            <li>Popularity <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
            <li>Price <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
            <li>Stars <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
            <li>Rating <a href="#" title="ascending" class="ascending">ascending</a><a href="#" title="descending" class="descending">descending</a></li>
          </ul>
        </div>
        <?php $muf = $sisa->uhuy; ?>
        <?php foreach ($rute as $data) { 
          $kursi = ($data->seat_qty - $muf) - $this->input->get('penumpang');
          if ($kursi < 0) {} 
            else if($kursi >= 0) {
              ?>
              <div class="deals clearfix flights" >
                <!--deal-->
                <article class="full-width">
                  <div class="details">
                    <h1><?php echo $data->rute_from; ?> Ke <?php echo $data->rute_to; ?></h1>
                    <div class="f-wrap">
                      <h5>Deskripsi</h5>
                      <div class="flight-info"><?php echo $data->description; ?></div>
                    </div>
                    <div class="f-wrap">
                      <h5>Pergi</h5>
                      <div class="flight-info"><?php echo $data->depart_at; ?><br><?php echo $data->rute_from; ?></div>
                    </div>
                    <div class="f-wrap">
                      <h5>Arrival</h5>
                      <div class="flight-info"><?php echo $data->arrival; ?><br><?php echo $data->rute_to; ?></div>
                    </div>  
                    <div class="f-wrap last">
                      <h5>Sisa Kursi</h5>
                      <div class="flight-info"><?php echo $data->seat_qty - $muf; ?></div>
                    </div>
                    <span class="price">Harga Perorang  <em>Rp <?php echo $data->price; ?></em> </span>
                    <div class="description">
                      <p>1 Passenger. Airline's fare per passenger Tax included Service fees not included</p>
                    </div>
                    <div>
                      <form action="<?php echo base_url('Home/user_booking/') ?>" method="get" accept-charset="utf-8">
                        <input type="hidden" name="rute_from" value="<?php echo $data->rute_from ?>">
                        <input type="hidden" name="rute_to" value="<?php echo $data->rute_to ?>">
                        <input type="hidden" name="depart_at" value="<?php echo $data->depart_at ?>">
                        <input type="hidden" name="id_rute" value="<?php echo $data->id_rute ?>">
                        <input type="hidden" name="penumpang" value="<?php echo $this->input->get('penumpang') ?>">
                        <input type="hidden" name="siskur" value="<?php echo $data->seat_qty - $muf; ?>">
                        <button type="submit" class="gradient-button">Choose</button>
                      </form>
                    </div>
                  </div>
                </article>
                <?php } } ?>
                <!--//deal-->

                <!--bottom navigation-->
                <div class="bottom-nav">

                  <!--pager-->
                  <div class="pager">
                    <span><a href="#">First page</a></span>
                    <span><a href="#">&lt;</a></span>
                    <span class="current">1</span>
                    <span><a href="#">2</a></span>
                    <span><a href="#">&gt;</a></span>
                    <span><a href="#">Last page</a></span>
                  </div>
                  <!--//pager-->
                </div>
                <!--//bottom navigation-->
              </div>
            </section>
            <!--//three-fourth content-->
          </div>
          <!--//main content-->
        </div>
      </div>
      <!--//main-->
