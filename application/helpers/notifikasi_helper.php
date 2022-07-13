<?php

if (!function_exists('notif')) {

    function notif()

    {
        $CI    = &get_instance();
        $CI->load->database();
        $data = $CI->db->get_where('pengaduan', array('status' => 1))->result_array();
        return $data;
        // echo "es";
        // echo $years;
    }
}
