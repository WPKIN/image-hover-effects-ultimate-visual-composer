<?php

namespace OXI_FLIP_BOX_PLUGINS\Includes\Admin\Pages\Tabs;

class BasicUses {

	public function render() {
		?>
		<div id="help" class="wpkin-help getting-started-content active">
			<div class="content-heading heading-questions">
				<h2>
					<?php _e("Using FlipBox", "oxi-flip-box-plugin"); ?>
					<mark><?php _e("Image Overlay", "oxi-flip-box-plugin"); ?></mark>
				</h2>
			</div>

			<section class="section-faq">

				<!-- FAQ Item 1 -->
				<div class="faq-item">
					<div class="faq-header" style="cursor:pointer">
						<i class="dashicons dashicons-arrow-down-alt2"></i>
						<h3>
							<?php _e("I have a pre-sale question. How can I get support?", "oxi-flip-box-plugin"); ?>
						</h3>
					</div>
					<div class="faq-body" style="display:none;">
						<p>
							<?php _e("For any pre-sale inquiries, please contact us directly by submitting a form here:", "oxi-flip-box-plugin"); ?>
							<a href="https://wpkin.com/contact-us/" target="_blank" rel="noopener noreferrer">
								<?php _e("Contact Us", "oxi-flip-box-plugin"); ?>
							</a>
						</p>
					</div>
				</div>

				<!-- FAQ Item 2 -->
				<div class="faq-item">
					<div class="faq-header" style="cursor:pointer">
						<i class="dashicons dashicons-arrow-down-alt2"></i>
						<h3>
							<?php _e("What is ThankRedirect and how does it work?", "oxi-flip-box-plugin"); ?>
						</h3>
					</div>
					<div class="faq-body" style="display:none;">
						<p>
							<?php _e("ThankRedirect is a WooCommerce plugin that allows you to customize where customers are redirected after completing a purchase. Instead of the default WooCommerce thank you page, you can send customers to any page on your site based on various conditions like product purchased, payment method used, or customer role.", "oxi-flip-box-plugin"); ?>
						</p>
					</div>
				</div>

				<!-- FAQ Item 3 -->
				<div class="faq-item">
					<div class="faq-header" style="cursor:pointer">
						<i class="dashicons dashicons-arrow-down-alt2"></i>
						<h3>
							<?php _e("I have purchased the PRO version, but it still shows the free plan. What should I do?", "oxi-flip-box-plugin"); ?>
						</h3>
					</div>
					<div class="faq-body" style="display:none;">
						<p>
							<?php _e("After purchasing the PRO plugin, download and install it on your website. Deactivate the Free plugin first (your data will remain intact). Once the PRO plugin is installed, activate your license key. For details on where to find the download link and license key, refer to the related FAQ below.", "oxi-flip-box-plugin"); ?>
						</p>
					</div>
				</div>

				<!-- Add more FAQ items in the same pattern -->

			</section>
		</div>

<?php
	}
}
