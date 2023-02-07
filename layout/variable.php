<?php include "header.php"?>

<h3>Ex3 .In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>
<h2>
    1.Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site.  (Form Tutorial: https://www.youtube.com/watch?v=nLPlDHrsyYA  
</h2>
<form action="action.php" method="post">
  <div class="row">

    <div class="col">
    <input type="text" name="fname" required placeholder="First Name" class="form-control">
    </div>

    <div class="col">
    <input type="text" name="lname" required placeholder="Last Name" class="form-control">
    </div>
  </div>

  Birth Date:  <input type="date" name="bdate"> <br>
  Select fav Color:  <input type="color" name="color"> <br>
  <input type="submit" name="Submit">





</form>


 <?php include "footer.php" ?>