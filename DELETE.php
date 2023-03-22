<?php
include "conn.php";

$std_id = $_GET['std_id'];
echo "STD_ID : $std_id <br>";

$sql = "DELETE FROM students WHERE std_id=$std_id";
echo "SQL : $sql";

$result = $conn->query($sql);

if($result){
    header("location: index.php");
} else {
    echo "Opps! Something went wrong!";
}

?>