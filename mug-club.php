<?php

/* Template Name: Mug Club Template */
get_header(); ?>


<!-- <div class="bg-section mugclub">
 <h1><?php //the_field('breadcrumbs_title');
		?></h1>
	<a href="<?php //echo home_url(); 
				?>">
		Home </a>&nbsp;/&nbsp;<?php //the_field('breadcrumbs_title'); 
								?>
</div> -->
<section class="bg-sec mugclub">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1><?php the_field('breadcrumbs_title'); ?></h1>
				<ul>
					<li><a href="<?php echo home_url(); ?>">Home /</a></li>
					<li><a><?php the_field('breadcrumbs_title'); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="product-details">
	<div class="container-fluid">
		<div class="wrapper row">
			<div class="preview col-md-6">

				<div class="preview-pic tab-content">
					<?php
					if (have_rows('all_pics')) :
						while (have_rows('all_pics')) : the_row();
							if (get_row_layout() == 'all_content') :
					?>
								<?php $i = 1;
								foreach (get_sub_field('images') as $preview_pic) : ?>
									<div class="tab-pane <?= ($i == 1) ? "active" : ""; ?>" id="pic-<?= $i; ?>"><img src="<?= $preview_pic['image']; ?>" /></div>
					<?php $i++;
								endforeach;
							endif;
						endwhile;
					endif;
					?>
					<!-- <ul class="preview-thumbnail nav nav-tabs">
						<?php
						// if (have_rows('all_pics_thumbnail')) :
						// while (have_rows('all_pics_thumbnail')) : the_row();
						// 	if (get_row_layout() == 'all_content') :
						?>
									<?php //$j = 1;
									// foreach (get_sub_field('images') as $thumbnail_pic) : 
									?>
										<li class="<?php // ($j == 1) ? "active" : ""; 
													?>"><a data-target="#pic-<?php //$j; 
																				?>" data-toggle="tab"><img src="<?php // $thumbnail_pic['image']; 
																												?>" /></a></li>
						<?php //$j++;
						// 			endforeach;
						// 		endif;
						// 	endwhile;
						// endif;
						?>
					</ul> -->
				</div>
			</div>
			<?php
			if (have_rows('product_all_details')) :
				while (have_rows('product_all_details')) : the_row();
					if (get_row_layout() == 'all_content') :
			?>
						<div class="details col-md-6">
							<h3 class="product-title"><?= get_sub_field('product_title'); ?></h3>
							<div class="price">
								<bdi><span class="woocommerce-Price-currencySymbol">$</span><?= get_sub_field('price'); ?></bdi>
							</div>
							<p class="product-description" style="color:red">It’s sold out for the season! </p> 
							<p class="product-description"><?= get_sub_field('description'); ?></p>

							<!-- <form action="" method="post" id="mug_club_form">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-6">
											<label> First Name <br>
												<input type="text" name="fname" class="form-control">
											</label>
										</div>
										<div class="col-lg-6">
											<label> Last Name <br>
												<input type="text" name="lname" class="form-control">
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<label> Current Mug Club Member <br>
												<input type="radio" name="mugclub" class="form-control" value="Yes"> Yes
												<input type="radio" name="mugclub" class="form-control" value="No"> No
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 mugnum">
											<label> Last Year Mug No. <br>
												<input type="text" name="mugnum" class="form-control" id="mugnum">
											</label>
										</div>
										<div class="col-lg-6">
											<label> Adding Additional Mugs? <br>
												<input type="radio" name="Addimugs" class="form-control" value="Yes"> Yes
												<input type="radio" name="Addimugs" class="form-control" value="No"> No
											</label>
										</div>
										<div class="col-lg-6 mugnum2">
											<label> Fill The Quantity <br>
												<input type="number" name="quan" class="form-control">
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<input type="submit" class="form-control" name="submit" id="submit" value="Buy Now">
										</div>
									</div>
								</div>
							</form> -->
							<!--form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="paypal_form">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="V6783UHTC5A88">
								<input type="hidden" name="price" value="<?= get_sub_field('price'); ?>">
								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-6">
											<label> First Name <br>
												<input type="text" name="fname" class="form-control">
											</label>
										</div>
										<div class="col-lg-6">
											<label> Last Name <br>
												<input type="text" name="lname" class="form-control">
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<label> Current Mug Club Member <br>
												<input type="radio" name="mugclub" class="form-control" value="Yes"> Yes
												<input type="radio" name="mugclub" class="form-control" value="No"> No
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 mugnum">
											<label> Last Year Mug No. <br>
												<input type="text" name="mugnum" class="form-control" id="mugnum">
											</label>
										</div>
									</div>
									<!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> -->
									<!--img id="submit_button_img" alt="PayPal - The safer, easier way to pay online!" border="0" src="https://wp.localserverpro.com/matterhorn/wp-content/uploads/2022/11/btn_buynowCC_LG.gif">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form-->
							
							
<!-- Commented on 25 Jan 2023							 -->
<!-- 							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="UUZ3AAV3PF9PL">
	<table>

		<tr>
			<td>
				<input type="hidden" name="on0" value="Current Mug Club Member ?"><label>Current Mug Club Member ?<span style="color:red">*</span>
			</td>
		</tr>
		<tr>
			<td class="club-member">
				<select name="os0">
					<option value="Yes">Yes </option>
					<option value="No">No </option>
				</select> 
			</td>
		</tr>

		<tr class="club-member-box">
			<td><input type="hidden" name="on1" value="Last years number?"><label>Last Year Mug No.<span style="color:red">*</span> <br><input class="cmb" type="text" name="os1" maxlength="200" required></label></td>
		</tr>

		<tr>
			<td><input type="hidden" name="on2" value="Full Name" ><label>Full Name<span style="color:red">*</span></br><input type="text" name="os2" maxlength="200" required></label></td>
		</tr>
	</table>
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->
<!-- Commented on 25 Jan 2023							 -->							
							


								</div>
							
							
						


							<!-- <div id="smart-button-container">
								<div style="text-align: center;">
									<div id="paypal-button-container"></div>
								</div>
							</div> -->
		
		

						</div>
			<?php
					endif;
				endwhile;
			endif;
			?>
			<div class="row">
				<div class="col-lg-12">
					<?php
					if (have_rows('full_description')) :
						while (have_rows('full_description')) : the_row();
							if (get_row_layout() == 'all_content') :
					?>
								<div class="decription">
									<nav>
										<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
											<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"><?= get_sub_field('heading_tab'); ?></a>
										</div>
									</nav>
									<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
										<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<!-- 											<h3><?= get_sub_field('tab_content_heading'); ?></h3> -->
<h3> Sold Out For the Season</h3>

											<ul>
												<?php foreach (get_sub_field('bullet_points') as $list_ele) : ?>
													<li><?= $list_ele['list_detail']; ?></li>
												<?php endforeach; ?>
												<li><?= get_sub_field('last_list_heading'); ?>
													<ul>
														<?php foreach (get_sub_field('last_list_bullet_points') as $second_list) : ?>
															<li>
																<?= $second_list['details']; ?>
															</li>
														<?php endforeach; ?>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
					<?php
							endif;
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
</section>

<?php //if (isset($_POST['submit'])) {
// global $wpdb;
// echo "Yes";
// 	extract($_POST);
// 	if (session_id() == "") {
// 		session_start();
// 	}
// 	foreach ($_POST as $key => $val) :
// 		$_SESSION[$key] = $val;
// 	endforeach;
// 	$to = "dev.team2080@gmail.com";
// 	$sub = "Mug Club Member";
// 	if ($mugclub == "Yes") {
// 		$message = "Thank you for being interested again for a member of our club.";
// 	} else {
// 		$message = "Thank you for being interested for a member of our club.";
// 	}
// 	wp_mail($to, $sub, $message);
// 	// $name = $fname." ".$lname;
// 	// $is_current_club_member = $mugclub;
// 	if ($mugclub == "Yes") {
// 		$mug_number = $mugnum;
// 	}
// 	if ($fname != "" && $lname != "") {
// 		echo "<script> location.replace('https://www.paypal.com/cgi-bin/webscr'); </script>";
// 	} else {
// 		echo "<script> alert('Please Fill The Form'); </script>";
// 	}
// } 
?>
<?php
get_footer();
?>