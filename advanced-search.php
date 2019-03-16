<?php // Filename: advanced-search.php

// Set $pageTitle variable to display proper page title before it's called in by the header include file
$pageTitle = "Advanced Search";
// Call in the include files for the header, the mysql connection to the database, the functions, and the config file
require_once 'inc/layout/header.inc.php';
require_once 'inc/db/mysqli_connect.inc.php';
// require 'inc/functions/functions.inc.php';
require_once 'inc/app/config.inc.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $sid = $_POST['sid'];
    $gpa = $_POST['gpa'];
    $financial_aid = $_POST['financial_aid'];
    $degree_program = $_POST['degree_program'];
    $graduation_date = $_POST['graduation_date'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
}

?>

<div class="container">

    <div class="row mt-5">
		<div class="col-lg-12">
			<h1>Advanced Record Search</h1>
            <div class="p-2">
                 <div class="row">
                    <div class="col-lg-12 mt-4">
                        <form id="adv_search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                            <fieldset class=" border border-success rounded p-2">
                                <legend class="w-auto ml-2">Enter terms into the desired fields:</legend>
                                <div class="row mb-3">
                                    <div class="col col-md-4">
                                        <label for="first">First Name </label>
                                        <input class="form-control" type="text" id="first" name="first" value="<?php echo (isset($first) ? $first: '');?>">
                                    </div> <!-- end div for 1st column -->
                                    <div class="col col-md-4">
                                        <label for="last">Last Name </label>
                                        <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $last: '');?>">
                                    </div> <!-- end div for 2nd column -->
                                    <div class="col col-md-4">
                                        <label for="sid">Student ID </label>
                                        <input class="form-control" type="text" id="sid" name="sid" value="<?php echo (isset($sid) ? $sid: '');?>">
                                    </div> <!-- end div for 3rd column -->
                                </div> <!-- end div for first row -->
                                <div class="row mb-3">
                                <div class="col col-md-2">
                                        <label class="" for="gpa">GPA </label>
                                        <input class="form-control" type="text" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>">
                                    </div> <!-- end div for 1st column -->
                                    <div class="col col-md-2">
                                        <label class="" for="financial_aid">Financial Aid</label>
                                        <br>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" id="financial_aid_yes" name="financial_aid" value="1" <?php if ($financial_aid == "1") echo " checked";?>><label class="form-check-label" for="financial_aid_yes">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" id="financial_aid_no" name="financial_aid" value="0" <?php if ($financial_aid == "0") echo " checked";?>><label class="form-check-label" for="financial_aid_no">No</label>
                                        </div> 
                                    </div><!-- end div for 2nd column -->
                                    <div class="col col-md-4">
                                        <label for="degree_program">Degree Program</label>
                                        <select class="form-control" name="degree_program" id="degree_program">
                                            <option value="Chainsaw Juggling<?php if($degree_program == "Chainsaw Juggling") echo ' selected="selected"'?>">Chainsaw Juggling</option>
                                            <option value="Trapeze<?php if($degree_program == "Trapeze") echo ' selected="selected"'?>">Trapeze</option>
                                            <option value="Lion Taming<?php if($degree_program == "Lion Taming") echo ' selected="selected"'?>">Lion Taming</option>
                                            <option value="Clowning<?php if($degree_program == "Clowning") echo ' selected="selected"'?>">Clowning</option>
                                            <option value="Trick Riding<?php if($degree_program == "Trick Riding") echo ' selected="selected"'?>">Trick Riding</option>
                                        </select>
                                    </div> <!-- end div for 3rd column -->
                                    <div class="col col-md-4">
                                        <label for="gd">Graduation Date</label>
                                        <br>
                                        <input type="date" class="rounded py-1 pl-3" name="graduation_date" id="graduation_date" value="<?php echo (isset($graduation_date) ? $graduation_date: '');?>">
                                    </div> <!-- end div for 4th column -->
                                </div> <!-- end div for second row -->
                                <div class="row">
                                    <div class="col col-md-4">
                                        <label class="" for="email">Email </label>
                                        <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email) ? $email: '');?>">
                                    </div> <!-- end div for 1st column -->
                                    <div class="$col col-md-4">
                                        <label class="" for="phone">Phone </label>
                                        <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone: '');?>">
                                    </div> <!-- end div for 2nd column -->
                                    <div class="col col-md-4">
                                        <button class="btn btn-block btn-primary p-2 mt-4" type="submit" value="Advanced Search" name="adv_search" title="Click Advanced Search">Advanced Search</button>
                                    </div> <!-- end div for 3rd column -->
                                </div> <!-- end div for third row -->
                            </fieldset>
                        </form>
                    </div> <!-- end div -->
                </div> <!-- end row -->
            </div> <!-- end div with border -->


            <?php 
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            }

            ?>

         </div> <!-- end div col-lg-12 -->
    </div> <!-- end row mt-5 -->
</div> <!-- end container -->

<!-- bring in the footer include file and display it using require -->
<?php require_once 'inc/layout/footer.inc.php';?>