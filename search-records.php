<?php // Filename: search-records.php

// Set $pageTitle variable to display proper page title before it's called in by the header include file
$pageTitle = "Search Records";
// Call in the include files for the header, the mysql connection to the database, the functions, and the config file
require_once 'inc/layout/header.inc.php';
require_once 'inc/db/mysqli_connect.inc.php';
// require 'inc/functions/functions.inc.php';
require_once 'inc/app/config.inc.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // if the search submit button was submitted with text, do this:
                if(!empty($_POST['search'])){
                    // perform the search of the student table with the search string in the following columns for matching strings
                    // added gpa, financial aid, and degree program columns to include in the search
                    $sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["search"] . '"' . " IN (last_name) ORDER BY last_name ASC";
                    // IGNORE $search_term = $_POST['search'];
                    // IGNORE $sql ="SELECT * FROM $db_table WHERE student_id OR first_name LIKE '$search_term'";
                    // $sql = "SELECT * FROM 'student' WHERE student_id LIKE '%val%' or field2 LIKE '%val%'
                    // contain the result of that search in the variable $result
                    $result = $db->query($sql);

                    // if the search of the student table yielded no matches, display a frowny face and tell the user there were no results and to try again
                    if ($result->num_rows == 0) {
                        echo "<p class=\"display-4 mt-4 text-center\">No results found for \"<strong>{$_POST['search']}</strong>\"</p>";
                        echo '<img class="mx-auto d-block mt-4" src="img/frown.png" alt="A sad face">';
                        echo "<p class=\"display-4 mt-4 text-center\">Try performing an <a href=\"advanced-search.php\">advanced search</a>.</p>";
                        // echo "<h2 class=\"mt-4\">There are currently no records to display for <strong>last names</strong> starting with <strong>$filter</strong></h2>";
                    // if the search of the student table yielded matches, display them
                    } else {
                        echo "<h2 class=\"mt-4 text-center\">$result->num_rows record(s) found for \"" . $_POST['search'] . '"</h2>';
                        display_record_table($result);
                    }
                    // if the search submit button was submitted with no text, do this:
                } else {
                    echo "<p class=\"display-4 mt-4 text-center\">I can't search if you don't give<br>me something to search for.</p>";
                    echo '<img class="mx-auto d-block mt-4" src="img/nosmile.png" alt="A face with no smile">';
                }
            }
        ?>
        </div>
    </div>
</div>

<!-- bring in the footer include file and display it using require -->
<?php require_once 'inc/layout/footer.inc.php';?>