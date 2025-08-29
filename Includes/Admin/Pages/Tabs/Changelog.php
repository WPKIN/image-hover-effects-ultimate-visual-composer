<?php

namespace OXI_FLIP_BOX_PLUGINS\Includes\Admin\Pages\Tabs;

class Changelog {

    public function render() {

        // Changelog array
        $logs = [
            [
                'version' => '2.0.0',
                'date' => '30-07-2025',
                'sections' => [
                    'new' => [
                        'Added dedicated setting page to set all role',
                        'Added Global Thank You Page Redirects settings',
                        'Added Redirect Per Product settings',
                        'Added Product Category Redirects settings',
                        'Added User Role Based Redirects settings (PRO)',
                        'Added Payment Method Based Redirects settings (PRO)',
                        'Added Product Type Based Redirects settings (PRO)',
                        'Added Product Tag Based Redirects settings (PRO)',
                        'Added Product Brand Based Redirects settings (PRO)',
                        'Added Product Variation Based Redirects settings (PRO)',
                        'Added URL Personalization settings (PRO)',
                        'Added eCommerce DataLayer for Analytics settings (PRO)',
                        'Added Redirect Delay (seconds) settings (PRO)',
                        'Added Shortcodes to use thank you page (Free & PRO)',
                    ],
                    'remove' => [
                        'Deprecated all functions for version 1 series',
                    ],
                ],
            ],
            [
                'version' => '1.0.4',
                'date' => '06-07-2025',
                'sections' => [
                    'enhancement' => [
                        'Tested with WordPress 6.8',
                        'Fixed per product redirect issue.',
                    ],
                ],
            ],
        ];
        ?>

        <div id="what-new" class="content-what-new">
            <div class="content-heading">
                <h2>
                    <?php echo __('Exploring the', 'wc-thank-you-page'); ?> 
                    <mark><?php echo __('Latest Updates', 'wc-thank-you-page'); ?></mark>
                </h2>
                <p>
                    <?php echo __('Dive into the recent changelog for fresh insights about new features and improvements', 'wc-thank-you-page'); ?>
                </p>
            </div>

            <?php foreach ($logs as $log) : ?>
                <div class="log">
                    <div class="log-header" style="cursor:pointer;">
                        <span class="log-version"><?php echo esc_html__($log['version'], 'wc-thank-you-page'); ?></span>
                        <span class="log-date">(<?php echo esc_html__($log['date'], 'wc-thank-you-page'); ?>)</span>
                        <i class="dashicons dashicons-arrow-down-alt2"></i>
                    </div>
                    <div class="log-body" style="display:none;">
                        <?php foreach ($log['sections'] as $section => $items) : ?>
                            <div class="log-section <?php echo esc_attr($section); ?>">
                                <h3>
                                    <?php
                                        $section_titles = [
                                            'new' => __('New Features', 'wc-thank-you-page'),
                                            'fix' => __('Bug Fixes', 'wc-thank-you-page'),
                                            'enhancement' => __('Improvements', 'wc-thank-you-page'),
                                            'remove' => __('Deprecations', 'wc-thank-you-page')
                                        ];
                                        echo esc_html($section_titles[$section]);
                                    ?>
                                </h3>
                                <?php foreach ($items as $item) : ?>
                                    <div class="log-item log-item-<?php echo esc_attr($section); ?>">
                                        <?php
                                            $section_icons = [
                                                'new' => 'dashicons-plus-alt2',
                                                'fix' => 'dashicons-saved',
                                                'enhancement' => 'dashicons-star-filled',
                                                'remove' => 'dashicons-trash'
                                            ];
                                        ?>
                                        <i class="dashicons <?php echo esc_attr($section_icons[$section]); ?>"></i>
                                        <?php echo esc_html__($item, 'wc-thank-you-page'); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php
    }
}
