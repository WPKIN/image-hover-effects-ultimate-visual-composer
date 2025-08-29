<?php

namespace OXI_FLIP_BOX_PLUGINS\Includes\Admin\Pages\Tabs;

class Introduction {

	function render() {
		?>
		<div id="introduction" class="getting-started-content content-introduction setup-complete active" >
			<div class="content-heading heading-overview">
				<h2>
					<?php echo esc_html__( 'Welcome to', 'oxi-flip-box-plugin' ); ?>
					<mark><?php echo esc_html__( 'ThankRedirect', 'oxi-flip-box-plugin' ); ?></mark>
				</h2>
				<p>
					<?php echo esc_html__( 'Transform your WooCommerce thank you pages into powerful conversion tools', 'oxi-flip-box-plugin' ); ?>
				</p>
			</div>

			<section class="section-introduction section-full">
				<div class="col-description">
					<p><?php echo esc_html__( 'ThankRedirect for WooCommerce revolutionizes how you handle the post-purchase experience. Take complete control of your thank you pages with our powerful, flexible redirection system that guides customers exactly where you want them to go after completing a purchase.', 'oxi-flip-box-plugin' ); ?></p>
					<p><?php echo esc_html__( 'Whether you want to create a unified brand experience, customize thank you pages based on products purchased, or implement sophisticated marketing funnels, ThankRedirect gives you the tools to create the perfect post-purchase journey for your customers.', 'oxi-flip-box-plugin' ); ?></p>
				</div>

				<div class="col-image">
					<iframe src="https://www.youtube.com/embed/OaLL0DNUHWA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
				</div>
			</section>

			<div class="content-heading never-miss-feature">
				<h2>
					<?php echo esc_html__( 'Powerful', 'oxi-flip-box-plugin' ); ?>
					<mark><?php echo esc_html__( 'Redirection Features', 'oxi-flip-box-plugin' ); ?></mark>
				</h2>
				<p><?php echo esc_html__( "Customize your customer's post-purchase journey with precision", 'oxi-flip-box-plugin' ); ?></p>
			</div>

			<section class="section-full">
				<div class="col-description">
					<h2><?php echo esc_html__( 'Global Thank You Page Redirect', 'oxi-flip-box-plugin' ); ?></h2>
					<p><?php echo esc_html__( 'Create a consistent post-purchase experience by redirecting all customers to a custom thank you page. Perfect for creating a unified brand experience or implementing cross-selling opportunities that work for all products.', 'oxi-flip-box-plugin' ); ?></p>
				</div>

				<div class="col-image">
					<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
				</div>
			</section>

			<section class="section-full">
				<div class="col-image">
					<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
				</div>

				<div class="col-description">
					<h2><?php echo esc_html__( 'Product-Specific Redirects', 'oxi-flip-box-plugin' ); ?></h2>
					<p><?php echo esc_html__( 'Tailor the post-purchase experience based on what your customer bought. Direct customers who purchase specific products to dedicated thank you pages with relevant upsells, tutorials, or product-specific information.', 'oxi-flip-box-plugin' ); ?></p>
				</div>
			</section>

			<section class="section-full">
				<div class="col-description">
					<h2><?php echo esc_html__( 'Category & Tag Based Redirects', 'oxi-flip-box-plugin' ); ?><span class="badge"><?php echo esc_html__( 'New', 'oxi-flip-box-plugin' ); ?> ⚡</span></h2>
					<p><?php echo esc_html__( 'Group similar products together with category and tag-based redirects. Send customers to specialized thank you pages based on the product categories or tags in their order, creating a more relevant post-purchase experience.', 'oxi-flip-box-plugin' ); ?></p>
				</div>

				<div class="col-image">
					<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
				</div>
			</section>

			<section class="section-full">
				<div class="col-image">
					<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
				</div>

				<div class="col-description">
					<h2><?php echo esc_html__( 'User Role Based Redirects', 'oxi-flip-box-plugin' ); ?><span class="badge"><?php echo esc_html__( 'New', 'oxi-flip-box-plugin' ); ?> ⚡</span></h2>
					<p><?php echo esc_html__( 'Create personalized experiences for different customer types. Redirect wholesale customers, members, or first-time buyers to specialized thank you pages that cater to their specific needs and relationship with your store.', 'oxi-flip-box-plugin' ); ?></p>
				</div>
			</section>

			<section class="section-full">
			<div class="col-description">
				<h2><?php echo esc_html__( 'Payment Method Based Redirects', 'oxi-flip-box-plugin' ); ?><span class="badge"><?php echo esc_html__( 'New', 'oxi-flip-box-plugin' ); ?> ⚡</span></h2>
				<p><?php echo esc_html__( 'Customize the post-purchase journey based on how customers pay. Send customers to different thank you pages depending on whether they used credit cards, PayPal, or other payment methods, allowing for payment-specific instructions or offers.', 'oxi-flip-box-plugin' ); ?></p>
			</div>

			<div class="col-image">
				<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
			</div>
			</section>

			<section class="section-full">
			<div class="col-image">
				<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
			</div>

			<div class="col-description">
				<h2><?php echo esc_html__( 'Product Variation & Type Based Redirects', 'oxi-flip-box-plugin' ); ?></h2>
				<p><?php echo esc_html__( 'Take customization to the next level with redirects based on specific product variations or product types. Direct customers to different thank you pages based on the color, size, or other attributes they selected, or by whether they purchased a simple, variable, or subscription product.', 'oxi-flip-box-plugin' ); ?></p>
			</div>
			</section>

			<div class="content-heading heading-shortcodes">
			<h2>
				<mark><?php echo esc_html__( 'Powerful Shortcodes', 'oxi-flip-box-plugin' ); ?></mark>
				<?php echo esc_html__( 'for Custom Thank You Pages', 'oxi-flip-box-plugin' ); ?>
			</h2>
			<p><?php echo esc_html__( 'Create fully customized thank you pages with our comprehensive shortcode library', 'oxi-flip-box-plugin' ); ?></p>
			</div>

			<section class="section-shortcodes section-full">
			<div class="col-description">
				<h2><?php echo esc_html__( 'Dynamic Order Information', 'oxi-flip-box-plugin' ); ?></h2>
				<p><?php echo esc_html__( 'ThankRedirect includes a comprehensive set of shortcodes that let you display dynamic order information on your custom thank you pages. Use these shortcodes with any page builder to create beautifully designed, information-rich thank you pages that enhance the customer experience.', 'oxi-flip-box-plugin' ); ?></p>
				<p><?php echo esc_html__( 'From basic order details to customer information, payment methods, and downloadable content - our shortcodes make it easy to display exactly what your customers need to see after purchase.', 'oxi-flip-box-plugin' ); ?></p>
				<div class="shortcode-examples">
				<p><strong><?php echo esc_html__( 'Example shortcodes:', 'oxi-flip-box-plugin' ); ?></strong></p>
				<ul>
					<li><code>[wpkin_order_number]</code> - <?php echo esc_html__( 'Displays the order number', 'oxi-flip-box-plugin' ); ?></li>
					<li><code>[wpkin_customer_name]</code> - <?php echo esc_html__( "Displays the customer's full name", 'oxi-flip-box-plugin' ); ?></li>
					<li><code>[wpkin_order_total]</code> - <?php echo esc_html__( 'Displays the order total amount', 'oxi-flip-box-plugin' ); ?></li>
					<li><code>[wpkin_items]</code> - <?php echo esc_html__( 'Displays the list of ordered items', 'oxi-flip-box-plugin' ); ?></li>
				</ul>
				<p><a href="/wp-admin/admin.php?page=oxi-flip-box-plugin" class="button button-secondary"><?php echo esc_html__( 'View All Available Shortcodes', 'oxi-flip-box-plugin' ); ?></a></p>
				</div>
			</div>

			<div class="col-image">
				<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
			</div>
			</section>

			<div class="content-heading heading-integrations">
			<h2>
				<mark><?php echo esc_html__( 'Advanced Features', 'oxi-flip-box-plugin' ); ?></mark>
				<?php echo esc_html__( 'for Marketers', 'oxi-flip-box-plugin' ); ?>
			</h2>
			<p><?php echo esc_html__( 'Take your post-purchase experience to the next level with these powerful marketing tools', 'oxi-flip-box-plugin' ); ?></p>
			</div>

			<section class="section-embed section-full">
			<div class="col-description">
				<h2><?php echo esc_html__( 'URL Personalization', 'oxi-flip-box-plugin' ); ?></h2>
				<p><?php echo esc_html__( 'Enhance your thank you pages with dynamic, personalized content by passing order data directly to your thank you page URLs. Include customer names, order details, and custom parameters to create highly personalized experiences or to track campaign effectiveness.', 'oxi-flip-box-plugin' ); ?></p>
			</div>

			<div class="col-image">
				<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
			</div>
			</section>

			<section class="section-links section-full">
			<div class="col-image">
				<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
			</div>

			<div class="col-description">
				<h2><?php echo esc_html__( 'eCommerce DataLayer for Analytics', 'oxi-flip-box-plugin' ); ?></h2>
				<p><?php echo esc_html__( 'Maximize your marketing insights with built-in support for Google Analytics and Facebook Pixel. ThankRedirect automatically passes purchase data to your analytics platforms, ensuring accurate conversion tracking and enabling powerful remarketing opportunities.', 'oxi-flip-box-plugin' ); ?></p>
			</div>
			</section>

			<div class="section-wrap">
			<section class="section-private-folders section-half">
				<div class="col-description">
				<h2><?php echo esc_html__( 'Flexible Redirect Timing', 'oxi-flip-box-plugin' ); ?></h2>
				<p><?php echo esc_html__( 'Fine-tune your customer experience with customizable redirect delays. Choose to redirect customers immediately or after a specified number of seconds, giving them time to see order confirmation details before moving to your custom thank you page.', 'oxi-flip-box-plugin' ); ?></p>
				</div>
				<div class="col-image">
					<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
				</div>
			</section>

			<section class="section-half">
				<div class="col-description">
				<h2><?php echo esc_html__( 'Brand Based Redirects', 'oxi-flip-box-plugin' ); ?></h2>
				<p><?php echo esc_html__( 'For multi-brand stores, create brand-specific post-purchase experiences. Redirect customers to thank you pages that match the brand identity of the products they purchased, maintaining consistent branding throughout the customer journey.', 'oxi-flip-box-plugin' ); ?></p>
				</div>

				<div class="col-image">
					<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
				</div>
			</section>
			</div>

			<div class="content-heading heading-integrations">
			<h2>
				<mark><?php echo esc_html__( 'Seamless Integration', 'oxi-flip-box-plugin' ); ?></mark>
				<?php echo esc_html__( 'with Your Favorite Tools', 'oxi-flip-box-plugin' ); ?>
			</h2>
			<p><?php echo esc_html__( 'ThankRedirect works perfectly with the tools you already use', 'oxi-flip-box-plugin' ); ?></p>
			</div>

			<section class="section-page-builders section-full">
			<div class="col-description">
				<h2><?php echo esc_html__( 'Popular Page Builder Support', 'oxi-flip-box-plugin' ); ?></h2>
				<p><?php echo esc_html__( 'ThankRedirect integrates seamlessly with all major page builders including Elementor, Beaver Builder, Divi, WPBakery, and Gutenberg. Design beautiful, conversion-optimized thank you pages with your favorite page builder and let ThankRedirect handle the redirection logic.', 'oxi-flip-box-plugin' ); ?></p>
			</div>

			<div class="col-image">
				<img src="https://wpkin.test/wp-content/plugins/wc-thank-you-page/images/global-thank-you-page.png" alt=""/>
			</div>
			</section>

			<section class="section-conclusion section-full">
			<div class="col-description">
				<h2><?php echo esc_html__( 'Ready to Transform Your Post-Purchase Experience?', 'oxi-flip-box-plugin' ); ?></h2>
				<p><?php echo esc_html__( 'ThankRedirect gives you the power to create strategic, personalized thank you pages that increase customer satisfaction, boost repeat purchases, and maximize the value of every sale. Get started with ThankRedirect today and turn your thank you pages into powerful marketing assets!', 'oxi-flip-box-plugin' ); ?></p>
			</div>
			<div>
				<a href="admin.php?page=oxi-flip-box-plugin" class="wpkin-btn btn-primary get-pro-btn">
					<?php echo esc_html__( 'Configure ThankRedirect Now', 'oxi-flip-box-plugin' ); ?>
				</a>
			</div>
			</section>
		</div>
		<?php
	}
}