<?php include "header.php"?>

<h3>Ex4 .In-class Task Control flow and loops 08.02.2023 (controlflow.php)
<h2>
1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays.
</h2>
<?php

$month = date("F");
if ($month == "August") {
    echo "It's August, so it's still holiday.";
} else {
    echo "Not August, this is $month so I don't have any holidays.";
}
?>

<h2>
2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.

</h2>



 <?php include "footer.php" ?>