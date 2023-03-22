<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD-Students</title>

    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<script>
    function calc() {
        return {
            sum: 0,
            grade: 'F',
            final: 0,
            mid: 0,

            update_all() {

            },

            cal_sum() {
                this.sum = parseInt(this.mid) + parseInt(this.final);
                // alert(this.sum);
                this.cal_grade(this.sum);
            },

            cal_grade(score) {
                let ch = '';
                // alert(score)
                if (score >= 80) {
                    ch = 'A';
                } else if (score >= 75) {
                    ch = 'B+';
                } else if (score >= 70) {
                    ch = 'B';
                } else if (score >= 65) {
                    ch = 'C+';
                } else if (score >= 60) {
                    ch = 'C';
                } else if (score >= 55) {
                    ch = 'D+';
                } else if (score >= 50) {
                    ch = 'D';
                } else {
                    ch = 'F';
                }
                // alert(ch)
                this.grade = ch;
            }
        }
    }
</script>

<body>
    <div class="container" x-data=calc()>
        <center>
            <h1>ADD-Students</h1>
        </center>
        <form action="add-verify.php" method="POST">
            <table align="center" cellpadding="10px">
                <tbody>
                    <tr>
                        <td>รหัส</td>
                        <td><input type="text" name="std_id" value="" placeholder="65050200" required></td>
                    </tr>
                    <tr>
                        <td>ชื่อ-นามสกุล</td>
                        <td><input type="text" name="name" value="" placeholder="Queen Perona" required></td>
                    </tr>
                    <tr>
                        <td>mid</td>
                        <td><input type="text" name="mid" x-model="mid" placeholder="33" @input="cal_sum" min="0" max="100"></td>
                    </tr>
                    <tr>
                        <td>final</td>
                        <td><input type="text" name="final" x-model="final" placeholder="44" @input="cal_sum" min="0" max="100"></td>
                    </tr>
                    <tr>
                        <td>sum</td>
                        <td><input type="text" name="sum" x-model="sum" placeholder="77" readonly></td>
                    </tr>
                    <tr>
                        <td>grade</td>
                        <td><input type="text" name="grade" x-model="grade" placeholder="A" readonly></td>
                    </tr>
                    <tr>
                        <td><input type="button" onclick="history.back();" value="Back"></td>
                        <!-- <td><input type="reset" value="ล้าง"></td> -->
                        <td><input type="submit" value="ส่ง"></td>
                    </tr>
                </tbody>
            </table>

            <!-- รหัส<input type="text" name="std_id">
            ชื่อ-นามสกุล <input type="text" name="name">
            mid <input type="text" name="mid">
            final <input type="text" name="final">
            sum <input type="text" name="sum">
            grade <input type="text" name="grade"> -->
        </form>

    </div>
</body>

</html>