<?php
$title = "JavaScipt Evants and form validation";
include "header.php";
?>

<h1> A simple button to display date</h1>
<button onclick="this.innerHTML=Date()">Click to know date </button>

<h2> Make a butoon and place holder as paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML=Date()">Click to know date </button>
<p id="p1"> </p>

<h2> Change the background color</h2>
<form> 
<input type="color" name="background" onchange="changeFcolor();">
</form>

<h2> Change the font color</h2>
<form> 
<input type="color" name="font" onchange="changeFcolor();">
</form>