<body style ='background-image :url(bg1.jpg)'>
<p><font size=7, color = "WHITE">Welcome to payroll database </font></p>
<br>

<form method="POST" action="payroll.php"> </form>

<p><font size=3, color = "WHITE">Insert a payroll information</font></p>

<p><font size="2", color = "WHITE"> Payroll_ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Employee_ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Salary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        BankInformation

<form method="POST" action="payroll.php">
<p><input type="text" name="insPayroll_ID" size="6"> &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="insEmployee_ID" size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="insSalary" size="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="insBankInformation" size="18"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<input type="submit" value="insert" name="insertsubmit"></p>
</form>

<br> <br>
<p> <font size=3, color = "WHITE">Delete PayRoll by the Payroll_ID </font> </p>
<p><font size="2", color = "WHITE"> ID</font></p>
<form method="POST" action="payroll.php">

<p><input type="text" name="ID" size="6">

<input type="submit" value="delete" name="deletesubmit"></p>



<p><font size=3, color = "WHITE">Get the summary </font></p>


<form method="POST" action="payroll.php">
<p>
<input type="submit" value="get" name="getsubmit"></p>
</form>

<br>
<br>
<a href="http://localhost/manager.html">
 <button type="button" class="btn"  style="background-color: #66A588;width: 200px;height: 25px;color: #FFFFFF">
<font size = "2" color = "black"> Back </font> </button>
</a>
<br>
<br>
<a href="http://localhost/welcome.html">
 <button type="button" class="btn"  style="background-color: #66A588;width: 200px;height: 25px;color: #FFFFFF">
<font size = "2" color = "black"> Back to Home Page </font> </button>
<br>
<br>
</a>

<?php
include 'connect.php';
$conn = OpenCon();
if (array_key_exists('insertsubmit', $_POST)) {

  			// Get values from the user and insert data into
                  // the table.
  				$c1 = $_POST['insPayroll_ID'];
  				$c2 = $_POST['insEmployee_ID'];
          $c3 = $_POST['insSalary'];
  				$c4 = $_POST['insBankInformation'];

          if ($c2<>'null' or $c2<>'' or $c2<>'NULL' or $c2<>'Null'){
            $sql="insert into PayRoll values ('$c1', '$c2', '$c3', '$c4')";
          } else

  	$sql="insert into PayRoll values ('$c1', Null, '$c3', '$c4')";
    $result=mysqli_query($conn, $sql) or
die(mysqli_error($conn));;
    mysqli_commit($conn);
}
else
  if (array_key_exists('deletesubmit', $_POST)) {
    // Update tuple using data from user

    $c1 = $_POST['ID'];

    $sql="delete from PayRoll where payroll_id=$c1";
    $result=mysqli_query($conn, $sql) or
die(mysqli_error($conn));;
    mysqli_commit($conn);
}
else
   if (array_key_exists('getsubmit', $_POST)) {

     $sql = "select sum(salary) AS r from PayRoll";
     $result = mysqli_query($conn, $sql)or
     die(mysqli_error($conn));
     $row =  mysqli_fetch_assoc($result);

     foreach($row as $r){
     echo "the sum of salary is $r";
   }
}



//if ($_POST && $success) {
		//POST-REDIRECT-GET -- See http://en.wikipedia.org/wiki/Post/Redirect/Get
//		header("location: oracle-test.php");
//	} else {
		// Select data...
		$sql="select * from payroll";
    $result=mysqli_query($conn, $sql) or
die(mysqli_error($conn));
		/*printResult($result);*/
           /* next two lines from Raghav replace previous line */
           $columnNames = array("Payroll_ID", "Employee_ID", "Salary", "Bankinfo");
           printTable($result, $columnNames);
//	}
  CloseCon($conn);
	//Commit to save changes...


function printResult($result) { //prints results from a select statement
	echo "<br>Got data from table Payroll:<br>";
	echo "<table>";
	echo "<tr><th>payroll_id</th><th>employee_ID</th></th>Salary</th></th>BankInfo</th></tr>";

	while ($row =  mysqli_fetch_assoc($result)) {
		echo "<tr><td>" . $row["payroll_id"] . "</td><td>" . $row["employee_ID"] . "</td></td>". $row["Salary"] . "</td></td>". $row["BankInfo"] . "</td></tr>"; //or just use "echo $row[0]"
	}
	echo "</table>";
}




?>
