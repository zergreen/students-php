<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<script>
    function confirmDelete(link) {
        if (confirm("Are you sure?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }
</script>

<body>
    <div class="container">

        <input type="button" onclick="location.href='ADD.php';" value="ADD" />

        <div class="table-responsive">
            <table class="table table-hover table-striped table-light">
                <thead class="table-dark">
                    <tr>
                        <th rowspan=2>รหัส</th>
                        <th rowspan=2>ชื่อ-นามสกุล</th>
                        <th colspan=2 scope=col>คะแนน</th>
                        <th rowspan=2>SUM</th>
                        <th rowspan=2>GRADE</th>
                        <th rowspan=2>ACTION</th>
                    </tr>
                    <tr>
                        <th>mid</th>
                        <th>final</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    // connect to database
                    include "conn.php";

                    $sql = "SELECT * FROM students ORDER BY std_id";

                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo "
                          <tr>
                          <td>$row[std_id]</td>
                          <td>$row[name]</td>
                          <td>$row[mid]</td>
                          <td>$row[final]</td>
                          <td>$row[sum_score]</td>
                          <td>$row[grade]</td>
                          <td> <a href='EDIT.php?std_id=$row[std_id]'><input type=button value=EDIT /></a> <a href='DELETE.php?std_id=$row[std_id]' onclick='return confirmDelete(this);' ><input type=button value=DEL /></a> </td>
                          </tr>
                           ";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>