<?php 
include "conn.php";

$std_id = $_POST['std_id'];
$name = $_POST['name'];
$mid = $_POST['mid'];
$final = $_POST['final'];
$sum = $_POST['sum'];
$grade = $_POST['grade'];

//check
echo "$std_id | $name | $mid | $final | $sum | $grade";

$sql = "INSERT INTO students(std_id, name, mid, final, sum_score,grade)
        VALUES($std_id, '$name', $mid, $final, $sum, '$grade') ";

echo "<br>SQL : $sql<br>";

try{
        $result = $conn->query($sql);
}
catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
        echo "Oops! Something went wrong. Please try again later. <br>";
        echo "<button onclick='history.back()'>Go Back</button>";
}

if($result){
    header("location: index.php");
} else {
    echo "Oops! Something went wrong. Please try again later.";
}

$conn->close()

?>