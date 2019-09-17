<?php

if (isset($_POST['submit_import'])) {

    if (!empty($_POST['url'])) {

            // search example: '#mwBQ li a' 
            $search     = $_POST['search_for'];
            $url        = htmlentities($_POST['url']);
            $file_name  = $_POST['save_file'];
            
            $html       = str_get_html(file_get_contents($url));
            $today      = date("Y/m/d");
            
            $found      = $html->find($search, 0) ? true : false;
            
            if( $found ) {
                
                $stream = fopen($save_directory . '/' . $file_name,   "a+");

                    fwrite($stream, "\nNew Entry (" . $today . ") ================ \n\n" );

                        foreach( $html->find( $search ) as $ele ) {
                            $data = '<div>' . trim($ele->text()) . '</div>';
                            fwrite($stream, $data . "\n");
                        }
                        
                    fwrite($stream, "\nEnds ==================================");

                fclose($stream);

                echo "<h2>Data saved !</h2>";

            } else {
                echo "Data not found";
            }


    } else {
	$message = "<b>Please enter a valid URL</b>";
    }
}


if (isset($_POST['submit_export'])) {

    $format     = $_POST['format'];
    $file_name  = $_POST['saved_file_list'];
    $html       = str_get_html(file_get_contents($save_directory . '/' . $file_name));

    if($format == 'SQL') {

        
        $search = 'div';
        
        echo '<div id="output_import" class="output">';
        echo '<div class="content">';
            if($file_name == 'city.txt') {
                foreach( $html->find( $search ) as $ele ) {
                    $data = $ele->text();
                    echo 'INSERT INTO city (name) VALUES ("' . $data . '");<br>';
                }
            } else {
                echo 'Export Not available !';
            }
        echo '</div>';
        echo '</div>';

    }

}

?>