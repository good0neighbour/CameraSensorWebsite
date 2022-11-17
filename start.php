<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(30, 30, 30);
            color: rgb(230, 230, 230);
        }
        input[type="text"]{
            background-color: rgb(30, 30, 30);
            color: rgb(230, 230, 230);
            border: solid 3px rgb(200, 200, 200);
            border-radius: 8px;
        }
        input[type="submit"]{
            height: 23px;
            width: 200px;
            background-color: rgb(200, 200, 200);
            color: rgb(30, 30, 30);
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <p>
        <form action="index.php" method = "post">
            라즈베리파이 ip 주소 
            <input type="text" name="ip"> 
            <input type="submit" value="데이터베이스 연결">
        </form>
    <p/>
    <p>
        <form action="test.php">
            <input type="submit" value="테스트 페이지로 연결">
        </form>
    <p/>
</body>
</html>