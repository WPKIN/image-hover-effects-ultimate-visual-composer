<?php

namespace OXI_FLIP_BOX_PLUGINS\Includes\Admin\Pages\Tabs;

class GetPro {

    public function render() {

        // Feature array
        $features = [
            'Basic Redirect Features' => [
                ['title' => 'Global Thank You Page Redirect', 'free' => true, 'pro' => true],
                ['title' => 'Redirect Per Product', 'free' => true, 'pro' => true],
                ['title' => 'Redirect Delay Setting', 'free' => true, 'pro' => true],
            ],
            'Advanced Redirect Features' => [
                ['title' => 'Product Category Redirects', 'free' => true, 'pro' => true],
                ['title' => 'User Role Based Redirects', 'free' => false, 'pro' => true],
                ['title' => 'Payment Method Based Redirects', 'free' => false, 'pro' => true],
                ['title' => 'Product Type Based Redirects', 'free' => false, 'pro' => true],
                ['title' => 'Product Tag Based Redirects', 'free' => false, 'pro' => true],
                ['title' => 'Product Brand Based Redirects', 'free' => false, 'pro' => true],
                ['title' => 'Product Variation Based Redirects', 'free' => false, 'pro' => true],
            ],
            'Marketing Features' => [
                ['title' => 'URL Personalization', 'free' => false, 'pro' => true],
                ['title' => 'Google Analytics DataLayer', 'free' => false, 'pro' => true],
                ['title' => 'Facebook Pixel Support', 'free' => false, 'pro' => true],
            ],
            'Content Features' => [
                ['title' => 'Shortcodes (Free & PRO)', 'free' => true, 'pro' => true],
            ],
            'Integrations' => [
                ['title' => 'Page Builder Support', 'free' => true, 'pro' => true],
                ['title' => 'Elementor Integration', 'free' => true, 'pro' => true],
                ['title' => 'Beaver Builder Integration', 'free' => true, 'pro' => true],
                ['title' => 'Divi Builder Integration', 'free' => true, 'pro' => true],
                ['title' => 'WPBakery Page Builder Integration', 'free' => true, 'pro' => true],
            ],
            'Support & Updates' => [
                ['title' => 'Documentation Access', 'free' => true, 'pro' => true],
                ['title' => 'Community Support', 'free' => true, 'pro' => true],
                ['title' => 'Premium Support', 'free' => false, 'pro' => true],
                ['title' => 'Regular Updates', 'free' => true, 'pro' => true],
                ['title' => 'Priority Feature Requests', 'free' => false, 'pro' => true],
            ],
        ];
        ?>

        <div id="get-pro" class="getting-started-content content-get-pro active">
            <div class="content-heading">
                <h2>
                    <mark><?php echo __('Enhance Your Thank You Pages', 'wc-thank-you-page'); ?></mark>
                    <?php echo __('with ThankRedirect PRO', 'wc-thank-you-page'); ?>
                </h2>
                <p><?php echo __('Unlock powerful PRO features designed to create highly personalized post-purchase experiences that boost customer satisfaction and increase conversions.', 'wc-thank-you-page'); ?></p>
                <a href="admin.php?page=wc-thank-you-page-pricing" class="wpkin-btn btn-primary get-pro-btn">
                    <i class="dashicons dashicons-awards"></i> <?php echo __('Get PRO Now', 'wc-thank-you-page'); ?>
                </a>
            </div>

            <div class="content-heading free-vs-pro">
                <h2><?php echo __('Compare Features', 'wc-thank-you-page'); ?></h2>
                <div class="free-vs-pro-wrap">
                    <span><?php echo __('FREE', 'wc-thank-you-page'); ?></span>
                    <?php echo __('vs', 'wc-thank-you-page'); ?>
                    <span><?php echo __('PRO', 'wc-thank-you-page'); ?></span>
                </div>
                <p><?php echo __('The PRO version unlocks advanced redirection options and analytics features to create the ultimate post-purchase experience for your customers.', 'wc-thank-you-page'); ?></p>
            </div>

            <div class="features-list">
                <div class="list-header">
                    <div class="feature-title"><?php echo __('Feature List', 'wc-thank-you-page'); ?></div>
                    <div class="feature-free"><?php echo __('Free', 'wc-thank-you-page'); ?></div>
                    <div class="feature-pro"><?php echo __('Pro', 'wc-thank-you-page'); ?></div>
                </div>

                <?php foreach ($features as $section => $items) : ?>
                    <div class="feature feature-heading">
                        <div class="feature-title"><?php echo esc_html__($section, 'wc-thank-you-page'); ?></div>
                        <div class="feature-free"></div>
                        <div class="feature-pro"></div>
                    </div>
                    <?php foreach ($items as $feature) : ?>
                        <div class="feature">
                            <div class="feature-title"><?php echo esc_html__($feature['title'], 'wc-thank-you-page'); ?></div>
                            <div class="feature-free">
                                <i class="dashicons <?php echo $feature['free'] ? 'dashicons-saved' : 'dashicons-no-alt'; ?>"></i>
                            </div>
                            <div class="feature-pro">
                                <i class="dashicons <?php echo $feature['pro'] ? 'dashicons-saved' : 'dashicons-no-alt'; ?>"></i>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <div class="get-pro-cta">
                <div class="cta-content">
                    <h2><?php echo __('Transform your thank you pages with', 'wc-thank-you-page'); ?> <mark><?php echo __('ThankRedirect PRO', 'wc-thank-you-page'); ?></mark></h2>
                    <p><?php echo __('Upgrade to the PRO version and unlock all the advanced redirection features to create personalized post-purchase experiences that boost customer satisfaction and increase repeat purchases.', 'wc-thank-you-page'); ?></p>
                </div>
                <div class="cta-btn">
                    <a href="admin.php?page=wc-thank-you-page-pricing" class="wpkin-btn btn-primary">
                        <i class="dashicons dashicons-cart"></i> <?php echo __('Upgrade Now', 'wc-thank-you-page'); ?>
                    </a>
                </div>
            </div>
        </div>

        <?php
    }
}
