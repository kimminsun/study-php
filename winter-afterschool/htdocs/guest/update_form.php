 <style>
  body{
		background-color:#009999;

	}
  table{
  text-align:center;
	background-color:white;
	width:400px;
	height:400px;
	}
	fieldset{
	background-color:white;
		width:450px;
		height:450px;
		}
	legend{
		font-size:15pt;
		}
  </style>
<?php
	$num=$_GET[a];
	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	mysql_query("SET NAMES utf8",$conn);
	$query="select user_name,password,email,title,content from guest where id=$num";
	$result=mysql_query($query,$conn);
	$re=mysql_fetch_row($result);

	
?>
<center>
<form method=post action='update.php?aa=<?php echo $num ?>'>
 <fieldset>
	<legend>게시글수정</legend>
	<table>
		<tr>
			<td>작성자</td>
			<td><input type="text" value=<?=$re[0]?> name="user_name"></input></td>
		</tr>
		<tr>
			<td>이메일</td>
			<td><input type="email" name="email" value=<?=$re[2]?>></input></td>
		</tr>
		<tr>
			<td>제목</td>
			<td><input type="text" name="title" value=<?=$re[3]?>></input></td>
		</tr>
		<tr>
			<td>내용</td>
			<td><textarea cols=40 rows=10 name="content" required><?=$re[4]?></textarea></td>
		</tr>
		<tr>
			<td>비밀번호</td>
			<td><input type="password" name="password"></input></td>
		</tr>

		</table>
	</fieldset>
	<input type="submit" value="등록"></input>
</center>

	
