<script type="text/javascript">
	function printpage()
	{window.print()}
</script>
<?php 
$id_user = $this->session->userdata('id_user');
$defurl = base_url('Home/setting/'.$id_user);
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$desc = $url;
$cetak = substr($url, 41, 7);
if ($cetak!=$reservation->id_customer) {
	redirect($defurl);
}

?>
<!--main-->
<div class="main" role="main">		
	<div class="wrap clearfix">
		<!--main content-->
		<div class="content clearfix">

			<!--three-fourth content-->
			<section class="three-fourth">
				<form id="booking" method="post" action="booking" class="booking">
					<fieldset>
						<h3><span>03 </span>Confirmation <?php echo($cetak); ?></h3>
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
							<p>Thank you. Your booking is now confirmed.</p>
						</div>

						<h3>Traveller info</h3>
						<div class="text-wrap">
							<div class="output">
								<p>Booking number:</p>
								<p><?php echo $reservation->reservation_code ?></p>
								<p>Name: </p>
								<p><?php echo $reservation->name ?></p>
								<p>address: </p>
								<p><?php echo $reservation->address ?></p>
								<p>Gender:</p>
								<p><?php echo $reservation->gender ?></p>
								<p>Dari: </p>
								<p><?php echo $reservation->rute_from ?></p>
								<p>Ke: </p>
								<p><?php echo $reservation->rute_to ?></p>
								<p>Price:</p>
								<p><?php echo $reservation->price ?></p>
							</div>
						</div>

						<h3>Special requirements</h3>
						<div class="text-wrap">
							<p>I would like to book a twin room with a definite sea view please. Thank you and kind regards, John Livingston</p>
						</div>

						<h3>Payment</h3>
						<div class="text-wrap">
							<p>You have now confirmed and guaranteed your booking by credit card.<br />All payments are to be made at the hotel during your stay, unless otherwise stated in the hotel policies or in the room conditions.<br />Please note that your credit card may be pre-authorised prior to your arrival. </p>
							<p><strong class="dark">This hotel accepts the following forms of payment:</strong></p>
							<p>American Express, Visa, MasterCard</p>
						</div>

						<h3>Don’t forget</h3>
						<div class="text-wrap">
							<p>You can change or cancel your booking via our online self service tool myBookYourTravel:<br />
								<a href="#" class="turqouise-link">https://secure.bookyourtravel.com/myreservations.html?tmpl=profile/myreservations;bn=904054553;pincode=6525</a></p><br />
								<p><strong>We wish you a pleasant stay</strong><br /><i>your BookYourTravel team</i></p>
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