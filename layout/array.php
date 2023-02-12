<?php $title = "Exercise5: array"; include "header.php";?>

<h3>Ex5. In-class Task Arrays  09.02.2023 (array.php)
<h2>
1.  Write a php script to display courses as list. Use  < li >
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h2>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "<ul>";
foreach ($courses as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";
?>
<h2>
2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h2>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[3]);
$courses2 = array_values($courses1);
echo "<ul>";
foreach ($courses2 as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";
?>

<h2>
3. Sort the following array <br>
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
a) ascending order sort by value<br>
b) ascending order sort by Key<br>
c) descending order sort by Value<br>
d) descending order sort by Key.
</h2>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">courses3</th>
      <th scope="col">a</th>
      <th scope="col">b</th>
      <th scope="col">c</th>
      <th scope="col">d</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "<ul>";
foreach ($courses3 as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";
?>
</th>
      <td>
        <?php

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
echo "<ul>";
foreach ($courses3 as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";

?>
      </td>

      <td>
        <?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
ksort($courses3);
echo "<ul>";
foreach ($courses3 as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";

?>
    </td>
      <td><?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
rsort($courses3);
echo "<ul>";
foreach ($courses3 as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";

?></td>
      <td><?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
krsort($courses3);
echo "<ul>";
foreach ($courses3 as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";

?></td>
    </tr>
  </tbody>
</table>  

<h2>
4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
</h2>
<?php
$courses4=array("php", "html", "javascript", "cms", "project");
foreach($courses4 as &$value){
  $value = strtoupper($value);
}
echo "<ul>";
foreach ($courses4 as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";
?>
<h2>
5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h2>
<?php
$favorite_colors = array(
  "red" => "#ff0000",
  "green" => "#00ff00",
  "blue" => "#0000ff",
  "purple" => "#800080",
  "orange" => "#ffa500"
);

foreach ($favorite_colors as $color => $hex) {
  echo "My favorite color is $color and its hexadecimal equivalent is $hex";
  echo "<br>";
}
?>
<h2>
6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
</h2>
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
<?php
echo "<h4> Calculation average temperature: </h4>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
/*
The string of recorded temperatures, separated by commas, is stored in the variable $month_temp.
 The "explode" function is utilized to transform this string into an array, 
 with each temperature constituting as an individual element within the array.
 */
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
/*
The function "count" is utilized to determine the quantity of items present in the $temp_array.
 This count is then stored in the variable $temp_array_length.
*/
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
/*
The "sort" function is employed to arrange the elements of the $temp_array in ascending order.
*/
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
/*
This loop commences from the ($temp_array_length-5)th element and 
displays the final five elements in the $temp_array.
*/
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>
<br><br>
 
 <h1>
  Exercise in class
</h1>

<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1" required >
    <input type="number" placeholder="Enter your second number" name="num2" required>
    <select name="operator">
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
    <option value="mul">Multiply</option>
    <option value="div">Divide</option>
    </select>
    <input type="submit" name="cal" value="calculate">
</form>
<?php
if(isset($_GET["cal"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    switch($operator){
        case "add":
            $result = $num1 + $num2;
        break;
        case "sub":
            $result = $num1 - $num2;
        break;
        case "mul":
            $result = $num1 * $num2;
        break;
        case "div":
            $result = $num1 / $num2;
        break;
        default:
            $result = "Error : you have not selected the correct operator";
    }
}
if (isset($result)){
    echo "<h2> Result: $result</h2>";
}
?>
 <?php include "footer.php" ?>