<?php
	include '../dbconn.php';
	$u_id=$_POST[id];
	$u_pass=$_POST[password];

	$query="select user_id,passwd from join_mem where user_id='$u_id'";

	$result=mysql_query($query,$conn);
	$re=mysql_fetch_row($result);
	$num=mysql_num_rows($result);


	
	if($u_pass==$re[1]){
		echo "<script>alert('로그인 성공');</script>";
	}
	else if($u_pass!=$re[1]){
		echo "<script>alert('비밀번호가 틀렸습니다')
				history.go(-1);</script>
		";
	}
	else if($u_id!=$re[0] && $u_pass!=$re[1]){
		echo "<meta http-equiv='refresh' content='0;url=join_form.html'>;";
	}
		
?>

