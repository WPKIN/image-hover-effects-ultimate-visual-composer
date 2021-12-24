<?php

namespace OXI_FLIP_BOX_PLUGINS\Modules;

/**
 * Description of Visual_Composer
 *
 * @author biplo
 */
class Visual_Composer {

    public function __construct() {
        add_action('vc_before_init', [$this, 'VC_extension']);
        add_shortcode('oxilab_flip_box_VC', [$this, 'VC_Shortcode']);
    }

    public function VC_extension() {
        vc_map(array(
            "name" => esc_html("Flip Boxes and Image Overlay"),
            "base" => esc_html("oxilab_flip_box_VC"),
            "category" => esc_html("Content"),
            "params" => array(
                array(
                    "type" => "textfield",
                    "holder" => esc_html("div"),
                    "heading" => esc_html("ID"),
                    "param_name" => esc_html("id"),
                    "description" => esc_html("Input your Flip ID in input box")
                ),
            )
        ));
    }

    public function VC_Shortcode($atts) {
        extract(shortcode_atts(array(
            'id' => ''
                        ), $atts));
        $styleid = $atts['id'];
        ob_start();
        \OXI_FLIP_BOX_PLUGINS\Classes\Bootstrap::instance()->shortcode_render($styleid, 'user');
        return ob_get_clean();
    }

}
