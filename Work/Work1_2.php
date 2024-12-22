<?php
if (isset($_GET['hw']) && isset($_GET['midterm']) && isset($_GET['final'])) {
    $hw = $_GET['hw'];
    $midterm = $_GET['midterm'];
    $final = $_GET['final'];

    // Validate scores to ensure they are within the allowed range
    if ($hw > 30)
        $hw = 30;
    if ($midterm > 35)
        $midterm = 35;
    if ($final > 35)
        $final = 35;

    // Display scores
    echo "<p><b>ข้อมูลคะแนน</b><br />";
    echo "Homework: <i>$hw</i> <br />";
    echo "Midterm: <i>$midterm</i> <br />";
    echo "Final: <i>$final</i> <br />";

    // Calculate total score and grade
    $total = $hw + $midterm + $final;
    echo "Total Score: $total <br />";

    if ($total >= 80) {
        echo "Result Grade: A<br />";
    } elseif ($total >= 75) {
        echo "Result Grade: B+<br />";
    } elseif ($total >= 70) {
        echo "Result Grade: B<br />";
    } elseif ($total >= 65) {
        echo "Result Grade: C+<br />";
    } elseif ($total >= 60) {
        echo "Result Grade: C<br />";
    } elseif ($total >= 55) {
        echo "Result Grade: D+<br />";
    } elseif ($total >= 50) {
        echo "Result Grade: D<br />";
    } else {
        echo "Result Grade: F<br />";
    }

    echo "<br /><a href=''> <big>Back</big></a></p>";
}
{?>
<html>

<head>
    <title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณเกรด</title>
</head>

<body>
    <form method="get" action="lab6-11cal.php">
        <table border="1" align="center" width="500">
            <tr>
                <td colspan="2" align="center">
                    <big>ทดสอบการใช้ Arithmatic Operator </big>
                </td>
            <tr>
            <tr>
                <td>Enter Home work : </td>
                <td><input type="number" name="hw" min="0" max="30" size="15" value="" /> </td>
            </tr>
            <td>Enter Midterm : </td>
            <td><input type="number" name="midterm" size="15" min="0" max="35" value="" /></td>
            </tr>
            </tr>
            <td>Enter final : </td>
            <td><input type="number" name="final" min="0" max="35"size="15" value="" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" OK " />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
}