<!DOCTYPE html>
<html>
<head>
    <title>Edit Book Data</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $bookId = $_REQUEST['bookId'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";
    $conn = mysqli_connect($hostname, $username, $password, $dbName);

    if (!$conn) {
        die("ไม่สามารถติดต่อกับ MySQL ได้");
    }

    mysqli_set_charset($conn, "utf8mb4");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าจากฟอร์ม
        $bookName = $_POST['BookName'];
        $typeId = $_POST['TypeID'];
        $statusId = $_POST['StatusID'];
        $publish = $_POST['Publish'];
        $unitPrice = $_POST['UnitPrice'];
        $unitRent = $_POST['UnitRent'];
        $dayAmount = $_POST['DayAmount'];
        $bookDate = $_POST['BookDate'];
        
        // จัดการอัปโหลดรูปภาพ
        $picture = $data["Picture"];
        if (!empty($_FILES['Picture']['name'])) {
            $targetDir = "pictures/";
            $targetFile = $targetDir . basename($_FILES['Picture']['name']);
            move_uploaded_file($_FILES['Picture']['tmp_name'], $targetFile);
            $picture = basename($_FILES['Picture']['name']);
        }
        
        // อัปเดตข้อมูลในฐานข้อมูล
        $sqlUpdate = "UPDATE book SET 
                        BookName='$bookName', 
                        TypeID='$typeId', 
                        StatusID='$statusId', 
                        Publish='$publish', 
                        UnitPrice='$unitPrice', 
                        UnitRent='$unitRent', 
                        DayAmount='$dayAmount', 
                        BookDate='$bookDate', 
                        Picture='$picture' 
                        WHERE BookID='$bookId'";
        
        if (mysqli_query($conn, $sqlUpdate)) {
            echo "<p align='center'>อัปเดตข้อมูลสำเร็จ</p>";
        } else {
            echo "<p align='center'>เกิดข้อผิดพลาด: " . mysqli_error($conn) . "</p>";
        }
    }
    
    $sql = "SELECT * FROM book WHERE BookID = '$bookId'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    ?>

    <h2 align="center">แก้ไขรายละเอียดหนังสือ</h2>
    <form method="POST" action="" enctype="multipart/form-data">
        <table border="1" align="center" bgcolor="#FFFFFF">
            <tr><td>รหัสหนังสือ:</td><td><?php echo $data["BookID"]; ?></td></tr>
            <tr><td>ชื่อหนังสือ:</td><td><input type="text" name="BookName" value="<?php echo $data["BookName"]; ?>" required></td></tr>
            <tr><td>ประเภทหนังสือ:</td><td><input type="text" name="TypeID" value="<?php echo $data["TypeID"]; ?>" required></td></tr>
            <tr><td>สถานะหนังสือ:</td><td><input type="text" name="StatusID" value="<?php echo $data["StatusID"]; ?>" required></td></tr>
            <tr><td>สำนักพิมพ์:</td><td><input type="text" name="Publish" value="<?php echo $data["Publish"]; ?>" required></td></tr>
            <tr><td>ราคาซื้อ:</td><td><input type="number" name="UnitPrice" value="<?php echo $data["UnitPrice"]; ?>" required></td></tr>
            <tr><td>ราคาเช่า:</td><td><input type="number" name="UnitRent" value="<?php echo $data["UnitRent"]; ?>" required></td></tr>
            <tr><td>จำนวนวันที่ยืมได้:</td><td><input type="number" name="DayAmount" value="<?php echo $data["DayAmount"]; ?>" required></td></tr>
            <tr><td>วันที่จัดเก็บหนังสือ:</td><td><input type="date" name="BookDate" value="<?php echo $data["BookDate"]; ?>" required></td></tr>
            <tr>
                <td>รูปภาพปัจจุบัน:</td>
                <td><img src="pictures/<?php echo $data['Picture']; ?>" width="80" height="100"></td>
            </tr>
            <tr><td>อัปโหลดรูปภาพใหม่:</td><td><input type="file" name="Picture"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="บันทึกการเปลี่ยนแปลง"></td></tr>
        </table>
    </form>

    <br>
    <div align="center"><a href="listofbook.php">กลับหน้าหลัก</a></div>
</body>
</html>