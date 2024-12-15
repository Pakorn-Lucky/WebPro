<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
    <?php
    $name = "นาย ปกรณ์ ประแสง";
    $university = "มหาวิทยาลัยพระจอมเกล้าพระนครเหนือ";
    $nickname ="ลัคกี้";
    $province = "จังหวัดปราจีนบุรี";
    $hometown="เมืองปราจีนบุรี";
    $subdistrict="ตำบลหน้าเมือง";
    $district="อำเภอเมืองปราจีนบุรี";
    $school_junior="โรงเรียนปราจิณราษกฏอำรุง";
    $school_senior="วิทยาลัยเทคนิคปราจีนบุรี";
    $ror_dor="ปี3";
    $age = "20"
    ?>
    
    <h1 class="Title">ประวัติของ <?php echo $name; ?></h1>
    <p class="Big">
        ชื่อจริง <?php echo $name; ?> ชื่อเล่น <?php echo $nickname; ?> อายุ <?php echo $age; ?> ปี <br>
        อาศัยอยู่ใน <?php echo $province; ?> มีถิ่นกำเนิดอยู่ที่ <?php echo $hometown; ?> บ้านอยู่ <?php echo $subdistrict; ?> <?php echo $district; ?> <br>
        <b> ม.ต้นศึกษาอยู่ที่ </b> <?php echo $school_junior; ?> <b>ม.ปลาย/ปวช</b><?php echo $school_senior; ?> <br>
        จบรด. <?php echo $ror_dor; ?>
    </p>
    <p class="Normal">
        <b>กำลังศึกษาอยู่ที่ <?php echo $university; ?></b>
    </p>
</body>
</html>