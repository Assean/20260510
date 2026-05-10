<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech</title><link rel="stylesheet" href="./assets/css/bootstrap.css">
</head>
<body>
    <div id="home" class='container'>
        <header class="site-header d-flex p-3 justify-content-between border-bottom">
            <div class="brand" style='border:1px solid #ccc;width:30px;height:30px;background:green'>
                <a href="" class="brand-link"></a>
            </div>
            <nav class="main-nav">
                <a href="javascript:loadpage('./index.php')" class="btn btn-info mx-2 home-link">首頁</a>
                <a href="javascript:loadpage('./front/games.php')" class="btn btn-info mx-2 games-link">遊戲</a>
                <a href="javascript:loadpage('./front/friends.php')" class="btn btn-info mx-2 friends-link">好友</a>
            </nav>
            <?php session_start();
                  if (!isset($_SESSION['user'])) {
            ?>
            <div class="user-area">
                <a href="javascript:loadpage('./index.php')" class="btn btn-primary mx-2 login-link">登入</a>
                <a href="javascript:loadpage('./front/register.php')" class="btn btn-success mx-2 register-link">註冊</a>
                <?php } else { ?>
                <div class="user-badge">
                    <a href="javascript:loadpage('./front/profile.php')" class="btn btn-success mx-2 profile-link">個人頁面入口</a>
                    <a href="javascript:loadpage('./front/logout.php')" class="btn btn-success mx-2 logout-link">登出</a>
                </div>
                <?php } ?>
            </div>
        </header>
        
    </div>
</body>
    <script>
        loadpage("./front/Home-main.php");
    </script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
</html>