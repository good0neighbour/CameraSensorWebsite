<?php
require("lib/initialSet.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php
    require("lib/style.php");
    ?>
</head>
<body>
    <h1>제목</h1>
    <p id="chartArea">
        <?php
        require("view/chartArea.php");
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
            while($row = mysqli_fetch_array($result)){
                $index++;
                $time[] = substr($row["date"], 11, 5);
                $q[] = $row["Q"];
                $r[] = $row["R"];
                $g[] = $row["G"];
                $b[] = $row["B"];
                $h[] = $row["H"];
                $s[] = $row["S"];
                $v[] = $row["V"];
                ?>
                <tr>
                    <td id="num"><?=$index?></td>
                    <td id="time"><?=$row["date"]?></td>
                    <td id="q"><?=$row["Q"]?></td>
                    <td id="r"><?=$row["R"]?></td>
                    <td id="g"><?=$row["G"]?></td>
                    <td id="b"><?=$row["B"]?></td>
                    <td id="h"><?=$row["H"]?></td>
                    <td id="s"><?=$row["S"]?></td>
                    <td id="v"><?=$row["V"]?></td>
                    <td id="image">사진 없음</td>
                </tr>
                <?php
            }
            mysqli_close($conn);
            ?>
        </table>
    </p>
    <p>
        페이지 제작자 연락처 notyeas@gmail.com
    </p>
    <?php
    require("lib/chart.php");
    ?>
</body>
</html>