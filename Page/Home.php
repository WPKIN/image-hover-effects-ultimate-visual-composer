<?php

namespace OXI_FLIP_BOX_PLUGINS\Page;

/**
 * Description of Home
 *
 * @author biplo
 */
class Home {

    /**
     * Database Parent Table
     *
     * @since 3.1.0
     */
    public $parent_table;

    /**
     * Database Import Table
     *
     * @since 3.1.0
     */
    public $child_table;

    /**
     * Database Import Table
     *
     * @since 3.1.0
     */
    public $import_table;

    /**
     * Define $wpdb
     *
     * @since 3.1.0
     */
    public $wpdb;

    use \OXI_FLIP_BOX_PLUGINS\Inc_Helper\Public_Helper;
    use \OXI_FLIP_BOX_PLUGINS\Inc_Helper\CSS_JS_Loader;

    /**
     * Constructor of Oxilab tabs Home Page
     *
     * @since 2.0.0
     */
    public function __construct() {
        global $wpdb;
        $this->wpdb = $wpdb;
        $this->parent_table = $this->wpdb->prefix . 'oxi_div_style';
        $this->child_table = $this->wpdb->prefix . 'oxi_div_list';
        $this->import_table = $this->wpdb->prefix . 'oxi_div_import';
        $this->CSSJS_load();
        $this->Render();
    }

    public function database_data() {
        return $this->wpdb->get_results($this->wpdb->prepare("SELECT * FROM  $this->parent_table WHERE type = %s ", 'flip'), ARRAY_A);
    }

    public function CSSJS_load() {
        $this->admin_css_loader();
        $this->admin_home();
        $this->admin_ajax_load();
        apply_filters('oxi-flip-box-plugin/admin_menu', TRUE);
    }

    /**
     * Admin Notice JS file loader
     * @return void
     */
    public function admin_ajax_load() {
        wp_enqueue_script('oxi-flip-box-home', OXI_FLIP_BOX_URL . '/asset/backend/js/home.js', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_localize_script('oxi-flip-box-home', 'oxi_flip_box_editor', array('ajaxurl' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('oxi-flip-box-editor')));
    }

    /**
     * Generate safe path
     * @since v1.0.0
     */
    public function safe_path($path) {

        $path = str_replace(['//', '\\\\'], ['/', '\\'], $path);
        return str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);
    }

    public function Render() {
        ?>
        <div class="oxi-addons-row">
            <?php
            $this->Admin_header();
            $this->created_shortcode();
            $this->create_new();
            ?>
        </div>
        <?php
    }

    public function Admin_header() {
        ?>
        <div class="oxi-addons-wrapper">
            <div class="oxi-addons-import-layouts">
                <h1>Flipbox › Home
                </h1>
                <p> Collect Flipbox Shortcode, Edit, Delect, Clone or Export it.</p>
            </div>
        </div>
        <?php
    }

    private function create_export_link($rawdata = '', $shortcode_id = '', $child_id = '') {
        return add_query_arg(
                [
                    'action' => 'oxi_flip_box_data',
                    'functionname' => 'get_shortcode_export',
                    'styleid' => $shortcode_id,
                    'childid' => $child_id,
                    'rawdata' => $rawdata,
                    '_wpnonce' => wp_create_nonce('oxi-flip-box-editor'),
                ],
                admin_url('admin-ajax.php')
        );
    }

    public function created_shortcode() {
        ?>
        <div class="oxi-addons-row"> <div class="oxi-addons-row table-responsive abop" style="margin-bottom: 20px; opacity: 0; height: 0px">
                <table class="table table-hover widefat oxi_addons_table_data" style="background-color: #fff; border: 1px solid #ccc">
                    <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th style="width: 15%">Name</th>
                            <th style="width: 10%">Templates</th>
                            <th style="width: 30%">Shortcode</th>
                            <th style="width: 40%">Edit Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($this->database_data() as $value) {
                            $id = $value['id'];
                            ?>
                            <tr>

                                <td><?php echo esc_html($id); ?></td>
                                <td><?php echo esc_html($this->name_converter($value['name'])); ?></td>
                                <td><?php echo esc_html($this->name_converter($value['style_name'])); ?></td>

                                <td>
                                    <span>Shortcode &nbsp;&nbsp;<input type="text" onclick="this.setSelectionRange(0, this.value.length)" value="[oxilab_flip_box id=&quot;<?php echo esc_attr($id); ?>&quot;]"></span> <br>
                                    <span>Php Code &nbsp;&nbsp; <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value="&lt;?php echo do_shortcode(&#039;[oxilab_flip_box  id=&quot;<?php echo esc_attr($id); ?>&quot;]&#039;); ?&gt;"></span>
                                </td>
                                <td>
                                    <a href="<?php echo esc_url(admin_url("admin.php?page=oxi-flip-box-ultimate-new&styleid=" . esc_attr($id) . "")); ?>"  title="Edit"  class="btn btn-info" style="float:left; margin-right: 5px; margin-left: 5px;">Edit</a>
                                    <form method="post" class="oxi-addons-style-delete">
                                        <input type="hidden" name="oxideleteid" id="oxideleteid" value="<?php echo esc_html($id); ?>">
                                        <button class="btn btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="addonsdatadelete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
        </div>
        <?php
    }

    public function create_new() {

    }

}
