<?php
//井戸田の歴史の電子紙芝居をウェブアプリで開発

//DBに接続
require('dbconnect.php');

// MySQLとの接続をオープンにする
$db = mysql_connect($DBSERVER, $DBUSER, $DBPASSWORD) or die(mysql_error());

// データをUTF8で受け取る
mysql_query("SET NAMES UTF8");

// データベースを選択する
$selectdb = mysql_select_db($DBNAME, $db);

?>

<?php

//データベースから全ての情報を取り出す
$recordSet = mysql_query("SELECT * FROM idota_rekishi_spot", $db);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PhotoPoster</title>

<!--Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--カルーセルスライダーslick-->
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
	$(function(){
		$('.slick').slick({
			dots : true,
			autoplay:true,
			autoplaySpeed:2000,
		});
	});
</script>
<style>
	.hoge {
		width: 100%;
		margin: 0 auto;
	}
	.hoge img {
		margin: 0 auto;
	}
	.slick-prev:before, .slick-next:before {
		color: #0080FF;
	}
</style>
</head>

<body>








</body>
</html>

