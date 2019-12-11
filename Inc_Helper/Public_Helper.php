<?php

namespace OXI_FLIP_BOX_PLUGINS\Inc_Helper;

/**
 *
 * @author biplo
 */
trait Public_Helper {

    /**
     * Check dir
     *
     * @since 2.0.0
     */
    public function check_dir() {
        return (is_dir(OXI_FLIP_BOX_UPLOAD_PATH) ? TRUE : FALSE);
    }

    /**
     * Plugin Pre Installation
     *
     * @since 2.0.0
     */
    public function create_upload_folder() {
        $upload = wp_upload_dir();
        $upload_dir = $upload['basedir'];
        $dir = $upload_dir . '/oxi-flip-box';
        if (!is_dir($dir)) {
            mkdir($dir, 0777);
        }
    }

    public function html_special_charecter($data) {
        $data = html_entity_decode($data);
        $data = str_replace("\'", "'", $data);
        $data = str_replace('\"', '"', $data);
        $data = do_shortcode($data, $ignore_html = false);
        return $data;
    }

    public function admin_special_charecter($data) {
        $data = html_entity_decode($data);
        $data = str_replace("\'", "'", $data);
        $data = str_replace('\"', '"', $data);
        return $data;
    }

    public function icon_font_selector($data) {
        $icon = explode(' ', $data);
        $fadata = get_option('oxi_addons_font_awesome');
        $faversion = get_option('oxi_addons_font_awesome_version');
        $faversion = explode('||', $faversion);
        if ($fadata == 'yes') {
            wp_enqueue_style('font-awesome-' . $faversion[0], $faversion[1]);
        }
        $files = '<i class="' . $data . ' oxi-icons"></i>';
        return $files;
    }

    public function font_familly_charecter($data) {
        wp_enqueue_style('' . $data . '', 'https://fonts.googleapis.com/css?family=' . $data . '');
        $data = str_replace('+', ' ', $data);
        $data = explode(':', $data);
        $data = $data[0];
        $data = '"' . $data . '"';
        return $data;
    }

    /**
     * Plugin Name Convert to View
     *
     * @since 2.0.0
     */
    public function name_converter($data) {
        $data = str_replace('_', ' ', $data);
        $data = str_replace('-', ' ', $data);
        $data = str_replace('+', ' ', $data);
        return ucwords($data);
    }

    public function shortcode_render($styleid, $user) {
        if (!empty((int) $styleid) && !empty($user)):
            $style = $this->wpdb->get_row($this->wpdb->prepare('SELECT * FROM ' . $this->parent_table . ' WHERE id = %d ', $styleid), ARRAY_A);
            $style_name = ucfirst($style['style_name']);
            $child = $this->wpdb->get_results($this->wpdb->prepare("SELECT * FROM $this->child_table WHERE styleid = %d ORDER by id ASC", $styleid), ARRAY_A);
            $C = 'OXI_FLIP_BOX_PLUGINS\Public_Render\\' . $style_name;
            if (class_exists($C)):
                new $C($style, $child, $user);
            endif;
        endif;
    }

    public function elements($data = '') {
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        $tmpfile = download_url('https://shortcode-addons.com/Shortcode-Addons/Elements/' . $data . '.zip', $timeout = 500);
        if (is_string($tmpfile)):
            $permfile = 'oxilab.zip';
            $zip = new \ZipArchive();
            if ($zip->open($tmpfile) !== TRUE):
                echo 'Problem 2';
            endif;
            $zip->extractTo(SA_ADDONS_UPLOAD_PATH);
            $zip->close();
            echo 'Done';
        endif;
    }

    public function Download_Extension() {
        if ($this->check_dir() == false):
            $this->create_upload_folder();
        endif;
    }

    public function Extension() {
        $active = is_array(get_option('oxi-flipbox-active-extension')) ? get_option('oxi-flipbox-active-extension') : [];
        foreach ($active as $key => $value) {
            if ($value == 'yes'):
                $cls = 'OXI_FLIP_BOX_UPLOAD_PATH\\' . ucfirst($key) . '\\' . ucfirst($key);
                if (!class_exists($cls)):
                    $this->Download_Extension($key);
                    return;
                endif;
             new $cls;
            endif;
        }
    }

}
