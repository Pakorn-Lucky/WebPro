<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test.php</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">ผลลัพธ์จากการคำนวณเกรด</h2>

    <?php
    if (isset($_POST['submit'])) {
        $filename = $_POST['filename'];
        if (file_exists($filename)) {
            echo '<table>';
            echo '<tr>
                        <th>นักศึกษา</th>
                        <th>ทดสอบย่อย</th>
                        <th>สอบกลางภาค</th>
                        <th>สอบปลายภาค</th>
                        <th>รวม 100 คะแนน</th>
                        <th>เกรด</th>
                    </tr>';
            $text = file($filename); // อ่านข้อมูลจากไฟล์
            foreach ($text as $tr_data) {
                $column = 1;
                $array_word = explode(",", $tr_data);
                $sum = 0;
                $grade = '';

                echo '<tr>';
                foreach ($array_word as $value) {
                    $value = trim($value);
                    if ($column == 1) {
                        echo '<td>' . $value . '</td>'; // ชื่อ เช่น A1
                    } else {
                        $value = (int) $value; // แปลงเป็น Integer
                        echo '<td>' . $value . '</td>'; // คะแนน
                        $sum += $value; // รวมคะแนน
                    }
                    $column++;
                }

                // คำนวณเกรดจากคะแนนรวม
                if ($sum >= 80) {
                    $grade = 'A';
                } elseif ($sum >= 75) {
                    $grade = 'B+';
                } elseif ($sum >= 70) {
                    $grade = 'B';
                } elseif ($sum >= 65) {
                    $grade = 'C+';
                } elseif ($sum >= 60) {
                    $grade = 'C';
                } elseif ($sum >= 55) {
                    $grade = 'D+';
                } elseif ($sum >= 50) {
                    $grade = 'D';
                } else {
                    $grade = 'F';
                }

                echo '<td>' . $sum . '</td>'; // คะแนนรวม
                echo '<td>' . $grade . '</td>'; // เกรด
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "<p style='text-align: center; color: red;'>File not found! Please check the filename.</p>";
        }
        echo "<div style='text-align: center;'><a href='Test.php'>Back</a></div>";
    } else { ?>
        <div style="text-align: center; margin-top: 20px;">
            <form method="post" action="Test.php">
                <label for="filename"><b>Enter Filename:</b></label><br>
                <input type="text" name="filename" id="filename" placeholder="Enter the filename (e.g., data.txt)" required><br><br>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
            </form>
        </div>
    <?php } ?>
</body>

</html>
