<?php	
	include_once "./include/db.php"; 

	//password변수에 POST로 받아온 값을 저장하고 sql문으로 POST로 받아온 아이디값을 찾습니다.
	$password = $_POST['userpw'];
	$sql = mq("select * from user where id='".$_POST['userid']."'");
	$member = $sql->fetch_array();
	$hash_pw = $member['pass']; //$hash_pw에 POSt로 받아온 아이디열의 비밀번호를 저장합니다. 

	if(password_verify($password, $hash_pw)) //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 note_main.php로 넘어갑니다.
	{
		$_SESSION['userid'] = $member["id"];
		$_SESSION['userpw'] = $member["pw"];
		echo "<script>alert('로그인되었습니다.'); location.href='./page/note.php';</script>";
	}else{ 
	// 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
		echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
	}
?>