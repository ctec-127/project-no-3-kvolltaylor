<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sticky Date</title>
</head>
<body>
    <?php
        $date = '';
        if (isset($_POST['date'])) {
            $date = $_POST['date'];
        }
    ?>
    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="date">Enter Date</label>
        <input type="date" name="date" id="date" value="<?=$date?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>