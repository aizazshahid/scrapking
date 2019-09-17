<?php

    if(!function_exists('show')) {
        function show($data) {
            echo "<pre>";
            var_dump($data);
            echo "</pre>";
        }
    }
    
    if(!function_exists('get_files_list')) {
        function get_files_list() {
            global $scanned_directory;

            // $options = [];
            
            if( isset($scanned_directory) ) {
                foreach($scanned_directory as $file) {
                    echo '<option value="'. $file . '">' . $file . '</option>';
                }
            }
    
        }
    }

    if(!function_exists('get_format_list')) {
        function get_format_list() {
            

            $formats = [
                'SQL',
                'JSON'
            ];
            
            foreach($formats as $format) {
                echo '<option value="'. $format . '">' . $format . '</option>';
            }
    
        }
    }

    if(!function_exists('get_sql_query')) {
        function get_sql_query($value) {
            return 'INSERT INTO city (name) VALUES ("' . $value . '");<br>';
        }
    }



?>