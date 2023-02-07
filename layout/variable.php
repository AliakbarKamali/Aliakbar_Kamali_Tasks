<?php include "header.php"?>

<h3>Ex3 .In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>
<h2>
    1.Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site.  (Form Tutorial: https://www.youtube.com/watch?v=nLPlDHrsyYA  
</h2>

<h2>
    2. Apply bootstrap style to the form.
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
<h2>
3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.
</h2>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>  

<h2>
4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)
</h2>

<?php
  $string1 = "Aliakbar";
  $string2 = "Kamali Andani";
  $joinedtogether = $string1 . " " . $string2;
  echo "The length is: " . strlen($joinedtogether);
?> 

 <?php include "footer.php" ?>