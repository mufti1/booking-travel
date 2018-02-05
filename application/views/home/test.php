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
					<li><a href="my_account.html" title="Settings">Settings</a></li>
				</ul>
				<ul class="lang-nav">
					<li class="active"><a href="#" title="English (US)">English (US)</a></li>
					<li><a href="#" title="English (UK)">English (UK)</a></li>
					<li><a href="#" title="Deutsch">Deutsch</a></li>
					<li><a href="#" title="Italiano">Italiano</a></li>
					<li><a href="#" title="Русский">Русский</a></li>
				</ul>
				<ul class="currency-nav">
					<li class="active"><a href="#" title="$US Dollar">$US Dollar</a></li>
					<li><a href="#" title="€ Euro">€ Euro</a></li>
					<li><a href="#" title="£ Pound">£ Pound</a></li>
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
			<li><a href="hotels.html" title="Hotels">Hotels</a>
				<ul>
					<li><a href="#">Secondary navigation</a></li>
					<li><a href="#">example links</a></li>
					<li><a href="error.html">Error page</a></li>
					<li><a href="loading.html">Loading page</a></li>
				</ul>
			</li>
			<li class="active"><a href="flights.html" title="Flights">Flights</a></li>
			<li><a href="flight_and_hotels.html" title="Flight + Hotel">Flight + Hotel</a></li>
			<li><a href="self_catering.html" title="Self catering">Self catering</a></li>
			<li><a href="cruise.html" title="Cruises">Cruises</a></li>
			<li><a href="car_rental.html" title="Car rental">Car rental</a></li>
			<li><a href="hot_deals.html" title="Hot deals">Hot deals</a></li>
			<li><a href="#" title="Vacations">Vacations</a></li>
			<li><a href="#" title="Business travel">Business travel</a></li>
			<li><a href="#" title="Group travel">Group travel</a></li>
			<li><a href="get_inspired.html" title="Get inspired">Get inspired</a></li>
			<li><a href="#" title="Travel guides">Travel guides</a>
				<ul>
					<li><a href="location.html">Location Details</a></li>
				</ul>
			</li>
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
	<form id="main-search" method="post" action="search_results.html">
		<!--column-->
		<div class="column radios">
			<h4><span>01</span> Mau naik darimana Sist?</h4>
			<div class="f-item forem-control">
				<label for="destination3" style="margin-bottom: 6px;">Pilih bandara</label>
				<input type="text" placeholder="City, region, district or specific airport" id="destination3" name="destination" />
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
						<input type="text" placeholder="City, region, district or specific airport" id="destination3" name="destination" />
					</div>
				</div>
				<!--//column-->

				<!--column-->
				<div class="column twins">
					<h4><span>03</span> Hari apa berangkatnya Sist?</h4>
					<div class="f-item forem-control">
						<label for="datepicker6">Departing on</label>
						<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker6" name="datepicker6" /></div>
					</div>
				</div>
				<!--//column-->
				
				<!--column-->
				<div class="column triplets">
					<h4><span>04</span> Siapa aja nih penumpangnya?</h4>
					<div class="f-item spinner forem-control">
						<label for="spinner6">Dewasa</label>
						<input type="text" placeholder="" id="spinner6" name="spinner6" />
					</div>
					<div class="f-item spinner forem-control">
						<label for="spinner7">Anak-anak</label>
						<input type="text" placeholder="" id="spinner7" name="spinner7" />
					</div>
				</div>
				<!--//column-->
			</div>	
			<!--//form flight-->
		</div>
		<input type="submit" value="Proceed to results" class="search-submit" id="search-submit" />
	</form>
</div>
<!--//search-->


<script>
		// Initiate selectnav function
		selectnav();
	</script>
</body>
</html>