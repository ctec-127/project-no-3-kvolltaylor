<?php // Filename: form.inc.php ?>

<!-- Note the use of sticky fields below -->
<!-- Note the use of the PHP Ternary operator
Scroll down the page
http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
-->

<!-- creates a sticky form for users to add new rows to the student table -->
<!-- the php echos back whatever was typed in as long as something was typed in so the user doesn't have to retype in that field -->

<!-- add a require to bring in functions include file to determine radio button value -->


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div class="form-group">
        <label class="col-form col-form-label" for="first">First Name </label>
        <input class="form-control" type="text" id="first" name="first" value="<?php echo (isset($first) ? $first: '');?>">
    </div>
    <div class="form-group">
        <label class="col-form-label" for="last">Last Name </label>
        <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $last: '');?>">
    </div>
    <label class="col-form-label" for="sid">Student ID </label>
    <input class="form-control" type="text" id="sid" name="sid" value="<?php echo (isset($sid) ? $sid: '');?>">
    <br>
    <!-- added sections in the form to add gpa, financial aid, and degree fields-->
    <!-- added GPA -->
    <label class="col-form-label" for="gpa">GPA</label>
    <!-- added in sticky value to echo out entry if it is set -->
    <input class="form-control" type="text" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>">
    <br />
    <!-- added Financial Aid -->
    <label class="col-form-label pb-2">Financial Aid</label>
    <br />
    <!-- added check to see if is set, then to define that variable if a button is picked, or else define variable as empty -->
    <?php if (!isset($_POST['financial_aid'])){$financial_aid = '';} else 
    {$financial_aid = $_POST['financial_aid'];}?>
    <div class="form-check-inline">
    <!-- added in sticky value to echo out that that radio button option is checked if it was selected -->
        <input class="form-check-input" type="radio" id="financial_aid_yes" name="financial_aid" value="1" <?php if ($financial_aid == "1") echo "checked" ?>><label class="form-check-label" for="financial_aid_yes">Yes</label>
    </div>
    <div class="form-check-inline">
        <input class="form-check-input" type="radio" id="financial_aid_no" name="financial_aid" value="0" <?php if ($financial_aid == "0") echo "checked" ?>><label class="form-check-label" for="financial_aid_no">No</label>
    </div>
    <br />
    <!-- added Degree Program -->
    <div class="form-group">
        <label class="col-form-label pt-4" for="dp">Degree Program</label>
        <select class="form-control" name="degree_program" id="dp">
        <!-- added in sticky value, using a check to see if is set, then to define the variable as that option if it is the one selected, or else to define variable as empty  -->
            <?php if (isset($_POST['degree_program'])){$degree_program = $_POST['degree_program'];} else {$degree_program = "";}?>
            <option value="Chainsaw Juggling" <?php if($degree_program == "Chainsaw Juggling") echo ' selected="selected"' ?>>Chainsaw Juggling</option>
            <option value="Trapeze" <?php if($degree_program == "Trapeze") echo ' selected="selected"' ?>>Trapeze</option>
            <option value="Lion Taming" <?php if($degree_program == "Lion Taming") echo ' selected="selected"' ?>>Lion Taming</option>
            <option value="Clowning" <?php if($degree_program == "Clowning") echo ' selected="selected"' ?>>Clowning</option>
            <option value="Trick Riding" <?php if($degree_program == "Trick Riding") echo ' selected="selected"' ?>>Trick Riding</option>
        </select>
    </div>
    <br />
    <!-- added Graduation Date -->
    <div class="form-group">
    <label class="col-form-label pb-2" for="graduation_date">Graduation Date</label>
    <br />
    <input type="date" name="graduation_date" id="graduation_date" value="<?php $graduation_date = $_POST['graduation_date']; $date = date('Y-m-d H:i:s', strtotime($graduation_date)); echo $date; ?> ">
    </div>
    <br />
    <label class="col-form-label" for="email">Email </label>
    <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email) ? $email: '');?>">
    <br>
    <label class="col-form-label" for="phone">Phone </label>
    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone: '');?>">
    <br>
    <input type="hidden" name="id" value="<?php echo (isset($id) ? $id : '');?>">
    <input type="hidden" name="data_created" value="<?php echo (isset($data_created) ? $datacreated : ''); ?>">
    <a href="display-records.php">Cancel</a>&nbsp;&nbsp;
    <button class="btn btn-primary" type="submit">Save Record</button>

</form>