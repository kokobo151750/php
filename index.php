<?php 
    echo 'Hello World';

// การสรี้างตัวแปร
    $a = 10;

// การนำตัวแปรมาบวก ลบ คูณ หาร
    $b = $a + 10;

// การรวมข้อความกับตัวแปรเบื้องต้น
    $c = "A มีค่า = $a"; 

// การต่อตัวแปรด้วยจุด เช่น $d = "A = ". $a
    $d = $a . $b;

// Operater ตัวคำณวนทางคณิตศาสตร์
    $x =+ 1;
    $x =- 1;
    $x = $x * 1;
    $x = $x / 1;

// การเพิ่มค่าให้กับตัวแปรมี 2 ประเภท คือ a++
    $a = 10;

// การแสดง Error เพื่อให้ทราบว่าเป็น error แบบใด ให้พิมพ์โค้ดดังนี้
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    
?>

<div><?php echo $a; ?></div>
<div><?php echo $b; ?></div>
<div><?php echo $c; ?></div>
<!-- php echo แสดงข้อความออกทางจอภาพแบบย่อ -->
<div><?= $c; ?></div>

<div><?php echo $d; ?></div>
<div><?php echo $x; ?></div>
<div>ตัวแปรของค่า a คือ <?php echo $a; ?></div>
<div>เมื่อใช้ a++ a คือ <?php echo $a++; ?></div>
<div>ตัวแปรของค่า a คือ <?php echo $a; ?></div>
<br>
<?php $a = 10; ?>
<div>ตัวแปรของค่า a คือ <?php echo $a; ?></div>
<div>เมื่อใช้ ++a a คือ <?php echo ++$a; ?></div>
<div>ตัวแปรของค่า a คือ <?php echo $a; ?></div>
<?php $a = "10xx"; ?>
<div><?= $a + 10; ?></div>
