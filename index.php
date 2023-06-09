<?php
require("connection.php");
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="util.css">
    <link rel="stylesheet" href="style.css">

    <title>ArtWall</title>
</head>

<body>
    <!-- header -->
    <?php include("main-header.php"); ?>
    
    <!-- ---------cat_header-------- -->
    <section>
        <div class="cat-header">
            <div class="cat-head">
                Explore Our Category
            </div>
            <div class="catalogue flex">
                <ul class="flex">
                    <li><a href="#" class="flex">Digital Art</a></li>
                    <li><a href="#" class="flex">Abstract Art</a></li>
                    <li><a href="#" class="flex">Sclupture</a></li>
                    <li><a href="#" class="flex">Oil Painting</a></li>
                    <li><a href="#" class="flex">Arcylic Art</a></li>
                </ul>
            </div>
        </div>
        
    </section>


    <!-- hero part -->

    <main>
        <div class="main-hero flex">
            <div id="screen" class="screen flex">
                <div id="hero-box-1" class="hero-box hero-box-1 flex">
                    <div class="screen-content-1 screen-content flex">
                        <h2>DIGITAL ART</h2>
                        <p class="small-bold-text">explore the amazing arts</p>
                        <a href="#" class="prime-btn screen-btn">EXPLORE</a>
                    </div>
                </div>
                <div id="hero-box-2" class="hero-box hero-box-2 flex">
                    <div class="screen-content-1 screen-content flex">
                        <h2>DIGITAL ART</h2>
                        <p class="small-bold-text">explore the amazing arts</p>
                        <a href="#" class="prime-btn screen-btn">EXPLORE</a>
                    </div>
                </div>
                <div id="hero-box-3" class="hero-box hero-box-3 flex">
                    <div class="screen-content-2 screen-content flex">
                        <h2>DIGITAL ART</h2>
                        <p class="small-bold-text">explore the amazing arts</p>
                        <a href="#" class="prime-btn screen-btn">EXPLORE</a>
                    </div>
                </div>
                <div id="hero-box-4" class="hero-box hero-box-4 flex">
                    <div class="screen-content-3 screen-content flex">
                        <h2>DIGITAL ART</h2>
                        <p class="small-bold-text">explore the amazing arts</p>
                        <a href="#" class="prime-btn screen-btn">EXPLORE</a>
                    </div>
                </div>
                
            </div>
            <div class="indicators">
                <span id="btn-1"></span>
                <span id="btn-2"></span>
                <span id="btn-3"></span>
                <span id="btn-4"></span>
            </div>

            <span id="left-btn"  class="left-right-btn"><ion-icon name="chevron-back-circle-outline"></ion-icon></span>
            <span id="right-btn" class="left-right-btn"><ion-icon name="chevron-forward-circle-outline"></ion-icon></span>

        </div>
    </main>
    <!-- cat-header -->



    <!-- category -->
    <section>
        <div class="cat-screen flex ">
            <div class="cat-card flex">
                <img src="digital-exaple.jpg" alt="" class="cat-img">
                <a href="#" class="prime-btn card-btn ">EXPLORE</a>
            </div>
            <div class="cat-card flex">
                <img src="wp4660315-paintings-wallpapers.jpg" alt="" class="cat-img">
                <a href="#" class="prime-btn card-btn">EXPLORE</a>
            </div>
            <div class="cat-card flex">
                <img src="img-2.jpg" alt="" class="cat-img">
                <a href="#" class="prime-btn card-btn">EXPLORE</a>
            </div>
            <div class="cat-card flex">
                <img src="artistic.jpg" alt="" class="cat-img">
                <a href="#" class="prime-btn card-btn">EXPLORE</a>
            </div>
        </div>
    </section>




    <script>

        
       var screen=document.getElementById("screen");

        var btn1 = document.getElementById("btn-1");
        var btn2= document.getElementById("btn-2");
        var btn3= document.getElementById("btn-3");
        var btn4= document.getElementById("btn-4");
        var left_btn=document.getElementById("left-btn");
        var right_btn=document.getElementById("right-btn");

        left_btn.onclick=function()
        {
            screen.style.transform="translateX(0%)";
        }
        right_btn.onclick=function()
        {
            screen.style.transform="translateX(100%)";
            

        }

        btn1.onclick=function()
        {
            screen.style.transform="translateX(0%)";
        }
        btn2.onclick=function()
        {
            screen.style.transform="translateX(-100%)";
        }
        btn3.onclick=function()
        {
            screen.style.transform="translateX(-200%)";
        }
        btn4.onclick=function()
        {
            screen.style.transform="translateX(-300%)";
        }

    </script>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>

</html>
?>