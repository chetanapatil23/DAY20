<?php
$servername="localhost";
$username="root";
$password="";
$databasename="student";

$conn=mysqli_connect($servername,$username,$password,$databasename);
if($conn->connect_error)
{
die($conn->connect_error);
}
else{
echo"mysql connected suscessfuly".'<br/>';
}
//$sql = "INSERT INTO student1(fname, mname,lname,branch)
//VALUES ('John', 'Doe', 'johndoe','it')";
//$sql = "INSERT INTO student1(fname, mname,lname,branch)
//VALUES ('sapna', 'rajubhai', 'nakka','it')";


/*if ($conn->query($sql)==true) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/

/*$sql = "UPDATE student1 SET lname='Doe' WHERE fname='sapna'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}*/
$sql = "SELECT * from student1";
$result = $conn->query($sql);
if ($conn->error) 
{
echo $conn->error;
}
else{
	echo'<br/>';
  while($row = $result->fetch_assoc())  
    {
	  echo'<pre/>';
	  print_r($row);
      echo $row["fname"]. "  " . $row["mname"]. " " . $row["lname"]." ". $row["branch"]. "<br>";
      echo implode('|',$row).'<br/>';
    }
}

/*$sql = "DELETE FROM student1 WHERE fname='sapna'";

if ($conn->query($sql)==true) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}*/
$conn->close();
?>