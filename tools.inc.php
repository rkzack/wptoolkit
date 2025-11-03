<?php

//
// Function to get ID by slug for a page
//
//
function wptk_get_id_by_slug($page_slug)
{
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}


//
// Determine if a table exists in the WP database
//
//
function wptk_table_exists($table_name)
{
        global $wpdb;
        $table = $wpdb->prefix . $table_name;
        $sql = "SHOW TABLES LIKE '{$table}'";
        $result = $wpdb->get_var($sql);
        return $result === $table;
}


//
// Reload the current page with Javascript
//
//
function wptk_reload_me()
{
    ?><script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            setTimeout(function() {
                location.reload();
            }, 2000);
        });
    })(jQuery);</script><?php
}

