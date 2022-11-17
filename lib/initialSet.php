<?php
//표시 개수
if(isset($_GET["n"])){
    $num = htmlspecialchars($_GET["n"]);
}
else{
    $num = "24";
}

$ip = htmlspecialchars($_POST["ip"]);

//데이터베이스 연결
$conn = mysqli_connect($ip, 'webUser', 'web0user12', 'project');
$result = mysqli_query($conn, "select * from result order by time desc limit ".$num);

//정보
$index = 0;
$time = array();
$q = array();
$r = array();
$g = array();
$b = array();
$h = array();
$s = array();
$v = array();

//css전용
$background_colour = "30, 30, 30";
$white = "230, 230, 230";
$light_gray = "200, 200, 200";
$gray = "100, 100, 100";
$dark_gray = "50, 50, 50";
$q_colour = "230, 230, 230";
$r_colour = "250, 120, 120";
$g_colour = "150, 230, 150";
$b_colour = "120, 170, 255";
$h_colour = "230, 230, 150";
$s_colour = "230, 230, 230";
$v_colour = "200, 150, 100";
$grid_colour = "80, 80, 80";
?>