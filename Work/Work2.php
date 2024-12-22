<!DOCTYPE html>
<html>

<head>
    <title>โปรแกรมการตาราง</title>
</head>

<body>
    <form method="post" action="">
        <table border="1" align="center" width="400">
            <tr>
                <td colspan="2" align="center">
                    <big>ทดสอบการใช้ Control Structure</big>
                </td>
            </tr>
            <tr>
                <td align="right">Enter row:</td>
                <td><input type="number" name="row" size="15" value="" required /></td>
            </tr>
            <tr>
                <td align="right">Enter column:</td>
                <td><input type="number" name="column" size="15" value="" required /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" OK " />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['row']) && isset($_POST['column'])) {
        $row = $_POST['row'];
        $column = $_POST['column'];
        $rowMax = intval($row);
        $colMax = intval($column);

        echo "<table align='center' border='4' width='300'>";
        for ($r = 1; $r <= $rowMax; $r++) {
            echo "<tr>";
            for ($c = 1; $c <= $colMax; $c++) {
                if ($r == $c) {
                    echo "<td align='center'><font color='#33ff66'>";
                    echo "$r,$c</font></td>";
                } else {
                    echo "<td align='center'> $r,$c </td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>
