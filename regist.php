<html>
<head>
			<meta http-equiv="Content-type" content="text/html;charset=utf-8">
</head>

<body>
<?php
$login_name=$_POST['login_name'];
$passwd=$_POST['passwd'];
$hashpwd=password_hash($passwd,PASSWORD_DEFAULT);
$conn=pg_connect("host=localhost dbname=j543210a user=j543210a");
$query="select * from member where  login_name=$1";
$result=pg_prepare($conn,"my1_query",$query);
$result=pg_execute($conn,"my1_query",array($login_name));
if(pg_num_rows($result)==1){
	print "もう同じusernameあります、変更してください。<br>";
	print"<a href=\"login.php\">ログインページへ</a>";
	}
else{
$lastquery = "INSERT INTO member (login_name,passwd) VALUES($1, $2)";
$result = pg_prepare ($conn, "my2_query", $lastquery);
$result = pg_execute ($conn, "my2_query", array($login_name,$hashpwd));
print "ユーザ登録完了<br>";
print"<a href=\"login.php\">ログインページへ</a>";
}
?>
</body>
</html>