<?php include "header.php"?>

<h3>Ex4 .In-class Task Control flow and loops 08.02.2023 (controlflow.php)
<h2>
1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays.
</h2>
<?php

$mo = date("F");
if ($mo == "August") {
    echo "It's August, so it's still holiday.";
} else {
    echo "Not August, this is $mo so I don't have any holidays.";
}
?>

<h2>
2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.
</h2>
<?php
$color = "red";
if ($color == "red") {
    echo "The color is red.";
} else {
    echo "The color is not red.";
}
?>
<h2>
3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
Excellent: >80; 
Great >70 & less than 80;
Good >60 & less than 70; 
Pass >50 & less than 60
Fail < 50
</h2>
<?php
$total_score = 68;
if ($total_score > 80) {
    $grade = "Excellent";
} elseif (80 > $total_score & $total_score > 70) {
    $grade = "Great";
} elseif (70 > $total_score & $total_score > 60) {
    $grade = "Good";
} elseif (60 > $total_score & $total_score > 50) {
    $grade = "Pass";
} else {
    $grade = "Fail";
}
echo "Your grade is: " . $grade;
?>

<h2>
4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h2>

<form action="actionVot.php" method="post">
  <div class="row">

    <div class="col">
    <input type="text" name="name" required placeholder="Name" class="form-control">
    </div>
    <div class="col">
    <input type="number" name="age" required placeholder="Age" class="form-control">
    </div>
  </div><br>
  <input type="submit" name="Submit">
</form>

 

 <?php include "footer.php" ?>


 