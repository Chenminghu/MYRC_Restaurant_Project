<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "5DScarry@";
$db = "Restaurant1";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or
die("Connect failed: %s\n". $conn -> error);
return $conn;
}
function CloseCon($conn)
{
mysqli_close($conn);
}


function printTable($resultFromSQL, $namesOfColumnsArray)
{
    echo '<br><span style="color:WHITE;text-align:center;">Here is Result:<br>';
    echo "<table>";
    echo "<tr>";
    // iterate through the array and print the string contents
    foreach ($namesOfColumnsArray as $name) {
        echo "<th>$name</th>";
    }
    echo "</tr>";

    while ($row = mysqli_fetch_array($resultFromSQL)) {
        echo "<tr>";
        $string = "";

        // iterates through the results returned from SQL query and
        // creates the contents of the table
        for ($i = 0; $i < sizeof($namesOfColumnsArray); $i++) {
            $string .= "<td>" . $row["$i"] . "</td>";
        }
        echo $string;
        echo "</tr>";
    }
    echo "</table>";
}
?>
