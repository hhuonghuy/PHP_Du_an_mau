<?php
    include ("connectdb.php");
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM `baiviet` WHERE 1');
    $stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<header>
    <div class="menu">
        <a href="/php/Du an mau/Asm/index.php" id="logo">HOOPERS</a>
        <nav>
            <ul>
                <li><a href="/php/Du an mau/Asm/index.php">TRANG CHỦ</a></li>
                <li><a href="">GIỚI THIỆU</a></li>
                <li><a href="/php/Du an mau/Asm/pages/teams.php">TEAMS</a></li>
                <li><a href="/php/Du an mau/Asm/pages/players.php">PLAYERS</a></li>
                <li><a href="">LIÊN HỆ</a></li>
                <li><a href="/php/Du an mau/Asm/pages/login.php">ĐĂNG NHẬP/ĐĂNG KÝ</a></li>
            </ul>
        </nav>
    </div>
</header>
<body>
    <div class="bag">
        <div class="banner">
            <img src="/php/Du an mau/Asm/images/Taking a flight.gif" alt="">
           </div>
           <div class="content">
            <div class="teams">
                <a href="">
                    <h2>TEAMS</h2>
                </a>
            </div>
            <div class="team">
                <div class="team1">
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/Golden-State-Warriors-Logo-Transparent.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/TORONTO.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/SeekPng.com_nba-playoffs-logo-png_498803.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/hornets.png" alt="">
                    </a>
                </div>
                <div class="team2">
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/lakers-logo-40415.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/CHICAGO.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/BUCKS.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/Mavericks.png" alt="">
                    </a>
                </div>
                <div class="team3">
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/<?php'$row['hinh']'?>" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/76ERS.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/portland.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/PHOENIX.png" alt="">
                    </a>
                </div>
            </div>
            <div class="players">
                <a href="">
                    <h2>PLAYERS</h2>
                </a>
                <div class="player1">
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/james.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/curry.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/kyrie.png" alt="">
                    </a>
                </div>
                <div class="player2">
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/durant.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/bryant_profile.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/lillard.png" alt="">
                    </a>
                </div>
                <div class="player3">
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/giannis.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/green.png" alt="">
                    </a>
                    <a href="">
                        <img src="/php/Du an mau/Asm/images/lavine.png" alt="">
                    </a>
                </div>
            </div>
           </div>
    </div>
</body>
<footer>
    <h3>
        HOOPERS © 2022. All rights reserved
    </h3>
</footer>
</html>