<?
include('db.php');
extract ($_GET);
mysql_query ("SET NAMES 'utf8'");
$cos_id=$id;  echo " หลักสูตรที่คุณเลือก <p>ได้ทำการลบออกจากระบบเรียบร้อยแล้วค่ะ!!!</p>";
//echo $cos_id;
$result = mysql_query("delete from course where cos_id = $cos_id");
	if(!$result)
	{
	die("could not query db".mysql_error());
	}
	else
	{
		header("location:cos_view.php");
	}
	
?>
       