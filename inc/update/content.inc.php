<?php // Filename: content.inc.php

// bring in the below files using require
// __DIR__ is a magic constant that returns the directory of the file when used with an include
require_once __DIR__ . "/../db/mysqli_connect.inc.php";
require_once __DIR__ . "/../app/config.inc.php";

// initializes a variable to contain an array of any and all errors
$error_bucket = [];

// http://php.net/manual/en/mysqli.real-escape-string.php

// hope it's okay to do it this way, but the below all follows the same pattern
// real_escape_string escapes any characters that might allow a php injection and neutralizes them so they can't work
//the below code checks for various types of errors, and if it finds one, it adds it to the error bucket by pushing it to the array
// an error message that corresponds to the field that was left empty gets pushed to the array
// when the bucket displays, for each field left empty it tells the user what field they are required to fill out
// if the field is not empty, it keeps that info for the relevant variable for that field

if($_SERVER['REQUEST_METHOD']=="POST"){
    // grab primary key from hidden field
    if (!empty($_POST['id'])) {
       $id = $_POST['id'];
    }

    // First ensure that all required fields are filled in
    if (empty($_POST['first'])) {
        array_push($error_bucket,"<p>A first name is required.</p>");
    } else {
        # Old way
        #$first = $_POST['first'];
        # New way
        $first = $db->real_escape_string($_POST['first']);
    }
    if (empty($_POST['last'])) {
        array_push($error_bucket,"<p>A last name is required.</p>");
    } else {
        #$last = $_POST['last'];
        $last = $db->real_escape_string($_POST['last']);
    }
    if (empty($_POST['sid'])) {
        array_push($error_bucket,"<p>A student ID is required.</p>");
    } else {
        #$id = $_POST['id'];
        $sid = $db->real_escape_string($_POST['sid']);
    }
    // added sections to add gpa, degree program, and financial aid to error bucket
    // added gpa
    // added check to see if gpa is equal to empty string, and if so to push to the error bucket
    if ($_POST['gpa'] == "") {
        array_push($error_bucket, "<p>A GPA is required.</p>");
    } elseif ($_POST['gpa'] >= "0"){
        $gpa = $db->real_escape_string($_POST['gpa']);
    }
    // added degree program
    // added check to see if the field was empty, and if so to push to the error bucket
    if (empty($_POST['degree_program'])) {
        array_push($error_bucket, "<p>A Degree Program is required.</p>");
    } else {
        $degree_program = $db->real_escape_string($_POST['degree_program']);
    }
    //added financial aid
    // added check to see if financial is equal to empty string, and if so to push to the error bucket
    if (!isset($_POST['financial_aid'])) {
        array_push($error_bucket, "<p>Financial Aid info is required.</p>");
    } else {
        $financial_aid = $db->real_escape_string($_POST['financial_aid']);
    }
    // added graduation date
    //added check to see if graduation date is empty, and if so to push to the error bucket
    if ($_POST['graduation_date'] == "") {
        array_push($error_bucket, "<p>An expected date of graduation is required.</p>");
    } else {
        $graduation_date = $db->real_escape_string($_POST['graduation_date']);
    }
    if (empty($_POST['email'])) {
        array_push($error_bucket,"<p>An email address is required.</p>");
    } else {
        #$email = $_POST['email'];
        $email = $db->real_escape_string($_POST['email']);
    }
    if (empty($_POST['phone'])) {
        array_push($error_bucket,"<p>A phone number is required.</p>");
    } else {
        #$phone = $_POST['phone'];
        $phone = $db->real_escape_string($_POST['phone']);
    }

    // If we have no errors than we can try and insert the data
    if (count($error_bucket) == 0) {
        // Time for some SQL
        // tells which columns to insert the new data into
        // added gpa, degree program, and financial aid as columns to insert into table, added data created as column to insert into table
        // $sql = "INSERT INTO $db_table (first_name,last_name,student_id,gpa,financial_aid,degree_program,email,phone, data_created) ";
        // tells what the data is to insert into the columns for the new row
        // added gpa, degree program, and financial aid variables as values
        // $sql .= "VALUES ('$first','$last',$id,$gpa,'$financial_aid','$degree_program','$email','$phone')";
        $sql = "UPDATE $db_table SET first_name='$first', last_name='$last', sid='$sid', gpa='$gpa', degree_program='$degree_program', financial_aid='$financial_aid', graduation_date='$graduation_date', email='$email',phone='$phone' WHERE id=$id";
        // comment in for debug of SQL
        // echo $sql;
        // the variable $result contains the results of the query to
        // the data base if it contains the attempted new entry to the table
        $result = $db->query($sql);

        // display error message if the new row was not added to the table
        if (!$result) {
            echo '<div class="alert alert-danger" role="alert">
            I am sorry, but I could not save that record for you. ' .  
            $db->error . '.</div>';
        // display if new row added to table successfully
        } else {
            echo '<div class="alert alert-success" role="alert">
            I saved that new record for you!
          </div>';
        //  unset is used here to refresh the variables so that they can now accept new info
        // added gpa, degree program, and financial aid to list of variables to unset
        // added graduation date to list of variables to unset, since all default values of 0000-00-00 are already set
            unset($first);
            unset($last);
            unset($sid);
            unset($gpa);
            unset($degree_program);
            unset($financial_aid);
            unset($graduation_date);
            unset($email);
            unset($phone);
            unset($id);
        }
        // display the contents of the error bucket, meaning display the messages about required fields to fill out
    } else {
        display_error_bucket($error_bucket);
    }
} else {
    // check for record id (primary key)
    $id = $_GET['id'];
    // now we need to query the database and get the data for the record
    // note limit 1
    $sql = "SELECT * FROM $db_table WHERE id=$id LIMIT 1";
    // query database
    $result = $db->query($sql);
    // get the one row of data
    // added degree program, gpa, financial aid, graduation date to add to that updated record
    while($row = $result->fetch_assoc()) {
        $first = $row['first_name'];
        $last = $row['last_name'];
        $sid = $row['sid'];
        $gpa = $row['gpa'];
        $degree_program = $row['degree_program'];
        $graduation_date = $row['graduation_date'];
        $financial_aid = $row['financial_aid'];
        $email = $row['email'];
        $phone = $row['phone'];
    }
}

// echo is_string($graduation_date) ? 'string' : 'not a string';
// echo "\n";



?>
