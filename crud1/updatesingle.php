<?php
$title = "Update your info";
include '../layout/header.php';

if (isset($_GET['id'])) {
    $a = $_GET['id'];
    include 'db.php';
    $result = mysqli_query($conn, "SELECT * FROM studentsinfo WHERE id='$a'");
    $row = mysqli_fetch_array($result);
    mysqli_close($conn);
  }
  
  // Display update form with student data
  if (isset($row)) {
    ?>
<h2> Updare your below information </h2>
<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname'];?>"> <br><br>
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname'];?>"> <br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?>"> <br><br>
    
    <select name="groupid" value="<?php echo $row['groupid'];?>">
        <option value="BBCAP22"> BBCAP22 </option>
        <option value="BBCAP21"> BBCAP21 </option>
        <option value="Others"> Others </option>
    </select><br><br>
    <input type="submit" value="Update your info" name="update"><br><br>
    <input type="submit" value="Delete your info" name="delete">
</form>
  
  
<?php
  }


// Handle update or delete form submission
  if (isset($_POST['update']) || isset($_POST['delete'])) {
    if (isset($a)) {
      include 'db.php';
// Update row data in database
      if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    $query = mysqli_query($conn, "UPDATE studentsinfo set fname='$fname', lname='$lname',
                          city='$city', groupid='$groupid' where id='$a'");
    if ($query) {
        echo "<h2>Your information is updated successfully</h2>";
      } else {
        echo "<h2>Record NOT Modified</h2>";
      }
    } else {


// Delete row data from database
      $query = mysqli_query($conn, "DELETE FROM studentsinfo WHERE id='$a'");
      if ($query) {
        echo "<h2>Your information is deleted successfully</h2>";
      } else {
        echo "<h2>Record NOT Deleted</h2>";
      }
    }
    mysqli_close($conn);
  } else {
    echo "<h2>Invalid student ID</h2>";
  }
}

include '../layout/footer.php';
?>