<?php // Filename: advanced-search.php

// Set $pageTitle variable to display proper page title before it's called in by the header include file
$pageTitle = "Advanced Search";
// Call in the include files for the header, the mysql connection to the database, the functions, and the config file
require_once 'inc/layout/header.inc.php';
require_once 'inc/db/mysqli_connect.inc.php';
// require 'inc/functions/functions.inc.php';
require_once 'inc/app/config.inc.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // variables for sticky form to show what user has searched for
    $first = $_POST['first'];
    $last = $_POST['last'];
    $sid = $_POST['sid'];
    $gpa = $_POST['gpa'];
    // if (isset($_POST['financial_aid'])) {
    //     $financial_aid = $_POST['financial_aid'];
    // } else {
    //     $financial_aid = '';
    // }
    $financial_aid = $_POST['financial_aid'];
    if (isset($_POST['degree_program'])) {
        $degree_program = $_POST['degree_program'];
    } else {
        $degree_program = '';
    }
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
                        <!-- created advanced search form for users to search within fields-->
                        <!-- made form sticky, so it shows what was entered by user when results from search are displayed -->
                        <form id="advanced_search" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
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
                                        <label for="gpa">GPA </label>
                                        <input class="form-control" type="text" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>">
                                    </div> <!-- end div for 1st column -->
                                    <div class="col col-md-2">
                                        <label>Financial Aid</label>
                                        <br>
                                        <?php 
                                            if(isset($financial_aid)){ 
                                                if ($financial_aid == "1") {
                                                    $checked_y = ' checked';
                                                    $checked_n = '';
                                                } else if ($financial_aid == "0") {
                                                    $checked_n = ' checked';
                                                    $checked_y = '';
                                                }
                                            } 
                                            if (!isset($financial_aid)){
                                                $financial_aid = '';
                                                $checked_y = '';
                                                $checked_n = '';
                                            }
                                        ?>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" id="financial_aid_yes" name="financial_aid" value="1" <?php echo $checked_y;?>><label class="form-check-label" for="financial_aid_yes">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="form-check-input" type="radio" id="financial_aid_no" name="financial_aid" value="0" <?php echo $checked_n;?>><label class="form-check-label" for="financial_aid_no">No</label>
                                        </div> 
                                    </div><!-- end div for 2nd column -->
                                    <div class="col col-md-4">
                                        <label for="degree_program">Degree Program</label>
                                        <select class="form-control" name="degree_program" id="degree_program">
                                        <?php 
                                            if (isset($degree_program)){
                                                $degree_program = $degree_program;
                                            } else {
                                                $degree_program = "";
                                            }
                                        ?>
                                            <option hidden disabled selected value> - select an option - </option>
                                            <option value="Chainsaw Juggling<?php if($degree_program == "Chainsaw Juggling") echo ' selected="selected"'?>">Chainsaw Juggling</option>
                                            <option value="Trapeze<?php if($degree_program == "Trapeze") echo ' selected="selected"'?>">Trapeze</option>
                                            <option value="Lion Taming<?php if($degree_program == "Lion Taming") echo ' selected="selected"'?>">Lion Taming</option>
                                            <option value="Clowning<?php if($degree_program == "Clowning") echo ' selected="selected"'?>">Clowning</option>
                                            <option value="Trick Riding<?php if($degree_program == "Trick Riding") echo ' selected="selected"'?>">Trick Riding</option>
                                        </select>
                                    </div> <!-- end div for 3rd column -->
                                    <div class="col col-md-4">
                                        <label for="graduation_date">Graduation Date</label>
                                        <br>
                                        <input type="date" class="rounded py-1 pl-3" name="graduation_date" id="graduation_date" value="<?php echo (isset($graduation_date) ? $graduation_date: '');?>">
                                    </div> <!-- end div for 4th column -->
                                </div> <!-- end div for second row -->
                                <div class="row">
                                    <div class="col col-md-4">
                                        <label for="email">Email </label>
                                        <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email) ? $email: '');?>">
                                    </div> <!-- end div for 1st column -->
                                    <div class="$col col-md-4">
                                        <label for="phone">Phone </label>
                                        <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone: '');?>">
                                    </div> <!-- end div for 2nd column -->
                                    <div class="col col-md-2">
                                        <button class="btn btn-block btn-info p-2 mt-4" type="submit" value="Search In Any Fields" name="search_any" title="Click Search Any Fields">Search For <strong>Any</strong></button>
                                    </div> <!-- end div for 3rd column -->
                                    <div class="col col-md-2">
                                        <button class="btn btn-block btn-success p-2 mt-4" type="submit" value="Search For All Fields" name="search_all" title="Click Search All Fields">Search For <strong>All</strong></button>
                                    </div> <!-- end div for 4th column -->
                                </div> <!-- end div for third row -->
                            </fieldset>
                        </form>
                    </div> <!-- end div -->
                </div> <!-- end row -->
            </div> <!-- end div with border -->


            <?php 
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // SEARCH ANY
                if(!empty($_POST['search_any'])){
                    // $sql = "SELECT * FROM $db_table WHERE ".$advanced_search." ORDER BY last_name ASC";
                    $sql = "SELECT * from $db_table WHERE";
                    
                    //FIRST
                    if(!empty($first)){
                        $sql .= " first_name LIKE '$first'";
                    } else {
                        $sql = $sql;
                    }
                    //LAST
                    if (!empty($last)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " last_name LIKE '$last'";
                        } else {
                            $sql .= " OR last_name LIKE '$last'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //STUDENT ID
                    if (!empty($sid)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " sid LIKE '$sid'";
                        } else {
                            $sql .= " OR sid LIKE '$sid'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //GPA
                    if (!empty($gpa)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " gpa LIKE '$gpa'";
                        } else {
                            $sql .= " OR gpa LIKE '$gpa'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //FINANCIAL AID
                    if (!empty($financial_aid)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " financial_aid = '$financial_aid'";
                        } else {
                            $sql .= " OR financial_aid = '$financial_aid'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //DEGREE PROGRAM
                    if (!empty($degree_program)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " degree_program = '$degree_program'";
                        } else {
                            $sql .= " OR degree_program = '$degree_program'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //GRADUATION DATE
                    if (!empty($graduation_date)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " graduation_date = '$graduation_date'";
                        } else {
                            $sql .= " OR graduation_date = '$graduation_date'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //EMAIL
                    if (!empty($email)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " email LIKE '$email'";
                        } else {
                            $sql .= " OR email LIKE '$email'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //PHONE
                    if (!empty($phone)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " phone LIKE '$phone'";
                        } else {
                            $sql .= " OR phone LIKE '$phone'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //ADD FINAL CONCATENATION TO STRING TO ADD ORDERING
                    $sql .= " ORDER by last_name ASC";
                    $result = $db->query($sql);

                    //DISPLAY THE RESULTS
                    if ($sql != "SELECT * from $db_table WHERE ORDER by last_name ASC"){
                        if ($result->num_rows == 0) {
                            echo "<p class=\"display-4 mt-4 text-center\">No results found for your search</p>";
                            echo '<img class="mx-auto d-block mt-4" src="img/frown.png" alt="A sad face">';
                            echo "<p class=\"display-4 mt-4 text-center\">Please try again.</p>";
                            // echo "<h2 class=\"mt-4\">There are currently no records to display for <strong>last names</strong> starting with <strong>$filter</strong></h2>";
                        // if the search of the student table yielded matches, display them
                        } else {
                            echo "<h2 class=\"mt-4 text-center\">$result->num_rows record(s) found for your search </h2>";
                            display_record_table($result);
                        }
                    } // end if sql variable does not contain columns to search
                    // if the search submit button was submitted with no text, do this:
                    elseif ($sql == "SELECT * from $db_table WHERE ORDER by last_name ASC"){
                        echo "<p class=\"display-4 mt-4 text-center\">I can't search if you don't give<br>me something to search for.</p>";
                        echo '<img class="mx-auto d-block mt-4" src="img/nosmile.png" alt="A face with no smile">';
                    } // end if sql variable contains no columns to search
                } 
                // elseif (empty($_POST['search_any'])){
                //     if (empty($_POST['search_all'])) {
                //         echo "<p class=\"display-4 mt-4 text-center\">I can't search if you don't give<br>me something to search for.</p>";
                //         echo '<img class="mx-auto d-block mt-4" src="img/nosmile.png" alt="A face with no smile">';
                //     } // end if serach all empty
                // } // end if empty


                //SEARCH ALL
                if(!empty($_POST['search_all'])){
                    // $sql = "SELECT * FROM $db_table WHERE ".$advanced_search." ORDER BY last_name ASC";
                    $sql = "SELECT * from $db_table WHERE";
                    
                    //FIRST
                    if(!empty($first)){
                        $sql .= " first_name LIKE '$first'";
                    } else {
                        $sql = $sql;
                    }
                    //LAST
                    if (!empty($last)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " last_name LIKE '$last'";
                        } else {
                            $sql .= " AND last_name LIKE '$last'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //STUDENT ID
                    if (!empty($sid)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " sid LIKE '$sid'";
                        } else {
                            $sql .= " AND sid LIKE '$sid'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //GPA
                    if (!empty($gpa)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " gpa LIKE '$gpa'";
                        } else {
                            $sql .= " AND gpa LIKE '$gpa'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //FINANCIAL AID
                    if (!empty($financial_aid)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " financial_aid = '$financial_aid'";
                        } else {
                            $sql .= " AND financial_aid = '$financial_aid'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //DEGREE PROGRAM
                    if (!empty($degree_program)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " degree_program = '$degree_program'";
                        } else {
                            $sql .= " AND degree_program = '$degree_program'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //GRADUATION DATE
                    if (!empty($graduation_date)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " graduation_date = '$graduation_date'";
                        } else {
                            $sql .= " AND graduation_date = '$graduation_date'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //EMAIL
                    if (!empty($email)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " email LIKE '$email'";
                        } else {
                            $sql .= " AND email LIKE '$email'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //PHONE
                    if (!empty($phone)){
                        if ($sql == "SELECT * from $db_table WHERE") {
                            $sql .= " phone LIKE '$phone'";
                        } else {
                            $sql .= " AND phone LIKE '$phone'";
                        }
                    } else {
                        $sql = $sql;
                    }
                    //ADD FINAL CONCATENATION TO STRING TO ADD ORDERING
                    $sql .= " ORDER by last_name ASC";
                    $result = $db->query($sql);

                    //DISPLAY THE RESULTS
                    if ($sql != "SELECT * from $db_table WHERE ORDER by last_name ASC"){
                        if ($result->num_rows == 0) {
                            echo "<p class=\"display-4 mt-4 text-center\">No results found for your search</p>";
                            echo '<img class="mx-auto d-block mt-4" src="img/frown.png" alt="A sad face">';
                            echo "<p class=\"display-4 mt-4 text-center\">Please try again.</p>";
                            // echo "<h2 class=\"mt-4\">There are currently no records to display for <strong>last names</strong> starting with <strong>$filter</strong></h2>";
                        // if the search of the student table yielded matches, display them
                        } else {
                            echo "<h2 class=\"mt-4 text-center\">$result->num_rows record(s) found for your search </h2>";
                            display_record_table($result);
                        }
                    } // end if sql variable contains columns to search but no data
                    // if the search submit button was submitted with no text, do this:
                    elseif ($sql == "SELECT * from $db_table WHERE ORDER by last_name ASC"){
                        echo "<p class=\"display-4 mt-4 text-center\">I can't search if you don't give<br>me something to search for.</p>";
                        echo '<img class="mx-auto d-block mt-4" src="img/nosmile.png" alt="A face with no smile">';
                    } // end if sql variable contains no columns to search
                } 
                // elseif (empty($_POST['search_all'])){
                //     if (empty ($_POST['search_any'])) {
                //         echo "<p class=\"display-4 mt-4 text-center\">I can't search if you don't give<br>me something to search for.</p>";
                //         echo '<img class="mx-auto d-block mt-4" src="img/nosmile.png" alt="A face with no smile">';
                //     } //end if search any empty
                // } // end if empty

            } // end if server method equals post

            ?>

         </div> <!-- end div col-lg-12 -->
    </div> <!-- end row mt-5 -->
</div> <!-- end container -->

<!-- bring in the footer include file and display it using require -->
<?php require_once 'inc/layout/footer.inc.php';?>