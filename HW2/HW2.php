<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
date_default_timezone_set('Asia/Taipei');
echo "現在時間：".date("Y年m月j日l H點i分s秒")." (台灣時區) "."<br/>";
$now = date("Y-m-j H:i:s");

echo "世界末日：2017年12月31日<br/>";
$end = date("2017-12-31");


echo "距離世界末日剩：";

$date=floor((strtotime($end)-strtotime($now))/86400);
echo $date."天 ";

$hour=floor((strtotime($end)-strtotime($now))%86400/3600);
echo $hour."小時 ";

$minute=floor((strtotime($end)-strtotime($now))%86400%3600/60);
echo $minute."分鐘 ";

$second=floor((strtotime($end)-strtotime($now))%86400%60);
echo $second."秒 <br/>";

switch (date("m"))
{
	case "1":
		echo "<img height='50%' width='50%' src='http://www.ezwinpoker.com/wp-content/uploads/2016/02/1%E6%9C%88.jpg' width='90%'>";
		break;
	case "2":
		echo "<body background='http://tukubanekai.sakura.ne.jp/img/tuushin/tuushin1602.jpg' width='90%'>";
		break;
	case "3":
		echo "<body background='http://i1.w.hjfile.cn/doc/201203/1129619427fbl41729.jpg' width='90%'>";
		break;
	case "4":
		echo "<body background='http://img.mp.itc.cn/upload/20170331/737c6a8f4d93401b8a18df45afd8e901_th.jpeg' width='90%'>";
		break;
	case "5":
		echo "<body background='http://a.ecimg.tw/items/DAAG4AA9006XGF4/i010002_1462965661.jpg' width='90%'>";
		break;
	case "6":
		echo "<img height='50%' width='50%' src='http://cc.tvbs.com.tw/img/upload/2016/20160206/2015090411.jpg' width='90%'>";
		break;
	case "7":
		echo "<body background='http://pic.pimg.tw/mioavian/1312269382-5f215b0c5b30ba595a5f534db30a45aa.jpg' width='90%'>";
		break;
	case "8":
		echo "<body background='http://www.qqjpg.com/uploads/allimg/160314/1030003121-3.jpg' width='90%'>";
		break;
	case "9":
		echo "<body background='http://pic.pimg.tw/quai147/1342543915-4116647627.jpg' width='90%'>";
		break;
	case "10":
		echo "<body background='http://fashionhouse.jrh.tw/_Upload/HtmlEditor/images/oct01.jpg' width='90%'>";
		break;
	case "11":
		echo "<body background='https://pic.pimg.tw/pianopub/1433143412-3639553075_n.jpg?v=1433143441' width='90%'>";
		break;
	case "12":
		echo "<body background='http://mmbiz.qpic.cn/mmbiz/jD0Cic3wjpo34E5hswIm69oicrmEjLa7EvibicKFEcTznZKwP21jZIEicmPhLztMjCnGR4DVZ9o1K9hSLDMCd1TYuaw/0' width='90%'>";
		break;
	
}
