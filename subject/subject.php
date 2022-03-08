<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subject</title>
</head>
<body>

<h1>
    Select Subjects
</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <select name="subjects[]" id="subjects" multiple>
        <option  value="english">ENGLISH</option>
        <option  value="math">MATH</option>
        <option  value="computer">COMPUTER</option>
        <option  value="physiscs">PHYSICS</option>
        <option  value="chemisty">CHEMISTRY</option>
        </select>
        <input type="submit" value="submit"  name="submit">
    </form>

    <?php

if (isset($_POST["subjects"])){
        
        foreach($_POST["subjects"] as $subject){
            echo "You selected $subject" . "<br>";
        }
    }
    ?>
</body>
</html>
