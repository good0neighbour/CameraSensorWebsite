<?php
//표시 개수
if(isset($_GET["n"])){
    $num = htmlspecialchars($_GET["n"]);
}
else{
    $num = "512";
}

$ip = htmlspecialchars($_GET["ip"]);
$i = 0;

//데이터베이스 연결
$conn = mysqli_connect($ip, 'webUser', 'web0user12', 'project');
$result = mysqli_query($conn, "select * from result order by date desc limit ".$num);

//정보
$index = 0;
$time = array();
$date = array();
$q = array();
$r = array();
$g = array();
$b = array();
$h = array();
$s = array();
$v = array();

//표 전용
$borderWidth = 0.5;
$pointRadius = 0.5;

//css전용
$background_colour = "30, 30, 30";
$white = "230, 230, 230";
$light_gray = "200, 200, 200";
$gray = "100, 100, 100";
$dark_gray = "50, 50, 50";
$r_colour = "250, 120, 120";
$g_colour = "150, 230, 150";
$b_colour = "120, 170, 255";
$h_colour = "230, 230, 150";
$v_colour = "200, 150, 100";
$q_colour = "160, 130, 230";
$s_colour = "230, 200, 220";
?>