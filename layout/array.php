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
2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
</h2>


<h2>
3. Delete an element from the array below:<br>
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
</h2>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[3]);
$courses2 = array_values($courses1);
echo "<ul>";
foreach ($courses2 as $course) {
echo "<li>" . $course . "</li>";
}
?>
<h2>
Sort the following array <br>
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
a) ascending order sort by value<br>
b) ascending order sort by Key<br>
c) descending order sort by Value<br>
d) descending order sort by Key.
<h2>
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
echo "</ul>";
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
echo "</ul>";
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
echo "</ul>";
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
echo "</ul>";
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
rsort($courses3);
echo "<ul>";
foreach ($courses3 as $course) {
echo "<li>" . $course . "</li>";
}
echo "</ul>";

?></td>
      <td><?php
echo "</ul>";
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



 <?php include "footer.php" ?>


 