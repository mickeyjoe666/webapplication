<?php
session_start();
?>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<title>中華料理 Pedia(情報工学実験)</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<script src="js/jquery1.7.2.min.js"></script>
<script src="js/script.js"></script>
</head>

<body>
<header id="header">
  <h1>情報工学実験用サイトです</h1>
  
  <!-- ロゴ -->
	<div class="logo">
		<a href="top.php"><img src="images/logo.png" width="45" height="45" alt="Sample site" /><p>中華料理<span>A wide range of history</span></p></a>
	</div>
	<!-- / ロゴ -->
	<!-- 電話番号+受付時間 -->
	<div class="info">
		
	</div>
	<!-- / 電話番号+受付時間 -->
</header>

<div id="wrapper">
<nav id="mainNav">
	<div class="inner">
  	<a class="menu" id="menu"><span>MENU</span></a>
		<div class="panel">   
    	<ul>
    		<li class="active"><a href="top.php"><strong>トップページ</strong><span>Top</span></a></li>
				<li><a href="list.php"><strong>全部</strong><span>All</span></a></li>
				<li><a href="search.php"><strong>検索</strong><span>Search</span></a></li>
				<li><a href="password.php"><strong>パスワードの変更</strong><span>Sign up</span></a></li>
				<li class="last"><a href="logout.php"><strong>ログアウト</strong><span>Logout</span></a></li>
			</ul>   
    </div>
	</div> 
</nav>
<?php

try{$attend = $_POST['id']; 
		$conn = pg_connect("host=localhost  dbname=j543210a user=j543210a");
	$query = "INSERT INTO votes values ($1, $2)"; 
	$result = pg_prepare($conn, "vote", $query);
	$result = pg_execute($conn, "vote", array($attend, $_SESSION['id']));
	if($result == true){ 
	print $_SESSION['login_name']."さんの投票を受け付けました<br>";
	print "<a href=./top.php>トッフヘーシへ戻る</a>"; 

	}else{ 
 print "投票に失敗しました";
 } 
}
	catch(Exception $e){
	print "test";
}
?>

</div> 
<!-- フッター -->
<footer id="footer">
	<div class="inner">
  	<!-- 左側 -->
		<div id="info" class="grid">
			<!-- ロゴ -->
			<div class="logo">
				<a href="top.php"><img src="images/logo.png" width="45" height="45" alt="Sample site"><p>中華料理<br><span>A wide range of history</span></p></a>
			</div>
			<!-- / ロゴ -->
			<!-- 電話番号+受付時間 -->
			<div class="info">
				<p class="tip1"><b>Tips:</b> This site is fictional.</p>
				<p class="tip2">This website is for keio university‘s web application experiment.</p>
			</div>
			<!-- / 電話番号+受付時間 -->
		</div>  
		<!-- / 左側 -->
		<!-- 右側 ナビゲーション -->
		<ul class="footnav">
			<li><a href="subpage.html">湘菜</a></li>
			<li><a href="subpage.html">粤菜</a></li>
			<li><a href="subpage.html">闽菜</a></li>
			<li><a href="subpage.html">苏菜</a></li>
			<li><a href="subpage.html">浙菜</a></li>
			<li><a href="subpage.html">鲁菜</a></li>
			<li><a href="subpage.html">川菜</a></li>
			<li><a href="subpage.html">徽菜</a></li>
		</ul>
		<!-- / 右側 ナビゲーション -->
	</div>
</footer>
<!-- / フッター -->
<address>Copyright(c) 2016 Sample Inc. All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank" rel="nofollow">http://f-tpl.com</a></address>

</body>
</html>
