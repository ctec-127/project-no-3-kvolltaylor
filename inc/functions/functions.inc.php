<?php // Filename: functions.inc.php
// this page contains all the various functions that get called to create the page

//this function displays messages to display to the user after they do things
function display_message(){
    // if there is a message set, display it using a query string in the url
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        echo '<div class="mt-4 alert alert-success" role="alert">';
        echo $message;
        echo '</div>';
    }
}

// this function is used to display all the letters in the alphabet, and highlight the one that's selected if selected
function display_letter_filters($filter){  
    echo '<span class="mr-3">Filter by <strong>Last Name</strong></span>';
    //this creates the arrage of letters a through z
    $letters = range('A','Z');
    
    //this moves through the letters apply a class to style them, and to highlight the selected letter
    for($i=0 ; $i < count($letters) ; $i++){ 
        if ($filter == $letters[$i]) {
            $class = 'class="d-inline-block text-light font-weight-bold p-1 mr-3 bg-dark"';
        } else {
            $class = 'class="d-inline-block text-secondary p-1 mr-3 bg-light border rounded"';
        }
        echo "<u><a $class href='?filter=$letters[$i]' title='$letters[$i]'>$letters[$i]</a></u>";
    }
    echo '<a class="text-secondary p-2 mr-2 bg-success text-light border rounded" href="?clearfilter" title="Reset Filter">Reset</a>&nbsp;&nbsp;';
}

//this function is used to style the table, display the contents of it, and display the contents if sorted by a column
//this function currently contains a link to delete a row if the link is clicked, but not one to update the row
//this function is also used to echo out a pop up message confirming if someone is sure they want to delete a file
//the record will be deleted and follow the href unless the action is cancelled by the onclick pop up
function display_record_table($result){
    echo '<div class="table-responsive">';
    echo "<table class=\"table table-striped table-hover table-sm mt-3 table-bordered\">";
    // added gpa, degree program and financial aid to display in the table, added data created to display
    echo '<thead class="thead-dark"><tr><th class="bg-primary">Actions</th><th><a href="?sortby=student_id">Student ID</a></th><th><a href="?sortby=first_name">First Name</a></th><th><a href="?sortby=last_name">Last Name</a></th><th><a href="?sortby=gpa">GPA</a></th><th><a href="?sortby=degree_program">Degree Program</a></th><th><a href="?sortby=financial_aid">Financial Aid</a></th><th><a href="?sortby=graduation_date">Graduation Date</a></th><th><a href="?sortby=email">Email</a></th><th><a href="?sortby=phone">Phone</a></th><th><a href="?sortby=data_created">Date Created</a></th></tr></thead>';
    # $row will be an associative array containing one row of data at a time
    while ($row = $result->fetch_assoc()){
        # display rows and columns of data
        echo '<tr>';
        echo "<td><a href=\"update-record.php?id={$row['id']}\">Update</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"delete-record.php?id={$row['id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
        echo "<td>{$row['sid']}</td>";
        echo "<td><strong>{$row['first_name']}</strong></td>";
        echo "<td><strong>{$row['last_name']}</strong></td>";
        // added gpa, degree program and financial aid to to display, added data created to display
        // added graduation date to display
        echo "<td>{$row['gpa']}</td>";
        echo "<td>{$row['degree_program']}</td>";
        echo "<td>{$row['financial_aid']}</td>";
        echo "<td>{$row['graduation_date']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['data_created']}</td>";
        echo '</tr>';
    } // end while
    // closing table tag and div
    echo '</table>';
    echo '</div>';
}

// this function is used to display the content of the error bucket array and
// the corresponding error messages to the fields left blank
// the contents of this bucket get displayed as an unordered list
function display_error_bucket($error_bucket){
    echo '<p>The following errors were deteced:</p>';
    echo '<div class="pt-4 alert alert-warning" role="alert">';
        echo '<ul>';
        foreach ($error_bucket as $text){
            echo '<li>' . $text . '</li>';
        }
        echo '</ul>';
    echo '</div>';
    echo '<p>All of these fields are required. Please fill them in.</p>';
}

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'active';
}




?>
