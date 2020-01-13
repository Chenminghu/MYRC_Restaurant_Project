<body style ='background-image :url(bg1.jpg)'>
<p><font size=7, color ="WHITE">Welcome to order system</font></p><br>




<?php
include 'connect.php';
$conn = OpenCon();
if (array_key_exists('first', $_POST)) {
  // Update tuple using data from user
   $employee_id = $_POST['employee_id']; //insPayroll_ID refers to input names in HTML
   $table_id = $_POST['table_id'];
   $sql="update waiter set table_id='$table_id' where employee_id='$employee_id'";
   $results=mysqli_query($conn, $sql)or
     die(mysqli_error($conn));
    mysqli_commit($conn);

} else if (array_key_exists('second', $_POST)){
   $c = $_POST['info']; //insPayroll_ID refers to input names in HTML
   if ($c=='waiter'){
     $employee_id = $_POST['ID'];
     $sql="select table_id from waiter where employee_id='$employee_id'";
     $results=mysqli_query($conn, $sql);
     while ($row = mysqli_fetch_array($results)) {
         $table_id = $row['table_id'];
     }
   } else {
     $table_id = $_POST['ID'];
     $sql="select employee_id from waiter where table_id='$table_id'";
     $results=mysqli_query($conn, $sql);
     while ($row = mysqli_fetch_array($results)) {
         $employee_id = $row['employee_id'];
     }
   }
   mysqli_commit($conn);
}
$sql="select * from DishPrice";
$result=mysqli_query($conn, $sql) or
die(mysqli_error($conn));
/*printResult($result);*/
       /* next two lines from Raghav replace previous line */
       $columnNames = array("Ordernumber", "Itemnumber");
       printTableOrder($result, $columnNames, $table_id);
//	}
CloseCon($conn);
//Commit to save changes...


function printResult($result) { //prints results from a select statement
	echo "<br>Dishes to finish:<br>";
	echo "<table>";
	echo "<tr><th>Ordernumber</th><th>Itemnumber</th></tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>" . $row["Ordernumber"] . "</td><td>" . $row["Itemnumber"] . "</td></tr>"; //or just use "echo $row[0]"
	}
	echo "</table>";
}

function printTableOrder($resultFromSQL, $namesOfColumnsArray, $table_id)
{   echo '<form action="ordering.php" method="POST">';

    echo 'TableID<input type="text" name="table_id" value='.$table_id.' readonly="readonly">';
    echo "<br>MENU<br>";
    echo "<table>";

    echo "<tr>";
    // iterate through the array and print the string contents
    foreach ($namesOfColumnsArray as $name) {
        echo "<th>$name</th>";
    }
    echo "<th>Amount</th>";
    echo "</tr>";
    $k = 0;
    while ($row = mysqli_fetch_array($resultFromSQL)) {
        $k++;
        echo "<tr>";
        $string = "";

        // iterates through the results returned from SQL query and
        // creates the contents of the table
        for ($i = 0; $i < sizeof($namesOfColumnsArray); $i++) {
            $string .= "<td>" . $row["$i"] . "</td>";
        }

        $string .= '<td><input type="number" name="module'.$k .'"size="10" value=0></td>';

        echo $string;
        echo "</tr>";
    }

    echo "</table>";
    echo '<input type="text" name="num" value='.$k.' readonly="readonly" >' ;
    echo '<input type="submit" value="Order" name="order">

</form>';
}





?>
