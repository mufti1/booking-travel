<?php 
$id_user = $this->session->userdata('id_user');
$defurl = base_url('Home/setting/'.$id_user);
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$desc = $url;
$cetak = substr($url, 37, 5);

if ($cetak != $id_user) {
	redirect($defurl);
}

?>
<div class="main" role="main">		
	<div class="wrap clearfix">
		<!--main content-->
		<div class="content clearfix">
			<!--breadcrumbs-->
			<nav role="navigation" class="breadcrumbs clearfix">
				<!--crumbs-->
				<ul class="crumbs">
					<li><a href="#" title="Home">Home</a></li>
					<li><a href="#" title="My Account">My Account</a></li>                                    
				</ul>
				<!--//crumbs-->
				
			</nav>
			<!--//breadcrumbs-->

			<!--three-fourth content-->
			<section class="three-fourth">
				
				<h1>My account</h1>

				<!--inner navigation-->
				<nav class="inner-nav">
					<ul>
						<li><a href="#MyBookings" title="My Bookings">My Bookings</a></li>
						<li><a href="#MySettings" title="Settings">Settings</a></li>
					</ul>
				</nav>

				<!--//inner navigation-->
				<!--My Bookings-->
				<section id="MyBookings" class="tab-content">
					<?php foreach ($reservation as $data) {?>
					<!--booking-->
					<article class="bookings">
						<h1><?php echo $data->rute_from ?> -> <?php echo $data->rute_to ?></h1>
						<div class="b-info">
							<table>
								<tr>
									<th>Reservation Code</th>
									<td><?php echo $data->reservation_code ?></td>
								</tr>
								<tr>
									<th>Name</th>
									<td><?php echo $data->name ?></td>
								</tr>
								<tr>
									<th>Nomor kursi</th>
									<td><?php echo $data->seat_code ?></td>
								</tr>
								<tr>
									<th>Dari</th>
									<td><?php echo $data->rute_from ?></td>
								</tr>
								<tr>
									<th>Ke</th>
									<td><?php echo $data->rute_to ?></td>
								</tr>
								<tr>
									<th>Total Price:</th>
									<td><strong>$ <?php echo $data->price ?></strong></td>
								</tr>
							</table>
						</div>
						<form action="<?php echo base_url('home/print_tiket') ?>" method="post" accept-charset="utf-8">
							<input type="hidden" name="cust" value="<?php echo $data->id_customer ?>">
							<div class="actions">
								<?php if ($data->status == 3): ?>
									<input type ="submit" class="gradient-button" value="View confirmation">
								<?php endif ?>
								<?php if ($data->status == 2): ?>
									<a href="#" class="gradient-button">Sedang Dikonfirmasi</a>
								<?php endif ?>
								<?php if ($data->status == 0): ?>
									<a href="<?php echo base_url('Home/payment/'.$data->reservation_code) ?>" class="gradient-button">Pembayaran</a>
								<?php endif ?>
							</div>
						</form>
					</article>
					<?php } ?>
					<!--//booking-->
					<?php echo $this->pagination->create_links(); ?>
				</section>
				<!--//My Bookings-->

				<!--MySettings-->
				<section id="MySettings" class="tab-content">
					<article class="mysettings">
						<h1>Personal details</h1>
						<table>
							<tr>
								<th>First name:</th>
								<td>John
									<!--edit fields-->
									<div class="edit_field" id="field1">
										<label for="new_name">Your new name:</label>
										<input type="text" id="new_name"/>
										<input type="submit" value="save" class="gradient-button" id="submit1"/>
										<a href="#">Cancel</a>
									</div>
									<!--//edit fields-->
								</td>
								<td><a href="#field1" class="gradient-button edit">Edit</a></td>
							</tr>
							<tr>
								<th>Last name:</th>
								<td>Livingston
									<!--edit fields-->
									<div class="edit_field" id="field2">
										<label for="new_last_name">Your new last name:</label>
										<input type="text" id="new_last_name"/>
										<input type="submit" value="save" class="gradient-button" id="submit2"/>
										<a href="#">Cancel</a>
									</div>
									<!--//edit fields-->
								</td>
								<td><a href="#field2" class="gradient-button edit">Edit</a></td>
							</tr>
							<tr>
								<th>E-mail address: </th>
								<td>mail@google.com
									<!--edit fields-->
									<div class="edit_field" id="field3">
										<label for="new_email">Your new email:</label>
										<input type="text" id="new_email"/>
										<input type="submit" value="save" class="gradient-button" id="submit3"/>
										<a href="#">Cancel</a>
									</div>
									<!--//edit fields-->
								</td>
								<td><a href="#field3" class="gradient-button edit">Edit</a></td>
							</tr>
							<tr>
								<th>Password: </th>
								<td>*********
									<!--edit fields-->
									<div class="edit_field" id="field4">
										<label for="new_password">Your new password:</label>
										<input type="password" id="new_password"/>
										<input type="submit" value="save" class="gradient-button" id="submit4"/>
										<a href="#">Cancel</a>
									</div>
									<!--//edit fields-->
								</td>
								<td><a href="#field4" class="gradient-button edit">Edit</a></td>
							</tr>
							<tr>
								<th>Street Address and number:</th>
								<td>Some street name 55
									<!--edit fields-->
									<div class="edit_field" id="field5">
										<label for="new_address">Your new address:</label>
										<input type="text" id="new_address"/>
										<input type="submit" value="save" class="gradient-button" id="submit5"/>
										<a href="#">Cancel</a>
									</div>
									<!--//edit fields-->
								</td>
								<td><a href="#field5" class="gradient-button edit">Edit</a></td>
							</tr>

							<tr>
								<th>Town / City: </th>
								<td>Sunnytown
									<!--edit fields-->
									<div class="edit_field" id="field6">
										<label for="new_city">Your new city:</label>
										<input type="text" id="new_city"/>
										<input type="submit" value="save" class="gradient-button" id="submit6"/>
										<a href="#">Cancel</a>
									</div>
									<!--//edit fields-->
								</td>
								<td><a href="#field6" class="gradient-button edit">Edit</a></td>
							</tr>

							<tr>
								<th>ZIP code:</th>
								<td>9500 - 100
									<!--edit fields-->
									<div class="edit_field" id="field7">
										<label for="new_zip">Your new ZIP code:</label>
										<input type="text" id="new_zip"/>
										<input type="submit" value="save" class="gradient-button" id="submit7"/>
										<a href="#">Cancel</a>
									</div>
									<!--//edit fields-->
								</td>
								<td><a href="#field7" class="gradient-button edit">Edit</a></td>
							</tr>

							<tr>
								<th>Country:</th>
								<td>Neverland
									<!--edit fields-->
									<div class="edit_field" id="field8">
										<label for="new_country">Your new country:</label>
										<input type="text" id="new_country"/>
										<input type="submit" value="save" class="gradient-button" id="submit8"/>
										<a href="#">Cancel</a>
									</div>
									<!--//edit fields-->
								</td>
								<td><a href="#field8" class="gradient-button edit">Edit</a></td>
							</tr>
						</table>

					</article>
				</section>
				<!--//MySettings-->

			</section>
			<!--//three-fourth content-->

			<!--sidebar-->
			<aside class="right-sidebar">

				<!--Need Help Booking?-->
				<article class="default clearfix">
					<h2>Butuh bantuan untuk pemesanan?</h2>
					<p>Silahkan hubungi customer service kami, customer service kami bekerja 24 jam dan di hari libur kami tetap melayani pelanggan</p>
					<p class="number">0281-252002</p>
				</article>
				<!--//Need Help Booking?-->

				<!--Why Book with us?-->
				<article class="default clearfix">
					<h2>Kenapa harus TravelSist?</h2>
					<h3>Nggak Ribet</h3>
					<p>Di TravelSist sista bisa pesan dimanapun, dan tak perlu mengupload bukti pembayaran</p>
					<h3>Banyak Pilihan</h3>
					<p>Di TravelSist sista bisa memilih beragam penerbangan kemanapun</p>
					<h3>Kami Slalu ada</h3>
					<p>Customer service kami selalu aktif setiap hari dan 24 jam, jadi jangan risau untuk tanya-tanya</p>
				</article>
				<!--//Why Book with us?-->

			</aside>
			<!--//sidebar-->
		</div>
		<!--//main content-->
	</div>
</div>
	<!--//main