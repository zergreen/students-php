<?php
include "conn.php";

$std_id = $_GET['std_id'];

$sql = "SELECT * FROM students WHERE std_id=$std_id";

echo "SQL: $sql <br>";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $mid = $row['mid'];
    $final = $row['final'];
    $sum = $row['sum_score'];
    $grade = $row['grade'];
}

$conn->close();

?>

<div class="container">
    <center>
        <h1>Update-Students</h1>
    </center>
    <form action="edit-verify.php" method="POST">
        <table align="center" cellpadding="10px">
            <tbody>
                <tr>
                    <td>รหัส</td>
                    <td><input type="text" name="std_id" value="<?php echo $std_id ?>" readonly></td>
                </tr>
                <tr>
                    <td>ชื่อ-นามสกุล</td>
                    <td><input type="text" name="name" value="<?php echo $name ?>" readonly></td>
                </tr>
                <tr>
                    <td>mid</td>
                    <td><input type="text" name="mid" value="<?php echo $mid ?>"></td>
                </tr>
                <tr>
                    <td>final</td>
                    <td><input type="text" name="final" value="<?php echo $final ?>"></td>
                </tr>
                <tr>
                    <td>sum</td>
                    <td><input type="text" name="sum" value="<?php echo $sum ?>"></td>
                </tr>
                <tr>
                    <td>grade</td>
                    <td><input type="text" name="grade" value="<?php echo $grade ?>"></td>
                </tr>
                <tr>
                    <td><input type="button" onclick="history.back();" value="Back"></td>
                    <!-- <td><input type="reset" value="ล้าง"></td> -->
                    <td><input type="submit" value="ส่ง"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>