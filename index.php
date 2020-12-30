<title>Server2</title>

<h1><u> Server 2 - North Verginia us-east-1a </u> </h1>

<?php 

$servername = "localhost";
$username = "root";
$password = "vshiva2020";
$dbname = "test";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $i = 0;
  while($row = $result->fetch_assoc()) {

    $i++;
    echo "id: <b>" . $i. "</b> - Name:  - <b>" . $row["emp_name"]. "</b> - Salary -<b>" . $row["salary"]. "</b> <br>";
  }
} else {
  echo "0 results";
}






?>

<br>
<br>


<form action "" method="post">

<h4> Employee Name:</h4> <input type="text" name="emp_name" required > <h4>Salary:</h4> <input type="text" name="salary" required>
<input type="submit" name="save" value ="Save" >

</form>


<?php


$servername = "localhost";
$username = "root";
$password = "vshiva2020";
$dbname = "test";

if( isset($_POST['save']) ){

	$emp_name = $_POST['emp_name'];
	$salary = $_POST['salary'];

	$sql = "INSERT INTO employees (emp_name, salary)
	VALUES ('$emp_name', '$salary')";

	if ($conn->query($sql) === TRUE) {
  		echo "New record created successfully";
	} else {
  		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}


 ?>
