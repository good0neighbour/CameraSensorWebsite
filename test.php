<?php
if(isset($_GET["n"])){
    $num = htmlspecialchars($_GET["n"]);
}
else{
    $num = "24";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>TestSite</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>제목</h1>
    <p id="chartArea">
        <?php
        require("view/testChartArea.php");
        ?>
    </p>
    <p>
        <table>
            <th id="num">목록</th>
            <th id="time">시간</th>
            <th id="q">Q</th>
            <th id="r">R</th>
            <th id="g">G</th>
            <th id="b">B</th>
            <th id="h">H</th>
            <th id="s">S</th>
            <th id="v">V</th>
            <th id="image">사진</th>
            <?php
                      for($i = 1; $i <= $num; $i = $i + 1){
            ?>
            <tr>
                <td id="num"><?=$i?></td>
                <td id="time">1960-01-01 00:00</td>
                <td id="q">1</td>
                <td id="r">1</td>
                <td id="g">1</td>
                <td id="b">1</td>
                <td id="h">1</td>
                <td id="s">1</td>
                <td id="v">1</td>
                <td id="image">사진</td>
            </tr>
            <?php
            }
            ?>
        </table>
    </p>
    <p>
        페이지 제작자 연락처 notyeas@gmail.com
    </p>
    <?php
    require("lib/testChart.php");
    ?>
</body>
</html>