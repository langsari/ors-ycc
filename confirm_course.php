<?php
session_start();
// $username=$_SESSION["username"];
include('db.php');
extract ($_GET);
$cos_id=$_GET['id'];
// if(!isset($_SESSION["username"])){header("location:register.php");}
if(!isset($_SESSION["username"])) // To check login user if already login then hide login form
	{
    include('login_check.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>ยืนยันการลงทะเบียน</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">

.style25 {font-size: 11px; font-family: Tahoma; }
.style7 {color: #3987FB; font-size: 14px; }
.BorderBorder .Border .Columns .MainColumn .ArticleBorder .Article table tr td strong {
	color: #FFF;
}
.BorderBorder .Border .Columns .MainColumn .ArticleBorder .Article table tr td li {
	color: #000;
}
.Border .Columns .MainColumn .ArticleBorder .Article table tr td li {
	color: #000;
}
.text {
	font-weight: bold;
	color: #FFF;
}
.BorderBorder .Border .Columns .MainColumn .ArticleBorder .Article table tr td h3 {
	font-size: 12px;
}
.tex2 {
	color: #FFF;
	font-weight: bold;
}
.c {
	font-weight: bold;
}
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style48 {
	color: #000000;
	font-weight: bold;
}

    </style>
</head>
<body>
    <div class="BodyContent">
<div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderTL"></div><div class="BorderTR"><div></div></div>
      <div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div>
      <div class="Border">

        <div class="Menu">
            <ul>
              <li></li> 
              <li></li> 
              <li></li> <li></li> 
              <a href="index.php" class="MenuButton"><span>หน้าหลัก</span></a><a href="college.php" class="MenuButton">  <span>วิทยาลัย</span></a><a href="course.php" class="MenuButton"><span>หลักสูตร</span></a><a href="ann.php" class="MenuButton"><span>ประชาสัมพันธ์</span> </a><a href="gallary.php" class="MenuButton"><span>ภาพกิจกรรม</span></a><a href="contact_us.php" class="MenuButton"><span> ติดต่อเรา</span></a>
                 <input name="text" type="text" style="width:120px" />
                 <span class="ButtonInput"><span>
                 <input type="button" value="Search" />
                 </span></span></ul>
        </div>
        <div class="Header">
        <div class="HeaderTitle">
          <div align="left"><img src="images/banner.jpg" width="836" height="250"></div>
          <h1>&nbsp;</h1>
        </div>
        </div><div class="Columns"><div class="Column1">
         
          <div class="Block">
            
            <span class="BlockHeader"><span>Online Register</span></span>
            <table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
             
            </table>

<?php if (isset($message)) { echo $message; }?>
<?php
    include("not_logined.php");
} 
else {
    include("logined.php");
}
?>
            <br>
          </div>
          <div class="Block">

            <span class="BlockHeader"><span>Menu</span></span>
            <div class="BlockContentBorder">

                <ul>
                    <li><span class="style7"><a href="index.php" style="color: #3987FB; text-decoration: none">หลักสูตรที่เปิด</a></span></li>
                    <li><span class="style7"><a href="manual.pdf" style="color: #3987FB; text-decoration: none">คู่มือการลงทะเบียน</a></span></li>
                </ul>
          </div>
        </div>

        </div><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
       
          <div class="Article">
            <br>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="26" colspan="3" bgcolor="#333333" class="text"><strong>&nbsp;<span >&nbsp;&nbsp;&nbsp;เลือกวิชาที่ท่านต้องการลงทะเบียนเรียน</span></strong></td>
              </tr>
              <tr>
                <td height="16">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="40" height="17">&nbsp;</td>
                <td width="549"><li>เลือกหมู่วิชา รายวิชาิ ของวิชาที่ท่านต้องการลงทะเบียนเรียน </td>
                <td width="32">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>อ่านรายละเอียดของรายวิชานั้นๆ </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>กด <span class="c">ยืนยันการลงทะเบียนหลักสูตร</span> เพื่อส่งข้อมูลการลงทะเบียนเรียน </td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="101">&nbsp;</td>
                <td width="318">&nbsp;</td>
                <td width="192">&nbsp;</td>
              </tr>
              <tr>
                <td height="25" colspan="3" bgcolor="#333333" class="text"><span>&nbsp;&nbsp;&nbsp;&nbsp;เลือกหมู่วิชา รายวิชา</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            
              <table width="611" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
 <?php
$sql = "select * from course where cos_id='$cos_id' ";
$result = mysqli_query($connection, $sql);
while ($rows = mysqli_fetch_array($result)) {
$id = $rows["cos_id"];
//$name = $rows["cos_name"];

?>               
                
                  <td>&nbsp;</td>
                  <td>หมูวิชา</td>
                  <td><label for="select3"></label>
                    <select style=" width:200px;" name="cos_group" id="select3">
                      <option value="<?php echo $rows['cos_group']; ?>"><?php  $rows['cos_group']; ?></option>
                      <option>-- select --</option>
                       <?php
			             $sql3="select * from course";
			             $result3=mysqli_query($connection, $sql3);			 
			             while($data3=mysqli_fetch_array($result3)){
			 	              if($data3['cos_group']==$data3[0]){
					             echo "<option value='$data3[cos_group]' selected>$data3[cos_group]";
				              }else{
					            echo "<option value='$data3[cos_group]'>$data3[cos_group]";
				              }}
			           ?>
                      
                  </select></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                <td width="27">&nbsp;</td>
                <td width="73">รหัสวิชา</td>
                <td width="317">
                <select style="width:200px;" name="select" size="1" id="select">                 
                  <option value="<?php echo $rows['cos_id']; ?>"><?php  $rows['cos_id']; ?></option>
                  <option>-- select --</option> 
                   <?php		
			             $sql3="select * from course";
			             $result3=mysqli_query($connection, $sql3);			 
			             while($data3=mysqli_fetch_array($result3)){
			 	              if($data3['cos_id']==$data3[0]){
					             echo "<option value='$data3[cos_id]' selected>$data3[cos_id]";
				              }else{
					             echo "<option value='$data3[cos_id]'>$data3[cos_id]";
				              }}
			       ?>
               </select></td>
                <td width="194">&nbsp;</td>
              </tr>
           
              <tr>
                <td>&nbsp;</td>
                <td>รายวิชา</td>
                <td><select style="width:200px;" name="select2" id="select2">
                  
                  <option value="<?php echo $rows['cos_name']; ?>"><?php  $rows['cos_name']; ?></option>
                  <option>-- select --</option> 
                  <?php		
			             $sql3="select * from course";
			             $result3=mysqli_query($connection, $sql3);			 
			             while($data3=mysqli_fetch_array($result3)){
			 	              if($data3['cos_name']==$data3[0]){
					             echo "<option value='$data3[cos_name]' selected>$data3[cos_name]";
				              }else{
					             echo "<option value='$data3[cos_name]'>$data3[cos_name]";
				              }}
			       ?>
                </select></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              
          </table>
<br>      <form name="form1" method="post" action="">
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="22" colspan="3" bgcolor="#999999" style="font-weight: bold"> &nbsp;&nbsp;รายละเอียดวิชา</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="22">&nbsp;</td>
                <td><span class="style48">หมูวิชา</span></td>
                <td><?php echo $rows['cos_group'];?></td>
              </tr>
              <tr>
                <td height="24">&nbsp;</td>
                <td><span class="style48">รายวิชา</span></td>
                <td><?php echo $rows['cos_id'];?></td>
              </tr>
              <tr>
                <td width="57">&nbsp;</td>
                <td width="61">&nbsp;</td>
                <td width="485">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="22" colspan="4" bgcolor="#999999"><span class="style47">&nbsp;&nbsp;หลักฐานการรับสมัคร</span></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="59">&nbsp;</td>
                <td width="520"><span class="style45"><li>ใบสมัคร ปริ้น/ดาวน์โหลด จาก เว็บไซต์ (หรือรับได้ที่วิทยาลัยชุมชน)</span></td>
                <td width="15">&nbsp;</td>
                <td width="17">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style45"><li>สำเนาบัตรประชาชนบัตรข้าราชการบัตรประจำตัวนักศึกษา 1 ฉบับ </span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style45"><li>สำเนาทะเบียนบ้าน 1 ฉบับ </span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style45"><li>รูปถ่าย ขนาด 1 นิ้ว จำนวน 3 รูป (ถ่ายมาแล้วไม่เกิน 6 เดือน ไม่สวมหมวกและแว่นตา) </span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="21" colspan="4" bgcolor="#999999"><span class="style47">&nbsp;&nbsp;ค่าใช้จ่ายลงทะเบียนเรียน</span></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="56">&nbsp;</td>
                <td width="463"><li>บุคคลทั่วไป ชั่วโมงละ 5 บาท </td>
                <td width="46">&nbsp;</td>
                <td width="36">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>นักศึกษา ชั่วโมงละ 1 บาท </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>ค่าสมัครเรียน หลักสูตรละ 10 บาท </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="23" colspan="4" bgcolor="#999999"><span class="style47">การชำระค่าลงทะเบียนเรียน</span></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><li>ชำระค่าลงทะเบียนด้วยตนเอง ได้ที่ศูนย์ วิทยาลัยชุมชน ยะลา </td>
                <td>&nbsp;</td>
                <td width="108">&nbsp;</td>
                </tr>
              <tr>
                <td width="56">&nbsp;</td>
                <td width="411">&nbsp;</td>
                <td width="26">&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
            </table>
            <table width="611" border="0" align="center" cellpadding="0" cellspacing="2">
              <tr>
                <td height="20" colspan="3" bgcolor="#999999"><span class="style47">ติดต่อสอบถาม</span></td>
                </tr>
              <tr>
                <td width="55">&nbsp;</td>
                <td>&nbsp;</td>
                <td width="24">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>2 ถนนสุขยางค์ ตำบลสะเตง อำเภอเมือง จังหวัดยะลา โทร. 0-7321-6646-7 Fax. 0-7321-6648 www.ycc.ac.th </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td><a href="pdf.php?id=<?php $rows['cos_id']; ?> " target="_blank" ><img src="images/cregister.png" width="200" height="40"></a></td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
                   <?php } ?>
    </table>
            <p>&nbsp;</p>
            </form>
            <p align="center">&nbsp;</p>
        </div>
        </div>



        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div>
        </div>
        </div></div>
        <div class="Footer"><span class="style25">&copy; Copyright Electronic Registration of Yala Community College Design by : Bukhoree | Kholed | Ihsan </span></div>                
    </div>
</div>
</body>
</html>