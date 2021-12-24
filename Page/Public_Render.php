<?php

namespace OXI_FLIP_BOX_PLUGINS\Page;

/**
 * Description of Public
 *
 * @author biplo
 */
class Public_Render {

    /**
     * Current Elements id
     *
     * @since 2.0.0
     */
    public $oxiid;

    /**
     * Current Elements Style Data
     *
     * @since 2.0.0
     */
    public $style = [];

    /**
     * Current Elements Style Full
     *
     * @since 2.0.0
     */
    public $dbdata = [];

    /**
     * Current Elements multiple list data
     *
     * @since 2.0.0
     */
    public $child = [];

    /**
     * Current Elements Global CSS Data
     *
     * @since 2.0.0
     */
    public $CSSDATA = [];

    /**
     * Current Elements Global CSS Data
     *
     * @since 2.0.0
     */
    public $inline_css;
    public $inline_js;

    /**
     * Current Elements Global JS Handle
     *
     * @since 2.0.0
     */
    public $JSHANDLE = 'flipbox-addons-jquery';

    /**
     * Current Elements Global DATA WRAPPER
     *
     * @since 2.0.0
     */
    public $WRAPPER;

    /**
     * Current Elements Admin Control
     *
     * @since 2.0.0
     */
    public $admin;

    /**
     * load constructor
     *
     * @since 2.0.0
     */
    public function __construct(array $dbdata = [], array $child = [], $admin = 'user') {
        if (count($dbdata) > 0):
            $this->dbdata = $dbdata;
            $this->child = $child;
            $this->admin = $admin;
            $this->loader();
        endif;
    }

    /**
     * Current element loader
     *
     * @since 2.0.0
     */
    public function loader() {
        $this->oxiid = $this->dbdata['id'];
        $this->render();
        $this->hooks();
    }

    /**
     * front end loader css and js
     *
     * @since 2.0.0
     */
    public function public_loader() {
        wp_enqueue_script("jquery");
        wp_enqueue_style('oxi-animation', OXI_FLIP_BOX_URL . '/asset/frontend/css/animation.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_style('flip-box-addons-style', OXI_FLIP_BOX_URL . '/asset/frontend/css/style.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_script('waypoints.min', OXI_FLIP_BOX_URL . '/asset/frontend/js/waypoints.min.js', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_script('flipbox-addons-jquery', OXI_FLIP_BOX_URL . '/asset/frontend/js/jquery.js', false, OXI_FLIP_BOX_PLUGIN_VERSION);
    }

    /**
     * load css and js hooks
     *
     * @since 2.0.0
     */
    public function hooks() {
        $this->public_loader();
        $inlinecss = $this->inline_css;

        if ($this->inline_js != ''):
            $jquery = '(function ($) {' . $this->inline_js . '})(jQuery);';
            wp_add_inline_script($this->JSHANDLE, $jquery);
        endif;
        if ($this->inline_css != ''):
            wp_add_inline_style('flip-box-addons-style', $inlinecss);
        endif;
    }

    /**
     * old empty old render
     *
     * @since 2.0.0
     */
    public function default_render() {
        echo '';
    }

    /**
     * load current element render since 2.0.0
     *
     * @since 2.0.0
     */
    public function render() {

        $preloader = get_option('oxi_addons_pre_loader');

        if ($preloader == 'yes' && $this->admin != 'admin'):
            $preloadercls = 'oxi-addons-container-flipbox-preloader';
        else:
            $preloadercls = '';
        endif;
        echo '<div class="oxi-addons-container ' . esc_attr($this->WRAPPER) . ' ' . esc_attr($preloadercls) . '">';
        $this->default_render($this->style, $this->child, $this->admin);
        echo '</div>';
    }

    public function admin_edit_panel($id) {
        $data = '';
        if ($this->admin == 'admin'):
            $data = '<div class="oxilab-admin-absulote">
                        <div class="oxilab-style-absulate-edit">
                            <form method="post">
                                <input type="hidden" name="item-id" value="' . esc_attr($id) . '">
                                <button class="btn btn-primary" type="submit" value="edit" name="edit" title="Edit">Edit</button>
                                ' . wp_nonce_field("oxiflipeditdata") . '
                            </form>
                        </div>
                        <div class="oxilab-style-absulate-delete">
                            <form method="post" class="oxilab-style-absulate-delete-confirmation">
                                <input type="hidden" name="item-id" value="' . esc_attr($id) . '">
                                <button class="btn btn-danger" type="submit" value="delete" name="delete" title="Delete">Delete</button>
                                ' . wp_nonce_field("oxiflipdeletedata") . '
                            </form>
                        </div>
                    </div>';
        endif;
        return $data;
    }

    public function text_render($data) {

        $allowed_tags = array(
            'a' => array(
                'class' => array(),
                'href' => array(),
                'rel' => array(),
                'title' => array(),
            ),
            'abbr' => array(
                'title' => array(),
            ),
            'b' => array(),
            'blockquote' => array(
                'cite' => array(),
            ),
            'cite' => array(
                'title' => array(),
            ),
            'code' => array(),
            'del' => array(
                'datetime' => array(),
                'title' => array(),
            ),
            'dd' => array(),
            'div' => array(
                'class' => array(),
                'title' => array(),
                'style' => array(),
                'id' => array(),
            ),
            'table' => array(
                'class' => array(),
                'id' => array(),
                'style' => array(),
            ),
            'button' => array(
                'class' => array(),
                'type' => array(),
                'value' => array(),
            ),
            'thead' => array(),
            'tbody' => array(),
            'tr' => array(),
            'td' => array(),
            'dt' => array(),
            'em' => array(),
            'h1' => array(),
            'h2' => array(),
            'h3' => array(),
            'h4' => array(),
            'h5' => array(),
            'h6' => array(),
            'i' => array(
                'class' => array(),
            ),
            'img' => array(
                'alt' => array(),
                'class' => array(),
                'height' => array(),
                'src' => array(),
                'width' => array(),
            ),
            'li' => array(
                'class' => array(),
            ),
            'ol' => array(
                'class' => array(),
            ),
            'p' => array(
                'class' => array(),
            ),
            'q' => array(
                'cite' => array(),
                'title' => array(),
            ),
            'span' => array(
                'class' => array(),
                'title' => array(),
                'style' => array(),
            ),
            'strike' => array(),
            'strong' => array(),
            'ul' => array(
                'class' => array(),
            ),
        );

        return wp_kses($data, $allowed_tags);
    }

    public function font_awesome_render($data) {
        $fadata = get_option('oxi_addons_font_awesome');
        if ($fadata != 'no'):
            wp_enqueue_style('font-awsome.min', OXI_FLIP_BOX_URL . '/asset/frontend/css/font-awsome.min.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        endif;
        $files = '<i class="' . esc_attr($data) . ' oxi-icons"></i>';
        return $files;
    }

    public function font_familly($data = '') {


        $check = get_option('oxi_addons_google_font');
        if ($check != 'no'):
            wp_enqueue_style('' . $data . '', 'https://fonts.googleapis.com/css?family=' . $data . '');
        endif;
        $data = str_replace('+', ' ', $data);
        $data = explode(':', $data);
        return '"' . esc_attr($data[0]) . '"';
    }

    public function admin_name_validation($data) {
        $data = str_replace('_', ' ', $data);
        $data = str_replace('-', ' ', $data);
        $data = str_replace('+', ' ', $data);
        return ucwords($data);
    }

    public function name_converter($data) {
        $data = str_replace('_', ' ', $data);
        $data = str_replace('-', ' ', $data);
        $data = str_replace('+', ' ', $data);
        return ucwords($data);
    }

}
