<?php
// ref: https://simplehtmldom.sourceforge.io/
include 'include/simple_html_dom.php';
// Custom
include 'src/script.php';
?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style/my.css">
        
    </head>
    <body>
	<div id="box_extract" class="form">

            <h1>Import Data:</h1>

            <form action="index.php" method="post">

                <div class="form-group">
                    <label>Search for:</label>
                    <input class="input" type="text" name="search_for" required>
                </div>

                <div class="form-group">
                    <label>Enter URL:</label>
                    <input class="input" type="text" name="url" required>
                </div>

                <div class="form-group">
                    <label>Enter file name: </label>
                    <input class="" type="text" id="save_file" name="save_file" required>
                    
                    &nbsp;&nbsp; <strong>OR</strong> &nbsp;&nbsp;
                    <label>Pick file: </label>
                    <select id="save_file_list" name="save_file_list">
                        <option value="" disabled selected>Select File</option>
                        <?php get_files_list(); ?>
                    </select>

                </div>
                

                <div class="form-group">
                    <input type="submit" name="submit_import" value="Save Data">
                </div>
	    </form>

    </div>
    
    <div class="form">
        <h1>Export Data:</h1>

        <form action="index.php" method="post">
            <div class="form-group">
                <label>Get data from: </label>
                <select id="saved_file" name="saved_file_list" required>
                    <option value="" disabled selected>Select File</option>
                    <?php get_files_list(); ?>
                </select>
            </div>

            <div class="form-group">
                <label>Format: </label>
                <select id="format" name="format">
                    <?php get_format_list(); ?>
                </select>
            </div>

                <!-- <input class="input" name="save_file_list" type="text"> -->

            <div class="form-group">
                <input type="submit" name="submit_export" value="Get Data">
            </div>
        </form>

        <!-- <div id="output" class="output"></div> -->

    </div>

    <?php include 'src/script_form.php'; ?>

    <script src="js/script.js"></script>        
    </body>
</html>


