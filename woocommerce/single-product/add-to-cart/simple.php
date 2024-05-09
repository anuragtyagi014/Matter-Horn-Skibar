<?php

/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

global $product;

if (!$product->is_purchasable()) {
	return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.

if ($product->is_in_stock()) : ?>



	<!--form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="paypal_form">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="V6783UHTC5A88">
		<input type="hidden" name="price" value="<?= get_sub_field('price'); ?>">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<label> First Name <br>
						<input type="text"  name="fname" class="form-control" required>
					</label>
				</div>
				<div class="col-lg-6">
					<label> Last Name <br>
						<input type="text"  name="lname" class="form-control" required>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<label> Current Mug Club Member <br>
						<input type="radio"  name="mugclub" class="form-control" value="Yes" required> Yes
						<input type="radio"  name="mugclub" class="form-control" value="No" required> No
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mugnum">
					<label> Last Year Mug No. <br>
						<input type="text"  name="mugnum" class="form-control" id="mugnum" required>
					</label>
				</div>
			</div>
			
			</div>
	</form -->
			<!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> -->
			<!-- <img id="submit_button_img" alt="PayPal - The safer, easier way to pay online!" border="0" src="https://wp.localserverpro.com/matterhorn/wp-content/uploads/2022/11/btn_buynowCC_LG.gif">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
		

	<?php do_action('woocommerce_before_add_to_cart_form'); ?>

	<form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action('woocommerce_before_add_to_cart_button'); ?>

		<?php
		do_action('woocommerce_before_add_to_cart_quantity');

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
				'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
				'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action('woocommerce_after_add_to_cart_quantity');
		?>

		<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>

		<?php do_action('woocommerce_after_add_to_cart_button');
		?>
	</form>

	<?php do_action('woocommerce_after_add_to_cart_form');
	?>


	<?php

	//	echo do_shortcode('[contact-form-7 id="192" title="Mugclub"]') 
	?>


	<!-- <div id="smart-button-container">
								<div style="text-align: center;">
									<div id="paypal-button-container"></div>
								</div>
							</div> -->



<?php endif; ?>