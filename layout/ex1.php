<?php $title = "Exercise1: Hamk oy"; include "header.php";?>
    
    <h3>3.1. Write a simple PHP script to print your information (Name and your groupid). </h3>
<?php
echo "Aliakbar Kamali Andani <br>";
echo "bbcap22_12<br>";
?>
<h1>3.2. Write PHP code to display the following message.</h1>
<?php
echo "Hello world! My name is \"David\"";
?>
<h1>3.3. Write the PHP code in to display the current date. </h1>
<?php
echo Date("d.m.Y")
?>
<br>
<script>
document.write("Hello world this is javascript ");
</script>
<noscript>
    Please enable javaScript to wiew this content;
</noscript>
<input type="button" onclick="hello()" value="Click me">
<h1>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h1>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>
<script>
//window.alert
//window.alert("This will trigger an alert box");
//window.alert(5+10);
//document.write
document.write("Hello world this is interesting");
</script>

<h3>3.5. Table & Variables</h3>
<button onclick="add()">Click to Add</button>
<hr>
<p id="place1" style="color:red; background-color:yellow;"></p>
<span id="place2" style="color:red; background-color:green;"></span> 
<script>
document.getElementById("place1").innerHTML ="This will go to place1";
document.getElementById("place2").innerHTML ="This will go to span";
</script>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;

echo "<table>
  <tr>
    <th>S.N </th><th>Name</th><th>Grade</th>
  </tr>
  <tr><th>1</th><td> Pekka </td><td>$g1</td>
  </tr>
  <tr><th>2</th><td>Johanna</td><td>$g2</td>
  </tr>
  <tr><th>3</th><td>John</td><td>$g3</td>
  </tr>
</table>";
?>
<h3>4. Take a screenshot that verifies, you have set up the development environment and include it as an image in ex1.php</h3>
<img src="Docker.jpg" alt="docker" width="90%   ">

<h2>Changing background-color</h2>
<form>
<input type="color" name="background" onchange="changeColor('background', this.value);">
</form>

<h3>5. Commit all changes and push all changes you have done to your GitHub repository. The task is then completed. </h3>
<?php include "footer.php";?>