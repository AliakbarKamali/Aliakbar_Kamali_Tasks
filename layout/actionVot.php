<?php include "header.php";
$name = $_POST['name'];
$age = $_POST['age'];
if ($age >= 18) {
    echo "<h3> Your name is $name  and your Age is $age and you are eligible to vote.";
} else {
    echo "<h3> Your name is $name  and your Age is $age and you are not eligible to vote.";
}
?>

 <?php include "footer.php" ?>