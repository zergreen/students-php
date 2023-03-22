<?php
include "conn.php";

$std_id = $_POST['std_id'];
$name = $_POST['name'];
$mid = $_POST['mid'];
$final = $_POST['final'];
$sum = $_POST['sum'];
$grade = $_POST['grade'];

$sql = "UPDATE students
SET name='$name', mid=$mid, final=$final, sum_score=$sum, grade='$grade'
WHERE std_id=$std_id";

// echo "SQL: $sql <br>";

$result = $conn->query($sql);

if($result){
    header("location: index.php");
}else{
    echo "Opps!: Something wentwrong";
}

$conn->close();
?>