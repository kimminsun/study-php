<style>
	fieldset{
		background-color:white;
		width:380px;
		height:180px;
		border-right:white;
		border-left:white;
		border-top: black solid 3px;
		border-bottom:black solid 3px;
		}
	input[type=submit] {
	background-color:black;
	color:white;
	}
	body{
		background-color:#b6b6b6;
		font-size:11pt;
		font-family:돋움;
		}
	#a{
		text-align:right;

		}
	input[type=button]{
		background-color:white;
		color:black;
		}
	
  </style>
<?php



?>

<form method="post" action="u_search.php">
<center>
<fieldset>
비밀번호찾기
<br><br>
<table>
	<tr>
		<td>이름</td>
		<td><input type="text" name="u_name"></input></td>
	</tr>
	<tr>
		<td>아이디</td>
		<td><input type="text" name="u_id"></input></td>
	</tr>
	<tr>
		<td>전화번호</td>
		<td><input type="text" name="u_hp"></input></td>
	</tr>
</table>
<br><br>
<input type="submit" value="찾기"></input>



</fieldset>
<center>
</form>