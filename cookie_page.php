<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Title</title>
</head>

<style>
    .title {
        color:Blue;
        width: 40%;
        text-align: center;
        margin: auto;
        font-size: 24px;
        font-weight: bold;
    }
    .ket_qua {
        color:red;
        display: absolute;
        width: 320px;
        float: right;
        padding-top:50px;
        margin-right: 20%;
        font-size: 20px;
        font-weight: bold;
    }
    .img1 {
        width: 600px;
        height: 200px;
        margin-top:3%;
        margin-left:15%;

    }
    .img2 {
        margin-top:3%;
        margin-left:15%;
        width:1100px;
        height: 500px;

    }
</style>
<body>

    <div class="title">
        Kết quả sau khi nhấn <a > click here! </a> của trang session.
    </div>

    <?php 
        echo '<div class="ket_qua">Xin chào '. $_COOKIE["khach_hang"].'<br>';
        echo '<a href="cookieSession.php"> Click để quay về trang đăng nhập </a>';
        echo '</div>';
        echo '<img class="img1" src="https://img5.thuthuatphanmem.vn/uploads/2021/11/08/anh-binh-minh-2k_090540142.png">';
        echo '<img class="img2" src="https://anhdep123.com/wp-content/uploads/2020/04/c%E1%BA%A3nh-bi%E1%BB%83n-%C4%91%E1%BA%B9p-l%C3%BAc-b%C3%ACnh-minh-1-1024x640.jpg">';

    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>