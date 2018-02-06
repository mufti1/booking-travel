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
        <?php foreach ($rute as $data) { 
          $kursi = $data->seat_qty;
          if ($kursi == 0) {} 
            else if($kursi != 0) {
              ?>
              <div class="locations clearfix" >
                <!--deal-->
                <article class="full-width full-height">
                  <figure><a href="location.html" title=""><img src="<?php echo base_url('assets/depan/') ?>images/uploads/img.jpg" alt="" width="270" height="152" /></a></figure>
                  <div class="details full-height" >
                    <h1><?php echo $data->rute_from; ?> Ke <?php echo $data->rute_to; ?></h1>
                    <div class="description full-height" >
                      <p>Pergi: <?php echo $data->depart_at; ?><br>
                        Tiba: <?php echo $data->arrival; ?><br>
                        Deskripsi: 
                        <?php echo $data->description; ?>
                      </p>
                      </div>
                    </div>
                    <div class="ribbon">
                      <div class="half flight">
                        <h2>Rp <?php echo $data->price; ?></h2>
                      </div>
                    </div>
                    <div>
                      <form action="<?php echo base_url('Home/user_booking/') ?>" method="get" accept-charset="utf-8">
                        <input type="hidden" name="rute_from" value="<?php echo $data->rute_from ?>">
                        <input type="hidden" name="rute_to" value="<?php echo $data->rute_to ?>">
                        <input type="hidden" name="depart_at" value="<?php echo $data->depart_at ?>">
                        <input type="hidden" name="id_rute" value="<?php echo $data->id_rute ?>">
                        <input type="hidden" name="penumpang" value="<?php echo $this->input->get('penumpang') ?>">
                        <button type="submit" class="gradient-button">Choose</button>
                      </form>
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
