<?php

namespace OXI_FLIP_BOX_PLUGINS\Page;

/**
 * Description of Extension
 *
 * @author biplo
 */
class Extension {

    use \OXI_FLIP_BOX_PLUGINS\Inc_Helper\Public_Helper;
    use \OXI_FLIP_BOX_PLUGINS\Inc_Helper\CSS_JS_Loader;

    /**
     * Constructor of Oxilab tabs Home Page
     *
     * @since 2.0.0
     */
    public function __construct() {
        $this->CSSJS_load();
        $this->Header();
        $this->Render();
    }

    public function CSSJS_load() {
        $this->admin_css_loader();
    }

    public function Header() {
        apply_filters('oxi-flip-box-plugin/admin_menu', TRUE);
        $this->Admin_header();
    }

    public function Admin_header() {
        ?>
        <div class="oxi-addons-wrapper">
            <div class="oxi-addons-import-layouts">
                <h1>FlipBox Extension
                </h1>
                <p> We Develop Couple of plugins which will help you to Create Your Modern and Dynamic Websites. Just click and Install </p>
            </div>
        </div>
        <?php
    }

    public function Render() {

        $extension = [
            'Elementor' => [
                'class' => 'elementor',
                'name' => 'Elementor Extension',
                'desc' => 'Shortcode Addons is an amazing set of beautiful and useful elements. Over 80+ Elements with multiple Design',
                'doc' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/11/elementor-addons.jpg',
                'img' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/11/shortcode.jpg'
            ],
            'Beaver_Builder' => [
                'class' => 'beader',
                'name' => 'Beaver Builder Extension',
                'desc' => 'Shortcode Addons is an amazing set of beautiful and useful elements. Over 80+ Elements with multiple Design',
                'doc' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/11/elementor-addons.jpg',
                'img' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/11/image-hover.jpg'
            ],
            'Visual_Composer' => [
                'class' => 'visual',
                'name' => 'Beaver Builder Extension',
                'desc' => 'Shortcode Addons is an amazing set of beautiful and useful elements. Over 80+ Elements with multiple Design',
                'doc' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/11/elementor-addons.jpg',
                'img' => 'https://www.sa-elementor-addons.com/wp-content/uploads/2019/11/elementor-addons.jpg'
            ]
        ];
        $active = is_array(get_option('oxi-flipbox-active-extension')) ? get_option('oxi-flipbox-active-extension') : [];
        ?>
        <div class="oxi-addons-wrapper">
            <div class="oxi-addons-row">
                <form id="flip-box-extension-form">
                    <div class="row">

                        <?php
                        foreach ($extension as $key => $value) {
                            if (isset($active[$key]) && $active[$key] == 'yes'):
                                $check = 'yes';
                                $button = '<a href="#" class="btn btn-flip-extension btn-warning">Deactive</a>';
                            else:
                                $check = 'no';
                                $button = '<a href="#" class="btn btn-flip-extension btn-success">Active</a>';
                            endif;
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="oxi-addons-modules-elements">
                                    <img class="oxi-addons-modules-banner" src="<?php echo $value['img']; ?>">
                                    <div class="oxi-addons-modules-action-wrapper">
                                        <span class="oxi-addons-modules-name"><?php echo $value['name']; ?></span>
                                        <span class="oxi-addons-modules-desc"><?php echo $value['desc']; ?></span>	
                                    </div>
                                    <div class="oxi-addons-modules-action-status">
                                        <input type="hidden" name="<?php echo $key; ?>" value="<?php echo $check; ?>">
                                        <span class="oxi-addons-modules-preview"><a href="<?php echo $value['doc']; ?>" class="btn btn-secondary">Tutorial</a></span>
                                        <span class="oxi-addons-modules-installing"><?php echo $button; ?></span>	
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </form>
            </div>
        </div>
        <?php
        $data = 'function oxiequalHeight(group) {
                    var tallest = 0;
                    group.each(function () {
                        thisHeight = jQuery(this).height();
                        if (thisHeight > tallest) {
                            tallest = thisHeight;
                        }
                    });
                    group.height(tallest);
                }
                setTimeout(function () {
                    oxiequalHeight(jQuery(".oxi-addons-modules-action-wrapper"));
                }, 1000);
                jQuery.noConflict();
                (function($){  
                        $(".btn-flip-extension").on("click", function (e) {
                            e.preventDefault();
                            $This =  $(this);
                            if($This.hasClass("btn-success")){
                                $This.removeClass("btn-success").addClass("btn-warning").html("Deactive")
                                $This.parent().siblings("input").val("yes");
                            } else{
                                $This.addClass("btn-success").removeClass("btn-warning").html("Active")
                                $This.parent().siblings("input").val("no");
                            }
                            rawdata = $("#flip-box-extension-form").serialize();
                            $.ajax({
                                url: "' . admin_url('admin-ajax.php') . '",
                                type: "post",
                                data: {
                                    action: "oxi_flip_box_data",
                                    _wpnonce: "' . wp_create_nonce('oxi-flip-box-editor') . '",
                                    functionname: "extension_active",
                                    rawdata: rawdata,
                                    styleid: "",
                                    childid: "",
                                },
                                success: function (response) {
                                    console.log(response);
                                    
                                }
                            });
                            
                            
                        });
                })(jQuery);';


        wp_add_inline_script('oxilab-bootstrap', $data);
    }

}
