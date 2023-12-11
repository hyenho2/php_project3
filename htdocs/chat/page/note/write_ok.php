

<?php
include $_SERVER['DOCUMENT_ROOT']."/include/db.php";


if(isset($_SESSION['userid'])){


  $recv = $_POST['recv_name'];
	$name = $_SESSION['userid'];
	$title = $_POST['title'];
	$content = $_POST['content'];
  $chk =0;


$sql = mq("INSERT INTO
			send_note
		SET	
    recv_id = '".$recv."', 
		send_id = '".$name."', 
			title = '".$title."', 
			content = '".$content."',
      recv_chk = '".$chk."'
	");

$sql2 = mq("INSERT INTO
recv_note
SET
recv_id = '".$recv."', 
	send_id = '".$name."', 
	title = '".$title."', 
	content = '".$content."'
");
?>
<?php 
}else{
  echo "<script>alert('잘못된 접근입니다.'); location.href='/index.php'; </script>";
} 
?>

	<script>
		alert("쪽지를 보냈습니다.");
	
    location.href='/page/note_send.php';
	</script>

