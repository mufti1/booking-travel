<!--header-->
<header>
	<div class="wrap clearfix">
		<!--logo-->
		<h1 class="logo"><a href="index.html" title="TravelSist - beranda"><img src="<?php echo base_url('/assets/depan/'); ?>images/txt/logo.png" alt="Book Your Travel" /></a></h1>
		<!--//logo-->

		<!--ribbon-->
		<div class="ribbon">
			<nav>
				<ul class="profile-nav">
					<li class="active"><a href="#" title="My Account">My Account</a></li>
					<li><a href="login.html" title="Login">Login</a></li>
					<li><a href="<?php echo base_url('login/logout') ?>" title="Settings">Logout</a></li>
				</ul>
			</nav>
		</div>
		<!--//ribbon-->

		<!--search-->
		<div class="search">
			<form id="search-form" method="get" action="search-form">
				<input type="search" placeholder="Search entire site here" name="site_search" id="site_search" /> 
				<input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search"/>
			</form>
		</div>
		<!--//search-->

		<!--contact-->
		<div class="contact">
			<span>24/7 Support number</span>
			<span class="number">1- 555 - 555 - 555</span>
		</div>
		<!--//contact-->
	</div>

	<!--main navigation-->
	<nav class="main-nav" role="navigation" id="nav">
		<ul class="wrap">
			<li class="active"><a href="flights.html" title="Flights">Flights</a></li>
		</ul>
	</nav>
	<!--//main navigation-->
</header>
<!--//header-->

<!--slider-->
<section class="slider clearfix">
	<div id="sequence">
		<ul>
			<li>
				<div class="info animate-in">
					<h2>TravelSist</h2><br />
					<p>Penerbangan pertama di Indonesia yang mengkhususkan penumpang perempuan</p>
				</div>
				<img class="main-image animate-in" src="<?php echo base_url('/assets/depan/'); ?>images/slider/img.jpg" alt="" />
			</li>
			<li>
				<div class="info animate-in">
					<h2>TravelSist Diskon</h2><br />
					<p>TravelSist sedang ada diskon besar besran buat seluruh armada</p>
				</div>
				<img class="main-image animate-in" src="<?php echo base_url('/assets/depan/'); ?>images/slider/img.jpg" alt="" />
			</li>
			<li>
				<div class="info animate-in">
					<h2>Check out last minute flight, hotel &amp; vacation offers!</h2><br />
					<p>Save up to 50%!</p>
				</div>
				<img class="main-image animate-in" src="<?php echo base_url('/assets/depan/'); ?>images/slider/img.jpg" alt="" />
			</li>
		</ul>
	</div>
</section>
<!--//slider-->

<!--search-->
<div class="main-search">
	<form action="<?php echo base_url('Home/result'); ?>" method="get" accept-charset="utf-8">
		<!--column-->
		<div class="column radios">
			<h4><span>01</span> Mau naik darimana Sist?</h4>
			<div class="f-item forem-control">
				<label for="destination3" style="margin-bottom: 6px;">Pilih bandara</label>
				<select name="rute_from">
					<?php foreach ($rute as $data) { ?>
					<option value="<?php echo $data->rute_from ?>"><?php echo $data->rute_from ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<!--//column-->
		<div class="forms">
			<!--form flight-->
			<div class="form" id="form3">

				<!--column-->
				<div class="column">
					<h4><span>02</span> Tujuanya kemana Sist?</h4>
					<div class="f-item">
						<label for="destination3">Pilih bandara</label>
						<select name="rute_to">
							<?php foreach ($rute_to as $data) { ?>
							<option value="<?php echo $data->rute_to ?>"><?php echo $data->rute_to ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<!--//column-->

				<!--column-->
				<div class="column twins">
					<h4><span>03</span> Hari apa berangkatnya Sist?</h4>
					<div class="f-item forem-control">
						<label for="datepicker6">Departing on</label>
						<div class="datepicker-wrap"><input type="text" placeholder="" class="tanggal" id="datepicker6" name="depart_at" /></div>
					</div>
				</div>
				<!--//column-->
				
				<!--column-->
				<div class="column triplets">
					<h4><span>04</span> Siapa aja nih penumpangnya?</h4>
					<div class="f-item spinner forem-control">
						<label for="spinner6">Dewasa</label>
						<input type="text" placeholder="" id="spinner6" name="penumpang" value="1" />
					</div>
					<div class="f-item spinner forem-control">
						<label for="spinner7">Anak-anak</label>
						<input type="text" placeholder="" />
					</div>
				</div>
				<!--//column-->
			</div>	
			<!--//form flight-->
		</div>
		<button type="submit" class="search-submit">Cari &nbsp;&nbsp;<i class="fa fa-plane"></i></button>
	</form>
</div>
<!--//search-->


<script>
		// Initiate selectnav function
		selectnav();
	</script>
</body>
</html>