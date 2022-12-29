<?php
require("lib/initialSet.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>JM Waters Image Analyzer</title>
    <?php
    require("lib/style.php");
    ?>
</head>
<body>
    <h1>JM Waters Image Analyzer</h1>
    <p id="chartArea">
        <?php
        require("view/chartArea.php");
        ?>
    </p>
    <p>
        <table>
            <!--========== 표 제목 표시 ==========-->
            <th id="num">목록</th>
            <th id="time">시간</th>
            <th id="q">Q</th>
            <th id="r">R</th>
            <th id="g">G</th>
            <th id="b">B</th>
            <th id="h">H</th>
            <th id="v">V</th>
            <th id="s">S</th>
            <th id="image">사진</th>

            <!--========== 표 요소 출력 ==========-->
            <?php
            //데이터베이스 결과 저장
            while($row = mysqli_fetch_array($result)){
                $index++;
                $time[] = substr($row["date"], 8, 2)."일 ".substr($row["date"], 11, 5);
                $date[] = $row["date"];
                $q[] = $row["Q"];
                $r[] = $row["R"];
                $g[] = $row["G"];
                $b[] = $row["B"];
                $h[] = $row["H"];
                $s[] = $row["S"];
                $v[] = $row["V"];
            }

            //데이터베이스 종료
            mysqli_close($conn);

            //배열 역순 정렬
                      $time = array_reverse($time);
                      $date = array_reverse($date);
                      $q = array_reverse($q);
                      $r = array_reverse($r);
                      $g = array_reverse($g);
                      $b = array_reverse($b);
                      $h = array_reverse($h);
                      $s = array_reverse($s);
                      $v = array_reverse($v);

            //표 출력
            for($i = 0; $i < $index; $i = $i + 1){
            ?>
            <tr>
                <td id="num"><?=$i + 1?></td>
                <td id="time"><?=$date[$i]?></td>
                <td id="q"><?=$q[$i]?></td>
                <td id="r"><?=$r[$i]?></td>
                <td id="g"><?=$g[$i]?></td>
                <td id="b"><?=$b[$i]?></td>
                <td id="h"><?=$h[$i]?></td>
                <td id="v"><?=$v[$i]?></td>
                <td id="s"><?=$s[$i]?></td>
                <td id="image">사진 없음</td>
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
    require("lib/chart0.php");
    require("lib/chart1.php");
    ?>
</body>
</html>