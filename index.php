<?php
require_once 'class/Functions.php';

$connection = new DBConnection();
$connection->getConnection();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Halisi - Musings of a Kenyan techie</title>
        <meta name="keywords" content="technology, programming, tutorials, startups, java, android, php, html5">
        <meta name="description" content="All about the technology ecosystems in and around Kenya">
        <meta name="author" content="VA">
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body>

        <div id="container" class="container-fluid">
            <div id="header">
                <div id="top-branding">
                    <h3>Halisi</h3>
                    <p>musings of a Kenyan techie</p>
                </div>
                <div id="top-users">
                    <p>Welcome guest</p>
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                </div>
                <div id="nav">
                    <ul>
                        <li>Home</li>
                        <li>Our Work</li>
                        <li>About</li>
                    </ul>
                    <form id="nav-search" method="POST" action="">
                        <input type="text" name="search" placeholder="Search...">
                    </form>
                </div>
            </div>
            <div id="banner">

            </div>
            <div id="content">
                <div id="left-content">
                    <!-- articles -->
                </div>
                <div id="right-content">
                    <!-- promotions -->
                </div>
            </div>
            <div id="footer"></div>
        </div>
    </body>

    <script src="js/index.js"></script>
</html>
